<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\ActivateApDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\ActivateApDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\AddApDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\AddApDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\AddEslDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\AddEslDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\AddUserRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\AddUserResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\AssignUserRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\AssignUserResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\BatchInsertItemsRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\BatchInsertItemsResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\BindEslDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\BindEslDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\BindEslDeviceShelfRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\BindEslDeviceShelfResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\ConfirmLogisticsRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\ConfirmLogisticsResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\CreateStoreRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\CreateStoreResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DeleteApDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DeleteApDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DeleteEslDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DeleteEslDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DeleteItemBySkuIdRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DeleteItemBySkuIdResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DeleteItemRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DeleteItemResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DeleteStoreRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DeleteStoreResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeAlarmsRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeAlarmsResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeApDevicesRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeApDevicesResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeEslDevicesRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeEslDevicesResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeItemsRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeItemsResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeLogisticsRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeLogisticsResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribePayOrdersRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribePayOrdersResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribePlanogramRailsRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribePlanogramRailsResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeStoresRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeStoresResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeUserLogRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeUserLogResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeUsersRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeUsersResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\GetCompanyResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\GetUserRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\GetUserResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\MapPlanogramRailRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\MapPlanogramRailResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\RefreshTaobaoItemRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\RefreshTaobaoItemResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\UnassignUserRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\UnassignUserResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\UnbindEslDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\UnbindEslDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\UnbindEslDeviceShelfRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\UnbindEslDeviceShelfResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\UnmapPlanogramRailRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\UnmapPlanogramRailResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\UpdateEslDeviceLightRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\UpdateEslDeviceLightResponse;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\UpdateStoreRequest;
use AlibabaCloud\SDK\Cloudesl\V20190801\Models\UpdateStoreResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Cloudesl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'cloudesl.aliyuncs.com',
            'ap-northeast-2-pop'          => 'cloudesl.aliyuncs.com',
            'ap-south-1'                  => 'cloudesl.aliyuncs.com',
            'ap-southeast-1'              => 'cloudesl.aliyuncs.com',
            'ap-southeast-2'              => 'cloudesl.aliyuncs.com',
            'ap-southeast-3'              => 'cloudesl.aliyuncs.com',
            'ap-southeast-5'              => 'cloudesl.aliyuncs.com',
            'cn-beijing'                  => 'cloudesl.aliyuncs.com',
            'cn-beijing-finance-1'        => 'cloudesl.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'cloudesl.aliyuncs.com',
            'cn-beijing-gov-1'            => 'cloudesl.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'cloudesl.aliyuncs.com',
            'cn-chengdu'                  => 'cloudesl.aliyuncs.com',
            'cn-edge-1'                   => 'cloudesl.aliyuncs.com',
            'cn-fujian'                   => 'cloudesl.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'cloudesl.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'cloudesl.aliyuncs.com',
            'cn-hangzhou-finance'         => 'cloudesl.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'cloudesl.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'cloudesl.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'cloudesl.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'cloudesl.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'cloudesl.aliyuncs.com',
            'cn-hongkong'                 => 'cloudesl.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'cloudesl.aliyuncs.com',
            'cn-huhehaote'                => 'cloudesl.aliyuncs.com',
            'cn-north-2-gov-1'            => 'cloudesl.aliyuncs.com',
            'cn-qingdao'                  => 'cloudesl.aliyuncs.com',
            'cn-qingdao-nebula'           => 'cloudesl.aliyuncs.com',
            'cn-shanghai'                 => 'cloudesl.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'cloudesl.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'cloudesl.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'cloudesl.aliyuncs.com',
            'cn-shanghai-inner'           => 'cloudesl.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'cloudesl.aliyuncs.com',
            'cn-shenzhen'                 => 'cloudesl.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'cloudesl.aliyuncs.com',
            'cn-shenzhen-inner'           => 'cloudesl.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'cloudesl.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'cloudesl.aliyuncs.com',
            'cn-wuhan'                    => 'cloudesl.aliyuncs.com',
            'cn-yushanfang'               => 'cloudesl.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'cloudesl.aliyuncs.com',
            'cn-zhangjiakou'              => 'cloudesl.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'cloudesl.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'cloudesl.aliyuncs.com',
            'eu-central-1'                => 'cloudesl.aliyuncs.com',
            'eu-west-1'                   => 'cloudesl.aliyuncs.com',
            'eu-west-1-oxs'               => 'cloudesl.aliyuncs.com',
            'me-east-1'                   => 'cloudesl.aliyuncs.com',
            'rus-west-1-pop'              => 'cloudesl.aliyuncs.com',
            'us-east-1'                   => 'cloudesl.aliyuncs.com',
            'us-west-1'                   => 'cloudesl.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudesl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActivateApDeviceRequest $request ActivateApDeviceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ActivateApDeviceResponse ActivateApDeviceResponse
     */
    public function activateApDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apMac)) {
            $body['ApMac'] = $request->apMac;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ActivateApDevice',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivateApDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ActivateApDeviceRequest $request ActivateApDeviceRequest
     *
     * @return ActivateApDeviceResponse ActivateApDeviceResponse
     */
    public function activateApDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateApDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AddApDeviceRequest $request AddApDeviceRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddApDeviceResponse AddApDeviceResponse
     */
    public function addApDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apMac)) {
            $body['ApMac'] = $request->apMac;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddApDevice',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddApDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddApDeviceRequest $request AddApDeviceRequest
     *
     * @return AddApDeviceResponse AddApDeviceResponse
     */
    public function addApDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addApDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AddEslDeviceRequest $request AddEslDeviceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return AddEslDeviceResponse AddEslDeviceResponse
     */
    public function addEslDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddEslDevice',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddEslDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddEslDeviceRequest $request AddEslDeviceRequest
     *
     * @return AddEslDeviceResponse AddEslDeviceResponse
     */
    public function addEslDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEslDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AddUserRequest $request AddUserRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserResponse AddUserResponse
     */
    public function addUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddUser',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddUserRequest $request AddUserRequest
     *
     * @return AddUserResponse AddUserResponse
     */
    public function addUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserWithOptions($request, $runtime);
    }

    /**
     * @param AssignUserRequest $request AssignUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AssignUserResponse AssignUserResponse
     */
    public function assignUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->stores)) {
            $body['Stores'] = $request->stores;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userType)) {
            $body['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AssignUser',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssignUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssignUserRequest $request AssignUserRequest
     *
     * @return AssignUserResponse AssignUserResponse
     */
    public function assignUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignUserWithOptions($request, $runtime);
    }

    /**
     * @param BatchInsertItemsRequest $request BatchInsertItemsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchInsertItemsResponse BatchInsertItemsResponse
     */
    public function batchInsertItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->itemInfo)) {
            $body['ItemInfo'] = $request->itemInfo;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchInsertItems',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchInsertItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchInsertItemsRequest $request BatchInsertItemsRequest
     *
     * @return BatchInsertItemsResponse BatchInsertItemsResponse
     */
    public function batchInsertItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchInsertItemsWithOptions($request, $runtime);
    }

    /**
     * @param BindEslDeviceRequest $request BindEslDeviceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return BindEslDeviceResponse BindEslDeviceResponse
     */
    public function bindEslDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->itemBarCode)) {
            $body['ItemBarCode'] = $request->itemBarCode;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BindEslDevice',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindEslDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindEslDeviceRequest $request BindEslDeviceRequest
     *
     * @return BindEslDeviceResponse BindEslDeviceResponse
     */
    public function bindEslDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindEslDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BindEslDeviceShelfRequest $request BindEslDeviceShelfRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BindEslDeviceShelfResponse BindEslDeviceShelfResponse
     */
    public function bindEslDeviceShelfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->shelfCode)) {
            $body['ShelfCode'] = $request->shelfCode;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BindEslDeviceShelf',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindEslDeviceShelfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindEslDeviceShelfRequest $request BindEslDeviceShelfRequest
     *
     * @return BindEslDeviceShelfResponse BindEslDeviceShelfResponse
     */
    public function bindEslDeviceShelf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindEslDeviceShelfWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmLogisticsRequest $request ConfirmLogisticsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfirmLogisticsResponse ConfirmLogisticsResponse
     */
    public function confirmLogisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->logisticsDocuments)) {
            $body['LogisticsDocuments'] = $request->logisticsDocuments;
        }
        if (!Utils::isUnset($request->poNumber)) {
            $body['PoNumber'] = $request->poNumber;
        }
        if (!Utils::isUnset($request->prNumber)) {
            $body['PrNumber'] = $request->prNumber;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfirmLogistics',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmLogisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmLogisticsRequest $request ConfirmLogisticsRequest
     *
     * @return ConfirmLogisticsResponse ConfirmLogisticsResponse
     */
    public function confirmLogistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmLogisticsWithOptions($request, $runtime);
    }

    /**
     * @param CreateStoreRequest $request CreateStoreRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStoreResponse CreateStoreResponse
     */
    public function createStoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->brand)) {
            $body['Brand'] = $request->brand;
        }
        if (!Utils::isUnset($request->comments)) {
            $body['Comments'] = $request->comments;
        }
        if (!Utils::isUnset($request->companyId)) {
            $body['CompanyId'] = $request->companyId;
        }
        if (!Utils::isUnset($request->groups)) {
            $body['Groups'] = $request->groups;
        }
        if (!Utils::isUnset($request->outId)) {
            $body['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->parentId)) {
            $body['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->storeName)) {
            $body['StoreName'] = $request->storeName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateStore',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateStoreRequest $request CreateStoreRequest
     *
     * @return CreateStoreResponse CreateStoreResponse
     */
    public function createStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStoreWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApDeviceRequest $request DeleteApDeviceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApDeviceResponse DeleteApDeviceResponse
     */
    public function deleteApDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apMac)) {
            $body['ApMac'] = $request->apMac;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteApDevice',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApDeviceRequest $request DeleteApDeviceRequest
     *
     * @return DeleteApDeviceResponse DeleteApDeviceResponse
     */
    public function deleteApDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEslDeviceRequest $request DeleteEslDeviceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEslDeviceResponse DeleteEslDeviceResponse
     */
    public function deleteEslDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteEslDevice',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEslDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEslDeviceRequest $request DeleteEslDeviceRequest
     *
     * @return DeleteEslDeviceResponse DeleteEslDeviceResponse
     */
    public function deleteEslDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEslDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteItemRequest $request DeleteItemRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteItemResponse DeleteItemResponse
     */
    public function deleteItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->itemBarCode)) {
            $body['ItemBarCode'] = $request->itemBarCode;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteItem',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteItemRequest $request DeleteItemRequest
     *
     * @return DeleteItemResponse DeleteItemResponse
     */
    public function deleteItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteItemWithOptions($request, $runtime);
    }

    /**
     * @param DeleteItemBySkuIdRequest $request DeleteItemBySkuIdRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteItemBySkuIdResponse DeleteItemBySkuIdResponse
     */
    public function deleteItemBySkuIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->skuId)) {
            $body['SkuId'] = $request->skuId;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteItemBySkuId',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteItemBySkuIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteItemBySkuIdRequest $request DeleteItemBySkuIdRequest
     *
     * @return DeleteItemBySkuIdResponse DeleteItemBySkuIdResponse
     */
    public function deleteItemBySkuId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteItemBySkuIdWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStoreRequest $request DeleteStoreRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStoreResponse DeleteStoreResponse
     */
    public function deleteStoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteStore',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteStoreRequest $request DeleteStoreRequest
     *
     * @return DeleteStoreResponse DeleteStoreResponse
     */
    public function deleteStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStoreWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserRequest $request DeleteUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUserRequest $request DeleteUserRequest
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlarmsRequest $request DescribeAlarmsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlarmsResponse DescribeAlarmsResponse
     */
    public function describeAlarmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alarmId)) {
            $body['AlarmId'] = $request->alarmId;
        }
        if (!Utils::isUnset($request->alarmStatus)) {
            $body['AlarmStatus'] = $request->alarmStatus;
        }
        if (!Utils::isUnset($request->alarmType)) {
            $body['AlarmType'] = $request->alarmType;
        }
        if (!Utils::isUnset($request->errorType)) {
            $body['ErrorType'] = $request->errorType;
        }
        if (!Utils::isUnset($request->fromAlarmTime)) {
            $body['FromAlarmTime'] = $request->fromAlarmTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        if (!Utils::isUnset($request->toAlarmTime)) {
            $body['ToAlarmTime'] = $request->toAlarmTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlarms',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlarmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAlarmsRequest $request DescribeAlarmsRequest
     *
     * @return DescribeAlarmsResponse DescribeAlarmsResponse
     */
    public function describeAlarms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlarmsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApDevicesRequest $request DescribeApDevicesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApDevicesResponse DescribeApDevicesResponse
     */
    public function describeApDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->activated)) {
            $body['Activated'] = $request->activated;
        }
        if (!Utils::isUnset($request->apMac)) {
            $body['ApMac'] = $request->apMac;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeApDevices',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApDevicesRequest $request DescribeApDevicesRequest
     *
     * @return DescribeApDevicesResponse DescribeApDevicesResponse
     */
    public function describeApDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEslDevicesRequest $request DescribeEslDevicesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEslDevicesResponse DescribeEslDevicesResponse
     */
    public function describeEslDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->beBind)) {
            $body['BeBind'] = $request->beBind;
        }
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->eslStatus)) {
            $body['EslStatus'] = $request->eslStatus;
        }
        if (!Utils::isUnset($request->fromBatteryLevel)) {
            $body['FromBatteryLevel'] = $request->fromBatteryLevel;
        }
        if (!Utils::isUnset($request->itemBarCode)) {
            $body['ItemBarCode'] = $request->itemBarCode;
        }
        if (!Utils::isUnset($request->mac)) {
            $body['Mac'] = $request->mac;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->shelfCode)) {
            $body['ShelfCode'] = $request->shelfCode;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        if (!Utils::isUnset($request->toBatteryLevel)) {
            $body['ToBatteryLevel'] = $request->toBatteryLevel;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vendor)) {
            $body['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEslDevices',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEslDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEslDevicesRequest $request DescribeEslDevicesRequest
     *
     * @return DescribeEslDevicesResponse DescribeEslDevicesResponse
     */
    public function describeEslDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEslDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeItemsRequest $request DescribeItemsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeItemsResponse DescribeItemsResponse
     */
    public function describeItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bePromotion)) {
            $body['BePromotion'] = $request->bePromotion;
        }
        if (!Utils::isUnset($request->itemBarCode)) {
            $body['ItemBarCode'] = $request->itemBarCode;
        }
        if (!Utils::isUnset($request->itemId)) {
            $body['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itemTitle)) {
            $body['ItemTitle'] = $request->itemTitle;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->skuId)) {
            $body['SkuId'] = $request->skuId;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeItems',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeItemsRequest $request DescribeItemsRequest
     *
     * @return DescribeItemsResponse DescribeItemsResponse
     */
    public function describeItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeItemsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogisticsRequest $request DescribeLogisticsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogisticsResponse DescribeLogisticsResponse
     */
    public function describeLogisticsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->orderId)) {
            $body['OrderId'] = $request->orderId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogistics',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLogisticsRequest $request DescribeLogisticsRequest
     *
     * @return DescribeLogisticsResponse DescribeLogisticsResponse
     */
    public function describeLogistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogisticsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePayOrdersRequest $request DescribePayOrdersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePayOrdersResponse DescribePayOrdersResponse
     */
    public function describePayOrdersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->fromDate)) {
            $body['FromDate'] = $request->fromDate;
        }
        if (!Utils::isUnset($request->orderId)) {
            $body['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->toDate)) {
            $body['ToDate'] = $request->toDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribePayOrders',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePayOrdersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePayOrdersRequest $request DescribePayOrdersRequest
     *
     * @return DescribePayOrdersResponse DescribePayOrdersResponse
     */
    public function describePayOrders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePayOrdersWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlanogramRailsRequest $request DescribePlanogramRailsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlanogramRailsResponse DescribePlanogramRailsResponse
     */
    public function describePlanogramRailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->layer)) {
            $body['Layer'] = $request->layer;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->railCode)) {
            $body['RailCode'] = $request->railCode;
        }
        if (!Utils::isUnset($request->shelf)) {
            $body['Shelf'] = $request->shelf;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribePlanogramRails',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePlanogramRailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePlanogramRailsRequest $request DescribePlanogramRailsRequest
     *
     * @return DescribePlanogramRailsResponse DescribePlanogramRailsResponse
     */
    public function describePlanogramRails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlanogramRailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStoresRequest $request DescribeStoresRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStoresResponse DescribeStoresResponse
     */
    public function describeStoresWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->brand)) {
            $body['Brand'] = $request->brand;
        }
        if (!Utils::isUnset($request->companyId)) {
            $body['CompanyId'] = $request->companyId;
        }
        if (!Utils::isUnset($request->fromDate)) {
            $body['FromDate'] = $request->fromDate;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        if (!Utils::isUnset($request->storeName)) {
            $body['StoreName'] = $request->storeName;
        }
        if (!Utils::isUnset($request->toDate)) {
            $body['ToDate'] = $request->toDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeStores',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStoresRequest $request DescribeStoresRequest
     *
     * @return DescribeStoresResponse DescribeStoresResponse
     */
    public function describeStores($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStoresWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserLogRequest $request DescribeUserLogRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserLogResponse DescribeUserLogResponse
     */
    public function describeUserLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->fromDate)) {
            $body['FromDate'] = $request->fromDate;
        }
        if (!Utils::isUnset($request->itemBarCode)) {
            $body['ItemBarCode'] = $request->itemBarCode;
        }
        if (!Utils::isUnset($request->itemId)) {
            $body['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itemTitle)) {
            $body['ItemTitle'] = $request->itemTitle;
        }
        if (!Utils::isUnset($request->operateStatus)) {
            $body['OperateStatus'] = $request->operateStatus;
        }
        if (!Utils::isUnset($request->operateType)) {
            $body['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->operateUserId)) {
            $body['OperateUserId'] = $request->operateUserId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->reverse)) {
            $body['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        if (!Utils::isUnset($request->toDate)) {
            $body['ToDate'] = $request->toDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserLog',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserLogRequest $request DescribeUserLogRequest
     *
     * @return DescribeUserLogResponse DescribeUserLogResponse
     */
    public function describeUserLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUsersRequest $request DescribeUsersRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUsersResponse DescribeUsersResponse
     */
    public function describeUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userType)) {
            $body['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeUsers',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUsersRequest $request DescribeUsersRequest
     *
     * @return DescribeUsersResponse DescribeUsersResponse
     */
    public function describeUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsersWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCompanyResponse GetCompanyResponse
     */
    public function getCompanyWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetCompany',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCompanyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetCompanyResponse GetCompanyResponse
     */
    public function getCompany()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCompanyWithOptions($runtime);
    }

    /**
     * @param GetUserRequest $request GetUserRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserRequest $request GetUserRequest
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @param MapPlanogramRailRequest $request MapPlanogramRailRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return MapPlanogramRailResponse MapPlanogramRailResponse
     */
    public function mapPlanogramRailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->layer)) {
            $body['Layer'] = $request->layer;
        }
        if (!Utils::isUnset($request->railCode)) {
            $body['RailCode'] = $request->railCode;
        }
        if (!Utils::isUnset($request->shelf)) {
            $body['Shelf'] = $request->shelf;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MapPlanogramRail',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MapPlanogramRailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MapPlanogramRailRequest $request MapPlanogramRailRequest
     *
     * @return MapPlanogramRailResponse MapPlanogramRailResponse
     */
    public function mapPlanogramRail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mapPlanogramRailWithOptions($request, $runtime);
    }

    /**
     * @param RefreshTaobaoItemRequest $request RefreshTaobaoItemRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshTaobaoItemResponse RefreshTaobaoItemResponse
     */
    public function refreshTaobaoItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->outerId)) {
            $body['OuterId'] = $request->outerId;
        }
        if (!Utils::isUnset($request->skuId)) {
            $body['SkuId'] = $request->skuId;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        if (!Utils::isUnset($request->taobaoItemId)) {
            $body['TaobaoItemId'] = $request->taobaoItemId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RefreshTaobaoItem',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshTaobaoItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RefreshTaobaoItemRequest $request RefreshTaobaoItemRequest
     *
     * @return RefreshTaobaoItemResponse RefreshTaobaoItemResponse
     */
    public function refreshTaobaoItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshTaobaoItemWithOptions($request, $runtime);
    }

    /**
     * @param UnassignUserRequest $request UnassignUserRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UnassignUserResponse UnassignUserResponse
     */
    public function unassignUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnassignUser',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassignUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnassignUserRequest $request UnassignUserRequest
     *
     * @return UnassignUserResponse UnassignUserResponse
     */
    public function unassignUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassignUserWithOptions($request, $runtime);
    }

    /**
     * @param UnbindEslDeviceRequest $request UnbindEslDeviceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindEslDeviceResponse UnbindEslDeviceResponse
     */
    public function unbindEslDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->itemBarCode)) {
            $body['ItemBarCode'] = $request->itemBarCode;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnbindEslDevice',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindEslDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindEslDeviceRequest $request UnbindEslDeviceRequest
     *
     * @return UnbindEslDeviceResponse UnbindEslDeviceResponse
     */
    public function unbindEslDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindEslDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UnbindEslDeviceShelfRequest $request UnbindEslDeviceShelfRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindEslDeviceShelfResponse UnbindEslDeviceShelfResponse
     */
    public function unbindEslDeviceShelfWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnbindEslDeviceShelf',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindEslDeviceShelfResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindEslDeviceShelfRequest $request UnbindEslDeviceShelfRequest
     *
     * @return UnbindEslDeviceShelfResponse UnbindEslDeviceShelfResponse
     */
    public function unbindEslDeviceShelf($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindEslDeviceShelfWithOptions($request, $runtime);
    }

    /**
     * @param UnmapPlanogramRailRequest $request UnmapPlanogramRailRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UnmapPlanogramRailResponse UnmapPlanogramRailResponse
     */
    public function unmapPlanogramRailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->railCode)) {
            $body['RailCode'] = $request->railCode;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnmapPlanogramRail',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnmapPlanogramRailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnmapPlanogramRailRequest $request UnmapPlanogramRailRequest
     *
     * @return UnmapPlanogramRailResponse UnmapPlanogramRailResponse
     */
    public function unmapPlanogramRail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unmapPlanogramRailWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEslDeviceLightRequest $request UpdateEslDeviceLightRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEslDeviceLightResponse UpdateEslDeviceLightResponse
     */
    public function updateEslDeviceLightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->frequency)) {
            $body['Frequency'] = $request->frequency;
        }
        if (!Utils::isUnset($request->itemBarCode)) {
            $body['ItemBarCode'] = $request->itemBarCode;
        }
        if (!Utils::isUnset($request->ledColor)) {
            $body['LedColor'] = $request->ledColor;
        }
        if (!Utils::isUnset($request->lightUpTime)) {
            $body['LightUpTime'] = $request->lightUpTime;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateEslDeviceLight',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEslDeviceLightResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateEslDeviceLightRequest $request UpdateEslDeviceLightRequest
     *
     * @return UpdateEslDeviceLightResponse UpdateEslDeviceLightResponse
     */
    public function updateEslDeviceLight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEslDeviceLightWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStoreRequest $request UpdateStoreRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateStoreResponse UpdateStoreResponse
     */
    public function updateStoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->brand)) {
            $body['Brand'] = $request->brand;
        }
        if (!Utils::isUnset($request->comments)) {
            $body['Comments'] = $request->comments;
        }
        if (!Utils::isUnset($request->groups)) {
            $body['Groups'] = $request->groups;
        }
        if (!Utils::isUnset($request->outId)) {
            $body['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->phone)) {
            $body['Phone'] = $request->phone;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        if (!Utils::isUnset($request->storeName)) {
            $body['StoreName'] = $request->storeName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateStore',
            'version'     => '2019-08-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateStoreRequest $request UpdateStoreRequest
     *
     * @return UpdateStoreResponse UpdateStoreResponse
     */
    public function updateStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStoreWithOptions($request, $runtime);
    }
}
