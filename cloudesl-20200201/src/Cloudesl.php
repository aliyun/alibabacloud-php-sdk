<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\ActivateApDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\ActivateApDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\AddApDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\AddApDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\AddCompanyTemplateRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\AddCompanyTemplateResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\AddUserRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\AddUserResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\ApplyCompanyTemplateVersionToStoresRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\ApplyCompanyTemplateVersionToStoresResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\AssignUserRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\AssignUserResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\BatchInsertItemsRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\BatchInsertItemsResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\BindEslDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\BindEslDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\CreateStoreRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\CreateStoreResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DeleteApDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DeleteApDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DeleteCompanyTemplateRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DeleteCompanyTemplateResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DeleteItemRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DeleteItemResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DeleteStoreRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DeleteStoreResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DeleteUserResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeApDevicesRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeApDevicesResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeAvailableEslModelsRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeAvailableEslModelsResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeBindersRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeBindersResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeCompanyTemplateVersionsRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeCompanyTemplateVersionsResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeEslDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeEslDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeEslDevicesRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeEslDevicesResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeEslModelByTemplateVersionRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeEslModelByTemplateVersionResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeItemsRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeItemsResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeStoreByTemplateVersionRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeStoreByTemplateVersionResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeStoreConfigRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeStoreConfigResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeStoresRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeStoresResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeTemplateByModelRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeTemplateByModelResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeUserLogRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeUserLogResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeUsersRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeUsersResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\GetUserRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\GetUserResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\QueryTemplateListByGroupIdRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\QueryTemplateListByGroupIdResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\SyncAddMaterialRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\SyncAddMaterialResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\UnassignUserRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\UnassignUserResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\UnbindEslDeviceRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\UnbindEslDeviceResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\UpdateEslDeviceLightRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\UpdateEslDeviceLightResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\UpdateStoreConfigRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\UpdateStoreConfigResponse;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\UpdateStoreRequest;
use AlibabaCloud\SDK\Cloudesl\V20200201\Models\UpdateStoreResponse;
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
     * @param ActivateApDeviceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ActivateApDeviceResponse
     */
    public function activateApDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apMac)) {
            $body['ApMac'] = $request->apMac;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ActivateApDevice',
            'version'     => '2020-02-01',
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
     * @param ActivateApDeviceRequest $request
     *
     * @return ActivateApDeviceResponse
     */
    public function activateApDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateApDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AddApDeviceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddApDeviceResponse
     */
    public function addApDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apMac)) {
            $body['ApMac'] = $request->apMac;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $body['SerialNumber'] = $request->serialNumber;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddApDevice',
            'version'     => '2020-02-01',
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
     * @param AddApDeviceRequest $request
     *
     * @return AddApDeviceResponse
     */
    public function addApDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addApDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AddCompanyTemplateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddCompanyTemplateResponse
     */
    public function addCompanyTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deviceType)) {
            $body['DeviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->eslSize)) {
            $body['EslSize'] = $request->eslSize;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ifDefault)) {
            $body['IfDefault'] = $request->ifDefault;
        }
        if (!Utils::isUnset($request->ifMember)) {
            $body['IfMember'] = $request->ifMember;
        }
        if (!Utils::isUnset($request->ifOutOfInventory)) {
            $body['IfOutOfInventory'] = $request->ifOutOfInventory;
        }
        if (!Utils::isUnset($request->ifPromotion)) {
            $body['IfPromotion'] = $request->ifPromotion;
        }
        if (!Utils::isUnset($request->ifSourceCode)) {
            $body['IfSourceCode'] = $request->ifSourceCode;
        }
        if (!Utils::isUnset($request->layout)) {
            $body['Layout'] = $request->layout;
        }
        if (!Utils::isUnset($request->scene)) {
            $body['Scene'] = $request->scene;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateSceneId)) {
            $body['TemplateSceneId'] = $request->templateSceneId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $body['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $body['TemplateVersion'] = $request->templateVersion;
        }
        if (!Utils::isUnset($request->vendor)) {
            $body['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddCompanyTemplate',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCompanyTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddCompanyTemplateRequest $request
     *
     * @return AddCompanyTemplateResponse
     */
    public function addCompanyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCompanyTemplateWithOptions($request, $runtime);
    }

    /**
     * @param AddUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return AddUserResponse
     */
    public function addUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddUser',
            'version'     => '2020-02-01',
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
     * @param AddUserRequest $request
     *
     * @return AddUserResponse
     */
    public function addUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserWithOptions($request, $runtime);
    }

    /**
     * @param ApplyCompanyTemplateVersionToStoresRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ApplyCompanyTemplateVersionToStoresResponse
     */
    public function applyCompanyTemplateVersionToStoresWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->stores)) {
            $body['Stores'] = $request->stores;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $body['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyCompanyTemplateVersionToStores',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyCompanyTemplateVersionToStoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyCompanyTemplateVersionToStoresRequest $request
     *
     * @return ApplyCompanyTemplateVersionToStoresResponse
     */
    public function applyCompanyTemplateVersionToStores($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCompanyTemplateVersionToStoresWithOptions($request, $runtime);
    }

    /**
     * @param AssignUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AssignUserResponse
     */
    public function assignUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
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
            'version'     => '2020-02-01',
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
     * @param AssignUserRequest $request
     *
     * @return AssignUserResponse
     */
    public function assignUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignUserWithOptions($request, $runtime);
    }

    /**
     * @param BatchInsertItemsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchInsertItemsResponse
     */
    public function batchInsertItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->itemInfo)) {
            $body['ItemInfo'] = $request->itemInfo;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        if (!Utils::isUnset($request->syncByItemId)) {
            $body['SyncByItemId'] = $request->syncByItemId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchInsertItems',
            'version'     => '2020-02-01',
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
     * @param BatchInsertItemsRequest $request
     *
     * @return BatchInsertItemsResponse
     */
    public function batchInsertItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchInsertItemsWithOptions($request, $runtime);
    }

    /**
     * @param BindEslDeviceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindEslDeviceResponse
     */
    public function bindEslDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->column)) {
            $body['Column'] = $request->column;
        }
        if (!Utils::isUnset($request->containerId)) {
            $body['ContainerId'] = $request->containerId;
        }
        if (!Utils::isUnset($request->containerName)) {
            $body['ContainerName'] = $request->containerName;
        }
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->itemBarCode)) {
            $body['ItemBarCode'] = $request->itemBarCode;
        }
        if (!Utils::isUnset($request->layer)) {
            $body['Layer'] = $request->layer;
        }
        if (!Utils::isUnset($request->layoutId)) {
            $body['LayoutId'] = $request->layoutId;
        }
        if (!Utils::isUnset($request->layoutName)) {
            $body['LayoutName'] = $request->layoutName;
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
            'action'      => 'BindEslDevice',
            'version'     => '2020-02-01',
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
     * @param BindEslDeviceRequest $request
     *
     * @return BindEslDeviceResponse
     */
    public function bindEslDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindEslDeviceWithOptions($request, $runtime);
    }

    /**
     * @param CreateStoreRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateStoreResponse
     */
    public function createStoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoUnbindDays)) {
            $body['AutoUnbindDays'] = $request->autoUnbindDays;
        }
        if (!Utils::isUnset($request->autoUnbindOfflineEsl)) {
            $body['AutoUnbindOfflineEsl'] = $request->autoUnbindOfflineEsl;
        }
        if (!Utils::isUnset($request->barCodeEncode)) {
            $body['BarCodeEncode'] = $request->barCodeEncode;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
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
        if (!Utils::isUnset($request->timeZone)) {
            $body['TimeZone'] = $request->timeZone;
        }
        if (!Utils::isUnset($request->userStoreCode)) {
            $body['UserStoreCode'] = $request->userStoreCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateStore',
            'version'     => '2020-02-01',
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
     * @param CreateStoreRequest $request
     *
     * @return CreateStoreResponse
     */
    public function createStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStoreWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteApDeviceResponse
     */
    public function deleteApDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apMac)) {
            $body['ApMac'] = $request->apMac;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteApDevice',
            'version'     => '2020-02-01',
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
     * @param DeleteApDeviceRequest $request
     *
     * @return DeleteApDeviceResponse
     */
    public function deleteApDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCompanyTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCompanyTemplateResponse
     */
    public function deleteCompanyTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCompanyTemplate',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCompanyTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCompanyTemplateRequest $request
     *
     * @return DeleteCompanyTemplateResponse
     */
    public function deleteCompanyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCompanyTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteItemRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteItemResponse
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
        if (!Utils::isUnset($request->unbindEslDevice)) {
            $body['UnbindEslDevice'] = $request->unbindEslDevice;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteItem',
            'version'     => '2020-02-01',
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
     * @param DeleteItemRequest $request
     *
     * @return DeleteItemResponse
     */
    public function deleteItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteItemWithOptions($request, $runtime);
    }

    /**
     * @param DeleteStoreRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteStoreResponse
     */
    public function deleteStoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteStore',
            'version'     => '2020-02-01',
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
     * @param DeleteStoreRequest $request
     *
     * @return DeleteStoreResponse
     */
    public function deleteStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStoreWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2020-02-01',
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
     * @param DeleteUserRequest $request
     *
     * @return DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApDevicesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeApDevicesResponse
     */
    public function describeApDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->apMac)) {
            $body['ApMac'] = $request->apMac;
        }
        if (!Utils::isUnset($request->beActivate)) {
            $body['BeActivate'] = $request->beActivate;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->model)) {
            $body['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeApDevices',
            'version'     => '2020-02-01',
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
     * @param DescribeApDevicesRequest $request
     *
     * @return DescribeApDevicesResponse
     */
    public function describeApDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableEslModelsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAvailableEslModelsResponse
     */
    public function describeAvailableEslModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->modelId)) {
            $body['ModelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableEslModels',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableEslModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableEslModelsRequest $request
     *
     * @return DescribeAvailableEslModelsResponse
     */
    public function describeAvailableEslModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableEslModelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBindersRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBindersResponse
     */
    public function describeBindersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->itemBarCode)) {
            $body['ItemBarCode'] = $request->itemBarCode;
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
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeBinders',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBindersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBindersRequest $request
     *
     * @return DescribeBindersResponse
     */
    public function describeBinders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBindersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCompanyTemplateVersionsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeCompanyTemplateVersionsResponse
     */
    public function describeCompanyTemplateVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCompanyTemplateVersions',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCompanyTemplateVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCompanyTemplateVersionsRequest $request
     *
     * @return DescribeCompanyTemplateVersionsResponse
     */
    public function describeCompanyTemplateVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCompanyTemplateVersionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEslDeviceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeEslDeviceResponse
     */
    public function describeEslDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
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
        if (!Utils::isUnset($request->toDate)) {
            $body['ToDate'] = $request->toDate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEslDevice',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEslDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEslDeviceRequest $request
     *
     * @return DescribeEslDeviceResponse
     */
    public function describeEslDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEslDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEslDevicesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEslDevicesResponse
     */
    public function describeEslDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->eslStatus)) {
            $body['EslStatus'] = $request->eslStatus;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->fromBatteryLevel)) {
            $body['FromBatteryLevel'] = $request->fromBatteryLevel;
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
        if (!Utils::isUnset($request->toBatteryLevel)) {
            $body['ToBatteryLevel'] = $request->toBatteryLevel;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->typeEncode)) {
            $body['TypeEncode'] = $request->typeEncode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEslDevices',
            'version'     => '2020-02-01',
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
     * @param DescribeEslDevicesRequest $request
     *
     * @return DescribeEslDevicesResponse
     */
    public function describeEslDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEslDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEslModelByTemplateVersionRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeEslModelByTemplateVersionResponse
     */
    public function describeEslModelByTemplateVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $body['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEslModelByTemplateVersion',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEslModelByTemplateVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEslModelByTemplateVersionRequest $request
     *
     * @return DescribeEslModelByTemplateVersionResponse
     */
    public function describeEslModelByTemplateVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEslModelByTemplateVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeItemsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeItemsResponse
     */
    public function describeItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bePromotion)) {
            $body['BePromotion'] = $request->bePromotion;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
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
            'version'     => '2020-02-01',
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
     * @param DescribeItemsRequest $request
     *
     * @return DescribeItemsResponse
     */
    public function describeItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeItemsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStoreByTemplateVersionRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeStoreByTemplateVersionResponse
     */
    public function describeStoreByTemplateVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->templateVersion)) {
            $body['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeStoreByTemplateVersion',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStoreByTemplateVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStoreByTemplateVersionRequest $request
     *
     * @return DescribeStoreByTemplateVersionResponse
     */
    public function describeStoreByTemplateVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStoreByTemplateVersionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStoreConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeStoreConfigResponse
     */
    public function describeStoreConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeStoreConfig',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStoreConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStoreConfigRequest $request
     *
     * @return DescribeStoreConfigResponse
     */
    public function describeStoreConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStoreConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStoresRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeStoresResponse
     */
    public function describeStoresWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
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
        if (!Utils::isUnset($request->templateVersion)) {
            $body['TemplateVersion'] = $request->templateVersion;
        }
        if (!Utils::isUnset($request->toDate)) {
            $body['ToDate'] = $request->toDate;
        }
        if (!Utils::isUnset($request->userStoreCode)) {
            $body['UserStoreCode'] = $request->userStoreCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeStores',
            'version'     => '2020-02-01',
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
     * @param DescribeStoresRequest $request
     *
     * @return DescribeStoresResponse
     */
    public function describeStores($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStoresWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTemplateByModelRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeTemplateByModelResponse
     */
    public function describeTemplateByModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deviceType)) {
            $body['DeviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->eslSize)) {
            $body['EslSize'] = $request->eslSize;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->templateVersion)) {
            $body['TemplateVersion'] = $request->templateVersion;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplateByModel',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplateByModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTemplateByModelRequest $request
     *
     * @return DescribeTemplateByModelResponse
     */
    public function describeTemplateByModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateByModelWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserLogRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeUserLogResponse
     */
    public function describeUserLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->fromDate)) {
            $body['FromDate'] = $request->fromDate;
        }
        if (!Utils::isUnset($request->itemBarCode)) {
            $body['ItemBarCode'] = $request->itemBarCode;
        }
        if (!Utils::isUnset($request->itemShortTitle)) {
            $body['ItemShortTitle'] = $request->itemShortTitle;
        }
        if (!Utils::isUnset($request->logId)) {
            $body['LogId'] = $request->logId;
        }
        if (!Utils::isUnset($request->operationStatus)) {
            $body['OperationStatus'] = $request->operationStatus;
        }
        if (!Utils::isUnset($request->operationType)) {
            $body['OperationType'] = $request->operationType;
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
        if (!Utils::isUnset($request->toDate)) {
            $body['ToDate'] = $request->toDate;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserLog',
            'version'     => '2020-02-01',
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
     * @param DescribeUserLogRequest $request
     *
     * @return DescribeUserLogResponse
     */
    public function describeUserLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUsersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeUsersResponse
     */
    public function describeUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
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
            'version'     => '2020-02-01',
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
     * @param DescribeUsersRequest $request
     *
     * @return DescribeUsersResponse
     */
    public function describeUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsersWithOptions($request, $runtime);
    }

    /**
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2020-02-01',
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
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserWithOptions($request, $runtime);
    }

    /**
     * @param QueryTemplateListByGroupIdRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryTemplateListByGroupIdResponse
     */
    public function queryTemplateListByGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryTemplateListByGroupId',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTemplateListByGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTemplateListByGroupIdRequest $request
     *
     * @return QueryTemplateListByGroupIdResponse
     */
    public function queryTemplateListByGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTemplateListByGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param SyncAddMaterialRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SyncAddMaterialResponse
     */
    public function syncAddMaterialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncAddMaterial',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncAddMaterialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncAddMaterialRequest $request
     *
     * @return SyncAddMaterialResponse
     */
    public function syncAddMaterial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncAddMaterialWithOptions($request, $runtime);
    }

    /**
     * @param UnassignUserRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UnassignUserResponse
     */
    public function unassignUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnassignUser',
            'version'     => '2020-02-01',
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
     * @param UnassignUserRequest $request
     *
     * @return UnassignUserResponse
     */
    public function unassignUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassignUserWithOptions($request, $runtime);
    }

    /**
     * @param UnbindEslDeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindEslDeviceResponse
     */
    public function unbindEslDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->column)) {
            $body['Column'] = $request->column;
        }
        if (!Utils::isUnset($request->containerName)) {
            $body['ContainerName'] = $request->containerName;
        }
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->itemBarCode)) {
            $body['ItemBarCode'] = $request->itemBarCode;
        }
        if (!Utils::isUnset($request->layer)) {
            $body['Layer'] = $request->layer;
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
            'action'      => 'UnbindEslDevice',
            'version'     => '2020-02-01',
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
     * @param UnbindEslDeviceRequest $request
     *
     * @return UnbindEslDeviceResponse
     */
    public function unbindEslDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindEslDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEslDeviceLightRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEslDeviceLightResponse
     */
    public function updateEslDeviceLightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eslBarCode)) {
            $body['EslBarCode'] = $request->eslBarCode;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
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
            'version'     => '2020-02-01',
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
     * @param UpdateEslDeviceLightRequest $request
     *
     * @return UpdateEslDeviceLightResponse
     */
    public function updateEslDeviceLight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEslDeviceLightWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStoreRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateStoreResponse
     */
    public function updateStoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoUnbindDays)) {
            $body['AutoUnbindDays'] = $request->autoUnbindDays;
        }
        if (!Utils::isUnset($request->autoUnbindOfflineEsl)) {
            $body['AutoUnbindOfflineEsl'] = $request->autoUnbindOfflineEsl;
        }
        if (!Utils::isUnset($request->barCodeEncode)) {
            $body['BarCodeEncode'] = $request->barCodeEncode;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
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
        if (!Utils::isUnset($request->templateVersion)) {
            $body['TemplateVersion'] = $request->templateVersion;
        }
        if (!Utils::isUnset($request->timezone)) {
            $body['Timezone'] = $request->timezone;
        }
        if (!Utils::isUnset($request->userStoreCode)) {
            $body['UserStoreCode'] = $request->userStoreCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateStore',
            'version'     => '2020-02-01',
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
     * @param UpdateStoreRequest $request
     *
     * @return UpdateStoreResponse
     */
    public function updateStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStoreWithOptions($request, $runtime);
    }

    /**
     * @param UpdateStoreConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateStoreConfigResponse
     */
    public function updateStoreConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enableNotification)) {
            $body['EnableNotification'] = $request->enableNotification;
        }
        if (!Utils::isUnset($request->extraParams)) {
            $body['ExtraParams'] = $request->extraParams;
        }
        if (!Utils::isUnset($request->notificationSilentTimes)) {
            $body['NotificationSilentTimes'] = $request->notificationSilentTimes;
        }
        if (!Utils::isUnset($request->notificationWebHook)) {
            $body['NotificationWebHook'] = $request->notificationWebHook;
        }
        if (!Utils::isUnset($request->storeId)) {
            $body['StoreId'] = $request->storeId;
        }
        if (!Utils::isUnset($request->subscribeContents)) {
            $body['SubscribeContents'] = $request->subscribeContents;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateStoreConfig',
            'version'     => '2020-02-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStoreConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateStoreConfigRequest $request
     *
     * @return UpdateStoreConfigResponse
     */
    public function updateStoreConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateStoreConfigWithOptions($request, $runtime);
    }
}
