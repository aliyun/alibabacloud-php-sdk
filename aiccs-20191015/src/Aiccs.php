<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddHotlineNumberRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddHotlineNumberResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddHotlineNumberShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddOuterAccountRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddOuterAccountResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddSkillGroupResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AiccsSmartCallOperateRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AiccsSmartCallOperateResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AiccsSmartCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AiccsSmartCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AnswerCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AnswerCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AttachTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AttachTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\BatchCreateQualityProjectsRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\BatchCreateQualityProjectsResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CancelTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ChangeChatAgentStatusRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ChangeChatAgentStatusResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ChangeQualityProjectStatusRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ChangeQualityProjectStatusResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAgentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAgentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateDepartmentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateDepartmentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateQualityProjectRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateQualityProjectResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateQualityRuleRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateQualityRuleResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateSkillGroupResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateThirdSsoAgentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateThirdSsoAgentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteAgentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteAgentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteDepartmentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteDepartmentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteHotlineNumberRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteHotlineNumberResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteOuterAccountRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteOuterAccountResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteQualityProjectRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteQualityProjectResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteQualityRuleRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteQualityRuleResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteSkillGroupResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DescribeRecordDataRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DescribeRecordDataResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\EditQualityProjectRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\EditQualityProjectResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\EditQualityRuleRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\EditQualityRuleResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\EditQualityRuleTagRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\EditQualityRuleTagResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\EncryptPhoneNumRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\EncryptPhoneNumResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\FetchCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\FetchCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\FinishHotlineServiceRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\FinishHotlineServiceResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GenerateWebSocketSignRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GenerateWebSocketSignResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentBasisStatusRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentBasisStatusResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentBasisStatusShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentByIdRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentByIdResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentDetailReportRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentDetailReportResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentDetailReportShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentIndexRealTimeRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentIndexRealTimeResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentServiceStatusRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentServiceStatusResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentServiceStatusShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentStatisticsRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentStatisticsResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentStatisticsShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAllDepartmentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAllDepartmentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetConfigNumListRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetConfigNumListResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetCustomerInfoRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetCustomerInfoResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetDepartmentalLatitudeAgentStatusRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetDepartmentalLatitudeAgentStatusResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetDepartmentalLatitudeAgentStatusShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetDepGroupTreeDataRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetDepGroupTreeDataResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineAgentDetailReportRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineAgentDetailReportResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineAgentDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineAgentDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineAgentStatusRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineAgentStatusResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineCallActionRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineCallActionResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineGroupDetailReportRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineGroupDetailReportResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineMessageLogRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineMessageLogResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineRuntimeInfoRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineRuntimeInfoResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineServiceStatisticsRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineServiceStatisticsResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineServiceStatisticsShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineWaitingNumberRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineWaitingNumberResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetIndexCurrentValueRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetIndexCurrentValueResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetInstanceListRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetInstanceListResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetMcuLvsIpRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetMcuLvsIpResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetNumLocationRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetNumLocationResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOnlineSeatInformationRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOnlineSeatInformationResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOnlineSeatInformationShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOnlineServiceVolumeRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOnlineServiceVolumeResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOnlineServiceVolumeShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOutbounNumListRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOutbounNumListResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectListRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectListResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectLogRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectLogResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityResultRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityResultResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleListRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleListResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleTagListRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleTagListResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQueueInformationRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQueueInformationResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQueueInformationShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetRecordDataRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetRecordDataResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetRtcTokenRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetRtcTokenResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSeatInformationRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSeatInformationResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSeatInformationShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupAgentStatusDetailsRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupAgentStatusDetailsResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupAgentStatusDetailsShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupAndAgentStatusSummaryRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupAndAgentStatusSummaryResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupAndAgentStatusSummaryShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupLatitudeStateRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupLatitudeStateResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupLatitudeStateShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupServiceCapabilityRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupServiceCapabilityResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupServiceCapabilityShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupServiceStatusRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupServiceStatusResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupServiceStatusShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupStatusTotalRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupStatusTotalResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetSkillGroupStatusTotalShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HangupCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HangupCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HangUpDoubleCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HangUpDoubleCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HangupThirdCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HangupThirdCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HoldCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HoldCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HotlineSessionQueryRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HotlineSessionQueryResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertTaskDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertTaskDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\JoinThirdCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\JoinThirdCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListAgentBySkillGroupIdRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListAgentBySkillGroupIdResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListAiccsRobotRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListAiccsRobotResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListChatRecordDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListChatRecordDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListDialogRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListDialogResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListHotlineRecordDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListHotlineRecordDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListHotlineRecordRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListHotlineRecordResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListOutboundPhoneNumberRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListOutboundPhoneNumberResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListOutboundStrategiesRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListOutboundStrategiesResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListOuterOrderedNumbersRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListOuterOrderedNumbersResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRobotCallDialogRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRobotCallDialogResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRolesRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRolesResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListSkillGroupResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\MakeCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\MakeCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\MakeDoubleCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\MakeDoubleCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineInQueueRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineInQueueResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QuerySkillGroupsRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QuerySkillGroupsResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTaskDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTaskDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTaskResultRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTaskResultResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTicketsRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTicketsResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTicketsShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\RemoveSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\RemoveSkillGroupResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ResetHotlineNumberRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ResetHotlineNumberResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ResetHotlineNumberShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\RestartOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\RestartOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\RobotCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\RobotCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SendCcoSmartCallOperateRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SendCcoSmartCallOperateResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SendCcoSmartCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SendCcoSmartCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SendHotlineHeartBeatRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SendHotlineHeartBeatResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartCallV2Request;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartCallV2Response;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartChatWorkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartChatWorkResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartHotlineServiceRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartHotlineServiceResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartMicroOutboundRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartMicroOutboundResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartTaskByAppRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartTaskByAppResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StopTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StopTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SuspendHotlineServiceRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SuspendHotlineServiceResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SuspendOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SuspendOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TransferCallToSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TransferCallToSkillGroupResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAgentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAgentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateDepartmentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateDepartmentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateOuterAccountRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateOuterAccountResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateSkillGroupResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Aiccs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aiccs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddHotlineNumberRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return AddHotlineNumberResponse
     */
    public function addHotlineNumberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddHotlineNumberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->outboundRangeList)) {
            $request->outboundRangeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outboundRangeList, 'OutboundRangeList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddHotlineNumberResponse::fromMap($this->doRPCRequest('AddHotlineNumber', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddHotlineNumberRequest $request
     *
     * @return AddHotlineNumberResponse
     */
    public function addHotlineNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addHotlineNumberWithOptions($request, $runtime);
    }

    /**
     * @param AddOuterAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddOuterAccountResponse
     */
    public function addOuterAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return AddOuterAccountResponse::fromMap($this->doRPCRequest('AddOuterAccount', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddOuterAccountRequest $request
     *
     * @return AddOuterAccountResponse
     */
    public function addOuterAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addOuterAccountWithOptions($request, $runtime);
    }

    /**
     * @param AddSkillGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddSkillGroupResponse
     */
    public function addSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return AddSkillGroupResponse::fromMap($this->doRPCRequest('AddSkillGroup', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddSkillGroupRequest $request
     *
     * @return AddSkillGroupResponse
     */
    public function addSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param AiccsSmartCallRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AiccsSmartCallResponse
     */
    public function aiccsSmartCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AiccsSmartCallResponse::fromMap($this->doRPCRequest('AiccsSmartCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AiccsSmartCallRequest $request
     *
     * @return AiccsSmartCallResponse
     */
    public function aiccsSmartCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aiccsSmartCallWithOptions($request, $runtime);
    }

    /**
     * @param AiccsSmartCallOperateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AiccsSmartCallOperateResponse
     */
    public function aiccsSmartCallOperateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AiccsSmartCallOperateResponse::fromMap($this->doRPCRequest('AiccsSmartCallOperate', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AiccsSmartCallOperateRequest $request
     *
     * @return AiccsSmartCallOperateResponse
     */
    public function aiccsSmartCallOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aiccsSmartCallOperateWithOptions($request, $runtime);
    }

    /**
     * @param AnswerCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AnswerCallResponse
     */
    public function answerCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AnswerCallResponse::fromMap($this->doRPCRequest('AnswerCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AnswerCallRequest $request
     *
     * @return AnswerCallResponse
     */
    public function answerCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->answerCallWithOptions($request, $runtime);
    }

    /**
     * @param AttachTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AttachTaskResponse
     */
    public function attachTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachTaskResponse::fromMap($this->doRPCRequest('AttachTask', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachTaskRequest $request
     *
     * @return AttachTaskResponse
     */
    public function attachTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachTaskWithOptions($request, $runtime);
    }

    /**
     * @param BatchCreateQualityProjectsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchCreateQualityProjectsResponse
     */
    public function batchCreateQualityProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchCreateQualityProjectsResponse::fromMap($this->doRPCRequest('BatchCreateQualityProjects', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchCreateQualityProjectsRequest $request
     *
     * @return BatchCreateQualityProjectsResponse
     */
    public function batchCreateQualityProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateQualityProjectsWithOptions($request, $runtime);
    }

    /**
     * @param CancelTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelTaskResponse
     */
    public function cancelTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelTaskResponse::fromMap($this->doRPCRequest('CancelTask', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelTaskRequest $request
     *
     * @return CancelTaskResponse
     */
    public function cancelTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelTaskWithOptions($request, $runtime);
    }

    /**
     * @param ChangeChatAgentStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ChangeChatAgentStatusResponse
     */
    public function changeChatAgentStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeChatAgentStatusResponse::fromMap($this->doRPCRequest('ChangeChatAgentStatus', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeChatAgentStatusRequest $request
     *
     * @return ChangeChatAgentStatusResponse
     */
    public function changeChatAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeChatAgentStatusWithOptions($request, $runtime);
    }

    /**
     * @param ChangeQualityProjectStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ChangeQualityProjectStatusResponse
     */
    public function changeQualityProjectStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ChangeQualityProjectStatusResponse::fromMap($this->doRPCRequest('ChangeQualityProjectStatus', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ChangeQualityProjectStatusRequest $request
     *
     * @return ChangeQualityProjectStatusResponse
     */
    public function changeQualityProjectStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeQualityProjectStatusWithOptions($request, $runtime);
    }

    /**
     * @param CreateAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAgentResponse
     */
    public function createAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAgentResponse::fromMap($this->doRPCRequest('CreateAgent', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAgentRequest $request
     *
     * @return CreateAgentResponse
     */
    public function createAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgentWithOptions($request, $runtime);
    }

    /**
     * @param CreateDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDepartmentResponse
     */
    public function createDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDepartmentResponse::fromMap($this->doRPCRequest('CreateDepartment', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDepartmentRequest $request
     *
     * @return CreateDepartmentResponse
     */
    public function createDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param CreateOutboundTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateOutboundTaskResponse
     */
    public function createOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateOutboundTaskResponse::fromMap($this->doRPCRequest('CreateOutboundTask', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateOutboundTaskRequest $request
     *
     * @return CreateOutboundTaskResponse
     */
    public function createOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateQualityProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateQualityProjectResponse
     */
    public function createQualityProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateQualityProjectResponse::fromMap($this->doRPCRequest('CreateQualityProject', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateQualityProjectRequest $request
     *
     * @return CreateQualityProjectResponse
     */
    public function createQualityProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateQualityRuleResponse
     */
    public function createQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateQualityRuleResponse::fromMap($this->doRPCRequest('CreateQualityRule', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateQualityRuleRequest $request
     *
     * @return CreateQualityRuleResponse
     */
    public function createQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSkillGroupResponse
     */
    public function createSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSkillGroupResponse::fromMap($this->doRPCRequest('CreateSkillGroup', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSkillGroupRequest $request
     *
     * @return CreateSkillGroupResponse
     */
    public function createSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTaskResponse::fromMap($this->doRPCRequest('CreateTask', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTaskRequest $request
     *
     * @return CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateThirdSsoAgentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateThirdSsoAgentResponse
     */
    public function createThirdSsoAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateThirdSsoAgentResponse::fromMap($this->doRPCRequest('CreateThirdSsoAgent', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateThirdSsoAgentRequest $request
     *
     * @return CreateThirdSsoAgentResponse
     */
    public function createThirdSsoAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createThirdSsoAgentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DeleteAgentResponse::fromMap($this->doRPCRequest('DeleteAgent', '2019-10-15', 'HTTPS', 'DELETE', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAgentRequest $request
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAgentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDepartmentResponse
     */
    public function deleteDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDepartmentResponse::fromMap($this->doRPCRequest('DeleteDepartment', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDepartmentRequest $request
     *
     * @return DeleteDepartmentResponse
     */
    public function deleteDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param DeleteHotlineNumberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteHotlineNumberResponse
     */
    public function deleteHotlineNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteHotlineNumberResponse::fromMap($this->doRPCRequest('DeleteHotlineNumber', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteHotlineNumberRequest $request
     *
     * @return DeleteHotlineNumberResponse
     */
    public function deleteHotlineNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHotlineNumberWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOutboundTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteOutboundTaskResponse
     */
    public function deleteOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteOutboundTaskResponse::fromMap($this->doRPCRequest('DeleteOutboundTask', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteOutboundTaskRequest $request
     *
     * @return DeleteOutboundTaskResponse
     */
    public function deleteOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOuterAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteOuterAccountResponse
     */
    public function deleteOuterAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DeleteOuterAccountResponse::fromMap($this->doRPCRequest('DeleteOuterAccount', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteOuterAccountRequest $request
     *
     * @return DeleteOuterAccountResponse
     */
    public function deleteOuterAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOuterAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualityProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteQualityProjectResponse
     */
    public function deleteQualityProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteQualityProjectResponse::fromMap($this->doRPCRequest('DeleteQualityProject', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteQualityProjectRequest $request
     *
     * @return DeleteQualityProjectResponse
     */
    public function deleteQualityProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteQualityRuleResponse
     */
    public function deleteQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteQualityRuleResponse::fromMap($this->doRPCRequest('DeleteQualityRule', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteQualityRuleRequest $request
     *
     * @return DeleteQualityRuleResponse
     */
    public function deleteQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSkillGroupResponse
     */
    public function deleteSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DeleteSkillGroupResponse::fromMap($this->doRPCRequest('DeleteSkillGroup', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSkillGroupRequest $request
     *
     * @return DeleteSkillGroupResponse
     */
    public function deleteSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSkillGroupWithOptions($request, $runtime);
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

        return DescribeRecordDataResponse::fromMap($this->doRPCRequest('DescribeRecordData', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param EditQualityProjectRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EditQualityProjectResponse
     */
    public function editQualityProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EditQualityProjectResponse::fromMap($this->doRPCRequest('EditQualityProject', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EditQualityProjectRequest $request
     *
     * @return EditQualityProjectResponse
     */
    public function editQualityProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editQualityProjectWithOptions($request, $runtime);
    }

    /**
     * @param EditQualityRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EditQualityRuleResponse
     */
    public function editQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EditQualityRuleResponse::fromMap($this->doRPCRequest('EditQualityRule', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EditQualityRuleRequest $request
     *
     * @return EditQualityRuleResponse
     */
    public function editQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param EditQualityRuleTagRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EditQualityRuleTagResponse
     */
    public function editQualityRuleTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EditQualityRuleTagResponse::fromMap($this->doRPCRequest('EditQualityRuleTag', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EditQualityRuleTagRequest $request
     *
     * @return EditQualityRuleTagResponse
     */
    public function editQualityRuleTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editQualityRuleTagWithOptions($request, $runtime);
    }

    /**
     * @param EncryptPhoneNumRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EncryptPhoneNumResponse
     */
    public function encryptPhoneNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return EncryptPhoneNumResponse::fromMap($this->doRPCRequest('EncryptPhoneNum', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EncryptPhoneNumRequest $request
     *
     * @return EncryptPhoneNumResponse
     */
    public function encryptPhoneNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->encryptPhoneNumWithOptions($request, $runtime);
    }

    /**
     * @param FetchCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return FetchCallResponse
     */
    public function fetchCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FetchCallResponse::fromMap($this->doRPCRequest('FetchCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FetchCallRequest $request
     *
     * @return FetchCallResponse
     */
    public function fetchCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchCallWithOptions($request, $runtime);
    }

    /**
     * @param FinishHotlineServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return FinishHotlineServiceResponse
     */
    public function finishHotlineServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FinishHotlineServiceResponse::fromMap($this->doRPCRequest('FinishHotlineService', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FinishHotlineServiceRequest $request
     *
     * @return FinishHotlineServiceResponse
     */
    public function finishHotlineService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->finishHotlineServiceWithOptions($request, $runtime);
    }

    /**
     * @param GenerateWebSocketSignRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateWebSocketSignResponse
     */
    public function generateWebSocketSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateWebSocketSignResponse::fromMap($this->doRPCRequest('GenerateWebSocketSign', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateWebSocketSignRequest $request
     *
     * @return GenerateWebSocketSignResponse
     */
    public function generateWebSocketSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateWebSocketSignWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetAgentResponse
     */
    public function getAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAgentResponse::fromMap($this->doRPCRequest('GetAgent', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAgentRequest $request
     *
     * @return GetAgentResponse
     */
    public function getAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentBasisStatusRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return GetAgentBasisStatusResponse
     */
    public function getAgentBasisStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetAgentBasisStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->agentIds)) {
            $request->agentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAgentBasisStatusResponse::fromMap($this->doRPCRequest('GetAgentBasisStatus', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAgentBasisStatusRequest $request
     *
     * @return GetAgentBasisStatusResponse
     */
    public function getAgentBasisStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentBasisStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentByIdRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAgentByIdResponse
     */
    public function getAgentByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAgentByIdResponse::fromMap($this->doRPCRequest('GetAgentById', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAgentByIdRequest $request
     *
     * @return GetAgentByIdResponse
     */
    public function getAgentById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentDetailReportRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GetAgentDetailReportResponse
     */
    public function getAgentDetailReportWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetAgentDetailReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->agentIds)) {
            $request->agentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAgentDetailReportResponse::fromMap($this->doRPCRequest('GetAgentDetailReport', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAgentDetailReportRequest $request
     *
     * @return GetAgentDetailReportResponse
     */
    public function getAgentDetailReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentDetailReportWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentIndexRealTimeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAgentIndexRealTimeResponse
     */
    public function getAgentIndexRealTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAgentIndexRealTimeResponse::fromMap($this->doRPCRequest('GetAgentIndexRealTime', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAgentIndexRealTimeRequest $request
     *
     * @return GetAgentIndexRealTimeResponse
     */
    public function getAgentIndexRealTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentIndexRealTimeWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentServiceStatusRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return GetAgentServiceStatusResponse
     */
    public function getAgentServiceStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetAgentServiceStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->agentIds)) {
            $request->agentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAgentServiceStatusResponse::fromMap($this->doRPCRequest('GetAgentServiceStatus', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAgentServiceStatusRequest $request
     *
     * @return GetAgentServiceStatusResponse
     */
    public function getAgentServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentStatisticsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return GetAgentStatisticsResponse
     */
    public function getAgentStatisticsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetAgentStatisticsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->agentIds)) {
            $request->agentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAgentStatisticsResponse::fromMap($this->doRPCRequest('GetAgentStatistics', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAgentStatisticsRequest $request
     *
     * @return GetAgentStatisticsResponse
     */
    public function getAgentStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetAllDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAllDepartmentResponse
     */
    public function getAllDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAllDepartmentResponse::fromMap($this->doRPCRequest('GetAllDepartment', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAllDepartmentRequest $request
     *
     * @return GetAllDepartmentResponse
     */
    public function getAllDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param GetConfigNumListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetConfigNumListResponse
     */
    public function getConfigNumListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetConfigNumListResponse::fromMap($this->doRPCRequest('GetConfigNumList', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetConfigNumListRequest $request
     *
     * @return GetConfigNumListResponse
     */
    public function getConfigNumList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigNumListWithOptions($request, $runtime);
    }

    /**
     * @param GetCustomerInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCustomerInfoResponse
     */
    public function getCustomerInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetCustomerInfoResponse::fromMap($this->doRPCRequest('GetCustomerInfo', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCustomerInfoRequest $request
     *
     * @return GetCustomerInfoResponse
     */
    public function getCustomerInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetDepartmentalLatitudeAgentStatusRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return GetDepartmentalLatitudeAgentStatusResponse
     */
    public function getDepartmentalLatitudeAgentStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetDepartmentalLatitudeAgentStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetDepartmentalLatitudeAgentStatusResponse::fromMap($this->doRPCRequest('GetDepartmentalLatitudeAgentStatus', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDepartmentalLatitudeAgentStatusRequest $request
     *
     * @return GetDepartmentalLatitudeAgentStatusResponse
     */
    public function getDepartmentalLatitudeAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDepartmentalLatitudeAgentStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetDepGroupTreeDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDepGroupTreeDataResponse
     */
    public function getDepGroupTreeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetDepGroupTreeDataResponse::fromMap($this->doRPCRequest('GetDepGroupTreeData', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDepGroupTreeDataRequest $request
     *
     * @return GetDepGroupTreeDataResponse
     */
    public function getDepGroupTreeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDepGroupTreeDataWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineAgentDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetHotlineAgentDetailResponse
     */
    public function getHotlineAgentDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetHotlineAgentDetailResponse::fromMap($this->doRPCRequest('GetHotlineAgentDetail', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineAgentDetailRequest $request
     *
     * @return GetHotlineAgentDetailResponse
     */
    public function getHotlineAgentDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineAgentDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineAgentDetailReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHotlineAgentDetailReportResponse
     */
    public function getHotlineAgentDetailReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHotlineAgentDetailReportResponse::fromMap($this->doRPCRequest('GetHotlineAgentDetailReport', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineAgentDetailReportRequest $request
     *
     * @return GetHotlineAgentDetailReportResponse
     */
    public function getHotlineAgentDetailReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineAgentDetailReportWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineAgentStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetHotlineAgentStatusResponse
     */
    public function getHotlineAgentStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHotlineAgentStatusResponse::fromMap($this->doRPCRequest('GetHotlineAgentStatus', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineAgentStatusRequest $request
     *
     * @return GetHotlineAgentStatusResponse
     */
    public function getHotlineAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineAgentStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineCallActionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetHotlineCallActionResponse
     */
    public function getHotlineCallActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHotlineCallActionResponse::fromMap($this->doRPCRequest('GetHotlineCallAction', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineCallActionRequest $request
     *
     * @return GetHotlineCallActionResponse
     */
    public function getHotlineCallAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineCallActionWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineGroupDetailReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHotlineGroupDetailReportResponse
     */
    public function getHotlineGroupDetailReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetHotlineGroupDetailReportResponse::fromMap($this->doRPCRequest('GetHotlineGroupDetailReport', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineGroupDetailReportRequest $request
     *
     * @return GetHotlineGroupDetailReportResponse
     */
    public function getHotlineGroupDetailReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineGroupDetailReportWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineMessageLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetHotlineMessageLogResponse
     */
    public function getHotlineMessageLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetHotlineMessageLogResponse::fromMap($this->doRPCRequest('GetHotlineMessageLog', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineMessageLogRequest $request
     *
     * @return GetHotlineMessageLogResponse
     */
    public function getHotlineMessageLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineMessageLogWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineRuntimeInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetHotlineRuntimeInfoResponse
     */
    public function getHotlineRuntimeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetHotlineRuntimeInfoResponse::fromMap($this->doRPCRequest('GetHotlineRuntimeInfo', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineRuntimeInfoRequest $request
     *
     * @return GetHotlineRuntimeInfoResponse
     */
    public function getHotlineRuntimeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineRuntimeInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineServiceStatisticsRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHotlineServiceStatisticsResponse
     */
    public function getHotlineServiceStatisticsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetHotlineServiceStatisticsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->agentIds)) {
            $request->agentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->groupIds)) {
            $request->groupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetHotlineServiceStatisticsResponse::fromMap($this->doRPCRequest('GetHotlineServiceStatistics', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineServiceStatisticsRequest $request
     *
     * @return GetHotlineServiceStatisticsResponse
     */
    public function getHotlineServiceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineServiceStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineWaitingNumberRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetHotlineWaitingNumberResponse
     */
    public function getHotlineWaitingNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetHotlineWaitingNumberResponse::fromMap($this->doRPCRequest('GetHotlineWaitingNumber', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetHotlineWaitingNumberRequest $request
     *
     * @return GetHotlineWaitingNumberResponse
     */
    public function getHotlineWaitingNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineWaitingNumberWithOptions($request, $runtime);
    }

    /**
     * @param GetIndexCurrentValueRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetIndexCurrentValueResponse
     */
    public function getIndexCurrentValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetIndexCurrentValueResponse::fromMap($this->doRPCRequest('GetIndexCurrentValue', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetIndexCurrentValueRequest $request
     *
     * @return GetIndexCurrentValueResponse
     */
    public function getIndexCurrentValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIndexCurrentValueWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetInstanceListResponse
     */
    public function getInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetInstanceListResponse::fromMap($this->doRPCRequest('GetInstanceList', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetInstanceListRequest $request
     *
     * @return GetInstanceListResponse
     */
    public function getInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceListWithOptions($request, $runtime);
    }

    /**
     * @param GetMcuLvsIpRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetMcuLvsIpResponse
     */
    public function getMcuLvsIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetMcuLvsIpResponse::fromMap($this->doRPCRequest('GetMcuLvsIp', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMcuLvsIpRequest $request
     *
     * @return GetMcuLvsIpResponse
     */
    public function getMcuLvsIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcuLvsIpWithOptions($request, $runtime);
    }

    /**
     * @param GetNumLocationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetNumLocationResponse
     */
    public function getNumLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetNumLocationResponse::fromMap($this->doRPCRequest('GetNumLocation', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetNumLocationRequest $request
     *
     * @return GetNumLocationResponse
     */
    public function getNumLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNumLocationWithOptions($request, $runtime);
    }

    /**
     * @param GetOnlineSeatInformationRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return GetOnlineSeatInformationResponse
     */
    public function getOnlineSeatInformationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetOnlineSeatInformationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->agentIds)) {
            $request->agentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetOnlineSeatInformationResponse::fromMap($this->doRPCRequest('GetOnlineSeatInformation', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOnlineSeatInformationRequest $request
     *
     * @return GetOnlineSeatInformationResponse
     */
    public function getOnlineSeatInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOnlineSeatInformationWithOptions($request, $runtime);
    }

    /**
     * @param GetOnlineServiceVolumeRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return GetOnlineServiceVolumeResponse
     */
    public function getOnlineServiceVolumeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetOnlineServiceVolumeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->agentIds)) {
            $request->agentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->groupIds)) {
            $request->groupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetOnlineServiceVolumeResponse::fromMap($this->doRPCRequest('GetOnlineServiceVolume', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOnlineServiceVolumeRequest $request
     *
     * @return GetOnlineServiceVolumeResponse
     */
    public function getOnlineServiceVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOnlineServiceVolumeWithOptions($request, $runtime);
    }

    /**
     * @param GetOutbounNumListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetOutbounNumListResponse
     */
    public function getOutbounNumListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetOutbounNumListResponse::fromMap($this->doRPCRequest('GetOutbounNumList', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetOutbounNumListRequest $request
     *
     * @return GetOutbounNumListResponse
     */
    public function getOutbounNumList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOutbounNumListWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityProjectDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetQualityProjectDetailResponse
     */
    public function getQualityProjectDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQualityProjectDetailResponse::fromMap($this->doRPCRequest('GetQualityProjectDetail', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQualityProjectDetailRequest $request
     *
     * @return GetQualityProjectDetailResponse
     */
    public function getQualityProjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityProjectDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityProjectListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetQualityProjectListResponse
     */
    public function getQualityProjectListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQualityProjectListResponse::fromMap($this->doRPCRequest('GetQualityProjectList', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQualityProjectListRequest $request
     *
     * @return GetQualityProjectListResponse
     */
    public function getQualityProjectList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityProjectListWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityProjectLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetQualityProjectLogResponse
     */
    public function getQualityProjectLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQualityProjectLogResponse::fromMap($this->doRPCRequest('GetQualityProjectLog', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQualityProjectLogRequest $request
     *
     * @return GetQualityProjectLogResponse
     */
    public function getQualityProjectLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityProjectLogWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityResultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetQualityResultResponse
     */
    public function getQualityResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQualityResultResponse::fromMap($this->doRPCRequest('GetQualityResult', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQualityResultRequest $request
     *
     * @return GetQualityResultResponse
     */
    public function getQualityResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityResultWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityRuleDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetQualityRuleDetailResponse
     */
    public function getQualityRuleDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQualityRuleDetailResponse::fromMap($this->doRPCRequest('GetQualityRuleDetail', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQualityRuleDetailRequest $request
     *
     * @return GetQualityRuleDetailResponse
     */
    public function getQualityRuleDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityRuleDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityRuleListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetQualityRuleListResponse
     */
    public function getQualityRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQualityRuleListResponse::fromMap($this->doRPCRequest('GetQualityRuleList', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQualityRuleListRequest $request
     *
     * @return GetQualityRuleListResponse
     */
    public function getQualityRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityRuleListWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityRuleTagListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetQualityRuleTagListResponse
     */
    public function getQualityRuleTagListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetQualityRuleTagListResponse::fromMap($this->doRPCRequest('GetQualityRuleTagList', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQualityRuleTagListRequest $request
     *
     * @return GetQualityRuleTagListResponse
     */
    public function getQualityRuleTagList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityRuleTagListWithOptions($request, $runtime);
    }

    /**
     * @param GetQueueInformationRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return GetQueueInformationResponse
     */
    public function getQueueInformationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetQueueInformationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->groupIds)) {
            $request->groupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetQueueInformationResponse::fromMap($this->doRPCRequest('GetQueueInformation', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetQueueInformationRequest $request
     *
     * @return GetQueueInformationResponse
     */
    public function getQueueInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueueInformationWithOptions($request, $runtime);
    }

    /**
     * @param GetRecordDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRecordDataResponse
     */
    public function getRecordDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetRecordDataResponse::fromMap($this->doRPCRequest('GetRecordData', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetRecordDataRequest $request
     *
     * @return GetRecordDataResponse
     */
    public function getRecordData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordDataWithOptions($request, $runtime);
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
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetRtcTokenResponse::fromMap($this->doRPCRequest('GetRtcToken', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @param GetSeatInformationRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return GetSeatInformationResponse
     */
    public function getSeatInformationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSeatInformationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'depIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetSeatInformationResponse::fromMap($this->doRPCRequest('GetSeatInformation', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSeatInformationRequest $request
     *
     * @return GetSeatInformationResponse
     */
    public function getSeatInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSeatInformationWithOptions($request, $runtime);
    }

    /**
     * @param GetSkillGroupAgentStatusDetailsRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return GetSkillGroupAgentStatusDetailsResponse
     */
    public function getSkillGroupAgentStatusDetailsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSkillGroupAgentStatusDetailsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->groupIds)) {
            $request->groupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetSkillGroupAgentStatusDetailsResponse::fromMap($this->doRPCRequest('GetSkillGroupAgentStatusDetails', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSkillGroupAgentStatusDetailsRequest $request
     *
     * @return GetSkillGroupAgentStatusDetailsResponse
     */
    public function getSkillGroupAgentStatusDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupAgentStatusDetailsWithOptions($request, $runtime);
    }

    /**
     * @param GetSkillGroupAndAgentStatusSummaryRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return GetSkillGroupAndAgentStatusSummaryResponse
     */
    public function getSkillGroupAndAgentStatusSummaryWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSkillGroupAndAgentStatusSummaryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->groupIds)) {
            $request->groupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetSkillGroupAndAgentStatusSummaryResponse::fromMap($this->doRPCRequest('GetSkillGroupAndAgentStatusSummary', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSkillGroupAndAgentStatusSummaryRequest $request
     *
     * @return GetSkillGroupAndAgentStatusSummaryResponse
     */
    public function getSkillGroupAndAgentStatusSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupAndAgentStatusSummaryWithOptions($request, $runtime);
    }

    /**
     * @param GetSkillGroupLatitudeStateRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return GetSkillGroupLatitudeStateResponse
     */
    public function getSkillGroupLatitudeStateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSkillGroupLatitudeStateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->groupIds)) {
            $request->groupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetSkillGroupLatitudeStateResponse::fromMap($this->doRPCRequest('GetSkillGroupLatitudeState', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSkillGroupLatitudeStateRequest $request
     *
     * @return GetSkillGroupLatitudeStateResponse
     */
    public function getSkillGroupLatitudeState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupLatitudeStateWithOptions($request, $runtime);
    }

    /**
     * @param GetSkillGroupServiceCapabilityRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return GetSkillGroupServiceCapabilityResponse
     */
    public function getSkillGroupServiceCapabilityWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSkillGroupServiceCapabilityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->groupIds)) {
            $request->groupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetSkillGroupServiceCapabilityResponse::fromMap($this->doRPCRequest('GetSkillGroupServiceCapability', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSkillGroupServiceCapabilityRequest $request
     *
     * @return GetSkillGroupServiceCapabilityResponse
     */
    public function getSkillGroupServiceCapability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupServiceCapabilityWithOptions($request, $runtime);
    }

    /**
     * @param GetSkillGroupServiceStatusRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return GetSkillGroupServiceStatusResponse
     */
    public function getSkillGroupServiceStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSkillGroupServiceStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->agentIds)) {
            $request->agentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->groupIds)) {
            $request->groupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetSkillGroupServiceStatusResponse::fromMap($this->doRPCRequest('GetSkillGroupServiceStatus', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSkillGroupServiceStatusRequest $request
     *
     * @return GetSkillGroupServiceStatusResponse
     */
    public function getSkillGroupServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetSkillGroupStatusTotalRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return GetSkillGroupStatusTotalResponse
     */
    public function getSkillGroupStatusTotalWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSkillGroupStatusTotalShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->agentIds)) {
            $request->agentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->depIds)) {
            $request->depIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }
        if (!Utils::isUnset($tmpReq->groupIds)) {
            $request->groupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetSkillGroupStatusTotalResponse::fromMap($this->doRPCRequest('GetSkillGroupStatusTotal', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSkillGroupStatusTotalRequest $request
     *
     * @return GetSkillGroupStatusTotalResponse
     */
    public function getSkillGroupStatusTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupStatusTotalWithOptions($request, $runtime);
    }

    /**
     * @param HangupCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return HangupCallResponse
     */
    public function hangupCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HangupCallResponse::fromMap($this->doRPCRequest('HangupCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param HangupCallRequest $request
     *
     * @return HangupCallResponse
     */
    public function hangupCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hangupCallWithOptions($request, $runtime);
    }

    /**
     * @param HangUpDoubleCallRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return HangUpDoubleCallResponse
     */
    public function hangUpDoubleCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HangUpDoubleCallResponse::fromMap($this->doRPCRequest('HangUpDoubleCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param HangUpDoubleCallRequest $request
     *
     * @return HangUpDoubleCallResponse
     */
    public function hangUpDoubleCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hangUpDoubleCallWithOptions($request, $runtime);
    }

    /**
     * @param HangupThirdCallRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return HangupThirdCallResponse
     */
    public function hangupThirdCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HangupThirdCallResponse::fromMap($this->doRPCRequest('HangupThirdCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param HangupThirdCallRequest $request
     *
     * @return HangupThirdCallResponse
     */
    public function hangupThirdCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hangupThirdCallWithOptions($request, $runtime);
    }

    /**
     * @param HoldCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return HoldCallResponse
     */
    public function holdCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HoldCallResponse::fromMap($this->doRPCRequest('HoldCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param HoldCallRequest $request
     *
     * @return HoldCallResponse
     */
    public function holdCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->holdCallWithOptions($request, $runtime);
    }

    /**
     * @param HotlineSessionQueryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return HotlineSessionQueryResponse
     */
    public function hotlineSessionQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return HotlineSessionQueryResponse::fromMap($this->doRPCRequest('HotlineSessionQuery', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param HotlineSessionQueryRequest $request
     *
     * @return HotlineSessionQueryResponse
     */
    public function hotlineSessionQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hotlineSessionQueryWithOptions($request, $runtime);
    }

    /**
     * @param InsertTaskDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return InsertTaskDetailResponse
     */
    public function insertTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InsertTaskDetailResponse::fromMap($this->doRPCRequest('InsertTaskDetail', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InsertTaskDetailRequest $request
     *
     * @return InsertTaskDetailResponse
     */
    public function insertTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param JoinThirdCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return JoinThirdCallResponse
     */
    public function joinThirdCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return JoinThirdCallResponse::fromMap($this->doRPCRequest('JoinThirdCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param JoinThirdCallRequest $request
     *
     * @return JoinThirdCallResponse
     */
    public function joinThirdCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinThirdCallWithOptions($request, $runtime);
    }

    /**
     * @param ListAgentBySkillGroupIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAgentBySkillGroupIdResponse
     */
    public function listAgentBySkillGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAgentBySkillGroupIdResponse::fromMap($this->doRPCRequest('ListAgentBySkillGroupId', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAgentBySkillGroupIdRequest $request
     *
     * @return ListAgentBySkillGroupIdResponse
     */
    public function listAgentBySkillGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentBySkillGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param ListAiccsRobotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAiccsRobotResponse
     */
    public function listAiccsRobotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAiccsRobotResponse::fromMap($this->doRPCRequest('ListAiccsRobot', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAiccsRobotRequest $request
     *
     * @return ListAiccsRobotResponse
     */
    public function listAiccsRobot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAiccsRobotWithOptions($request, $runtime);
    }

    /**
     * @param ListChatRecordDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListChatRecordDetailResponse
     */
    public function listChatRecordDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListChatRecordDetailResponse::fromMap($this->doRPCRequest('ListChatRecordDetail', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListChatRecordDetailRequest $request
     *
     * @return ListChatRecordDetailResponse
     */
    public function listChatRecordDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChatRecordDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListDialogRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListDialogResponse
     */
    public function listDialogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDialogResponse::fromMap($this->doRPCRequest('ListDialog', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDialogRequest $request
     *
     * @return ListDialogResponse
     */
    public function listDialog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDialogWithOptions($request, $runtime);
    }

    /**
     * @param ListHotlineRecordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListHotlineRecordResponse
     */
    public function listHotlineRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListHotlineRecordResponse::fromMap($this->doRPCRequest('ListHotlineRecord', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListHotlineRecordRequest $request
     *
     * @return ListHotlineRecordResponse
     */
    public function listHotlineRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotlineRecordWithOptions($request, $runtime);
    }

    /**
     * @param ListHotlineRecordDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListHotlineRecordDetailResponse
     */
    public function listHotlineRecordDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListHotlineRecordDetailResponse::fromMap($this->doRPCRequest('ListHotlineRecordDetail', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListHotlineRecordDetailRequest $request
     *
     * @return ListHotlineRecordDetailResponse
     */
    public function listHotlineRecordDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotlineRecordDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListOutboundPhoneNumberRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOutboundPhoneNumberResponse
     */
    public function listOutboundPhoneNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListOutboundPhoneNumberResponse::fromMap($this->doRPCRequest('ListOutboundPhoneNumber', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOutboundPhoneNumberRequest $request
     *
     * @return ListOutboundPhoneNumberResponse
     */
    public function listOutboundPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOutboundPhoneNumberWithOptions($request, $runtime);
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

        return ListOutboundStrategiesResponse::fromMap($this->doRPCRequest('ListOutboundStrategies', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListOuterOrderedNumbersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOuterOrderedNumbersResponse
     */
    public function listOuterOrderedNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListOuterOrderedNumbersResponse::fromMap($this->doRPCRequest('ListOuterOrderedNumbers', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListOuterOrderedNumbersRequest $request
     *
     * @return ListOuterOrderedNumbersResponse
     */
    public function listOuterOrderedNumbers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOuterOrderedNumbersWithOptions($request, $runtime);
    }

    /**
     * @param ListRobotCallDialogRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListRobotCallDialogResponse
     */
    public function listRobotCallDialogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRobotCallDialogResponse::fromMap($this->doRPCRequest('ListRobotCallDialog', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRobotCallDialogRequest $request
     *
     * @return ListRobotCallDialogResponse
     */
    public function listRobotCallDialog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRobotCallDialogWithOptions($request, $runtime);
    }

    /**
     * @param ListRolesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListRolesResponse::fromMap($this->doRPCRequest('ListRoles', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRolesRequest $request
     *
     * @return ListRolesResponse
     */
    public function listRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRolesWithOptions($request, $runtime);
    }

    /**
     * @param ListSkillGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListSkillGroupResponse
     */
    public function listSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListSkillGroupResponse::fromMap($this->doRPCRequest('ListSkillGroup', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSkillGroupRequest $request
     *
     * @return ListSkillGroupResponse
     */
    public function listSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTaskResponse
     */
    public function listTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTaskResponse::fromMap($this->doRPCRequest('ListTask', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTaskRequest $request
     *
     * @return ListTaskResponse
     */
    public function listTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskWithOptions($request, $runtime);
    }

    /**
     * @param ListTaskDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTaskDetailResponse
     */
    public function listTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTaskDetailResponse::fromMap($this->doRPCRequest('ListTaskDetail', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTaskDetailRequest $request
     *
     * @return ListTaskDetailResponse
     */
    public function listTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param MakeCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MakeCallResponse
     */
    public function makeCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MakeCallResponse::fromMap($this->doRPCRequest('MakeCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MakeCallRequest $request
     *
     * @return MakeCallResponse
     */
    public function makeCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->makeCallWithOptions($request, $runtime);
    }

    /**
     * @param MakeDoubleCallRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return MakeDoubleCallResponse
     */
    public function makeDoubleCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MakeDoubleCallResponse::fromMap($this->doRPCRequest('MakeDoubleCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MakeDoubleCallRequest $request
     *
     * @return MakeDoubleCallResponse
     */
    public function makeDoubleCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->makeDoubleCallWithOptions($request, $runtime);
    }

    /**
     * @param QueryHotlineInQueueRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryHotlineInQueueResponse
     */
    public function queryHotlineInQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return QueryHotlineInQueueResponse::fromMap($this->doRPCRequest('QueryHotlineInQueue', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryHotlineInQueueRequest $request
     *
     * @return QueryHotlineInQueueResponse
     */
    public function queryHotlineInQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHotlineInQueueWithOptions($request, $runtime);
    }

    /**
     * @param QueryHotlineNumberRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return QueryHotlineNumberResponse
     */
    public function queryHotlineNumberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryHotlineNumberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->groupIds)) {
            $request->groupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return QueryHotlineNumberResponse::fromMap($this->doRPCRequest('QueryHotlineNumber', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryHotlineNumberRequest $request
     *
     * @return QueryHotlineNumberResponse
     */
    public function queryHotlineNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHotlineNumberWithOptions($request, $runtime);
    }

    /**
     * @param QueryOutboundTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryOutboundTaskResponse
     */
    public function queryOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryOutboundTaskResponse::fromMap($this->doRPCRequest('QueryOutboundTask', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryOutboundTaskRequest $request
     *
     * @return QueryOutboundTaskResponse
     */
    public function queryOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @param QuerySkillGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySkillGroupsResponse
     */
    public function querySkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QuerySkillGroupsResponse::fromMap($this->doRPCRequest('QuerySkillGroups', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QuerySkillGroupsRequest $request
     *
     * @return QuerySkillGroupsResponse
     */
    public function querySkillGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySkillGroupsWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskDetailRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTaskDetailResponse
     */
    public function queryTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTaskDetailResponse::fromMap($this->doRPCRequest('QueryTaskDetail', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTaskDetailRequest $request
     *
     * @return QueryTaskDetailResponse
     */
    public function queryTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskResultRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTaskResultResponse
     */
    public function queryTaskResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return QueryTaskResultResponse::fromMap($this->doRPCRequest('QueryTaskResult', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTaskResultRequest $request
     *
     * @return QueryTaskResultResponse
     */
    public function queryTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskResultWithOptions($request, $runtime);
    }

    /**
     * @param QueryTicketsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return QueryTicketsResponse
     */
    public function queryTicketsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryTicketsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extra)) {
            $request->extraShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTicketsResponse::fromMap($this->doRPCRequest('QueryTickets', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTicketsRequest $request
     *
     * @return QueryTicketsResponse
     */
    public function queryTickets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTicketsWithOptions($request, $runtime);
    }

    /**
     * @param QueryTouchListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryTouchListResponse
     */
    public function queryTouchListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTouchListResponse::fromMap($this->doRPCRequest('QueryTouchList', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTouchListRequest $request
     *
     * @return QueryTouchListResponse
     */
    public function queryTouchList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTouchListWithOptions($request, $runtime);
    }

    /**
     * @param RemoveSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveSkillGroupResponse
     */
    public function removeSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveSkillGroupResponse::fromMap($this->doRPCRequest('RemoveSkillGroup', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveSkillGroupRequest $request
     *
     * @return RemoveSkillGroupResponse
     */
    public function removeSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param ResetHotlineNumberRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ResetHotlineNumberResponse
     */
    public function resetHotlineNumberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ResetHotlineNumberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->outboundRangeList)) {
            $request->outboundRangeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outboundRangeList, 'OutboundRangeList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetHotlineNumberResponse::fromMap($this->doRPCRequest('ResetHotlineNumber', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetHotlineNumberRequest $request
     *
     * @return ResetHotlineNumberResponse
     */
    public function resetHotlineNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetHotlineNumberWithOptions($request, $runtime);
    }

    /**
     * @param RestartOutboundTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RestartOutboundTaskResponse
     */
    public function restartOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestartOutboundTaskResponse::fromMap($this->doRPCRequest('RestartOutboundTask', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestartOutboundTaskRequest $request
     *
     * @return RestartOutboundTaskResponse
     */
    public function restartOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @param RobotCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RobotCallResponse
     */
    public function robotCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RobotCallResponse::fromMap($this->doRPCRequest('RobotCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RobotCallRequest $request
     *
     * @return RobotCallResponse
     */
    public function robotCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->robotCallWithOptions($request, $runtime);
    }

    /**
     * @param SendCcoSmartCallRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SendCcoSmartCallResponse
     */
    public function sendCcoSmartCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendCcoSmartCallResponse::fromMap($this->doRPCRequest('SendCcoSmartCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendCcoSmartCallRequest $request
     *
     * @return SendCcoSmartCallResponse
     */
    public function sendCcoSmartCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCcoSmartCallWithOptions($request, $runtime);
    }

    /**
     * @param SendCcoSmartCallOperateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SendCcoSmartCallOperateResponse
     */
    public function sendCcoSmartCallOperateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendCcoSmartCallOperateResponse::fromMap($this->doRPCRequest('SendCcoSmartCallOperate', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendCcoSmartCallOperateRequest $request
     *
     * @return SendCcoSmartCallOperateResponse
     */
    public function sendCcoSmartCallOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCcoSmartCallOperateWithOptions($request, $runtime);
    }

    /**
     * @param SendHotlineHeartBeatRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SendHotlineHeartBeatResponse
     */
    public function sendHotlineHeartBeatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SendHotlineHeartBeatResponse::fromMap($this->doRPCRequest('SendHotlineHeartBeat', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SendHotlineHeartBeatRequest $request
     *
     * @return SendHotlineHeartBeatResponse
     */
    public function sendHotlineHeartBeat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendHotlineHeartBeatWithOptions($request, $runtime);
    }

    /**
     * @param StartCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StartCallResponse
     */
    public function startCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartCallResponse::fromMap($this->doRPCRequest('StartCall', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartCallRequest $request
     *
     * @return StartCallResponse
     */
    public function startCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCallWithOptions($request, $runtime);
    }

    /**
     * @param StartCallV2Request $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartCallV2Response
     */
    public function startCallV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartCallV2Response::fromMap($this->doRPCRequest('StartCallV2', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartCallV2Request $request
     *
     * @return StartCallV2Response
     */
    public function startCallV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCallV2WithOptions($request, $runtime);
    }

    /**
     * @param StartChatWorkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartChatWorkResponse
     */
    public function startChatWorkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartChatWorkResponse::fromMap($this->doRPCRequest('StartChatWork', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartChatWorkRequest $request
     *
     * @return StartChatWorkResponse
     */
    public function startChatWork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startChatWorkWithOptions($request, $runtime);
    }

    /**
     * @param StartHotlineServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartHotlineServiceResponse
     */
    public function startHotlineServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartHotlineServiceResponse::fromMap($this->doRPCRequest('StartHotlineService', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartHotlineServiceRequest $request
     *
     * @return StartHotlineServiceResponse
     */
    public function startHotlineService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startHotlineServiceWithOptions($request, $runtime);
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

        return StartMicroOutboundResponse::fromMap($this->doRPCRequest('StartMicroOutbound', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StartTaskRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StartTaskResponse
     */
    public function startTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartTaskResponse::fromMap($this->doRPCRequest('StartTask', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartTaskRequest $request
     *
     * @return StartTaskResponse
     */
    public function startTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTaskWithOptions($request, $runtime);
    }

    /**
     * @param StartTaskByAppRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartTaskByAppResponse
     */
    public function startTaskByAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartTaskByAppResponse::fromMap($this->doRPCRequest('StartTaskByApp', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartTaskByAppRequest $request
     *
     * @return StartTaskByAppResponse
     */
    public function startTaskByApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTaskByAppWithOptions($request, $runtime);
    }

    /**
     * @param StopTaskRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopTaskResponse
     */
    public function stopTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopTaskResponse::fromMap($this->doRPCRequest('StopTask', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopTaskRequest $request
     *
     * @return StopTaskResponse
     */
    public function stopTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTaskWithOptions($request, $runtime);
    }

    /**
     * @param SuspendHotlineServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SuspendHotlineServiceResponse
     */
    public function suspendHotlineServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SuspendHotlineServiceResponse::fromMap($this->doRPCRequest('SuspendHotlineService', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SuspendHotlineServiceRequest $request
     *
     * @return SuspendHotlineServiceResponse
     */
    public function suspendHotlineService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendHotlineServiceWithOptions($request, $runtime);
    }

    /**
     * @param SuspendOutboundTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SuspendOutboundTaskResponse
     */
    public function suspendOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SuspendOutboundTaskResponse::fromMap($this->doRPCRequest('SuspendOutboundTask', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SuspendOutboundTaskRequest $request
     *
     * @return SuspendOutboundTaskResponse
     */
    public function suspendOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @param TransferCallToSkillGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return TransferCallToSkillGroupResponse
     */
    public function transferCallToSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TransferCallToSkillGroupResponse::fromMap($this->doRPCRequest('TransferCallToSkillGroup', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TransferCallToSkillGroupRequest $request
     *
     * @return TransferCallToSkillGroupResponse
     */
    public function transferCallToSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferCallToSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAgentResponse
     */
    public function updateAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAgentResponse::fromMap($this->doRPCRequest('UpdateAgent', '2019-10-15', 'HTTPS', 'PUT', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAgentRequest $request
     *
     * @return UpdateAgentResponse
     */
    public function updateAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDepartmentResponse
     */
    public function updateDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDepartmentResponse::fromMap($this->doRPCRequest('UpdateDepartment', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDepartmentRequest $request
     *
     * @return UpdateDepartmentResponse
     */
    public function updateDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateOuterAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateOuterAccountResponse
     */
    public function updateOuterAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return UpdateOuterAccountResponse::fromMap($this->doRPCRequest('UpdateOuterAccount', '2019-10-15', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateOuterAccountRequest $request
     *
     * @return UpdateOuterAccountResponse
     */
    public function updateOuterAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOuterAccountWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateSkillGroupResponse
     */
    public function updateSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSkillGroupResponse::fromMap($this->doRPCRequest('UpdateSkillGroup', '2019-10-15', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSkillGroupRequest $request
     *
     * @return UpdateSkillGroupResponse
     */
    public function updateSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSkillGroupWithOptions($request, $runtime);
    }
}
