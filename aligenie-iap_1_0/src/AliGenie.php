<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
     * @param AppUseTimeReportRequest $tmpReq
     * @param AppUseTimeReportHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return AppUseTimeReportResponse
     */
    public function appUseTimeReportWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AppUseTimeReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AppUseTimeReport',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/vip/use/time/report',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AppUseTimeReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CallBackThirdRightSendPlanRequest $tmpReq
     * @param CallBackThirdRightSendPlanHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return CallBackThirdRightSendPlanResponse
     */
    public function callBackThirdRightSendPlanWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CallBackThirdRightSendPlanShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extendInfo)) {
            $request->extendInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extendInfo, 'ExtendInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizGroup)) {
            $query['BizGroup'] = $request->bizGroup;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->cardType)) {
            $query['CardType'] = $request->cardType;
        }
        if (!Utils::isUnset($request->errorMsg)) {
            $query['ErrorMsg'] = $request->errorMsg;
        }
        if (!Utils::isUnset($request->extendInfoShrink)) {
            $query['ExtendInfo'] = $request->extendInfoShrink;
        }
        if (!Utils::isUnset($request->genieOpenId)) {
            $query['GenieOpenId'] = $request->genieOpenId;
        }
        if (!Utils::isUnset($request->receiveStatus)) {
            $query['ReceiveStatus'] = $request->receiveStatus;
        }
        if (!Utils::isUnset($request->sn)) {
            $query['Sn'] = $request->sn;
        }
        if (!Utils::isUnset($request->supplierId)) {
            $query['SupplierId'] = $request->supplierId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CallBackThirdRightSendPlan',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/1.0/iap/business/CallBackThirdRightSendPlan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CallBackThirdRightSendPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CheckThirdRightSendPlanRequest $tmpReq
     * @param CheckThirdRightSendPlanHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CheckThirdRightSendPlanResponse
     */
    public function checkThirdRightSendPlanWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CheckThirdRightSendPlanShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extendInfo)) {
            $request->extendInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extendInfo, 'ExtendInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bizGroup)) {
            $query['BizGroup'] = $request->bizGroup;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->extendInfoShrink)) {
            $query['ExtendInfo'] = $request->extendInfoShrink;
        }
        if (!Utils::isUnset($request->sn)) {
            $query['Sn'] = $request->sn;
        }
        if (!Utils::isUnset($request->supplierId)) {
            $query['SupplierId'] = $request->supplierId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckThirdRightSendPlan',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/business/CheckThirdRightSendPlan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckThirdRightSendPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param CreateReminderRequest $tmpReq
     * @param CreateReminderHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateReminderResponse
     */
    public function createReminderWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateReminderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateReminder',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/reminder/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateReminderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteReminderRequest $tmpReq
     * @param DeleteReminderHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteReminderResponse
     */
    public function deleteReminderWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteReminderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteReminder',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/reminder/delete',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteReminderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetAccountForAppRequest $tmpReq
     * @param GetAccountForAppHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetAccountForAppResponse
     */
    public function getAccountForAppWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetAccountForAppShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccountForApp',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/vip/account/get',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAccountForAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetBusAppConfigRequest $tmpReq
     * @param GetBusAppConfigHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetBusAppConfigResponse
     */
    public function getBusAppConfigWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetBusAppConfigShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBusAppConfig',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/app/config/get',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetBusAppConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetPhoneNumberRequest $tmpReq
     * @param GetPhoneNumberHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetPhoneNumberResponse
     */
    public function getPhoneNumberWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetPhoneNumberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPhoneNumber',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/profile/phoneNumber',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param GetReminderRequest $tmpReq
     * @param GetReminderHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetReminderResponse
     */
    public function getReminderWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetReminderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetReminder',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/reminder/get',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetReminderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ListRemindersRequest $tmpReq
     * @param ListRemindersHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListRemindersResponse
     */
    public function listRemindersWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListRemindersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListReminders',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/reminder/list',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRemindersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PullCashierRequest $tmpReq
     * @param PullCashierHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return PullCashierResponse
     */
    public function pullCashierWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PullCashierShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $query['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $query['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $query['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PullCashier',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/pull/cashier/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PullCashierResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
            $request->notificationUnicastRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notificationUnicastRequest, 'NotificationUnicastRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantInfo)) {
            $request->tenantInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantInfo, 'TenantInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->notificationUnicastRequestShrink)) {
            $body['NotificationUnicastRequest'] = $request->notificationUnicastRequestShrink;
        }
        if (!Utils::isUnset($request->tenantInfoShrink)) {
            $body['TenantInfo'] = $request->tenantInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
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
     * @param SendNotificationsRequest $tmpReq
     * @param SendNotificationsHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return SendNotificationsResponse
     */
    public function sendNotificationsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendNotificationsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->notificationUnicastRequest)) {
            $request->notificationUnicastRequestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notificationUnicastRequest, 'NotificationUnicastRequest', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantInfo)) {
            $request->tenantInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantInfo, 'TenantInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->notificationUnicastRequestShrink)) {
            $body['NotificationUnicastRequest'] = $request->notificationUnicastRequestShrink;
        }
        if (!Utils::isUnset($request->tenantInfoShrink)) {
            $body['TenantInfo'] = $request->tenantInfoShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendNotifications',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/general/notifications',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'none',
        ]);

        return SendNotificationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateReminderRequest $tmpReq
     * @param UpdateReminderHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateReminderResponse
     */
    public function updateReminderWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateReminderShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateReminder',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/reminder/update',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateReminderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param VideoAppReportRequest $tmpReq
     * @param VideoAppReportHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return VideoAppReportResponse
     */
    public function videoAppReportWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new VideoAppReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deviceInfo)) {
            $request->deviceInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deviceInfo, 'DeviceInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->payload)) {
            $request->payloadShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->payload, 'Payload', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userInfo, 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->deviceInfoShrink)) {
            $body['DeviceInfo'] = $request->deviceInfoShrink;
        }
        if (!Utils::isUnset($request->payloadShrink)) {
            $body['Payload'] = $request->payloadShrink;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VideoAppReport',
            'version'     => 'iap_1.0',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v1.0/iap/vip/use/video/report',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VideoAppReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
        if (!Utils::isUnset($request->isDebug)) {
            $body['IsDebug'] = $request->isDebug;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        if (!Utils::isUnset($request->targetInfo)) {
            $body['TargetInfo'] = $request->targetInfo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsAligenieAccessToken)) {
            $realHeaders['x-acs-aligenie-access-token'] = Utils::toJSONString($headers->xAcsAligenieAccessToken);
        }
        if (!Utils::isUnset($headers->authorization)) {
            $realHeaders['Authorization'] = Utils::toJSONString($headers->authorization);
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
