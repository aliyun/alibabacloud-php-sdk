<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cams\V20200606\Models\AddChatappPhoneNumberRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\AddChatappPhoneNumberResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotAssociateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotAssociateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotAssociateShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappBindWabaRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappBindWabaResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappEmbedSignUpRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappEmbedSignUpResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappMigrationRegisterRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappMigrationRegisterResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappMigrationVerifiedRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappMigrationVerifiedResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappPhoneNumberDeregisterRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappPhoneNumberDeregisterResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappPhoneNumberRegisterRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappPhoneNumberRegisterResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappSyncPhoneNumberRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappSyncPhoneNumberResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappVerifyAndRegisterRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ChatappVerifyAndRegisterResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappMigrationInitiateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappMigrationInitiateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateFlowRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateFlowResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateFlowShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreatePhoneMessageQrdlRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreatePhoneMessageQrdlResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeleteChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeleteChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeleteFlowRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeleteFlowResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeletePhoneMessageQrdlRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeletePhoneMessageQrdlResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeprecateFlowRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeprecateFlowResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\EnableWhatsappROIMetricRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\EnableWhatsappROIMetricResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappPhoneNumberMetricRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappPhoneNumberMetricResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateMetricRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateMetricResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappUploadAuthorizationRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappUploadAuthorizationResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappVerifyCodeRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappVerifyCodeResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetCommerceSettingRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetCommerceSettingResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetConversationalAutomationRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetConversationalAutomationResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetFlowJSONAssestRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetFlowJSONAssestResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetFlowPreviewUrlRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetFlowPreviewUrlResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetFlowRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetFlowResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetMigrationVerifyCodeRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetMigrationVerifyCodeResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetPermissionByCodeRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetPermissionByCodeResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetPermissionByCodeShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetPhoneEncryptionPublicKeyRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetPhoneEncryptionPublicKeyResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetPhoneNumberVerificationStatusRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetPhoneNumberVerificationStatusResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetPreValidatePhoneIdRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetPreValidatePhoneIdResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappConnectionCatalogRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappConnectionCatalogResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappHealthStatusRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappHealthStatusResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\IsvGetAppIdRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\IsvGetAppIdResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListFlowRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListFlowResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListFlowShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListPhoneMessageQrdlRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListPhoneMessageQrdlResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListProductCatalogRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListProductCatalogResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListProductRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListProductResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyFlowRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyFlowResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyFlowShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyPhoneBusinessProfileRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyPhoneBusinessProfileResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyPhoneBusinessProfileShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\PublishFlowRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\PublishFlowResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappBindWabaRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappBindWabaResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappPhoneNumbersRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappPhoneNumbersResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryPhoneBusinessProfileRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryPhoneBusinessProfileResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryWabaBusinessInfoRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryWabaBusinessInfoResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\SubmitIsvCustomerTermsRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\SubmitIsvCustomerTermsResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\TriggerChatFlowRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\TriggerChatFlowResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\TriggerChatFlowShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateAccountWebhookRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateAccountWebhookResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateCommerceSettingRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateCommerceSettingResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateConversationalAutomationRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateConversationalAutomationResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateConversationalAutomationShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateFlowJSONAssetRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateFlowJSONAssetResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneEncryptionPublicKeyRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneEncryptionPublicKeyResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneMessageQrdlRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneMessageQrdlResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneWebhookRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneWebhookResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cams extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cams', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds a phone number for a WhatsApp Business account (WABA).
     *
     * @param request - AddChatappPhoneNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddChatappPhoneNumberResponse
     *
     * @param AddChatappPhoneNumberRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddChatappPhoneNumberResponse
     */
    public function addChatappPhoneNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cc) {
            @$query['Cc'] = $request->cc;
        }

        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->preValidateId) {
            @$query['PreValidateId'] = $request->preValidateId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->verifiedName) {
            @$query['VerifiedName'] = $request->verifiedName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddChatappPhoneNumber',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddChatappPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a phone number for a WhatsApp Business account (WABA).
     *
     * @param request - AddChatappPhoneNumberRequest
     *
     * @returns AddChatappPhoneNumberResponse
     *
     * @param AddChatappPhoneNumberRequest $request
     *
     * @return AddChatappPhoneNumberResponse
     */
    public function addChatappPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addChatappPhoneNumberWithOptions($request, $runtime);
    }

    /**
     * Associates FAQs in the knowledge base.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param tmpReq - BeeBotAssociateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BeeBotAssociateResponse
     *
     * @param BeeBotAssociateRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return BeeBotAssociateResponse
     */
    public function beeBotAssociateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BeeBotAssociateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->perspective) {
            $request->perspectiveShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->perspective, 'Perspective', 'json');
        }

        $body = [];
        if (null !== $request->chatBotInstanceId) {
            @$body['ChatBotInstanceId'] = $request->chatBotInstanceId;
        }

        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->isvCode) {
            @$body['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->perspectiveShrink) {
            @$body['Perspective'] = $request->perspectiveShrink;
        }

        if (null !== $request->recommendNum) {
            @$body['RecommendNum'] = $request->recommendNum;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->utterance) {
            @$body['Utterance'] = $request->utterance;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BeeBotAssociate',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BeeBotAssociateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates FAQs in the knowledge base.
     *
     * @remarks
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - BeeBotAssociateRequest
     *
     * @returns BeeBotAssociateResponse
     *
     * @param BeeBotAssociateRequest $request
     *
     * @return BeeBotAssociateResponse
     */
    public function beeBotAssociate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->beeBotAssociateWithOptions($request, $runtime);
    }

    /**
     * Conducts sessions with the bot based on its unique identifier (ID).
     *
     * @remarks
     * The ID of the session.
     *
     * @param tmpReq - BeeBotChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BeeBotChatResponse
     *
     * @param BeeBotChatRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return BeeBotChatResponse
     */
    public function beeBotChatWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BeeBotChatShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->perspective) {
            $request->perspectiveShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->perspective, 'Perspective', 'json');
        }

        if (null !== $tmpReq->vendorParam) {
            $request->vendorParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vendorParam, 'VendorParam', 'json');
        }

        $body = [];
        if (null !== $request->chatBotInstanceId) {
            @$body['ChatBotInstanceId'] = $request->chatBotInstanceId;
        }

        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->intentName) {
            @$body['IntentName'] = $request->intentName;
        }

        if (null !== $request->isvCode) {
            @$body['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->knowledgeId) {
            @$body['KnowledgeId'] = $request->knowledgeId;
        }

        if (null !== $request->perspectiveShrink) {
            @$body['Perspective'] = $request->perspectiveShrink;
        }

        if (null !== $request->senderId) {
            @$body['SenderId'] = $request->senderId;
        }

        if (null !== $request->senderNick) {
            @$body['SenderNick'] = $request->senderNick;
        }

        if (null !== $request->sessionId) {
            @$body['SessionId'] = $request->sessionId;
        }

        if (null !== $request->utterance) {
            @$body['Utterance'] = $request->utterance;
        }

        if (null !== $request->vendorParamShrink) {
            @$body['VendorParam'] = $request->vendorParamShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BeeBotChat',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BeeBotChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Conducts sessions with the bot based on its unique identifier (ID).
     *
     * @remarks
     * The ID of the session.
     *
     * @param request - BeeBotChatRequest
     *
     * @returns BeeBotChatResponse
     *
     * @param BeeBotChatRequest $request
     *
     * @return BeeBotChatResponse
     */
    public function beeBotChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->beeBotChatWithOptions($request, $runtime);
    }

    /**
     * Binds the WhatsApp Business account with ChatApp.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappBindWabaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatappBindWabaResponse
     *
     * @param ChatappBindWabaRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ChatappBindWabaResponse
     */
    public function chatappBindWabaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->wabaId) {
            @$query['WabaId'] = $request->wabaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatappBindWaba',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatappBindWabaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds the WhatsApp Business account with ChatApp.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappBindWabaRequest
     *
     * @returns ChatappBindWabaResponse
     *
     * @param ChatappBindWabaRequest $request
     *
     * @return ChatappBindWabaResponse
     */
    public function chatappBindWaba($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappBindWabaWithOptions($request, $runtime);
    }

    /**
     * Queries WhatsApp Business account (WABA) information after embedded signup. You do not need to call this API operation if you use Version 2 of WhatsApp embedded signup.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappEmbedSignUpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatappEmbedSignUpResponse
     *
     * @param ChatappEmbedSignUpRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ChatappEmbedSignUpResponse
     */
    public function chatappEmbedSignUpWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->inputToken) {
            @$body['InputToken'] = $request->inputToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChatappEmbedSignUp',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatappEmbedSignUpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries WhatsApp Business account (WABA) information after embedded signup. You do not need to call this API operation if you use Version 2 of WhatsApp embedded signup.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappEmbedSignUpRequest
     *
     * @returns ChatappEmbedSignUpResponse
     *
     * @param ChatappEmbedSignUpRequest $request
     *
     * @return ChatappEmbedSignUpResponse
     */
    public function chatappEmbedSignUp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappEmbedSignUpWithOptions($request, $runtime);
    }

    /**
     * Registers a phone number for migration.
     *
     * @remarks
     * The space ID of the RAM user within the independent software vendor (ISV) account.
     *
     * @param request - ChatappMigrationRegisterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatappMigrationRegisterResponse
     *
     * @param ChatappMigrationRegisterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChatappMigrationRegisterResponse
     */
    public function chatappMigrationRegisterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatappMigrationRegister',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatappMigrationRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Registers a phone number for migration.
     *
     * @remarks
     * The space ID of the RAM user within the independent software vendor (ISV) account.
     *
     * @param request - ChatappMigrationRegisterRequest
     *
     * @returns ChatappMigrationRegisterResponse
     *
     * @param ChatappMigrationRegisterRequest $request
     *
     * @return ChatappMigrationRegisterResponse
     */
    public function chatappMigrationRegister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappMigrationRegisterWithOptions($request, $runtime);
    }

    /**
     * Verifies a specified phone number for migration.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappMigrationVerifiedRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatappMigrationVerifiedResponse
     *
     * @param ChatappMigrationVerifiedRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChatappMigrationVerifiedResponse
     */
    public function chatappMigrationVerifiedWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->verifyCode) {
            @$query['VerifyCode'] = $request->verifyCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatappMigrationVerified',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatappMigrationVerifiedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies a specified phone number for migration.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappMigrationVerifiedRequest
     *
     * @returns ChatappMigrationVerifiedResponse
     *
     * @param ChatappMigrationVerifiedRequest $request
     *
     * @return ChatappMigrationVerifiedResponse
     */
    public function chatappMigrationVerified($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappMigrationVerifiedWithOptions($request, $runtime);
    }

    /**
     * Deregisters a phone number from a WhatsApp Business account (WABA).
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappPhoneNumberDeregisterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatappPhoneNumberDeregisterResponse
     *
     * @param ChatappPhoneNumberDeregisterRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ChatappPhoneNumberDeregisterResponse
     */
    public function chatappPhoneNumberDeregisterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->phoneNumber) {
            @$body['PhoneNumber'] = $request->phoneNumber;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChatappPhoneNumberDeregister',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatappPhoneNumberDeregisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deregisters a phone number from a WhatsApp Business account (WABA).
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappPhoneNumberDeregisterRequest
     *
     * @returns ChatappPhoneNumberDeregisterResponse
     *
     * @param ChatappPhoneNumberDeregisterRequest $request
     *
     * @return ChatappPhoneNumberDeregisterResponse
     */
    public function chatappPhoneNumberDeregister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappPhoneNumberDeregisterWithOptions($request, $runtime);
    }

    /**
     * Registers a phone number.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappPhoneNumberRegisterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatappPhoneNumberRegisterResponse
     *
     * @param ChatappPhoneNumberRegisterRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ChatappPhoneNumberRegisterResponse
     */
    public function chatappPhoneNumberRegisterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatappPhoneNumberRegister',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatappPhoneNumberRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Registers a phone number.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappPhoneNumberRegisterRequest
     *
     * @returns ChatappPhoneNumberRegisterResponse
     *
     * @param ChatappPhoneNumberRegisterRequest $request
     *
     * @return ChatappPhoneNumberRegisterResponse
     */
    public function chatappPhoneNumberRegister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappPhoneNumberRegisterWithOptions($request, $runtime);
    }

    /**
     * Synchronizes phone numbers.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappSyncPhoneNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatappSyncPhoneNumberResponse
     *
     * @param ChatappSyncPhoneNumberRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ChatappSyncPhoneNumberResponse
     */
    public function chatappSyncPhoneNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatappSyncPhoneNumber',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatappSyncPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Synchronizes phone numbers.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappSyncPhoneNumberRequest
     *
     * @returns ChatappSyncPhoneNumberResponse
     *
     * @param ChatappSyncPhoneNumberRequest $request
     *
     * @return ChatappSyncPhoneNumberResponse
     */
    public function chatappSyncPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappSyncPhoneNumberWithOptions($request, $runtime);
    }

    /**
     * Associates a phone number with a WhatsApp Business account (WABA).
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappVerifyAndRegisterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatappVerifyAndRegisterResponse
     *
     * @param ChatappVerifyAndRegisterRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ChatappVerifyAndRegisterResponse
     */
    public function chatappVerifyAndRegisterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->verifyCode) {
            @$query['VerifyCode'] = $request->verifyCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChatappVerifyAndRegister',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatappVerifyAndRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a phone number with a WhatsApp Business account (WABA).
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ChatappVerifyAndRegisterRequest
     *
     * @returns ChatappVerifyAndRegisterResponse
     *
     * @param ChatappVerifyAndRegisterRequest $request
     *
     * @return ChatappVerifyAndRegisterResponse
     */
    public function chatappVerifyAndRegister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappVerifyAndRegisterWithOptions($request, $runtime);
    }

    /**
     * The ID of the number.
     *
     * @remarks
     * The status of the phone number.
     *
     * @param request - CreateChatappMigrationInitiateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatappMigrationInitiateResponse
     *
     * @param CreateChatappMigrationInitiateRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateChatappMigrationInitiateResponse
     */
    public function createChatappMigrationInitiateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->countryCode) {
            @$query['CountryCode'] = $request->countryCode;
        }

        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->mobileNumber) {
            @$query['MobileNumber'] = $request->mobileNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateChatappMigrationInitiate',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateChatappMigrationInitiateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the number.
     *
     * @remarks
     * The status of the phone number.
     *
     * @param request - CreateChatappMigrationInitiateRequest
     *
     * @returns CreateChatappMigrationInitiateResponse
     *
     * @param CreateChatappMigrationInitiateRequest $request
     *
     * @return CreateChatappMigrationInitiateResponse
     */
    public function createChatappMigrationInitiate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChatappMigrationInitiateWithOptions($request, $runtime);
    }

    /**
     * The HTTP status code.
     * \\\\\\\\*   Example: OK. This parameter indicates that the request is successful.
     * \\\\\\\\*   Other values indicate that the request fails. For more information, see \\\\\\[Error codes]\\\\\\(https://www.alibabacloud.com/help/zh/cams/latest/api-error-codes).
     *
     * @remarks
     * ### [](#qps-)QPS limit
     * You can call this operation up to 50 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param tmpReq - CreateChatappTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatappTemplateResponse
     *
     * @param CreateChatappTemplateRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateChatappTemplateResponse
     */
    public function createChatappTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateChatappTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->components) {
            $request->componentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->components, 'Components', 'json');
        }

        if (null !== $tmpReq->example) {
            $request->exampleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->example, 'Example', 'json');
        }

        $body = [];
        if (null !== $request->allowCategoryChange) {
            @$body['AllowCategoryChange'] = $request->allowCategoryChange;
        }

        if (null !== $request->category) {
            @$body['Category'] = $request->category;
        }

        if (null !== $request->componentsShrink) {
            @$body['Components'] = $request->componentsShrink;
        }

        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->custWabaId) {
            @$body['CustWabaId'] = $request->custWabaId;
        }

        if (null !== $request->exampleShrink) {
            @$body['Example'] = $request->exampleShrink;
        }

        if (null !== $request->isvCode) {
            @$body['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->messageSendTtlSeconds) {
            @$body['MessageSendTtlSeconds'] = $request->messageSendTtlSeconds;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->templateType) {
            @$body['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChatappTemplate',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateChatappTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The HTTP status code.
     * \\\\\\\\*   Example: OK. This parameter indicates that the request is successful.
     * \\\\\\\\*   Other values indicate that the request fails. For more information, see \\\\\\[Error codes]\\\\\\(https://www.alibabacloud.com/help/zh/cams/latest/api-error-codes).
     *
     * @remarks
     * ### [](#qps-)QPS limit
     * You can call this operation up to 50 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateChatappTemplateRequest
     *
     * @returns CreateChatappTemplateResponse
     *
     * @param CreateChatappTemplateRequest $request
     *
     * @return CreateChatappTemplateResponse
     */
    public function createChatappTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChatappTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates a Flow.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param tmpReq - CreateFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFlowResponse
     *
     * @param CreateFlowRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFlowResponse
     */
    public function createFlowWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFlowShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categories) {
            $request->categoriesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categories, 'Categories', 'json');
        }

        $body = [];
        if (null !== $request->categoriesShrink) {
            @$body['Categories'] = $request->categoriesShrink;
        }

        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateFlow',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Flow.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - CreateFlowRequest
     *
     * @returns CreateFlowResponse
     *
     * @param CreateFlowRequest $request
     *
     * @return CreateFlowResponse
     */
    public function createFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowWithOptions($request, $runtime);
    }

    /**
     * Creates a quick-response (QR) code that contains a message.
     *
     * @param request - CreatePhoneMessageQrdlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePhoneMessageQrdlResponse
     *
     * @param CreatePhoneMessageQrdlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePhoneMessageQrdlResponse
     */
    public function createPhoneMessageQrdlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->generateQrImage) {
            @$body['GenerateQrImage'] = $request->generateQrImage;
        }

        if (null !== $request->phoneNumber) {
            @$body['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->prefilledMessage) {
            @$body['PrefilledMessage'] = $request->prefilledMessage;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePhoneMessageQrdl',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePhoneMessageQrdlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a quick-response (QR) code that contains a message.
     *
     * @param request - CreatePhoneMessageQrdlRequest
     *
     * @returns CreatePhoneMessageQrdlResponse
     *
     * @param CreatePhoneMessageQrdlRequest $request
     *
     * @return CreatePhoneMessageQrdlResponse
     */
    public function createPhoneMessageQrdl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhoneMessageQrdlWithOptions($request, $runtime);
    }

    /**
     * Deletes a message template.
     *
     * @remarks
     * ### QPS limit
     * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteChatappTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteChatappTemplateResponse
     *
     * @param DeleteChatappTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteChatappTemplateResponse
     */
    public function deleteChatappTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->custWabaId) {
            @$query['CustWabaId'] = $request->custWabaId;
        }

        if (null !== $request->isvCode) {
            @$query['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteChatappTemplate',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteChatappTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a message template.
     *
     * @remarks
     * ### QPS limit
     * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteChatappTemplateRequest
     *
     * @returns DeleteChatappTemplateResponse
     *
     * @param DeleteChatappTemplateRequest $request
     *
     * @return DeleteChatappTemplateResponse
     */
    public function deleteChatappTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChatappTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes a Flow. Only Flows in the DRAFT state can be deleted.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFlowResponse
     *
     * @param DeleteFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->flowId) {
            @$body['FlowId'] = $request->flowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFlow',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Flow. Only Flows in the DRAFT state can be deleted.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - DeleteFlowRequest
     *
     * @returns DeleteFlowResponse
     *
     * @param DeleteFlowRequest $request
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowWithOptions($request, $runtime);
    }

    /**
     * Deletes a quick-response (QR) code that contains a message.
     *
     * @param request - DeletePhoneMessageQrdlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePhoneMessageQrdlResponse
     *
     * @param DeletePhoneMessageQrdlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeletePhoneMessageQrdlResponse
     */
    public function deletePhoneMessageQrdlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->phoneNumber) {
            @$body['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->qrdlCode) {
            @$body['QrdlCode'] = $request->qrdlCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeletePhoneMessageQrdl',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePhoneMessageQrdlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a quick-response (QR) code that contains a message.
     *
     * @param request - DeletePhoneMessageQrdlRequest
     *
     * @returns DeletePhoneMessageQrdlResponse
     *
     * @param DeletePhoneMessageQrdlRequest $request
     *
     * @return DeletePhoneMessageQrdlResponse
     */
    public function deletePhoneMessageQrdl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePhoneMessageQrdlWithOptions($request, $runtime);
    }

    /**
     * Deprecates a Flow.
     *
     * @param request - DeprecateFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeprecateFlowResponse
     *
     * @param DeprecateFlowRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeprecateFlowResponse
     */
    public function deprecateFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->flowId) {
            @$body['FlowId'] = $request->flowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeprecateFlow',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeprecateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deprecates a Flow.
     *
     * @param request - DeprecateFlowRequest
     *
     * @returns DeprecateFlowResponse
     *
     * @param DeprecateFlowRequest $request
     *
     * @return DeprecateFlowResponse
     */
    public function deprecateFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deprecateFlowWithOptions($request, $runtime);
    }

    /**
     * Enables the statistics on the metrics that are related to WhatsApp.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - EnableWhatsappROIMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableWhatsappROIMetricResponse
     *
     * @param EnableWhatsappROIMetricRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return EnableWhatsappROIMetricResponse
     */
    public function enableWhatsappROIMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->isvCode) {
            @$query['IsvCode'] = $request->isvCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableWhatsappROIMetric',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableWhatsappROIMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the statistics on the metrics that are related to WhatsApp.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - EnableWhatsappROIMetricRequest
     *
     * @returns EnableWhatsappROIMetricResponse
     *
     * @param EnableWhatsappROIMetricRequest $request
     *
     * @return EnableWhatsappROIMetricResponse
     */
    public function enableWhatsappROIMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableWhatsappROIMetricWithOptions($request, $runtime);
    }

    /**
     * Queries the number of messages that are sent by using a phone number by a specific metric.
     *
     * @remarks
     * You can call this operation up to 50 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetChatappPhoneNumberMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatappPhoneNumberMetricResponse
     *
     * @param GetChatappPhoneNumberMetricRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetChatappPhoneNumberMetricResponse
     */
    public function getChatappPhoneNumberMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->end) {
            @$query['End'] = $request->end;
        }

        if (null !== $request->granularity) {
            @$query['Granularity'] = $request->granularity;
        }

        if (null !== $request->isvCode) {
            @$query['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetChatappPhoneNumberMetric',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetChatappPhoneNumberMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of messages that are sent by using a phone number by a specific metric.
     *
     * @remarks
     * You can call this operation up to 50 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetChatappPhoneNumberMetricRequest
     *
     * @returns GetChatappPhoneNumberMetricResponse
     *
     * @param GetChatappPhoneNumberMetricRequest $request
     *
     * @return GetChatappPhoneNumberMetricResponse
     */
    public function getChatappPhoneNumberMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatappPhoneNumberMetricWithOptions($request, $runtime);
    }

    /**
     * Queries the information of a message template.
     *
     * @remarks
     * ### QPS limit
     * You can call this API operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetChatappTemplateDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatappTemplateDetailResponse
     *
     * @param GetChatappTemplateDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetChatappTemplateDetailResponse
     */
    public function getChatappTemplateDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->custWabaId) {
            @$query['CustWabaId'] = $request->custWabaId;
        }

        if (null !== $request->isvCode) {
            @$query['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetChatappTemplateDetail',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetChatappTemplateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information of a message template.
     *
     * @remarks
     * ### QPS limit
     * You can call this API operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetChatappTemplateDetailRequest
     *
     * @returns GetChatappTemplateDetailResponse
     *
     * @param GetChatappTemplateDetailRequest $request
     *
     * @return GetChatappTemplateDetailResponse
     */
    public function getChatappTemplateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatappTemplateDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the metrics about a marketing template.
     *
     * @remarks
     * You can call this operation up to 50 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetChatappTemplateMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatappTemplateMetricResponse
     *
     * @param GetChatappTemplateMetricRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetChatappTemplateMetricResponse
     */
    public function getChatappTemplateMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->end) {
            @$query['End'] = $request->end;
        }

        if (null !== $request->granularity) {
            @$query['Granularity'] = $request->granularity;
        }

        if (null !== $request->isvCode) {
            @$query['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetChatappTemplateMetric',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetChatappTemplateMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metrics about a marketing template.
     *
     * @remarks
     * You can call this operation up to 50 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetChatappTemplateMetricRequest
     *
     * @returns GetChatappTemplateMetricResponse
     *
     * @param GetChatappTemplateMetricRequest $request
     *
     * @return GetChatappTemplateMetricResponse
     */
    public function getChatappTemplateMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatappTemplateMetricWithOptions($request, $runtime);
    }

    /**
     * Obtains the authentication information that is used to upload a file.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetChatappUploadAuthorizationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatappUploadAuthorizationResponse
     *
     * @param GetChatappUploadAuthorizationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetChatappUploadAuthorizationResponse
     */
    public function getChatappUploadAuthorizationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetChatappUploadAuthorization',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetChatappUploadAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the authentication information that is used to upload a file.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetChatappUploadAuthorizationRequest
     *
     * @returns GetChatappUploadAuthorizationResponse
     *
     * @param GetChatappUploadAuthorizationRequest $request
     *
     * @return GetChatappUploadAuthorizationResponse
     */
    public function getChatappUploadAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatappUploadAuthorizationWithOptions($request, $runtime);
    }

    /**
     * Obtains a verification code.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetChatappVerifyCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetChatappVerifyCodeResponse
     *
     * @param GetChatappVerifyCodeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetChatappVerifyCodeResponse
     */
    public function getChatappVerifyCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->locale) {
            @$query['Locale'] = $request->locale;
        }

        if (null !== $request->method) {
            @$query['Method'] = $request->method;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetChatappVerifyCode',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetChatappVerifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a verification code.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetChatappVerifyCodeRequest
     *
     * @returns GetChatappVerifyCodeResponse
     *
     * @param GetChatappVerifyCodeRequest $request
     *
     * @return GetChatappVerifyCodeResponse
     */
    public function getChatappVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatappVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * Queries the business settings of a phone number.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetCommerceSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCommerceSettingResponse
     *
     * @param GetCommerceSettingRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetCommerceSettingResponse
     */
    public function getCommerceSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCommerceSetting',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCommerceSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the business settings of a phone number.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetCommerceSettingRequest
     *
     * @returns GetCommerceSettingResponse
     *
     * @param GetCommerceSettingRequest $request
     *
     * @return GetCommerceSettingResponse
     */
    public function getCommerceSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommerceSettingWithOptions($request, $runtime);
    }

    /**
     * Configures welcoming messages, opening remarks, and commands.
     *
     * @remarks
     * ### [](#qps-)QPS limit
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * This operation will directly obtain data from Facebook, which sets an upper limit on the total number of calls for operations. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetConversationalAutomationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConversationalAutomationResponse
     *
     * @param GetConversationalAutomationRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetConversationalAutomationResponse
     */
    public function getConversationalAutomationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConversationalAutomation',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConversationalAutomationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures welcoming messages, opening remarks, and commands.
     *
     * @remarks
     * ### [](#qps-)QPS limit
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * This operation will directly obtain data from Facebook, which sets an upper limit on the total number of calls for operations. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetConversationalAutomationRequest
     *
     * @returns GetConversationalAutomationResponse
     *
     * @param GetConversationalAutomationRequest $request
     *
     * @return GetConversationalAutomationResponse
     */
    public function getConversationalAutomation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConversationalAutomationWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a Flow.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFlowResponse
     *
     * @param GetFlowRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetFlowResponse
     */
    public function getFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->flowId) {
            @$body['FlowId'] = $request->flowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFlow',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a Flow.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetFlowRequest
     *
     * @returns GetFlowResponse
     *
     * @param GetFlowRequest $request
     *
     * @return GetFlowResponse
     */
    public function getFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowWithOptions($request, $runtime);
    }

    /**
     * Queries the JSON content of a Flow.
     *
     * @param request - GetFlowJSONAssestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFlowJSONAssestResponse
     *
     * @param GetFlowJSONAssestRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetFlowJSONAssestResponse
     */
    public function getFlowJSONAssestWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->flowId) {
            @$body['FlowId'] = $request->flowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFlowJSONAssest',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFlowJSONAssestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the JSON content of a Flow.
     *
     * @param request - GetFlowJSONAssestRequest
     *
     * @returns GetFlowJSONAssestResponse
     *
     * @param GetFlowJSONAssestRequest $request
     *
     * @return GetFlowJSONAssestResponse
     */
    public function getFlowJSONAssest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowJSONAssestWithOptions($request, $runtime);
    }

    /**
     * Obtains the preview URL of a Flow.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetFlowPreviewUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFlowPreviewUrlResponse
     *
     * @param GetFlowPreviewUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetFlowPreviewUrlResponse
     */
    public function getFlowPreviewUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->flowId) {
            @$body['FlowId'] = $request->flowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFlowPreviewUrl',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetFlowPreviewUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the preview URL of a Flow.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetFlowPreviewUrlRequest
     *
     * @returns GetFlowPreviewUrlResponse
     *
     * @param GetFlowPreviewUrlRequest $request
     *
     * @return GetFlowPreviewUrlResponse
     */
    public function getFlowPreviewUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowPreviewUrlWithOptions($request, $runtime);
    }

    /**
     * Obtain the verification code for the migration number.
     *
     * @remarks
     * The single user QPS limit for this interface is 10 times per second. Exceeding the limit may result in restricted API calls, which may affect your business. Please make reasonable calls.
     *
     * @param request - GetMigrationVerifyCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMigrationVerifyCodeResponse
     *
     * @param GetMigrationVerifyCodeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetMigrationVerifyCodeResponse
     */
    public function getMigrationVerifyCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->locale) {
            @$query['Locale'] = $request->locale;
        }

        if (null !== $request->method) {
            @$query['Method'] = $request->method;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMigrationVerifyCode',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMigrationVerifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the verification code for the migration number.
     *
     * @remarks
     * The single user QPS limit for this interface is 10 times per second. Exceeding the limit may result in restricted API calls, which may affect your business. Please make reasonable calls.
     *
     * @param request - GetMigrationVerifyCodeRequest
     *
     * @returns GetMigrationVerifyCodeResponse
     *
     * @param GetMigrationVerifyCodeRequest $request
     *
     * @return GetMigrationVerifyCodeResponse
     */
    public function getMigrationVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMigrationVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * Obtains permissions based on the authorization code obtained from embedded signup.
     *
     * @param tmpReq - GetPermissionByCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPermissionByCodeResponse
     *
     * @param GetPermissionByCodeRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return GetPermissionByCodeResponse
     */
    public function getPermissionByCodeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetPermissionByCodeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->permissions) {
            $request->permissionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->permissions, 'Permissions', 'json');
        }

        $body = [];
        if (null !== $request->code) {
            @$body['Code'] = $request->code;
        }

        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->permissionsShrink) {
            @$body['Permissions'] = $request->permissionsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPermissionByCode',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPermissionByCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains permissions based on the authorization code obtained from embedded signup.
     *
     * @param request - GetPermissionByCodeRequest
     *
     * @returns GetPermissionByCodeResponse
     *
     * @param GetPermissionByCodeRequest $request
     *
     * @return GetPermissionByCodeResponse
     */
    public function getPermissionByCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPermissionByCodeWithOptions($request, $runtime);
    }

    /**
     * Queries the encryption public key of a phone number.
     *
     * @param request - GetPhoneEncryptionPublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPhoneEncryptionPublicKeyResponse
     *
     * @param GetPhoneEncryptionPublicKeyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetPhoneEncryptionPublicKeyResponse
     */
    public function getPhoneEncryptionPublicKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->phoneNumber) {
            @$body['PhoneNumber'] = $request->phoneNumber;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPhoneEncryptionPublicKey',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPhoneEncryptionPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the encryption public key of a phone number.
     *
     * @param request - GetPhoneEncryptionPublicKeyRequest
     *
     * @returns GetPhoneEncryptionPublicKeyResponse
     *
     * @param GetPhoneEncryptionPublicKeyRequest $request
     *
     * @return GetPhoneEncryptionPublicKeyResponse
     */
    public function getPhoneEncryptionPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhoneEncryptionPublicKeyWithOptions($request, $runtime);
    }

    /**
     * Obtains the verification status of a phone number.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetPhoneNumberVerificationStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPhoneNumberVerificationStatusResponse
     *
     * @param GetPhoneNumberVerificationStatusRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetPhoneNumberVerificationStatusResponse
     */
    public function getPhoneNumberVerificationStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->phoneNumber) {
            @$body['PhoneNumber'] = $request->phoneNumber;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPhoneNumberVerificationStatus',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPhoneNumberVerificationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the verification status of a phone number.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetPhoneNumberVerificationStatusRequest
     *
     * @returns GetPhoneNumberVerificationStatusResponse
     *
     * @param GetPhoneNumberVerificationStatusRequest $request
     *
     * @return GetPhoneNumberVerificationStatusResponse
     */
    public function getPhoneNumberVerificationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhoneNumberVerificationStatusWithOptions($request, $runtime);
    }

    /**
     * Obtains the ID of a pre-registered phone number used for embedded signup without the need to re-obtain a verification code.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetPreValidatePhoneIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPreValidatePhoneIdResponse
     *
     * @param GetPreValidatePhoneIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetPreValidatePhoneIdResponse
     */
    public function getPreValidatePhoneIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->phoneNumber) {
            @$body['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->verifyCode) {
            @$body['VerifyCode'] = $request->verifyCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetPreValidatePhoneId',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPreValidatePhoneIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the ID of a pre-registered phone number used for embedded signup without the need to re-obtain a verification code.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetPreValidatePhoneIdRequest
     *
     * @returns GetPreValidatePhoneIdResponse
     *
     * @param GetPreValidatePhoneIdRequest $request
     *
     * @return GetPreValidatePhoneIdResponse
     */
    public function getPreValidatePhoneId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPreValidatePhoneIdWithOptions($request, $runtime);
    }

    /**
     * Queries the product catalogs that are associated with a WhatsApp Business account (WABA).
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetWhatsappConnectionCatalogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWhatsappConnectionCatalogResponse
     *
     * @param GetWhatsappConnectionCatalogRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetWhatsappConnectionCatalogResponse
     */
    public function getWhatsappConnectionCatalogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->wabaId) {
            @$query['WabaId'] = $request->wabaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWhatsappConnectionCatalog',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWhatsappConnectionCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the product catalogs that are associated with a WhatsApp Business account (WABA).
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetWhatsappConnectionCatalogRequest
     *
     * @returns GetWhatsappConnectionCatalogResponse
     *
     * @param GetWhatsappConnectionCatalogRequest $request
     *
     * @return GetWhatsappConnectionCatalogResponse
     */
    public function getWhatsappConnectionCatalog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWhatsappConnectionCatalogWithOptions($request, $runtime);
    }

    /**
     * Queries the messaging health status of different types of nodes.
     *
     * @remarks
     * ### [](#qps-)QPS limit
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * This operation will directly obtain data from Facebook, which sets an upper limit on the total number of calls for operations. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetWhatsappHealthStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWhatsappHealthStatusResponse
     *
     * @param GetWhatsappHealthStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetWhatsappHealthStatusResponse
     */
    public function getWhatsappHealthStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->nodeType) {
            @$query['NodeType'] = $request->nodeType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->wabaId) {
            @$query['WabaId'] = $request->wabaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetWhatsappHealthStatus',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetWhatsappHealthStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the messaging health status of different types of nodes.
     *
     * @remarks
     * ### [](#qps-)QPS limit
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * This operation will directly obtain data from Facebook, which sets an upper limit on the total number of calls for operations. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - GetWhatsappHealthStatusRequest
     *
     * @returns GetWhatsappHealthStatusResponse
     *
     * @param GetWhatsappHealthStatusRequest $request
     *
     * @return GetWhatsappHealthStatusResponse
     */
    public function getWhatsappHealthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWhatsappHealthStatusWithOptions($request, $runtime);
    }

    /**
     * Obtains the application ID under the ISV account.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - IsvGetAppIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IsvGetAppIdResponse
     *
     * @param IsvGetAppIdRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return IsvGetAppIdResponse
     */
    public function isvGetAppIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->permissions) {
            @$body['Permissions'] = $request->permissions;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'IsvGetAppId',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IsvGetAppIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the application ID under the ISV account.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - IsvGetAppIdRequest
     *
     * @returns IsvGetAppIdResponse
     *
     * @param IsvGetAppIdRequest $request
     *
     * @return IsvGetAppIdResponse
     */
    public function isvGetAppId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->isvGetAppIdWithOptions($request, $runtime);
    }

    /**
     * Queries message templates.
     *
     * @remarks
     * ### QPS limit
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param tmpReq - ListChatappTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChatappTemplateResponse
     *
     * @param ListChatappTemplateRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListChatappTemplateResponse
     */
    public function listChatappTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListChatappTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->page) {
            $request->pageShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->page, 'Page', 'json');
        }

        $query = [];
        if (null !== $request->auditStatus) {
            @$query['AuditStatus'] = $request->auditStatus;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->custWabaId) {
            @$query['CustWabaId'] = $request->custWabaId;
        }

        if (null !== $request->isvCode) {
            @$query['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageShrink) {
            @$query['Page'] = $request->pageShrink;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChatappTemplate',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListChatappTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries message templates.
     *
     * @remarks
     * ### QPS limit
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListChatappTemplateRequest
     *
     * @returns ListChatappTemplateResponse
     *
     * @param ListChatappTemplateRequest $request
     *
     * @return ListChatappTemplateResponse
     */
    public function listChatappTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChatappTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries a list of Flows.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param tmpReq - ListFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFlowResponse
     *
     * @param ListFlowRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return ListFlowResponse
     */
    public function listFlowWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListFlowShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->page) {
            $request->pageShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->page, 'Page', 'json');
        }

        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        if (null !== $request->pageShrink) {
            @$body['Page'] = $request->pageShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFlow',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Flows.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListFlowRequest
     *
     * @returns ListFlowResponse
     *
     * @param ListFlowRequest $request
     *
     * @return ListFlowResponse
     */
    public function listFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a list of quick-response (QR) codes that contain messages.
     *
     * @param request - ListPhoneMessageQrdlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPhoneMessageQrdlResponse
     *
     * @param ListPhoneMessageQrdlRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListPhoneMessageQrdlResponse
     */
    public function listPhoneMessageQrdlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->phoneNumber) {
            @$body['PhoneNumber'] = $request->phoneNumber;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListPhoneMessageQrdl',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPhoneMessageQrdlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a list of quick-response (QR) codes that contain messages.
     *
     * @param request - ListPhoneMessageQrdlRequest
     *
     * @returns ListPhoneMessageQrdlResponse
     *
     * @param ListPhoneMessageQrdlRequest $request
     *
     * @return ListPhoneMessageQrdlResponse
     */
    public function listPhoneMessageQrdl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhoneMessageQrdlWithOptions($request, $runtime);
    }

    /**
     * Queries products in a product catalog.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductResponse
     *
     * @param ListProductRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListProductResponse
     */
    public function listProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->after) {
            @$query['After'] = $request->after;
        }

        if (null !== $request->before) {
            @$query['Before'] = $request->before;
        }

        if (null !== $request->catalogId) {
            @$query['CatalogId'] = $request->catalogId;
        }

        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->fields) {
            @$query['Fields'] = $request->fields;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->wabaId) {
            @$query['WabaId'] = $request->wabaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProduct',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries products in a product catalog.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListProductRequest
     *
     * @returns ListProductResponse
     *
     * @param ListProductRequest $request
     *
     * @return ListProductResponse
     */
    public function listProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductWithOptions($request, $runtime);
    }

    /**
     * Queries the product catalogs on the Business Manager platform of Meta.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListProductCatalogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductCatalogResponse
     *
     * @param ListProductCatalogRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListProductCatalogResponse
     */
    public function listProductCatalogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->after) {
            @$query['After'] = $request->after;
        }

        if (null !== $request->before) {
            @$query['Before'] = $request->before;
        }

        if (null !== $request->businessId) {
            @$query['BusinessId'] = $request->businessId;
        }

        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->fields) {
            @$query['Fields'] = $request->fields;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProductCatalog',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProductCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the product catalogs on the Business Manager platform of Meta.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ListProductCatalogRequest
     *
     * @returns ListProductCatalogResponse
     *
     * @param ListProductCatalogRequest $request
     *
     * @return ListProductCatalogResponse
     */
    public function listProductCatalog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductCatalogWithOptions($request, $runtime);
    }

    /**
     * The code of the message template.
     *
     * @remarks
     * The name of the message template.
     *
     * @param tmpReq - ModifyChatappTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyChatappTemplateResponse
     *
     * @param ModifyChatappTemplateRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyChatappTemplateResponse
     */
    public function modifyChatappTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyChatappTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->components) {
            $request->componentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->components, 'Components', 'json');
        }

        if (null !== $tmpReq->example) {
            $request->exampleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->example, 'Example', 'json');
        }

        $body = [];
        if (null !== $request->category) {
            @$body['Category'] = $request->category;
        }

        if (null !== $request->componentsShrink) {
            @$body['Components'] = $request->componentsShrink;
        }

        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->custWabaId) {
            @$body['CustWabaId'] = $request->custWabaId;
        }

        if (null !== $request->exampleShrink) {
            @$body['Example'] = $request->exampleShrink;
        }

        if (null !== $request->isvCode) {
            @$body['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->messageSendTtlSeconds) {
            @$body['MessageSendTtlSeconds'] = $request->messageSendTtlSeconds;
        }

        if (null !== $request->templateCode) {
            @$body['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$body['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyChatappTemplate',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyChatappTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The code of the message template.
     *
     * @remarks
     * The name of the message template.
     *
     * @param request - ModifyChatappTemplateRequest
     *
     * @returns ModifyChatappTemplateResponse
     *
     * @param ModifyChatappTemplateRequest $request
     *
     * @return ModifyChatappTemplateResponse
     */
    public function modifyChatappTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyChatappTemplateWithOptions($request, $runtime);
    }

    /**
     * Modifies the basic information about a Flow.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param tmpReq - ModifyFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFlowResponse
     *
     * @param ModifyFlowRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyFlowResponse
     */
    public function modifyFlowWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyFlowShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categories) {
            $request->categoriesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categories, 'Categories', 'json');
        }

        $body = [];
        if (null !== $request->categoriesShrink) {
            @$body['Categories'] = $request->categoriesShrink;
        }

        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->flowId) {
            @$body['FlowId'] = $request->flowId;
        }

        if (null !== $request->flowName) {
            @$body['FlowName'] = $request->flowName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyFlow',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the basic information about a Flow.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - ModifyFlowRequest
     *
     * @returns ModifyFlowResponse
     *
     * @param ModifyFlowRequest $request
     *
     * @return ModifyFlowResponse
     */
    public function modifyFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *
     * @remarks
     * ModifyPhoneBusinessProfile
     *
     * @param tmpReq - ModifyPhoneBusinessProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPhoneBusinessProfileResponse
     *
     * @param ModifyPhoneBusinessProfileRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyPhoneBusinessProfileResponse
     */
    public function modifyPhoneBusinessProfileWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyPhoneBusinessProfileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->websites) {
            $request->websitesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->websites, 'Websites', 'json');
        }

        $query = [];
        if (null !== $request->about) {
            @$query['About'] = $request->about;
        }

        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->email) {
            @$query['Email'] = $request->email;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->profilePictureUrl) {
            @$query['ProfilePictureUrl'] = $request->profilePictureUrl;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->vertical) {
            @$query['Vertical'] = $request->vertical;
        }

        if (null !== $request->websitesShrink) {
            @$query['Websites'] = $request->websitesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPhoneBusinessProfile',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPhoneBusinessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *
     * @remarks
     * ModifyPhoneBusinessProfile
     *
     * @param request - ModifyPhoneBusinessProfileRequest
     *
     * @returns ModifyPhoneBusinessProfileResponse
     *
     * @param ModifyPhoneBusinessProfileRequest $request
     *
     * @return ModifyPhoneBusinessProfileResponse
     */
    public function modifyPhoneBusinessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPhoneBusinessProfileWithOptions($request, $runtime);
    }

    /**
     * Publishes a Flow.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PublishFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PublishFlowResponse
     *
     * @param PublishFlowRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return PublishFlowResponse
     */
    public function publishFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->flowId) {
            @$body['FlowId'] = $request->flowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PublishFlow',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PublishFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Publishes a Flow.
     *
     * @remarks
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - PublishFlowRequest
     *
     * @returns PublishFlowResponse
     *
     * @param PublishFlowRequest $request
     *
     * @return PublishFlowResponse
     */
    public function publishFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishFlowWithOptions($request, $runtime);
    }

    /**
     * Query the WhatsApp Business account you associate with ChatApp.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryChatappBindWabaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryChatappBindWabaResponse
     *
     * @param QueryChatappBindWabaRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryChatappBindWabaResponse
     */
    public function queryChatappBindWabaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->isvCode) {
            @$query['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryChatappBindWaba',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryChatappBindWabaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the WhatsApp Business account you associate with ChatApp.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryChatappBindWabaRequest
     *
     * @returns QueryChatappBindWabaResponse
     *
     * @param QueryChatappBindWabaRequest $request
     *
     * @return QueryChatappBindWabaResponse
     */
    public function queryChatappBindWaba($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryChatappBindWabaWithOptions($request, $runtime);
    }

    /**
     * Queries phone numbers that receive messages and statuses of these numbers under a specified user.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryChatappPhoneNumbersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryChatappPhoneNumbersResponse
     *
     * @param QueryChatappPhoneNumbersRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryChatappPhoneNumbersResponse
     */
    public function queryChatappPhoneNumbersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->isvCode) {
            @$query['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryChatappPhoneNumbers',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryChatappPhoneNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries phone numbers that receive messages and statuses of these numbers under a specified user.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryChatappPhoneNumbersRequest
     *
     * @returns QueryChatappPhoneNumbersResponse
     *
     * @param QueryChatappPhoneNumbersRequest $request
     *
     * @return QueryChatappPhoneNumbersResponse
     */
    public function queryChatappPhoneNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryChatappPhoneNumbersWithOptions($request, $runtime);
    }

    /**
     * Queries the business information of the account to which a specified phone number is bound.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryPhoneBusinessProfileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryPhoneBusinessProfileResponse
     *
     * @param QueryPhoneBusinessProfileRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryPhoneBusinessProfileResponse
     */
    public function queryPhoneBusinessProfileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryPhoneBusinessProfile',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryPhoneBusinessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the business information of the account to which a specified phone number is bound.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryPhoneBusinessProfileRequest
     *
     * @returns QueryPhoneBusinessProfileResponse
     *
     * @param QueryPhoneBusinessProfileRequest $request
     *
     * @return QueryPhoneBusinessProfileResponse
     */
    public function queryPhoneBusinessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPhoneBusinessProfileWithOptions($request, $runtime);
    }

    /**
     * Queries the business information about the WhatsApp Business account (WABA).
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryWabaBusinessInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryWabaBusinessInfoResponse
     *
     * @param QueryWabaBusinessInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryWabaBusinessInfoResponse
     */
    public function queryWabaBusinessInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->wabaId) {
            @$query['WabaId'] = $request->wabaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryWabaBusinessInfo',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryWabaBusinessInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the business information about the WhatsApp Business account (WABA).
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - QueryWabaBusinessInfoRequest
     *
     * @returns QueryWabaBusinessInfoResponse
     *
     * @param QueryWabaBusinessInfoRequest $request
     *
     * @return QueryWabaBusinessInfoResponse
     */
    public function queryWabaBusinessInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWabaBusinessInfoWithOptions($request, $runtime);
    }

    /**
     * Sends a message to multiple phone numbers by using ChatAPP at a time.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * You can send messages to up to 1,000 phone numbers in a single request.
     *
     * @param tmpReq - SendChatappMassMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendChatappMassMessageResponse
     *
     * @param SendChatappMassMessageRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SendChatappMassMessageResponse
     */
    public function sendChatappMassMessageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SendChatappMassMessageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->senderList) {
            $request->senderListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->senderList, 'SenderList', 'json');
        }

        $body = [];
        if (null !== $request->channelType) {
            @$body['ChannelType'] = $request->channelType;
        }

        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->custWabaId) {
            @$body['CustWabaId'] = $request->custWabaId;
        }

        if (null !== $request->fallBackContent) {
            @$body['FallBackContent'] = $request->fallBackContent;
        }

        if (null !== $request->fallBackDuration) {
            @$body['FallBackDuration'] = $request->fallBackDuration;
        }

        if (null !== $request->fallBackId) {
            @$body['FallBackId'] = $request->fallBackId;
        }

        if (null !== $request->fallBackRule) {
            @$body['FallBackRule'] = $request->fallBackRule;
        }

        if (null !== $request->from) {
            @$body['From'] = $request->from;
        }

        if (null !== $request->isvCode) {
            @$body['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->label) {
            @$body['Label'] = $request->label;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->senderListShrink) {
            @$body['SenderList'] = $request->senderListShrink;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->templateCode) {
            @$body['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->ttl) {
            @$body['Ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendChatappMassMessage',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendChatappMassMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a message to multiple phone numbers by using ChatAPP at a time.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * You can send messages to up to 1,000 phone numbers in a single request.
     *
     * @param request - SendChatappMassMessageRequest
     *
     * @returns SendChatappMassMessageResponse
     *
     * @param SendChatappMassMessageRequest $request
     *
     * @return SendChatappMassMessageResponse
     */
    public function sendChatappMassMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendChatappMassMessageWithOptions($request, $runtime);
    }

    /**
     * Sends messages by using ChatAPP.
     *
     * @remarks
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param tmpReq - SendChatappMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendChatappMessageResponse
     *
     * @param SendChatappMessageRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SendChatappMessageResponse
     */
    public function sendChatappMessageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SendChatappMessageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->flowAction) {
            $request->flowActionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->flowAction, 'FlowAction', 'json');
        }

        if (null !== $tmpReq->payload) {
            $request->payloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }

        if (null !== $tmpReq->productAction) {
            $request->productActionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->productAction, 'ProductAction', 'json');
        }

        if (null !== $tmpReq->templateParams) {
            $request->templateParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->templateParams, 'TemplateParams', 'json');
        }

        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->payloadShrink) {
            @$query['Payload'] = $request->payloadShrink;
        }

        $body = [];
        if (null !== $request->channelType) {
            @$body['ChannelType'] = $request->channelType;
        }

        if (null !== $request->contextMessageId) {
            @$body['ContextMessageId'] = $request->contextMessageId;
        }

        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->custWabaId) {
            @$body['CustWabaId'] = $request->custWabaId;
        }

        if (null !== $request->fallBackContent) {
            @$body['FallBackContent'] = $request->fallBackContent;
        }

        if (null !== $request->fallBackDuration) {
            @$body['FallBackDuration'] = $request->fallBackDuration;
        }

        if (null !== $request->fallBackId) {
            @$body['FallBackId'] = $request->fallBackId;
        }

        if (null !== $request->fallBackRule) {
            @$body['FallBackRule'] = $request->fallBackRule;
        }

        if (null !== $request->flowActionShrink) {
            @$body['FlowAction'] = $request->flowActionShrink;
        }

        if (null !== $request->from) {
            @$body['From'] = $request->from;
        }

        if (null !== $request->isvCode) {
            @$body['IsvCode'] = $request->isvCode;
        }

        if (null !== $request->label) {
            @$body['Label'] = $request->label;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->messageType) {
            @$body['MessageType'] = $request->messageType;
        }

        if (null !== $request->productActionShrink) {
            @$body['ProductAction'] = $request->productActionShrink;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->templateCode) {
            @$body['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateParamsShrink) {
            @$body['TemplateParams'] = $request->templateParamsShrink;
        }

        if (null !== $request->to) {
            @$body['To'] = $request->to;
        }

        if (null !== $request->trackingData) {
            @$body['TrackingData'] = $request->trackingData;
        }

        if (null !== $request->ttl) {
            @$body['Ttl'] = $request->ttl;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendChatappMessage',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendChatappMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends messages by using ChatAPP.
     *
     * @remarks
     * You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - SendChatappMessageRequest
     *
     * @returns SendChatappMessageResponse
     *
     * @param SendChatappMessageRequest $request
     *
     * @return SendChatappMessageResponse
     */
    public function sendChatappMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendChatappMessageWithOptions($request, $runtime);
    }

    /**
     * Submits the agreement information for independent software vendor (ISV) customers.
     *
     * @remarks
     *   You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * *   After you call the [GetChatappUploadAuthorization](~~GetChatappUploadAuthorization~~) operation to obtain the authentication information for uploading the file to Object Storage Service (OSS), you can use the authentication information to upload the file to the OSS server. To upload the file, you can call the SDK provided by OSS. When you upload the file, set the value of the key to the value of `Dir + "/" + file name`, such as C200293990209/isvTerms.pdf. The value of Dir is obtained from the [GetChatappUploadAuthorization](~~GetChatappUploadAuthorization~~) operation. The value of IsvTerms is obtained from the PutObject operation.
     *
     * @param request - SubmitIsvCustomerTermsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitIsvCustomerTermsResponse
     *
     * @param SubmitIsvCustomerTermsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitIsvCustomerTermsResponse
     */
    public function submitIsvCustomerTermsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessDesc) {
            @$query['BusinessDesc'] = $request->businessDesc;
        }

        if (null !== $request->contactMail) {
            @$query['ContactMail'] = $request->contactMail;
        }

        if (null !== $request->countryId) {
            @$query['CountryId'] = $request->countryId;
        }

        if (null !== $request->custName) {
            @$query['CustName'] = $request->custName;
        }

        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->isvTerms) {
            @$query['IsvTerms'] = $request->isvTerms;
        }

        if (null !== $request->officeAddress) {
            @$query['OfficeAddress'] = $request->officeAddress;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitIsvCustomerTerms',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitIsvCustomerTermsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits the agreement information for independent software vendor (ISV) customers.
     *
     * @remarks
     *   You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * *   After you call the [GetChatappUploadAuthorization](~~GetChatappUploadAuthorization~~) operation to obtain the authentication information for uploading the file to Object Storage Service (OSS), you can use the authentication information to upload the file to the OSS server. To upload the file, you can call the SDK provided by OSS. When you upload the file, set the value of the key to the value of `Dir + "/" + file name`, such as C200293990209/isvTerms.pdf. The value of Dir is obtained from the [GetChatappUploadAuthorization](~~GetChatappUploadAuthorization~~) operation. The value of IsvTerms is obtained from the PutObject operation.
     *
     * @param request - SubmitIsvCustomerTermsRequest
     *
     * @returns SubmitIsvCustomerTermsResponse
     *
     * @param SubmitIsvCustomerTermsRequest $request
     *
     * @return SubmitIsvCustomerTermsResponse
     */
    public function submitIsvCustomerTerms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIsvCustomerTermsWithOptions($request, $runtime);
    }

    /**
     * Trigger an Online ChatFlow.
     *
     * @remarks
     * After triggering an online flow, if your flow contains components that incur costs for cloud products, such as message sending or function calls, please ensure you fully understand the billing methods and prices of the related products before using this interface.
     *
     * @param tmpReq - TriggerChatFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TriggerChatFlowResponse
     *
     * @param TriggerChatFlowRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return TriggerChatFlowResponse
     */
    public function triggerChatFlowWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new TriggerChatFlowShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->data) {
            $request->dataShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->data, 'Data', 'json');
        }

        $query = [];
        if (null !== $request->claimTimeMillis) {
            @$query['ClaimTimeMillis'] = $request->claimTimeMillis;
        }

        if (null !== $request->dataShrink) {
            @$query['Data'] = $request->dataShrink;
        }

        if (null !== $request->discardTimeMillis) {
            @$query['DiscardTimeMillis'] = $request->discardTimeMillis;
        }

        if (null !== $request->flowCode) {
            @$query['FlowCode'] = $request->flowCode;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TriggerChatFlow',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TriggerChatFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Trigger an Online ChatFlow.
     *
     * @remarks
     * After triggering an online flow, if your flow contains components that incur costs for cloud products, such as message sending or function calls, please ensure you fully understand the billing methods and prices of the related products before using this interface.
     *
     * @param request - TriggerChatFlowRequest
     *
     * @returns TriggerChatFlowResponse
     *
     * @param TriggerChatFlowRequest $request
     *
     * @return TriggerChatFlowResponse
     */
    public function triggerChatFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerChatFlowWithOptions($request, $runtime);
    }

    /**
     * Modifies the callback URL of an account.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UpdateAccountWebhookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAccountWebhookResponse
     *
     * @param UpdateAccountWebhookRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateAccountWebhookResponse
     */
    public function updateAccountWebhookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->httpFlag) {
            @$query['HttpFlag'] = $request->httpFlag;
        }

        if (null !== $request->queueFlag) {
            @$query['QueueFlag'] = $request->queueFlag;
        }

        if (null !== $request->statusCallbackUrl) {
            @$query['StatusCallbackUrl'] = $request->statusCallbackUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAccountWebhook',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAccountWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the callback URL of an account.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UpdateAccountWebhookRequest
     *
     * @returns UpdateAccountWebhookResponse
     *
     * @param UpdateAccountWebhookRequest $request
     *
     * @return UpdateAccountWebhookResponse
     */
    public function updateAccountWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccountWebhookWithOptions($request, $runtime);
    }

    /**
     * Modifies the business settings of a phone number.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UpdateCommerceSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCommerceSettingResponse
     *
     * @param UpdateCommerceSettingRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateCommerceSettingResponse
     */
    public function updateCommerceSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cartEnable) {
            @$query['CartEnable'] = $request->cartEnable;
        }

        if (null !== $request->catalogVisible) {
            @$query['CatalogVisible'] = $request->catalogVisible;
        }

        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCommerceSetting',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCommerceSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the business settings of a phone number.
     *
     * @remarks
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UpdateCommerceSettingRequest
     *
     * @returns UpdateCommerceSettingResponse
     *
     * @param UpdateCommerceSettingRequest $request
     *
     * @return UpdateCommerceSettingResponse
     */
    public function updateCommerceSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCommerceSettingWithOptions($request, $runtime);
    }

    /**
     * Modifies welcoming messages, opening remarks, and commands for a phone number.
     *
     * @remarks
     * ### [](#qps-)QPS limit
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * This operation will directly obtain data from Facebook, which sets an upper limit on the total number of calls for operations. We recommend that you take note of the limit when you call this operation.
     *
     * @param tmpReq - UpdateConversationalAutomationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConversationalAutomationResponse
     *
     * @param UpdateConversationalAutomationRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateConversationalAutomationResponse
     */
    public function updateConversationalAutomationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateConversationalAutomationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->commands) {
            $request->commandsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->commands, 'Commands', 'json');
        }

        if (null !== $tmpReq->prompts) {
            $request->promptsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->prompts, 'Prompts', 'json');
        }

        $query = [];
        if (null !== $request->commandsShrink) {
            @$query['Commands'] = $request->commandsShrink;
        }

        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->enableWelcomeMessage) {
            @$query['EnableWelcomeMessage'] = $request->enableWelcomeMessage;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->promptsShrink) {
            @$query['Prompts'] = $request->promptsShrink;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateConversationalAutomation',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConversationalAutomationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies welcoming messages, opening remarks, and commands for a phone number.
     *
     * @remarks
     * ### [](#qps-)QPS limit
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * This operation will directly obtain data from Facebook, which sets an upper limit on the total number of calls for operations. We recommend that you take note of the limit when you call this operation.
     *
     * @param request - UpdateConversationalAutomationRequest
     *
     * @returns UpdateConversationalAutomationResponse
     *
     * @param UpdateConversationalAutomationRequest $request
     *
     * @return UpdateConversationalAutomationResponse
     */
    public function updateConversationalAutomation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConversationalAutomationWithOptions($request, $runtime);
    }

    /**
     * Updates a Flow by using JSON content.
     *
     * @param request - UpdateFlowJSONAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFlowJSONAssetResponse
     *
     * @param UpdateFlowJSONAssetRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateFlowJSONAssetResponse
     */
    public function updateFlowJSONAssetWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->filePath) {
            @$body['FilePath'] = $request->filePath;
        }

        if (null !== $request->flowId) {
            @$body['FlowId'] = $request->flowId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFlowJSONAsset',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFlowJSONAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a Flow by using JSON content.
     *
     * @param request - UpdateFlowJSONAssetRequest
     *
     * @returns UpdateFlowJSONAssetResponse
     *
     * @param UpdateFlowJSONAssetRequest $request
     *
     * @return UpdateFlowJSONAssetResponse
     */
    public function updateFlowJSONAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlowJSONAssetWithOptions($request, $runtime);
    }

    /**
     * Updates the encryption public key of a phone number.
     *
     * @param request - UpdatePhoneEncryptionPublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePhoneEncryptionPublicKeyResponse
     *
     * @param UpdatePhoneEncryptionPublicKeyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdatePhoneEncryptionPublicKeyResponse
     */
    public function updatePhoneEncryptionPublicKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->encryptionPublicKey) {
            @$body['EncryptionPublicKey'] = $request->encryptionPublicKey;
        }

        if (null !== $request->phoneNumber) {
            @$body['PhoneNumber'] = $request->phoneNumber;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePhoneEncryptionPublicKey',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePhoneEncryptionPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the encryption public key of a phone number.
     *
     * @param request - UpdatePhoneEncryptionPublicKeyRequest
     *
     * @returns UpdatePhoneEncryptionPublicKeyResponse
     *
     * @param UpdatePhoneEncryptionPublicKeyRequest $request
     *
     * @return UpdatePhoneEncryptionPublicKeyResponse
     */
    public function updatePhoneEncryptionPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePhoneEncryptionPublicKeyWithOptions($request, $runtime);
    }

    /**
     * Modifies a quick-response (QR) code that contains a message.
     *
     * @param request - UpdatePhoneMessageQrdlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePhoneMessageQrdlResponse
     *
     * @param UpdatePhoneMessageQrdlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdatePhoneMessageQrdlResponse
     */
    public function updatePhoneMessageQrdlWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->custSpaceId) {
            @$body['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->generateQrImage) {
            @$body['GenerateQrImage'] = $request->generateQrImage;
        }

        if (null !== $request->phoneNumber) {
            @$body['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->prefilledMessage) {
            @$body['PrefilledMessage'] = $request->prefilledMessage;
        }

        if (null !== $request->qrdlCode) {
            @$body['QrdlCode'] = $request->qrdlCode;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePhoneMessageQrdl',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePhoneMessageQrdlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a quick-response (QR) code that contains a message.
     *
     * @param request - UpdatePhoneMessageQrdlRequest
     *
     * @returns UpdatePhoneMessageQrdlResponse
     *
     * @param UpdatePhoneMessageQrdlRequest $request
     *
     * @return UpdatePhoneMessageQrdlResponse
     */
    public function updatePhoneMessageQrdl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePhoneMessageQrdlWithOptions($request, $runtime);
    }

    /**
     * The HTTP status code returned.
     * \\*   A value of OK indicates that the call is successful.
     * \\*   Other values indicate that the call fails. For more information, see [Error codes]\\(~~196974~~).
     *
     * @remarks
     * The error message returned.
     *
     * @param request - UpdatePhoneWebhookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePhoneWebhookResponse
     *
     * @param UpdatePhoneWebhookRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdatePhoneWebhookResponse
     */
    public function updatePhoneWebhookWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->custSpaceId) {
            @$query['CustSpaceId'] = $request->custSpaceId;
        }

        if (null !== $request->httpFlag) {
            @$query['HttpFlag'] = $request->httpFlag;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->queueFlag) {
            @$query['QueueFlag'] = $request->queueFlag;
        }

        if (null !== $request->statusCallbackUrl) {
            @$query['StatusCallbackUrl'] = $request->statusCallbackUrl;
        }

        if (null !== $request->upCallbackUrl) {
            @$query['UpCallbackUrl'] = $request->upCallbackUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdatePhoneWebhook',
            'version' => '2020-06-06',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePhoneWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The HTTP status code returned.
     * \\*   A value of OK indicates that the call is successful.
     * \\*   Other values indicate that the call fails. For more information, see [Error codes]\\(~~196974~~).
     *
     * @remarks
     * The error message returned.
     *
     * @param request - UpdatePhoneWebhookRequest
     *
     * @returns UpdatePhoneWebhookResponse
     *
     * @param UpdatePhoneWebhookRequest $request
     *
     * @return UpdatePhoneWebhookResponse
     */
    public function updatePhoneWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePhoneWebhookWithOptions($request, $runtime);
    }
}
