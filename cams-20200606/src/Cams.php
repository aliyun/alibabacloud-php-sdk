<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageShrinkRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageShrinkRequest;
use AlibabaCloud\Tea\Tea;
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
     * @param CreateChatappTemplateRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateChatappTemplateResponse
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
     * @param DeleteChatappTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteChatappTemplateResponse
     */
    public function deleteChatappTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param GetChatappTemplateDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetChatappTemplateDetailResponse
     */
    public function getChatappTemplateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
     * @param ListChatappTemplateRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return ListChatappTemplateResponse
     */
    public function listChatappTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListChatappTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->page)) {
            $request->pageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->page), 'Page', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
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
     * @param SendChatappMassMessageRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SendChatappMassMessageResponse
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
     * @param SendChatappMessageRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SendChatappMessageResponse
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
        if (!Utils::isUnset($request->messageType)) {
            $body['MessageType'] = $request->messageType;
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
     * @param SendChatappMessageRequest $request
     *
     * @return SendChatappMessageResponse
     */
    public function sendChatappMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendChatappMessageWithOptions($request, $runtime);
    }
}
