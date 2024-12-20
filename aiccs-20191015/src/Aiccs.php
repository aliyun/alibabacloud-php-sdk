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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAiOutboundTaskBatchRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAiOutboundTaskBatchResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAiOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAiOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAiOutboundTaskShrinkRequest;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteAiOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\DeleteAiOutboundTaskResponse;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskBizDataRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskBizDataResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskExecDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskExecDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskListRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskListResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskProgressRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskProgressResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAllDepartmentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAllDepartmentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetCallSoundRecordRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetCallSoundRecordResponse;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetRecordUrlRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetRecordUrlResponse;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertAiOutboundPhoneNumsRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertAiOutboundPhoneNumsResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertAiOutboundPhoneNumsShrinkRequest;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRobotCallDialogRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRobotCallDialogResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRobotNodeRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRobotNodeResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRobotParamsRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRobotParamsResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRolesRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRolesResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListSkillGroupResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmSmartCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmSmartCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmSmartCallShrinkRequest;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTicketsRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTicketsResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTicketsShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\RemoveAgentFromSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\RemoveAgentFromSkillGroupResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\RemoveAgentFromSkillGroupShrinkRequest;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartAiOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartAiOutboundTaskResponse;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StopAiOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StopAiOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StopTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StopTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SuspendHotlineServiceRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SuspendHotlineServiceResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SuspendOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SuspendOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TerminateAiOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TerminateAiOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TransferCallToSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TransferCallToSkillGroupResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAgentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAgentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAiOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAiOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAiOutboundTaskShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateDepartmentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateDepartmentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateOuterAccountRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateOuterAccountResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateSkillGroupResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
     * @summary 新增热线号码
     *  *
     * @param AddHotlineNumberRequest $tmpReq  AddHotlineNumberRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddHotlineNumberResponse AddHotlineNumberResponse
     */
    public function addHotlineNumberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddHotlineNumberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->outboundRangeList)) {
            $request->outboundRangeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outboundRangeList, 'OutboundRangeList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableInbound)) {
            $body['EnableInbound'] = $request->enableInbound;
        }
        if (!Utils::isUnset($request->enableInboundEvaluation)) {
            $body['EnableInboundEvaluation'] = $request->enableInboundEvaluation;
        }
        if (!Utils::isUnset($request->enableOutbound)) {
            $body['EnableOutbound'] = $request->enableOutbound;
        }
        if (!Utils::isUnset($request->enableOutboundEvaluation)) {
            $body['EnableOutboundEvaluation'] = $request->enableOutboundEvaluation;
        }
        if (!Utils::isUnset($request->evaluationLevel)) {
            $body['EvaluationLevel'] = $request->evaluationLevel;
        }
        if (!Utils::isUnset($request->hotlineNumber)) {
            $body['HotlineNumber'] = $request->hotlineNumber;
        }
        if (!Utils::isUnset($request->inboundFlowId)) {
            $body['InboundFlowId'] = $request->inboundFlowId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->outboundAllDepart)) {
            $body['OutboundAllDepart'] = $request->outboundAllDepart;
        }
        if (!Utils::isUnset($request->outboundRangeListShrink)) {
            $body['OutboundRangeList'] = $request->outboundRangeListShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddHotlineNumber',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddHotlineNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增热线号码
     *  *
     * @param AddHotlineNumberRequest $request AddHotlineNumberRequest
     *
     * @return AddHotlineNumberResponse AddHotlineNumberResponse
     */
    public function addHotlineNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addHotlineNumberWithOptions($request, $runtime);
    }

    /**
     * @param AddOuterAccountRequest $request AddOuterAccountRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return AddOuterAccountResponse AddOuterAccountResponse
     */
    public function addOuterAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddOuterAccount',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddOuterAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddOuterAccountRequest $request AddOuterAccountRequest
     *
     * @return AddOuterAccountResponse AddOuterAccountResponse
     */
    public function addOuterAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addOuterAccountWithOptions($request, $runtime);
    }

    /**
     * @param AddSkillGroupRequest $request AddSkillGroupRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddSkillGroupResponse AddSkillGroupResponse
     */
    public function addSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSkillGroup',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSkillGroupRequest $request AddSkillGroupRequest
     *
     * @return AddSkillGroupResponse AddSkillGroupResponse
     */
    public function addSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param AiccsSmartCallRequest $request AiccsSmartCallRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AiccsSmartCallResponse AiccsSmartCallResponse
     */
    public function aiccsSmartCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionCodeBreak)) {
            $query['ActionCodeBreak'] = $request->actionCodeBreak;
        }
        if (!Utils::isUnset($request->actionCodeTimeBreak)) {
            $query['ActionCodeTimeBreak'] = $request->actionCodeTimeBreak;
        }
        if (!Utils::isUnset($request->asrAlsAmId)) {
            $query['AsrAlsAmId'] = $request->asrAlsAmId;
        }
        if (!Utils::isUnset($request->asrBaseId)) {
            $query['AsrBaseId'] = $request->asrBaseId;
        }
        if (!Utils::isUnset($request->asrModelId)) {
            $query['AsrModelId'] = $request->asrModelId;
        }
        if (!Utils::isUnset($request->asrVocabularyId)) {
            $query['AsrVocabularyId'] = $request->asrVocabularyId;
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
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
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
            'action'      => 'AiccsSmartCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AiccsSmartCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AiccsSmartCallRequest $request AiccsSmartCallRequest
     *
     * @return AiccsSmartCallResponse AiccsSmartCallResponse
     */
    public function aiccsSmartCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aiccsSmartCallWithOptions($request, $runtime);
    }

    /**
     * @param AiccsSmartCallOperateRequest $request AiccsSmartCallOperateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AiccsSmartCallOperateResponse AiccsSmartCallOperateResponse
     */
    public function aiccsSmartCallOperateWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
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
            'action'      => 'AiccsSmartCallOperate',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AiccsSmartCallOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AiccsSmartCallOperateRequest $request AiccsSmartCallOperateRequest
     *
     * @return AiccsSmartCallOperateResponse AiccsSmartCallOperateResponse
     */
    public function aiccsSmartCallOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->aiccsSmartCallOperateWithOptions($request, $runtime);
    }

    /**
     * @param AnswerCallRequest $request AnswerCallRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AnswerCallResponse AnswerCallResponse
     */
    public function answerCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->callId)) {
            $body['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionId)) {
            $body['ConnectionId'] = $request->connectionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AnswerCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AnswerCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AnswerCallRequest $request AnswerCallRequest
     *
     * @return AnswerCallResponse AnswerCallResponse
     */
    public function answerCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->answerCallWithOptions($request, $runtime);
    }

    /**
     * @summary 追加任务明细
     *  *
     * @param AttachTaskRequest $request AttachTaskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachTaskResponse AttachTaskResponse
     */
    public function attachTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callString)) {
            $query['CallString'] = $request->callString;
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
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 追加任务明细
     *  *
     * @param AttachTaskRequest $request AttachTaskRequest
     *
     * @return AttachTaskResponse AttachTaskResponse
     */
    public function attachTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachTaskWithOptions($request, $runtime);
    }

    /**
     * @param BatchCreateQualityProjectsRequest $request BatchCreateQualityProjectsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchCreateQualityProjectsResponse BatchCreateQualityProjectsResponse
     */
    public function batchCreateQualityProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analysisIds)) {
            $query['AnalysisIds'] = $request->analysisIds;
        }
        if (!Utils::isUnset($request->channelTouchType)) {
            $query['ChannelTouchType'] = $request->channelTouchType;
        }
        if (!Utils::isUnset($request->checkFreqType)) {
            $query['CheckFreqType'] = $request->checkFreqType;
        }
        if (!Utils::isUnset($request->instanceList)) {
            $query['InstanceList'] = $request->instanceList;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->timeRangeEnd)) {
            $query['TimeRangeEnd'] = $request->timeRangeEnd;
        }
        if (!Utils::isUnset($request->timeRangeStart)) {
            $query['TimeRangeStart'] = $request->timeRangeStart;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchCreateQualityProjects',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchCreateQualityProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchCreateQualityProjectsRequest $request BatchCreateQualityProjectsRequest
     *
     * @return BatchCreateQualityProjectsResponse BatchCreateQualityProjectsResponse
     */
    public function batchCreateQualityProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateQualityProjectsWithOptions($request, $runtime);
    }

    /**
     * @summary 删除智能外呼任务
     *  *
     * @param CancelTaskRequest $request CancelTaskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelTaskResponse CancelTaskResponse
     */
    public function cancelTaskWithOptions($request, $runtime)
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
            'action'      => 'CancelTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除智能外呼任务
     *  *
     * @param CancelTaskRequest $request CancelTaskRequest
     *
     * @return CancelTaskResponse CancelTaskResponse
     */
    public function cancelTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 修改在线客服状态
     *  *
     * @param ChangeChatAgentStatusRequest $request ChangeChatAgentStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeChatAgentStatusResponse ChangeChatAgentStatusResponse
     */
    public function changeChatAgentStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->method)) {
            $body['Method'] = $request->method;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ChangeChatAgentStatus',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeChatAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改在线客服状态
     *  *
     * @param ChangeChatAgentStatusRequest $request ChangeChatAgentStatusRequest
     *
     * @return ChangeChatAgentStatusResponse ChangeChatAgentStatusResponse
     */
    public function changeChatAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeChatAgentStatusWithOptions($request, $runtime);
    }

    /**
     * @param ChangeQualityProjectStatusRequest $request ChangeQualityProjectStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ChangeQualityProjectStatusResponse ChangeQualityProjectStatusResponse
     */
    public function changeQualityProjectStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeQualityProjectStatus',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeQualityProjectStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeQualityProjectStatusRequest $request ChangeQualityProjectStatusRequest
     *
     * @return ChangeQualityProjectStatusResponse ChangeQualityProjectStatusResponse
     */
    public function changeQualityProjectStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeQualityProjectStatusWithOptions($request, $runtime);
    }

    /**
     * @param CreateAgentRequest $request CreateAgentRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAgentResponse CreateAgentResponse
     */
    public function createAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->skillGroupId)) {
            $bodyFlat['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->skillGroupIdList)) {
            $bodyFlat['SkillGroupIdList'] = $request->skillGroupIdList;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAgent',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAgentRequest $request CreateAgentRequest
     *
     * @return CreateAgentResponse CreateAgentResponse
     */
    public function createAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgentWithOptions($request, $runtime);
    }

    /**
     * @summary 创建智能外呼任务（预测式外呼、自动外呼）
     *  *
     * @param CreateAiOutboundTaskRequest $tmpReq  CreateAiOutboundTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAiOutboundTaskResponse CreateAiOutboundTaskResponse
     */
    public function createAiOutboundTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAiOutboundTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->outboundNums)) {
            $request->outboundNumsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outboundNums, 'OutboundNums', 'json');
        }
        if (!Utils::isUnset($tmpReq->recallRule)) {
            $request->recallRuleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recallRule, 'RecallRule', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->concurrentRate)) {
            $query['ConcurrentRate'] = $request->concurrentRate;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->executionTime)) {
            $query['ExecutionTime'] = $request->executionTime;
        }
        if (!Utils::isUnset($request->forecastCallRate)) {
            $query['ForecastCallRate'] = $request->forecastCallRate;
        }
        if (!Utils::isUnset($request->handlerId)) {
            $query['HandlerId'] = $request->handlerId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->numRepeated)) {
            $query['NumRepeated'] = $request->numRepeated;
        }
        if (!Utils::isUnset($request->outboundNumsShrink)) {
            $query['OutboundNums'] = $request->outboundNumsShrink;
        }
        if (!Utils::isUnset($request->recallRuleShrink)) {
            $query['RecallRule'] = $request->recallRuleShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAiOutboundTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAiOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建智能外呼任务（预测式外呼、自动外呼）
     *  *
     * @param CreateAiOutboundTaskRequest $request CreateAiOutboundTaskRequest
     *
     * @return CreateAiOutboundTaskResponse CreateAiOutboundTaskResponse
     */
    public function createAiOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAiOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建智能外呼任务批次
     *  *
     * @param CreateAiOutboundTaskBatchRequest $request CreateAiOutboundTaskBatchRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAiOutboundTaskBatchResponse CreateAiOutboundTaskBatchResponse
     */
    public function createAiOutboundTaskBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAiOutboundTaskBatch',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAiOutboundTaskBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建智能外呼任务批次
     *  *
     * @param CreateAiOutboundTaskBatchRequest $request CreateAiOutboundTaskBatchRequest
     *
     * @return CreateAiOutboundTaskBatchResponse CreateAiOutboundTaskBatchResponse
     */
    public function createAiOutboundTaskBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAiOutboundTaskBatchWithOptions($request, $runtime);
    }

    /**
     * @summary 创建部门信息
     *  *
     * @param CreateDepartmentRequest $request CreateDepartmentRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDepartmentResponse CreateDepartmentResponse
     */
    public function createDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->departmentName)) {
            $query['DepartmentName'] = $request->departmentName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDepartment',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建部门信息
     *  *
     * @param CreateDepartmentRequest $request CreateDepartmentRequest
     *
     * @return CreateDepartmentResponse CreateDepartmentResponse
     */
    public function createDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param CreateOutboundTaskRequest $request CreateOutboundTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateOutboundTaskResponse CreateOutboundTaskResponse
     */
    public function createOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ani)) {
            $query['Ani'] = $request->ani;
        }
        if (!Utils::isUnset($request->callInfos)) {
            $query['CallInfos'] = $request->callInfos;
        }
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->extAttrs)) {
            $query['ExtAttrs'] = $request->extAttrs;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->model)) {
            $query['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->retryInterval)) {
            $query['RetryInterval'] = $request->retryInterval;
        }
        if (!Utils::isUnset($request->retryTime)) {
            $query['RetryTime'] = $request->retryTime;
        }
        if (!Utils::isUnset($request->skillGroup)) {
            $query['SkillGroup'] = $request->skillGroup;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateOutboundTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateOutboundTaskRequest $request CreateOutboundTaskRequest
     *
     * @return CreateOutboundTaskResponse CreateOutboundTaskResponse
     */
    public function createOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateQualityProjectRequest $request CreateQualityProjectRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateQualityProjectResponse CreateQualityProjectResponse
     */
    public function createQualityProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->analysisIds)) {
            $body['AnalysisIds'] = $request->analysisIds;
        }
        if (!Utils::isUnset($request->channelTouchType)) {
            $body['ChannelTouchType'] = $request->channelTouchType;
        }
        if (!Utils::isUnset($request->checkFreqType)) {
            $body['CheckFreqType'] = $request->checkFreqType;
        }
        if (!Utils::isUnset($request->depList)) {
            $body['DepList'] = $request->depList;
        }
        if (!Utils::isUnset($request->groupList)) {
            $body['GroupList'] = $request->groupList;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->scopeType)) {
            $body['ScopeType'] = $request->scopeType;
        }
        if (!Utils::isUnset($request->servicerList)) {
            $body['ServicerList'] = $request->servicerList;
        }
        if (!Utils::isUnset($request->timeRangeEnd)) {
            $body['TimeRangeEnd'] = $request->timeRangeEnd;
        }
        if (!Utils::isUnset($request->timeRangeStart)) {
            $body['TimeRangeStart'] = $request->timeRangeStart;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateQualityProject',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQualityProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateQualityProjectRequest $request CreateQualityProjectRequest
     *
     * @return CreateQualityProjectResponse CreateQualityProjectResponse
     */
    public function createQualityProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateQualityRuleRequest $request CreateQualityRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateQualityRuleResponse CreateQualityRuleResponse
     */
    public function createQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keyWords)) {
            $body['KeyWords'] = $request->keyWords;
        }
        if (!Utils::isUnset($request->matchType)) {
            $body['MatchType'] = $request->matchType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ruleTag)) {
            $body['RuleTag'] = $request->ruleTag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateQualityRule',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateQualityRuleRequest $request CreateQualityRuleRequest
     *
     * @return CreateQualityRuleResponse CreateQualityRuleResponse
     */
    public function createQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateSkillGroupRequest $request CreateSkillGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSkillGroupResponse CreateSkillGroupResponse
     */
    public function createSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelType)) {
            $body['ChannelType'] = $request->channelType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->departmentId)) {
            $body['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupName)) {
            $body['SkillGroupName'] = $request->skillGroupName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSkillGroup',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSkillGroupRequest $request CreateSkillGroupRequest
     *
     * @return CreateSkillGroupResponse CreateSkillGroupResponse
     */
    public function createSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 创建外呼任务
     *  *
     * @param CreateTaskRequest $request CreateTaskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTaskResponse CreateTaskResponse
     */
    public function createTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callString)) {
            $query['CallString'] = $request->callString;
        }
        if (!Utils::isUnset($request->callStringType)) {
            $query['CallStringType'] = $request->callStringType;
        }
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
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
        if (!Utils::isUnset($request->retryCount)) {
            $query['RetryCount'] = $request->retryCount;
        }
        if (!Utils::isUnset($request->retryFlag)) {
            $query['RetryFlag'] = $request->retryFlag;
        }
        if (!Utils::isUnset($request->retryInterval)) {
            $query['RetryInterval'] = $request->retryInterval;
        }
        if (!Utils::isUnset($request->retryStatusCode)) {
            $query['RetryStatusCode'] = $request->retryStatusCode;
        }
        if (!Utils::isUnset($request->robotId)) {
            $query['RobotId'] = $request->robotId;
        }
        if (!Utils::isUnset($request->seatCount)) {
            $query['SeatCount'] = $request->seatCount;
        }
        if (!Utils::isUnset($request->startNow)) {
            $query['StartNow'] = $request->startNow;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->workDay)) {
            $query['WorkDay'] = $request->workDay;
        }
        if (!Utils::isUnset($request->workTimeList)) {
            $query['WorkTimeList'] = $request->workTimeList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建外呼任务
     *  *
     * @param CreateTaskRequest $request CreateTaskRequest
     *
     * @return CreateTaskResponse CreateTaskResponse
     */
    public function createTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建坐席并开通sso登录能力
     *  *
     * @param CreateThirdSsoAgentRequest $request CreateThirdSsoAgentRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateThirdSsoAgentResponse CreateThirdSsoAgentResponse
     */
    public function createThirdSsoAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->clientId)) {
            $body['ClientId'] = $request->clientId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $bodyFlat = [];
        if (!Utils::isUnset($request->roleIds)) {
            $bodyFlat['RoleIds'] = $request->roleIds;
        }
        if (!Utils::isUnset($request->skillGroupIds)) {
            $bodyFlat['SkillGroupIds'] = $request->skillGroupIds;
        }
        $body = Tea::merge($body, OpenApiUtilClient::query($bodyFlat));
        $req  = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateThirdSsoAgent',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateThirdSsoAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建坐席并开通sso登录能力
     *  *
     * @param CreateThirdSsoAgentRequest $request CreateThirdSsoAgentRequest
     *
     * @return CreateThirdSsoAgentResponse CreateThirdSsoAgentResponse
     */
    public function createThirdSsoAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createThirdSsoAgentWithOptions($request, $runtime);
    }

    /**
     * @summary 删除坐席账号
     *  *
     * @param DeleteAgentRequest $request DeleteAgentRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAgentResponse DeleteAgentResponse
     */
    public function deleteAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAgent',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除坐席账号
     *  *
     * @param DeleteAgentRequest $request DeleteAgentRequest
     *
     * @return DeleteAgentResponse DeleteAgentResponse
     */
    public function deleteAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAgentWithOptions($request, $runtime);
    }

    /**
     * @summary 删除智能外呼任务
     *  *
     * @param DeleteAiOutboundTaskRequest $request DeleteAiOutboundTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAiOutboundTaskResponse DeleteAiOutboundTaskResponse
     */
    public function deleteAiOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAiOutboundTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAiOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除智能外呼任务
     *  *
     * @param DeleteAiOutboundTaskRequest $request DeleteAiOutboundTaskRequest
     *
     * @return DeleteAiOutboundTaskResponse DeleteAiOutboundTaskResponse
     */
    public function deleteAiOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAiOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 删除部门信息
     *  *
     * @param DeleteDepartmentRequest $request DeleteDepartmentRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDepartmentResponse DeleteDepartmentResponse
     */
    public function deleteDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDepartment',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除部门信息
     *  *
     * @param DeleteDepartmentRequest $request DeleteDepartmentRequest
     *
     * @return DeleteDepartmentResponse DeleteDepartmentResponse
     */
    public function deleteDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDepartmentWithOptions($request, $runtime);
    }

    /**
     * @summary 删除热线号码
     *  *
     * @param DeleteHotlineNumberRequest $request DeleteHotlineNumberRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteHotlineNumberResponse DeleteHotlineNumberResponse
     */
    public function deleteHotlineNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->hotlineNumber)) {
            $body['HotlineNumber'] = $request->hotlineNumber;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteHotlineNumber',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteHotlineNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除热线号码
     *  *
     * @param DeleteHotlineNumberRequest $request DeleteHotlineNumberRequest
     *
     * @return DeleteHotlineNumberResponse DeleteHotlineNumberResponse
     */
    public function deleteHotlineNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHotlineNumberWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOutboundTaskRequest $request DeleteOutboundTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteOutboundTaskResponse DeleteOutboundTaskResponse
     */
    public function deleteOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->outboundTaskId)) {
            $query['OutboundTaskId'] = $request->outboundTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteOutboundTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteOutboundTaskRequest $request DeleteOutboundTaskRequest
     *
     * @return DeleteOutboundTaskResponse DeleteOutboundTaskResponse
     */
    public function deleteOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOuterAccountRequest $request DeleteOuterAccountRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteOuterAccountResponse DeleteOuterAccountResponse
     */
    public function deleteOuterAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteOuterAccount',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteOuterAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteOuterAccountRequest $request DeleteOuterAccountRequest
     *
     * @return DeleteOuterAccountResponse DeleteOuterAccountResponse
     */
    public function deleteOuterAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOuterAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualityProjectRequest $request DeleteQualityProjectRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteQualityProjectResponse DeleteQualityProjectResponse
     */
    public function deleteQualityProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteQualityProject',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQualityProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteQualityProjectRequest $request DeleteQualityProjectRequest
     *
     * @return DeleteQualityProjectResponse DeleteQualityProjectResponse
     */
    public function deleteQualityProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityProjectWithOptions($request, $runtime);
    }

    /**
     * @param DeleteQualityRuleRequest $request DeleteQualityRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteQualityRuleResponse DeleteQualityRuleResponse
     */
    public function deleteQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteQualityRule',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteQualityRuleRequest $request DeleteQualityRuleRequest
     *
     * @return DeleteQualityRuleResponse DeleteQualityRuleResponse
     */
    public function deleteQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSkillGroupRequest $request DeleteSkillGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSkillGroupResponse DeleteSkillGroupResponse
     */
    public function deleteSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSkillGroup',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSkillGroupRequest $request DeleteSkillGroupRequest
     *
     * @return DeleteSkillGroupResponse DeleteSkillGroupResponse
     */
    public function deleteSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordDataRequest $request DescribeRecordDataRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecordDataResponse DescribeRecordDataResponse
     */
    public function describeRecordDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->acid)) {
            $query['Acid'] = $request->acid;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        if (!Utils::isUnset($request->secLevel)) {
            $query['SecLevel'] = $request->secLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecordData',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecordDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecordDataRequest $request DescribeRecordDataRequest
     *
     * @return DescribeRecordDataResponse DescribeRecordDataResponse
     */
    public function describeRecordData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordDataWithOptions($request, $runtime);
    }

    /**
     * @param EditQualityProjectRequest $request EditQualityProjectRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return EditQualityProjectResponse EditQualityProjectResponse
     */
    public function editQualityProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analysisIds)) {
            $query['AnalysisIds'] = $request->analysisIds;
        }
        if (!Utils::isUnset($request->channelTouchType)) {
            $query['ChannelTouchType'] = $request->channelTouchType;
        }
        if (!Utils::isUnset($request->checkFreqType)) {
            $query['CheckFreqType'] = $request->checkFreqType;
        }
        if (!Utils::isUnset($request->depList)) {
            $query['DepList'] = $request->depList;
        }
        if (!Utils::isUnset($request->groupList)) {
            $query['GroupList'] = $request->groupList;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectVersion)) {
            $query['ProjectVersion'] = $request->projectVersion;
        }
        if (!Utils::isUnset($request->scopeType)) {
            $query['ScopeType'] = $request->scopeType;
        }
        if (!Utils::isUnset($request->servicerList)) {
            $query['ServicerList'] = $request->servicerList;
        }
        if (!Utils::isUnset($request->timeRangeEnd)) {
            $query['TimeRangeEnd'] = $request->timeRangeEnd;
        }
        if (!Utils::isUnset($request->timeRangeStart)) {
            $query['TimeRangeStart'] = $request->timeRangeStart;
        }
        $body = [];
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EditQualityProject',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditQualityProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EditQualityProjectRequest $request EditQualityProjectRequest
     *
     * @return EditQualityProjectResponse EditQualityProjectResponse
     */
    public function editQualityProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editQualityProjectWithOptions($request, $runtime);
    }

    /**
     * @param EditQualityRuleRequest $request EditQualityRuleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return EditQualityRuleResponse EditQualityRuleResponse
     */
    public function editQualityRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keyWords)) {
            $body['KeyWords'] = $request->keyWords;
        }
        if (!Utils::isUnset($request->matchType)) {
            $body['MatchType'] = $request->matchType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->qualityRuleId)) {
            $body['QualityRuleId'] = $request->qualityRuleId;
        }
        if (!Utils::isUnset($request->ruleTag)) {
            $body['RuleTag'] = $request->ruleTag;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EditQualityRule',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EditQualityRuleRequest $request EditQualityRuleRequest
     *
     * @return EditQualityRuleResponse EditQualityRuleResponse
     */
    public function editQualityRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editQualityRuleWithOptions($request, $runtime);
    }

    /**
     * @param EditQualityRuleTagRequest $request EditQualityRuleTagRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return EditQualityRuleTagResponse EditQualityRuleTagResponse
     */
    public function editQualityRuleTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analysisTypes)) {
            $query['AnalysisTypes'] = $request->analysisTypes;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EditQualityRuleTag',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditQualityRuleTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EditQualityRuleTagRequest $request EditQualityRuleTagRequest
     *
     * @return EditQualityRuleTagResponse EditQualityRuleTagResponse
     */
    public function editQualityRuleTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editQualityRuleTagWithOptions($request, $runtime);
    }

    /**
     * @summary 热线号码加密
     *  *
     * @param EncryptPhoneNumRequest $request EncryptPhoneNumRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return EncryptPhoneNumResponse EncryptPhoneNumResponse
     */
    public function encryptPhoneNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EncryptPhoneNum',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EncryptPhoneNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 热线号码加密
     *  *
     * @param EncryptPhoneNumRequest $request EncryptPhoneNumRequest
     *
     * @return EncryptPhoneNumResponse EncryptPhoneNumResponse
     */
    public function encryptPhoneNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->encryptPhoneNumWithOptions($request, $runtime);
    }

    /**
     * @param FetchCallRequest $request FetchCallRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return FetchCallResponse FetchCallResponse
     */
    public function fetchCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->callId)) {
            $body['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionId)) {
            $body['ConnectionId'] = $request->connectionId;
        }
        if (!Utils::isUnset($request->holdConnectionId)) {
            $body['HoldConnectionId'] = $request->holdConnectionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FetchCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FetchCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FetchCallRequest $request FetchCallRequest
     *
     * @return FetchCallResponse FetchCallResponse
     */
    public function fetchCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fetchCallWithOptions($request, $runtime);
    }

    /**
     * @param FinishHotlineServiceRequest $request FinishHotlineServiceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return FinishHotlineServiceResponse FinishHotlineServiceResponse
     */
    public function finishHotlineServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FinishHotlineService',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FinishHotlineServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FinishHotlineServiceRequest $request FinishHotlineServiceRequest
     *
     * @return FinishHotlineServiceResponse FinishHotlineServiceResponse
     */
    public function finishHotlineService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->finishHotlineServiceWithOptions($request, $runtime);
    }

    /**
     * @param GenerateWebSocketSignRequest $request GenerateWebSocketSignRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateWebSocketSignResponse GenerateWebSocketSignResponse
     */
    public function generateWebSocketSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GenerateWebSocketSign',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GenerateWebSocketSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateWebSocketSignRequest $request GenerateWebSocketSignRequest
     *
     * @return GenerateWebSocketSignResponse GenerateWebSocketSignResponse
     */
    public function generateWebSocketSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateWebSocketSignWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentRequest $request GetAgentRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentResponse GetAgentResponse
     */
    public function getAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAgent',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAgentRequest $request GetAgentRequest
     *
     * @return GetAgentResponse GetAgentResponse
     */
    public function getAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentWithOptions($request, $runtime);
    }

    /**
     * @summary 坐席纬度基础状态量
     *  *
     * @param GetAgentBasisStatusRequest $tmpReq  GetAgentBasisStatusRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentBasisStatusResponse GetAgentBasisStatusResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAgentBasisStatus',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAgentBasisStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 坐席纬度基础状态量
     *  *
     * @param GetAgentBasisStatusRequest $request GetAgentBasisStatusRequest
     *
     * @return GetAgentBasisStatusResponse GetAgentBasisStatusResponse
     */
    public function getAgentBasisStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentBasisStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentByIdRequest $request GetAgentByIdRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentByIdResponse GetAgentByIdResponse
     */
    public function getAgentByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->agentId)) {
            $body['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAgentById',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAgentByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAgentByIdRequest $request GetAgentByIdRequest
     *
     * @return GetAgentByIdResponse GetAgentByIdResponse
     */
    public function getAgentById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentByIdWithOptions($request, $runtime);
    }

    /**
     * @summary 热线坐席纬度详情汇总
     *  *
     * @param GetAgentDetailReportRequest $tmpReq  GetAgentDetailReportRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentDetailReportResponse GetAgentDetailReportResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAgentDetailReport',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAgentDetailReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 热线坐席纬度详情汇总
     *  *
     * @param GetAgentDetailReportRequest $request GetAgentDetailReportRequest
     *
     * @return GetAgentDetailReportResponse GetAgentDetailReportResponse
     */
    public function getAgentDetailReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentDetailReportWithOptions($request, $runtime);
    }

    /**
     * @param GetAgentIndexRealTimeRequest $request GetAgentIndexRealTimeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentIndexRealTimeResponse GetAgentIndexRealTimeResponse
     */
    public function getAgentIndexRealTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->depIds)) {
            $query['DepIds'] = $request->depIds;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAgentIndexRealTime',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAgentIndexRealTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAgentIndexRealTimeRequest $request GetAgentIndexRealTimeRequest
     *
     * @return GetAgentIndexRealTimeResponse GetAgentIndexRealTimeResponse
     */
    public function getAgentIndexRealTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentIndexRealTimeWithOptions($request, $runtime);
    }

    /**
     * @summary 坐席服务状态量
     *  *
     * @param GetAgentServiceStatusRequest $tmpReq  GetAgentServiceStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentServiceStatusResponse GetAgentServiceStatusResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAgentServiceStatus',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAgentServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 坐席服务状态量
     *  *
     * @param GetAgentServiceStatusRequest $request GetAgentServiceStatusRequest
     *
     * @return GetAgentServiceStatusResponse GetAgentServiceStatusResponse
     */
    public function getAgentServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 坐席纬度统计量
     *  *
     * @param GetAgentStatisticsRequest $tmpReq  GetAgentStatisticsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAgentStatisticsResponse GetAgentStatisticsResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAgentStatistics',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAgentStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 坐席纬度统计量
     *  *
     * @param GetAgentStatisticsRequest $request GetAgentStatisticsRequest
     *
     * @return GetAgentStatisticsResponse GetAgentStatisticsResponse
     */
    public function getAgentStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAgentStatisticsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取智能外呼任务业务自定义信息
     *  *
     * @param GetAiOutboundTaskBizDataRequest $request GetAiOutboundTaskBizDataRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAiOutboundTaskBizDataResponse GetAiOutboundTaskBizDataResponse
     */
    public function getAiOutboundTaskBizDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAiOutboundTaskBizData',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAiOutboundTaskBizDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取智能外呼任务业务自定义信息
     *  *
     * @param GetAiOutboundTaskBizDataRequest $request GetAiOutboundTaskBizDataRequest
     *
     * @return GetAiOutboundTaskBizDataResponse GetAiOutboundTaskBizDataResponse
     */
    public function getAiOutboundTaskBizData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiOutboundTaskBizDataWithOptions($request, $runtime);
    }

    /**
     * @summary 智能外呼任务配置详情查询
     *  *
     * @param GetAiOutboundTaskDetailRequest $request GetAiOutboundTaskDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAiOutboundTaskDetailResponse GetAiOutboundTaskDetailResponse
     */
    public function getAiOutboundTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAiOutboundTaskDetail',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAiOutboundTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 智能外呼任务配置详情查询
     *  *
     * @param GetAiOutboundTaskDetailRequest $request GetAiOutboundTaskDetailRequest
     *
     * @return GetAiOutboundTaskDetailResponse GetAiOutboundTaskDetailResponse
     */
    public function getAiOutboundTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiOutboundTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 智能外呼任务执行详情
     *  *
     * @param GetAiOutboundTaskExecDetailRequest $request GetAiOutboundTaskExecDetailRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAiOutboundTaskExecDetailResponse GetAiOutboundTaskExecDetailResponse
     */
    public function getAiOutboundTaskExecDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAiOutboundTaskExecDetail',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAiOutboundTaskExecDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 智能外呼任务执行详情
     *  *
     * @param GetAiOutboundTaskExecDetailRequest $request GetAiOutboundTaskExecDetailRequest
     *
     * @return GetAiOutboundTaskExecDetailResponse GetAiOutboundTaskExecDetailResponse
     */
    public function getAiOutboundTaskExecDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiOutboundTaskExecDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 智能外呼任务列表查询
     *  *
     * @param GetAiOutboundTaskListRequest $request GetAiOutboundTaskListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAiOutboundTaskListResponse GetAiOutboundTaskListResponse
     */
    public function getAiOutboundTaskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAiOutboundTaskList',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAiOutboundTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 智能外呼任务列表查询
     *  *
     * @param GetAiOutboundTaskListRequest $request GetAiOutboundTaskListRequest
     *
     * @return GetAiOutboundTaskListResponse GetAiOutboundTaskListResponse
     */
    public function getAiOutboundTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiOutboundTaskListWithOptions($request, $runtime);
    }

    /**
     * @summary 智能外呼任务执行进度
     *  *
     * @param GetAiOutboundTaskProgressRequest $request GetAiOutboundTaskProgressRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAiOutboundTaskProgressResponse GetAiOutboundTaskProgressResponse
     */
    public function getAiOutboundTaskProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAiOutboundTaskProgress',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAiOutboundTaskProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 智能外呼任务执行进度
     *  *
     * @param GetAiOutboundTaskProgressRequest $request GetAiOutboundTaskProgressRequest
     *
     * @return GetAiOutboundTaskProgressResponse GetAiOutboundTaskProgressResponse
     */
    public function getAiOutboundTaskProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiOutboundTaskProgressWithOptions($request, $runtime);
    }

    /**
     * @summary getAllDepartment
     *  *
     * @param GetAllDepartmentRequest $request GetAllDepartmentRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAllDepartmentResponse GetAllDepartmentResponse
     */
    public function getAllDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAllDepartment',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAllDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary getAllDepartment
     *  *
     * @param GetAllDepartmentRequest $request GetAllDepartmentRequest
     *
     * @return GetAllDepartmentResponse GetAllDepartmentResponse
     */
    public function getAllDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllDepartmentWithOptions($request, $runtime);
    }

    /**
     * @summary 获取通话录音文件
     *  *
     * @param GetCallSoundRecordRequest $request GetCallSoundRecordRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCallSoundRecordResponse GetCallSoundRecordResponse
     */
    public function getCallSoundRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->createTime)) {
            $query['CreateTime'] = $request->createTime;
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
            'action'      => 'GetCallSoundRecord',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCallSoundRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取通话录音文件
     *  *
     * @param GetCallSoundRecordRequest $request GetCallSoundRecordRequest
     *
     * @return GetCallSoundRecordResponse GetCallSoundRecordResponse
     */
    public function getCallSoundRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallSoundRecordWithOptions($request, $runtime);
    }

    /**
     * @summary 获取热线配置号码列表
     *  *
     * @param GetConfigNumListRequest $request GetConfigNumListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConfigNumListResponse GetConfigNumListResponse
     */
    public function getConfigNumListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConfigNumList',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConfigNumListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取热线配置号码列表
     *  *
     * @param GetConfigNumListRequest $request GetConfigNumListRequest
     *
     * @return GetConfigNumListResponse GetConfigNumListResponse
     */
    public function getConfigNumList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigNumListWithOptions($request, $runtime);
    }

    /**
     * @summary 获取会员信息
     *  *
     * @param GetCustomerInfoRequest $request GetCustomerInfoRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomerInfoResponse GetCustomerInfoResponse
     */
    public function getCustomerInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomerInfo',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCustomerInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取会员信息
     *  *
     * @param GetCustomerInfoRequest $request GetCustomerInfoRequest
     *
     * @return GetCustomerInfoResponse GetCustomerInfoResponse
     */
    public function getCustomerInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取技能组分组
     *  *
     * @param GetDepGroupTreeDataRequest $request GetDepGroupTreeDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDepGroupTreeDataResponse GetDepGroupTreeDataResponse
     */
    public function getDepGroupTreeDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDepGroupTreeData',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDepGroupTreeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取技能组分组
     *  *
     * @param GetDepGroupTreeDataRequest $request GetDepGroupTreeDataRequest
     *
     * @return GetDepGroupTreeDataResponse GetDepGroupTreeDataResponse
     */
    public function getDepGroupTreeData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDepGroupTreeDataWithOptions($request, $runtime);
    }

    /**
     * @summary 部门纬度坐席状态量
     *  *
     * @param GetDepartmentalLatitudeAgentStatusRequest $tmpReq  GetDepartmentalLatitudeAgentStatusRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDepartmentalLatitudeAgentStatusResponse GetDepartmentalLatitudeAgentStatusResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDepartmentalLatitudeAgentStatus',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDepartmentalLatitudeAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 部门纬度坐席状态量
     *  *
     * @param GetDepartmentalLatitudeAgentStatusRequest $request GetDepartmentalLatitudeAgentStatusRequest
     *
     * @return GetDepartmentalLatitudeAgentStatusResponse GetDepartmentalLatitudeAgentStatusResponse
     */
    public function getDepartmentalLatitudeAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDepartmentalLatitudeAgentStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineAgentDetailRequest $request GetHotlineAgentDetailRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotlineAgentDetailResponse GetHotlineAgentDetailResponse
     */
    public function getHotlineAgentDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotlineAgentDetail',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotlineAgentDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotlineAgentDetailRequest $request GetHotlineAgentDetailRequest
     *
     * @return GetHotlineAgentDetailResponse GetHotlineAgentDetailResponse
     */
    public function getHotlineAgentDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineAgentDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineAgentDetailReportRequest $request GetHotlineAgentDetailReportRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotlineAgentDetailReportResponse GetHotlineAgentDetailReportResponse
     */
    public function getHotlineAgentDetailReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->depIds)) {
            $query['DepIds'] = $request->depIds;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotlineAgentDetailReport',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotlineAgentDetailReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotlineAgentDetailReportRequest $request GetHotlineAgentDetailReportRequest
     *
     * @return GetHotlineAgentDetailReportResponse GetHotlineAgentDetailReportResponse
     */
    public function getHotlineAgentDetailReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineAgentDetailReportWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineAgentStatusRequest $request GetHotlineAgentStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotlineAgentStatusResponse GetHotlineAgentStatusResponse
     */
    public function getHotlineAgentStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHotlineAgentStatus',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotlineAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotlineAgentStatusRequest $request GetHotlineAgentStatusRequest
     *
     * @return GetHotlineAgentStatusResponse GetHotlineAgentStatusResponse
     */
    public function getHotlineAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineAgentStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 查询话务动作结果数据
     *  *
     * @param GetHotlineCallActionRequest $request GetHotlineCallActionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotlineCallActionResponse GetHotlineCallActionResponse
     */
    public function getHotlineCallActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->acc)) {
            $body['Acc'] = $request->acc;
        }
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->act)) {
            $body['Act'] = $request->act;
        }
        if (!Utils::isUnset($request->biz)) {
            $body['Biz'] = $request->biz;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->fromSource)) {
            $body['FromSource'] = $request->fromSource;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHotlineCallAction',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotlineCallActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询话务动作结果数据
     *  *
     * @param GetHotlineCallActionRequest $request GetHotlineCallActionRequest
     *
     * @return GetHotlineCallActionResponse GetHotlineCallActionResponse
     */
    public function getHotlineCallAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineCallActionWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineGroupDetailReportRequest $request GetHotlineGroupDetailReportRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotlineGroupDetailReportResponse GetHotlineGroupDetailReportResponse
     */
    public function getHotlineGroupDetailReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->depIds)) {
            $query['DepIds'] = $request->depIds;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotlineGroupDetailReport',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotlineGroupDetailReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotlineGroupDetailReportRequest $request GetHotlineGroupDetailReportRequest
     *
     * @return GetHotlineGroupDetailReportResponse GetHotlineGroupDetailReportResponse
     */
    public function getHotlineGroupDetailReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineGroupDetailReportWithOptions($request, $runtime);
    }

    /**
     * @summary 获取热线聊天记录
     *  *
     * @param GetHotlineMessageLogRequest $request GetHotlineMessageLogRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotlineMessageLogResponse GetHotlineMessageLogResponse
     */
    public function getHotlineMessageLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotlineMessageLog',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotlineMessageLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取热线聊天记录
     *  *
     * @param GetHotlineMessageLogRequest $request GetHotlineMessageLogRequest
     *
     * @return GetHotlineMessageLogResponse GetHotlineMessageLogResponse
     */
    public function getHotlineMessageLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineMessageLogWithOptions($request, $runtime);
    }

    /**
     * @summary 获取热线当前信息
     *  *
     * @param GetHotlineRuntimeInfoRequest $request GetHotlineRuntimeInfoRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotlineRuntimeInfoResponse GetHotlineRuntimeInfoResponse
     */
    public function getHotlineRuntimeInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotlineRuntimeInfo',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotlineRuntimeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取热线当前信息
     *  *
     * @param GetHotlineRuntimeInfoRequest $request GetHotlineRuntimeInfoRequest
     *
     * @return GetHotlineRuntimeInfoResponse GetHotlineRuntimeInfoResponse
     */
    public function getHotlineRuntimeInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineRuntimeInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 服务统计量数据
     *  *
     * @param GetHotlineServiceStatisticsRequest $tmpReq  GetHotlineServiceStatisticsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotlineServiceStatisticsResponse GetHotlineServiceStatisticsResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotlineServiceStatistics',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotlineServiceStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 服务统计量数据
     *  *
     * @param GetHotlineServiceStatisticsRequest $request GetHotlineServiceStatisticsRequest
     *
     * @return GetHotlineServiceStatisticsResponse GetHotlineServiceStatisticsResponse
     */
    public function getHotlineServiceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineServiceStatisticsWithOptions($request, $runtime);
    }

    /**
     * @param GetHotlineWaitingNumberRequest $request GetHotlineWaitingNumberRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHotlineWaitingNumberResponse GetHotlineWaitingNumberResponse
     */
    public function getHotlineWaitingNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHotlineWaitingNumber',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHotlineWaitingNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotlineWaitingNumberRequest $request GetHotlineWaitingNumberRequest
     *
     * @return GetHotlineWaitingNumberResponse GetHotlineWaitingNumberResponse
     */
    public function getHotlineWaitingNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotlineWaitingNumberWithOptions($request, $runtime);
    }

    /**
     * @param GetIndexCurrentValueRequest $request GetIndexCurrentValueRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetIndexCurrentValueResponse GetIndexCurrentValueResponse
     */
    public function getIndexCurrentValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->depIds)) {
            $query['DepIds'] = $request->depIds;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetIndexCurrentValue',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetIndexCurrentValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetIndexCurrentValueRequest $request GetIndexCurrentValueRequest
     *
     * @return GetIndexCurrentValueResponse GetIndexCurrentValueResponse
     */
    public function getIndexCurrentValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getIndexCurrentValueWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceListRequest $request GetInstanceListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceListResponse GetInstanceListResponse
     */
    public function getInstanceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceList',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceListRequest $request GetInstanceListRequest
     *
     * @return GetInstanceListResponse GetInstanceListResponse
     */
    public function getInstanceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceListWithOptions($request, $runtime);
    }

    /**
     * @summary 热线检测获取mcu ip地址
     *  *
     * @param GetMcuLvsIpRequest $request GetMcuLvsIpRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMcuLvsIpResponse GetMcuLvsIpResponse
     */
    public function getMcuLvsIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMcuLvsIp',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMcuLvsIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 热线检测获取mcu ip地址
     *  *
     * @param GetMcuLvsIpRequest $request GetMcuLvsIpRequest
     *
     * @return GetMcuLvsIpResponse GetMcuLvsIpResponse
     */
    public function getMcuLvsIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMcuLvsIpWithOptions($request, $runtime);
    }

    /**
     * @param GetNumLocationRequest $request GetNumLocationRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetNumLocationResponse GetNumLocationResponse
     */
    public function getNumLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNumLocation',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNumLocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNumLocationRequest $request GetNumLocationRequest
     *
     * @return GetNumLocationResponse GetNumLocationResponse
     */
    public function getNumLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getNumLocationWithOptions($request, $runtime);
    }

    /**
     * @summary 在线坐席信息
     *  *
     * @param GetOnlineSeatInformationRequest $tmpReq  GetOnlineSeatInformationRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOnlineSeatInformationResponse GetOnlineSeatInformationResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOnlineSeatInformation',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOnlineSeatInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 在线坐席信息
     *  *
     * @param GetOnlineSeatInformationRequest $request GetOnlineSeatInformationRequest
     *
     * @return GetOnlineSeatInformationResponse GetOnlineSeatInformationResponse
     */
    public function getOnlineSeatInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOnlineSeatInformationWithOptions($request, $runtime);
    }

    /**
     * @summary 在线服务总量
     *  *
     * @param GetOnlineServiceVolumeRequest $tmpReq  GetOnlineServiceVolumeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOnlineServiceVolumeResponse GetOnlineServiceVolumeResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOnlineServiceVolume',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOnlineServiceVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 在线服务总量
     *  *
     * @param GetOnlineServiceVolumeRequest $request GetOnlineServiceVolumeRequest
     *
     * @return GetOnlineServiceVolumeResponse GetOnlineServiceVolumeResponse
     */
    public function getOnlineServiceVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOnlineServiceVolumeWithOptions($request, $runtime);
    }

    /**
     * @param GetOutbounNumListRequest $request GetOutbounNumListRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOutbounNumListResponse GetOutbounNumListResponse
     */
    public function getOutbounNumListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOutbounNumList',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOutbounNumListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOutbounNumListRequest $request GetOutbounNumListRequest
     *
     * @return GetOutbounNumListResponse GetOutbounNumListResponse
     */
    public function getOutbounNumList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOutbounNumListWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityProjectDetailRequest $request GetQualityProjectDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQualityProjectDetailResponse GetQualityProjectDetailResponse
     */
    public function getQualityProjectDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQualityProjectDetail',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQualityProjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQualityProjectDetailRequest $request GetQualityProjectDetailRequest
     *
     * @return GetQualityProjectDetailResponse GetQualityProjectDetailResponse
     */
    public function getQualityProjectDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityProjectDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityProjectListRequest $request GetQualityProjectListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQualityProjectListResponse GetQualityProjectListResponse
     */
    public function getQualityProjectListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->checkFreqType)) {
            $query['checkFreqType'] = $request->checkFreqType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQualityProjectList',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQualityProjectListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQualityProjectListRequest $request GetQualityProjectListRequest
     *
     * @return GetQualityProjectListResponse GetQualityProjectListResponse
     */
    public function getQualityProjectList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityProjectListWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityProjectLogRequest $request GetQualityProjectLogRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQualityProjectLogResponse GetQualityProjectLogResponse
     */
    public function getQualityProjectLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQualityProjectLog',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQualityProjectLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQualityProjectLogRequest $request GetQualityProjectLogRequest
     *
     * @return GetQualityProjectLogResponse GetQualityProjectLogResponse
     */
    public function getQualityProjectLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityProjectLogWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityResultRequest $request GetQualityResultRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQualityResultResponse GetQualityResultResponse
     */
    public function getQualityResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelType)) {
            $query['ChannelType'] = $request->channelType;
        }
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->hitStatus)) {
            $query['HitStatus'] = $request->hitStatus;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectIds)) {
            $query['ProjectIds'] = $request->projectIds;
        }
        if (!Utils::isUnset($request->qualityRuleIds)) {
            $query['QualityRuleIds'] = $request->qualityRuleIds;
        }
        if (!Utils::isUnset($request->touchEndTime)) {
            $query['TouchEndTime'] = $request->touchEndTime;
        }
        if (!Utils::isUnset($request->touchStartTime)) {
            $query['TouchStartTime'] = $request->touchStartTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQualityResult',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQualityResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQualityResultRequest $request GetQualityResultRequest
     *
     * @return GetQualityResultResponse GetQualityResultResponse
     */
    public function getQualityResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityResultWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityRuleDetailRequest $request GetQualityRuleDetailRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQualityRuleDetailResponse GetQualityRuleDetailResponse
     */
    public function getQualityRuleDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->qualityRuleId)) {
            $query['QualityRuleId'] = $request->qualityRuleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQualityRuleDetail',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQualityRuleDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQualityRuleDetailRequest $request GetQualityRuleDetailRequest
     *
     * @return GetQualityRuleDetailResponse GetQualityRuleDetailResponse
     */
    public function getQualityRuleDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityRuleDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityRuleListRequest $request GetQualityRuleListRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQualityRuleListResponse GetQualityRuleListResponse
     */
    public function getQualityRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'GetQualityRuleList',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQualityRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQualityRuleListRequest $request GetQualityRuleListRequest
     *
     * @return GetQualityRuleListResponse GetQualityRuleListResponse
     */
    public function getQualityRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityRuleListWithOptions($request, $runtime);
    }

    /**
     * @param GetQualityRuleTagListRequest $request GetQualityRuleTagListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQualityRuleTagListResponse GetQualityRuleTagListResponse
     */
    public function getQualityRuleTagListWithOptions($request, $runtime)
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
            'action'      => 'GetQualityRuleTagList',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQualityRuleTagListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetQualityRuleTagListRequest $request GetQualityRuleTagListRequest
     *
     * @return GetQualityRuleTagListResponse GetQualityRuleTagListResponse
     */
    public function getQualityRuleTagList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQualityRuleTagListWithOptions($request, $runtime);
    }

    /**
     * @summary 技能组纬度队列信息
     *  *
     * @param GetQueueInformationRequest $tmpReq  GetQueueInformationRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueueInformationResponse GetQueueInformationResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueueInformation',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueueInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 技能组纬度队列信息
     *  *
     * @param GetQueueInformationRequest $request GetQueueInformationRequest
     *
     * @return GetQueueInformationResponse GetQueueInformationResponse
     */
    public function getQueueInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueueInformationWithOptions($request, $runtime);
    }

    /**
     * @param GetRecordDataRequest $request GetRecordDataRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRecordDataResponse GetRecordDataResponse
     */
    public function getRecordDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acid)) {
            $query['Acid'] = $request->acid;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRecordData',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRecordDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRecordDataRequest $request GetRecordDataRequest
     *
     * @return GetRecordDataResponse GetRecordDataResponse
     */
    public function getRecordData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordDataWithOptions($request, $runtime);
    }

    /**
     * @summary 获取录音链接
     *  *
     * @param GetRecordUrlRequest $request GetRecordUrlRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRecordUrlResponse GetRecordUrlResponse
     */
    public function getRecordUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRecordUrl',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRecordUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取录音链接
     *  *
     * @param GetRecordUrlRequest $request GetRecordUrlRequest
     *
     * @return GetRecordUrlResponse GetRecordUrlResponse
     */
    public function getRecordUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordUrlWithOptions($request, $runtime);
    }

    /**
     * @summary 获取RtcToken
     *  *
     * @param GetRtcTokenRequest $request GetRtcTokenRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRtcTokenResponse GetRtcTokenResponse
     */
    public function getRtcTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRtcToken',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRtcTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取RtcToken
     *  *
     * @param GetRtcTokenRequest $request GetRtcTokenRequest
     *
     * @return GetRtcTokenResponse GetRtcTokenResponse
     */
    public function getRtcToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRtcTokenWithOptions($request, $runtime);
    }

    /**
     * @summary 部门纬度坐席信息数据
     *  *
     * @param GetSeatInformationRequest $tmpReq  GetSeatInformationRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSeatInformationResponse GetSeatInformationResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSeatInformation',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSeatInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 部门纬度坐席信息数据
     *  *
     * @param GetSeatInformationRequest $request GetSeatInformationRequest
     *
     * @return GetSeatInformationResponse GetSeatInformationResponse
     */
    public function getSeatInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSeatInformationWithOptions($request, $runtime);
    }

    /**
     * @summary 技能组坐席状态详情
     *  *
     * @param GetSkillGroupAgentStatusDetailsRequest $tmpReq  GetSkillGroupAgentStatusDetailsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSkillGroupAgentStatusDetailsResponse GetSkillGroupAgentStatusDetailsResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSkillGroupAgentStatusDetails',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSkillGroupAgentStatusDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 技能组坐席状态详情
     *  *
     * @param GetSkillGroupAgentStatusDetailsRequest $request GetSkillGroupAgentStatusDetailsRequest
     *
     * @return GetSkillGroupAgentStatusDetailsResponse GetSkillGroupAgentStatusDetailsResponse
     */
    public function getSkillGroupAgentStatusDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupAgentStatusDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary 技能组坐席汇总状态量
     *  *
     * @param GetSkillGroupAndAgentStatusSummaryRequest $tmpReq  GetSkillGroupAndAgentStatusSummaryRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSkillGroupAndAgentStatusSummaryResponse GetSkillGroupAndAgentStatusSummaryResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSkillGroupAndAgentStatusSummary',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSkillGroupAndAgentStatusSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 技能组坐席汇总状态量
     *  *
     * @param GetSkillGroupAndAgentStatusSummaryRequest $request GetSkillGroupAndAgentStatusSummaryRequest
     *
     * @return GetSkillGroupAndAgentStatusSummaryResponse GetSkillGroupAndAgentStatusSummaryResponse
     */
    public function getSkillGroupAndAgentStatusSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupAndAgentStatusSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary 技能组纬度状态量
     *  *
     * @param GetSkillGroupLatitudeStateRequest $tmpReq  GetSkillGroupLatitudeStateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSkillGroupLatitudeStateResponse GetSkillGroupLatitudeStateResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSkillGroupLatitudeState',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSkillGroupLatitudeStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 技能组纬度状态量
     *  *
     * @param GetSkillGroupLatitudeStateRequest $request GetSkillGroupLatitudeStateRequest
     *
     * @return GetSkillGroupLatitudeStateResponse GetSkillGroupLatitudeStateResponse
     */
    public function getSkillGroupLatitudeState($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupLatitudeStateWithOptions($request, $runtime);
    }

    /**
     * @summary 技能组纬度服务能力
     *  *
     * @param GetSkillGroupServiceCapabilityRequest $tmpReq  GetSkillGroupServiceCapabilityRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSkillGroupServiceCapabilityResponse GetSkillGroupServiceCapabilityResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSkillGroupServiceCapability',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSkillGroupServiceCapabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 技能组纬度服务能力
     *  *
     * @param GetSkillGroupServiceCapabilityRequest $request GetSkillGroupServiceCapabilityRequest
     *
     * @return GetSkillGroupServiceCapabilityResponse GetSkillGroupServiceCapabilityResponse
     */
    public function getSkillGroupServiceCapability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupServiceCapabilityWithOptions($request, $runtime);
    }

    /**
     * @summary 技能组服务状态量
     *  *
     * @param GetSkillGroupServiceStatusRequest $tmpReq  GetSkillGroupServiceStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSkillGroupServiceStatusResponse GetSkillGroupServiceStatusResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSkillGroupServiceStatus',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSkillGroupServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 技能组服务状态量
     *  *
     * @param GetSkillGroupServiceStatusRequest $request GetSkillGroupServiceStatusRequest
     *
     * @return GetSkillGroupServiceStatusResponse GetSkillGroupServiceStatusResponse
     */
    public function getSkillGroupServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 技能组状态总量
     *  *
     * @param GetSkillGroupStatusTotalRequest $tmpReq  GetSkillGroupStatusTotalRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSkillGroupStatusTotalResponse GetSkillGroupStatusTotalResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSkillGroupStatusTotal',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSkillGroupStatusTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 技能组状态总量
     *  *
     * @param GetSkillGroupStatusTotalRequest $request GetSkillGroupStatusTotalRequest
     *
     * @return GetSkillGroupStatusTotalResponse GetSkillGroupStatusTotalResponse
     */
    public function getSkillGroupStatusTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSkillGroupStatusTotalWithOptions($request, $runtime);
    }

    /**
     * @summary 移动端呼叫挂断
     *  *
     * @param HangUpDoubleCallRequest $request HangUpDoubleCallRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return HangUpDoubleCallResponse HangUpDoubleCallResponse
     */
    public function hangUpDoubleCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acid)) {
            $query['Acid'] = $request->acid;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HangUpDoubleCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HangUpDoubleCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移动端呼叫挂断
     *  *
     * @param HangUpDoubleCallRequest $request HangUpDoubleCallRequest
     *
     * @return HangUpDoubleCallResponse HangUpDoubleCallResponse
     */
    public function hangUpDoubleCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hangUpDoubleCallWithOptions($request, $runtime);
    }

    /**
     * @param HangupCallRequest $request HangupCallRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return HangupCallResponse HangupCallResponse
     */
    public function hangupCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->callId)) {
            $body['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionId)) {
            $body['ConnectionId'] = $request->connectionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'HangupCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HangupCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HangupCallRequest $request HangupCallRequest
     *
     * @return HangupCallResponse HangupCallResponse
     */
    public function hangupCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hangupCallWithOptions($request, $runtime);
    }

    /**
     * @param HangupThirdCallRequest $request HangupThirdCallRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return HangupThirdCallResponse HangupThirdCallResponse
     */
    public function hangupThirdCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->callId)) {
            $body['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionId)) {
            $body['ConnectionId'] = $request->connectionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'HangupThirdCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HangupThirdCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HangupThirdCallRequest $request HangupThirdCallRequest
     *
     * @return HangupThirdCallResponse HangupThirdCallResponse
     */
    public function hangupThirdCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hangupThirdCallWithOptions($request, $runtime);
    }

    /**
     * @param HoldCallRequest $request HoldCallRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return HoldCallResponse HoldCallResponse
     */
    public function holdCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->callId)) {
            $body['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionId)) {
            $body['ConnectionId'] = $request->connectionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'HoldCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HoldCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HoldCallRequest $request HoldCallRequest
     *
     * @return HoldCallResponse HoldCallResponse
     */
    public function holdCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->holdCallWithOptions($request, $runtime);
    }

    /**
     * @param HotlineSessionQueryRequest $request HotlineSessionQueryRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return HotlineSessionQueryResponse HotlineSessionQueryResponse
     */
    public function hotlineSessionQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acid)) {
            $query['Acid'] = $request->acid;
        }
        if (!Utils::isUnset($request->acidList)) {
            $query['AcidList'] = $request->acidList;
        }
        if (!Utils::isUnset($request->callResult)) {
            $query['CallResult'] = $request->callResult;
        }
        if (!Utils::isUnset($request->callResultList)) {
            $query['CallResultList'] = $request->callResultList;
        }
        if (!Utils::isUnset($request->callType)) {
            $query['CallType'] = $request->callType;
        }
        if (!Utils::isUnset($request->callTypeList)) {
            $query['CallTypeList'] = $request->callTypeList;
        }
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->calledNumberList)) {
            $query['CalledNumberList'] = $request->calledNumberList;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->callingNumberList)) {
            $query['CallingNumberList'] = $request->callingNumberList;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupIdList)) {
            $query['GroupIdList'] = $request->groupIdList;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->memberId)) {
            $query['MemberId'] = $request->memberId;
        }
        if (!Utils::isUnset($request->memberIdList)) {
            $query['MemberIdList'] = $request->memberIdList;
        }
        if (!Utils::isUnset($request->memberName)) {
            $query['MemberName'] = $request->memberName;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->queryEndTime)) {
            $query['QueryEndTime'] = $request->queryEndTime;
        }
        if (!Utils::isUnset($request->queryStartTime)) {
            $query['QueryStartTime'] = $request->queryStartTime;
        }
        if (!Utils::isUnset($request->requestId)) {
            $query['RequestId'] = $request->requestId;
        }
        if (!Utils::isUnset($request->servicerId)) {
            $query['ServicerId'] = $request->servicerId;
        }
        if (!Utils::isUnset($request->servicerIdList)) {
            $query['ServicerIdList'] = $request->servicerIdList;
        }
        if (!Utils::isUnset($request->servicerName)) {
            $query['ServicerName'] = $request->servicerName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HotlineSessionQuery',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HotlineSessionQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param HotlineSessionQueryRequest $request HotlineSessionQueryRequest
     *
     * @return HotlineSessionQueryResponse HotlineSessionQueryResponse
     */
    public function hotlineSessionQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hotlineSessionQueryWithOptions($request, $runtime);
    }

    /**
     * @summary 智能外呼任务导入号码
     *  *
     * @param InsertAiOutboundPhoneNumsRequest $tmpReq  InsertAiOutboundPhoneNumsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return InsertAiOutboundPhoneNumsResponse InsertAiOutboundPhoneNumsResponse
     */
    public function insertAiOutboundPhoneNumsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertAiOutboundPhoneNumsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->details)) {
            $request->detailsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->details, 'Details', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->batchVersion)) {
            $query['BatchVersion'] = $request->batchVersion;
        }
        if (!Utils::isUnset($request->detailsShrink)) {
            $query['Details'] = $request->detailsShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertAiOutboundPhoneNums',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertAiOutboundPhoneNumsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 智能外呼任务导入号码
     *  *
     * @param InsertAiOutboundPhoneNumsRequest $request InsertAiOutboundPhoneNumsRequest
     *
     * @return InsertAiOutboundPhoneNumsResponse InsertAiOutboundPhoneNumsResponse
     */
    public function insertAiOutboundPhoneNums($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertAiOutboundPhoneNumsWithOptions($request, $runtime);
    }

    /**
     * @param InsertTaskDetailRequest $request InsertTaskDetailRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return InsertTaskDetailResponse InsertTaskDetailResponse
     */
    public function insertTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callInfos)) {
            $query['CallInfos'] = $request->callInfos;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->outboundTaskId)) {
            $query['OutboundTaskId'] = $request->outboundTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertTaskDetail',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertTaskDetailRequest $request InsertTaskDetailRequest
     *
     * @return InsertTaskDetailResponse InsertTaskDetailResponse
     */
    public function insertTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param JoinThirdCallRequest $request JoinThirdCallRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return JoinThirdCallResponse JoinThirdCallResponse
     */
    public function joinThirdCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->callId)) {
            $body['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionId)) {
            $body['ConnectionId'] = $request->connectionId;
        }
        if (!Utils::isUnset($request->holdConnectionId)) {
            $body['HoldConnectionId'] = $request->holdConnectionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'JoinThirdCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinThirdCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param JoinThirdCallRequest $request JoinThirdCallRequest
     *
     * @return JoinThirdCallResponse JoinThirdCallResponse
     */
    public function joinThirdCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinThirdCallWithOptions($request, $runtime);
    }

    /**
     * @param ListAgentBySkillGroupIdRequest $request ListAgentBySkillGroupIdRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAgentBySkillGroupIdResponse ListAgentBySkillGroupIdResponse
     */
    public function listAgentBySkillGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAgentBySkillGroupId',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAgentBySkillGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAgentBySkillGroupIdRequest $request ListAgentBySkillGroupIdRequest
     *
     * @return ListAgentBySkillGroupIdResponse ListAgentBySkillGroupIdResponse
     */
    public function listAgentBySkillGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAgentBySkillGroupIdWithOptions($request, $runtime);
    }

    /**
     * @summary 查询所有机器人列表
     *  *
     * @param ListAiccsRobotRequest $request ListAiccsRobotRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAiccsRobotResponse ListAiccsRobotResponse
     */
    public function listAiccsRobotWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->robotName)) {
            $query['RobotName'] = $request->robotName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAiccsRobot',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAiccsRobotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询所有机器人列表
     *  *
     * @param ListAiccsRobotRequest $request ListAiccsRobotRequest
     *
     * @return ListAiccsRobotResponse ListAiccsRobotResponse
     */
    public function listAiccsRobot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAiccsRobotWithOptions($request, $runtime);
    }

    /**
     * @summary 根据时间段查询在线会话详情，包含会话内容，时间段范围最长不超过1天
     *  *
     * @param ListChatRecordDetailRequest $request ListChatRecordDetailRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListChatRecordDetailResponse ListChatRecordDetailResponse
     */
    public function listChatRecordDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListChatRecordDetail',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListChatRecordDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据时间段查询在线会话详情，包含会话内容，时间段范围最长不超过1天
     *  *
     * @param ListChatRecordDetailRequest $request ListChatRecordDetailRequest
     *
     * @return ListChatRecordDetailResponse ListChatRecordDetailResponse
     */
    public function listChatRecordDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChatRecordDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 查看对话记录
     *  *
     * @param ListDialogRequest $request ListDialogRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDialogResponse ListDialogResponse
     */
    public function listDialogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->called)) {
            $query['Called'] = $request->called;
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
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDialog',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDialogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看对话记录
     *  *
     * @param ListDialogRequest $request ListDialogRequest
     *
     * @return ListDialogResponse ListDialogResponse
     */
    public function listDialog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDialogWithOptions($request, $runtime);
    }

    /**
     * @param ListHotlineRecordRequest $request ListHotlineRecordRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHotlineRecordResponse ListHotlineRecordResponse
     */
    public function listHotlineRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotlineRecord',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHotlineRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListHotlineRecordRequest $request ListHotlineRecordRequest
     *
     * @return ListHotlineRecordResponse ListHotlineRecordResponse
     */
    public function listHotlineRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotlineRecordWithOptions($request, $runtime);
    }

    /**
     * @summary 根据时间段查询热线详情列表，包含热线通话信息，时间段范围最长不超过1天
     *  *
     * @param ListHotlineRecordDetailRequest $request ListHotlineRecordDetailRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListHotlineRecordDetailResponse ListHotlineRecordDetailResponse
     */
    public function listHotlineRecordDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListHotlineRecordDetail',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListHotlineRecordDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据时间段查询热线详情列表，包含热线通话信息，时间段范围最长不超过1天
     *  *
     * @param ListHotlineRecordDetailRequest $request ListHotlineRecordDetailRequest
     *
     * @return ListHotlineRecordDetailResponse ListHotlineRecordDetailResponse
     */
    public function listHotlineRecordDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listHotlineRecordDetailWithOptions($request, $runtime);
    }

    /**
     * @param ListOutboundPhoneNumberRequest $request ListOutboundPhoneNumberRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOutboundPhoneNumberResponse ListOutboundPhoneNumberResponse
     */
    public function listOutboundPhoneNumberWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOutboundPhoneNumber',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOutboundPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOutboundPhoneNumberRequest $request ListOutboundPhoneNumberRequest
     *
     * @return ListOutboundPhoneNumberResponse ListOutboundPhoneNumberResponse
     */
    public function listOutboundPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOutboundPhoneNumberWithOptions($request, $runtime);
    }

    /**
     * @summary 查看对话记录
     *  *
     * @param ListRobotCallDialogRequest $request ListRobotCallDialogRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRobotCallDialogResponse ListRobotCallDialogResponse
     */
    public function listRobotCallDialogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->createTime)) {
            $query['CreateTime'] = $request->createTime;
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
            'action'      => 'ListRobotCallDialog',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRobotCallDialogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查看对话记录
     *  *
     * @param ListRobotCallDialogRequest $request ListRobotCallDialogRequest
     *
     * @return ListRobotCallDialogResponse ListRobotCallDialogResponse
     */
    public function listRobotCallDialog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRobotCallDialogWithOptions($request, $runtime);
    }

    /**
     * @summary 查询机器人输出列表
     *  *
     * @param ListRobotNodeRequest $request ListRobotNodeRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRobotNodeResponse ListRobotNodeResponse
     */
    public function listRobotNodeWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->robotId)) {
            $query['RobotId'] = $request->robotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRobotNode',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRobotNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询机器人输出列表
     *  *
     * @param ListRobotNodeRequest $request ListRobotNodeRequest
     *
     * @return ListRobotNodeResponse ListRobotNodeResponse
     */
    public function listRobotNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRobotNodeWithOptions($request, $runtime);
    }

    /**
     * @summary 查询参数列表
     *  *
     * @param ListRobotParamsRequest $request ListRobotParamsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRobotParamsResponse ListRobotParamsResponse
     */
    public function listRobotParamsWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->robotId)) {
            $query['RobotId'] = $request->robotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRobotParams',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRobotParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询参数列表
     *  *
     * @param ListRobotParamsRequest $request ListRobotParamsRequest
     *
     * @return ListRobotParamsResponse ListRobotParamsResponse
     */
    public function listRobotParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRobotParamsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取租户下的所有角色
     *  *
     * @param ListRolesRequest $request ListRolesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRolesResponse ListRolesResponse
     */
    public function listRolesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRoles',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取租户下的所有角色
     *  *
     * @param ListRolesRequest $request ListRolesRequest
     *
     * @return ListRolesResponse ListRolesResponse
     */
    public function listRoles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRolesWithOptions($request, $runtime);
    }

    /**
     * @param ListSkillGroupRequest $request ListSkillGroupRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSkillGroupResponse ListSkillGroupResponse
     */
    public function listSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSkillGroup',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSkillGroupRequest $request ListSkillGroupRequest
     *
     * @return ListSkillGroupResponse ListSkillGroupResponse
     */
    public function listSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 查询任务列表
     *  *
     * @param ListTaskRequest $request ListTaskRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskResponse ListTaskResponse
     */
    public function listTaskWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->robotName)) {
            $query['RobotName'] = $request->robotName;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询任务列表
     *  *
     * @param ListTaskRequest $request ListTaskRequest
     *
     * @return ListTaskResponse ListTaskResponse
     */
    public function listTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 任务详情查看通话列表
     *  *
     * @param ListTaskDetailRequest $request ListTaskDetailRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTaskDetailResponse ListTaskDetailResponse
     */
    public function listTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->called)) {
            $query['Called'] = $request->called;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->statusCode)) {
            $query['StatusCode'] = $request->statusCode;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTaskDetail',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 任务详情查看通话列表
     *  *
     * @param ListTaskDetailRequest $request ListTaskDetailRequest
     *
     * @return ListTaskDetailResponse ListTaskDetailResponse
     */
    public function listTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @summary 基于大模型的智能外呼
     *  *
     * @param LlmSmartCallRequest $tmpReq  LlmSmartCallRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return LlmSmartCallResponse LlmSmartCallResponse
     */
    public function llmSmartCallWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new LlmSmartCallShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->promptParam)) {
            $request->promptParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->promptParam, 'PromptParam', 'json');
        }
        if (!Utils::isUnset($tmpReq->startWordParam)) {
            $request->startWordParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->startWordParam, 'StartWordParam', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->applicationCode)) {
            $query['ApplicationCode'] = $request->applicationCode;
        }
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callerNumber)) {
            $query['CallerNumber'] = $request->callerNumber;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->promptParamShrink)) {
            $query['PromptParam'] = $request->promptParamShrink;
        }
        if (!Utils::isUnset($request->startWordParamShrink)) {
            $query['StartWordParam'] = $request->startWordParamShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LlmSmartCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LlmSmartCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 基于大模型的智能外呼
     *  *
     * @param LlmSmartCallRequest $request LlmSmartCallRequest
     *
     * @return LlmSmartCallResponse LlmSmartCallResponse
     */
    public function llmSmartCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->llmSmartCallWithOptions($request, $runtime);
    }

    /**
     * @param MakeCallRequest $request MakeCallRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return MakeCallResponse MakeCallResponse
     */
    public function makeCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->commandCode)) {
            $query['CommandCode'] = $request->commandCode;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->outerAccountId)) {
            $query['OuterAccountId'] = $request->outerAccountId;
        }
        if (!Utils::isUnset($request->outerAccountType)) {
            $query['OuterAccountType'] = $request->outerAccountType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MakeCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MakeCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MakeCallRequest $request MakeCallRequest
     *
     * @return MakeCallResponse MakeCallResponse
     */
    public function makeCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->makeCallWithOptions($request, $runtime);
    }

    /**
     * @summary 移动端发起呼叫
     *  *
     * @param MakeDoubleCallRequest $request MakeDoubleCallRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return MakeDoubleCallResponse MakeDoubleCallResponse
     */
    public function makeDoubleCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountName)) {
            $query['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->bizData)) {
            $query['BizData'] = $request->bizData;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->memberPhone)) {
            $query['MemberPhone'] = $request->memberPhone;
        }
        if (!Utils::isUnset($request->outboundCallNumber)) {
            $query['OutboundCallNumber'] = $request->outboundCallNumber;
        }
        if (!Utils::isUnset($request->servicerPhone)) {
            $query['ServicerPhone'] = $request->servicerPhone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MakeDoubleCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MakeDoubleCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移动端发起呼叫
     *  *
     * @param MakeDoubleCallRequest $request MakeDoubleCallRequest
     *
     * @return MakeDoubleCallResponse MakeDoubleCallResponse
     */
    public function makeDoubleCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->makeDoubleCallWithOptions($request, $runtime);
    }

    /**
     * @param QueryHotlineInQueueRequest $request QueryHotlineInQueueRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryHotlineInQueueResponse QueryHotlineInQueueResponse
     */
    public function queryHotlineInQueueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryHotlineInQueue',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryHotlineInQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryHotlineInQueueRequest $request QueryHotlineInQueueRequest
     *
     * @return QueryHotlineInQueueResponse QueryHotlineInQueueResponse
     */
    public function queryHotlineInQueue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHotlineInQueueWithOptions($request, $runtime);
    }

    /**
     * @summary 查询热线号码配置
     *  *
     * @param QueryHotlineNumberRequest $tmpReq  QueryHotlineNumberRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryHotlineNumberResponse QueryHotlineNumberResponse
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryHotlineNumber',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryHotlineNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询热线号码配置
     *  *
     * @param QueryHotlineNumberRequest $request QueryHotlineNumberRequest
     *
     * @return QueryHotlineNumberResponse QueryHotlineNumberResponse
     */
    public function queryHotlineNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHotlineNumberWithOptions($request, $runtime);
    }

    /**
     * @param QueryOutboundTaskRequest $request QueryOutboundTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryOutboundTaskResponse QueryOutboundTaskResponse
     */
    public function queryOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ani)) {
            $query['Ani'] = $request->ani;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->skillGroup)) {
            $query['SkillGroup'] = $request->skillGroup;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
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
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryOutboundTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOutboundTaskRequest $request QueryOutboundTaskRequest
     *
     * @return QueryOutboundTaskResponse QueryOutboundTaskResponse
     */
    public function queryOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @param QuerySkillGroupsRequest $request QuerySkillGroupsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySkillGroupsResponse QuerySkillGroupsResponse
     */
    public function querySkillGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelType)) {
            $query['ChannelType'] = $request->channelType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'QuerySkillGroups',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySkillGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySkillGroupsRequest $request QuerySkillGroupsRequest
     *
     * @return QuerySkillGroupsResponse QuerySkillGroupsResponse
     */
    public function querySkillGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySkillGroupsWithOptions($request, $runtime);
    }

    /**
     * @param QueryTaskDetailRequest $request QueryTaskDetailRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTaskDetailResponse QueryTaskDetailResponse
     */
    public function queryTaskDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ani)) {
            $query['Ani'] = $request->ani;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->departmentIdList)) {
            $query['DepartmentIdList'] = $request->departmentIdList;
        }
        if (!Utils::isUnset($request->dnis)) {
            $query['Dnis'] = $request->dnis;
        }
        if (!Utils::isUnset($request->endReasonList)) {
            $query['EndReasonList'] = $request->endReasonList;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->outboundTaskId)) {
            $query['OutboundTaskId'] = $request->outboundTaskId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->priorityList)) {
            $query['PriorityList'] = $request->priorityList;
        }
        if (!Utils::isUnset($request->servicerId)) {
            $query['ServicerId'] = $request->servicerId;
        }
        if (!Utils::isUnset($request->servicerName)) {
            $query['ServicerName'] = $request->servicerName;
        }
        if (!Utils::isUnset($request->sid)) {
            $query['Sid'] = $request->sid;
        }
        if (!Utils::isUnset($request->skillGroup)) {
            $query['SkillGroup'] = $request->skillGroup;
        }
        if (!Utils::isUnset($request->statusList)) {
            $query['StatusList'] = $request->statusList;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTaskDetail',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTaskDetailRequest $request QueryTaskDetailRequest
     *
     * @return QueryTaskDetailResponse QueryTaskDetailResponse
     */
    public function queryTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryTicketsRequest $tmpReq  QueryTicketsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTicketsResponse QueryTicketsResponse
     */
    public function queryTicketsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryTicketsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extra)) {
            $request->extraShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->caseId)) {
            $body['CaseId'] = $request->caseId;
        }
        if (!Utils::isUnset($request->caseStatus)) {
            $body['CaseStatus'] = $request->caseStatus;
        }
        if (!Utils::isUnset($request->caseType)) {
            $body['CaseType'] = $request->caseType;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->channelType)) {
            $body['ChannelType'] = $request->channelType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealId)) {
            $body['DealId'] = $request->dealId;
        }
        if (!Utils::isUnset($request->extraShrink)) {
            $body['Extra'] = $request->extraShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->srType)) {
            $body['SrType'] = $request->srType;
        }
        if (!Utils::isUnset($request->taskStatus)) {
            $body['TaskStatus'] = $request->taskStatus;
        }
        if (!Utils::isUnset($request->touchId)) {
            $body['TouchId'] = $request->touchId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryTickets',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTicketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTicketsRequest $request QueryTicketsRequest
     *
     * @return QueryTicketsResponse QueryTicketsResponse
     */
    public function queryTickets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTicketsWithOptions($request, $runtime);
    }

    /**
     * @param QueryTouchListRequest $request QueryTouchListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTouchListResponse QueryTouchListResponse
     */
    public function queryTouchListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->channelType)) {
            $body['ChannelType'] = $request->channelType;
        }
        if (!Utils::isUnset($request->closeTimeEnd)) {
            $body['CloseTimeEnd'] = $request->closeTimeEnd;
        }
        if (!Utils::isUnset($request->closeTimeStart)) {
            $body['CloseTimeStart'] = $request->closeTimeStart;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->evaluationLevel)) {
            $body['EvaluationLevel'] = $request->evaluationLevel;
        }
        if (!Utils::isUnset($request->evaluationScore)) {
            $body['EvaluationScore'] = $request->evaluationScore;
        }
        if (!Utils::isUnset($request->evaluationStatus)) {
            $body['EvaluationStatus'] = $request->evaluationStatus;
        }
        if (!Utils::isUnset($request->firstTimeEnd)) {
            $body['FirstTimeEnd'] = $request->firstTimeEnd;
        }
        if (!Utils::isUnset($request->firstTimeStart)) {
            $body['FirstTimeStart'] = $request->firstTimeStart;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->memberId)) {
            $body['MemberId'] = $request->memberId;
        }
        if (!Utils::isUnset($request->memberName)) {
            $body['MemberName'] = $request->memberName;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queueId)) {
            $body['QueueId'] = $request->queueId;
        }
        if (!Utils::isUnset($request->servicerId)) {
            $body['ServicerId'] = $request->servicerId;
        }
        if (!Utils::isUnset($request->servicerName)) {
            $body['ServicerName'] = $request->servicerName;
        }
        if (!Utils::isUnset($request->touchId)) {
            $body['TouchId'] = $request->touchId;
        }
        if (!Utils::isUnset($request->touchType)) {
            $body['TouchType'] = $request->touchType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryTouchList',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTouchListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryTouchListRequest $request QueryTouchListRequest
     *
     * @return QueryTouchListResponse QueryTouchListResponse
     */
    public function queryTouchList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTouchListWithOptions($request, $runtime);
    }

    /**
     * @summary 从技能组中移除坐席
     *  *
     * @param RemoveAgentFromSkillGroupRequest $tmpReq  RemoveAgentFromSkillGroupRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveAgentFromSkillGroupResponse RemoveAgentFromSkillGroupResponse
     */
    public function removeAgentFromSkillGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveAgentFromSkillGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->agentIds)) {
            $request->agentIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentIdsShrink)) {
            $query['AgentIds'] = $request->agentIdsShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveAgentFromSkillGroup',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAgentFromSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 从技能组中移除坐席
     *  *
     * @param RemoveAgentFromSkillGroupRequest $request RemoveAgentFromSkillGroupRequest
     *
     * @return RemoveAgentFromSkillGroupResponse RemoveAgentFromSkillGroupResponse
     */
    public function removeAgentFromSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAgentFromSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param RemoveSkillGroupRequest $request RemoveSkillGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveSkillGroupResponse RemoveSkillGroupResponse
     */
    public function removeSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $body['SkillGroupId'] = $request->skillGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveSkillGroup',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveSkillGroupRequest $request RemoveSkillGroupRequest
     *
     * @return RemoveSkillGroupResponse RemoveSkillGroupResponse
     */
    public function removeSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 重置热线号码
     *  *
     * @param ResetHotlineNumberRequest $tmpReq  ResetHotlineNumberRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetHotlineNumberResponse ResetHotlineNumberResponse
     */
    public function resetHotlineNumberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ResetHotlineNumberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->outboundRangeList)) {
            $request->outboundRangeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outboundRangeList, 'OutboundRangeList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableInbound)) {
            $body['EnableInbound'] = $request->enableInbound;
        }
        if (!Utils::isUnset($request->enableInboundEvaluation)) {
            $body['EnableInboundEvaluation'] = $request->enableInboundEvaluation;
        }
        if (!Utils::isUnset($request->enableOutbound)) {
            $body['EnableOutbound'] = $request->enableOutbound;
        }
        if (!Utils::isUnset($request->enableOutboundEvaluation)) {
            $body['EnableOutboundEvaluation'] = $request->enableOutboundEvaluation;
        }
        if (!Utils::isUnset($request->evaluationLevel)) {
            $body['EvaluationLevel'] = $request->evaluationLevel;
        }
        if (!Utils::isUnset($request->hotlineNumber)) {
            $body['HotlineNumber'] = $request->hotlineNumber;
        }
        if (!Utils::isUnset($request->inboundFlowId)) {
            $body['InboundFlowId'] = $request->inboundFlowId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->outboundAllDepart)) {
            $body['OutboundAllDepart'] = $request->outboundAllDepart;
        }
        if (!Utils::isUnset($request->outboundRangeListShrink)) {
            $body['OutboundRangeList'] = $request->outboundRangeListShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetHotlineNumber',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetHotlineNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重置热线号码
     *  *
     * @param ResetHotlineNumberRequest $request ResetHotlineNumberRequest
     *
     * @return ResetHotlineNumberResponse ResetHotlineNumberResponse
     */
    public function resetHotlineNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetHotlineNumberWithOptions($request, $runtime);
    }

    /**
     * @param RestartOutboundTaskRequest $request RestartOutboundTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartOutboundTaskResponse RestartOutboundTaskResponse
     */
    public function restartOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->outboundTaskId)) {
            $query['OutboundTaskId'] = $request->outboundTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartOutboundTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartOutboundTaskRequest $request RestartOutboundTaskRequest
     *
     * @return RestartOutboundTaskResponse RestartOutboundTaskResponse
     */
    public function restartOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @param RobotCallRequest $request RobotCallRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return RobotCallResponse RobotCallResponse
     */
    public function robotCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->calledShowNumber)) {
            $query['CalledShowNumber'] = $request->calledShowNumber;
        }
        if (!Utils::isUnset($request->earlyMediaAsr)) {
            $query['EarlyMediaAsr'] = $request->earlyMediaAsr;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
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
        if (!Utils::isUnset($request->robotId)) {
            $query['RobotId'] = $request->robotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RobotCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RobotCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RobotCallRequest $request RobotCallRequest
     *
     * @return RobotCallResponse RobotCallResponse
     */
    public function robotCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->robotCallWithOptions($request, $runtime);
    }

    /**
     * @param SendCcoSmartCallRequest $request SendCcoSmartCallRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SendCcoSmartCallResponse SendCcoSmartCallResponse
     */
    public function sendCcoSmartCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionCodeBreak)) {
            $query['ActionCodeBreak'] = $request->actionCodeBreak;
        }
        if (!Utils::isUnset($request->actionCodeTimeBreak)) {
            $query['ActionCodeTimeBreak'] = $request->actionCodeTimeBreak;
        }
        if (!Utils::isUnset($request->asrAlsAmId)) {
            $query['AsrAlsAmId'] = $request->asrAlsAmId;
        }
        if (!Utils::isUnset($request->asrBaseId)) {
            $query['AsrBaseId'] = $request->asrBaseId;
        }
        if (!Utils::isUnset($request->asrModelId)) {
            $query['AsrModelId'] = $request->asrModelId;
        }
        if (!Utils::isUnset($request->asrVocabularyId)) {
            $query['AsrVocabularyId'] = $request->asrVocabularyId;
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
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
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
            'action'      => 'SendCcoSmartCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendCcoSmartCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendCcoSmartCallRequest $request SendCcoSmartCallRequest
     *
     * @return SendCcoSmartCallResponse SendCcoSmartCallResponse
     */
    public function sendCcoSmartCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCcoSmartCallWithOptions($request, $runtime);
    }

    /**
     * @param SendCcoSmartCallOperateRequest $request SendCcoSmartCallOperateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SendCcoSmartCallOperateResponse SendCcoSmartCallOperateResponse
     */
    public function sendCcoSmartCallOperateWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->prodCode)) {
            $query['ProdCode'] = $request->prodCode;
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
            'action'      => 'SendCcoSmartCallOperate',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendCcoSmartCallOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendCcoSmartCallOperateRequest $request SendCcoSmartCallOperateRequest
     *
     * @return SendCcoSmartCallOperateResponse SendCcoSmartCallOperateResponse
     */
    public function sendCcoSmartCallOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCcoSmartCallOperateWithOptions($request, $runtime);
    }

    /**
     * @param SendHotlineHeartBeatRequest $request SendHotlineHeartBeatRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SendHotlineHeartBeatResponse SendHotlineHeartBeatResponse
     */
    public function sendHotlineHeartBeatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendHotlineHeartBeat',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendHotlineHeartBeatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendHotlineHeartBeatRequest $request SendHotlineHeartBeatRequest
     *
     * @return SendHotlineHeartBeatResponse SendHotlineHeartBeatResponse
     */
    public function sendHotlineHeartBeat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendHotlineHeartBeatWithOptions($request, $runtime);
    }

    /**
     * @summary 启动智能外呼任务
     *  *
     * @param StartAiOutboundTaskRequest $request StartAiOutboundTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StartAiOutboundTaskResponse StartAiOutboundTaskResponse
     */
    public function startAiOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartAiOutboundTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartAiOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动智能外呼任务
     *  *
     * @param StartAiOutboundTaskRequest $request StartAiOutboundTaskRequest
     *
     * @return StartAiOutboundTaskResponse StartAiOutboundTaskResponse
     */
    public function startAiOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAiOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @param StartCallRequest $request StartCallRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return StartCallResponse StartCallResponse
     */
    public function startCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->callee)) {
            $body['Callee'] = $request->callee;
        }
        if (!Utils::isUnset($request->caller)) {
            $body['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartCall',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartCallRequest $request StartCallRequest
     *
     * @return StartCallResponse StartCallResponse
     */
    public function startCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCallWithOptions($request, $runtime);
    }

    /**
     * @param StartCallV2Request $request StartCallV2Request
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StartCallV2Response StartCallV2Response
     */
    public function startCallV2WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->callee)) {
            $body['Callee'] = $request->callee;
        }
        if (!Utils::isUnset($request->caller)) {
            $body['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->callerType)) {
            $body['CallerType'] = $request->callerType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartCallV2',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartCallV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartCallV2Request $request StartCallV2Request
     *
     * @return StartCallV2Response StartCallV2Response
     */
    public function startCallV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startCallV2WithOptions($request, $runtime);
    }

    /**
     * @summary 修改在线客服为上班状态
     *  *
     * @param StartChatWorkRequest $request StartChatWorkRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StartChatWorkResponse StartChatWorkResponse
     */
    public function startChatWorkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartChatWork',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartChatWorkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改在线客服为上班状态
     *  *
     * @param StartChatWorkRequest $request StartChatWorkRequest
     *
     * @return StartChatWorkResponse StartChatWorkResponse
     */
    public function startChatWork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startChatWorkWithOptions($request, $runtime);
    }

    /**
     * @param StartHotlineServiceRequest $request StartHotlineServiceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StartHotlineServiceResponse StartHotlineServiceResponse
     */
    public function startHotlineServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartHotlineService',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartHotlineServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartHotlineServiceRequest $request StartHotlineServiceRequest
     *
     * @return StartHotlineServiceResponse StartHotlineServiceResponse
     */
    public function startHotlineService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startHotlineServiceWithOptions($request, $runtime);
    }

    /**
     * @param StartMicroOutboundRequest $request StartMicroOutboundRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StartMicroOutboundResponse StartMicroOutboundResponse
     */
    public function startMicroOutboundWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->accountType)) {
            $query['AccountType'] = $request->accountType;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->calledNumber)) {
            $query['CalledNumber'] = $request->calledNumber;
        }
        if (!Utils::isUnset($request->callingNumber)) {
            $query['CallingNumber'] = $request->callingNumber;
        }
        if (!Utils::isUnset($request->commandCode)) {
            $query['CommandCode'] = $request->commandCode;
        }
        if (!Utils::isUnset($request->extInfo)) {
            $query['ExtInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartMicroOutbound',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartMicroOutboundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartMicroOutboundRequest $request StartMicroOutboundRequest
     *
     * @return StartMicroOutboundResponse StartMicroOutboundResponse
     */
    public function startMicroOutbound($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startMicroOutboundWithOptions($request, $runtime);
    }

    /**
     * @summary 立即或定时启动智能外呼任务
     *  *
     * @param StartTaskRequest $request StartTaskRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return StartTaskResponse StartTaskResponse
     */
    public function startTaskWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->startNow)) {
            $query['StartNow'] = $request->startNow;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 立即或定时启动智能外呼任务
     *  *
     * @param StartTaskRequest $request StartTaskRequest
     *
     * @return StartTaskResponse StartTaskResponse
     */
    public function startTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 手动暂停智能外呼任务
     *  *
     * @param StopAiOutboundTaskRequest $request StopAiOutboundTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StopAiOutboundTaskResponse StopAiOutboundTaskResponse
     */
    public function stopAiOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopAiOutboundTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopAiOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 手动暂停智能外呼任务
     *  *
     * @param StopAiOutboundTaskRequest $request StopAiOutboundTaskRequest
     *
     * @return StopAiOutboundTaskResponse StopAiOutboundTaskResponse
     */
    public function stopAiOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAiOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 暂停外呼任务
     *  *
     * @param StopTaskRequest $request StopTaskRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return StopTaskResponse StopTaskResponse
     */
    public function stopTaskWithOptions($request, $runtime)
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
            'action'      => 'StopTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 暂停外呼任务
     *  *
     * @param StopTaskRequest $request StopTaskRequest
     *
     * @return StopTaskResponse StopTaskResponse
     */
    public function stopTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTaskWithOptions($request, $runtime);
    }

    /**
     * @param SuspendHotlineServiceRequest $request SuspendHotlineServiceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendHotlineServiceResponse SuspendHotlineServiceResponse
     */
    public function suspendHotlineServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SuspendHotlineService',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendHotlineServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuspendHotlineServiceRequest $request SuspendHotlineServiceRequest
     *
     * @return SuspendHotlineServiceResponse SuspendHotlineServiceResponse
     */
    public function suspendHotlineService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendHotlineServiceWithOptions($request, $runtime);
    }

    /**
     * @param SuspendOutboundTaskRequest $request SuspendOutboundTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SuspendOutboundTaskResponse SuspendOutboundTaskResponse
     */
    public function suspendOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->outboundTaskId)) {
            $query['OutboundTaskId'] = $request->outboundTaskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SuspendOutboundTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SuspendOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SuspendOutboundTaskRequest $request SuspendOutboundTaskRequest
     *
     * @return SuspendOutboundTaskResponse SuspendOutboundTaskResponse
     */
    public function suspendOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->suspendOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 终止智能外呼任务
     *  *
     * @param TerminateAiOutboundTaskRequest $request TerminateAiOutboundTaskRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return TerminateAiOutboundTaskResponse TerminateAiOutboundTaskResponse
     */
    public function terminateAiOutboundTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TerminateAiOutboundTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TerminateAiOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 终止智能外呼任务
     *  *
     * @param TerminateAiOutboundTaskRequest $request TerminateAiOutboundTaskRequest
     *
     * @return TerminateAiOutboundTaskResponse TerminateAiOutboundTaskResponse
     */
    public function terminateAiOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateAiOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @param TransferCallToSkillGroupRequest $request TransferCallToSkillGroupRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return TransferCallToSkillGroupResponse TransferCallToSkillGroupResponse
     */
    public function transferCallToSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->callId)) {
            $body['CallId'] = $request->callId;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->connectionId)) {
            $body['ConnectionId'] = $request->connectionId;
        }
        if (!Utils::isUnset($request->holdConnectionId)) {
            $body['HoldConnectionId'] = $request->holdConnectionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isSingleTransfer)) {
            $body['IsSingleTransfer'] = $request->isSingleTransfer;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $body['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TransferCallToSkillGroup',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferCallToSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TransferCallToSkillGroupRequest $request TransferCallToSkillGroupRequest
     *
     * @return TransferCallToSkillGroupResponse TransferCallToSkillGroupResponse
     */
    public function transferCallToSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferCallToSkillGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAgentRequest $request UpdateAgentRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAgentResponse UpdateAgentResponse
     */
    public function updateAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $body['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->skillGroupIdList)) {
            $body['SkillGroupIdList'] = $request->skillGroupIdList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAgent',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAgentRequest $request UpdateAgentRequest
     *
     * @return UpdateAgentResponse UpdateAgentResponse
     */
    public function updateAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgentWithOptions($request, $runtime);
    }

    /**
     * @summary 更新智能外呼任务（预测式外呼、自动外呼）
     *  *
     * @param UpdateAiOutboundTaskRequest $tmpReq  UpdateAiOutboundTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAiOutboundTaskResponse UpdateAiOutboundTaskResponse
     */
    public function updateAiOutboundTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAiOutboundTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->outboundNums)) {
            $request->outboundNumsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outboundNums, 'OutboundNums', 'json');
        }
        if (!Utils::isUnset($tmpReq->recallRule)) {
            $request->recallRuleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recallRule, 'RecallRule', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->concurrentRate)) {
            $query['ConcurrentRate'] = $request->concurrentRate;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->executionTime)) {
            $query['ExecutionTime'] = $request->executionTime;
        }
        if (!Utils::isUnset($request->forecastCallRate)) {
            $query['ForecastCallRate'] = $request->forecastCallRate;
        }
        if (!Utils::isUnset($request->handlerId)) {
            $query['HandlerId'] = $request->handlerId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->numRepeated)) {
            $query['NumRepeated'] = $request->numRepeated;
        }
        if (!Utils::isUnset($request->outboundNumsShrink)) {
            $query['OutboundNums'] = $request->outboundNumsShrink;
        }
        if (!Utils::isUnset($request->recallRuleShrink)) {
            $query['RecallRule'] = $request->recallRuleShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAiOutboundTask',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAiOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新智能外呼任务（预测式外呼、自动外呼）
     *  *
     * @param UpdateAiOutboundTaskRequest $request UpdateAiOutboundTaskRequest
     *
     * @return UpdateAiOutboundTaskResponse UpdateAiOutboundTaskResponse
     */
    public function updateAiOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAiOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 更新部门信息
     *  *
     * @param UpdateDepartmentRequest $request UpdateDepartmentRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDepartmentResponse UpdateDepartmentResponse
     */
    public function updateDepartmentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->departmentId)) {
            $query['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->departmentName)) {
            $query['DepartmentName'] = $request->departmentName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDepartment',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新部门信息
     *  *
     * @param UpdateDepartmentRequest $request UpdateDepartmentRequest
     *
     * @return UpdateDepartmentResponse UpdateDepartmentResponse
     */
    public function updateDepartment($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDepartmentWithOptions($request, $runtime);
    }

    /**
     * @param UpdateOuterAccountRequest $request UpdateOuterAccountRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateOuterAccountResponse UpdateOuterAccountResponse
     */
    public function updateOuterAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateOuterAccount',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateOuterAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateOuterAccountRequest $request UpdateOuterAccountRequest
     *
     * @return UpdateOuterAccountResponse UpdateOuterAccountResponse
     */
    public function updateOuterAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateOuterAccountWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSkillGroupRequest $request UpdateSkillGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSkillGroupResponse UpdateSkillGroupResponse
     */
    public function updateSkillGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->skillGroupId)) {
            $query['SkillGroupId'] = $request->skillGroupId;
        }
        if (!Utils::isUnset($request->skillGroupName)) {
            $query['SkillGroupName'] = $request->skillGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSkillGroup',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSkillGroupRequest $request UpdateSkillGroupRequest
     *
     * @return UpdateSkillGroupResponse UpdateSkillGroupResponse
     */
    public function updateSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSkillGroupWithOptions($request, $runtime);
    }
}
