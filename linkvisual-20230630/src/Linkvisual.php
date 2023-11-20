<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\BatchBindDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\BatchBindDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\BindStorageOrderRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\BindStorageOrderResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\CheckFreeStorageValidRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\CheckFreeStorageValidResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\ConsumeFreeStorageRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\ConsumeFreeStorageResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\CreateAndPayStorageOrderRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\CreateAndPayStorageOrderResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\EnableFreeStorageRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\EnableFreeStorageResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\EnableStorageOrderRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\EnableStorageOrderResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\FreezeFreeStorageRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\FreezeFreeStorageResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\FreezeStorageOrderRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\FreezeStorageOrderResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GenerateDeviceByBatchIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GenerateDeviceByBatchIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GenerateDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GenerateDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetAccountByIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetAccountByIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetDeviceStatusRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetDeviceStatusResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetSubDeviceListRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetSubDeviceListResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetThingEventSnapshotRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetThingEventSnapshotResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetThingPropertySnapshotRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\GetThingPropertySnapshotResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\InvokeThingServiceRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\InvokeThingServiceResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\ListBindingAccountByDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\ListBindingAccountByDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\ListBindingDeviceByAccountRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\ListBindingDeviceByAccountResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryBatchStatusRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryBatchStatusResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryDeviceDetailRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryDeviceDetailResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryDevicesDownloadUrlRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryDevicesDownloadUrlResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryFreeStorageRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryFreeStorageResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryGenerateDevicesInfoListRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryGenerateDevicesInfoListResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryGenerateDevicesRecordRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryGenerateDevicesRecordResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryStorageCommodityListResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryStorageOrderListRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryStorageOrderListResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryStorageOrderRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\QueryStorageOrderResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\SetThingPropertyRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\SetThingPropertyResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\TransferStorageOrderRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\TransferStorageOrderResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\UnbindAllUserByDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\UnbindAllUserByDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\UnbindDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\UnbindDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\UploadDeviceNameListRequest;
use AlibabaCloud\SDK\Linkvisual\V20230630\Models\UploadDeviceNameListResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Linkvisual extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'linkvisual.aliyuncs.com',
            'ap-northeast-2-pop'          => 'linkvisual.aliyuncs.com',
            'ap-south-1'                  => 'linkvisual.aliyuncs.com',
            'ap-southeast-1'              => 'linkvisual.aliyuncs.com',
            'ap-southeast-2'              => 'linkvisual.aliyuncs.com',
            'ap-southeast-3'              => 'linkvisual.aliyuncs.com',
            'ap-southeast-5'              => 'linkvisual.aliyuncs.com',
            'cn-beijing'                  => 'linkvisual.aliyuncs.com',
            'cn-beijing-finance-1'        => 'linkvisual.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'linkvisual.aliyuncs.com',
            'cn-beijing-gov-1'            => 'linkvisual.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'linkvisual.aliyuncs.com',
            'cn-chengdu'                  => 'linkvisual.aliyuncs.com',
            'cn-edge-1'                   => 'linkvisual.aliyuncs.com',
            'cn-fujian'                   => 'linkvisual.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-finance'         => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'linkvisual.aliyuncs.com',
            'cn-hongkong'                 => 'linkvisual.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'linkvisual.aliyuncs.com',
            'cn-huhehaote'                => 'linkvisual.aliyuncs.com',
            'cn-north-2-gov-1'            => 'linkvisual.aliyuncs.com',
            'cn-qingdao'                  => 'linkvisual.aliyuncs.com',
            'cn-qingdao-nebula'           => 'linkvisual.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'linkvisual.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'linkvisual.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'linkvisual.aliyuncs.com',
            'cn-shanghai-inner'           => 'linkvisual.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'linkvisual.aliyuncs.com',
            'cn-shenzhen'                 => 'linkvisual.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'linkvisual.aliyuncs.com',
            'cn-shenzhen-inner'           => 'linkvisual.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'linkvisual.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'linkvisual.aliyuncs.com',
            'cn-wuhan'                    => 'linkvisual.aliyuncs.com',
            'cn-yushanfang'               => 'linkvisual.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'linkvisual.aliyuncs.com',
            'cn-zhangjiakou'              => 'linkvisual.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'linkvisual.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'linkvisual.aliyuncs.com',
            'eu-central-1'                => 'linkvisual.aliyuncs.com',
            'eu-west-1'                   => 'linkvisual.aliyuncs.com',
            'eu-west-1-oxs'               => 'linkvisual.aliyuncs.com',
            'me-east-1'                   => 'linkvisual.aliyuncs.com',
            'rus-west-1-pop'              => 'linkvisual.aliyuncs.com',
            'us-east-1'                   => 'linkvisual.aliyuncs.com',
            'us-west-1'                   => 'linkvisual.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('linkvisual', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param BatchBindDeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BatchBindDeviceResponse
     */
    public function batchBindDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceList)) {
            $query['DeviceList'] = $request->deviceList;
        }
        if (!Utils::isUnset($request->identityId)) {
            $query['IdentityId'] = $request->identityId;
        }
        if (!Utils::isUnset($request->openId)) {
            $query['OpenId'] = $request->openId;
        }
        if (!Utils::isUnset($request->openIdAppKey)) {
            $query['OpenIdAppKey'] = $request->openIdAppKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchBindDevice',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchBindDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchBindDeviceRequest $request
     *
     * @return BatchBindDeviceResponse
     */
    public function batchBindDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BindStorageOrderRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BindStorageOrderResponse
     */
    public function bindStorageOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->enableDefaultPlan)) {
            $query['EnableDefaultPlan'] = $request->enableDefaultPlan;
        }
        if (!Utils::isUnset($request->eventRecordDuration)) {
            $query['EventRecordDuration'] = $request->eventRecordDuration;
        }
        if (!Utils::isUnset($request->eventRecordProlong)) {
            $query['EventRecordProlong'] = $request->eventRecordProlong;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->maxRecordFileDuration)) {
            $query['MaxRecordFileDuration'] = $request->maxRecordFileDuration;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->preRecordDuration)) {
            $query['PreRecordDuration'] = $request->preRecordDuration;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindStorageOrder',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindStorageOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindStorageOrderRequest $request
     *
     * @return BindStorageOrderResponse
     */
    public function bindStorageOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindStorageOrderWithOptions($request, $runtime);
    }

    /**
     * @param CheckFreeStorageValidRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckFreeStorageValidResponse
     */
    public function checkFreeStorageValidWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckFreeStorageValid',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckFreeStorageValidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckFreeStorageValidRequest $request
     *
     * @return CheckFreeStorageValidResponse
     */
    public function checkFreeStorageValid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkFreeStorageValidWithOptions($request, $runtime);
    }

    /**
     * @param ConsumeFreeStorageRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ConsumeFreeStorageResponse
     */
    public function consumeFreeStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->enableDefaultPlan)) {
            $query['EnableDefaultPlan'] = $request->enableDefaultPlan;
        }
        if (!Utils::isUnset($request->eventRecordDuration)) {
            $query['EventRecordDuration'] = $request->eventRecordDuration;
        }
        if (!Utils::isUnset($request->eventRecordProlong)) {
            $query['EventRecordProlong'] = $request->eventRecordProlong;
        }
        if (!Utils::isUnset($request->immediateUse)) {
            $query['ImmediateUse'] = $request->immediateUse;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->preRecordDuration)) {
            $query['PreRecordDuration'] = $request->preRecordDuration;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->quota)) {
            $query['Quota'] = $request->quota;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConsumeFreeStorage',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConsumeFreeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConsumeFreeStorageRequest $request
     *
     * @return ConsumeFreeStorageResponse
     */
    public function consumeFreeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->consumeFreeStorageWithOptions($request, $runtime);
    }

    /**
     * @param CreateAndPayStorageOrderRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAndPayStorageOrderResponse
     */
    public function createAndPayStorageOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->copies)) {
            $query['Copies'] = $request->copies;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->deviceNoOwner)) {
            $query['DeviceNoOwner'] = $request->deviceNoOwner;
        }
        if (!Utils::isUnset($request->enableDefaultPlan)) {
            $query['EnableDefaultPlan'] = $request->enableDefaultPlan;
        }
        if (!Utils::isUnset($request->eventRecordDuration)) {
            $query['EventRecordDuration'] = $request->eventRecordDuration;
        }
        if (!Utils::isUnset($request->eventRecordProlong)) {
            $query['EventRecordProlong'] = $request->eventRecordProlong;
        }
        if (!Utils::isUnset($request->immediateUse)) {
            $query['ImmediateUse'] = $request->immediateUse;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->maxRecordFileDuration)) {
            $query['MaxRecordFileDuration'] = $request->maxRecordFileDuration;
        }
        if (!Utils::isUnset($request->preRecordDuration)) {
            $query['PreRecordDuration'] = $request->preRecordDuration;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAndPayStorageOrder',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAndPayStorageOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAndPayStorageOrderRequest $request
     *
     * @return CreateAndPayStorageOrderResponse
     */
    public function createAndPayStorageOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAndPayStorageOrderWithOptions($request, $runtime);
    }

    /**
     * @param EnableFreeStorageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return EnableFreeStorageResponse
     */
    public function enableFreeStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableFreeStorage',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableFreeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableFreeStorageRequest $request
     *
     * @return EnableFreeStorageResponse
     */
    public function enableFreeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableFreeStorageWithOptions($request, $runtime);
    }

    /**
     * @param EnableStorageOrderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnableStorageOrderResponse
     */
    public function enableStorageOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableStorageOrder',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableStorageOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableStorageOrderRequest $request
     *
     * @return EnableStorageOrderResponse
     */
    public function enableStorageOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableStorageOrderWithOptions($request, $runtime);
    }

    /**
     * @param FreezeFreeStorageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return FreezeFreeStorageResponse
     */
    public function freezeFreeStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FreezeFreeStorage',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FreezeFreeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FreezeFreeStorageRequest $request
     *
     * @return FreezeFreeStorageResponse
     */
    public function freezeFreeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->freezeFreeStorageWithOptions($request, $runtime);
    }

    /**
     * @param FreezeStorageOrderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return FreezeStorageOrderResponse
     */
    public function freezeStorageOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->deviceNoOwner)) {
            $query['DeviceNoOwner'] = $request->deviceNoOwner;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FreezeStorageOrder',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FreezeStorageOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FreezeStorageOrderRequest $request
     *
     * @return FreezeStorageOrderResponse
     */
    public function freezeStorageOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->freezeStorageOrderWithOptions($request, $runtime);
    }

    /**
     * @param GenerateDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GenerateDeviceResponse
     */
    public function generateDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateDevice',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateDeviceRequest $request
     *
     * @return GenerateDeviceResponse
     */
    public function generateDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDeviceWithOptions($request, $runtime);
    }

    /**
     * @param GenerateDeviceByBatchIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GenerateDeviceByBatchIdResponse
     */
    public function generateDeviceByBatchIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchId)) {
            $query['BatchId'] = $request->batchId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateDeviceByBatchId',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateDeviceByBatchIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateDeviceByBatchIdRequest $request
     *
     * @return GenerateDeviceByBatchIdResponse
     */
    public function generateDeviceByBatchId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateDeviceByBatchIdWithOptions($request, $runtime);
    }

    /**
     * @param GetAccountByIdRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAccountByIdResponse
     */
    public function getAccountByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identityId)) {
            $query['IdentityId'] = $request->identityId;
        }
        if (!Utils::isUnset($request->openId)) {
            $query['OpenId'] = $request->openId;
        }
        if (!Utils::isUnset($request->openIdAppKey)) {
            $query['OpenIdAppKey'] = $request->openIdAppKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccountById',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAccountByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAccountByIdRequest $request
     *
     * @return GetAccountByIdResponse
     */
    public function getAccountById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceStatusRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDeviceStatusResponse
     */
    public function getDeviceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceStatus',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceStatusRequest $request
     *
     * @return GetDeviceStatusResponse
     */
    public function getDeviceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetSubDeviceListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetSubDeviceListResponse
     */
    public function getSubDeviceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSubDeviceList',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSubDeviceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSubDeviceListRequest $request
     *
     * @return GetSubDeviceListResponse
     */
    public function getSubDeviceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubDeviceListWithOptions($request, $runtime);
    }

    /**
     * @param GetThingEventSnapshotRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetThingEventSnapshotResponse
     */
    public function getThingEventSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetThingEventSnapshot',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetThingEventSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetThingEventSnapshotRequest $request
     *
     * @return GetThingEventSnapshotResponse
     */
    public function getThingEventSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getThingEventSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param GetThingPropertySnapshotRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetThingPropertySnapshotResponse
     */
    public function getThingPropertySnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetThingPropertySnapshot',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetThingPropertySnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetThingPropertySnapshotRequest $request
     *
     * @return GetThingPropertySnapshotResponse
     */
    public function getThingPropertySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getThingPropertySnapshotWithOptions($request, $runtime);
    }

    /**
     * @param InvokeThingServiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return InvokeThingServiceResponse
     */
    public function invokeThingServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->args)) {
            $query['Args'] = $request->args;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->identifier)) {
            $query['Identifier'] = $request->identifier;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InvokeThingService',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvokeThingServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvokeThingServiceRequest $request
     *
     * @return InvokeThingServiceResponse
     */
    public function invokeThingService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeThingServiceWithOptions($request, $runtime);
    }

    /**
     * @param ListBindingAccountByDeviceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListBindingAccountByDeviceResponse
     */
    public function listBindingAccountByDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->owned)) {
            $query['Owned'] = $request->owned;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBindingAccountByDevice',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBindingAccountByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBindingAccountByDeviceRequest $request
     *
     * @return ListBindingAccountByDeviceResponse
     */
    public function listBindingAccountByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBindingAccountByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ListBindingDeviceByAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListBindingDeviceByAccountResponse
     */
    public function listBindingDeviceByAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->identityId)) {
            $query['IdentityId'] = $request->identityId;
        }
        if (!Utils::isUnset($request->openId)) {
            $query['OpenId'] = $request->openId;
        }
        if (!Utils::isUnset($request->openIdAppKey)) {
            $query['OpenIdAppKey'] = $request->openIdAppKey;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->subDevice)) {
            $query['SubDevice'] = $request->subDevice;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBindingDeviceByAccount',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBindingDeviceByAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBindingDeviceByAccountRequest $request
     *
     * @return ListBindingDeviceByAccountResponse
     */
    public function listBindingDeviceByAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBindingDeviceByAccountWithOptions($request, $runtime);
    }

    /**
     * @param QueryBatchStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryBatchStatusResponse
     */
    public function queryBatchStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchId)) {
            $query['BatchId'] = $request->batchId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryBatchStatus',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBatchStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBatchStatusRequest $request
     *
     * @return QueryBatchStatusResponse
     */
    public function queryBatchStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBatchStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceDetailRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDeviceDetailResponse
     */
    public function queryDeviceDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceDetail',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDeviceDetailRequest $request
     *
     * @return QueryDeviceDetailResponse
     */
    public function queryDeviceDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryDevicesDownloadUrlRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDevicesDownloadUrlResponse
     */
    public function queryDevicesDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchId)) {
            $query['BatchId'] = $request->batchId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDevicesDownloadUrl',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDevicesDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDevicesDownloadUrlRequest $request
     *
     * @return QueryDevicesDownloadUrlResponse
     */
    public function queryDevicesDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicesDownloadUrlWithOptions($request, $runtime);
    }

    /**
     * @param QueryFreeStorageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryFreeStorageResponse
     */
    public function queryFreeStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFreeStorage',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFreeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryFreeStorageRequest $request
     *
     * @return QueryFreeStorageResponse
     */
    public function queryFreeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFreeStorageWithOptions($request, $runtime);
    }

    /**
     * @param QueryGenerateDevicesInfoListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryGenerateDevicesInfoListResponse
     */
    public function queryGenerateDevicesInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->batchId)) {
            $query['BatchId'] = $request->batchId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryGenerateDevicesInfoList',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGenerateDevicesInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGenerateDevicesInfoListRequest $request
     *
     * @return QueryGenerateDevicesInfoListResponse
     */
    public function queryGenerateDevicesInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGenerateDevicesInfoListWithOptions($request, $runtime);
    }

    /**
     * @param QueryGenerateDevicesRecordRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryGenerateDevicesRecordResponse
     */
    public function queryGenerateDevicesRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryGenerateDevicesRecord',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryGenerateDevicesRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryGenerateDevicesRecordRequest $request
     *
     * @return QueryGenerateDevicesRecordResponse
     */
    public function queryGenerateDevicesRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryGenerateDevicesRecordWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QueryStorageCommodityListResponse
     */
    public function queryStorageCommodityListWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'QueryStorageCommodityList',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryStorageCommodityListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return QueryStorageCommodityListResponse
     */
    public function queryStorageCommodityList()
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStorageCommodityListWithOptions($runtime);
    }

    /**
     * @param QueryStorageOrderRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryStorageOrderResponse
     */
    public function queryStorageOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->deviceNoOwner)) {
            $query['DeviceNoOwner'] = $request->deviceNoOwner;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryStorageOrder',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryStorageOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryStorageOrderRequest $request
     *
     * @return QueryStorageOrderResponse
     */
    public function queryStorageOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStorageOrderWithOptions($request, $runtime);
    }

    /**
     * @param QueryStorageOrderListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryStorageOrderListResponse
     */
    public function queryStorageOrderListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->deviceNoOwner)) {
            $query['DeviceNoOwner'] = $request->deviceNoOwner;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryStorageOrderList',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryStorageOrderListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryStorageOrderListRequest $request
     *
     * @return QueryStorageOrderListResponse
     */
    public function queryStorageOrderList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStorageOrderListWithOptions($request, $runtime);
    }

    /**
     * @param SetThingPropertyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetThingPropertyResponse
     */
    public function setThingPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->args)) {
            $query['Args'] = $request->args;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetThingProperty',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetThingPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetThingPropertyRequest $request
     *
     * @return SetThingPropertyResponse
     */
    public function setThingProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setThingPropertyWithOptions($request, $runtime);
    }

    /**
     * @param TransferStorageOrderRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return TransferStorageOrderResponse
     */
    public function transferStorageOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dstIotId)) {
            $query['DstIotId'] = $request->dstIotId;
        }
        if (!Utils::isUnset($request->enableDefaultPlan)) {
            $query['EnableDefaultPlan'] = $request->enableDefaultPlan;
        }
        if (!Utils::isUnset($request->eventRecordDuration)) {
            $query['EventRecordDuration'] = $request->eventRecordDuration;
        }
        if (!Utils::isUnset($request->eventRecordProlong)) {
            $query['EventRecordProlong'] = $request->eventRecordProlong;
        }
        if (!Utils::isUnset($request->immediateUse)) {
            $query['ImmediateUse'] = $request->immediateUse;
        }
        if (!Utils::isUnset($request->preRecordDuration)) {
            $query['PreRecordDuration'] = $request->preRecordDuration;
        }
        if (!Utils::isUnset($request->srcIotId)) {
            $query['SrcIotId'] = $request->srcIotId;
        }
        if (!Utils::isUnset($request->srcOrderId)) {
            $query['SrcOrderId'] = $request->srcOrderId;
        }
        if (!Utils::isUnset($request->supportCrossIdentityTransfer)) {
            $query['SupportCrossIdentityTransfer'] = $request->supportCrossIdentityTransfer;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferStorageOrder',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferStorageOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TransferStorageOrderRequest $request
     *
     * @return TransferStorageOrderResponse
     */
    public function transferStorageOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferStorageOrderWithOptions($request, $runtime);
    }

    /**
     * @param UnbindAllUserByDeviceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnbindAllUserByDeviceResponse
     */
    public function unbindAllUserByDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->unbindSubDevice)) {
            $query['UnbindSubDevice'] = $request->unbindSubDevice;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindAllUserByDevice',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindAllUserByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindAllUserByDeviceRequest $request
     *
     * @return UnbindAllUserByDeviceResponse
     */
    public function unbindAllUserByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindAllUserByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UnbindDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UnbindDeviceResponse
     */
    public function unbindDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->identityId)) {
            $query['IdentityId'] = $request->identityId;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->openId)) {
            $query['OpenId'] = $request->openId;
        }
        if (!Utils::isUnset($request->openIdAppKey)) {
            $query['OpenIdAppKey'] = $request->openIdAppKey;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->unbindSubDevice)) {
            $query['UnbindSubDevice'] = $request->unbindSubDevice;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindDevice',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindDeviceRequest $request
     *
     * @return UnbindDeviceResponse
     */
    public function unbindDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UploadDeviceNameListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UploadDeviceNameListResponse
     */
    public function uploadDeviceNameListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $body = [];
        if (!Utils::isUnset($request->deviceNames)) {
            $body['DeviceNames'] = $request->deviceNames;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadDeviceNameList',
            'version'     => '2023-06-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadDeviceNameListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadDeviceNameListRequest $request
     *
     * @return UploadDeviceNameListResponse
     */
    public function uploadDeviceNameList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDeviceNameListWithOptions($request, $runtime);
    }
}
