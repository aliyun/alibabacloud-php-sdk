<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\WakeUpAppHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\WakeUpAppRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\WakeUpAppResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class AliGenie extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aligenie', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param WakeUpAppRequest $request
     *
     * @return WakeUpAppResponse
     */
    public function wakeUpApp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new WakeUpAppHeaders([]);

        return $this->wakeUpAppWithOptions($request, $headers, $runtime);
    }

    /**
     * @param WakeUpAppRequest $request
     * @param WakeUpAppHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return WakeUpAppResponse
     */
    public function wakeUpAppWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->path)) {
            @$body['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->genieAppId)) {
            @$body['GenieAppId'] = $request->genieAppId;
        }
        if (!Utils::isUnset($request->targetInfo)) {
            @$body['TargetInfo'] = $request->targetInfo;
        }
        if (!Utils::isUnset($request->isDebug)) {
            @$body['IsDebug'] = $request->isDebug;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            @$realHeaders['x-acs-aligenie-access-token'] = $headers->xAcsAligenieAccessToken;
        }
        if (!Utils::isUnset($headers->authorization)) {
            @$realHeaders['Authorization'] = $headers->authorization;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'WakeUpApp',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/wakeup',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return WakeUpAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PushNotificationsRequest $request
     *
     * @return PushNotificationsResponse
     */
    public function pushNotifications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PushNotificationsHeaders([]);

        return $this->pushNotificationsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PushNotificationsRequest $tmpReq
     * @param PushNotificationsHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return PushNotificationsResponse
     */
    public function pushNotificationsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PushNotificationsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->notificationUnicastRequest)) {
            $request->notificationUnicastRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->notificationUnicastRequest), 'NotificationUnicastRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantInfo)) {
            $request->tenantInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->tenantInfo), 'TenantInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->notificationUnicastRequestShrink)) {
            @$body['NotificationUnicastRequest'] = $request->notificationUnicastRequestShrink;
        }
        if (!Utils::isUnset($request->tenantInfoShrink)) {
            @$body['TenantInfo'] = $request->tenantInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            @$realHeaders['x-acs-aligenie-access-token'] = $headers->xAcsAligenieAccessToken;
        }
        if (!Utils::isUnset($headers->authorization)) {
            @$realHeaders['Authorization'] = $headers->authorization;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PushNotifications',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/notifications',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'none',
        ]);

        return PushNotificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
