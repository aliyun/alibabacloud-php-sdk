<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddTerminalRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddTerminalResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddTerminalsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\AddTerminalsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\BindAccountLessLoginUserRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\BindAccountLessLoginUserResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\BindPasswordFreeLoginUserRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\BindPasswordFreeLoginUserResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeDeviceSeatsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeDeviceSeatsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListTerminalRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListTerminalResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\SendOpsMessageToTerminalsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\SendOpsMessageToTerminalsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindAccountLessLoginUserRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindAccountLessLoginUserResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindDeviceSeatsRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindDeviceSeatsResponse;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindDeviceSeatsShrinkRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindPasswordFreeLoginUserRequest;
use AlibabaCloud\SDK\Wyota\V20210420\Models\UnbindPasswordFreeLoginUserResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Wyota extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('wyota', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 添加终端.
     *
     * @param request - AddTerminalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTerminalResponse
     *
     * @param AddTerminalRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddTerminalResponse
     */
    public function addTerminalWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['Alias'] = $request->alias;
        }

        if (null !== $request->clientType) {
            @$body['ClientType'] = $request->clientType;
        }

        if (null !== $request->mainBizType) {
            @$body['MainBizType'] = $request->mainBizType;
        }

        if (null !== $request->serialNumber) {
            @$body['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->terminalGroupId) {
            @$body['TerminalGroupId'] = $request->terminalGroupId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddTerminal',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加终端.
     *
     * @param request - AddTerminalRequest
     *
     * @returns AddTerminalResponse
     *
     * @param AddTerminalRequest $request
     *
     * @return AddTerminalResponse
     */
    public function addTerminal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTerminalWithOptions($request, $runtime);
    }

    /**
     * 添加终端.
     *
     * @param request - AddTerminalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTerminalsResponse
     *
     * @param AddTerminalsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AddTerminalsResponse
     */
    public function addTerminalsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        $bodyFlat = [];
        if (null !== $request->addTerminalParams) {
            @$bodyFlat['AddTerminalParams'] = $request->addTerminalParams;
        }

        if (null !== $request->mainBizType) {
            @$body['MainBizType'] = $request->mainBizType;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddTerminals',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTerminalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加终端.
     *
     * @param request - AddTerminalsRequest
     *
     * @returns AddTerminalsResponse
     *
     * @param AddTerminalsRequest $request
     *
     * @return AddTerminalsResponse
     */
    public function addTerminals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTerminalsWithOptions($request, $runtime);
    }

    /**
     * 绑定免账号登录用户.
     *
     * @param request - BindAccountLessLoginUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAccountLessLoginUserResponse
     *
     * @param BindAccountLessLoginUserRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BindAccountLessLoginUserResponse
     */
    public function bindAccountLessLoginUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->serialNumber) {
            @$body['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BindAccountLessLoginUser',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAccountLessLoginUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定免账号登录用户.
     *
     * @param request - BindAccountLessLoginUserRequest
     *
     * @returns BindAccountLessLoginUserResponse
     *
     * @param BindAccountLessLoginUserRequest $request
     *
     * @return BindAccountLessLoginUserResponse
     */
    public function bindAccountLessLoginUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAccountLessLoginUserWithOptions($request, $runtime);
    }

    /**
     * 绑定免账号登录用户.
     *
     * @param request - BindPasswordFreeLoginUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindPasswordFreeLoginUserResponse
     *
     * @param BindPasswordFreeLoginUserRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BindPasswordFreeLoginUserResponse
     */
    public function bindPasswordFreeLoginUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endUserId) {
            @$body['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->mainBizType) {
            @$body['MainBizType'] = $request->mainBizType;
        }

        if (null !== $request->serialNumber) {
            @$body['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BindPasswordFreeLoginUser',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindPasswordFreeLoginUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 绑定免账号登录用户.
     *
     * @param request - BindPasswordFreeLoginUserRequest
     *
     * @returns BindPasswordFreeLoginUserResponse
     *
     * @param BindPasswordFreeLoginUserRequest $request
     *
     * @return BindPasswordFreeLoginUserResponse
     */
    public function bindPasswordFreeLoginUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindPasswordFreeLoginUserWithOptions($request, $runtime);
    }

    /**
     * 查询设备座位.
     *
     * @param request - DescribeDeviceSeatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeviceSeatsResponse
     *
     * @param DescribeDeviceSeatsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDeviceSeatsResponse
     */
    public function describeDeviceSeatsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serialNo) {
            @$body['SerialNo'] = $request->serialNo;
        }

        if (null !== $request->serialNoList) {
            @$body['SerialNoList'] = $request->serialNoList;
        }

        if (null !== $request->siteId) {
            @$body['SiteId'] = $request->siteId;
        }

        if (null !== $request->tenantId) {
            @$body['TenantId'] = $request->tenantId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDeviceSeats',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'Anonymous',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeviceSeatsResponse::fromMap($this->doRPCRequest($params->action, $params->version, $params->protocol, $params->method, $params->authType, $params->bodyType, $req, $runtime));
    }

    /**
     * 查询设备座位.
     *
     * @param request - DescribeDeviceSeatsRequest
     *
     * @returns DescribeDeviceSeatsResponse
     *
     * @param DescribeDeviceSeatsRequest $request
     *
     * @return DescribeDeviceSeatsResponse
     */
    public function describeDeviceSeats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceSeatsWithOptions($request, $runtime);
    }

    /**
     * 查询终端列表.
     *
     * @param request - ListTerminalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTerminalResponse
     *
     * @param ListTerminalRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListTerminalResponse
     */
    public function listTerminalWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alias) {
            @$body['Alias'] = $request->alias;
        }

        if (null !== $request->buildId) {
            @$body['BuildId'] = $request->buildId;
        }

        if (null !== $request->clientType) {
            @$body['ClientType'] = $request->clientType;
        }

        if (null !== $request->inManage) {
            @$body['InManage'] = $request->inManage;
        }

        if (null !== $request->ipv4) {
            @$body['Ipv4'] = $request->ipv4;
        }

        if (null !== $request->locationInfo) {
            @$body['LocationInfo'] = $request->locationInfo;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->model) {
            @$body['Model'] = $request->model;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->searchKeyword) {
            @$body['SearchKeyword'] = $request->searchKeyword;
        }

        if (null !== $request->serialNumber) {
            @$body['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->terminalGroupId) {
            @$body['TerminalGroupId'] = $request->terminalGroupId;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTerminal',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTerminalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询终端列表.
     *
     * @param request - ListTerminalRequest
     *
     * @returns ListTerminalResponse
     *
     * @param ListTerminalRequest $request
     *
     * @return ListTerminalResponse
     */
    public function listTerminal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTerminalWithOptions($request, $runtime);
    }

    /**
     * 向终端发送运维命令.
     *
     * @param request - SendOpsMessageToTerminalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendOpsMessageToTerminalsResponse
     *
     * @param SendOpsMessageToTerminalsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SendOpsMessageToTerminalsResponse
     */
    public function sendOpsMessageToTerminalsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->delay) {
            @$query['Delay'] = $request->delay;
        }

        $body = [];
        if (null !== $request->msg) {
            @$body['Msg'] = $request->msg;
        }

        if (null !== $request->opsAction) {
            @$body['OpsAction'] = $request->opsAction;
        }

        $bodyFlat = [];
        if (null !== $request->uuids) {
            @$bodyFlat['Uuids'] = $request->uuids;
        }

        if (null !== $request->waitForAck) {
            @$body['WaitForAck'] = $request->waitForAck;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendOpsMessageToTerminals',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendOpsMessageToTerminalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 向终端发送运维命令.
     *
     * @param request - SendOpsMessageToTerminalsRequest
     *
     * @returns SendOpsMessageToTerminalsResponse
     *
     * @param SendOpsMessageToTerminalsRequest $request
     *
     * @return SendOpsMessageToTerminalsResponse
     */
    public function sendOpsMessageToTerminals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendOpsMessageToTerminalsWithOptions($request, $runtime);
    }

    /**
     * 解绑免账号登录用户.
     *
     * @param request - UnbindAccountLessLoginUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindAccountLessLoginUserResponse
     *
     * @param UnbindAccountLessLoginUserRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UnbindAccountLessLoginUserResponse
     */
    public function unbindAccountLessLoginUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->serialNumber) {
            @$body['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnbindAccountLessLoginUser',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindAccountLessLoginUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑免账号登录用户.
     *
     * @param request - UnbindAccountLessLoginUserRequest
     *
     * @returns UnbindAccountLessLoginUserResponse
     *
     * @param UnbindAccountLessLoginUserRequest $request
     *
     * @return UnbindAccountLessLoginUserResponse
     */
    public function unbindAccountLessLoginUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindAccountLessLoginUserWithOptions($request, $runtime);
    }

    /**
     * 解绑设备座位.
     *
     * @param tmpReq - UnbindDeviceSeatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindDeviceSeatsResponse
     *
     * @param UnbindDeviceSeatsRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return UnbindDeviceSeatsResponse
     */
    public function unbindDeviceSeatsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UnbindDeviceSeatsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->serialNoList) {
            $request->serialNoListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serialNoList, 'SerialNoList', 'json');
        }

        $body = [];
        if (null !== $request->serialNoListShrink) {
            @$body['SerialNoList'] = $request->serialNoListShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnbindDeviceSeats',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindDeviceSeatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑设备座位.
     *
     * @param request - UnbindDeviceSeatsRequest
     *
     * @returns UnbindDeviceSeatsResponse
     *
     * @param UnbindDeviceSeatsRequest $request
     *
     * @return UnbindDeviceSeatsResponse
     */
    public function unbindDeviceSeats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDeviceSeatsWithOptions($request, $runtime);
    }

    /**
     * 解绑免密登录用户.
     *
     * @param request - UnbindPasswordFreeLoginUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindPasswordFreeLoginUserResponse
     *
     * @param UnbindPasswordFreeLoginUserRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UnbindPasswordFreeLoginUserResponse
     */
    public function unbindPasswordFreeLoginUserWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->mainBizType) {
            @$body['MainBizType'] = $request->mainBizType;
        }

        if (null !== $request->serialNumber) {
            @$body['SerialNumber'] = $request->serialNumber;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnbindPasswordFreeLoginUser',
            'version' => '2021-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindPasswordFreeLoginUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑免密登录用户.
     *
     * @param request - UnbindPasswordFreeLoginUserRequest
     *
     * @returns UnbindPasswordFreeLoginUserResponse
     *
     * @param UnbindPasswordFreeLoginUserRequest $request
     *
     * @return UnbindPasswordFreeLoginUserResponse
     */
    public function unbindPasswordFreeLoginUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindPasswordFreeLoginUserWithOptions($request, $runtime);
    }
}
