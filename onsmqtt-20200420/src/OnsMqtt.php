<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DisasterDowngradeRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DisasterDowngradeResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DisasterRecoveryRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\DisasterRecoveryResponse;
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
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListInstancesRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListInstancesResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListTagResourcesResponse;
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
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\SetSniConfigRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\SetSniConfigResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\TagResourcesRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\TagResourcesResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UnRegisterDeviceCredentialRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UnRegisterDeviceCredentialResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UpdateCustomAuthIdentityRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UpdateCustomAuthIdentityResponse;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UpdateCustomAuthPermissionRequest;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\UpdateCustomAuthPermissionResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Activate CA Certificate.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     * *   You can call this operation to reactivate only CA certificates that are registered with ApsaraMQ for MQTT brokers. You can call the [ListCaCertificate](https://help.aliyun.com/document_detail/2604958.html) operation to query CA certificates that are registered with an ApsaraMQ for MQTT instance.
     *
     * @param request - ActiveCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActiveCaCertificateResponse
     *
     * @param ActiveCaCertificateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ActiveCaCertificateResponse
     */
    public function activeCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mqttInstanceId) {
            @$query['MqttInstanceId'] = $request->mqttInstanceId;
        }

        if (null !== $request->sn) {
            @$query['Sn'] = $request->sn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ActiveCaCertificate',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ActiveCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ActiveCaCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Activate CA Certificate.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     * *   You can call this operation to reactivate only CA certificates that are registered with ApsaraMQ for MQTT brokers. You can call the [ListCaCertificate](https://help.aliyun.com/document_detail/2604958.html) operation to query CA certificates that are registered with an ApsaraMQ for MQTT instance.
     *
     * @param request - ActiveCaCertificateRequest
     *
     * @returns ActiveCaCertificateResponse
     *
     * @param ActiveCaCertificateRequest $request
     *
     * @return ActiveCaCertificateResponse
     */
    public function activeCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeCaCertificateWithOptions($request, $runtime);
    }

    /**
     * Reactivates a device certificate. Device certificates are digital certificates issued to clients by certificate authority (CA) root certificates. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, the broker uses the device certificate to authenticate the client based on the registered CA certificate. If the CA certificate matches the device certificate, the client passes the authentication and the system automatically registers the device certificate with the ApsaraMQ for MQTT broker. After a device certificate is registered with an ApsaraMQ for MQTT broker, the certificate is automatically activated. If your device certificate is changed to the inactivated state, you can call this operation to reactivate the device certificate.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - ActiveDeviceCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActiveDeviceCertificateResponse
     *
     * @param ActiveDeviceCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ActiveDeviceCertificateResponse
     */
    public function activeDeviceCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caSn) {
            @$query['CaSn'] = $request->caSn;
        }

        if (null !== $request->deviceSn) {
            @$query['DeviceSn'] = $request->deviceSn;
        }

        if (null !== $request->mqttInstanceId) {
            @$query['MqttInstanceId'] = $request->mqttInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ActiveDeviceCertificate',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ActiveDeviceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ActiveDeviceCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Reactivates a device certificate. Device certificates are digital certificates issued to clients by certificate authority (CA) root certificates. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, the broker uses the device certificate to authenticate the client based on the registered CA certificate. If the CA certificate matches the device certificate, the client passes the authentication and the system automatically registers the device certificate with the ApsaraMQ for MQTT broker. After a device certificate is registered with an ApsaraMQ for MQTT broker, the certificate is automatically activated. If your device certificate is changed to the inactivated state, you can call this operation to reactivate the device certificate.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - ActiveDeviceCertificateRequest
     *
     * @returns ActiveDeviceCertificateResponse
     *
     * @param ActiveDeviceCertificateRequest $request
     *
     * @return ActiveDeviceCertificateResponse
     */
    public function activeDeviceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeDeviceCertificateWithOptions($request, $runtime);
    }

    /**
     * Adds a device to the connection blacklist to disable connections from the device.
     *
     * @param request - AddCustomAuthConnectBlackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCustomAuthConnectBlackResponse
     *
     * @param AddCustomAuthConnectBlackRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddCustomAuthConnectBlackResponse
     */
    public function addCustomAuthConnectBlackWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddCustomAuthConnectBlack',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddCustomAuthConnectBlackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddCustomAuthConnectBlackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a device to the connection blacklist to disable connections from the device.
     *
     * @param request - AddCustomAuthConnectBlackRequest
     *
     * @returns AddCustomAuthConnectBlackResponse
     *
     * @param AddCustomAuthConnectBlackRequest $request
     *
     * @return AddCustomAuthConnectBlackResponse
     */
    public function addCustomAuthConnectBlack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomAuthConnectBlackWithOptions($request, $runtime);
    }

    /**
     * Adds the information about identity authentication. The identity can be accurate to a client.
     *
     * @param request - AddCustomAuthIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCustomAuthIdentityResponse
     *
     * @param AddCustomAuthIdentityRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddCustomAuthIdentityResponse
     */
    public function addCustomAuthIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->identityType) {
            @$body['IdentityType'] = $request->identityType;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->secret) {
            @$body['Secret'] = $request->secret;
        }

        if (null !== $request->signMode) {
            @$body['SignMode'] = $request->signMode;
        }

        if (null !== $request->username) {
            @$body['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddCustomAuthIdentity',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddCustomAuthIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddCustomAuthIdentityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds the information about identity authentication. The identity can be accurate to a client.
     *
     * @param request - AddCustomAuthIdentityRequest
     *
     * @returns AddCustomAuthIdentityResponse
     *
     * @param AddCustomAuthIdentityRequest $request
     *
     * @return AddCustomAuthIdentityResponse
     */
    public function addCustomAuthIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomAuthIdentityWithOptions($request, $runtime);
    }

    /**
     * Grants permissions on topics. You must create a parent topic in the console before you call this API operation.
     *
     * @param request - AddCustomAuthPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddCustomAuthPermissionResponse
     *
     * @param AddCustomAuthPermissionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddCustomAuthPermissionResponse
     */
    public function addCustomAuthPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->effect) {
            @$body['Effect'] = $request->effect;
        }

        if (null !== $request->identity) {
            @$body['Identity'] = $request->identity;
        }

        if (null !== $request->identityType) {
            @$body['IdentityType'] = $request->identityType;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->permitAction) {
            @$body['PermitAction'] = $request->permitAction;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddCustomAuthPermission',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddCustomAuthPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddCustomAuthPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Grants permissions on topics. You must create a parent topic in the console before you call this API operation.
     *
     * @param request - AddCustomAuthPermissionRequest
     *
     * @returns AddCustomAuthPermissionResponse
     *
     * @param AddCustomAuthPermissionRequest $request
     *
     * @return AddCustomAuthPermissionResponse
     */
    public function addCustomAuthPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomAuthPermissionWithOptions($request, $runtime);
    }

    /**
     * Applies for a token from ApsaraMQ for MQTT. If token-based authentication is used for permission authentication on an ApsaraMQ for MQTT broker, a token that is issued by the broker is required for authentication each time a client is connected to the broker.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     * *   Each successful call to the **ApplyToken** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - ApplyTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyTokenResponse
     *
     * @param ApplyTokenRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ApplyTokenResponse
     */
    public function applyTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actions) {
            @$query['Actions'] = $request->actions;
        }

        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyToken',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ApplyTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApplyTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Applies for a token from ApsaraMQ for MQTT. If token-based authentication is used for permission authentication on an ApsaraMQ for MQTT broker, a token that is issued by the broker is required for authentication each time a client is connected to the broker.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     * *   Each successful call to the **ApplyToken** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - ApplyTokenRequest
     *
     * @returns ApplyTokenResponse
     *
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
     * Queries the status of multiple ApsaraMQ for MQTT clients by client ID.
     *
     * @remarks
     *   You can call the **BatchQuerySessionByClientIds** operation up to 100 times per second. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   You can call the **BatchQuerySessionByClientIds** operation to query the status of up to 10 ApsaraMQ for MQTT clients in a single query.
     * *   Each successful call to the **BatchQuerySessionByClientIds** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - BatchQuerySessionByClientIdsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchQuerySessionByClientIdsResponse
     *
     * @param BatchQuerySessionByClientIdsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchQuerySessionByClientIdsResponse
     */
    public function batchQuerySessionByClientIdsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientIdList) {
            @$query['ClientIdList'] = $request->clientIdList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchQuerySessionByClientIds',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchQuerySessionByClientIdsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchQuerySessionByClientIdsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the status of multiple ApsaraMQ for MQTT clients by client ID.
     *
     * @remarks
     *   You can call the **BatchQuerySessionByClientIds** operation up to 100 times per second. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   You can call the **BatchQuerySessionByClientIds** operation to query the status of up to 10 ApsaraMQ for MQTT clients in a single query.
     * *   Each successful call to the **BatchQuerySessionByClientIds** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - BatchQuerySessionByClientIdsRequest
     *
     * @returns BatchQuerySessionByClientIdsResponse
     *
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
     * Proactively closes an online connection. After you call this API operation, the device may reconnect to the broker based on the client reconnection mechanism.
     *
     * @remarks
     * This API is still in the testing phase and is only available for Professional Edition instances in the Shanghai region. Legacy instances are not supported at this time.
     *
     * @param request - CloseConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseConnectionResponse
     *
     * @param CloseConnectionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CloseConnectionResponse
     */
    public function closeConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloseConnection',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CloseConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CloseConnectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Proactively closes an online connection. After you call this API operation, the device may reconnect to the broker based on the client reconnection mechanism.
     *
     * @remarks
     * This API is still in the testing phase and is only available for Professional Edition instances in the Shanghai region. Legacy instances are not supported at this time.
     *
     * @param request - CloseConnectionRequest
     *
     * @returns CloseConnectionResponse
     *
     * @param CloseConnectionRequest $request
     *
     * @return CloseConnectionResponse
     */
    public function closeConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeConnectionWithOptions($request, $runtime);
    }

    /**
     * Creates a group ID. Before you connect producers and consumers to an ApsaraMQ for MQTT broker to send and receive messages, you must specify a unique ID for each client for identification. A client ID is in the format of \\<GroupID>@@@\\<DeviceID>. In the preceding format, DeviceID is the custom ID that you specify for the client, and GroupID is the ID of the group that you create on the ApsaraMQ for MQTT broker in advance.
     *
     * @remarks
     * Each successful call to the **CreateGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - CreateGroupIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGroupIdResponse
     *
     * @param CreateGroupIdRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateGroupIdResponse
     */
    public function createGroupIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGroupId',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateGroupIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a group ID. Before you connect producers and consumers to an ApsaraMQ for MQTT broker to send and receive messages, you must specify a unique ID for each client for identification. A client ID is in the format of \\<GroupID>@@@\\<DeviceID>. In the preceding format, DeviceID is the custom ID that you specify for the client, and GroupID is the ID of the group that you create on the ApsaraMQ for MQTT broker in advance.
     *
     * @remarks
     * Each successful call to the **CreateGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - CreateGroupIdRequest
     *
     * @returns CreateGroupIdResponse
     *
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
     * Deletes a certificate authority (CA) certificate from an ApsaraMQ for MQTT broker. ApsaraMQ for MQTT allows you to use X.509 certificates for authentication. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, you can use the device certificate to implement authentication. CA certificates are used to issue device certificates to clients and validate the device certificates. Before you can use a CA certificate, you must register the certificate with an ApsaraMQ for MQTT broker. If you no longer require a CA certificate, you can call this operation to delete the certificate from the ApsaraMQ for MQTT broker.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     * *   You can call this operation to delete only CA certificates that are registered with ApsaraMQ for MQTT brokers. You can call the [ListCaCertificate](https://help.aliyun.com/document_detail/2604958.html) operation to query CA certificates that are registered with an ApsaraMQ for MQTT instance.
     * *   If you delete a specific CA certificate from an ApsaraMQ for MQTT broker, all device certificates that are issued by the CA certificate and are registered with the ApsaraMQ for MQTT broker are automatically deleted.
     *
     * @param request - DeleteCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCaCertificateResponse
     *
     * @param DeleteCaCertificateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCaCertificateResponse
     */
    public function deleteCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mqttInstanceId) {
            @$query['MqttInstanceId'] = $request->mqttInstanceId;
        }

        if (null !== $request->sn) {
            @$query['Sn'] = $request->sn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCaCertificate',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCaCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a certificate authority (CA) certificate from an ApsaraMQ for MQTT broker. ApsaraMQ for MQTT allows you to use X.509 certificates for authentication. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, you can use the device certificate to implement authentication. CA certificates are used to issue device certificates to clients and validate the device certificates. Before you can use a CA certificate, you must register the certificate with an ApsaraMQ for MQTT broker. If you no longer require a CA certificate, you can call this operation to delete the certificate from the ApsaraMQ for MQTT broker.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     * *   You can call this operation to delete only CA certificates that are registered with ApsaraMQ for MQTT brokers. You can call the [ListCaCertificate](https://help.aliyun.com/document_detail/2604958.html) operation to query CA certificates that are registered with an ApsaraMQ for MQTT instance.
     * *   If you delete a specific CA certificate from an ApsaraMQ for MQTT broker, all device certificates that are issued by the CA certificate and are registered with the ApsaraMQ for MQTT broker are automatically deleted.
     *
     * @param request - DeleteCaCertificateRequest
     *
     * @returns DeleteCaCertificateResponse
     *
     * @param DeleteCaCertificateRequest $request
     *
     * @return DeleteCaCertificateResponse
     */
    public function deleteCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCaCertificateWithOptions($request, $runtime);
    }

    /**
     * Deletes a connection blacklist.
     *
     * @param request - DeleteCustomAuthConnectBlackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomAuthConnectBlackResponse
     *
     * @param DeleteCustomAuthConnectBlackRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteCustomAuthConnectBlackResponse
     */
    public function deleteCustomAuthConnectBlackWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomAuthConnectBlack',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCustomAuthConnectBlackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomAuthConnectBlackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a connection blacklist.
     *
     * @param request - DeleteCustomAuthConnectBlackRequest
     *
     * @returns DeleteCustomAuthConnectBlackResponse
     *
     * @param DeleteCustomAuthConnectBlackRequest $request
     *
     * @return DeleteCustomAuthConnectBlackResponse
     */
    public function deleteCustomAuthConnectBlack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomAuthConnectBlackWithOptions($request, $runtime);
    }

    /**
     * Deletes an identity for custom authorization.
     *
     * @param request - DeleteCustomAuthIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomAuthIdentityResponse
     *
     * @param DeleteCustomAuthIdentityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCustomAuthIdentityResponse
     */
    public function deleteCustomAuthIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->identityType) {
            @$body['IdentityType'] = $request->identityType;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->username) {
            @$body['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomAuthIdentity',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCustomAuthIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomAuthIdentityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an identity for custom authorization.
     *
     * @param request - DeleteCustomAuthIdentityRequest
     *
     * @returns DeleteCustomAuthIdentityResponse
     *
     * @param DeleteCustomAuthIdentityRequest $request
     *
     * @return DeleteCustomAuthIdentityResponse
     */
    public function deleteCustomAuthIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomAuthIdentityWithOptions($request, $runtime);
    }

    /**
     * Deletes permissions on a topic.
     *
     * @param request - DeleteCustomAuthPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomAuthPermissionResponse
     *
     * @param DeleteCustomAuthPermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteCustomAuthPermissionResponse
     */
    public function deleteCustomAuthPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->identity) {
            @$body['Identity'] = $request->identity;
        }

        if (null !== $request->identityType) {
            @$body['IdentityType'] = $request->identityType;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomAuthPermission',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCustomAuthPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomAuthPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes permissions on a topic.
     *
     * @param request - DeleteCustomAuthPermissionRequest
     *
     * @returns DeleteCustomAuthPermissionResponse
     *
     * @param DeleteCustomAuthPermissionRequest $request
     *
     * @return DeleteCustomAuthPermissionResponse
     */
    public function deleteCustomAuthPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomAuthPermissionWithOptions($request, $runtime);
    }

    /**
     * Deletes the registration information about a specific device certificate from an ApsaraMQ for MQTT broker. Device certificates are digital certificates issued to clients by certificate authority (CA) root certificates. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, the broker uses the device certificate to authenticate the client. If the client passes the authentication, the client and the broker can communicate with each other based on the encrypted private key in the device certificate. If the client fails the authentication, access requests from the client are denied by the client. If you no longer require a device certificate, you can call this operation to delete the registration information about the certificate from an ApsaraMQ for MQTT broker.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - DeleteDeviceCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeviceCertificateResponse
     *
     * @param DeleteDeviceCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDeviceCertificateResponse
     */
    public function deleteDeviceCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caSn) {
            @$query['CaSn'] = $request->caSn;
        }

        if (null !== $request->deviceSn) {
            @$query['DeviceSn'] = $request->deviceSn;
        }

        if (null !== $request->mqttInstanceId) {
            @$query['MqttInstanceId'] = $request->mqttInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDeviceCertificate',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDeviceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDeviceCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes the registration information about a specific device certificate from an ApsaraMQ for MQTT broker. Device certificates are digital certificates issued to clients by certificate authority (CA) root certificates. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, the broker uses the device certificate to authenticate the client. If the client passes the authentication, the client and the broker can communicate with each other based on the encrypted private key in the device certificate. If the client fails the authentication, access requests from the client are denied by the client. If you no longer require a device certificate, you can call this operation to delete the registration information about the certificate from an ApsaraMQ for MQTT broker.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - DeleteDeviceCertificateRequest
     *
     * @returns DeleteDeviceCertificateResponse
     *
     * @param DeleteDeviceCertificateRequest $request
     *
     * @return DeleteDeviceCertificateResponse
     */
    public function deleteDeviceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceCertificateWithOptions($request, $runtime);
    }

    /**
     * Deletes a group from an ApsaraMQ for MQTT instance.
     *
     * @remarks
     * Each successful call to the **DeleteGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - DeleteGroupIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGroupIdResponse
     *
     * @param DeleteGroupIdRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteGroupIdResponse
     */
    public function deleteGroupIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGroupId',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteGroupIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a group from an ApsaraMQ for MQTT instance.
     *
     * @remarks
     * Each successful call to the **DeleteGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - DeleteGroupIdRequest
     *
     * @returns DeleteGroupIdResponse
     *
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
     * Downgrades the virtual IP address (VIP) access of a specific instance during the disaster recovery of multiple instances. Only Enterprise Platinum Edition instances support this operation. To call the operation, you must submit a ticket.
     *
     * @param request - DisasterDowngradeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisasterDowngradeResponse
     *
     * @param DisasterDowngradeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DisasterDowngradeResponse
     */
    public function disasterDowngradeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->downgradeInstanceId) {
            @$body['DowngradeInstanceId'] = $request->downgradeInstanceId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisasterDowngrade',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisasterDowngradeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisasterDowngradeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Downgrades the virtual IP address (VIP) access of a specific instance during the disaster recovery of multiple instances. Only Enterprise Platinum Edition instances support this operation. To call the operation, you must submit a ticket.
     *
     * @param request - DisasterDowngradeRequest
     *
     * @returns DisasterDowngradeResponse
     *
     * @param DisasterDowngradeRequest $request
     *
     * @return DisasterDowngradeResponse
     */
    public function disasterDowngrade($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disasterDowngradeWithOptions($request, $runtime);
    }

    /**
     * Recovers the public virtual IP address (VIP) access of a specific instance during the disaster recovery of multiple instances. Only Enterprise Platinum Edition instances support this operation. To call this operation, you must submit a ticket.
     *
     * @param request - DisasterRecoveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisasterRecoveryResponse
     *
     * @param DisasterRecoveryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DisasterRecoveryResponse
     */
    public function disasterRecoveryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->recoveryInstanceId) {
            @$body['RecoveryInstanceId'] = $request->recoveryInstanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisasterRecovery',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisasterRecoveryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisasterRecoveryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Recovers the public virtual IP address (VIP) access of a specific instance during the disaster recovery of multiple instances. Only Enterprise Platinum Edition instances support this operation. To call this operation, you must submit a ticket.
     *
     * @param request - DisasterRecoveryRequest
     *
     * @returns DisasterRecoveryResponse
     *
     * @param DisasterRecoveryRequest $request
     *
     * @return DisasterRecoveryResponse
     */
    public function disasterRecovery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disasterRecoveryWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a certificate authority (CA) certificate, such as the content and status of the certificate. ApsaraMQ for MQTT allows you to use X.509 certificates for authentication. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, you can use the device certificate to implement authentication. CA certificates are used to issue device certificates to clients and validate the device certificates.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - GetCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCaCertificateResponse
     *
     * @param GetCaCertificateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetCaCertificateResponse
     */
    public function getCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCaCertificate',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCaCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a certificate authority (CA) certificate, such as the content and status of the certificate. ApsaraMQ for MQTT allows you to use X.509 certificates for authentication. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, you can use the device certificate to implement authentication. CA certificates are used to issue device certificates to clients and validate the device certificates.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - GetCaCertificateRequest
     *
     * @returns GetCaCertificateResponse
     *
     * @param GetCaCertificateRequest $request
     *
     * @return GetCaCertificateResponse
     */
    public function getCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCaCertificateWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a device certificate. Device certificates are digital certificates issued to clients by certificate authority (CA) root certificates. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, the broker uses the device certificate to authenticate the client. If the client passes the authentication, the client and the broker can communicate with each other based on the encrypted private key in the device certificate. If the client fails the authentication, access requests from the client are denied by the client.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - GetDeviceCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeviceCertificateResponse
     *
     * @param GetDeviceCertificateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDeviceCertificateResponse
     */
    public function getDeviceCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeviceCertificate',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDeviceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDeviceCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a device certificate. Device certificates are digital certificates issued to clients by certificate authority (CA) root certificates. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, the broker uses the device certificate to authenticate the client. If the client passes the authentication, the client and the broker can communicate with each other based on the encrypted private key in the device certificate. If the client fails the authentication, access requests from the client are denied by the client.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - GetDeviceCertificateRequest
     *
     * @returns GetDeviceCertificateResponse
     *
     * @param GetDeviceCertificateRequest $request
     *
     * @return GetDeviceCertificateResponse
     */
    public function getDeviceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceCertificateWithOptions($request, $runtime);
    }

    /**
     * Queries the access credential of a device. If unique-certificate-per-device authentication is used as the authentication method on an ApsaraMQ for MQTT broker, an access credential that you apply for in advance is required for authentication when you connect your device to the broker. The connection can be established only after the authentication is passed.
     *
     * @remarks
     *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **GetDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - GetDeviceCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeviceCredentialResponse
     *
     * @param GetDeviceCredentialRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDeviceCredentialResponse
     */
    public function getDeviceCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDeviceCredential',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDeviceCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDeviceCredentialResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the access credential of a device. If unique-certificate-per-device authentication is used as the authentication method on an ApsaraMQ for MQTT broker, an access credential that you apply for in advance is required for authentication when you connect your device to the broker. The connection can be established only after the authentication is passed.
     *
     * @remarks
     *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **GetDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - GetDeviceCredentialRequest
     *
     * @returns GetDeviceCredentialResponse
     *
     * @param GetDeviceCredentialRequest $request
     *
     * @return GetDeviceCredentialResponse
     */
    public function getDeviceCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceCredentialWithOptions($request, $runtime);
    }

    /**
     * Obtains the registration code of a specific certificate authority (CA) certificate. When you register a CA certificate with an ApsaraMQ for MQTT broker, you must upload the validation certificate of the CA certificate to verify whether you have the private key of the CA certificate. The validation certificate of a CA certificate must be generated by using the registration code of the CA certificate.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - GetRegisterCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRegisterCodeResponse
     *
     * @param GetRegisterCodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRegisterCodeResponse
     */
    public function getRegisterCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRegisterCode',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRegisterCodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRegisterCodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the registration code of a specific certificate authority (CA) certificate. When you register a CA certificate with an ApsaraMQ for MQTT broker, you must upload the validation certificate of the CA certificate to verify whether you have the private key of the CA certificate. The validation certificate of a CA certificate must be generated by using the registration code of the CA certificate.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - GetRegisterCodeRequest
     *
     * @returns GetRegisterCodeResponse
     *
     * @param GetRegisterCodeRequest $request
     *
     * @return GetRegisterCodeResponse
     */
    public function getRegisterCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRegisterCodeWithOptions($request, $runtime);
    }

    /**
     * Deregister a certificate authority (CA) certificate. ApsaraMQ for MQTT allows you to use X.509 certificates for authentication. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, you can use the device certificate to implement authentication. CA certificates are used to issue device certificates to clients and validate the device certificates. If you no longer require a CA certificate, you can call this operation to deregister the certificate. If you want to continue using a deregistered CA certificate, you can call the ActiveCaCertificate operation to reactivate the certificate.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     * *   You can call this operation to deregister only CA certificates that are registered with ApsaraMQ for MQTT brokers. You can call the [ListCaCertificate](https://help.aliyun.com/document_detail/2604958.html) operation to query CA certificates that are registered with an ApsaraMQ for MQTT instance.
     *
     * @param request - InactivateCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InactivateCaCertificateResponse
     *
     * @param InactivateCaCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return InactivateCaCertificateResponse
     */
    public function inactivateCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mqttInstanceId) {
            @$query['MqttInstanceId'] = $request->mqttInstanceId;
        }

        if (null !== $request->sn) {
            @$query['Sn'] = $request->sn;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InactivateCaCertificate',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InactivateCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InactivateCaCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deregister a certificate authority (CA) certificate. ApsaraMQ for MQTT allows you to use X.509 certificates for authentication. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, you can use the device certificate to implement authentication. CA certificates are used to issue device certificates to clients and validate the device certificates. If you no longer require a CA certificate, you can call this operation to deregister the certificate. If you want to continue using a deregistered CA certificate, you can call the ActiveCaCertificate operation to reactivate the certificate.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     * *   You can call this operation to deregister only CA certificates that are registered with ApsaraMQ for MQTT brokers. You can call the [ListCaCertificate](https://help.aliyun.com/document_detail/2604958.html) operation to query CA certificates that are registered with an ApsaraMQ for MQTT instance.
     *
     * @param request - InactivateCaCertificateRequest
     *
     * @returns InactivateCaCertificateResponse
     *
     * @param InactivateCaCertificateRequest $request
     *
     * @return InactivateCaCertificateResponse
     */
    public function inactivateCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inactivateCaCertificateWithOptions($request, $runtime);
    }

    /**
     * Deregisters a device certificate. Device certificates are digital certificates issued to clients by certificate authority (CA) root certificates. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, the broker uses the device certificate to authenticate the client. If the client passes the authentication, the client and the broker can communicate with each other based on the encrypted private key in the device certificate. If the client fails the authentication, access requests from the client are denied by the client.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - InactivateDeviceCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InactivateDeviceCertificateResponse
     *
     * @param InactivateDeviceCertificateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return InactivateDeviceCertificateResponse
     */
    public function inactivateDeviceCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caSn) {
            @$query['CaSn'] = $request->caSn;
        }

        if (null !== $request->deviceSn) {
            @$query['DeviceSn'] = $request->deviceSn;
        }

        if (null !== $request->mqttInstanceId) {
            @$query['MqttInstanceId'] = $request->mqttInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InactivateDeviceCertificate',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InactivateDeviceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InactivateDeviceCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deregisters a device certificate. Device certificates are digital certificates issued to clients by certificate authority (CA) root certificates. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, the broker uses the device certificate to authenticate the client. If the client passes the authentication, the client and the broker can communicate with each other based on the encrypted private key in the device certificate. If the client fails the authentication, access requests from the client are denied by the client.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - InactivateDeviceCertificateRequest
     *
     * @returns InactivateDeviceCertificateResponse
     *
     * @param InactivateDeviceCertificateRequest $request
     *
     * @return InactivateDeviceCertificateResponse
     */
    public function inactivateDeviceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->inactivateDeviceCertificateWithOptions($request, $runtime);
    }

    /**
     * Queries all certificate authority (CA) certificates that are registered with an ApsaraMQ for MQTT instance. ApsaraMQ for MQTT allows you to use X.509 certificates for authentication. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, you can use the device certificate to implement authentication. CA certificates are used to issue device certificates to clients and validate the device certificates.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - ListCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCaCertificateResponse
     *
     * @param ListCaCertificateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListCaCertificateResponse
     */
    public function listCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCaCertificate',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCaCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all certificate authority (CA) certificates that are registered with an ApsaraMQ for MQTT instance. ApsaraMQ for MQTT allows you to use X.509 certificates for authentication. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, you can use the device certificate to implement authentication. CA certificates are used to issue device certificates to clients and validate the device certificates.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - ListCaCertificateRequest
     *
     * @returns ListCaCertificateResponse
     *
     * @param ListCaCertificateRequest $request
     *
     * @return ListCaCertificateResponse
     */
    public function listCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCaCertificateWithOptions($request, $runtime);
    }

    /**
     * Queries all device certificates that are registered with an ApsaraMQ for MQTT instance. Device certificates are digital certificates issued to clients by certificate authority (CA) root certificates. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, the broker uses the device certificate to authenticate the client. If the client passes the authentication, the client and the broker can communicate with each other based on the encrypted private key in the device certificate. If the client fails the authentication, access requests from the client are denied by the client.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - ListDeviceCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeviceCertificateResponse
     *
     * @param ListDeviceCertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDeviceCertificateResponse
     */
    public function listDeviceCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeviceCertificate',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDeviceCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDeviceCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all device certificates that are registered with an ApsaraMQ for MQTT instance. Device certificates are digital certificates issued to clients by certificate authority (CA) root certificates. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, the broker uses the device certificate to authenticate the client. If the client passes the authentication, the client and the broker can communicate with each other based on the encrypted private key in the device certificate. If the client fails the authentication, access requests from the client are denied by the client.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - ListDeviceCertificateRequest
     *
     * @returns ListDeviceCertificateResponse
     *
     * @param ListDeviceCertificateRequest $request
     *
     * @return ListDeviceCertificateResponse
     */
    public function listDeviceCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceCertificateWithOptions($request, $runtime);
    }

    /**
     * Queries all device certificates that are issued by a certificate authority (CA) certificate and registered with ApsaraMQ for MQTT brokers. Device certificates are digital certificates issued to clients by CA root certificates. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, the broker uses the device certificate to authenticate the client. If the client passes the authentication, the client and the broker can communicate with each other based on the encrypted private key in the device certificate. If the client fails the authentication, access requests from the client are denied by the client.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - ListDeviceCertificateByCaSnRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeviceCertificateByCaSnResponse
     *
     * @param ListDeviceCertificateByCaSnRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDeviceCertificateByCaSnResponse
     */
    public function listDeviceCertificateByCaSnWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeviceCertificateByCaSn',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDeviceCertificateByCaSnResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDeviceCertificateByCaSnResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all device certificates that are issued by a certificate authority (CA) certificate and registered with ApsaraMQ for MQTT brokers. Device certificates are digital certificates issued to clients by CA root certificates. When you connect an ApsaraMQ for MQTT client to an ApsaraMQ for MQTT broker, the broker uses the device certificate to authenticate the client. If the client passes the authentication, the client and the broker can communicate with each other based on the encrypted private key in the device certificate. If the client fails the authentication, access requests from the client are denied by the client.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - ListDeviceCertificateByCaSnRequest
     *
     * @returns ListDeviceCertificateByCaSnResponse
     *
     * @param ListDeviceCertificateByCaSnRequest $request
     *
     * @return ListDeviceCertificateByCaSnResponse
     */
    public function listDeviceCertificateByCaSn($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceCertificateByCaSnWithOptions($request, $runtime);
    }

    /**
     * Queries clients that have applied for access credentials in unique-certificate-per-device authentication mode in an ApsaraMQ for MQTT instance.
     *
     * @param request - ListDeviceCredentialClientIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeviceCredentialClientIdResponse
     *
     * @param ListDeviceCredentialClientIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListDeviceCredentialClientIdResponse
     */
    public function listDeviceCredentialClientIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDeviceCredentialClientId',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDeviceCredentialClientIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDeviceCredentialClientIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries clients that have applied for access credentials in unique-certificate-per-device authentication mode in an ApsaraMQ for MQTT instance.
     *
     * @param request - ListDeviceCredentialClientIdRequest
     *
     * @returns ListDeviceCredentialClientIdResponse
     *
     * @param ListDeviceCredentialClientIdRequest $request
     *
     * @return ListDeviceCredentialClientIdResponse
     */
    public function listDeviceCredentialClientId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceCredentialClientIdWithOptions($request, $runtime);
    }

    /**
     * Queries all groups on an ApsaraMQ for MQTT instance.
     *
     * @remarks
     * Each successful call to the **ListGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - ListGroupIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListGroupIdResponse
     *
     * @param ListGroupIdRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListGroupIdResponse
     */
    public function listGroupIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListGroupId',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListGroupIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all groups on an ApsaraMQ for MQTT instance.
     *
     * @remarks
     * Each successful call to the **ListGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - ListGroupIdRequest
     *
     * @returns ListGroupIdResponse
     *
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
     * 查询实例列表.
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
        $query = [];
        if (null !== $request->tags) {
            @$query['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询实例列表.
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
     * 查询标签.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询标签.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Queries a client ID in a connection blacklist.
     *
     * @param request - QueryCustomAuthConnectBlackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCustomAuthConnectBlackResponse
     *
     * @param QueryCustomAuthConnectBlackRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryCustomAuthConnectBlackResponse
     */
    public function queryCustomAuthConnectBlackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCustomAuthConnectBlack',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryCustomAuthConnectBlackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCustomAuthConnectBlackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a client ID in a connection blacklist.
     *
     * @param request - QueryCustomAuthConnectBlackRequest
     *
     * @returns QueryCustomAuthConnectBlackResponse
     *
     * @param QueryCustomAuthConnectBlackRequest $request
     *
     * @return QueryCustomAuthConnectBlackResponse
     */
    public function queryCustomAuthConnectBlack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomAuthConnectBlackWithOptions($request, $runtime);
    }

    /**
     * Queries the information about custom identity authentication.
     *
     * @param request - QueryCustomAuthIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCustomAuthIdentityResponse
     *
     * @param QueryCustomAuthIdentityRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryCustomAuthIdentityResponse
     */
    public function queryCustomAuthIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCustomAuthIdentity',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryCustomAuthIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCustomAuthIdentityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about custom identity authentication.
     *
     * @param request - QueryCustomAuthIdentityRequest
     *
     * @returns QueryCustomAuthIdentityResponse
     *
     * @param QueryCustomAuthIdentityRequest $request
     *
     * @return QueryCustomAuthIdentityResponse
     */
    public function queryCustomAuthIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomAuthIdentityWithOptions($request, $runtime);
    }

    /**
     * Queries the authorization information about a topic.
     *
     * @param request - QueryCustomAuthPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCustomAuthPermissionResponse
     *
     * @param QueryCustomAuthPermissionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryCustomAuthPermissionResponse
     */
    public function queryCustomAuthPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCustomAuthPermission',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryCustomAuthPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCustomAuthPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the authorization information about a topic.
     *
     * @param request - QueryCustomAuthPermissionRequest
     *
     * @returns QueryCustomAuthPermissionResponse
     *
     * @param QueryCustomAuthPermissionRequest $request
     *
     * @return QueryCustomAuthPermissionResponse
     */
    public function queryCustomAuthPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomAuthPermissionWithOptions($request, $runtime);
    }

    /**
     * Queries the trace of a device that corresponds to an ApsaraMQ for MQTT client by page. When the status of a device is abnormal, you can call this operation to query the connection history of the device. This helps you efficiently troubleshoot issues.
     *
     * @remarks
     *   Each successful call to the **QueryMqttTraceDevice** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *
     * @param request - QueryMqttTraceDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMqttTraceDeviceResponse
     *
     * @param QueryMqttTraceDeviceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryMqttTraceDeviceResponse
     */
    public function queryMqttTraceDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
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

        if (null !== $request->mqttRegionId) {
            @$query['MqttRegionId'] = $request->mqttRegionId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMqttTraceDevice',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMqttTraceDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMqttTraceDeviceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the trace of a device that corresponds to an ApsaraMQ for MQTT client by page. When the status of a device is abnormal, you can call this operation to query the connection history of the device. This helps you efficiently troubleshoot issues.
     *
     * @remarks
     *   Each successful call to the **QueryMqttTraceDevice** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *
     * @param request - QueryMqttTraceDeviceRequest
     *
     * @returns QueryMqttTraceDeviceResponse
     *
     * @param QueryMqttTraceDeviceRequest $request
     *
     * @return QueryMqttTraceDeviceResponse
     */
    public function queryMqttTraceDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMqttTraceDeviceWithOptions($request, $runtime);
    }

    /**
     * Queries messages on a device within a specific period of time. If a message is not sent or received as expected, you can call this operation to query the messaging status of the message to efficiently troubleshoot issues.
     *
     * @remarks
     *   Each successful call to the **QueryMqttTraceMessageOfClient** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *
     * @param request - QueryMqttTraceMessageOfClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMqttTraceMessageOfClientResponse
     *
     * @param QueryMqttTraceMessageOfClientRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryMqttTraceMessageOfClientResponse
     */
    public function queryMqttTraceMessageOfClientWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
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

        if (null !== $request->mqttRegionId) {
            @$query['MqttRegionId'] = $request->mqttRegionId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMqttTraceMessageOfClient',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMqttTraceMessageOfClientResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMqttTraceMessageOfClientResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries messages on a device within a specific period of time. If a message is not sent or received as expected, you can call this operation to query the messaging status of the message to efficiently troubleshoot issues.
     *
     * @remarks
     *   Each successful call to the **QueryMqttTraceMessageOfClient** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *
     * @param request - QueryMqttTraceMessageOfClientRequest
     *
     * @returns QueryMqttTraceMessageOfClientResponse
     *
     * @param QueryMqttTraceMessageOfClientRequest $request
     *
     * @return QueryMqttTraceMessageOfClientResponse
     */
    public function queryMqttTraceMessageOfClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMqttTraceMessageOfClientWithOptions($request, $runtime);
    }

    /**
     * Queries the trace of a message. If a message is not sent or received as expected, you can call this operation to view the message details to troubleshoot the issue. For example, you can query the time when the message is published and the client that publishes the message.
     *
     * @remarks
     *   Each successful call to the **QueryMqttTraceMessagePublish** operation increases the messaging transactions per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *
     * @param request - QueryMqttTraceMessagePublishRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMqttTraceMessagePublishResponse
     *
     * @param QueryMqttTraceMessagePublishRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryMqttTraceMessagePublishResponse
     */
    public function queryMqttTraceMessagePublishWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mqttRegionId) {
            @$query['MqttRegionId'] = $request->mqttRegionId;
        }

        if (null !== $request->msgId) {
            @$query['MsgId'] = $request->msgId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMqttTraceMessagePublish',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMqttTraceMessagePublishResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMqttTraceMessagePublishResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the trace of a message. If a message is not sent or received as expected, you can call this operation to view the message details to troubleshoot the issue. For example, you can query the time when the message is published and the client that publishes the message.
     *
     * @remarks
     *   Each successful call to the **QueryMqttTraceMessagePublish** operation increases the messaging transactions per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *
     * @param request - QueryMqttTraceMessagePublishRequest
     *
     * @returns QueryMqttTraceMessagePublishResponse
     *
     * @param QueryMqttTraceMessagePublishRequest $request
     *
     * @return QueryMqttTraceMessagePublishResponse
     */
    public function queryMqttTraceMessagePublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMqttTraceMessagePublishWithOptions($request, $runtime);
    }

    /**
     * Queries the delivery trace of a message. If a message is not sent or received as expected, you can call this operation to view the details about the message. For example, you can query the clients that subscribe to the message and the time when the message is delivered. This operation helps you locate the problem and identify the cause of the problem.
     *
     * @remarks
     *   Each successful call to the **QueryMqttTraceMessageSubscribe** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *
     * @param request - QueryMqttTraceMessageSubscribeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMqttTraceMessageSubscribeResponse
     *
     * @param QueryMqttTraceMessageSubscribeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryMqttTraceMessageSubscribeResponse
     */
    public function queryMqttTraceMessageSubscribeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTime) {
            @$query['BeginTime'] = $request->beginTime;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
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

        if (null !== $request->mqttRegionId) {
            @$query['MqttRegionId'] = $request->mqttRegionId;
        }

        if (null !== $request->msgId) {
            @$query['MsgId'] = $request->msgId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->reverse) {
            @$query['Reverse'] = $request->reverse;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMqttTraceMessageSubscribe',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMqttTraceMessageSubscribeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMqttTraceMessageSubscribeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the delivery trace of a message. If a message is not sent or received as expected, you can call this operation to view the details about the message. For example, you can query the clients that subscribe to the message and the time when the message is delivered. This operation helps you locate the problem and identify the cause of the problem.
     *
     * @remarks
     *   Each successful call to the **QueryMqttTraceMessageSubscribe** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     *
     * @param request - QueryMqttTraceMessageSubscribeRequest
     *
     * @returns QueryMqttTraceMessageSubscribeResponse
     *
     * @param QueryMqttTraceMessageSubscribeRequest $request
     *
     * @return QueryMqttTraceMessageSubscribeResponse
     */
    public function queryMqttTraceMessageSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMqttTraceMessageSubscribeWithOptions($request, $runtime);
    }

    /**
     * Queries the running status of an ApsaraMQ for MQTT client. You can troubleshoot issues based on the queried results. You can enter the ID of an ApsaraMQ for MQTT client to check the connection status and IP address of the device.
     *
     * @remarks
     *   You can call this operation up to 500 times per second.**** For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **QuerySessionByClientId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - QuerySessionByClientIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySessionByClientIdResponse
     *
     * @param QuerySessionByClientIdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QuerySessionByClientIdResponse
     */
    public function querySessionByClientIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySessionByClientId',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QuerySessionByClientIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QuerySessionByClientIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the running status of an ApsaraMQ for MQTT client. You can troubleshoot issues based on the queried results. You can enter the ID of an ApsaraMQ for MQTT client to check the connection status and IP address of the device.
     *
     * @remarks
     *   You can call this operation up to 500 times per second.**** For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **QuerySessionByClientId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - QuerySessionByClientIdRequest
     *
     * @returns QuerySessionByClientIdResponse
     *
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
     * Queries the status of a token. If token-based authentication is used for permission authentication on an ApsaraMQ for MQTT broker, a token that is issued by the broker is required for authentication each time a client is connected to the broker. A token is a temporary credential and is valid only within a specific period of time. You can call this operation to query whether a token expires.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     * *   Each successful call to the **QueryToken** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - QueryTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTokenResponse
     *
     * @param QueryTokenRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryTokenResponse
     */
    public function queryTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryToken',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the status of a token. If token-based authentication is used for permission authentication on an ApsaraMQ for MQTT broker, a token that is issued by the broker is required for authentication each time a client is connected to the broker. A token is a temporary credential and is valid only within a specific period of time. You can call this operation to query whether a token expires.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     * *   Each successful call to the **QueryToken** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - QueryTokenRequest
     *
     * @returns QueryTokenResponse
     *
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
     * Updates the access credential of a device.
     *
     * @remarks
     * ## [](#)Limits
     * You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * >  Each successful call to the **RefreshDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - RefreshDeviceCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshDeviceCredentialResponse
     *
     * @param RefreshDeviceCredentialRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RefreshDeviceCredentialResponse
     */
    public function refreshDeviceCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshDeviceCredential',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RefreshDeviceCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RefreshDeviceCredentialResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the access credential of a device.
     *
     * @remarks
     * ## [](#)Limits
     * You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * >  Each successful call to the **RefreshDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - RefreshDeviceCredentialRequest
     *
     * @returns RefreshDeviceCredentialResponse
     *
     * @param RefreshDeviceCredentialRequest $request
     *
     * @return RefreshDeviceCredentialResponse
     */
    public function refreshDeviceCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshDeviceCredentialWithOptions($request, $runtime);
    }

    /**
     * RegisterCaCertificate.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - RegisterCaCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterCaCertificateResponse
     *
     * @param RegisterCaCertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RegisterCaCertificateResponse
     */
    public function registerCaCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caContent) {
            @$query['CaContent'] = $request->caContent;
        }

        if (null !== $request->caName) {
            @$query['CaName'] = $request->caName;
        }

        if (null !== $request->mqttInstanceId) {
            @$query['MqttInstanceId'] = $request->mqttInstanceId;
        }

        if (null !== $request->verificationContent) {
            @$query['VerificationContent'] = $request->verificationContent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterCaCertificate',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RegisterCaCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RegisterCaCertificateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * RegisterCaCertificate.
     *
     * @remarks
     *   Only ApsaraMQ for MQTT Enterprise Platinum Edition instances support this operation.
     * *   You can call this operation up to 500 times per second per Alibaba Cloud account. If you want to increase the limit, join the DingTalk group (ID: 35228338) to contact ApsaraMQ for MQTT technical support.
     *
     * @param request - RegisterCaCertificateRequest
     *
     * @returns RegisterCaCertificateResponse
     *
     * @param RegisterCaCertificateRequest $request
     *
     * @return RegisterCaCertificateResponse
     */
    public function registerCaCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerCaCertificateWithOptions($request, $runtime);
    }

    /**
     * Registers an access credential for a device. In unique-certificate-per-device authentication mode, an application server applies a unique access credential for each device from the corresponding ApsaraMQ for MQTT broker. The access credential of a device consists of the client ID, AccessKey ID, and AccessKey secret of the device. When you connect a device to ApsaraMQ for MQTT, you must configure Username and Password based on the access credential of the device for authentication. You can activate the device and transfer data between the device and ApsaraMQ for MQTT only after the authentication is passed.
     *
     * @remarks
     *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **RegisterDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - RegisterDeviceCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RegisterDeviceCredentialResponse
     *
     * @param RegisterDeviceCredentialRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return RegisterDeviceCredentialResponse
     */
    public function registerDeviceCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RegisterDeviceCredential',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RegisterDeviceCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RegisterDeviceCredentialResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Registers an access credential for a device. In unique-certificate-per-device authentication mode, an application server applies a unique access credential for each device from the corresponding ApsaraMQ for MQTT broker. The access credential of a device consists of the client ID, AccessKey ID, and AccessKey secret of the device. When you connect a device to ApsaraMQ for MQTT, you must configure Username and Password based on the access credential of the device for authentication. You can activate the device and transfer data between the device and ApsaraMQ for MQTT only after the authentication is passed.
     *
     * @remarks
     *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **RegisterDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - RegisterDeviceCredentialRequest
     *
     * @returns RegisterDeviceCredentialResponse
     *
     * @param RegisterDeviceCredentialRequest $request
     *
     * @return RegisterDeviceCredentialResponse
     */
    public function registerDeviceCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerDeviceCredentialWithOptions($request, $runtime);
    }

    /**
     * Revokes a token.
     *
     * @remarks
     *   You can call this operation up to 5 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     * *   Each successful call to the **RevokeToken** operation increases the messaging transactions per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - RevokeTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeTokenResponse
     *
     * @param RevokeTokenRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RevokeTokenResponse
     */
    public function revokeTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeToken',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RevokeTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RevokeTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Revokes a token.
     *
     * @remarks
     *   You can call this operation up to 5 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     * *   Each successful call to the **RevokeToken** operation increases the messaging transactions per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - RevokeTokenRequest
     *
     * @returns RevokeTokenResponse
     *
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
     * Sends a single message from an application on a cloud server to ApsaraMQ for MQTT.
     *
     * @remarks
     *   The **SendMessage** operation is called by an application on a cloud server. This operation is complementary to the operation that is called to send a message from an ApsaraMQ for MQTT client. For information about the differences between the scenarios of sending messages from applications on cloud servers and the scenarios of sending messages from ApsaraMQ for MQTT clients, see [Developer guide](https://help.aliyun.com/document_detail/179160.html).
     * *   Messages that are sent by calling the **SendMessage** operation cannot be forwarded to ApsaraMQ for RocketMQ. If you want to use an ApsaraMQ for MQTT broker to forward messages to ApsaraMQ for RocketMQ, use [an SDK to send the messages](https://help.aliyun.com/document_detail/174527.html). The **SendMessage** operation supports up to 1,000 queries per second (QPS). For more information, see [QPS limits](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **SendMessage** operation is calculated as a message transaction per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
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
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->mqttTopic) {
            @$query['MqttTopic'] = $request->mqttTopic;
        }

        if (null !== $request->payload) {
            @$query['Payload'] = $request->payload;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendMessage',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SendMessageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sends a single message from an application on a cloud server to ApsaraMQ for MQTT.
     *
     * @remarks
     *   The **SendMessage** operation is called by an application on a cloud server. This operation is complementary to the operation that is called to send a message from an ApsaraMQ for MQTT client. For information about the differences between the scenarios of sending messages from applications on cloud servers and the scenarios of sending messages from ApsaraMQ for MQTT clients, see [Developer guide](https://help.aliyun.com/document_detail/179160.html).
     * *   Messages that are sent by calling the **SendMessage** operation cannot be forwarded to ApsaraMQ for RocketMQ. If you want to use an ApsaraMQ for MQTT broker to forward messages to ApsaraMQ for RocketMQ, use [an SDK to send the messages](https://help.aliyun.com/document_detail/174527.html). The **SendMessage** operation supports up to 1,000 queries per second (QPS). For more information, see [QPS limits](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **SendMessage** operation is calculated as a message transaction per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
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
     * Configures a multi-domain certificate.
     *
     * @param request - SetSniConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetSniConfigResponse
     *
     * @param SetSniConfigRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SetSniConfigResponse
     */
    public function setSniConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->defaultCertificate) {
            @$query['DefaultCertificate'] = $request->defaultCertificate;
        }

        if (null !== $request->mqttInstanceId) {
            @$query['MqttInstanceId'] = $request->mqttInstanceId;
        }

        if (null !== $request->sniConfig) {
            @$query['SniConfig'] = $request->sniConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetSniConfig',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetSniConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetSniConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Configures a multi-domain certificate.
     *
     * @param request - SetSniConfigRequest
     *
     * @returns SetSniConfigResponse
     *
     * @param SetSniConfigRequest $request
     *
     * @return SetSniConfigResponse
     */
    public function setSniConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setSniConfigWithOptions($request, $runtime);
    }

    /**
     * 新增tag.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 新增tag.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Deregisters the access credential of a device. After the access credential of a device is deregistered, you can no longer use the access credential to authenticate the device on the ApsaraMQ for MQTT broker.
     *
     * @remarks
     *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **UnRegisterDeviceCredential** operation increases the number of transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - UnRegisterDeviceCredentialRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnRegisterDeviceCredentialResponse
     *
     * @param UnRegisterDeviceCredentialRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UnRegisterDeviceCredentialResponse
     */
    public function unRegisterDeviceCredentialWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnRegisterDeviceCredential',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnRegisterDeviceCredentialResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnRegisterDeviceCredentialResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deregisters the access credential of a device. After the access credential of a device is deregistered, you can no longer use the access credential to authenticate the device on the ApsaraMQ for MQTT broker.
     *
     * @remarks
     *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](https://help.aliyun.com/document_detail/163047.html).
     * *   Each successful call to the **UnRegisterDeviceCredential** operation increases the number of transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](https://help.aliyun.com/document_detail/52819.html).
     *
     * @param request - UnRegisterDeviceCredentialRequest
     *
     * @returns UnRegisterDeviceCredentialResponse
     *
     * @param UnRegisterDeviceCredentialRequest $request
     *
     * @return UnRegisterDeviceCredentialResponse
     */
    public function unRegisterDeviceCredential($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unRegisterDeviceCredentialWithOptions($request, $runtime);
    }

    /**
     * 删除标签.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除标签.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Updates the information about custom identity authentication.
     *
     * @param request - UpdateCustomAuthIdentityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomAuthIdentityResponse
     *
     * @param UpdateCustomAuthIdentityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateCustomAuthIdentityResponse
     */
    public function updateCustomAuthIdentityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->identityType) {
            @$body['IdentityType'] = $request->identityType;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->secret) {
            @$body['Secret'] = $request->secret;
        }

        if (null !== $request->signMode) {
            @$body['SignMode'] = $request->signMode;
        }

        if (null !== $request->username) {
            @$body['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomAuthIdentity',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateCustomAuthIdentityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCustomAuthIdentityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about custom identity authentication.
     *
     * @param request - UpdateCustomAuthIdentityRequest
     *
     * @returns UpdateCustomAuthIdentityResponse
     *
     * @param UpdateCustomAuthIdentityRequest $request
     *
     * @return UpdateCustomAuthIdentityResponse
     */
    public function updateCustomAuthIdentity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomAuthIdentityWithOptions($request, $runtime);
    }

    /**
     * Updates the permissions on a topic.
     *
     * @param request - UpdateCustomAuthPermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCustomAuthPermissionResponse
     *
     * @param UpdateCustomAuthPermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateCustomAuthPermissionResponse
     */
    public function updateCustomAuthPermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->effect) {
            @$body['Effect'] = $request->effect;
        }

        if (null !== $request->identity) {
            @$body['Identity'] = $request->identity;
        }

        if (null !== $request->identityType) {
            @$body['IdentityType'] = $request->identityType;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->permitAction) {
            @$body['PermitAction'] = $request->permitAction;
        }

        if (null !== $request->topic) {
            @$body['Topic'] = $request->topic;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateCustomAuthPermission',
            'version' => '2020-04-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateCustomAuthPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCustomAuthPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the permissions on a topic.
     *
     * @param request - UpdateCustomAuthPermissionRequest
     *
     * @returns UpdateCustomAuthPermissionResponse
     *
     * @param UpdateCustomAuthPermissionRequest $request
     *
     * @return UpdateCustomAuthPermissionResponse
     */
    public function updateCustomAuthPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomAuthPermissionWithOptions($request, $runtime);
    }
}
