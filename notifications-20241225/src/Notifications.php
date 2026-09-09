<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Notifications\V20241225\Models\CreateWebhookContactRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\CreateWebhookContactResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\DeleteAllMessageRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\DeleteAllMessageResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\DeleteWebhookContactRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\DeleteWebhookContactResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\DelMessageRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\DelMessageResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadAllCommonContactsRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadAllCommonContactsResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadAllMarketingPreferencesRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadAllMarketingPreferencesResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadAllMessageRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadAllMessageResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadAllWebhookContactsRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadAllWebhookContactsResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadCategoryGroupListRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadCategoryGroupListResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadClassNameRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadClassNameResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadCommonContactRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadCommonContactResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMarketingPreferenceRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMarketingPreferenceResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageContentRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageContentResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageLanguageRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageLanguageResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageListRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageListResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageNewTotalRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageNewTotalResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMetaConfigRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMetaConfigResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadNumGroupByClassRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadNumGroupByClassResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadNumGroupTotalRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadNumGroupTotalResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadRevisionHistoryListRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadRevisionHistoryListResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadRevisionHistoryListShrinkRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadUserSubscriptionListRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadUserSubscriptionListResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadWebhookContactRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadWebhookContactResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadWebhookContactSendTemplateListRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadWebhookContactSendTemplateListResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ResetUserSubscriptionRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ResetUserSubscriptionResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ResetUserSubscriptionShrinkRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\TestWebhookContactRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\TestWebhookContactResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateMarketingPreferenceRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateMarketingPreferenceResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateMessageLanguageRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateMessageLanguageResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateUserSubscriptionRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateUserSubscriptionResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateUserSubscriptionShrinkRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateWebhookContactRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\UpdateWebhookContactResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Notifications extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'ap-southeast-1' => 'notifications-intl.aliyuncs.com',
            'cn-zhangjiakou' => 'notifications.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('notifications', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a webhook contact.
     *
     * @param request - CreateWebhookContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWebhookContactResponse
     *
     * @param CreateWebhookContactRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateWebhookContactResponse
     */
    public function createWebhookContactWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->botSecurityToken) {
            @$body['BotSecurityToken'] = $request->botSecurityToken;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->contactName) {
            @$body['ContactName'] = $request->contactName;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->securityToken) {
            @$body['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->serverUrl) {
            @$body['ServerUrl'] = $request->serverUrl;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->templateCode) {
            @$body['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        if (null !== $request->verificationCode) {
            @$body['VerificationCode'] = $request->verificationCode;
        }

        if (null !== $request->webhookType) {
            @$body['WebhookType'] = $request->webhookType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWebhookContact',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateWebhookContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a webhook contact.
     *
     * @param request - CreateWebhookContactRequest
     *
     * @returns CreateWebhookContactResponse
     *
     * @param CreateWebhookContactRequest $request
     *
     * @return CreateWebhookContactResponse
     */
    public function createWebhookContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWebhookContactWithOptions($request, $runtime);
    }

    /**
     * Deletes a message.
     *
     * @param request - DelMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DelMessageResponse
     *
     * @param DelMessageRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DelMessageResponse
     */
    public function delMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->msgId) {
            @$body['MsgId'] = $request->msgId;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DelMessage',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DelMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a message.
     *
     * @param request - DelMessageRequest
     *
     * @returns DelMessageResponse
     *
     * @param DelMessageRequest $request
     *
     * @return DelMessageResponse
     */
    public function delMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->delMessageWithOptions($request, $runtime);
    }

    /**
     * Deletes all in-app messages (logical deletion).
     *
     * @param request - DeleteAllMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAllMessageResponse
     *
     * @param DeleteAllMessageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteAllMessageResponse
     */
    public function deleteAllMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->classId) {
            @$body['ClassId'] = $request->classId;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->groupCode) {
            @$body['GroupCode'] = $request->groupCode;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAllMessage',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAllMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes all in-app messages (logical deletion).
     *
     * @param request - DeleteAllMessageRequest
     *
     * @returns DeleteAllMessageResponse
     *
     * @param DeleteAllMessageRequest $request
     *
     * @return DeleteAllMessageResponse
     */
    public function deleteAllMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAllMessageWithOptions($request, $runtime);
    }

    /**
     * Deletes a webhook contact.
     *
     * @param request - DeleteWebhookContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWebhookContactResponse
     *
     * @param DeleteWebhookContactRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteWebhookContactResponse
     */
    public function deleteWebhookContactWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->contactId) {
            @$body['ContactId'] = $request->contactId;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWebhookContact',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWebhookContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a webhook contact.
     *
     * @param request - DeleteWebhookContactRequest
     *
     * @returns DeleteWebhookContactResponse
     *
     * @param DeleteWebhookContactRequest $request
     *
     * @return DeleteWebhookContactResponse
     */
    public function deleteWebhookContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWebhookContactWithOptions($request, $runtime);
    }

    /**
     * Retrieves all common contacts across accounts.
     *
     * @param request - ReadAllCommonContactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadAllCommonContactsResponse
     *
     * @param ReadAllCommonContactsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ReadAllCommonContactsResponse
     */
    public function readAllCommonContactsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadAllCommonContacts',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadAllCommonContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves all common contacts across accounts.
     *
     * @param request - ReadAllCommonContactsRequest
     *
     * @returns ReadAllCommonContactsResponse
     *
     * @param ReadAllCommonContactsRequest $request
     *
     * @return ReadAllCommonContactsResponse
     */
    public function readAllCommonContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readAllCommonContactsWithOptions($request, $runtime);
    }

    /**
     * Retrieves all marketing preference configurations.
     *
     * @param request - ReadAllMarketingPreferencesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadAllMarketingPreferencesResponse
     *
     * @param ReadAllMarketingPreferencesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ReadAllMarketingPreferencesResponse
     */
    public function readAllMarketingPreferencesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadAllMarketingPreferences',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadAllMarketingPreferencesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves all marketing preference configurations.
     *
     * @param request - ReadAllMarketingPreferencesRequest
     *
     * @returns ReadAllMarketingPreferencesResponse
     *
     * @param ReadAllMarketingPreferencesRequest $request
     *
     * @return ReadAllMarketingPreferencesResponse
     */
    public function readAllMarketingPreferences($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readAllMarketingPreferencesWithOptions($request, $runtime);
    }

    /**
     * Marks all messages as read. If no category is specified, all messages are marked as read.
     *
     * @param request - ReadAllMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadAllMessageResponse
     *
     * @param ReadAllMessageRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ReadAllMessageResponse
     */
    public function readAllMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->classId) {
            @$body['ClassId'] = $request->classId;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->groupCode) {
            @$body['GroupCode'] = $request->groupCode;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadAllMessage',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadAllMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Marks all messages as read. If no category is specified, all messages are marked as read.
     *
     * @param request - ReadAllMessageRequest
     *
     * @returns ReadAllMessageResponse
     *
     * @param ReadAllMessageRequest $request
     *
     * @return ReadAllMessageResponse
     */
    public function readAllMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readAllMessageWithOptions($request, $runtime);
    }

    /**
     * Retrieves the full list of webhooks.
     *
     * @param request - ReadAllWebhookContactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadAllWebhookContactsResponse
     *
     * @param ReadAllWebhookContactsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReadAllWebhookContactsResponse
     */
    public function readAllWebhookContactsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadAllWebhookContacts',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadAllWebhookContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the full list of webhooks.
     *
     * @param request - ReadAllWebhookContactsRequest
     *
     * @returns ReadAllWebhookContactsResponse
     *
     * @param ReadAllWebhookContactsRequest $request
     *
     * @return ReadAllWebhookContactsResponse
     */
    public function readAllWebhookContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readAllWebhookContactsWithOptions($request, $runtime);
    }

    /**
     * Get category group list.
     *
     * @param request - ReadCategoryGroupListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadCategoryGroupListResponse
     *
     * @param ReadCategoryGroupListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ReadCategoryGroupListResponse
     */
    public function readCategoryGroupListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->channelGroupCode) {
            @$body['ChannelGroupCode'] = $request->channelGroupCode;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadCategoryGroupList',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadCategoryGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get category group list.
     *
     * @param request - ReadCategoryGroupListRequest
     *
     * @returns ReadCategoryGroupListResponse
     *
     * @param ReadCategoryGroupListRequest $request
     *
     * @return ReadCategoryGroupListResponse
     */
    public function readCategoryGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readCategoryGroupListWithOptions($request, $runtime);
    }

    /**
     * Retrieves the number of read messages for each category.
     *
     * @param request - ReadClassNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadClassNameResponse
     *
     * @param ReadClassNameRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ReadClassNameResponse
     */
    public function readClassNameWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadClassName',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadClassNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the number of read messages for each category.
     *
     * @param request - ReadClassNameRequest
     *
     * @returns ReadClassNameResponse
     *
     * @param ReadClassNameRequest $request
     *
     * @return ReadClassNameResponse
     */
    public function readClassName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readClassNameWithOptions($request, $runtime);
    }

    /**
     * Retrieves a general contact.
     *
     * @param request - ReadCommonContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadCommonContactResponse
     *
     * @param ReadCommonContactRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReadCommonContactResponse
     */
    public function readCommonContactWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->contactId) {
            @$body['ContactId'] = $request->contactId;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadCommonContact',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadCommonContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a general contact.
     *
     * @param request - ReadCommonContactRequest
     *
     * @returns ReadCommonContactResponse
     *
     * @param ReadCommonContactRequest $request
     *
     * @return ReadCommonContactResponse
     */
    public function readCommonContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readCommonContactWithOptions($request, $runtime);
    }

    /**
     * Retrieves the marketing preferences of a user.
     *
     * @param request - ReadMarketingPreferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadMarketingPreferenceResponse
     *
     * @param ReadMarketingPreferenceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReadMarketingPreferenceResponse
     */
    public function readMarketingPreferenceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->contactId) {
            @$body['ContactId'] = $request->contactId;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadMarketingPreference',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadMarketingPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the marketing preferences of a user.
     *
     * @param request - ReadMarketingPreferenceRequest
     *
     * @returns ReadMarketingPreferenceResponse
     *
     * @param ReadMarketingPreferenceRequest $request
     *
     * @return ReadMarketingPreferenceResponse
     */
    public function readMarketingPreference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readMarketingPreferenceWithOptions($request, $runtime);
    }

    /**
     * Marks a message as read.
     *
     * @param request - ReadMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadMessageResponse
     *
     * @param ReadMessageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ReadMessageResponse
     */
    public function readMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->msgId) {
            @$body['MsgId'] = $request->msgId;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadMessage',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Marks a message as read.
     *
     * @param request - ReadMessageRequest
     *
     * @returns ReadMessageResponse
     *
     * @param ReadMessageRequest $request
     *
     * @return ReadMessageResponse
     */
    public function readMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readMessageWithOptions($request, $runtime);
    }

    /**
     * Retrieves the body of a message.
     *
     * @param request - ReadMessageContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadMessageContentResponse
     *
     * @param ReadMessageContentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReadMessageContentResponse
     */
    public function readMessageContentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->classId) {
            @$body['ClassId'] = $request->classId;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->groupCode) {
            @$body['GroupCode'] = $request->groupCode;
        }

        if (null !== $request->history) {
            @$body['History'] = $request->history;
        }

        if (null !== $request->msgId) {
            @$body['MsgId'] = $request->msgId;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadMessageContent',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadMessageContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the body of a message.
     *
     * @param request - ReadMessageContentRequest
     *
     * @returns ReadMessageContentResponse
     *
     * @param ReadMessageContentRequest $request
     *
     * @return ReadMessageContentResponse
     */
    public function readMessageContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readMessageContentWithOptions($request, $runtime);
    }

    /**
     * Retrieves the message language.
     *
     * @param request - ReadMessageLanguageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadMessageLanguageResponse
     *
     * @param ReadMessageLanguageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReadMessageLanguageResponse
     */
    public function readMessageLanguageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->returnDefaultLang) {
            @$body['ReturnDefaultLang'] = $request->returnDefaultLang;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadMessageLanguage',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadMessageLanguageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the message language.
     *
     * @param request - ReadMessageLanguageRequest
     *
     * @returns ReadMessageLanguageResponse
     *
     * @param ReadMessageLanguageRequest $request
     *
     * @return ReadMessageLanguageResponse
     */
    public function readMessageLanguage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readMessageLanguageWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of messages.
     *
     * @param request - ReadMessageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadMessageListResponse
     *
     * @param ReadMessageListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReadMessageListResponse
     */
    public function readMessageListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->classId) {
            @$body['ClassId'] = $request->classId;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->groupCode) {
            @$body['GroupCode'] = $request->groupCode;
        }

        if (null !== $request->history) {
            @$body['History'] = $request->history;
        }

        if (null !== $request->loc) {
            @$body['Loc'] = $request->loc;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->page) {
            @$body['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadMessageList',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadMessageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of messages.
     *
     * @param request - ReadMessageListRequest
     *
     * @returns ReadMessageListResponse
     *
     * @param ReadMessageListRequest $request
     *
     * @return ReadMessageListResponse
     */
    public function readMessageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readMessageListWithOptions($request, $runtime);
    }

    /**
     * Retrieves the total number of unread messages.
     *
     * @param request - ReadMessageNewTotalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadMessageNewTotalResponse
     *
     * @param ReadMessageNewTotalRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReadMessageNewTotalResponse
     */
    public function readMessageNewTotalWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadMessageNewTotal',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadMessageNewTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the total number of unread messages.
     *
     * @param request - ReadMessageNewTotalRequest
     *
     * @returns ReadMessageNewTotalResponse
     *
     * @param ReadMessageNewTotalRequest $request
     *
     * @return ReadMessageNewTotalResponse
     */
    public function readMessageNewTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readMessageNewTotalWithOptions($request, $runtime);
    }

    /**
     * Retrieves the metadata service.
     *
     * @remarks
     * Retrieves page metadata.
     *
     * @param request - ReadMetaConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadMetaConfigResponse
     *
     * @param ReadMetaConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ReadMetaConfigResponse
     */
    public function readMetaConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadMetaConfig',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadMetaConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the metadata service.
     *
     * @remarks
     * Retrieves page metadata.
     *
     * @param request - ReadMetaConfigRequest
     *
     * @returns ReadMetaConfigResponse
     *
     * @param ReadMetaConfigRequest $request
     *
     * @return ReadMetaConfigResponse
     */
    public function readMetaConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readMetaConfigWithOptions($request, $runtime);
    }

    /**
     * Retrieves the count of read messages for each category.
     *
     * @param request - ReadNumGroupByClassRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadNumGroupByClassResponse
     *
     * @param ReadNumGroupByClassRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ReadNumGroupByClassResponse
     */
    public function readNumGroupByClassWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadNumGroupByClass',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadNumGroupByClassResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the count of read messages for each category.
     *
     * @param request - ReadNumGroupByClassRequest
     *
     * @returns ReadNumGroupByClassResponse
     *
     * @param ReadNumGroupByClassRequest $request
     *
     * @return ReadNumGroupByClassResponse
     */
    public function readNumGroupByClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readNumGroupByClassWithOptions($request, $runtime);
    }

    /**
     * Method description: Get information under all categories.
     *
     * @param request - ReadNumGroupTotalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadNumGroupTotalResponse
     *
     * @param ReadNumGroupTotalRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReadNumGroupTotalResponse
     */
    public function readNumGroupTotalWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadNumGroupTotal',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadNumGroupTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Method description: Get information under all categories.
     *
     * @param request - ReadNumGroupTotalRequest
     *
     * @returns ReadNumGroupTotalResponse
     *
     * @param ReadNumGroupTotalRequest $request
     *
     * @return ReadNumGroupTotalResponse
     */
    public function readNumGroupTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readNumGroupTotalWithOptions($request, $runtime);
    }

    /**
     * Retrieves revision records.
     *
     * @param tmpReq - ReadRevisionHistoryListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadRevisionHistoryListResponse
     *
     * @param ReadRevisionHistoryListRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ReadRevisionHistoryListResponse
     */
    public function readRevisionHistoryListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReadRevisionHistoryListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->pageInfo) {
            $request->pageInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->pageInfo, 'PageInfo', 'json');
        }

        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->categoryCode) {
            @$body['CategoryCode'] = $request->categoryCode;
        }

        if (null !== $request->channelGroupCode) {
            @$body['ChannelGroupCode'] = $request->channelGroupCode;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->pageInfoShrink) {
            @$body['PageInfo'] = $request->pageInfoShrink;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadRevisionHistoryList',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadRevisionHistoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves revision records.
     *
     * @param request - ReadRevisionHistoryListRequest
     *
     * @returns ReadRevisionHistoryListResponse
     *
     * @param ReadRevisionHistoryListRequest $request
     *
     * @return ReadRevisionHistoryListResponse
     */
    public function readRevisionHistoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readRevisionHistoryListWithOptions($request, $runtime);
    }

    /**
     * Retrieves the subscription list of a user.
     *
     * @param request - ReadUserSubscriptionListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadUserSubscriptionListResponse
     *
     * @param ReadUserSubscriptionListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReadUserSubscriptionListResponse
     */
    public function readUserSubscriptionListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->categoryGroupCode) {
            @$body['CategoryGroupCode'] = $request->categoryGroupCode;
        }

        if (null !== $request->channelGroupCode) {
            @$body['ChannelGroupCode'] = $request->channelGroupCode;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadUserSubscriptionList',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadUserSubscriptionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the subscription list of a user.
     *
     * @param request - ReadUserSubscriptionListRequest
     *
     * @returns ReadUserSubscriptionListResponse
     *
     * @param ReadUserSubscriptionListRequest $request
     *
     * @return ReadUserSubscriptionListResponse
     */
    public function readUserSubscriptionList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readUserSubscriptionListWithOptions($request, $runtime);
    }

    /**
     * Retrieves a webhook contact.
     *
     * @param request - ReadWebhookContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadWebhookContactResponse
     *
     * @param ReadWebhookContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReadWebhookContactResponse
     */
    public function readWebhookContactWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->contactId) {
            @$body['ContactId'] = $request->contactId;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadWebhookContact',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadWebhookContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a webhook contact.
     *
     * @param request - ReadWebhookContactRequest
     *
     * @returns ReadWebhookContactResponse
     *
     * @param ReadWebhookContactRequest $request
     *
     * @return ReadWebhookContactResponse
     */
    public function readWebhookContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readWebhookContactWithOptions($request, $runtime);
    }

    /**
     * Retrieves the list of webhook send templates.
     *
     * @param request - ReadWebhookContactSendTemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReadWebhookContactSendTemplateListResponse
     *
     * @param ReadWebhookContactSendTemplateListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ReadWebhookContactSendTemplateListResponse
     */
    public function readWebhookContactSendTemplateListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->templateCode) {
            @$body['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReadWebhookContactSendTemplateList',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReadWebhookContactSendTemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of webhook send templates.
     *
     * @param request - ReadWebhookContactSendTemplateListRequest
     *
     * @returns ReadWebhookContactSendTemplateListResponse
     *
     * @param ReadWebhookContactSendTemplateListRequest $request
     *
     * @return ReadWebhookContactSendTemplateListResponse
     */
    public function readWebhookContactSendTemplateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->readWebhookContactSendTemplateListWithOptions($request, $runtime);
    }

    /**
     * Resets user subscriptions.
     *
     * @param tmpReq - ResetUserSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetUserSubscriptionResponse
     *
     * @param ResetUserSubscriptionRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ResetUserSubscriptionResponse
     */
    public function resetUserSubscriptionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ResetUserSubscriptionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categoryCodes) {
            $request->categoryCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categoryCodes, 'CategoryCodes', 'json');
        }

        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->categoryCodesShrink) {
            @$body['CategoryCodes'] = $request->categoryCodesShrink;
        }

        if (null !== $request->channelGroupCode) {
            @$body['ChannelGroupCode'] = $request->channelGroupCode;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->remarks) {
            @$body['Remarks'] = $request->remarks;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetUserSubscription',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetUserSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets user subscriptions.
     *
     * @param request - ResetUserSubscriptionRequest
     *
     * @returns ResetUserSubscriptionResponse
     *
     * @param ResetUserSubscriptionRequest $request
     *
     * @return ResetUserSubscriptionResponse
     */
    public function resetUserSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserSubscriptionWithOptions($request, $runtime);
    }

    /**
     * Tests a webhook.
     *
     * @param request - TestWebhookContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TestWebhookContactResponse
     *
     * @param TestWebhookContactRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TestWebhookContactResponse
     */
    public function testWebhookContactWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->botSecurityToken) {
            @$body['BotSecurityToken'] = $request->botSecurityToken;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->contactId) {
            @$body['ContactId'] = $request->contactId;
        }

        if (null !== $request->contactName) {
            @$body['ContactName'] = $request->contactName;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->serverUrl) {
            @$body['ServerUrl'] = $request->serverUrl;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->templateCode) {
            @$body['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        if (null !== $request->webhookType) {
            @$body['WebhookType'] = $request->webhookType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TestWebhookContact',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TestWebhookContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tests a webhook.
     *
     * @param request - TestWebhookContactRequest
     *
     * @returns TestWebhookContactResponse
     *
     * @param TestWebhookContactRequest $request
     *
     * @return TestWebhookContactResponse
     */
    public function testWebhookContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testWebhookContactWithOptions($request, $runtime);
    }

    /**
     * Updates marketing preferences.
     *
     * @param request - UpdateMarketingPreferenceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMarketingPreferenceResponse
     *
     * @param UpdateMarketingPreferenceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateMarketingPreferenceResponse
     */
    public function updateMarketingPreferenceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->allowMarketing) {
            @$body['AllowMarketing'] = $request->allowMarketing;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->contactId) {
            @$body['ContactId'] = $request->contactId;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMarketingPreference',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMarketingPreferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates marketing preferences.
     *
     * @param request - UpdateMarketingPreferenceRequest
     *
     * @returns UpdateMarketingPreferenceResponse
     *
     * @param UpdateMarketingPreferenceRequest $request
     *
     * @return UpdateMarketingPreferenceResponse
     */
    public function updateMarketingPreference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMarketingPreferenceWithOptions($request, $runtime);
    }

    /**
     * Updates the message language.
     *
     * @param request - UpdateMessageLanguageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMessageLanguageResponse
     *
     * @param UpdateMessageLanguageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateMessageLanguageResponse
     */
    public function updateMessageLanguageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->preferLang) {
            @$body['PreferLang'] = $request->preferLang;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMessageLanguage',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMessageLanguageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the message language.
     *
     * @param request - UpdateMessageLanguageRequest
     *
     * @returns UpdateMessageLanguageResponse
     *
     * @param UpdateMessageLanguageRequest $request
     *
     * @return UpdateMessageLanguageResponse
     */
    public function updateMessageLanguage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMessageLanguageWithOptions($request, $runtime);
    }

    /**
     * Updates a user subscription.
     *
     * @remarks
     * Updates a user subscription.
     *
     * @param tmpReq - UpdateUserSubscriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserSubscriptionResponse
     *
     * @param UpdateUserSubscriptionRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateUserSubscriptionResponse
     */
    public function updateUserSubscriptionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateUserSubscriptionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->categoryCodes) {
            $request->categoryCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->categoryCodes, 'CategoryCodes', 'json');
        }

        if (null !== $tmpReq->channelConfigs) {
            $request->channelConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->channelConfigs, 'ChannelConfigs', 'json');
        }

        if (null !== $tmpReq->commonContacts) {
            $request->commonContactsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->commonContacts, 'CommonContacts', 'json');
        }

        if (null !== $tmpReq->receiveTimeList) {
            $request->receiveTimeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->receiveTimeList, 'ReceiveTimeList', 'json');
        }

        if (null !== $tmpReq->webhookContacts) {
            $request->webhookContactsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->webhookContacts, 'WebhookContacts', 'json');
        }

        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->categoryCodesShrink) {
            @$body['CategoryCodes'] = $request->categoryCodesShrink;
        }

        if (null !== $request->channelConfigsShrink) {
            @$body['ChannelConfigs'] = $request->channelConfigsShrink;
        }

        if (null !== $request->channelGroupCode) {
            @$body['ChannelGroupCode'] = $request->channelGroupCode;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->commonContactsShrink) {
            @$body['CommonContacts'] = $request->commonContactsShrink;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->operationItemCode) {
            @$body['OperationItemCode'] = $request->operationItemCode;
        }

        if (null !== $request->receiveTimeListShrink) {
            @$body['ReceiveTimeList'] = $request->receiveTimeListShrink;
        }

        if (null !== $request->remarks) {
            @$body['Remarks'] = $request->remarks;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        if (null !== $request->webhookContactsShrink) {
            @$body['WebhookContacts'] = $request->webhookContactsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserSubscription',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateUserSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a user subscription.
     *
     * @remarks
     * Updates a user subscription.
     *
     * @param request - UpdateUserSubscriptionRequest
     *
     * @returns UpdateUserSubscriptionResponse
     *
     * @param UpdateUserSubscriptionRequest $request
     *
     * @return UpdateUserSubscriptionResponse
     */
    public function updateUserSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserSubscriptionWithOptions($request, $runtime);
    }

    /**
     * Modifies a webhook contact.
     *
     * @param request - UpdateWebhookContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWebhookContactResponse
     *
     * @param UpdateWebhookContactRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateWebhookContactResponse
     */
    public function updateWebhookContactWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acceptLanguage) {
            @$body['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->bizName) {
            @$body['BizName'] = $request->bizName;
        }

        if (null !== $request->botSecurityToken) {
            @$body['BotSecurityToken'] = $request->botSecurityToken;
        }

        if (null !== $request->callerProtocol) {
            @$body['CallerProtocol'] = $request->callerProtocol;
        }

        if (null !== $request->clientSource) {
            @$body['ClientSource'] = $request->clientSource;
        }

        if (null !== $request->contactId) {
            @$body['ContactId'] = $request->contactId;
        }

        if (null !== $request->contactName) {
            @$body['ContactName'] = $request->contactName;
        }

        if (null !== $request->cookies) {
            @$body['Cookies'] = $request->cookies;
        }

        if (null !== $request->securityToken) {
            @$body['SecurityToken'] = $request->securityToken;
        }

        if (null !== $request->serverUrl) {
            @$body['ServerUrl'] = $request->serverUrl;
        }

        if (null !== $request->srcUrl) {
            @$body['SrcUrl'] = $request->srcUrl;
        }

        if (null !== $request->templateCode) {
            @$body['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->tenantCode) {
            @$body['TenantCode'] = $request->tenantCode;
        }

        if (null !== $request->uidType) {
            @$body['UidType'] = $request->uidType;
        }

        if (null !== $request->verificationCode) {
            @$body['VerificationCode'] = $request->verificationCode;
        }

        if (null !== $request->webhookType) {
            @$body['WebhookType'] = $request->webhookType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWebhookContact',
            'version' => '2024-12-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWebhookContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a webhook contact.
     *
     * @param request - UpdateWebhookContactRequest
     *
     * @returns UpdateWebhookContactResponse
     *
     * @param UpdateWebhookContactRequest $request
     *
     * @return UpdateWebhookContactResponse
     */
    public function updateWebhookContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWebhookContactWithOptions($request, $runtime);
    }
}
