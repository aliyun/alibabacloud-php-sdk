<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterCatalogRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterCatalogResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterDatabaseRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterDatabaseResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterReceiverRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterReceiverResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterShareReceiversRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterShareReceiversResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterShareRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterShareResourcesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterShareResourcesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\AlterShareResponse;
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
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateReceiverRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateReceiverResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateRoleRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateRoleResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateShareRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateShareResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateTableRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\CreateTableResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DeleteRoleRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DeleteRoleResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DropCatalogResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DropDatabaseResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DropReceiverResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DropShareResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\DropTableResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogByIdResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogSummaryRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogSummaryResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogSummaryTrendRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogSummaryTrendResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetCatalogTokenResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetDatabaseResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetDatabaseSummaryRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetDatabaseSummaryResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetIcebergNamespaceResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetIcebergTableResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetReceiverResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetRegionStatusResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetRoleRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetRoleResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetShareResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetTableResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetTableSnapshotResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\GetTableSummaryRequest;
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
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListIcebergNamespaceDetailsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListIcebergNamespaceDetailsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListIcebergSnapshotsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListIcebergSnapshotsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListIcebergTableDetailsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListIcebergTableDetailsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListPartitionSummariesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListPartitionSummariesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListPermissionsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListPermissionsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListProvidedSharesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListProvidedSharesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListReceivedSharesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListReceivedSharesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListReceiversRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListReceiversResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListRolesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListRolesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListRoleUsersRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListRoleUsersResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListShareReceiversRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListShareReceiversResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListShareResourcesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListShareResourcesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListSnapshotsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListSnapshotsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListTableDetailsRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListTableDetailsResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListTablesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListTablesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListUserRolesRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListUserRolesResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListUsersRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\ListUsersResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\RefreshUserSyncResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\RevokeRoleFromUsersRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\RevokeRoleFromUsersResponse;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\RollbackTableRequest;
use AlibabaCloud\SDK\DlfNext\V20250310\Models\RollbackTableResponse;
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
     * 更新数据库.
     *
     * @param request - AlterDatabaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AlterDatabaseResponse
     *
     * @param string               $catalogId
     * @param string               $database
     * @param AlterDatabaseRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AlterDatabaseResponse
     */
    public function alterDatabaseWithOptions($catalogId, $database, $request, $headers, $runtime)
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
            'action' => 'AlterDatabase',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return AlterDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新数据库.
     *
     * @param request - AlterDatabaseRequest
     *
     * @returns AlterDatabaseResponse
     *
     * @param string               $catalogId
     * @param string               $database
     * @param AlterDatabaseRequest $request
     *
     * @return AlterDatabaseResponse
     */
    public function alterDatabase($catalogId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->alterDatabaseWithOptions($catalogId, $database, $request, $headers, $runtime);
    }

    /**
     * 更新接收者.
     *
     * @param request - AlterReceiverRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AlterReceiverResponse
     *
     * @param string               $receiver
     * @param AlterReceiverRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return AlterReceiverResponse
     */
    public function alterReceiverWithOptions($receiver, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->comment) {
            @$body['comment'] = $request->comment;
        }

        if (null !== $request->receiverName) {
            @$body['receiverName'] = $request->receiverName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AlterReceiver',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/receivers/' . Url::percentEncode($receiver) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return AlterReceiverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新接收者.
     *
     * @param request - AlterReceiverRequest
     *
     * @returns AlterReceiverResponse
     *
     * @param string               $receiver
     * @param AlterReceiverRequest $request
     *
     * @return AlterReceiverResponse
     */
    public function alterReceiver($receiver, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->alterReceiverWithOptions($receiver, $request, $headers, $runtime);
    }

    /**
     * 更新共享.
     *
     * @param request - AlterShareRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AlterShareResponse
     *
     * @param string            $share
     * @param AlterShareRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AlterShareResponse
     */
    public function alterShareWithOptions($share, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->comment) {
            @$body['comment'] = $request->comment;
        }

        if (null !== $request->enableWrite) {
            @$body['enableWrite'] = $request->enableWrite;
        }

        if (null !== $request->shareName) {
            @$body['shareName'] = $request->shareName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AlterShare',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/shares/' . Url::percentEncode($share) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return AlterShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新共享.
     *
     * @param request - AlterShareRequest
     *
     * @returns AlterShareResponse
     *
     * @param string            $share
     * @param AlterShareRequest $request
     *
     * @return AlterShareResponse
     */
    public function alterShare($share, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->alterShareWithOptions($share, $request, $headers, $runtime);
    }

    /**
     * 更新共享中的接收者.
     *
     * @param request - AlterShareReceiversRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AlterShareReceiversResponse
     *
     * @param string                     $share
     * @param AlterShareReceiversRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return AlterShareReceiversResponse
     */
    public function alterShareReceiversWithOptions($share, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->addedReceivers) {
            @$body['addedReceivers'] = $request->addedReceivers;
        }

        if (null !== $request->removedReceivers) {
            @$body['removedReceivers'] = $request->removedReceivers;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AlterShareReceivers',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/shares/' . Url::percentEncode($share) . '/receivers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return AlterShareReceiversResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新共享中的接收者.
     *
     * @param request - AlterShareReceiversRequest
     *
     * @returns AlterShareReceiversResponse
     *
     * @param string                     $share
     * @param AlterShareReceiversRequest $request
     *
     * @return AlterShareReceiversResponse
     */
    public function alterShareReceivers($share, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->alterShareReceiversWithOptions($share, $request, $headers, $runtime);
    }

    /**
     * 更改共享资源.
     *
     * @param request - AlterShareResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AlterShareResourcesResponse
     *
     * @param string                     $share
     * @param AlterShareResourcesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return AlterShareResourcesResponse
     */
    public function alterShareResourcesWithOptions($share, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->catalogId) {
            @$body['catalogId'] = $request->catalogId;
        }

        if (null !== $request->shareResourceList) {
            @$body['shareResourceList'] = $request->shareResourceList;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AlterShareResources',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/shares/' . Url::percentEncode($share) . '/resources',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return AlterShareResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更改共享资源.
     *
     * @param request - AlterShareResourcesRequest
     *
     * @returns AlterShareResourcesResponse
     *
     * @param string                     $share
     * @param AlterShareResourcesRequest $request
     *
     * @return AlterShareResourcesResponse
     */
    public function alterShareResources($share, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->alterShareResourcesWithOptions($share, $request, $headers, $runtime);
    }

    /**
     * 更改Table.
     *
     * @param request - AlterTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AlterTableResponse
     *
     * @param string            $catalogId
     * @param string            $database
     * @param string            $table
     * @param AlterTableRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return AlterTableResponse
     */
    public function alterTableWithOptions($catalogId, $database, $table, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->changes) {
            @$body['changes'] = $request->changes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AlterTable',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '/tables/' . Url::percentEncode($table) . '',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return AlterTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更改Table.
     *
     * @param request - AlterTableRequest
     *
     * @returns AlterTableResponse
     *
     * @param string            $catalogId
     * @param string            $database
     * @param string            $table
     * @param AlterTableRequest $request
     *
     * @return AlterTableResponse
     */
    public function alterTable($catalogId, $database, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->alterTableWithOptions($catalogId, $database, $table, $request, $headers, $runtime);
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
        if (null !== $request->isShared) {
            @$body['isShared'] = $request->isShared;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        if (null !== $request->shareId) {
            @$body['shareId'] = $request->shareId;
        }

        if (null !== $request->type) {
            @$body['type'] = $request->type;
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
     * 创建数据库.
     *
     * @param request - CreateDatabaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDatabaseResponse
     *
     * @param string                $catalogId
     * @param CreateDatabaseRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabaseWithOptions($catalogId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->options) {
            @$body['options'] = $request->options;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDatabase',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建数据库.
     *
     * @param request - CreateDatabaseRequest
     *
     * @returns CreateDatabaseResponse
     *
     * @param string                $catalogId
     * @param CreateDatabaseRequest $request
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabase($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatabaseWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * 创建接收者.
     *
     * @param request - CreateReceiverRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateReceiverResponse
     *
     * @param CreateReceiverRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateReceiverResponse
     */
    public function createReceiverWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->comment) {
            @$body['comment'] = $request->comment;
        }

        if (null !== $request->receiverName) {
            @$body['receiverName'] = $request->receiverName;
        }

        if (null !== $request->receiverTenantId) {
            @$body['receiverTenantId'] = $request->receiverTenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateReceiver',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/receivers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateReceiverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建接收者.
     *
     * @param request - CreateReceiverRequest
     *
     * @returns CreateReceiverResponse
     *
     * @param CreateReceiverRequest $request
     *
     * @return CreateReceiverResponse
     */
    public function createReceiver($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createReceiverWithOptions($request, $headers, $runtime);
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
     * 创建共享.
     *
     * @param request - CreateShareRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateShareResponse
     *
     * @param CreateShareRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateShareResponse
     */
    public function createShareWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->comment) {
            @$body['comment'] = $request->comment;
        }

        if (null !== $request->enableWrite) {
            @$body['enableWrite'] = $request->enableWrite;
        }

        if (null !== $request->shareName) {
            @$body['shareName'] = $request->shareName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateShare',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/shares',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建共享.
     *
     * @param request - CreateShareRequest
     *
     * @returns CreateShareResponse
     *
     * @param CreateShareRequest $request
     *
     * @return CreateShareResponse
     */
    public function createShare($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createShareWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建表.
     *
     * @param request - CreateTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTableResponse
     *
     * @param string             $catalogId
     * @param string             $database
     * @param CreateTableRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateTableResponse
     */
    public function createTableWithOptions($catalogId, $database, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identifier) {
            @$body['identifier'] = $request->identifier;
        }

        if (null !== $request->schema) {
            @$body['schema'] = $request->schema;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTable',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '/tables',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return CreateTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建表.
     *
     * @param request - CreateTableRequest
     *
     * @returns CreateTableResponse
     *
     * @param string             $catalogId
     * @param string             $database
     * @param CreateTableRequest $request
     *
     * @return CreateTableResponse
     */
    public function createTable($catalogId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTableWithOptions($catalogId, $database, $request, $headers, $runtime);
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
     * 删除数据库.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DropDatabaseResponse
     *
     * @param string         $catalogId
     * @param string         $database
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DropDatabaseResponse
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
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DropDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除数据库.
     *
     * @returns DropDatabaseResponse
     *
     * @param string $catalogId
     * @param string $database
     *
     * @return DropDatabaseResponse
     */
    public function dropDatabase($catalogId, $database)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dropDatabaseWithOptions($catalogId, $database, $headers, $runtime);
    }

    /**
     * 删除接收者.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DropReceiverResponse
     *
     * @param string         $receiver
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DropReceiverResponse
     */
    public function dropReceiverWithOptions($receiver, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DropReceiver',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/receivers/' . Url::percentEncode($receiver) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DropReceiverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除接收者.
     *
     * @returns DropReceiverResponse
     *
     * @param string $receiver
     *
     * @return DropReceiverResponse
     */
    public function dropReceiver($receiver)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dropReceiverWithOptions($receiver, $headers, $runtime);
    }

    /**
     * 删除共享.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DropShareResponse
     *
     * @param string         $share
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DropShareResponse
     */
    public function dropShareWithOptions($share, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DropShare',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/shares/' . Url::percentEncode($share) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DropShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除共享.
     *
     * @returns DropShareResponse
     *
     * @param string $share
     *
     * @return DropShareResponse
     */
    public function dropShare($share)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dropShareWithOptions($share, $headers, $runtime);
    }

    /**
     * 删除表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DropTableResponse
     *
     * @param string         $catalogId
     * @param string         $database
     * @param string         $table
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DropTableResponse
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
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '/tables/' . Url::percentEncode($table) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return DropTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除表.
     *
     * @returns DropTableResponse
     *
     * @param string $catalogId
     * @param string $database
     * @param string $table
     *
     * @return DropTableResponse
     */
    public function dropTable($catalogId, $database, $table)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dropTableWithOptions($catalogId, $database, $table, $headers, $runtime);
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
     * 查看数据湖Catalog.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCatalogByIdResponse
     *
     * @param string         $id
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCatalogByIdResponse
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
            'pathname' => '/dlf/v1/catalogs/id/' . Url::percentEncode($id) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCatalogByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看数据湖Catalog.
     *
     * @returns GetCatalogByIdResponse
     *
     * @param string $id
     *
     * @return GetCatalogByIdResponse
     */
    public function getCatalogById($id)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogByIdWithOptions($id, $headers, $runtime);
    }

    /**
     * 查看表.
     *
     * @param request - GetCatalogSummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCatalogSummaryResponse
     *
     * @param string                   $catalogId
     * @param GetCatalogSummaryRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetCatalogSummaryResponse
     */
    public function getCatalogSummaryWithOptions($catalogId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->date) {
            @$query['date'] = $request->date;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * @param request - GetCatalogSummaryRequest
     *
     * @returns GetCatalogSummaryResponse
     *
     * @param string                   $catalogId
     * @param GetCatalogSummaryRequest $request
     *
     * @return GetCatalogSummaryResponse
     */
    public function getCatalogSummary($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCatalogSummaryWithOptions($catalogId, $request, $headers, $runtime);
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
     * 查看数据库.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatabaseResponse
     *
     * @param string         $catalogId
     * @param string         $database
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDatabaseResponse
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
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看数据库.
     *
     * @returns GetDatabaseResponse
     *
     * @param string $catalogId
     * @param string $database
     *
     * @return GetDatabaseResponse
     */
    public function getDatabase($catalogId, $database)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatabaseWithOptions($catalogId, $database, $headers, $runtime);
    }

    /**
     * 查看表.
     *
     * @param request - GetDatabaseSummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDatabaseSummaryResponse
     *
     * @param string                    $catalogId
     * @param string                    $database
     * @param GetDatabaseSummaryRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetDatabaseSummaryResponse
     */
    public function getDatabaseSummaryWithOptions($catalogId, $database, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->date) {
            @$query['date'] = $request->date;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * @param request - GetDatabaseSummaryRequest
     *
     * @returns GetDatabaseSummaryResponse
     *
     * @param string                    $catalogId
     * @param string                    $database
     * @param GetDatabaseSummaryRequest $request
     *
     * @return GetDatabaseSummaryResponse
     */
    public function getDatabaseSummary($catalogId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDatabaseSummaryWithOptions($catalogId, $database, $request, $headers, $runtime);
    }

    /**
     * 查看iceberg数据库.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIcebergNamespaceResponse
     *
     * @param string         $catalogId
     * @param string         $namespace_
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIcebergNamespaceResponse
     */
    public function getIcebergNamespaceWithOptions($catalogId, $namespace_, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIcebergNamespace',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/iceberg/dlf/v1/' . Url::percentEncode($catalogId) . '/namespaces/' . Url::percentEncode($namespace_) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIcebergNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看iceberg数据库.
     *
     * @returns GetIcebergNamespaceResponse
     *
     * @param string $catalogId
     * @param string $namespace_
     *
     * @return GetIcebergNamespaceResponse
     */
    public function getIcebergNamespace($catalogId, $namespace_)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIcebergNamespaceWithOptions($catalogId, $namespace_, $headers, $runtime);
    }

    /**
     * 查看表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIcebergTableResponse
     *
     * @param string         $catalogId
     * @param string         $namespace_
     * @param string         $table
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIcebergTableResponse
     */
    public function getIcebergTableWithOptions($catalogId, $namespace_, $table, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetIcebergTable',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/iceberg/dlf/v1/' . Url::percentEncode($catalogId) . '/namespaces/' . Url::percentEncode($namespace_) . '/tables/' . Url::percentEncode($table) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIcebergTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看表.
     *
     * @returns GetIcebergTableResponse
     *
     * @param string $catalogId
     * @param string $namespace_
     * @param string $table
     *
     * @return GetIcebergTableResponse
     */
    public function getIcebergTable($catalogId, $namespace_, $table)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIcebergTableWithOptions($catalogId, $namespace_, $table, $headers, $runtime);
    }

    /**
     * 获取接收者.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReceiverResponse
     *
     * @param string         $receiver
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetReceiverResponse
     */
    public function getReceiverWithOptions($receiver, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetReceiver',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/receivers/' . Url::percentEncode($receiver) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetReceiverResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取接收者.
     *
     * @returns GetReceiverResponse
     *
     * @param string $receiver
     *
     * @return GetReceiverResponse
     */
    public function getReceiver($receiver)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getReceiverWithOptions($receiver, $headers, $runtime);
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
     * 获取共享.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetShareResponse
     *
     * @param string         $share
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetShareResponse
     */
    public function getShareWithOptions($share, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetShare',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/shares/' . Url::percentEncode($share) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetShareResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取共享.
     *
     * @returns GetShareResponse
     *
     * @param string $share
     *
     * @return GetShareResponse
     */
    public function getShare($share)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getShareWithOptions($share, $headers, $runtime);
    }

    /**
     * 查看表.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableResponse
     *
     * @param string         $catalogId
     * @param string         $database
     * @param string         $table
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTableResponse
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
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '/tables/' . Url::percentEncode($table) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看表.
     *
     * @returns GetTableResponse
     *
     * @param string $catalogId
     * @param string $database
     * @param string $table
     *
     * @return GetTableResponse
     */
    public function getTable($catalogId, $database, $table)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableWithOptions($catalogId, $database, $table, $headers, $runtime);
    }

    /**
     * 查看表快照.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableSnapshotResponse
     *
     * @param string         $catalogId
     * @param string         $database
     * @param string         $table
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTableSnapshotResponse
     */
    public function getTableSnapshotWithOptions($catalogId, $database, $table, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetTableSnapshot',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '/tables/' . Url::percentEncode($table) . '/snapshot',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTableSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看表快照.
     *
     * @returns GetTableSnapshotResponse
     *
     * @param string $catalogId
     * @param string $database
     * @param string $table
     *
     * @return GetTableSnapshotResponse
     */
    public function getTableSnapshot($catalogId, $database, $table)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableSnapshotWithOptions($catalogId, $database, $table, $headers, $runtime);
    }

    /**
     * 查看表.
     *
     * @param request - GetTableSummaryRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTableSummaryResponse
     *
     * @param string                 $catalogId
     * @param string                 $database
     * @param string                 $table
     * @param GetTableSummaryRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetTableSummaryResponse
     */
    public function getTableSummaryWithOptions($catalogId, $database, $table, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->date) {
            @$query['date'] = $request->date;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
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
     * @param request - GetTableSummaryRequest
     *
     * @returns GetTableSummaryResponse
     *
     * @param string                 $catalogId
     * @param string                 $database
     * @param string                 $table
     * @param GetTableSummaryRequest $request
     *
     * @return GetTableSummaryResponse
     */
    public function getTableSummary($catalogId, $database, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTableSummaryWithOptions($catalogId, $database, $table, $request, $headers, $runtime);
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
     * 查看数据库列表.
     *
     * @param request - ListDatabaseDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatabaseDetailsResponse
     *
     * @param string                     $catalogId
     * @param ListDatabaseDetailsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDatabaseDetailsResponse
     */
    public function listDatabaseDetailsWithOptions($catalogId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->databaseNamePattern) {
            @$query['databaseNamePattern'] = $request->databaseNamePattern;
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
            'action' => 'ListDatabaseDetails',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/database-details',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDatabaseDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看数据库列表.
     *
     * @param request - ListDatabaseDetailsRequest
     *
     * @returns ListDatabaseDetailsResponse
     *
     * @param string                     $catalogId
     * @param ListDatabaseDetailsRequest $request
     *
     * @return ListDatabaseDetailsResponse
     */
    public function listDatabaseDetails($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatabaseDetailsWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * 查看数据库列表.
     *
     * @param request - ListDatabasesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatabasesResponse
     *
     * @param string               $catalogId
     * @param ListDatabasesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListDatabasesResponse
     */
    public function listDatabasesWithOptions($catalogId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->databaseNamePattern) {
            @$query['databaseNamePattern'] = $request->databaseNamePattern;
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
            'action' => 'ListDatabases',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看数据库列表.
     *
     * @param request - ListDatabasesRequest
     *
     * @returns ListDatabasesResponse
     *
     * @param string               $catalogId
     * @param ListDatabasesRequest $request
     *
     * @return ListDatabasesResponse
     */
    public function listDatabases($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatabasesWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * 查看iceberg数据库列表.
     *
     * @param request - ListIcebergNamespaceDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIcebergNamespaceDetailsResponse
     *
     * @param string                             $catalogId
     * @param ListIcebergNamespaceDetailsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListIcebergNamespaceDetailsResponse
     */
    public function listIcebergNamespaceDetailsWithOptions($catalogId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->namespaceNamePattern) {
            @$query['namespaceNamePattern'] = $request->namespaceNamePattern;
        }

        if (null !== $request->pageToken) {
            @$query['pageToken'] = $request->pageToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIcebergNamespaceDetails',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/iceberg/dlf/v1/' . Url::percentEncode($catalogId) . '/namespace-details',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIcebergNamespaceDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看iceberg数据库列表.
     *
     * @param request - ListIcebergNamespaceDetailsRequest
     *
     * @returns ListIcebergNamespaceDetailsResponse
     *
     * @param string                             $catalogId
     * @param ListIcebergNamespaceDetailsRequest $request
     *
     * @return ListIcebergNamespaceDetailsResponse
     */
    public function listIcebergNamespaceDetails($catalogId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIcebergNamespaceDetailsWithOptions($catalogId, $request, $headers, $runtime);
    }

    /**
     * 查看iceberg表快照列表.
     *
     * @param request - ListIcebergSnapshotsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIcebergSnapshotsResponse
     *
     * @param string                      $catalogId
     * @param string                      $namespace_
     * @param string                      $table
     * @param ListIcebergSnapshotsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListIcebergSnapshotsResponse
     */
    public function listIcebergSnapshotsWithOptions($catalogId, $namespace_, $table, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'ListIcebergSnapshots',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/iceberg/dlf/v1/' . Url::percentEncode($catalogId) . '/namespaces/' . Url::percentEncode($namespace_) . '/tables/' . Url::percentEncode($table) . '/snapshots',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIcebergSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看iceberg表快照列表.
     *
     * @param request - ListIcebergSnapshotsRequest
     *
     * @returns ListIcebergSnapshotsResponse
     *
     * @param string                      $catalogId
     * @param string                      $namespace_
     * @param string                      $table
     * @param ListIcebergSnapshotsRequest $request
     *
     * @return ListIcebergSnapshotsResponse
     */
    public function listIcebergSnapshots($catalogId, $namespace_, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIcebergSnapshotsWithOptions($catalogId, $namespace_, $table, $request, $headers, $runtime);
    }

    /**
     * 查看iceberg表详情列表.
     *
     * @param request - ListIcebergTableDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListIcebergTableDetailsResponse
     *
     * @param string                         $catalogId
     * @param string                         $namespace_
     * @param ListIcebergTableDetailsRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListIcebergTableDetailsResponse
     */
    public function listIcebergTableDetailsWithOptions($catalogId, $namespace_, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->pageToken) {
            @$query['pageToken'] = $request->pageToken;
        }

        if (null !== $request->tableNamePattern) {
            @$query['tableNamePattern'] = $request->tableNamePattern;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListIcebergTableDetails',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/iceberg/dlf/v1/' . Url::percentEncode($catalogId) . '/namespaces/' . Url::percentEncode($namespace_) . '/table-details',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListIcebergTableDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看iceberg表详情列表.
     *
     * @param request - ListIcebergTableDetailsRequest
     *
     * @returns ListIcebergTableDetailsResponse
     *
     * @param string                         $catalogId
     * @param string                         $namespace_
     * @param ListIcebergTableDetailsRequest $request
     *
     * @return ListIcebergTableDetailsResponse
     */
    public function listIcebergTableDetails($catalogId, $namespace_, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listIcebergTableDetailsWithOptions($catalogId, $namespace_, $request, $headers, $runtime);
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

        if (null !== $request->function) {
            @$query['function'] = $request->function;
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

        if (null !== $request->view) {
            @$query['view'] = $request->view;
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
     * 获取提供的共享列表.
     *
     * @param request - ListProvidedSharesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProvidedSharesResponse
     *
     * @param ListProvidedSharesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListProvidedSharesResponse
     */
    public function listProvidedSharesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'ListProvidedShares',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/shares/list/provided',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListProvidedSharesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取提供的共享列表.
     *
     * @param request - ListProvidedSharesRequest
     *
     * @returns ListProvidedSharesResponse
     *
     * @param ListProvidedSharesRequest $request
     *
     * @return ListProvidedSharesResponse
     */
    public function listProvidedShares($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProvidedSharesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取接收的共享列表.
     *
     * @param request - ListReceivedSharesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListReceivedSharesResponse
     *
     * @param ListReceivedSharesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListReceivedSharesResponse
     */
    public function listReceivedSharesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'ListReceivedShares',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/shares/list/received',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListReceivedSharesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取接收的共享列表.
     *
     * @param request - ListReceivedSharesRequest
     *
     * @returns ListReceivedSharesResponse
     *
     * @param ListReceivedSharesRequest $request
     *
     * @return ListReceivedSharesResponse
     */
    public function listReceivedShares($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listReceivedSharesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取接收者列表.
     *
     * @param request - ListReceiversRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListReceiversResponse
     *
     * @param ListReceiversRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListReceiversResponse
     */
    public function listReceiversWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->pageToken) {
            @$query['pageToken'] = $request->pageToken;
        }

        if (null !== $request->receiverName) {
            @$query['receiverName'] = $request->receiverName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListReceivers',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/receivers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListReceiversResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取接收者列表.
     *
     * @param request - ListReceiversRequest
     *
     * @returns ListReceiversResponse
     *
     * @param ListReceiversRequest $request
     *
     * @return ListReceiversResponse
     */
    public function listReceivers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listReceiversWithOptions($request, $headers, $runtime);
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
     * 获取共享中的接收者列表.
     *
     * @param request - ListShareReceiversRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListShareReceiversResponse
     *
     * @param string                    $share
     * @param ListShareReceiversRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListShareReceiversResponse
     */
    public function listShareReceiversWithOptions($share, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'ListShareReceivers',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/shares/' . Url::percentEncode($share) . '/receivers',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListShareReceiversResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取共享中的接收者列表.
     *
     * @param request - ListShareReceiversRequest
     *
     * @returns ListShareReceiversResponse
     *
     * @param string                    $share
     * @param ListShareReceiversRequest $request
     *
     * @return ListShareReceiversResponse
     */
    public function listShareReceivers($share, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShareReceiversWithOptions($share, $request, $headers, $runtime);
    }

    /**
     * 获取共享资源列表.
     *
     * @param request - ListShareResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListShareResourcesResponse
     *
     * @param string                    $share
     * @param ListShareResourcesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListShareResourcesResponse
     */
    public function listShareResourcesWithOptions($share, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'ListShareResources',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/share/shares/' . Url::percentEncode($share) . '/resources',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListShareResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取共享资源列表.
     *
     * @param request - ListShareResourcesRequest
     *
     * @returns ListShareResourcesResponse
     *
     * @param string                    $share
     * @param ListShareResourcesRequest $request
     *
     * @return ListShareResourcesResponse
     */
    public function listShareResources($share, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listShareResourcesWithOptions($share, $request, $headers, $runtime);
    }

    /**
     * 查看表快照列表.
     *
     * @param request - ListSnapshotsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSnapshotsResponse
     *
     * @param string               $catalogId
     * @param string               $database
     * @param string               $table
     * @param ListSnapshotsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshotsWithOptions($catalogId, $database, $table, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'ListSnapshots',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '/tables/' . Url::percentEncode($table) . '/snapshots',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看表快照列表.
     *
     * @param request - ListSnapshotsRequest
     *
     * @returns ListSnapshotsResponse
     *
     * @param string               $catalogId
     * @param string               $database
     * @param string               $table
     * @param ListSnapshotsRequest $request
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshots($catalogId, $database, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSnapshotsWithOptions($catalogId, $database, $table, $request, $headers, $runtime);
    }

    /**
     * 查看表详情列表.
     *
     * @param request - ListTableDetailsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTableDetailsResponse
     *
     * @param string                  $catalogId
     * @param string                  $database
     * @param ListTableDetailsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTableDetailsResponse
     */
    public function listTableDetailsWithOptions($catalogId, $database, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->pageToken) {
            @$query['pageToken'] = $request->pageToken;
        }

        if (null !== $request->tableNamePattern) {
            @$query['tableNamePattern'] = $request->tableNamePattern;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTableDetails',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '/table-details',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTableDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看表详情列表.
     *
     * @param request - ListTableDetailsRequest
     *
     * @returns ListTableDetailsResponse
     *
     * @param string                  $catalogId
     * @param string                  $database
     * @param ListTableDetailsRequest $request
     *
     * @return ListTableDetailsResponse
     */
    public function listTableDetails($catalogId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTableDetailsWithOptions($catalogId, $database, $request, $headers, $runtime);
    }

    /**
     * 查看表详情列表.
     *
     * @param request - ListTablesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTablesResponse
     *
     * @param string            $catalogId
     * @param string            $database
     * @param ListTablesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListTablesResponse
     */
    public function listTablesWithOptions($catalogId, $database, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->pageToken) {
            @$query['pageToken'] = $request->pageToken;
        }

        if (null !== $request->tableNamePattern) {
            @$query['tableNamePattern'] = $request->tableNamePattern;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTables',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '/tables',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看表详情列表.
     *
     * @param request - ListTablesRequest
     *
     * @returns ListTablesResponse
     *
     * @param string            $catalogId
     * @param string            $database
     * @param ListTablesRequest $request
     *
     * @return ListTablesResponse
     */
    public function listTables($catalogId, $database, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTablesWithOptions($catalogId, $database, $request, $headers, $runtime);
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
     * 刷新用户同步.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshUserSyncResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RefreshUserSyncResponse
     */
    public function refreshUserSyncWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RefreshUserSync',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/auth/usersync',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return RefreshUserSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 刷新用户同步.
     *
     * @returns RefreshUserSyncResponse
     *
     * @return RefreshUserSyncResponse
     */
    public function refreshUserSync()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->refreshUserSyncWithOptions($headers, $runtime);
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
     * 回滚表.
     *
     * @param request - RollbackTableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackTableResponse
     *
     * @param string               $catalogId
     * @param string               $database
     * @param string               $table
     * @param RollbackTableRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RollbackTableResponse
     */
    public function rollbackTableWithOptions($catalogId, $database, $table, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instant) {
            @$body['instant'] = $request->instant;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RollbackTable',
            'version' => '2025-03-10',
            'protocol' => 'HTTPS',
            'pathname' => '/dlf/v1/' . Url::percentEncode($catalogId) . '/databases/' . Url::percentEncode($database) . '/tables/' . Url::percentEncode($table) . '/rollback',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return RollbackTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 回滚表.
     *
     * @param request - RollbackTableRequest
     *
     * @returns RollbackTableResponse
     *
     * @param string               $catalogId
     * @param string               $database
     * @param string               $table
     * @param RollbackTableRequest $request
     *
     * @return RollbackTableResponse
     */
    public function rollbackTable($catalogId, $database, $table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rollbackTableWithOptions($catalogId, $database, $table, $request, $headers, $runtime);
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
