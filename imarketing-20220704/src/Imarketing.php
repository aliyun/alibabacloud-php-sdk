<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\CancelOrderRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\CancelOrderResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ConfirmSampleReceivedRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ConfirmSampleReceivedResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ConfirmSampleShippedRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ConfirmSampleShippedResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\CreateDeviceRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\CreateDeviceResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\CreateDeviceShrinkRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\DeleteCreativeInfoRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\DeleteCreativeInfoResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetAdvertisingForE2Response;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetBrandPageRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetBrandPageResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetBusinessIdRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetBusinessIdResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetCreativeInfoRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetCreativeInfoResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetLeadsListPageRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetLeadsListPageResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetMainPartPageRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetMainPartPageResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetOssUploadSignatureRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetOssUploadSignatureResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetRelatedByCreativeIdRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetRelatedByCreativeIdResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetUserFinishedAdRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetUserFinishedAdResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingShrinkRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdShrinkRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryAuditResultRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryAuditResultResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryBenefitGrantResultRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryBenefitGrantResultResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryOrderRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryOrderResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ReportImpressionRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ReportImpressionResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ReportTranslateRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ReportTranslateResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\SendSmsRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\SendSmsResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\SyncInfoRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\SyncInfoResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\UpdateAdxCreativeContentRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\UpdateAdxCreativeContentResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifyAdvertisingRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifyAdvertisingResponse;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifyAdvertisingShrinkRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifySmsCodeRequest;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifySmsCodeResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Imarketing extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imarketing', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CancelOrderRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CancelOrderResponse
     */
    public function cancelOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->tradeId)) {
            $body['TradeId'] = $request->tradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelOrder',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelOrderRequest $request
     *
     * @return CancelOrderResponse
     */
    public function cancelOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOrderWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmSampleReceivedRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConfirmSampleReceivedResponse
     */
    public function confirmSampleReceivedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->tradeId)) {
            $body['TradeId'] = $request->tradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfirmSampleReceived',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmSampleReceivedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmSampleReceivedRequest $request
     *
     * @return ConfirmSampleReceivedResponse
     */
    public function confirmSampleReceived($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmSampleReceivedWithOptions($request, $runtime);
    }

    /**
     * @param ConfirmSampleShippedRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ConfirmSampleShippedResponse
     */
    public function confirmSampleShippedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->buyerAddress)) {
            $body['BuyerAddress'] = $request->buyerAddress;
        }
        if (!Utils::isUnset($request->buyerName)) {
            $body['BuyerName'] = $request->buyerName;
        }
        if (!Utils::isUnset($request->buyerPhoneNumber)) {
            $body['BuyerPhoneNumber'] = $request->buyerPhoneNumber;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->tradeId)) {
            $body['TradeId'] = $request->tradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfirmSampleShipped',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfirmSampleShippedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfirmSampleShippedRequest $request
     *
     * @return ConfirmSampleShippedResponse
     */
    public function confirmSampleShipped($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->confirmSampleShippedWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDeviceResponse
     */
    public function createDeviceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDeviceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extraMap)) {
            $request->extraMapShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extraMap, 'ExtraMap', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->city)) {
            $body['City'] = $request->city;
        }
        if (!Utils::isUnset($request->deviceModelNumber)) {
            $body['DeviceModelNumber'] = $request->deviceModelNumber;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $body['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->deviceType)) {
            $body['DeviceType'] = $request->deviceType;
        }
        if (!Utils::isUnset($request->district)) {
            $body['District'] = $request->district;
        }
        if (!Utils::isUnset($request->extraMapShrink)) {
            $body['ExtraMap'] = $request->extraMapShrink;
        }
        if (!Utils::isUnset($request->firstScene)) {
            $body['FirstScene'] = $request->firstScene;
        }
        if (!Utils::isUnset($request->floor)) {
            $body['Floor'] = $request->floor;
        }
        if (!Utils::isUnset($request->locationName)) {
            $body['LocationName'] = $request->locationName;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $body['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->outerCode)) {
            $body['OuterCode'] = $request->outerCode;
        }
        if (!Utils::isUnset($request->province)) {
            $body['Province'] = $request->province;
        }
        if (!Utils::isUnset($request->secondScene)) {
            $body['SecondScene'] = $request->secondScene;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDevice',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDeviceRequest $request
     *
     * @return CreateDeviceResponse
     */
    public function createDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCreativeInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCreativeInfoResponse
     */
    public function deleteCreativeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNo)) {
            $query['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        if (!Utils::isUnset($request->updateUser)) {
            $query['UpdateUser'] = $request->updateUser;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCreativeInfo',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCreativeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCreativeInfoRequest $request
     *
     * @return DeleteCreativeInfoResponse
     */
    public function deleteCreativeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCreativeInfoWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetAdvertisingForE2Response
     */
    public function getAdvertisingForE2WithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetAdvertisingForE2',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAdvertisingForE2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetAdvertisingForE2Response
     */
    public function getAdvertisingForE2()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAdvertisingForE2WithOptions($runtime);
    }

    /**
     * @param GetBrandPageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetBrandPageResponse
     */
    public function getBrandPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNo)) {
            $query['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        if (!Utils::isUnset($request->mainName)) {
            $query['MainName'] = $request->mainName;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBrandPage',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBrandPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBrandPageRequest $request
     *
     * @return GetBrandPageResponse
     */
    public function getBrandPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBrandPageWithOptions($request, $runtime);
    }

    /**
     * @param GetBusinessIdRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetBusinessIdResponse
     */
    public function getBusinessIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessId)) {
            $query['BusinessId'] = $request->businessId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusinessId',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBusinessIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBusinessIdRequest $request
     *
     * @return GetBusinessIdResponse
     */
    public function getBusinessId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBusinessIdWithOptions($request, $runtime);
    }

    /**
     * @param GetCreativeInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCreativeInfoResponse
     */
    public function getCreativeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNo)) {
            $query['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCreativeInfo',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCreativeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetCreativeInfoRequest $request
     *
     * @return GetCreativeInfoResponse
     */
    public function getCreativeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCreativeInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetLeadsListPageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetLeadsListPageResponse
     */
    public function getLeadsListPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->componentId)) {
            $query['ComponentId'] = $request->componentId;
        }
        if (!Utils::isUnset($request->contentId)) {
            $query['ContentId'] = $request->contentId;
        }
        if (!Utils::isUnset($request->creativeId)) {
            $query['CreativeId'] = $request->creativeId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLeadsListPage',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLeadsListPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLeadsListPageRequest $request
     *
     * @return GetLeadsListPageResponse
     */
    public function getLeadsListPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLeadsListPageWithOptions($request, $runtime);
    }

    /**
     * @param GetMainPartPageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMainPartPageResponse
     */
    public function getMainPartPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        if (!Utils::isUnset($request->mainName)) {
            $query['MainName'] = $request->mainName;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $query['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMainPartPage',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMainPartPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMainPartPageRequest $request
     *
     * @return GetMainPartPageResponse
     */
    public function getMainPartPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMainPartPageWithOptions($request, $runtime);
    }

    /**
     * @param GetOssUploadSignatureRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetOssUploadSignatureResponse
     */
    public function getOssUploadSignatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssUploadSignature',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssUploadSignatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOssUploadSignatureRequest $request
     *
     * @return GetOssUploadSignatureResponse
     */
    public function getOssUploadSignature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssUploadSignatureWithOptions($request, $runtime);
    }

    /**
     * @param GetRelatedByCreativeIdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetRelatedByCreativeIdResponse
     */
    public function getRelatedByCreativeIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRelatedByCreativeId',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRelatedByCreativeIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRelatedByCreativeIdRequest $request
     *
     * @return GetRelatedByCreativeIdResponse
     */
    public function getRelatedByCreativeId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRelatedByCreativeIdWithOptions($request, $runtime);
    }

    /**
     * @param GetUserFinishedAdRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetUserFinishedAdResponse
     */
    public function getUserFinishedAdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetUserFinishedAd',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserFinishedAdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserFinishedAdRequest $request
     *
     * @return GetUserFinishedAdResponse
     */
    public function getUserFinishedAd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserFinishedAdWithOptions($request, $runtime);
    }

    /**
     * @param ListAdvertisingRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ListAdvertisingResponse
     */
    public function listAdvertisingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListAdvertisingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->device)) {
            $request->deviceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->device, 'Device', 'json');
        }
        if (!Utils::isUnset($tmpReq->ext)) {
            $request->extShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'Ext', 'json');
        }
        if (!Utils::isUnset($tmpReq->imp)) {
            $request->impShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imp, 'Imp', 'json');
        }
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->user, 'User', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAdvertising',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAdvertisingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAdvertisingRequest $request
     *
     * @return ListAdvertisingResponse
     */
    public function listAdvertising($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAdvertisingWithOptions($request, $runtime);
    }

    /**
     * @param ListSpecificAdRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListSpecificAdResponse
     */
    public function listSpecificAdWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSpecificAdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->ext)) {
            $request->extShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'Ext', 'json');
        }
        if (!Utils::isUnset($tmpReq->imp)) {
            $request->impShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imp, 'Imp', 'json');
        }
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->user, 'User', 'json');
        }
        if (!Utils::isUnset($tmpReq->verifyad)) {
            $request->verifyadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->verifyad, 'Verifyad', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appShrink)) {
            $query['App'] = $request->appShrink;
        }
        if (!Utils::isUnset($request->extShrink)) {
            $query['Ext'] = $request->extShrink;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->impShrink)) {
            $query['Imp'] = $request->impShrink;
        }
        if (!Utils::isUnset($request->userShrink)) {
            $query['User'] = $request->userShrink;
        }
        if (!Utils::isUnset($request->verifyadShrink)) {
            $query['Verifyad'] = $request->verifyadShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSpecificAd',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSpecificAdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSpecificAdRequest $request
     *
     * @return ListSpecificAdResponse
     */
    public function listSpecificAd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSpecificAdWithOptions($request, $runtime);
    }

    /**
     * @param QueryAuditResultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryAuditResultResponse
     */
    public function queryAuditResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dspId)) {
            $query['DspId'] = $request->dspId;
        }
        if (!Utils::isUnset($request->ids)) {
            $query['Ids'] = $request->ids;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAuditResult',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAuditResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryAuditResultRequest $request
     *
     * @return QueryAuditResultResponse
     */
    public function queryAuditResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAuditResultWithOptions($request, $runtime);
    }

    /**
     * @param QueryBenefitGrantResultRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryBenefitGrantResultResponse
     */
    public function queryBenefitGrantResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloducodeFlowNo)) {
            $body['CloducodeFlowNo'] = $request->cloducodeFlowNo;
        }
        if (!Utils::isUnset($request->outerCustomerId)) {
            $body['OuterCustomerId'] = $request->outerCustomerId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryBenefitGrantResult',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryBenefitGrantResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryBenefitGrantResultRequest $request
     *
     * @return QueryBenefitGrantResultResponse
     */
    public function queryBenefitGrantResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBenefitGrantResultWithOptions($request, $runtime);
    }

    /**
     * @param QueryOrderRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryOrderResponse
     */
    public function queryOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->channelTradeId)) {
            $body['ChannelTradeId'] = $request->channelTradeId;
        }
        if (!Utils::isUnset($request->tradeId)) {
            $body['TradeId'] = $request->tradeId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrder',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrderRequest $request
     *
     * @return QueryOrderResponse
     */
    public function queryOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrderWithOptions($request, $runtime);
    }

    /**
     * @param ReportImpressionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ReportImpressionResponse
     */
    public function reportImpressionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->impressionlink)) {
            $query['Impressionlink'] = $request->impressionlink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportImpression',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportImpressionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportImpressionRequest $request
     *
     * @return ReportImpressionResponse
     */
    public function reportImpression($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportImpressionWithOptions($request, $runtime);
    }

    /**
     * @param ReportTranslateRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReportTranslateResponse
     */
    public function reportTranslateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReportTranslate',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReportTranslateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReportTranslateRequest $request
     *
     * @return ReportTranslateResponse
     */
    public function reportTranslate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportTranslateWithOptions($request, $runtime);
    }

    /**
     * @param SendSmsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SendSmsResponse
     */
    public function sendSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nowStamp)) {
            $query['NowStamp'] = $request->nowStamp;
        }
        if (!Utils::isUnset($request->phoneNumbers)) {
            $query['PhoneNumbers'] = $request->phoneNumbers;
        }
        if (!Utils::isUnset($request->signKey)) {
            $query['SignKey'] = $request->signKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendSms',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendSmsRequest $request
     *
     * @return SendSmsResponse
     */
    public function sendSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSmsWithOptions($request, $runtime);
    }

    /**
     * @param SyncInfoRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return SyncInfoResponse
     */
    public function syncInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNo)) {
            $query['AccountNo'] = $request->accountNo;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->chainValue)) {
            $query['ChainValue'] = $request->chainValue;
        }
        if (!Utils::isUnset($request->componentIdList)) {
            $query['ComponentIdList'] = $request->componentIdList;
        }
        if (!Utils::isUnset($request->createUser)) {
            $query['CreateUser'] = $request->createUser;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->mainId)) {
            $query['MainId'] = $request->mainId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nextChainValue)) {
            $query['NextChainValue'] = $request->nextChainValue;
        }
        if (!Utils::isUnset($request->ossFileUrl)) {
            $query['OssFileUrl'] = $request->ossFileUrl;
        }
        if (!Utils::isUnset($request->pageId)) {
            $query['PageId'] = $request->pageId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->updateUser)) {
            $query['UpdateUser'] = $request->updateUser;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->urlType)) {
            $query['UrlType'] = $request->urlType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncInfo',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncInfoRequest $request
     *
     * @return SyncInfoResponse
     */
    public function syncInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAdxCreativeContentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateAdxCreativeContentResponse
     */
    public function updateAdxCreativeContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ad)) {
            $query['Ad'] = $request->ad;
        }
        if (!Utils::isUnset($request->dspId)) {
            $query['DspId'] = $request->dspId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAdxCreativeContent',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAdxCreativeContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAdxCreativeContentRequest $request
     *
     * @return UpdateAdxCreativeContentResponse
     */
    public function updateAdxCreativeContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAdxCreativeContentWithOptions($request, $runtime);
    }

    /**
     * @param VerifyAdvertisingRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return VerifyAdvertisingResponse
     */
    public function verifyAdvertisingWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new VerifyAdvertisingShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->app)) {
            $request->appShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->app, 'App', 'json');
        }
        if (!Utils::isUnset($tmpReq->device)) {
            $request->deviceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->device, 'Device', 'json');
        }
        if (!Utils::isUnset($tmpReq->ext)) {
            $request->extShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ext, 'Ext', 'json');
        }
        if (!Utils::isUnset($tmpReq->imp)) {
            $request->impShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imp, 'Imp', 'json');
        }
        if (!Utils::isUnset($tmpReq->user)) {
            $request->userShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->user, 'User', 'json');
        }
        if (!Utils::isUnset($tmpReq->verifyad)) {
            $request->verifyadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->verifyad, 'Verifyad', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyAdvertising',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyAdvertisingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyAdvertisingRequest $request
     *
     * @return VerifyAdvertisingResponse
     */
    public function verifyAdvertising($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyAdvertisingWithOptions($request, $runtime);
    }

    /**
     * @param VerifySmsCodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return VerifySmsCodeResponse
     */
    public function verifySmsCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->nowStamp)) {
            $query['NowStamp'] = $request->nowStamp;
        }
        if (!Utils::isUnset($request->phoneNumbers)) {
            $query['PhoneNumbers'] = $request->phoneNumbers;
        }
        if (!Utils::isUnset($request->signKey)) {
            $query['SignKey'] = $request->signKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifySmsCode',
            'version'     => '2022-07-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifySmsCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifySmsCodeRequest $request
     *
     * @return VerifySmsCodeResponse
     */
    public function verifySmsCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifySmsCodeWithOptions($request, $runtime);
    }
}
