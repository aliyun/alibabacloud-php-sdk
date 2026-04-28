<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\AddVirtualNumberRelationRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\AddVirtualNumberRelationResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BatchRobotSmartCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BatchRobotSmartCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelOrderRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelOrderRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ChangeMediaTypeRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ChangeMediaTypeResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentLoginRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentLoginResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentLogoutRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentLogoutResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentSetUserDataRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentSetUserDataResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentUnlinkRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentUnlinkResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchCreateAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchCreateAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchGetAgentStatusRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchGetAgentStatusResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchUpdateAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchUpdateAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteAgentTelRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteAgentTelResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAgentStatusRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAgentStatusResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetObCdrRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetObCdrResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetRecordUrlRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetRecordUrlResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudImportTaskTelRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudImportTaskTelResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudImportTaskTelShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudInterruptIvrRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudInterruptIvrResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListAgentTelRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListAgentTelResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListFreeAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListFreeAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListOnlineAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListOnlineAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudOutboundObClidReportRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudOutboundObClidReportResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudOutboundPreviewObReportRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudOutboundPreviewObReportResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudPreviewoutcallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudPreviewoutcallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryAgentCnoAndNameRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryAgentCnoAndNameResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryAgentGroupRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryAgentGroupResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryAgentSkillRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryAgentSkillResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryIbCdrRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryIbCdrResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryObCdrRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryObCdrResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryPredictiveCallCdrRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryPredictiveCallCdrResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryWebcallCdrRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryWebcallCdrResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudStartTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudStartTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudUpdateAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudUpdateAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudUpdateTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudUpdateTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudWebcallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudWebcallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateCallTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateCallTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DegradeVideoFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DegradeVideoFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DeleteRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DeleteRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ExecuteCallTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ExecuteCallTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetCallMediaTypeRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetCallMediaTypeResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetCallProgressRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetCallProgressResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetHotlineQualificationByOrderRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetHotlineQualificationByOrderResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetTemporaryFileUrlRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetTemporaryFileUrlResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetTokenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetTokenResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetVideoFieldUrlRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetVideoFieldUrlResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListCallTaskDetailRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListCallTaskDetailResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListCallTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListCallTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListHotlineTransferRegisterFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListHotlineTransferRegisterFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListServiceInstanceForPageRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListServiceInstanceForPageResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListServiceInstanceForPageShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\PauseVideoFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\PauseVideoFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\PlayVideoFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\PlayVideoFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallDetailByCallIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallDetailByCallIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallDetailByTaskIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallDetailByTaskIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallInPoolTransferConfigRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallInPoolTransferConfigResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallInTransferRecordRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryCallInTransferRecordResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotInfoListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotInfoListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskCallDetailRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskCallDetailResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskCallListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskCallListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskDetailRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskDetailResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotTaskListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotv2AllListRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRobotv2AllListResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVideoPlayProgressRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVideoPlayProgressResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVirtualNumberRelationRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVirtualNumberRelationResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVmsRealNumberCallConnectionRateInfoRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVmsRealNumberCallConnectionRateInfoResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVmsVirtualNumberRelationByPageRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVmsVirtualNumberRelationByPageResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVoiceFileAuditInfoRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVoiceFileAuditInfoResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\RecoverCallInConfigRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\RecoverCallInConfigResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ResumeVideoFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ResumeVideoFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SeekVideoFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SeekVideoFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SendVerificationRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SendVerificationResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SetTransferCalleePoolConfigRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SetTransferCalleePoolConfigResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByTtsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByTtsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByVideoRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByVideoResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByVoiceRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByVoiceResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SkipVideoFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SkipVideoFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SmartCallOperateRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SmartCallOperateResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SmartCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SmartCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StopCallInConfigRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StopCallInConfigResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StopRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StopRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SubmitHotlineTransferRegisterRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SubmitHotlineTransferRegisterResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UpgradeVideoFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UpgradeVideoFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UploadRobotTaskCalledFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UploadRobotTaskCalledFileResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Dyvmsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dyvmsapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Binds multiple real numbers to a service instance at a time.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 200 times per second per account.
     *
     * @param request - AddVirtualNumberRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddVirtualNumberRelationResponse
     *
     * @param AddVirtualNumberRelationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddVirtualNumberRelationResponse
     */
    public function addVirtualNumberRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->corpNameList) {
            @$query['CorpNameList'] = $request->corpNameList;
        }

        if (null !== $request->numberList) {
            @$query['NumberList'] = $request->numberList;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNum) {
            @$query['PhoneNum'] = $request->phoneNum;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeType) {
            @$query['RouteType'] = $request->routeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddVirtualNumberRelation',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddVirtualNumberRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds multiple real numbers to a service instance at a time.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 200 times per second per account.
     *
     * @param request - AddVirtualNumberRelationRequest
     *
     * @returns AddVirtualNumberRelationResponse
     *
     * @param AddVirtualNumberRelationRequest $request
     *
     * @return AddVirtualNumberRelationResponse
     */
    public function addVirtualNumberRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVirtualNumberRelationWithOptions($request, $runtime);
    }

    /**
     * Initiates outbound robocall tasks in a batch. You can set up to 100 numbers in a task.
     *
     * @remarks
     *   In an intelligent speech interaction task, you can use the robot communication scripts preset in the Voice Messaging Service console, or invoke the callback function to return the response mode configured by the business party in each call.
     * *   The BatchRobotSmartCall operation is used to initiate an outbound robocall task by using the robot communication scripts preset in the Voice Messaging Service console.
     * ## Prerequisites
     * *   You have passed the real-name verification for an enterprise user and passed the enterprise qualification review.
     * *   You have purchased numbers in the [Voice Messaging Service console](https://dyvms.console.aliyun.com/dyvms.htm#/number/normal).
     * *   You have added communication scripts on the [Communication script management](https://dyvms.console.aliyun.com/dyvms.htm#/smart-call/saas/robot/list) page, and the communication scripts have been approved.
     * > Before you call this operation, make sure that you are familiar with the [billing](https://www.aliyun.com/price/product#/vms/detail) of Voice Messaging Service (VMS).
     *
     * @param request - BatchRobotSmartCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchRobotSmartCallResponse
     *
     * @param BatchRobotSmartCallRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchRobotSmartCallResponse
     */
    public function batchRobotSmartCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->calledShowNumber) {
            @$query['CalledShowNumber'] = $request->calledShowNumber;
        }

        if (null !== $request->corpName) {
            @$query['CorpName'] = $request->corpName;
        }

        if (null !== $request->dialogId) {
            @$query['DialogId'] = $request->dialogId;
        }

        if (null !== $request->earlyMediaAsr) {
            @$query['EarlyMediaAsr'] = $request->earlyMediaAsr;
        }

        if (null !== $request->isSelfLine) {
            @$query['IsSelfLine'] = $request->isSelfLine;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduleCall) {
            @$query['ScheduleCall'] = $request->scheduleCall;
        }

        if (null !== $request->scheduleTime) {
            @$query['ScheduleTime'] = $request->scheduleTime;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->ttsParam) {
            @$query['TtsParam'] = $request->ttsParam;
        }

        if (null !== $request->ttsParamHead) {
            @$query['TtsParamHead'] = $request->ttsParamHead;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchRobotSmartCall',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchRobotSmartCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates outbound robocall tasks in a batch. You can set up to 100 numbers in a task.
     *
     * @remarks
     *   In an intelligent speech interaction task, you can use the robot communication scripts preset in the Voice Messaging Service console, or invoke the callback function to return the response mode configured by the business party in each call.
     * *   The BatchRobotSmartCall operation is used to initiate an outbound robocall task by using the robot communication scripts preset in the Voice Messaging Service console.
     * ## Prerequisites
     * *   You have passed the real-name verification for an enterprise user and passed the enterprise qualification review.
     * *   You have purchased numbers in the [Voice Messaging Service console](https://dyvms.console.aliyun.com/dyvms.htm#/number/normal).
     * *   You have added communication scripts on the [Communication script management](https://dyvms.console.aliyun.com/dyvms.htm#/smart-call/saas/robot/list) page, and the communication scripts have been approved.
     * > Before you call this operation, make sure that you are familiar with the [billing](https://www.aliyun.com/price/product#/vms/detail) of Voice Messaging Service (VMS).
     *
     * @param request - BatchRobotSmartCallRequest
     *
     * @returns BatchRobotSmartCallResponse
     *
     * @param BatchRobotSmartCallRequest $request
     *
     * @return BatchRobotSmartCallResponse
     */
    public function batchRobotSmartCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchRobotSmartCallWithOptions($request, $runtime);
    }

    /**
     * Cancels the two-way call that is initiated by calling the ClickToDial operation.
     *
     * @param request - CancelCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelCallResponse
     *
     * @param CancelCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelCallResponse
     */
    public function cancelCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CancelCall',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the two-way call that is initiated by calling the ClickToDial operation.
     *
     * @param request - CancelCallRequest
     *
     * @returns CancelCallResponse
     *
     * @param CancelCallRequest $request
     *
     * @return CancelCallResponse
     */
    public function cancelCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCallWithOptions($request, $runtime);
    }

    /**
     * Cancels a robocall task that has not been started.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - CancelOrderRobotTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelOrderRobotTaskResponse
     *
     * @param CancelOrderRobotTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CancelOrderRobotTaskResponse
     */
    public function cancelOrderRobotTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelOrderRobotTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelOrderRobotTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a robocall task that has not been started.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - CancelOrderRobotTaskRequest
     *
     * @returns CancelOrderRobotTaskResponse
     *
     * @param CancelOrderRobotTaskRequest $request
     *
     * @return CancelOrderRobotTaskResponse
     */
    public function cancelOrderRobotTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOrderRobotTaskWithOptions($request, $runtime);
    }

    /**
     * Terminates a robocall task.
     *
     * @remarks
     * Only a task in progress can be terminated by calling the CancelRobotTask operation, and the task cannot be resumed after it is terminated.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - CancelRobotTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelRobotTaskResponse
     *
     * @param CancelRobotTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelRobotTaskResponse
     */
    public function cancelRobotTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelRobotTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelRobotTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates a robocall task.
     *
     * @remarks
     * Only a task in progress can be terminated by calling the CancelRobotTask operation, and the task cannot be resumed after it is terminated.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - CancelRobotTaskRequest
     *
     * @returns CancelRobotTaskResponse
     *
     * @param CancelRobotTaskRequest $request
     *
     * @return CancelRobotTaskResponse
     */
    public function cancelRobotTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRobotTaskWithOptions($request, $runtime);
    }

    /**
     * ChangeMediaType.
     *
     * @param request - ChangeMediaTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeMediaTypeResponse
     *
     * @param ChangeMediaTypeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ChangeMediaTypeResponse
     */
    public function changeMediaTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->calledNum) {
            @$query['CalledNum'] = $request->calledNum;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ChangeMediaType',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeMediaTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ChangeMediaType.
     *
     * @param request - ChangeMediaTypeRequest
     *
     * @returns ChangeMediaTypeResponse
     *
     * @param ChangeMediaTypeRequest $request
     *
     * @return ChangeMediaTypeResponse
     */
    public function changeMediaType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeMediaTypeWithOptions($request, $runtime);
    }

    /**
     * 座席上线
     *
     * @param request - CloudAgentLoginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudAgentLoginResponse
     *
     * @param CloudAgentLoginRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CloudAgentLoginResponse
     */
    public function cloudAgentLoginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindTel) {
            @$query['BindTel'] = $request->bindTel;
        }

        if (null !== $request->bindType) {
            @$query['BindType'] = $request->bindType;
        }

        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->loginStatus) {
            @$query['LoginStatus'] = $request->loginStatus;
        }

        if (null !== $request->pauseDescription) {
            @$query['PauseDescription'] = $request->pauseDescription;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudAgentLogin',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudAgentLoginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席上线
     *
     * @param request - CloudAgentLoginRequest
     *
     * @returns CloudAgentLoginResponse
     *
     * @param CloudAgentLoginRequest $request
     *
     * @return CloudAgentLoginResponse
     */
    public function cloudAgentLogin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudAgentLoginWithOptions($request, $runtime);
    }

    /**
     * 座席下线
     *
     * @param request - CloudAgentLogoutRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudAgentLogoutResponse
     *
     * @param CloudAgentLogoutRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudAgentLogoutResponse
     */
    public function cloudAgentLogoutWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ignoreOffline) {
            @$query['IgnoreOffline'] = $request->ignoreOffline;
        }

        if (null !== $request->isKickout) {
            @$query['IsKickout'] = $request->isKickout;
        }

        if (null !== $request->removeBinding) {
            @$query['RemoveBinding'] = $request->removeBinding;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudAgentLogout',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudAgentLogoutResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席下线
     *
     * @param request - CloudAgentLogoutRequest
     *
     * @returns CloudAgentLogoutResponse
     *
     * @param CloudAgentLogoutRequest $request
     *
     * @return CloudAgentLogoutResponse
     */
    public function cloudAgentLogout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudAgentLogoutWithOptions($request, $runtime);
    }

    /**
     * 座席设置随路数据.
     *
     * @param request - CloudAgentSetUserDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudAgentSetUserDataResponse
     *
     * @param CloudAgentSetUserDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CloudAgentSetUserDataResponse
     */
    public function cloudAgentSetUserDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudAgentSetUserData',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudAgentSetUserDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席设置随路数据.
     *
     * @param request - CloudAgentSetUserDataRequest
     *
     * @returns CloudAgentSetUserDataResponse
     *
     * @param CloudAgentSetUserDataRequest $request
     *
     * @return CloudAgentSetUserDataResponse
     */
    public function cloudAgentSetUserData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudAgentSetUserDataWithOptions($request, $runtime);
    }

    /**
     * 座席挂机.
     *
     * @param request - CloudAgentUnlinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudAgentUnlinkResponse
     *
     * @param CloudAgentUnlinkRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudAgentUnlinkResponse
     */
    public function cloudAgentUnlinkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->requestUniqueId) {
            @$query['RequestUniqueId'] = $request->requestUniqueId;
        }

        if (null !== $request->side) {
            @$query['Side'] = $request->side;
        }

        if (null !== $request->uniqueId) {
            @$query['UniqueId'] = $request->uniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudAgentUnlink',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudAgentUnlinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席挂机.
     *
     * @param request - CloudAgentUnlinkRequest
     *
     * @returns CloudAgentUnlinkResponse
     *
     * @param CloudAgentUnlinkRequest $request
     *
     * @return CloudAgentUnlinkResponse
     */
    public function cloudAgentUnlink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudAgentUnlinkWithOptions($request, $runtime);
    }

    /**
     * 批量新增座席,单次批量创建不能超过100个.
     *
     * @param request - CloudBatchCreateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudBatchCreateAgentResponse
     *
     * @param CloudBatchCreateAgentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CloudBatchCreateAgentResponse
     */
    public function cloudBatchCreateAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->active) {
            @$query['Active'] = $request->active;
        }

        if (null !== $request->areaCode) {
            @$query['AreaCode'] = $request->areaCode;
        }

        if (null !== $request->callPower) {
            @$query['CallPower'] = $request->callPower;
        }

        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->endCno) {
            @$query['EndCno'] = $request->endCno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ibRecord) {
            @$query['IbRecord'] = $request->ibRecord;
        }

        if (null !== $request->isAsr) {
            @$query['IsAsr'] = $request->isAsr;
        }

        if (null !== $request->isOb) {
            @$query['IsOb'] = $request->isOb;
        }

        if (null !== $request->isQualityCheck) {
            @$query['IsQualityCheck'] = $request->isQualityCheck;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->obClid) {
            @$query['ObClid'] = $request->obClid;
        }

        if (null !== $request->obClidProperty) {
            @$query['ObClidProperty'] = $request->obClidProperty;
        }

        if (null !== $request->obClidType) {
            @$query['ObClidType'] = $request->obClidType;
        }

        if (null !== $request->obRecord) {
            @$query['ObRecord'] = $request->obRecord;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->power) {
            @$query['Power'] = $request->power;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->skillIds) {
            @$query['SkillIds'] = $request->skillIds;
        }

        if (null !== $request->skillLevels) {
            @$query['SkillLevels'] = $request->skillLevels;
        }

        if (null !== $request->webrtcUrlType) {
            @$query['WebrtcUrlType'] = $request->webrtcUrlType;
        }

        if (null !== $request->wrapup) {
            @$query['Wrapup'] = $request->wrapup;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudBatchCreateAgent',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudBatchCreateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量新增座席,单次批量创建不能超过100个.
     *
     * @param request - CloudBatchCreateAgentRequest
     *
     * @returns CloudBatchCreateAgentResponse
     *
     * @param CloudBatchCreateAgentRequest $request
     *
     * @return CloudBatchCreateAgentResponse
     */
    public function cloudBatchCreateAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudBatchCreateAgentWithOptions($request, $runtime);
    }

    /**
     * 座席实时状态批量获取.
     *
     * @param request - CloudBatchGetAgentStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudBatchGetAgentStatusResponse
     *
     * @param CloudBatchGetAgentStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CloudBatchGetAgentStatusResponse
     */
    public function cloudBatchGetAgentStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CloudBatchGetAgentStatus',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudBatchGetAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席实时状态批量获取.
     *
     * @param request - CloudBatchGetAgentStatusRequest
     *
     * @returns CloudBatchGetAgentStatusResponse
     *
     * @param CloudBatchGetAgentStatusRequest $request
     *
     * @return CloudBatchGetAgentStatusResponse
     */
    public function cloudBatchGetAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudBatchGetAgentStatusWithOptions($request, $runtime);
    }

    /**
     * 批量更新座席基本信息，不包含座席绑定的技能信息的更新.
     *
     * @param request - CloudBatchUpdateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudBatchUpdateAgentResponse
     *
     * @param CloudBatchUpdateAgentRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CloudBatchUpdateAgentResponse
     */
    public function cloudBatchUpdateAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->active) {
            @$query['Active'] = $request->active;
        }

        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->areaCode) {
            @$query['AreaCode'] = $request->areaCode;
        }

        if (null !== $request->callPower) {
            @$query['CallPower'] = $request->callPower;
        }

        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ibRecord) {
            @$query['IbRecord'] = $request->ibRecord;
        }

        if (null !== $request->isAsr) {
            @$query['IsAsr'] = $request->isAsr;
        }

        if (null !== $request->isOb) {
            @$query['IsOb'] = $request->isOb;
        }

        if (null !== $request->isObRemember) {
            @$query['IsObRemember'] = $request->isObRemember;
        }

        if (null !== $request->isQualityCheck) {
            @$query['IsQualityCheck'] = $request->isQualityCheck;
        }

        if (null !== $request->isRandom) {
            @$query['IsRandom'] = $request->isRandom;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->obClid) {
            @$query['ObClid'] = $request->obClid;
        }

        if (null !== $request->obClidProperty) {
            @$query['ObClidProperty'] = $request->obClidProperty;
        }

        if (null !== $request->obClidType) {
            @$query['ObClidType'] = $request->obClidType;
        }

        if (null !== $request->obRecord) {
            @$query['ObRecord'] = $request->obRecord;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->permitObPreviewTime) {
            @$query['PermitObPreviewTime'] = $request->permitObPreviewTime;
        }

        if (null !== $request->power) {
            @$query['Power'] = $request->power;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->webrtcUrlType) {
            @$query['WebrtcUrlType'] = $request->webrtcUrlType;
        }

        if (null !== $request->wrapup) {
            @$query['Wrapup'] = $request->wrapup;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudBatchUpdateAgent',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudBatchUpdateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量更新座席基本信息，不包含座席绑定的技能信息的更新.
     *
     * @param request - CloudBatchUpdateAgentRequest
     *
     * @returns CloudBatchUpdateAgentResponse
     *
     * @param CloudBatchUpdateAgentRequest $request
     *
     * @return CloudBatchUpdateAgentResponse
     */
    public function cloudBatchUpdateAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudBatchUpdateAgentWithOptions($request, $runtime);
    }

    /**
     * 座席新增.
     *
     * @param request - CloudCreateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudCreateAgentResponse
     *
     * @param CloudCreateAgentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudCreateAgentResponse
     */
    public function cloudCreateAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->active) {
            @$query['Active'] = $request->active;
        }

        if (null !== $request->areaCode) {
            @$query['AreaCode'] = $request->areaCode;
        }

        if (null !== $request->callPower) {
            @$query['CallPower'] = $request->callPower;
        }

        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ibRecord) {
            @$query['IbRecord'] = $request->ibRecord;
        }

        if (null !== $request->isAsr) {
            @$query['IsAsr'] = $request->isAsr;
        }

        if (null !== $request->isOb) {
            @$query['IsOb'] = $request->isOb;
        }

        if (null !== $request->isObRemember) {
            @$query['IsObRemember'] = $request->isObRemember;
        }

        if (null !== $request->isQualityCheck) {
            @$query['IsQualityCheck'] = $request->isQualityCheck;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->obClid) {
            @$query['ObClid'] = $request->obClid;
        }

        if (null !== $request->obClidProperty) {
            @$query['ObClidProperty'] = $request->obClidProperty;
        }

        if (null !== $request->obClidType) {
            @$query['ObClidType'] = $request->obClidType;
        }

        if (null !== $request->obRecord) {
            @$query['ObRecord'] = $request->obRecord;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->permitObPreviewTime) {
            @$query['PermitObPreviewTime'] = $request->permitObPreviewTime;
        }

        if (null !== $request->power) {
            @$query['Power'] = $request->power;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->skillIds) {
            @$query['SkillIds'] = $request->skillIds;
        }

        if (null !== $request->skillLevels) {
            @$query['SkillLevels'] = $request->skillLevels;
        }

        if (null !== $request->webrtcUrlType) {
            @$query['WebrtcUrlType'] = $request->webrtcUrlType;
        }

        if (null !== $request->wrapup) {
            @$query['Wrapup'] = $request->wrapup;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudCreateAgent',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudCreateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席新增.
     *
     * @param request - CloudCreateAgentRequest
     *
     * @returns CloudCreateAgentResponse
     *
     * @param CloudCreateAgentRequest $request
     *
     * @return CloudCreateAgentResponse
     */
    public function cloudCreateAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudCreateAgentWithOptions($request, $runtime);
    }

    /**
     * 新增任务
     *
     * @param request - CloudCreateTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudCreateTaskResponse
     *
     * @param CloudCreateTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CloudCreateTaskResponse
     */
    public function cloudCreateTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentGroup) {
            @$query['AgentGroup'] = $request->agentGroup;
        }

        if (null !== $request->agentTimeout) {
            @$query['AgentTimeout'] = $request->agentTimeout;
        }

        if (null !== $request->answerRate) {
            @$query['AnswerRate'] = $request->answerRate;
        }

        if (null !== $request->autoComplete) {
            @$query['AutoComplete'] = $request->autoComplete;
        }

        if (null !== $request->autoDelete) {
            @$query['AutoDelete'] = $request->autoDelete;
        }

        if (null !== $request->autoStart) {
            @$query['AutoStart'] = $request->autoStart;
        }

        if (null !== $request->autoStartDay) {
            @$query['AutoStartDay'] = $request->autoStartDay;
        }

        if (null !== $request->autoStartTime) {
            @$query['AutoStartTime'] = $request->autoStartTime;
        }

        if (null !== $request->autoStop) {
            @$query['AutoStop'] = $request->autoStop;
        }

        if (null !== $request->autoStopDay) {
            @$query['AutoStopDay'] = $request->autoStopDay;
        }

        if (null !== $request->autoStopTime) {
            @$query['AutoStopTime'] = $request->autoStopTime;
        }

        if (null !== $request->autoTaskType) {
            @$query['AutoTaskType'] = $request->autoTaskType;
        }

        if (null !== $request->autoTriggerTimeStrategy) {
            @$query['AutoTriggerTimeStrategy'] = $request->autoTriggerTimeStrategy;
        }

        if (null !== $request->callGroupType) {
            @$query['CallGroupType'] = $request->callGroupType;
        }

        if (null !== $request->callLimitStrategy) {
            @$query['CallLimitStrategy'] = $request->callLimitStrategy;
        }

        if (null !== $request->callPriorityStrategy) {
            @$query['CallPriorityStrategy'] = $request->callPriorityStrategy;
        }

        if (null !== $request->callRouteStrategy) {
            @$query['CallRouteStrategy'] = $request->callRouteStrategy;
        }

        if (null !== $request->callStrategy) {
            @$query['CallStrategy'] = $request->callStrategy;
        }

        if (null !== $request->callVariables) {
            @$query['CallVariables'] = $request->callVariables;
        }

        if (null !== $request->clidProperty) {
            @$query['ClidProperty'] = $request->clidProperty;
        }

        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->concurrency) {
            @$query['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->customerClidType) {
            @$query['CustomerClidType'] = $request->customerClidType;
        }

        if (null !== $request->customerClidWeight) {
            @$query['CustomerClidWeight'] = $request->customerClidWeight;
        }

        if (null !== $request->customerClidWeightFlag) {
            @$query['CustomerClidWeightFlag'] = $request->customerClidWeightFlag;
        }

        if (null !== $request->customerClids) {
            @$query['CustomerClids'] = $request->customerClids;
        }

        if (null !== $request->customerClidsCategory) {
            @$query['CustomerClidsCategory'] = $request->customerClidsCategory;
        }

        if (null !== $request->customerClidsGroup) {
            @$query['CustomerClidsGroup'] = $request->customerClidsGroup;
        }

        if (null !== $request->customerMoh) {
            @$query['CustomerMoh'] = $request->customerMoh;
        }

        if (null !== $request->customerTimeout) {
            @$query['CustomerTimeout'] = $request->customerTimeout;
        }

        if (null !== $request->customerVoice) {
            @$query['CustomerVoice'] = $request->customerVoice;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->forceEndFlag) {
            @$query['ForceEndFlag'] = $request->forceEndFlag;
        }

        if (null !== $request->isRewarm) {
            @$query['IsRewarm'] = $request->isRewarm;
        }

        if (null !== $request->ivrId) {
            @$query['IvrId'] = $request->ivrId;
        }

        if (null !== $request->ivrName) {
            @$query['IvrName'] = $request->ivrName;
        }

        if (null !== $request->maxWaitTime) {
            @$query['MaxWaitTime'] = $request->maxWaitTime;
        }

        if (null !== $request->minAvailableAgentCount) {
            @$query['MinAvailableAgentCount'] = $request->minAvailableAgentCount;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->predictAdjust) {
            @$query['PredictAdjust'] = $request->predictAdjust;
        }

        if (null !== $request->quotiety) {
            @$query['Quotiety'] = $request->quotiety;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->retryStrategy) {
            @$query['RetryStrategy'] = $request->retryStrategy;
        }

        if (null !== $request->retryStrategyOnlyToday) {
            @$query['RetryStrategyOnlyToday'] = $request->retryStrategyOnlyToday;
        }

        if (null !== $request->retryStrategyTimeType) {
            @$query['RetryStrategyTimeType'] = $request->retryStrategyTimeType;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->timeStrategy) {
            @$query['TimeStrategy'] = $request->timeStrategy;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userFields) {
            @$query['UserFields'] = $request->userFields;
        }

        if (null !== $request->warmUpDuration) {
            @$query['WarmUpDuration'] = $request->warmUpDuration;
        }

        if (null !== $request->wrapup) {
            @$query['Wrapup'] = $request->wrapup;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudCreateTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudCreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 新增任务
     *
     * @param request - CloudCreateTaskRequest
     *
     * @returns CloudCreateTaskResponse
     *
     * @param CloudCreateTaskRequest $request
     *
     * @return CloudCreateTaskResponse
     */
    public function cloudCreateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudCreateTaskWithOptions($request, $runtime);
    }

    /**
     * 座席删除.
     *
     * @param request - CloudDeleteAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudDeleteAgentResponse
     *
     * @param CloudDeleteAgentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudDeleteAgentResponse
     */
    public function cloudDeleteAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CloudDeleteAgent',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudDeleteAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席删除.
     *
     * @param request - CloudDeleteAgentRequest
     *
     * @returns CloudDeleteAgentResponse
     *
     * @param CloudDeleteAgentRequest $request
     *
     * @return CloudDeleteAgentResponse
     */
    public function cloudDeleteAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudDeleteAgentWithOptions($request, $runtime);
    }

    /**
     * 删除座席电话.
     *
     * @param request - CloudDeleteAgentTelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudDeleteAgentTelResponse
     *
     * @param CloudDeleteAgentTelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CloudDeleteAgentTelResponse
     */
    public function cloudDeleteAgentTelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tel) {
            @$query['Tel'] = $request->tel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudDeleteAgentTel',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudDeleteAgentTelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除座席电话.
     *
     * @param request - CloudDeleteAgentTelRequest
     *
     * @returns CloudDeleteAgentTelResponse
     *
     * @param CloudDeleteAgentTelRequest $request
     *
     * @return CloudDeleteAgentTelResponse
     */
    public function cloudDeleteAgentTel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudDeleteAgentTelWithOptions($request, $runtime);
    }

    /**
     * 座席详细信息获取.
     *
     * @param request - CloudGetAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudGetAgentResponse
     *
     * @param CloudGetAgentRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CloudGetAgentResponse
     */
    public function cloudGetAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CloudGetAgent',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudGetAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席详细信息获取.
     *
     * @param request - CloudGetAgentRequest
     *
     * @returns CloudGetAgentResponse
     *
     * @param CloudGetAgentRequest $request
     *
     * @return CloudGetAgentResponse
     */
    public function cloudGetAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudGetAgentWithOptions($request, $runtime);
    }

    /**
     * 座席实时状态获取.
     *
     * @param request - CloudGetAgentStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudGetAgentStatusResponse
     *
     * @param CloudGetAgentStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CloudGetAgentStatusResponse
     */
    public function cloudGetAgentStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CloudGetAgentStatus',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudGetAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席实时状态获取.
     *
     * @param request - CloudGetAgentStatusRequest
     *
     * @returns CloudGetAgentStatusResponse
     *
     * @param CloudGetAgentStatusRequest $request
     *
     * @return CloudGetAgentStatusResponse
     */
    public function cloudGetAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudGetAgentStatusWithOptions($request, $runtime);
    }

    /**
     * 获取座席外呼通话记录详情.
     *
     * @param request - CloudGetObCdrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudGetObCdrResponse
     *
     * @param CloudGetObCdrRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CloudGetObCdrResponse
     */
    public function cloudGetObCdrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->uniqueId) {
            @$query['UniqueId'] = $request->uniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudGetObCdr',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudGetObCdrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取座席外呼通话记录详情.
     *
     * @param request - CloudGetObCdrRequest
     *
     * @returns CloudGetObCdrResponse
     *
     * @param CloudGetObCdrRequest $request
     *
     * @return CloudGetObCdrResponse
     */
    public function cloudGetObCdr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudGetObCdrWithOptions($request, $runtime);
    }

    /**
     * 获取通话录音地址
     *
     * @param request - CloudGetRecordUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudGetRecordUrlResponse
     *
     * @param CloudGetRecordUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CloudGetRecordUrlResponse
     */
    public function cloudGetRecordUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callType) {
            @$query['CallType'] = $request->callType;
        }

        if (null !== $request->download) {
            @$query['Download'] = $request->download;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->recordFile) {
            @$query['RecordFile'] = $request->recordFile;
        }

        if (null !== $request->recordFormat) {
            @$query['RecordFormat'] = $request->recordFormat;
        }

        if (null !== $request->recordSide) {
            @$query['RecordSide'] = $request->recordSide;
        }

        if (null !== $request->recordType) {
            @$query['RecordType'] = $request->recordType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudGetRecordUrl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudGetRecordUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取通话录音地址
     *
     * @param request - CloudGetRecordUrlRequest
     *
     * @returns CloudGetRecordUrlResponse
     *
     * @param CloudGetRecordUrlRequest $request
     *
     * @return CloudGetRecordUrlResponse
     */
    public function cloudGetRecordUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudGetRecordUrlWithOptions($request, $runtime);
    }

    /**
     * 任务号码导入.
     *
     * @param tmpReq - CloudImportTaskTelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudImportTaskTelResponse
     *
     * @param CloudImportTaskTelRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return CloudImportTaskTelResponse
     */
    public function cloudImportTaskTelWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CloudImportTaskTelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskTelList) {
            $request->taskTelListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskTelList, 'TaskTelList', 'json');
        }

        $query = [];
        if (null !== $request->bridgeVoicePath) {
            @$query['BridgeVoicePath'] = $request->bridgeVoicePath;
        }

        if (null !== $request->bridgeVoiceType) {
            @$query['BridgeVoiceType'] = $request->bridgeVoiceType;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->importTelAutoStart) {
            @$query['ImportTelAutoStart'] = $request->importTelAutoStart;
        }

        if (null !== $request->isRepeat) {
            @$query['IsRepeat'] = $request->isRepeat;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskTelListShrink) {
            @$query['TaskTelList'] = $request->taskTelListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudImportTaskTel',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudImportTaskTelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 任务号码导入.
     *
     * @param request - CloudImportTaskTelRequest
     *
     * @returns CloudImportTaskTelResponse
     *
     * @param CloudImportTaskTelRequest $request
     *
     * @return CloudImportTaskTelResponse
     */
    public function cloudImportTaskTel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudImportTaskTelWithOptions($request, $runtime);
    }

    /**
     * IVR等待打断.
     *
     * @param request - CloudInterruptIvrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudInterruptIvrResponse
     *
     * @param CloudInterruptIvrRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CloudInterruptIvrResponse
     */
    public function cloudInterruptIvrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkName) {
            @$query['CheckName'] = $request->checkName;
        }

        if (null !== $request->checkValue) {
            @$query['CheckValue'] = $request->checkValue;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->uniqueId) {
            @$query['UniqueId'] = $request->uniqueId;
        }

        if (null !== $request->userField) {
            @$query['UserField'] = $request->userField;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudInterruptIvr',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudInterruptIvrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * IVR等待打断.
     *
     * @param request - CloudInterruptIvrRequest
     *
     * @returns CloudInterruptIvrResponse
     *
     * @param CloudInterruptIvrRequest $request
     *
     * @return CloudInterruptIvrResponse
     */
    public function cloudInterruptIvr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudInterruptIvrWithOptions($request, $runtime);
    }

    /**
     * 获取座席电话.
     *
     * @param request - CloudListAgentTelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudListAgentTelResponse
     *
     * @param CloudListAgentTelRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CloudListAgentTelResponse
     */
    public function cloudListAgentTelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tel) {
            @$query['Tel'] = $request->tel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudListAgentTel',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudListAgentTelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取座席电话.
     *
     * @param request - CloudListAgentTelRequest
     *
     * @returns CloudListAgentTelResponse
     *
     * @param CloudListAgentTelRequest $request
     *
     * @return CloudListAgentTelResponse
     */
    public function cloudListAgentTel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudListAgentTelWithOptions($request, $runtime);
    }

    /**
     * 获取在线空闲座席.
     *
     * @param request - CloudListFreeAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudListFreeAgentResponse
     *
     * @param CloudListFreeAgentRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CloudListFreeAgentResponse
     */
    public function cloudListFreeAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CloudListFreeAgent',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudListFreeAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取在线空闲座席.
     *
     * @param request - CloudListFreeAgentRequest
     *
     * @returns CloudListFreeAgentResponse
     *
     * @param CloudListFreeAgentRequest $request
     *
     * @return CloudListFreeAgentResponse
     */
    public function cloudListFreeAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudListFreeAgentWithOptions($request, $runtime);
    }

    /**
     * 在线座席信息.
     *
     * @param request - CloudListOnlineAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudListOnlineAgentResponse
     *
     * @param CloudListOnlineAgentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CloudListOnlineAgentResponse
     */
    public function cloudListOnlineAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pauseDescription) {
            @$query['PauseDescription'] = $request->pauseDescription;
        }

        if (null !== $request->pauseType) {
            @$query['PauseType'] = $request->pauseType;
        }

        if (null !== $request->qnos) {
            @$query['Qnos'] = $request->qnos;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->stateCode) {
            @$query['StateCode'] = $request->stateCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudListOnlineAgent',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudListOnlineAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 在线座席信息.
     *
     * @param request - CloudListOnlineAgentRequest
     *
     * @returns CloudListOnlineAgentResponse
     *
     * @param CloudListOnlineAgentRequest $request
     *
     * @return CloudListOnlineAgentResponse
     */
    public function cloudListOnlineAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudListOnlineAgentWithOptions($request, $runtime);
    }

    /**
     * 获取预览外呼主叫号码报表.
     *
     * @param request - CloudOutboundObClidReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudOutboundObClidReportResponse
     *
     * @param CloudOutboundObClidReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CloudOutboundObClidReportResponse
     */
    public function cloudOutboundObClidReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->areaCodes) {
            @$query['AreaCodes'] = $request->areaCodes;
        }

        if (null !== $request->endHour) {
            @$query['EndHour'] = $request->endHour;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->startHour) {
            @$query['StartHour'] = $request->startHour;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->statisticMethod) {
            @$query['StatisticMethod'] = $request->statisticMethod;
        }

        if (null !== $request->timeRangeType) {
            @$query['TimeRangeType'] = $request->timeRangeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudOutboundObClidReport',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudOutboundObClidReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预览外呼主叫号码报表.
     *
     * @param request - CloudOutboundObClidReportRequest
     *
     * @returns CloudOutboundObClidReportResponse
     *
     * @param CloudOutboundObClidReportRequest $request
     *
     * @return CloudOutboundObClidReportResponse
     */
    public function cloudOutboundObClidReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudOutboundObClidReportWithOptions($request, $runtime);
    }

    /**
     * 获取预览外呼报表.
     *
     * @param request - CloudOutboundPreviewObReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudOutboundPreviewObReportResponse
     *
     * @param CloudOutboundPreviewObReportRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CloudOutboundPreviewObReportResponse
     */
    public function cloudOutboundPreviewObReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->endHour) {
            @$query['EndHour'] = $request->endHour;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->startHour) {
            @$query['StartHour'] = $request->startHour;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->statisticMethod) {
            @$query['StatisticMethod'] = $request->statisticMethod;
        }

        if (null !== $request->timeRangeType) {
            @$query['TimeRangeType'] = $request->timeRangeType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudOutboundPreviewObReport',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudOutboundPreviewObReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取预览外呼报表.
     *
     * @param request - CloudOutboundPreviewObReportRequest
     *
     * @returns CloudOutboundPreviewObReportResponse
     *
     * @param CloudOutboundPreviewObReportRequest $request
     *
     * @return CloudOutboundPreviewObReportResponse
     */
    public function cloudOutboundPreviewObReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudOutboundPreviewObReportWithOptions($request, $runtime);
    }

    /**
     * 座席外呼
     *
     * @param request - CloudPreviewoutcallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudPreviewoutcallResponse
     *
     * @param CloudPreviewoutcallRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CloudPreviewoutcallResponse
     */
    public function cloudPreviewoutcallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backupTels) {
            @$query['BackupTels'] = $request->backupTels;
        }

        if (null !== $request->callVariables) {
            @$query['CallVariables'] = $request->callVariables;
        }

        if (null !== $request->cdrIsAsr) {
            @$query['CdrIsAsr'] = $request->cdrIsAsr;
        }

        if (null !== $request->clidList) {
            @$query['ClidList'] = $request->clidList;
        }

        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->crnId) {
            @$query['CrnId'] = $request->crnId;
        }

        if (null !== $request->dialTelTimeout) {
            @$query['DialTelTimeout'] = $request->dialTelTimeout;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->isInvestigation) {
            @$query['IsInvestigation'] = $request->isInvestigation;
        }

        if (null !== $request->obClid) {
            @$query['ObClid'] = $request->obClid;
        }

        if (null !== $request->obClidAreaCode) {
            @$query['ObClidAreaCode'] = $request->obClidAreaCode;
        }

        if (null !== $request->obClidGroup) {
            @$query['ObClidGroup'] = $request->obClidGroup;
        }

        if (null !== $request->requestUniqueId) {
            @$query['RequestUniqueId'] = $request->requestUniqueId;
        }

        if (null !== $request->tel) {
            @$query['Tel'] = $request->tel;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudPreviewoutcall',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudPreviewoutcallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席外呼
     *
     * @param request - CloudPreviewoutcallRequest
     *
     * @returns CloudPreviewoutcallResponse
     *
     * @param CloudPreviewoutcallRequest $request
     *
     * @return CloudPreviewoutcallResponse
     */
    public function cloudPreviewoutcall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudPreviewoutcallWithOptions($request, $runtime);
    }

    /**
     * 座席详细信息列表获取.
     *
     * @param request - CloudQueryAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudQueryAgentResponse
     *
     * @param CloudQueryAgentRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CloudQueryAgentResponse
     */
    public function cloudQueryAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->active) {
            @$query['Active'] = $request->active;
        }

        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qno) {
            @$query['Qno'] = $request->qno;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->returnQueue) {
            @$query['ReturnQueue'] = $request->returnQueue;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->webrtcUrlType) {
            @$query['WebrtcUrlType'] = $request->webrtcUrlType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudQueryAgent',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudQueryAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席详细信息列表获取.
     *
     * @param request - CloudQueryAgentRequest
     *
     * @returns CloudQueryAgentResponse
     *
     * @param CloudQueryAgentRequest $request
     *
     * @return CloudQueryAgentResponse
     */
    public function cloudQueryAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudQueryAgentWithOptions($request, $runtime);
    }

    /**
     * 座席列表获取.
     *
     * @param request - CloudQueryAgentCnoAndNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudQueryAgentCnoAndNameResponse
     *
     * @param CloudQueryAgentCnoAndNameRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CloudQueryAgentCnoAndNameResponse
     */
    public function cloudQueryAgentCnoAndNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CloudQueryAgentCnoAndName',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudQueryAgentCnoAndNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席列表获取.
     *
     * @param request - CloudQueryAgentCnoAndNameRequest
     *
     * @returns CloudQueryAgentCnoAndNameResponse
     *
     * @param CloudQueryAgentCnoAndNameRequest $request
     *
     * @return CloudQueryAgentCnoAndNameResponse
     */
    public function cloudQueryAgentCnoAndName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudQueryAgentCnoAndNameWithOptions($request, $runtime);
    }

    /**
     * 获取座席外呼组.
     *
     * @param request - CloudQueryAgentGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudQueryAgentGroupResponse
     *
     * @param CloudQueryAgentGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CloudQueryAgentGroupResponse
     */
    public function cloudQueryAgentGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CloudQueryAgentGroup',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudQueryAgentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取座席外呼组.
     *
     * @param request - CloudQueryAgentGroupRequest
     *
     * @returns CloudQueryAgentGroupResponse
     *
     * @param CloudQueryAgentGroupRequest $request
     *
     * @return CloudQueryAgentGroupResponse
     */
    public function cloudQueryAgentGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudQueryAgentGroupWithOptions($request, $runtime);
    }

    /**
     * 获取座席技能.
     *
     * @param request - CloudQueryAgentSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudQueryAgentSkillResponse
     *
     * @param CloudQueryAgentSkillRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CloudQueryAgentSkillResponse
     */
    public function cloudQueryAgentSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'CloudQueryAgentSkill',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudQueryAgentSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取座席技能.
     *
     * @param request - CloudQueryAgentSkillRequest
     *
     * @returns CloudQueryAgentSkillResponse
     *
     * @param CloudQueryAgentSkillRequest $request
     *
     * @return CloudQueryAgentSkillResponse
     */
    public function cloudQueryAgentSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudQueryAgentSkillWithOptions($request, $runtime);
    }

    /**
     * 来电通话记录.
     *
     * @param request - CloudQueryIbCdrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudQueryIbCdrResponse
     *
     * @param CloudQueryIbCdrRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CloudQueryIbCdrResponse
     */
    public function cloudQueryIbCdrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calleeNumber) {
            @$query['CalleeNumber'] = $request->calleeNumber;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->customerNumber) {
            @$query['CustomerNumber'] = $request->customerNumber;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->hotline) {
            @$query['Hotline'] = $request->hotline;
        }

        if (null !== $request->joinQueueCode) {
            @$query['JoinQueueCode'] = $request->joinQueueCode;
        }

        if (null !== $request->leaveQueueCode) {
            @$query['LeaveQueueCode'] = $request->leaveQueueCode;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->qno) {
            @$query['Qno'] = $request->qno;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->timeRangeType) {
            @$query['TimeRangeType'] = $request->timeRangeType;
        }

        if (null !== $request->uniqueId) {
            @$query['UniqueId'] = $request->uniqueId;
        }

        if (null !== $request->userFieldValue) {
            @$query['UserFieldValue'] = $request->userFieldValue;
        }

        if (null !== $request->userFieldkey) {
            @$query['UserFieldkey'] = $request->userFieldkey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudQueryIbCdr',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudQueryIbCdrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 来电通话记录.
     *
     * @param request - CloudQueryIbCdrRequest
     *
     * @returns CloudQueryIbCdrResponse
     *
     * @param CloudQueryIbCdrRequest $request
     *
     * @return CloudQueryIbCdrResponse
     */
    public function cloudQueryIbCdr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudQueryIbCdrWithOptions($request, $runtime);
    }

    /**
     * 获取座席外呼通话记录.
     *
     * @param request - CloudQueryObCdrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudQueryObCdrResponse
     *
     * @param CloudQueryObCdrRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CloudQueryObCdrResponse
     */
    public function cloudQueryObCdrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentName) {
            @$query['AgentName'] = $request->agentName;
        }

        if (null !== $request->agentNumber) {
            @$query['AgentNumber'] = $request->agentNumber;
        }

        if (null !== $request->callType) {
            @$query['CallType'] = $request->callType;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->clid) {
            @$query['Clid'] = $request->clid;
        }

        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->customerNumber) {
            @$query['CustomerNumber'] = $request->customerNumber;
        }

        if (null !== $request->downGrade) {
            @$query['DownGrade'] = $request->downGrade;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->gno) {
            @$query['Gno'] = $request->gno;
        }

        if (null !== $request->isRealAnswer) {
            @$query['IsRealAnswer'] = $request->isRealAnswer;
        }

        if (null !== $request->leftDisplayNumber) {
            @$query['LeftDisplayNumber'] = $request->leftDisplayNumber;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->requestUniqueId) {
            @$query['RequestUniqueId'] = $request->requestUniqueId;
        }

        if (null !== $request->returnCount) {
            @$query['ReturnCount'] = $request->returnCount;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->timeRangeType) {
            @$query['TimeRangeType'] = $request->timeRangeType;
        }

        if (null !== $request->uniqueId) {
            @$query['UniqueId'] = $request->uniqueId;
        }

        if (null !== $request->userFieldValue) {
            @$query['UserFieldValue'] = $request->userFieldValue;
        }

        if (null !== $request->userFieldkey) {
            @$query['UserFieldkey'] = $request->userFieldkey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudQueryObCdr',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudQueryObCdrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取座席外呼通话记录.
     *
     * @param request - CloudQueryObCdrRequest
     *
     * @returns CloudQueryObCdrResponse
     *
     * @param CloudQueryObCdrRequest $request
     *
     * @return CloudQueryObCdrResponse
     */
    public function cloudQueryObCdr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudQueryObCdrWithOptions($request, $runtime);
    }

    /**
     * 预测式外呼通话记录.
     *
     * @param request - CloudQueryPredictiveCallCdrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudQueryPredictiveCallCdrResponse
     *
     * @param CloudQueryPredictiveCallCdrRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CloudQueryPredictiveCallCdrResponse
     */
    public function cloudQueryPredictiveCallCdrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentName) {
            @$query['AgentName'] = $request->agentName;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->clid) {
            @$query['Clid'] = $request->clid;
        }

        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->customerNumber) {
            @$query['CustomerNumber'] = $request->customerNumber;
        }

        if (null !== $request->displayNumber) {
            @$query['DisplayNumber'] = $request->displayNumber;
        }

        if (null !== $request->downGrade) {
            @$query['DownGrade'] = $request->downGrade;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->gno) {
            @$query['Gno'] = $request->gno;
        }

        if (null !== $request->isRealAnswer) {
            @$query['IsRealAnswer'] = $request->isRealAnswer;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->requestUniqueId) {
            @$query['RequestUniqueId'] = $request->requestUniqueId;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskFileId) {
            @$query['TaskFileId'] = $request->taskFileId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->timeRangeType) {
            @$query['TimeRangeType'] = $request->timeRangeType;
        }

        if (null !== $request->uniqueId) {
            @$query['UniqueId'] = $request->uniqueId;
        }

        if (null !== $request->userFieldValue) {
            @$query['UserFieldValue'] = $request->userFieldValue;
        }

        if (null !== $request->userFieldkey) {
            @$query['UserFieldkey'] = $request->userFieldkey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudQueryPredictiveCallCdr',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudQueryPredictiveCallCdrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预测式外呼通话记录.
     *
     * @param request - CloudQueryPredictiveCallCdrRequest
     *
     * @returns CloudQueryPredictiveCallCdrResponse
     *
     * @param CloudQueryPredictiveCallCdrRequest $request
     *
     * @return CloudQueryPredictiveCallCdrResponse
     */
    public function cloudQueryPredictiveCallCdr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudQueryPredictiveCallCdrWithOptions($request, $runtime);
    }

    /**
     * webcall通话记录.
     *
     * @param request - CloudQueryWebcallCdrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudQueryWebcallCdrResponse
     *
     * @param CloudQueryWebcallCdrRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CloudQueryWebcallCdrResponse
     */
    public function cloudQueryWebcallCdrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calleeClid) {
            @$query['CalleeClid'] = $request->calleeClid;
        }

        if (null !== $request->calleeDisplayNumber) {
            @$query['CalleeDisplayNumber'] = $request->calleeDisplayNumber;
        }

        if (null !== $request->calleeNumber) {
            @$query['CalleeNumber'] = $request->calleeNumber;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->clid) {
            @$query['Clid'] = $request->clid;
        }

        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->customerNumber) {
            @$query['CustomerNumber'] = $request->customerNumber;
        }

        if (null !== $request->displayNumber) {
            @$query['DisplayNumber'] = $request->displayNumber;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->gno) {
            @$query['Gno'] = $request->gno;
        }

        if (null !== $request->isRealAnswer) {
            @$query['IsRealAnswer'] = $request->isRealAnswer;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->requestUniqueId) {
            @$query['RequestUniqueId'] = $request->requestUniqueId;
        }

        if (null !== $request->returnCount) {
            @$query['ReturnCount'] = $request->returnCount;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->timeRangeType) {
            @$query['TimeRangeType'] = $request->timeRangeType;
        }

        if (null !== $request->uniqueId) {
            @$query['UniqueId'] = $request->uniqueId;
        }

        if (null !== $request->userFieldValue) {
            @$query['UserFieldValue'] = $request->userFieldValue;
        }

        if (null !== $request->userFieldkey) {
            @$query['UserFieldkey'] = $request->userFieldkey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudQueryWebcallCdr',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudQueryWebcallCdrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * webcall通话记录.
     *
     * @param request - CloudQueryWebcallCdrRequest
     *
     * @returns CloudQueryWebcallCdrResponse
     *
     * @param CloudQueryWebcallCdrRequest $request
     *
     * @return CloudQueryWebcallCdrResponse
     */
    public function cloudQueryWebcallCdr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudQueryWebcallCdrWithOptions($request, $runtime);
    }

    /**
     * 任务启动.
     *
     * @param request - CloudStartTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudStartTaskResponse
     *
     * @param CloudStartTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CloudStartTaskResponse
     */
    public function cloudStartTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudStartTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudStartTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 任务启动.
     *
     * @param request - CloudStartTaskRequest
     *
     * @returns CloudStartTaskResponse
     *
     * @param CloudStartTaskRequest $request
     *
     * @return CloudStartTaskResponse
     */
    public function cloudStartTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudStartTaskWithOptions($request, $runtime);
    }

    /**
     * 座席更新.
     *
     * @param request - CloudUpdateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudUpdateAgentResponse
     *
     * @param CloudUpdateAgentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudUpdateAgentResponse
     */
    public function cloudUpdateAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->active) {
            @$query['Active'] = $request->active;
        }

        if (null !== $request->agentType) {
            @$query['AgentType'] = $request->agentType;
        }

        if (null !== $request->areaCode) {
            @$query['AreaCode'] = $request->areaCode;
        }

        if (null !== $request->callPower) {
            @$query['CallPower'] = $request->callPower;
        }

        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ibRecord) {
            @$query['IbRecord'] = $request->ibRecord;
        }

        if (null !== $request->isAsr) {
            @$query['IsAsr'] = $request->isAsr;
        }

        if (null !== $request->isOb) {
            @$query['IsOb'] = $request->isOb;
        }

        if (null !== $request->isObRemember) {
            @$query['IsObRemember'] = $request->isObRemember;
        }

        if (null !== $request->isQualityCheck) {
            @$query['IsQualityCheck'] = $request->isQualityCheck;
        }

        if (null !== $request->isRandom) {
            @$query['IsRandom'] = $request->isRandom;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->obClid) {
            @$query['ObClid'] = $request->obClid;
        }

        if (null !== $request->obClidProperty) {
            @$query['ObClidProperty'] = $request->obClidProperty;
        }

        if (null !== $request->obClidType) {
            @$query['ObClidType'] = $request->obClidType;
        }

        if (null !== $request->obRecord) {
            @$query['ObRecord'] = $request->obRecord;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->permitObPreviewTime) {
            @$query['PermitObPreviewTime'] = $request->permitObPreviewTime;
        }

        if (null !== $request->power) {
            @$query['Power'] = $request->power;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->skillIds) {
            @$query['SkillIds'] = $request->skillIds;
        }

        if (null !== $request->skillLevels) {
            @$query['SkillLevels'] = $request->skillLevels;
        }

        if (null !== $request->webrtcUrlType) {
            @$query['WebrtcUrlType'] = $request->webrtcUrlType;
        }

        if (null !== $request->wrapup) {
            @$query['Wrapup'] = $request->wrapup;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudUpdateAgent',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudUpdateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 座席更新.
     *
     * @param request - CloudUpdateAgentRequest
     *
     * @returns CloudUpdateAgentResponse
     *
     * @param CloudUpdateAgentRequest $request
     *
     * @return CloudUpdateAgentResponse
     */
    public function cloudUpdateAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudUpdateAgentWithOptions($request, $runtime);
    }

    /**
     * 更新任务
     *
     * @param request - CloudUpdateTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudUpdateTaskResponse
     *
     * @param CloudUpdateTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CloudUpdateTaskResponse
     */
    public function cloudUpdateTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentGroup) {
            @$query['AgentGroup'] = $request->agentGroup;
        }

        if (null !== $request->agentTimeout) {
            @$query['AgentTimeout'] = $request->agentTimeout;
        }

        if (null !== $request->answerRate) {
            @$query['AnswerRate'] = $request->answerRate;
        }

        if (null !== $request->autoComplete) {
            @$query['AutoComplete'] = $request->autoComplete;
        }

        if (null !== $request->autoStart) {
            @$query['AutoStart'] = $request->autoStart;
        }

        if (null !== $request->autoStartDay) {
            @$query['AutoStartDay'] = $request->autoStartDay;
        }

        if (null !== $request->autoStartTime) {
            @$query['AutoStartTime'] = $request->autoStartTime;
        }

        if (null !== $request->autoStop) {
            @$query['AutoStop'] = $request->autoStop;
        }

        if (null !== $request->autoStopDay) {
            @$query['AutoStopDay'] = $request->autoStopDay;
        }

        if (null !== $request->autoStopTime) {
            @$query['AutoStopTime'] = $request->autoStopTime;
        }

        if (null !== $request->autoTaskType) {
            @$query['AutoTaskType'] = $request->autoTaskType;
        }

        if (null !== $request->autoTriggerTimeStrategy) {
            @$query['AutoTriggerTimeStrategy'] = $request->autoTriggerTimeStrategy;
        }

        if (null !== $request->callLimitStrategy) {
            @$query['CallLimitStrategy'] = $request->callLimitStrategy;
        }

        if (null !== $request->callPriorityStrategy) {
            @$query['CallPriorityStrategy'] = $request->callPriorityStrategy;
        }

        if (null !== $request->callRouteStrategy) {
            @$query['CallRouteStrategy'] = $request->callRouteStrategy;
        }

        if (null !== $request->callStrategy) {
            @$query['CallStrategy'] = $request->callStrategy;
        }

        if (null !== $request->callVariables) {
            @$query['CallVariables'] = $request->callVariables;
        }

        if (null !== $request->clidProperty) {
            @$query['ClidProperty'] = $request->clidProperty;
        }

        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->concurrency) {
            @$query['Concurrency'] = $request->concurrency;
        }

        if (null !== $request->customerClidType) {
            @$query['CustomerClidType'] = $request->customerClidType;
        }

        if (null !== $request->customerClidWeight) {
            @$query['CustomerClidWeight'] = $request->customerClidWeight;
        }

        if (null !== $request->customerClidWeightFlag) {
            @$query['CustomerClidWeightFlag'] = $request->customerClidWeightFlag;
        }

        if (null !== $request->customerClids) {
            @$query['CustomerClids'] = $request->customerClids;
        }

        if (null !== $request->customerClidsCategory) {
            @$query['CustomerClidsCategory'] = $request->customerClidsCategory;
        }

        if (null !== $request->customerClidsGroup) {
            @$query['CustomerClidsGroup'] = $request->customerClidsGroup;
        }

        if (null !== $request->customerMoh) {
            @$query['CustomerMoh'] = $request->customerMoh;
        }

        if (null !== $request->customerTimeout) {
            @$query['CustomerTimeout'] = $request->customerTimeout;
        }

        if (null !== $request->customerVoice) {
            @$query['CustomerVoice'] = $request->customerVoice;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->forceEndFlag) {
            @$query['ForceEndFlag'] = $request->forceEndFlag;
        }

        if (null !== $request->isRewarm) {
            @$query['IsRewarm'] = $request->isRewarm;
        }

        if (null !== $request->ivrId) {
            @$query['IvrId'] = $request->ivrId;
        }

        if (null !== $request->ivrName) {
            @$query['IvrName'] = $request->ivrName;
        }

        if (null !== $request->maxWaitTime) {
            @$query['MaxWaitTime'] = $request->maxWaitTime;
        }

        if (null !== $request->minAvailableAgentCount) {
            @$query['MinAvailableAgentCount'] = $request->minAvailableAgentCount;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->predictAdjust) {
            @$query['PredictAdjust'] = $request->predictAdjust;
        }

        if (null !== $request->quotiety) {
            @$query['Quotiety'] = $request->quotiety;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->retryStrategy) {
            @$query['RetryStrategy'] = $request->retryStrategy;
        }

        if (null !== $request->retryStrategyOnlyToday) {
            @$query['RetryStrategyOnlyToday'] = $request->retryStrategyOnlyToday;
        }

        if (null !== $request->retryStrategyTimeType) {
            @$query['RetryStrategyTimeType'] = $request->retryStrategyTimeType;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->timeStrategy) {
            @$query['TimeStrategy'] = $request->timeStrategy;
        }

        if (null !== $request->userFields) {
            @$query['UserFields'] = $request->userFields;
        }

        if (null !== $request->warmUpDuration) {
            @$query['WarmUpDuration'] = $request->warmUpDuration;
        }

        if (null !== $request->wrapup) {
            @$query['Wrapup'] = $request->wrapup;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudUpdateTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudUpdateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新任务
     *
     * @param request - CloudUpdateTaskRequest
     *
     * @returns CloudUpdateTaskResponse
     *
     * @param CloudUpdateTaskRequest $request
     *
     * @return CloudUpdateTaskResponse
     */
    public function cloudUpdateTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudUpdateTaskWithOptions($request, $runtime);
    }

    /**
     * webcall.
     *
     * @param request - CloudWebcallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudWebcallResponse
     *
     * @param CloudWebcallRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CloudWebcallResponse
     */
    public function cloudWebcallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amd) {
            @$query['Amd'] = $request->amd;
        }

        if (null !== $request->clid) {
            @$query['Clid'] = $request->clid;
        }

        if (null !== $request->clidAreaCode) {
            @$query['ClidAreaCode'] = $request->clidAreaCode;
        }

        if (null !== $request->clidGroup) {
            @$query['ClidGroup'] = $request->clidGroup;
        }

        if (null !== $request->clidList) {
            @$query['ClidList'] = $request->clidList;
        }

        if (null !== $request->crnId) {
            @$query['CrnId'] = $request->crnId;
        }

        if (null !== $request->delay) {
            @$query['Delay'] = $request->delay;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->expirTime) {
            @$query['ExpirTime'] = $request->expirTime;
        }

        if (null !== $request->ivrId) {
            @$query['IvrId'] = $request->ivrId;
        }

        if (null !== $request->multiTelDelay) {
            @$query['MultiTelDelay'] = $request->multiTelDelay;
        }

        if (null !== $request->multiTelPush) {
            @$query['MultiTelPush'] = $request->multiTelPush;
        }

        if (null !== $request->requestUniqueId) {
            @$query['RequestUniqueId'] = $request->requestUniqueId;
        }

        if (null !== $request->retry) {
            @$query['Retry'] = $request->retry;
        }

        if (null !== $request->retryInterval) {
            @$query['RetryInterval'] = $request->retryInterval;
        }

        if (null !== $request->tel) {
            @$query['Tel'] = $request->tel;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->userField) {
            @$query['UserField'] = $request->userField;
        }

        if (null !== $request->vid) {
            @$query['Vid'] = $request->vid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudWebcall',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudWebcallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * webcall.
     *
     * @param request - CloudWebcallRequest
     *
     * @returns CloudWebcallResponse
     *
     * @param CloudWebcallRequest $request
     *
     * @return CloudWebcallResponse
     */
    public function cloudWebcall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudWebcallWithOptions($request, $runtime);
    }

    /**
     * Uses a service instance to create a text-to-speech (TTS) task, a voice notification task, or a voice verification code task for multiple called numbers.
     *
     * @remarks
     * You can create up to 1,000 voice notifications for each task.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - CreateCallTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCallTaskResponse
     *
     * @param CreateCallTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCallTaskResponse
     */
    public function createCallTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->fireTime) {
            @$query['FireTime'] = $request->fireTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->scheduleType) {
            @$query['ScheduleType'] = $request->scheduleType;
        }

        if (null !== $request->stopTime) {
            @$query['StopTime'] = $request->stopTime;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->templateCode) {
            @$query['TemplateCode'] = $request->templateCode;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCallTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCallTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uses a service instance to create a text-to-speech (TTS) task, a voice notification task, or a voice verification code task for multiple called numbers.
     *
     * @remarks
     * You can create up to 1,000 voice notifications for each task.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - CreateCallTaskRequest
     *
     * @returns CreateCallTaskResponse
     *
     * @param CreateCallTaskRequest $request
     *
     * @return CreateCallTaskResponse
     */
    public function createCallTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCallTaskWithOptions($request, $runtime);
    }

    /**
     * Initiates an outbound robocall task.
     *
     * @remarks
     * You can call this operation to initiate an outbound robocall task by using the robot communication scripts preset in the Voice Messaging Service console. In an intelligent speech interaction task, you can use the robot communication scripts preset in the Voice Messaging Service console, or invoke the callback function to return the response mode configured by the business party in each call.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - CreateRobotTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRobotTaskResponse
     *
     * @param CreateRobotTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateRobotTaskResponse
     */
    public function createRobotTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
        }

        if (null !== $request->corpName) {
            @$query['CorpName'] = $request->corpName;
        }

        if (null !== $request->dialogId) {
            @$query['DialogId'] = $request->dialogId;
        }

        if (null !== $request->isSelfLine) {
            @$query['IsSelfLine'] = $request->isSelfLine;
        }

        if (null !== $request->numberStatusIdent) {
            @$query['NumberStatusIdent'] = $request->numberStatusIdent;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->recallInterval) {
            @$query['RecallInterval'] = $request->recallInterval;
        }

        if (null !== $request->recallStateCodes) {
            @$query['RecallStateCodes'] = $request->recallStateCodes;
        }

        if (null !== $request->recallTimes) {
            @$query['RecallTimes'] = $request->recallTimes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->retryType) {
            @$query['RetryType'] = $request->retryType;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRobotTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRobotTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates an outbound robocall task.
     *
     * @remarks
     * You can call this operation to initiate an outbound robocall task by using the robot communication scripts preset in the Voice Messaging Service console. In an intelligent speech interaction task, you can use the robot communication scripts preset in the Voice Messaging Service console, or invoke the callback function to return the response mode configured by the business party in each call.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - CreateRobotTaskRequest
     *
     * @returns CreateRobotTaskResponse
     *
     * @param CreateRobotTaskRequest $request
     *
     * @return CreateRobotTaskResponse
     */
    public function createRobotTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRobotTaskWithOptions($request, $runtime);
    }

    /**
     * Downgrades from a video call to a voice call.
     *
     * @param request - DegradeVideoFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DegradeVideoFileResponse
     *
     * @param DegradeVideoFileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DegradeVideoFileResponse
     */
    public function degradeVideoFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'DegradeVideoFile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DegradeVideoFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Downgrades from a video call to a voice call.
     *
     * @param request - DegradeVideoFileRequest
     *
     * @returns DegradeVideoFileResponse
     *
     * @param DegradeVideoFileRequest $request
     *
     * @return DegradeVideoFileResponse
     */
    public function degradeVideoFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->degradeVideoFileWithOptions($request, $runtime);
    }

    /**
     * Deletes a robocall task.
     *
     * @remarks
     * You can call this operation to delete only tasks that are not started, that are completed, and that are terminated.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - DeleteRobotTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRobotTaskResponse
     *
     * @param DeleteRobotTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteRobotTaskResponse
     */
    public function deleteRobotTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRobotTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRobotTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a robocall task.
     *
     * @remarks
     * You can call this operation to delete only tasks that are not started, that are completed, and that are terminated.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - DeleteRobotTaskRequest
     *
     * @returns DeleteRobotTaskResponse
     *
     * @param DeleteRobotTaskRequest $request
     *
     * @return DeleteRobotTaskResponse
     */
    public function deleteRobotTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRobotTaskWithOptions($request, $runtime);
    }

    /**
     * Executes a call task.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - ExecuteCallTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteCallTaskResponse
     *
     * @param ExecuteCallTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExecuteCallTaskResponse
     */
    public function executeCallTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fireTime) {
            @$query['FireTime'] = $request->fireTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExecuteCallTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteCallTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Executes a call task.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - ExecuteCallTaskRequest
     *
     * @returns ExecuteCallTaskResponse
     *
     * @param ExecuteCallTaskRequest $request
     *
     * @return ExecuteCallTaskResponse
     */
    public function executeCallTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeCallTaskWithOptions($request, $runtime);
    }

    /**
     * Obtains the call type during a call.
     *
     * @param request - GetCallMediaTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCallMediaTypeResponse
     *
     * @param GetCallMediaTypeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetCallMediaTypeResponse
     */
    public function getCallMediaTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'GetCallMediaType',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCallMediaTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the call type during a call.
     *
     * @param request - GetCallMediaTypeRequest
     *
     * @returns GetCallMediaTypeResponse
     *
     * @param GetCallMediaTypeRequest $request
     *
     * @return GetCallMediaTypeResponse
     */
    public function getCallMediaType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallMediaTypeWithOptions($request, $runtime);
    }

    /**
     * GetCallProgress.
     *
     * @param request - GetCallProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCallProgressResponse
     *
     * @param GetCallProgressRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCallProgressResponse
     */
    public function getCallProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->calledNum) {
            @$query['CalledNum'] = $request->calledNum;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'GetCallProgress',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCallProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetCallProgress.
     *
     * @param request - GetCallProgressRequest
     *
     * @returns GetCallProgressResponse
     *
     * @param GetCallProgressRequest $request
     *
     * @return GetCallProgressResponse
     */
    public function getCallProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallProgressWithOptions($request, $runtime);
    }

    /**
     * Obtains the qualification ID based on the ID of a qualification application ticket.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - GetHotlineQualificationByOrderRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotlineQualificationByOrderResponse
     *
     * @param GetHotlineQualificationByOrderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetHotlineQualificationByOrderResponse
     */
    public function getHotlineQualificationByOrderWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->orderId) {
            @$query['OrderId'] = $request->orderId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'GetHotlineQualificationByOrder',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotlineQualificationByOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the qualification ID based on the ID of a qualification application ticket.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - GetHotlineQualificationByOrderRequest
     *
     * @returns GetHotlineQualificationByOrderResponse
     *
     * @param GetHotlineQualificationByOrderRequest $request
     *
     * @return GetHotlineQualificationByOrderResponse
     */
    public function getHotlineQualificationByOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineQualificationByOrderWithOptions($request, $runtime);
    }

    /**
     * Obtains a temporary URL of a video or audio file. You can view the video or audio file immediately by using this temporary URL.
     *
     * @param request - GetTemporaryFileUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemporaryFileUrlResponse
     *
     * @param GetTemporaryFileUrlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetTemporaryFileUrlResponse
     */
    public function getTemporaryFileUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTemporaryFileUrl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTemporaryFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a temporary URL of a video or audio file. You can view the video or audio file immediately by using this temporary URL.
     *
     * @param request - GetTemporaryFileUrlRequest
     *
     * @returns GetTemporaryFileUrlResponse
     *
     * @param GetTemporaryFileUrlRequest $request
     *
     * @return GetTemporaryFileUrlResponse
     */
    public function getTemporaryFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemporaryFileUrlWithOptions($request, $runtime);
    }

    /**
     * Obtains the token for authentication.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to five times per second per account.
     *
     * @param request - GetTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->tokenType) {
            @$query['TokenType'] = $request->tokenType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetToken',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the token for authentication.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to five times per second per account.
     *
     * @param request - GetTokenRequest
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTokenWithOptions($request, $runtime);
    }

    /**
     * GetVideoFieldUrl.
     *
     * @param request - GetVideoFieldUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetVideoFieldUrlResponse
     *
     * @param GetVideoFieldUrlRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetVideoFieldUrlResponse
     */
    public function getVideoFieldUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->videoFile) {
            @$query['VideoFile'] = $request->videoFile;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetVideoFieldUrl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetVideoFieldUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * GetVideoFieldUrl.
     *
     * @param request - GetVideoFieldUrlRequest
     *
     * @returns GetVideoFieldUrlResponse
     *
     * @param GetVideoFieldUrlRequest $request
     *
     * @return GetVideoFieldUrlResponse
     */
    public function getVideoFieldUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoFieldUrlWithOptions($request, $runtime);
    }

    /**
     * Initiates an interactive voice response (IVR) call to a specified number.
     *
     * @remarks
     *   Your enterprise qualification is approved. For more information, see [Submit enterprise qualifications](https://help.aliyun.com/document_detail/149795.html).
     * *   Voice numbers are purchased. For more information, see [Purchase numbers](https://help.aliyun.com/document_detail/149794.html).
     * *   When the subscriber answers the call, the subscriber hears a voice that instructs the subscriber to press a key as needed. If the [message receipt](https://help.aliyun.com/document_detail/112503.html) feature is enabled, the Voice Messaging Service (VMS) platform returns the information about the key pressed by the subscriber to the business system. The key information includes the order confirmation, questionnaire survey, and satisfaction survey completed by the subscriber.
     * ## QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - IvrCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns IvrCallResponse
     *
     * @param IvrCallRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return IvrCallResponse
     */
    public function ivrCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->byeCode) {
            @$query['ByeCode'] = $request->byeCode;
        }

        if (null !== $request->byeTtsParams) {
            @$query['ByeTtsParams'] = $request->byeTtsParams;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->calledShowNumber) {
            @$query['CalledShowNumber'] = $request->calledShowNumber;
        }

        if (null !== $request->menuKeyMap) {
            @$query['MenuKeyMap'] = $request->menuKeyMap;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startCode) {
            @$query['StartCode'] = $request->startCode;
        }

        if (null !== $request->startTtsParams) {
            @$query['StartTtsParams'] = $request->startTtsParams;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'IvrCall',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return IvrCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates an interactive voice response (IVR) call to a specified number.
     *
     * @remarks
     *   Your enterprise qualification is approved. For more information, see [Submit enterprise qualifications](https://help.aliyun.com/document_detail/149795.html).
     * *   Voice numbers are purchased. For more information, see [Purchase numbers](https://help.aliyun.com/document_detail/149794.html).
     * *   When the subscriber answers the call, the subscriber hears a voice that instructs the subscriber to press a key as needed. If the [message receipt](https://help.aliyun.com/document_detail/112503.html) feature is enabled, the Voice Messaging Service (VMS) platform returns the information about the key pressed by the subscriber to the business system. The key information includes the order confirmation, questionnaire survey, and satisfaction survey completed by the subscriber.
     * ## QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - IvrCallRequest
     *
     * @returns IvrCallResponse
     *
     * @param IvrCallRequest $request
     *
     * @return IvrCallResponse
     */
    public function ivrCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ivrCallWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a voice call task after the task is created, including the task ID, task status, and templates used by the task.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - ListCallTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCallTaskResponse
     *
     * @param ListCallTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCallTaskResponse
     */
    public function listCallTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCallTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCallTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a voice call task after the task is created, including the task ID, task status, and templates used by the task.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - ListCallTaskRequest
     *
     * @returns ListCallTaskResponse
     *
     * @param ListCallTaskRequest $request
     *
     * @return ListCallTaskResponse
     */
    public function listCallTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallTaskWithOptions($request, $runtime);
    }

    /**
     * Queries the details of call tasks based on task IDs after call tasks are complete.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - ListCallTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCallTaskDetailResponse
     *
     * @param ListCallTaskDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListCallTaskDetailResponse
     */
    public function listCallTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNum) {
            @$query['CalledNum'] = $request->calledNum;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCallTaskDetail',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCallTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of call tasks based on task IDs after call tasks are complete.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - ListCallTaskDetailRequest
     *
     * @returns ListCallTaskDetailResponse
     *
     * @param ListCallTaskDetailRequest $request
     *
     * @return ListCallTaskDetailResponse
     */
    public function listCallTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallTaskDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the registration information about a China 400 number.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - ListHotlineTransferRegisterFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHotlineTransferRegisterFileResponse
     *
     * @param ListHotlineTransferRegisterFileRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListHotlineTransferRegisterFileResponse
     */
    public function listHotlineTransferRegisterFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hotlineNumber) {
            @$query['HotlineNumber'] = $request->hotlineNumber;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->qualificationId) {
            @$query['QualificationId'] = $request->qualificationId;
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
            'action' => 'ListHotlineTransferRegisterFile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHotlineTransferRegisterFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the registration information about a China 400 number.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - ListHotlineTransferRegisterFileRequest
     *
     * @returns ListHotlineTransferRegisterFileResponse
     *
     * @param ListHotlineTransferRegisterFileRequest $request
     *
     * @return ListHotlineTransferRegisterFileResponse
     */
    public function listHotlineTransferRegisterFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotlineTransferRegisterFileWithOptions($request, $runtime);
    }

    /**
     * 分页查询服务实例列表.
     *
     * @param tmpReq - ListServiceInstanceForPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListServiceInstanceForPageResponse
     *
     * @param ListServiceInstanceForPageRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return ListServiceInstanceForPageResponse
     */
    public function listServiceInstanceForPageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListServiceInstanceForPageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->pager) {
            $request->pagerShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->pager, 'Pager', 'json');
        }

        $query = [];
        if (null !== $request->code) {
            @$query['Code'] = $request->code;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pagerShrink) {
            @$query['Pager'] = $request->pagerShrink;
        }

        if (null !== $request->relationNumber) {
            @$query['RelationNumber'] = $request->relationNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sceneId) {
            @$query['SceneId'] = $request->sceneId;
        }

        if (null !== $request->usageId) {
            @$query['UsageId'] = $request->usageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListServiceInstanceForPage',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListServiceInstanceForPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询服务实例列表.
     *
     * @param request - ListServiceInstanceForPageRequest
     *
     * @returns ListServiceInstanceForPageResponse
     *
     * @param ListServiceInstanceForPageRequest $request
     *
     * @return ListServiceInstanceForPageResponse
     */
    public function listServiceInstanceForPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceForPageWithOptions($request, $runtime);
    }

    /**
     * Pauses video playback when a video file is played back during a voice call.
     *
     * @param request - PauseVideoFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PauseVideoFileResponse
     *
     * @param PauseVideoFileRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PauseVideoFileResponse
     */
    public function pauseVideoFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'PauseVideoFile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PauseVideoFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pauses video playback when a video file is played back during a voice call.
     *
     * @param request - PauseVideoFileRequest
     *
     * @returns PauseVideoFileResponse
     *
     * @param PauseVideoFileRequest $request
     *
     * @return PauseVideoFileResponse
     */
    public function pauseVideoFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseVideoFileWithOptions($request, $runtime);
    }

    /**
     * Plays back a video file during a voice call.
     *
     * @param request - PlayVideoFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PlayVideoFileResponse
     *
     * @param PlayVideoFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PlayVideoFileResponse
     */
    public function playVideoFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->onlyPhone) {
            @$query['OnlyPhone'] = $request->onlyPhone;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->videoId) {
            @$query['VideoId'] = $request->videoId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PlayVideoFile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PlayVideoFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Plays back a video file during a voice call.
     *
     * @param request - PlayVideoFileRequest
     *
     * @returns PlayVideoFileResponse
     *
     * @param PlayVideoFileRequest $request
     *
     * @return PlayVideoFileResponse
     */
    public function playVideoFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->playVideoFileWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a call.
     *
     * @remarks
     * QueryCallDetailByCallId is a common query operation. You can call this operation to query the details of a voice notification, voice verification code, interactive voice response (IVR), intelligent inbound voice call, intelligent outbound voice call, or intelligent robocall.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryCallDetailByCallIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCallDetailByCallIdResponse
     *
     * @param QueryCallDetailByCallIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryCallDetailByCallIdResponse
     */
    public function queryCallDetailByCallIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prodId) {
            @$query['ProdId'] = $request->prodId;
        }

        if (null !== $request->queryDate) {
            @$query['QueryDate'] = $request->queryDate;
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
            'action' => 'QueryCallDetailByCallId',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCallDetailByCallIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a call.
     *
     * @remarks
     * QueryCallDetailByCallId is a common query operation. You can call this operation to query the details of a voice notification, voice verification code, interactive voice response (IVR), intelligent inbound voice call, intelligent outbound voice call, or intelligent robocall.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryCallDetailByCallIdRequest
     *
     * @returns QueryCallDetailByCallIdResponse
     *
     * @param QueryCallDetailByCallIdRequest $request
     *
     * @return QueryCallDetailByCallIdResponse
     */
    public function queryCallDetailByCallId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallDetailByCallIdWithOptions($request, $runtime);
    }

    /**
     * Queries the call details of an outbound robocall task.
     *
     * @param request - QueryCallDetailByTaskIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCallDetailByTaskIdResponse
     *
     * @param QueryCallDetailByTaskIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryCallDetailByTaskIdResponse
     */
    public function queryCallDetailByTaskIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callee) {
            @$query['Callee'] = $request->callee;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->queryDate) {
            @$query['QueryDate'] = $request->queryDate;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCallDetailByTaskId',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCallDetailByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the call details of an outbound robocall task.
     *
     * @param request - QueryCallDetailByTaskIdRequest
     *
     * @returns QueryCallDetailByTaskIdResponse
     *
     * @param QueryCallDetailByTaskIdRequest $request
     *
     * @return QueryCallDetailByTaskIdResponse
     */
    public function queryCallDetailByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallDetailByTaskIdWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration of the phone number used to transfer a call.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryCallInPoolTransferConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCallInPoolTransferConfigResponse
     *
     * @param QueryCallInPoolTransferConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryCallInPoolTransferConfigResponse
     */
    public function queryCallInPoolTransferConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
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
            'action' => 'QueryCallInPoolTransferConfig',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCallInPoolTransferConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration of the phone number used to transfer a call.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryCallInPoolTransferConfigRequest
     *
     * @returns QueryCallInPoolTransferConfigResponse
     *
     * @param QueryCallInPoolTransferConfigRequest $request
     *
     * @return QueryCallInPoolTransferConfigResponse
     */
    public function queryCallInPoolTransferConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallInPoolTransferConfigWithOptions($request, $runtime);
    }

    /**
     * Queries call transfer records.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryCallInTransferRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCallInTransferRecordResponse
     *
     * @param QueryCallInTransferRecordRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryCallInTransferRecordResponse
     */
    public function queryCallInTransferRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callInCaller) {
            @$query['CallInCaller'] = $request->callInCaller;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->queryDate) {
            @$query['QueryDate'] = $request->queryDate;
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
            'action' => 'QueryCallInTransferRecord',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCallInTransferRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries call transfer records.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryCallInTransferRecordRequest
     *
     * @returns QueryCallInTransferRecordResponse
     *
     * @param QueryCallInTransferRecordRequest $request
     *
     * @return QueryCallInTransferRecordResponse
     */
    public function queryCallInTransferRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallInTransferRecordWithOptions($request, $runtime);
    }

    /**
     * Queries a list of robots to obtain their details.
     *
     * @param request - QueryRobotInfoListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRobotInfoListResponse
     *
     * @param QueryRobotInfoListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryRobotInfoListResponse
     */
    public function queryRobotInfoListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditStatus) {
            @$query['AuditStatus'] = $request->auditStatus;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'QueryRobotInfoList',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRobotInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of robots to obtain their details.
     *
     * @param request - QueryRobotInfoListRequest
     *
     * @returns QueryRobotInfoListResponse
     *
     * @param QueryRobotInfoListRequest $request
     *
     * @return QueryRobotInfoListResponse
     */
    public function queryRobotInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotInfoListWithOptions($request, $runtime);
    }

    /**
     * Queries the call details of a called number.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryRobotTaskCallDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRobotTaskCallDetailResponse
     *
     * @param QueryRobotTaskCallDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryRobotTaskCallDetailResponse
     */
    public function queryRobotTaskCallDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callee) {
            @$query['Callee'] = $request->callee;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->queryDate) {
            @$query['QueryDate'] = $request->queryDate;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRobotTaskCallDetail',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRobotTaskCallDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the call details of a called number.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryRobotTaskCallDetailRequest
     *
     * @returns QueryRobotTaskCallDetailResponse
     *
     * @param QueryRobotTaskCallDetailRequest $request
     *
     * @return QueryRobotTaskCallDetailResponse
     */
    public function queryRobotTaskCallDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotTaskCallDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a robocall task.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryRobotTaskCallListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRobotTaskCallListResponse
     *
     * @param QueryRobotTaskCallListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryRobotTaskCallListResponse
     */
    public function queryRobotTaskCallListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callResult) {
            @$query['CallResult'] = $request->callResult;
        }

        if (null !== $request->called) {
            @$query['Called'] = $request->called;
        }

        if (null !== $request->dialogCountFrom) {
            @$query['DialogCountFrom'] = $request->dialogCountFrom;
        }

        if (null !== $request->dialogCountTo) {
            @$query['DialogCountTo'] = $request->dialogCountTo;
        }

        if (null !== $request->durationFrom) {
            @$query['DurationFrom'] = $request->durationFrom;
        }

        if (null !== $request->durationTo) {
            @$query['DurationTo'] = $request->durationTo;
        }

        if (null !== $request->hangupDirection) {
            @$query['HangupDirection'] = $request->hangupDirection;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRobotTaskCallList',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRobotTaskCallListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a robocall task.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryRobotTaskCallListRequest
     *
     * @returns QueryRobotTaskCallListResponse
     *
     * @param QueryRobotTaskCallListRequest $request
     *
     * @return QueryRobotTaskCallListResponse
     */
    public function queryRobotTaskCallList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotTaskCallListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a robocall task.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryRobotTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRobotTaskDetailResponse
     *
     * @param QueryRobotTaskDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryRobotTaskDetailResponse
     */
    public function queryRobotTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'QueryRobotTaskDetail',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRobotTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a robocall task.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryRobotTaskDetailRequest
     *
     * @returns QueryRobotTaskDetailResponse
     *
     * @param QueryRobotTaskDetailRequest $request
     *
     * @return QueryRobotTaskDetailResponse
     */
    public function queryRobotTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotTaskDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the information about all robocall tasks.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryRobotTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRobotTaskListResponse
     *
     * @param QueryRobotTaskListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryRobotTaskListResponse
     */
    public function queryRobotTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->time) {
            @$query['Time'] = $request->time;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryRobotTaskList',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRobotTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all robocall tasks.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryRobotTaskListRequest
     *
     * @returns QueryRobotTaskListResponse
     *
     * @param QueryRobotTaskListRequest $request
     *
     * @return QueryRobotTaskListResponse
     */
    public function queryRobotTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotTaskListWithOptions($request, $runtime);
    }

    /**
     * Queries a list of robot communication scripts.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryRobotv2AllListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRobotv2AllListResponse
     *
     * @param QueryRobotv2AllListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryRobotv2AllListResponse
     */
    public function queryRobotv2AllListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'QueryRobotv2AllList',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryRobotv2AllListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of robot communication scripts.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - QueryRobotv2AllListRequest
     *
     * @returns QueryRobotv2AllListResponse
     *
     * @param QueryRobotv2AllListRequest $request
     *
     * @return QueryRobotv2AllListResponse
     */
    public function queryRobotv2AllList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotv2AllListWithOptions($request, $runtime);
    }

    /**
     * Queries the video playback progress after you play a video file during a voice call.
     *
     * @param request - QueryVideoPlayProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryVideoPlayProgressResponse
     *
     * @param QueryVideoPlayProgressRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryVideoPlayProgressResponse
     */
    public function queryVideoPlayProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'QueryVideoPlayProgress',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryVideoPlayProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the video playback progress after you play a video file during a voice call.
     *
     * @param request - QueryVideoPlayProgressRequest
     *
     * @returns QueryVideoPlayProgressResponse
     *
     * @param QueryVideoPlayProgressRequest $request
     *
     * @return QueryVideoPlayProgressResponse
     */
    public function queryVideoPlayProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVideoPlayProgressWithOptions($request, $runtime);
    }

    /**
     * Lists real numbers bound to service instances. The returned data includes the binding time, the number activation time, and the number of real numbers bound to a service instance.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 200 times per second per account.
     *
     * @param request - QueryVirtualNumberRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryVirtualNumberRelationResponse
     *
     * @param QueryVirtualNumberRelationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryVirtualNumberRelationResponse
     */
    public function queryVirtualNumberRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->phoneNum) {
            @$query['PhoneNum'] = $request->phoneNum;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->qualificationId) {
            @$query['QualificationId'] = $request->qualificationId;
        }

        if (null !== $request->regionNameCity) {
            @$query['RegionNameCity'] = $request->regionNameCity;
        }

        if (null !== $request->relatedNum) {
            @$query['RelatedNum'] = $request->relatedNum;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->routeType) {
            @$query['RouteType'] = $request->routeType;
        }

        if (null !== $request->specId) {
            @$query['SpecId'] = $request->specId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryVirtualNumberRelation',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryVirtualNumberRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists real numbers bound to service instances. The returned data includes the binding time, the number activation time, and the number of real numbers bound to a service instance.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 200 times per second per account.
     *
     * @param request - QueryVirtualNumberRelationRequest
     *
     * @returns QueryVirtualNumberRelationResponse
     *
     * @param QueryVirtualNumberRelationRequest $request
     *
     * @return QueryVirtualNumberRelationResponse
     */
    public function queryVirtualNumberRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVirtualNumberRelationWithOptions($request, $runtime);
    }

    /**
     * 查询真实号接通率.
     *
     * @param request - QueryVmsRealNumberCallConnectionRateInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryVmsRealNumberCallConnectionRateInfoResponse
     *
     * @param QueryVmsRealNumberCallConnectionRateInfoRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return QueryVmsRealNumberCallConnectionRateInfoResponse
     */
    public function queryVmsRealNumberCallConnectionRateInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->realNumber) {
            @$query['RealNumber'] = $request->realNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->timePeriod) {
            @$query['TimePeriod'] = $request->timePeriod;
        }

        if (null !== $request->virtualNumber) {
            @$query['VirtualNumber'] = $request->virtualNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryVmsRealNumberCallConnectionRateInfo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryVmsRealNumberCallConnectionRateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询真实号接通率.
     *
     * @param request - QueryVmsRealNumberCallConnectionRateInfoRequest
     *
     * @returns QueryVmsRealNumberCallConnectionRateInfoResponse
     *
     * @param QueryVmsRealNumberCallConnectionRateInfoRequest $request
     *
     * @return QueryVmsRealNumberCallConnectionRateInfoResponse
     */
    public function queryVmsRealNumberCallConnectionRateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVmsRealNumberCallConnectionRateInfoWithOptions($request, $runtime);
    }

    /**
     * 查询虚拟号码与真实号码绑定关系列表.
     *
     * @param request - QueryVmsVirtualNumberRelationByPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryVmsVirtualNumberRelationByPageResponse
     *
     * @param QueryVmsVirtualNumberRelationByPageRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryVmsVirtualNumberRelationByPageResponse
     */
    public function queryVmsVirtualNumberRelationByPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->numberCity) {
            @$query['NumberCity'] = $request->numberCity;
        }

        if (null !== $request->numberProvince) {
            @$query['NumberProvince'] = $request->numberProvince;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->realNumber) {
            @$query['RealNumber'] = $request->realNumber;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->virtualNumber) {
            @$query['VirtualNumber'] = $request->virtualNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryVmsVirtualNumberRelationByPage',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryVmsVirtualNumberRelationByPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询虚拟号码与真实号码绑定关系列表.
     *
     * @param request - QueryVmsVirtualNumberRelationByPageRequest
     *
     * @returns QueryVmsVirtualNumberRelationByPageResponse
     *
     * @param QueryVmsVirtualNumberRelationByPageRequest $request
     *
     * @return QueryVmsVirtualNumberRelationByPageResponse
     */
    public function queryVmsVirtualNumberRelationByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVmsVirtualNumberRelationByPageWithOptions($request, $runtime);
    }

    /**
     * Queries the review state of a voice file.
     *
     * @param request - QueryVoiceFileAuditInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryVoiceFileAuditInfoResponse
     *
     * @param QueryVoiceFileAuditInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryVoiceFileAuditInfoResponse
     */
    public function queryVoiceFileAuditInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->voiceCodes) {
            @$query['VoiceCodes'] = $request->voiceCodes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryVoiceFileAuditInfo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryVoiceFileAuditInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the review state of a voice file.
     *
     * @param request - QueryVoiceFileAuditInfoRequest
     *
     * @returns QueryVoiceFileAuditInfoResponse
     *
     * @param QueryVoiceFileAuditInfoRequest $request
     *
     * @return QueryVoiceFileAuditInfoResponse
     */
    public function queryVoiceFileAuditInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVoiceFileAuditInfoWithOptions($request, $runtime);
    }

    /**
     * Resumes the inbound call that is transferred by using a China 400 number.
     *
     * @param request - RecoverCallInConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecoverCallInConfigResponse
     *
     * @param RecoverCallInConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecoverCallInConfigResponse
     */
    public function recoverCallInConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'RecoverCallInConfig',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecoverCallInConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes the inbound call that is transferred by using a China 400 number.
     *
     * @param request - RecoverCallInConfigRequest
     *
     * @returns RecoverCallInConfigResponse
     *
     * @param RecoverCallInConfigRequest $request
     *
     * @return RecoverCallInConfigResponse
     */
    public function recoverCallInConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverCallInConfigWithOptions($request, $runtime);
    }

    /**
     * Resumes video playback after you pause video playback during a voice call.
     *
     * @param request - ResumeVideoFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeVideoFileResponse
     *
     * @param ResumeVideoFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ResumeVideoFileResponse
     */
    public function resumeVideoFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'ResumeVideoFile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeVideoFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resumes video playback after you pause video playback during a voice call.
     *
     * @param request - ResumeVideoFileRequest
     *
     * @returns ResumeVideoFileResponse
     *
     * @param ResumeVideoFileRequest $request
     *
     * @return ResumeVideoFileResponse
     */
    public function resumeVideoFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeVideoFileWithOptions($request, $runtime);
    }

    /**
     * SeekVideoFile.
     *
     * @param request - SeekVideoFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SeekVideoFileResponse
     *
     * @param SeekVideoFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SeekVideoFileResponse
     */
    public function seekVideoFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->seekTimes) {
            @$query['SeekTimes'] = $request->seekTimes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SeekVideoFile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SeekVideoFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * SeekVideoFile.
     *
     * @param request - SeekVideoFileRequest
     *
     * @returns SeekVideoFileResponse
     *
     * @param SeekVideoFileRequest $request
     *
     * @return SeekVideoFileResponse
     */
    public function seekVideoFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->seekVideoFileWithOptions($request, $runtime);
    }

    /**
     * Sends an SMS verification code.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - SendVerificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendVerificationResponse
     *
     * @param SendVerificationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SendVerificationResponse
     */
    public function sendVerificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->target) {
            @$query['Target'] = $request->target;
        }

        if (null !== $request->verifyType) {
            @$query['VerifyType'] = $request->verifyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendVerification',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends an SMS verification code.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - SendVerificationRequest
     *
     * @returns SendVerificationResponse
     *
     * @param SendVerificationRequest $request
     *
     * @return SendVerificationResponse
     */
    public function sendVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerificationWithOptions($request, $runtime);
    }

    /**
     * Sets the phone numbers for transferring a call.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - SetTransferCalleePoolConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetTransferCalleePoolConfigResponse
     *
     * @param SetTransferCalleePoolConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetTransferCalleePoolConfigResponse
     */
    public function setTransferCalleePoolConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledRouteMode) {
            @$query['CalledRouteMode'] = $request->calledRouteMode;
        }

        if (null !== $request->details) {
            @$query['Details'] = $request->details;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumber) {
            @$query['PhoneNumber'] = $request->phoneNumber;
        }

        if (null !== $request->qualificationId) {
            @$query['QualificationId'] = $request->qualificationId;
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
            'action' => 'SetTransferCalleePoolConfig',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetTransferCalleePoolConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the phone numbers for transferring a call.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - SetTransferCalleePoolConfigRequest
     *
     * @returns SetTransferCalleePoolConfigResponse
     *
     * @param SetTransferCalleePoolConfigRequest $request
     *
     * @return SetTransferCalleePoolConfigResponse
     */
    public function setTransferCalleePoolConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTransferCalleePoolConfigWithOptions($request, $runtime);
    }

    /**
     * Sends a voice verification code or a voice notification with variables to a specified phone number.
     *
     * @remarks
     *   Due to business adjustments, the updates of the voice notification and voice verification code services have been stopped in regions outside the Chinese mainland and the services have been discontinued since March 2022. Only qualified customers can continue using the voice notification and voice verification code services.
     * *   For more information about voice plans or voice service billing, see [Pricing of VMS on China site (aliyun.com)](https://help.aliyun.com/document_detail/150083.html).
     * ### QPS limits
     * You can call this operation up to 1,000 times per second per account.
     *
     * @param request - SingleCallByTtsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SingleCallByTtsResponse
     *
     * @param SingleCallByTtsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SingleCallByTtsResponse
     */
    public function singleCallByTtsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->calledShowNumber) {
            @$query['CalledShowNumber'] = $request->calledShowNumber;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        if (null !== $request->ttsCode) {
            @$query['TtsCode'] = $request->ttsCode;
        }

        if (null !== $request->ttsParam) {
            @$query['TtsParam'] = $request->ttsParam;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SingleCallByTts',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SingleCallByTtsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a voice verification code or a voice notification with variables to a specified phone number.
     *
     * @remarks
     *   Due to business adjustments, the updates of the voice notification and voice verification code services have been stopped in regions outside the Chinese mainland and the services have been discontinued since March 2022. Only qualified customers can continue using the voice notification and voice verification code services.
     * *   For more information about voice plans or voice service billing, see [Pricing of VMS on China site (aliyun.com)](https://help.aliyun.com/document_detail/150083.html).
     * ### QPS limits
     * You can call this operation up to 1,000 times per second per account.
     *
     * @param request - SingleCallByTtsRequest
     *
     * @returns SingleCallByTtsResponse
     *
     * @param SingleCallByTtsRequest $request
     *
     * @return SingleCallByTtsResponse
     */
    public function singleCallByTts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->singleCallByTtsWithOptions($request, $runtime);
    }

    /**
     * Sends voice file notifications or video file notifications to a single called number.
     *
     * @param request - SingleCallByVideoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SingleCallByVideoResponse
     *
     * @param SingleCallByVideoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SingleCallByVideoResponse
     */
    public function singleCallByVideoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->calledShowNumber) {
            @$query['CalledShowNumber'] = $request->calledShowNumber;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        if (null !== $request->videoCode) {
            @$query['VideoCode'] = $request->videoCode;
        }

        if (null !== $request->voiceCode) {
            @$query['VoiceCode'] = $request->voiceCode;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SingleCallByVideo',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SingleCallByVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends voice file notifications or video file notifications to a single called number.
     *
     * @param request - SingleCallByVideoRequest
     *
     * @returns SingleCallByVideoResponse
     *
     * @param SingleCallByVideoRequest $request
     *
     * @return SingleCallByVideoResponse
     */
    public function singleCallByVideo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->singleCallByVideoWithOptions($request, $runtime);
    }

    /**
     * Sends a voice notification to a phone number by using a voice notification file.
     *
     * @remarks
     * > Due to business adjustments, the updates of the voice notification and voice verification code services have been stopped in regions outside the Chinese mainland and the services have been discontinued since March 2022. Only qualified customers can continue using the voice notification and voice verification code services.
     * You can call the [SingleCallByTts](https://help.aliyun.com/document_detail/393519.html) operation to send voice notifications with variables.
     * ### QPS limits
     * You can call this operation up to 1,200 times per second per account.
     *
     * @param request - SingleCallByVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SingleCallByVoiceResponse
     *
     * @param SingleCallByVoiceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SingleCallByVoiceResponse
     */
    public function singleCallByVoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->calledShowNumber) {
            @$query['CalledShowNumber'] = $request->calledShowNumber;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        if (null !== $request->voiceCode) {
            @$query['VoiceCode'] = $request->voiceCode;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SingleCallByVoice',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SingleCallByVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sends a voice notification to a phone number by using a voice notification file.
     *
     * @remarks
     * > Due to business adjustments, the updates of the voice notification and voice verification code services have been stopped in regions outside the Chinese mainland and the services have been discontinued since March 2022. Only qualified customers can continue using the voice notification and voice verification code services.
     * You can call the [SingleCallByTts](https://help.aliyun.com/document_detail/393519.html) operation to send voice notifications with variables.
     * ### QPS limits
     * You can call this operation up to 1,200 times per second per account.
     *
     * @param request - SingleCallByVoiceRequest
     *
     * @returns SingleCallByVoiceResponse
     *
     * @param SingleCallByVoiceRequest $request
     *
     * @return SingleCallByVoiceResponse
     */
    public function singleCallByVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->singleCallByVoiceWithOptions($request, $runtime);
    }

    /**
     * Fast forwards or rewinds a video when you play the video.
     *
     * @param request - SkipVideoFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SkipVideoFileResponse
     *
     * @param SkipVideoFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SkipVideoFileResponse
     */
    public function skipVideoFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->skipTimes) {
            @$query['SkipTimes'] = $request->skipTimes;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SkipVideoFile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SkipVideoFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Fast forwards or rewinds a video when you play the video.
     *
     * @param request - SkipVideoFileRequest
     *
     * @returns SkipVideoFileResponse
     *
     * @param SkipVideoFileRequest $request
     *
     * @return SkipVideoFileResponse
     */
    public function skipVideoFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->skipVideoFileWithOptions($request, $runtime);
    }

    /**
     * Initiates an intelligent voice call.
     *
     * @remarks
     *   The SmartCall operation must be used together with the [intelligent outbound HTTP operation](https://help.aliyun.com/document_detail/112703.html). After the call initiated by the Voice Messaging Service (VMS) platform is connected, the VMS platform sends the text converted from speech back to the business side, and the business side then returns the follow-up action to the VMS platform.
     * *   The SmartCall operation does not support the following characters: `@ = : "" $ { } ^ * ￥`.
     * ### QPS limits
     * You can call this operation up to 1,000 times per second per account.
     *
     * @param request - SmartCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SmartCallResponse
     *
     * @param SmartCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SmartCallResponse
     */
    public function smartCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionCodeBreak) {
            @$query['ActionCodeBreak'] = $request->actionCodeBreak;
        }

        if (null !== $request->actionCodeTimeBreak) {
            @$query['ActionCodeTimeBreak'] = $request->actionCodeTimeBreak;
        }

        if (null !== $request->asrBaseId) {
            @$query['AsrBaseId'] = $request->asrBaseId;
        }

        if (null !== $request->asrModelId) {
            @$query['AsrModelId'] = $request->asrModelId;
        }

        if (null !== $request->backgroundFileCode) {
            @$query['BackgroundFileCode'] = $request->backgroundFileCode;
        }

        if (null !== $request->backgroundSpeed) {
            @$query['BackgroundSpeed'] = $request->backgroundSpeed;
        }

        if (null !== $request->backgroundVolume) {
            @$query['BackgroundVolume'] = $request->backgroundVolume;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->calledShowNumber) {
            @$query['CalledShowNumber'] = $request->calledShowNumber;
        }

        if (null !== $request->dynamicId) {
            @$query['DynamicId'] = $request->dynamicId;
        }

        if (null !== $request->earlyMediaAsr) {
            @$query['EarlyMediaAsr'] = $request->earlyMediaAsr;
        }

        if (null !== $request->enableITN) {
            @$query['EnableITN'] = $request->enableITN;
        }

        if (null !== $request->muteTime) {
            @$query['MuteTime'] = $request->muteTime;
        }

        if (null !== $request->noiseThreshold) {
            @$query['NoiseThreshold'] = $request->noiseThreshold;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pauseTime) {
            @$query['PauseTime'] = $request->pauseTime;
        }

        if (null !== $request->recordFlag) {
            @$query['RecordFlag'] = $request->recordFlag;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sessionTimeout) {
            @$query['SessionTimeout'] = $request->sessionTimeout;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        if (null !== $request->streamAsr) {
            @$query['StreamAsr'] = $request->streamAsr;
        }

        if (null !== $request->ttsConf) {
            @$query['TtsConf'] = $request->ttsConf;
        }

        if (null !== $request->ttsSpeed) {
            @$query['TtsSpeed'] = $request->ttsSpeed;
        }

        if (null !== $request->ttsStyle) {
            @$query['TtsStyle'] = $request->ttsStyle;
        }

        if (null !== $request->ttsVolume) {
            @$query['TtsVolume'] = $request->ttsVolume;
        }

        if (null !== $request->voiceCode) {
            @$query['VoiceCode'] = $request->voiceCode;
        }

        if (null !== $request->voiceCodeParam) {
            @$query['VoiceCodeParam'] = $request->voiceCodeParam;
        }

        if (null !== $request->volume) {
            @$query['Volume'] = $request->volume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SmartCall',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SmartCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates an intelligent voice call.
     *
     * @remarks
     *   The SmartCall operation must be used together with the [intelligent outbound HTTP operation](https://help.aliyun.com/document_detail/112703.html). After the call initiated by the Voice Messaging Service (VMS) platform is connected, the VMS platform sends the text converted from speech back to the business side, and the business side then returns the follow-up action to the VMS platform.
     * *   The SmartCall operation does not support the following characters: `@ = : "" $ { } ^ * ￥`.
     * ### QPS limits
     * You can call this operation up to 1,000 times per second per account.
     *
     * @param request - SmartCallRequest
     *
     * @returns SmartCallResponse
     *
     * @param SmartCallRequest $request
     *
     * @return SmartCallResponse
     */
    public function smartCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smartCallWithOptions($request, $runtime);
    }

    /**
     * Initiates an action in an outbound robocall. This operation is applicable only when the robocall is transferred to an agent or an agent is listening in on the conversation between the robot and the user.
     *
     * @remarks
     * You can call this operation to initiate a specified action on the called number of an outbound robocall when the call is transferred to an agent of the call center.
     * > You can only initiate the action of bridging a called number and an agent of the call center.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - SmartCallOperateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SmartCallOperateResponse
     *
     * @param SmartCallOperateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SmartCallOperateResponse
     */
    public function smartCallOperateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->param) {
            @$query['Param'] = $request->param;
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
            'action' => 'SmartCallOperate',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SmartCallOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates an action in an outbound robocall. This operation is applicable only when the robocall is transferred to an agent or an agent is listening in on the conversation between the robot and the user.
     *
     * @remarks
     * You can call this operation to initiate a specified action on the called number of an outbound robocall when the call is transferred to an agent of the call center.
     * > You can only initiate the action of bridging a called number and an agent of the call center.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - SmartCallOperateRequest
     *
     * @returns SmartCallOperateResponse
     *
     * @param SmartCallOperateRequest $request
     *
     * @return SmartCallOperateResponse
     */
    public function smartCallOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smartCallOperateWithOptions($request, $runtime);
    }

    /**
     * Starts a robocall task immediately or at a scheduled time.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - StartRobotTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartRobotTaskResponse
     *
     * @param StartRobotTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartRobotTaskResponse
     */
    public function startRobotTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->scheduleTime) {
            @$query['ScheduleTime'] = $request->scheduleTime;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartRobotTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartRobotTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a robocall task immediately or at a scheduled time.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - StartRobotTaskRequest
     *
     * @returns StartRobotTaskResponse
     *
     * @param StartRobotTaskRequest $request
     *
     * @return StartRobotTaskResponse
     */
    public function startRobotTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRobotTaskWithOptions($request, $runtime);
    }

    /**
     * Stops the inbound call that is transferred from a China 400 number.
     *
     * @param request - StopCallInConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopCallInConfigResponse
     *
     * @param StopCallInConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StopCallInConfigResponse
     */
    public function stopCallInConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->number) {
            @$query['Number'] = $request->number;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'StopCallInConfig',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopCallInConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops the inbound call that is transferred from a China 400 number.
     *
     * @param request - StopCallInConfigRequest
     *
     * @returns StopCallInConfigResponse
     *
     * @param StopCallInConfigRequest $request
     *
     * @return StopCallInConfigResponse
     */
    public function stopCallInConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCallInConfigWithOptions($request, $runtime);
    }

    /**
     * Stops a robocall task that is in progress.
     *
     * @remarks
     * After you stop a robocall task, you can call the [StartRobotTask](~~StartRobotTask~~) operation to start it again.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - StopRobotTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopRobotTaskResponse
     *
     * @param StopRobotTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopRobotTaskResponse
     */
    public function stopRobotTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopRobotTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopRobotTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a robocall task that is in progress.
     *
     * @remarks
     * After you stop a robocall task, you can call the [StartRobotTask](~~StartRobotTask~~) operation to start it again.
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - StopRobotTaskRequest
     *
     * @returns StopRobotTaskResponse
     *
     * @param StopRobotTaskRequest $request
     *
     * @return StopRobotTaskResponse
     */
    public function stopRobotTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRobotTaskWithOptions($request, $runtime);
    }

    /**
     * Submits a 400 number for registration.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - SubmitHotlineTransferRegisterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitHotlineTransferRegisterResponse
     *
     * @param SubmitHotlineTransferRegisterRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SubmitHotlineTransferRegisterResponse
     */
    public function submitHotlineTransferRegisterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agreement) {
            @$query['Agreement'] = $request->agreement;
        }

        if (null !== $request->hotlineNumber) {
            @$query['HotlineNumber'] = $request->hotlineNumber;
        }

        if (null !== $request->operatorIdentityCard) {
            @$query['OperatorIdentityCard'] = $request->operatorIdentityCard;
        }

        if (null !== $request->operatorMail) {
            @$query['OperatorMail'] = $request->operatorMail;
        }

        if (null !== $request->operatorMailVerifyCode) {
            @$query['OperatorMailVerifyCode'] = $request->operatorMailVerifyCode;
        }

        if (null !== $request->operatorMobile) {
            @$query['OperatorMobile'] = $request->operatorMobile;
        }

        if (null !== $request->operatorMobileVerifyCode) {
            @$query['OperatorMobileVerifyCode'] = $request->operatorMobileVerifyCode;
        }

        if (null !== $request->operatorName) {
            @$query['OperatorName'] = $request->operatorName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qualificationId) {
            @$query['QualificationId'] = $request->qualificationId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->transferPhoneNumberInfos) {
            @$query['TransferPhoneNumberInfos'] = $request->transferPhoneNumberInfos;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitHotlineTransferRegister',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitHotlineTransferRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a 400 number for registration.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - SubmitHotlineTransferRegisterRequest
     *
     * @returns SubmitHotlineTransferRegisterResponse
     *
     * @param SubmitHotlineTransferRegisterRequest $request
     *
     * @return SubmitHotlineTransferRegisterResponse
     */
    public function submitHotlineTransferRegister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitHotlineTransferRegisterWithOptions($request, $runtime);
    }

    /**
     * Upgrades from a voice call to a video call.
     *
     * @param request - UpgradeVideoFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeVideoFileResponse
     *
     * @param UpgradeVideoFileRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpgradeVideoFileResponse
     */
    public function upgradeVideoFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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
            'action' => 'UpgradeVideoFile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeVideoFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades from a voice call to a video call.
     *
     * @param request - UpgradeVideoFileRequest
     *
     * @returns UpgradeVideoFileResponse
     *
     * @param UpgradeVideoFileRequest $request
     *
     * @return UpgradeVideoFileResponse
     */
    public function upgradeVideoFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeVideoFileWithOptions($request, $runtime);
    }

    /**
     * Uploads the called numbers of a robocall task.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - UploadRobotTaskCalledFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadRobotTaskCalledFileResponse
     *
     * @param UploadRobotTaskCalledFileRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UploadRobotTaskCalledFileResponse
     */
    public function uploadRobotTaskCalledFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->ttsParam) {
            @$query['TtsParam'] = $request->ttsParam;
        }

        if (null !== $request->ttsParamHead) {
            @$query['TtsParamHead'] = $request->ttsParamHead;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadRobotTaskCalledFile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadRobotTaskCalledFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads the called numbers of a robocall task.
     *
     * @remarks
     * ### QPS limits
     * You can call this operation up to 100 times per second per account.
     *
     * @param request - UploadRobotTaskCalledFileRequest
     *
     * @returns UploadRobotTaskCalledFileResponse
     *
     * @param UploadRobotTaskCalledFileRequest $request
     *
     * @return UploadRobotTaskCalledFileResponse
     */
    public function uploadRobotTaskCalledFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadRobotTaskCalledFileWithOptions($request, $runtime);
    }
}
