<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateHoloWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateHoloWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteHoloWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteHoloWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableHiveAccessRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableHiveAccessResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableSSLResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableHiveAccessRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableHiveAccessResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableSSLResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetCertificateAttributeResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetRootCertificateResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListBackupDataRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListBackupDataResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehousesResponse;
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
use AlibabaCloud\SDK\Hologram\V20220601\Models\ScaleHoloWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ScaleHoloWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ScaleInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ScaleInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\SuspendHoloWarehouseRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\SuspendHoloWarehouseResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstanceNameRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstanceNameResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstanceNetworkTypeRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstanceNetworkTypeResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Hologram extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
     * Creates a virtual warehouse.
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
     * Creates a virtual warehouse.
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
     * Creates a Hologres instance.
     *
     * @remarks
     * > Before you call this operation, make sure that you understand the billing method and pricing of Hologres because this operation is charged.
     * *   For more information about the billing details of Hologres, see [Pricing](https://www.alibabacloud.com/help/en/hologres/developer-reference/api-hologram-2022-06-01-createinstance).
     * *   When you purchase a Hologres instance, you must specify the region and zone in which the Hologres instance resides. A region may correspond to multiple zones. Example:
     * <!---->
     *     cn-hangzhou: cn-hangzhou-h, cn-hangzhou-j
     *        cn-shanghai: cn-shanghai-e, cn-shanghai-f
     *        cn-beijing: cn-beijing-i, cn-beijing-g
     *        cn-zhangjiakou: cn-zhangjiakou-b
     *        cn-shenzhen: cn-shenzhen-e
     *        cn-hongkong: cn-hongkong-b
     *        cn-shanghai-finance-1: cn-shanghai-finance-1z
     *        ap-northeast-1: ap-northeast-1a
     *        ap-southeast-1: ap-southeast-1c
     *        ap-southeast-3: ap-southeast-3b
     *        ap-southeast-5: ap-southeast-5b
     *        ap-south-1: ap-south-1b
     *        eu-central-1: eu-central-1a
     *        us-east-1: us-east-1a
     *        us-west-1: us-west-1b
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
     * Creates a Hologres instance.
     *
     * @remarks
     * > Before you call this operation, make sure that you understand the billing method and pricing of Hologres because this operation is charged.
     * *   For more information about the billing details of Hologres, see [Pricing](https://www.alibabacloud.com/help/en/hologres/developer-reference/api-hologram-2022-06-01-createinstance).
     * *   When you purchase a Hologres instance, you must specify the region and zone in which the Hologres instance resides. A region may correspond to multiple zones. Example:
     * <!---->
     *     cn-hangzhou: cn-hangzhou-h, cn-hangzhou-j
     *        cn-shanghai: cn-shanghai-e, cn-shanghai-f
     *        cn-beijing: cn-beijing-i, cn-beijing-g
     *        cn-zhangjiakou: cn-zhangjiakou-b
     *        cn-shenzhen: cn-shenzhen-e
     *        cn-hongkong: cn-hongkong-b
     *        cn-shanghai-finance-1: cn-shanghai-finance-1z
     *        ap-northeast-1: ap-northeast-1a
     *        ap-southeast-1: ap-southeast-1c
     *        ap-southeast-3: ap-southeast-3b
     *        ap-southeast-5: ap-southeast-5b
     *        ap-south-1: ap-south-1b
     *        eu-central-1: eu-central-1a
     *        us-east-1: us-east-1a
     *        us-west-1: us-west-1b
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
     * Deletes a virtual warehouse.
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
     * Deletes a virtual warehouse.
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
     * Deletes a Hologres instance.
     *
     * @remarks
     * > Before you call this operation, read the documentation and make sure that you understand the prerequisites and impacts of this operation.
     * *   After you delete a Hologres instance, data and objects in the instance cannot be restored. Proceed with caution. For more information, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview?spm=a2c63.p38356.0.0.efc33b87i5pDl7).
     * *   You can delete only pay-as-you-go instances.
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
     * Deletes a Hologres instance.
     *
     * @remarks
     * > Before you call this operation, read the documentation and make sure that you understand the prerequisites and impacts of this operation.
     * *   After you delete a Hologres instance, data and objects in the instance cannot be restored. Proceed with caution. For more information, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview?spm=a2c63.p38356.0.0.efc33b87i5pDl7).
     * *   You can delete only pay-as-you-go instances.
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
     * 关闭SSL.
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
     * 关闭SSL.
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
     * 打开SSL.
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
     * 打开SSL.
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
     * 获得证书信息.
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
     * 获得证书信息.
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
     * Obtains the details of an instance.
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
     * Obtains the details of an instance.
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
     * 获得根证书.
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
     * 获得根证书.
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
     * Queries details of a virtual warehouse instance.
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
     * Queries details of a virtual warehouse instance.
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
     * Queries a list of backups. A backup is a full data snapshot of an instance at the end of the snapshot time. You can purchase another instance to completely restore the original data.
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
     * Queries a list of backups. A backup is a full data snapshot of an instance at the end of the snapshot time. You can purchase another instance to completely restore the original data.
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
     * Queries a list of instances.
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
     * Queries a list of instances.
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
     * Queries the list of virtual warehouse instances.
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
     * Queries the list of virtual warehouse instances.
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
     * Triggers shard rebalancing for a virtual warehouse.
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
     * Triggers shard rebalancing for a virtual warehouse.
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
     * Renames a virtual warehouse.
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
     * Renames a virtual warehouse.
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
     * Manually renews a Hologres instance. You can enable monthly auto-renewal when you renew a Hologres instance.
     *
     * @remarks
     * >  Before you call this operation, make sure that you understand the billing method and pricing of Hologres because this operation is charged.
     * *   For more information about the billing of Hologres, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview).
     * *   For more information about how to renew a Hologres instance, see [Manage renewals](https://www.alibabacloud.com/help/zh/hologres/product-overview/manage-renewals?spm=a2c63.p38356.0.0.38e731c9VAwtDP).
     * *   You can renew only subscription instances.
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
     * Manually renews a Hologres instance. You can enable monthly auto-renewal when you renew a Hologres instance.
     *
     * @remarks
     * >  Before you call this operation, make sure that you understand the billing method and pricing of Hologres because this operation is charged.
     * *   For more information about the billing of Hologres, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview).
     * *   For more information about how to renew a Hologres instance, see [Manage renewals](https://www.alibabacloud.com/help/zh/hologres/product-overview/manage-renewals?spm=a2c63.p38356.0.0.38e731c9VAwtDP).
     * *   You can renew only subscription instances.
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
     * 更新证书.
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
     * 更新证书.
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
     * Restarts a virtual warehouse.
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
     * Restarts a virtual warehouse.
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
     * Restarts an instance.
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
     * Restarts an instance.
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
     * Resumes a virtual warehouse.
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
     * Resumes a virtual warehouse.
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
     * Resumes an instance.
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
     * Resumes an instance.
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
     * Scales in or out a virtual warehouse.
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
     * Scales in or out a virtual warehouse.
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
     * Changes the specifications and storage space of a Hologres instance.
     *
     * @remarks
     * > Before you call this operation, make sure that you understand the billing method and pricing of Hologres because this operation is charged.
     * *   For more information about the billing of Hologres, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview).
     * *   During the change of computing resource specifications of a Hologres instance, the instance is unavailable. During the change of storage resource specifications of a Hologres instance, the instance can work normally. Do not frequently change instance specifications. For more information, see [Upgrade or downgrade instance specifications](https://www.alibabacloud.com/help/en/hologres/product-overview/upgrade-or-downgrade-instance-specifications).
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
     * Changes the specifications and storage space of a Hologres instance.
     *
     * @remarks
     * > Before you call this operation, make sure that you understand the billing method and pricing of Hologres because this operation is charged.
     * *   For more information about the billing of Hologres, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview).
     * *   During the change of computing resource specifications of a Hologres instance, the instance is unavailable. During the change of storage resource specifications of a Hologres instance, the instance can work normally. Do not frequently change instance specifications. For more information, see [Upgrade or downgrade instance specifications](https://www.alibabacloud.com/help/en/hologres/product-overview/upgrade-or-downgrade-instance-specifications).
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
     * Stops an instance.
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
     * Stops an instance.
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
     * Suspends a virtual warehouse.
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
     * Suspends a virtual warehouse.
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
     * Changes the name of an instance.
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
     * Changes the name of an instance.
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
     * Modifies the network configuration of an instance.
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
     * Modifies the network configuration of an instance.
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
}
