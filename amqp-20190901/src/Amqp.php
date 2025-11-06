<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Amqp\V20190901\Models\BindRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\BindResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\CancelUserSettingRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\CancelUserSettingResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ConfigureUserSettingRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ConfigureUserSettingResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ConsoleClearPretendStatusRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ConsoleClearPretendStatusResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ConsoleSavePretendStatusRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ConsoleSavePretendStatusResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\CreateCloudMonitorSLRRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\CreateCloudMonitorSLRResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\CreateExchangeRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\CreateExchangeResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\CreateLogDeliverySLRRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\CreateLogDeliverySLRResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\CreateQueueRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\CreateQueueResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\CreateVhostRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\CreateVhostResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DashboardCheckServiceStatusRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DashboardCheckServiceStatusResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DashboardListRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DashboardListResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteExchangeRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteExchangeResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteExchangeShrinkRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteQueueRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteQueueResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteQueueShrinkRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteStaticAccountRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteStaticAccountResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteVhostRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteVhostResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DeleteVhostShrinkRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ExportRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ExportResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\FetchStaticAccountRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\FetchStaticAccountResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetAckInfoByIntervalRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetAckInfoByIntervalResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetAckInfoOfMessageRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetAckInfoOfMessageResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetBindingCountRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetBindingCountResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetBindingErrorByTaskIdRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetBindingErrorByTaskIdResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetCommonBuyUrlRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetCommonBuyUrlResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetConsumeTraceByQueueAndRocketMqMsgIdRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetConsumeTraceByQueueAndRocketMqMsgIdResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetExchangeErrorByTaskIdRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetExchangeErrorByTaskIdResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetExchangeRateRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetExchangeRateResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetExchangeRateShrinkRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetMsgIdListByQueueRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetMsgIdListByQueueResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetQueueConsumersRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetQueueConsumersResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetQueueErrorByTaskIdRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetQueueErrorByTaskIdResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetQueueRateRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetQueueRateResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetQueueRateShrinkRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetSendTraceByConnectionAndChannelAndDeliveryTagRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetSendTraceByConnectionAndChannelAndDeliveryTagResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetSendTraceByMsgIdRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetSendTraceByMsgIdResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetSendTraceByQueueRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetSendTraceByQueueResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetStatisticsByVhostRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetStatisticsByVhostResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetTaskByUidRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetTaskByUidResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetTpsByTimeRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetTpsByTimeResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetUserSettingRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetUserSettingResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetVhostErrorByTaskIdRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetVhostErrorByTaskIdResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetVhostRateRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetVhostRateResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetVhostRateShrinkRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ImportDefinitionAsynchronousRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ImportDefinitionAsynchronousResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\InstancePreivewRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\InstancePreivewResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListExchangeDownstreamBindingsRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListExchangeDownstreamBindingsResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListExchangeRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListExchangeResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListExchangeUpstreamBindingsRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListExchangeUpstreamBindingsResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceAlarmRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceAlarmResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListLogstoreRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListLogstoreResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListProjectRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListProjectResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListQueueRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListQueueResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListQueueUpstreamBindingsRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListQueueUpstreamBindingsResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListStaticAccountsRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListStaticAccountsResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListVhostRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListVhostResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\MetadataRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\MetadataResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\PurgeQueueRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\PurgeQueueResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\PurgeQueueShrinkRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\QueryMessageByMessageIdRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\QueryMessageByMessageIdResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\QueryMessageByQueueNameRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\QueryMessageByQueueNameResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\SendMessageCopyRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\SendMessageCopyResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\SendMessageRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\SendMessageResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\UnbindRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\UnbindResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\UpdateInstanceRetryStrategyRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\UpdateInstanceRetryStrategyResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\UpdateServerlessSwitchRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\UpdateServerlessSwitchResponse;
use AlibabaCloud\SDK\Amqp\V20190901\Models\UpgradeLimitsRequest;
use AlibabaCloud\SDK\Amqp\V20190901\Models\UpgradeLimitsResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Amqp extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('amqp', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 路由绑定.
     *
     * @param request - BindRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindResponse
     *
     * @param BindRequest    $request
     * @param RuntimeOptions $runtime
     *
     * @return BindResponse
     */
    public function bindWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->argument) {
            @$query['Argument'] = $request->argument;
        }

        if (null !== $request->bindingKey) {
            @$query['BindingKey'] = $request->bindingKey;
        }

        if (null !== $request->bindingType) {
            @$query['BindingType'] = $request->bindingType;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->dstName) {
            @$query['DstName'] = $request->dstName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->srcName) {
            @$query['SrcName'] = $request->srcName;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Bind',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 路由绑定.
     *
     * @param request - BindRequest
     *
     * @returns BindResponse
     *
     * @param BindRequest $request
     *
     * @return BindResponse
     */
    public function bind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindWithOptions($request, $runtime);
    }

    /**
     * 删除用户配置.
     *
     * @param request - CancelUserSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelUserSettingResponse
     *
     * @param CancelUserSettingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CancelUserSettingResponse
     */
    public function cancelUserSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelUserSetting',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelUserSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除用户配置.
     *
     * @param request - CancelUserSettingRequest
     *
     * @returns CancelUserSettingResponse
     *
     * @param CancelUserSettingRequest $request
     *
     * @return CancelUserSettingResponse
     */
    public function cancelUserSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelUserSettingWithOptions($request, $runtime);
    }

    /**
     * 新增用户配置.
     *
     * @param request - ConfigureUserSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigureUserSettingResponse
     *
     * @param ConfigureUserSettingRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ConfigureUserSettingResponse
     */
    public function configureUserSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->logstore) {
            @$query['Logstore'] = $request->logstore;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->putType) {
            @$query['PutType'] = $request->putType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigureUserSetting',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigureUserSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增用户配置.
     *
     * @param request - ConfigureUserSettingRequest
     *
     * @returns ConfigureUserSettingResponse
     *
     * @param ConfigureUserSettingRequest $request
     *
     * @return ConfigureUserSettingResponse
     */
    public function configureUserSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureUserSettingWithOptions($request, $runtime);
    }

    /**
     * 清除售后视角状态
     *
     * @param request - ConsoleClearPretendStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConsoleClearPretendStatusResponse
     *
     * @param ConsoleClearPretendStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ConsoleClearPretendStatusResponse
     */
    public function consoleClearPretendStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConsoleClearPretendStatus',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConsoleClearPretendStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 清除售后视角状态
     *
     * @param request - ConsoleClearPretendStatusRequest
     *
     * @returns ConsoleClearPretendStatusResponse
     *
     * @param ConsoleClearPretendStatusRequest $request
     *
     * @return ConsoleClearPretendStatusResponse
     */
    public function consoleClearPretendStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->consoleClearPretendStatusWithOptions($request, $runtime);
    }

    /**
     * 保存售后视角状态
     *
     * @param request - ConsoleSavePretendStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConsoleSavePretendStatusResponse
     *
     * @param ConsoleSavePretendStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ConsoleSavePretendStatusResponse
     */
    public function consoleSavePretendStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->key) {
            @$query['Key'] = $request->key;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConsoleSavePretendStatus',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConsoleSavePretendStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 保存售后视角状态
     *
     * @param request - ConsoleSavePretendStatusRequest
     *
     * @returns ConsoleSavePretendStatusResponse
     *
     * @param ConsoleSavePretendStatusRequest $request
     *
     * @return ConsoleSavePretendStatusResponse
     */
    public function consoleSavePretendStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->consoleSavePretendStatusWithOptions($request, $runtime);
    }

    /**
     * 创建云监控相关角色.
     *
     * @param request - CreateCloudMonitorSLRRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudMonitorSLRResponse
     *
     * @param CreateCloudMonitorSLRRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCloudMonitorSLRResponse
     */
    public function createCloudMonitorSLRWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCloudMonitorSLR',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudMonitorSLRResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建云监控相关角色.
     *
     * @param request - CreateCloudMonitorSLRRequest
     *
     * @returns CreateCloudMonitorSLRResponse
     *
     * @param CreateCloudMonitorSLRRequest $request
     *
     * @return CreateCloudMonitorSLRResponse
     */
    public function createCloudMonitorSLR($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudMonitorSLRWithOptions($request, $runtime);
    }

    /**
     * 创建Exchange.
     *
     * @param request - CreateExchangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateExchangeResponse
     *
     * @param CreateExchangeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateExchangeResponse
     */
    public function createExchangeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alternateExchange) {
            @$query['AlternateExchange'] = $request->alternateExchange;
        }

        if (null !== $request->autoDelete) {
            @$query['AutoDelete'] = $request->autoDelete;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->exchangeName) {
            @$query['ExchangeName'] = $request->exchangeName;
        }

        if (null !== $request->exchangeType) {
            @$query['ExchangeType'] = $request->exchangeType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->internal) {
            @$query['Internal'] = $request->internal;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        if (null !== $request->XDelayedType) {
            @$query['XDelayedType'] = $request->XDelayedType;
        }

        if (null !== $request->XHashHeader) {
            @$query['XHashHeader'] = $request->XHashHeader;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateExchange',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateExchangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Exchange.
     *
     * @param request - CreateExchangeRequest
     *
     * @returns CreateExchangeResponse
     *
     * @param CreateExchangeRequest $request
     *
     * @return CreateExchangeResponse
     */
    public function createExchange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createExchangeWithOptions($request, $runtime);
    }

    /**
     * 创建日志相关角色.
     *
     * @param request - CreateLogDeliverySLRRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLogDeliverySLRResponse
     *
     * @param CreateLogDeliverySLRRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateLogDeliverySLRResponse
     */
    public function createLogDeliverySLRWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLogDeliverySLR',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLogDeliverySLRResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建日志相关角色.
     *
     * @param request - CreateLogDeliverySLRRequest
     *
     * @returns CreateLogDeliverySLRResponse
     *
     * @param CreateLogDeliverySLRRequest $request
     *
     * @return CreateLogDeliverySLRResponse
     */
    public function createLogDeliverySLR($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLogDeliverySLRWithOptions($request, $runtime);
    }

    /**
     * 创建队列.
     *
     * @param request - CreateQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQueueResponse
     *
     * @param CreateQueueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateQueueResponse
     */
    public function createQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoDelete) {
            @$query['AutoDelete'] = $request->autoDelete;
        }

        if (null !== $request->autoExpire) {
            @$query['AutoExpire'] = $request->autoExpire;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->deadLetterExchange) {
            @$query['DeadLetterExchange'] = $request->deadLetterExchange;
        }

        if (null !== $request->deadLetterRoutingKey) {
            @$query['DeadLetterRoutingKey'] = $request->deadLetterRoutingKey;
        }

        if (null !== $request->exclusive) {
            @$query['Exclusive'] = $request->exclusive;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxLength) {
            @$query['MaxLength'] = $request->maxLength;
        }

        if (null !== $request->maximunPrioty) {
            @$query['MaximunPrioty'] = $request->maximunPrioty;
        }

        if (null !== $request->messageTTL) {
            @$query['MessageTTL'] = $request->messageTTL;
        }

        if (null !== $request->ordered) {
            @$query['Ordered'] = $request->ordered;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->retryInherit) {
            @$query['RetryInherit'] = $request->retryInherit;
        }

        if (null !== $request->retryInterval) {
            @$query['RetryInterval'] = $request->retryInterval;
        }

        if (null !== $request->retryTimes) {
            @$query['RetryTimes'] = $request->retryTimes;
        }

        if (null !== $request->singleActiveConsumer) {
            @$query['SingleActiveConsumer'] = $request->singleActiveConsumer;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateQueue',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建队列.
     *
     * @param request - CreateQueueRequest
     *
     * @returns CreateQueueResponse
     *
     * @param CreateQueueRequest $request
     *
     * @return CreateQueueResponse
     */
    public function createQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQueueWithOptions($request, $runtime);
    }

    /**
     * 创建Vhost.
     *
     * @param request - CreateVhostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVhostResponse
     *
     * @param CreateVhostRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateVhostResponse
     */
    public function createVhostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVhost',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVhostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建Vhost.
     *
     * @param request - CreateVhostRequest
     *
     * @returns CreateVhostResponse
     *
     * @param CreateVhostRequest $request
     *
     * @return CreateVhostResponse
     */
    public function createVhost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVhostWithOptions($request, $runtime);
    }

    /**
     * prometheus Dashboard 检查相关服务开通状态
     *
     * @param request - DashboardCheckServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DashboardCheckServiceStatusResponse
     *
     * @param DashboardCheckServiceStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DashboardCheckServiceStatusResponse
     */
    public function dashboardCheckServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DashboardCheckServiceStatus',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DashboardCheckServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * prometheus Dashboard 检查相关服务开通状态
     *
     * @param request - DashboardCheckServiceStatusRequest
     *
     * @returns DashboardCheckServiceStatusResponse
     *
     * @param DashboardCheckServiceStatusRequest $request
     *
     * @return DashboardCheckServiceStatusResponse
     */
    public function dashboardCheckServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dashboardCheckServiceStatusWithOptions($request, $runtime);
    }

    /**
     * 获取 arms grafana 大盘 http url.
     *
     * @param request - DashboardListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DashboardListResponse
     *
     * @param DashboardListRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DashboardListResponse
     */
    public function dashboardListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->dashboardName) {
            @$query['DashboardName'] = $request->dashboardName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DashboardList',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DashboardListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取 arms grafana 大盘 http url.
     *
     * @param request - DashboardListRequest
     *
     * @returns DashboardListResponse
     *
     * @param DashboardListRequest $request
     *
     * @return DashboardListResponse
     */
    public function dashboardList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dashboardListWithOptions($request, $runtime);
    }

    /**
     * 删除Exchange.
     *
     * @param tmpReq - DeleteExchangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExchangeResponse
     *
     * @param DeleteExchangeRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteExchangeResponse
     */
    public function deleteExchangeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteExchangeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->exchangeNames) {
            $request->exchangeNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->exchangeNames, 'ExchangeNames', 'json');
        }

        $query = [];
        if (null !== $request->collina) {
            @$query['Collina'] = $request->collina;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->exchangeName) {
            @$query['ExchangeName'] = $request->exchangeName;
        }

        if (null !== $request->exchangeNamesShrink) {
            @$query['ExchangeNames'] = $request->exchangeNamesShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->umidToken) {
            @$query['UmidToken'] = $request->umidToken;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteExchange',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteExchangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Exchange.
     *
     * @param request - DeleteExchangeRequest
     *
     * @returns DeleteExchangeResponse
     *
     * @param DeleteExchangeRequest $request
     *
     * @return DeleteExchangeResponse
     */
    public function deleteExchange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExchangeWithOptions($request, $runtime);
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除实例.
     *
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * 删除队列.
     *
     * @param tmpReq - DeleteQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQueueResponse
     *
     * @param DeleteQueueRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteQueueResponse
     */
    public function deleteQueueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteQueueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queueNames) {
            $request->queueNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queueNames, 'QueueNames', 'json');
        }

        $query = [];
        if (null !== $request->collina) {
            @$query['Collina'] = $request->collina;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->queueNamesShrink) {
            @$query['QueueNames'] = $request->queueNamesShrink;
        }

        if (null !== $request->umidToken) {
            @$query['UmidToken'] = $request->umidToken;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteQueue',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除队列.
     *
     * @param request - DeleteQueueRequest
     *
     * @returns DeleteQueueResponse
     *
     * @param DeleteQueueRequest $request
     *
     * @return DeleteQueueResponse
     */
    public function deleteQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQueueWithOptions($request, $runtime);
    }

    /**
     * 删除静态账户.
     *
     * @param request - DeleteStaticAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStaticAccountResponse
     *
     * @param DeleteStaticAccountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteStaticAccountResponse
     */
    public function deleteStaticAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->createTimeStamp) {
            @$query['CreateTimeStamp'] = $request->createTimeStamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStaticAccount',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStaticAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除静态账户.
     *
     * @param request - DeleteStaticAccountRequest
     *
     * @returns DeleteStaticAccountResponse
     *
     * @param DeleteStaticAccountRequest $request
     *
     * @return DeleteStaticAccountResponse
     */
    public function deleteStaticAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStaticAccountWithOptions($request, $runtime);
    }

    /**
     * 删除Vhost.
     *
     * @param tmpReq - DeleteVhostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVhostResponse
     *
     * @param DeleteVhostRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteVhostResponse
     */
    public function deleteVhostWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteVhostShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->vhostNames) {
            $request->vhostNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vhostNames, 'VhostNames', 'json');
        }

        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        if (null !== $request->vhostNamesShrink) {
            @$query['VhostNames'] = $request->vhostNamesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVhost',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVhostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除Vhost.
     *
     * @param request - DeleteVhostRequest
     *
     * @returns DeleteVhostResponse
     *
     * @param DeleteVhostRequest $request
     *
     * @return DeleteVhostResponse
     */
    public function deleteVhost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVhostWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * 导出元数据.
     *
     * @param request - ExportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportResponse
     *
     * @param ExportRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return ExportResponse
     */
    public function exportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->exportType) {
            @$query['ExportType'] = $request->exportType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Export',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导出元数据.
     *
     * @param request - ExportRequest
     *
     * @returns ExportResponse
     *
     * @param ExportRequest $request
     *
     * @return ExportResponse
     */
    public function export($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportWithOptions($request, $runtime);
    }

    /**
     * 更新静态账户.
     *
     * @param request - FetchStaticAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FetchStaticAccountResponse
     *
     * @param FetchStaticAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return FetchStaticAccountResponse
     */
    public function fetchStaticAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountAccessKey) {
            @$query['AccountAccessKey'] = $request->accountAccessKey;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->createTimeStamp) {
            @$query['CreateTimeStamp'] = $request->createTimeStamp;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->SKey) {
            @$query['SKey'] = $request->SKey;
        }

        if (null !== $request->secretSign) {
            @$query['SecretSign'] = $request->secretSign;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FetchStaticAccount',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FetchStaticAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新静态账户.
     *
     * @param request - FetchStaticAccountRequest
     *
     * @returns FetchStaticAccountResponse
     *
     * @param FetchStaticAccountRequest $request
     *
     * @return FetchStaticAccountResponse
     */
    public function fetchStaticAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchStaticAccountWithOptions($request, $runtime);
    }

    /**
     * 根据耗时查询ack信息.
     *
     * @param request - GetAckInfoByIntervalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAckInfoByIntervalResponse
     *
     * @param GetAckInfoByIntervalRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAckInfoByIntervalResponse
     */
    public function getAckInfoByIntervalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->intervalSec) {
            @$query['IntervalSec'] = $request->intervalSec;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAckInfoByInterval',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAckInfoByIntervalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据耗时查询ack信息.
     *
     * @param request - GetAckInfoByIntervalRequest
     *
     * @returns GetAckInfoByIntervalResponse
     *
     * @param GetAckInfoByIntervalRequest $request
     *
     * @return GetAckInfoByIntervalResponse
     */
    public function getAckInfoByInterval($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAckInfoByIntervalWithOptions($request, $runtime);
    }

    /**
     * 获取一个PushMessage（PullMessage）对应的Ack行为.
     *
     * @param request - GetAckInfoOfMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAckInfoOfMessageResponse
     *
     * @param GetAckInfoOfMessageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetAckInfoOfMessageResponse
     */
    public function getAckInfoOfMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->consumeStatus) {
            @$query['ConsumeStatus'] = $request->consumeStatus;
        }

        if (null !== $request->deliveryTag) {
            @$query['DeliveryTag'] = $request->deliveryTag;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->msgId) {
            @$query['MsgId'] = $request->msgId;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeStamp) {
            @$query['TimeStamp'] = $request->timeStamp;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAckInfoOfMessage',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAckInfoOfMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取一个PushMessage（PullMessage）对应的Ack行为.
     *
     * @param request - GetAckInfoOfMessageRequest
     *
     * @returns GetAckInfoOfMessageResponse
     *
     * @param GetAckInfoOfMessageRequest $request
     *
     * @return GetAckInfoOfMessageResponse
     */
    public function getAckInfoOfMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAckInfoOfMessageWithOptions($request, $runtime);
    }

    /**
     * 获取绑定数量.
     *
     * @param request - GetBindingCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBindingCountResponse
     *
     * @param GetBindingCountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetBindingCountResponse
     */
    public function getBindingCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindingType) {
            @$query['BindingType'] = $request->bindingType;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resourceName) {
            @$query['ResourceName'] = $request->resourceName;
        }

        if (null !== $request->upstream) {
            @$query['Upstream'] = $request->upstream;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBindingCount',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBindingCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取绑定数量.
     *
     * @param request - GetBindingCountRequest
     *
     * @returns GetBindingCountResponse
     *
     * @param GetBindingCountRequest $request
     *
     * @return GetBindingCountResponse
     */
    public function getBindingCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBindingCountWithOptions($request, $runtime);
    }

    /**
     * 获取绑定错误.
     *
     * @param request - GetBindingErrorByTaskIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBindingErrorByTaskIdResponse
     *
     * @param GetBindingErrorByTaskIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetBindingErrorByTaskIdResponse
     */
    public function getBindingErrorByTaskIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBindingErrorByTaskId',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBindingErrorByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取绑定错误.
     *
     * @param request - GetBindingErrorByTaskIdRequest
     *
     * @returns GetBindingErrorByTaskIdResponse
     *
     * @param GetBindingErrorByTaskIdRequest $request
     *
     * @return GetBindingErrorByTaskIdResponse
     */
    public function getBindingErrorByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBindingErrorByTaskIdWithOptions($request, $runtime);
    }

    /**
     * @param request - GetCommonBuyUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCommonBuyUrlResponse
     *
     * @param GetCommonBuyUrlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCommonBuyUrlResponse
     */
    public function getCommonBuyUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionType) {
            @$query['ActionType'] = $request->actionType;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCommonBuyUrl',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCommonBuyUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetCommonBuyUrlRequest
     *
     * @returns GetCommonBuyUrlResponse
     *
     * @param GetCommonBuyUrlRequest $request
     *
     * @return GetCommonBuyUrlResponse
     */
    public function getCommonBuyUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCommonBuyUrlWithOptions($request, $runtime);
    }

    /**
     * 通过rocketMqMsgId查询消息消费轨迹.
     *
     * @param request - GetConsumeTraceByQueueAndRocketMqMsgIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConsumeTraceByQueueAndRocketMqMsgIdResponse
     *
     * @param GetConsumeTraceByQueueAndRocketMqMsgIdRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetConsumeTraceByQueueAndRocketMqMsgIdResponse
     */
    public function getConsumeTraceByQueueAndRocketMqMsgIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->msgId) {
            @$query['MsgId'] = $request->msgId;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConsumeTraceByQueueAndRocketMqMsgId',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConsumeTraceByQueueAndRocketMqMsgIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过rocketMqMsgId查询消息消费轨迹.
     *
     * @param request - GetConsumeTraceByQueueAndRocketMqMsgIdRequest
     *
     * @returns GetConsumeTraceByQueueAndRocketMqMsgIdResponse
     *
     * @param GetConsumeTraceByQueueAndRocketMqMsgIdRequest $request
     *
     * @return GetConsumeTraceByQueueAndRocketMqMsgIdResponse
     */
    public function getConsumeTraceByQueueAndRocketMqMsgId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConsumeTraceByQueueAndRocketMqMsgIdWithOptions($request, $runtime);
    }

    /**
     * 获取Exchange错误.
     *
     * @param request - GetExchangeErrorByTaskIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExchangeErrorByTaskIdResponse
     *
     * @param GetExchangeErrorByTaskIdRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetExchangeErrorByTaskIdResponse
     */
    public function getExchangeErrorByTaskIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExchangeErrorByTaskId',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExchangeErrorByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Exchange错误.
     *
     * @param request - GetExchangeErrorByTaskIdRequest
     *
     * @returns GetExchangeErrorByTaskIdResponse
     *
     * @param GetExchangeErrorByTaskIdRequest $request
     *
     * @return GetExchangeErrorByTaskIdResponse
     */
    public function getExchangeErrorByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExchangeErrorByTaskIdWithOptions($request, $runtime);
    }

    /**
     * 获取Exchange Rate.
     *
     * @param tmpReq - GetExchangeRateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetExchangeRateResponse
     *
     * @param GetExchangeRateRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return GetExchangeRateResponse
     */
    public function getExchangeRateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetExchangeRateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->exchangeNames) {
            $request->exchangeNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->exchangeNames, 'ExchangeNames', 'json');
        }

        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->exchangeNamesShrink) {
            @$query['ExchangeNames'] = $request->exchangeNamesShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetExchangeRate',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetExchangeRateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Exchange Rate.
     *
     * @param request - GetExchangeRateRequest
     *
     * @returns GetExchangeRateResponse
     *
     * @param GetExchangeRateRequest $request
     *
     * @return GetExchangeRateResponse
     */
    public function getExchangeRate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getExchangeRateWithOptions($request, $runtime);
    }

    /**
     * 通过queueName查询一段时间内的消息id列表.
     *
     * @param request - GetMsgIdListByQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMsgIdListByQueueResponse
     *
     * @param GetMsgIdListByQueueRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMsgIdListByQueueResponse
     */
    public function getMsgIdListByQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMsgIdListByQueue',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMsgIdListByQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过queueName查询一段时间内的消息id列表.
     *
     * @param request - GetMsgIdListByQueueRequest
     *
     * @returns GetMsgIdListByQueueResponse
     *
     * @param GetMsgIdListByQueueRequest $request
     *
     * @return GetMsgIdListByQueueResponse
     */
    public function getMsgIdListByQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMsgIdListByQueueWithOptions($request, $runtime);
    }

    /**
     * GetQueueConsumers.
     *
     * @param request - GetQueueConsumersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueueConsumersResponse
     *
     * @param GetQueueConsumersRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetQueueConsumersResponse
     */
    public function getQueueConsumersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueueConsumers',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueueConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetQueueConsumers.
     *
     * @param request - GetQueueConsumersRequest
     *
     * @returns GetQueueConsumersResponse
     *
     * @param GetQueueConsumersRequest $request
     *
     * @return GetQueueConsumersResponse
     */
    public function getQueueConsumers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueueConsumersWithOptions($request, $runtime);
    }

    /**
     * 获取队列错误.
     *
     * @param request - GetQueueErrorByTaskIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueueErrorByTaskIdResponse
     *
     * @param GetQueueErrorByTaskIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetQueueErrorByTaskIdResponse
     */
    public function getQueueErrorByTaskIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueueErrorByTaskId',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueueErrorByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取队列错误.
     *
     * @param request - GetQueueErrorByTaskIdRequest
     *
     * @returns GetQueueErrorByTaskIdResponse
     *
     * @param GetQueueErrorByTaskIdRequest $request
     *
     * @return GetQueueErrorByTaskIdResponse
     */
    public function getQueueErrorByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueueErrorByTaskIdWithOptions($request, $runtime);
    }

    /**
     * 获取Queue Rate.
     *
     * @param tmpReq - GetQueueRateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueueRateResponse
     *
     * @param GetQueueRateRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return GetQueueRateResponse
     */
    public function getQueueRateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetQueueRateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queueNames) {
            $request->queueNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queueNames, 'QueueNames', 'json');
        }

        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->queueNamesShrink) {
            @$query['QueueNames'] = $request->queueNamesShrink;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueueRate',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueueRateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Queue Rate.
     *
     * @param request - GetQueueRateRequest
     *
     * @returns GetQueueRateResponse
     *
     * @param GetQueueRateRequest $request
     *
     * @return GetQueueRateResponse
     */
    public function getQueueRate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueueRateWithOptions($request, $runtime);
    }

    /**
     * 根据connectionId,channelId,deliveryTag查询SendMessage.
     *
     * @param request - GetSendTraceByConnectionAndChannelAndDeliveryTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSendTraceByConnectionAndChannelAndDeliveryTagResponse
     *
     * @param GetSendTraceByConnectionAndChannelAndDeliveryTagRequest $request
     * @param RuntimeOptions                                          $runtime
     *
     * @return GetSendTraceByConnectionAndChannelAndDeliveryTagResponse
     */
    public function getSendTraceByConnectionAndChannelAndDeliveryTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$query['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->deliveryTag) {
            @$query['DeliveryTag'] = $request->deliveryTag;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSendTraceByConnectionAndChannelAndDeliveryTag',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSendTraceByConnectionAndChannelAndDeliveryTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据connectionId,channelId,deliveryTag查询SendMessage.
     *
     * @param request - GetSendTraceByConnectionAndChannelAndDeliveryTagRequest
     *
     * @returns GetSendTraceByConnectionAndChannelAndDeliveryTagResponse
     *
     * @param GetSendTraceByConnectionAndChannelAndDeliveryTagRequest $request
     *
     * @return GetSendTraceByConnectionAndChannelAndDeliveryTagResponse
     */
    public function getSendTraceByConnectionAndChannelAndDeliveryTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSendTraceByConnectionAndChannelAndDeliveryTagWithOptions($request, $runtime);
    }

    /**
     * 通过用户msgId查询消息发送轨迹.
     *
     * @param request - GetSendTraceByMsgIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSendTraceByMsgIdResponse
     *
     * @param GetSendTraceByMsgIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSendTraceByMsgIdResponse
     */
    public function getSendTraceByMsgIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->msgId) {
            @$query['MsgId'] = $request->msgId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSendTraceByMsgId',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSendTraceByMsgIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 通过用户msgId查询消息发送轨迹.
     *
     * @param request - GetSendTraceByMsgIdRequest
     *
     * @returns GetSendTraceByMsgIdResponse
     *
     * @param GetSendTraceByMsgIdRequest $request
     *
     * @return GetSendTraceByMsgIdResponse
     */
    public function getSendTraceByMsgId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSendTraceByMsgIdWithOptions($request, $runtime);
    }

    /**
     * 根据queue 查询SendMessage.
     *
     * @param request - GetSendTraceByQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSendTraceByQueueResponse
     *
     * @param GetSendTraceByQueueRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetSendTraceByQueueResponse
     */
    public function getSendTraceByQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSendTraceByQueue',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSendTraceByQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据queue 查询SendMessage.
     *
     * @param request - GetSendTraceByQueueRequest
     *
     * @returns GetSendTraceByQueueResponse
     *
     * @param GetSendTraceByQueueRequest $request
     *
     * @return GetSendTraceByQueueResponse
     */
    public function getSendTraceByQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSendTraceByQueueWithOptions($request, $runtime);
    }

    /**
     * GetStatisticsByVhost.
     *
     * @param request - GetStatisticsByVhostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStatisticsByVhostResponse
     *
     * @param GetStatisticsByVhostRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetStatisticsByVhostResponse
     */
    public function getStatisticsByVhostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetStatisticsByVhost',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStatisticsByVhostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetStatisticsByVhost.
     *
     * @param request - GetStatisticsByVhostRequest
     *
     * @returns GetStatisticsByVhostResponse
     *
     * @param GetStatisticsByVhostRequest $request
     *
     * @return GetStatisticsByVhostResponse
     */
    public function getStatisticsByVhost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStatisticsByVhostWithOptions($request, $runtime);
    }

    /**
     * 获取任务
     *
     * @param request - GetTaskByUidRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskByUidResponse
     *
     * @param GetTaskByUidRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetTaskByUidResponse
     */
    public function getTaskByUidWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTaskByUid',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTaskByUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务
     *
     * @param request - GetTaskByUidRequest
     *
     * @returns GetTaskByUidResponse
     *
     * @param GetTaskByUidRequest $request
     *
     * @return GetTaskByUidResponse
     */
    public function getTaskByUid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskByUidWithOptions($request, $runtime);
    }

    /**
     * 查询一段时间内某个实例或是vhost或是queue的tps.
     *
     * @param request - GetTpsByTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTpsByTimeResponse
     *
     * @param GetTpsByTimeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetTpsByTimeResponse
     */
    public function getTpsByTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->api) {
            @$query['Api'] = $request->api;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTpsByTime',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTpsByTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询一段时间内某个实例或是vhost或是queue的tps.
     *
     * @param request - GetTpsByTimeRequest
     *
     * @returns GetTpsByTimeResponse
     *
     * @param GetTpsByTimeRequest $request
     *
     * @return GetTpsByTimeResponse
     */
    public function getTpsByTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTpsByTimeWithOptions($request, $runtime);
    }

    /**
     * 获取用户配置.
     *
     * @param request - GetUserSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserSettingResponse
     *
     * @param GetUserSettingRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetUserSettingResponse
     */
    public function getUserSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserSetting',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetUserSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户配置.
     *
     * @param request - GetUserSettingRequest
     *
     * @returns GetUserSettingResponse
     *
     * @param GetUserSettingRequest $request
     *
     * @return GetUserSettingResponse
     */
    public function getUserSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUserSettingWithOptions($request, $runtime);
    }

    /**
     * 获取Vhost错误.
     *
     * @param request - GetVhostErrorByTaskIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVhostErrorByTaskIdResponse
     *
     * @param GetVhostErrorByTaskIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetVhostErrorByTaskIdResponse
     */
    public function getVhostErrorByTaskIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVhostErrorByTaskId',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVhostErrorByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Vhost错误.
     *
     * @param request - GetVhostErrorByTaskIdRequest
     *
     * @returns GetVhostErrorByTaskIdResponse
     *
     * @param GetVhostErrorByTaskIdRequest $request
     *
     * @return GetVhostErrorByTaskIdResponse
     */
    public function getVhostErrorByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVhostErrorByTaskIdWithOptions($request, $runtime);
    }

    /**
     * 获取Vhost Rate.
     *
     * @param tmpReq - GetVhostRateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVhostRateResponse
     *
     * @param GetVhostRateRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return GetVhostRateResponse
     */
    public function getVhostRateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetVhostRateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->vhostNames) {
            $request->vhostNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vhostNames, 'VhostNames', 'json');
        }

        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->vhostNamesShrink) {
            @$query['VhostNames'] = $request->vhostNamesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVhostRate',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVhostRateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Vhost Rate.
     *
     * @param request - GetVhostRateRequest
     *
     * @returns GetVhostRateResponse
     *
     * @param GetVhostRateRequest $request
     *
     * @return GetVhostRateResponse
     */
    public function getVhostRate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVhostRateWithOptions($request, $runtime);
    }

    /**
     * 异步导入元数据.
     *
     * @param request - ImportDefinitionAsynchronousRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportDefinitionAsynchronousResponse
     *
     * @param ImportDefinitionAsynchronousRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ImportDefinitionAsynchronousResponse
     */
    public function importDefinitionAsynchronousWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->importType) {
            @$query['ImportType'] = $request->importType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->ossUrl) {
            @$query['OssUrl'] = $request->ossUrl;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportDefinitionAsynchronous',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportDefinitionAsynchronousResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 异步导入元数据.
     *
     * @param request - ImportDefinitionAsynchronousRequest
     *
     * @returns ImportDefinitionAsynchronousResponse
     *
     * @param ImportDefinitionAsynchronousRequest $request
     *
     * @return ImportDefinitionAsynchronousResponse
     */
    public function importDefinitionAsynchronous($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDefinitionAsynchronousWithOptions($request, $runtime);
    }

    /**
     * 获取实例列表.
     *
     * @param request - InstancePreivewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstancePreivewResponse
     *
     * @param InstancePreivewRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InstancePreivewResponse
     */
    public function instancePreivewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InstancePreivew',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InstancePreivewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例列表.
     *
     * @param request - InstancePreivewRequest
     *
     * @returns InstancePreivewResponse
     *
     * @param InstancePreivewRequest $request
     *
     * @return InstancePreivewResponse
     */
    public function instancePreivew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->instancePreivewWithOptions($request, $runtime);
    }

    /**
     * 获取Exchange列表.
     *
     * @param request - ListExchangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExchangeResponse
     *
     * @param ListExchangeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListExchangeResponse
     */
    public function listExchangeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->exchangeNamePrefix) {
            @$query['ExchangeNamePrefix'] = $request->exchangeNamePrefix;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExchange',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExchangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Exchange列表.
     *
     * @param request - ListExchangeRequest
     *
     * @returns ListExchangeResponse
     *
     * @param ListExchangeRequest $request
     *
     * @return ListExchangeResponse
     */
    public function listExchange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExchangeWithOptions($request, $runtime);
    }

    /**
     * 获取Exchange下游列表.
     *
     * @param request - ListExchangeDownstreamBindingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExchangeDownstreamBindingsResponse
     *
     * @param ListExchangeDownstreamBindingsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListExchangeDownstreamBindingsResponse
     */
    public function listExchangeDownstreamBindingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->exchangeName) {
            @$query['ExchangeName'] = $request->exchangeName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExchangeDownstreamBindings',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExchangeDownstreamBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Exchange下游列表.
     *
     * @param request - ListExchangeDownstreamBindingsRequest
     *
     * @returns ListExchangeDownstreamBindingsResponse
     *
     * @param ListExchangeDownstreamBindingsRequest $request
     *
     * @return ListExchangeDownstreamBindingsResponse
     */
    public function listExchangeDownstreamBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExchangeDownstreamBindingsWithOptions($request, $runtime);
    }

    /**
     * 获取Exchange上游绑定列表.
     *
     * @param request - ListExchangeUpstreamBindingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExchangeUpstreamBindingsResponse
     *
     * @param ListExchangeUpstreamBindingsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListExchangeUpstreamBindingsResponse
     */
    public function listExchangeUpstreamBindingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->exchangeName) {
            @$query['ExchangeName'] = $request->exchangeName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExchangeUpstreamBindings',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExchangeUpstreamBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Exchange上游绑定列表.
     *
     * @param request - ListExchangeUpstreamBindingsRequest
     *
     * @returns ListExchangeUpstreamBindingsResponse
     *
     * @param ListExchangeUpstreamBindingsRequest $request
     *
     * @return ListExchangeUpstreamBindingsResponse
     */
    public function listExchangeUpstreamBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExchangeUpstreamBindingsWithOptions($request, $runtime);
    }

    /**
     * 获取实例列表.
     *
     * @param request - ListInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceResponse
     *
     * @param ListInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstance',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例列表.
     *
     * @param request - ListInstanceRequest
     *
     * @returns ListInstanceResponse
     *
     * @param ListInstanceRequest $request
     *
     * @return ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceWithOptions($request, $runtime);
    }

    /**
     * 获取实例告警.
     *
     * @param request - ListInstanceAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceAlarmResponse
     *
     * @param ListInstanceAlarmRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListInstanceAlarmResponse
     */
    public function listInstanceAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceAlarm',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstanceAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例告警.
     *
     * @param request - ListInstanceAlarmRequest
     *
     * @returns ListInstanceAlarmResponse
     *
     * @param ListInstanceAlarmRequest $request
     *
     * @return ListInstanceAlarmResponse
     */
    public function listInstanceAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceAlarmWithOptions($request, $runtime);
    }

    /**
     * 获取日志Logstore.
     *
     * @param request - ListLogstoreRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLogstoreResponse
     *
     * @param ListLogstoreRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListLogstoreResponse
     */
    public function listLogstoreWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLogstore',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLogstoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取日志Logstore.
     *
     * @param request - ListLogstoreRequest
     *
     * @returns ListLogstoreResponse
     *
     * @param ListLogstoreRequest $request
     *
     * @return ListLogstoreResponse
     */
    public function listLogstore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLogstoreWithOptions($request, $runtime);
    }

    /**
     * 获取日志Project.
     *
     * @param request - ListProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectResponse
     *
     * @param ListProjectRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListProjectResponse
     */
    public function listProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProject',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取日志Project.
     *
     * @param request - ListProjectRequest
     *
     * @returns ListProjectResponse
     *
     * @param ListProjectRequest $request
     *
     * @return ListProjectResponse
     */
    public function listProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectWithOptions($request, $runtime);
    }

    /**
     * 获取队列列表.
     *
     * @param request - ListQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueueResponse
     *
     * @param ListQueueRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListQueueResponse
     */
    public function listQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queueNamePrefix) {
            @$query['QueueNamePrefix'] = $request->queueNamePrefix;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQueue',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取队列列表.
     *
     * @param request - ListQueueRequest
     *
     * @returns ListQueueResponse
     *
     * @param ListQueueRequest $request
     *
     * @return ListQueueResponse
     */
    public function listQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQueueWithOptions($request, $runtime);
    }

    /**
     * 获取队列上游绑定列表.
     *
     * @param request - ListQueueUpstreamBindingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueueUpstreamBindingsResponse
     *
     * @param ListQueueUpstreamBindingsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListQueueUpstreamBindingsResponse
     */
    public function listQueueUpstreamBindingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQueueUpstreamBindings',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQueueUpstreamBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取队列上游绑定列表.
     *
     * @param request - ListQueueUpstreamBindingsRequest
     *
     * @returns ListQueueUpstreamBindingsResponse
     *
     * @param ListQueueUpstreamBindingsRequest $request
     *
     * @return ListQueueUpstreamBindingsResponse
     */
    public function listQueueUpstreamBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQueueUpstreamBindingsWithOptions($request, $runtime);
    }

    /**
     * 获取静态账户列表.
     *
     * @param request - ListStaticAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListStaticAccountsResponse
     *
     * @param ListStaticAccountsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListStaticAccountsResponse
     */
    public function listStaticAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListStaticAccounts',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListStaticAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取静态账户列表.
     *
     * @param request - ListStaticAccountsRequest
     *
     * @returns ListStaticAccountsResponse
     *
     * @param ListStaticAccountsRequest $request
     *
     * @return ListStaticAccountsResponse
     */
    public function listStaticAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStaticAccountsWithOptions($request, $runtime);
    }

    /**
     * 获取Vhost列表.
     *
     * @param request - ListVhostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVhostResponse
     *
     * @param ListVhostRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListVhostResponse
     */
    public function listVhostWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->vhostNamePrefix) {
            @$query['VhostNamePrefix'] = $request->vhostNamePrefix;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVhost',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVhostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取Vhost列表.
     *
     * @param request - ListVhostRequest
     *
     * @returns ListVhostResponse
     *
     * @param ListVhostRequest $request
     *
     * @return ListVhostResponse
     */
    public function listVhost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVhostWithOptions($request, $runtime);
    }

    /**
     * 获取元数据.
     *
     * @param request - MetadataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MetadataResponse
     *
     * @param MetadataRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MetadataResponse
     */
    public function metadataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Metadata',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取元数据.
     *
     * @param request - MetadataRequest
     *
     * @returns MetadataResponse
     *
     * @param MetadataRequest $request
     *
     * @return MetadataResponse
     */
    public function metadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->metadataWithOptions($request, $runtime);
    }

    /**
     * 清空队列.
     *
     * @param tmpReq - PurgeQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PurgeQueueResponse
     *
     * @param PurgeQueueRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return PurgeQueueResponse
     */
    public function purgeQueueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PurgeQueueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queueNames) {
            $request->queueNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queueNames, 'QueueNames', 'json');
        }

        $query = [];
        if (null !== $request->collina) {
            @$query['Collina'] = $request->collina;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->queueNamesShrink) {
            @$query['QueueNames'] = $request->queueNamesShrink;
        }

        if (null !== $request->umidToken) {
            @$query['UmidToken'] = $request->umidToken;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PurgeQueue',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PurgeQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 清空队列.
     *
     * @param request - PurgeQueueRequest
     *
     * @returns PurgeQueueResponse
     *
     * @param PurgeQueueRequest $request
     *
     * @return PurgeQueueResponse
     */
    public function purgeQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->purgeQueueWithOptions($request, $runtime);
    }

    /**
     * 根据Message Id查询消息.
     *
     * @param request - QueryMessageByMessageIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMessageByMessageIdResponse
     *
     * @param QueryMessageByMessageIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMessageByMessageIdResponse
     */
    public function queryMessageByMessageIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMessageByMessageId',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMessageByMessageIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据Message Id查询消息.
     *
     * @param request - QueryMessageByMessageIdRequest
     *
     * @returns QueryMessageByMessageIdResponse
     *
     * @param QueryMessageByMessageIdRequest $request
     *
     * @return QueryMessageByMessageIdResponse
     */
    public function queryMessageByMessageId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessageByMessageIdWithOptions($request, $runtime);
    }

    /**
     * 根据队列查询消息.
     *
     * @param request - QueryMessageByQueueNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMessageByQueueNameResponse
     *
     * @param QueryMessageByQueueNameRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMessageByQueueNameResponse
     */
    public function queryMessageByQueueNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMessageByQueueName',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMessageByQueueNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据队列查询消息.
     *
     * @param request - QueryMessageByQueueNameRequest
     *
     * @returns QueryMessageByQueueNameResponse
     *
     * @param QueryMessageByQueueNameRequest $request
     *
     * @return QueryMessageByQueueNameResponse
     */
    public function queryMessageByQueueName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMessageByQueueNameWithOptions($request, $runtime);
    }

    /**
     * 实例释放.
     *
     * @param request - ReleaseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseInstance',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 实例释放.
     *
     * @param request - ReleaseInstanceRequest
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * 发送消息.
     *
     * @param request - SendMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendMessageResponse
     *
     * @param SendMessageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SendMessageResponse
     */
    public function sendMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->body) {
            @$query['Body'] = $request->body;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->exchangeName) {
            @$query['ExchangeName'] = $request->exchangeName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->messageId) {
            @$query['MessageId'] = $request->messageId;
        }

        if (null !== $request->props) {
            @$query['Props'] = $request->props;
        }

        if (null !== $request->routingKey) {
            @$query['RoutingKey'] = $request->routingKey;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendMessage',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendMessageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送消息.
     *
     * @param request - SendMessageRequest
     *
     * @returns SendMessageResponse
     *
     * @param SendMessageRequest $request
     *
     * @return SendMessageResponse
     */
    public function sendMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageWithOptions($request, $runtime);
    }

    /**
     * 发送消息.
     *
     * @param request - SendMessageCopyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendMessageCopyResponse
     *
     * @param SendMessageCopyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SendMessageCopyResponse
     */
    public function sendMessageCopyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->processToken) {
            @$query['ProcessToken'] = $request->processToken;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendMessageCopy',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendMessageCopyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 发送消息.
     *
     * @param request - SendMessageCopyRequest
     *
     * @returns SendMessageCopyResponse
     *
     * @param SendMessageCopyRequest $request
     *
     * @return SendMessageCopyResponse
     */
    public function sendMessageCopy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageCopyWithOptions($request, $runtime);
    }

    /**
     * 取消绑定.
     *
     * @param request - UnbindRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindResponse
     *
     * @param UnbindRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return UnbindResponse
     */
    public function unbindWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindingKey) {
            @$query['BindingKey'] = $request->bindingKey;
        }

        if (null !== $request->bindingType) {
            @$query['BindingType'] = $request->bindingType;
        }

        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->dstName) {
            @$query['DstName'] = $request->dstName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->srcName) {
            @$query['SrcName'] = $request->srcName;
        }

        if (null !== $request->vhostName) {
            @$query['VhostName'] = $request->vhostName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Unbind',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 取消绑定.
     *
     * @param request - UnbindRequest
     *
     * @returns UnbindResponse
     *
     * @param UnbindRequest $request
     *
     * @return UnbindResponse
     */
    public function unbind($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindWithOptions($request, $runtime);
    }

    /**
     * 更新实例.
     *
     * @param request - UpdateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实例.
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceWithOptions($request, $runtime);
    }

    /**
     * 修改实例的重试策略.
     *
     * @param request - UpdateInstanceRetryStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceRetryStrategyResponse
     *
     * @param UpdateInstanceRetryStrategyRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateInstanceRetryStrategyResponse
     */
    public function updateInstanceRetryStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->retryInterval) {
            @$query['RetryInterval'] = $request->retryInterval;
        }

        if (null !== $request->retryTimes) {
            @$query['RetryTimes'] = $request->retryTimes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceRetryStrategy',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceRetryStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例的重试策略.
     *
     * @param request - UpdateInstanceRetryStrategyRequest
     *
     * @returns UpdateInstanceRetryStrategyResponse
     *
     * @param UpdateInstanceRetryStrategyRequest $request
     *
     * @return UpdateInstanceRetryStrategyResponse
     */
    public function updateInstanceRetryStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceRetryStrategyWithOptions($request, $runtime);
    }

    /**
     * 更新serverless开关.
     *
     * @param request - UpdateServerlessSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateServerlessSwitchResponse
     *
     * @param UpdateServerlessSwitchRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateServerlessSwitchResponse
     */
    public function updateServerlessSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->serverlessSwitch) {
            @$query['ServerlessSwitch'] = $request->serverlessSwitch;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateServerlessSwitch',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateServerlessSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新serverless开关.
     *
     * @param request - UpdateServerlessSwitchRequest
     *
     * @returns UpdateServerlessSwitchResponse
     *
     * @param UpdateServerlessSwitchRequest $request
     *
     * @return UpdateServerlessSwitchResponse
     */
    public function updateServerlessSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServerlessSwitchWithOptions($request, $runtime);
    }

    /**
     * 升级实例配额.
     *
     * @param request - UpgradeLimitsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeLimitsResponse
     *
     * @param UpgradeLimitsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpgradeLimitsResponse
     */
    public function upgradeLimitsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->consoleSessionId) {
            @$query['ConsoleSessionId'] = $request->consoleSessionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeLimits',
            'version' => '2019-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeLimitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 升级实例配额.
     *
     * @param request - UpgradeLimitsRequest
     *
     * @returns UpgradeLimitsResponse
     *
     * @param UpgradeLimitsRequest $request
     *
     * @return UpgradeLimitsResponse
     */
    public function upgradeLimits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeLimitsWithOptions($request, $runtime);
    }
}
