<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\ImportProductsRequest;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\ImportProductsResponse;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\ImportProductsShrinkRequest;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\QueryRecognitionResultRequest;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\QueryRecognitionResultResponse;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\RecognizeOrderRequest;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\RecognizeOrderResponse;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\RecognizeOrderShrinkRequest;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\RegisterWebhookRequest;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\RegisterWebhookResponse;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\UpdateProductRequest;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\UpdateProductResponse;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\UpdateProductShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AgentRetailVision extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('agentretailvision', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 商品导入.
     *
     * @param tmpReq - ImportProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportProductsResponse
     *
     * @param ImportProductsRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ImportProductsResponse
     */
    public function importProductsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ImportProductsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extraImages) {
            $request->extraImagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extraImages, 'ExtraImages', 'json');
        }

        if (null !== $tmpReq->mainImage) {
            $request->mainImageShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->mainImage, 'MainImage', 'json');
        }

        if (null !== $tmpReq->multiViewImages) {
            $request->multiViewImagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->multiViewImages, 'MultiViewImages', 'json');
        }

        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->extraImagesShrink) {
            @$query['ExtraImages'] = $request->extraImagesShrink;
        }

        if (null !== $request->imageTitle) {
            @$query['ImageTitle'] = $request->imageTitle;
        }

        if (null !== $request->itemUniqueId) {
            @$query['ItemUniqueId'] = $request->itemUniqueId;
        }

        if (null !== $request->mainImageShrink) {
            @$query['MainImage'] = $request->mainImageShrink;
        }

        if (null !== $request->multiViewImagesShrink) {
            @$query['MultiViewImages'] = $request->multiViewImagesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportProducts',
            'version' => '2026-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 商品导入.
     *
     * @param request - ImportProductsRequest
     *
     * @returns ImportProductsResponse
     *
     * @param ImportProductsRequest $request
     *
     * @return ImportProductsResponse
     */
    public function importProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importProductsWithOptions($request, $runtime);
    }

    /**
     * 查询任务状态
     *
     * @param request - QueryRecognitionResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRecognitionResultResponse
     *
     * @param QueryRecognitionResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryRecognitionResultResponse
     */
    public function queryRecognitionResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderUniqueId) {
            @$query['OrderUniqueId'] = $request->orderUniqueId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRecognitionResult',
            'version' => '2026-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRecognitionResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询任务状态
     *
     * @param request - QueryRecognitionResultRequest
     *
     * @returns QueryRecognitionResultResponse
     *
     * @param QueryRecognitionResultRequest $request
     *
     * @return QueryRecognitionResultResponse
     */
    public function queryRecognitionResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecognitionResultWithOptions($request, $runtime);
    }

    /**
     * 购物识别.
     *
     * @param tmpReq - RecognizeOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecognizeOrderResponse
     *
     * @param RecognizeOrderRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return RecognizeOrderResponse
     */
    public function recognizeOrderWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RecognizeOrderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->candidateItems) {
            $request->candidateItemsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->candidateItems, 'CandidateItems', 'json');
        }

        if (null !== $tmpReq->videoUrls) {
            $request->videoUrlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->videoUrls, 'VideoUrls', 'json');
        }

        $query = [];
        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->candidateItemsShrink) {
            @$query['CandidateItems'] = $request->candidateItemsShrink;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->orderUniqueId) {
            @$query['OrderUniqueId'] = $request->orderUniqueId;
        }

        if (null !== $request->videoUrlsShrink) {
            @$query['VideoUrls'] = $request->videoUrlsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecognizeOrder',
            'version' => '2026-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecognizeOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 购物识别.
     *
     * @param request - RecognizeOrderRequest
     *
     * @returns RecognizeOrderResponse
     *
     * @param RecognizeOrderRequest $request
     *
     * @return RecognizeOrderResponse
     */
    public function recognizeOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recognizeOrderWithOptions($request, $runtime);
    }

    /**
     * Webhook注册.
     *
     * @param request - RegisterWebhookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterWebhookResponse
     *
     * @param RegisterWebhookRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RegisterWebhookResponse
     */
    public function registerWebhookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callbackSecret) {
            @$query['CallbackSecret'] = $request->callbackSecret;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterWebhook',
            'version' => '2026-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RegisterWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Webhook注册.
     *
     * @param request - RegisterWebhookRequest
     *
     * @returns RegisterWebhookResponse
     *
     * @param RegisterWebhookRequest $request
     *
     * @return RegisterWebhookResponse
     */
    public function registerWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerWebhookWithOptions($request, $runtime);
    }

    /**
     * 商品更新.
     *
     * @param tmpReq - UpdateProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProductResponse
     *
     * @param UpdateProductRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProductResponse
     */
    public function updateProductWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateProductShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extraImages) {
            $request->extraImagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extraImages, 'ExtraImages', 'json');
        }

        if (null !== $tmpReq->mainImage) {
            $request->mainImageShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->mainImage, 'MainImage', 'json');
        }

        if (null !== $tmpReq->multiViewImages) {
            $request->multiViewImagesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->multiViewImages, 'MultiViewImages', 'json');
        }

        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->extraImagesShrink) {
            @$query['ExtraImages'] = $request->extraImagesShrink;
        }

        if (null !== $request->imageTitle) {
            @$query['ImageTitle'] = $request->imageTitle;
        }

        if (null !== $request->itemUniqueId) {
            @$query['ItemUniqueId'] = $request->itemUniqueId;
        }

        if (null !== $request->mainImageShrink) {
            @$query['MainImage'] = $request->mainImageShrink;
        }

        if (null !== $request->multiViewImagesShrink) {
            @$query['MultiViewImages'] = $request->multiViewImagesShrink;
        }

        if (null !== $request->platformItemId) {
            @$query['PlatformItemId'] = $request->platformItemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateProduct',
            'version' => '2026-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 商品更新.
     *
     * @param request - UpdateProductRequest
     *
     * @returns UpdateProductResponse
     *
     * @param UpdateProductRequest $request
     *
     * @return UpdateProductResponse
     */
    public function updateProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProductWithOptions($request, $runtime);
    }
}
