<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Cams\V20200606\Models\DeleteChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeleteChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappUploadAuthorizationRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappUploadAuthorizationResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappVerifyCodeRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappVerifyCodeResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetMigrationVerifyCodeRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetMigrationVerifyCodeResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetPhoneNumberVerificationStatusRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetPhoneNumberVerificationStatusResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\IsvGetAppIdRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\IsvGetAppIdResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyPhoneBusinessProfileRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyPhoneBusinessProfileResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyPhoneBusinessProfileShrinkRequest;
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
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 100 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * ### QPS limit
     *   * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * ### QPS limit
     *   * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * ### QPS limit
     *   * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
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
     * ### QPS limit
     *   * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * ### QPS limit
     *   * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * ### QPS limit
     *   * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
     * @param IsvGetAppIdRequest $request IsvGetAppIdRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return IsvGetAppIdResponse IsvGetAppIdResponse
     */
    public function isvGetAppIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * ### QPS limit
     *   * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * ### QPS limit
     *   * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * ### QPS limit
     *   * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
        if (!Utils::isUnset($request->templateCode)) {
            $body['TemplateCode'] = $request->templateCode;
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
     * ### QPS limit
     *   * You can call this operation up to five times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   * You can send messages to up to 1,000 phone numbers in a single request.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   * You can send messages to up to 1,000 phone numbers in a single request.
     *   *
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
     * You can call this operation up to 200 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
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
        if (!Utils::isUnset($request->tag)) {
            $body['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $body['TemplateCode'] = $request->templateCode;
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
     * You can call this operation up to 200 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to five times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
     * You can call this operation up to 10 times per second per account. If the number of calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
     *   *
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
