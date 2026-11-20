<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Hologram\V20220601\Models\BindLeaderInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\BindLeaderInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateDatabaseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateDatabaseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateExternalDatabaseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateExternalDatabaseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateHoloWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateHoloWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateManualBackupRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateManualBackupResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateModelServiceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateModelServiceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateUserRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateUserResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateWarehouseScheduleTaskRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateWarehouseScheduleTaskResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteBackupDataRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteBackupDataResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteHoloWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteHoloWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteModelResourceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteModelResourceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteModelServiceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteModelServiceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteWarehouseScheduleTaskRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteWarehouseScheduleTaskResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DescribeTagsRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DescribeTagsResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableExecuteStatementRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableExecuteStatementResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableHiveAccessRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableHiveAccessResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableOperationEventRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableOperationEventResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableSSLResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableSupportAccountRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableSupportAccountResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableWarehouseAutoScaleRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableWarehouseAutoScaleResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DiscardUpgradeRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DiscardUpgradeResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DropUserRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DropUserResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableExecuteStatementRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableExecuteStatementResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableHiveAccessRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableHiveAccessResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableSSLResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableSupportAccountRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableSupportAccountResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableWarehouseAutoScaleRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableWarehouseAutoScaleResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ExecuteStatementRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ExecuteStatementResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetCertificateAttributeResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetExecuteStatementEnabledRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetExecuteStatementEnabledResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetHoloWebLoginSettingRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetHoloWebLoginSettingResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceModelRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceModelResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetLastUpgradeRecordRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetLastUpgradeRecordResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetRootCertificateResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetScheduledBackupConfigRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetScheduledBackupConfigResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetUpgradeableRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetUpgradeableResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetUpgradeStatusRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetUpgradeStatusResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GrantDatabasePermissionRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GrantDatabasePermissionResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GrantSchemaPermissionRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GrantSchemaPermissionResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GrantTablePermissionRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GrantTablePermissionResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListBackupDataRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListBackupDataResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListDatabasesRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListDatabasesResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListFollowerInstancesRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListFollowerInstancesResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstanceModelRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstanceModelResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListLeaderInstancesRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListLeaderInstancesResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListMigrationZonesRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListMigrationZonesResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListModelCatalogRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListModelCatalogResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListOperationEventsRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListOperationEventsResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListRegionsRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListUpgradeReleaseVersionsRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListUpgradeReleaseVersionsResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehouseScheduleEventRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehouseScheduleEventResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehouseScheduleTaskRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehouseScheduleTaskResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehousesResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\MigrateInstanceZoneRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\MigrateInstanceZoneResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\PrepareUpgradeRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\PrepareUpgradeResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RebalanceHoloWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RebalanceHoloWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RenameHoloWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RenameHoloWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RenewSSLCertificateResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RestartHoloWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RestartHoloWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ResumeHoloWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ResumeHoloWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ResumeInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RevokeDatabasePermissionRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RevokeDatabasePermissionResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RevokeSchemaPermissionRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RevokeSchemaPermissionResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RevokeTablePermissionRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RevokeTablePermissionResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ScaleHoloWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ScaleHoloWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ScaleInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ScaleInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\SuspendHoloWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\SuspendHoloWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UnBindLeaderInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UnBindLeaderInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateAutoUpgradeRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateAutoUpgradeResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateBackupDataDescRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateBackupDataDescResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateHoloWebLoginSettingRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateHoloWebLoginSettingResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstanceNameRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstanceNameResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstanceNetworkTypeRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstanceNetworkTypeResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstancePortRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstancePortResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateMaintenanceWindowRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateMaintenanceWindowResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateModelServiceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateModelServiceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateOperationEventScheduleTimeRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateOperationEventScheduleTimeResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateScheduledBackupConfigRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateScheduledBackupConfigResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateWarehouseScheduleTaskRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateWarehouseScheduleTaskResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpgradeInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpgradeInstanceResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Hologram extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'Hologram';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('hologram', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Associates a follower instance.
     *
     * @param request - BindLeaderInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindLeaderInstanceResponse
     *
     * @param string                    $instanceId
     * @param BindLeaderInstanceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return BindLeaderInstanceResponse
     */
    public function bindLeaderInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->leaderInstanceId) {
            @$body['leaderInstanceId'] = $request->leaderInstanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BindLeaderInstance',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/bindReadOnly',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return BindLeaderInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a follower instance.
     *
     * @param request - BindLeaderInstanceRequest
     *
     * @returns BindLeaderInstanceResponse
     *
     * @param string                    $instanceId
     * @param BindLeaderInstanceRequest $request
     *
     * @return BindLeaderInstanceResponse
     */
    public function bindLeaderInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindLeaderInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Updates a resource group.
     *
     * @param request - ChangeResourceGroupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        if (null !== $request->newResourceGroupId) {
            @$body['newResourceGroupId'] = $request->newResourceGroupId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tag/changeResourceGroup',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a resource group.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeResourceGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a database.
     *
     * @param request - CreateDatabaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDatabaseResponse
     *
     * @param string                $instanceId
     * @param CreateDatabaseRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabaseWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->databaseName) {
            @$body['databaseName'] = $request->databaseName;
        }

        if (null !== $request->permissionModel) {
            @$body['permissionModel'] = $request->permissionModel;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDatabase',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/createDatabase',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a database.
     *
     * @param request - CreateDatabaseRequest
     *
     * @returns CreateDatabaseResponse
     *
     * @param string                $instanceId
     * @param CreateDatabaseRequest $request
     *
     * @return CreateDatabaseResponse
     */
    public function createDatabase($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDatabaseWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Creates an external database.
     *
     * @param request - CreateExternalDatabaseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExternalDatabaseResponse
     *
     * @param string                        $instanceId
     * @param CreateExternalDatabaseRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateExternalDatabaseResponse
     */
    public function createExternalDatabaseWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->comment) {
            @$body['comment'] = $request->comment;
        }

        if (null !== $request->databaseName) {
            @$body['databaseName'] = $request->databaseName;
        }

        if (null !== $request->defaultUserMapping) {
            @$body['defaultUserMapping'] = $request->defaultUserMapping;
        }

        if (null !== $request->externalConfig) {
            @$body['externalConfig'] = $request->externalConfig;
        }

        if (null !== $request->metastoreType) {
            @$body['metastoreType'] = $request->metastoreType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExternalDatabase',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/createExternalDatabase',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateExternalDatabaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an external database.
     *
     * @param request - CreateExternalDatabaseRequest
     *
     * @returns CreateExternalDatabaseResponse
     *
     * @param string                        $instanceId
     * @param CreateExternalDatabaseRequest $request
     *
     * @return CreateExternalDatabaseResponse
     */
    public function createExternalDatabase($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createExternalDatabaseWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a compute group.
     *
     * @param request - CreateHoloWarehouseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHoloWarehouseResponse
     *
     * @param string                     $instanceId
     * @param CreateHoloWarehouseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateHoloWarehouseResponse
     */
    public function createHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterCount) {
            @$body['clusterCount'] = $request->clusterCount;
        }

        if (null !== $request->cpu) {
            @$body['cpu'] = $request->cpu;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateHoloWarehouse',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/createHoloWarehouse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateHoloWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a compute group.
     *
     * @param request - CreateHoloWarehouseRequest
     *
     * @returns CreateHoloWarehouseResponse
     *
     * @param string                     $instanceId
     * @param CreateHoloWarehouseRequest $request
     *
     * @return CreateHoloWarehouseResponse
     */
    public function createHoloWarehouse($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Creates an instance.
     *
     * @remarks
     * >Warning: This API operation incurs fees. Make sure that you fully understand the billing methods and pricing of Hologres before you call this operation.
     * <props="china">- For more information about Hologres billing, see [Billing overview](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview).
     * <props="intl"> - For more information about Hologres billing, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview).
     * - When you create a Hologres instance, you must specify the region and zone where the instance resides. A region may contain multiple zones, as follows:
     *  ```
     *     cn-hangzhou (Hangzhou): cn-hangzhou-h, cn-hangzhou-j, cn-hangzhou-k
     *     cn-shanghai (Shanghai): cn-shanghai-e, cn-shanghai-f, cn-shanghai-l
     *     cn-beijing (Beijing): cn-beijing-i, cn-beijing-g, cn-beijing-l
     *     cn-zhangjiakou (Zhangjiakou): cn-zhangjiakou-b
     *     cn-shenzhen (Shenzhen): cn-shenzhen-d, cn-shenzhen-f, cn-shenzhen-e
     *     cn-wulanchabu (Ulanqab): cn-wulanchabu-a
     *     cn-hongkong (Hong Kong): cn-hongkong-b, cn-hongkong-d
     *     cn-shanghai-finance-1 (Shanghai Finance Cloud): cn-shanghai-finance-1z, cn-shanghai-finance-1f
     *     cn-hangzhou-finance (Hangzhou Finance Cloud): cn-hangzhou-finance-k
     *     cn-shenzhen-finance-1 (Shenzhen Finance Cloud): cn-shenzhen-finance-1d
     *     ap-northeast-1 (Japan): ap-northeast-1a
     *     ap-southeast-1 (Singapore): ap-southeast-1c, ap-southeast-1a
     *     ap-southeast-3 (Kuala Lumpur): ap-southeast-3b
     *     ap-southeast-5 (Jakarta): ap-southeast-5b
     *     eu-central-1 (Frankfurt): eu-central-1a
     *     us-east-1 (Silicon Valley): us-east-1a
     *     us-west-1 (Virginia): us-west-1b
     * ```
     *
     * @param request - CreateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoPay) {
            @$body['autoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$body['autoRenew'] = $request->autoRenew;
        }

        if (null !== $request->chargeType) {
            @$body['chargeType'] = $request->chargeType;
        }

        if (null !== $request->coldStorageSize) {
            @$body['coldStorageSize'] = $request->coldStorageSize;
        }

        if (null !== $request->cpu) {
            @$body['cpu'] = $request->cpu;
        }

        if (null !== $request->duration) {
            @$body['duration'] = $request->duration;
        }

        if (null !== $request->enableServerlessComputing) {
            @$body['enableServerlessComputing'] = $request->enableServerlessComputing;
        }

        if (null !== $request->gatewayCount) {
            @$body['gatewayCount'] = $request->gatewayCount;
        }

        if (null !== $request->initialDatabases) {
            @$body['initialDatabases'] = $request->initialDatabases;
        }

        if (null !== $request->instanceName) {
            @$body['instanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceType) {
            @$body['instanceType'] = $request->instanceType;
        }

        if (null !== $request->leaderInstanceId) {
            @$body['leaderInstanceId'] = $request->leaderInstanceId;
        }

        if (null !== $request->pricingCycle) {
            @$body['pricingCycle'] = $request->pricingCycle;
        }

        if (null !== $request->regionId) {
            @$body['regionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->storageSize) {
            @$body['storageSize'] = $request->storageSize;
        }

        if (null !== $request->storageType) {
            @$body['storageType'] = $request->storageType;
        }

        if (null !== $request->vSwitchId) {
            @$body['vSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$body['vpcId'] = $request->vpcId;
        }

        if (null !== $request->zoneId) {
            @$body['zoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance.
     *
     * @remarks
     * >Warning: This API operation incurs fees. Make sure that you fully understand the billing methods and pricing of Hologres before you call this operation.
     * <props="china">- For more information about Hologres billing, see [Billing overview](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview).
     * <props="intl"> - For more information about Hologres billing, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview).
     * - When you create a Hologres instance, you must specify the region and zone where the instance resides. A region may contain multiple zones, as follows:
     *  ```
     *     cn-hangzhou (Hangzhou): cn-hangzhou-h, cn-hangzhou-j, cn-hangzhou-k
     *     cn-shanghai (Shanghai): cn-shanghai-e, cn-shanghai-f, cn-shanghai-l
     *     cn-beijing (Beijing): cn-beijing-i, cn-beijing-g, cn-beijing-l
     *     cn-zhangjiakou (Zhangjiakou): cn-zhangjiakou-b
     *     cn-shenzhen (Shenzhen): cn-shenzhen-d, cn-shenzhen-f, cn-shenzhen-e
     *     cn-wulanchabu (Ulanqab): cn-wulanchabu-a
     *     cn-hongkong (Hong Kong): cn-hongkong-b, cn-hongkong-d
     *     cn-shanghai-finance-1 (Shanghai Finance Cloud): cn-shanghai-finance-1z, cn-shanghai-finance-1f
     *     cn-hangzhou-finance (Hangzhou Finance Cloud): cn-hangzhou-finance-k
     *     cn-shenzhen-finance-1 (Shenzhen Finance Cloud): cn-shenzhen-finance-1d
     *     ap-northeast-1 (Japan): ap-northeast-1a
     *     ap-southeast-1 (Singapore): ap-southeast-1c, ap-southeast-1a
     *     ap-southeast-3 (Kuala Lumpur): ap-southeast-3b
     *     ap-southeast-5 (Jakarta): ap-southeast-5b
     *     eu-central-1 (Frankfurt): eu-central-1a
     *     us-east-1 (Silicon Valley): us-east-1a
     *     us-west-1 (Virginia): us-west-1b
     * ```
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates an instance backup.
     *
     * @param request - CreateManualBackupRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateManualBackupResponse
     *
     * @param CreateManualBackupRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateManualBackupResponse
     */
    public function createManualBackupWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateManualBackup',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/backups/manual',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateManualBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance backup.
     *
     * @param request - CreateManualBackupRequest
     *
     * @returns CreateManualBackupResponse
     *
     * @param CreateManualBackupRequest $request
     *
     * @return CreateManualBackupResponse
     */
    public function createManualBackup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createManualBackupWithOptions($request, $headers, $runtime);
    }

    /**
     * Creates a model service that enables AI functions to invoke models and supports the creation of two types of models: Alibaba Cloud Model Studio models and Hologres AI nodes. If you use Hologres AI, you must separately purchase AI node resources.
     *
     * @remarks
     * Creating a model service requires multiple parameters. For model creation of Alibaba Cloud Model Studio models, invoke ListModelCatalog to query model parameters. For model creation of Hologres AI nodes, invoke GetAvailableModelsResource to query model parameters.
     *
     * @param request - CreateModelServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateModelServiceResponse
     *
     * @param string                    $instanceId
     * @param CreateModelServiceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateModelServiceResponse
     */
    public function createModelServiceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->apiKey) {
            @$body['apiKey'] = $request->apiKey;
        }

        if (null !== $request->cpu) {
            @$body['cpu'] = $request->cpu;
        }

        if (null !== $request->gpu) {
            @$body['gpu'] = $request->gpu;
        }

        if (null !== $request->gpuMemory) {
            @$body['gpuMemory'] = $request->gpuMemory;
        }

        if (null !== $request->memory) {
            @$body['memory'] = $request->memory;
        }

        if (null !== $request->modelParams) {
            @$body['modelParams'] = $request->modelParams;
        }

        if (null !== $request->modelServiceName) {
            @$body['modelServiceName'] = $request->modelServiceName;
        }

        if (null !== $request->modelType) {
            @$body['modelType'] = $request->modelType;
        }

        if (null !== $request->provider) {
            @$body['provider'] = $request->provider;
        }

        if (null !== $request->serviceCount) {
            @$body['serviceCount'] = $request->serviceCount;
        }

        if (null !== $request->taskType) {
            @$body['taskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateModelService',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/createModelService',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateModelServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a model service that enables AI functions to invoke models and supports the creation of two types of models: Alibaba Cloud Model Studio models and Hologres AI nodes. If you use Hologres AI, you must separately purchase AI node resources.
     *
     * @remarks
     * Creating a model service requires multiple parameters. For model creation of Alibaba Cloud Model Studio models, invoke ListModelCatalog to query model parameters. For model creation of Hologres AI nodes, invoke GetAvailableModelsResource to query model parameters.
     *
     * @param request - CreateModelServiceRequest
     *
     * @returns CreateModelServiceResponse
     *
     * @param string                    $instanceId
     * @param CreateModelServiceRequest $request
     *
     * @return CreateModelServiceResponse
     */
    public function createModelService($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelServiceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Adds a RAM user or STS account to a Hologres instance as an instance account. After the account is added, you can log on to the instance by using the RAM or STS identity.
     *
     * @param request - CreateUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserResponse
     *
     * @param string            $instanceId
     * @param CreateUserRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->superUser) {
            @$body['superUser'] = $request->superUser;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateUser',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/createUser',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a RAM user or STS account to a Hologres instance as an instance account. After the account is added, you can log on to the instance by using the RAM or STS identity.
     *
     * @param request - CreateUserRequest
     *
     * @returns CreateUserResponse
     *
     * @param string            $instanceId
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a warehouse.
     *
     * @param request - CreateWarehouseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWarehouseResponse
     *
     * @param string                 $instanceId
     * @param CreateWarehouseRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWarehouseResponse
     */
    public function createWarehouseWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->config) {
            @$body['config'] = $request->config;
        }

        if (null !== $request->cpu) {
            @$body['cpu'] = $request->cpu;
        }

        if (null !== $request->warehouseName) {
            @$body['warehouseName'] = $request->warehouseName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWarehouse',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/warehouse/' . Url::percentEncode($instanceId) . '/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a warehouse.
     *
     * @param request - CreateWarehouseRequest
     *
     * @returns CreateWarehouseResponse
     *
     * @param string                 $instanceId
     * @param CreateWarehouseRequest $request
     *
     * @return CreateWarehouseResponse
     */
    public function createWarehouse($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWarehouseWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a time-based elastic plan.
     *
     * @remarks
     * Creates a time-based elastic plan for a compute group of a specified Hologres instance. Before calling this operation, call ListWarehouses to obtain the compute group ID.
     *
     * @param request - CreateWarehouseScheduleTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWarehouseScheduleTaskResponse
     *
     * @param string                             $instanceId
     * @param CreateWarehouseScheduleTaskRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateWarehouseScheduleTaskResponse
     */
    public function createWarehouseScheduleTaskWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->elasticCu) {
            @$body['elasticCu'] = $request->elasticCu;
        }

        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        if (null !== $request->warehouseId) {
            @$body['warehouseId'] = $request->warehouseId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWarehouseScheduleTask',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/createWarehouseScheduleTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateWarehouseScheduleTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a time-based elastic plan.
     *
     * @remarks
     * Creates a time-based elastic plan for a compute group of a specified Hologres instance. Before calling this operation, call ListWarehouses to obtain the compute group ID.
     *
     * @param request - CreateWarehouseScheduleTaskRequest
     *
     * @returns CreateWarehouseScheduleTaskResponse
     *
     * @param string                             $instanceId
     * @param CreateWarehouseScheduleTaskRequest $request
     *
     * @return CreateWarehouseScheduleTaskResponse
     */
    public function createWarehouseScheduleTask($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createWarehouseScheduleTaskWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a backup.
     *
     * @param request - DeleteBackupDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBackupDataResponse
     *
     * @param string                  $id
     * @param DeleteBackupDataRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteBackupDataResponse
     */
    public function deleteBackupDataWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBackupData',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/backups/' . Url::percentEncode($id) . '/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteBackupDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a backup.
     *
     * @param request - DeleteBackupDataRequest
     *
     * @returns DeleteBackupDataResponse
     *
     * @param string                  $id
     * @param DeleteBackupDataRequest $request
     *
     * @return DeleteBackupDataResponse
     */
    public function deleteBackupData($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBackupDataWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Deletes a compute group.
     *
     * @param request - DeleteHoloWarehouseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHoloWarehouseResponse
     *
     * @param string                     $instanceId
     * @param DeleteHoloWarehouseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteHoloWarehouseResponse
     */
    public function deleteHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteHoloWarehouse',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/deleteHoloWarehouse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteHoloWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a compute group.
     *
     * @param request - DeleteHoloWarehouseRequest
     *
     * @returns DeleteHoloWarehouseResponse
     *
     * @param string                     $instanceId
     * @param DeleteHoloWarehouseRequest $request
     *
     * @return DeleteHoloWarehouseResponse
     */
    public function deleteHoloWarehouse($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Releases an instance.
     *
     * @remarks
     * >Warning: Before calling this operation, carefully read the feature documentation to ensure that you fully understand the prerequisites and the impacts of this operation.</warning>
     * <props="china">- After a Hologres instance is released, the data and objects in the instance cannot be recovered. Proceed with caution. For more information, see [Billing overview](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview).
     * <props="intl">- After a Hologres instance is released, the data and objects in the instance cannot be recovered. Proceed with caution. For more information, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview?spm=a2c63.p38356.0.0.efc33b87i5pDl7).
     * - Only pay-as-you-go instances can be released.
     * <props="china">- To unsubscribe from a subscription instance, go to the Unsubscription page in the Alibaba Cloud Management Console. For more information, see [Unsubscribe from subscription instances](https://www.alibabacloud.com/help/en/hologres/product-overview/subscription).
     *
     * @param request - DeleteInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param string                $instanceId
     * @param DeleteInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases an instance.
     *
     * @remarks
     * >Warning: Before calling this operation, carefully read the feature documentation to ensure that you fully understand the prerequisites and the impacts of this operation.</warning>
     * <props="china">- After a Hologres instance is released, the data and objects in the instance cannot be recovered. Proceed with caution. For more information, see [Billing overview](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview).
     * <props="intl">- After a Hologres instance is released, the data and objects in the instance cannot be recovered. Proceed with caution. For more information, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview?spm=a2c63.p38356.0.0.efc33b87i5pDl7).
     * - Only pay-as-you-go instances can be released.
     * <props="china">- To unsubscribe from a subscription instance, go to the Unsubscription page in the Alibaba Cloud Management Console. For more information, see [Unsubscribe from subscription instances](https://www.alibabacloud.com/help/en/hologres/product-overview/subscription).
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
     * @param string                $instanceId
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes node resources. All models deployed on the node will be deleted and cannot be recovered.
     *
     * @param request - DeleteModelResourceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelResourceResponse
     *
     * @param string                     $instanceId
     * @param DeleteModelResourceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteModelResourceResponse
     */
    public function deleteModelResourceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aiInstanceId) {
            @$query['aiInstanceId'] = $request->aiInstanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteModelResource',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/deleteModelResource',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteModelResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes node resources. All models deployed on the node will be deleted and cannot be recovered.
     *
     * @param request - DeleteModelResourceRequest
     *
     * @returns DeleteModelResourceResponse
     *
     * @param string                     $instanceId
     * @param DeleteModelResourceRequest $request
     *
     * @return DeleteModelResourceResponse
     */
    public function deleteModelResource($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelResourceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a model service.
     *
     * @param request - DeleteModelServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteModelServiceResponse
     *
     * @param string                    $instanceId
     * @param DeleteModelServiceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteModelServiceResponse
     */
    public function deleteModelServiceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->modelServiceName) {
            @$query['modelServiceName'] = $request->modelServiceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteModelService',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/deleteModelService',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteModelServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a model service.
     *
     * @param request - DeleteModelServiceRequest
     *
     * @returns DeleteModelServiceResponse
     *
     * @param string                    $instanceId
     * @param DeleteModelServiceRequest $request
     *
     * @return DeleteModelServiceResponse
     */
    public function deleteModelService($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelServiceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes an elastic plan for a compute group.
     *
     * @remarks
     * >Warning: Before calling this operation, read the feature documentation to ensure that you fully understand the prerequisites and impacts.
     * <props="china">- After a Hologres instance is released, the data and objects in the instance cannot be recovered. Proceed with caution. For more information, see [Billing overview](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview).
     * <props="intl">- After a Hologres instance is released, the data and objects in the instance cannot be recovered. Proceed with caution. For more information, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview?spm=a2c63.p38356.0.0.efc33b87i5pDl7).
     * - Only pay-as-you-go instances can be released.
     * <props="china">- To unsubscribe from a subscription instance, go to the Unsubscription Management page in the Alibaba Cloud Management Console. For more information, see [Unsubscribe from a subscription instance](https://www.alibabacloud.com/help/en/hologres/product-overview/subscription).
     *
     * @param request - DeleteWarehouseScheduleTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWarehouseScheduleTaskResponse
     *
     * @param string                             $instanceId
     * @param DeleteWarehouseScheduleTaskRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteWarehouseScheduleTaskResponse
     */
    public function deleteWarehouseScheduleTaskWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->warehouseId) {
            @$body['warehouseId'] = $request->warehouseId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWarehouseScheduleTask',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/deleteWarehouseScheduleTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteWarehouseScheduleTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an elastic plan for a compute group.
     *
     * @remarks
     * >Warning: Before calling this operation, read the feature documentation to ensure that you fully understand the prerequisites and impacts.
     * <props="china">- After a Hologres instance is released, the data and objects in the instance cannot be recovered. Proceed with caution. For more information, see [Billing overview](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview).
     * <props="intl">- After a Hologres instance is released, the data and objects in the instance cannot be recovered. Proceed with caution. For more information, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview?spm=a2c63.p38356.0.0.efc33b87i5pDl7).
     * - Only pay-as-you-go instances can be released.
     * <props="china">- To unsubscribe from a subscription instance, go to the Unsubscription Management page in the Alibaba Cloud Management Console. For more information, see [Unsubscribe from a subscription instance](https://www.alibabacloud.com/help/en/hologres/product-overview/subscription).
     *
     * @param request - DeleteWarehouseScheduleTaskRequest
     *
     * @returns DeleteWarehouseScheduleTaskResponse
     *
     * @param string                             $instanceId
     * @param DeleteWarehouseScheduleTaskRequest $request
     *
     * @return DeleteWarehouseScheduleTaskResponse
     */
    public function deleteWarehouseScheduleTask($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteWarehouseScheduleTaskWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Lists all tags.
     *
     * @param request - DescribeTagsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeTagsResponse
     */
    public function describeTagsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tagsOnly) {
            @$query['tagsOnly'] = $request->tagsOnly;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTags',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tag',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DescribeTagsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all tags.
     *
     * @param request - DescribeTagsRequest
     *
     * @returns DescribeTagsResponse
     *
     * @param DescribeTagsRequest $request
     *
     * @return DescribeTagsResponse
     */
    public function describeTags($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeTagsWithOptions($request, $headers, $runtime);
    }

    /**
     * Shuts down the ExecuteStatement API access for a specified Hologres instance.
     *
     * @remarks
     * Disables the OpenAPI SQL execution feature for a specified Hologres instance. After the feature is disabled, all ExecuteStatement calls return an error. You can call EnableExecuteStatement to re-enable it.
     *
     * @param request - DisableExecuteStatementRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableExecuteStatementResponse
     *
     * @param string                         $instanceId
     * @param DisableExecuteStatementRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DisableExecuteStatementResponse
     */
    public function disableExecuteStatementWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DisableExecuteStatement',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/disableExecuteStatement',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableExecuteStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Shuts down the ExecuteStatement API access for a specified Hologres instance.
     *
     * @remarks
     * Disables the OpenAPI SQL execution feature for a specified Hologres instance. After the feature is disabled, all ExecuteStatement calls return an error. You can call EnableExecuteStatement to re-enable it.
     *
     * @param request - DisableExecuteStatementRequest
     *
     * @returns DisableExecuteStatementResponse
     *
     * @param string                         $instanceId
     * @param DisableExecuteStatementRequest $request
     *
     * @return DisableExecuteStatementResponse
     */
    public function disableExecuteStatement($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableExecuteStatementWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Disables data lake acceleration.
     *
     * @param request - DisableHiveAccessRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableHiveAccessResponse
     *
     * @param string                   $instanceId
     * @param DisableHiveAccessRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DisableHiveAccessResponse
     */
    public function disableHiveAccessWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableHiveAccess',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/disableHiveAccess',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableHiveAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables data lake acceleration.
     *
     * @param request - DisableHiveAccessRequest
     *
     * @returns DisableHiveAccessResponse
     *
     * @param string                   $instanceId
     * @param DisableHiveAccessRequest $request
     *
     * @return DisableHiveAccessResponse
     */
    public function disableHiveAccess($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableHiveAccessWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Disables O&M logs.
     *
     * @param request - DisableOperationEventRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableOperationEventResponse
     *
     * @param string                       $instanceId
     * @param DisableOperationEventRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DisableOperationEventResponse
     */
    public function disableOperationEventWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableOperationEvent',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/disableOperationEvent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableOperationEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables O&M logs.
     *
     * @param request - DisableOperationEventRequest
     *
     * @returns DisableOperationEventResponse
     *
     * @param string                       $instanceId
     * @param DisableOperationEventRequest $request
     *
     * @return DisableOperationEventResponse
     */
    public function disableOperationEvent($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableOperationEventWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Disables SSL.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableSSLResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DisableSSLResponse
     */
    public function disableSSLWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DisableSSL',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/disableSSL',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables SSL.
     *
     * @returns DisableSSLResponse
     *
     * @param string $instanceId
     *
     * @return DisableSSLResponse
     */
    public function disableSSL($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableSSLWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Disables the service account.
     *
     * @remarks
     * Disables the OpenAPI SQL execution feature for a specified Hologres instance. After the feature is disabled, all ExecuteStatement calls return an error. You can call EnableExecuteStatement to re-enable it.
     *
     * @param request - DisableSupportAccountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableSupportAccountResponse
     *
     * @param string                       $instanceId
     * @param DisableSupportAccountRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DisableSupportAccountResponse
     */
    public function disableSupportAccountWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableSupportAccount',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/supportAccount/disable',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableSupportAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the service account.
     *
     * @remarks
     * Disables the OpenAPI SQL execution feature for a specified Hologres instance. After the feature is disabled, all ExecuteStatement calls return an error. You can call EnableExecuteStatement to re-enable it.
     *
     * @param request - DisableSupportAccountRequest
     *
     * @returns DisableSupportAccountResponse
     *
     * @param string                       $instanceId
     * @param DisableSupportAccountRequest $request
     *
     * @return DisableSupportAccountResponse
     */
    public function disableSupportAccount($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableSupportAccountWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Disables automatic elastic scaling.
     *
     * @param request - DisableWarehouseAutoScaleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableWarehouseAutoScaleResponse
     *
     * @param string                           $instanceId
     * @param DisableWarehouseAutoScaleRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DisableWarehouseAutoScaleResponse
     */
    public function disableWarehouseAutoScaleWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisableWarehouseAutoScale',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/disableWarehouseAutoScale',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DisableWarehouseAutoScaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables automatic elastic scaling.
     *
     * @param request - DisableWarehouseAutoScaleRequest
     *
     * @returns DisableWarehouseAutoScaleResponse
     *
     * @param string                           $instanceId
     * @param DisableWarehouseAutoScaleRequest $request
     *
     * @return DisableWarehouseAutoScaleResponse
     */
    public function disableWarehouseAutoScale($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableWarehouseAutoScaleWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Cancels an upgrade. The cancel upgrade button is enabled only for tasks that have not started or are in the pre_check state. Once a task enters the backup state or a subsequent state, the upgrade cannot be canceled.
     *
     * @param request - DiscardUpgradeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DiscardUpgradeResponse
     *
     * @param string                $instanceId
     * @param DiscardUpgradeRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DiscardUpgradeResponse
     */
    public function discardUpgradeWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DiscardUpgrade',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/upgrade/discard',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DiscardUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an upgrade. The cancel upgrade button is enabled only for tasks that have not started or are in the pre_check state. Once a task enters the backup state or a subsequent state, the upgrade cannot be canceled.
     *
     * @param request - DiscardUpgradeRequest
     *
     * @returns DiscardUpgradeResponse
     *
     * @param string                $instanceId
     * @param DiscardUpgradeRequest $request
     *
     * @return DiscardUpgradeResponse
     */
    public function discardUpgrade($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->discardUpgradeWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a RAM user or STS account from the Hologres account system. After deletion, the RAM user or STS account can no longer log on to the instance. To log on to the instance, call the CreateUser operation to add the user again.
     *
     * @remarks
     * 删除实例内的用户。删除后该用户不能再登录实例，如需恢复请通过 CreateUser 重新添加。删除前需确认 userName：当前没有列举用户的 OpenAPI 接口，可通过 ExecuteStatement 执行 SELECT rolname FROM pg_roles 查询实例内已有角色，且不能删除当前发起调用的账号自身。
     *
     * @param request - DropUserRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DropUserResponse
     *
     * @param string          $instanceId
     * @param DropUserRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return DropUserResponse
     */
    public function dropUserWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->superUser) {
            @$body['superUser'] = $request->superUser;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DropUser',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/dropUser',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DropUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a RAM user or STS account from the Hologres account system. After deletion, the RAM user or STS account can no longer log on to the instance. To log on to the instance, call the CreateUser operation to add the user again.
     *
     * @remarks
     * 删除实例内的用户。删除后该用户不能再登录实例，如需恢复请通过 CreateUser 重新添加。删除前需确认 userName：当前没有列举用户的 OpenAPI 接口，可通过 ExecuteStatement 执行 SELECT rolname FROM pg_roles 查询实例内已有角色，且不能删除当前发起调用的账号自身。
     *
     * @param request - DropUserRequest
     *
     * @returns DropUserResponse
     *
     * @param string          $instanceId
     * @param DropUserRequest $request
     *
     * @return DropUserResponse
     */
    public function dropUser($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->dropUserWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Enables SQL execution via OpenAPI for a specified Hologres instance.
     *
     * @remarks
     * Enables SQL execution via OpenAPI for a specified Hologres instance. Once enabled, RAM accounts with the `hologram:ExecuteStatement` permission can execute SQL statements by calling the `ExecuteStatement` API. To query the current status, call the `GetExecuteStatementEnabled` API. To disable the feature, call the `DisableExecuteStatement` API.
     *
     * @param request - EnableExecuteStatementRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableExecuteStatementResponse
     *
     * @param string                        $instanceId
     * @param EnableExecuteStatementRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return EnableExecuteStatementResponse
     */
    public function enableExecuteStatementWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'EnableExecuteStatement',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/enableExecuteStatement',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableExecuteStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables SQL execution via OpenAPI for a specified Hologres instance.
     *
     * @remarks
     * Enables SQL execution via OpenAPI for a specified Hologres instance. Once enabled, RAM accounts with the `hologram:ExecuteStatement` permission can execute SQL statements by calling the `ExecuteStatement` API. To query the current status, call the `GetExecuteStatementEnabled` API. To disable the feature, call the `DisableExecuteStatement` API.
     *
     * @param request - EnableExecuteStatementRequest
     *
     * @returns EnableExecuteStatementResponse
     *
     * @param string                        $instanceId
     * @param EnableExecuteStatementRequest $request
     *
     * @return EnableExecuteStatementResponse
     */
    public function enableExecuteStatement($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableExecuteStatementWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Enables data lake acceleration.
     *
     * @param request - EnableHiveAccessRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableHiveAccessResponse
     *
     * @param string                  $instanceId
     * @param EnableHiveAccessRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return EnableHiveAccessResponse
     */
    public function enableHiveAccessWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableHiveAccess',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/enableHiveAccess',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableHiveAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables data lake acceleration.
     *
     * @param request - EnableHiveAccessRequest
     *
     * @returns EnableHiveAccessResponse
     *
     * @param string                  $instanceId
     * @param EnableHiveAccessRequest $request
     *
     * @return EnableHiveAccessResponse
     */
    public function enableHiveAccess($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableHiveAccessWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Enables SSL.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSSLResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return EnableSSLResponse
     */
    public function enableSSLWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'EnableSSL',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/enableSSL',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableSSLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables SSL.
     *
     * @returns EnableSSLResponse
     *
     * @param string $instanceId
     *
     * @return EnableSSLResponse
     */
    public function enableSSL($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableSSLWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Enables the service account.
     *
     * @remarks
     * Enables the OpenAPI SQL execution feature for a specified Hologres instance. After the feature is enabled, RAM users that have the hologram:ExecuteStatement permission can execute SQL statements by calling the ExecuteStatement operation. You can call the GetExecuteStatementEnabled operation to query the current status and call the DisableExecuteStatement operation to disable the feature.
     *
     * @param request - EnableSupportAccountRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableSupportAccountResponse
     *
     * @param string                      $instanceId
     * @param EnableSupportAccountRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return EnableSupportAccountResponse
     */
    public function enableSupportAccountWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->enabled) {
            @$body['enabled'] = $request->enabled;
        }

        if (null !== $request->expireTime) {
            @$body['expireTime'] = $request->expireTime;
        }

        if (null !== $request->password) {
            @$body['password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableSupportAccount',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/supportAccount/enable',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableSupportAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the service account.
     *
     * @remarks
     * Enables the OpenAPI SQL execution feature for a specified Hologres instance. After the feature is enabled, RAM users that have the hologram:ExecuteStatement permission can execute SQL statements by calling the ExecuteStatement operation. You can call the GetExecuteStatementEnabled operation to query the current status and call the DisableExecuteStatement operation to disable the feature.
     *
     * @param request - EnableSupportAccountRequest
     *
     * @returns EnableSupportAccountResponse
     *
     * @param string                      $instanceId
     * @param EnableSupportAccountRequest $request
     *
     * @return EnableSupportAccountResponse
     */
    public function enableSupportAccount($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableSupportAccountWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Enables automatic elastic scaling.
     *
     * @param request - EnableWarehouseAutoScaleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableWarehouseAutoScaleResponse
     *
     * @param string                          $instanceId
     * @param EnableWarehouseAutoScaleRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableWarehouseAutoScaleResponse
     */
    public function enableWarehouseAutoScaleWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxClusterCount) {
            @$body['maxClusterCount'] = $request->maxClusterCount;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableWarehouseAutoScale',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/enableWarehouseAutoScale',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return EnableWarehouseAutoScaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables automatic elastic scaling.
     *
     * @param request - EnableWarehouseAutoScaleRequest
     *
     * @returns EnableWarehouseAutoScaleResponse
     *
     * @param string                          $instanceId
     * @param EnableWarehouseAutoScaleRequest $request
     *
     * @return EnableWarehouseAutoScaleResponse
     */
    public function enableWarehouseAutoScale($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableWarehouseAutoScaleWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Executes an SQL statement on a specified database by using OpenAPI and returns the result.
     *
     * @remarks
     * This API is used to securely execute SQL statements on a Hologres instance by using OpenAPI.
     *   Before you begin, meet the following conditions:
     *   1. On the instance details page in the console, turn on the Allow SQL Execution by Using OpenAPI switch in the Data Security section.
     *   2. The RAM user used to invoke the API has been granted the hologram:ExecuteStatement permission.
     *   Statements such as SELECT, DDL, and DML are supported. The parameterized query feature with placeholders such as $1 and $2 is supported to prevent SQL injection. By default, a query returns a maximum of 200 rows (up to 1,000 rows) and 10 MB of data. Excess data is truncated, and the truncated field indicates the truncation. The timeout period for a single execution is 30 seconds.
     *
     * @param request - ExecuteStatementRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteStatementResponse
     *
     * @param string                  $instanceId
     * @param ExecuteStatementRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteStatementResponse
     */
    public function executeStatementWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dbName) {
            @$body['dbName'] = $request->dbName;
        }

        if (null !== $request->maxBytes) {
            @$body['maxBytes'] = $request->maxBytes;
        }

        if (null !== $request->maxRows) {
            @$body['maxRows'] = $request->maxRows;
        }

        if (null !== $request->parameters) {
            @$body['parameters'] = $request->parameters;
        }

        if (null !== $request->queryTimeout) {
            @$body['queryTimeout'] = $request->queryTimeout;
        }

        if (null !== $request->sql) {
            @$body['sql'] = $request->sql;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteStatement',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/executeStatement',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ExecuteStatementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes an SQL statement on a specified database by using OpenAPI and returns the result.
     *
     * @remarks
     * This API is used to securely execute SQL statements on a Hologres instance by using OpenAPI.
     *   Before you begin, meet the following conditions:
     *   1. On the instance details page in the console, turn on the Allow SQL Execution by Using OpenAPI switch in the Data Security section.
     *   2. The RAM user used to invoke the API has been granted the hologram:ExecuteStatement permission.
     *   Statements such as SELECT, DDL, and DML are supported. The parameterized query feature with placeholders such as $1 and $2 is supported to prevent SQL injection. By default, a query returns a maximum of 200 rows (up to 1,000 rows) and 10 MB of data. Excess data is truncated, and the truncated field indicates the truncation. The timeout period for a single execution is 30 seconds.
     *
     * @param request - ExecuteStatementRequest
     *
     * @returns ExecuteStatementResponse
     *
     * @param string                  $instanceId
     * @param ExecuteStatementRequest $request
     *
     * @return ExecuteStatementResponse
     */
    public function executeStatement($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->executeStatementWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves certificate information.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCertificateAttributeResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCertificateAttributeResponse
     */
    public function getCertificateAttributeWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetCertificateAttribute',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/certificateAttribute',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetCertificateAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves certificate information.
     *
     * @returns GetCertificateAttributeResponse
     *
     * @param string $instanceId
     *
     * @return GetCertificateAttributeResponse
     */
    public function getCertificateAttribute($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCertificateAttributeWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Checks whether a specified Hologres instance allows SQL execution through OpenAPI.
     *
     * @remarks
     * This operation checks if the "Allow SQL execution through OpenAPI" feature is enabled for a specified Hologres instance. Returns `true` if the feature is enabled, and `false` otherwise. If enabled, you can call the `ExecuteStatement` operation to execute SQL statements.
     *
     * @param request - GetExecuteStatementEnabledRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExecuteStatementEnabledResponse
     *
     * @param string                            $instanceId
     * @param GetExecuteStatementEnabledRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetExecuteStatementEnabledResponse
     */
    public function getExecuteStatementEnabledWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetExecuteStatementEnabled',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/executeStatementEnabled',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetExecuteStatementEnabledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether a specified Hologres instance allows SQL execution through OpenAPI.
     *
     * @remarks
     * This operation checks if the "Allow SQL execution through OpenAPI" feature is enabled for a specified Hologres instance. Returns `true` if the feature is enabled, and `false` otherwise. If enabled, you can call the `ExecuteStatement` operation to execute SQL statements.
     *
     * @param request - GetExecuteStatementEnabledRequest
     *
     * @returns GetExecuteStatementEnabledResponse
     *
     * @param string                            $instanceId
     * @param GetExecuteStatementEnabledRequest $request
     *
     * @return GetExecuteStatementEnabledResponse
     */
    public function getExecuteStatementEnabled($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getExecuteStatementEnabledWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the HoloWeb logon permissions.
     *
     * @remarks
     * Queries whether the feature that allows SQL execution through OpenAPI is enabled for a specified Hologres instance. A value of true indicates that the feature is enabled, and a value of false indicates that the feature is disabled. After the feature is enabled, you can execute SQL statements by calling the ExecuteStatement operation.
     *
     * @param request - GetHoloWebLoginSettingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHoloWebLoginSettingResponse
     *
     * @param string                        $instanceId
     * @param GetHoloWebLoginSettingRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetHoloWebLoginSettingResponse
     */
    public function getHoloWebLoginSettingWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHoloWebLoginSetting',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/getHoloWebLoginSetting',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetHoloWebLoginSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the HoloWeb logon permissions.
     *
     * @remarks
     * Queries whether the feature that allows SQL execution through OpenAPI is enabled for a specified Hologres instance. A value of true indicates that the feature is enabled, and a value of false indicates that the feature is disabled. After the feature is enabled, you can execute SQL statements by calling the ExecuteStatement operation.
     *
     * @param request - GetHoloWebLoginSettingRequest
     *
     * @returns GetHoloWebLoginSettingResponse
     *
     * @param string                        $instanceId
     * @param GetHoloWebLoginSettingRequest $request
     *
     * @return GetHoloWebLoginSettingResponse
     */
    public function getHoloWebLoginSetting($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getHoloWebLoginSettingWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the details of an instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an instance.
     *
     * @returns GetInstanceResponse
     *
     * @param string $instanceId
     *
     * @return GetInstanceResponse
     */
    public function getInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Queries the list of large model services bound to a Hologres instance.
     *
     * @param request - GetInstanceModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceModelResponse
     *
     * @param string                  $instanceId
     * @param GetInstanceModelRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetInstanceModelResponse
     */
    public function getInstanceModelWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetInstanceModel',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/getInstanceModel',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of large model services bound to a Hologres instance.
     *
     * @param request - GetInstanceModelRequest
     *
     * @returns GetInstanceModelResponse
     *
     * @param string                  $instanceId
     * @param GetInstanceModelRequest $request
     *
     * @return GetInstanceModelResponse
     */
    public function getInstanceModel($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceModelWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the last upgrade history.
     *
     * @param request - GetLastUpgradeRecordRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLastUpgradeRecordResponse
     *
     * @param string                      $instanceId
     * @param GetLastUpgradeRecordRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetLastUpgradeRecordResponse
     */
    public function getLastUpgradeRecordWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetLastUpgradeRecord',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/lastUpgradeRecord',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLastUpgradeRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the last upgrade history.
     *
     * @param request - GetLastUpgradeRecordRequest
     *
     * @returns GetLastUpgradeRecordResponse
     *
     * @param string                      $instanceId
     * @param GetLastUpgradeRecordRequest $request
     *
     * @return GetLastUpgradeRecordResponse
     */
    public function getLastUpgradeRecord($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLastUpgradeRecordWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the root certificate.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRootCertificateResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetRootCertificateResponse
     */
    public function getRootCertificateWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetRootCertificate',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/rootCertificate',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetRootCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the root certificate.
     *
     * @returns GetRootCertificateResponse
     *
     * @param string $instanceId
     *
     * @return GetRootCertificateResponse
     */
    public function getRootCertificate($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getRootCertificateWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Retrieves the backup configuration.
     *
     * @param request - GetScheduledBackupConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScheduledBackupConfigResponse
     *
     * @param GetScheduledBackupConfigRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return GetScheduledBackupConfigResponse
     */
    public function getScheduledBackupConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->scheduleType) {
            @$query['scheduleType'] = $request->scheduleType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScheduledBackupConfig',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/backups/scheduledConfig',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetScheduledBackupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the backup configuration.
     *
     * @param request - GetScheduledBackupConfigRequest
     *
     * @returns GetScheduledBackupConfigResponse
     *
     * @param GetScheduledBackupConfigRequest $request
     *
     * @return GetScheduledBackupConfigResponse
     */
    public function getScheduledBackupConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScheduledBackupConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the upgrade status.
     *
     * @param request - GetUpgradeStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUpgradeStatusResponse
     *
     * @param string                  $instanceId
     * @param GetUpgradeStatusRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatusWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUpgradeStatus',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/upgrade/status',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUpgradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the upgrade status.
     *
     * @param request - GetUpgradeStatusRequest
     *
     * @returns GetUpgradeStatusResponse
     *
     * @param string                  $instanceId
     * @param GetUpgradeStatusRequest $request
     *
     * @return GetUpgradeStatusResponse
     */
    public function getUpgradeStatus($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUpgradeStatusWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries whether an instance can be upgraded.
     *
     * @param request - GetUpgradeableRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUpgradeableResponse
     *
     * @param string                $instanceId
     * @param GetUpgradeableRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetUpgradeableResponse
     */
    public function getUpgradeableWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUpgradeable',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/upgradeable',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUpgradeableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether an instance can be upgraded.
     *
     * @param request - GetUpgradeableRequest
     *
     * @returns GetUpgradeableResponse
     *
     * @param string                $instanceId
     * @param GetUpgradeableRequest $request
     *
     * @return GetUpgradeableResponse
     */
    public function getUpgradeable($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUpgradeableWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the details of a compute group.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWarehouseDetailResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetWarehouseDetailResponse
     */
    public function getWarehouseDetailWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetWarehouseDetail',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/getWarehouseDetail',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetWarehouseDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a compute group.
     *
     * @returns GetWarehouseDetailResponse
     *
     * @param string $instanceId
     *
     * @return GetWarehouseDetailResponse
     */
    public function getWarehouseDetail($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getWarehouseDetailWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Grants database permissions.
     *
     * @param request - GrantDatabasePermissionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantDatabasePermissionResponse
     *
     * @param string                         $instanceId
     * @param GrantDatabasePermissionRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GrantDatabasePermissionResponse
     */
    public function grantDatabasePermissionWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->databaseName) {
            @$body['databaseName'] = $request->databaseName;
        }

        if (null !== $request->privileges) {
            @$body['privileges'] = $request->privileges;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GrantDatabasePermission',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/grantDatabasePermission',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GrantDatabasePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants database permissions.
     *
     * @param request - GrantDatabasePermissionRequest
     *
     * @returns GrantDatabasePermissionResponse
     *
     * @param string                         $instanceId
     * @param GrantDatabasePermissionRequest $request
     *
     * @return GrantDatabasePermissionResponse
     */
    public function grantDatabasePermission($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantDatabasePermissionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Grants permissions on a database.
     *
     * @param request - GrantSchemaPermissionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantSchemaPermissionResponse
     *
     * @param string                       $instanceId
     * @param GrantSchemaPermissionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GrantSchemaPermissionResponse
     */
    public function grantSchemaPermissionWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->databaseName) {
            @$body['databaseName'] = $request->databaseName;
        }

        if (null !== $request->privileges) {
            @$body['privileges'] = $request->privileges;
        }

        if (null !== $request->schemaName) {
            @$body['schemaName'] = $request->schemaName;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GrantSchemaPermission',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/grantSchemaPermission',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GrantSchemaPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants permissions on a database.
     *
     * @param request - GrantSchemaPermissionRequest
     *
     * @returns GrantSchemaPermissionResponse
     *
     * @param string                       $instanceId
     * @param GrantSchemaPermissionRequest $request
     *
     * @return GrantSchemaPermissionResponse
     */
    public function grantSchemaPermission($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantSchemaPermissionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Grants table permissions to a specified user.
     *
     * @param request - GrantTablePermissionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantTablePermissionResponse
     *
     * @param string                      $instanceId
     * @param GrantTablePermissionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GrantTablePermissionResponse
     */
    public function grantTablePermissionWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allTable) {
            @$body['allTable'] = $request->allTable;
        }

        if (null !== $request->columnNames) {
            @$body['columnNames'] = $request->columnNames;
        }

        if (null !== $request->databaseName) {
            @$body['databaseName'] = $request->databaseName;
        }

        if (null !== $request->privileges) {
            @$body['privileges'] = $request->privileges;
        }

        if (null !== $request->schemaName) {
            @$body['schemaName'] = $request->schemaName;
        }

        if (null !== $request->tableName) {
            @$body['tableName'] = $request->tableName;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GrantTablePermission',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/grantTablePermission',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GrantTablePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants table permissions to a specified user.
     *
     * @param request - GrantTablePermissionRequest
     *
     * @returns GrantTablePermissionResponse
     *
     * @param string                      $instanceId
     * @param GrantTablePermissionRequest $request
     *
     * @return GrantTablePermissionResponse
     */
    public function grantTablePermission($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->grantTablePermissionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of backups. A backup is a full data snapshot of an instance up to the snapshot time. You can fully restore the original data by purchasing a new instance.
     *
     * @param request - ListBackupDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBackupDataResponse
     *
     * @param ListBackupDataRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListBackupDataResponse
     */
    public function listBackupDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupType) {
            @$query['backupType'] = $request->backupType;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBackupData',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/backups',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListBackupDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of backups. A backup is a full data snapshot of an instance up to the snapshot time. You can fully restore the original data by purchasing a new instance.
     *
     * @param request - ListBackupDataRequest
     *
     * @returns ListBackupDataResponse
     *
     * @param ListBackupDataRequest $request
     *
     * @return ListBackupDataResponse
     */
    public function listBackupData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBackupDataWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of databases.
     *
     * @param request - ListDatabasesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDatabasesResponse
     *
     * @param string               $instanceId
     * @param ListDatabasesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListDatabasesResponse
     */
    public function listDatabasesWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->external) {
            @$query['external'] = $request->external;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDatabases',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/listDatabases',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDatabasesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of databases.
     *
     * @param request - ListDatabasesRequest
     *
     * @returns ListDatabasesResponse
     *
     * @param string               $instanceId
     * @param ListDatabasesRequest $request
     *
     * @return ListDatabasesResponse
     */
    public function listDatabases($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatabasesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the read-only secondary instances.
     *
     * @remarks
     * Retrieves a list of read-only secondary instances bound to a specified Hologres primary instance. instanceId is a path parameter and must be provided when you call this operation.
     *
     * @param request - ListFollowerInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFollowerInstancesResponse
     *
     * @param string                       $instanceId
     * @param ListFollowerInstancesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListFollowerInstancesResponse
     */
    public function listFollowerInstancesWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFollowerInstances',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/listFollowerInstances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListFollowerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the read-only secondary instances.
     *
     * @remarks
     * Retrieves a list of read-only secondary instances bound to a specified Hologres primary instance. instanceId is a path parameter and must be provided when you call this operation.
     *
     * @param request - ListFollowerInstancesRequest
     *
     * @returns ListFollowerInstancesResponse
     *
     * @param string                       $instanceId
     * @param ListFollowerInstancesRequest $request
     *
     * @return ListFollowerInstancesResponse
     */
    public function listFollowerInstances($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFollowerInstancesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the list of AI node resources.
     *
     * @remarks
     * ## Request description
     * - Retrieves information about deployed model services on a specific Hologres instance, including but not limited to resource usage such as CPU, GPU, and memory.
     * - The `instanceId` parameter is optional. If not provided, the information of all related instances is returned by default.
     * - This operation applies to Hologres AI nodes. Some parameters may be invalid or inapplicable for non-AI nodes.
     * - Make sure that you fully understand the [billing methods and pricing of Alibaba Cloud Hologres](https://help.aliyun.com/document_detail/113666.html) before you call this operation.
     *
     * @param request - ListInstanceModelRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceModelResponse
     *
     * @param ListInstanceModelRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListInstanceModelResponse
     */
    public function listInstanceModelWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListInstanceModel',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/rpc/listInstanceModel',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of AI node resources.
     *
     * @remarks
     * ## Request description
     * - Retrieves information about deployed model services on a specific Hologres instance, including but not limited to resource usage such as CPU, GPU, and memory.
     * - The `instanceId` parameter is optional. If not provided, the information of all related instances is returned by default.
     * - This operation applies to Hologres AI nodes. Some parameters may be invalid or inapplicable for non-AI nodes.
     * - Make sure that you fully understand the [billing methods and pricing of Alibaba Cloud Hologres](https://help.aliyun.com/document_detail/113666.html) before you call this operation.
     *
     * @param request - ListInstanceModelRequest
     *
     * @returns ListInstanceModelResponse
     *
     * @param ListInstanceModelRequest $request
     *
     * @return ListInstanceModelResponse
     */
    public function listInstanceModel($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceModelWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of instances.
     *
     * @param request - ListInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cmsInstanceType) {
            @$body['cmsInstanceType'] = $request->cmsInstanceType;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$body['tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of instances.
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves a list of available primary instance IDs.
     *
     * @remarks
     * Retrieves a list of primary instances that can be bound to a specified Hologres secondary instance. The `instanceId` parameter is a path parameter and is required.
     *
     * @param request - ListLeaderInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLeaderInstancesResponse
     *
     * @param string                     $instanceId
     * @param ListLeaderInstancesRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListLeaderInstancesResponse
     */
    public function listLeaderInstancesWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLeaderInstances',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/primaryInstances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListLeaderInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of available primary instance IDs.
     *
     * @remarks
     * Retrieves a list of primary instances that can be bound to a specified Hologres secondary instance. The `instanceId` parameter is a path parameter and is required.
     *
     * @param request - ListLeaderInstancesRequest
     *
     * @returns ListLeaderInstancesResponse
     *
     * @param string                     $instanceId
     * @param ListLeaderInstancesRequest $request
     *
     * @return ListLeaderInstancesResponse
     */
    public function listLeaderInstances($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLeaderInstancesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the zones to which an instance can be migrated. Three-zone instances support self-service migration between zones.
     *
     * @param request - ListMigrationZonesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMigrationZonesResponse
     *
     * @param string                    $instanceId
     * @param ListMigrationZonesRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListMigrationZonesResponse
     */
    public function listMigrationZonesWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMigrationZones',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/listMigrationZones',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListMigrationZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the zones to which an instance can be migrated. Three-zone instances support self-service migration between zones.
     *
     * @param request - ListMigrationZonesRequest
     *
     * @returns ListMigrationZonesResponse
     *
     * @param string                    $instanceId
     * @param ListMigrationZonesRequest $request
     *
     * @return ListMigrationZonesResponse
     */
    public function listMigrationZones($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMigrationZonesWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Lists models.
     *
     * @param request - ListModelCatalogRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListModelCatalogResponse
     *
     * @param string                  $instanceId
     * @param ListModelCatalogRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListModelCatalogResponse
     */
    public function listModelCatalogWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->provider) {
            @$query['provider'] = $request->provider;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListModelCatalog',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/listModelCatalog',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListModelCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists models.
     *
     * @param request - ListModelCatalogRequest
     *
     * @returns ListModelCatalogResponse
     *
     * @param string                  $instanceId
     * @param ListModelCatalogRequest $request
     *
     * @return ListModelCatalogResponse
     */
    public function listModelCatalog($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelCatalogWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of operation events based on specified conditions, supporting pagination and sorting.
     *
     * @param request - ListOperationEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOperationEventsResponse
     *
     * @param ListOperationEventsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListOperationEventsResponse
     */
    public function listOperationEventsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eventName) {
            @$body['eventName'] = $request->eventName;
        }

        if (null !== $request->eventNameDesc) {
            @$body['eventNameDesc'] = $request->eventNameDesc;
        }

        if (null !== $request->eventType) {
            @$body['eventType'] = $request->eventType;
        }

        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->scheduleTimeDesc) {
            @$body['scheduleTimeDesc'] = $request->scheduleTimeDesc;
        }

        if (null !== $request->state) {
            @$body['state'] = $request->state;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListOperationEvents',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/listOperationEvents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListOperationEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of operation events based on specified conditions, supporting pagination and sorting.
     *
     * @param request - ListOperationEventsRequest
     *
     * @returns ListOperationEventsResponse
     *
     * @param ListOperationEventsRequest $request
     *
     * @return ListOperationEventsResponse
     */
    public function listOperationEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listOperationEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * Queries the list of all Hologres regions.
     *
     * @param request - ListRegionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListRegions',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/regions/listRegions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of all Hologres regions.
     *
     * @param request - ListRegionsRequest
     *
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     *
     * @return ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * Retrieves the list of upgradable versions.
     *
     * @param request - ListUpgradeReleaseVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUpgradeReleaseVersionsResponse
     *
     * @param string                            $instanceId
     * @param ListUpgradeReleaseVersionsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListUpgradeReleaseVersionsResponse
     */
    public function listUpgradeReleaseVersionsWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUpgradeReleaseVersions',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/upgrade/listReleaseVersions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListUpgradeReleaseVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of upgradable versions.
     *
     * @param request - ListUpgradeReleaseVersionsRequest
     *
     * @returns ListUpgradeReleaseVersionsResponse
     *
     * @param string                            $instanceId
     * @param ListUpgradeReleaseVersionsRequest $request
     *
     * @return ListUpgradeReleaseVersionsResponse
     */
    public function listUpgradeReleaseVersions($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUpgradeReleaseVersionsWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the elastic scheduling events of a specified instance within a given time range.
     *
     * @remarks
     * ## Request description
     * - This operation retrieves a list of elastic scaling events for compute groups of a specified instance.
     * - The `startTime` and `endTime` parameters specify the time range for the query. The default values are three days ago and the current time, respectively.
     * - The `pageSize` and `pageNumber` parameters are used for paging control. The maximum value of `pageSize` is 100.
     * - If the `elasticType` parameter is not provided, elastic scaling events of all types are returned.
     *
     * @param request - ListWarehouseScheduleEventRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWarehouseScheduleEventResponse
     *
     * @param string                            $instanceId
     * @param ListWarehouseScheduleEventRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListWarehouseScheduleEventResponse
     */
    public function listWarehouseScheduleEventWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->elasticType) {
            @$body['elasticType'] = $request->elasticType;
        }

        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$body['pageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListWarehouseScheduleEvent',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/listWarehouseScheduleEvent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWarehouseScheduleEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the elastic scheduling events of a specified instance within a given time range.
     *
     * @remarks
     * ## Request description
     * - This operation retrieves a list of elastic scaling events for compute groups of a specified instance.
     * - The `startTime` and `endTime` parameters specify the time range for the query. The default values are three days ago and the current time, respectively.
     * - The `pageSize` and `pageNumber` parameters are used for paging control. The maximum value of `pageSize` is 100.
     * - If the `elasticType` parameter is not provided, elastic scaling events of all types are returned.
     *
     * @param request - ListWarehouseScheduleEventRequest
     *
     * @returns ListWarehouseScheduleEventResponse
     *
     * @param string                            $instanceId
     * @param ListWarehouseScheduleEventRequest $request
     *
     * @return ListWarehouseScheduleEventResponse
     */
    public function listWarehouseScheduleEvent($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWarehouseScheduleEventWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves the list of time-based elastic plan tasks for all compute groups in a specified instance.
     *
     * @param request - ListWarehouseScheduleTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWarehouseScheduleTaskResponse
     *
     * @param string                           $instanceId
     * @param ListWarehouseScheduleTaskRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListWarehouseScheduleTaskResponse
     */
    public function listWarehouseScheduleTaskWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListWarehouseScheduleTask',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/listWarehouseScheduleTask',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWarehouseScheduleTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of time-based elastic plan tasks for all compute groups in a specified instance.
     *
     * @param request - ListWarehouseScheduleTaskRequest
     *
     * @returns ListWarehouseScheduleTaskResponse
     *
     * @param string                           $instanceId
     * @param ListWarehouseScheduleTaskRequest $request
     *
     * @return ListWarehouseScheduleTaskResponse
     */
    public function listWarehouseScheduleTask($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWarehouseScheduleTaskWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Retrieves a list of compute groups.
     *
     * @remarks
     * 获取指定计算组型实例下的计算组列表。instanceId 需为计算组型（InstanceType 为 Warehouse）实例，可通过 ListInstances 查询获取。返回结果中的 Name 为计算组名称、Status 为计算组状态（如 kRunning 表示运行中），可用于 RestartHoloWarehouse、SuspendHoloWarehouse 等接口。
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWarehousesResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListWarehousesResponse
     */
    public function listWarehousesWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListWarehouses',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/listWarehouses',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListWarehousesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of compute groups.
     *
     * @remarks
     * 获取指定计算组型实例下的计算组列表。instanceId 需为计算组型（InstanceType 为 Warehouse）实例，可通过 ListInstances 查询获取。返回结果中的 Name 为计算组名称、Status 为计算组状态（如 kRunning 表示运行中），可用于 RestartHoloWarehouse、SuspendHoloWarehouse 等接口。
     *
     * @returns ListWarehousesResponse
     *
     * @param string $instanceId
     *
     * @return ListWarehousesResponse
     */
    public function listWarehouses($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listWarehousesWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Migrates an instance to the destination zone. Only three-zone instances are supported. Storage migration is not required, and the instance is started directly in the destination zone in approximately 5 minutes.
     *
     * @param request - MigrateInstanceZoneRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateInstanceZoneResponse
     *
     * @param string                     $instanceId
     * @param MigrateInstanceZoneRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return MigrateInstanceZoneResponse
     */
    public function migrateInstanceZoneWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->zoneId) {
            @$body['zoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MigrateInstanceZone',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/migrateInstanceZone',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return MigrateInstanceZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Migrates an instance to the destination zone. Only three-zone instances are supported. Storage migration is not required, and the instance is started directly in the destination zone in approximately 5 minutes.
     *
     * @param request - MigrateInstanceZoneRequest
     *
     * @returns MigrateInstanceZoneResponse
     *
     * @param string                     $instanceId
     * @param MigrateInstanceZoneRequest $request
     *
     * @return MigrateInstanceZoneResponse
     */
    public function migrateInstanceZone($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->migrateInstanceZoneWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Initiates pre-upgrade preparations. An evaluation is required before the upgrade. If the evaluation passes, the upgrade can proceed. Otherwise, contact technical support for a manual upgrade.
     *
     * @param request - PrepareUpgradeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PrepareUpgradeResponse
     *
     * @param string                $instanceId
     * @param PrepareUpgradeRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return PrepareUpgradeResponse
     */
    public function prepareUpgradeWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->dryRun) {
            @$body['dryRun'] = $request->dryRun;
        }

        if (null !== $request->version) {
            @$body['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PrepareUpgrade',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/upgrade/prepare',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PrepareUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates pre-upgrade preparations. An evaluation is required before the upgrade. If the evaluation passes, the upgrade can proceed. Otherwise, contact technical support for a manual upgrade.
     *
     * @param request - PrepareUpgradeRequest
     *
     * @returns PrepareUpgradeResponse
     *
     * @param string                $instanceId
     * @param PrepareUpgradeRequest $request
     *
     * @return PrepareUpgradeResponse
     */
    public function prepareUpgrade($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->prepareUpgradeWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Balances the shards of a compute group.
     *
     * @param request - RebalanceHoloWarehouseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebalanceHoloWarehouseResponse
     *
     * @param string                        $instanceId
     * @param RebalanceHoloWarehouseRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return RebalanceHoloWarehouseResponse
     */
    public function rebalanceHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RebalanceHoloWarehouse',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/rebalanceHoloWarehouse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RebalanceHoloWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Balances the shards of a compute group.
     *
     * @param request - RebalanceHoloWarehouseRequest
     *
     * @returns RebalanceHoloWarehouseResponse
     *
     * @param string                        $instanceId
     * @param RebalanceHoloWarehouseRequest $request
     *
     * @return RebalanceHoloWarehouseResponse
     */
    public function rebalanceHoloWarehouse($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rebalanceHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Renames a compute group.
     *
     * @param request - RenameHoloWarehouseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenameHoloWarehouseResponse
     *
     * @param string                     $instanceId
     * @param RenameHoloWarehouseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RenameHoloWarehouseResponse
     */
    public function renameHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->newWarehouseName) {
            @$body['newWarehouseName'] = $request->newWarehouseName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RenameHoloWarehouse',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/renameHoloWarehouse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RenameHoloWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renames a compute group.
     *
     * @param request - RenameHoloWarehouseRequest
     *
     * @returns RenameHoloWarehouseResponse
     *
     * @param string                     $instanceId
     * @param RenameHoloWarehouseRequest $request
     *
     * @return RenameHoloWarehouseResponse
     */
    public function renameHoloWarehouse($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renameHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Renews an instance manually. You can also enable monthly auto-renewal during the renewal.
     *
     * @remarks
     * >Warning: This API operation incurs fees. Make sure that you fully understand the billing methods and pricing of Hologres before you call this operation.</warning>
     * <props="china">- For more information about Hologres billing, see [Billing overview](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview).
     * <props="intl">- For more information about Hologres billing, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview).
     * <props="china">- For more information about Hologres renewal, see [Renewal management](https://www.alibabacloud.com/help/en/hologres/product-overview/manage-renewals).
     * <props="intl">- For more information about Hologres renewal, see [Renewal management](https://www.alibabacloud.com/help/zh/hologres/product-overview/manage-renewals?spm=a2c63.p38356.0.0.38e731c9VAwtDP).
     * - Renewal applies only to subscription (PrePaid) instances.
     *
     * @param request - RenewInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewInstanceResponse
     *
     * @param string               $instanceId
     * @param RenewInstanceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoRenew) {
            @$body['autoRenew'] = $request->autoRenew;
        }

        if (null !== $request->duration) {
            @$body['duration'] = $request->duration;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RenewInstance',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/renew',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews an instance manually. You can also enable monthly auto-renewal during the renewal.
     *
     * @remarks
     * >Warning: This API operation incurs fees. Make sure that you fully understand the billing methods and pricing of Hologres before you call this operation.</warning>
     * <props="china">- For more information about Hologres billing, see [Billing overview](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview).
     * <props="intl">- For more information about Hologres billing, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview).
     * <props="china">- For more information about Hologres renewal, see [Renewal management](https://www.alibabacloud.com/help/en/hologres/product-overview/manage-renewals).
     * <props="intl">- For more information about Hologres renewal, see [Renewal management](https://www.alibabacloud.com/help/zh/hologres/product-overview/manage-renewals?spm=a2c63.p38356.0.0.38e731c9VAwtDP).
     * - Renewal applies only to subscription (PrePaid) instances.
     *
     * @param request - RenewInstanceRequest
     *
     * @returns RenewInstanceResponse
     *
     * @param string               $instanceId
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Updates an SSL certificate.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewSSLCertificateResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RenewSSLCertificateResponse
     */
    public function renewSSLCertificateWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RenewSSLCertificate',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/renewSSLCertificate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RenewSSLCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates an SSL certificate.
     *
     * @returns RenewSSLCertificateResponse
     *
     * @param string $instanceId
     *
     * @return RenewSSLCertificateResponse
     */
    public function renewSSLCertificate($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewSSLCertificateWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Restarts a compute group.
     *
     * @remarks
     * 重启指定计算组。前置条件：实例处于运行中（Running）状态，可通过 GetInstance 查询 InstanceStatus；计算组处于运行中状态（kRunning），可通过 ListWarehouses 查询 Status 获取计算组名称和当前状态。调用需要实例的 Superuser 权限，重启为异步操作，调用后可再次通过 ListWarehouses 轮询 Status 确认是否完成。
     *
     * @param request - RestartHoloWarehouseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartHoloWarehouseResponse
     *
     * @param string                      $instanceId
     * @param RestartHoloWarehouseRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return RestartHoloWarehouseResponse
     */
    public function restartHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestartHoloWarehouse',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/restartHoloWarehouse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartHoloWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a compute group.
     *
     * @remarks
     * 重启指定计算组。前置条件：实例处于运行中（Running）状态，可通过 GetInstance 查询 InstanceStatus；计算组处于运行中状态（kRunning），可通过 ListWarehouses 查询 Status 获取计算组名称和当前状态。调用需要实例的 Superuser 权限，重启为异步操作，调用后可再次通过 ListWarehouses 轮询 Status 确认是否完成。
     *
     * @param request - RestartHoloWarehouseRequest
     *
     * @returns RestartHoloWarehouseResponse
     *
     * @param string                      $instanceId
     * @param RestartHoloWarehouseRequest $request
     *
     * @return RestartHoloWarehouseResponse
     */
    public function restartHoloWarehouse($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Restarts a Hologres instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartInstanceResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RestartInstance',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/restart',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts a Hologres instance.
     *
     * @returns RestartInstanceResponse
     *
     * @param string $instanceId
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Resumes a compute group from the stopped state to the normal state.
     *
     * @param request - ResumeHoloWarehouseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeHoloWarehouseResponse
     *
     * @param string                     $instanceId
     * @param ResumeHoloWarehouseRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ResumeHoloWarehouseResponse
     */
    public function resumeHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResumeHoloWarehouse',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/resumeHoloWarehouse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResumeHoloWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes a compute group from the stopped state to the normal state.
     *
     * @param request - ResumeHoloWarehouseRequest
     *
     * @returns ResumeHoloWarehouseResponse
     *
     * @param string                     $instanceId
     * @param ResumeHoloWarehouseRequest $request
     *
     * @return ResumeHoloWarehouseResponse
     */
    public function resumeHoloWarehouse($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Resumes a paused instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeInstanceResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ResumeInstance',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/resume',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ResumeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes a paused instance.
     *
     * @returns ResumeInstanceResponse
     *
     * @param string $instanceId
     *
     * @return ResumeInstanceResponse
     */
    public function resumeInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->resumeInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Revokes database authorization.
     *
     * @param request - RevokeDatabasePermissionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeDatabasePermissionResponse
     *
     * @param string                          $instanceId
     * @param RevokeDatabasePermissionRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return RevokeDatabasePermissionResponse
     */
    public function revokeDatabasePermissionWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->databaseName) {
            @$body['databaseName'] = $request->databaseName;
        }

        if (null !== $request->privileges) {
            @$body['privileges'] = $request->privileges;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokeDatabasePermission',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/revokeDatabasePermission',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RevokeDatabasePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes database authorization.
     *
     * @param request - RevokeDatabasePermissionRequest
     *
     * @returns RevokeDatabasePermissionResponse
     *
     * @param string                          $instanceId
     * @param RevokeDatabasePermissionRequest $request
     *
     * @return RevokeDatabasePermissionResponse
     */
    public function revokeDatabasePermission($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeDatabasePermissionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Revokes schema authorization.
     *
     * @param request - RevokeSchemaPermissionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeSchemaPermissionResponse
     *
     * @param string                        $instanceId
     * @param RevokeSchemaPermissionRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return RevokeSchemaPermissionResponse
     */
    public function revokeSchemaPermissionWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->databaseName) {
            @$body['databaseName'] = $request->databaseName;
        }

        if (null !== $request->privileges) {
            @$body['privileges'] = $request->privileges;
        }

        if (null !== $request->schemaName) {
            @$body['schemaName'] = $request->schemaName;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokeSchemaPermission',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/revokeSchemaPermission',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RevokeSchemaPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes schema authorization.
     *
     * @param request - RevokeSchemaPermissionRequest
     *
     * @returns RevokeSchemaPermissionResponse
     *
     * @param string                        $instanceId
     * @param RevokeSchemaPermissionRequest $request
     *
     * @return RevokeSchemaPermissionResponse
     */
    public function revokeSchemaPermission($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeSchemaPermissionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Revokes table permissions.
     *
     * @param request - RevokeTablePermissionRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeTablePermissionResponse
     *
     * @param string                       $instanceId
     * @param RevokeTablePermissionRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return RevokeTablePermissionResponse
     */
    public function revokeTablePermissionWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->allTable) {
            @$body['allTable'] = $request->allTable;
        }

        if (null !== $request->columnNames) {
            @$body['columnNames'] = $request->columnNames;
        }

        if (null !== $request->databaseName) {
            @$body['databaseName'] = $request->databaseName;
        }

        if (null !== $request->privileges) {
            @$body['privileges'] = $request->privileges;
        }

        if (null !== $request->schemaName) {
            @$body['schemaName'] = $request->schemaName;
        }

        if (null !== $request->tableName) {
            @$body['tableName'] = $request->tableName;
        }

        if (null !== $request->userName) {
            @$body['userName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RevokeTablePermission',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/revokeTablePermission',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RevokeTablePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes table permissions.
     *
     * @param request - RevokeTablePermissionRequest
     *
     * @returns RevokeTablePermissionResponse
     *
     * @param string                       $instanceId
     * @param RevokeTablePermissionRequest $request
     *
     * @return RevokeTablePermissionResponse
     */
    public function revokeTablePermission($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeTablePermissionWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Scales a compute group.
     *
     * @param request - ScaleHoloWarehouseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScaleHoloWarehouseResponse
     *
     * @param string                    $instanceId
     * @param ScaleHoloWarehouseRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ScaleHoloWarehouseResponse
     */
    public function scaleHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterCount) {
            @$body['clusterCount'] = $request->clusterCount;
        }

        if (null !== $request->cpu) {
            @$body['cpu'] = $request->cpu;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScaleHoloWarehouse',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/scaleHoloWarehouse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ScaleHoloWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scales a compute group.
     *
     * @param request - ScaleHoloWarehouseRequest
     *
     * @returns ScaleHoloWarehouseResponse
     *
     * @param string                    $instanceId
     * @param ScaleHoloWarehouseRequest $request
     *
     * @return ScaleHoloWarehouseResponse
     */
    public function scaleHoloWarehouse($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the specifications and storage space of an instance.
     *
     * @remarks
     * >Warning: This API operation incurs fees. Make sure that you fully understand the billing methods and pricing of Hologres before you call this operation.
     * <props="china">- For more information about Hologres billing, see [Billing overview](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview).
     * <props="intl">- For more information about Hologres billing, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview).
     * <props="china">- The instance is unavailable while its compute resources are being changed. Changing instance storage resources of the instance does not affect its normal use. Do not change instance specifications frequently. For more information, see [Upgrade or downgrade instance specifications](https://www.alibabacloud.com/help/en/hologres/product-overview/upgrade-or-downgrade-instance-specifications).
     * <props="intl">- The instance is unavailable while its compute resources are being changed. Changing instance storage resources of the instance does not affect its normal use. Do not change instance specifications frequently. For more information, see [Upgrade or downgrade instance specifications](https://www.alibabacloud.com/help/zh/hologres/product-overview/upgrade-or-downgrade-instance-specifications).
     *
     * @param request - ScaleInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ScaleInstanceResponse
     *
     * @param string               $instanceId
     * @param ScaleInstanceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ScaleInstanceResponse
     */
    public function scaleInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->coldStorageSize) {
            @$body['coldStorageSize'] = $request->coldStorageSize;
        }

        if (null !== $request->cpu) {
            @$body['cpu'] = $request->cpu;
        }

        if (null !== $request->enableServerlessComputing) {
            @$body['enableServerlessComputing'] = $request->enableServerlessComputing;
        }

        if (null !== $request->gatewayCount) {
            @$body['gatewayCount'] = $request->gatewayCount;
        }

        if (null !== $request->scaleType) {
            @$body['scaleType'] = $request->scaleType;
        }

        if (null !== $request->storageSize) {
            @$body['storageSize'] = $request->storageSize;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ScaleInstance',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/scale',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ScaleInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the specifications and storage space of an instance.
     *
     * @remarks
     * >Warning: This API operation incurs fees. Make sure that you fully understand the billing methods and pricing of Hologres before you call this operation.
     * <props="china">- For more information about Hologres billing, see [Billing overview](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview).
     * <props="intl">- For more information about Hologres billing, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview).
     * <props="china">- The instance is unavailable while its compute resources are being changed. Changing instance storage resources of the instance does not affect its normal use. Do not change instance specifications frequently. For more information, see [Upgrade or downgrade instance specifications](https://www.alibabacloud.com/help/en/hologres/product-overview/upgrade-or-downgrade-instance-specifications).
     * <props="intl">- The instance is unavailable while its compute resources are being changed. Changing instance storage resources of the instance does not affect its normal use. Do not change instance specifications frequently. For more information, see [Upgrade or downgrade instance specifications](https://www.alibabacloud.com/help/zh/hologres/product-overview/upgrade-or-downgrade-instance-specifications).
     *
     * @param request - ScaleInstanceRequest
     *
     * @returns ScaleInstanceResponse
     *
     * @param string               $instanceId
     * @param ScaleInstanceRequest $request
     *
     * @return ScaleInstanceResponse
     */
    public function scaleInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Pauses an instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopInstanceResponse
     *
     * @param string         $instanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($instanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'StopInstance',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/stop',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses an instance.
     *
     * @returns StopInstanceResponse
     *
     * @param string $instanceId
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($instanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopInstanceWithOptions($instanceId, $headers, $runtime);
    }

    /**
     * Stops a compute group.
     *
     * @remarks
     * 停止指定计算组。前置条件：instanceId 为计算组型（InstanceType 为 Warehouse）且处于运行中状态的实例，可通过 ListInstances 获取；name 为 ListWarehouses 返回的计算组名称，该计算组需处于运行中状态（kRunning）。若该计算组是 Table Group 的主计算组且存在从计算组，则无法停止。调用需要实例的 Superuser 权限，停止为异步操作。
     *
     * @param request - SuspendHoloWarehouseRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendHoloWarehouseResponse
     *
     * @param string                      $instanceId
     * @param SuspendHoloWarehouseRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return SuspendHoloWarehouseResponse
     */
    public function suspendHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SuspendHoloWarehouse',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/suspendHoloWarehouse',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return SuspendHoloWarehouseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a compute group.
     *
     * @remarks
     * 停止指定计算组。前置条件：instanceId 为计算组型（InstanceType 为 Warehouse）且处于运行中状态的实例，可通过 ListInstances 获取；name 为 ListWarehouses 返回的计算组名称，该计算组需处于运行中状态（kRunning）。若该计算组是 Table Group 的主计算组且存在从计算组，则无法停止。调用需要实例的 Superuser 权限，停止为异步操作。
     *
     * @param request - SuspendHoloWarehouseRequest
     *
     * @returns SuspendHoloWarehouseResponse
     *
     * @param string                      $instanceId
     * @param SuspendHoloWarehouseRequest $request
     *
     * @return SuspendHoloWarehouseResponse
     */
    public function suspendHoloWarehouse($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->suspendHoloWarehouseWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Adds a tag.
     *
     * @param request - TagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $body = [];
        if (null !== $request->category) {
            @$body['category'] = $request->category;
        }

        if (null !== $request->resourceIds) {
            @$body['resourceIds'] = $request->resourceIds;
        }

        if (null !== $request->tagOwnerUid) {
            @$body['tagOwnerUid'] = $request->tagOwnerUid;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tag',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a tag.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->tagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Dissociates a primary instance from a secondary instance.
     *
     * @param request - UnBindLeaderInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnBindLeaderInstanceResponse
     *
     * @param string                      $instanceId
     * @param UnBindLeaderInstanceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UnBindLeaderInstanceResponse
     */
    public function unBindLeaderInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnBindLeaderInstance',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/unBindReadOnly',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UnBindLeaderInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dissociates a primary instance from a secondary instance.
     *
     * @param request - UnBindLeaderInstanceRequest
     *
     * @returns UnBindLeaderInstanceResponse
     *
     * @param string                      $instanceId
     * @param UnBindLeaderInstanceRequest $request
     *
     * @return UnBindLeaderInstanceResponse
     */
    public function unBindLeaderInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unBindLeaderInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes instance tags.
     *
     * @param request - UntagResourcesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->category) {
            @$body['category'] = $request->category;
        }

        if (null !== $request->resourceIds) {
            @$body['resourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceType) {
            @$body['resourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKeys) {
            @$body['tagKeys'] = $request->tagKeys;
        }

        if (null !== $request->tagOwnerUid) {
            @$body['tagOwnerUid'] = $request->tagOwnerUid;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/tag/unTag',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes instance tags.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->untagResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * Enables automatic minor version upgrades. After this feature is enabled, the instance is automatically upgraded during the time window.
     *
     * @param request - UpdateAutoUpgradeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAutoUpgradeResponse
     *
     * @param string                   $instanceId
     * @param UpdateAutoUpgradeRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAutoUpgradeResponse
     */
    public function updateAutoUpgradeWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoUpgrade) {
            @$body['autoUpgrade'] = $request->autoUpgrade;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAutoUpgrade',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/autoUpgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateAutoUpgradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables automatic minor version upgrades. After this feature is enabled, the instance is automatically upgraded during the time window.
     *
     * @param request - UpdateAutoUpgradeRequest
     *
     * @returns UpdateAutoUpgradeResponse
     *
     * @param string                   $instanceId
     * @param UpdateAutoUpgradeRequest $request
     *
     * @return UpdateAutoUpgradeResponse
     */
    public function updateAutoUpgrade($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAutoUpgradeWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the description of a backup.
     *
     * @param request - UpdateBackupDataDescRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateBackupDataDescResponse
     *
     * @param string                      $id
     * @param UpdateBackupDataDescRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateBackupDataDescResponse
     */
    public function updateBackupDataDescWithOptions($id, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->desc) {
            @$body['desc'] = $request->desc;
        }

        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateBackupDataDesc',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/backups/' . Url::percentEncode($id) . '/desc',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateBackupDataDescResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the description of a backup.
     *
     * @param request - UpdateBackupDataDescRequest
     *
     * @returns UpdateBackupDataDescResponse
     *
     * @param string                      $id
     * @param UpdateBackupDataDescRequest $request
     *
     * @return UpdateBackupDataDescResponse
     */
    public function updateBackupDataDesc($id, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBackupDataDescWithOptions($id, $request, $headers, $runtime);
    }

    /**
     * Modifies the HoloWeb logon permissions.
     *
     * @remarks
     * Model creation for a model service requires a large number of parameters. If you are performing model creation for a Model Studio model, invoke ListModelCatalog to query model parameters. If you are using a Hologres AI node, invoke GetAvailableModelsResource to query model parameters.
     *
     * @param request - UpdateHoloWebLoginSettingRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateHoloWebLoginSettingResponse
     *
     * @param string                           $instanceId
     * @param UpdateHoloWebLoginSettingRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateHoloWebLoginSettingResponse
     */
    public function updateHoloWebLoginSettingWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->allowExternalAccountsLogin) {
            @$body['allowExternalAccountsLogin'] = $request->allowExternalAccountsLogin;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateHoloWebLoginSetting',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/updateHoloWebLoginSetting',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateHoloWebLoginSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the HoloWeb logon permissions.
     *
     * @remarks
     * Model creation for a model service requires a large number of parameters. If you are performing model creation for a Model Studio model, invoke ListModelCatalog to query model parameters. If you are using a Hologres AI node, invoke GetAvailableModelsResource to query model parameters.
     *
     * @param request - UpdateHoloWebLoginSettingRequest
     *
     * @returns UpdateHoloWebLoginSettingResponse
     *
     * @param string                           $instanceId
     * @param UpdateHoloWebLoginSettingRequest $request
     *
     * @return UpdateHoloWebLoginSettingResponse
     */
    public function updateHoloWebLoginSetting($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateHoloWebLoginSettingWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the name of an instance.
     *
     * @param request - UpdateInstanceNameRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceNameResponse
     *
     * @param string                    $instanceId
     * @param UpdateInstanceNameRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateInstanceNameResponse
     */
    public function updateInstanceNameWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceName) {
            @$body['instanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceName',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/instanceName',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of an instance.
     *
     * @param request - UpdateInstanceNameRequest
     *
     * @returns UpdateInstanceNameResponse
     *
     * @param string                    $instanceId
     * @param UpdateInstanceNameRequest $request
     *
     * @return UpdateInstanceNameResponse
     */
    public function updateInstanceName($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceNameWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the network type of an instance.
     *
     * @param request - UpdateInstanceNetworkTypeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceNetworkTypeResponse
     *
     * @param string                           $instanceId
     * @param UpdateInstanceNetworkTypeRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateInstanceNetworkTypeResponse
     */
    public function updateInstanceNetworkTypeWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->anyTunnelToSingleTunnel) {
            @$body['anyTunnelToSingleTunnel'] = $request->anyTunnelToSingleTunnel;
        }

        if (null !== $request->networkTypes) {
            @$body['networkTypes'] = $request->networkTypes;
        }

        if (null !== $request->vSwitchId) {
            @$body['vSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vpcId) {
            @$body['vpcId'] = $request->vpcId;
        }

        if (null !== $request->vpcOwnerId) {
            @$body['vpcOwnerId'] = $request->vpcOwnerId;
        }

        if (null !== $request->vpcRegionId) {
            @$body['vpcRegionId'] = $request->vpcRegionId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceNetworkType',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/network',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceNetworkTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the network type of an instance.
     *
     * @param request - UpdateInstanceNetworkTypeRequest
     *
     * @returns UpdateInstanceNetworkTypeResponse
     *
     * @param string                           $instanceId
     * @param UpdateInstanceNetworkTypeRequest $request
     *
     * @return UpdateInstanceNetworkTypeResponse
     */
    public function updateInstanceNetworkType($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceNetworkTypeWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Modifies the port number.
     *
     * @param request - UpdateInstancePortRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstancePortResponse
     *
     * @param string                    $instanceId
     * @param UpdateInstancePortRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateInstancePortResponse
     */
    public function updateInstancePortWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->port) {
            @$body['port'] = $request->port;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstancePort',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/updatePort',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstancePortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the port number.
     *
     * @param request - UpdateInstancePortRequest
     *
     * @returns UpdateInstancePortResponse
     *
     * @param string                    $instanceId
     * @param UpdateInstancePortRequest $request
     *
     * @return UpdateInstancePortResponse
     */
    public function updateInstancePort($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstancePortWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Sets the maintenance window for an instance to perform system maintenance.
     *
     * @param request - UpdateMaintenanceWindowRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMaintenanceWindowResponse
     *
     * @param string                         $instanceId
     * @param UpdateMaintenanceWindowRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateMaintenanceWindowResponse
     */
    public function updateMaintenanceWindowWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMaintenanceWindow',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/maintenanceWindow',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateMaintenanceWindowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the maintenance window for an instance to perform system maintenance.
     *
     * @param request - UpdateMaintenanceWindowRequest
     *
     * @returns UpdateMaintenanceWindowResponse
     *
     * @param string                         $instanceId
     * @param UpdateMaintenanceWindowRequest $request
     *
     * @return UpdateMaintenanceWindowResponse
     */
    public function updateMaintenanceWindow($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateMaintenanceWindowWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Creates a model creation service. This operation applies only to Hologres AI.
     *
     * @param request - UpdateModelServiceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelServiceResponse
     *
     * @param string                    $instanceId
     * @param UpdateModelServiceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateModelServiceResponse
     */
    public function updateModelServiceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cpu) {
            @$body['cpu'] = $request->cpu;
        }

        if (null !== $request->gpu) {
            @$body['gpu'] = $request->gpu;
        }

        if (null !== $request->memory) {
            @$body['memory'] = $request->memory;
        }

        if (null !== $request->modelServiceName) {
            @$body['modelServiceName'] = $request->modelServiceName;
        }

        if (null !== $request->modelType) {
            @$body['modelType'] = $request->modelType;
        }

        if (null !== $request->serviceCount) {
            @$body['serviceCount'] = $request->serviceCount;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateModelService',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/updateModelService',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateModelServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a model creation service. This operation applies only to Hologres AI.
     *
     * @param request - UpdateModelServiceRequest
     *
     * @returns UpdateModelServiceResponse
     *
     * @param string                    $instanceId
     * @param UpdateModelServiceRequest $request
     *
     * @return UpdateModelServiceResponse
     */
    public function updateModelService($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateModelServiceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Updates the execution time of an O&M event.
     *
     * @param request - UpdateOperationEventScheduleTimeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOperationEventScheduleTimeResponse
     *
     * @param string                                  $instanceId
     * @param UpdateOperationEventScheduleTimeRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateOperationEventScheduleTimeResponse
     */
    public function updateOperationEventScheduleTimeWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->scheduleTime) {
            @$body['scheduleTime'] = $request->scheduleTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateOperationEventScheduleTime',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/updateOperationEventScheduleTime',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateOperationEventScheduleTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the execution time of an O&M event.
     *
     * @param request - UpdateOperationEventScheduleTimeRequest
     *
     * @returns UpdateOperationEventScheduleTimeResponse
     *
     * @param string                                  $instanceId
     * @param UpdateOperationEventScheduleTimeRequest $request
     *
     * @return UpdateOperationEventScheduleTimeResponse
     */
    public function updateOperationEventScheduleTime($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateOperationEventScheduleTimeWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Configures the backup policy. You can specify multiple fixed days of the week to start instance backups on a weekly cycle, such as Monday, Wednesday, and Friday at 20:00:00. You can also configure the number of completed backups to retain. Expired backups are automatically deleted.
     *
     * @param request - UpdateScheduledBackupConfigRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateScheduledBackupConfigResponse
     *
     * @param UpdateScheduledBackupConfigRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateScheduledBackupConfigResponse
     */
    public function updateScheduledBackupConfigWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $body = [];
        if (null !== $request->dataKeepQuantity) {
            @$body['dataKeepQuantity'] = $request->dataKeepQuantity;
        }

        if (null !== $request->dstRegion) {
            @$body['dstRegion'] = $request->dstRegion;
        }

        if (null !== $request->enabled) {
            @$body['enabled'] = $request->enabled;
        }

        if (null !== $request->hour) {
            @$body['hour'] = $request->hour;
        }

        if (null !== $request->instanceId) {
            @$body['instanceId'] = $request->instanceId;
        }

        if (null !== $request->manualDataKeepQuantity) {
            @$body['manualDataKeepQuantity'] = $request->manualDataKeepQuantity;
        }

        if (null !== $request->scheduleType) {
            @$body['scheduleType'] = $request->scheduleType;
        }

        if (null !== $request->week) {
            @$body['week'] = $request->week;
        }

        if (null !== $request->zoneId) {
            @$body['zoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateScheduledBackupConfig',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/backups/scheduledConfig',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateScheduledBackupConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the backup policy. You can specify multiple fixed days of the week to start instance backups on a weekly cycle, such as Monday, Wednesday, and Friday at 20:00:00. You can also configure the number of completed backups to retain. Expired backups are automatically deleted.
     *
     * @param request - UpdateScheduledBackupConfigRequest
     *
     * @returns UpdateScheduledBackupConfigResponse
     *
     * @param UpdateScheduledBackupConfigRequest $request
     *
     * @return UpdateScheduledBackupConfigResponse
     */
    public function updateScheduledBackupConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateScheduledBackupConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Updates the time-based elastic plan for a compute group.
     *
     * @remarks
     * 更新计算组分时弹性计划。前置条件：instanceId 对应实例需处于运行中（Running）状态，可通过 GetInstance 查询 InstanceStatus；warehouseId 可通过 ListWarehouses 查询返回的 Id 获取。
     *
     * @param request - UpdateWarehouseScheduleTaskRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWarehouseScheduleTaskResponse
     *
     * @param string                             $instanceId
     * @param UpdateWarehouseScheduleTaskRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateWarehouseScheduleTaskResponse
     */
    public function updateWarehouseScheduleTaskWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->elasticCu) {
            @$body['elasticCu'] = $request->elasticCu;
        }

        if (null !== $request->endTime) {
            @$body['endTime'] = $request->endTime;
        }

        if (null !== $request->id) {
            @$body['id'] = $request->id;
        }

        if (null !== $request->startTime) {
            @$body['startTime'] = $request->startTime;
        }

        if (null !== $request->warehouseId) {
            @$body['warehouseId'] = $request->warehouseId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWarehouseScheduleTask',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/updateWarehouseScheduleTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateWarehouseScheduleTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the time-based elastic plan for a compute group.
     *
     * @remarks
     * 更新计算组分时弹性计划。前置条件：instanceId 对应实例需处于运行中（Running）状态，可通过 GetInstance 查询 InstanceStatus；warehouseId 可通过 ListWarehouses 查询返回的 Id 获取。
     *
     * @param request - UpdateWarehouseScheduleTaskRequest
     *
     * @returns UpdateWarehouseScheduleTaskResponse
     *
     * @param string                             $instanceId
     * @param UpdateWarehouseScheduleTaskRequest $request
     *
     * @return UpdateWarehouseScheduleTaskResponse
     */
    public function updateWarehouseScheduleTask($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateWarehouseScheduleTaskWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * Upgrades an instance. If the preparation succeeds, the instance can start the upgrade immediately.
     *
     * @param request - UpgradeInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeInstanceResponse
     *
     * @param string                 $instanceId
     * @param UpgradeInstanceRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpgradeInstanceResponse
     */
    public function upgradeInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['type'] = $request->type;
        }

        if (null !== $request->upgradeTime) {
            @$query['upgradeTime'] = $request->upgradeTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeInstance',
            'version' => '2022-06-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v1/instances/' . Url::percentEncode($instanceId) . '/upgrade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpgradeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades an instance. If the preparation succeeds, the instance can start the upgrade immediately.
     *
     * @param request - UpgradeInstanceRequest
     *
     * @returns UpgradeInstanceResponse
     *
     * @param string                 $instanceId
     * @param UpgradeInstanceRequest $request
     *
     * @return UpgradeInstanceResponse
     */
    public function upgradeInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }
}
