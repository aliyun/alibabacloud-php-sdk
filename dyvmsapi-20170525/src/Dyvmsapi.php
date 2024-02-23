<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\AddVirtualNumberRelationRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\AddVirtualNumberRelationResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BatchRobotSmartCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BatchRobotSmartCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelOrderRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelOrderRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateCallTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateCallTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DeleteRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DeleteRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ExecuteCallTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ExecuteCallTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetHotlineQualificationByOrderRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetHotlineQualificationByOrderResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetTokenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetTokenResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListCallTaskDetailRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListCallTaskDetailResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListCallTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListCallTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListHotlineTransferNumberRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListHotlineTransferNumberResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListHotlineTransferRegisterFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListHotlineTransferRegisterFileResponse;
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
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVirtualNumberRelationRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVirtualNumberRelationResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVirtualNumberRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVirtualNumberResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVoiceFileAuditInfoRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVoiceFileAuditInfoResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\RecoverCallInConfigRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\RecoverCallInConfigResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SendVerificationRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SendVerificationResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SetTransferCalleePoolConfigRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SetTransferCalleePoolConfigResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByTtsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByTtsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByVoiceRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SingleCallByVoiceResponse;
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
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UploadRobotTaskCalledFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UploadRobotTaskCalledFileResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 200 times per second per account.
     *   *
     * @param AddVirtualNumberRelationRequest $request AddVirtualNumberRelationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddVirtualNumberRelationResponse AddVirtualNumberRelationResponse
     */
    public function addVirtualNumberRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->corpNameList)) {
            $query['CorpNameList'] = $request->corpNameList;
        }
        if (!Utils::isUnset($request->numberList)) {
            $query['NumberList'] = $request->numberList;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNum)) {
            $query['PhoneNum'] = $request->phoneNum;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeType)) {
            $query['RouteType'] = $request->routeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddVirtualNumberRelation',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddVirtualNumberRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 200 times per second per account.
     *   *
     * @param AddVirtualNumberRelationRequest $request AddVirtualNumberRelationRequest
     *
     * @return AddVirtualNumberRelationResponse AddVirtualNumberRelationResponse
     */
    public function addVirtualNumberRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVirtualNumberRelationWithOptions($request, $runtime);
    }

    /**
     * *   In an intelligent speech interaction task, you can use the robot communication scripts preset in the Voice Messaging Service console, or invoke the callback function to return the response mode configured by the business party in each call.
     *   * *   The BatchRobotSmartCall operation is used to initiate an outbound robocall task by using the robot communication scripts preset in the Voice Messaging Service console.
     *   * ## Prerequisites
     *   * *   You have passed the real-name verification for an enterprise user and passed the enterprise qualification review.
     *   * *   You have purchased numbers in the [Voice Messaging Service console](https://dyvms.console.aliyun.com/dyvms.htm#/number/normal).
     *   * *   You have added communication scripts on the [Communication script management](https://dyvms.console.aliyun.com/dyvms.htm#/smart-call/saas/robot/list) page, and the communication scripts have been approved.
     *   * > Before you call this operation, make sure that you are familiar with the [billing](https://www.aliyun.com/price/product#/vms/detail) of Voice Messaging Service (VMS).
     *   *
     * @param BatchRobotSmartCallRequest $request BatchRobotSmartCallRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchRobotSmartCallResponse BatchRobotSmartCallResponse
     */
    public function batchRobotSmartCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->calledShowNumber)) {
            $query['CalledShowNumber'] = $request->calledShowNumber;
        }
        if (!Utils::isUnset($request->corpName)) {
            $query['CorpName'] = $request->corpName;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        if (!Utils::isUnset($request->earlyMediaAsr)) {
            $query['EarlyMediaAsr'] = $request->earlyMediaAsr;
        }
        if (!Utils::isUnset($request->isSelfLine)) {
            $query['IsSelfLine'] = $request->isSelfLine;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scheduleCall)) {
            $query['ScheduleCall'] = $request->scheduleCall;
        }
        if (!Utils::isUnset($request->scheduleTime)) {
            $query['ScheduleTime'] = $request->scheduleTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->ttsParam)) {
            $query['TtsParam'] = $request->ttsParam;
        }
        if (!Utils::isUnset($request->ttsParamHead)) {
            $query['TtsParamHead'] = $request->ttsParamHead;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchRobotSmartCall',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchRobotSmartCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   In an intelligent speech interaction task, you can use the robot communication scripts preset in the Voice Messaging Service console, or invoke the callback function to return the response mode configured by the business party in each call.
     *   * *   The BatchRobotSmartCall operation is used to initiate an outbound robocall task by using the robot communication scripts preset in the Voice Messaging Service console.
     *   * ## Prerequisites
     *   * *   You have passed the real-name verification for an enterprise user and passed the enterprise qualification review.
     *   * *   You have purchased numbers in the [Voice Messaging Service console](https://dyvms.console.aliyun.com/dyvms.htm#/number/normal).
     *   * *   You have added communication scripts on the [Communication script management](https://dyvms.console.aliyun.com/dyvms.htm#/smart-call/saas/robot/list) page, and the communication scripts have been approved.
     *   * > Before you call this operation, make sure that you are familiar with the [billing](https://www.aliyun.com/price/product#/vms/detail) of Voice Messaging Service (VMS).
     *   *
     * @param BatchRobotSmartCallRequest $request BatchRobotSmartCallRequest
     *
     * @return BatchRobotSmartCallResponse BatchRobotSmartCallResponse
     */
    public function batchRobotSmartCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchRobotSmartCallWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param CancelOrderRobotTaskRequest $request CancelOrderRobotTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelOrderRobotTaskResponse CancelOrderRobotTaskResponse
     */
    public function cancelOrderRobotTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelOrderRobotTask',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOrderRobotTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param CancelOrderRobotTaskRequest $request CancelOrderRobotTaskRequest
     *
     * @return CancelOrderRobotTaskResponse CancelOrderRobotTaskResponse
     */
    public function cancelOrderRobotTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOrderRobotTaskWithOptions($request, $runtime);
    }

    /**
     * Only a task in progress can be terminated by calling the CancelRobotTask operation, and the task cannot be resumed after it is terminated.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param CancelRobotTaskRequest $request CancelRobotTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelRobotTaskResponse CancelRobotTaskResponse
     */
    public function cancelRobotTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelRobotTask',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelRobotTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Only a task in progress can be terminated by calling the CancelRobotTask operation, and the task cannot be resumed after it is terminated.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param CancelRobotTaskRequest $request CancelRobotTaskRequest
     *
     * @return CancelRobotTaskResponse CancelRobotTaskResponse
     */
    public function cancelRobotTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelRobotTaskWithOptions($request, $runtime);
    }

    /**
     * You can create up to 1,000 voice notifications for each task.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param CreateCallTaskRequest $request CreateCallTaskRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCallTaskResponse CreateCallTaskResponse
     */
    public function createCallTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->dataType)) {
            $query['DataType'] = $request->dataType;
        }
        if (!Utils::isUnset($request->fireTime)) {
            $query['FireTime'] = $request->fireTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->scheduleType)) {
            $query['ScheduleType'] = $request->scheduleType;
        }
        if (!Utils::isUnset($request->stopTime)) {
            $query['StopTime'] = $request->stopTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->templateCode)) {
            $query['TemplateCode'] = $request->templateCode;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCallTask',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCallTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can create up to 1,000 voice notifications for each task.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param CreateCallTaskRequest $request CreateCallTaskRequest
     *
     * @return CreateCallTaskResponse CreateCallTaskResponse
     */
    public function createCallTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCallTaskWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to initiate an outbound robocall task by using the robot communication scripts preset in the Voice Messaging Service console. In an intelligent speech interaction task, you can use the robot communication scripts preset in the Voice Messaging Service console, or invoke the callback function to return the response mode configured by the business party in each call.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param CreateRobotTaskRequest $request CreateRobotTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRobotTaskResponse CreateRobotTaskResponse
     */
    public function createRobotTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->corpName)) {
            $query['CorpName'] = $request->corpName;
        }
        if (!Utils::isUnset($request->dialogId)) {
            $query['DialogId'] = $request->dialogId;
        }
        if (!Utils::isUnset($request->isSelfLine)) {
            $query['IsSelfLine'] = $request->isSelfLine;
        }
        if (!Utils::isUnset($request->numberStatusIdent)) {
            $query['NumberStatusIdent'] = $request->numberStatusIdent;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->recallInterval)) {
            $query['RecallInterval'] = $request->recallInterval;
        }
        if (!Utils::isUnset($request->recallStateCodes)) {
            $query['RecallStateCodes'] = $request->recallStateCodes;
        }
        if (!Utils::isUnset($request->recallTimes)) {
            $query['RecallTimes'] = $request->recallTimes;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->retryType)) {
            $query['RetryType'] = $request->retryType;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRobotTask',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRobotTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to initiate an outbound robocall task by using the robot communication scripts preset in the Voice Messaging Service console. In an intelligent speech interaction task, you can use the robot communication scripts preset in the Voice Messaging Service console, or invoke the callback function to return the response mode configured by the business party in each call.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param CreateRobotTaskRequest $request CreateRobotTaskRequest
     *
     * @return CreateRobotTaskResponse CreateRobotTaskResponse
     */
    public function createRobotTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRobotTaskWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to delete only tasks that are not started, that are completed, and that are terminated.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param DeleteRobotTaskRequest $request DeleteRobotTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRobotTaskResponse DeleteRobotTaskResponse
     */
    public function deleteRobotTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRobotTask',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRobotTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to delete only tasks that are not started, that are completed, and that are terminated.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param DeleteRobotTaskRequest $request DeleteRobotTaskRequest
     *
     * @return DeleteRobotTaskResponse DeleteRobotTaskResponse
     */
    public function deleteRobotTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRobotTaskWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param ExecuteCallTaskRequest $request ExecuteCallTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ExecuteCallTaskResponse ExecuteCallTaskResponse
     */
    public function executeCallTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fireTime)) {
            $query['FireTime'] = $request->fireTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExecuteCallTask',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteCallTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param ExecuteCallTaskRequest $request ExecuteCallTaskRequest
     *
     * @return ExecuteCallTaskResponse ExecuteCallTaskResponse
     */
    public function executeCallTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeCallTaskWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param GetHotlineQualificationByOrderRequest $request GetHotlineQualificationByOrderRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotlineQualificationByOrderResponse GetHotlineQualificationByOrderResponse
     */
    public function getHotlineQualificationByOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotlineQualificationByOrder',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotlineQualificationByOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param GetHotlineQualificationByOrderRequest $request GetHotlineQualificationByOrderRequest
     *
     * @return GetHotlineQualificationByOrderResponse GetHotlineQualificationByOrderResponse
     */
    public function getHotlineQualificationByOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineQualificationByOrderWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to five times per second per account.
     *   *
     * @param GetTokenRequest $request GetTokenRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTokenResponse GetTokenResponse
     */
    public function getTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->tokenType)) {
            $query['TokenType'] = $request->tokenType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetToken',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to five times per second per account.
     *   *
     * @param GetTokenRequest $request GetTokenRequest
     *
     * @return GetTokenResponse GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTokenWithOptions($request, $runtime);
    }

    /**
     * *   Your enterprise qualification is approved. For more information, see [Submit enterprise qualifications](~~149795~~).
     *   * *   Voice numbers are purchased. For more information, see [Purchase numbers](~~149794~~).
     *   * *   When the subscriber answers the call, the subscriber hears a voice that instructs the subscriber to press a key as needed. If the [message receipt](~~112503~~) feature is enabled, the Voice Messaging Service (VMS) platform returns the information about the key pressed by the subscriber to the business system. The key information includes the order confirmation, questionnaire survey, and satisfaction survey completed by the subscriber.
     *   * ## QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param IvrCallRequest $request IvrCallRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return IvrCallResponse IvrCallResponse
     */
    public function ivrCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->byeCode)) {
            $query['ByeCode'] = $request->byeCode;
        }
        if (!Utils::isUnset($request->byeTtsParams)) {
            $query['ByeTtsParams'] = $request->byeTtsParams;
        }
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->calledShowNumber)) {
            $query['CalledShowNumber'] = $request->calledShowNumber;
        }
        if (!Utils::isUnset($request->menuKeyMap)) {
            $query['MenuKeyMap'] = $request->menuKeyMap;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startCode)) {
            $query['StartCode'] = $request->startCode;
        }
        if (!Utils::isUnset($request->startTtsParams)) {
            $query['StartTtsParams'] = $request->startTtsParams;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'IvrCall',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return IvrCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Your enterprise qualification is approved. For more information, see [Submit enterprise qualifications](~~149795~~).
     *   * *   Voice numbers are purchased. For more information, see [Purchase numbers](~~149794~~).
     *   * *   When the subscriber answers the call, the subscriber hears a voice that instructs the subscriber to press a key as needed. If the [message receipt](~~112503~~) feature is enabled, the Voice Messaging Service (VMS) platform returns the information about the key pressed by the subscriber to the business system. The key information includes the order confirmation, questionnaire survey, and satisfaction survey completed by the subscriber.
     *   * ## QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param IvrCallRequest $request IvrCallRequest
     *
     * @return IvrCallResponse IvrCallResponse
     */
    public function ivrCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ivrCallWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param ListCallTaskRequest $request ListCallTaskRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCallTaskResponse ListCallTaskResponse
     */
    public function listCallTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCallTask',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCallTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param ListCallTaskRequest $request ListCallTaskRequest
     *
     * @return ListCallTaskResponse ListCallTaskResponse
     */
    public function listCallTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallTaskWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param ListCallTaskDetailRequest $request ListCallTaskDetailRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCallTaskDetailResponse ListCallTaskDetailResponse
     */
    public function listCallTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNum)) {
            $query['CalledNum'] = $request->calledNum;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCallTaskDetail',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCallTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param ListCallTaskDetailRequest $request ListCallTaskDetailRequest
     *
     * @return ListCallTaskDetailResponse ListCallTaskDetailResponse
     */
    public function listCallTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCallTaskDetailWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param ListHotlineTransferNumberRequest $request ListHotlineTransferNumberRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHotlineTransferNumberResponse ListHotlineTransferNumberResponse
     */
    public function listHotlineTransferNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hotlineNumber)) {
            $query['HotlineNumber'] = $request->hotlineNumber;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->qualificationId)) {
            $query['QualificationId'] = $request->qualificationId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotlineTransferNumber',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHotlineTransferNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param ListHotlineTransferNumberRequest $request ListHotlineTransferNumberRequest
     *
     * @return ListHotlineTransferNumberResponse ListHotlineTransferNumberResponse
     */
    public function listHotlineTransferNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotlineTransferNumberWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param ListHotlineTransferRegisterFileRequest $request ListHotlineTransferRegisterFileRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHotlineTransferRegisterFileResponse ListHotlineTransferRegisterFileResponse
     */
    public function listHotlineTransferRegisterFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hotlineNumber)) {
            $query['HotlineNumber'] = $request->hotlineNumber;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->qualificationId)) {
            $query['QualificationId'] = $request->qualificationId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotlineTransferRegisterFile',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHotlineTransferRegisterFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param ListHotlineTransferRegisterFileRequest $request ListHotlineTransferRegisterFileRequest
     *
     * @return ListHotlineTransferRegisterFileResponse ListHotlineTransferRegisterFileResponse
     */
    public function listHotlineTransferRegisterFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotlineTransferRegisterFileWithOptions($request, $runtime);
    }

    /**
     * QueryCallDetailByCallId is a common query operation. You can call this operation to query the details of a voice notification, voice verification code, interactive voice response (IVR), intelligent inbound voice call, intelligent outbound voice call, or intelligent robocall.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryCallDetailByCallIdRequest $request QueryCallDetailByCallIdRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCallDetailByCallIdResponse QueryCallDetailByCallIdResponse
     */
    public function queryCallDetailByCallIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prodId)) {
            $query['ProdId'] = $request->prodId;
        }
        if (!Utils::isUnset($request->queryDate)) {
            $query['QueryDate'] = $request->queryDate;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCallDetailByCallId',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCallDetailByCallIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * QueryCallDetailByCallId is a common query operation. You can call this operation to query the details of a voice notification, voice verification code, interactive voice response (IVR), intelligent inbound voice call, intelligent outbound voice call, or intelligent robocall.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryCallDetailByCallIdRequest $request QueryCallDetailByCallIdRequest
     *
     * @return QueryCallDetailByCallIdResponse QueryCallDetailByCallIdResponse
     */
    public function queryCallDetailByCallId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallDetailByCallIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryCallDetailByTaskIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryCallDetailByTaskIdResponse
     */
    public function queryCallDetailByTaskIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callee)) {
            $query['Callee'] = $request->callee;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->queryDate)) {
            $query['QueryDate'] = $request->queryDate;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCallDetailByTaskId',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCallDetailByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryCallInPoolTransferConfigRequest $request QueryCallInPoolTransferConfigRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCallInPoolTransferConfigResponse QueryCallInPoolTransferConfigResponse
     */
    public function queryCallInPoolTransferConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCallInPoolTransferConfig',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCallInPoolTransferConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryCallInPoolTransferConfigRequest $request QueryCallInPoolTransferConfigRequest
     *
     * @return QueryCallInPoolTransferConfigResponse QueryCallInPoolTransferConfigResponse
     */
    public function queryCallInPoolTransferConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallInPoolTransferConfigWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryCallInTransferRecordRequest $request QueryCallInTransferRecordRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCallInTransferRecordResponse QueryCallInTransferRecordResponse
     */
    public function queryCallInTransferRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callInCaller)) {
            $query['CallInCaller'] = $request->callInCaller;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->queryDate)) {
            $query['QueryDate'] = $request->queryDate;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCallInTransferRecord',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCallInTransferRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryCallInTransferRecordRequest $request QueryCallInTransferRecordRequest
     *
     * @return QueryCallInTransferRecordResponse QueryCallInTransferRecordResponse
     */
    public function queryCallInTransferRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCallInTransferRecordWithOptions($request, $runtime);
    }

    /**
     * @param QueryRobotInfoListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryRobotInfoListResponse
     */
    public function queryRobotInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditStatus)) {
            $query['AuditStatus'] = $request->auditStatus;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRobotInfoList',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRobotInfoListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryRobotTaskCallDetailRequest $request QueryRobotTaskCallDetailRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryRobotTaskCallDetailResponse QueryRobotTaskCallDetailResponse
     */
    public function queryRobotTaskCallDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callee)) {
            $query['Callee'] = $request->callee;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->queryDate)) {
            $query['QueryDate'] = $request->queryDate;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRobotTaskCallDetail',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRobotTaskCallDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryRobotTaskCallDetailRequest $request QueryRobotTaskCallDetailRequest
     *
     * @return QueryRobotTaskCallDetailResponse QueryRobotTaskCallDetailResponse
     */
    public function queryRobotTaskCallDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotTaskCallDetailWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryRobotTaskCallListRequest $request QueryRobotTaskCallListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryRobotTaskCallListResponse QueryRobotTaskCallListResponse
     */
    public function queryRobotTaskCallListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callResult)) {
            $query['CallResult'] = $request->callResult;
        }
        if (!Utils::isUnset($request->called)) {
            $query['Called'] = $request->called;
        }
        if (!Utils::isUnset($request->dialogCountFrom)) {
            $query['DialogCountFrom'] = $request->dialogCountFrom;
        }
        if (!Utils::isUnset($request->dialogCountTo)) {
            $query['DialogCountTo'] = $request->dialogCountTo;
        }
        if (!Utils::isUnset($request->durationFrom)) {
            $query['DurationFrom'] = $request->durationFrom;
        }
        if (!Utils::isUnset($request->durationTo)) {
            $query['DurationTo'] = $request->durationTo;
        }
        if (!Utils::isUnset($request->hangupDirection)) {
            $query['HangupDirection'] = $request->hangupDirection;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRobotTaskCallList',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRobotTaskCallListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryRobotTaskCallListRequest $request QueryRobotTaskCallListRequest
     *
     * @return QueryRobotTaskCallListResponse QueryRobotTaskCallListResponse
     */
    public function queryRobotTaskCallList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotTaskCallListWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryRobotTaskDetailRequest $request QueryRobotTaskDetailRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryRobotTaskDetailResponse QueryRobotTaskDetailResponse
     */
    public function queryRobotTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRobotTaskDetail',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRobotTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryRobotTaskDetailRequest $request QueryRobotTaskDetailRequest
     *
     * @return QueryRobotTaskDetailResponse QueryRobotTaskDetailResponse
     */
    public function queryRobotTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotTaskDetailWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryRobotTaskListRequest $request QueryRobotTaskListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryRobotTaskListResponse QueryRobotTaskListResponse
     */
    public function queryRobotTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->time)) {
            $query['Time'] = $request->time;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRobotTaskList',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRobotTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryRobotTaskListRequest $request QueryRobotTaskListRequest
     *
     * @return QueryRobotTaskListResponse QueryRobotTaskListResponse
     */
    public function queryRobotTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotTaskListWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryRobotv2AllListRequest $request QueryRobotv2AllListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryRobotv2AllListResponse QueryRobotv2AllListResponse
     */
    public function queryRobotv2AllListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRobotv2AllList',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRobotv2AllListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryRobotv2AllListRequest $request QueryRobotv2AllListRequest
     *
     * @return QueryRobotv2AllListResponse QueryRobotv2AllListResponse
     */
    public function queryRobotv2AllList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRobotv2AllListWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryVirtualNumberRequest $request QueryVirtualNumberRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryVirtualNumberResponse QueryVirtualNumberResponse
     */
    public function queryVirtualNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeType)) {
            $query['RouteType'] = $request->routeType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryVirtualNumber',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryVirtualNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param QueryVirtualNumberRequest $request QueryVirtualNumberRequest
     *
     * @return QueryVirtualNumberResponse QueryVirtualNumberResponse
     */
    public function queryVirtualNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVirtualNumberWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 200 times per second per account.
     *   *
     * @param QueryVirtualNumberRelationRequest $request QueryVirtualNumberRelationRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryVirtualNumberRelationResponse QueryVirtualNumberRelationResponse
     */
    public function queryVirtualNumberRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->phoneNum)) {
            $query['PhoneNum'] = $request->phoneNum;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->qualificationId)) {
            $query['QualificationId'] = $request->qualificationId;
        }
        if (!Utils::isUnset($request->regionNameCity)) {
            $query['RegionNameCity'] = $request->regionNameCity;
        }
        if (!Utils::isUnset($request->relatedNum)) {
            $query['RelatedNum'] = $request->relatedNum;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->routeType)) {
            $query['RouteType'] = $request->routeType;
        }
        if (!Utils::isUnset($request->specId)) {
            $query['SpecId'] = $request->specId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryVirtualNumberRelation',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryVirtualNumberRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 200 times per second per account.
     *   *
     * @param QueryVirtualNumberRelationRequest $request QueryVirtualNumberRelationRequest
     *
     * @return QueryVirtualNumberRelationResponse QueryVirtualNumberRelationResponse
     */
    public function queryVirtualNumberRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVirtualNumberRelationWithOptions($request, $runtime);
    }

    /**
     * @param QueryVoiceFileAuditInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryVoiceFileAuditInfoResponse
     */
    public function queryVoiceFileAuditInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->voiceCodes)) {
            $query['VoiceCodes'] = $request->voiceCodes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryVoiceFileAuditInfo',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryVoiceFileAuditInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param RecoverCallInConfigRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecoverCallInConfigResponse
     */
    public function recoverCallInConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoverCallInConfig',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecoverCallInConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param SendVerificationRequest $request SendVerificationRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SendVerificationResponse SendVerificationResponse
     */
    public function sendVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->target)) {
            $query['Target'] = $request->target;
        }
        if (!Utils::isUnset($request->verifyType)) {
            $query['VerifyType'] = $request->verifyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendVerification',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendVerificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param SendVerificationRequest $request SendVerificationRequest
     *
     * @return SendVerificationResponse SendVerificationResponse
     */
    public function sendVerification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerificationWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param SetTransferCalleePoolConfigRequest $request SetTransferCalleePoolConfigRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SetTransferCalleePoolConfigResponse SetTransferCalleePoolConfigResponse
     */
    public function setTransferCalleePoolConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledRouteMode)) {
            $query['CalledRouteMode'] = $request->calledRouteMode;
        }
        if (!Utils::isUnset($request->details)) {
            $query['Details'] = $request->details;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->phoneNumber)) {
            $query['PhoneNumber'] = $request->phoneNumber;
        }
        if (!Utils::isUnset($request->qualificationId)) {
            $query['QualificationId'] = $request->qualificationId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetTransferCalleePoolConfig',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetTransferCalleePoolConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param SetTransferCalleePoolConfigRequest $request SetTransferCalleePoolConfigRequest
     *
     * @return SetTransferCalleePoolConfigResponse SetTransferCalleePoolConfigResponse
     */
    public function setTransferCalleePoolConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setTransferCalleePoolConfigWithOptions($request, $runtime);
    }

    /**
     * *   Due to business adjustments, the updates of the voice notification and voice verification code services have been stopped in regions outside the Chinese mainland and the services have been discontinued since March 2022. Only qualified customers can continue using the voice notification and voice verification code services.
     *   * *   For more information about voice plans or voice service billing, see [Pricing of VMS on China site (aliyun.com)](~~150083~~).
     *   * ### QPS limits
     *   * You can call this operation up to 1,000 times per second per account.
     *   *
     * @param SingleCallByTtsRequest $request SingleCallByTtsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SingleCallByTtsResponse SingleCallByTtsResponse
     */
    public function singleCallByTtsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->calledShowNumber)) {
            $query['CalledShowNumber'] = $request->calledShowNumber;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        if (!Utils::isUnset($request->ttsCode)) {
            $query['TtsCode'] = $request->ttsCode;
        }
        if (!Utils::isUnset($request->ttsParam)) {
            $query['TtsParam'] = $request->ttsParam;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SingleCallByTts',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SingleCallByTtsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Due to business adjustments, the updates of the voice notification and voice verification code services have been stopped in regions outside the Chinese mainland and the services have been discontinued since March 2022. Only qualified customers can continue using the voice notification and voice verification code services.
     *   * *   For more information about voice plans or voice service billing, see [Pricing of VMS on China site (aliyun.com)](~~150083~~).
     *   * ### QPS limits
     *   * You can call this operation up to 1,000 times per second per account.
     *   *
     * @param SingleCallByTtsRequest $request SingleCallByTtsRequest
     *
     * @return SingleCallByTtsResponse SingleCallByTtsResponse
     */
    public function singleCallByTts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->singleCallByTtsWithOptions($request, $runtime);
    }

    /**
     * > Due to business adjustments, the updates of the voice notification and voice verification code services have been stopped in regions outside the Chinese mainland and the services have been discontinued since March 2022. Only qualified customers can continue using the voice notification and voice verification code services.
     *   * You can call the [SingleCallByTts](~~393519~~) operation to send voice notifications with variables.
     *   * ### QPS limits
     *   * You can call this operation up to 1,200 times per second per account.
     *   *
     * @param SingleCallByVoiceRequest $request SingleCallByVoiceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SingleCallByVoiceResponse SingleCallByVoiceResponse
     */
    public function singleCallByVoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->calledShowNumber)) {
            $query['CalledShowNumber'] = $request->calledShowNumber;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        if (!Utils::isUnset($request->voiceCode)) {
            $query['VoiceCode'] = $request->voiceCode;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SingleCallByVoice',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SingleCallByVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > Due to business adjustments, the updates of the voice notification and voice verification code services have been stopped in regions outside the Chinese mainland and the services have been discontinued since March 2022. Only qualified customers can continue using the voice notification and voice verification code services.
     *   * You can call the [SingleCallByTts](~~393519~~) operation to send voice notifications with variables.
     *   * ### QPS limits
     *   * You can call this operation up to 1,200 times per second per account.
     *   *
     * @param SingleCallByVoiceRequest $request SingleCallByVoiceRequest
     *
     * @return SingleCallByVoiceResponse SingleCallByVoiceResponse
     */
    public function singleCallByVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->singleCallByVoiceWithOptions($request, $runtime);
    }

    /**
     * *   The SmartCall operation must be used together with the [intelligent outbound HTTP operation](~~112703~~). After the call initiated by the Voice Messaging Service (VMS) platform is connected, the VMS platform sends the text converted from speech back to the business side, and the business side then returns the follow-up action to the VMS platform.
     *   * *   The SmartCall operation does not support the following characters: `@ = : "" $ { } ^ * ￥`.
     *   * ### QPS limits
     *   * You can call this operation up to 1,000 times per second per account.
     *   *
     * @param SmartCallRequest $request SmartCallRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return SmartCallResponse SmartCallResponse
     */
    public function smartCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionCodeBreak)) {
            $query['ActionCodeBreak'] = $request->actionCodeBreak;
        }
        if (!Utils::isUnset($request->actionCodeTimeBreak)) {
            $query['ActionCodeTimeBreak'] = $request->actionCodeTimeBreak;
        }
        if (!Utils::isUnset($request->asrBaseId)) {
            $query['AsrBaseId'] = $request->asrBaseId;
        }
        if (!Utils::isUnset($request->asrModelId)) {
            $query['AsrModelId'] = $request->asrModelId;
        }
        if (!Utils::isUnset($request->backgroundFileCode)) {
            $query['BackgroundFileCode'] = $request->backgroundFileCode;
        }
        if (!Utils::isUnset($request->backgroundSpeed)) {
            $query['BackgroundSpeed'] = $request->backgroundSpeed;
        }
        if (!Utils::isUnset($request->backgroundVolume)) {
            $query['BackgroundVolume'] = $request->backgroundVolume;
        }
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->calledShowNumber)) {
            $query['CalledShowNumber'] = $request->calledShowNumber;
        }
        if (!Utils::isUnset($request->dynamicId)) {
            $query['DynamicId'] = $request->dynamicId;
        }
        if (!Utils::isUnset($request->earlyMediaAsr)) {
            $query['EarlyMediaAsr'] = $request->earlyMediaAsr;
        }
        if (!Utils::isUnset($request->enableITN)) {
            $query['EnableITN'] = $request->enableITN;
        }
        if (!Utils::isUnset($request->muteTime)) {
            $query['MuteTime'] = $request->muteTime;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pauseTime)) {
            $query['PauseTime'] = $request->pauseTime;
        }
        if (!Utils::isUnset($request->recordFlag)) {
            $query['RecordFlag'] = $request->recordFlag;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sessionTimeout)) {
            $query['SessionTimeout'] = $request->sessionTimeout;
        }
        if (!Utils::isUnset($request->speed)) {
            $query['Speed'] = $request->speed;
        }
        if (!Utils::isUnset($request->streamAsr)) {
            $query['StreamAsr'] = $request->streamAsr;
        }
        if (!Utils::isUnset($request->ttsConf)) {
            $query['TtsConf'] = $request->ttsConf;
        }
        if (!Utils::isUnset($request->ttsSpeed)) {
            $query['TtsSpeed'] = $request->ttsSpeed;
        }
        if (!Utils::isUnset($request->ttsStyle)) {
            $query['TtsStyle'] = $request->ttsStyle;
        }
        if (!Utils::isUnset($request->ttsVolume)) {
            $query['TtsVolume'] = $request->ttsVolume;
        }
        if (!Utils::isUnset($request->voiceCode)) {
            $query['VoiceCode'] = $request->voiceCode;
        }
        if (!Utils::isUnset($request->voiceCodeParam)) {
            $query['VoiceCodeParam'] = $request->voiceCodeParam;
        }
        if (!Utils::isUnset($request->volume)) {
            $query['Volume'] = $request->volume;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SmartCall',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SmartCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   The SmartCall operation must be used together with the [intelligent outbound HTTP operation](~~112703~~). After the call initiated by the Voice Messaging Service (VMS) platform is connected, the VMS platform sends the text converted from speech back to the business side, and the business side then returns the follow-up action to the VMS platform.
     *   * *   The SmartCall operation does not support the following characters: `@ = : "" $ { } ^ * ￥`.
     *   * ### QPS limits
     *   * You can call this operation up to 1,000 times per second per account.
     *   *
     * @param SmartCallRequest $request SmartCallRequest
     *
     * @return SmartCallResponse SmartCallResponse
     */
    public function smartCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smartCallWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to initiate a specified action on the called number of an outbound robocall when the call is transferred to an agent of the call center.
     *   * > You can only initiate the action of bridging a called number and an agent of the call center.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param SmartCallOperateRequest $request SmartCallOperateRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SmartCallOperateResponse SmartCallOperateResponse
     */
    public function smartCallOperateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->command)) {
            $query['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->param)) {
            $query['Param'] = $request->param;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SmartCallOperate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SmartCallOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to initiate a specified action on the called number of an outbound robocall when the call is transferred to an agent of the call center.
     *   * > You can only initiate the action of bridging a called number and an agent of the call center.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param SmartCallOperateRequest $request SmartCallOperateRequest
     *
     * @return SmartCallOperateResponse SmartCallOperateResponse
     */
    public function smartCallOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smartCallOperateWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param StartRobotTaskRequest $request StartRobotTaskRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StartRobotTaskResponse StartRobotTaskResponse
     */
    public function startRobotTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->scheduleTime)) {
            $query['ScheduleTime'] = $request->scheduleTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartRobotTask',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartRobotTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param StartRobotTaskRequest $request StartRobotTaskRequest
     *
     * @return StartRobotTaskResponse StartRobotTaskResponse
     */
    public function startRobotTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRobotTaskWithOptions($request, $runtime);
    }

    /**
     * @param StopCallInConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StopCallInConfigResponse
     */
    public function stopCallInConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->number)) {
            $query['Number'] = $request->number;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopCallInConfig',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopCallInConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * After you stop a robocall task, you can call the [StartRobotTask](~~StartRobotTask~~) operation to start it again.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param StopRobotTaskRequest $request StopRobotTaskRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StopRobotTaskResponse StopRobotTaskResponse
     */
    public function stopRobotTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopRobotTask',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopRobotTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you stop a robocall task, you can call the [StartRobotTask](~~StartRobotTask~~) operation to start it again.
     *   * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param StopRobotTaskRequest $request StopRobotTaskRequest
     *
     * @return StopRobotTaskResponse StopRobotTaskResponse
     */
    public function stopRobotTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRobotTaskWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param SubmitHotlineTransferRegisterRequest $request SubmitHotlineTransferRegisterRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitHotlineTransferRegisterResponse SubmitHotlineTransferRegisterResponse
     */
    public function submitHotlineTransferRegisterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agreement)) {
            $query['Agreement'] = $request->agreement;
        }
        if (!Utils::isUnset($request->hotlineNumber)) {
            $query['HotlineNumber'] = $request->hotlineNumber;
        }
        if (!Utils::isUnset($request->operatorIdentityCard)) {
            $query['OperatorIdentityCard'] = $request->operatorIdentityCard;
        }
        if (!Utils::isUnset($request->operatorMail)) {
            $query['OperatorMail'] = $request->operatorMail;
        }
        if (!Utils::isUnset($request->operatorMailVerifyCode)) {
            $query['OperatorMailVerifyCode'] = $request->operatorMailVerifyCode;
        }
        if (!Utils::isUnset($request->operatorMobile)) {
            $query['OperatorMobile'] = $request->operatorMobile;
        }
        if (!Utils::isUnset($request->operatorMobileVerifyCode)) {
            $query['OperatorMobileVerifyCode'] = $request->operatorMobileVerifyCode;
        }
        if (!Utils::isUnset($request->operatorName)) {
            $query['OperatorName'] = $request->operatorName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->qualificationId)) {
            $query['QualificationId'] = $request->qualificationId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->transferPhoneNumberInfos)) {
            $query['TransferPhoneNumberInfos'] = $request->transferPhoneNumberInfos;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitHotlineTransferRegister',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitHotlineTransferRegisterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param SubmitHotlineTransferRegisterRequest $request SubmitHotlineTransferRegisterRequest
     *
     * @return SubmitHotlineTransferRegisterResponse SubmitHotlineTransferRegisterResponse
     */
    public function submitHotlineTransferRegister($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitHotlineTransferRegisterWithOptions($request, $runtime);
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param UploadRobotTaskCalledFileRequest $request UploadRobotTaskCalledFileRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadRobotTaskCalledFileResponse UploadRobotTaskCalledFileResponse
     */
    public function uploadRobotTaskCalledFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->ttsParam)) {
            $query['TtsParam'] = $request->ttsParam;
        }
        if (!Utils::isUnset($request->ttsParamHead)) {
            $query['TtsParamHead'] = $request->ttsParamHead;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadRobotTaskCalledFile',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadRobotTaskCalledFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### QPS limits
     *   * You can call this operation up to 100 times per second per account.
     *   *
     * @param UploadRobotTaskCalledFileRequest $request UploadRobotTaskCalledFileRequest
     *
     * @return UploadRobotTaskCalledFileResponse UploadRobotTaskCalledFileResponse
     */
    public function uploadRobotTaskCalledFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadRobotTaskCalledFileWithOptions($request, $runtime);
    }
}
