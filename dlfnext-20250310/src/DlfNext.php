<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterCatalogRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterCatalogResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\BatchGrantPermissionsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\BatchGrantPermissionsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\BatchRevokePermissionsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\BatchRevokePermissionsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateCatalogRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateCatalogResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateRoleRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateRoleResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DeleteRoleRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DeleteRoleResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DropCatalogResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogSummaryResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogSummaryTrendRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogSummaryTrendResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogTokenResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetDatabaseSummaryResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetRegionStatusResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetRoleRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetRoleResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetTableSummaryResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetUserRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetUserResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GrantRoleToUsersRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GrantRoleToUsersResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListCatalogsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListCatalogsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListPartitionSummariesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListPartitionSummariesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListPermissionsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListPermissionsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListRolesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListRolesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListRoleUsersRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListRoleUsersResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 更新数据目录.
     *
     * @param request - AlterCatalogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AlterCatalogResponse
     *
     * @param string              $catalog
     * @param AlterCatalogRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return AlterCatalogResponse
     */
    public function alterCatalogWithOptions($catalog, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->removals) {
            @$body['removals'] = $request->removals;
        }

        if (null !== $request->updates) {
            @$body['updates'] = $request->updates;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AlterCatalog',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/catalogs/' . Url::percentEncode($catalog) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AlterCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新数据目录.
     *
     * @param request - AlterCatalogRequest
     *
     * @returns AlterCatalogResponse
     *
     * @param string              $catalog
     * @param AlterCatalogRequest $request
     *
     * @return AlterCatalogResponse
     */
    public function alterCatalog($catalog, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->alterCatalogWithOptions($catalog, $request, $headers, $runtime);
    }

    /**
     * 批量授权.
     *
     * @param request - BatchGrantPermissionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGrantPermissionsResponse
     *
     * @param string                       $catalogId
     * @param BatchGrantPermissionsRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return BatchGrantPermissionsResponse
     */
    public function batchGrantPermissionsWithOptions($catalogId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->permissions) {
            @$body['permissions'] = $request->permissions;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchGrantPermissions',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/permissions/' . Url::percentEncode($catalogId) . '/batchgrant',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchGrantPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量授权.
     *
     * @param request - BatchGrantPermissionsRequest
     *
     * @returns BatchGrantPermissionsResponse
     *
     * @param string                       $catalogId
     * @param BatchGrantPermissionsRequest $request
     *
     * @return BatchGrantPermissionsResponse
     */
    public function batchGrantPermissions($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchGrantPermissionsWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * 批量取消授权.
     *
     * @param request - BatchRevokePermissionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchRevokePermissionsResponse
     *
     * @param string                        $catalogId
     * @param BatchRevokePermissionsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return BatchRevokePermissionsResponse
     */
    public function batchRevokePermissionsWithOptions($catalogId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->permissions) {
            @$body['permissions'] = $request->permissions;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchRevokePermissions',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/permissions/' . Url::percentEncode($catalogId) . '/batchrevoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BatchRevokePermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量取消授权.
     *
     * @param request - BatchRevokePermissionsRequest
     *
     * @returns BatchRevokePermissionsResponse
     *
     * @param string                        $catalogId
     * @param BatchRevokePermissionsRequest $request
     *
     * @return BatchRevokePermissionsResponse
     */
    public function batchRevokePermissions($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->batchRevokePermissionsWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * 创建数据目录.
     *
     * @param request - CreateCatalogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCatalogResponse
     *
     * @param CreateCatalogRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateCatalogResponse
     */
    public function createCatalogWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->optimizationConfig) {
            @$body['optimizationConfig'] = $request->optimizationConfig;
        }

        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * 创建数据目录.
     *
     * @param request - CreateCatalogRequest
     *
     * @returns CreateCatalogResponse
     *
     * @param CreateCatalogRequest $request
     *
     * @return CreateCatalogResponse
     */
    public function createCatalog($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCatalogWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建角色.
     *
     * @param request - CreateRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRoleResponse
     *
     * @param CreateRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoleResponse
     */
    public function createRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->roleName) {
            @$body['roleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * 创建角色.
     *
     * @param request - CreateRoleRequest
     *
     * @returns CreateRoleResponse
     *
     * @param CreateRoleRequest $request
     *
     * @return CreateRoleResponse
     */
    public function createRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除角色.
     *
     * @param request - DeleteRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRoleResponse
     *
     * @param DeleteRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRoleResponse
     */
    public function deleteRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->rolePrincipal) {
            @$query['rolePrincipal'] = $request->rolePrincipal;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * 删除角色.
     *
     * @param request - DeleteRoleRequest
     *
     * @returns DeleteRoleResponse
     *
     * @param DeleteRoleRequest $request
     *
     * @return DeleteRoleResponse
     */
    public function deleteRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询 DLF 开通地域
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
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
     * 查询 DLF 开通地域
     *
     * @returns DescribeRegionsResponse
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * 创建数据湖Catalog.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DropCatalogResponse
     *
     * @param string         $catalog
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DropCatalogResponse
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
            'pathname' => '/dlf/v1/catalogs/' . Url::percentEncode($catalog) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DropCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数据湖Catalog.
     *
     * @returns DropCatalogResponse
     *
     * @param string $catalog
     *
     * @return DropCatalogResponse
     */
    public function dropCatalog($catalog)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dropCatalogWithOptions($catalog, $headers, $runtime);
    }

    /**
     * 查看数据湖Catalog.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCatalogResponse
     *
     * @param string         $catalog
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCatalogResponse
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
            'pathname' => '/dlf/v1/catalogs/' . Url::percentEncode($catalog) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看数据湖Catalog.
     *
     * @returns GetCatalogResponse
     *
     * @param string $catalog
     *
     * @return GetCatalogResponse
     */
    public function getCatalog($catalog)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogWithOptions($catalog, $headers, $runtime);
    }

    /**
     * 查看表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCatalogSummaryResponse
     *
     * @param string         $catalogId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCatalogSummaryResponse
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
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/storage-summary',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCatalogSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看表.
     *
     * @returns GetCatalogSummaryResponse
     *
     * @param string $catalogId
     *
     * @return GetCatalogSummaryResponse
     */
    public function getCatalogSummary($catalogId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogSummaryWithOptions($catalogId, $headers, $runtime);
    }

    /**
     * 查看表.
     *
     * @param request - GetCatalogSummaryTrendRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCatalogSummaryTrendResponse
     *
     * @param string                        $catalogId
     * @param GetCatalogSummaryTrendRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetCatalogSummaryTrendResponse
     */
    public function getCatalogSummaryTrendWithOptions($catalogId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['endDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['startDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCatalogSummaryTrend',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/storage-summary/trend',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCatalogSummaryTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看表.
     *
     * @param request - GetCatalogSummaryTrendRequest
     *
     * @returns GetCatalogSummaryTrendResponse
     *
     * @param string                        $catalogId
     * @param GetCatalogSummaryTrendRequest $request
     *
     * @return GetCatalogSummaryTrendResponse
     */
    public function getCatalogSummaryTrend($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogSummaryTrendWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * 获取数据湖Catalog的临时访问凭证
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCatalogTokenResponse
     *
     * @param string         $catalog
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCatalogTokenResponse
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
            'pathname' => '/dlf/v1/catalogs/' . Url::percentEncode($catalog) . '/token',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCatalogTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取数据湖Catalog的临时访问凭证
     *
     * @returns GetCatalogTokenResponse
     *
     * @param string $catalog
     *
     * @return GetCatalogTokenResponse
     */
    public function getCatalogToken($catalog)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogTokenWithOptions($catalog, $headers, $runtime);
    }

    /**
     * 查看表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatabaseSummaryResponse
     *
     * @param string         $catalogId
     * @param string         $database
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDatabaseSummaryResponse
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
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '/storage-summary',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDatabaseSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看表.
     *
     * @returns GetDatabaseSummaryResponse
     *
     * @param string $catalogId
     * @param string $database
     *
     * @return GetDatabaseSummaryResponse
     */
    public function getDatabaseSummary($catalogId, $database)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatabaseSummaryWithOptions($catalogId, $database, $headers, $runtime);
    }

    /**
     * 查询 DLF 当前地域开通状态
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegionStatusResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRegionStatusResponse
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
     * 查询 DLF 当前地域开通状态
     *
     * @returns GetRegionStatusResponse
     *
     * @return GetRegionStatusResponse
     */
    public function getRegionStatus()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRegionStatusWithOptions($headers, $runtime);
    }

    /**
     * 获取角色.
     *
     * @param request - GetRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRoleResponse
     *
     * @param GetRoleRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRoleResponse
     */
    public function getRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->rolePrincipal) {
            @$query['rolePrincipal'] = $request->rolePrincipal;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * 获取角色.
     *
     * @param request - GetRoleRequest
     *
     * @returns GetRoleResponse
     *
     * @param GetRoleRequest $request
     *
     * @return GetRoleResponse
     */
    public function getRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * 查看表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableSummaryResponse
     *
     * @param string         $catalogId
     * @param string         $database
     * @param string         $table
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTableSummaryResponse
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
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '/tables/' . Url::percentEncode($table) . '/storage-summary',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTableSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看表.
     *
     * @returns GetTableSummaryResponse
     *
     * @param string $catalogId
     * @param string $database
     * @param string $table
     *
     * @return GetTableSummaryResponse
     */
    public function getTableSummary($catalogId, $database, $table)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableSummaryWithOptions($catalogId, $database, $table, $headers, $runtime);
    }

    /**
     * 获取用户.
     *
     * @param request - GetUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userPrincipal) {
            @$query['userPrincipal'] = $request->userPrincipal;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * 获取用户.
     *
     * @param request - GetUserRequest
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量授予角色权限给用户.
     *
     * @param request - GrantRoleToUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantRoleToUsersResponse
     *
     * @param GrantRoleToUsersRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GrantRoleToUsersResponse
     */
    public function grantRoleToUsersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->rolePrincipal) {
            @$body['rolePrincipal'] = $request->rolePrincipal;
        }

        if (null !== $request->userPrincipals) {
            @$body['userPrincipals'] = $request->userPrincipals;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * 批量授予角色权限给用户.
     *
     * @param request - GrantRoleToUsersRequest
     *
     * @returns GrantRoleToUsersResponse
     *
     * @param GrantRoleToUsersRequest $request
     *
     * @return GrantRoleToUsersResponse
     */
    public function grantRoleToUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantRoleToUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * 查看数据目录列表.
     *
     * @param request - ListCatalogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCatalogsResponse
     *
     * @param ListCatalogsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListCatalogsResponse
     */
    public function listCatalogsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->catalogNamePattern) {
            @$query['catalogNamePattern'] = $request->catalogNamePattern;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->pageToken) {
            @$query['pageToken'] = $request->pageToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * 查看数据目录列表.
     *
     * @param request - ListCatalogsRequest
     *
     * @returns ListCatalogsResponse
     *
     * @param ListCatalogsRequest $request
     *
     * @return ListCatalogsResponse
     */
    public function listCatalogs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCatalogsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查看表.
     *
     * @param request - ListPartitionSummariesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPartitionSummariesResponse
     *
     * @param string                        $catalogId
     * @param string                        $database
     * @param string                        $table
     * @param ListPartitionSummariesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListPartitionSummariesResponse
     */
    public function listPartitionSummariesWithOptions($catalogId, $database, $table, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->pageToken) {
            @$query['pageToken'] = $request->pageToken;
        }

        if (null !== $request->partitionNamePattern) {
            @$query['partitionNamePattern'] = $request->partitionNamePattern;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPartitionSummaries',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '/tables/' . Url::percentEncode($table) . '/partitions/storage-summary',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPartitionSummariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看表.
     *
     * @param request - ListPartitionSummariesRequest
     *
     * @returns ListPartitionSummariesResponse
     *
     * @param string                        $catalogId
     * @param string                        $database
     * @param string                        $table
     * @param ListPartitionSummariesRequest $request
     *
     * @return ListPartitionSummariesResponse
     */
    public function listPartitionSummaries($catalogId, $database, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPartitionSummariesWithOptions($catalogId, $database, $table, $request, $headers, $runtime);
    }

    /**
     * 获取指定资源或指定Principal的权限信息.
     *
     * @param request - ListPermissionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPermissionsResponse
     *
     * @param string                 $catalogId
     * @param ListPermissionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListPermissionsResponse
     */
    public function listPermissionsWithOptions($catalogId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->database) {
            @$query['database'] = $request->database;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->pageToken) {
            @$query['pageToken'] = $request->pageToken;
        }

        if (null !== $request->principal) {
            @$query['principal'] = $request->principal;
        }

        if (null !== $request->resourceType) {
            @$query['resourceType'] = $request->resourceType;
        }

        if (null !== $request->table) {
            @$query['table'] = $request->table;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPermissions',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/permissions/' . Url::percentEncode($catalogId) . '/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取指定资源或指定Principal的权限信息.
     *
     * @param request - ListPermissionsRequest
     *
     * @returns ListPermissionsResponse
     *
     * @param string                 $catalogId
     * @param ListPermissionsRequest $request
     *
     * @return ListPermissionsResponse
     */
    public function listPermissions($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listPermissionsWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * 获取角色用户列表.
     *
     * @param request - ListRoleUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRoleUsersResponse
     *
     * @param ListRoleUsersRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListRoleUsersResponse
     */
    public function listRoleUsersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->pageToken) {
            @$query['pageToken'] = $request->pageToken;
        }

        if (null !== $request->rolePrincipal) {
            @$query['rolePrincipal'] = $request->rolePrincipal;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * 获取角色用户列表.
     *
     * @param request - ListRoleUsersRequest
     *
     * @returns ListRoleUsersResponse
     *
     * @param ListRoleUsersRequest $request
     *
     * @return ListRoleUsersResponse
     */
    public function listRoleUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRoleUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取角色列表.
     *
     * @param request - ListRolesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRolesResponse
     *
     * @param ListRolesRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->pageToken) {
            @$query['pageToken'] = $request->pageToken;
        }

        if (null !== $request->roleName) {
            @$query['roleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * 获取角色列表.
     *
     * @param request - ListRolesRequest
     *
     * @returns ListRolesResponse
     *
     * @param ListRolesRequest $request
     *
     * @return ListRolesResponse
     */
    public function listRoles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRolesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取用户角色列表.
     *
     * @param request - ListUserRolesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserRolesResponse
     *
     * @param ListUserRolesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListUserRolesResponse
     */
    public function listUserRolesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->pageToken) {
            @$query['pageToken'] = $request->pageToken;
        }

        if (null !== $request->userPrincipal) {
            @$query['userPrincipal'] = $request->userPrincipal;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * 获取用户角色列表.
     *
     * @param request - ListUserRolesRequest
     *
     * @returns ListUserRolesResponse
     *
     * @param ListUserRolesRequest $request
     *
     * @return ListUserRolesResponse
     */
    public function listUserRoles($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserRolesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取用户列表.
     *
     * @param request - ListUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListUsersResponse
     */
    public function listUsersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->pageToken) {
            @$query['pageToken'] = $request->pageToken;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        if (null !== $request->userName) {
            @$query['userName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * 获取用户列表.
     *
     * @param request - ListUsersRequest
     *
     * @returns ListUsersResponse
     *
     * @param ListUsersRequest $request
     *
     * @return ListUsersResponse
     */
    public function listUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量取消授予角色权限给用户.
     *
     * @param request - RevokeRoleFromUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeRoleFromUsersResponse
     *
     * @param RevokeRoleFromUsersRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RevokeRoleFromUsersResponse
     */
    public function revokeRoleFromUsersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->rolePrincipal) {
            @$body['rolePrincipal'] = $request->rolePrincipal;
        }

        if (null !== $request->userPrincipals) {
            @$body['userPrincipals'] = $request->userPrincipals;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * 批量取消授予角色权限给用户.
     *
     * @param request - RevokeRoleFromUsersRequest
     *
     * @returns RevokeRoleFromUsersResponse
     *
     * @param RevokeRoleFromUsersRequest $request
     *
     * @return RevokeRoleFromUsersResponse
     */
    public function revokeRoleFromUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeRoleFromUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * 订阅当前地域的 DLF.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubscribeResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SubscribeResponse
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
     * 订阅当前地域的 DLF.
     *
     * @returns SubscribeResponse
     *
     * @return SubscribeResponse
     */
    public function subscribe()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->subscribeWithOptions($headers, $runtime);
    }

    /**
     * 更新角色.
     *
     * @param request - UpdateRoleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRoleResponse
     *
     * @param UpdateRoleRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateRoleResponse
     */
    public function updateRoleWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->rolePrincipal) {
            @$body['rolePrincipal'] = $request->rolePrincipal;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * 更新角色.
     *
     * @param request - UpdateRoleRequest
     *
     * @returns UpdateRoleResponse
     *
     * @param UpdateRoleRequest $request
     *
     * @return UpdateRoleResponse
     */
    public function updateRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新角色用户.
     *
     * @param request - UpdateRoleUsersRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRoleUsersResponse
     *
     * @param UpdateRoleUsersRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateRoleUsersResponse
     */
    public function updateRoleUsersWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->rolePrincipal) {
            @$body['rolePrincipal'] = $request->rolePrincipal;
        }

        if (null !== $request->userPrincipals) {
            @$body['userPrincipals'] = $request->userPrincipals;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
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
     * 更新角色用户.
     *
     * @param request - UpdateRoleUsersRequest
     *
     * @returns UpdateRoleUsersResponse
     *
     * @param UpdateRoleUsersRequest $request
     *
     * @return UpdateRoleUsersResponse
     */
    public function updateRoleUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateRoleUsersWithOptions($request, $headers, $runtime);
    }
}
