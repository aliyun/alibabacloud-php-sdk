<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ChangeMediaStatusRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ChangeMediaStatusResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ChangeSlotStatusRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ChangeSlotStatusResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ChangeTenantStatusRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ChangeTenantStatusResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ChangeTenantUserStatusRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ChangeTenantUserStatusResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ChargeLaunchRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ChargeLaunchResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CheckDeviceRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CheckDeviceResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CheckReceivingDetailRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CheckReceivingDetailResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CheckTenantBizRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CheckTenantBizResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CountUserRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CountUserResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CountUserShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateCalculationRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateCalculationResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateFlowRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateFlowResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateFlowShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateMediaRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateMediaResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateMediaShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateProxyBrandUserRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateProxyBrandUserResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateRuleRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateRuleResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateRuleShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateSlotRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateSlotResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateSlotShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreatesSlotTemplateRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreatesSlotTemplateResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreatesSlotTemplateShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateTenantRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateTenantResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateTenantShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateTenantUserRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateTenantUserResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateTenantUserShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateUnionTaskRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateUnionTaskResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateUserRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateUserResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\CreateUserShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\DeleteProxyBrandUserRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\DeleteProxyBrandUserResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\DeleteRuleRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\DeleteRuleResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\DeleteRuleShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\EndUnionTaskRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\EndUnionTaskResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\GetUnionTaskStatusRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\GetUnionTaskStatusResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\KeepAliveRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\KeepAliveResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListFlowRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListFlowResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListFlowShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListMediaNameRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListMediaNameResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListMediaNameShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListMediaRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListMediaResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListMediaShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListRuleAreaRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListRuleAreaResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListRuleRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListRuleResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListSlotRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListSlotResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListSlotTemplateRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListSlotTemplateResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListTenantNameRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListTenantNameResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListTenantRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListTenantResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListUserRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListUserResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ListUserShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifyMediaRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifyMediaResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifyMediaShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifyRuleRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifyRuleResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifyRuleShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifySlotRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifySlotResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifySlotShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifySlotTemplateRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifySlotTemplateResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifySlotTemplateShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifyTenantInfoRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifyTenantInfoResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ModifyTenantInfoShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\PushDeviceStatusRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\PushDeviceStatusResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\PushExtraTradeDetailRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\PushExtraTradeDetailResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\PushFaultEventRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\PushFaultEventResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\PushTradeDetailRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\PushTradeDetailResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryAppPromotionRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryAppPromotionResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryAppTasksRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryAppTasksResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryAvailableBalanceRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryAvailableBalanceResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryChannelHistoryDataRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryChannelHistoryDataResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryContentInfoRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryContentInfoResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryContentListRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryContentListResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryFlowRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryFlowResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryIncomeDataRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryIncomeDataResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryIncomeDataShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryIncomeTrendRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryIncomeTrendResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryIncomeTrendShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryIndustryLabelBagRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryIndustryLabelBagResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryMediaRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryMediaResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryPromotionRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryPromotionResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryRuleRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryRuleResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QuerySlotRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QuerySlotResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QuerySlotTemplateRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QuerySlotTemplateResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTaskBizTypeRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTaskBizTypeResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTaskRuleLimitRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTaskRuleLimitResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTaskRulesRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTaskRulesResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTenantBizConfigRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTenantBizConfigResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTenantInfoRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTenantInfoResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTenantUserByUserIdRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTenantUserByUserIdResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTenantUserRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryTenantUserResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUnionChannelRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUnionChannelResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUnionContentInfoRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUnionContentInfoResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUnionPromotionRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUnionPromotionResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUnionSumChannelDataRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUnionSumChannelDataResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUnionTaskInfoRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUnionTaskInfoResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUnionTaskListRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUnionTaskListResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUserRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUserResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\QueryUserShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ReduceAmountRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ReduceAmountResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\RegistDeviceRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\RegistDeviceResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\SaveCpmTradeRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\SaveCpmTradeResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ScanCodeNotificationRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\ScanCodeNotificationResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\SendTaokeInfoRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\SendTaokeInfoResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\SyncUnionOrderRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\SyncUnionOrderResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\UpdateFlowRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\UpdateFlowResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\UpdateFlowShrinkRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\UpdateUserRequest;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\UpdateUserResponse;
use AlibabaCloud\SDK\UniMkt\V20181212\Models\UpdateUserShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class UniMkt extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou' => 'cloudcode.cn-hangzhou.aliyuncs.com',
            'cn-shanghai' => 'cloudcode.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('unimkt', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ChangeMediaStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ChangeMediaStatusResponse
     */
    public function changeMediaStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeMediaStatusResponse::fromMap($this->doRPCRequest('ChangeMediaStatus', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeMediaStatusRequest $request
     *
     * @return ChangeMediaStatusResponse
     */
    public function changeMediaStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeMediaStatusWithOptions($request, $runtime);
    }

    /**
     * @param ChangeSlotStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ChangeSlotStatusResponse
     */
    public function changeSlotStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeSlotStatusResponse::fromMap($this->doRPCRequest('ChangeSlotStatus', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeSlotStatusRequest $request
     *
     * @return ChangeSlotStatusResponse
     */
    public function changeSlotStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeSlotStatusWithOptions($request, $runtime);
    }

    /**
     * @param ChangeTenantStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ChangeTenantStatusResponse
     */
    public function changeTenantStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeTenantStatusResponse::fromMap($this->doRPCRequest('ChangeTenantStatus', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeTenantStatusRequest $request
     *
     * @return ChangeTenantStatusResponse
     */
    public function changeTenantStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeTenantStatusWithOptions($request, $runtime);
    }

    /**
     * @param ChangeTenantUserStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ChangeTenantUserStatusResponse
     */
    public function changeTenantUserStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeTenantUserStatusResponse::fromMap($this->doRPCRequest('ChangeTenantUserStatus', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeTenantUserStatusRequest $request
     *
     * @return ChangeTenantUserStatusResponse
     */
    public function changeTenantUserStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeTenantUserStatusWithOptions($request, $runtime);
    }

    /**
     * @param ChargeLaunchRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ChargeLaunchResponse
     */
    public function chargeLaunchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChargeLaunchResponse::fromMap($this->doRPCRequest('ChargeLaunch', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChargeLaunchRequest $request
     *
     * @return ChargeLaunchResponse
     */
    public function chargeLaunch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chargeLaunchWithOptions($request, $runtime);
    }

    /**
     * @param CheckDeviceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CheckDeviceResponse
     */
    public function checkDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckDeviceResponse::fromMap($this->doRPCRequest('CheckDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckDeviceRequest $request
     *
     * @return CheckDeviceResponse
     */
    public function checkDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkDeviceWithOptions($request, $runtime);
    }

    /**
     * @param CheckReceivingDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CheckReceivingDetailResponse
     */
    public function checkReceivingDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckReceivingDetailResponse::fromMap($this->doRPCRequest('CheckReceivingDetail', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckReceivingDetailRequest $request
     *
     * @return CheckReceivingDetailResponse
     */
    public function checkReceivingDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkReceivingDetailWithOptions($request, $runtime);
    }

    /**
     * @param CheckTenantBizRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CheckTenantBizResponse
     */
    public function checkTenantBizWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckTenantBizResponse::fromMap($this->doRPCRequest('CheckTenantBiz', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckTenantBizRequest $request
     *
     * @return CheckTenantBizResponse
     */
    public function checkTenantBiz($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkTenantBizWithOptions($request, $runtime);
    }

    /**
     * @param CountUserRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CountUserResponse
     */
    public function countUserWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CountUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sspUser)) {
            $request->sspUserShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sspUser, 'SspUser', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CountUserResponse::fromMap($this->doRPCRequest('CountUser', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CountUserRequest $request
     *
     * @return CountUserResponse
     */
    public function countUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->countUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateCalculationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCalculationResponse
     */
    public function createCalculationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCalculationResponse::fromMap($this->doRPCRequest('CreateCalculation', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCalculationRequest $request
     *
     * @return CreateCalculationResponse
     */
    public function createCalculation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCalculationWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFlowResponse
     */
    public function createFlowWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFlowShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->flow)) {
            $request->flowShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->flow, 'Flow', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowResponse::fromMap($this->doRPCRequest('CreateFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlowRequest $request
     *
     * @return CreateFlowResponse
     */
    public function createFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowWithOptions($request, $runtime);
    }

    /**
     * @param CreateMediaRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return CreateMediaResponse
     */
    public function createMediaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMediaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->media)) {
            $request->mediaShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->media, 'Media', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMediaResponse::fromMap($this->doRPCRequest('CreateMedia', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateMediaRequest $request
     *
     * @return CreateMediaResponse
     */
    public function createMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMediaWithOptions($request, $runtime);
    }

    /**
     * @param CreateProxyBrandUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateProxyBrandUserResponse
     */
    public function createProxyBrandUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProxyBrandUserResponse::fromMap($this->doRPCRequest('CreateProxyBrandUser', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateProxyBrandUserRequest $request
     *
     * @return CreateProxyBrandUserResponse
     */
    public function createProxyBrandUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProxyBrandUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateRuleRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adRule)) {
            $request->adRuleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->adRule, 'AdRule', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRuleResponse::fromMap($this->doRPCRequest('CreateRule', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRuleRequest $request
     *
     * @return CreateRuleResponse
     */
    public function createRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateSlotRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreateSlotResponse
     */
    public function createSlotWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSlotShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adSlot)) {
            $request->adSlotShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->adSlot, 'AdSlot', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSlotResponse::fromMap($this->doRPCRequest('CreateSlot', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSlotRequest $request
     *
     * @return CreateSlotResponse
     */
    public function createSlot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSlotWithOptions($request, $runtime);
    }

    /**
     * @param CreatesSlotTemplateRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreatesSlotTemplateResponse
     */
    public function createsSlotTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatesSlotTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adSlotTemplate)) {
            $request->adSlotTemplateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->adSlotTemplate, 'AdSlotTemplate', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatesSlotTemplateResponse::fromMap($this->doRPCRequest('CreatesSlotTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatesSlotTemplateRequest $request
     *
     * @return CreatesSlotTemplateResponse
     */
    public function createsSlotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createsSlotTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateTenantRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTenantResponse
     */
    public function createTenantWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTenantShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tenant)) {
            $request->tenantShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenant, 'Tenant', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTenantResponse::fromMap($this->doRPCRequest('CreateTenant', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTenantRequest $request
     *
     * @return CreateTenantResponse
     */
    public function createTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantWithOptions($request, $runtime);
    }

    /**
     * @param CreateTenantUserRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateTenantUserResponse
     */
    public function createTenantUserWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTenantUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tenantUser)) {
            $request->tenantUserShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantUser, 'TenantUser', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTenantUserResponse::fromMap($this->doRPCRequest('CreateTenantUser', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTenantUserRequest $request
     *
     * @return CreateTenantUserResponse
     */
    public function createTenantUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTenantUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateUnionTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateUnionTaskResponse
     */
    public function createUnionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUnionTaskResponse::fromMap($this->doRPCRequest('CreateUnionTask', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUnionTaskRequest $request
     *
     * @return CreateUnionTaskResponse
     */
    public function createUnionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUnionTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateUserRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreateUserResponse
     */
    public function createUserWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sspUser)) {
            $request->sspUserShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sspUser, 'SspUser', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateUserResponse::fromMap($this->doRPCRequest('CreateUser', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateUserRequest $request
     *
     * @return CreateUserResponse
     */
    public function createUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProxyBrandUserRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteProxyBrandUserResponse
     */
    public function deleteProxyBrandUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteProxyBrandUserResponse::fromMap($this->doRPCRequest('DeleteProxyBrandUser', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteProxyBrandUserRequest $request
     *
     * @return DeleteProxyBrandUserResponse
     */
    public function deleteProxyBrandUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProxyBrandUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRuleRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRuleResponse
     */
    public function deleteRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adRule)) {
            $request->adRuleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->adRule, 'AdRule', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRuleResponse::fromMap($this->doRPCRequest('DeleteRule', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRuleRequest $request
     *
     * @return DeleteRuleResponse
     */
    public function deleteRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRuleWithOptions($request, $runtime);
    }

    /**
     * @param EndUnionTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return EndUnionTaskResponse
     */
    public function endUnionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EndUnionTaskResponse::fromMap($this->doRPCRequest('EndUnionTask', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EndUnionTaskRequest $request
     *
     * @return EndUnionTaskResponse
     */
    public function endUnionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->endUnionTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetUnionTaskStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetUnionTaskStatusResponse
     */
    public function getUnionTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetUnionTaskStatusResponse::fromMap($this->doRPCRequest('GetUnionTaskStatus', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetUnionTaskStatusRequest $request
     *
     * @return GetUnionTaskStatusResponse
     */
    public function getUnionTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUnionTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param KeepAliveRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return KeepAliveResponse
     */
    public function keepAliveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return KeepAliveResponse::fromMap($this->doRPCRequest('KeepAlive', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param KeepAliveRequest $request
     *
     * @return KeepAliveResponse
     */
    public function keepAlive($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->keepAliveWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return ListFlowResponse
     */
    public function listFlowWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListFlowShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->listFlow)) {
            $request->listFlowShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->listFlow, 'ListFlow', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowResponse::fromMap($this->doRPCRequest('ListFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowRequest $request
     *
     * @return ListFlowResponse
     */
    public function listFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return ListMediaResponse
     */
    public function listMediaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListMediaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->mediaName)) {
            $request->mediaNameShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->mediaName, 'MediaName', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMediaResponse::fromMap($this->doRPCRequest('ListMedia', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMediaRequest $request
     *
     * @return ListMediaResponse
     */
    public function listMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaWithOptions($request, $runtime);
    }

    /**
     * @param ListMediaNameRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListMediaNameResponse
     */
    public function listMediaNameWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListMediaNameShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->mediaName)) {
            $request->mediaNameShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->mediaName, 'MediaName', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListMediaNameResponse::fromMap($this->doRPCRequest('ListMediaName', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListMediaNameRequest $request
     *
     * @return ListMediaNameResponse
     */
    public function listMediaName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaNameWithOptions($request, $runtime);
    }

    /**
     * @param ListRuleRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListRuleResponse
     */
    public function listRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRuleResponse::fromMap($this->doRPCRequest('ListRule', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRuleRequest $request
     *
     * @return ListRuleResponse
     */
    public function listRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRuleWithOptions($request, $runtime);
    }

    /**
     * @param ListRuleAreaRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListRuleAreaResponse
     */
    public function listRuleAreaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRuleAreaResponse::fromMap($this->doRPCRequest('ListRuleArea', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRuleAreaRequest $request
     *
     * @return ListRuleAreaResponse
     */
    public function listRuleArea($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRuleAreaWithOptions($request, $runtime);
    }

    /**
     * @param ListSlotRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListSlotResponse
     */
    public function listSlotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSlotResponse::fromMap($this->doRPCRequest('ListSlot', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSlotRequest $request
     *
     * @return ListSlotResponse
     */
    public function listSlot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSlotWithOptions($request, $runtime);
    }

    /**
     * @param ListSlotTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListSlotTemplateResponse
     */
    public function listSlotTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSlotTemplateResponse::fromMap($this->doRPCRequest('ListSlotTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSlotTemplateRequest $request
     *
     * @return ListSlotTemplateResponse
     */
    public function listSlotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSlotTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListTenantRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListTenantResponse
     */
    public function listTenantWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTenantResponse::fromMap($this->doRPCRequest('ListTenant', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTenantRequest $request
     *
     * @return ListTenantResponse
     */
    public function listTenant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTenantWithOptions($request, $runtime);
    }

    /**
     * @param ListTenantNameRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTenantNameResponse
     */
    public function listTenantNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTenantNameResponse::fromMap($this->doRPCRequest('ListTenantName', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTenantNameRequest $request
     *
     * @return ListTenantNameResponse
     */
    public function listTenantName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTenantNameWithOptions($request, $runtime);
    }

    /**
     * @param ListUserRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return ListUserResponse
     */
    public function listUserWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sspUser)) {
            $request->sspUserShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sspUser, 'SspUser', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListUserResponse::fromMap($this->doRPCRequest('ListUser', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListUserRequest $request
     *
     * @return ListUserResponse
     */
    public function listUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMediaRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyMediaResponse
     */
    public function modifyMediaWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyMediaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->media)) {
            $request->mediaShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->media, 'Media', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyMediaResponse::fromMap($this->doRPCRequest('ModifyMedia', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyMediaRequest $request
     *
     * @return ModifyMediaResponse
     */
    public function modifyMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMediaWithOptions($request, $runtime);
    }

    /**
     * @param ModifyRuleRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyRuleResponse
     */
    public function modifyRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adRule)) {
            $request->adRuleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->adRule, 'AdRule', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyRuleResponse::fromMap($this->doRPCRequest('ModifyRule', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyRuleRequest $request
     *
     * @return ModifyRuleResponse
     */
    public function modifyRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRuleWithOptions($request, $runtime);
    }

    /**
     * @param ModifySlotRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return ModifySlotResponse
     */
    public function modifySlotWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifySlotShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adSlot)) {
            $request->adSlotShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->adSlot, 'AdSlot', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySlotResponse::fromMap($this->doRPCRequest('ModifySlot', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySlotRequest $request
     *
     * @return ModifySlotResponse
     */
    public function modifySlot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySlotWithOptions($request, $runtime);
    }

    /**
     * @param ModifySlotTemplateRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ModifySlotTemplateResponse
     */
    public function modifySlotTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifySlotTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->adSlotTemplate)) {
            $request->adSlotTemplateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->adSlotTemplate, 'AdSlotTemplate', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifySlotTemplateResponse::fromMap($this->doRPCRequest('ModifySlotTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifySlotTemplateRequest $request
     *
     * @return ModifySlotTemplateResponse
     */
    public function modifySlotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySlotTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTenantInfoRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyTenantInfoResponse
     */
    public function modifyTenantInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyTenantInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tenant)) {
            $request->tenantShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenant, 'Tenant', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyTenantInfoResponse::fromMap($this->doRPCRequest('ModifyTenantInfo', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyTenantInfoRequest $request
     *
     * @return ModifyTenantInfoResponse
     */
    public function modifyTenantInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTenantInfoWithOptions($request, $runtime);
    }

    /**
     * @param PushDeviceStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PushDeviceStatusResponse
     */
    public function pushDeviceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushDeviceStatusResponse::fromMap($this->doRPCRequest('PushDeviceStatus', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PushDeviceStatusRequest $request
     *
     * @return PushDeviceStatusResponse
     */
    public function pushDeviceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushDeviceStatusWithOptions($request, $runtime);
    }

    /**
     * @param PushExtraTradeDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PushExtraTradeDetailResponse
     */
    public function pushExtraTradeDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushExtraTradeDetailResponse::fromMap($this->doRPCRequest('PushExtraTradeDetail', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PushExtraTradeDetailRequest $request
     *
     * @return PushExtraTradeDetailResponse
     */
    public function pushExtraTradeDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushExtraTradeDetailWithOptions($request, $runtime);
    }

    /**
     * @param PushFaultEventRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PushFaultEventResponse
     */
    public function pushFaultEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushFaultEventResponse::fromMap($this->doRPCRequest('PushFaultEvent', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PushFaultEventRequest $request
     *
     * @return PushFaultEventResponse
     */
    public function pushFaultEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushFaultEventWithOptions($request, $runtime);
    }

    /**
     * @param PushTradeDetailRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PushTradeDetailResponse
     */
    public function pushTradeDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PushTradeDetailResponse::fromMap($this->doRPCRequest('PushTradeDetail', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PushTradeDetailRequest $request
     *
     * @return PushTradeDetailResponse
     */
    public function pushTradeDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushTradeDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryAppPromotionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryAppPromotionResponse
     */
    public function queryAppPromotionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAppPromotionResponse::fromMap($this->doRPCRequest('QueryAppPromotion', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAppPromotionRequest $request
     *
     * @return QueryAppPromotionResponse
     */
    public function queryAppPromotion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAppPromotionWithOptions($request, $runtime);
    }

    /**
     * @param QueryAppTasksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryAppTasksResponse
     */
    public function queryAppTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAppTasksResponse::fromMap($this->doRPCRequest('QueryAppTasks', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAppTasksRequest $request
     *
     * @return QueryAppTasksResponse
     */
    public function queryAppTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAppTasksWithOptions($request, $runtime);
    }

    /**
     * @param QueryAvailableBalanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryAvailableBalanceResponse
     */
    public function queryAvailableBalanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAvailableBalanceResponse::fromMap($this->doRPCRequest('QueryAvailableBalance', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAvailableBalanceRequest $request
     *
     * @return QueryAvailableBalanceResponse
     */
    public function queryAvailableBalance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAvailableBalanceWithOptions($request, $runtime);
    }

    /**
     * @param QueryChannelHistoryDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryChannelHistoryDataResponse
     */
    public function queryChannelHistoryDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryChannelHistoryDataResponse::fromMap($this->doRPCRequest('QueryChannelHistoryData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryChannelHistoryDataRequest $request
     *
     * @return QueryChannelHistoryDataResponse
     */
    public function queryChannelHistoryData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryChannelHistoryDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryContentInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryContentInfoResponse
     */
    public function queryContentInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryContentInfoResponse::fromMap($this->doRPCRequest('QueryContentInfo', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryContentInfoRequest $request
     *
     * @return QueryContentInfoResponse
     */
    public function queryContentInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryContentInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryContentListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryContentListResponse
     */
    public function queryContentListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryContentListResponse::fromMap($this->doRPCRequest('QueryContentList', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryContentListRequest $request
     *
     * @return QueryContentListResponse
     */
    public function queryContentList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryContentListWithOptions($request, $runtime);
    }

    /**
     * @param QueryFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryFlowResponse
     */
    public function queryFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFlowResponse::fromMap($this->doRPCRequest('QueryFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFlowRequest $request
     *
     * @return QueryFlowResponse
     */
    public function queryFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFlowWithOptions($request, $runtime);
    }

    /**
     * @param QueryIncomeDataRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return QueryIncomeDataResponse
     */
    public function queryIncomeDataWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryIncomeDataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->mediaName)) {
            $request->mediaNameShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->mediaName, 'MediaName', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryIncomeDataResponse::fromMap($this->doRPCRequest('QueryIncomeData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryIncomeDataRequest $request
     *
     * @return QueryIncomeDataResponse
     */
    public function queryIncomeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIncomeDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryIncomeTrendRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return QueryIncomeTrendResponse
     */
    public function queryIncomeTrendWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryIncomeTrendShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->mediaName)) {
            $request->mediaNameShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->mediaName, 'MediaName', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryIncomeTrendResponse::fromMap($this->doRPCRequest('QueryIncomeTrend', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryIncomeTrendRequest $request
     *
     * @return QueryIncomeTrendResponse
     */
    public function queryIncomeTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIncomeTrendWithOptions($request, $runtime);
    }

    /**
     * @param QueryIndustryLabelBagRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryIndustryLabelBagResponse
     */
    public function queryIndustryLabelBagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryIndustryLabelBagResponse::fromMap($this->doRPCRequest('QueryIndustryLabelBag', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryIndustryLabelBagRequest $request
     *
     * @return QueryIndustryLabelBagResponse
     */
    public function queryIndustryLabelBag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIndustryLabelBagWithOptions($request, $runtime);
    }

    /**
     * @param QueryMediaRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryMediaResponse
     */
    public function queryMediaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMediaResponse::fromMap($this->doRPCRequest('QueryMedia', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMediaRequest $request
     *
     * @return QueryMediaResponse
     */
    public function queryMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaWithOptions($request, $runtime);
    }

    /**
     * @param QueryPromotionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryPromotionResponse
     */
    public function queryPromotionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPromotionResponse::fromMap($this->doRPCRequest('QueryPromotion', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryPromotionRequest $request
     *
     * @return QueryPromotionResponse
     */
    public function queryPromotion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPromotionWithOptions($request, $runtime);
    }

    /**
     * @param QueryRuleRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QueryRuleResponse
     */
    public function queryRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRuleResponse::fromMap($this->doRPCRequest('QueryRule', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryRuleRequest $request
     *
     * @return QueryRuleResponse
     */
    public function queryRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRuleWithOptions($request, $runtime);
    }

    /**
     * @param QuerySlotRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return QuerySlotResponse
     */
    public function querySlotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySlotResponse::fromMap($this->doRPCRequest('QuerySlot', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySlotRequest $request
     *
     * @return QuerySlotResponse
     */
    public function querySlot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySlotWithOptions($request, $runtime);
    }

    /**
     * @param QuerySlotTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QuerySlotTemplateResponse
     */
    public function querySlotTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySlotTemplateResponse::fromMap($this->doRPCRequest('QuerySlotTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySlotTemplateRequest $request
     *
     * @return QuerySlotTemplateResponse
     */
    public function querySlotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySlotTemplateWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskBizTypeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryTaskBizTypeResponse
     */
    public function queryTaskBizTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTaskBizTypeResponse::fromMap($this->doRPCRequest('QueryTaskBizType', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTaskBizTypeRequest $request
     *
     * @return QueryTaskBizTypeResponse
     */
    public function queryTaskBizType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskBizTypeWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskRuleLimitRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryTaskRuleLimitResponse
     */
    public function queryTaskRuleLimitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTaskRuleLimitResponse::fromMap($this->doRPCRequest('QueryTaskRuleLimit', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTaskRuleLimitRequest $request
     *
     * @return QueryTaskRuleLimitResponse
     */
    public function queryTaskRuleLimit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskRuleLimitWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskRulesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryTaskRulesResponse
     */
    public function queryTaskRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTaskRulesResponse::fromMap($this->doRPCRequest('QueryTaskRules', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTaskRulesRequest $request
     *
     * @return QueryTaskRulesResponse
     */
    public function queryTaskRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskRulesWithOptions($request, $runtime);
    }

    /**
     * @param QueryTenantBizConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTenantBizConfigResponse
     */
    public function queryTenantBizConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTenantBizConfigResponse::fromMap($this->doRPCRequest('QueryTenantBizConfig', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTenantBizConfigRequest $request
     *
     * @return QueryTenantBizConfigResponse
     */
    public function queryTenantBizConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTenantBizConfigWithOptions($request, $runtime);
    }

    /**
     * @param QueryTenantInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTenantInfoResponse
     */
    public function queryTenantInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTenantInfoResponse::fromMap($this->doRPCRequest('QueryTenantInfo', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTenantInfoRequest $request
     *
     * @return QueryTenantInfoResponse
     */
    public function queryTenantInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTenantInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryTenantUserRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTenantUserResponse
     */
    public function queryTenantUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTenantUserResponse::fromMap($this->doRPCRequest('QueryTenantUser', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTenantUserRequest $request
     *
     * @return QueryTenantUserResponse
     */
    public function queryTenantUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTenantUserWithOptions($request, $runtime);
    }

    /**
     * @param QueryTenantUserByUserIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryTenantUserByUserIdResponse
     */
    public function queryTenantUserByUserIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTenantUserByUserIdResponse::fromMap($this->doRPCRequest('QueryTenantUserByUserId', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTenantUserByUserIdRequest $request
     *
     * @return QueryTenantUserByUserIdResponse
     */
    public function queryTenantUserByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTenantUserByUserIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryUnionChannelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryUnionChannelResponse
     */
    public function queryUnionChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUnionChannelResponse::fromMap($this->doRPCRequest('QueryUnionChannel', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryUnionChannelRequest $request
     *
     * @return QueryUnionChannelResponse
     */
    public function queryUnionChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUnionChannelWithOptions($request, $runtime);
    }

    /**
     * @param QueryUnionContentInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryUnionContentInfoResponse
     */
    public function queryUnionContentInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUnionContentInfoResponse::fromMap($this->doRPCRequest('QueryUnionContentInfo', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryUnionContentInfoRequest $request
     *
     * @return QueryUnionContentInfoResponse
     */
    public function queryUnionContentInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUnionContentInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryUnionPromotionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryUnionPromotionResponse
     */
    public function queryUnionPromotionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUnionPromotionResponse::fromMap($this->doRPCRequest('QueryUnionPromotion', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryUnionPromotionRequest $request
     *
     * @return QueryUnionPromotionResponse
     */
    public function queryUnionPromotion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUnionPromotionWithOptions($request, $runtime);
    }

    /**
     * @param QueryUnionSumChannelDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryUnionSumChannelDataResponse
     */
    public function queryUnionSumChannelDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUnionSumChannelDataResponse::fromMap($this->doRPCRequest('QueryUnionSumChannelData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryUnionSumChannelDataRequest $request
     *
     * @return QueryUnionSumChannelDataResponse
     */
    public function queryUnionSumChannelData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUnionSumChannelDataWithOptions($request, $runtime);
    }

    /**
     * @param QueryUnionTaskInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryUnionTaskInfoResponse
     */
    public function queryUnionTaskInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUnionTaskInfoResponse::fromMap($this->doRPCRequest('QueryUnionTaskInfo', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryUnionTaskInfoRequest $request
     *
     * @return QueryUnionTaskInfoResponse
     */
    public function queryUnionTaskInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUnionTaskInfoWithOptions($request, $runtime);
    }

    /**
     * @param QueryUnionTaskListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryUnionTaskListResponse
     */
    public function queryUnionTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUnionTaskListResponse::fromMap($this->doRPCRequest('QueryUnionTaskList', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryUnionTaskListRequest $request
     *
     * @return QueryUnionTaskListResponse
     */
    public function queryUnionTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUnionTaskListWithOptions($request, $runtime);
    }

    /**
     * @param QueryUserRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return QueryUserResponse
     */
    public function queryUserWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sspUser)) {
            $request->sspUserShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sspUser, 'SspUser', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryUserResponse::fromMap($this->doRPCRequest('QueryUser', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryUserRequest $request
     *
     * @return QueryUserResponse
     */
    public function queryUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserWithOptions($request, $runtime);
    }

    /**
     * @param ReduceAmountRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ReduceAmountResponse
     */
    public function reduceAmountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReduceAmountResponse::fromMap($this->doRPCRequest('ReduceAmount', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReduceAmountRequest $request
     *
     * @return ReduceAmountResponse
     */
    public function reduceAmount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reduceAmountWithOptions($request, $runtime);
    }

    /**
     * @param RegistDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RegistDeviceResponse
     */
    public function registDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegistDeviceResponse::fromMap($this->doRPCRequest('RegistDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegistDeviceRequest $request
     *
     * @return RegistDeviceResponse
     */
    public function registDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registDeviceWithOptions($request, $runtime);
    }

    /**
     * @param SaveCpmTradeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SaveCpmTradeResponse
     */
    public function saveCpmTradeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveCpmTradeResponse::fromMap($this->doRPCRequest('SaveCpmTrade', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveCpmTradeRequest $request
     *
     * @return SaveCpmTradeResponse
     */
    public function saveCpmTrade($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveCpmTradeWithOptions($request, $runtime);
    }

    /**
     * @param ScanCodeNotificationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ScanCodeNotificationResponse
     */
    public function scanCodeNotificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ScanCodeNotificationResponse::fromMap($this->doRPCRequest('ScanCodeNotification', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ScanCodeNotificationRequest $request
     *
     * @return ScanCodeNotificationResponse
     */
    public function scanCodeNotification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanCodeNotificationWithOptions($request, $runtime);
    }

    /**
     * @param SendTaokeInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SendTaokeInfoResponse
     */
    public function sendTaokeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendTaokeInfoResponse::fromMap($this->doRPCRequest('SendTaokeInfo', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendTaokeInfoRequest $request
     *
     * @return SendTaokeInfoResponse
     */
    public function sendTaokeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendTaokeInfoWithOptions($request, $runtime);
    }

    /**
     * @param SyncUnionOrderRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SyncUnionOrderResponse
     */
    public function syncUnionOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SyncUnionOrderResponse::fromMap($this->doRPCRequest('SyncUnionOrder', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SyncUnionOrderRequest $request
     *
     * @return SyncUnionOrderResponse
     */
    public function syncUnionOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncUnionOrderWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFlowRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateFlowResponse
     */
    public function updateFlowWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateFlowShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->flow)) {
            $request->flowShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->flow, 'Flow', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFlowResponse::fromMap($this->doRPCRequest('UpdateFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFlowRequest $request
     *
     * @return UpdateFlowResponse
     */
    public function updateFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFlowWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateUserResponse
     */
    public function updateUserWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->sspUser)) {
            $request->sspUserShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sspUser, 'SspUser', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateUserResponse::fromMap($this->doRPCRequest('UpdateUser', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateUserRequest $request
     *
     * @return UpdateUserResponse
     */
    public function updateUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserWithOptions($request, $runtime);
    }
}
