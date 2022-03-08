<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cams\V20200606\Models\CheckContactsRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\CheckContactsResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeleteChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\DeleteChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateResponse;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendMessageRequest;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendMessageResponse;
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
     * @param CheckContactsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckContactsResponse
     */
    public function checkContactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $body = [];
        if (!Utils::isUnset($request->channelType)) {
            $body['ChannelType'] = $request->channelType;
        }
        if (!Utils::isUnset($request->contacts)) {
            $body['Contacts'] = $request->contacts;
        }
        if (!Utils::isUnset($request->from)) {
            $body['From'] = $request->from;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckContacts',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckContactsRequest $request
     *
     * @return CheckContactsResponse
     */
    public function checkContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkContactsWithOptions($request, $runtime);
    }

    /**
     * @param CreateChatappTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateChatappTemplateResponse
     */
    public function createChatappTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->components)) {
            $query['Components'] = $request->components;
        }
        if (!Utils::isUnset($request->example)) {
            $query['Example'] = $request->example;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
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
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
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
     * @param ListChatappTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListChatappTemplateResponse
     */
    public function listChatappTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
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
     * @param SendMessageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SendMessageResponse
     */
    public function sendMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $body = [];
        if (!Utils::isUnset($request->caption)) {
            $body['Caption'] = $request->caption;
        }
        if (!Utils::isUnset($request->channelType)) {
            $body['ChannelType'] = $request->channelType;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->from)) {
            $body['From'] = $request->from;
        }
        if (!Utils::isUnset($request->link)) {
            $body['Link'] = $request->link;
        }
        if (!Utils::isUnset($request->messageType)) {
            $body['MessageType'] = $request->messageType;
        }
        if (!Utils::isUnset($request->templateBodyParams)) {
            $body['TemplateBodyParams'] = $request->templateBodyParams;
        }
        if (!Utils::isUnset($request->templateButtonParams)) {
            $body['TemplateButtonParams'] = $request->templateButtonParams;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $body['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateHeaderParams)) {
            $body['TemplateHeaderParams'] = $request->templateHeaderParams;
        }
        if (!Utils::isUnset($request->text)) {
            $body['Text'] = $request->text;
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
            'action'      => 'SendMessage',
            'version'     => '2020-06-06',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendMessageRequest $request
     *
     * @return SendMessageResponse
     */
    public function sendMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageWithOptions($request, $runtime);
    }
}
