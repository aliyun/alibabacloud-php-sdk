<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\AddRtcAccountRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\AddRtcAccountResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\AddVirtualNumberRelationRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\AddVirtualNumberRelationResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BatchRobotSmartCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BatchRobotSmartCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BindNumberAndVoipIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\BindNumberAndVoipIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelCallRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelCallResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelOrderRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelOrderRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CancelRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClickToDialRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClickToDialResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloseSipAccountRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloseSipAccountResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateCallTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateCallTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateSipAccountRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CreateSipAccountResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DeleteRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DeleteRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DescribeRecordDataRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DescribeRecordDataResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DoRtcNumberAuthRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DoRtcNumberAuthResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DoubleCallSeatRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\DoubleCallSeatResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ExecuteCallTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ExecuteCallTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetCallInfoRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetCallInfoResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetHotlineQualificationByOrderRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetHotlineQualificationByOrderResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetRtcTokenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetRtcTokenResponse;
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
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOrderedNumbersRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOrderedNumbersResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOutboundStrategiesRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOutboundStrategiesResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListRobotTaskCallsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListRobotTaskCallsResponse;
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
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRtcNumberAuthStatusRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryRtcNumberAuthStatusResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVirtualNumberRelationRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVirtualNumberRelationResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVirtualNumberRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVirtualNumberResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVoipNumberBindInfosRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\QueryVoipNumberBindInfosResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ReportVoipProblemsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ReportVoipProblemsResponse;
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
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartMicroOutboundRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartMicroOutboundResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StartRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StopRobotTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\StopRobotTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SubmitHotlineTransferRegisterRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\SubmitHotlineTransferRegisterResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UnbindNumberAndVoipIdRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UnbindNumberAndVoipIdResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UndoRtcNumberAuthRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UndoRtcNumberAuthResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UploadRobotTaskCalledFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\UploadRobotTaskCalledFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\VoipAddAccountRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\VoipAddAccountResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\VoipGetTokenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\VoipGetTokenResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
     * @param AddRtcAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddRtcAccountResponse
     */
    public function addRtcAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddRtcAccountResponse::fromMap($this->doRPCRequest('AddRtcAccount', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddRtcAccountRequest $request
     *
     * @return AddRtcAccountResponse
     */
    public function addRtcAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRtcAccountWithOptions($request, $runtime);
    }

    /**
     * @param AddVirtualNumberRelationRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddVirtualNumberRelationResponse
     */
    public function addVirtualNumberRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddVirtualNumberRelationResponse::fromMap($this->doRPCRequest('AddVirtualNumberRelation', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param BatchRobotSmartCallRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchRobotSmartCallResponse
     */
    public function batchRobotSmartCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchRobotSmartCallResponse::fromMap($this->doRPCRequest('BatchRobotSmartCall', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param BindNumberAndVoipIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BindNumberAndVoipIdResponse
     */
    public function bindNumberAndVoipIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindNumberAndVoipIdResponse::fromMap($this->doRPCRequest('BindNumberAndVoipId', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindNumberAndVoipIdRequest $request
     *
     * @return BindNumberAndVoipIdResponse
     */
    public function bindNumberAndVoipId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindNumberAndVoipIdWithOptions($request, $runtime);
    }

    /**
     * @param CancelCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelCallResponse
     */
    public function cancelCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelCallResponse::fromMap($this->doRPCRequest('CancelCall', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CancelOrderRobotTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CancelOrderRobotTaskResponse
     */
    public function cancelOrderRobotTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelOrderRobotTaskResponse::fromMap($this->doRPCRequest('CancelOrderRobotTask', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CancelRobotTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelRobotTaskResponse
     */
    public function cancelRobotTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelRobotTaskResponse::fromMap($this->doRPCRequest('CancelRobotTask', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ClickToDialRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ClickToDialResponse
     */
    public function clickToDialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClickToDialResponse::fromMap($this->doRPCRequest('ClickToDial', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ClickToDialRequest $request
     *
     * @return ClickToDialResponse
     */
    public function clickToDial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clickToDialWithOptions($request, $runtime);
    }

    /**
     * @param CloseSipAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CloseSipAccountResponse
     */
    public function closeSipAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloseSipAccountResponse::fromMap($this->doRPCRequest('CloseSipAccount', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CloseSipAccountRequest $request
     *
     * @return CloseSipAccountResponse
     */
    public function closeSipAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeSipAccountWithOptions($request, $runtime);
    }

    /**
     * @param CreateCallTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCallTaskResponse
     */
    public function createCallTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCallTaskResponse::fromMap($this->doRPCRequest('CreateCallTask', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateRobotTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateRobotTaskResponse
     */
    public function createRobotTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRobotTaskResponse::fromMap($this->doRPCRequest('CreateRobotTask', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param CreateSipAccountRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSipAccountResponse
     */
    public function createSipAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSipAccountResponse::fromMap($this->doRPCRequest('CreateSipAccount', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSipAccountRequest $request
     *
     * @return CreateSipAccountResponse
     */
    public function createSipAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSipAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRobotTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteRobotTaskResponse
     */
    public function deleteRobotTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRobotTaskResponse::fromMap($this->doRPCRequest('DeleteRobotTask', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param DescribeRecordDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRecordDataResponse
     */
    public function describeRecordDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRecordDataResponse::fromMap($this->doRPCRequest('DescribeRecordData', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRecordDataRequest $request
     *
     * @return DescribeRecordDataResponse
     */
    public function describeRecordData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordDataWithOptions($request, $runtime);
    }

    /**
     * @param DoRtcNumberAuthRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DoRtcNumberAuthResponse
     */
    public function doRtcNumberAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DoRtcNumberAuthResponse::fromMap($this->doRPCRequest('DoRtcNumberAuth', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DoRtcNumberAuthRequest $request
     *
     * @return DoRtcNumberAuthResponse
     */
    public function doRtcNumberAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doRtcNumberAuthWithOptions($request, $runtime);
    }

    /**
     * @param DoubleCallSeatRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DoubleCallSeatResponse
     */
    public function doubleCallSeatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DoubleCallSeatResponse::fromMap($this->doRPCRequest('DoubleCallSeat', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DoubleCallSeatRequest $request
     *
     * @return DoubleCallSeatResponse
     */
    public function doubleCallSeat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doubleCallSeatWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteCallTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ExecuteCallTaskResponse
     */
    public function executeCallTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExecuteCallTaskResponse::fromMap($this->doRPCRequest('ExecuteCallTask', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetCallInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetCallInfoResponse
     */
    public function getCallInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCallInfoResponse::fromMap($this->doRPCRequest('GetCallInfo', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCallInfoRequest $request
     *
     * @return GetCallInfoResponse
     */
    public function getCallInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineQualificationByOrderRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetHotlineQualificationByOrderResponse
     */
    public function getHotlineQualificationByOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHotlineQualificationByOrderResponse::fromMap($this->doRPCRequest('GetHotlineQualificationByOrder', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param GetRtcTokenRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetRtcTokenResponse
     */
    public function getRtcTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRtcTokenResponse::fromMap($this->doRPCRequest('GetRtcToken', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRtcTokenRequest $request
     *
     * @return GetRtcTokenResponse
     */
    public function getRtcToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRtcTokenWithOptions($request, $runtime);
    }

    /**
     * @param GetTokenRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetTokenResponse::fromMap($this->doRPCRequest('GetToken', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param IvrCallRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return IvrCallResponse
     */
    public function ivrCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return IvrCallResponse::fromMap($this->doRPCRequest('IvrCall', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListCallTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListCallTaskResponse
     */
    public function listCallTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCallTaskResponse::fromMap($this->doRPCRequest('ListCallTask', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListCallTaskDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListCallTaskDetailResponse
     */
    public function listCallTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListCallTaskDetailResponse::fromMap($this->doRPCRequest('ListCallTaskDetail', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListHotlineTransferNumberRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListHotlineTransferNumberResponse
     */
    public function listHotlineTransferNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHotlineTransferNumberResponse::fromMap($this->doRPCRequest('ListHotlineTransferNumber', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListHotlineTransferNumberRequest $request
     *
     * @return ListHotlineTransferNumberResponse
     */
    public function listHotlineTransferNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotlineTransferNumberWithOptions($request, $runtime);
    }

    /**
     * @param ListHotlineTransferRegisterFileRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListHotlineTransferRegisterFileResponse
     */
    public function listHotlineTransferRegisterFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListHotlineTransferRegisterFileResponse::fromMap($this->doRPCRequest('ListHotlineTransferRegisterFile', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ListOrderedNumbersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListOrderedNumbersResponse
     */
    public function listOrderedNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOrderedNumbersResponse::fromMap($this->doRPCRequest('ListOrderedNumbers', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOrderedNumbersRequest $request
     *
     * @return ListOrderedNumbersResponse
     */
    public function listOrderedNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOrderedNumbersWithOptions($request, $runtime);
    }

    /**
     * @param ListOutboundStrategiesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListOutboundStrategiesResponse
     */
    public function listOutboundStrategiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOutboundStrategiesResponse::fromMap($this->doRPCRequest('ListOutboundStrategies', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOutboundStrategiesRequest $request
     *
     * @return ListOutboundStrategiesResponse
     */
    public function listOutboundStrategies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOutboundStrategiesWithOptions($request, $runtime);
    }

    /**
     * @param ListRobotTaskCallsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListRobotTaskCallsResponse
     */
    public function listRobotTaskCallsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRobotTaskCallsResponse::fromMap($this->doRPCRequest('ListRobotTaskCalls', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRobotTaskCallsRequest $request
     *
     * @return ListRobotTaskCallsResponse
     */
    public function listRobotTaskCalls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRobotTaskCallsWithOptions($request, $runtime);
    }

    /**
     * @param QueryCallDetailByCallIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryCallDetailByCallIdResponse
     */
    public function queryCallDetailByCallIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCallDetailByCallIdResponse::fromMap($this->doRPCRequest('QueryCallDetailByCallId', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryCallDetailByTaskIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryCallDetailByTaskIdResponse
     */
    public function queryCallDetailByTaskIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCallDetailByTaskIdResponse::fromMap($this->doRPCRequest('QueryCallDetailByTaskId', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryCallInPoolTransferConfigRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryCallInPoolTransferConfigResponse
     */
    public function queryCallInPoolTransferConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCallInPoolTransferConfigResponse::fromMap($this->doRPCRequest('QueryCallInPoolTransferConfig', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryCallInTransferRecordRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryCallInTransferRecordResponse
     */
    public function queryCallInTransferRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryCallInTransferRecordResponse::fromMap($this->doRPCRequest('QueryCallInTransferRecord', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryRobotInfoListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryRobotInfoListResponse
     */
    public function queryRobotInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRobotInfoListResponse::fromMap($this->doRPCRequest('QueryRobotInfoList', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param QueryRobotTaskCallDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryRobotTaskCallDetailResponse
     */
    public function queryRobotTaskCallDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRobotTaskCallDetailResponse::fromMap($this->doRPCRequest('QueryRobotTaskCallDetail', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryRobotTaskCallListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryRobotTaskCallListResponse
     */
    public function queryRobotTaskCallListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRobotTaskCallListResponse::fromMap($this->doRPCRequest('QueryRobotTaskCallList', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryRobotTaskDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryRobotTaskDetailResponse
     */
    public function queryRobotTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRobotTaskDetailResponse::fromMap($this->doRPCRequest('QueryRobotTaskDetail', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryRobotTaskListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryRobotTaskListResponse
     */
    public function queryRobotTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRobotTaskListResponse::fromMap($this->doRPCRequest('QueryRobotTaskList', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryRobotv2AllListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryRobotv2AllListResponse
     */
    public function queryRobotv2AllListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRobotv2AllListResponse::fromMap($this->doRPCRequest('QueryRobotv2AllList', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryRtcNumberAuthStatusRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryRtcNumberAuthStatusResponse
     */
    public function queryRtcNumberAuthStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRtcNumberAuthStatusResponse::fromMap($this->doRPCRequest('QueryRtcNumberAuthStatus', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryRtcNumberAuthStatusRequest $request
     *
     * @return QueryRtcNumberAuthStatusResponse
     */
    public function queryRtcNumberAuthStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRtcNumberAuthStatusWithOptions($request, $runtime);
    }

    /**
     * @param QueryVirtualNumberRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryVirtualNumberResponse
     */
    public function queryVirtualNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryVirtualNumberResponse::fromMap($this->doRPCRequest('QueryVirtualNumber', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryVirtualNumberRequest $request
     *
     * @return QueryVirtualNumberResponse
     */
    public function queryVirtualNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVirtualNumberWithOptions($request, $runtime);
    }

    /**
     * @param QueryVirtualNumberRelationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryVirtualNumberRelationResponse
     */
    public function queryVirtualNumberRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryVirtualNumberRelationResponse::fromMap($this->doRPCRequest('QueryVirtualNumberRelation', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param QueryVoipNumberBindInfosRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryVoipNumberBindInfosResponse
     */
    public function queryVoipNumberBindInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryVoipNumberBindInfosResponse::fromMap($this->doRPCRequest('QueryVoipNumberBindInfos', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryVoipNumberBindInfosRequest $request
     *
     * @return QueryVoipNumberBindInfosResponse
     */
    public function queryVoipNumberBindInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVoipNumberBindInfosWithOptions($request, $runtime);
    }

    /**
     * @param ReportVoipProblemsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReportVoipProblemsResponse
     */
    public function reportVoipProblemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReportVoipProblemsResponse::fromMap($this->doRPCRequest('ReportVoipProblems', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReportVoipProblemsRequest $request
     *
     * @return ReportVoipProblemsResponse
     */
    public function reportVoipProblems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reportVoipProblemsWithOptions($request, $runtime);
    }

    /**
     * @param SendVerificationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SendVerificationResponse
     */
    public function sendVerificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendVerificationResponse::fromMap($this->doRPCRequest('SendVerification', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SetTransferCalleePoolConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetTransferCalleePoolConfigResponse
     */
    public function setTransferCalleePoolConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetTransferCalleePoolConfigResponse::fromMap($this->doRPCRequest('SetTransferCalleePoolConfig', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SingleCallByTtsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SingleCallByTtsResponse
     */
    public function singleCallByTtsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SingleCallByTtsResponse::fromMap($this->doRPCRequest('SingleCallByTts', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SingleCallByVoiceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SingleCallByVoiceResponse
     */
    public function singleCallByVoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SingleCallByVoiceResponse::fromMap($this->doRPCRequest('SingleCallByVoice', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SmartCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SmartCallResponse
     */
    public function smartCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SmartCallResponse::fromMap($this->doRPCRequest('SmartCall', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SmartCallOperateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SmartCallOperateResponse
     */
    public function smartCallOperateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SmartCallOperateResponse::fromMap($this->doRPCRequest('SmartCallOperate', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param StartMicroOutboundRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartMicroOutboundResponse
     */
    public function startMicroOutboundWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartMicroOutboundResponse::fromMap($this->doRPCRequest('StartMicroOutbound', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartMicroOutboundRequest $request
     *
     * @return StartMicroOutboundResponse
     */
    public function startMicroOutbound($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startMicroOutboundWithOptions($request, $runtime);
    }

    /**
     * @param StartRobotTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartRobotTaskResponse
     */
    public function startRobotTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartRobotTaskResponse::fromMap($this->doRPCRequest('StartRobotTask', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param StopRobotTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopRobotTaskResponse
     */
    public function stopRobotTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopRobotTaskResponse::fromMap($this->doRPCRequest('StopRobotTask', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param SubmitHotlineTransferRegisterRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SubmitHotlineTransferRegisterResponse
     */
    public function submitHotlineTransferRegisterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SubmitHotlineTransferRegisterResponse::fromMap($this->doRPCRequest('SubmitHotlineTransferRegister', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UnbindNumberAndVoipIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnbindNumberAndVoipIdResponse
     */
    public function unbindNumberAndVoipIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindNumberAndVoipIdResponse::fromMap($this->doRPCRequest('UnbindNumberAndVoipId', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindNumberAndVoipIdRequest $request
     *
     * @return UnbindNumberAndVoipIdResponse
     */
    public function unbindNumberAndVoipId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindNumberAndVoipIdWithOptions($request, $runtime);
    }

    /**
     * @param UndoRtcNumberAuthRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UndoRtcNumberAuthResponse
     */
    public function undoRtcNumberAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UndoRtcNumberAuthResponse::fromMap($this->doRPCRequest('UndoRtcNumberAuth', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UndoRtcNumberAuthRequest $request
     *
     * @return UndoRtcNumberAuthResponse
     */
    public function undoRtcNumberAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->undoRtcNumberAuthWithOptions($request, $runtime);
    }

    /**
     * @param UploadRobotTaskCalledFileRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UploadRobotTaskCalledFileResponse
     */
    public function uploadRobotTaskCalledFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadRobotTaskCalledFileResponse::fromMap($this->doRPCRequest('UploadRobotTaskCalledFile', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadRobotTaskCalledFileRequest $request
     *
     * @return UploadRobotTaskCalledFileResponse
     */
    public function uploadRobotTaskCalledFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadRobotTaskCalledFileWithOptions($request, $runtime);
    }

    /**
     * @param VoipAddAccountRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return VoipAddAccountResponse
     */
    public function voipAddAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VoipAddAccountResponse::fromMap($this->doRPCRequest('VoipAddAccount', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param VoipAddAccountRequest $request
     *
     * @return VoipAddAccountResponse
     */
    public function voipAddAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->voipAddAccountWithOptions($request, $runtime);
    }

    /**
     * @param VoipGetTokenRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return VoipGetTokenResponse
     */
    public function voipGetTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VoipGetTokenResponse::fromMap($this->doRPCRequest('VoipGetToken', '2017-05-25', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param VoipGetTokenRequest $request
     *
     * @return VoipGetTokenResponse
     */
    public function voipGetToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->voipGetTokenWithOptions($request, $runtime);
    }
}
