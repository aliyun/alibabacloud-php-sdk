<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateAccountRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateAccountResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateBindingRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateBindingResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateExchangeRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateExchangeResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateInstanceResponse;
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
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueConsumersRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueConsumersResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueuesRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueuesResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueUpStreamBindingsRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListQueueUpStreamBindingsResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListVirtualHostsRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListVirtualHostsResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateInstanceNameRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateInstanceNameResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\UpdateInstanceResponse;
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
     * Creates a pair of static username and password. If you access an ApsaraMQ for RabbitMQ broker from an open source RabbitMQ client, you must use a pair of username and password for authentication. You can access the ApsaraMQ for RabbitMQ broker only after the authentication is passed. ApsaraMQ for RabbitMQ allows you to generate usernames and passwords by using AccessKey pairs provided by Alibaba Cloud Resource Access Management (RAM).
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
     * Creates a pair of static username and password. If you access an ApsaraMQ for RabbitMQ broker from an open source RabbitMQ client, you must use a pair of username and password for authentication. You can access the ApsaraMQ for RabbitMQ broker only after the authentication is passed. ApsaraMQ for RabbitMQ allows you to generate usernames and passwords by using AccessKey pairs provided by Alibaba Cloud Resource Access Management (RAM).
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
     * Creates a binding. In ApsaraMQ for RabbitMQ, after a producer sends a message to an exchange, the exchange routes the message to a queue or another exchange based on the binding relationship and the routing rule.
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
     * Creates a binding. In ApsaraMQ for RabbitMQ, after a producer sends a message to an exchange, the exchange routes the message to a queue or another exchange based on the binding relationship and the routing rule.
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
     * Creates an exchange. In ApsaraMQ for RabbitMQ, an exchange is used to route a message that is received from a producer to one or more queues or to discard the message. An exchange routes a message to queues by using the routing key and binding keys.
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
     * Creates an exchange. In ApsaraMQ for RabbitMQ, an exchange is used to route a message that is received from a producer to one or more queues or to discard the message. An exchange routes a message to queues by using the routing key and binding keys.
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
     * @remarks
     * *Before you call this operation, make sure that you fully understand the [billing methods and pricing](https://help.aliyun.com/document_detail/606747.html) of ApsaraMQ for RabbitMQ.
     *
     * @param request - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
     * @remarks
     * *Before you call this operation, make sure that you fully understand the [billing methods and pricing](https://help.aliyun.com/document_detail/606747.html) of ApsaraMQ for RabbitMQ.
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
     * Creates a queue. In ApsaraMQ for RabbitMQ, a queue is a message queue. All messages in ApsaraMQ for RabbitMQ are sent to a specific exchange and then routed to a bound queue by the exchange.
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
     * Creates a queue. In ApsaraMQ for RabbitMQ, a queue is a message queue. All messages in ApsaraMQ for RabbitMQ are sent to a specific exchange and then routed to a bound queue by the exchange.
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
     * Deletes a pair of username and password.
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
     * Deletes a pair of username and password.
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
     * Deletes a binding to unbind a queue or an exchange from a source exchange.
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
     * Deletes a binding to unbind a queue or an exchange from a source exchange.
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
     * ## [](#)Usage notes
     * *   You cannot delete exchanges of the **headers** and **x-jms-topic** types.
     * *   You cannot delete built-in exchanges in a vhost. These exchanges are amq.direct, amq.topic, and amq.fanout.
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
     * ## [](#)Usage notes
     * *   You cannot delete exchanges of the **headers** and **x-jms-topic** types.
     * *   You cannot delete built-in exchanges in a vhost. These exchanges are amq.direct, amq.topic, and amq.fanout.
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
     * Before you delete a vhost, make sure that all exchanges and queues in the vhost are deleted.
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
     * Before you delete a vhost, make sure that all exchanges and queues in the vhost are deleted.
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
     * 获取实例详情.
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
     * 获取实例详情.
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
     * Queries the maximum number of vhosts, exchanges, and queues that you can create and the number of created vhosts, exchanges, and queues on an ApsaraMQ for RabbitMQ instance.
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
     * Queries the maximum number of vhosts, exchanges, and queues that you can create and the number of created vhosts, exchanges, and queues on an ApsaraMQ for RabbitMQ instance.
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
     * Queries the static username and password of an ApsaraMQ for RabbitMQ.
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
     * Queries the static username and password of an ApsaraMQ for RabbitMQ.
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
     * Queries all bindings of a virtual host (vhost) on an ApsaraMQ for RabbitMQ instance.
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
     * Queries all bindings of a virtual host (vhost) on an ApsaraMQ for RabbitMQ instance.
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
     * Queries all exchanges or queues to which an exchange is bound.
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
     * Queries all exchanges or queues to which an exchange is bound.
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
     * Queries all queues or exchanges that are bound to an exchange.
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
     * Queries all queues or exchanges that are bound to an exchange.
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
     * Queries all exchanges that are created in a virtual host (vhost).
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
     * Queries all exchanges that are created in a virtual host (vhost).
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
     * Queries all AparaMQ for RabbitMQ instances in a region. The returned data includes the basic information, endpoint, and specification limits of each instance.
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
     * Queries all AparaMQ for RabbitMQ instances in a region. The returned data includes the basic information, endpoint, and specification limits of each instance.
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
     * Queries the online consumers of a queue.
     *
     * @remarks
     * ApsaraMQ for RabbitMQ allows you to query only online consumers.
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
     * Queries the online consumers of a queue.
     *
     * @remarks
     * ApsaraMQ for RabbitMQ allows you to query only online consumers.
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
     * Queries the exchanges that are bound to a queue.
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
     * Queries the exchanges that are bound to a queue.
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
     * Queries all queues in a vhost of an ApsaraMQ for RabbitMQ instance.
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
     * Queries all queues in a vhost of an ApsaraMQ for RabbitMQ instance.
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
     * Queries all virtual hosts (vhosts) on an ApsaraMQ for RabbitMQ instance.
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
     * Queries all virtual hosts (vhosts) on an ApsaraMQ for RabbitMQ instance.
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
     * Upgrades or downgrades the configurations of an ApsaraMQ for RabbitMQ instance.
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
     * Upgrades or downgrades the configurations of an ApsaraMQ for RabbitMQ instance.
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
     * Updates the name of an ApsaraMQ for RabbitMQ instance. After an ApsaraMQ for RabbitMQ instance is created, the ID of the instance is used as its name by default. You can specify a custom name for an instance to facilitate instance identification.
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
     * Updates the name of an ApsaraMQ for RabbitMQ instance. After an ApsaraMQ for RabbitMQ instance is created, the ID of the instance is used as its name by default. You can specify a custom name for an instance to facilitate instance identification.
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
}
