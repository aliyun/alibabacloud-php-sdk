<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\STAROps\V20260428\Models\CreateChatRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\CreateChatResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\CreateDigitalEmployeeRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\CreateDigitalEmployeeResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\CreateDigitalEmployeeSkillRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\CreateDigitalEmployeeSkillResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\CreateThreadRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\CreateThreadResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\DeleteDigitalEmployeeRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\DeleteDigitalEmployeeResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\DeleteDigitalEmployeeSkillRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\DeleteDigitalEmployeeSkillResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\DeleteThreadRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\DeleteThreadResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\GetDigitalEmployeeRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\GetDigitalEmployeeResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\GetDigitalEmployeeSkillRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\GetDigitalEmployeeSkillResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\GetThreadDataRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\GetThreadDataResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\GetThreadRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\GetThreadResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ListDigitalEmployeeSkillsRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ListDigitalEmployeeSkillsResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ListDigitalEmployeeSkillVersionsRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ListDigitalEmployeeSkillVersionsResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ListDigitalEmployeesRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ListDigitalEmployeesResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ListDigitalEmployeesShrinkRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ListThreadsRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ListThreadsResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\ListThreadsShrinkRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateDigitalEmployeeRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateDigitalEmployeeResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateDigitalEmployeeSkillRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateDigitalEmployeeSkillResponse;
use AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateThreadRequest;
use AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateThreadResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class STAROps extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('starops', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建对话.
     *
     * @param request - CreateChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatResponse
     *
     * @param CreateChatRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateChatResponse
     */
    public function createChatWithSSE($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->digitalEmployeeName) {
            @$body['digitalEmployeeName'] = $request->digitalEmployeeName;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChat',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield CreateChatResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * 创建对话.
     *
     * @param request - CreateChatRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateChatResponse
     *
     * @param CreateChatRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return CreateChatResponse
     */
    public function createChatWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->action) {
            @$body['action'] = $request->action;
        }

        if (null !== $request->digitalEmployeeName) {
            @$body['digitalEmployeeName'] = $request->digitalEmployeeName;
        }

        if (null !== $request->messages) {
            @$body['messages'] = $request->messages;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateChat',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/chat',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建对话.
     *
     * @param request - CreateChatRequest
     *
     * @returns CreateChatResponse
     *
     * @param CreateChatRequest $request
     *
     * @return CreateChatResponse
     */
    public function createChat($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createChatWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建DigitalEmployee.
     *
     * @param request - CreateDigitalEmployeeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDigitalEmployeeResponse
     *
     * @param CreateDigitalEmployeeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDigitalEmployeeResponse
     */
    public function createDigitalEmployeeWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->defaultRule) {
            @$body['defaultRule'] = $request->defaultRule;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->knowledges) {
            @$body['knowledges'] = $request->knowledges;
        }

        if (null !== $request->name) {
            @$body['name'] = $request->name;
        }

        if (null !== $request->resourceGroupId) {
            @$body['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->roleArn) {
            @$body['roleArn'] = $request->roleArn;
        }

        if (null !== $request->tags) {
            @$body['tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDigitalEmployee',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDigitalEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建DigitalEmployee.
     *
     * @param request - CreateDigitalEmployeeRequest
     *
     * @returns CreateDigitalEmployeeResponse
     *
     * @param CreateDigitalEmployeeRequest $request
     *
     * @return CreateDigitalEmployeeResponse
     */
    public function createDigitalEmployee($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDigitalEmployeeWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建技能.
     *
     * @param request - CreateDigitalEmployeeSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDigitalEmployeeSkillResponse
     *
     * @param string                            $name
     * @param CreateDigitalEmployeeSkillRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDigitalEmployeeSkillResponse
     */
    public function createDigitalEmployeeSkillWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->files) {
            @$body['files'] = $request->files;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        if (null !== $request->skillName) {
            @$body['skillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDigitalEmployeeSkill',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/skill',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateDigitalEmployeeSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建技能.
     *
     * @param request - CreateDigitalEmployeeSkillRequest
     *
     * @returns CreateDigitalEmployeeSkillResponse
     *
     * @param string                            $name
     * @param CreateDigitalEmployeeSkillRequest $request
     *
     * @return CreateDigitalEmployeeSkillResponse
     */
    public function createDigitalEmployeeSkill($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDigitalEmployeeSkillWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 创建会话.
     *
     * @param request - CreateThreadRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateThreadResponse
     *
     * @param string              $name
     * @param CreateThreadRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateThreadResponse
     */
    public function createThreadWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attributes) {
            @$body['attributes'] = $request->attributes;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        if (null !== $request->variables) {
            @$body['variables'] = $request->variables;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateThread',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建会话.
     *
     * @param request - CreateThreadRequest
     *
     * @returns CreateThreadResponse
     *
     * @param string              $name
     * @param CreateThreadRequest $request
     *
     * @return CreateThreadResponse
     */
    public function createThread($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createThreadWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 删除DigitalEmployee.
     *
     * @param request - DeleteDigitalEmployeeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDigitalEmployeeResponse
     *
     * @param string                       $name
     * @param DeleteDigitalEmployeeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDigitalEmployeeResponse
     */
    public function deleteDigitalEmployeeWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDigitalEmployee',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee/' . Url::percentEncode($name) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDigitalEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除DigitalEmployee.
     *
     * @param request - DeleteDigitalEmployeeRequest
     *
     * @returns DeleteDigitalEmployeeResponse
     *
     * @param string                       $name
     * @param DeleteDigitalEmployeeRequest $request
     *
     * @return DeleteDigitalEmployeeResponse
     */
    public function deleteDigitalEmployee($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDigitalEmployeeWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 删除技能.
     *
     * @param request - DeleteDigitalEmployeeSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDigitalEmployeeSkillResponse
     *
     * @param string                            $name
     * @param string                            $skillName
     * @param DeleteDigitalEmployeeSkillRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDigitalEmployeeSkillResponse
     */
    public function deleteDigitalEmployeeSkillWithOptions($name, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteDigitalEmployeeSkill',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/skill/' . Url::percentEncode($skillName) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteDigitalEmployeeSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除技能.
     *
     * @param request - DeleteDigitalEmployeeSkillRequest
     *
     * @returns DeleteDigitalEmployeeSkillResponse
     *
     * @param string                            $name
     * @param string                            $skillName
     * @param DeleteDigitalEmployeeSkillRequest $request
     *
     * @return DeleteDigitalEmployeeSkillResponse
     */
    public function deleteDigitalEmployeeSkill($name, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDigitalEmployeeSkillWithOptions($name, $skillName, $request, $headers, $runtime);
    }

    /**
     * 删除会话.
     *
     * @param request - DeleteThreadRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteThreadResponse
     *
     * @param string              $name
     * @param string              $threadId
     * @param DeleteThreadRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteThreadResponse
     */
    public function deleteThreadWithOptions($name, $threadId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'DeleteThread',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread/' . Url::percentEncode($threadId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除会话.
     *
     * @param request - DeleteThreadRequest
     *
     * @returns DeleteThreadResponse
     *
     * @param string              $name
     * @param string              $threadId
     * @param DeleteThreadRequest $request
     *
     * @return DeleteThreadResponse
     */
    public function deleteThread($name, $threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteThreadWithOptions($name, $threadId, $request, $headers, $runtime);
    }

    /**
     * 查询 DigitalEmployee.
     *
     * @param request - GetDigitalEmployeeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDigitalEmployeeResponse
     *
     * @param string                    $name
     * @param GetDigitalEmployeeRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetDigitalEmployeeResponse
     */
    public function getDigitalEmployeeWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetDigitalEmployee',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee/' . Url::percentEncode($name) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDigitalEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询 DigitalEmployee.
     *
     * @param request - GetDigitalEmployeeRequest
     *
     * @returns GetDigitalEmployeeResponse
     *
     * @param string                    $name
     * @param GetDigitalEmployeeRequest $request
     *
     * @return GetDigitalEmployeeResponse
     */
    public function getDigitalEmployee($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDigitalEmployeeWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 获取技能详情.
     *
     * @param request - GetDigitalEmployeeSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDigitalEmployeeSkillResponse
     *
     * @param string                         $name
     * @param string                         $skillName
     * @param GetDigitalEmployeeSkillRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GetDigitalEmployeeSkillResponse
     */
    public function getDigitalEmployeeSkillWithOptions($name, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->version) {
            @$query['version'] = $request->version;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDigitalEmployeeSkill',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/skill/' . Url::percentEncode($skillName) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetDigitalEmployeeSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取技能详情.
     *
     * @param request - GetDigitalEmployeeSkillRequest
     *
     * @returns GetDigitalEmployeeSkillResponse
     *
     * @param string                         $name
     * @param string                         $skillName
     * @param GetDigitalEmployeeSkillRequest $request
     *
     * @return GetDigitalEmployeeSkillResponse
     */
    public function getDigitalEmployeeSkill($name, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDigitalEmployeeSkillWithOptions($name, $skillName, $request, $headers, $runtime);
    }

    /**
     * 获取会话.
     *
     * @param request - GetThreadRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetThreadResponse
     *
     * @param string           $name
     * @param string           $threadId
     * @param GetThreadRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetThreadResponse
     */
    public function getThreadWithOptions($name, $threadId, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'GetThread',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread/' . Url::percentEncode($threadId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取会话.
     *
     * @param request - GetThreadRequest
     *
     * @returns GetThreadResponse
     *
     * @param string           $name
     * @param string           $threadId
     * @param GetThreadRequest $request
     *
     * @return GetThreadResponse
     */
    public function getThread($name, $threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getThreadWithOptions($name, $threadId, $request, $headers, $runtime);
    }

    /**
     * 获取会话数据.
     *
     * @param request - GetThreadDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetThreadDataResponse
     *
     * @param string               $name
     * @param string               $threadId
     * @param GetThreadDataRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetThreadDataResponse
     */
    public function getThreadDataWithOptions($name, $threadId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetThreadData',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread/' . Url::percentEncode($threadId) . '/data',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetThreadDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取会话数据.
     *
     * @param request - GetThreadDataRequest
     *
     * @returns GetThreadDataResponse
     *
     * @param string               $name
     * @param string               $threadId
     * @param GetThreadDataRequest $request
     *
     * @return GetThreadDataResponse
     */
    public function getThreadData($name, $threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getThreadDataWithOptions($name, $threadId, $request, $headers, $runtime);
    }

    /**
     * 列出技能版本.
     *
     * @param request - ListDigitalEmployeeSkillVersionsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDigitalEmployeeSkillVersionsResponse
     *
     * @param string                                  $name
     * @param string                                  $skillName
     * @param ListDigitalEmployeeSkillVersionsRequest $request
     * @param string[]                                $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return ListDigitalEmployeeSkillVersionsResponse
     */
    public function listDigitalEmployeeSkillVersionsWithOptions($name, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action' => 'ListDigitalEmployeeSkillVersions',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/skill/' . Url::percentEncode($skillName) . '/versions',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDigitalEmployeeSkillVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出技能版本.
     *
     * @param request - ListDigitalEmployeeSkillVersionsRequest
     *
     * @returns ListDigitalEmployeeSkillVersionsResponse
     *
     * @param string                                  $name
     * @param string                                  $skillName
     * @param ListDigitalEmployeeSkillVersionsRequest $request
     *
     * @return ListDigitalEmployeeSkillVersionsResponse
     */
    public function listDigitalEmployeeSkillVersions($name, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDigitalEmployeeSkillVersionsWithOptions($name, $skillName, $request, $headers, $runtime);
    }

    /**
     * 列出技能.
     *
     * @param request - ListDigitalEmployeeSkillsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDigitalEmployeeSkillsResponse
     *
     * @param string                           $name
     * @param ListDigitalEmployeeSkillsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDigitalEmployeeSkillsResponse
     */
    public function listDigitalEmployeeSkillsWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->skillName) {
            @$query['skillName'] = $request->skillName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDigitalEmployeeSkills',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/skills',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDigitalEmployeeSkillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出技能.
     *
     * @param request - ListDigitalEmployeeSkillsRequest
     *
     * @returns ListDigitalEmployeeSkillsResponse
     *
     * @param string                           $name
     * @param ListDigitalEmployeeSkillsRequest $request
     *
     * @return ListDigitalEmployeeSkillsResponse
     */
    public function listDigitalEmployeeSkills($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDigitalEmployeeSkillsWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 列出资源DigitalEmployee.
     *
     * @param tmpReq - ListDigitalEmployeesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDigitalEmployeesResponse
     *
     * @param ListDigitalEmployeesRequest $tmpReq
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDigitalEmployeesResponse
     */
    public function listDigitalEmployeesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDigitalEmployeesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'tags', 'json');
        }

        $query = [];
        if (null !== $request->displayName) {
            @$query['displayName'] = $request->displayName;
        }

        if (null !== $request->employeeType) {
            @$query['employeeType'] = $request->employeeType;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceGroupId) {
            @$query['resourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tagsShrink) {
            @$query['tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDigitalEmployees',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListDigitalEmployeesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出资源DigitalEmployee.
     *
     * @param request - ListDigitalEmployeesRequest
     *
     * @returns ListDigitalEmployeesResponse
     *
     * @param ListDigitalEmployeesRequest $request
     *
     * @return ListDigitalEmployeesResponse
     */
    public function listDigitalEmployees($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDigitalEmployeesWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出会话.
     *
     * @param tmpReq - ListThreadsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListThreadsResponse
     *
     * @param string             $name
     * @param ListThreadsRequest $tmpReq
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListThreadsResponse
     */
    public function listThreadsWithOptions($name, $tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListThreadsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'filter', 'json');
        }

        $query = [];
        if (null !== $request->filterShrink) {
            @$query['filter'] = $request->filterShrink;
        }

        if (null !== $request->maxResults) {
            @$query['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['nextToken'] = $request->nextToken;
        }

        if (null !== $request->status) {
            @$query['status'] = $request->status;
        }

        if (null !== $request->threadId) {
            @$query['threadId'] = $request->threadId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListThreads',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/threads',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListThreadsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 列出会话.
     *
     * @param request - ListThreadsRequest
     *
     * @returns ListThreadsResponse
     *
     * @param string             $name
     * @param ListThreadsRequest $request
     *
     * @return ListThreadsResponse
     */
    public function listThreads($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listThreadsWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 更新UpdateDigitalEmployee.
     *
     * @param request - UpdateDigitalEmployeeRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDigitalEmployeeResponse
     *
     * @param string                       $name
     * @param UpdateDigitalEmployeeRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateDigitalEmployeeResponse
     */
    public function updateDigitalEmployeeWithOptions($name, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->defaultRule) {
            @$body['defaultRule'] = $request->defaultRule;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->knowledges) {
            @$body['knowledges'] = $request->knowledges;
        }

        if (null !== $request->roleArn) {
            @$body['roleArn'] = $request->roleArn;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDigitalEmployee',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digital-employee/' . Url::percentEncode($name) . '',
            'method' => 'PATCH',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDigitalEmployeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新UpdateDigitalEmployee.
     *
     * @param request - UpdateDigitalEmployeeRequest
     *
     * @returns UpdateDigitalEmployeeResponse
     *
     * @param string                       $name
     * @param UpdateDigitalEmployeeRequest $request
     *
     * @return UpdateDigitalEmployeeResponse
     */
    public function updateDigitalEmployee($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDigitalEmployeeWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * 更新技能.
     *
     * @param request - UpdateDigitalEmployeeSkillRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDigitalEmployeeSkillResponse
     *
     * @param string                            $name
     * @param string                            $skillName
     * @param UpdateDigitalEmployeeSkillRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateDigitalEmployeeSkillResponse
     */
    public function updateDigitalEmployeeSkillWithOptions($name, $skillName, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['displayName'] = $request->displayName;
        }

        if (null !== $request->enable) {
            @$body['enable'] = $request->enable;
        }

        if (null !== $request->files) {
            @$body['files'] = $request->files;
        }

        if (null !== $request->remark) {
            @$body['remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateDigitalEmployeeSkill',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/skill/' . Url::percentEncode($skillName) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateDigitalEmployeeSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新技能.
     *
     * @param request - UpdateDigitalEmployeeSkillRequest
     *
     * @returns UpdateDigitalEmployeeSkillResponse
     *
     * @param string                            $name
     * @param string                            $skillName
     * @param UpdateDigitalEmployeeSkillRequest $request
     *
     * @return UpdateDigitalEmployeeSkillResponse
     */
    public function updateDigitalEmployeeSkill($name, $skillName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateDigitalEmployeeSkillWithOptions($name, $skillName, $request, $headers, $runtime);
    }

    /**
     * 更新会话.
     *
     * @param request - UpdateThreadRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateThreadResponse
     *
     * @param string              $name
     * @param string              $threadId
     * @param UpdateThreadRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateThreadResponse
     */
    public function updateThreadWithOptions($name, $threadId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->attributes) {
            @$body['attributes'] = $request->attributes;
        }

        if (null !== $request->status) {
            @$body['status'] = $request->status;
        }

        if (null !== $request->title) {
            @$body['title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateThread',
            'version' => '2026-04-28',
            'protocol' => 'HTTPS',
            'pathname' => '/digitalEmployee/' . Url::percentEncode($name) . '/thread/' . Url::percentEncode($threadId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateThreadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新会话.
     *
     * @param request - UpdateThreadRequest
     *
     * @returns UpdateThreadResponse
     *
     * @param string              $name
     * @param string              $threadId
     * @param UpdateThreadRequest $request
     *
     * @return UpdateThreadResponse
     */
    public function updateThread($name, $threadId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateThreadWithOptions($name, $threadId, $request, $headers, $runtime);
    }
}
