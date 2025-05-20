<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Notifications\V20241225\Models\DeleteAllMessageRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\DeleteAllMessageResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\DelMessageRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\DelMessageResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadAllMessageRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadAllMessageResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadClassNameRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadClassNameResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageContentRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageContentResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageListRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageListResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageNewTotalRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageNewTotalResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadNumGroupByClassRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadNumGroupByClassResponse;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadNumGroupTotalRequest;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadNumGroupTotalResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Notifications extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
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
     * 方法描述：删除消息.
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
     * 方法描述：删除消息.
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
     * 方法描述：站内信全部删除（逻辑删除）.
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
     * 方法描述：站内信全部删除（逻辑删除）.
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
     * 方法描述：分类全部标记为已读，不填则全部标记.
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
     * 方法描述：分类全部标记为已读，不填则全部标记.
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
     * 方法描述：获取各分类已读消息数.
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
     * 方法描述：获取各分类已读消息数.
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
     * 方法描述：消息标记为已读.
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
     * 方法描述：消息标记为已读.
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
     * 方法描述：获取消息正文.
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
     * 方法描述：获取消息正文.
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
     * 方法描述：获取消息列表.
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
     * 方法描述：获取消息列表.
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
     * 方法描述：获取未读消息总数.
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
     * 方法描述：获取未读消息总数.
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
     * 方法描述：获取各分类已读消息数.
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
     * 方法描述：获取各分类已读消息数.
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
     * 方法描述：获取所有分类下的信息.
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
     * 方法描述：获取所有分类下的信息.
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
}
