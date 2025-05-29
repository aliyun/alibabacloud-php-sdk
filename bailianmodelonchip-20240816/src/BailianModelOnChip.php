<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\CreateChannelSignRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\CreateChannelSignResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\CreateProductRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\CreateProductResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\DeleteProductRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\DeleteProductResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\DeviceRegisterRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\DeviceRegisterResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetChannelSignResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetQuotaInfoRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetQuotaInfoResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetTokenRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetTokenResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMAppCallRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMAppCallResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMAppCallShrinkRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMChatRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMChatResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMImageChatRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMImageChatResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMImageOcrRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMImageOcrResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMTTSChatRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\HalfLLMTTSChatResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\QueryDevicePageRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\QueryDevicePageResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\QueryProductPageRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\QueryProductPageResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\QueryProductQuotaPageRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\QueryProductQuotaPageResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\QueryTokenUsageRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\QueryTokenUsageResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\RevokeChannelSignResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\UpdateDeviceStatusRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\UpdateDeviceStatusResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\UpdateImageQuotaRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\UpdateImageQuotaResponse;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\UpdateQuotaRequest;
use AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\UpdateQuotaResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class BailianModelOnChip extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bailianmodelonchip', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建渠道签约申请.
     *
     * @param request - CreateChannelSignRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChannelSignResponse
     *
     * @param CreateChannelSignRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateChannelSignResponse
     */
    public function createChannelSignWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channelName) {
            @$body['channelName'] = $request->channelName;
        }

        if (null !== $request->contact) {
            @$body['contact'] = $request->contact;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->phone) {
            @$body['phone'] = $request->phone;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChannelSign',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/channel/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateChannelSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建渠道签约申请.
     *
     * @param request - CreateChannelSignRequest
     *
     * @returns CreateChannelSignResponse
     *
     * @param CreateChannelSignRequest $request
     *
     * @return CreateChannelSignResponse
     */
    public function createChannelSign($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChannelSignWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建产品
     *
     * @param request - CreateProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProductResponse
     */
    public function createProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->euid) {
            @$body['euid'] = $request->euid;
        }

        if (null !== $request->productName) {
            @$body['productName'] = $request->productName;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProduct',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/product/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建产品
     *
     * @param request - CreateProductRequest
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     *
     * @return CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createProductWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除产品
     *
     * @param request - DeleteProductRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProductResponse
     *
     * @param DeleteProductRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProductResponse
     */
    public function deleteProductWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteProduct',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/product/delete',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除产品
     *
     * @param request - DeleteProductRequest
     *
     * @returns DeleteProductResponse
     *
     * @param DeleteProductRequest $request
     *
     * @return DeleteProductResponse
     */
    public function deleteProduct($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProductWithOptions($request, $headers, $runtime);
    }

    /**
     * 设备注册.
     *
     * @param request - DeviceRegisterRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeviceRegisterResponse
     *
     * @param DeviceRegisterRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeviceRegisterResponse
     */
    public function deviceRegisterWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productKey) {
            @$query['productKey'] = $request->productKey;
        }

        if (null !== $request->requestTime) {
            @$query['requestTime'] = $request->requestTime;
        }

        if (null !== $request->signature) {
            @$query['signature'] = $request->signature;
        }

        $body = [];
        if (null !== $request->nonce) {
            @$body['nonce'] = $request->nonce;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeviceRegister',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/device/v1/register',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeviceRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设备注册.
     *
     * @param request - DeviceRegisterRequest
     *
     * @returns DeviceRegisterResponse
     *
     * @param DeviceRegisterRequest $request
     *
     * @return DeviceRegisterResponse
     */
    public function deviceRegister($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deviceRegisterWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询渠道签约申请.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChannelSignResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetChannelSignResponse
     */
    public function getChannelSignWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetChannelSign',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/channel/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetChannelSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询渠道签约申请.
     *
     * @returns GetChannelSignResponse
     *
     * @return GetChannelSignResponse
     */
    public function getChannelSign()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getChannelSignWithOptions($headers, $runtime);
    }

    /**
     * 获取额度信息.
     *
     * @param request - GetQuotaInfoRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQuotaInfoResponse
     *
     * @param GetQuotaInfoRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetQuotaInfoResponse
     */
    public function getQuotaInfoWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->recordId) {
            @$body['recordId'] = $request->recordId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetQuotaInfo',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/quota/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQuotaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取额度信息.
     *
     * @param request - GetQuotaInfoRequest
     *
     * @returns GetQuotaInfoResponse
     *
     * @param GetQuotaInfoRequest $request
     *
     * @return GetQuotaInfoResponse
     */
    public function getQuotaInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取网关校验Token.
     *
     * @param request - GetTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceName) {
            @$body['deviceName'] = $request->deviceName;
        }

        if (null !== $request->nonce) {
            @$body['nonce'] = $request->nonce;
        }

        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->requestTime) {
            @$body['requestTime'] = $request->requestTime;
        }

        if (null !== $request->signature) {
            @$body['signature'] = $request->signature;
        }

        if (null !== $request->tokenKey) {
            @$body['tokenKey'] = $request->tokenKey;
        }

        if (null !== $request->tokenType) {
            @$body['tokenType'] = $request->tokenType;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetToken',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/auth/v1/token/get',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取网关校验Token.
     *
     * @param request - GetTokenRequest
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * 半托管大模型应用请求
     *
     * @param tmpReq - HalfLLMAppCallRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HalfLLMAppCallResponse
     *
     * @param HalfLLMAppCallRequest $tmpReq
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return HalfLLMAppCallResponse
     */
    public function halfLLMAppCallWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new HalfLLMAppCallShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bizParam) {
            $request->bizParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bizParam, 'bizParam', 'json');
        }

        if (null !== $tmpReq->modelTypeList) {
            $request->modelTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->modelTypeList, 'modelTypeList', 'json');
        }

        $body = [];
        if (null !== $request->appId) {
            @$body['appId'] = $request->appId;
        }

        if (null !== $request->bizParamShrink) {
            @$body['bizParam'] = $request->bizParamShrink;
        }

        if (null !== $request->deviceName) {
            @$body['deviceName'] = $request->deviceName;
        }

        if (null !== $request->modelTypeListShrink) {
            @$body['modelTypeList'] = $request->modelTypeListShrink;
        }

        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        if (null !== $request->text) {
            @$body['text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HalfLLMAppCall',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/device/v1/half/llm/app/call',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HalfLLMAppCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 半托管大模型应用请求
     *
     * @param request - HalfLLMAppCallRequest
     *
     * @returns HalfLLMAppCallResponse
     *
     * @param HalfLLMAppCallRequest $request
     *
     * @return HalfLLMAppCallResponse
     */
    public function halfLLMAppCall($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->halfLLMAppCallWithOptions($request, $headers, $runtime);
    }

    /**
     * 半托管大模型流式文本对话.
     *
     * @param request - HalfLLMChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HalfLLMChatResponse
     *
     * @param HalfLLMChatRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return HalfLLMChatResponse
     */
    public function halfLLMChatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceName) {
            @$body['deviceName'] = $request->deviceName;
        }

        if (null !== $request->enableSearch) {
            @$body['enableSearch'] = $request->enableSearch;
        }

        if (null !== $request->inputText) {
            @$body['inputText'] = $request->inputText;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HalfLLMChat',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/device/v1/half/llm/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HalfLLMChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 半托管大模型流式文本对话.
     *
     * @param request - HalfLLMChatRequest
     *
     * @returns HalfLLMChatResponse
     *
     * @param HalfLLMChatRequest $request
     *
     * @return HalfLLMChatResponse
     */
    public function halfLLMChat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->halfLLMChatWithOptions($request, $headers, $runtime);
    }

    /**
     * 半托管大模型文本合成语音.
     *
     * @param request - HalfLLMImageChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HalfLLMImageChatResponse
     *
     * @param HalfLLMImageChatRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return HalfLLMImageChatResponse
     */
    public function halfLLMImageChatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceName) {
            @$body['deviceName'] = $request->deviceName;
        }

        if (null !== $request->enableSearch) {
            @$body['enableSearch'] = $request->enableSearch;
        }

        if (null !== $request->imageUrl) {
            @$body['imageUrl'] = $request->imageUrl;
        }

        if (null !== $request->inputText) {
            @$body['inputText'] = $request->inputText;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HalfLLMImageChat',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/device/v1/half/llm/image/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HalfLLMImageChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 半托管大模型文本合成语音.
     *
     * @param request - HalfLLMImageChatRequest
     *
     * @returns HalfLLMImageChatResponse
     *
     * @param HalfLLMImageChatRequest $request
     *
     * @return HalfLLMImageChatResponse
     */
    public function halfLLMImageChat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->halfLLMImageChatWithOptions($request, $headers, $runtime);
    }

    /**
     * 半托管大模型图片识别.
     *
     * @param request - HalfLLMImageOcrRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HalfLLMImageOcrResponse
     *
     * @param HalfLLMImageOcrRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return HalfLLMImageOcrResponse
     */
    public function halfLLMImageOcrWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceName) {
            @$body['deviceName'] = $request->deviceName;
        }

        if (null !== $request->imageUrl) {
            @$body['imageUrl'] = $request->imageUrl;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HalfLLMImageOcr',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/device/v1/half/llm/image/ocr',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HalfLLMImageOcrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 半托管大模型图片识别.
     *
     * @param request - HalfLLMImageOcrRequest
     *
     * @returns HalfLLMImageOcrResponse
     *
     * @param HalfLLMImageOcrRequest $request
     *
     * @return HalfLLMImageOcrResponse
     */
    public function halfLLMImageOcr($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->halfLLMImageOcrWithOptions($request, $headers, $runtime);
    }

    /**
     * 半托管大模型文本合成语音.
     *
     * @param request - HalfLLMTTSChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HalfLLMTTSChatResponse
     *
     * @param HalfLLMTTSChatRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return HalfLLMTTSChatResponse
     */
    public function halfLLMTTSChatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceName) {
            @$body['deviceName'] = $request->deviceName;
        }

        if (null !== $request->enableSearch) {
            @$body['enableSearch'] = $request->enableSearch;
        }

        if (null !== $request->format) {
            @$body['format'] = $request->format;
        }

        if (null !== $request->model) {
            @$body['model'] = $request->model;
        }

        if (null !== $request->pitchRate) {
            @$body['pitchRate'] = $request->pitchRate;
        }

        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->prompt) {
            @$body['prompt'] = $request->prompt;
        }

        if (null !== $request->sampleRate) {
            @$body['sampleRate'] = $request->sampleRate;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->speechRate) {
            @$body['speechRate'] = $request->speechRate;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        if (null !== $request->text) {
            @$body['text'] = $request->text;
        }

        if (null !== $request->url) {
            @$body['url'] = $request->url;
        }

        if (null !== $request->voice) {
            @$body['voice'] = $request->voice;
        }

        if (null !== $request->volume) {
            @$body['volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HalfLLMTTSChat',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/device/v1/half/llm/tts/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HalfLLMTTSChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 半托管大模型文本合成语音.
     *
     * @param request - HalfLLMTTSChatRequest
     *
     * @returns HalfLLMTTSChatResponse
     *
     * @param HalfLLMTTSChatRequest $request
     *
     * @return HalfLLMTTSChatResponse
     */
    public function halfLLMTTSChat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->halfLLMTTSChatWithOptions($request, $headers, $runtime);
    }

    /**
     * 设备列表分页查询.
     *
     * @param request - QueryDevicePageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDevicePageResponse
     *
     * @param QueryDevicePageRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDevicePageResponse
     */
    public function queryDevicePageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceName) {
            @$body['deviceName'] = $request->deviceName;
        }

        if (null !== $request->disableStatus) {
            @$body['disableStatus'] = $request->disableStatus;
        }

        if (null !== $request->pageIndex) {
            @$body['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->productName) {
            @$body['productName'] = $request->productName;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryDevicePage',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/device/v1/page',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDevicePageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设备列表分页查询.
     *
     * @param request - QueryDevicePageRequest
     *
     * @returns QueryDevicePageResponse
     *
     * @param QueryDevicePageRequest $request
     *
     * @return QueryDevicePageResponse
     */
    public function queryDevicePage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDevicePageWithOptions($request, $headers, $runtime);
    }

    /**
     * 分页查询产品
     *
     * @param request - QueryProductPageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProductPageResponse
     *
     * @param QueryProductPageRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryProductPageResponse
     */
    public function queryProductPageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->modelType) {
            @$body['modelType'] = $request->modelType;
        }

        if (null !== $request->pageIndex) {
            @$body['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->productName) {
            @$body['productName'] = $request->productName;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryProductPage',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/product/page',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryProductPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询产品
     *
     * @param request - QueryProductPageRequest
     *
     * @returns QueryProductPageResponse
     *
     * @param QueryProductPageRequest $request
     *
     * @return QueryProductPageResponse
     */
    public function queryProductPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryProductPageWithOptions($request, $headers, $runtime);
    }

    /**
     * 分页查询产品额度.
     *
     * @param request - QueryProductQuotaPageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProductQuotaPageResponse
     *
     * @param QueryProductQuotaPageRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QueryProductQuotaPageResponse
     */
    public function queryProductQuotaPageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageIndex) {
            @$body['pageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageSize) {
            @$body['pageSize'] = $request->pageSize;
        }

        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->productName) {
            @$body['productName'] = $request->productName;
        }

        if (null !== $request->purchaseTimeEnd) {
            @$body['purchaseTimeEnd'] = $request->purchaseTimeEnd;
        }

        if (null !== $request->purchaseTimeStart) {
            @$body['purchaseTimeStart'] = $request->purchaseTimeStart;
        }

        if (null !== $request->purchaseType) {
            @$body['purchaseType'] = $request->purchaseType;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryProductQuotaPage',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/product/quotaPage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryProductQuotaPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询产品额度.
     *
     * @param request - QueryProductQuotaPageRequest
     *
     * @returns QueryProductQuotaPageResponse
     *
     * @param QueryProductQuotaPageRequest $request
     *
     * @return QueryProductQuotaPageResponse
     */
    public function queryProductQuotaPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryProductQuotaPageWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询token使用量.
     *
     * @param request - QueryTokenUsageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTokenUsageResponse
     *
     * @param QueryTokenUsageRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTokenUsageResponse
     */
    public function queryTokenUsageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endDate) {
            @$body['endDate'] = $request->endDate;
        }

        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->startDate) {
            @$body['startDate'] = $request->startDate;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryTokenUsage',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/token/usage/query',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTokenUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询token使用量.
     *
     * @param request - QueryTokenUsageRequest
     *
     * @returns QueryTokenUsageResponse
     *
     * @param QueryTokenUsageRequest $request
     *
     * @return QueryTokenUsageResponse
     */
    public function queryTokenUsage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryTokenUsageWithOptions($request, $headers, $runtime);
    }

    /**
     * 撤销渠道签约申请.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeChannelSignResponse
     *
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RevokeChannelSignResponse
     */
    public function revokeChannelSignWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'RevokeChannelSign',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/channel/revoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return RevokeChannelSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 撤销渠道签约申请.
     *
     * @returns RevokeChannelSignResponse
     *
     * @return RevokeChannelSignResponse
     */
    public function revokeChannelSign()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->revokeChannelSignWithOptions($headers, $runtime);
    }

    /**
     * 修改设备状态
     *
     * @param request - UpdateDeviceStatusRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDeviceStatusResponse
     *
     * @param UpdateDeviceStatusRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateDeviceStatusResponse
     */
    public function updateDeviceStatusWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deviceName) {
            @$body['deviceName'] = $request->deviceName;
        }

        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDeviceStatus',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/device/v1/update/status',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDeviceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改设备状态
     *
     * @param request - UpdateDeviceStatusRequest
     *
     * @returns UpdateDeviceStatusResponse
     *
     * @param UpdateDeviceStatusRequest $request
     *
     * @return UpdateDeviceStatusResponse
     */
    public function updateDeviceStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDeviceStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改图片模型额度.
     *
     * @param request - UpdateImageQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateImageQuotaResponse
     *
     * @param UpdateImageQuotaRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateImageQuotaResponse
     */
    public function updateImageQuotaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->duration) {
            @$body['duration'] = $request->duration;
        }

        if (null !== $request->durationType) {
            @$body['durationType'] = $request->durationType;
        }

        if (null !== $request->imageCount) {
            @$body['imageCount'] = $request->imageCount;
        }

        if (null !== $request->licenseCount) {
            @$body['licenseCount'] = $request->licenseCount;
        }

        if (null !== $request->packageType) {
            @$body['packageType'] = $request->packageType;
        }

        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->purchaseType) {
            @$body['purchaseType'] = $request->purchaseType;
        }

        if (null !== $request->recordId) {
            @$body['recordId'] = $request->recordId;
        }

        if (null !== $request->settlementAmount) {
            @$body['settlementAmount'] = $request->settlementAmount;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        if (null !== $request->unitPrice) {
            @$body['unitPrice'] = $request->unitPrice;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateImageQuota',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/quota/update/image',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateImageQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改图片模型额度.
     *
     * @param request - UpdateImageQuotaRequest
     *
     * @returns UpdateImageQuotaResponse
     *
     * @param UpdateImageQuotaRequest $request
     *
     * @return UpdateImageQuotaResponse
     */
    public function updateImageQuota($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateImageQuotaWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改额度.
     *
     * @param request - UpdateQuotaRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateQuotaResponse
     *
     * @param UpdateQuotaRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateQuotaResponse
     */
    public function updateQuotaWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->duration) {
            @$body['duration'] = $request->duration;
        }

        if (null !== $request->durationType) {
            @$body['durationType'] = $request->durationType;
        }

        if (null !== $request->licenseCount) {
            @$body['licenseCount'] = $request->licenseCount;
        }

        if (null !== $request->maxQps) {
            @$body['maxQps'] = $request->maxQps;
        }

        if (null !== $request->packageType) {
            @$body['packageType'] = $request->packageType;
        }

        if (null !== $request->productKey) {
            @$body['productKey'] = $request->productKey;
        }

        if (null !== $request->purchaseType) {
            @$body['purchaseType'] = $request->purchaseType;
        }

        if (null !== $request->recordId) {
            @$body['recordId'] = $request->recordId;
        }

        if (null !== $request->settlementAmount) {
            @$body['settlementAmount'] = $request->settlementAmount;
        }

        if (null !== $request->tenantId) {
            @$body['tenantId'] = $request->tenantId;
        }

        if (null !== $request->tokenNumber) {
            @$body['tokenNumber'] = $request->tokenNumber;
        }

        if (null !== $request->unitPrice) {
            @$body['unitPrice'] = $request->unitPrice;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateQuota',
            'version' => '2024-08-16',
            'protocol' => 'HTTPS',
            'pathname' => '/open/api/v1/quota/update',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改额度.
     *
     * @param request - UpdateQuotaRequest
     *
     * @returns UpdateQuotaResponse
     *
     * @param UpdateQuotaRequest $request
     *
     * @return UpdateQuotaResponse
     */
    public function updateQuota($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateQuotaWithOptions($request, $headers, $runtime);
    }
}
