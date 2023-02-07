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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListOuterOrderedNumbersRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListOuterOrderedNumbersResponse;
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
     * @param CreateAiOutboundTaskRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateAiOutboundTaskResponse
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
     * @param CreateAiOutboundTaskRequest $request
     *
     * @return CreateAiOutboundTaskResponse
     */
    public function createAiOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAiOutboundTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateAiOutboundTaskBatchRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateAiOutboundTaskBatchResponse
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
     * @param CreateAiOutboundTaskBatchRequest $request
     *
     * @return CreateAiOutboundTaskBatchResponse
     */
    public function createAiOutboundTaskBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAiOutboundTaskBatchWithOptions($request, $runtime);
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
     * @param DeleteAiOutboundTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteAiOutboundTaskResponse
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
     * @param DeleteAiOutboundTaskRequest $request
     *
     * @return DeleteAiOutboundTaskResponse
     */
    public function deleteAiOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAiOutboundTaskWithOptions($request, $runtime);
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
     * @param GetAiOutboundTaskBizDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAiOutboundTaskBizDataResponse
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
     * @param GetAiOutboundTaskBizDataRequest $request
     *
     * @return GetAiOutboundTaskBizDataResponse
     */
    public function getAiOutboundTaskBizData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiOutboundTaskBizDataWithOptions($request, $runtime);
    }

    /**
     * @param GetAiOutboundTaskDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAiOutboundTaskDetailResponse
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
     * @param GetAiOutboundTaskDetailRequest $request
     *
     * @return GetAiOutboundTaskDetailResponse
     */
    public function getAiOutboundTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiOutboundTaskDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetAiOutboundTaskExecDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetAiOutboundTaskExecDetailResponse
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
     * @param GetAiOutboundTaskExecDetailRequest $request
     *
     * @return GetAiOutboundTaskExecDetailResponse
     */
    public function getAiOutboundTaskExecDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiOutboundTaskExecDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetAiOutboundTaskListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAiOutboundTaskListResponse
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
     * @param GetAiOutboundTaskListRequest $request
     *
     * @return GetAiOutboundTaskListResponse
     */
    public function getAiOutboundTaskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiOutboundTaskListWithOptions($request, $runtime);
    }

    /**
     * @param GetAiOutboundTaskProgressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetAiOutboundTaskProgressResponse
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
     * @param GetAiOutboundTaskProgressRequest $request
     *
     * @return GetAiOutboundTaskProgressResponse
     */
    public function getAiOutboundTaskProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAiOutboundTaskProgressWithOptions($request, $runtime);
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
     * @param GetCallSoundRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetCallSoundRecordResponse
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
     * @param GetCallSoundRecordRequest $request
     *
     * @return GetCallSoundRecordResponse
     */
    public function getCallSoundRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallSoundRecordWithOptions($request, $runtime);
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
     * @param GetRecordUrlRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetRecordUrlResponse
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
     * @param GetRecordUrlRequest $request
     *
     * @return GetRecordUrlResponse
     */
    public function getRecordUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRecordUrlWithOptions($request, $runtime);
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
     * @param HangUpDoubleCallRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return HangUpDoubleCallResponse
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
     * @param HangupCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return HangupCallResponse
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
     * @param HangupThirdCallRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return HangupThirdCallResponse
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
     * @param InsertAiOutboundPhoneNumsRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return InsertAiOutboundPhoneNumsResponse
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
     * @param InsertAiOutboundPhoneNumsRequest $request
     *
     * @return InsertAiOutboundPhoneNumsResponse
     */
    public function insertAiOutboundPhoneNums($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertAiOutboundPhoneNumsWithOptions($request, $runtime);
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
     * @param ListOuterOrderedNumbersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOuterOrderedNumbersResponse
     */
    public function listOuterOrderedNumbersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ListOuterOrderedNumbers',
            'version'     => '2019-10-15',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOuterOrderedNumbersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListRobotNodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListRobotNodeResponse
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
     * @param ListRobotNodeRequest $request
     *
     * @return ListRobotNodeResponse
     */
    public function listRobotNode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRobotNodeWithOptions($request, $runtime);
    }

    /**
     * @param ListRobotParamsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRobotParamsResponse
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
     * @param ListRobotParamsRequest $request
     *
     * @return ListRobotParamsResponse
     */
    public function listRobotParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRobotParamsWithOptions($request, $runtime);
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
     * @param RemoveAgentFromSkillGroupRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveAgentFromSkillGroupResponse
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
     * @param RemoveAgentFromSkillGroupRequest $request
     *
     * @return RemoveAgentFromSkillGroupResponse
     */
    public function removeAgentFromSkillGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAgentFromSkillGroupWithOptions($request, $runtime);
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
     * @param StartAiOutboundTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartAiOutboundTaskResponse
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
     * @param StartAiOutboundTaskRequest $request
     *
     * @return StartAiOutboundTaskResponse
     */
    public function startAiOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAiOutboundTaskWithOptions($request, $runtime);
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
     * @param StopAiOutboundTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopAiOutboundTaskResponse
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
     * @param StopAiOutboundTaskRequest $request
     *
     * @return StopAiOutboundTaskResponse
     */
    public function stopAiOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAiOutboundTaskWithOptions($request, $runtime);
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
     * @param TerminateAiOutboundTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return TerminateAiOutboundTaskResponse
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
     * @param TerminateAiOutboundTaskRequest $request
     *
     * @return TerminateAiOutboundTaskResponse
     */
    public function terminateAiOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateAiOutboundTaskWithOptions($request, $runtime);
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
     * @param UpdateAiOutboundTaskRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateAiOutboundTaskResponse
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
     * @param UpdateAiOutboundTaskRequest $request
     *
     * @return UpdateAiOutboundTaskResponse
     */
    public function updateAiOutboundTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAiOutboundTaskWithOptions($request, $runtime);
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
