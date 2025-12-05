<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dybaseapi\V20170525;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dybaseapi\V20170525\Models\QueryTokenForMnsQueueRequest;
use AlibabaCloud\SDK\Dybaseapi\V20170525\Models\QueryTokenForMnsQueueResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dybaseapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dybaseapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - QueryTokenForMnsQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTokenForMnsQueueResponse
     *
     * @param QueryTokenForMnsQueueRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryTokenForMnsQueueResponse
     */
    public function queryTokenForMnsQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->messageType) {
            @$query['MessageType'] = $request->messageType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->queueName) {
            @$query['QueueName'] = $request->queueName;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTokenForMnsQueue',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTokenForMnsQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTokenForMnsQueueRequest
     *
     * @returns QueryTokenForMnsQueueResponse
     *
     * @param QueryTokenForMnsQueueRequest $request
     *
     * @return QueryTokenForMnsQueueResponse
     */
    public function queryTokenForMnsQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTokenForMnsQueueWithOptions($request, $runtime);
    }
}
