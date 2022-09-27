<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\CreateContactRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\CreateContactResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\CreateSubscriptionItemRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\CreateSubscriptionItemResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\CreateWebhookRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\CreateWebhookResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\DeleteContactRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\DeleteContactResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\DeleteWebhookRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\DeleteWebhookResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetContactRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetContactResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetSubscriptionItemDetailRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetSubscriptionItemDetailResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetSubscriptionItemRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetSubscriptionItemResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetWebhookRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetWebhookResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListContactsRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListContactsResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListSubscriptionItemGroupDetailsRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListSubscriptionItemGroupDetailsResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListSubscriptionItemsRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListSubscriptionItemsResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListWebhooksRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListWebhooksResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\SendVerificationMessageRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\SendVerificationMessageResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\UpdateContactRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\UpdateContactResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\UpdateSubscriptionItemRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\UpdateSubscriptionItemResponse;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\UpdateSubscriptionItemShrinkRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\UpdateWebhookRequest;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\UpdateWebhookResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class MscOpenSubscription extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('mscopensubscription', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateContactRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateContactResponse
     */
    public function createContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->locale)) {
            $query['Locale'] = $request->locale;
        }
        $body = [];
        if (!Utils::isUnset($request->contactName)) {
            $body['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->email)) {
            $body['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->mobile)) {
            $body['Mobile'] = $request->mobile;
        }
        if (!Utils::isUnset($request->position)) {
            $body['Position'] = $request->position;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateContact',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateContactRequest $request
     *
     * @return CreateContactResponse
     */
    public function createContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createContactWithOptions($request, $runtime);
    }

    /**
     * @param CreateSubscriptionItemRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSubscriptionItemResponse
     */
    public function createSubscriptionItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->locale)) {
            $query['Locale'] = $request->locale;
        }
        $body = [];
        if (!Utils::isUnset($request->itemName)) {
            $body['ItemName'] = $request->itemName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSubscriptionItem',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSubscriptionItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSubscriptionItemRequest $request
     *
     * @return CreateSubscriptionItemResponse
     */
    public function createSubscriptionItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubscriptionItemWithOptions($request, $runtime);
    }

    /**
     * @param CreateWebhookRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateWebhookResponse
     */
    public function createWebhookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->locale)) {
            $query['Locale'] = $request->locale;
        }
        $body = [];
        if (!Utils::isUnset($request->serverUrl)) {
            $body['ServerUrl'] = $request->serverUrl;
        }
        if (!Utils::isUnset($request->webhookName)) {
            $body['WebhookName'] = $request->webhookName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWebhook',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWebhookRequest $request
     *
     * @return CreateWebhookResponse
     */
    public function createWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWebhookWithOptions($request, $runtime);
    }

    /**
     * @param DeleteContactRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteContactResponse
     */
    public function deleteContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->locale)) {
            $query['Locale'] = $request->locale;
        }
        $body = [];
        if (!Utils::isUnset($request->contactId)) {
            $body['ContactId'] = $request->contactId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteContact',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteContactRequest $request
     *
     * @return DeleteContactResponse
     */
    public function deleteContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteContactWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWebhookRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteWebhookResponse
     */
    public function deleteWebhookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->locale)) {
            $query['Locale'] = $request->locale;
        }
        $body = [];
        if (!Utils::isUnset($request->webhookId)) {
            $body['WebhookId'] = $request->webhookId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWebhook',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWebhookRequest $request
     *
     * @return DeleteWebhookResponse
     */
    public function deleteWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebhookWithOptions($request, $runtime);
    }

    /**
     * @param GetContactRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetContactResponse
     */
    public function getContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetContact',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetContactRequest $request
     *
     * @return GetContactResponse
     */
    public function getContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContactWithOptions($request, $runtime);
    }

    /**
     * @param GetSubscriptionItemRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSubscriptionItemResponse
     */
    public function getSubscriptionItemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSubscriptionItem',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSubscriptionItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSubscriptionItemRequest $request
     *
     * @return GetSubscriptionItemResponse
     */
    public function getSubscriptionItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubscriptionItemWithOptions($request, $runtime);
    }

    /**
     * @param GetSubscriptionItemDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSubscriptionItemDetailResponse
     */
    public function getSubscriptionItemDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSubscriptionItemDetail',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSubscriptionItemDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSubscriptionItemDetailRequest $request
     *
     * @return GetSubscriptionItemDetailResponse
     */
    public function getSubscriptionItemDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubscriptionItemDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetWebhookRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetWebhookResponse
     */
    public function getWebhookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWebhook',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWebhookRequest $request
     *
     * @return GetWebhookResponse
     */
    public function getWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWebhookWithOptions($request, $runtime);
    }

    /**
     * @param ListContactsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListContactsResponse
     */
    public function listContactsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListContacts',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListContactsRequest $request
     *
     * @return ListContactsResponse
     */
    public function listContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContactsWithOptions($request, $runtime);
    }

    /**
     * @param ListSubscriptionItemGroupDetailsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListSubscriptionItemGroupDetailsResponse
     */
    public function listSubscriptionItemGroupDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSubscriptionItemGroupDetails',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSubscriptionItemGroupDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSubscriptionItemGroupDetailsRequest $request
     *
     * @return ListSubscriptionItemGroupDetailsResponse
     */
    public function listSubscriptionItemGroupDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubscriptionItemGroupDetailsWithOptions($request, $runtime);
    }

    /**
     * @param ListSubscriptionItemsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListSubscriptionItemsResponse
     */
    public function listSubscriptionItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSubscriptionItems',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSubscriptionItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSubscriptionItemsRequest $request
     *
     * @return ListSubscriptionItemsResponse
     */
    public function listSubscriptionItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubscriptionItemsWithOptions($request, $runtime);
    }

    /**
     * @param ListWebhooksRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListWebhooksResponse
     */
    public function listWebhooksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListWebhooks',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWebhooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListWebhooksRequest $request
     *
     * @return ListWebhooksResponse
     */
    public function listWebhooks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWebhooksWithOptions($request, $runtime);
    }

    /**
     * @param SendVerificationMessageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SendVerificationMessageResponse
     */
    public function sendVerificationMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendVerificationMessage',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendVerificationMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendVerificationMessageRequest $request
     *
     * @return SendVerificationMessageResponse
     */
    public function sendVerificationMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerificationMessageWithOptions($request, $runtime);
    }

    /**
     * @param UpdateContactRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateContactResponse
     */
    public function updateContactWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->locale)) {
            $query['Locale'] = $request->locale;
        }
        $body = [];
        if (!Utils::isUnset($request->contactId)) {
            $body['ContactId'] = $request->contactId;
        }
        if (!Utils::isUnset($request->contactName)) {
            $body['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->email)) {
            $body['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->mobile)) {
            $body['Mobile'] = $request->mobile;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateContact',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateContactRequest $request
     *
     * @return UpdateContactResponse
     */
    public function updateContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateContactWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSubscriptionItemRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateSubscriptionItemResponse
     */
    public function updateSubscriptionItemWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSubscriptionItemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->contactIds)) {
            $request->contactIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contactIds, 'ContactIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->webhookIds)) {
            $request->webhookIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->webhookIds, 'WebhookIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->locale)) {
            $query['Locale'] = $request->locale;
        }
        $body = [];
        if (!Utils::isUnset($request->contactIdsShrink)) {
            $body['ContactIds'] = $request->contactIdsShrink;
        }
        if (!Utils::isUnset($request->emailStatus)) {
            $body['EmailStatus'] = $request->emailStatus;
        }
        if (!Utils::isUnset($request->itemId)) {
            $body['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->pmsgStatus)) {
            $body['PmsgStatus'] = $request->pmsgStatus;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->smsStatus)) {
            $body['SmsStatus'] = $request->smsStatus;
        }
        if (!Utils::isUnset($request->ttsStatus)) {
            $body['TtsStatus'] = $request->ttsStatus;
        }
        if (!Utils::isUnset($request->webhookIdsShrink)) {
            $body['WebhookIds'] = $request->webhookIdsShrink;
        }
        if (!Utils::isUnset($request->webhookStatus)) {
            $body['WebhookStatus'] = $request->webhookStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSubscriptionItem',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSubscriptionItemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSubscriptionItemRequest $request
     *
     * @return UpdateSubscriptionItemResponse
     */
    public function updateSubscriptionItem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubscriptionItemWithOptions($request, $runtime);
    }

    /**
     * @param UpdateWebhookRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateWebhookResponse
     */
    public function updateWebhookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->locale)) {
            $query['Locale'] = $request->locale;
        }
        $body = [];
        if (!Utils::isUnset($request->serverUrl)) {
            $body['ServerUrl'] = $request->serverUrl;
        }
        if (!Utils::isUnset($request->webhookId)) {
            $body['WebhookId'] = $request->webhookId;
        }
        if (!Utils::isUnset($request->webhookName)) {
            $body['WebhookName'] = $request->webhookName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWebhook',
            'version'     => '2021-07-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWebhookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWebhookRequest $request
     *
     * @return UpdateWebhookResponse
     */
    public function updateWebhook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWebhookWithOptions($request, $runtime);
    }
}
