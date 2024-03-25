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
     * @param ActiveCaCertificateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ActiveCaCertificateResponse
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
     * @param ActiveDeviceCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ActiveDeviceCertificateResponse
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
     * @param AddCustomAuthConnectBlackRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddCustomAuthConnectBlackResponse
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
     * @param AddCustomAuthIdentityRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddCustomAuthIdentityResponse
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
     * @param AddCustomAuthPermissionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AddCustomAuthPermissionResponse
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
     * *   You can call this operation up to 100 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     *   * *   Each successful call to the **ApplyToken** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * *   You can call this operation up to 100 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     *   * *   Each successful call to the **ApplyToken** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * *   You can call the **BatchQuerySessionByClientIds** operation up to 100 times per second. For more information, see [Limits on QPS](~~163047~~).
     *   * *   You can call the **BatchQuerySessionByClientIds** operation to query the status of up to 10 ApsaraMQ for MQTT clients in a single query.
     *   * *   Each successful call to the **BatchQuerySessionByClientIds** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * *   You can call the **BatchQuerySessionByClientIds** operation up to 100 times per second. For more information, see [Limits on QPS](~~163047~~).
     *   * *   You can call the **BatchQuerySessionByClientIds** operation to query the status of up to 10 ApsaraMQ for MQTT clients in a single query.
     *   * *   Each successful call to the **BatchQuerySessionByClientIds** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * Each successful call to the **CreateGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * Each successful call to the **CreateGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * @param DeleteCaCertificateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCaCertificateResponse
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
     * @param DeleteCustomAuthConnectBlackRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteCustomAuthConnectBlackResponse
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
     * @param DeleteCustomAuthIdentityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCustomAuthIdentityResponse
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
     * @param DeleteCustomAuthPermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteCustomAuthPermissionResponse
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
     * @param DeleteDeviceCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteDeviceCertificateResponse
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
     * Each successful call to the **DeleteGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * Each successful call to the **DeleteGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * @param GetCaCertificateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetCaCertificateResponse
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
     * @param GetDeviceCertificateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetDeviceCertificateResponse
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
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   * *   Each successful call to the **GetDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   * *   Each successful call to the **GetDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * @param GetRegisterCodeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRegisterCodeResponse
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
     * @param InactivateCaCertificateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return InactivateCaCertificateResponse
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
     * @param InactivateDeviceCertificateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return InactivateDeviceCertificateResponse
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
     * @param ListCaCertificateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListCaCertificateResponse
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
     * @param ListDeviceCertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListDeviceCertificateResponse
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
     * @param ListDeviceCertificateByCaSnRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDeviceCertificateByCaSnResponse
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
     * @param ListDeviceCredentialClientIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListDeviceCredentialClientIdResponse
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
     * Each successful call to the **ListGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * Each successful call to the **ListGroupId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * @param QueryCustomAuthConnectBlackRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryCustomAuthConnectBlackResponse
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
     * @param QueryCustomAuthIdentityRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryCustomAuthIdentityResponse
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
     * @param QueryCustomAuthPermissionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryCustomAuthPermissionResponse
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
     * *   Each successful call to the **QueryMqttTraceDevice** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   *
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
     * *   Each successful call to the **QueryMqttTraceDevice** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   *
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
     * *   Each successful call to the **QueryMqttTraceMessageOfClient** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   *
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
     * *   Each successful call to the **QueryMqttTraceMessageOfClient** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   *
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
     * *   Each successful call to the **QueryMqttTraceMessagePublish** operation increases the messaging transactions per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   *
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
     * *   Each successful call to the **QueryMqttTraceMessagePublish** operation increases the messaging transactions per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   *
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
     * *   Each successful call to the **QueryMqttTraceMessageSubscribe** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   *
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
     * *   Each successful call to the **QueryMqttTraceMessageSubscribe** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   *
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
     * *   You can call this operation up to 500 times per second.**** For more information, see [Limits on QPS](~~163047~~).
     *   * *   Each successful call to the **QuerySessionByClientId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * *   You can call this operation up to 500 times per second.**** For more information, see [Limits on QPS](~~163047~~).
     *   * *   Each successful call to the **QuerySessionByClientId** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * *   You can call this operation up to 100 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     *   * *   Each successful call to the **QueryToken** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * *   You can call this operation up to 100 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     *   * *   Each successful call to the **QueryToken** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * ## [](#)Limits
     *   * You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   * >  Each successful call to the **RefreshDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * ## [](#)Limits
     *   * You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   * >  Each successful call to the **RefreshDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * @param RegisterCaCertificateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RegisterCaCertificateResponse
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
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   * *   Each successful call to the **RegisterDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   * *   Each successful call to the **RegisterDeviceCredential** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * *   You can call this operation up to 5 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     *   * *   Each successful call to the **RevokeToken** operation increases the messaging transactions per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * *   You can call this operation up to 5 times per second per account. If you want to increase the limit, join the DingTalk group 35228338 to contact ApsaraMQ for MQTT technical support.
     *   * *   Each successful call to the **RevokeToken** operation increases the messaging transactions per second (TPS). This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * *   The **SendMessage** operation is called by applications on cloud servers. It is complementary to the operation that is called by ApsaraMQ for MQTT clients to send messages. For information about the differences between the scenarios of sending messages from applications on cloud servers and the scenarios of sending messages from ApsaraMQ for MQTT clients, see [Developer guide](~~179160~~).
     *   * *   Before you call the **SendMessage** operation, make sure that the kernel version of your ApsaraMQ for MQTT instance is 3.3.0 or later. You can obtain the information about the kernel version on the [Instance Details](https://mqtt.console.aliyun.com) page that corresponds to the instance in the **ApsaraMQ for MQTT console**.
     *   * *   Messages that are sent by calling the **SendMessage** operation cannot be forwarded to ApsaraMQ for RocketMQ. If you want to use an ApsaraMQ for MQTT to forward messages to ApsaraMQ for RocketMQ, send the messages by using an SDK. For more information, see [Export data from ApsaraMQ for MQTT to other Alibaba Cloud services](~~174527~~). You can call the **SendMessage** operation up to 1,000 times per second. For more information, see [Limits on QPS](~~163047~~).
     *   * *   Each successful call to the **SendMessage** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For information about the billing details, see [Billing rules](~~52819~~).
     *   *
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
     * *   The **SendMessage** operation is called by applications on cloud servers. It is complementary to the operation that is called by ApsaraMQ for MQTT clients to send messages. For information about the differences between the scenarios of sending messages from applications on cloud servers and the scenarios of sending messages from ApsaraMQ for MQTT clients, see [Developer guide](~~179160~~).
     *   * *   Before you call the **SendMessage** operation, make sure that the kernel version of your ApsaraMQ for MQTT instance is 3.3.0 or later. You can obtain the information about the kernel version on the [Instance Details](https://mqtt.console.aliyun.com) page that corresponds to the instance in the **ApsaraMQ for MQTT console**.
     *   * *   Messages that are sent by calling the **SendMessage** operation cannot be forwarded to ApsaraMQ for RocketMQ. If you want to use an ApsaraMQ for MQTT to forward messages to ApsaraMQ for RocketMQ, send the messages by using an SDK. For more information, see [Export data from ApsaraMQ for MQTT to other Alibaba Cloud services](~~174527~~). You can call the **SendMessage** operation up to 1,000 times per second. For more information, see [Limits on QPS](~~163047~~).
     *   * *   Each successful call to the **SendMessage** operation increases the messaging transactions per second (TPS) by one. This affects the billing of your instance. For information about the billing details, see [Billing rules](~~52819~~).
     *   *
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
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   * *   Each successful call to the **UnRegisterDeviceCredential** operation increases the number of transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * *   You can call this operation up to 500 times per second per account. If the limit is exceeded, throttling is triggered. This may affect your business. We recommend that you take note of this limit when you call this operation. For more information, see [Limits on QPS](~~163047~~).
     *   * *   Each successful call to the **UnRegisterDeviceCredential** operation increases the number of transactions per second (TPS) by one. This affects the billing of your instance. For more information, see [Billing rules](~~52819~~).
     *   *
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
     * @param UpdateCustomAuthIdentityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateCustomAuthIdentityResponse
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
     * @param UpdateCustomAuthPermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateCustomAuthPermissionResponse
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
