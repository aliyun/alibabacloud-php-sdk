<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20191211;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\ApplyTokenRequest;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\ApplyTokenResponse;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\BatchQuerySessionByClientIdsRequest;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\BatchQuerySessionByClientIdsResponse;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\BatchSendMessagesRequest;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\BatchSendMessagesResponse;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\CreateGroupIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\CreateGroupIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\DeleteGroupIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\DeleteGroupIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\ListGroupIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\ListGroupIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\QuerySessionByClientIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\QuerySessionByClientIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\QueryTokenRequest;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\QueryTokenResponse;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\RevokeTokenRequest;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\RevokeTokenResponse;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\SendMessageRequest;
use AlibabaCloud\SDK\OnsMqtt\V20191211\Models\SendMessageResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
        $query = [];
        if (!Utils::isUnset($request->actions)) {
            $query['Actions'] = $request->actions;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resources)) {
            $query['Resources'] = $request->resources;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyToken',
            'version'     => '2019-12-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->clientIdList)) {
            $query['ClientIdList'] = $request->clientIdList;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchQuerySessionByClientIds',
            'version'     => '2019-12-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchQuerySessionByClientIdsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param BatchSendMessagesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchSendMessagesResponse
     */
    public function batchSendMessagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->messages)) {
            $query['Messages'] = $request->messages;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchSendMessages',
            'version'     => '2019-12-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSendMessagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchSendMessagesRequest $request
     *
     * @return BatchSendMessagesResponse
     */
    public function batchSendMessages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSendMessagesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroupId',
            'version'     => '2019-12-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroupId',
            'version'     => '2019-12-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroupId',
            'version'     => '2019-12-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySessionByClientId',
            'version'     => '2019-12-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySessionByClientIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryToken',
            'version'     => '2019-12-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTokenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeToken',
            'version'     => '2019-12-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mqttTopic)) {
            $query['MqttTopic'] = $request->mqttTopic;
        }
        if (!Utils::isUnset($request->payload)) {
            $query['Payload'] = $request->payload;
        }
        if (!Utils::isUnset($request->receiptId)) {
            $query['ReceiptId'] = $request->receiptId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendMessage',
            'version'     => '2019-12-11',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendMessageResponse::fromMap($this->callApi($params, $req, $runtime));
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
