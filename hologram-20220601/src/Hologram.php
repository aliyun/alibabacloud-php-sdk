<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableHiveAccessRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\DisableHiveAccessResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableHiveAccessRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\EnableHiveAccessResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetWarehouseDetailResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehousesResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ResumeInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ScaleInstanceRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ScaleInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstanceNameRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstanceNameResponse;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstanceNetworkTypeRequest;
use AlibabaCloud\SDK\Hologram\V20220601\Models\UpdateInstanceNetworkTypeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param ChangeResourceGroupRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $body['newResourceGroupId'] = $request->newResourceGroupId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tag/changeResourceGroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > Before you call this operation, make sure that you understand the billing method and pricing of Hologres because this operation is charged.
     *   * *   For more information about the billing details of Hologres, see [Pricing](https://www.alibabacloud.com/help/en/hologres/developer-reference/api-hologram-2022-06-01-createinstance).
     *   * *   When you purchase a Hologres instance, you must specify the region and zone in which the Hologres instance resides. A region may correspond to multiple zones. Example:
     *   * <!---->
     *   *     cn-hangzhou: cn-hangzhou-h, cn-hangzhou-j
     *   *        cn-shanghai: cn-shanghai-e, cn-shanghai-f
     *   *        cn-beijing: cn-beijing-i, cn-beijing-g
     *   *        cn-zhangjiakou: cn-zhangjiakou-b
     *   *        cn-shenzhen: cn-shenzhen-e
     *   *        cn-hongkong: cn-hongkong-b
     *   *        cn-shanghai-finance-1: cn-shanghai-finance-1z
     *   *        ap-northeast-1: ap-northeast-1a
     *   *        ap-southeast-1: ap-southeast-1c
     *   *        ap-southeast-3: ap-southeast-3b
     *   *        ap-southeast-5: ap-southeast-5b
     *   *        ap-south-1: ap-south-1b
     *   *        eu-central-1: eu-central-1a
     *   *        us-east-1: us-east-1a
     *   *        us-west-1: us-west-1b.
     *   *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoPay)) {
            $body['autoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $body['autoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['chargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->coldStorageSize)) {
            $body['coldStorageSize'] = $request->coldStorageSize;
        }
        if (!Utils::isUnset($request->cpu)) {
            $body['cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->gatewayCount)) {
            $body['gatewayCount'] = $request->gatewayCount;
        }
        if (!Utils::isUnset($request->initialDatabases)) {
            $body['initialDatabases'] = $request->initialDatabases;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['instanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['instanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->leaderInstanceId)) {
            $body['leaderInstanceId'] = $request->leaderInstanceId;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['pricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->storageSize)) {
            $body['storageSize'] = $request->storageSize;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $body['vSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['vpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['zoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > Before you call this operation, make sure that you understand the billing method and pricing of Hologres because this operation is charged.
     *   * *   For more information about the billing details of Hologres, see [Pricing](https://www.alibabacloud.com/help/en/hologres/developer-reference/api-hologram-2022-06-01-createinstance).
     *   * *   When you purchase a Hologres instance, you must specify the region and zone in which the Hologres instance resides. A region may correspond to multiple zones. Example:
     *   * <!---->
     *   *     cn-hangzhou: cn-hangzhou-h, cn-hangzhou-j
     *   *        cn-shanghai: cn-shanghai-e, cn-shanghai-f
     *   *        cn-beijing: cn-beijing-i, cn-beijing-g
     *   *        cn-zhangjiakou: cn-zhangjiakou-b
     *   *        cn-shenzhen: cn-shenzhen-e
     *   *        cn-hongkong: cn-hongkong-b
     *   *        cn-shanghai-finance-1: cn-shanghai-finance-1z
     *   *        ap-northeast-1: ap-northeast-1a
     *   *        ap-southeast-1: ap-southeast-1c
     *   *        ap-southeast-3: ap-southeast-3b
     *   *        ap-southeast-5: ap-southeast-5b
     *   *        ap-south-1: ap-south-1b
     *   *        eu-central-1: eu-central-1a
     *   *        us-east-1: us-east-1a
     *   *        us-west-1: us-west-1b.
     *   *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * > Before you call this operation, read the documentation and make sure that you understand the prerequisites and impacts of this operation.
     *   * *   After you delete a Hologres instance, data and objects in the instance cannot be restored. Proceed with caution. For more information, see [Billing overview](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview#section-h6a-x58-jc0).
     *   * *   You can delete only pay-as-you-go instances.
     *   * *   If you want to unsubscribe from a subscription instance, submit a ticket.[](https://help.aliyun.com/document_detail/150284.html#section-ogc-9vc-858).
     *   *
     * @param string                $instanceId
     * @param DeleteInstanceRequest $request    DeleteInstanceRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($instanceId, $request, $headers, $runtime)
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
            'action'      => 'DeleteInstance',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/delete',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > Before you call this operation, read the documentation and make sure that you understand the prerequisites and impacts of this operation.
     *   * *   After you delete a Hologres instance, data and objects in the instance cannot be restored. Proceed with caution. For more information, see [Billing overview](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview#section-h6a-x58-jc0).
     *   * *   You can delete only pay-as-you-go instances.
     *   * *   If you want to unsubscribe from a subscription instance, submit a ticket.[](https://help.aliyun.com/document_detail/150284.html#section-ogc-9vc-858).
     *   *
     * @param string                $instanceId
     * @param DeleteInstanceRequest $request    DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $instanceId
     * @param DisableHiveAccessRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DisableHiveAccessResponse
     */
    public function disableHiveAccessWithOptions($instanceId, $request, $headers, $runtime)
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
            'action'      => 'DisableHiveAccess',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/disableHiveAccess',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableHiveAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                  $instanceId
     * @param EnableHiveAccessRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return EnableHiveAccessResponse
     */
    public function enableHiveAccessWithOptions($instanceId, $request, $headers, $runtime)
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
            'action'      => 'EnableHiveAccess',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/enableHiveAccess',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableHiveAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetInstance',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'GetWarehouseDetail',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/getWarehouseDetail',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWarehouseDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cmsInstanceType)) {
            $body['cmsInstanceType'] = $request->cmsInstanceType;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'ListWarehouses',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/listWarehouses',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListWarehousesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > Before you call this operation, make sure that you understand the billing method and pricing of Hologres because this operation is charged.
     *   * *   For more information about billing details of Hologres, see [Pricing](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview).
     *   * *   For more information about how to renew a Hologres instance, see [Manage renewals](https://www.alibabacloud.com/help/en/hologres/product-overview/manage-renewals?spm=a2c63.p38356.0.0.73f27c8d1Q0FUi).
     *   * *   You can renew only subscription instances.
     *   *
     * @param string               $instanceId
     * @param RenewInstanceRequest $request    RenewInstanceRequest
     * @param string[]             $headers    map
     * @param RuntimeOptions       $runtime    runtime options for this request RuntimeOptions
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $body['autoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['duration'] = $request->duration;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenewInstance',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/renew',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > Before you call this operation, make sure that you understand the billing method and pricing of Hologres because this operation is charged.
     *   * *   For more information about billing details of Hologres, see [Pricing](https://www.alibabacloud.com/help/en/hologres/product-overview/billing-overview).
     *   * *   For more information about how to renew a Hologres instance, see [Manage renewals](https://www.alibabacloud.com/help/en/hologres/product-overview/manage-renewals?spm=a2c63.p38356.0.0.73f27c8d1Q0FUi).
     *   * *   You can renew only subscription instances.
     *   *
     * @param string               $instanceId
     * @param RenewInstanceRequest $request    RenewInstanceRequest
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
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
            'action'      => 'RestartInstance',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/restart',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            'action'      => 'ResumeInstance',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/resume',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ResumeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * > Before you call this operation, make sure that you understand the billing method and pricing of Hologres because this operation is charged.
     *   * *   For more information about the billing of Hologres, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview).
     *   * *   During the change of computing resource specifications of a Hologres instance, the instance is unavailable. During the change of storage resource specifications of a Hologres instance, the instance can work normally. Do not frequently change instance specifications. For more information, see [Upgrade or downgrade instance specifications](https://www.alibabacloud.com/help/en/hologres/product-overview/upgrade-or-downgrade-instance-specifications).
     *   *
     * @param string               $instanceId
     * @param ScaleInstanceRequest $request    ScaleInstanceRequest
     * @param string[]             $headers    map
     * @param RuntimeOptions       $runtime    runtime options for this request RuntimeOptions
     *
     * @return ScaleInstanceResponse ScaleInstanceResponse
     */
    public function scaleInstanceWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coldStorageSize)) {
            $body['coldStorageSize'] = $request->coldStorageSize;
        }
        if (!Utils::isUnset($request->cpu)) {
            $body['cpu'] = $request->cpu;
        }
        if (!Utils::isUnset($request->gatewayCount)) {
            $body['gatewayCount'] = $request->gatewayCount;
        }
        if (!Utils::isUnset($request->scaleType)) {
            $body['scaleType'] = $request->scaleType;
        }
        if (!Utils::isUnset($request->storageSize)) {
            $body['storageSize'] = $request->storageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ScaleInstance',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/scale',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScaleInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > Before you call this operation, make sure that you understand the billing method and pricing of Hologres because this operation is charged.
     *   * *   For more information about the billing of Hologres, see [Billing overview](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview).
     *   * *   During the change of computing resource specifications of a Hologres instance, the instance is unavailable. During the change of storage resource specifications of a Hologres instance, the instance can work normally. Do not frequently change instance specifications. For more information, see [Upgrade or downgrade instance specifications](https://www.alibabacloud.com/help/en/hologres/product-overview/upgrade-or-downgrade-instance-specifications).
     *   *
     * @param string               $instanceId
     * @param ScaleInstanceRequest $request    ScaleInstanceRequest
     *
     * @return ScaleInstanceResponse ScaleInstanceResponse
     */
    public function scaleInstance($instanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->scaleInstanceWithOptions($instanceId, $request, $headers, $runtime);
    }

    /**
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
            'action'      => 'StopInstance',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                    $instanceId
     * @param UpdateInstanceNameRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateInstanceNameResponse
     */
    public function updateInstanceNameWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceName)) {
            $body['instanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceName',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/instanceName',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param string                           $instanceId
     * @param UpdateInstanceNetworkTypeRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateInstanceNetworkTypeResponse
     */
    public function updateInstanceNetworkTypeWithOptions($instanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->anyTunnelToSingleTunnel)) {
            $body['anyTunnelToSingleTunnel'] = $request->anyTunnelToSingleTunnel;
        }
        if (!Utils::isUnset($request->networkTypes)) {
            $body['networkTypes'] = $request->networkTypes;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $body['vSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['vpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->vpcOwnerId)) {
            $body['vpcOwnerId'] = $request->vpcOwnerId;
        }
        if (!Utils::isUnset($request->vpcRegionId)) {
            $body['vpcRegionId'] = $request->vpcRegionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceNetworkType',
            'version'     => '2022-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . OpenApiUtilClient::getEncodeParam($instanceId) . '/network',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceNetworkTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
