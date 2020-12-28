<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateBindingRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateBindingResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateExchangeRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateExchangeResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateQueueRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateQueueResponse;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateVirtualHostRequest;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\CreateVirtualHostResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param CreateBindingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateBindingResponse
     */
    public function createBindingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateBindingResponse::fromMap($this->doRPCRequest('CreateBinding', '2019-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateExchangeResponse::fromMap($this->doRPCRequest('CreateExchange', '2019-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateQueueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateQueueResponse
     */
    public function createQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateQueueResponse::fromMap($this->doRPCRequest('CreateQueue', '2019-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateVirtualHostResponse::fromMap($this->doRPCRequest('CreateVirtualHost', '2019-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteBindingRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBindingResponse
     */
    public function deleteBindingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBindingResponse::fromMap($this->doRPCRequest('DeleteBinding', '2019-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteExchangeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteExchangeResponse
     */
    public function deleteExchangeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteExchangeResponse::fromMap($this->doRPCRequest('DeleteExchange', '2019-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DeleteQueueRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteQueueResponse
     */
    public function deleteQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteQueueResponse::fromMap($this->doRPCRequest('DeleteQueue', '2019-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DeleteVirtualHostRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteVirtualHostResponse
     */
    public function deleteVirtualHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVirtualHostResponse::fromMap($this->doRPCRequest('DeleteVirtualHost', '2019-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
            'query' => $query,
        ]);

        return GetMetadataAmountResponse::fromMap($this->doRPCRequest('GetMetadataAmount', '2019-12-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListBindingsResponse::fromMap($this->doRPCRequest('ListBindings', '2019-12-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListDownStreamBindingsResponse::fromMap($this->doRPCRequest('ListDownStreamBindings', '2019-12-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListExchangesResponse::fromMap($this->doRPCRequest('ListExchanges', '2019-12-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListExchangeUpStreamBindingsResponse::fromMap($this->doRPCRequest('ListExchangeUpStreamBindings', '2019-12-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListInstancesResponse::fromMap($this->doRPCRequest('ListInstances', '2019-12-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param ListQueueConsumersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListQueueConsumersResponse
     */
    public function listQueueConsumersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListQueueConsumersResponse::fromMap($this->doRPCRequest('ListQueueConsumers', '2019-12-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
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
            'query' => $query,
        ]);

        return ListQueuesResponse::fromMap($this->doRPCRequest('ListQueues', '2019-12-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListQueueUpStreamBindingsResponse::fromMap($this->doRPCRequest('ListQueueUpStreamBindings', '2019-12-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
            'query' => $query,
        ]);

        return ListVirtualHostsResponse::fromMap($this->doRPCRequest('ListVirtualHosts', '2019-12-12', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
}
