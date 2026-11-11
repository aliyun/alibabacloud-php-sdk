<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\AppUseTimeReportHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\AppUseTimeReportRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\AppUseTimeReportResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\AppUseTimeReportShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CallBackThirdRightSendPlanHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CallBackThirdRightSendPlanRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CallBackThirdRightSendPlanResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CallBackThirdRightSendPlanShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CheckThirdRightSendPlanHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CheckThirdRightSendPlanRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CheckThirdRightSendPlanResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CheckThirdRightSendPlanShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CreateReminderHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CreateReminderRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CreateReminderResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CreateReminderShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CtripOrderPushHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CtripOrderPushRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\CtripOrderPushResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\DeleteReminderHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\DeleteReminderRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\DeleteReminderResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\DeleteReminderShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetAccountForAppHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetAccountForAppRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetAccountForAppResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetAccountForAppShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetBusAppConfigHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetBusAppConfigRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetBusAppConfigResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetBusAppConfigShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetPhoneNumberHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetPhoneNumberRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetPhoneNumberResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetPhoneNumberShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\ListRemindersHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\ListRemindersRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\ListRemindersResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\ListRemindersShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PullCashierHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PullCashierRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PullCashierResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PullCashierShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\SendNotificationsShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\ThirdImmediateMsgPushHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\ThirdImmediateMsgPushRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\ThirdImmediateMsgPushResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\UpdateReminderHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\UpdateReminderRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\UpdateReminderResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\UpdateReminderShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\VideoAppReportHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\VideoAppReportRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\VideoAppReportResponse;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\VideoAppReportShrinkRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\WakeUpAppHeaders;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\WakeUpAppRequest;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\WakeUpAppResponse;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AliGenie extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId = 'AliGenie';
        $gatewayClient = new Client();
        $this->_spi = $gatewayClient;
        $this->_endpointRule = 'regional';
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Used to report application usage duration on Tmall Genie devices.
     *
     * @param tmpReq - AppUseTimeReportRequest
     * @param headers - AppUseTimeReportHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AppUseTimeReportResponse
     *
     * @param AppUseTimeReportRequest $tmpReq
     * @param AppUseTimeReportHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return AppUseTimeReportResponse
     */
    public function appUseTimeReportWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new AppUseTimeReportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deviceInfo) {
            $request->deviceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }

        if (null !== $tmpReq->payload) {
            $request->payloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        $body = [];
        if (null !== $request->deviceInfoShrink) {
            @$body['DeviceInfo'] = $request->deviceInfoShrink;
        }

        if (null !== $request->payloadShrink) {
            @$body['Payload'] = $request->payloadShrink;
        }

        if (null !== $request->userInfoShrink) {
            @$body['UserInfo'] = $request->userInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AppUseTimeReport',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/vip/use/time/report',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AppUseTimeReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Used to report application usage duration on Tmall Genie devices.
     *
     * @param request - AppUseTimeReportRequest
     *
     * @returns AppUseTimeReportResponse
     *
     * @param AppUseTimeReportRequest $request
     *
     * @return AppUseTimeReportResponse
     */
    public function appUseTimeReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AppUseTimeReportHeaders([]);

        return $this->appUseTimeReportWithOptions($request, $headers, $runtime);
    }

    /**
     * Third-party membership redemption callback API.
     *
     * @param tmpReq - CallBackThirdRightSendPlanRequest
     * @param headers - CallBackThirdRightSendPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CallBackThirdRightSendPlanResponse
     *
     * @param CallBackThirdRightSendPlanRequest $tmpReq
     * @param CallBackThirdRightSendPlanHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CallBackThirdRightSendPlanResponse
     */
    public function callBackThirdRightSendPlanWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CallBackThirdRightSendPlanShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extendInfo) {
            $request->extendInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extendInfo, 'ExtendInfo', 'json');
        }

        $query = [];
        if (null !== $request->bizGroup) {
            @$query['BizGroup'] = $request->bizGroup;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->cardType) {
            @$query['CardType'] = $request->cardType;
        }

        if (null !== $request->errorMsg) {
            @$query['ErrorMsg'] = $request->errorMsg;
        }

        if (null !== $request->extendInfoShrink) {
            @$query['ExtendInfo'] = $request->extendInfoShrink;
        }

        if (null !== $request->genieOpenId) {
            @$query['GenieOpenId'] = $request->genieOpenId;
        }

        if (null !== $request->receiveStatus) {
            @$query['ReceiveStatus'] = $request->receiveStatus;
        }

        if (null !== $request->sn) {
            @$query['Sn'] = $request->sn;
        }

        if (null !== $request->supplierId) {
            @$query['SupplierId'] = $request->supplierId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CallBackThirdRightSendPlan',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/business/CallBackThirdRightSendPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CallBackThirdRightSendPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Third-party membership redemption callback API.
     *
     * @param request - CallBackThirdRightSendPlanRequest
     *
     * @returns CallBackThirdRightSendPlanResponse
     *
     * @param CallBackThirdRightSendPlanRequest $request
     *
     * @return CallBackThirdRightSendPlanResponse
     */
    public function callBackThirdRightSendPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CallBackThirdRightSendPlanHeaders([]);

        return $this->callBackThirdRightSendPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * Commercial mobile screen third-party app card issuance validation.
     *
     * @param tmpReq - CheckThirdRightSendPlanRequest
     * @param headers - CheckThirdRightSendPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckThirdRightSendPlanResponse
     *
     * @param CheckThirdRightSendPlanRequest $tmpReq
     * @param CheckThirdRightSendPlanHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckThirdRightSendPlanResponse
     */
    public function checkThirdRightSendPlanWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CheckThirdRightSendPlanShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extendInfo) {
            $request->extendInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extendInfo, 'ExtendInfo', 'json');
        }

        $query = [];
        if (null !== $request->bizGroup) {
            @$query['BizGroup'] = $request->bizGroup;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->extendInfoShrink) {
            @$query['ExtendInfo'] = $request->extendInfoShrink;
        }

        if (null !== $request->sn) {
            @$query['Sn'] = $request->sn;
        }

        if (null !== $request->supplierId) {
            @$query['SupplierId'] = $request->supplierId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CheckThirdRightSendPlan',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/business/CheckThirdRightSendPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CheckThirdRightSendPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Commercial mobile screen third-party app card issuance validation.
     *
     * @param request - CheckThirdRightSendPlanRequest
     *
     * @returns CheckThirdRightSendPlanResponse
     *
     * @param CheckThirdRightSendPlanRequest $request
     *
     * @return CheckThirdRightSendPlanResponse
     */
    public function checkThirdRightSendPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CheckThirdRightSendPlanHeaders([]);

        return $this->checkThirdRightSendPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * Used to create a reminder on a Tmall Genie device.
     *
     * @param tmpReq - CreateReminderRequest
     * @param headers - CreateReminderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateReminderResponse
     *
     * @param CreateReminderRequest $tmpReq
     * @param CreateReminderHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateReminderResponse
     */
    public function createReminderWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateReminderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deviceInfo) {
            $request->deviceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }

        if (null !== $tmpReq->payload) {
            $request->payloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        $body = [];
        if (null !== $request->deviceInfoShrink) {
            @$body['DeviceInfo'] = $request->deviceInfoShrink;
        }

        if (null !== $request->payloadShrink) {
            @$body['Payload'] = $request->payloadShrink;
        }

        if (null !== $request->userInfoShrink) {
            @$body['UserInfo'] = $request->userInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateReminder',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/reminder/create',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateReminderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Used to create a reminder on a Tmall Genie device.
     *
     * @param request - CreateReminderRequest
     *
     * @returns CreateReminderResponse
     *
     * @param CreateReminderRequest $request
     *
     * @return CreateReminderResponse
     */
    public function createReminder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateReminderHeaders([]);

        return $this->createReminderWithOptions($request, $headers, $runtime);
    }

    /**
     * 携程订单状态变更推送
     *
     * @param request - CtripOrderPushRequest
     * @param headers - CtripOrderPushHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CtripOrderPushResponse
     *
     * @param CtripOrderPushRequest $request
     * @param CtripOrderPushHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CtripOrderPushResponse
     */
    public function ctripOrderPushWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->journeyId) {
            @$query['JourneyId'] = $request->journeyId;
        }

        if (null !== $request->scheduleItem) {
            @$query['ScheduleItem'] = $request->scheduleItem;
        }

        if (null !== $request->uid) {
            @$query['Uid'] = $request->uid;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CtripOrderPush',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/ctripOrderPush',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CtripOrderPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 携程订单状态变更推送
     *
     * @param request - CtripOrderPushRequest
     *
     * @returns CtripOrderPushResponse
     *
     * @param CtripOrderPushRequest $request
     *
     * @return CtripOrderPushResponse
     */
    public function ctripOrderPush($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CtripOrderPushHeaders([]);

        return $this->ctripOrderPushWithOptions($request, $headers, $runtime);
    }

    /**
     * User deletes a reminder created on a Tmall Genie device.
     *
     * @param tmpReq - DeleteReminderRequest
     * @param headers - DeleteReminderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteReminderResponse
     *
     * @param DeleteReminderRequest $tmpReq
     * @param DeleteReminderHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteReminderResponse
     */
    public function deleteReminderWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteReminderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deviceInfo) {
            $request->deviceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }

        if (null !== $tmpReq->payload) {
            $request->payloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        $query = [];
        if (null !== $request->deviceInfoShrink) {
            @$query['DeviceInfo'] = $request->deviceInfoShrink;
        }

        if (null !== $request->payloadShrink) {
            @$query['Payload'] = $request->payloadShrink;
        }

        if (null !== $request->userInfoShrink) {
            @$query['UserInfo'] = $request->userInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteReminder',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/reminder/delete',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteReminderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * User deletes a reminder created on a Tmall Genie device.
     *
     * @param request - DeleteReminderRequest
     *
     * @returns DeleteReminderResponse
     *
     * @param DeleteReminderRequest $request
     *
     * @return DeleteReminderResponse
     */
    public function deleteReminder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteReminderHeaders([]);

        return $this->deleteReminderWithOptions($request, $headers, $runtime);
    }

    /**
     * Used by developers to obtain membership information in business scenarios that depend on CatGenie Membership.
     *
     * @param tmpReq - GetAccountForAppRequest
     * @param headers - GetAccountForAppHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountForAppResponse
     *
     * @param GetAccountForAppRequest $tmpReq
     * @param GetAccountForAppHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetAccountForAppResponse
     */
    public function getAccountForAppWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAccountForAppShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deviceInfo) {
            $request->deviceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }

        if (null !== $tmpReq->payload) {
            $request->payloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        $query = [];
        if (null !== $request->deviceInfoShrink) {
            @$query['DeviceInfo'] = $request->deviceInfoShrink;
        }

        if (null !== $request->payloadShrink) {
            @$query['Payload'] = $request->payloadShrink;
        }

        if (null !== $request->userInfoShrink) {
            @$query['UserInfo'] = $request->userInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccountForApp',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/vip/account/get',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetAccountForAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Used by developers to obtain membership information in business scenarios that depend on CatGenie Membership.
     *
     * @param request - GetAccountForAppRequest
     *
     * @returns GetAccountForAppResponse
     *
     * @param GetAccountForAppRequest $request
     *
     * @return GetAccountForAppResponse
     */
    public function getAccountForApp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetAccountForAppHeaders([]);

        return $this->getAccountForAppWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtain application configuration.
     *
     * @param tmpReq - GetBusAppConfigRequest
     * @param headers - GetBusAppConfigHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBusAppConfigResponse
     *
     * @param GetBusAppConfigRequest $tmpReq
     * @param GetBusAppConfigHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetBusAppConfigResponse
     */
    public function getBusAppConfigWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetBusAppConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deviceInfo) {
            $request->deviceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }

        if (null !== $tmpReq->payload) {
            $request->payloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        $query = [];
        if (null !== $request->deviceInfoShrink) {
            @$query['DeviceInfo'] = $request->deviceInfoShrink;
        }

        if (null !== $request->payloadShrink) {
            @$query['Payload'] = $request->payloadShrink;
        }

        if (null !== $request->userInfoShrink) {
            @$query['UserInfo'] = $request->userInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBusAppConfig',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/app/config/get',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetBusAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain application configuration.
     *
     * @param request - GetBusAppConfigRequest
     *
     * @returns GetBusAppConfigResponse
     *
     * @param GetBusAppConfigRequest $request
     *
     * @return GetBusAppConfigResponse
     */
    public function getBusAppConfig($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetBusAppConfigHeaders([]);

        return $this->getBusAppConfigWithOptions($request, $headers, $runtime);
    }

    /**
     * Obtain the phone number bound to the user\\"s Maojing device. You must first request this capability on the Maojing Skill Application Platform and obtain user authorization on the device side.
     *
     * @param tmpReq - GetPhoneNumberRequest
     * @param headers - GetPhoneNumberHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPhoneNumberResponse
     *
     * @param GetPhoneNumberRequest $tmpReq
     * @param GetPhoneNumberHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetPhoneNumberResponse
     */
    public function getPhoneNumberWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetPhoneNumberShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deviceInfo) {
            $request->deviceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        $query = [];
        if (null !== $request->deviceInfoShrink) {
            @$query['DeviceInfo'] = $request->deviceInfoShrink;
        }

        if (null !== $request->userInfoShrink) {
            @$query['UserInfo'] = $request->userInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPhoneNumber',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/profile/phoneNumber',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the phone number bound to the user\\"s Maojing device. You must first request this capability on the Maojing Skill Application Platform and obtain user authorization on the device side.
     *
     * @param request - GetPhoneNumberRequest
     *
     * @returns GetPhoneNumberResponse
     *
     * @param GetPhoneNumberRequest $request
     *
     * @return GetPhoneNumberResponse
     */
    public function getPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetPhoneNumberHeaders([]);

        return $this->getPhoneNumberWithOptions($request, $headers, $runtime);
    }

    /**
     * User retrieves reminders created on Tmall Genie devices.
     *
     * @param tmpReq - GetReminderRequest
     * @param headers - GetReminderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReminderResponse
     *
     * @param GetReminderRequest $tmpReq
     * @param GetReminderHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetReminderResponse
     */
    public function getReminderWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new GetReminderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deviceInfo) {
            $request->deviceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }

        if (null !== $tmpReq->payload) {
            $request->payloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        $query = [];
        if (null !== $request->deviceInfoShrink) {
            @$query['DeviceInfo'] = $request->deviceInfoShrink;
        }

        if (null !== $request->payloadShrink) {
            @$query['Payload'] = $request->payloadShrink;
        }

        if (null !== $request->userInfoShrink) {
            @$query['UserInfo'] = $request->userInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetReminder',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/reminder/get',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetReminderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * User retrieves reminders created on Tmall Genie devices.
     *
     * @param request - GetReminderRequest
     *
     * @returns GetReminderResponse
     *
     * @param GetReminderRequest $request
     *
     * @return GetReminderResponse
     */
    public function getReminder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetReminderHeaders([]);

        return $this->getReminderWithOptions($request, $headers, $runtime);
    }

    /**
     * The User batch retrieves reminders created on Tmall Genie devices.
     *
     * @param tmpReq - ListRemindersRequest
     * @param headers - ListRemindersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRemindersResponse
     *
     * @param ListRemindersRequest $tmpReq
     * @param ListRemindersHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListRemindersResponse
     */
    public function listRemindersWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListRemindersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deviceInfo) {
            $request->deviceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }

        if (null !== $tmpReq->payload) {
            $request->payloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        $query = [];
        if (null !== $request->deviceInfoShrink) {
            @$query['DeviceInfo'] = $request->deviceInfoShrink;
        }

        if (null !== $request->payloadShrink) {
            @$query['Payload'] = $request->payloadShrink;
        }

        if (null !== $request->userInfoShrink) {
            @$query['UserInfo'] = $request->userInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListReminders',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/reminder/list',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListRemindersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The User batch retrieves reminders created on Tmall Genie devices.
     *
     * @param request - ListRemindersRequest
     *
     * @returns ListRemindersResponse
     *
     * @param ListRemindersRequest $request
     *
     * @return ListRemindersResponse
     */
    public function listReminders($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListRemindersHeaders([]);

        return $this->listRemindersWithOptions($request, $headers, $runtime);
    }

    /**
     * The user launches the checkout page on a Tmall Genie device.
     *
     * @param tmpReq - PullCashierRequest
     * @param headers - PullCashierHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PullCashierResponse
     *
     * @param PullCashierRequest $tmpReq
     * @param PullCashierHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return PullCashierResponse
     */
    public function pullCashierWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new PullCashierShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deviceInfo) {
            $request->deviceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }

        if (null !== $tmpReq->payload) {
            $request->payloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        $query = [];
        if (null !== $request->deviceInfoShrink) {
            @$query['DeviceInfo'] = $request->deviceInfoShrink;
        }

        if (null !== $request->payloadShrink) {
            @$query['Payload'] = $request->payloadShrink;
        }

        if (null !== $request->userInfoShrink) {
            @$query['UserInfo'] = $request->userInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PullCashier',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/pull/cashier/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return PullCashierResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The user launches the checkout page on a Tmall Genie device.
     *
     * @param request - PullCashierRequest
     *
     * @returns PullCashierResponse
     *
     * @param PullCashierRequest $request
     *
     * @return PullCashierResponse
     */
    public function pullCashier($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PullCashierHeaders([]);

        return $this->pullCashierWithOptions($request, $headers, $runtime);
    }

    /**
     * Execute the message push feature of Tmall Genie. You must first request the capability and configure the message template on the Tmall Genie Skill Application Platform.
     *
     * @param tmpReq - PushNotificationsRequest
     * @param headers - PushNotificationsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushNotificationsResponse
     *
     * @param PushNotificationsRequest $tmpReq
     * @param PushNotificationsHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return PushNotificationsResponse
     */
    public function pushNotificationsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new PushNotificationsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->notificationUnicastRequest) {
            $request->notificationUnicastRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notificationUnicastRequest, 'NotificationUnicastRequest', 'json');
        }

        if (null !== $tmpReq->tenantInfo) {
            $request->tenantInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantInfo, 'TenantInfo', 'json');
        }

        $body = [];
        if (null !== $request->notificationUnicastRequestShrink) {
            @$body['NotificationUnicastRequest'] = $request->notificationUnicastRequestShrink;
        }

        if (null !== $request->tenantInfoShrink) {
            @$body['TenantInfo'] = $request->tenantInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PushNotifications',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/notifications',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'none',
        ]);

        return PushNotificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Execute the message push feature of Tmall Genie. You must first request the capability and configure the message template on the Tmall Genie Skill Application Platform.
     *
     * @param request - PushNotificationsRequest
     *
     * @returns PushNotificationsResponse
     *
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
     * Execute the message push feature of Tmall Genie. You must first request the capability and configure the message template in the Tmall Genie Skill Application Platform.
     *
     * @param tmpReq - SendNotificationsRequest
     * @param headers - SendNotificationsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendNotificationsResponse
     *
     * @param SendNotificationsRequest $tmpReq
     * @param SendNotificationsHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return SendNotificationsResponse
     */
    public function sendNotificationsWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new SendNotificationsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deviceInfo) {
            $request->deviceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }

        if (null !== $tmpReq->notificationUnicastRequest) {
            $request->notificationUnicastRequestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notificationUnicastRequest, 'NotificationUnicastRequest', 'json');
        }

        if (null !== $tmpReq->tenantInfo) {
            $request->tenantInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantInfo, 'TenantInfo', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        $body = [];
        if (null !== $request->deviceInfoShrink) {
            @$body['DeviceInfo'] = $request->deviceInfoShrink;
        }

        if (null !== $request->notificationUnicastRequestShrink) {
            @$body['NotificationUnicastRequest'] = $request->notificationUnicastRequestShrink;
        }

        if (null !== $request->tenantInfoShrink) {
            @$body['TenantInfo'] = $request->tenantInfoShrink;
        }

        if (null !== $request->userInfoShrink) {
            @$body['UserInfo'] = $request->userInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendNotifications',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/general/notifications',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'none',
        ]);

        return SendNotificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Execute the message push feature of Tmall Genie. You must first request the capability and configure the message template in the Tmall Genie Skill Application Platform.
     *
     * @param request - SendNotificationsRequest
     *
     * @returns SendNotificationsResponse
     *
     * @param SendNotificationsRequest $request
     *
     * @return SendNotificationsResponse
     */
    public function sendNotifications($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendNotificationsHeaders([]);

        return $this->sendNotificationsWithOptions($request, $headers, $runtime);
    }

    /**
     * 三方即时信息数据变更事件推送
     *
     * @param request - ThirdImmediateMsgPushRequest
     * @param headers - ThirdImmediateMsgPushHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ThirdImmediateMsgPushResponse
     *
     * @param ThirdImmediateMsgPushRequest $request
     * @param ThirdImmediateMsgPushHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ThirdImmediateMsgPushResponse
     */
    public function thirdImmediateMsgPushWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->changeDetail) {
            @$query['ChangeDetail'] = $request->changeDetail;
        }

        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->psgIds) {
            @$query['PsgIds'] = $request->psgIds;
        }

        if (null !== $request->trafficChangeType) {
            @$query['TrafficChangeType'] = $request->trafficChangeType;
        }

        if (null !== $request->trafficChangeTypeDesc) {
            @$query['TrafficChangeTypeDesc'] = $request->trafficChangeTypeDesc;
        }

        if (null !== $request->trafficJourneyIds) {
            @$query['TrafficJourneyIds'] = $request->trafficJourneyIds;
        }

        if (null !== $request->trafficSubOrderIds) {
            @$query['TrafficSubOrderIds'] = $request->trafficSubOrderIds;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ThirdImmediateMsgPush',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/thirdImmediateMsgPush',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ThirdImmediateMsgPushResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 三方即时信息数据变更事件推送
     *
     * @param request - ThirdImmediateMsgPushRequest
     *
     * @returns ThirdImmediateMsgPushResponse
     *
     * @param ThirdImmediateMsgPushRequest $request
     *
     * @return ThirdImmediateMsgPushResponse
     */
    public function thirdImmediateMsgPush($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ThirdImmediateMsgPushHeaders([]);

        return $this->thirdImmediateMsgPushWithOptions($request, $headers, $runtime);
    }

    /**
     * The user updates a reminder created on a Tmall Genie device.
     *
     * @param tmpReq - UpdateReminderRequest
     * @param headers - UpdateReminderHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateReminderResponse
     *
     * @param UpdateReminderRequest $tmpReq
     * @param UpdateReminderHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateReminderResponse
     */
    public function updateReminderWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateReminderShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deviceInfo) {
            $request->deviceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }

        if (null !== $tmpReq->payload) {
            $request->payloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        $body = [];
        if (null !== $request->deviceInfoShrink) {
            @$body['DeviceInfo'] = $request->deviceInfoShrink;
        }

        if (null !== $request->payloadShrink) {
            @$body['Payload'] = $request->payloadShrink;
        }

        if (null !== $request->userInfoShrink) {
            @$body['UserInfo'] = $request->userInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateReminder',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/reminder/update',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateReminderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The user updates a reminder created on a Tmall Genie device.
     *
     * @param request - UpdateReminderRequest
     *
     * @returns UpdateReminderResponse
     *
     * @param UpdateReminderRequest $request
     *
     * @return UpdateReminderResponse
     */
    public function updateReminder($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateReminderHeaders([]);

        return $this->updateReminderWithOptions($request, $headers, $runtime);
    }

    /**
     * Used by developers to report membership information in scenarios involving membership collaboration with CatGenie.
     *
     * @param tmpReq - VideoAppReportRequest
     * @param headers - VideoAppReportHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VideoAppReportResponse
     *
     * @param VideoAppReportRequest $tmpReq
     * @param VideoAppReportHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return VideoAppReportResponse
     */
    public function videoAppReportWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new VideoAppReportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->deviceInfo) {
            $request->deviceInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }

        if (null !== $tmpReq->payload) {
            $request->payloadShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }

        if (null !== $tmpReq->userInfo) {
            $request->userInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }

        $body = [];
        if (null !== $request->deviceInfoShrink) {
            @$body['DeviceInfo'] = $request->deviceInfoShrink;
        }

        if (null !== $request->payloadShrink) {
            @$body['Payload'] = $request->payloadShrink;
        }

        if (null !== $request->userInfoShrink) {
            @$body['UserInfo'] = $request->userInfoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'VideoAppReport',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/vip/use/video/report',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VideoAppReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Used by developers to report membership information in scenarios involving membership collaboration with CatGenie.
     *
     * @param request - VideoAppReportRequest
     *
     * @returns VideoAppReportResponse
     *
     * @param VideoAppReportRequest $request
     *
     * @return VideoAppReportResponse
     */
    public function videoAppReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new VideoAppReportHeaders([]);

        return $this->videoAppReportWithOptions($request, $headers, $runtime);
    }

    /**
     * On a smart speaker with a screen, proactively launch the MeowGenie screen-display application. You must first request this capability on the MeowGenie skill application platform.
     *
     * @param request - WakeUpAppRequest
     * @param headers - WakeUpAppHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WakeUpAppResponse
     *
     * @param WakeUpAppRequest $request
     * @param WakeUpAppHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return WakeUpAppResponse
     */
    public function wakeUpAppWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->isDebug) {
            @$body['IsDebug'] = $request->isDebug;
        }

        if (null !== $request->path) {
            @$body['Path'] = $request->path;
        }

        if (null !== $request->targetInfo) {
            @$body['TargetInfo'] = $request->targetInfo;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->xAcsAligenieAccessToken) {
            @$realHeaders['x-acs-aligenie-access-token'] = '' . $headers->xAcsAligenieAccessToken;
        }

        if (null !== $headers->authorization) {
            @$realHeaders['Authorization'] = '' . $headers->authorization;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'WakeUpApp',
            'version' => 'iap_1.0',
            'protocol' => 'HTTPS',
            'pathname' => '/v1.0/iap/wakeup',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'none',
        ]);

        return WakeUpAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * On a smart speaker with a screen, proactively launch the MeowGenie screen-display application. You must first request this capability on the MeowGenie skill application platform.
     *
     * @param request - WakeUpAppRequest
     *
     * @returns WakeUpAppResponse
     *
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
}
