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
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkAgentStatusDetailRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkAgentStatusDetailResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkAgentStatusRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkAgentStatusResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkBindClientTelRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkBindClientTelResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCdrObDetailsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCdrObDetailsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateClientRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateClientResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateClientShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateEnterprisePauseRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateEnterprisePauseResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateExtenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateExtenResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateQueueRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateQueueResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateQueueShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDeleteClientRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDeleteClientResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDeleteExtenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDeleteExtenResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrIbDetailsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrIbDetailsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrIbRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrIbResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrObDetailsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrObDetailsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrObRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeCdrObResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeClientRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeClientResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeQueueRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeQueueResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeRecordFileUrlRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeRecordFileUrlResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDetailCdrIbRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDetailCdrIbResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrIbAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrIbAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrIbRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrIbResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrIbsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrIbsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrObRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrObResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrObsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrObsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListClientsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListClientsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListEnterprisePausesRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListEnterprisePausesResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListExtensRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListExtensResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListIvrNodesRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListIvrNodesResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListIvrsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListIvrsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListQueuesRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListQueuesResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkStatIbRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkStatIbResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkUpdateClientRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkUpdateClientResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkUpdateClientShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentLoginRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentLoginResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentLogoutRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentLogoutResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentMonitorStatisticsRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentMonitorStatisticsResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentSetUserDataRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentSetUserDataResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentUnlinkRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentUnlinkResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentWorkloadReportRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAgentWorkloadReportResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAssignAgentGroupRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudAssignAgentGroupResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchCreateAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchCreateAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchGetAgentStatusRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchGetAgentStatusResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchUpdateAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchUpdateAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateAgentGroupRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateAgentGroupResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateAsrRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateAsrResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateEnterpriseTimeRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateEnterpriseTimeResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateExtenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateExtenResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateQueueRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateQueueResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateQueueShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateQueueSkillRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateQueueSkillResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateSkillRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateSkillResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteAgentGroupRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteAgentGroupResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteAgentTelRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteAgentTelResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteEnterpriseTimeRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteEnterpriseTimeResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteExtenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteExtenResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteQueueRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteQueueResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteQueueSkillRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteQueueSkillResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteSkillRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteSkillResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteTaskTelRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudDeleteTaskTelResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAgentStatusRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAgentStatusResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAreaCodeRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAreaCodeResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAsrRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetAsrResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetExtenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetExtenResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetObCdrRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetObCdrResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetQueueRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetQueueResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetRecordUrlRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetRecordUrlResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudGetTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudImportTaskTelRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudImportTaskTelResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudImportTaskTelShrinkRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudInterruptIvrRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudInterruptIvrResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListAgentGroupRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListAgentGroupResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListAgentTelRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListAgentTelResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListAssignedAgentGroupRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListAssignedAgentGroupResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListCurlLogRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListCurlLogResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListEnterpriseTimeRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListEnterpriseTimeResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListExtenRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListExtenResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListFreeAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListFreeAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListOnlineAgentRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListOnlineAgentResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListQueueRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListQueueResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListQueueSkillRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListQueueSkillResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListSkillRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListSkillResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListTaskFileRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListTaskFileResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudOutboundObClidReportRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudOutboundObClidReportResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudOutboundPreviewObReportRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudOutboundPreviewObReportResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudPauseTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudPauseTaskResponse;
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
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryRasrEventRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryRasrEventResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryWebcallCdrRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryWebcallCdrResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudStartTaskRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudStartTaskResponse;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudUnassignAgentGroupRequest;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudUnassignAgentGroupResponse;
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
     * Agent status monitoring.
     *
     * @param request - ClinkAgentStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkAgentStatusResponse
     *
     * @param ClinkAgentStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ClinkAgentStatusResponse
     */
    public function clinkAgentStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
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
            'action' => 'ClinkAgentStatus',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Agent status monitoring.
     *
     * @param request - ClinkAgentStatusRequest
     *
     * @returns ClinkAgentStatusResponse
     *
     * @param ClinkAgentStatusRequest $request
     *
     * @return ClinkAgentStatusResponse
     */
    public function clinkAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkAgentStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the status details of an agent.
     *
     * @param request - ClinkAgentStatusDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkAgentStatusDetailResponse
     *
     * @param ClinkAgentStatusDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ClinkAgentStatusDetailResponse
     */
    public function clinkAgentStatusDetailWithOptions($request, $runtime)
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
            'action' => 'ClinkAgentStatusDetail',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkAgentStatusDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status details of an agent.
     *
     * @param request - ClinkAgentStatusDetailRequest
     *
     * @returns ClinkAgentStatusDetailResponse
     *
     * @param ClinkAgentStatusDetailRequest $request
     *
     * @return ClinkAgentStatusDetailResponse
     */
    public function clinkAgentStatusDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkAgentStatusDetailWithOptions($request, $runtime);
    }

    /**
     * Attach an agent phone.
     *
     * @param request - ClinkBindClientTelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkBindClientTelResponse
     *
     * @param ClinkBindClientTelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ClinkBindClientTelResponse
     */
    public function clinkBindClientTelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->isBind) {
            @$query['IsBind'] = $request->isBind;
        }

        if (null !== $request->isReserveTel) {
            @$query['IsReserveTel'] = $request->isReserveTel;
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
            'action' => 'ClinkBindClientTel',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkBindClientTelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attach an agent phone.
     *
     * @param request - ClinkBindClientTelRequest
     *
     * @returns ClinkBindClientTelResponse
     *
     * @param ClinkBindClientTelRequest $request
     *
     * @return ClinkBindClientTelResponse
     */
    public function clinkBindClientTel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkBindClientTelWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an outbound call record.
     *
     * @param request - ClinkCdrObDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkCdrObDetailsResponse
     *
     * @param ClinkCdrObDetailsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ClinkCdrObDetailsResponse
     */
    public function clinkCdrObDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->hiddenType) {
            @$query['HiddenType'] = $request->hiddenType;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
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
            'action' => 'ClinkCdrObDetails',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkCdrObDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an outbound call record.
     *
     * @param request - ClinkCdrObDetailsRequest
     *
     * @returns ClinkCdrObDetailsResponse
     *
     * @param ClinkCdrObDetailsRequest $request
     *
     * @return ClinkCdrObDetailsResponse
     */
    public function clinkCdrObDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkCdrObDetailsWithOptions($request, $runtime);
    }

    /**
     * Add an agent.
     *
     * @param tmpReq - ClinkCreateClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkCreateClientResponse
     *
     * @param ClinkCreateClientRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ClinkCreateClientResponse
     */
    public function clinkCreateClientWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ClinkCreateClientShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clid) {
            $request->clidShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clid, 'Clid', 'json');
        }

        if (null !== $tmpReq->clidArea) {
            $request->clidAreaShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clidArea, 'ClidArea', 'json');
        }

        if (null !== $tmpReq->clidDefault) {
            $request->clidDefaultShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clidDefault, 'ClidDefault', 'json');
        }

        if (null !== $tmpReq->cloudNumberModes) {
            $request->cloudNumberModesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cloudNumberModes, 'CloudNumberModes', 'json');
        }

        if (null !== $tmpReq->permission) {
            $request->permissionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->permission, 'Permission', 'json');
        }

        if (null !== $tmpReq->qnos) {
            $request->qnosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->qnos, 'Qnos', 'json');
        }

        if (null !== $tmpReq->serveArea) {
            $request->serveAreaShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serveArea, 'ServeArea', 'json');
        }

        $query = [];
        if (null !== $request->active) {
            @$query['Active'] = $request->active;
        }

        if (null !== $request->areaCode) {
            @$query['AreaCode'] = $request->areaCode;
        }

        if (null !== $request->assignType) {
            @$query['AssignType'] = $request->assignType;
        }

        if (null !== $request->clidShrink) {
            @$query['Clid'] = $request->clidShrink;
        }

        if (null !== $request->clidAreaShrink) {
            @$query['ClidArea'] = $request->clidAreaShrink;
        }

        if (null !== $request->clidDefaultShrink) {
            @$query['ClidDefault'] = $request->clidDefaultShrink;
        }

        if (null !== $request->clidRule) {
            @$query['ClidRule'] = $request->clidRule;
        }

        if (null !== $request->clidType) {
            @$query['ClidType'] = $request->clidType;
        }

        if (null !== $request->cloudNumberEnabled) {
            @$query['CloudNumberEnabled'] = $request->cloudNumberEnabled;
        }

        if (null !== $request->cloudNumberModesShrink) {
            @$query['CloudNumberModes'] = $request->cloudNumberModesShrink;
        }

        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->crmId) {
            @$query['CrmId'] = $request->crmId;
        }

        if (null !== $request->dynamicTelGroupIdDefault) {
            @$query['DynamicTelGroupIdDefault'] = $request->dynamicTelGroupIdDefault;
        }

        if (null !== $request->dynamicTelGroupName) {
            @$query['DynamicTelGroupName'] = $request->dynamicTelGroupName;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->hiddenTel) {
            @$query['HiddenTel'] = $request->hiddenTel;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->obClidDefaultType) {
            @$query['ObClidDefaultType'] = $request->obClidDefaultType;
        }

        if (null !== $request->obHangupSms) {
            @$query['ObHangupSms'] = $request->obHangupSms;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->pauseLogin) {
            @$query['PauseLogin'] = $request->pauseLogin;
        }

        if (null !== $request->permissionShrink) {
            @$query['Permission'] = $request->permissionShrink;
        }

        if (null !== $request->qnosShrink) {
            @$query['Qnos'] = $request->qnosShrink;
        }

        if (null !== $request->recurrentselectionType) {
            @$query['RecurrentselectionType'] = $request->recurrentselectionType;
        }

        if (null !== $request->recurrentselectionValue) {
            @$query['RecurrentselectionValue'] = $request->recurrentselectionValue;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->serveAreaShrink) {
            @$query['ServeArea'] = $request->serveAreaShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->wechatMiniProgramRtc) {
            @$query['WechatMiniProgramRtc'] = $request->wechatMiniProgramRtc;
        }

        if (null !== $request->wrapupTime) {
            @$query['WrapupTime'] = $request->wrapupTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkCreateClient',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkCreateClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add an agent.
     *
     * @param request - ClinkCreateClientRequest
     *
     * @returns ClinkCreateClientResponse
     *
     * @param ClinkCreateClientRequest $request
     *
     * @return ClinkCreateClientResponse
     */
    public function clinkCreateClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkCreateClientWithOptions($request, $runtime);
    }

    /**
     * Add a busy status.
     *
     * @param request - ClinkCreateEnterprisePauseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkCreateEnterprisePauseResponse
     *
     * @param ClinkCreateEnterprisePauseRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ClinkCreateEnterprisePauseResponse
     */
    public function clinkCreateEnterprisePauseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->isDefault) {
            @$query['IsDefault'] = $request->isDefault;
        }

        if (null !== $request->isRest) {
            @$query['IsRest'] = $request->isRest;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pauseStatus) {
            @$query['PauseStatus'] = $request->pauseStatus;
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
            'action' => 'ClinkCreateEnterprisePause',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkCreateEnterprisePauseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a busy status.
     *
     * @param request - ClinkCreateEnterprisePauseRequest
     *
     * @returns ClinkCreateEnterprisePauseResponse
     *
     * @param ClinkCreateEnterprisePauseRequest $request
     *
     * @return ClinkCreateEnterprisePauseResponse
     */
    public function clinkCreateEnterprisePause($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkCreateEnterprisePauseWithOptions($request, $runtime);
    }

    /**
     * Add a phone.
     *
     * @param request - ClinkCreateExtenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkCreateExtenResponse
     *
     * @param ClinkCreateExtenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ClinkCreateExtenResponse
     */
    public function clinkCreateExtenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allow) {
            @$query['Allow'] = $request->allow;
        }

        if (null !== $request->areaCode) {
            @$query['AreaCode'] = $request->areaCode;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->extenNumber) {
            @$query['ExtenNumber'] = $request->extenNumber;
        }

        if (null !== $request->isDirect) {
            @$query['IsDirect'] = $request->isDirect;
        }

        if (null !== $request->jittBuffer) {
            @$query['JittBuffer'] = $request->jittBuffer;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkCreateExten',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkCreateExtenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a phone.
     *
     * @param request - ClinkCreateExtenRequest
     *
     * @returns ClinkCreateExtenResponse
     *
     * @param ClinkCreateExtenRequest $request
     *
     * @return ClinkCreateExtenResponse
     */
    public function clinkCreateExten($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkCreateExtenWithOptions($request, $runtime);
    }

    /**
     * Add a queue.
     *
     * @param tmpReq - ClinkCreateQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkCreateQueueResponse
     *
     * @param ClinkCreateQueueRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ClinkCreateQueueResponse
     */
    public function clinkCreateQueueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ClinkCreateQueueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queueMembers) {
            $request->queueMembersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queueMembers, 'QueueMembers', 'json');
        }

        $query = [];
        if (null !== $request->chatLocation) {
            @$query['ChatLocation'] = $request->chatLocation;
        }

        if (null !== $request->chatMaxWait) {
            @$query['ChatMaxWait'] = $request->chatMaxWait;
        }

        if (null !== $request->chatStrategy) {
            @$query['ChatStrategy'] = $request->chatStrategy;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ibAllowed) {
            @$query['IbAllowed'] = $request->ibAllowed;
        }

        if (null !== $request->joinEmpty) {
            @$query['JoinEmpty'] = $request->joinEmpty;
        }

        if (null !== $request->maxPauseClientFlag) {
            @$query['MaxPauseClientFlag'] = $request->maxPauseClientFlag;
        }

        if (null !== $request->maxPauseClientType) {
            @$query['MaxPauseClientType'] = $request->maxPauseClientType;
        }

        if (null !== $request->maxPauseClientValue) {
            @$query['MaxPauseClientValue'] = $request->maxPauseClientValue;
        }

        if (null !== $request->maxWait) {
            @$query['MaxWait'] = $request->maxWait;
        }

        if (null !== $request->memberTimeout) {
            @$query['MemberTimeout'] = $request->memberTimeout;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qno) {
            @$query['Qno'] = $request->qno;
        }

        if (null !== $request->queueMembersShrink) {
            @$query['QueueMembers'] = $request->queueMembersShrink;
        }

        if (null !== $request->queueTimeout) {
            @$query['QueueTimeout'] = $request->queueTimeout;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sayCno) {
            @$query['SayCno'] = $request->sayCno;
        }

        if (null !== $request->serviceLevel) {
            @$query['ServiceLevel'] = $request->serviceLevel;
        }

        if (null !== $request->strategy) {
            @$query['Strategy'] = $request->strategy;
        }

        if (null !== $request->vipSupport) {
            @$query['VipSupport'] = $request->vipSupport;
        }

        if (null !== $request->weight) {
            @$query['Weight'] = $request->weight;
        }

        if (null !== $request->wrapupTime) {
            @$query['WrapupTime'] = $request->wrapupTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkCreateQueue',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkCreateQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a queue.
     *
     * @param request - ClinkCreateQueueRequest
     *
     * @returns ClinkCreateQueueResponse
     *
     * @param ClinkCreateQueueRequest $request
     *
     * @return ClinkCreateQueueResponse
     */
    public function clinkCreateQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkCreateQueueWithOptions($request, $runtime);
    }

    /**
     * Deletes an agent.
     *
     * @param request - ClinkDeleteClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkDeleteClientResponse
     *
     * @param ClinkDeleteClientRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ClinkDeleteClientResponse
     */
    public function clinkDeleteClientWithOptions($request, $runtime)
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
            'action' => 'ClinkDeleteClient',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkDeleteClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an agent.
     *
     * @param request - ClinkDeleteClientRequest
     *
     * @returns ClinkDeleteClientResponse
     *
     * @param ClinkDeleteClientRequest $request
     *
     * @return ClinkDeleteClientResponse
     */
    public function clinkDeleteClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkDeleteClientWithOptions($request, $runtime);
    }

    /**
     * Delete the phone.
     *
     * @param request - ClinkDeleteExtenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkDeleteExtenResponse
     *
     * @param ClinkDeleteExtenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ClinkDeleteExtenResponse
     */
    public function clinkDeleteExtenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->extenNumber) {
            @$query['ExtenNumber'] = $request->extenNumber;
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
            'action' => 'ClinkDeleteExten',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkDeleteExtenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete the phone.
     *
     * @param request - ClinkDeleteExtenRequest
     *
     * @returns ClinkDeleteExtenResponse
     *
     * @param ClinkDeleteExtenRequest $request
     *
     * @return ClinkDeleteExtenResponse
     */
    public function clinkDeleteExten($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkDeleteExtenWithOptions($request, $runtime);
    }

    /**
     * View incoming call records.
     *
     * @param request - ClinkDescribeCdrIbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkDescribeCdrIbResponse
     *
     * @param ClinkDescribeCdrIbRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ClinkDescribeCdrIbResponse
     */
    public function clinkDescribeCdrIbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->hiddenType) {
            @$query['HiddenType'] = $request->hiddenType;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
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
            'action' => 'ClinkDescribeCdrIb',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkDescribeCdrIbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View incoming call records.
     *
     * @param request - ClinkDescribeCdrIbRequest
     *
     * @returns ClinkDescribeCdrIbResponse
     *
     * @param ClinkDescribeCdrIbRequest $request
     *
     * @return ClinkDescribeCdrIbResponse
     */
    public function clinkDescribeCdrIb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkDescribeCdrIbWithOptions($request, $runtime);
    }

    /**
     * View incoming call record details.
     *
     * @param request - ClinkDescribeCdrIbDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkDescribeCdrIbDetailsResponse
     *
     * @param ClinkDescribeCdrIbDetailsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ClinkDescribeCdrIbDetailsResponse
     */
    public function clinkDescribeCdrIbDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
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
            'action' => 'ClinkDescribeCdrIbDetails',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkDescribeCdrIbDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View incoming call record details.
     *
     * @param request - ClinkDescribeCdrIbDetailsRequest
     *
     * @returns ClinkDescribeCdrIbDetailsResponse
     *
     * @param ClinkDescribeCdrIbDetailsRequest $request
     *
     * @return ClinkDescribeCdrIbDetailsResponse
     */
    public function clinkDescribeCdrIbDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkDescribeCdrIbDetailsWithOptions($request, $runtime);
    }

    /**
     * View outbound call records.
     *
     * @param request - ClinkDescribeCdrObRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkDescribeCdrObResponse
     *
     * @param ClinkDescribeCdrObRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ClinkDescribeCdrObResponse
     */
    public function clinkDescribeCdrObWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->hiddenType) {
            @$query['HiddenType'] = $request->hiddenType;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
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
            'action' => 'ClinkDescribeCdrOb',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkDescribeCdrObResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View outbound call records.
     *
     * @param request - ClinkDescribeCdrObRequest
     *
     * @returns ClinkDescribeCdrObResponse
     *
     * @param ClinkDescribeCdrObRequest $request
     *
     * @return ClinkDescribeCdrObResponse
     */
    public function clinkDescribeCdrOb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkDescribeCdrObWithOptions($request, $runtime);
    }

    /**
     * View outbound call record details.
     *
     * @param request - ClinkDescribeCdrObDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkDescribeCdrObDetailsResponse
     *
     * @param ClinkDescribeCdrObDetailsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ClinkDescribeCdrObDetailsResponse
     */
    public function clinkDescribeCdrObDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
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
            'action' => 'ClinkDescribeCdrObDetails',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkDescribeCdrObDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View outbound call record details.
     *
     * @param request - ClinkDescribeCdrObDetailsRequest
     *
     * @returns ClinkDescribeCdrObDetailsResponse
     *
     * @param ClinkDescribeCdrObDetailsRequest $request
     *
     * @return ClinkDescribeCdrObDetailsResponse
     */
    public function clinkDescribeCdrObDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkDescribeCdrObDetailsWithOptions($request, $runtime);
    }

    /**
     * View the agent details.
     *
     * @param request - ClinkDescribeClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkDescribeClientResponse
     *
     * @param ClinkDescribeClientRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ClinkDescribeClientResponse
     */
    public function clinkDescribeClientWithOptions($request, $runtime)
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
            'action' => 'ClinkDescribeClient',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkDescribeClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View the agent details.
     *
     * @param request - ClinkDescribeClientRequest
     *
     * @returns ClinkDescribeClientResponse
     *
     * @param ClinkDescribeClientRequest $request
     *
     * @return ClinkDescribeClientResponse
     */
    public function clinkDescribeClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkDescribeClientWithOptions($request, $runtime);
    }

    /**
     * View queue details.
     *
     * @param request - ClinkDescribeQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkDescribeQueueResponse
     *
     * @param ClinkDescribeQueueRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ClinkDescribeQueueResponse
     */
    public function clinkDescribeQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkDescribeQueue',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkDescribeQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View queue details.
     *
     * @param request - ClinkDescribeQueueRequest
     *
     * @returns ClinkDescribeQueueResponse
     *
     * @param ClinkDescribeQueueRequest $request
     *
     * @return ClinkDescribeQueueResponse
     */
    public function clinkDescribeQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkDescribeQueueWithOptions($request, $runtime);
    }

    /**
     * View call recording address.
     *
     * @param request - ClinkDescribeRecordFileUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkDescribeRecordFileUrlResponse
     *
     * @param ClinkDescribeRecordFileUrlRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ClinkDescribeRecordFileUrlResponse
     */
    public function clinkDescribeRecordFileUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->download) {
            @$query['Download'] = $request->download;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->recordSide) {
            @$query['RecordSide'] = $request->recordSide;
        }

        if (null !== $request->recordType) {
            @$query['RecordType'] = $request->recordType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkDescribeRecordFileUrl',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkDescribeRecordFileUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * View call recording address.
     *
     * @param request - ClinkDescribeRecordFileUrlRequest
     *
     * @returns ClinkDescribeRecordFileUrlResponse
     *
     * @param ClinkDescribeRecordFileUrlRequest $request
     *
     * @return ClinkDescribeRecordFileUrlResponse
     */
    public function clinkDescribeRecordFileUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkDescribeRecordFileUrlWithOptions($request, $runtime);
    }

    /**
     * Query the details of customer call records.
     *
     * @param request - ClinkDetailCdrIbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkDetailCdrIbResponse
     *
     * @param ClinkDetailCdrIbRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ClinkDetailCdrIbResponse
     */
    public function clinkDetailCdrIbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->hiddenType) {
            @$query['HiddenType'] = $request->hiddenType;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
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
            'action' => 'ClinkDetailCdrIb',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkDetailCdrIbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the details of customer call records.
     *
     * @param request - ClinkDetailCdrIbRequest
     *
     * @returns ClinkDetailCdrIbResponse
     *
     * @param ClinkDetailCdrIbRequest $request
     *
     * @return ClinkDetailCdrIbResponse
     */
    public function clinkDetailCdrIb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkDetailCdrIbWithOptions($request, $runtime);
    }

    /**
     * Query the customer call record list.
     *
     * @param request - ClinkListCdrIbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkListCdrIbResponse
     *
     * @param ClinkListCdrIbRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ClinkListCdrIbResponse
     */
    public function clinkListCdrIbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bridgeDuration) {
            @$query['BridgeDuration'] = $request->bridgeDuration;
        }

        if (null !== $request->bridgeDurationEnd) {
            @$query['BridgeDurationEnd'] = $request->bridgeDurationEnd;
        }

        if (null !== $request->bridgeTime) {
            @$query['BridgeTime'] = $request->bridgeTime;
        }

        if (null !== $request->bridgeTimeEnd) {
            @$query['BridgeTimeEnd'] = $request->bridgeTimeEnd;
        }

        if (null !== $request->clientNumber) {
            @$query['ClientNumber'] = $request->clientNumber;
        }

        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->customerNumber) {
            @$query['CustomerNumber'] = $request->customerNumber;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->endTimeEnd) {
            @$query['EndTimeEnd'] = $request->endTimeEnd;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->firstCallCno) {
            @$query['FirstCallCno'] = $request->firstCallCno;
        }

        if (null !== $request->firstCallNumber) {
            @$query['FirstCallNumber'] = $request->firstCallNumber;
        }

        if (null !== $request->firstCallQno) {
            @$query['FirstCallQno'] = $request->firstCallQno;
        }

        if (null !== $request->hiddenType) {
            @$query['HiddenType'] = $request->hiddenType;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->scrollId) {
            @$query['ScrollId'] = $request->scrollId;
        }

        if (null !== $request->scrollSearch) {
            @$query['ScrollSearch'] = $request->scrollSearch;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->startTimeEnd) {
            @$query['StartTimeEnd'] = $request->startTimeEnd;
        }

        if (null !== $request->statuses) {
            @$query['Statuses'] = $request->statuses;
        }

        if (null !== $request->totalDuration) {
            @$query['TotalDuration'] = $request->totalDuration;
        }

        if (null !== $request->totalDurationEnd) {
            @$query['TotalDurationEnd'] = $request->totalDurationEnd;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkListCdrIb',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkListCdrIbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the customer call record list.
     *
     * @param request - ClinkListCdrIbRequest
     *
     * @returns ClinkListCdrIbResponse
     *
     * @param ClinkListCdrIbRequest $request
     *
     * @return ClinkListCdrIbResponse
     */
    public function clinkListCdrIb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkListCdrIbWithOptions($request, $runtime);
    }

    /**
     * Queries the list of agent answering records.
     *
     * @param request - ClinkListCdrIbAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkListCdrIbAgentResponse
     *
     * @param ClinkListCdrIbAgentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ClinkListCdrIbAgentResponse
     */
    public function clinkListCdrIbAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentAnswerInTime) {
            @$query['AgentAnswerInTime'] = $request->agentAnswerInTime;
        }

        if (null !== $request->bridgeDuration) {
            @$query['BridgeDuration'] = $request->bridgeDuration;
        }

        if (null !== $request->bridgeDurationEnd) {
            @$query['BridgeDurationEnd'] = $request->bridgeDurationEnd;
        }

        if (null !== $request->bridgeTime) {
            @$query['BridgeTime'] = $request->bridgeTime;
        }

        if (null !== $request->bridgeTimeEnd) {
            @$query['BridgeTimeEnd'] = $request->bridgeTimeEnd;
        }

        if (null !== $request->clientNumber) {
            @$query['ClientNumber'] = $request->clientNumber;
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

        if (null !== $request->endTimeEnd) {
            @$query['EndTimeEnd'] = $request->endTimeEnd;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->hiddenType) {
            @$query['HiddenType'] = $request->hiddenType;
        }

        if (null !== $request->hotlineName) {
            @$query['HotlineName'] = $request->hotlineName;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
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

        if (null !== $request->scrollId) {
            @$query['ScrollId'] = $request->scrollId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->startTimeEnd) {
            @$query['StartTimeEnd'] = $request->startTimeEnd;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkListCdrIbAgent',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkListCdrIbAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of agent answering records.
     *
     * @param request - ClinkListCdrIbAgentRequest
     *
     * @returns ClinkListCdrIbAgentResponse
     *
     * @param ClinkListCdrIbAgentRequest $request
     *
     * @return ClinkListCdrIbAgentResponse
     */
    public function clinkListCdrIbAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkListCdrIbAgentWithOptions($request, $runtime);
    }

    /**
     * Query the list of inbound call records.
     *
     * @param request - ClinkListCdrIbsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkListCdrIbsResponse
     *
     * @param ClinkListCdrIbsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ClinkListCdrIbsResponse
     */
    public function clinkListCdrIbsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientNumber) {
            @$query['ClientNumber'] = $request->clientNumber;
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

        if (null !== $request->hiddenType) {
            @$query['HiddenType'] = $request->hiddenType;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->qno) {
            @$query['Qno'] = $request->qno;
        }

        if (null !== $request->queueAnswerInTime) {
            @$query['QueueAnswerInTime'] = $request->queueAnswerInTime;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkListCdrIbs',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkListCdrIbsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of inbound call records.
     *
     * @param request - ClinkListCdrIbsRequest
     *
     * @returns ClinkListCdrIbsResponse
     *
     * @param ClinkListCdrIbsRequest $request
     *
     * @return ClinkListCdrIbsResponse
     */
    public function clinkListCdrIbs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkListCdrIbsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of outbound call records.
     *
     * @param request - ClinkListCdrObRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkListCdrObResponse
     *
     * @param ClinkListCdrObRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ClinkListCdrObResponse
     */
    public function clinkListCdrObWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bridgeDuration) {
            @$query['BridgeDuration'] = $request->bridgeDuration;
        }

        if (null !== $request->bridgeDurationEnd) {
            @$query['BridgeDurationEnd'] = $request->bridgeDurationEnd;
        }

        if (null !== $request->bridgeTime) {
            @$query['BridgeTime'] = $request->bridgeTime;
        }

        if (null !== $request->bridgeTimeEnd) {
            @$query['BridgeTimeEnd'] = $request->bridgeTimeEnd;
        }

        if (null !== $request->callType) {
            @$query['CallType'] = $request->callType;
        }

        if (null !== $request->clientNumber) {
            @$query['ClientNumber'] = $request->clientNumber;
        }

        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->customerNumber) {
            @$query['CustomerNumber'] = $request->customerNumber;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->endTimeEnd) {
            @$query['EndTimeEnd'] = $request->endTimeEnd;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->hiddenType) {
            @$query['HiddenType'] = $request->hiddenType;
        }

        if (null !== $request->leftClid) {
            @$query['LeftClid'] = $request->leftClid;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->scrollId) {
            @$query['ScrollId'] = $request->scrollId;
        }

        if (null !== $request->scrollSearch) {
            @$query['ScrollSearch'] = $request->scrollSearch;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->startTimeEnd) {
            @$query['StartTimeEnd'] = $request->startTimeEnd;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->totalDuration) {
            @$query['TotalDuration'] = $request->totalDuration;
        }

        if (null !== $request->totalDurationEnd) {
            @$query['TotalDurationEnd'] = $request->totalDurationEnd;
        }

        if (null !== $request->xnumber) {
            @$query['Xnumber'] = $request->xnumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkListCdrOb',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkListCdrObResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of outbound call records.
     *
     * @param request - ClinkListCdrObRequest
     *
     * @returns ClinkListCdrObResponse
     *
     * @param ClinkListCdrObRequest $request
     *
     * @return ClinkListCdrObResponse
     */
    public function clinkListCdrOb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkListCdrObWithOptions($request, $runtime);
    }

    /**
     * Queries the outbound call record list.
     *
     * @param request - ClinkListCdrObsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkListCdrObsResponse
     *
     * @param ClinkListCdrObsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ClinkListCdrObsResponse
     */
    public function clinkListCdrObsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->associatedId) {
            @$query['AssociatedId'] = $request->associatedId;
        }

        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->clientNumber) {
            @$query['ClientNumber'] = $request->clientNumber;
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

        if (null !== $request->evaluation) {
            @$query['Evaluation'] = $request->evaluation;
        }

        if (null !== $request->hiddenType) {
            @$query['HiddenType'] = $request->hiddenType;
        }

        if (null !== $request->hotline) {
            @$query['Hotline'] = $request->hotline;
        }

        if (null !== $request->idType) {
            @$query['IdType'] = $request->idType;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
        }

        if (null !== $request->mark) {
            @$query['Mark'] = $request->mark;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->province) {
            @$query['Province'] = $request->province;
        }

        if (null !== $request->queueAnswerInTime) {
            @$query['QueueAnswerInTime'] = $request->queueAnswerInTime;
        }

        if (null !== $request->requestUniqueId) {
            @$query['RequestUniqueId'] = $request->requestUniqueId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkListCdrObs',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkListCdrObsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the outbound call record list.
     *
     * @param request - ClinkListCdrObsRequest
     *
     * @returns ClinkListCdrObsResponse
     *
     * @param ClinkListCdrObsRequest $request
     *
     * @return ClinkListCdrObsResponse
     */
    public function clinkListCdrObs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkListCdrObsWithOptions($request, $runtime);
    }

    /**
     * Queries the list of agents.
     *
     * @param request - ClinkListClientsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkListClientsResponse
     *
     * @param ClinkListClientsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ClinkListClientsResponse
     */
    public function clinkListClientsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->active) {
            @$query['Active'] = $request->active;
        }

        if (null !== $request->bindTel) {
            @$query['BindTel'] = $request->bindTel;
        }

        if (null !== $request->clid) {
            @$query['Clid'] = $request->clid;
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

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->updateEndTime) {
            @$query['UpdateEndTime'] = $request->updateEndTime;
        }

        if (null !== $request->updateStartTime) {
            @$query['UpdateStartTime'] = $request->updateStartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkListClients',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkListClientsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of agents.
     *
     * @param request - ClinkListClientsRequest
     *
     * @returns ClinkListClientsResponse
     *
     * @param ClinkListClientsRequest $request
     *
     * @return ClinkListClientsResponse
     */
    public function clinkListClients($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkListClientsWithOptions($request, $runtime);
    }

    /**
     * Queries the busy status list.
     *
     * @param request - ClinkListEnterprisePausesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkListEnterprisePausesResponse
     *
     * @param ClinkListEnterprisePausesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ClinkListEnterprisePausesResponse
     */
    public function clinkListEnterprisePausesWithOptions($request, $runtime)
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
            'action' => 'ClinkListEnterprisePauses',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkListEnterprisePausesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the busy status list.
     *
     * @param request - ClinkListEnterprisePausesRequest
     *
     * @returns ClinkListEnterprisePausesResponse
     *
     * @param ClinkListEnterprisePausesRequest $request
     *
     * @return ClinkListEnterprisePausesResponse
     */
    public function clinkListEnterprisePauses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkListEnterprisePausesWithOptions($request, $runtime);
    }

    /**
     * Query the phone list.
     *
     * @param request - ClinkListExtensRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkListExtensResponse
     *
     * @param ClinkListExtensRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ClinkListExtensResponse
     */
    public function clinkListExtensWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->areaCode) {
            @$query['AreaCode'] = $request->areaCode;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
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

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkListExtens',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkListExtensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the phone list.
     *
     * @param request - ClinkListExtensRequest
     *
     * @returns ClinkListExtensResponse
     *
     * @param ClinkListExtensRequest $request
     *
     * @return ClinkListExtensResponse
     */
    public function clinkListExtens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkListExtensWithOptions($request, $runtime);
    }

    /**
     * Queries the voice navigation edge zone list.
     *
     * @param request - ClinkListIvrNodesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkListIvrNodesResponse
     *
     * @param ClinkListIvrNodesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ClinkListIvrNodesResponse
     */
    public function clinkListIvrNodesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ivrName) {
            @$query['IvrName'] = $request->ivrName;
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
            'action' => 'ClinkListIvrNodes',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkListIvrNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the voice navigation edge zone list.
     *
     * @param request - ClinkListIvrNodesRequest
     *
     * @returns ClinkListIvrNodesResponse
     *
     * @param ClinkListIvrNodesRequest $request
     *
     * @return ClinkListIvrNodesResponse
     */
    public function clinkListIvrNodes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkListIvrNodesWithOptions($request, $runtime);
    }

    /**
     * Queries the voice navigation list.
     *
     * @param request - ClinkListIvrsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkListIvrsResponse
     *
     * @param ClinkListIvrsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ClinkListIvrsResponse
     */
    public function clinkListIvrsWithOptions($request, $runtime)
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
            'action' => 'ClinkListIvrs',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkListIvrsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the voice navigation list.
     *
     * @param request - ClinkListIvrsRequest
     *
     * @returns ClinkListIvrsResponse
     *
     * @param ClinkListIvrsRequest $request
     *
     * @return ClinkListIvrsResponse
     */
    public function clinkListIvrs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkListIvrsWithOptions($request, $runtime);
    }

    /**
     * Queries the queue list.
     *
     * @param request - ClinkListQueuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkListQueuesResponse
     *
     * @param ClinkListQueuesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ClinkListQueuesResponse
     */
    public function clinkListQueuesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
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
            'action' => 'ClinkListQueues',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkListQueuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the queue list.
     *
     * @param request - ClinkListQueuesRequest
     *
     * @returns ClinkListQueuesResponse
     *
     * @param ClinkListQueuesRequest $request
     *
     * @return ClinkListQueuesResponse
     */
    public function clinkListQueues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkListQueuesWithOptions($request, $runtime);
    }

    /**
     * Inbound report - call statistics.
     *
     * @param request - ClinkStatIbRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkStatIbResponse
     *
     * @param ClinkStatIbRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ClinkStatIbResponse
     */
    public function clinkStatIbWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->date) {
            @$query['Date'] = $request->date;
        }

        if (null !== $request->dateEnd) {
            @$query['DateEnd'] = $request->dateEnd;
        }

        if (null !== $request->endHour) {
            @$query['EndHour'] = $request->endHour;
        }

        if (null !== $request->endMinute) {
            @$query['EndMinute'] = $request->endMinute;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->fields) {
            @$query['Fields'] = $request->fields;
        }

        if (null !== $request->hotlines) {
            @$query['Hotlines'] = $request->hotlines;
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

        if (null !== $request->startHour) {
            @$query['StartHour'] = $request->startHour;
        }

        if (null !== $request->startMinute) {
            @$query['StartMinute'] = $request->startMinute;
        }

        if (null !== $request->statisticMethod) {
            @$query['StatisticMethod'] = $request->statisticMethod;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkStatIb',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkStatIbResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Inbound report - call statistics.
     *
     * @param request - ClinkStatIbRequest
     *
     * @returns ClinkStatIbResponse
     *
     * @param ClinkStatIbRequest $request
     *
     * @return ClinkStatIbResponse
     */
    public function clinkStatIb($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkStatIbWithOptions($request, $runtime);
    }

    /**
     * Update an agent.
     *
     * @param tmpReq - ClinkUpdateClientRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClinkUpdateClientResponse
     *
     * @param ClinkUpdateClientRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return ClinkUpdateClientResponse
     */
    public function clinkUpdateClientWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ClinkUpdateClientShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clid) {
            $request->clidShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clid, 'Clid', 'json');
        }

        if (null !== $tmpReq->clidArea) {
            $request->clidAreaShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clidArea, 'ClidArea', 'json');
        }

        if (null !== $tmpReq->clidDefault) {
            $request->clidDefaultShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clidDefault, 'ClidDefault', 'json');
        }

        if (null !== $tmpReq->cloudNumberModes) {
            $request->cloudNumberModesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cloudNumberModes, 'CloudNumberModes', 'json');
        }

        if (null !== $tmpReq->permission) {
            $request->permissionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->permission, 'Permission', 'json');
        }

        if (null !== $tmpReq->qnos) {
            $request->qnosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->qnos, 'Qnos', 'json');
        }

        if (null !== $tmpReq->serveArea) {
            $request->serveAreaShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serveArea, 'ServeArea', 'json');
        }

        $query = [];
        if (null !== $request->active) {
            @$query['Active'] = $request->active;
        }

        if (null !== $request->areaCode) {
            @$query['AreaCode'] = $request->areaCode;
        }

        if (null !== $request->assignType) {
            @$query['AssignType'] = $request->assignType;
        }

        if (null !== $request->clidShrink) {
            @$query['Clid'] = $request->clidShrink;
        }

        if (null !== $request->clidAreaShrink) {
            @$query['ClidArea'] = $request->clidAreaShrink;
        }

        if (null !== $request->clidDefaultShrink) {
            @$query['ClidDefault'] = $request->clidDefaultShrink;
        }

        if (null !== $request->clidRule) {
            @$query['ClidRule'] = $request->clidRule;
        }

        if (null !== $request->clidType) {
            @$query['ClidType'] = $request->clidType;
        }

        if (null !== $request->cloudNumberEnabled) {
            @$query['CloudNumberEnabled'] = $request->cloudNumberEnabled;
        }

        if (null !== $request->cloudNumberModesShrink) {
            @$query['CloudNumberModes'] = $request->cloudNumberModesShrink;
        }

        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->crmId) {
            @$query['CrmId'] = $request->crmId;
        }

        if (null !== $request->dynamicTelGroupIdDefault) {
            @$query['DynamicTelGroupIdDefault'] = $request->dynamicTelGroupIdDefault;
        }

        if (null !== $request->dynamicTelGroupName) {
            @$query['DynamicTelGroupName'] = $request->dynamicTelGroupName;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->hiddenTel) {
            @$query['HiddenTel'] = $request->hiddenTel;
        }

        if (null !== $request->ibWrapupTime) {
            @$query['IbWrapupTime'] = $request->ibWrapupTime;
        }

        if (null !== $request->ibWrapupType) {
            @$query['IbWrapupType'] = $request->ibWrapupType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->obClidDefaultType) {
            @$query['ObClidDefaultType'] = $request->obClidDefaultType;
        }

        if (null !== $request->obHangupSms) {
            @$query['ObHangupSms'] = $request->obHangupSms;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->pauseLogin) {
            @$query['PauseLogin'] = $request->pauseLogin;
        }

        if (null !== $request->permissionShrink) {
            @$query['Permission'] = $request->permissionShrink;
        }

        if (null !== $request->qnosShrink) {
            @$query['Qnos'] = $request->qnosShrink;
        }

        if (null !== $request->recurrentselectionType) {
            @$query['RecurrentselectionType'] = $request->recurrentselectionType;
        }

        if (null !== $request->recurrentselectionValue) {
            @$query['RecurrentselectionValue'] = $request->recurrentselectionValue;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->serveAreaShrink) {
            @$query['ServeArea'] = $request->serveAreaShrink;
        }

        if (null !== $request->wechatMiniProgramRtc) {
            @$query['WechatMiniProgramRtc'] = $request->wechatMiniProgramRtc;
        }

        if (null !== $request->wrapupTime) {
            @$query['WrapupTime'] = $request->wrapupTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClinkUpdateClient',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClinkUpdateClientResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update an agent.
     *
     * @param request - ClinkUpdateClientRequest
     *
     * @returns ClinkUpdateClientResponse
     *
     * @param ClinkUpdateClientRequest $request
     *
     * @return ClinkUpdateClientResponse
     */
    public function clinkUpdateClient($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clinkUpdateClientWithOptions($request, $runtime);
    }

    /**
     * Publish the agent online through this interface.
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
     * Publish the agent online through this interface.
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
     * Unpublish an agent.
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
     * Unpublish an agent.
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
     * Real-time statistics on agent call data.
     *
     * @param request - CloudAgentMonitorStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudAgentMonitorStatisticsResponse
     *
     * @param CloudAgentMonitorStatisticsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CloudAgentMonitorStatisticsResponse
     */
    public function cloudAgentMonitorStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->endHour) {
            @$query['EndHour'] = $request->endHour;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->fields) {
            @$query['Fields'] = $request->fields;
        }

        if (null !== $request->gno) {
            @$query['Gno'] = $request->gno;
        }

        if (null !== $request->isNeedQueueName) {
            @$query['IsNeedQueueName'] = $request->isNeedQueueName;
        }

        if (null !== $request->isUseGno) {
            @$query['IsUseGno'] = $request->isUseGno;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->startHour) {
            @$query['StartHour'] = $request->startHour;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudAgentMonitorStatistics',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudAgentMonitorStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Real-time statistics on agent call data.
     *
     * @param request - CloudAgentMonitorStatisticsRequest
     *
     * @returns CloudAgentMonitorStatisticsResponse
     *
     * @param CloudAgentMonitorStatisticsRequest $request
     *
     * @return CloudAgentMonitorStatisticsResponse
     */
    public function cloudAgentMonitorStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudAgentMonitorStatisticsWithOptions($request, $runtime);
    }

    /**
     * Use this interface to set agent associated data.
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
     * Use this interface to set agent associated data.
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
     * The agent hangs up.
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
     * The agent hangs up.
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
     * Gets agent workload report data.
     *
     * @param request - CloudAgentWorkloadReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudAgentWorkloadReportResponse
     *
     * @param CloudAgentWorkloadReportRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CloudAgentWorkloadReportResponse
     */
    public function cloudAgentWorkloadReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->gnos) {
            @$query['Gnos'] = $request->gnos;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
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

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
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
            'action' => 'CloudAgentWorkloadReport',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudAgentWorkloadReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets agent workload report data.
     *
     * @param request - CloudAgentWorkloadReportRequest
     *
     * @returns CloudAgentWorkloadReportResponse
     *
     * @param CloudAgentWorkloadReportRequest $request
     *
     * @return CloudAgentWorkloadReportResponse
     */
    public function cloudAgentWorkloadReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudAgentWorkloadReportWithOptions($request, $runtime);
    }

    /**
     * Assigns an agent to an outbound group.
     *
     * @param request - CloudAssignAgentGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudAssignAgentGroupResponse
     *
     * @param CloudAssignAgentGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CloudAssignAgentGroupResponse
     */
    public function cloudAssignAgentGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cnos) {
            @$query['Cnos'] = $request->cnos;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->gno) {
            @$query['Gno'] = $request->gno;
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
            'action' => 'CloudAssignAgentGroup',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudAssignAgentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Assigns an agent to an outbound group.
     *
     * @param request - CloudAssignAgentGroupRequest
     *
     * @returns CloudAssignAgentGroupResponse
     *
     * @param CloudAssignAgentGroupRequest $request
     *
     * @return CloudAssignAgentGroupResponse
     */
    public function cloudAssignAgentGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudAssignAgentGroupWithOptions($request, $runtime);
    }

    /**
     * Batch add agents. You can create up to 100 agents in a single batch.
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
     * Batch add agents. You can create up to 100 agents in a single batch.
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
     * Obtains the real-time status of agents in batches based on their job numbers.
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
     * Obtains the real-time status of agents in batches based on their job numbers.
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
     * Batch update the basic info of agents, excluding the update of skill info attached to agents.
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
     * Batch update the basic info of agents, excluding the update of skill info attached to agents.
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
     * Creates an agent.
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
     * Creates an agent.
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
     * Call this operation to add an outbound group.
     *
     * @param request - CloudCreateAgentGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudCreateAgentGroupResponse
     *
     * @param CloudCreateAgentGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CloudCreateAgentGroupResponse
     */
    public function cloudCreateAgentGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->gno) {
            @$query['Gno'] = $request->gno;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
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
            'action' => 'CloudCreateAgentGroup',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudCreateAgentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call this operation to add an outbound group.
     *
     * @param request - CloudCreateAgentGroupRequest
     *
     * @returns CloudCreateAgentGroupResponse
     *
     * @param CloudCreateAgentGroupRequest $request
     *
     * @return CloudCreateAgentGroupResponse
     */
    public function cloudCreateAgentGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudCreateAgentGroupWithOptions($request, $runtime);
    }

    /**
     * Upload a recording file and create an ASR transform job.
     *
     * @param request - CloudCreateAsrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudCreateAsrResponse
     *
     * @param CloudCreateAsrRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CloudCreateAsrResponse
     */
    public function cloudCreateAsrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callType) {
            @$query['CallType'] = $request->callType;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
        }

        if (null !== $request->recordFile) {
            @$query['RecordFile'] = $request->recordFile;
        }

        if (null !== $request->recordSide) {
            @$query['RecordSide'] = $request->recordSide;
        }

        if (null !== $request->recordType) {
            @$query['RecordType'] = $request->recordType;
        }

        if (null !== $request->supportMp3) {
            @$query['SupportMp3'] = $request->supportMp3;
        }

        if (null !== $request->uniqueId) {
            @$query['UniqueId'] = $request->uniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudCreateAsr',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudCreateAsrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upload a recording file and create an ASR transform job.
     *
     * @param request - CloudCreateAsrRequest
     *
     * @returns CloudCreateAsrResponse
     *
     * @param CloudCreateAsrRequest $request
     *
     * @return CloudCreateAsrResponse
     */
    public function cloudCreateAsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudCreateAsrWithOptions($request, $runtime);
    }

    /**
     * Adds a time condition configuration.
     *
     * @param request - CloudCreateEnterpriseTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudCreateEnterpriseTimeResponse
     *
     * @param CloudCreateEnterpriseTimeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CloudCreateEnterpriseTimeResponse
     */
    public function cloudCreateEnterpriseTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dayOfWeek) {
            @$query['DayOfWeek'] = $request->dayOfWeek;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->fromDay) {
            @$query['FromDay'] = $request->fromDay;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeType) {
            @$query['TimeType'] = $request->timeType;
        }

        if (null !== $request->toDay) {
            @$query['ToDay'] = $request->toDay;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudCreateEnterpriseTime',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudCreateEnterpriseTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a time condition configuration.
     *
     * @param request - CloudCreateEnterpriseTimeRequest
     *
     * @returns CloudCreateEnterpriseTimeResponse
     *
     * @param CloudCreateEnterpriseTimeRequest $request
     *
     * @return CloudCreateEnterpriseTimeResponse
     */
    public function cloudCreateEnterpriseTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudCreateEnterpriseTimeWithOptions($request, $runtime);
    }

    /**
     * Add an extension through this interface.
     *
     * @param request - CloudCreateExtenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudCreateExtenResponse
     *
     * @param CloudCreateExtenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudCreateExtenResponse
     */
    public function cloudCreateExtenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allow) {
            @$query['Allow'] = $request->allow;
        }

        if (null !== $request->areaCode) {
            @$query['AreaCode'] = $request->areaCode;
        }

        if (null !== $request->callPower) {
            @$query['CallPower'] = $request->callPower;
        }

        if (null !== $request->denoise) {
            @$query['Denoise'] = $request->denoise;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->exten) {
            @$query['Exten'] = $request->exten;
        }

        if (null !== $request->iadName) {
            @$query['IadName'] = $request->iadName;
        }

        if (null !== $request->ibRecord) {
            @$query['IbRecord'] = $request->ibRecord;
        }

        if (null !== $request->isDirect) {
            @$query['IsDirect'] = $request->isDirect;
        }

        if (null !== $request->isOb) {
            @$query['IsOb'] = $request->isOb;
        }

        if (null !== $request->jitterBuffer) {
            @$query['JitterBuffer'] = $request->jitterBuffer;
        }

        if (null !== $request->obRecord) {
            @$query['ObRecord'] = $request->obRecord;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->property) {
            @$query['Property'] = $request->property;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudCreateExten',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudCreateExtenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add an extension through this interface.
     *
     * @param request - CloudCreateExtenRequest
     *
     * @returns CloudCreateExtenResponse
     *
     * @param CloudCreateExtenRequest $request
     *
     * @return CloudCreateExtenResponse
     */
    public function cloudCreateExten($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudCreateExtenWithOptions($request, $runtime);
    }

    /**
     * Add a queue through this interface.
     *
     * @param tmpReq - CloudCreateQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudCreateQueueResponse
     *
     * @param CloudCreateQueueRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CloudCreateQueueResponse
     */
    public function cloudCreateQueueWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CloudCreateQueueShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->queue) {
            $request->queueShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queue, 'Queue', 'json');
        }

        if (null !== $tmpReq->queueSkills) {
            $request->queueSkillsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->queueSkills, 'QueueSkills', 'json');
        }

        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->queueShrink) {
            @$query['Queue'] = $request->queueShrink;
        }

        if (null !== $request->queueSkillsShrink) {
            @$query['QueueSkills'] = $request->queueSkillsShrink;
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
            'action' => 'CloudCreateQueue',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudCreateQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a queue through this interface.
     *
     * @param request - CloudCreateQueueRequest
     *
     * @returns CloudCreateQueueResponse
     *
     * @param CloudCreateQueueRequest $request
     *
     * @return CloudCreateQueueResponse
     */
    public function cloudCreateQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudCreateQueueWithOptions($request, $runtime);
    }

    /**
     * Add skills to a queue.
     *
     * @param request - CloudCreateQueueSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudCreateQueueSkillResponse
     *
     * @param CloudCreateQueueSkillRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CloudCreateQueueSkillResponse
     */
    public function cloudCreateQueueSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
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

        if (null !== $request->skillId) {
            @$query['SkillId'] = $request->skillId;
        }

        if (null !== $request->skillLevel) {
            @$query['SkillLevel'] = $request->skillLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudCreateQueueSkill',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudCreateQueueSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add skills to a queue.
     *
     * @param request - CloudCreateQueueSkillRequest
     *
     * @returns CloudCreateQueueSkillResponse
     *
     * @param CloudCreateQueueSkillRequest $request
     *
     * @return CloudCreateQueueSkillResponse
     */
    public function cloudCreateQueueSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudCreateQueueSkillWithOptions($request, $runtime);
    }

    /**
     * Adds a skill by calling this interface.
     *
     * @param request - CloudCreateSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudCreateSkillResponse
     *
     * @param CloudCreateSkillRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudCreateSkillResponse
     */
    public function cloudCreateSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
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
            'action' => 'CloudCreateSkill',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudCreateSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a skill by calling this interface.
     *
     * @param request - CloudCreateSkillRequest
     *
     * @returns CloudCreateSkillResponse
     *
     * @param CloudCreateSkillRequest $request
     *
     * @return CloudCreateSkillResponse
     */
    public function cloudCreateSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudCreateSkillWithOptions($request, $runtime);
    }

    /**
     * Creates an outbound call job.
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
     * Creates an outbound call job.
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
     * Delete an agent based on the agent number.
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
     * Delete an agent based on the agent number.
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
     * Delete an outbound call group.
     *
     * @param request - CloudDeleteAgentGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudDeleteAgentGroupResponse
     *
     * @param CloudDeleteAgentGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CloudDeleteAgentGroupResponse
     */
    public function cloudDeleteAgentGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->gno) {
            @$query['Gno'] = $request->gno;
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
            'action' => 'CloudDeleteAgentGroup',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudDeleteAgentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete an outbound call group.
     *
     * @param request - CloudDeleteAgentGroupRequest
     *
     * @returns CloudDeleteAgentGroupResponse
     *
     * @param CloudDeleteAgentGroupRequest $request
     *
     * @return CloudDeleteAgentGroupResponse
     */
    public function cloudDeleteAgentGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudDeleteAgentGroupWithOptions($request, $runtime);
    }

    /**
     * Delete the phone under the agent.
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
     * Delete the phone under the agent.
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
     * Delete a time condition setting.
     *
     * @param request - CloudDeleteEnterpriseTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudDeleteEnterpriseTimeResponse
     *
     * @param CloudDeleteEnterpriseTimeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CloudDeleteEnterpriseTimeResponse
     */
    public function cloudDeleteEnterpriseTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
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
            'action' => 'CloudDeleteEnterpriseTime',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudDeleteEnterpriseTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a time condition setting.
     *
     * @param request - CloudDeleteEnterpriseTimeRequest
     *
     * @returns CloudDeleteEnterpriseTimeResponse
     *
     * @param CloudDeleteEnterpriseTimeRequest $request
     *
     * @return CloudDeleteEnterpriseTimeResponse
     */
    public function cloudDeleteEnterpriseTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudDeleteEnterpriseTimeWithOptions($request, $runtime);
    }

    /**
     * Deletes an extension based on the extension number.
     *
     * @param request - CloudDeleteExtenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudDeleteExtenResponse
     *
     * @param CloudDeleteExtenRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudDeleteExtenResponse
     */
    public function cloudDeleteExtenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->exten) {
            @$query['Exten'] = $request->exten;
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
            'action' => 'CloudDeleteExten',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudDeleteExtenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an extension based on the extension number.
     *
     * @param request - CloudDeleteExtenRequest
     *
     * @returns CloudDeleteExtenResponse
     *
     * @param CloudDeleteExtenRequest $request
     *
     * @return CloudDeleteExtenResponse
     */
    public function cloudDeleteExten($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudDeleteExtenWithOptions($request, $runtime);
    }

    /**
     * Delete a queue.
     *
     * @param request - CloudDeleteQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudDeleteQueueResponse
     *
     * @param CloudDeleteQueueRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudDeleteQueueResponse
     */
    public function cloudDeleteQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudDeleteQueue',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudDeleteQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a queue.
     *
     * @param request - CloudDeleteQueueRequest
     *
     * @returns CloudDeleteQueueResponse
     *
     * @param CloudDeleteQueueRequest $request
     *
     * @return CloudDeleteQueueResponse
     */
    public function cloudDeleteQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudDeleteQueueWithOptions($request, $runtime);
    }

    /**
     * Queue delete skills.
     *
     * @param request - CloudDeleteQueueSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudDeleteQueueSkillResponse
     *
     * @param CloudDeleteQueueSkillRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CloudDeleteQueueSkillResponse
     */
    public function cloudDeleteQueueSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
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

        if (null !== $request->skillId) {
            @$query['SkillId'] = $request->skillId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudDeleteQueueSkill',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudDeleteQueueSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queue delete skills.
     *
     * @param request - CloudDeleteQueueSkillRequest
     *
     * @returns CloudDeleteQueueSkillResponse
     *
     * @param CloudDeleteQueueSkillRequest $request
     *
     * @return CloudDeleteQueueSkillResponse
     */
    public function cloudDeleteQueueSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudDeleteQueueSkillWithOptions($request, $runtime);
    }

    /**
     * Deletes a skill.
     *
     * @param request - CloudDeleteSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudDeleteSkillResponse
     *
     * @param CloudDeleteSkillRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudDeleteSkillResponse
     */
    public function cloudDeleteSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
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
            'action' => 'CloudDeleteSkill',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudDeleteSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a skill.
     *
     * @param request - CloudDeleteSkillRequest
     *
     * @returns CloudDeleteSkillResponse
     *
     * @param CloudDeleteSkillRequest $request
     *
     * @return CloudDeleteSkillResponse
     */
    public function cloudDeleteSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudDeleteSkillWithOptions($request, $runtime);
    }

    /**
     * Supports deleting predictive outbound call and automatic outbound call jobs. Only jobs in the initial or completed status can be deleted. When a job is deleted, the associated numbers are also deleted.
     *
     * @param request - CloudDeleteTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudDeleteTaskResponse
     *
     * @param CloudDeleteTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CloudDeleteTaskResponse
     */
    public function cloudDeleteTaskWithOptions($request, $runtime)
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
            'action' => 'CloudDeleteTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudDeleteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Supports deleting predictive outbound call and automatic outbound call jobs. Only jobs in the initial or completed status can be deleted. When a job is deleted, the associated numbers are also deleted.
     *
     * @param request - CloudDeleteTaskRequest
     *
     * @returns CloudDeleteTaskResponse
     *
     * @param CloudDeleteTaskRequest $request
     *
     * @return CloudDeleteTaskResponse
     */
    public function cloudDeleteTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudDeleteTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes the number of a call job through this interface.
     *
     * @param request - CloudDeleteTaskTelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudDeleteTaskTelResponse
     *
     * @param CloudDeleteTaskTelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CloudDeleteTaskTelResponse
     */
    public function cloudDeleteTaskTelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
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

        if (null !== $request->tels) {
            @$query['Tels'] = $request->tels;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudDeleteTaskTel',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudDeleteTaskTelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the number of a call job through this interface.
     *
     * @param request - CloudDeleteTaskTelRequest
     *
     * @returns CloudDeleteTaskTelResponse
     *
     * @param CloudDeleteTaskTelRequest $request
     *
     * @return CloudDeleteTaskTelResponse
     */
    public function cloudDeleteTaskTel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudDeleteTaskTelWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an agent.
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
     * Queries the details of an agent.
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
     * Obtains the real-time status info of agents.
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
     * Obtains the real-time status info of agents.
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
     * Query phone number attribution.
     *
     * @param request - CloudGetAreaCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudGetAreaCodeResponse
     *
     * @param CloudGetAreaCodeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudGetAreaCodeResponse
     */
    public function cloudGetAreaCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->tel) {
            @$query['Tel'] = $request->tel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudGetAreaCode',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudGetAreaCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query phone number attribution.
     *
     * @param request - CloudGetAreaCodeRequest
     *
     * @returns CloudGetAreaCodeResponse
     *
     * @param CloudGetAreaCodeRequest $request
     *
     * @return CloudGetAreaCodeResponse
     */
    public function cloudGetAreaCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudGetAreaCodeWithOptions($request, $runtime);
    }

    /**
     * Query ASR job task results and obtain data.
     *
     * @param request - CloudGetAsrRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudGetAsrResponse
     *
     * @param CloudGetAsrRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CloudGetAsrResponse
     */
    public function cloudGetAsrWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->callType) {
            @$query['CallType'] = $request->callType;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->mainUniqueId) {
            @$query['MainUniqueId'] = $request->mainUniqueId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudGetAsr',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudGetAsrResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query ASR job task results and obtain data.
     *
     * @param request - CloudGetAsrRequest
     *
     * @returns CloudGetAsrResponse
     *
     * @param CloudGetAsrRequest $request
     *
     * @return CloudGetAsrResponse
     */
    public function cloudGetAsr($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudGetAsrWithOptions($request, $runtime);
    }

    /**
     * Queries the info about a specified extension.
     *
     * @param request - CloudGetExtenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudGetExtenResponse
     *
     * @param CloudGetExtenRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CloudGetExtenResponse
     */
    public function cloudGetExtenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->exten) {
            @$query['Exten'] = $request->exten;
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
            'action' => 'CloudGetExten',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudGetExtenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the info about a specified extension.
     *
     * @param request - CloudGetExtenRequest
     *
     * @returns CloudGetExtenResponse
     *
     * @param CloudGetExtenRequest $request
     *
     * @return CloudGetExtenResponse
     */
    public function cloudGetExten($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudGetExtenWithOptions($request, $runtime);
    }

    /**
     * Queries the details of outbound call records of a specified agent based on the unique phone identity.
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
     * Queries the details of outbound call records of a specified agent based on the unique phone identity.
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
     * Query queue info.
     *
     * @param request - CloudGetQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudGetQueueResponse
     *
     * @param CloudGetQueueRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CloudGetQueueResponse
     */
    public function cloudGetQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudGetQueue',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudGetQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query queue info.
     *
     * @param request - CloudGetQueueRequest
     *
     * @returns CloudGetQueueResponse
     *
     * @param CloudGetQueueRequest $request
     *
     * @return CloudGetQueueResponse
     */
    public function cloudGetQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudGetQueueWithOptions($request, $runtime);
    }

    /**
     * Obtains the audition or download URL of a recording based on the recording file name.
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
     * Obtains the audition or download URL of a recording based on the recording file name.
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
     * Obtains the configuration info of a single job based on the job ID.
     *
     * @param request - CloudGetTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudGetTaskResponse
     *
     * @param CloudGetTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CloudGetTaskResponse
     */
    public function cloudGetTaskWithOptions($request, $runtime)
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
            'action' => 'CloudGetTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudGetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the configuration info of a single job based on the job ID.
     *
     * @param request - CloudGetTaskRequest
     *
     * @returns CloudGetTaskResponse
     *
     * @param CloudGetTaskRequest $request
     *
     * @return CloudGetTaskResponse
     */
    public function cloudGetTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudGetTaskWithOptions($request, $runtime);
    }

    /**
     * Imports phone numbers for the outbound call task.
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
     * Imports phone numbers for the outbound call task.
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
     * If the current call is at an await edge zone in voice navigation, this interface can interrupt the wait and execute to the next hop.
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
     * If the current call is at an await edge zone in voice navigation, this interface can interrupt the wait and execute to the next hop.
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
     * You can call this operation to query outbound groups.
     *
     * @param request - CloudListAgentGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudListAgentGroupResponse
     *
     * @param CloudListAgentGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CloudListAgentGroupResponse
     */
    public function cloudListAgentGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->gno) {
            @$query['Gno'] = $request->gno;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
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

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudListAgentGroup',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudListAgentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query outbound groups.
     *
     * @param request - CloudListAgentGroupRequest
     *
     * @returns CloudListAgentGroupResponse
     *
     * @param CloudListAgentGroupRequest $request
     *
     * @return CloudListAgentGroupResponse
     */
    public function cloudListAgentGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudListAgentGroupWithOptions($request, $runtime);
    }

    /**
     * Obtain agent phone info by agent number.
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
     * Obtain agent phone info by agent number.
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
     * You can call this operation to query the list of agents in an outbound group.
     *
     * @param request - CloudListAssignedAgentGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudListAssignedAgentGroupResponse
     *
     * @param CloudListAssignedAgentGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CloudListAssignedAgentGroupResponse
     */
    public function cloudListAssignedAgentGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cname) {
            @$query['Cname'] = $request->cname;
        }

        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->gno) {
            @$query['Gno'] = $request->gno;
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
            'action' => 'CloudListAssignedAgentGroup',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudListAssignedAgentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the list of agents in an outbound group.
     *
     * @param request - CloudListAssignedAgentGroupRequest
     *
     * @returns CloudListAssignedAgentGroupResponse
     *
     * @param CloudListAssignedAgentGroupRequest $request
     *
     * @return CloudListAssignedAgentGroupResponse
     */
    public function cloudListAssignedAgentGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudListAssignedAgentGroupWithOptions($request, $runtime);
    }

    /**
     * Queries user push logs.
     *
     * @param request - CloudListCurlLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudListCurlLogResponse
     *
     * @param CloudListCurlLogRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudListCurlLogResponse
     */
    public function cloudListCurlLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->result) {
            @$query['Result'] = $request->result;
        }

        if (null !== $request->retry) {
            @$query['Retry'] = $request->retry;
        }

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudListCurlLog',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudListCurlLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries user push logs.
     *
     * @param request - CloudListCurlLogRequest
     *
     * @returns CloudListCurlLogResponse
     *
     * @param CloudListCurlLogRequest $request
     *
     * @return CloudListCurlLogResponse
     */
    public function cloudListCurlLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudListCurlLogWithOptions($request, $runtime);
    }

    /**
     * Queries the list of time condition settings.
     *
     * @param request - CloudListEnterpriseTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudListEnterpriseTimeResponse
     *
     * @param CloudListEnterpriseTimeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CloudListEnterpriseTimeResponse
     */
    public function cloudListEnterpriseTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
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

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudListEnterpriseTime',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudListEnterpriseTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of time condition settings.
     *
     * @param request - CloudListEnterpriseTimeRequest
     *
     * @returns CloudListEnterpriseTimeResponse
     *
     * @param CloudListEnterpriseTimeRequest $request
     *
     * @return CloudListEnterpriseTimeResponse
     */
    public function cloudListEnterpriseTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudListEnterpriseTimeWithOptions($request, $runtime);
    }

    /**
     * Queries the extension info list.
     *
     * @param request - CloudListExtenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudListExtenResponse
     *
     * @param CloudListExtenRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CloudListExtenResponse
     */
    public function cloudListExtenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->areaCode) {
            @$query['AreaCode'] = $request->areaCode;
        }

        if (null !== $request->callPower) {
            @$query['CallPower'] = $request->callPower;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->exten) {
            @$query['Exten'] = $request->exten;
        }

        if (null !== $request->ibRecord) {
            @$query['IbRecord'] = $request->ibRecord;
        }

        if (null !== $request->isBind) {
            @$query['IsBind'] = $request->isBind;
        }

        if (null !== $request->isOb) {
            @$query['IsOb'] = $request->isOb;
        }

        if (null !== $request->jitterBuffer) {
            @$query['JitterBuffer'] = $request->jitterBuffer;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->obRecord) {
            @$query['ObRecord'] = $request->obRecord;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
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

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudListExten',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudListExtenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the extension info list.
     *
     * @param request - CloudListExtenRequest
     *
     * @returns CloudListExtenResponse
     *
     * @param CloudListExtenRequest $request
     *
     * @return CloudListExtenResponse
     */
    public function cloudListExten($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudListExtenWithOptions($request, $runtime);
    }

    /**
     * Queries the list of online agents.
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
     * Queries the list of online agents.
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
     * Queries the list of online agent info.
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
     * Queries the list of online agent info.
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
     * Queries the queue info list.
     *
     * @param request - CloudListQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudListQueueResponse
     *
     * @param CloudListQueueRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CloudListQueueResponse
     */
    public function cloudListQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
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

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudListQueue',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudListQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the queue info list.
     *
     * @param request - CloudListQueueRequest
     *
     * @returns CloudListQueueResponse
     *
     * @param CloudListQueueRequest $request
     *
     * @return CloudListQueueResponse
     */
    public function cloudListQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudListQueueWithOptions($request, $runtime);
    }

    /**
     * Obtains queue skill info.
     *
     * @param request - CloudListQueueSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudListQueueSkillResponse
     *
     * @param CloudListQueueSkillRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CloudListQueueSkillResponse
     */
    public function cloudListQueueSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudListQueueSkill',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudListQueueSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains queue skill info.
     *
     * @param request - CloudListQueueSkillRequest
     *
     * @returns CloudListQueueSkillResponse
     *
     * @param CloudListQueueSkillRequest $request
     *
     * @return CloudListQueueSkillResponse
     */
    public function cloudListQueueSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudListQueueSkillWithOptions($request, $runtime);
    }

    /**
     * Queries the skill info list.
     *
     * @param request - CloudListSkillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudListSkillResponse
     *
     * @param CloudListSkillRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CloudListSkillResponse
     */
    public function cloudListSkillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
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

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
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
            'action' => 'CloudListSkill',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudListSkillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the skill info list.
     *
     * @param request - CloudListSkillRequest
     *
     * @returns CloudListSkillResponse
     *
     * @param CloudListSkillRequest $request
     *
     * @return CloudListSkillResponse
     */
    public function cloudListSkill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudListSkillWithOptions($request, $runtime);
    }

    /**
     * Query the call job batch list info.
     *
     * @param request - CloudListTaskFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudListTaskFileResponse
     *
     * @param CloudListTaskFileRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CloudListTaskFileResponse
     */
    public function cloudListTaskFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
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

        if (null !== $request->start) {
            @$query['Start'] = $request->start;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
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
            'action' => 'CloudListTaskFile',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudListTaskFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the call job batch list info.
     *
     * @param request - CloudListTaskFileRequest
     *
     * @returns CloudListTaskFileResponse
     *
     * @param CloudListTaskFileRequest $request
     *
     * @return CloudListTaskFileResponse
     */
    public function cloudListTaskFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudListTaskFileWithOptions($request, $runtime);
    }

    /**
     * Call job monitoring.
     *
     * @param request - CloudMonitorTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudMonitorTaskResponse
     *
     * @param CloudMonitorTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CloudMonitorTaskResponse
     */
    public function cloudMonitorTaskWithOptions($request, $runtime)
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
            'action' => 'CloudMonitorTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudMonitorTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call job monitoring.
     *
     * @param request - CloudMonitorTaskRequest
     *
     * @returns CloudMonitorTaskResponse
     *
     * @param CloudMonitorTaskRequest $request
     *
     * @return CloudMonitorTaskResponse
     */
    public function cloudMonitorTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudMonitorTaskWithOptions($request, $runtime);
    }

    /**
     * Obtains preview outbound caller report data.
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
     * Obtains preview outbound caller report data.
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
     * Obtains a preview outbound report.
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
     * Obtains a preview outbound report.
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
     * Suspends a call job through this interface.
     *
     * @param request - CloudPauseTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudPauseTaskResponse
     *
     * @param CloudPauseTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CloudPauseTaskResponse
     */
    public function cloudPauseTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pauseDuration) {
            @$query['PauseDuration'] = $request->pauseDuration;
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
            'action' => 'CloudPauseTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudPauseTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Suspends a call job through this interface.
     *
     * @param request - CloudPauseTaskRequest
     *
     * @returns CloudPauseTaskResponse
     *
     * @param CloudPauseTaskRequest $request
     *
     * @return CloudPauseTaskResponse
     */
    public function cloudPauseTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudPauseTaskWithOptions($request, $runtime);
    }

    /**
     * When the agent is online, make a call through this interface.
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
     * When the agent is online, make a call through this interface.
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
     * Queries the list of agent details.
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
     * Queries the list of agent details.
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
     * Get all agent numbers and parameter messages.
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
     * Get all agent numbers and parameter messages.
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
     * Queries the info about the outbound group to which the agent belongs.
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
     * Queries the info about the outbound group to which the agent belongs.
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
     * Query agent skills by agent number.
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
     * Query agent skills by agent number.
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
     * Query incoming call records based on specified conditions.
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
     * Query incoming call records based on specified conditions.
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
     * Query agent outbound call records based on conditions.
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
     * Query agent outbound call records based on conditions.
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
     * Query the call record info of predictive outbound calls.
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
     * Query the call record info of predictive outbound calls.
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
     * Obtain the rasr info based on the uniqueId.
     *
     * @param request - CloudQueryRasrEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudQueryRasrEventResponse
     *
     * @param CloudQueryRasrEventRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CloudQueryRasrEventResponse
     */
    public function cloudQueryRasrEventWithOptions($request, $runtime)
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
            'action' => 'CloudQueryRasrEvent',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudQueryRasrEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the rasr info based on the uniqueId.
     *
     * @param request - CloudQueryRasrEventRequest
     *
     * @returns CloudQueryRasrEventResponse
     *
     * @param CloudQueryRasrEventRequest $request
     *
     * @return CloudQueryRasrEventResponse
     */
    public function cloudQueryRasrEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudQueryRasrEventWithOptions($request, $runtime);
    }

    /**
     * Queries call jobs. Supports conditional query.
     *
     * @param request - CloudQueryTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudQueryTaskResponse
     *
     * @param CloudQueryTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CloudQueryTaskResponse
     */
    public function cloudQueryTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoStart) {
            @$query['AutoStart'] = $request->autoStart;
        }

        if (null !== $request->autoStop) {
            @$query['AutoStop'] = $request->autoStop;
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

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
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

        if (null !== $request->timeType) {
            @$query['TimeType'] = $request->timeType;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CloudQueryTask',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudQueryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries call jobs. Supports conditional query.
     *
     * @param request - CloudQueryTaskRequest
     *
     * @returns CloudQueryTaskResponse
     *
     * @param CloudQueryTaskRequest $request
     *
     * @return CloudQueryTaskResponse
     */
    public function cloudQueryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudQueryTaskWithOptions($request, $runtime);
    }

    /**
     * Query webCall call record info through this interface.
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
     * Query webCall call record info through this interface.
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
     * Starts an outbound call task.
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
     * Starts an outbound call task.
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
     * Purges the attachment between an outbound call group and agents.
     *
     * @param request - CloudUnassignAgentGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloudUnassignAgentGroupResponse
     *
     * @param CloudUnassignAgentGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CloudUnassignAgentGroupResponse
     */
    public function cloudUnassignAgentGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cno) {
            @$query['Cno'] = $request->cno;
        }

        if (null !== $request->enterpriseId) {
            @$query['EnterpriseId'] = $request->enterpriseId;
        }

        if (null !== $request->gno) {
            @$query['Gno'] = $request->gno;
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
            'action' => 'CloudUnassignAgentGroup',
            'version' => '2017-05-25',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloudUnassignAgentGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Purges the attachment between an outbound call group and agents.
     *
     * @param request - CloudUnassignAgentGroupRequest
     *
     * @returns CloudUnassignAgentGroupResponse
     *
     * @param CloudUnassignAgentGroupRequest $request
     *
     * @return CloudUnassignAgentGroupResponse
     */
    public function cloudUnassignAgentGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloudUnassignAgentGroupWithOptions($request, $runtime);
    }

    /**
     * Update agent basic info.
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
     * Update agent basic info.
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
     * Modifies the basic information of an outbound call job.
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
     * Modifies the basic information of an outbound call job.
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
     * Through this interface, a third-party platform can send a call request to a hosted call center. The system calls the customer first and then the agent, and connects both parties.
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
     * Through this interface, a third-party platform can send a call request to a hosted call center. The system calls the customer first and then the agent, and connects both parties.
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
