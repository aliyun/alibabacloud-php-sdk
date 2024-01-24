<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * *
     * @param CreateAccountRequest $request CreateAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountAccessKey)) {
            $query['accountAccessKey'] = $request->accountAccessKey;
        }
        if (!Utils::isUnset($request->createTimestamp)) {
            $query['createTimestamp'] = $request->createTimestamp;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->secretSign)) {
            $query['secretSign'] = $request->secretSign;
        }
        if (!Utils::isUnset($request->signature)) {
            $query['signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['userName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccount',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *
     * @param CreateAccountRequest $request CreateAccountRequest
     *
     * @return CreateAccountResponse CreateAccountResponse
     */
    public function createAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateBindingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateBindingResponse
     */
    public function createBindingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->argument)) {
            $body['Argument'] = $request->argument;
        }
        if (!Utils::isUnset($request->bindingKey)) {
            $body['BindingKey'] = $request->bindingKey;
        }
        if (!Utils::isUnset($request->bindingType)) {
            $body['BindingType'] = $request->bindingType;
        }
        if (!Utils::isUnset($request->destinationName)) {
            $body['DestinationName'] = $request->destinationName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sourceExchange)) {
            $body['SourceExchange'] = $request->sourceExchange;
        }
        if (!Utils::isUnset($request->virtualHost)) {
            $body['VirtualHost'] = $request->virtualHost;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateBinding',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateExchangeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateExchangeResponse
     */
    public function createExchangeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alternateExchange)) {
            $body['AlternateExchange'] = $request->alternateExchange;
        }
        if (!Utils::isUnset($request->autoDeleteState)) {
            $body['AutoDeleteState'] = $request->autoDeleteState;
        }
        if (!Utils::isUnset($request->exchangeName)) {
            $body['ExchangeName'] = $request->exchangeName;
        }
        if (!Utils::isUnset($request->exchangeType)) {
            $body['ExchangeType'] = $request->exchangeType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->internal)) {
            $body['Internal'] = $request->internal;
        }
        if (!Utils::isUnset($request->virtualHost)) {
            $body['VirtualHost'] = $request->virtualHost;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateExchange',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateExchangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->maxConnections)) {
            $query['MaxConnections'] = $request->maxConnections;
        }
        if (!Utils::isUnset($request->maxEipTps)) {
            $query['MaxEipTps'] = $request->maxEipTps;
        }
        if (!Utils::isUnset($request->maxPrivateTps)) {
            $query['MaxPrivateTps'] = $request->maxPrivateTps;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['PaymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodCycle)) {
            $query['PeriodCycle'] = $request->periodCycle;
        }
        if (!Utils::isUnset($request->queueCapacity)) {
            $query['QueueCapacity'] = $request->queueCapacity;
        }
        if (!Utils::isUnset($request->renewStatus)) {
            $query['RenewStatus'] = $request->renewStatus;
        }
        if (!Utils::isUnset($request->renewalDurationUnit)) {
            $query['RenewalDurationUnit'] = $request->renewalDurationUnit;
        }
        if (!Utils::isUnset($request->storageSize)) {
            $query['StorageSize'] = $request->storageSize;
        }
        if (!Utils::isUnset($request->supportEip)) {
            $query['SupportEip'] = $request->supportEip;
        }
        if (!Utils::isUnset($request->supportTracing)) {
            $query['SupportTracing'] = $request->supportTracing;
        }
        if (!Utils::isUnset($request->tracingStorageTime)) {
            $query['TracingStorageTime'] = $request->tracingStorageTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateQueueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateQueueResponse
     */
    public function createQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoDeleteState)) {
            $body['AutoDeleteState'] = $request->autoDeleteState;
        }
        if (!Utils::isUnset($request->autoExpireState)) {
            $body['AutoExpireState'] = $request->autoExpireState;
        }
        if (!Utils::isUnset($request->deadLetterExchange)) {
            $body['DeadLetterExchange'] = $request->deadLetterExchange;
        }
        if (!Utils::isUnset($request->deadLetterRoutingKey)) {
            $body['DeadLetterRoutingKey'] = $request->deadLetterRoutingKey;
        }
        if (!Utils::isUnset($request->exclusiveState)) {
            $body['ExclusiveState'] = $request->exclusiveState;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxLength)) {
            $body['MaxLength'] = $request->maxLength;
        }
        if (!Utils::isUnset($request->maximumPriority)) {
            $body['MaximumPriority'] = $request->maximumPriority;
        }
        if (!Utils::isUnset($request->messageTTL)) {
            $body['MessageTTL'] = $request->messageTTL;
        }
        if (!Utils::isUnset($request->queueName)) {
            $body['QueueName'] = $request->queueName;
        }
        if (!Utils::isUnset($request->virtualHost)) {
            $body['VirtualHost'] = $request->virtualHost;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateQueue',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateVirtualHostRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateVirtualHostResponse
     */
    public function createVirtualHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->virtualHost)) {
            $body['VirtualHost'] = $request->virtualHost;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVirtualHost',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVirtualHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTimestamp)) {
            $query['CreateTimestamp'] = $request->createTimestamp;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccount',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteBindingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBindingResponse
     */
    public function deleteBindingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bindingKey)) {
            $body['BindingKey'] = $request->bindingKey;
        }
        if (!Utils::isUnset($request->bindingType)) {
            $body['BindingType'] = $request->bindingType;
        }
        if (!Utils::isUnset($request->destinationName)) {
            $body['DestinationName'] = $request->destinationName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sourceExchange)) {
            $body['SourceExchange'] = $request->sourceExchange;
        }
        if (!Utils::isUnset($request->virtualHost)) {
            $body['VirtualHost'] = $request->virtualHost;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteBinding',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBindingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## [](#)Usage notes
     *   * *   You cannot delete exchanges of the **headers** and **x-jms-topic** types.
     *   * *   You cannot delete built-in exchanges in a vhost. These exchanges are amq.direct, amq.topic, and amq.fanout.
     *   *
     * @param DeleteExchangeRequest $request DeleteExchangeRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteExchangeResponse DeleteExchangeResponse
     */
    public function deleteExchangeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->exchangeName)) {
            $body['ExchangeName'] = $request->exchangeName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->virtualHost)) {
            $body['VirtualHost'] = $request->virtualHost;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteExchange',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteExchangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   You cannot delete exchanges of the **headers** and **x-jms-topic** types.
     *   * *   You cannot delete built-in exchanges in a vhost. These exchanges are amq.direct, amq.topic, and amq.fanout.
     *   *
     * @param DeleteExchangeRequest $request DeleteExchangeRequest
     *
     * @return DeleteExchangeResponse DeleteExchangeResponse
     */
    public function deleteExchange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteExchangeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQueueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteQueueResponse
     */
    public function deleteQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->queueName)) {
            $body['QueueName'] = $request->queueName;
        }
        if (!Utils::isUnset($request->virtualHost)) {
            $body['VirtualHost'] = $request->virtualHost;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteQueue',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * Before you delete a vhost, make sure that all exchanges and queues in the vhost are deleted.
     *   *
     * @param DeleteVirtualHostRequest $request DeleteVirtualHostRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVirtualHostResponse DeleteVirtualHostResponse
     */
    public function deleteVirtualHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->virtualHost)) {
            $body['VirtualHost'] = $request->virtualHost;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteVirtualHost',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVirtualHostResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you delete a vhost, make sure that all exchanges and queues in the vhost are deleted.
     *   *
     * @param DeleteVirtualHostRequest $request DeleteVirtualHostRequest
     *
     * @return DeleteVirtualHostResponse DeleteVirtualHostResponse
     */
    public function deleteVirtualHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualHostWithOptions($request, $runtime);
    }

    /**
     * @param GetMetadataAmountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetMetadataAmountResponse
     */
    public function getMetadataAmountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMetadataAmount',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMetadataAmountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListAccountsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAccountsResponse
     */
    public function listAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccounts',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListBindingsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListBindingsResponse
     */
    public function listBindingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBindings',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListDownStreamBindingsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListDownStreamBindingsResponse
     */
    public function listDownStreamBindingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDownStreamBindings',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDownStreamBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListExchangeUpStreamBindingsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListExchangeUpStreamBindingsResponse
     */
    public function listExchangeUpStreamBindingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExchangeUpStreamBindings',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExchangeUpStreamBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListExchangesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListExchangesResponse
     */
    public function listExchangesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExchanges',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExchangesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ApsaraMQ for RabbitMQ allows you to query only online consumers.
     *   *
     * @param ListQueueConsumersRequest $request ListQueueConsumersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQueueConsumersResponse ListQueueConsumersResponse
     */
    public function listQueueConsumersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueueConsumers',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQueueConsumersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ApsaraMQ for RabbitMQ allows you to query only online consumers.
     *   *
     * @param ListQueueConsumersRequest $request ListQueueConsumersRequest
     *
     * @return ListQueueConsumersResponse ListQueueConsumersResponse
     */
    public function listQueueConsumers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQueueConsumersWithOptions($request, $runtime);
    }

    /**
     * @param ListQueueUpStreamBindingsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListQueueUpStreamBindingsResponse
     */
    public function listQueueUpStreamBindingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueueUpStreamBindings',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQueueUpStreamBindingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListQueuesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListQueuesResponse
     */
    public function listQueuesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueues',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListVirtualHostsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListVirtualHostsResponse
     */
    public function listVirtualHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVirtualHosts',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListVirtualHostsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateInstanceNameRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateInstanceNameResponse
     */
    public function updateInstanceNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceName',
            'version'     => '2019-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
