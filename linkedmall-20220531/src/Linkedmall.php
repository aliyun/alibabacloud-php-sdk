<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ApplyCreateDistributionOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ApplyCreateDistributionOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ApplyCreateDistributionOrderShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ApplyRefund4DistributionRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ApplyRefund4DistributionResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ApplyRefund4DistributionShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\CancelDistributionTradeRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\CancelDistributionTradeResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\CancelRefund4DistributionRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\CancelRefund4DistributionResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ConfirmDisburse4DistributionRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ConfirmDisburse4DistributionResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\InitApplyRefund4DistributionRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\InitApplyRefund4DistributionResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\InitModifyRefund4DistributionRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\InitModifyRefund4DistributionResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionMallRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionMallResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ModifyRefund4DistributionRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ModifyRefund4DistributionResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ModifyRefund4DistributionShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryChildDivisionCodeByIdRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryChildDivisionCodeByIdResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryDistributionBillDetailRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryDistributionBillDetailResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryDistributionMallRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryDistributionMallResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryDistributionTradeStatusRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryDistributionTradeStatusResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailWithDivisionRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailWithDivisionResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemGuideRetailPriceRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemGuideRetailPriceResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemGuideRetailPriceShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryLogistics4DistributionRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryLogistics4DistributionResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryMallCategoryListRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryMallCategoryListResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryOrderDetail4DistributionRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryOrderDetail4DistributionResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryOrderList4DistributionRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryOrderList4DistributionResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryRefundApplicationDetail4DistributionRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryRefundApplicationDetail4DistributionResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderResponse;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\RenderDistributionOrderShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\SubmitReturnGoodLogistics4DistributionRequest;
use AlibabaCloud\SDK\Linkedmall\V20220531\Models\SubmitReturnGoodLogistics4DistributionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Linkedmall extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'                 => 'linkedmall.aliyuncs.com',
            'cn-shanghai'                 => 'linkedmall.aliyuncs.com',
            'ap-northeast-1'              => 'linkedmall.aliyuncs.com',
            'ap-northeast-2-pop'          => 'linkedmall.aliyuncs.com',
            'ap-south-1'                  => 'linkedmall.aliyuncs.com',
            'ap-southeast-1'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-2'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-3'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-5'              => 'linkedmall.aliyuncs.com',
            'cn-beijing'                  => 'linkedmall.aliyuncs.com',
            'cn-beijing-finance-1'        => 'linkedmall.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'linkedmall.aliyuncs.com',
            'cn-beijing-gov-1'            => 'linkedmall.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'linkedmall.aliyuncs.com',
            'cn-chengdu'                  => 'linkedmall.aliyuncs.com',
            'cn-edge-1'                   => 'linkedmall.aliyuncs.com',
            'cn-fujian'                   => 'linkedmall.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-finance'         => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'linkedmall.aliyuncs.com',
            'cn-hongkong'                 => 'linkedmall.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'linkedmall.aliyuncs.com',
            'cn-huhehaote'                => 'linkedmall.aliyuncs.com',
            'cn-north-2-gov-1'            => 'linkedmall.aliyuncs.com',
            'cn-qingdao'                  => 'linkedmall.aliyuncs.com',
            'cn-qingdao-nebula'           => 'linkedmall.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'linkedmall.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'linkedmall.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'linkedmall.aliyuncs.com',
            'cn-shanghai-inner'           => 'linkedmall.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'linkedmall.aliyuncs.com',
            'cn-shenzhen'                 => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-inner'           => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'linkedmall.aliyuncs.com',
            'cn-wuhan'                    => 'linkedmall.aliyuncs.com',
            'cn-yushanfang'               => 'linkedmall.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'linkedmall.aliyuncs.com',
            'cn-zhangjiakou'              => 'linkedmall.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'linkedmall.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'linkedmall.aliyuncs.com',
            'eu-central-1'                => 'linkedmall.aliyuncs.com',
            'eu-west-1'                   => 'linkedmall.aliyuncs.com',
            'eu-west-1-oxs'               => 'linkedmall.aliyuncs.com',
            'me-east-1'                   => 'linkedmall.aliyuncs.com',
            'rus-west-1-pop'              => 'linkedmall.aliyuncs.com',
            'us-east-1'                   => 'linkedmall.aliyuncs.com',
            'us-west-1'                   => 'linkedmall.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('linkedmall', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ApplyCreateDistributionOrderRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return ApplyCreateDistributionOrderResponse
     */
    public function applyCreateDistributionOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyCreateDistributionOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->itemInfoLists)) {
            $request->itemInfoListsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itemInfoLists, 'ItemInfoLists', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->buyerId)) {
            $body['BuyerId'] = $request->buyerId;
        }
        if (!Utils::isUnset($request->deliveryAddress)) {
            $body['DeliveryAddress'] = $request->deliveryAddress;
        }
        if (!Utils::isUnset($request->distributionOutTradeId)) {
            $body['DistributionOutTradeId'] = $request->distributionOutTradeId;
        }
        if (!Utils::isUnset($request->distributionSupplierId)) {
            $body['DistributionSupplierId'] = $request->distributionSupplierId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->itemInfoListsShrink)) {
            $body['ItemInfoLists'] = $request->itemInfoListsShrink;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyCreateDistributionOrder',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyCreateDistributionOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyCreateDistributionOrderRequest $request
     *
     * @return ApplyCreateDistributionOrderResponse
     */
    public function applyCreateDistributionOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCreateDistributionOrderWithOptions($request, $runtime);
    }

    /**
     * @param ApplyRefund4DistributionRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ApplyRefund4DistributionResponse
     */
    public function applyRefund4DistributionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ApplyRefund4DistributionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->leavePictureLists)) {
            $request->leavePictureListsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->leavePictureLists, 'LeavePictureLists', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->applyReasonTextId)) {
            $body['ApplyReasonTextId'] = $request->applyReasonTextId;
        }
        if (!Utils::isUnset($request->applyRefundCount)) {
            $body['ApplyRefundCount'] = $request->applyRefundCount;
        }
        if (!Utils::isUnset($request->applyRefundFee)) {
            $body['ApplyRefundFee'] = $request->applyRefundFee;
        }
        if (!Utils::isUnset($request->bizClaimType)) {
            $body['BizClaimType'] = $request->bizClaimType;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->goodsStatus)) {
            $body['GoodsStatus'] = $request->goodsStatus;
        }
        if (!Utils::isUnset($request->leaveMessage)) {
            $body['LeaveMessage'] = $request->leaveMessage;
        }
        if (!Utils::isUnset($request->leavePictureListsShrink)) {
            $body['LeavePictureLists'] = $request->leavePictureListsShrink;
        }
        if (!Utils::isUnset($request->subDistributionOrderId)) {
            $body['SubDistributionOrderId'] = $request->subDistributionOrderId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApplyRefund4Distribution',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyRefund4DistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyRefund4DistributionRequest $request
     *
     * @return ApplyRefund4DistributionResponse
     */
    public function applyRefund4Distribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyRefund4DistributionWithOptions($request, $runtime);
    }

    /**
     * @param CancelDistributionTradeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CancelDistributionTradeResponse
     */
    public function cancelDistributionTradeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributionTradeId)) {
            $body['DistributionTradeId'] = $request->distributionTradeId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelDistributionTrade',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelDistributionTradeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelDistributionTradeRequest $request
     *
     * @return CancelDistributionTradeResponse
     */
    public function cancelDistributionTrade($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDistributionTradeWithOptions($request, $runtime);
    }

    /**
     * @param CancelRefund4DistributionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CancelRefund4DistributionResponse
     */
    public function cancelRefund4DistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->disputeId)) {
            $body['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->subDistributionOrderId)) {
            $body['SubDistributionOrderId'] = $request->subDistributionOrderId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelRefund4Distribution',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelRefund4DistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelRefund4DistributionRequest $request
     *
     * @return CancelRefund4DistributionResponse
     */
    public function cancelRefund4Distribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRefund4DistributionWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmDisburse4DistributionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ConfirmDisburse4DistributionResponse
     */
    public function confirmDisburse4DistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributionTradeId)) {
            $body['DistributionTradeId'] = $request->distributionTradeId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->mainDistributionOrderId)) {
            $body['MainDistributionOrderId'] = $request->mainDistributionOrderId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfirmDisburse4Distribution',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmDisburse4DistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmDisburse4DistributionRequest $request
     *
     * @return ConfirmDisburse4DistributionResponse
     */
    public function confirmDisburse4Distribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmDisburse4DistributionWithOptions($request, $runtime);
    }

    /**
     * @param InitApplyRefund4DistributionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return InitApplyRefund4DistributionResponse
     */
    public function initApplyRefund4DistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizClaimType)) {
            $body['BizClaimType'] = $request->bizClaimType;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->goodsStatus)) {
            $body['GoodsStatus'] = $request->goodsStatus;
        }
        if (!Utils::isUnset($request->subDistributionOrderId)) {
            $body['SubDistributionOrderId'] = $request->subDistributionOrderId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitApplyRefund4Distribution',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitApplyRefund4DistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitApplyRefund4DistributionRequest $request
     *
     * @return InitApplyRefund4DistributionResponse
     */
    public function initApplyRefund4Distribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initApplyRefund4DistributionWithOptions($request, $runtime);
    }

    /**
     * @param InitModifyRefund4DistributionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return InitModifyRefund4DistributionResponse
     */
    public function initModifyRefund4DistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bizClaimType)) {
            $body['BizClaimType'] = $request->bizClaimType;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $body['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->subDistributionOrderId)) {
            $body['SubDistributionOrderId'] = $request->subDistributionOrderId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitModifyRefund4Distribution',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitModifyRefund4DistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InitModifyRefund4DistributionRequest $request
     *
     * @return InitModifyRefund4DistributionResponse
     */
    public function initModifyRefund4Distribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initModifyRefund4DistributionWithOptions($request, $runtime);
    }

    /**
     * @param ListDistributionItemRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDistributionItemResponse
     */
    public function listDistributionItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributionMallId)) {
            $body['DistributionMallId'] = $request->distributionMallId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->itemStatus)) {
            $body['ItemStatus'] = $request->itemStatus;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $body['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDistributionItem',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDistributionItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDistributionItemRequest $request
     *
     * @return ListDistributionItemResponse
     */
    public function listDistributionItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDistributionItemWithOptions($request, $runtime);
    }

    /**
     * @param ListDistributionMallRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDistributionMallResponse
     */
    public function listDistributionMallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelSupplierId)) {
            $body['ChannelSupplierId'] = $request->channelSupplierId;
        }
        if (!Utils::isUnset($request->distributionMallId)) {
            $body['DistributionMallId'] = $request->distributionMallId;
        }
        if (!Utils::isUnset($request->distributionMallName)) {
            $body['DistributionMallName'] = $request->distributionMallName;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $body['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $body['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDistributionMall',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDistributionMallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDistributionMallRequest $request
     *
     * @return ListDistributionMallResponse
     */
    public function listDistributionMall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDistributionMallWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRefund4DistributionRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyRefund4DistributionResponse
     */
    public function modifyRefund4DistributionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyRefund4DistributionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->leavePictureLists)) {
            $request->leavePictureListsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->leavePictureLists, 'LeavePictureLists', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->applyReasonTextId)) {
            $body['ApplyReasonTextId'] = $request->applyReasonTextId;
        }
        if (!Utils::isUnset($request->applyRefundCount)) {
            $body['ApplyRefundCount'] = $request->applyRefundCount;
        }
        if (!Utils::isUnset($request->applyRefundFee)) {
            $body['ApplyRefundFee'] = $request->applyRefundFee;
        }
        if (!Utils::isUnset($request->bizClaimType)) {
            $body['BizClaimType'] = $request->bizClaimType;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $body['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->goodsStatus)) {
            $body['GoodsStatus'] = $request->goodsStatus;
        }
        if (!Utils::isUnset($request->leaveMessage)) {
            $body['LeaveMessage'] = $request->leaveMessage;
        }
        if (!Utils::isUnset($request->leavePictureListsShrink)) {
            $body['LeavePictureLists'] = $request->leavePictureListsShrink;
        }
        if (!Utils::isUnset($request->subDistributionOrderId)) {
            $body['SubDistributionOrderId'] = $request->subDistributionOrderId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyRefund4Distribution',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRefund4DistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyRefund4DistributionRequest $request
     *
     * @return ModifyRefund4DistributionResponse
     */
    public function modifyRefund4Distribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRefund4DistributionWithOptions($request, $runtime);
    }

    /**
     * @param QueryChildDivisionCodeByIdRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryChildDivisionCodeByIdResponse
     */
    public function queryChildDivisionCodeByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->divisionCode)) {
            $body['DivisionCode'] = $request->divisionCode;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryChildDivisionCodeById',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryChildDivisionCodeByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryChildDivisionCodeByIdRequest $request
     *
     * @return QueryChildDivisionCodeByIdResponse
     */
    public function queryChildDivisionCodeById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryChildDivisionCodeByIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryDistributionBillDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryDistributionBillDetailResponse
     */
    public function queryDistributionBillDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->billId)) {
            $body['BillId'] = $request->billId;
        }
        if (!Utils::isUnset($request->billPeriod)) {
            $body['BillPeriod'] = $request->billPeriod;
        }
        if (!Utils::isUnset($request->billStatus)) {
            $body['BillStatus'] = $request->billStatus;
        }
        if (!Utils::isUnset($request->distributionMallId)) {
            $body['DistributionMallId'] = $request->distributionMallId;
        }
        if (!Utils::isUnset($request->distributionMallName)) {
            $body['DistributionMallName'] = $request->distributionMallName;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDistributionBillDetail',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDistributionBillDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDistributionBillDetailRequest $request
     *
     * @return QueryDistributionBillDetailResponse
     */
    public function queryDistributionBillDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDistributionBillDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryDistributionMallRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryDistributionMallResponse
     */
    public function queryDistributionMallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributionMallId)) {
            $body['DistributionMallId'] = $request->distributionMallId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDistributionMall',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDistributionMallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDistributionMallRequest $request
     *
     * @return QueryDistributionMallResponse
     */
    public function queryDistributionMall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDistributionMallWithOptions($request, $runtime);
    }

    /**
     * @param QueryDistributionTradeStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryDistributionTradeStatusResponse
     */
    public function queryDistributionTradeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributionSupplierId)) {
            $body['DistributionSupplierId'] = $request->distributionSupplierId;
        }
        if (!Utils::isUnset($request->distributionTradeId)) {
            $body['DistributionTradeId'] = $request->distributionTradeId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDistributionTradeStatus',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDistributionTradeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDistributionTradeStatusRequest $request
     *
     * @return QueryDistributionTradeStatusResponse
     */
    public function queryDistributionTradeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDistributionTradeStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryItemDetailRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryItemDetailResponse
     */
    public function queryItemDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributionMallId)) {
            $body['DistributionMallId'] = $request->distributionMallId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $body['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryItemDetail',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryItemDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryItemDetailRequest $request
     *
     * @return QueryItemDetailResponse
     */
    public function queryItemDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryItemDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryItemDetailWithDivisionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryItemDetailWithDivisionResponse
     */
    public function queryItemDetailWithDivisionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributionMallId)) {
            $body['DistributionMallId'] = $request->distributionMallId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->divisionCode)) {
            $body['DivisionCode'] = $request->divisionCode;
        }
        if (!Utils::isUnset($request->lmItemId)) {
            $body['LmItemId'] = $request->lmItemId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryItemDetailWithDivision',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryItemDetailWithDivisionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryItemDetailWithDivisionRequest $request
     *
     * @return QueryItemDetailWithDivisionResponse
     */
    public function queryItemDetailWithDivision($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryItemDetailWithDivisionWithOptions($request, $runtime);
    }

    /**
     * @param QueryItemGuideRetailPriceRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryItemGuideRetailPriceResponse
     */
    public function queryItemGuideRetailPriceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryItemGuideRetailPriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->lmItemIds)) {
            $request->lmItemIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->lmItemIds, 'LmItemIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->distributionMallId)) {
            $body['DistributionMallId'] = $request->distributionMallId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->lmItemIdsShrink)) {
            $body['LmItemIds'] = $request->lmItemIdsShrink;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryItemGuideRetailPrice',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryItemGuideRetailPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryItemGuideRetailPriceRequest $request
     *
     * @return QueryItemGuideRetailPriceResponse
     */
    public function queryItemGuideRetailPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryItemGuideRetailPriceWithOptions($request, $runtime);
    }

    /**
     * @param QueryLogistics4DistributionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryLogistics4DistributionResponse
     */
    public function queryLogistics4DistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->mainDistributionOrderId)) {
            $body['MainDistributionOrderId'] = $request->mainDistributionOrderId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryLogistics4Distribution',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLogistics4DistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryLogistics4DistributionRequest $request
     *
     * @return QueryLogistics4DistributionResponse
     */
    public function queryLogistics4Distribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLogistics4DistributionWithOptions($request, $runtime);
    }

    /**
     * @param QueryMallCategoryListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMallCategoryListResponse
     */
    public function queryMallCategoryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            $body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->distributionMallId)) {
            $body['DistributionMallId'] = $request->distributionMallId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMallCategoryList',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMallCategoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMallCategoryListRequest $request
     *
     * @return QueryMallCategoryListResponse
     */
    public function queryMallCategoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMallCategoryListWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderDetail4DistributionRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryOrderDetail4DistributionResponse
     */
    public function queryOrderDetail4DistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->mainDistributionOrderId)) {
            $body['MainDistributionOrderId'] = $request->mainDistributionOrderId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderDetail4Distribution',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderDetail4DistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderDetail4DistributionRequest $request
     *
     * @return QueryOrderDetail4DistributionResponse
     */
    public function queryOrderDetail4Distribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderDetail4DistributionWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderList4DistributionRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryOrderList4DistributionResponse
     */
    public function queryOrderList4DistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->filterOption)) {
            $body['FilterOption'] = $request->filterOption;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrderList4Distribution',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderList4DistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderList4DistributionRequest $request
     *
     * @return QueryOrderList4DistributionResponse
     */
    public function queryOrderList4Distribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderList4DistributionWithOptions($request, $runtime);
    }

    /**
     * @param QueryRefundApplicationDetail4DistributionRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return QueryRefundApplicationDetail4DistributionResponse
     */
    public function queryRefundApplicationDetail4DistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->subDistributionOrderId)) {
            $body['SubDistributionOrderId'] = $request->subDistributionOrderId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryRefundApplicationDetail4Distribution',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRefundApplicationDetail4DistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRefundApplicationDetail4DistributionRequest $request
     *
     * @return QueryRefundApplicationDetail4DistributionResponse
     */
    public function queryRefundApplicationDetail4Distribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRefundApplicationDetail4DistributionWithOptions($request, $runtime);
    }

    /**
     * @param RenderDistributionOrderRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return RenderDistributionOrderResponse
     */
    public function renderDistributionOrderWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RenderDistributionOrderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->itemInfoLists)) {
            $request->itemInfoListsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->itemInfoLists, 'ItemInfoLists', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->buyerId)) {
            $body['BuyerId'] = $request->buyerId;
        }
        if (!Utils::isUnset($request->deliveryAddress)) {
            $body['DeliveryAddress'] = $request->deliveryAddress;
        }
        if (!Utils::isUnset($request->distributionSupplierId)) {
            $body['DistributionSupplierId'] = $request->distributionSupplierId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $body['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->itemInfoListsShrink)) {
            $body['ItemInfoLists'] = $request->itemInfoListsShrink;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenderDistributionOrder',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenderDistributionOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenderDistributionOrderRequest $request
     *
     * @return RenderDistributionOrderResponse
     */
    public function renderDistributionOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renderDistributionOrderWithOptions($request, $runtime);
    }

    /**
     * @param SubmitReturnGoodLogistics4DistributionRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return SubmitReturnGoodLogistics4DistributionResponse
     */
    public function submitReturnGoodLogistics4DistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cpCode)) {
            $body['CpCode'] = $request->cpCode;
        }
        if (!Utils::isUnset($request->disputeId)) {
            $body['DisputeId'] = $request->disputeId;
        }
        if (!Utils::isUnset($request->distributorId)) {
            $body['DistributorId'] = $request->distributorId;
        }
        if (!Utils::isUnset($request->logisticsNo)) {
            $body['LogisticsNo'] = $request->logisticsNo;
        }
        if (!Utils::isUnset($request->subDistributionOrderId)) {
            $body['SubDistributionOrderId'] = $request->subDistributionOrderId;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['TenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitReturnGoodLogistics4Distribution',
            'version'     => '2022-05-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitReturnGoodLogistics4DistributionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SubmitReturnGoodLogistics4DistributionRequest $request
     *
     * @return SubmitReturnGoodLogistics4DistributionResponse
     */
    public function submitReturnGoodLogistics4Distribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitReturnGoodLogistics4DistributionWithOptions($request, $runtime);
    }
}
