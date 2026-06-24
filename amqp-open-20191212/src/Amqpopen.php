<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\AddInstanceWhiteListRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\AddInstanceWhiteListResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\AddInstanceWhiteListShrinkRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateBindingRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateBindingResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateExchangeRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateExchangeResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateInstanceShrinkRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateOpenSourceAccountRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateOpenSourceAccountResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateOpenSourcePermissionRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateOpenSourcePermissionResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateQueueRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateQueueResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateVirtualHostRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateVirtualHostResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteBindingRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteBindingResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteExchangeRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteExchangeResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteOpenSourceAccountRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteOpenSourceAccountResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteOpenSourcePermissionRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteOpenSourcePermissionResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteQueueRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteQueueResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteVirtualHostRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\DeleteVirtualHostResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\GetMetadataAmountRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\GetMetadataAmountResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListAccountsRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListAccountsResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListBindingsRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListBindingsResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListDownStreamBindingsRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListDownStreamBindingsResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangesRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangesResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangeUpStreamBindingsRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListExchangeUpStreamBindingsResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListInstanceWhiteListRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListInstanceWhiteListResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListOpenSourceAccountsRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListOpenSourceAccountsResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListOpenSourcePermissionsRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListOpenSourcePermissionsResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueConsumersRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueConsumersResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueuesRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueuesResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueUpStreamBindingsRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueUpStreamBindingsResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListVirtualHostsRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListVirtualHostsResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\RemoveInstanceWhiteListRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\RemoveInstanceWhiteListResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateInstanceNameRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateInstanceNameResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateInstanceServerlessSwitchRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateInstanceServerlessSwitchResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateOpenSourceAccountRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateOpenSourceAccountResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateOpenSourcePermissionRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateOpenSourcePermissionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Amqpopen extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'us-west-1' => 'amqp-open.us-west-1.aliyuncs.com',
            'us-east-1' => 'amqp-open.us-east-1.aliyuncs.com',
            'me-central-1' => 'amqp-open.me-central-1.aliyuncs.com',
            'eu-central-1' => 'amqp-open.eu-central-1.aliyuncs.com',
            'cn-zhengzhou-jva' => 'amqp-open.cn-zhengzhou-jva.aliyuncs.com',
            'cn-zhangjiakou' => 'amqp-open.cn-zhangjiakou.aliyuncs.com',
            'cn-wulanchabu' => 'amqp-open.cn-wulanchabu.aliyuncs.com',
            'cn-shenzhen' => 'amqp-open.cn-shenzhen.aliyuncs.com',
            'cn-shanghai-finance-1' => 'amqp-open.cn-shanghai-finance-1.aliyuncs.com',
            'cn-shanghai' => 'amqp-open.cn-shanghai.aliyuncs.com',
            'cn-qingdao' => 'amqp-open.cn-qingdao.aliyuncs.com',
            'cn-huhehaote' => 'amqp-open.cn-huhehaote.aliyuncs.com',
            'cn-hongkong' => 'amqp-open.cn-hongkong.aliyuncs.com',
            'cn-hangzhou' => 'amqp-open.cn-hangzhou.aliyuncs.com',
            'cn-guangzhou' => 'amqp-open.cn-guangzhou.aliyuncs.com',
            'cn-chengdu' => 'amqp-open.cn-chengdu.aliyuncs.com',
            'cn-beijing-finance-1' => 'amqp-open.cn-beijing-finance-1.aliyuncs.com',
            'cn-beijing' => 'amqp-open.cn-beijing.aliyuncs.com',
            'ap-southeast-7' => 'amqp-open.ap-southeast-7.aliyuncs.com',
            'ap-southeast-6' => 'amqp-open.ap-southeast-6.aliyuncs.com',
            'ap-southeast-5' => 'amqp-open.ap-southeast-5.aliyuncs.com',
            'ap-southeast-3' => 'amqp-open.ap-southeast-3.aliyuncs.com',
            'ap-southeast-1' => 'amqp-open.ap-southeast-1.aliyuncs.com',
            'ap-northeast-1' => 'amqp-open.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('amqp-open', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds an entry to the whitelist of an instance.
     *
     * @param tmpReq - AddInstanceWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddInstanceWhiteListResponse
     *
     * @param AddInstanceWhiteListRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return AddInstanceWhiteListResponse
     */
    public function addInstanceWhiteListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddInstanceWhiteListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->whiteListItem) {
            $request->whiteListItemShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->whiteListItem, 'WhiteListItem', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->whiteListItemShrink) {
            @$query['WhiteListItem'] = $request->whiteListItemShrink;
        }

        if (null !== $request->whiteListType) {
            @$query['WhiteListType'] = $request->whiteListType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddInstanceWhiteList',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddInstanceWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an entry to the whitelist of an instance.
     *
     * @param request - AddInstanceWhiteListRequest
     *
     * @returns AddInstanceWhiteListResponse
     *
     * @param AddInstanceWhiteListRequest $request
     *
     * @return AddInstanceWhiteListResponse
     */
    public function addInstanceWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addInstanceWhiteListWithOptions($request, $runtime);
    }

    /**
     * When an open-source client accesses an ApsaraMQ for RabbitMQ server, it must provide a username and password for authentication. ApsaraMQ for RabbitMQ lets you generate a username and password from an AccessKey ID and AccessKey secret provided by Resource Access Management (RAM).
     *
     * @param request - CreateAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccountResponse
     *
     * @param CreateAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->accountAccessKey) {
            @$query['accountAccessKey'] = $request->accountAccessKey;
        }

        if (null !== $request->createTimestamp) {
            @$query['createTimestamp'] = $request->createTimestamp;
        }

        if (null !== $request->instanceId) {
            @$query['instanceId'] = $request->instanceId;
        }

        if (null !== $request->secretSign) {
            @$query['secretSign'] = $request->secretSign;
        }

        if (null !== $request->signature) {
            @$query['signature'] = $request->signature;
        }

        if (null !== $request->userName) {
            @$query['userName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccount',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When an open-source client accesses an ApsaraMQ for RabbitMQ server, it must provide a username and password for authentication. ApsaraMQ for RabbitMQ lets you generate a username and password from an AccessKey ID and AccessKey secret provided by Resource Access Management (RAM).
     *
     * @param request - CreateAccountRequest
     *
     * @returns CreateAccountResponse
     *
     * @param CreateAccountRequest $request
     *
     * @return CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * A producer sends a message to an exchange, which then routes the message to a specified queue or another exchange based on the binding and routing rules.
     *
     * @param request - CreateBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBindingResponse
     *
     * @param CreateBindingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateBindingResponse
     */
    public function createBindingWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->argument) {
            @$body['Argument'] = $request->argument;
        }

        if (null !== $request->bindingKey) {
            @$body['BindingKey'] = $request->bindingKey;
        }

        if (null !== $request->bindingType) {
            @$body['BindingType'] = $request->bindingType;
        }

        if (null !== $request->destinationName) {
            @$body['DestinationName'] = $request->destinationName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sourceExchange) {
            @$body['SourceExchange'] = $request->sourceExchange;
        }

        if (null !== $request->virtualHost) {
            @$body['VirtualHost'] = $request->virtualHost;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateBinding',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A producer sends a message to an exchange, which then routes the message to a specified queue or another exchange based on the binding and routing rules.
     *
     * @param request - CreateBindingRequest
     *
     * @returns CreateBindingResponse
     *
     * @param CreateBindingRequest $request
     *
     * @return CreateBindingResponse
     */
    public function createBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBindingWithOptions($request, $runtime);
    }

    /**
     * A producer sends a message to an exchange. The exchange then routes the message to one or more queues based on the routing key and the binding key, or discards the message.
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
        $body = [];
        if (null !== $request->alternateExchange) {
            @$body['AlternateExchange'] = $request->alternateExchange;
        }

        if (null !== $request->autoDeleteState) {
            @$body['AutoDeleteState'] = $request->autoDeleteState;
        }

        if (null !== $request->exchangeName) {
            @$body['ExchangeName'] = $request->exchangeName;
        }

        if (null !== $request->exchangeType) {
            @$body['ExchangeType'] = $request->exchangeType;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->internal) {
            @$body['Internal'] = $request->internal;
        }

        if (null !== $request->virtualHost) {
            @$body['VirtualHost'] = $request->virtualHost;
        }

        if (null !== $request->XDelayedType) {
            @$body['XDelayedType'] = $request->XDelayedType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateExchange',
            'version' => '2019-12-12',
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
     * A producer sends a message to an exchange. The exchange then routes the message to one or more queues based on the routing key and the binding key, or discards the message.
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
     * Creates an ApsaraMQ for RabbitMQ instance.
     *
     * @param tmpReq - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        if (null !== $tmpReq->vswitchIds) {
            $request->vswitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vswitchIds, 'VswitchIds', 'json');
        }

        $query = [];
        if (null !== $request->authModel) {
            @$query['AuthModel'] = $request->authModel;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->encryptedInstance) {
            @$query['EncryptedInstance'] = $request->encryptedInstance;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->kmsKeyId) {
            @$query['KmsKeyId'] = $request->kmsKeyId;
        }

        if (null !== $request->listenerMode) {
            @$query['ListenerMode'] = $request->listenerMode;
        }

        if (null !== $request->maxConnections) {
            @$query['MaxConnections'] = $request->maxConnections;
        }

        if (null !== $request->maxEipTps) {
            @$query['MaxEipTps'] = $request->maxEipTps;
        }

        if (null !== $request->maxPrivateTps) {
            @$query['MaxPrivateTps'] = $request->maxPrivateTps;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodCycle) {
            @$query['PeriodCycle'] = $request->periodCycle;
        }

        if (null !== $request->provisionedCapacity) {
            @$query['ProvisionedCapacity'] = $request->provisionedCapacity;
        }

        if (null !== $request->queueCapacity) {
            @$query['QueueCapacity'] = $request->queueCapacity;
        }

        if (null !== $request->renewStatus) {
            @$query['RenewStatus'] = $request->renewStatus;
        }

        if (null !== $request->renewalDurationUnit) {
            @$query['RenewalDurationUnit'] = $request->renewalDurationUnit;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->serverlessChargeType) {
            @$query['ServerlessChargeType'] = $request->serverlessChargeType;
        }

        if (null !== $request->serverlessSwitch) {
            @$query['ServerlessSwitch'] = $request->serverlessSwitch;
        }

        if (null !== $request->storageSize) {
            @$query['StorageSize'] = $request->storageSize;
        }

        if (null !== $request->supportEip) {
            @$query['SupportEip'] = $request->supportEip;
        }

        if (null !== $request->supportTracing) {
            @$query['SupportTracing'] = $request->supportTracing;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->tracingStorageTime) {
            @$query['TracingStorageTime'] = $request->tracingStorageTime;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswitchIdsShrink) {
            @$query['VswitchIds'] = $request->vswitchIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an ApsaraMQ for RabbitMQ instance.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates an open-source username and password.
     *
     * @param request - CreateOpenSourceAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOpenSourceAccountResponse
     *
     * @param CreateOpenSourceAccountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateOpenSourceAccountResponse
     */
    public function createOpenSourceAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOpenSourceAccount',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOpenSourceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an open-source username and password.
     *
     * @param request - CreateOpenSourceAccountRequest
     *
     * @returns CreateOpenSourceAccountResponse
     *
     * @param CreateOpenSourceAccountRequest $request
     *
     * @return CreateOpenSourceAccountResponse
     */
    public function createOpenSourceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOpenSourceAccountWithOptions($request, $runtime);
    }

    /**
     * Creates an open source permission.
     *
     * @param request - CreateOpenSourcePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOpenSourcePermissionResponse
     *
     * @param CreateOpenSourcePermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateOpenSourcePermissionResponse
     */
    public function createOpenSourcePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configure) {
            @$query['Configure'] = $request->configure;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->read) {
            @$query['Read'] = $request->read;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->vhost) {
            @$query['Vhost'] = $request->vhost;
        }

        if (null !== $request->write) {
            @$query['Write'] = $request->write;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOpenSourcePermission',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOpenSourcePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an open source permission.
     *
     * @param request - CreateOpenSourcePermissionRequest
     *
     * @returns CreateOpenSourcePermissionResponse
     *
     * @param CreateOpenSourcePermissionRequest $request
     *
     * @return CreateOpenSourcePermissionResponse
     */
    public function createOpenSourcePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOpenSourcePermissionWithOptions($request, $runtime);
    }

    /**
     * A queue is a buffer that stores messages. In ApsaraMQ for RabbitMQ, messages are sent to a specified exchange and then routed to a bound queue.
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
        $body = [];
        if (null !== $request->autoDeleteState) {
            @$body['AutoDeleteState'] = $request->autoDeleteState;
        }

        if (null !== $request->autoExpireState) {
            @$body['AutoExpireState'] = $request->autoExpireState;
        }

        if (null !== $request->deadLetterExchange) {
            @$body['DeadLetterExchange'] = $request->deadLetterExchange;
        }

        if (null !== $request->deadLetterRoutingKey) {
            @$body['DeadLetterRoutingKey'] = $request->deadLetterRoutingKey;
        }

        if (null !== $request->exclusiveState) {
            @$body['ExclusiveState'] = $request->exclusiveState;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxLength) {
            @$body['MaxLength'] = $request->maxLength;
        }

        if (null !== $request->maximumPriority) {
            @$body['MaximumPriority'] = $request->maximumPriority;
        }

        if (null !== $request->messageTTL) {
            @$body['MessageTTL'] = $request->messageTTL;
        }

        if (null !== $request->queueName) {
            @$body['QueueName'] = $request->queueName;
        }

        if (null !== $request->virtualHost) {
            @$body['VirtualHost'] = $request->virtualHost;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateQueue',
            'version' => '2019-12-12',
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
     * A queue is a buffer that stores messages. In ApsaraMQ for RabbitMQ, messages are sent to a specified exchange and then routed to a bound queue.
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
     * Creates a vhost. A vhost is used to logically isolate resources. Each vhost manages its own exchanges, queues, and bindings. Applications can run on independent vhosts in a secure manner. This way, the business of an application is not affected by other applications. Before you connect producers and consumers to an ApsaraMQ for RabbitMQ instance, you must specify vhosts for the producers and consumers.
     *
     * @param request - CreateVirtualHostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVirtualHostResponse
     *
     * @param CreateVirtualHostRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVirtualHostResponse
     */
    public function createVirtualHostWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->virtualHost) {
            @$body['VirtualHost'] = $request->virtualHost;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVirtualHost',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVirtualHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a vhost. A vhost is used to logically isolate resources. Each vhost manages its own exchanges, queues, and bindings. Applications can run on independent vhosts in a secure manner. This way, the business of an application is not affected by other applications. Before you connect producers and consumers to an ApsaraMQ for RabbitMQ instance, you must specify vhosts for the producers and consumers.
     *
     * @param request - CreateVirtualHostRequest
     *
     * @returns CreateVirtualHostResponse
     *
     * @param CreateVirtualHostRequest $request
     *
     * @return CreateVirtualHostResponse
     */
    public function createVirtualHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVirtualHostWithOptions($request, $runtime);
    }

    /**
     * Deletes a static username and password.
     *
     * @param request - DeleteAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccountResponse
     *
     * @param DeleteAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimestamp) {
            @$query['CreateTimestamp'] = $request->createTimestamp;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccount',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a static username and password.
     *
     * @param request - DeleteAccountRequest
     *
     * @returns DeleteAccountResponse
     *
     * @param DeleteAccountRequest $request
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * The DeleteBinding operation detaches a source exchange from a target queue or another exchange.
     *
     * @param request - DeleteBindingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBindingResponse
     *
     * @param DeleteBindingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBindingResponse
     */
    public function deleteBindingWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bindingKey) {
            @$body['BindingKey'] = $request->bindingKey;
        }

        if (null !== $request->bindingType) {
            @$body['BindingType'] = $request->bindingType;
        }

        if (null !== $request->destinationName) {
            @$body['DestinationName'] = $request->destinationName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sourceExchange) {
            @$body['SourceExchange'] = $request->sourceExchange;
        }

        if (null !== $request->virtualHost) {
            @$body['VirtualHost'] = $request->virtualHost;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteBinding',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The DeleteBinding operation detaches a source exchange from a target queue or another exchange.
     *
     * @param request - DeleteBindingRequest
     *
     * @returns DeleteBindingResponse
     *
     * @param DeleteBindingRequest $request
     *
     * @return DeleteBindingResponse
     */
    public function deleteBinding($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBindingWithOptions($request, $runtime);
    }

    /**
     * Deletes an exchange.
     *
     * @remarks
     * ## Usage notes
     * - You cannot delete exchanges with the type **headers**.
     * - You cannot delete the three built-in exchanges in a vhost: amq.direct, amq.topic, or amq.fanout.
     *
     * @param request - DeleteExchangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteExchangeResponse
     *
     * @param DeleteExchangeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteExchangeResponse
     */
    public function deleteExchangeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->exchangeName) {
            @$body['ExchangeName'] = $request->exchangeName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->virtualHost) {
            @$body['VirtualHost'] = $request->virtualHost;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteExchange',
            'version' => '2019-12-12',
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
     * Deletes an exchange.
     *
     * @remarks
     * ## Usage notes
     * - You cannot delete exchanges with the type **headers**.
     * - You cannot delete the three built-in exchanges in a vhost: amq.direct, amq.topic, or amq.fanout.
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
     * Deletes the username and password of an open-source user.
     *
     * @param request - DeleteOpenSourceAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOpenSourceAccountResponse
     *
     * @param DeleteOpenSourceAccountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteOpenSourceAccountResponse
     */
    public function deleteOpenSourceAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'DeleteOpenSourceAccount',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOpenSourceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the username and password of an open-source user.
     *
     * @param request - DeleteOpenSourceAccountRequest
     *
     * @returns DeleteOpenSourceAccountResponse
     *
     * @param DeleteOpenSourceAccountRequest $request
     *
     * @return DeleteOpenSourceAccountResponse
     */
    public function deleteOpenSourceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOpenSourceAccountWithOptions($request, $runtime);
    }

    /**
     * Deletes an open source permission.
     *
     * @param request - DeleteOpenSourcePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOpenSourcePermissionResponse
     *
     * @param DeleteOpenSourcePermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteOpenSourcePermissionResponse
     */
    public function deleteOpenSourcePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->vhost) {
            @$query['Vhost'] = $request->vhost;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOpenSourcePermission',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOpenSourcePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an open source permission.
     *
     * @param request - DeleteOpenSourcePermissionRequest
     *
     * @returns DeleteOpenSourcePermissionResponse
     *
     * @param DeleteOpenSourcePermissionRequest $request
     *
     * @return DeleteOpenSourcePermissionResponse
     */
    public function deleteOpenSourcePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOpenSourcePermissionWithOptions($request, $runtime);
    }

    /**
     * Deletes a queue.
     *
     * @param request - DeleteQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQueueResponse
     *
     * @param DeleteQueueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteQueueResponse
     */
    public function deleteQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->queueName) {
            @$body['QueueName'] = $request->queueName;
        }

        if (null !== $request->virtualHost) {
            @$body['VirtualHost'] = $request->virtualHost;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteQueue',
            'version' => '2019-12-12',
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
     * Deletes a queue.
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
     * Deletes a virtual host (vhost).
     *
     * @remarks
     * Before you delete a vhost, you must delete all exchanges and queues in it.
     *
     * @param request - DeleteVirtualHostRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVirtualHostResponse
     *
     * @param DeleteVirtualHostRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVirtualHostResponse
     */
    public function deleteVirtualHostWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->virtualHost) {
            @$body['VirtualHost'] = $request->virtualHost;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteVirtualHost',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVirtualHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a virtual host (vhost).
     *
     * @remarks
     * Before you delete a vhost, you must delete all exchanges and queues in it.
     *
     * @param request - DeleteVirtualHostRequest
     *
     * @returns DeleteVirtualHostResponse
     *
     * @param DeleteVirtualHostRequest $request
     *
     * @return DeleteVirtualHostResponse
     */
    public function deleteVirtualHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualHostWithOptions($request, $runtime);
    }

    /**
     * Retrieves the details of an ApsaraMQ for RabbitMQ instance.
     *
     * @param request - GetInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of an ApsaraMQ for RabbitMQ instance.
     *
     * @param request - GetInstanceRequest
     *
     * @returns GetInstanceResponse
     *
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the current and maximum numbers of vhosts, exchanges, and queues for a specified ApsaraMQ for RabbitMQ instance.
     *
     * @param request - GetMetadataAmountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMetadataAmountResponse
     *
     * @param GetMetadataAmountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMetadataAmountResponse
     */
    public function getMetadataAmountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMetadataAmount',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMetadataAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the current and maximum numbers of vhosts, exchanges, and queues for a specified ApsaraMQ for RabbitMQ instance.
     *
     * @param request - GetMetadataAmountRequest
     *
     * @returns GetMetadataAmountResponse
     *
     * @param GetMetadataAmountRequest $request
     *
     * @return GetMetadataAmountResponse
     */
    public function getMetadataAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMetadataAmountWithOptions($request, $runtime);
    }

    /**
     * Lists the usernames and passwords for a specified ApsaraMQ for RabbitMQ instance.
     *
     * @param request - ListAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccountsResponse
     *
     * @param ListAccountsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAccountsResponse
     */
    public function listAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccounts',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the usernames and passwords for a specified ApsaraMQ for RabbitMQ instance.
     *
     * @param request - ListAccountsRequest
     *
     * @returns ListAccountsResponse
     *
     * @param ListAccountsRequest $request
     *
     * @return ListAccountsResponse
     */
    public function listAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountsWithOptions($request, $runtime);
    }

    /**
     * Queries all bindings that are created in a vhost of a specified ApsaraMQ for RabbitMQ instance.
     *
     * @param request - ListBindingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBindingsResponse
     *
     * @param ListBindingsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListBindingsResponse
     */
    public function listBindingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBindings',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all bindings that are created in a vhost of a specified ApsaraMQ for RabbitMQ instance.
     *
     * @param request - ListBindingsRequest
     *
     * @returns ListBindingsResponse
     *
     * @param ListBindingsRequest $request
     *
     * @return ListBindingsResponse
     */
    public function listBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBindingsWithOptions($request, $runtime);
    }

    /**
     * Queries the exchanges or queues that are bound to a specified exchange.
     *
     * @param request - ListDownStreamBindingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDownStreamBindingsResponse
     *
     * @param ListDownStreamBindingsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDownStreamBindingsResponse
     */
    public function listDownStreamBindingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDownStreamBindings',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDownStreamBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the exchanges or queues that are bound to a specified exchange.
     *
     * @param request - ListDownStreamBindingsRequest
     *
     * @returns ListDownStreamBindingsResponse
     *
     * @param ListDownStreamBindingsRequest $request
     *
     * @return ListDownStreamBindingsResponse
     */
    public function listDownStreamBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDownStreamBindingsWithOptions($request, $runtime);
    }

    /**
     * Queries the queues or other exchanges that are bound to a specified exchange.
     *
     * @param request - ListExchangeUpStreamBindingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExchangeUpStreamBindingsResponse
     *
     * @param ListExchangeUpStreamBindingsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListExchangeUpStreamBindingsResponse
     */
    public function listExchangeUpStreamBindingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExchangeUpStreamBindings',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExchangeUpStreamBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the queues or other exchanges that are bound to a specified exchange.
     *
     * @param request - ListExchangeUpStreamBindingsRequest
     *
     * @returns ListExchangeUpStreamBindingsResponse
     *
     * @param ListExchangeUpStreamBindingsRequest $request
     *
     * @return ListExchangeUpStreamBindingsResponse
     */
    public function listExchangeUpStreamBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExchangeUpStreamBindingsWithOptions($request, $runtime);
    }

    /**
     * Lists all exchanges in a specified vhost of an instance.
     *
     * @param request - ListExchangesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExchangesResponse
     *
     * @param ListExchangesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListExchangesResponse
     */
    public function listExchangesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExchanges',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExchangesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all exchanges in a specified vhost of an instance.
     *
     * @param request - ListExchangesRequest
     *
     * @returns ListExchangesResponse
     *
     * @param ListExchangesRequest $request
     *
     * @return ListExchangesResponse
     */
    public function listExchanges($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExchangesWithOptions($request, $runtime);
    }

    /**
     * Queries the IP or VPC whitelist for an instance.
     *
     * @param request - ListInstanceWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceWhiteListResponse
     *
     * @param ListInstanceWhiteListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListInstanceWhiteListResponse
     */
    public function listInstanceWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->whiteListType) {
            @$query['whiteListType'] = $request->whiteListType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceWhiteList',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstanceWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the IP or VPC whitelist for an instance.
     *
     * @param request - ListInstanceWhiteListRequest
     *
     * @returns ListInstanceWhiteListResponse
     *
     * @param ListInstanceWhiteListRequest $request
     *
     * @return ListInstanceWhiteListResponse
     */
    public function listInstanceWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceWhiteListWithOptions($request, $runtime);
    }

    /**
     * Queries a list of ApsaraMQ for RabbitMQ instances in a specified region and returns basic information about each instance, such as its endpoints and specification limits.
     *
     * @param request - ListInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of ApsaraMQ for RabbitMQ instances in a specified region and returns basic information about each instance, such as its endpoints and specification limits.
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * Enumerates open-source usernames and passwords.
     *
     * @param request - ListOpenSourceAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOpenSourceAccountsResponse
     *
     * @param ListOpenSourceAccountsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListOpenSourceAccountsResponse
     */
    public function listOpenSourceAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOpenSourceAccounts',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOpenSourceAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enumerates open-source usernames and passwords.
     *
     * @param request - ListOpenSourceAccountsRequest
     *
     * @returns ListOpenSourceAccountsResponse
     *
     * @param ListOpenSourceAccountsRequest $request
     *
     * @return ListOpenSourceAccountsResponse
     */
    public function listOpenSourceAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOpenSourceAccountsWithOptions($request, $runtime);
    }

    /**
     * Lists open source permissions.
     *
     * @param request - ListOpenSourcePermissionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOpenSourcePermissionsResponse
     *
     * @param ListOpenSourcePermissionsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListOpenSourcePermissionsResponse
     */
    public function listOpenSourcePermissionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOpenSourcePermissions',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOpenSourcePermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists open source permissions.
     *
     * @param request - ListOpenSourcePermissionsRequest
     *
     * @returns ListOpenSourcePermissionsResponse
     *
     * @param ListOpenSourcePermissionsRequest $request
     *
     * @return ListOpenSourcePermissionsResponse
     */
    public function listOpenSourcePermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOpenSourcePermissionsWithOptions($request, $runtime);
    }

    /**
     * Queries the online consumer clients of a specified queue.
     *
     * @remarks
     * ApsaraMQ for RabbitMQ lets you query only online consumer clients. You cannot query offline consumer clients.
     *
     * @param request - ListQueueConsumersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueueConsumersResponse
     *
     * @param ListQueueConsumersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListQueueConsumersResponse
     */
    public function listQueueConsumersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQueueConsumers',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQueueConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the online consumer clients of a specified queue.
     *
     * @remarks
     * ApsaraMQ for RabbitMQ lets you query only online consumer clients. You cannot query offline consumer clients.
     *
     * @param request - ListQueueConsumersRequest
     *
     * @returns ListQueueConsumersResponse
     *
     * @param ListQueueConsumersRequest $request
     *
     * @return ListQueueConsumersResponse
     */
    public function listQueueConsumers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQueueConsumersWithOptions($request, $runtime);
    }

    /**
     * Queries the exchanges that are bound to a specified queue.
     *
     * @param request - ListQueueUpStreamBindingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueueUpStreamBindingsResponse
     *
     * @param ListQueueUpStreamBindingsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListQueueUpStreamBindingsResponse
     */
    public function listQueueUpStreamBindingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQueueUpStreamBindings',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQueueUpStreamBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the exchanges that are bound to a specified queue.
     *
     * @param request - ListQueueUpStreamBindingsRequest
     *
     * @returns ListQueueUpStreamBindingsResponse
     *
     * @param ListQueueUpStreamBindingsRequest $request
     *
     * @return ListQueueUpStreamBindingsResponse
     */
    public function listQueueUpStreamBindings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQueueUpStreamBindingsWithOptions($request, $runtime);
    }

    /**
     * Queries information about all queues in a vhost on a specified ApsaraMQ for RabbitMQ instance.
     *
     * @param request - ListQueuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListQueuesResponse
     *
     * @param ListQueuesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListQueuesResponse
     */
    public function listQueuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListQueues',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about all queues in a vhost on a specified ApsaraMQ for RabbitMQ instance.
     *
     * @param request - ListQueuesRequest
     *
     * @returns ListQueuesResponse
     *
     * @param ListQueuesRequest $request
     *
     * @return ListQueuesResponse
     */
    public function listQueues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQueuesWithOptions($request, $runtime);
    }

    /**
     * Lists all vhosts in a specified ApsaraMQ for RabbitMQ instance.
     *
     * @param request - ListVirtualHostsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListVirtualHostsResponse
     *
     * @param ListVirtualHostsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListVirtualHostsResponse
     */
    public function listVirtualHostsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListVirtualHosts',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListVirtualHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists all vhosts in a specified ApsaraMQ for RabbitMQ instance.
     *
     * @param request - ListVirtualHostsRequest
     *
     * @returns ListVirtualHostsResponse
     *
     * @param ListVirtualHostsRequest $request
     *
     * @return ListVirtualHostsResponse
     */
    public function listVirtualHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVirtualHostsWithOptions($request, $runtime);
    }

    /**
     * Removes an IP address or a VPC from an instance\\"s whitelist.
     *
     * @param request - RemoveInstanceWhiteListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveInstanceWhiteListResponse
     *
     * @param RemoveInstanceWhiteListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RemoveInstanceWhiteListResponse
     */
    public function removeInstanceWhiteListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->whiteListItemId) {
            @$query['whiteListItemId'] = $request->whiteListItemId;
        }

        if (null !== $request->whiteListType) {
            @$query['whiteListType'] = $request->whiteListType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveInstanceWhiteList',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveInstanceWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes an IP address or a VPC from an instance\\"s whitelist.
     *
     * @param request - RemoveInstanceWhiteListRequest
     *
     * @returns RemoveInstanceWhiteListResponse
     *
     * @param RemoveInstanceWhiteListRequest $request
     *
     * @return RemoveInstanceWhiteListResponse
     */
    public function removeInstanceWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeInstanceWhiteListWithOptions($request, $runtime);
    }

    /**
     * Upgrades or downgrades the specifications of an ApsaraMQ for RabbitMQ instance.
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
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->edition) {
            @$query['Edition'] = $request->edition;
        }

        if (null !== $request->encryptedInstance) {
            @$query['EncryptedInstance'] = $request->encryptedInstance;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->kmsKeyId) {
            @$query['KmsKeyId'] = $request->kmsKeyId;
        }

        if (null !== $request->maxConnections) {
            @$query['MaxConnections'] = $request->maxConnections;
        }

        if (null !== $request->maxEipTps) {
            @$query['MaxEipTps'] = $request->maxEipTps;
        }

        if (null !== $request->maxPrivateTps) {
            @$query['MaxPrivateTps'] = $request->maxPrivateTps;
        }

        if (null !== $request->modifyType) {
            @$query['ModifyType'] = $request->modifyType;
        }

        if (null !== $request->provisionedCapacity) {
            @$query['ProvisionedCapacity'] = $request->provisionedCapacity;
        }

        if (null !== $request->queueCapacity) {
            @$query['QueueCapacity'] = $request->queueCapacity;
        }

        if (null !== $request->serverlessChargeType) {
            @$query['ServerlessChargeType'] = $request->serverlessChargeType;
        }

        if (null !== $request->storageSize) {
            @$query['StorageSize'] = $request->storageSize;
        }

        if (null !== $request->supportEip) {
            @$query['SupportEip'] = $request->supportEip;
        }

        if (null !== $request->supportTracing) {
            @$query['SupportTracing'] = $request->supportTracing;
        }

        if (null !== $request->tracingStorageTime) {
            @$query['TracingStorageTime'] = $request->tracingStorageTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2019-12-12',
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
     * Upgrades or downgrades the specifications of an ApsaraMQ for RabbitMQ instance.
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
     * An ApsaraMQ for RabbitMQ instance is named after its instance ID by default. You can change the name for easier identification.
     *
     * @param request - UpdateInstanceNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceNameResponse
     *
     * @param UpdateInstanceNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateInstanceNameResponse
     */
    public function updateInstanceNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
            'action' => 'UpdateInstanceName',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * An ApsaraMQ for RabbitMQ instance is named after its instance ID by default. You can change the name for easier identification.
     *
     * @param request - UpdateInstanceNameRequest
     *
     * @returns UpdateInstanceNameResponse
     *
     * @param UpdateInstanceNameRequest $request
     *
     * @return UpdateInstanceNameResponse
     */
    public function updateInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceNameWithOptions($request, $runtime);
    }

    /**
     * Update serverless switch.
     *
     * @param request - UpdateInstanceServerlessSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceServerlessSwitchResponse
     *
     * @param UpdateInstanceServerlessSwitchRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateInstanceServerlessSwitchResponse
     */
    public function updateInstanceServerlessSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
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
            'action' => 'UpdateInstanceServerlessSwitch',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceServerlessSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update serverless switch.
     *
     * @param request - UpdateInstanceServerlessSwitchRequest
     *
     * @returns UpdateInstanceServerlessSwitchResponse
     *
     * @param UpdateInstanceServerlessSwitchRequest $request
     *
     * @return UpdateInstanceServerlessSwitchResponse
     */
    public function updateInstanceServerlessSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceServerlessSwitchWithOptions($request, $runtime);
    }

    /**
     * Updates the username and password for open-source access.
     *
     * @param request - UpdateOpenSourceAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOpenSourceAccountResponse
     *
     * @param UpdateOpenSourceAccountRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateOpenSourceAccountResponse
     */
    public function updateOpenSourceAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOpenSourceAccount',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOpenSourceAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the username and password for open-source access.
     *
     * @param request - UpdateOpenSourceAccountRequest
     *
     * @returns UpdateOpenSourceAccountResponse
     *
     * @param UpdateOpenSourceAccountRequest $request
     *
     * @return UpdateOpenSourceAccountResponse
     */
    public function updateOpenSourceAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOpenSourceAccountWithOptions($request, $runtime);
    }

    /**
     * Updates open source permissions.
     *
     * @param request - UpdateOpenSourcePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOpenSourcePermissionResponse
     *
     * @param UpdateOpenSourcePermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateOpenSourcePermissionResponse
     */
    public function updateOpenSourcePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configure) {
            @$query['Configure'] = $request->configure;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->read) {
            @$query['Read'] = $request->read;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->vhost) {
            @$query['Vhost'] = $request->vhost;
        }

        if (null !== $request->write) {
            @$query['Write'] = $request->write;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOpenSourcePermission',
            'version' => '2019-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOpenSourcePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates open source permissions.
     *
     * @param request - UpdateOpenSourcePermissionRequest
     *
     * @returns UpdateOpenSourcePermissionResponse
     *
     * @param UpdateOpenSourcePermissionRequest $request
     *
     * @return UpdateOpenSourcePermissionResponse
     */
    public function updateOpenSourcePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOpenSourcePermissionWithOptions($request, $runtime);
    }
}
