<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateAccountWebhookRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateAccountWebhookResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateCommerceSettingRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateCommerceSettingResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateFlowJSONAssetRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdateFlowJSONAssetResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneEncryptionPublicKeyRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneEncryptionPublicKeyResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneMessageQrdlRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneMessageQrdlResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneWebhookRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneWebhookResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Adds a phone number for a WhatsApp Business account (WABA).
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddChatappPhoneNumberRequest $request AddChatappPhoneNumberRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AddChatappPhoneNumberResponse AddChatappPhoneNumberResponse
     */
    public function addChatappPhoneNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cc)) {
            $body['Cc'] = $request->cc;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->preValidateId)) {
            $body['PreValidateId'] = $request->preValidateId;
        }
        if (!Utils::isUnset($request->verifiedName)) {
            $body['VerifiedName'] = $request->verifiedName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddChatappPhoneNumber',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddChatappPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a phone number for a WhatsApp Business account (WABA).
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param AddChatappPhoneNumberRequest $request AddChatappPhoneNumberRequest
     *
     * @return AddChatappPhoneNumberResponse AddChatappPhoneNumberResponse
     */
    public function addChatappPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addChatappPhoneNumberWithOptions($request, $runtime);
    }

    /**
     * @summary Associates FAQs in the knowledge base.
     *  *
     * @description You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param BeeBotAssociateRequest $tmpReq  BeeBotAssociateRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return BeeBotAssociateResponse BeeBotAssociateResponse
     */
    public function beeBotAssociateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BeeBotAssociateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->perspective)) {
            $request->perspectiveShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->perspective, 'Perspective', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->chatBotInstanceId)) {
            $body['ChatBotInstanceId'] = $request->chatBotInstanceId;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $body['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->perspectiveShrink)) {
            $body['Perspective'] = $request->perspectiveShrink;
        }
        if (!Utils::isUnset($request->recommendNum)) {
            $body['RecommendNum'] = $request->recommendNum;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->utterance)) {
            $body['Utterance'] = $request->utterance;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BeeBotAssociate',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BeeBotAssociateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates FAQs in the knowledge base.
     *  *
     * @description You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param BeeBotAssociateRequest $request BeeBotAssociateRequest
     *
     * @return BeeBotAssociateResponse BeeBotAssociateResponse
     */
    public function beeBotAssociate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->beeBotAssociateWithOptions($request, $runtime);
    }

    /**
     * @summary Conducts sessions with the bot based on its unique identifier (ID).
     *  *
     * @description You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param BeeBotChatRequest $tmpReq  BeeBotChatRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return BeeBotChatResponse BeeBotChatResponse
     */
    public function beeBotChatWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BeeBotChatShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->perspective)) {
            $request->perspectiveShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->perspective, 'Perspective', 'json');
        }
        if (!Utils::isUnset($tmpReq->vendorParam)) {
            $request->vendorParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vendorParam, 'VendorParam', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->chatBotInstanceId)) {
            $body['ChatBotInstanceId'] = $request->chatBotInstanceId;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->intentName)) {
            $body['IntentName'] = $request->intentName;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $body['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->knowledgeId)) {
            $body['KnowledgeId'] = $request->knowledgeId;
        }
        if (!Utils::isUnset($request->perspectiveShrink)) {
            $body['Perspective'] = $request->perspectiveShrink;
        }
        if (!Utils::isUnset($request->senderId)) {
            $body['SenderId'] = $request->senderId;
        }
        if (!Utils::isUnset($request->senderNick)) {
            $body['SenderNick'] = $request->senderNick;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $body['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->utterance)) {
            $body['Utterance'] = $request->utterance;
        }
        if (!Utils::isUnset($request->vendorParamShrink)) {
            $body['VendorParam'] = $request->vendorParamShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BeeBotChat',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BeeBotChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Conducts sessions with the bot based on its unique identifier (ID).
     *  *
     * @description You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param BeeBotChatRequest $request BeeBotChatRequest
     *
     * @return BeeBotChatResponse BeeBotChatResponse
     */
    public function beeBotChat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->beeBotChatWithOptions($request, $runtime);
    }

    /**
     * @summary Binds the WhatsApp Business account with ChatApp.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappBindWabaRequest $request ChatappBindWabaRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ChatappBindWabaResponse ChatappBindWabaResponse
     */
    public function chatappBindWabaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->wabaId)) {
            $body['WabaId'] = $request->wabaId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChatappBindWaba',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChatappBindWabaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Binds the WhatsApp Business account with ChatApp.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappBindWabaRequest $request ChatappBindWabaRequest
     *
     * @return ChatappBindWabaResponse ChatappBindWabaResponse
     */
    public function chatappBindWaba($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappBindWabaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries WhatsApp Business account (WABA) information after embedded signup. You do not need to call this API operation if you use Version 2 of WhatsApp embedded signup.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappEmbedSignUpRequest $request ChatappEmbedSignUpRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ChatappEmbedSignUpResponse ChatappEmbedSignUpResponse
     */
    public function chatappEmbedSignUpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->inputToken)) {
            $body['InputToken'] = $request->inputToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChatappEmbedSignUp',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChatappEmbedSignUpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries WhatsApp Business account (WABA) information after embedded signup. You do not need to call this API operation if you use Version 2 of WhatsApp embedded signup.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappEmbedSignUpRequest $request ChatappEmbedSignUpRequest
     *
     * @return ChatappEmbedSignUpResponse ChatappEmbedSignUpResponse
     */
    public function chatappEmbedSignUp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappEmbedSignUpWithOptions($request, $runtime);
    }

    /**
     * @summary Registers a phone number for migration.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappMigrationRegisterRequest $request ChatappMigrationRegisterRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ChatappMigrationRegisterResponse ChatappMigrationRegisterResponse
     */
    public function chatappMigrationRegisterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChatappMigrationRegister',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChatappMigrationRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Registers a phone number for migration.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappMigrationRegisterRequest $request ChatappMigrationRegisterRequest
     *
     * @return ChatappMigrationRegisterResponse ChatappMigrationRegisterResponse
     */
    public function chatappMigrationRegister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappMigrationRegisterWithOptions($request, $runtime);
    }

    /**
     * @summary Verifies a specified phone number for migration.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappMigrationVerifiedRequest $request ChatappMigrationVerifiedRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ChatappMigrationVerifiedResponse ChatappMigrationVerifiedResponse
     */
    public function chatappMigrationVerifiedWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->verifyCode)) {
            $query['VerifyCode'] = $request->verifyCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChatappMigrationVerified',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChatappMigrationVerifiedResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Verifies a specified phone number for migration.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappMigrationVerifiedRequest $request ChatappMigrationVerifiedRequest
     *
     * @return ChatappMigrationVerifiedResponse ChatappMigrationVerifiedResponse
     */
    public function chatappMigrationVerified($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappMigrationVerifiedWithOptions($request, $runtime);
    }

    /**
     * @summary Deregisters a phone number from a WhatsApp Business account (WABA).
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappPhoneNumberDeregisterRequest $request ChatappPhoneNumberDeregisterRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ChatappPhoneNumberDeregisterResponse ChatappPhoneNumberDeregisterResponse
     */
    public function chatappPhoneNumberDeregisterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChatappPhoneNumberDeregister',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChatappPhoneNumberDeregisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deregisters a phone number from a WhatsApp Business account (WABA).
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappPhoneNumberDeregisterRequest $request ChatappPhoneNumberDeregisterRequest
     *
     * @return ChatappPhoneNumberDeregisterResponse ChatappPhoneNumberDeregisterResponse
     */
    public function chatappPhoneNumberDeregister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappPhoneNumberDeregisterWithOptions($request, $runtime);
    }

    /**
     * @summary Registers a phone number.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappPhoneNumberRegisterRequest $request ChatappPhoneNumberRegisterRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ChatappPhoneNumberRegisterResponse ChatappPhoneNumberRegisterResponse
     */
    public function chatappPhoneNumberRegisterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChatappPhoneNumberRegister',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChatappPhoneNumberRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Registers a phone number.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappPhoneNumberRegisterRequest $request ChatappPhoneNumberRegisterRequest
     *
     * @return ChatappPhoneNumberRegisterResponse ChatappPhoneNumberRegisterResponse
     */
    public function chatappPhoneNumberRegister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappPhoneNumberRegisterWithOptions($request, $runtime);
    }

    /**
     * @summary Synchronizes phone numbers.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappSyncPhoneNumberRequest $request ChatappSyncPhoneNumberRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ChatappSyncPhoneNumberResponse ChatappSyncPhoneNumberResponse
     */
    public function chatappSyncPhoneNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChatappSyncPhoneNumber',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChatappSyncPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Synchronizes phone numbers.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappSyncPhoneNumberRequest $request ChatappSyncPhoneNumberRequest
     *
     * @return ChatappSyncPhoneNumberResponse ChatappSyncPhoneNumberResponse
     */
    public function chatappSyncPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappSyncPhoneNumberWithOptions($request, $runtime);
    }

    /**
     * @summary Associates a phone number with a WhatsApp Business account (WABA).
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappVerifyAndRegisterRequest $request ChatappVerifyAndRegisterRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ChatappVerifyAndRegisterResponse ChatappVerifyAndRegisterResponse
     */
    public function chatappVerifyAndRegisterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->verifyCode)) {
            $body['VerifyCode'] = $request->verifyCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChatappVerifyAndRegister',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChatappVerifyAndRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates a phone number with a WhatsApp Business account (WABA).
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ChatappVerifyAndRegisterRequest $request ChatappVerifyAndRegisterRequest
     *
     * @return ChatappVerifyAndRegisterResponse ChatappVerifyAndRegisterResponse
     */
    public function chatappVerifyAndRegister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatappVerifyAndRegisterWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the number.
     *  *
     * @description The status of the phone number.
     *  *
     * @param CreateChatappMigrationInitiateRequest $request CreateChatappMigrationInitiateRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateChatappMigrationInitiateResponse CreateChatappMigrationInitiateResponse
     */
    public function createChatappMigrationInitiateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->countryCode)) {
            $query['CountryCode'] = $request->countryCode;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->mobileNumber)) {
            $query['MobileNumber'] = $request->mobileNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateChatappMigrationInitiate',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateChatappMigrationInitiateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the number.
     *  *
     * @description The status of the phone number.
     *  *
     * @param CreateChatappMigrationInitiateRequest $request CreateChatappMigrationInitiateRequest
     *
     * @return CreateChatappMigrationInitiateResponse CreateChatappMigrationInitiateResponse
     */
    public function createChatappMigrationInitiate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChatappMigrationInitiateWithOptions($request, $runtime);
    }

    /**
     * @summary The HTTP status code.
     * \\\\*   Example: OK. This parameter indicates that the request is successful.
     * \\\\*   Other values indicate that the request fails. For more information, see \\[Error codes]\\\\(https://www.alibabacloud.com/help/zh/cams/latest/api-error-codes).
     *  *
     * @description The error message.
     *  *
     * @param CreateChatappTemplateRequest $tmpReq  CreateChatappTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateChatappTemplateResponse CreateChatappTemplateResponse
     */
    public function createChatappTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateChatappTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->components)) {
            $request->componentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->components, 'Components', 'json');
        }
        if (!Utils::isUnset($tmpReq->example)) {
            $request->exampleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->example, 'Example', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->allowCategoryChange)) {
            $body['AllowCategoryChange'] = $request->allowCategoryChange;
        }
        if (!Utils::isUnset($request->category)) {
            $body['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->componentsShrink)) {
            $body['Components'] = $request->componentsShrink;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->custWabaId)) {
            $body['CustWabaId'] = $request->custWabaId;
        }
        if (!Utils::isUnset($request->exampleShrink)) {
            $body['Example'] = $request->exampleShrink;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $body['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->messageSendTtlSeconds)) {
            $body['MessageSendTtlSeconds'] = $request->messageSendTtlSeconds;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateType)) {
            $body['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateChatappTemplate',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateChatappTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The HTTP status code.
     * \\\\*   Example: OK. This parameter indicates that the request is successful.
     * \\\\*   Other values indicate that the request fails. For more information, see \\[Error codes]\\\\(https://www.alibabacloud.com/help/zh/cams/latest/api-error-codes).
     *  *
     * @description The error message.
     *  *
     * @param CreateChatappTemplateRequest $request CreateChatappTemplateRequest
     *
     * @return CreateChatappTemplateResponse CreateChatappTemplateResponse
     */
    public function createChatappTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChatappTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Flow.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateFlowRequest $tmpReq  CreateFlowRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFlowResponse CreateFlowResponse
     */
    public function createFlowWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFlowShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->categories)) {
            $request->categoriesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->categories, 'Categories', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->categoriesShrink)) {
            $body['Categories'] = $request->categoriesShrink;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFlow',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Flow.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param CreateFlowRequest $request CreateFlowRequest
     *
     * @return CreateFlowResponse CreateFlowResponse
     */
    public function createFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowWithOptions($request, $runtime);
    }

    /**
     * @summary 创建消息发送二维码
     *  *
     * @param CreatePhoneMessageQrdlRequest $request CreatePhoneMessageQrdlRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePhoneMessageQrdlResponse CreatePhoneMessageQrdlResponse
     */
    public function createPhoneMessageQrdlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->generateQrImage)) {
            $body['GenerateQrImage'] = $request->generateQrImage;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->prefilledMessage)) {
            $body['PrefilledMessage'] = $request->prefilledMessage;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePhoneMessageQrdl',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePhoneMessageQrdlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建消息发送二维码
     *  *
     * @param CreatePhoneMessageQrdlRequest $request CreatePhoneMessageQrdlRequest
     *
     * @return CreatePhoneMessageQrdlResponse CreatePhoneMessageQrdlResponse
     */
    public function createPhoneMessageQrdl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPhoneMessageQrdlWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a message template.
     *  *
     * @description ### QPS limit
     * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteChatappTemplateRequest $request DeleteChatappTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteChatappTemplateResponse DeleteChatappTemplateResponse
     */
    public function deleteChatappTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->custWabaId)) {
            $query['CustWabaId'] = $request->custWabaId;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $query['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteChatappTemplate',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteChatappTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a message template.
     *  *
     * @description ### QPS limit
     * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteChatappTemplateRequest $request DeleteChatappTemplateRequest
     *
     * @return DeleteChatappTemplateResponse DeleteChatappTemplateResponse
     */
    public function deleteChatappTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChatappTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Flow. Only Flows in the DRAFT state can be deleted.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteFlowRequest $request DeleteFlowRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFlowResponse DeleteFlowResponse
     */
    public function deleteFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFlow',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Flow. Only Flows in the DRAFT state can be deleted.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param DeleteFlowRequest $request DeleteFlowRequest
     *
     * @return DeleteFlowResponse DeleteFlowResponse
     */
    public function deleteFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowWithOptions($request, $runtime);
    }

    /**
     * @summary 删除消息发送二维码
     *  *
     * @param DeletePhoneMessageQrdlRequest $request DeletePhoneMessageQrdlRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePhoneMessageQrdlResponse DeletePhoneMessageQrdlResponse
     */
    public function deletePhoneMessageQrdlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->qrdlCode)) {
            $body['QrdlCode'] = $request->qrdlCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeletePhoneMessageQrdl',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePhoneMessageQrdlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除消息发送二维码
     *  *
     * @param DeletePhoneMessageQrdlRequest $request DeletePhoneMessageQrdlRequest
     *
     * @return DeletePhoneMessageQrdlResponse DeletePhoneMessageQrdlResponse
     */
    public function deletePhoneMessageQrdl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePhoneMessageQrdlWithOptions($request, $runtime);
    }

    /**
     * @summary 弃用Flow
     *  *
     * @param DeprecateFlowRequest $request DeprecateFlowRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeprecateFlowResponse DeprecateFlowResponse
     */
    public function deprecateFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeprecateFlow',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeprecateFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 弃用Flow
     *  *
     * @param DeprecateFlowRequest $request DeprecateFlowRequest
     *
     * @return DeprecateFlowResponse DeprecateFlowResponse
     */
    public function deprecateFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deprecateFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the statistics on the metrics that are related to WhatsApp.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param EnableWhatsappROIMetricRequest $request EnableWhatsappROIMetricRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableWhatsappROIMetricResponse EnableWhatsappROIMetricResponse
     */
    public function enableWhatsappROIMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $query['IsvCode'] = $request->isvCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableWhatsappROIMetric',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableWhatsappROIMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables the statistics on the metrics that are related to WhatsApp.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param EnableWhatsappROIMetricRequest $request EnableWhatsappROIMetricRequest
     *
     * @return EnableWhatsappROIMetricResponse EnableWhatsappROIMetricResponse
     */
    public function enableWhatsappROIMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableWhatsappROIMetricWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of messages that are sent by using a phone number by a specific metric.
     *  *
     * @description You can call this operation up to 50 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetChatappPhoneNumberMetricRequest $request GetChatappPhoneNumberMetricRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetChatappPhoneNumberMetricResponse GetChatappPhoneNumberMetricResponse
     */
    public function getChatappPhoneNumberMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $query['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetChatappPhoneNumberMetric',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetChatappPhoneNumberMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of messages that are sent by using a phone number by a specific metric.
     *  *
     * @description You can call this operation up to 50 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetChatappPhoneNumberMetricRequest $request GetChatappPhoneNumberMetricRequest
     *
     * @return GetChatappPhoneNumberMetricResponse GetChatappPhoneNumberMetricResponse
     */
    public function getChatappPhoneNumberMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatappPhoneNumberMetricWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information of a message template.
     *  *
     * @description ### QPS limit
     * You can call this API operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetChatappTemplateDetailRequest $request GetChatappTemplateDetailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetChatappTemplateDetailResponse GetChatappTemplateDetailResponse
     */
    public function getChatappTemplateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->custWabaId)) {
            $query['CustWabaId'] = $request->custWabaId;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $query['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetChatappTemplateDetail',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetChatappTemplateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information of a message template.
     *  *
     * @description ### QPS limit
     * You can call this API operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetChatappTemplateDetailRequest $request GetChatappTemplateDetailRequest
     *
     * @return GetChatappTemplateDetailResponse GetChatappTemplateDetailResponse
     */
    public function getChatappTemplateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatappTemplateDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the metrics about a marketing template.
     *  *
     * @description You can call this operation up to 50 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetChatappTemplateMetricRequest $request GetChatappTemplateMetricRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetChatappTemplateMetricResponse GetChatappTemplateMetricResponse
     */
    public function getChatappTemplateMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->granularity)) {
            $query['Granularity'] = $request->granularity;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $query['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetChatappTemplateMetric',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetChatappTemplateMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the metrics about a marketing template.
     *  *
     * @description You can call this operation up to 50 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetChatappTemplateMetricRequest $request GetChatappTemplateMetricRequest
     *
     * @return GetChatappTemplateMetricResponse GetChatappTemplateMetricResponse
     */
    public function getChatappTemplateMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatappTemplateMetricWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the authentication information that is used to upload a file.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetChatappUploadAuthorizationRequest $request GetChatappUploadAuthorizationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetChatappUploadAuthorizationResponse GetChatappUploadAuthorizationResponse
     */
    public function getChatappUploadAuthorizationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetChatappUploadAuthorization',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetChatappUploadAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the authentication information that is used to upload a file.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetChatappUploadAuthorizationRequest $request GetChatappUploadAuthorizationRequest
     *
     * @return GetChatappUploadAuthorizationResponse GetChatappUploadAuthorizationResponse
     */
    public function getChatappUploadAuthorization($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatappUploadAuthorizationWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains a verification code.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetChatappVerifyCodeRequest $request GetChatappVerifyCodeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetChatappVerifyCodeResponse GetChatappVerifyCodeResponse
     */
    public function getChatappVerifyCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->locale)) {
            $body['Locale'] = $request->locale;
        }
        if (!Utils::isUnset($request->method)) {
            $body['Method'] = $request->method;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetChatappVerifyCode',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetChatappVerifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains a verification code.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetChatappVerifyCodeRequest $request GetChatappVerifyCodeRequest
     *
     * @return GetChatappVerifyCodeResponse GetChatappVerifyCodeResponse
     */
    public function getChatappVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChatappVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the business settings of a phone number.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetCommerceSettingRequest $request GetCommerceSettingRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCommerceSettingResponse GetCommerceSettingResponse
     */
    public function getCommerceSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCommerceSetting',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCommerceSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the business settings of a phone number.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetCommerceSettingRequest $request GetCommerceSettingRequest
     *
     * @return GetCommerceSettingResponse GetCommerceSettingResponse
     */
    public function getCommerceSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommerceSettingWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a Flow.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetFlowRequest $request GetFlowRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFlowResponse GetFlowResponse
     */
    public function getFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFlow',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a Flow.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetFlowRequest $request GetFlowRequest
     *
     * @return GetFlowResponse GetFlowResponse
     */
    public function getFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowWithOptions($request, $runtime);
    }

    /**
     * @summary 获取flow的JSON文件
     *  *
     * @param GetFlowJSONAssestRequest $request GetFlowJSONAssestRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFlowJSONAssestResponse GetFlowJSONAssestResponse
     */
    public function getFlowJSONAssestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFlowJSONAssest',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFlowJSONAssestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取flow的JSON文件
     *  *
     * @param GetFlowJSONAssestRequest $request GetFlowJSONAssestRequest
     *
     * @return GetFlowJSONAssestResponse GetFlowJSONAssestResponse
     */
    public function getFlowJSONAssest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowJSONAssestWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the preview URL of a Flow.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetFlowPreviewUrlRequest $request GetFlowPreviewUrlRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFlowPreviewUrlResponse GetFlowPreviewUrlResponse
     */
    public function getFlowPreviewUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFlowPreviewUrl',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFlowPreviewUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the preview URL of a Flow.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetFlowPreviewUrlRequest $request GetFlowPreviewUrlRequest
     *
     * @return GetFlowPreviewUrlResponse GetFlowPreviewUrlResponse
     */
    public function getFlowPreviewUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFlowPreviewUrlWithOptions($request, $runtime);
    }

    /**
     * @summary The phone number.
     *  *
     * @description The ID of the phone number.
     *  *
     * @param GetMigrationVerifyCodeRequest $request GetMigrationVerifyCodeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMigrationVerifyCodeResponse GetMigrationVerifyCodeResponse
     */
    public function getMigrationVerifyCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->locale)) {
            $query['Locale'] = $request->locale;
        }
        if (!Utils::isUnset($request->method)) {
            $query['Method'] = $request->method;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMigrationVerifyCode',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMigrationVerifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The phone number.
     *  *
     * @description The ID of the phone number.
     *  *
     * @param GetMigrationVerifyCodeRequest $request GetMigrationVerifyCodeRequest
     *
     * @return GetMigrationVerifyCodeResponse GetMigrationVerifyCodeResponse
     */
    public function getMigrationVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMigrationVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 根据Code获取权限
     *  *
     * @param GetPermissionByCodeRequest $tmpReq  GetPermissionByCodeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPermissionByCodeResponse GetPermissionByCodeResponse
     */
    public function getPermissionByCodeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetPermissionByCodeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->permissions)) {
            $request->permissionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->permissions, 'Permissions', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->code)) {
            $body['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->permissionsShrink)) {
            $body['Permissions'] = $request->permissionsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPermissionByCode',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPermissionByCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据Code获取权限
     *  *
     * @param GetPermissionByCodeRequest $request GetPermissionByCodeRequest
     *
     * @return GetPermissionByCodeResponse GetPermissionByCodeResponse
     */
    public function getPermissionByCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPermissionByCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 获取号码的公钥
     *  *
     * @param GetPhoneEncryptionPublicKeyRequest $request GetPhoneEncryptionPublicKeyRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPhoneEncryptionPublicKeyResponse GetPhoneEncryptionPublicKeyResponse
     */
    public function getPhoneEncryptionPublicKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPhoneEncryptionPublicKey',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhoneEncryptionPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取号码的公钥
     *  *
     * @param GetPhoneEncryptionPublicKeyRequest $request GetPhoneEncryptionPublicKeyRequest
     *
     * @return GetPhoneEncryptionPublicKeyResponse GetPhoneEncryptionPublicKeyResponse
     */
    public function getPhoneEncryptionPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhoneEncryptionPublicKeyWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the verification status of a phone number.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetPhoneNumberVerificationStatusRequest $request GetPhoneNumberVerificationStatusRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPhoneNumberVerificationStatusResponse GetPhoneNumberVerificationStatusResponse
     */
    public function getPhoneNumberVerificationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPhoneNumberVerificationStatus',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPhoneNumberVerificationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the verification status of a phone number.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetPhoneNumberVerificationStatusRequest $request GetPhoneNumberVerificationStatusRequest
     *
     * @return GetPhoneNumberVerificationStatusResponse GetPhoneNumberVerificationStatusResponse
     */
    public function getPhoneNumberVerificationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPhoneNumberVerificationStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the ID of a pre-registered phone number used for embedded signup without the need to re-obtain a verification code.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetPreValidatePhoneIdRequest $request GetPreValidatePhoneIdRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPreValidatePhoneIdResponse GetPreValidatePhoneIdResponse
     */
    public function getPreValidatePhoneIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->verifyCode)) {
            $body['VerifyCode'] = $request->verifyCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPreValidatePhoneId',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPreValidatePhoneIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the ID of a pre-registered phone number used for embedded signup without the need to re-obtain a verification code.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetPreValidatePhoneIdRequest $request GetPreValidatePhoneIdRequest
     *
     * @return GetPreValidatePhoneIdResponse GetPreValidatePhoneIdResponse
     */
    public function getPreValidatePhoneId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPreValidatePhoneIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the product catalogs that are associated with a WhatsApp Business account (WABA).
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetWhatsappConnectionCatalogRequest $request GetWhatsappConnectionCatalogRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWhatsappConnectionCatalogResponse GetWhatsappConnectionCatalogResponse
     */
    public function getWhatsappConnectionCatalogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->wabaId)) {
            $query['WabaId'] = $request->wabaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWhatsappConnectionCatalog',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWhatsappConnectionCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the product catalogs that are associated with a WhatsApp Business account (WABA).
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param GetWhatsappConnectionCatalogRequest $request GetWhatsappConnectionCatalogRequest
     *
     * @return GetWhatsappConnectionCatalogResponse GetWhatsappConnectionCatalogResponse
     */
    public function getWhatsappConnectionCatalog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWhatsappConnectionCatalogWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the application ID under the ISV account.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param IsvGetAppIdRequest $request IsvGetAppIdRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return IsvGetAppIdResponse IsvGetAppIdResponse
     */
    public function isvGetAppIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->permissions)) {
            $body['Permissions'] = $request->permissions;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'IsvGetAppId',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IsvGetAppIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the application ID under the ISV account.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param IsvGetAppIdRequest $request IsvGetAppIdRequest
     *
     * @return IsvGetAppIdResponse IsvGetAppIdResponse
     */
    public function isvGetAppId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->isvGetAppIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries message templates.
     *  *
     * @description ### QPS limit
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListChatappTemplateRequest $tmpReq  ListChatappTemplateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListChatappTemplateResponse ListChatappTemplateResponse
     */
    public function listChatappTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListChatappTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->page)) {
            $request->pageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->page, 'Page', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->code)) {
            $query['Code'] = $request->code;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->custWabaId)) {
            $query['CustWabaId'] = $request->custWabaId;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $query['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageShrink)) {
            $query['Page'] = $request->pageShrink;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListChatappTemplate',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListChatappTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries message templates.
     *  *
     * @description ### QPS limit
     * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListChatappTemplateRequest $request ListChatappTemplateRequest
     *
     * @return ListChatappTemplateResponse ListChatappTemplateResponse
     */
    public function listChatappTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChatappTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of Flows.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListFlowRequest $tmpReq  ListFlowRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFlowResponse ListFlowResponse
     */
    public function listFlowWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListFlowShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->page)) {
            $request->pageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->page, 'Page', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->pageShrink)) {
            $body['Page'] = $request->pageShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFlow',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of Flows.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListFlowRequest $request ListFlowRequest
     *
     * @return ListFlowResponse ListFlowResponse
     */
    public function listFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowWithOptions($request, $runtime);
    }

    /**
     * @summary 查询消息发送二维码
     *  *
     * @param ListPhoneMessageQrdlRequest $request ListPhoneMessageQrdlRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPhoneMessageQrdlResponse ListPhoneMessageQrdlResponse
     */
    public function listPhoneMessageQrdlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListPhoneMessageQrdl',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPhoneMessageQrdlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询消息发送二维码
     *  *
     * @param ListPhoneMessageQrdlRequest $request ListPhoneMessageQrdlRequest
     *
     * @return ListPhoneMessageQrdlResponse ListPhoneMessageQrdlResponse
     */
    public function listPhoneMessageQrdl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPhoneMessageQrdlWithOptions($request, $runtime);
    }

    /**
     * @summary Queries products in a product catalog.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListProductRequest $request ListProductRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProductResponse ListProductResponse
     */
    public function listProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->after)) {
            $query['After'] = $request->after;
        }
        if (!Utils::isUnset($request->before)) {
            $query['Before'] = $request->before;
        }
        if (!Utils::isUnset($request->catalogId)) {
            $query['CatalogId'] = $request->catalogId;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->fields)) {
            $query['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->wabaId)) {
            $query['WabaId'] = $request->wabaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProduct',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries products in a product catalog.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListProductRequest $request ListProductRequest
     *
     * @return ListProductResponse ListProductResponse
     */
    public function listProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the product catalogs on the Business Manager platform of Meta.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListProductCatalogRequest $request ListProductCatalogRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProductCatalogResponse ListProductCatalogResponse
     */
    public function listProductCatalogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->after)) {
            $query['After'] = $request->after;
        }
        if (!Utils::isUnset($request->before)) {
            $query['Before'] = $request->before;
        }
        if (!Utils::isUnset($request->businessId)) {
            $query['BusinessId'] = $request->businessId;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->fields)) {
            $query['Fields'] = $request->fields;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductCatalog',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProductCatalogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the product catalogs on the Business Manager platform of Meta.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ListProductCatalogRequest $request ListProductCatalogRequest
     *
     * @return ListProductCatalogResponse ListProductCatalogResponse
     */
    public function listProductCatalog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductCatalogWithOptions($request, $runtime);
    }

    /**
     * @summary The code of the message template.
     *  *
     * @description The name of the message template.
     *  *
     * @param ModifyChatappTemplateRequest $tmpReq  ModifyChatappTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyChatappTemplateResponse ModifyChatappTemplateResponse
     */
    public function modifyChatappTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyChatappTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->components)) {
            $request->componentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->components, 'Components', 'json');
        }
        if (!Utils::isUnset($tmpReq->example)) {
            $request->exampleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->example, 'Example', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->componentsShrink)) {
            $body['Components'] = $request->componentsShrink;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->custWabaId)) {
            $body['CustWabaId'] = $request->custWabaId;
        }
        if (!Utils::isUnset($request->exampleShrink)) {
            $body['Example'] = $request->exampleShrink;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $body['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->messageSendTtlSeconds)) {
            $body['MessageSendTtlSeconds'] = $request->messageSendTtlSeconds;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $body['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $body['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyChatappTemplate',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyChatappTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The code of the message template.
     *  *
     * @description The name of the message template.
     *  *
     * @param ModifyChatappTemplateRequest $request ModifyChatappTemplateRequest
     *
     * @return ModifyChatappTemplateResponse ModifyChatappTemplateResponse
     */
    public function modifyChatappTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyChatappTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the basic information about a Flow.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyFlowRequest $tmpReq  ModifyFlowRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFlowResponse ModifyFlowResponse
     */
    public function modifyFlowWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyFlowShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->categories)) {
            $request->categoriesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->categories, 'Categories', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->categoriesShrink)) {
            $body['Categories'] = $request->categoriesShrink;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->flowName)) {
            $body['FlowName'] = $request->flowName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyFlow',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the basic information about a Flow.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param ModifyFlowRequest $request ModifyFlowRequest
     *
     * @return ModifyFlowResponse ModifyFlowResponse
     */
    public function modifyFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowWithOptions($request, $runtime);
    }

    /**
     * @summary The ID of the request.
     *  *
     * @description ModifyPhoneBusinessProfile
     *  *
     * @param ModifyPhoneBusinessProfileRequest $tmpReq  ModifyPhoneBusinessProfileRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPhoneBusinessProfileResponse ModifyPhoneBusinessProfileResponse
     */
    public function modifyPhoneBusinessProfileWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyPhoneBusinessProfileShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->websites)) {
            $request->websitesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->websites, 'Websites', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->about)) {
            $query['About'] = $request->about;
        }
        if (!Utils::isUnset($request->address)) {
            $query['Address'] = $request->address;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->profilePictureUrl)) {
            $query['ProfilePictureUrl'] = $request->profilePictureUrl;
        }
        if (!Utils::isUnset($request->vertical)) {
            $query['Vertical'] = $request->vertical;
        }
        if (!Utils::isUnset($request->websitesShrink)) {
            $query['Websites'] = $request->websitesShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPhoneBusinessProfile',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPhoneBusinessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The ID of the request.
     *  *
     * @description ModifyPhoneBusinessProfile
     *  *
     * @param ModifyPhoneBusinessProfileRequest $request ModifyPhoneBusinessProfileRequest
     *
     * @return ModifyPhoneBusinessProfileResponse ModifyPhoneBusinessProfileResponse
     */
    public function modifyPhoneBusinessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPhoneBusinessProfileWithOptions($request, $runtime);
    }

    /**
     * @summary Publishes a Flow.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PublishFlowRequest $request PublishFlowRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return PublishFlowResponse PublishFlowResponse
     */
    public function publishFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PublishFlow',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PublishFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Publishes a Flow.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param PublishFlowRequest $request PublishFlowRequest
     *
     * @return PublishFlowResponse PublishFlowResponse
     */
    public function publishFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Query the WhatsApp Business account you associate with ChatApp.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryChatappBindWabaRequest $request QueryChatappBindWabaRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryChatappBindWabaResponse QueryChatappBindWabaResponse
     */
    public function queryChatappBindWabaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $query['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryChatappBindWaba',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryChatappBindWabaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query the WhatsApp Business account you associate with ChatApp.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryChatappBindWabaRequest $request QueryChatappBindWabaRequest
     *
     * @return QueryChatappBindWabaResponse QueryChatappBindWabaResponse
     */
    public function queryChatappBindWaba($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryChatappBindWabaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries phone numbers that receive messages and statuses of these numbers under a specified user.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryChatappPhoneNumbersRequest $request QueryChatappPhoneNumbersRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryChatappPhoneNumbersResponse QueryChatappPhoneNumbersResponse
     */
    public function queryChatappPhoneNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $query['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryChatappPhoneNumbers',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryChatappPhoneNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries phone numbers that receive messages and statuses of these numbers under a specified user.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryChatappPhoneNumbersRequest $request QueryChatappPhoneNumbersRequest
     *
     * @return QueryChatappPhoneNumbersResponse QueryChatappPhoneNumbersResponse
     */
    public function queryChatappPhoneNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryChatappPhoneNumbersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the business information of the account to which a specified phone number is bound.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryPhoneBusinessProfileRequest $request QueryPhoneBusinessProfileRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryPhoneBusinessProfileResponse QueryPhoneBusinessProfileResponse
     */
    public function queryPhoneBusinessProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPhoneBusinessProfile',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPhoneBusinessProfileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the business information of the account to which a specified phone number is bound.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryPhoneBusinessProfileRequest $request QueryPhoneBusinessProfileRequest
     *
     * @return QueryPhoneBusinessProfileResponse QueryPhoneBusinessProfileResponse
     */
    public function queryPhoneBusinessProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPhoneBusinessProfileWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the business information about the WhatsApp Business account (WABA).
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryWabaBusinessInfoRequest $request QueryWabaBusinessInfoRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryWabaBusinessInfoResponse QueryWabaBusinessInfoResponse
     */
    public function queryWabaBusinessInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->wabaId)) {
            $query['WabaId'] = $request->wabaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryWabaBusinessInfo',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryWabaBusinessInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the business information about the WhatsApp Business account (WABA).
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param QueryWabaBusinessInfoRequest $request QueryWabaBusinessInfoRequest
     *
     * @return QueryWabaBusinessInfoResponse QueryWabaBusinessInfoResponse
     */
    public function queryWabaBusinessInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryWabaBusinessInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Sends a message to multiple phone numbers by using ChatAPP at a time.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * You can send messages to up to 1,000 phone numbers in a single request.
     *  *
     * @param SendChatappMassMessageRequest $tmpReq  SendChatappMassMessageRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SendChatappMassMessageResponse SendChatappMassMessageResponse
     */
    public function sendChatappMassMessageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendChatappMassMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->senderList)) {
            $request->senderListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->senderList, 'SenderList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->channelType)) {
            $body['ChannelType'] = $request->channelType;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->custWabaId)) {
            $body['CustWabaId'] = $request->custWabaId;
        }
        if (!Utils::isUnset($request->fallBackContent)) {
            $body['FallBackContent'] = $request->fallBackContent;
        }
        if (!Utils::isUnset($request->fallBackDuration)) {
            $body['FallBackDuration'] = $request->fallBackDuration;
        }
        if (!Utils::isUnset($request->fallBackId)) {
            $body['FallBackId'] = $request->fallBackId;
        }
        if (!Utils::isUnset($request->fallBackRule)) {
            $body['FallBackRule'] = $request->fallBackRule;
        }
        if (!Utils::isUnset($request->from)) {
            $body['From'] = $request->from;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $body['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->senderListShrink)) {
            $body['SenderList'] = $request->senderListShrink;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $body['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['Ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendChatappMassMessage',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendChatappMassMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sends a message to multiple phone numbers by using ChatAPP at a time.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     * You can send messages to up to 1,000 phone numbers in a single request.
     *  *
     * @param SendChatappMassMessageRequest $request SendChatappMassMessageRequest
     *
     * @return SendChatappMassMessageResponse SendChatappMassMessageResponse
     */
    public function sendChatappMassMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendChatappMassMessageWithOptions($request, $runtime);
    }

    /**
     * @summary Sends messages by using ChatAPP.
     *  *
     * @description You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param SendChatappMessageRequest $tmpReq  SendChatappMessageRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SendChatappMessageResponse SendChatappMessageResponse
     */
    public function sendChatappMessageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendChatappMessageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->flowAction)) {
            $request->flowActionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->flowAction, 'FlowAction', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->productAction)) {
            $request->productActionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->productAction, 'ProductAction', 'json');
        }
        if (!Utils::isUnset($tmpReq->templateParams)) {
            $request->templateParamsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateParams, 'TemplateParams', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->channelType)) {
            $body['ChannelType'] = $request->channelType;
        }
        if (!Utils::isUnset($request->contextMessageId)) {
            $body['ContextMessageId'] = $request->contextMessageId;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->custWabaId)) {
            $body['CustWabaId'] = $request->custWabaId;
        }
        if (!Utils::isUnset($request->fallBackContent)) {
            $body['FallBackContent'] = $request->fallBackContent;
        }
        if (!Utils::isUnset($request->fallBackDuration)) {
            $body['FallBackDuration'] = $request->fallBackDuration;
        }
        if (!Utils::isUnset($request->fallBackId)) {
            $body['FallBackId'] = $request->fallBackId;
        }
        if (!Utils::isUnset($request->fallBackRule)) {
            $body['FallBackRule'] = $request->fallBackRule;
        }
        if (!Utils::isUnset($request->flowActionShrink)) {
            $body['FlowAction'] = $request->flowActionShrink;
        }
        if (!Utils::isUnset($request->from)) {
            $body['From'] = $request->from;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $body['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->messageType)) {
            $body['MessageType'] = $request->messageType;
        }
        if (!Utils::isUnset($request->productActionShrink)) {
            $body['ProductAction'] = $request->productActionShrink;
        }
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $body['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateParamsShrink)) {
            $body['TemplateParams'] = $request->templateParamsShrink;
        }
        if (!Utils::isUnset($request->to)) {
            $body['To'] = $request->to;
        }
        if (!Utils::isUnset($request->trackingData)) {
            $body['TrackingData'] = $request->trackingData;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['Ttl'] = $request->ttl;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendChatappMessage',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendChatappMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sends messages by using ChatAPP.
     *  *
     * @description You can call this operation up to 200 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param SendChatappMessageRequest $request SendChatappMessageRequest
     *
     * @return SendChatappMessageResponse SendChatappMessageResponse
     */
    public function sendChatappMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendChatappMessageWithOptions($request, $runtime);
    }

    /**
     * @summary Submits the agreement information for independent software vendor (ISV) customers.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param SubmitIsvCustomerTermsRequest $request SubmitIsvCustomerTermsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitIsvCustomerTermsResponse SubmitIsvCustomerTermsResponse
     */
    public function submitIsvCustomerTermsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessDesc)) {
            $query['BusinessDesc'] = $request->businessDesc;
        }
        if (!Utils::isUnset($request->contactMail)) {
            $query['ContactMail'] = $request->contactMail;
        }
        if (!Utils::isUnset($request->countryId)) {
            $query['CountryId'] = $request->countryId;
        }
        if (!Utils::isUnset($request->custName)) {
            $query['CustName'] = $request->custName;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->isvTerms)) {
            $query['IsvTerms'] = $request->isvTerms;
        }
        if (!Utils::isUnset($request->officeAddress)) {
            $query['OfficeAddress'] = $request->officeAddress;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitIsvCustomerTerms',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitIsvCustomerTermsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits the agreement information for independent software vendor (ISV) customers.
     *  *
     * @description You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param SubmitIsvCustomerTermsRequest $request SubmitIsvCustomerTermsRequest
     *
     * @return SubmitIsvCustomerTermsResponse SubmitIsvCustomerTermsResponse
     */
    public function submitIsvCustomerTerms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIsvCustomerTermsWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the callback URL of an account.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param UpdateAccountWebhookRequest $request UpdateAccountWebhookRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAccountWebhookResponse UpdateAccountWebhookResponse
     */
    public function updateAccountWebhookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->httpFlag)) {
            $query['HttpFlag'] = $request->httpFlag;
        }
        if (!Utils::isUnset($request->queueFlag)) {
            $query['QueueFlag'] = $request->queueFlag;
        }
        if (!Utils::isUnset($request->statusCallbackUrl)) {
            $query['StatusCallbackUrl'] = $request->statusCallbackUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAccountWebhook',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAccountWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the callback URL of an account.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param UpdateAccountWebhookRequest $request UpdateAccountWebhookRequest
     *
     * @return UpdateAccountWebhookResponse UpdateAccountWebhookResponse
     */
    public function updateAccountWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccountWebhookWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the business settings of a phone number.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param UpdateCommerceSettingRequest $request UpdateCommerceSettingRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCommerceSettingResponse UpdateCommerceSettingResponse
     */
    public function updateCommerceSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cartEnable)) {
            $query['CartEnable'] = $request->cartEnable;
        }
        if (!Utils::isUnset($request->catalogVisible)) {
            $query['CatalogVisible'] = $request->catalogVisible;
        }
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCommerceSetting',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCommerceSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the business settings of a phone number.
     *  *
     * @description You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *  *
     * @param UpdateCommerceSettingRequest $request UpdateCommerceSettingRequest
     *
     * @return UpdateCommerceSettingResponse UpdateCommerceSettingResponse
     */
    public function updateCommerceSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCommerceSettingWithOptions($request, $runtime);
    }

    /**
     * @summary 更新flow的表单内容
     *  *
     * @param UpdateFlowJSONAssetRequest $request UpdateFlowJSONAssetRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFlowJSONAssetResponse UpdateFlowJSONAssetResponse
     */
    public function updateFlowJSONAssetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->filePath)) {
            $body['FilePath'] = $request->filePath;
        }
        if (!Utils::isUnset($request->flowId)) {
            $body['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFlowJSONAsset',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFlowJSONAssetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新flow的表单内容
     *  *
     * @param UpdateFlowJSONAssetRequest $request UpdateFlowJSONAssetRequest
     *
     * @return UpdateFlowJSONAssetResponse UpdateFlowJSONAssetResponse
     */
    public function updateFlowJSONAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlowJSONAssetWithOptions($request, $runtime);
    }

    /**
     * @summary 更新号码的公钥
     *  *
     * @param UpdatePhoneEncryptionPublicKeyRequest $request UpdatePhoneEncryptionPublicKeyRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePhoneEncryptionPublicKeyResponse UpdatePhoneEncryptionPublicKeyResponse
     */
    public function updatePhoneEncryptionPublicKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->encryptionPublicKey)) {
            $body['EncryptionPublicKey'] = $request->encryptionPublicKey;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePhoneEncryptionPublicKey',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePhoneEncryptionPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新号码的公钥
     *  *
     * @param UpdatePhoneEncryptionPublicKeyRequest $request UpdatePhoneEncryptionPublicKeyRequest
     *
     * @return UpdatePhoneEncryptionPublicKeyResponse UpdatePhoneEncryptionPublicKeyResponse
     */
    public function updatePhoneEncryptionPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePhoneEncryptionPublicKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 修改消息发送二维码
     *  *
     * @param UpdatePhoneMessageQrdlRequest $request UpdatePhoneMessageQrdlRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePhoneMessageQrdlResponse UpdatePhoneMessageQrdlResponse
     */
    public function updatePhoneMessageQrdlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $body['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->generateQrImage)) {
            $body['GenerateQrImage'] = $request->generateQrImage;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $body['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->prefilledMessage)) {
            $body['PrefilledMessage'] = $request->prefilledMessage;
        }
        if (!Utils::isUnset($request->qrdlCode)) {
            $body['QrdlCode'] = $request->qrdlCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePhoneMessageQrdl',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePhoneMessageQrdlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改消息发送二维码
     *  *
     * @param UpdatePhoneMessageQrdlRequest $request UpdatePhoneMessageQrdlRequest
     *
     * @return UpdatePhoneMessageQrdlResponse UpdatePhoneMessageQrdlResponse
     */
    public function updatePhoneMessageQrdl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePhoneMessageQrdlWithOptions($request, $runtime);
    }

    /**
     * @summary The HTTP status code returned.
     * *   A value of OK indicates that the call is successful.
     * *   Other values indicate that the call fails. For more information, see [Error codes](https://help.aliyun.com/document_detail/196974.html).
     *  *
     * @description The error message returned.
     *  *
     * @param UpdatePhoneWebhookRequest $request UpdatePhoneWebhookRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePhoneWebhookResponse UpdatePhoneWebhookResponse
     */
    public function updatePhoneWebhookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        if (!Utils::isUnset($request->httpFlag)) {
            $query['HttpFlag'] = $request->httpFlag;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->queueFlag)) {
            $query['QueueFlag'] = $request->queueFlag;
        }
        if (!Utils::isUnset($request->statusCallbackUrl)) {
            $query['StatusCallbackUrl'] = $request->statusCallbackUrl;
        }
        if (!Utils::isUnset($request->upCallbackUrl)) {
            $query['UpCallbackUrl'] = $request->upCallbackUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePhoneWebhook',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePhoneWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary The HTTP status code returned.
     * *   A value of OK indicates that the call is successful.
     * *   Other values indicate that the call fails. For more information, see [Error codes](https://help.aliyun.com/document_detail/196974.html).
     *  *
     * @description The error message returned.
     *  *
     * @param UpdatePhoneWebhookRequest $request UpdatePhoneWebhookRequest
     *
     * @return UpdatePhoneWebhookResponse UpdatePhoneWebhookResponse
     */
    public function updatePhoneWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePhoneWebhookWithOptions($request, $runtime);
    }
}
