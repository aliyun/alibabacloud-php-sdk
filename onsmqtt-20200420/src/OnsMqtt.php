<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ApplyTokenRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ApplyTokenResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\BatchQuerySessionByClientIdsRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\BatchQuerySessionByClientIdsResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\CreateGroupIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\CreateGroupIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteGroupIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteGroupIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListGroupIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListGroupIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QuerySessionByClientIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QuerySessionByClientIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryTokenRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryTokenResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RevokeTokenRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RevokeTokenResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\SendMessageRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\SendMessageResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class OnsMqtt extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('onsmqtt', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ApplyTokenRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ApplyTokenResponse
     */
    public function applyTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ApplyTokenResponse::fromMap($this->doRPCRequest('ApplyToken', '2020-04-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ApplyTokenRequest $request
     *
     * @return ApplyTokenResponse
     */
    public function applyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyTokenWithOptions($request, $runtime);
    }

    /**
     * @param BatchQuerySessionByClientIdsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchQuerySessionByClientIdsResponse
     */
    public function batchQuerySessionByClientIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchQuerySessionByClientIdsResponse::fromMap($this->doRPCRequest('BatchQuerySessionByClientIds', '2020-04-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchQuerySessionByClientIdsRequest $request
     *
     * @return BatchQuerySessionByClientIdsResponse
     */
    public function batchQuerySessionByClientIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchQuerySessionByClientIdsWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupIdRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateGroupIdResponse
     */
    public function createGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGroupIdResponse::fromMap($this->doRPCRequest('CreateGroupId', '2020-04-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGroupIdRequest $request
     *
     * @return CreateGroupIdResponse
     */
    public function createGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGroupIdRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteGroupIdResponse
     */
    public function deleteGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGroupIdResponse::fromMap($this->doRPCRequest('DeleteGroupId', '2020-04-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteGroupIdRequest $request
     *
     * @return DeleteGroupIdResponse
     */
    public function deleteGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param ListGroupIdRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListGroupIdResponse
     */
    public function listGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListGroupIdResponse::fromMap($this->doRPCRequest('ListGroupId', '2020-04-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListGroupIdRequest $request
     *
     * @return ListGroupIdResponse
     */
    public function listGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param QuerySessionByClientIdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySessionByClientIdResponse
     */
    public function querySessionByClientIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySessionByClientIdResponse::fromMap($this->doRPCRequest('QuerySessionByClientId', '2020-04-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySessionByClientIdRequest $request
     *
     * @return QuerySessionByClientIdResponse
     */
    public function querySessionByClientId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySessionByClientIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryTokenRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryTokenResponse
     */
    public function queryTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTokenResponse::fromMap($this->doRPCRequest('QueryToken', '2020-04-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTokenRequest $request
     *
     * @return QueryTokenResponse
     */
    public function queryToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTokenWithOptions($request, $runtime);
    }

    /**
     * @param RevokeTokenRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RevokeTokenResponse
     */
    public function revokeTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RevokeTokenResponse::fromMap($this->doRPCRequest('RevokeToken', '2020-04-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RevokeTokenRequest $request
     *
     * @return RevokeTokenResponse
     */
    public function revokeToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeTokenWithOptions($request, $runtime);
    }

    /**
     * @param SendMessageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SendMessageResponse
     */
    public function sendMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendMessageResponse::fromMap($this->doRPCRequest('SendMessage', '2020-04-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendMessageRequest $request
     *
     * @return SendMessageResponse
     */
    public function sendMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageWithOptions($request, $runtime);
    }
}
