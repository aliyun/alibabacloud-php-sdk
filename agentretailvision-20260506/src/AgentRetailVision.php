<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\GenerateGroupImageRequest;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\GenerateGroupImageResponse;
use AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\GenerateGroupImageShrinkRequest;
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
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-beijing' => 'agentretailvision.cn-beijing.aliyuncs.com',
        ];
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
     * Generates a composite image for single-item multi-image or multi-item scenarios.
     *
     * @remarks
     * ## Request description
     * - When `groupType=1`, `platformItemIdList` must contain only one element.
     * - When `groupType=2`, `platformItemIdList` can contain 1 to 10 elements.
     *
     * @param tmpReq - GenerateGroupImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateGroupImageResponse
     *
     * @param GenerateGroupImageRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return GenerateGroupImageResponse
     */
    public function generateGroupImageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateGroupImageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->platformItemIdList) {
            $request->platformItemIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->platformItemIdList, 'PlatformItemIdList', 'json');
        }

        $query = [];
        if (null !== $request->callbackSecret) {
            @$query['CallbackSecret'] = $request->callbackSecret;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->platformItemIdListShrink) {
            @$query['PlatformItemIdList'] = $request->platformItemIdListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateGroupImage',
            'version' => '2026-05-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateGroupImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a composite image for single-item multi-image or multi-item scenarios.
     *
     * @remarks
     * ## Request description
     * - When `groupType=1`, `platformItemIdList` must contain only one element.
     * - When `groupType=2`, `platformItemIdList` can contain 1 to 10 elements.
     *
     * @param request - GenerateGroupImageRequest
     *
     * @returns GenerateGroupImageResponse
     *
     * @param GenerateGroupImageRequest $request
     *
     * @return GenerateGroupImageResponse
     */
    public function generateGroupImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateGroupImageWithOptions($request, $runtime);
    }

    /**
     * Adds product information. After a successful import, the platform returns a globally unique platform_item_id for subsequent updates and recognition result association.
     *
     * @remarks
     * ## Operation description
     * - This operation is used to add product information.
     * - After you import products to the product library, they are stored in Alibaba Cloud OSS for direct recall and retrieval by the product recognition API.
     * - You must provide at least one main image URL, and the `item_unique_id` must be unique within the same business party.
     * - You can optionally provide multi-angle views and extra images to improve recognition accuracy.
     * - The `device_id` field can be used to establish an association between a device and product vectors, but it is not required.
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
     * Adds product information. After a successful import, the platform returns a globally unique platform_item_id for subsequent updates and recognition result association.
     *
     * @remarks
     * ## Operation description
     * - This operation is used to add product information.
     * - After you import products to the product library, they are stored in Alibaba Cloud OSS for direct recall and retrieval by the product recognition API.
     * - You must provide at least one main image URL, and the `item_unique_id` must be unique within the same business party.
     * - You can optionally provide multi-angle views and extra images to improve recognition accuracy.
     * - The `device_id` field can be used to establish an association between a device and product vectors, but it is not required.
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
     * At least one result retrieval method must be integrated: webhook callback or task status query. Both methods can be used simultaneously.
     * 	•	If the user chooses the webhook callback method, the receiving endpoint must be prepared in advance and implemented according to the following request and response parameters.
     * 	•	After the recognition task is completed, the platform will push the results to the business party based on the callback URL bound to the task.
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
     * At least one result retrieval method must be integrated: webhook callback or task status query. Both methods can be used simultaneously.
     * 	•	If the user chooses the webhook callback method, the receiving endpoint must be prepared in advance and implemented according to the following request and response parameters.
     * 	•	After the recognition task is completed, the platform will push the results to the business party based on the callback URL bound to the task.
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
     * Used for intelligent recognition scenarios. Requires uploading the OSS address of shopping videos. The platform creates an asynchronous recognition task and immediately returns a task_id. Notifications are sent via webhook, and the results need to be actively retrieved through the query API.
     *
     * @remarks
     * ## Request Description
     * - The user must provide `caller_uid` and `order_unique_id` as required parameters.
     * - The `video_urls` parameter supports video files in mp4, avi, mov, and mkv formats, with a size limit of 100 MB, a duration of no more than 3 minutes, a resolution between 480p and 1080p, and specific aspect ratio requirements.
     * - At least one of `device_id` or `candidate_items` must be provided to specify the recognition scope. If both are provided, the system first filters by the device product library and then further filters based on the candidate items list.
     * - Optionally, the user can specify a `callback_url` to receive notifications of the recognition results. If not provided, the pre-registered default webhook address is used.
     * - If a request is submitted repeatedly with the same `order_unique_id`, the system directly returns the previously existing task status.
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
     * Used for intelligent recognition scenarios. Requires uploading the OSS address of shopping videos. The platform creates an asynchronous recognition task and immediately returns a task_id. Notifications are sent via webhook, and the results need to be actively retrieved through the query API.
     *
     * @remarks
     * ## Request Description
     * - The user must provide `caller_uid` and `order_unique_id` as required parameters.
     * - The `video_urls` parameter supports video files in mp4, avi, mov, and mkv formats, with a size limit of 100 MB, a duration of no more than 3 minutes, a resolution between 480p and 1080p, and specific aspect ratio requirements.
     * - At least one of `device_id` or `candidate_items` must be provided to specify the recognition scope. If both are provided, the system first filters by the device product library and then further filters based on the candidate items list.
     * - Optionally, the user can specify a `callback_url` to receive notifications of the recognition results. If not provided, the pre-registered default webhook address is used.
     * - If a request is submitted repeatedly with the same `order_unique_id`, the system directly returns the previously existing task status.
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
     * Registers or updates the default webhook callback URL.
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
     * Registers or updates the default webhook callback URL.
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
     * Updates the information of an existing item on the platform.
     *
     * @remarks
     * ## Operation description
     * - The platform_item_id parameter is used as the primary identifier for the update.
     * - If both platform_item_id and item_unique_id are specified, they must point to the same item.
     * - The item title (image_title) and the list of main image URLs (main_image) are required. The main_image parameter must contain at least one image.
     * - Optional parameters include the multi-angle image list (multi_view_images), the list of additional image URLs (extra_images), and the device ID (device_id).
     * - In multi_view_images, each object must contain the image OSS address (url) and the shooting angle (angle). Valid values of angle: top view (up), bottom view (down), left view (left), right view (right), front view (front), and back view (back).
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
     * Updates the information of an existing item on the platform.
     *
     * @remarks
     * ## Operation description
     * - The platform_item_id parameter is used as the primary identifier for the update.
     * - If both platform_item_id and item_unique_id are specified, they must point to the same item.
     * - The item title (image_title) and the list of main image URLs (main_image) are required. The main_image parameter must contain at least one image.
     * - Optional parameters include the multi-angle image list (multi_view_images), the list of additional image URLs (extra_images), and the device ID (device_id).
     * - In multi_view_images, each object must contain the image OSS address (url) and the shooting angle (angle). Valid values of angle: top view (up), bottom view (down), left view (left), right view (right), front view (front), and back view (back).
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
