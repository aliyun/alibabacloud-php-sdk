<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ActiveCaCertificateRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ActiveCaCertificateResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ActiveDeviceCertificateRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ActiveDeviceCertificateResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\AddCustomAuthConnectBlackRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\AddCustomAuthConnectBlackResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\AddCustomAuthIdentityRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\AddCustomAuthIdentityResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\AddCustomAuthPermissionRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\AddCustomAuthPermissionResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ApplyTokenRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ApplyTokenResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\BatchQuerySessionByClientIdsRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\BatchQuerySessionByClientIdsResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\CloseConnectionRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\CloseConnectionResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\CreateGroupIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\CreateGroupIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteCaCertificateRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteCaCertificateResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteCustomAuthConnectBlackRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteCustomAuthConnectBlackResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteCustomAuthIdentityRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteCustomAuthIdentityResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteCustomAuthPermissionRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteCustomAuthPermissionResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteDeviceCertificateRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteDeviceCertificateResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteGroupIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DeleteGroupIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\GetCaCertificateRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\GetCaCertificateResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\GetDeviceCertificateRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\GetDeviceCertificateResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\GetDeviceCredentialRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\GetDeviceCredentialResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\GetRegisterCodeRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\GetRegisterCodeResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\InactivateCaCertificateRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\InactivateCaCertificateResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\InactivateDeviceCertificateRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\InactivateDeviceCertificateResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListCaCertificateRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListCaCertificateResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCertificateByCaSnRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCertificateByCaSnResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCertificateRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCertificateResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCredentialClientIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCredentialClientIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListGroupIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListGroupIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryCustomAuthConnectBlackRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryCustomAuthConnectBlackResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryCustomAuthIdentityRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryCustomAuthIdentityResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryCustomAuthPermissionRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryCustomAuthPermissionResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceDeviceRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceDeviceResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessageOfClientRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessageOfClientResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessagePublishRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessagePublishResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessageSubscribeRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessageSubscribeResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QuerySessionByClientIdRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QuerySessionByClientIdResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryTokenRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryTokenResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RefreshDeviceCredentialRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RefreshDeviceCredentialResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RegisterCaCertificateRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RegisterCaCertificateResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RegisterDeviceCredentialRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RegisterDeviceCredentialResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RevokeTokenRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RevokeTokenResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\SendMessageRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\SendMessageResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UnRegisterDeviceCredentialRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UnRegisterDeviceCredentialResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UpdateCustomAuthIdentityRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UpdateCustomAuthIdentityResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UpdateCustomAuthPermissionRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UpdateCustomAuthPermissionResponse;
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
     * @summary 激活CA证书
     *  *
     * @param ActiveCaCertificateRequest $request ActiveCaCertificateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ActiveCaCertificateResponse ActiveCaCertificateResponse
     */
    public function activeCaCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mqttInstanceId)) {
            $query['MqttInstanceId'] = $request->mqttInstanceId;
        }
        if (!Utils::isUnset($request->sn)) {
            $query['Sn'] = $request->sn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActiveCaCertificate',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActiveCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 激活CA证书
     *  *
     * @param ActiveCaCertificateRequest $request ActiveCaCertificateRequest
     *
     * @return ActiveCaCertificateResponse ActiveCaCertificateResponse
     */
    public function activeCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeCaCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary 激活设备证书
     *  *
     * @param ActiveDeviceCertificateRequest $request ActiveDeviceCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ActiveDeviceCertificateResponse ActiveDeviceCertificateResponse
     */
    public function activeDeviceCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caSn)) {
            $query['CaSn'] = $request->caSn;
        }
        if (!Utils::isUnset($request->deviceSn)) {
            $query['DeviceSn'] = $request->deviceSn;
        }
        if (!Utils::isUnset($request->mqttInstanceId)) {
            $query['MqttInstanceId'] = $request->mqttInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActiveDeviceCertificate',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActiveDeviceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 激活设备证书
     *  *
     * @param ActiveDeviceCertificateRequest $request ActiveDeviceCertificateRequest
     *
     * @return ActiveDeviceCertificateResponse ActiveDeviceCertificateResponse
     */
    public function activeDeviceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeDeviceCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a device to the connection blacklist to disable connections from the device.
     *  *
     * @param AddCustomAuthConnectBlackRequest $request AddCustomAuthConnectBlackRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddCustomAuthConnectBlackResponse AddCustomAuthConnectBlackResponse
     */
    public function addCustomAuthConnectBlackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddCustomAuthConnectBlack',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCustomAuthConnectBlackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a device to the connection blacklist to disable connections from the device.
     *  *
     * @param AddCustomAuthConnectBlackRequest $request AddCustomAuthConnectBlackRequest
     *
     * @return AddCustomAuthConnectBlackResponse AddCustomAuthConnectBlackResponse
     */
    public function addCustomAuthConnectBlack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomAuthConnectBlackWithOptions($request, $runtime);
    }

    /**
     * @summary Adds the information about identity authentication. The identity can be accurate to a client.
     *  *
     * @param AddCustomAuthIdentityRequest $request AddCustomAuthIdentityRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AddCustomAuthIdentityResponse AddCustomAuthIdentityResponse
     */
    public function addCustomAuthIdentityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->identityType)) {
            $body['IdentityType'] = $request->identityType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->secret)) {
            $body['Secret'] = $request->secret;
        }
        if (!Utils::isUnset($request->signMode)) {
            $body['SignMode'] = $request->signMode;
        }
        if (!Utils::isUnset($request->username)) {
            $body['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddCustomAuthIdentity',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCustomAuthIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds the information about identity authentication. The identity can be accurate to a client.
     *  *
     * @param AddCustomAuthIdentityRequest $request AddCustomAuthIdentityRequest
     *
     * @return AddCustomAuthIdentityResponse AddCustomAuthIdentityResponse
     */
    public function addCustomAuthIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomAuthIdentityWithOptions($request, $runtime);
    }

    /**
     * @summary Adds permissions on topics. You must create a level-1 topic in the ApsaraMQ for MQTT console before you call this operation.
     *  *
     * @param AddCustomAuthPermissionRequest $request AddCustomAuthPermissionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AddCustomAuthPermissionResponse AddCustomAuthPermissionResponse
     */
    public function addCustomAuthPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->effect)) {
            $body['Effect'] = $request->effect;
        }
        if (!Utils::isUnset($request->identity)) {
            $body['Identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->identityType)) {
            $body['IdentityType'] = $request->identityType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->permitAction)) {
            $body['PermitAction'] = $request->permitAction;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddCustomAuthPermission',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddCustomAuthPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds permissions on topics. You must create a level-1 topic in the ApsaraMQ for MQTT console before you call this operation.
     *  *
     * @param AddCustomAuthPermissionRequest $request AddCustomAuthPermissionRequest
     *
     * @return AddCustomAuthPermissionResponse AddCustomAuthPermissionResponse
     */
    public function addCustomAuthPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomAuthPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Applies for a token from ApsaraMQ for MQTT. If token-based authentication is used for permission authentication on an ApsaraMQ for MQTT broker, a token that is issued by the broker is required for authentication each time a client is connected to the broker.
     *  *
     * @description *   You can call this operation up to 100 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     * *   Each successful call to the **ApplyToken** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param ApplyTokenRequest $request ApplyTokenRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyTokenResponse ApplyTokenResponse
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
            'version'     => '2020-04-20',
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
     * @summary Applies for a token from ApsaraMQ for MQTT. If token-based authentication is used for permission authentication on an ApsaraMQ for MQTT broker, a token that is issued by the broker is required for authentication each time a client is connected to the broker.
     *  *
     * @description *   You can call this operation up to 100 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     * *   Each successful call to the **ApplyToken** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param ApplyTokenRequest $request ApplyTokenRequest
     *
     * @return ApplyTokenResponse ApplyTokenResponse
     */
    public function applyToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of multiple ApsaraMQ for MQTT clients by client ID.
     *  *
     * @description *   You can call the **BatchQuerySessionByClientIds** operation up to 100 times per second. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   You can call the **BatchQuerySessionByClientIds** operation to query the status of up to 10 ApsaraMQ for MQTT clients in a single query.
     * *   Each successful call to the **BatchQuerySessionByClientIds** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param BatchQuerySessionByClientIdsRequest $request BatchQuerySessionByClientIdsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchQuerySessionByClientIdsResponse BatchQuerySessionByClientIdsResponse
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
            'version'     => '2020-04-20',
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
     * @summary Queries the status of multiple ApsaraMQ for MQTT clients by client ID.
     *  *
     * @description *   You can call the **BatchQuerySessionByClientIds** operation up to 100 times per second. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   You can call the **BatchQuerySessionByClientIds** operation to query the status of up to 10 ApsaraMQ for MQTT clients in a single query.
     * *   Each successful call to the **BatchQuerySessionByClientIds** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param BatchQuerySessionByClientIdsRequest $request BatchQuerySessionByClientIdsRequest
     *
     * @return BatchQuerySessionByClientIdsResponse BatchQuerySessionByClientIdsResponse
     */
    public function batchQuerySessionByClientIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchQuerySessionByClientIdsWithOptions($request, $runtime);
    }

    /**
     * @summary 关闭设备连接
     *  *
     * @param CloseConnectionRequest $request CloseConnectionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseConnectionResponse CloseConnectionResponse
     */
    public function closeConnectionWithOptions($request, $runtime)
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
            'action'      => 'CloseConnection',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 关闭设备连接
     *  *
     * @param CloseConnectionRequest $request CloseConnectionRequest
     *
     * @return CloseConnectionResponse CloseConnectionResponse
     */
    public function closeConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeConnectionWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a group ID. Before you connect producers and consumers to an ApsaraMQ for MQTT broker to send and receive messages, you must specify a unique ID for each client for identification. A client ID is in the format of \\<GroupID>@@@\\<DeviceID>. In the preceding format, DeviceID is the custom ID that you specify for the client, and GroupID is the ID of the group that you create on the ApsaraMQ for MQTT broker in advance.
     *  *
     * @description Each successful call to the **CreateGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param CreateGroupIdRequest $request CreateGroupIdRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGroupIdResponse CreateGroupIdResponse
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
            'version'     => '2020-04-20',
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
     * @summary Creates a group ID. Before you connect producers and consumers to an ApsaraMQ for MQTT broker to send and receive messages, you must specify a unique ID for each client for identification. A client ID is in the format of \\<GroupID>@@@\\<DeviceID>. In the preceding format, DeviceID is the custom ID that you specify for the client, and GroupID is the ID of the group that you create on the ApsaraMQ for MQTT broker in advance.
     *  *
     * @description Each successful call to the **CreateGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param CreateGroupIdRequest $request CreateGroupIdRequest
     *
     * @return CreateGroupIdResponse CreateGroupIdResponse
     */
    public function createGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupIdWithOptions($request, $runtime);
    }

    /**
     * @summary 删除CA证书
     *  *
     * @param DeleteCaCertificateRequest $request DeleteCaCertificateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCaCertificateResponse DeleteCaCertificateResponse
     */
    public function deleteCaCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mqttInstanceId)) {
            $query['MqttInstanceId'] = $request->mqttInstanceId;
        }
        if (!Utils::isUnset($request->sn)) {
            $query['Sn'] = $request->sn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCaCertificate',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除CA证书
     *  *
     * @param DeleteCaCertificateRequest $request DeleteCaCertificateRequest
     *
     * @return DeleteCaCertificateResponse DeleteCaCertificateResponse
     */
    public function deleteCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCaCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary 删除自定义权限连接黑名单
     *  *
     * @param DeleteCustomAuthConnectBlackRequest $request DeleteCustomAuthConnectBlackRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomAuthConnectBlackResponse DeleteCustomAuthConnectBlackResponse
     */
    public function deleteCustomAuthConnectBlackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomAuthConnectBlack',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomAuthConnectBlackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除自定义权限连接黑名单
     *  *
     * @param DeleteCustomAuthConnectBlackRequest $request DeleteCustomAuthConnectBlackRequest
     *
     * @return DeleteCustomAuthConnectBlackResponse DeleteCustomAuthConnectBlackResponse
     */
    public function deleteCustomAuthConnectBlack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomAuthConnectBlackWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an identity for custom authorization.
     *  *
     * @param DeleteCustomAuthIdentityRequest $request DeleteCustomAuthIdentityRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomAuthIdentityResponse DeleteCustomAuthIdentityResponse
     */
    public function deleteCustomAuthIdentityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->identityType)) {
            $body['IdentityType'] = $request->identityType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->username)) {
            $body['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomAuthIdentity',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomAuthIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an identity for custom authorization.
     *  *
     * @param DeleteCustomAuthIdentityRequest $request DeleteCustomAuthIdentityRequest
     *
     * @return DeleteCustomAuthIdentityResponse DeleteCustomAuthIdentityResponse
     */
    public function deleteCustomAuthIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomAuthIdentityWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes permissions on a topic.
     *  *
     * @param DeleteCustomAuthPermissionRequest $request DeleteCustomAuthPermissionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomAuthPermissionResponse DeleteCustomAuthPermissionResponse
     */
    public function deleteCustomAuthPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->identity)) {
            $body['Identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->identityType)) {
            $body['IdentityType'] = $request->identityType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomAuthPermission',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomAuthPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes permissions on a topic.
     *  *
     * @param DeleteCustomAuthPermissionRequest $request DeleteCustomAuthPermissionRequest
     *
     * @return DeleteCustomAuthPermissionResponse DeleteCustomAuthPermissionResponse
     */
    public function deleteCustomAuthPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomAuthPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary 删除设备证书
     *  *
     * @param DeleteDeviceCertificateRequest $request DeleteDeviceCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDeviceCertificateResponse DeleteDeviceCertificateResponse
     */
    public function deleteDeviceCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caSn)) {
            $query['CaSn'] = $request->caSn;
        }
        if (!Utils::isUnset($request->deviceSn)) {
            $query['DeviceSn'] = $request->deviceSn;
        }
        if (!Utils::isUnset($request->mqttInstanceId)) {
            $query['MqttInstanceId'] = $request->mqttInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceCertificate',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除设备证书
     *  *
     * @param DeleteDeviceCertificateRequest $request DeleteDeviceCertificateRequest
     *
     * @return DeleteDeviceCertificateResponse DeleteDeviceCertificateResponse
     */
    public function deleteDeviceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a group from an ApsaraMQ for MQTT instance.
     *  *
     * @description Each successful call to the **DeleteGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param DeleteGroupIdRequest $request DeleteGroupIdRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGroupIdResponse DeleteGroupIdResponse
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
            'version'     => '2020-04-20',
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
     * @summary Deletes a group from an ApsaraMQ for MQTT instance.
     *  *
     * @description Each successful call to the **DeleteGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param DeleteGroupIdRequest $request DeleteGroupIdRequest
     *
     * @return DeleteGroupIdResponse DeleteGroupIdResponse
     */
    public function deleteGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupIdWithOptions($request, $runtime);
    }

    /**
     * @summary 根据SN返回CA证书
     *  *
     * @param GetCaCertificateRequest $request GetCaCertificateRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCaCertificateResponse GetCaCertificateResponse
     */
    public function getCaCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCaCertificate',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据SN返回CA证书
     *  *
     * @param GetCaCertificateRequest $request GetCaCertificateRequest
     *
     * @return GetCaCertificateResponse GetCaCertificateResponse
     */
    public function getCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCaCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary 获取设备证书
     *  *
     * @param GetDeviceCertificateRequest $request GetDeviceCertificateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeviceCertificateResponse GetDeviceCertificateResponse
     */
    public function getDeviceCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceCertificate',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取设备证书
     *  *
     * @param GetDeviceCertificateRequest $request GetDeviceCertificateRequest
     *
     * @return GetDeviceCertificateResponse GetDeviceCertificateResponse
     */
    public function getDeviceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the access credential of a device. If unique-certificate-per-device authentication is used as the authentication method on an ApsaraMQ for MQTT broker, an access credential that you apply for in advance is required for authentication when you connect your device to the broker. The connection can be established only after the authentication is passed.
     *  *
     * @description *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **GetDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param GetDeviceCredentialRequest $request GetDeviceCredentialRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeviceCredentialResponse GetDeviceCredentialResponse
     */
    public function getDeviceCredentialWithOptions($request, $runtime)
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
            'action'      => 'GetDeviceCredential',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the access credential of a device. If unique-certificate-per-device authentication is used as the authentication method on an ApsaraMQ for MQTT broker, an access credential that you apply for in advance is required for authentication when you connect your device to the broker. The connection can be established only after the authentication is passed.
     *  *
     * @description *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **GetDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param GetDeviceCredentialRequest $request GetDeviceCredentialRequest
     *
     * @return GetDeviceCredentialResponse GetDeviceCredentialResponse
     */
    public function getDeviceCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceCredentialWithOptions($request, $runtime);
    }

    /**
     * @summary 获取添加CA证书的注册码
     *  *
     * @param GetRegisterCodeRequest $request GetRegisterCodeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRegisterCodeResponse GetRegisterCodeResponse
     */
    public function getRegisterCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRegisterCode',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRegisterCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取添加CA证书的注册码
     *  *
     * @param GetRegisterCodeRequest $request GetRegisterCodeRequest
     *
     * @return GetRegisterCodeResponse GetRegisterCodeResponse
     */
    public function getRegisterCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegisterCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 注销CA证书
     *  *
     * @param InactivateCaCertificateRequest $request InactivateCaCertificateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return InactivateCaCertificateResponse InactivateCaCertificateResponse
     */
    public function inactivateCaCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mqttInstanceId)) {
            $query['MqttInstanceId'] = $request->mqttInstanceId;
        }
        if (!Utils::isUnset($request->sn)) {
            $query['Sn'] = $request->sn;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InactivateCaCertificate',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InactivateCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 注销CA证书
     *  *
     * @param InactivateCaCertificateRequest $request InactivateCaCertificateRequest
     *
     * @return InactivateCaCertificateResponse InactivateCaCertificateResponse
     */
    public function inactivateCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inactivateCaCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary 注销设备证书
     *  *
     * @param InactivateDeviceCertificateRequest $request InactivateDeviceCertificateRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return InactivateDeviceCertificateResponse InactivateDeviceCertificateResponse
     */
    public function inactivateDeviceCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caSn)) {
            $query['CaSn'] = $request->caSn;
        }
        if (!Utils::isUnset($request->deviceSn)) {
            $query['DeviceSn'] = $request->deviceSn;
        }
        if (!Utils::isUnset($request->mqttInstanceId)) {
            $query['MqttInstanceId'] = $request->mqttInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InactivateDeviceCertificate',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InactivateDeviceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 注销设备证书
     *  *
     * @param InactivateDeviceCertificateRequest $request InactivateDeviceCertificateRequest
     *
     * @return InactivateDeviceCertificateResponse InactivateDeviceCertificateResponse
     */
    public function inactivateDeviceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inactivateDeviceCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary 根据实例ID 分页获取CA证书
     *  *
     * @param ListCaCertificateRequest $request ListCaCertificateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCaCertificateResponse ListCaCertificateResponse
     */
    public function listCaCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCaCertificate',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据实例ID 分页获取CA证书
     *  *
     * @param ListCaCertificateRequest $request ListCaCertificateRequest
     *
     * @return ListCaCertificateResponse ListCaCertificateResponse
     */
    public function listCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCaCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary 获取设备证书列表
     *  *
     * @param ListDeviceCertificateRequest $request ListDeviceCertificateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeviceCertificateResponse ListDeviceCertificateResponse
     */
    public function listDeviceCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeviceCertificate',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeviceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取设备证书列表
     *  *
     * @param ListDeviceCertificateRequest $request ListDeviceCertificateRequest
     *
     * @return ListDeviceCertificateResponse ListDeviceCertificateResponse
     */
    public function listDeviceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary 获取设备证书列表
     *  *
     * @param ListDeviceCertificateByCaSnRequest $request ListDeviceCertificateByCaSnRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeviceCertificateByCaSnResponse ListDeviceCertificateByCaSnResponse
     */
    public function listDeviceCertificateByCaSnWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeviceCertificateByCaSn',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeviceCertificateByCaSnResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取设备证书列表
     *  *
     * @param ListDeviceCertificateByCaSnRequest $request ListDeviceCertificateByCaSnRequest
     *
     * @return ListDeviceCertificateByCaSnResponse ListDeviceCertificateByCaSnResponse
     */
    public function listDeviceCertificateByCaSn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceCertificateByCaSnWithOptions($request, $runtime);
    }

    /**
     * @summary 列出注册的一机一密的设备ID
     *  *
     * @param ListDeviceCredentialClientIdRequest $request ListDeviceCredentialClientIdRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeviceCredentialClientIdResponse ListDeviceCredentialClientIdResponse
     */
    public function listDeviceCredentialClientIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeviceCredentialClientId',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeviceCredentialClientIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列出注册的一机一密的设备ID
     *  *
     * @param ListDeviceCredentialClientIdRequest $request ListDeviceCredentialClientIdRequest
     *
     * @return ListDeviceCredentialClientIdResponse ListDeviceCredentialClientIdResponse
     */
    public function listDeviceCredentialClientId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceCredentialClientIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all groups on an ApsaraMQ for MQTT instance.
     *  *
     * @description Each successful call to the **ListGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param ListGroupIdRequest $request ListGroupIdRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupIdResponse ListGroupIdResponse
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
            'version'     => '2020-04-20',
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
     * @summary Queries all groups on an ApsaraMQ for MQTT instance.
     *  *
     * @description Each successful call to the **ListGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param ListGroupIdRequest $request ListGroupIdRequest
     *
     * @return ListGroupIdResponse ListGroupIdResponse
     */
    public function listGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listGroupIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a client ID in a connection blacklist.
     *  *
     * @param QueryCustomAuthConnectBlackRequest $request QueryCustomAuthConnectBlackRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCustomAuthConnectBlackResponse QueryCustomAuthConnectBlackResponse
     */
    public function queryCustomAuthConnectBlackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCustomAuthConnectBlack',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCustomAuthConnectBlackResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a client ID in a connection blacklist.
     *  *
     * @param QueryCustomAuthConnectBlackRequest $request QueryCustomAuthConnectBlackRequest
     *
     * @return QueryCustomAuthConnectBlackResponse QueryCustomAuthConnectBlackResponse
     */
    public function queryCustomAuthConnectBlack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomAuthConnectBlackWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about custom identity authentication.
     *  *
     * @param QueryCustomAuthIdentityRequest $request QueryCustomAuthIdentityRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCustomAuthIdentityResponse QueryCustomAuthIdentityResponse
     */
    public function queryCustomAuthIdentityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCustomAuthIdentity',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCustomAuthIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about custom identity authentication.
     *  *
     * @param QueryCustomAuthIdentityRequest $request QueryCustomAuthIdentityRequest
     *
     * @return QueryCustomAuthIdentityResponse QueryCustomAuthIdentityResponse
     */
    public function queryCustomAuthIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomAuthIdentityWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the authorization information about a topic.
     *  *
     * @param QueryCustomAuthPermissionRequest $request QueryCustomAuthPermissionRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCustomAuthPermissionResponse QueryCustomAuthPermissionResponse
     */
    public function queryCustomAuthPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCustomAuthPermission',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCustomAuthPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the authorization information about a topic.
     *  *
     * @param QueryCustomAuthPermissionRequest $request QueryCustomAuthPermissionRequest
     *
     * @return QueryCustomAuthPermissionResponse QueryCustomAuthPermissionResponse
     */
    public function queryCustomAuthPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomAuthPermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the trace of a device that corresponds to an ApsaraMQ for MQTT client by page. When the status of a device is abnormal, you can call this operation to query the connection history of the device. This helps you efficiently troubleshoot issues.
     *  *
     * @description *   Each successful call to the **QueryMqttTraceDevice** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *  *
     * @param QueryMqttTraceDeviceRequest $request QueryMqttTraceDeviceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMqttTraceDeviceResponse QueryMqttTraceDeviceResponse
     */
    public function queryMqttTraceDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mqttRegionId)) {
            $query['MqttRegionId'] = $request->mqttRegionId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMqttTraceDevice',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMqttTraceDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the trace of a device that corresponds to an ApsaraMQ for MQTT client by page. When the status of a device is abnormal, you can call this operation to query the connection history of the device. This helps you efficiently troubleshoot issues.
     *  *
     * @description *   Each successful call to the **QueryMqttTraceDevice** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *  *
     * @param QueryMqttTraceDeviceRequest $request QueryMqttTraceDeviceRequest
     *
     * @return QueryMqttTraceDeviceResponse QueryMqttTraceDeviceResponse
     */
    public function queryMqttTraceDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMqttTraceDeviceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries messages on a device within a specific period of time. If a message is not sent or received as expected, you can call this operation to query the messaging status of the message to efficiently troubleshoot issues.
     *  *
     * @description *   Each successful call to the **QueryMqttTraceMessageOfClient** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *  *
     * @param QueryMqttTraceMessageOfClientRequest $request QueryMqttTraceMessageOfClientRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMqttTraceMessageOfClientResponse QueryMqttTraceMessageOfClientResponse
     */
    public function queryMqttTraceMessageOfClientWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mqttRegionId)) {
            $query['MqttRegionId'] = $request->mqttRegionId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMqttTraceMessageOfClient',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMqttTraceMessageOfClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries messages on a device within a specific period of time. If a message is not sent or received as expected, you can call this operation to query the messaging status of the message to efficiently troubleshoot issues.
     *  *
     * @description *   Each successful call to the **QueryMqttTraceMessageOfClient** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *  *
     * @param QueryMqttTraceMessageOfClientRequest $request QueryMqttTraceMessageOfClientRequest
     *
     * @return QueryMqttTraceMessageOfClientResponse QueryMqttTraceMessageOfClientResponse
     */
    public function queryMqttTraceMessageOfClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMqttTraceMessageOfClientWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the trace of a message. If a message is not sent or received as expected, you can call this operation to view the message details to troubleshoot the issue. For example, you can query the time when the message is published and the client that publishes the message.
     *  *
     * @description *   Each successful call to the **QueryMqttTraceMessagePublish** operation increases the messaging transactions per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *  *
     * @param QueryMqttTraceMessagePublishRequest $request QueryMqttTraceMessagePublishRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMqttTraceMessagePublishResponse QueryMqttTraceMessagePublishResponse
     */
    public function queryMqttTraceMessagePublishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mqttRegionId)) {
            $query['MqttRegionId'] = $request->mqttRegionId;
        }
        if (!Utils::isUnset($request->msgId)) {
            $query['MsgId'] = $request->msgId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMqttTraceMessagePublish',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMqttTraceMessagePublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the trace of a message. If a message is not sent or received as expected, you can call this operation to view the message details to troubleshoot the issue. For example, you can query the time when the message is published and the client that publishes the message.
     *  *
     * @description *   Each successful call to the **QueryMqttTraceMessagePublish** operation increases the messaging transactions per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *  *
     * @param QueryMqttTraceMessagePublishRequest $request QueryMqttTraceMessagePublishRequest
     *
     * @return QueryMqttTraceMessagePublishResponse QueryMqttTraceMessagePublishResponse
     */
    public function queryMqttTraceMessagePublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMqttTraceMessagePublishWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the delivery trace of a message. If a message is not sent or received as expected, you can call this operation to view the details about the message. For example, you can query the clients that subscribe to the message and the time when the message is delivered. This operation helps you locate the problem and identify the cause of the problem.
     *  *
     * @description *   Each successful call to the **QueryMqttTraceMessageSubscribe** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *  *
     * @param QueryMqttTraceMessageSubscribeRequest $request QueryMqttTraceMessageSubscribeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMqttTraceMessageSubscribeResponse QueryMqttTraceMessageSubscribeResponse
     */
    public function queryMqttTraceMessageSubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->clientId)) {
            $query['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->mqttRegionId)) {
            $query['MqttRegionId'] = $request->mqttRegionId;
        }
        if (!Utils::isUnset($request->msgId)) {
            $query['MsgId'] = $request->msgId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->reverse)) {
            $query['Reverse'] = $request->reverse;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMqttTraceMessageSubscribe',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMqttTraceMessageSubscribeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the delivery trace of a message. If a message is not sent or received as expected, you can call this operation to view the details about the message. For example, you can query the clients that subscribe to the message and the time when the message is delivered. This operation helps you locate the problem and identify the cause of the problem.
     *  *
     * @description *   Each successful call to the **QueryMqttTraceMessageSubscribe** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *  *
     * @param QueryMqttTraceMessageSubscribeRequest $request QueryMqttTraceMessageSubscribeRequest
     *
     * @return QueryMqttTraceMessageSubscribeResponse QueryMqttTraceMessageSubscribeResponse
     */
    public function queryMqttTraceMessageSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMqttTraceMessageSubscribeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the running status of an ApsaraMQ for MQTT client. You can troubleshoot issues based on the queried results. You can enter the ID of an ApsaraMQ for MQTT client to check the connection status and IP address of the device.
     *  *
     * @description *   You can call this operation up to 500 times per second.**** For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **QuerySessionByClientId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param QuerySessionByClientIdRequest $request QuerySessionByClientIdRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySessionByClientIdResponse QuerySessionByClientIdResponse
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
            'version'     => '2020-04-20',
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
     * @summary Queries the running status of an ApsaraMQ for MQTT client. You can troubleshoot issues based on the queried results. You can enter the ID of an ApsaraMQ for MQTT client to check the connection status and IP address of the device.
     *  *
     * @description *   You can call this operation up to 500 times per second.**** For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **QuerySessionByClientId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param QuerySessionByClientIdRequest $request QuerySessionByClientIdRequest
     *
     * @return QuerySessionByClientIdResponse QuerySessionByClientIdResponse
     */
    public function querySessionByClientId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySessionByClientIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of a token. If token-based authentication is used for permission authentication on an ApsaraMQ for MQTT broker, a token that is issued by the broker is required for authentication each time a client is connected to the broker. A token is a temporary credential and is valid only within a specific period of time. You can call this operation to query whether a token expires.
     *  *
     * @description *   You can call this operation up to 100 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     * *   Each successful call to the **QueryToken** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param QueryTokenRequest $request QueryTokenRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTokenResponse QueryTokenResponse
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
            'version'     => '2020-04-20',
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
     * @summary Queries the status of a token. If token-based authentication is used for permission authentication on an ApsaraMQ for MQTT broker, a token that is issued by the broker is required for authentication each time a client is connected to the broker. A token is a temporary credential and is valid only within a specific period of time. You can call this operation to query whether a token expires.
     *  *
     * @description *   You can call this operation up to 100 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     * *   Each successful call to the **QueryToken** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param QueryTokenRequest $request QueryTokenRequest
     *
     * @return QueryTokenResponse QueryTokenResponse
     */
    public function queryToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the access credential of a device.
     *  *
     * @description ## [](#)Limits
     * You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * >  Each successful call to the **RefreshDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param RefreshDeviceCredentialRequest $request RefreshDeviceCredentialRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshDeviceCredentialResponse RefreshDeviceCredentialResponse
     */
    public function refreshDeviceCredentialWithOptions($request, $runtime)
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
            'action'      => 'RefreshDeviceCredential',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RefreshDeviceCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the access credential of a device.
     *  *
     * @description ## [](#)Limits
     * You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * >  Each successful call to the **RefreshDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param RefreshDeviceCredentialRequest $request RefreshDeviceCredentialRequest
     *
     * @return RefreshDeviceCredentialResponse RefreshDeviceCredentialResponse
     */
    public function refreshDeviceCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDeviceCredentialWithOptions($request, $runtime);
    }

    /**
     * @summary 注册CA证书
     *  *
     * @param RegisterCaCertificateRequest $request RegisterCaCertificateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterCaCertificateResponse RegisterCaCertificateResponse
     */
    public function registerCaCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caContent)) {
            $query['CaContent'] = $request->caContent;
        }
        if (!Utils::isUnset($request->caName)) {
            $query['CaName'] = $request->caName;
        }
        if (!Utils::isUnset($request->mqttInstanceId)) {
            $query['MqttInstanceId'] = $request->mqttInstanceId;
        }
        if (!Utils::isUnset($request->verificationContent)) {
            $query['VerificationContent'] = $request->verificationContent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RegisterCaCertificate',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 注册CA证书
     *  *
     * @param RegisterCaCertificateRequest $request RegisterCaCertificateRequest
     *
     * @return RegisterCaCertificateResponse RegisterCaCertificateResponse
     */
    public function registerCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerCaCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary Registers an access credential for a device. In unique-certificate-per-device authentication mode, an application server applies a unique access credential for each device from the corresponding ApsaraMQ for MQTT broker. The access credential of a device consists of the client ID, AccessKey ID, and AccessKey secret of the device. When you connect a device to ApsaraMQ for MQTT, you must configure Username and Password based on the access credential of the device for authentication. You can activate the device and transfer data between the device and ApsaraMQ for MQTT only after the authentication is passed.
     *  *
     * @description *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **RegisterDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param RegisterDeviceCredentialRequest $request RegisterDeviceCredentialRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterDeviceCredentialResponse RegisterDeviceCredentialResponse
     */
    public function registerDeviceCredentialWithOptions($request, $runtime)
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
            'action'      => 'RegisterDeviceCredential',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RegisterDeviceCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Registers an access credential for a device. In unique-certificate-per-device authentication mode, an application server applies a unique access credential for each device from the corresponding ApsaraMQ for MQTT broker. The access credential of a device consists of the client ID, AccessKey ID, and AccessKey secret of the device. When you connect a device to ApsaraMQ for MQTT, you must configure Username and Password based on the access credential of the device for authentication. You can activate the device and transfer data between the device and ApsaraMQ for MQTT only after the authentication is passed.
     *  *
     * @description *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **RegisterDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param RegisterDeviceCredentialRequest $request RegisterDeviceCredentialRequest
     *
     * @return RegisterDeviceCredentialResponse RegisterDeviceCredentialResponse
     */
    public function registerDeviceCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDeviceCredentialWithOptions($request, $runtime);
    }

    /**
     * @summary Revokes a token.
     *  *
     * @description *   You can call this operation up to 5 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     * *   Each successful call to the **RevokeToken** operation increases the messaging transactions per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param RevokeTokenRequest $request RevokeTokenRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeTokenResponse RevokeTokenResponse
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
            'version'     => '2020-04-20',
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
     * @summary Revokes a token.
     *  *
     * @description *   You can call this operation up to 5 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     * *   Each successful call to the **RevokeToken** operation increases the messaging transactions per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param RevokeTokenRequest $request RevokeTokenRequest
     *
     * @return RevokeTokenResponse RevokeTokenResponse
     */
    public function revokeToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Sends a single message from an application on a cloud server to ApsaraMQ for MQTT.
     *  *
     * @description *   The **SendMessage** operation is called by applications on cloud servers. It is complementary to the operation that is called by ApsaraMQ for MQTT clients to send messages. For information about the differences between the scenarios of sending messages from applications on cloud servers and the scenarios of sending messages from ApsaraMQ for MQTT clients, see [Developer guide](https://help.aliyun.com/document_detail/179160.html).
     * *   Before you call the **SendMessage** operation, make sure that the kernel version of your ApsaraMQ for MQTT instance is 3.3.0 or later. You can obtain the information about the kernel version on the [Instance Details](https://mqtt.console.aliyun.com) page that corresponds to the instance in the **ApsaraMQ for MQTT console**.
     * *   Messages that are sent by calling the **SendMessage** operation cannot be forwarded to ApsaraMQ for RocketMQ. If you want to use an ApsaraMQ for MQTT to forward messages to ApsaraMQ for RocketMQ, send the messages by using an SDK. For more information, see [Export data from ApsaraMQ for MQTT to other Alibaba Cloud services](https://help.aliyun.com/document_detail/174527.html). You can call the **SendMessage** operation up to 1,000 times per second. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **SendMessage** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For information about the billing details, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param SendMessageRequest $request SendMessageRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SendMessageResponse SendMessageResponse
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendMessage',
            'version'     => '2020-04-20',
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
     * @summary Sends a single message from an application on a cloud server to ApsaraMQ for MQTT.
     *  *
     * @description *   The **SendMessage** operation is called by applications on cloud servers. It is complementary to the operation that is called by ApsaraMQ for MQTT clients to send messages. For information about the differences between the scenarios of sending messages from applications on cloud servers and the scenarios of sending messages from ApsaraMQ for MQTT clients, see [Developer guide](https://help.aliyun.com/document_detail/179160.html).
     * *   Before you call the **SendMessage** operation, make sure that the kernel version of your ApsaraMQ for MQTT instance is 3.3.0 or later. You can obtain the information about the kernel version on the [Instance Details](https://mqtt.console.aliyun.com) page that corresponds to the instance in the **ApsaraMQ for MQTT console**.
     * *   Messages that are sent by calling the **SendMessage** operation cannot be forwarded to ApsaraMQ for RocketMQ. If you want to use an ApsaraMQ for MQTT to forward messages to ApsaraMQ for RocketMQ, send the messages by using an SDK. For more information, see [Export data from ApsaraMQ for MQTT to other Alibaba Cloud services](https://help.aliyun.com/document_detail/174527.html). You can call the **SendMessage** operation up to 1,000 times per second. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **SendMessage** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For information about the billing details, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param SendMessageRequest $request SendMessageRequest
     *
     * @return SendMessageResponse SendMessageResponse
     */
    public function sendMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageWithOptions($request, $runtime);
    }

    /**
     * @summary Deregisters the access credential of a device. After the access credential of a device is deregistered, you can no longer use the access credential to authenticate the device on the ApsaraMQ for MQTT broker.
     *  *
     * @description *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **UnRegisterDeviceCredential** operation increases the number of transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param UnRegisterDeviceCredentialRequest $request UnRegisterDeviceCredentialRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UnRegisterDeviceCredentialResponse UnRegisterDeviceCredentialResponse
     */
    public function unRegisterDeviceCredentialWithOptions($request, $runtime)
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
            'action'      => 'UnRegisterDeviceCredential',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnRegisterDeviceCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deregisters the access credential of a device. After the access credential of a device is deregistered, you can no longer use the access credential to authenticate the device on the ApsaraMQ for MQTT broker.
     *  *
     * @description *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **UnRegisterDeviceCredential** operation increases the number of transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *  *
     * @param UnRegisterDeviceCredentialRequest $request UnRegisterDeviceCredentialRequest
     *
     * @return UnRegisterDeviceCredentialResponse UnRegisterDeviceCredentialResponse
     */
    public function unRegisterDeviceCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unRegisterDeviceCredentialWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about custom identity authentication.
     *  *
     * @param UpdateCustomAuthIdentityRequest $request UpdateCustomAuthIdentityRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomAuthIdentityResponse UpdateCustomAuthIdentityResponse
     */
    public function updateCustomAuthIdentityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->identityType)) {
            $body['IdentityType'] = $request->identityType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->secret)) {
            $body['Secret'] = $request->secret;
        }
        if (!Utils::isUnset($request->signMode)) {
            $body['SignMode'] = $request->signMode;
        }
        if (!Utils::isUnset($request->username)) {
            $body['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomAuthIdentity',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomAuthIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about custom identity authentication.
     *  *
     * @param UpdateCustomAuthIdentityRequest $request UpdateCustomAuthIdentityRequest
     *
     * @return UpdateCustomAuthIdentityResponse UpdateCustomAuthIdentityResponse
     */
    public function updateCustomAuthIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomAuthIdentityWithOptions($request, $runtime);
    }

    /**
     * @summary 更新自定义权限授权
     *  *
     * @param UpdateCustomAuthPermissionRequest $request UpdateCustomAuthPermissionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomAuthPermissionResponse UpdateCustomAuthPermissionResponse
     */
    public function updateCustomAuthPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->effect)) {
            $body['Effect'] = $request->effect;
        }
        if (!Utils::isUnset($request->identity)) {
            $body['Identity'] = $request->identity;
        }
        if (!Utils::isUnset($request->identityType)) {
            $body['IdentityType'] = $request->identityType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->permitAction)) {
            $body['PermitAction'] = $request->permitAction;
        }
        if (!Utils::isUnset($request->topic)) {
            $body['Topic'] = $request->topic;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomAuthPermission',
            'version'     => '2020-04-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCustomAuthPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新自定义权限授权
     *  *
     * @param UpdateCustomAuthPermissionRequest $request UpdateCustomAuthPermissionRequest
     *
     * @return UpdateCustomAuthPermissionResponse UpdateCustomAuthPermissionResponse
     */
    public function updateCustomAuthPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomAuthPermissionWithOptions($request, $runtime);
    }
}
