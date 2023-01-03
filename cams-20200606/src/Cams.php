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
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeleteChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeleteChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappBindWabaRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappBindWabaResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappPhoneNumbersRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappPhoneNumbersResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageShrinkRequest;
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
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * You can call this operation up to 100 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * ### QPS limit
     *   * You can call this operation up to 5 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
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
        $query = [];
        if (!Utils::isUnset($request->custSpaceId)) {
            $query['CustSpaceId'] = $request->custSpaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->category)) {
            $body['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->componentsShrink)) {
            $body['Components'] = $request->componentsShrink;
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
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
     *   * You can call this operation up to 5 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
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
     *   * You can call this operation up to 5 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
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
     *   * You can call this operation up to 5 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
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
     *   * You can call this operation up to 5 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
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
     *   * You can call this operation up to 5 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
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
     * ### QPS limit
     *   * You can call this operation up to 5 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
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
     *   * You can call this operation up to 5 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
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
     * @param ModifyChatappTemplateRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyChatappTemplateResponse
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
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * You can call this operation up to 10 times per second per account. If the number of the calls per second exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation.
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
     * You can call this operation up to 10 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *   * Can support up to 1,000 numbers per request.
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
        if (!Utils::isUnset($request->fallBackId)) {
            $body['FallBackId'] = $request->fallBackId;
        }
        if (!Utils::isUnset($request->from)) {
            $body['From'] = $request->from;
        }
        if (!Utils::isUnset($request->isvCode)) {
            $body['IsvCode'] = $request->isvCode;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->senderListShrink)) {
            $body['SenderList'] = $request->senderListShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $body['TemplateCode'] = $request->templateCode;
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
     * You can call this operation up to 10 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *   * Can support up to 1,000 numbers per request.
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
     * You can call this operation up to 200 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
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
     * You can call this operation up to 200 times per second per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
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
}
