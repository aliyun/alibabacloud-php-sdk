<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\GetInstanceRecordConfigRequest;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\GetInstanceRecordConfigResponse;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListInstanceRecordsRequest;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListInstanceRecordsResponse;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListTerminalCommandsRequest;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListTerminalCommandsResponse;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponse;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\SetInstanceRecordConfigRequest;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\SetInstanceRecordConfigResponse;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ViewInstanceRecordsRequest;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ViewInstanceRecordsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ecsworkbench extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ecs-workbench', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 获取实例录屏配置.
     *
     * @param request - GetInstanceRecordConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceRecordConfigResponse
     *
     * @param GetInstanceRecordConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetInstanceRecordConfigResponse
     */
    public function getInstanceRecordConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInstanceRecordConfig',
            'version' => '2022-02-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceRecordConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例录屏配置.
     *
     * @param request - GetInstanceRecordConfigRequest
     *
     * @returns GetInstanceRecordConfigResponse
     *
     * @param GetInstanceRecordConfigRequest $request
     *
     * @return GetInstanceRecordConfigResponse
     */
    public function getInstanceRecordConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceRecordConfigWithOptions($request, $runtime);
    }

    /**
     * 获取实例录屏记录列表.
     *
     * @param request - ListInstanceRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceRecordsResponse
     *
     * @param ListInstanceRecordsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListInstanceRecordsResponse
     */
    public function listInstanceRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListInstanceRecords',
            'version' => '2022-02-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstanceRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例录屏记录列表.
     *
     * @param request - ListInstanceRecordsRequest
     *
     * @returns ListInstanceRecordsResponse
     *
     * @param ListInstanceRecordsRequest $request
     *
     * @return ListInstanceRecordsResponse
     */
    public function listInstanceRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceRecordsWithOptions($request, $runtime);
    }

    /**
     * 查看实例Workbench登录后执行命令的历史列表。
     *
     * @param request - ListTerminalCommandsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTerminalCommandsResponse
     *
     * @param ListTerminalCommandsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListTerminalCommandsResponse
     */
    public function listTerminalCommandsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->terminalSessionToken) {
            @$body['TerminalSessionToken'] = $request->terminalSessionToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTerminalCommands',
            'version' => '2022-02-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTerminalCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看实例Workbench登录后执行命令的历史列表。
     *
     * @param request - ListTerminalCommandsRequest
     *
     * @returns ListTerminalCommandsResponse
     *
     * @param ListTerminalCommandsRequest $request
     *
     * @return ListTerminalCommandsResponse
     */
    public function listTerminalCommands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTerminalCommandsWithOptions($request, $runtime);
    }

    /**
     * 登录实例.
     *
     * @param request - LoginInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LoginInstanceResponse
     *
     * @param LoginInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return LoginInstanceResponse
     */
    public function loginInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceLoginInfo) {
            @$query['InstanceLoginInfo'] = $request->instanceLoginInfo;
        }

        if (null !== $request->partnerInfo) {
            @$query['PartnerInfo'] = $request->partnerInfo;
        }

        if (null !== $request->userAccount) {
            @$query['UserAccount'] = $request->userAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LoginInstance',
            'version' => '2022-02-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LoginInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 登录实例.
     *
     * @param request - LoginInstanceRequest
     *
     * @returns LoginInstanceResponse
     *
     * @param LoginInstanceRequest $request
     *
     * @return LoginInstanceResponse
     */
    public function loginInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loginInstanceWithOptions($request, $runtime);
    }

    /**
     * 设置实例录屏配置.
     *
     * @param request - SetInstanceRecordConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetInstanceRecordConfigResponse
     *
     * @param SetInstanceRecordConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetInstanceRecordConfigResponse
     */
    public function setInstanceRecordConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->enabled) {
            @$body['Enabled'] = $request->enabled;
        }

        if (null !== $request->expirationDays) {
            @$body['ExpirationDays'] = $request->expirationDays;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->recordStorageTarget) {
            @$body['RecordStorageTarget'] = $request->recordStorageTarget;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetInstanceRecordConfig',
            'version' => '2022-02-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetInstanceRecordConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置实例录屏配置.
     *
     * @param request - SetInstanceRecordConfigRequest
     *
     * @returns SetInstanceRecordConfigResponse
     *
     * @param SetInstanceRecordConfigRequest $request
     *
     * @return SetInstanceRecordConfigResponse
     */
    public function setInstanceRecordConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstanceRecordConfigWithOptions($request, $runtime);
    }

    /**
     * 查看实例录屏内容.
     *
     * @param request - ViewInstanceRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ViewInstanceRecordsResponse
     *
     * @param ViewInstanceRecordsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ViewInstanceRecordsResponse
     */
    public function viewInstanceRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->terminalSessionToken) {
            @$body['TerminalSessionToken'] = $request->terminalSessionToken;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ViewInstanceRecords',
            'version' => '2022-02-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ViewInstanceRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看实例录屏内容.
     *
     * @param request - ViewInstanceRecordsRequest
     *
     * @returns ViewInstanceRecordsResponse
     *
     * @param ViewInstanceRecordsRequest $request
     *
     * @return ViewInstanceRecordsResponse
     */
    public function viewInstanceRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->viewInstanceRecordsWithOptions($request, $runtime);
    }
}
