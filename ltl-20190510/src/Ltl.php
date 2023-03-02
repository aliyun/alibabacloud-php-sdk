<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ApplyDataModelConfigInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ApplyDataModelConfigInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\AttachDataRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\AttachDataResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\AttachDataWithSignatureRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\AttachDataWithSignatureResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\AuthorizeDeviceGroupRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\AuthorizeDeviceGroupResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\AuthorizeDeviceRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\AuthorizeDeviceResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\BatchUploadMPCoSPhaseDigestInfoByDeviceRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\BatchUploadMPCoSPhaseDigestInfoByDeviceResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\BatchUploadMPCoSPhaseDigestInfoByDeviceShrinkRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\BatchUploadMPCoSPhaseDigestInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\BatchUploadMPCoSPhaseDigestInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\BatchUploadMPCoSPhaseDigestInfoShrinkRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\BatchUploadMPCoSPhaseTextInfoByDeviceRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\BatchUploadMPCoSPhaseTextInfoByDeviceResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\BatchUploadMPCoSPhaseTextInfoByDeviceShrinkRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\BatchUploadMPCoSPhaseTextInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\BatchUploadMPCoSPhaseTextInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\BatchUploadMPCoSPhaseTextInfoShrinkRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\CreateMemberRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\CreateMemberResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\CreateMPCoSPhaseGroupRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\CreateMPCoSPhaseGroupResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\CreateMPCoSPhaseRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\CreateMPCoSPhaseResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeCapacityInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeCapacityInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMemberCapacityInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMemberCapacityInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSAuthorizedInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSAuthorizedInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSPhaseInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSPhaseInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSResourceInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSResourceInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeResourceInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeResourceInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\GetBlockChainInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\GetBlockChainInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\GetDataModelConfigInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\GetDataModelConfigInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\GetDataRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\GetDataResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\GetHistoryDataCountRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\GetHistoryDataCountResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\GetHistoryDataListRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\GetHistoryDataListResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListDependentDataModelsRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListDependentDataModelsResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListDeviceGroupRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListDeviceGroupResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListDeviceRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListDeviceResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListMemberRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListMemberResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListMPCoSPhaseGroupRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListMPCoSPhaseGroupResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListMPCoSPhaseHistoryRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListMPCoSPhaseHistoryResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListMPCoSPhaseRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListMPCoSPhaseResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListMultiPartyCollaborationChainRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListMultiPartyCollaborationChainResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListProofChainRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListProofChainResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListPSMemberDataTypeCodeRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ListPSMemberDataTypeCodeResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\LockMemberRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\LockMemberResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ModifyMemberRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ModifyMemberResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ModifyMPCoSPhaseGroupRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ModifyMPCoSPhaseGroupResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ModifyMPCoSPhaseRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\ModifyMPCoSPhaseResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\RegisterDeviceGroupRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\RegisterDeviceGroupResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\SetDataRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\SetDataResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\SetDataWithSignatureRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\SetDataWithSignatureResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UnAuthorizeDeviceGroupRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UnAuthorizeDeviceGroupResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UnAuthorizeDeviceRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UnAuthorizeDeviceResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UnLockMemberRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UnLockMemberResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UpdateMPCoSAuthorizedInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UpdateMPCoSAuthorizedInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UpdateMPCoSAuthorizedInfoShrinkRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UploadMPCoSPhaseDigestInfoByDeviceRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UploadMPCoSPhaseDigestInfoByDeviceResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UploadMPCoSPhaseDigestInfoByDeviceShrinkRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UploadMPCoSPhaseDigestInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UploadMPCoSPhaseDigestInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UploadMPCoSPhaseDigestInfoShrinkRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UploadMPCoSPhaseTextInfoByDeviceRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UploadMPCoSPhaseTextInfoByDeviceResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UploadMPCoSPhaseTextInfoByDeviceShrinkRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UploadMPCoSPhaseTextInfoRequest;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UploadMPCoSPhaseTextInfoResponse;
use AlibabaCloud\SDK\Ltl\V20190510\Models\UploadMPCoSPhaseTextInfoShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ltl extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'ltl.aliyuncs.com',
            'ap-northeast-2-pop'          => 'ltl.aliyuncs.com',
            'ap-south-1'                  => 'ltl.aliyuncs.com',
            'ap-southeast-1'              => 'ltl.aliyuncs.com',
            'ap-southeast-2'              => 'ltl.aliyuncs.com',
            'ap-southeast-3'              => 'ltl.aliyuncs.com',
            'ap-southeast-5'              => 'ltl.aliyuncs.com',
            'cn-beijing'                  => 'ltl.aliyuncs.com',
            'cn-beijing-finance-1'        => 'ltl.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'ltl.aliyuncs.com',
            'cn-beijing-gov-1'            => 'ltl.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'ltl.aliyuncs.com',
            'cn-chengdu'                  => 'ltl.aliyuncs.com',
            'cn-edge-1'                   => 'ltl.aliyuncs.com',
            'cn-fujian'                   => 'ltl.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'ltl.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'ltl.aliyuncs.com',
            'cn-hangzhou-finance'         => 'ltl.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ltl.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ltl.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ltl.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ltl.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'ltl.aliyuncs.com',
            'cn-hongkong'                 => 'ltl.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'ltl.aliyuncs.com',
            'cn-huhehaote'                => 'ltl.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'ltl.aliyuncs.com',
            'cn-north-2-gov-1'            => 'ltl.aliyuncs.com',
            'cn-qingdao'                  => 'ltl.aliyuncs.com',
            'cn-qingdao-nebula'           => 'ltl.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'ltl.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'ltl.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'ltl.aliyuncs.com',
            'cn-shanghai-inner'           => 'ltl.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ltl.aliyuncs.com',
            'cn-shenzhen'                 => 'ltl.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'ltl.aliyuncs.com',
            'cn-shenzhen-inner'           => 'ltl.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'ltl.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'ltl.aliyuncs.com',
            'cn-wuhan'                    => 'ltl.aliyuncs.com',
            'cn-wulanchabu'               => 'ltl.aliyuncs.com',
            'cn-yushanfang'               => 'ltl.aliyuncs.com',
            'cn-zhangbei'                 => 'ltl.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'ltl.aliyuncs.com',
            'cn-zhangjiakou'              => 'ltl.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ltl.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ltl.aliyuncs.com',
            'eu-central-1'                => 'ltl.aliyuncs.com',
            'eu-west-1'                   => 'ltl.aliyuncs.com',
            'eu-west-1-oxs'               => 'ltl.aliyuncs.com',
            'me-east-1'                   => 'ltl.aliyuncs.com',
            'rus-west-1-pop'              => 'ltl.aliyuncs.com',
            'us-east-1'                   => 'ltl.aliyuncs.com',
            'us-west-1'                   => 'ltl.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ltl', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ApplyDataModelConfigInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ApplyDataModelConfigInfoResponse
     */
    public function applyDataModelConfigInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->configuration)) {
            $query['Configuration'] = $request->configuration;
        }
        if (!Utils::isUnset($request->dataModelCode)) {
            $query['DataModelCode'] = $request->dataModelCode;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyDataModelConfigInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyDataModelConfigInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyDataModelConfigInfoRequest $request
     *
     * @return ApplyDataModelConfigInfoResponse
     */
    public function applyDataModelConfigInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyDataModelConfigInfoWithOptions($request, $runtime);
    }

    /**
     * @param AttachDataRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AttachDataResponse
     */
    public function attachDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->businessId)) {
            $query['BusinessId'] = $request->businessId;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachData',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachDataRequest $request
     *
     * @return AttachDataResponse
     */
    public function attachData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDataWithOptions($request, $runtime);
    }

    /**
     * @param AttachDataWithSignatureRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AttachDataWithSignatureResponse
     */
    public function attachDataWithSignatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->businessId)) {
            $query['BusinessId'] = $request->businessId;
        }
        if (!Utils::isUnset($request->iotAuthType)) {
            $query['IotAuthType'] = $request->iotAuthType;
        }
        if (!Utils::isUnset($request->iotDataDigest)) {
            $query['IotDataDigest'] = $request->iotDataDigest;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotIdServiceProvider)) {
            $query['IotIdServiceProvider'] = $request->iotIdServiceProvider;
        }
        if (!Utils::isUnset($request->iotIdSource)) {
            $query['IotIdSource'] = $request->iotIdSource;
        }
        if (!Utils::isUnset($request->iotSignature)) {
            $query['IotSignature'] = $request->iotSignature;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachDataWithSignature',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachDataWithSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachDataWithSignatureRequest $request
     *
     * @return AttachDataWithSignatureResponse
     */
    public function attachDataWithSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDataWithSignatureWithOptions($request, $runtime);
    }

    /**
     * @param AuthorizeDeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AuthorizeDeviceResponse
     */
    public function authorizeDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->deviceGroupId)) {
            $query['DeviceGroupId'] = $request->deviceGroupId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeDevice',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthorizeDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuthorizeDeviceRequest $request
     *
     * @return AuthorizeDeviceResponse
     */
    public function authorizeDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AuthorizeDeviceGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AuthorizeDeviceGroupResponse
     */
    public function authorizeDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->deviceGroupId)) {
            $query['DeviceGroupId'] = $request->deviceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeDeviceGroup',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthorizeDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuthorizeDeviceGroupRequest $request
     *
     * @return AuthorizeDeviceGroupResponse
     */
    public function authorizeDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param BatchUploadMPCoSPhaseDigestInfoRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return BatchUploadMPCoSPhaseDigestInfoResponse
     */
    public function batchUploadMPCoSPhaseDigestInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchUploadMPCoSPhaseDigestInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->phaseDataList)) {
            $request->phaseDataListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->phaseDataList, 'PhaseDataList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->phaseDataListShrink)) {
            $query['PhaseDataList'] = $request->phaseDataListShrink;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->phaseId)) {
            $query['PhaseId'] = $request->phaseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUploadMPCoSPhaseDigestInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUploadMPCoSPhaseDigestInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchUploadMPCoSPhaseDigestInfoRequest $request
     *
     * @return BatchUploadMPCoSPhaseDigestInfoResponse
     */
    public function batchUploadMPCoSPhaseDigestInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUploadMPCoSPhaseDigestInfoWithOptions($request, $runtime);
    }

    /**
     * @param BatchUploadMPCoSPhaseDigestInfoByDeviceRequest $tmpReq
     * @param RuntimeOptions                                 $runtime
     *
     * @return BatchUploadMPCoSPhaseDigestInfoByDeviceResponse
     */
    public function batchUploadMPCoSPhaseDigestInfoByDeviceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchUploadMPCoSPhaseDigestInfoByDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->phaseDataList)) {
            $request->phaseDataListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->phaseDataList, 'PhaseDataList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->iotAuthType)) {
            $query['IotAuthType'] = $request->iotAuthType;
        }
        if (!Utils::isUnset($request->iotDataDigest)) {
            $query['IotDataDigest'] = $request->iotDataDigest;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotIdServiceProvider)) {
            $query['IotIdServiceProvider'] = $request->iotIdServiceProvider;
        }
        if (!Utils::isUnset($request->iotIdSource)) {
            $query['IotIdSource'] = $request->iotIdSource;
        }
        if (!Utils::isUnset($request->iotSignature)) {
            $query['IotSignature'] = $request->iotSignature;
        }
        if (!Utils::isUnset($request->phaseDataListShrink)) {
            $query['PhaseDataList'] = $request->phaseDataListShrink;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->phaseId)) {
            $query['PhaseId'] = $request->phaseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUploadMPCoSPhaseDigestInfoByDevice',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUploadMPCoSPhaseDigestInfoByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchUploadMPCoSPhaseDigestInfoByDeviceRequest $request
     *
     * @return BatchUploadMPCoSPhaseDigestInfoByDeviceResponse
     */
    public function batchUploadMPCoSPhaseDigestInfoByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUploadMPCoSPhaseDigestInfoByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BatchUploadMPCoSPhaseTextInfoRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return BatchUploadMPCoSPhaseTextInfoResponse
     */
    public function batchUploadMPCoSPhaseTextInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchUploadMPCoSPhaseTextInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->phaseDataList)) {
            $request->phaseDataListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->phaseDataList, 'PhaseDataList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->phaseDataListShrink)) {
            $query['PhaseDataList'] = $request->phaseDataListShrink;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->phaseId)) {
            $query['PhaseId'] = $request->phaseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUploadMPCoSPhaseTextInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUploadMPCoSPhaseTextInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchUploadMPCoSPhaseTextInfoRequest $request
     *
     * @return BatchUploadMPCoSPhaseTextInfoResponse
     */
    public function batchUploadMPCoSPhaseTextInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUploadMPCoSPhaseTextInfoWithOptions($request, $runtime);
    }

    /**
     * @param BatchUploadMPCoSPhaseTextInfoByDeviceRequest $tmpReq
     * @param RuntimeOptions                               $runtime
     *
     * @return BatchUploadMPCoSPhaseTextInfoByDeviceResponse
     */
    public function batchUploadMPCoSPhaseTextInfoByDeviceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchUploadMPCoSPhaseTextInfoByDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->phaseDataList)) {
            $request->phaseDataListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->phaseDataList, 'PhaseDataList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->iotAuthType)) {
            $query['IotAuthType'] = $request->iotAuthType;
        }
        if (!Utils::isUnset($request->iotDataDigest)) {
            $query['IotDataDigest'] = $request->iotDataDigest;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotIdServiceProvider)) {
            $query['IotIdServiceProvider'] = $request->iotIdServiceProvider;
        }
        if (!Utils::isUnset($request->iotIdSource)) {
            $query['IotIdSource'] = $request->iotIdSource;
        }
        if (!Utils::isUnset($request->iotSignature)) {
            $query['IotSignature'] = $request->iotSignature;
        }
        if (!Utils::isUnset($request->phaseDataListShrink)) {
            $query['PhaseDataList'] = $request->phaseDataListShrink;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->phaseId)) {
            $query['PhaseId'] = $request->phaseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUploadMPCoSPhaseTextInfoByDevice',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUploadMPCoSPhaseTextInfoByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchUploadMPCoSPhaseTextInfoByDeviceRequest $request
     *
     * @return BatchUploadMPCoSPhaseTextInfoByDeviceResponse
     */
    public function batchUploadMPCoSPhaseTextInfoByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUploadMPCoSPhaseTextInfoByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param CreateMPCoSPhaseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateMPCoSPhaseResponse
     */
    public function createMPCoSPhaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMPCoSPhase',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMPCoSPhaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMPCoSPhaseRequest $request
     *
     * @return CreateMPCoSPhaseResponse
     */
    public function createMPCoSPhase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMPCoSPhaseWithOptions($request, $runtime);
    }

    /**
     * @param CreateMPCoSPhaseGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateMPCoSPhaseGroupResponse
     */
    public function createMPCoSPhaseGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMPCoSPhaseGroup',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMPCoSPhaseGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMPCoSPhaseGroupRequest $request
     *
     * @return CreateMPCoSPhaseGroupResponse
     */
    public function createMPCoSPhaseGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMPCoSPhaseGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateMemberRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateMemberResponse
     */
    public function createMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->memberContact)) {
            $query['MemberContact'] = $request->memberContact;
        }
        if (!Utils::isUnset($request->memberName)) {
            $query['MemberName'] = $request->memberName;
        }
        if (!Utils::isUnset($request->memberPhone)) {
            $query['MemberPhone'] = $request->memberPhone;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMember',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMemberRequest $request
     *
     * @return CreateMemberResponse
     */
    public function createMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMemberWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCapacityInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCapacityInfoResponse
     */
    public function describeCapacityInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCapacityInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCapacityInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCapacityInfoRequest $request
     *
     * @return DescribeCapacityInfoResponse
     */
    public function describeCapacityInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCapacityInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMPCoSAuthorizedInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeMPCoSAuthorizedInfoResponse
     */
    public function describeMPCoSAuthorizedInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->memberId)) {
            $query['MemberId'] = $request->memberId;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMPCoSAuthorizedInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMPCoSAuthorizedInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMPCoSAuthorizedInfoRequest $request
     *
     * @return DescribeMPCoSAuthorizedInfoResponse
     */
    public function describeMPCoSAuthorizedInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMPCoSAuthorizedInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMPCoSPhaseInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMPCoSPhaseInfoResponse
     */
    public function describeMPCoSPhaseInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->dataKey)) {
            $query['DataKey'] = $request->dataKey;
        }
        if (!Utils::isUnset($request->dataSeq)) {
            $query['DataSeq'] = $request->dataSeq;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->phaseId)) {
            $query['PhaseId'] = $request->phaseId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMPCoSPhaseInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMPCoSPhaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMPCoSPhaseInfoRequest $request
     *
     * @return DescribeMPCoSPhaseInfoResponse
     */
    public function describeMPCoSPhaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMPCoSPhaseInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMPCoSResourceInfoRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMPCoSResourceInfoResponse
     */
    public function describeMPCoSResourceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMPCoSResourceInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMPCoSResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMPCoSResourceInfoRequest $request
     *
     * @return DescribeMPCoSResourceInfoResponse
     */
    public function describeMPCoSResourceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMPCoSResourceInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMemberCapacityInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMemberCapacityInfoResponse
     */
    public function describeMemberCapacityInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMemberCapacityInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMemberCapacityInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMemberCapacityInfoRequest $request
     *
     * @return DescribeMemberCapacityInfoResponse
     */
    public function describeMemberCapacityInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMemberCapacityInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceInfoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeResourceInfoResponse
     */
    public function describeResourceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeResourceInfoRequest $request
     *
     * @return DescribeResourceInfoResponse
     */
    public function describeResourceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetBlockChainInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetBlockChainInfoResponse
     */
    public function getBlockChainInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->businessId)) {
            $query['BusinessId'] = $request->businessId;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBlockChainInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBlockChainInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBlockChainInfoRequest $request
     *
     * @return GetBlockChainInfoResponse
     */
    public function getBlockChainInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBlockChainInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetDataRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetDataResponse
     */
    public function getDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->businessId)) {
            $query['BusinessId'] = $request->businessId;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetData',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataRequest $request
     *
     * @return GetDataResponse
     */
    public function getData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataWithOptions($request, $runtime);
    }

    /**
     * @param GetDataModelConfigInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetDataModelConfigInfoResponse
     */
    public function getDataModelConfigInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->dataModelCode)) {
            $query['DataModelCode'] = $request->dataModelCode;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDataModelConfigInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDataModelConfigInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDataModelConfigInfoRequest $request
     *
     * @return GetDataModelConfigInfoResponse
     */
    public function getDataModelConfigInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDataModelConfigInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetHistoryDataCountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetHistoryDataCountResponse
     */
    public function getHistoryDataCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHistoryDataCount',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHistoryDataCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHistoryDataCountRequest $request
     *
     * @return GetHistoryDataCountResponse
     */
    public function getHistoryDataCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistoryDataCountWithOptions($request, $runtime);
    }

    /**
     * @param GetHistoryDataListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetHistoryDataListResponse
     */
    public function getHistoryDataListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHistoryDataList',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHistoryDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHistoryDataListRequest $request
     *
     * @return GetHistoryDataListResponse
     */
    public function getHistoryDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistoryDataListWithOptions($request, $runtime);
    }

    /**
     * @param ListDependentDataModelsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDependentDataModelsResponse
     */
    public function listDependentDataModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDependentDataModels',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDependentDataModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDependentDataModelsRequest $request
     *
     * @return ListDependentDataModelsResponse
     */
    public function listDependentDataModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDependentDataModelsWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListDeviceResponse
     */
    public function listDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->deviceGroupId)) {
            $query['DeviceGroupId'] = $request->deviceGroupId;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDevice',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeviceRequest $request
     *
     * @return ListDeviceResponse
     */
    public function listDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListDeviceGroupResponse
     */
    public function listDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeviceGroup',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDeviceGroupRequest $request
     *
     * @return ListDeviceGroupResponse
     */
    public function listDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListMPCoSPhaseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListMPCoSPhaseResponse
     */
    public function listMPCoSPhaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMPCoSPhase',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMPCoSPhaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMPCoSPhaseRequest $request
     *
     * @return ListMPCoSPhaseResponse
     */
    public function listMPCoSPhase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMPCoSPhaseWithOptions($request, $runtime);
    }

    /**
     * @param ListMPCoSPhaseGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMPCoSPhaseGroupResponse
     */
    public function listMPCoSPhaseGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMPCoSPhaseGroup',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMPCoSPhaseGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMPCoSPhaseGroupRequest $request
     *
     * @return ListMPCoSPhaseGroupResponse
     */
    public function listMPCoSPhaseGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMPCoSPhaseGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListMPCoSPhaseHistoryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListMPCoSPhaseHistoryResponse
     */
    public function listMPCoSPhaseHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->dataKey)) {
            $query['DataKey'] = $request->dataKey;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->phaseId)) {
            $query['PhaseId'] = $request->phaseId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMPCoSPhaseHistory',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMPCoSPhaseHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMPCoSPhaseHistoryRequest $request
     *
     * @return ListMPCoSPhaseHistoryResponse
     */
    public function listMPCoSPhaseHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMPCoSPhaseHistoryWithOptions($request, $runtime);
    }

    /**
     * @param ListMemberRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListMemberResponse
     */
    public function listMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMember',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMemberRequest $request
     *
     * @return ListMemberResponse
     */
    public function listMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMemberWithOptions($request, $runtime);
    }

    /**
     * @param ListMultiPartyCollaborationChainRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListMultiPartyCollaborationChainResponse
     */
    public function listMultiPartyCollaborationChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMultiPartyCollaborationChain',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListMultiPartyCollaborationChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMultiPartyCollaborationChainRequest $request
     *
     * @return ListMultiPartyCollaborationChainResponse
     */
    public function listMultiPartyCollaborationChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMultiPartyCollaborationChainWithOptions($request, $runtime);
    }

    /**
     * @param ListPSMemberDataTypeCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListPSMemberDataTypeCodeResponse
     */
    public function listPSMemberDataTypeCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPSMemberDataTypeCode',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPSMemberDataTypeCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPSMemberDataTypeCodeRequest $request
     *
     * @return ListPSMemberDataTypeCodeResponse
     */
    public function listPSMemberDataTypeCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPSMemberDataTypeCodeWithOptions($request, $runtime);
    }

    /**
     * @param ListProofChainRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListProofChainResponse
     */
    public function listProofChainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->num)) {
            $query['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProofChain',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProofChainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProofChainRequest $request
     *
     * @return ListProofChainResponse
     */
    public function listProofChain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProofChainWithOptions($request, $runtime);
    }

    /**
     * @param LockMemberRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return LockMemberResponse
     */
    public function lockMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->memberId)) {
            $query['MemberId'] = $request->memberId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LockMember',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LockMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LockMemberRequest $request
     *
     * @return LockMemberResponse
     */
    public function lockMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockMemberWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMPCoSPhaseRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyMPCoSPhaseResponse
     */
    public function modifyMPCoSPhaseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->phaseId)) {
            $query['PhaseId'] = $request->phaseId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMPCoSPhase',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMPCoSPhaseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMPCoSPhaseRequest $request
     *
     * @return ModifyMPCoSPhaseResponse
     */
    public function modifyMPCoSPhase($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMPCoSPhaseWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMPCoSPhaseGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyMPCoSPhaseGroupResponse
     */
    public function modifyMPCoSPhaseGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMPCoSPhaseGroup',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMPCoSPhaseGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMPCoSPhaseGroupRequest $request
     *
     * @return ModifyMPCoSPhaseGroupResponse
     */
    public function modifyMPCoSPhaseGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMPCoSPhaseGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMemberRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyMemberResponse
     */
    public function modifyMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->memberContact)) {
            $query['MemberContact'] = $request->memberContact;
        }
        if (!Utils::isUnset($request->memberId)) {
            $query['MemberId'] = $request->memberId;
        }
        if (!Utils::isUnset($request->memberName)) {
            $query['MemberName'] = $request->memberName;
        }
        if (!Utils::isUnset($request->memberPhone)) {
            $query['MemberPhone'] = $request->memberPhone;
        }
        if (!Utils::isUnset($request->memberUid)) {
            $query['MemberUid'] = $request->memberUid;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyMember',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyMemberRequest $request
     *
     * @return ModifyMemberResponse
     */
    public function modifyMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMemberWithOptions($request, $runtime);
    }

    /**
     * @param RegisterDeviceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RegisterDeviceGroupResponse
     */
    public function registerDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->authorizeType)) {
            $query['AuthorizeType'] = $request->authorizeType;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->deviceGroupName)) {
            $query['DeviceGroupName'] = $request->deviceGroupName;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterDeviceGroup',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RegisterDeviceGroupRequest $request
     *
     * @return RegisterDeviceGroupResponse
     */
    public function registerDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param SetDataRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SetDataResponse
     */
    public function setDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetData',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDataRequest $request
     *
     * @return SetDataResponse
     */
    public function setData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataWithOptions($request, $runtime);
    }

    /**
     * @param SetDataWithSignatureRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetDataWithSignatureResponse
     */
    public function setDataWithSignatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->iotAuthType)) {
            $query['IotAuthType'] = $request->iotAuthType;
        }
        if (!Utils::isUnset($request->iotDataDigest)) {
            $query['IotDataDigest'] = $request->iotDataDigest;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotIdServiceProvider)) {
            $query['IotIdServiceProvider'] = $request->iotIdServiceProvider;
        }
        if (!Utils::isUnset($request->iotIdSource)) {
            $query['IotIdSource'] = $request->iotIdSource;
        }
        if (!Utils::isUnset($request->iotSignature)) {
            $query['IotSignature'] = $request->iotSignature;
        }
        if (!Utils::isUnset($request->key)) {
            $query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->value)) {
            $query['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDataWithSignature',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDataWithSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDataWithSignatureRequest $request
     *
     * @return SetDataWithSignatureResponse
     */
    public function setDataWithSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDataWithSignatureWithOptions($request, $runtime);
    }

    /**
     * @param UnAuthorizeDeviceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnAuthorizeDeviceResponse
     */
    public function unAuthorizeDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->deviceGroupId)) {
            $query['DeviceGroupId'] = $request->deviceGroupId;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnAuthorizeDevice',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnAuthorizeDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnAuthorizeDeviceRequest $request
     *
     * @return UnAuthorizeDeviceResponse
     */
    public function unAuthorizeDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unAuthorizeDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UnAuthorizeDeviceGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UnAuthorizeDeviceGroupResponse
     */
    public function unAuthorizeDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->deviceGroupId)) {
            $query['DeviceGroupId'] = $request->deviceGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnAuthorizeDeviceGroup',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnAuthorizeDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnAuthorizeDeviceGroupRequest $request
     *
     * @return UnAuthorizeDeviceGroupResponse
     */
    public function unAuthorizeDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unAuthorizeDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param UnLockMemberRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UnLockMemberResponse
     */
    public function unLockMemberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->memberId)) {
            $query['MemberId'] = $request->memberId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnLockMember',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnLockMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnLockMemberRequest $request
     *
     * @return UnLockMemberResponse
     */
    public function unLockMember($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unLockMemberWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMPCoSAuthorizedInfoRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateMPCoSAuthorizedInfoResponse
     */
    public function updateMPCoSAuthorizedInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMPCoSAuthorizedInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->authorizedPhaseList)) {
            $request->authorizedPhaseListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->authorizedPhaseList, 'AuthorizedPhaseList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->authorizedPhaseListShrink)) {
            $query['AuthorizedPhaseList'] = $request->authorizedPhaseListShrink;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->memberId)) {
            $query['MemberId'] = $request->memberId;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMPCoSAuthorizedInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMPCoSAuthorizedInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMPCoSAuthorizedInfoRequest $request
     *
     * @return UpdateMPCoSAuthorizedInfoResponse
     */
    public function updateMPCoSAuthorizedInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMPCoSAuthorizedInfoWithOptions($request, $runtime);
    }

    /**
     * @param UploadMPCoSPhaseDigestInfoRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return UploadMPCoSPhaseDigestInfoResponse
     */
    public function uploadMPCoSPhaseDigestInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UploadMPCoSPhaseDigestInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedDataList)) {
            $request->relatedDataListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedDataList, 'RelatedDataList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->dataKey)) {
            $query['DataKey'] = $request->dataKey;
        }
        if (!Utils::isUnset($request->dataSeq)) {
            $query['DataSeq'] = $request->dataSeq;
        }
        if (!Utils::isUnset($request->phaseData)) {
            $query['PhaseData'] = $request->phaseData;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->phaseId)) {
            $query['PhaseId'] = $request->phaseId;
        }
        if (!Utils::isUnset($request->relatedDataListShrink)) {
            $query['RelatedDataList'] = $request->relatedDataListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadMPCoSPhaseDigestInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadMPCoSPhaseDigestInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadMPCoSPhaseDigestInfoRequest $request
     *
     * @return UploadMPCoSPhaseDigestInfoResponse
     */
    public function uploadMPCoSPhaseDigestInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMPCoSPhaseDigestInfoWithOptions($request, $runtime);
    }

    /**
     * @param UploadMPCoSPhaseDigestInfoByDeviceRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return UploadMPCoSPhaseDigestInfoByDeviceResponse
     */
    public function uploadMPCoSPhaseDigestInfoByDeviceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UploadMPCoSPhaseDigestInfoByDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedDataList)) {
            $request->relatedDataListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedDataList, 'RelatedDataList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->dataKey)) {
            $query['DataKey'] = $request->dataKey;
        }
        if (!Utils::isUnset($request->dataSeq)) {
            $query['DataSeq'] = $request->dataSeq;
        }
        if (!Utils::isUnset($request->iotAuthType)) {
            $query['IotAuthType'] = $request->iotAuthType;
        }
        if (!Utils::isUnset($request->iotDataDigest)) {
            $query['IotDataDigest'] = $request->iotDataDigest;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotIdServiceProvider)) {
            $query['IotIdServiceProvider'] = $request->iotIdServiceProvider;
        }
        if (!Utils::isUnset($request->iotIdSource)) {
            $query['IotIdSource'] = $request->iotIdSource;
        }
        if (!Utils::isUnset($request->iotSignature)) {
            $query['IotSignature'] = $request->iotSignature;
        }
        if (!Utils::isUnset($request->phaseData)) {
            $query['PhaseData'] = $request->phaseData;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->phaseId)) {
            $query['PhaseId'] = $request->phaseId;
        }
        if (!Utils::isUnset($request->relatedDataListShrink)) {
            $query['RelatedDataList'] = $request->relatedDataListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadMPCoSPhaseDigestInfoByDevice',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadMPCoSPhaseDigestInfoByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadMPCoSPhaseDigestInfoByDeviceRequest $request
     *
     * @return UploadMPCoSPhaseDigestInfoByDeviceResponse
     */
    public function uploadMPCoSPhaseDigestInfoByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMPCoSPhaseDigestInfoByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UploadMPCoSPhaseTextInfoRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UploadMPCoSPhaseTextInfoResponse
     */
    public function uploadMPCoSPhaseTextInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UploadMPCoSPhaseTextInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedDataList)) {
            $request->relatedDataListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedDataList, 'RelatedDataList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->dataKey)) {
            $query['DataKey'] = $request->dataKey;
        }
        if (!Utils::isUnset($request->dataSeq)) {
            $query['DataSeq'] = $request->dataSeq;
        }
        if (!Utils::isUnset($request->phaseData)) {
            $query['PhaseData'] = $request->phaseData;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->phaseId)) {
            $query['PhaseId'] = $request->phaseId;
        }
        if (!Utils::isUnset($request->relatedDataListShrink)) {
            $query['RelatedDataList'] = $request->relatedDataListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadMPCoSPhaseTextInfo',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadMPCoSPhaseTextInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadMPCoSPhaseTextInfoRequest $request
     *
     * @return UploadMPCoSPhaseTextInfoResponse
     */
    public function uploadMPCoSPhaseTextInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMPCoSPhaseTextInfoWithOptions($request, $runtime);
    }

    /**
     * @param UploadMPCoSPhaseTextInfoByDeviceRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return UploadMPCoSPhaseTextInfoByDeviceResponse
     */
    public function uploadMPCoSPhaseTextInfoByDeviceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UploadMPCoSPhaseTextInfoByDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->relatedDataList)) {
            $request->relatedDataListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->relatedDataList, 'RelatedDataList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->apiVersion)) {
            $query['ApiVersion'] = $request->apiVersion;
        }
        if (!Utils::isUnset($request->bizChainId)) {
            $query['BizChainId'] = $request->bizChainId;
        }
        if (!Utils::isUnset($request->dataKey)) {
            $query['DataKey'] = $request->dataKey;
        }
        if (!Utils::isUnset($request->dataSeq)) {
            $query['DataSeq'] = $request->dataSeq;
        }
        if (!Utils::isUnset($request->iotAuthType)) {
            $query['IotAuthType'] = $request->iotAuthType;
        }
        if (!Utils::isUnset($request->iotDataDigest)) {
            $query['IotDataDigest'] = $request->iotDataDigest;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotIdServiceProvider)) {
            $query['IotIdServiceProvider'] = $request->iotIdServiceProvider;
        }
        if (!Utils::isUnset($request->iotIdSource)) {
            $query['IotIdSource'] = $request->iotIdSource;
        }
        if (!Utils::isUnset($request->iotSignature)) {
            $query['IotSignature'] = $request->iotSignature;
        }
        if (!Utils::isUnset($request->phaseData)) {
            $query['PhaseData'] = $request->phaseData;
        }
        if (!Utils::isUnset($request->phaseGroupId)) {
            $query['PhaseGroupId'] = $request->phaseGroupId;
        }
        if (!Utils::isUnset($request->phaseId)) {
            $query['PhaseId'] = $request->phaseId;
        }
        if (!Utils::isUnset($request->relatedDataListShrink)) {
            $query['RelatedDataList'] = $request->relatedDataListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadMPCoSPhaseTextInfoByDevice',
            'version'     => '2019-05-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadMPCoSPhaseTextInfoByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadMPCoSPhaseTextInfoByDeviceRequest $request
     *
     * @return UploadMPCoSPhaseTextInfoByDeviceResponse
     */
    public function uploadMPCoSPhaseTextInfoByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMPCoSPhaseTextInfoByDeviceWithOptions($request, $runtime);
    }
}
