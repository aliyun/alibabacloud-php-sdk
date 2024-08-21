<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\GetInstanceRecordConfigRequest;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\GetInstanceRecordConfigResponse;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListInstanceRecordsRequest;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListInstanceRecordsResponse;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceRequest;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponse;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\SetInstanceRecordConfigRequest;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\SetInstanceRecordConfigResponse;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ViewInstanceRecordsRequest;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ViewInstanceRecordsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 获取实例录屏配置
     *  *
     * @param GetInstanceRecordConfigRequest $request GetInstanceRecordConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceRecordConfigResponse GetInstanceRecordConfigResponse
     */
    public function getInstanceRecordConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceRecordConfig',
            'version'     => '2022-02-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceRecordConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例录屏配置
     *  *
     * @param GetInstanceRecordConfigRequest $request GetInstanceRecordConfigRequest
     *
     * @return GetInstanceRecordConfigResponse GetInstanceRecordConfigResponse
     */
    public function getInstanceRecordConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceRecordConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 获取实例录屏记录列表
     *  *
     * @param ListInstanceRecordsRequest $request ListInstanceRecordsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceRecordsResponse ListInstanceRecordsResponse
     */
    public function listInstanceRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceRecords',
            'version'     => '2022-02-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例录屏记录列表
     *  *
     * @param ListInstanceRecordsRequest $request ListInstanceRecordsRequest
     *
     * @return ListInstanceRecordsResponse ListInstanceRecordsResponse
     */
    public function listInstanceRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 登录实例
     *  *
     * @param LoginInstanceRequest $request LoginInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return LoginInstanceResponse LoginInstanceResponse
     */
    public function loginInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceLoginInfo)) {
            $query['InstanceLoginInfo'] = $request->instanceLoginInfo;
        }
        if (!Utils::isUnset($request->partnerInfo)) {
            $query['PartnerInfo'] = $request->partnerInfo;
        }
        if (!Utils::isUnset($request->userAccount)) {
            $query['UserAccount'] = $request->userAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LoginInstance',
            'version'     => '2022-02-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LoginInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 登录实例
     *  *
     * @param LoginInstanceRequest $request LoginInstanceRequest
     *
     * @return LoginInstanceResponse LoginInstanceResponse
     */
    public function loginInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loginInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 设置实例录屏配置
     *  *
     * @param SetInstanceRecordConfigRequest $request SetInstanceRecordConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetInstanceRecordConfigResponse SetInstanceRecordConfigResponse
     */
    public function setInstanceRecordConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enabled)) {
            $body['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->expirationDays)) {
            $body['ExpirationDays'] = $request->expirationDays;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->recordStorageTarget)) {
            $body['RecordStorageTarget'] = $request->recordStorageTarget;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetInstanceRecordConfig',
            'version'     => '2022-02-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetInstanceRecordConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置实例录屏配置
     *  *
     * @param SetInstanceRecordConfigRequest $request SetInstanceRecordConfigRequest
     *
     * @return SetInstanceRecordConfigResponse SetInstanceRecordConfigResponse
     */
    public function setInstanceRecordConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstanceRecordConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 查看实例录屏内容
     *  *
     * @param ViewInstanceRecordsRequest $request ViewInstanceRecordsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ViewInstanceRecordsResponse ViewInstanceRecordsResponse
     */
    public function viewInstanceRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->terminalSessionToken)) {
            $body['TerminalSessionToken'] = $request->terminalSessionToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ViewInstanceRecords',
            'version'     => '2022-02-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ViewInstanceRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看实例录屏内容
     *  *
     * @param ViewInstanceRecordsRequest $request ViewInstanceRecordsRequest
     *
     * @return ViewInstanceRecordsResponse ViewInstanceRecordsResponse
     */
    public function viewInstanceRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->viewInstanceRecordsWithOptions($request, $runtime);
    }
}
