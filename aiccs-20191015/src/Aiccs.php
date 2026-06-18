<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddHotlineNumberRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddHotlineNumberResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddHotlineNumberShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddInboundNumberRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddInboundNumberResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddInboundNumberShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddLargeModelRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddLargeModelResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddLargeModelShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddModelApplicationRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddModelApplicationResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\AddModelApplicationShrinkRequest;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CancelAiCallDetailsRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CancelAiCallDetailsResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CancelAiCallDetailsShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CancelTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CancelTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ChangeChatAgentStatusRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ChangeChatAgentStatusResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ChangeQualityProjectStatusRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ChangeQualityProjectStatusResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAgentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAgentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAiCallTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAiCallTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\CreateAiCallTaskShrinkRequest;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAudioNoteUploadUrlRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAudioNoteUploadUrlResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetCallDialogContentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetCallDialogContentResponse;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HangupOperateRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HangupOperateResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HangupThirdCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HangupThirdCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HoldCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HoldCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HotlineSessionQueryRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\HotlineSessionQueryResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ImportOneTaskPhoneNumberRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ImportOneTaskPhoneNumberResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ImportOneTaskPhoneNumberShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ImportTaskNumberDatasRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ImportTaskNumberDatasResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ImportTaskNumberDatasShrinkRequest;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListAvailableTtsRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\ListAvailableTtsResponse;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmFullDuplexCallOperateRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmFullDuplexCallOperateResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmSmartCallEncryptRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmSmartCallEncryptResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmSmartCallEncryptShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmSmartCallFullDuplexRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmSmartCallFullDuplexResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmSmartCallFullDuplexShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmSmartCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmSmartCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\LlmSmartCallShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\MakeCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\MakeCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\MakeDoubleCallRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\MakeDoubleCallResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\PageQueryAgentListNewRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\PageQueryAgentListNewResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\PageQueryAgentListRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\PageQueryAgentListResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiCallDetailPageRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiCallDetailPageResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiCallDetailPageShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiCallTaskDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiCallTaskDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiCallTaskPageRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiCallTaskPageResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryConversationDetailInfoNewRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryConversationDetailInfoNewResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryConversationDetailInfoRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryConversationDetailInfoResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineInQueueRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineInQueueResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryInboundCallIdRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryInboundCallIdResponse;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartAiCallTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StartAiCallTaskResponse;
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
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StopAiCallTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StopAiCallTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StopAiOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StopAiOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StopTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\StopTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SubmitAudioNoteRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SubmitAudioNoteResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SuspendHotlineServiceRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SuspendHotlineServiceResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SuspendOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\SuspendOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TerminateAiOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TerminateAiOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TestLargeModelRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TestLargeModelResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TestLargeModelShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TransferCallToSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\TransferCallToSkillGroupResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAgentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAgentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAiCallTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAiCallTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAiCallTaskShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAiOutboundTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAiOutboundTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateAiOutboundTaskShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateDepartmentRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateDepartmentResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateLargeModelRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateLargeModelResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateLargeModelShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateModelApplicationRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateModelApplicationResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateModelApplicationShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateOuterAccountRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateOuterAccountResponse;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateSkillGroupRequest;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\UpdateSkillGroupResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Aiccs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'us-west-1' => 'aiccs.aliyuncs.com',
            'us-east-1' => 'aiccs.aliyuncs.com',
            'me-east-1' => 'aiccs.aliyuncs.com',
            'eu-west-1' => 'aiccs.aliyuncs.com',
            'eu-central-1' => 'aiccs.aliyuncs.com',
            'cn-zhangjiakou' => 'aiccs.aliyuncs.com',
            'cn-wulanchabu' => 'aiccs.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'aiccs.aliyuncs.com',
            'cn-shenzhen' => 'aiccs.aliyuncs.com',
            'cn-shanghai-finance-1' => 'aiccs.aliyuncs.com',
            'cn-shanghai' => 'aiccs.aliyuncs.com',
            'cn-qingdao' => 'aiccs.aliyuncs.com',
            'cn-north-2-gov-1' => 'aiccs.aliyuncs.com',
            'cn-huhehaote' => 'aiccs.aliyuncs.com',
            'cn-hongkong' => 'aiccs.aliyuncs.com',
            'cn-hangzhou-finance' => 'aiccs.aliyuncs.com',
            'cn-hangzhou' => 'aiccs.aliyuncs.com',
            'cn-chengdu' => 'aiccs.aliyuncs.com',
            'cn-beijing-finance-1' => 'aiccs.aliyuncs.com',
            'cn-beijing' => 'aiccs.aliyuncs.com',
            'ap-southeast-5' => 'aiccs.aliyuncs.com',
            'ap-southeast-3' => 'aiccs.aliyuncs.com',
            'ap-southeast-1' => 'aiccs.aliyuncs.com',
            'ap-northeast-1' => 'aiccs.aliyuncs.com',
        ];
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Invoke the AddHotlineNumber API to add a hotline number.
     *
     * @remarks
     * > Hotline numbers are for inbound and outbound calls only.
     *
     * @param tmpReq - AddHotlineNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddHotlineNumberResponse
     *
     * @param AddHotlineNumberRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return AddHotlineNumberResponse
     */
    public function addHotlineNumberWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddHotlineNumberShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->outboundRangeList) {
            $request->outboundRangeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outboundRangeList, 'OutboundRangeList', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enableInbound) {
            @$body['EnableInbound'] = $request->enableInbound;
        }

        if (null !== $request->enableInboundEvaluation) {
            @$body['EnableInboundEvaluation'] = $request->enableInboundEvaluation;
        }

        if (null !== $request->enableOutbound) {
            @$body['EnableOutbound'] = $request->enableOutbound;
        }

        if (null !== $request->enableOutboundEvaluation) {
            @$body['EnableOutboundEvaluation'] = $request->enableOutboundEvaluation;
        }

        if (null !== $request->evaluationLevel) {
            @$body['EvaluationLevel'] = $request->evaluationLevel;
        }

        if (null !== $request->hotlineNumber) {
            @$body['HotlineNumber'] = $request->hotlineNumber;
        }

        if (null !== $request->inboundFlowId) {
            @$body['InboundFlowId'] = $request->inboundFlowId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->outboundAllDepart) {
            @$body['OutboundAllDepart'] = $request->outboundAllDepart;
        }

        if (null !== $request->outboundRangeListShrink) {
            @$body['OutboundRangeList'] = $request->outboundRangeListShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddHotlineNumber',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddHotlineNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the AddHotlineNumber API to add a hotline number.
     *
     * @remarks
     * > Hotline numbers are for inbound and outbound calls only.
     *
     * @param request - AddHotlineNumberRequest
     *
     * @returns AddHotlineNumberResponse
     *
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
     * Adds one or more inbound numbers.
     *
     * @param tmpReq - AddInboundNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddInboundNumberResponse
     *
     * @param AddInboundNumberRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return AddInboundNumberResponse
     */
    public function addInboundNumberWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddInboundNumberShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->inboundNumbers) {
            $request->inboundNumbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inboundNumbers, 'InboundNumbers', 'json');
        }

        $query = [];
        if (null !== $request->applicationCode) {
            @$query['ApplicationCode'] = $request->applicationCode;
        }

        if (null !== $request->inboundNumbersShrink) {
            @$query['InboundNumbers'] = $request->inboundNumbersShrink;
        }

        if (null !== $request->inboundType) {
            @$query['InboundType'] = $request->inboundType;
        }

        if (null !== $request->lineCode) {
            @$query['LineCode'] = $request->lineCode;
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
            'action' => 'AddInboundNumber',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddInboundNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds one or more inbound numbers.
     *
     * @param request - AddInboundNumberRequest
     *
     * @returns AddInboundNumberResponse
     *
     * @param AddInboundNumberRequest $request
     *
     * @return AddInboundNumberResponse
     */
    public function addInboundNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addInboundNumberWithOptions($request, $runtime);
    }

    /**
     * Adds a large language model.
     *
     * @param tmpReq - AddLargeModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddLargeModelResponse
     *
     * @param AddLargeModelRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return AddLargeModelResponse
     */
    public function addLargeModelWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddLargeModelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->baseModel) {
            $request->baseModelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->baseModel, 'BaseModel', 'json');
        }

        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->baseModelShrink) {
            @$query['BaseModel'] = $request->baseModelShrink;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->modelUrl) {
            @$query['ModelUrl'] = $request->modelUrl;
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

        if (null !== $request->temperature) {
            @$query['Temperature'] = $request->temperature;
        }

        if (null !== $request->topK) {
            @$query['TopK'] = $request->topK;
        }

        if (null !== $request->topP) {
            @$query['TopP'] = $request->topP;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddLargeModel',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddLargeModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a large language model.
     *
     * @param request - AddLargeModelRequest
     *
     * @returns AddLargeModelResponse
     *
     * @param AddLargeModelRequest $request
     *
     * @return AddLargeModelResponse
     */
    public function addLargeModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addLargeModelWithOptions($request, $runtime);
    }

    /**
     * Add a model application.
     *
     * @param tmpReq - AddModelApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddModelApplicationResponse
     *
     * @param AddModelApplicationRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return AddModelApplicationResponse
     */
    public function addModelApplicationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddModelApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ttsConfig) {
            $request->ttsConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ttsConfig, 'TtsConfig', 'json');
        }

        $query = [];
        if (null !== $request->applicationCps) {
            @$query['ApplicationCps'] = $request->applicationCps;
        }

        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->callConnectedTriggerModel) {
            @$query['CallConnectedTriggerModel'] = $request->callConnectedTriggerModel;
        }

        if (null !== $request->dyvmsSceneName) {
            @$query['DyvmsSceneName'] = $request->dyvmsSceneName;
        }

        if (null !== $request->modelCode) {
            @$query['ModelCode'] = $request->modelCode;
        }

        if (null !== $request->modelVersion) {
            @$query['ModelVersion'] = $request->modelVersion;
        }

        if (null !== $request->muteActive) {
            @$query['MuteActive'] = $request->muteActive;
        }

        if (null !== $request->muteDuration) {
            @$query['MuteDuration'] = $request->muteDuration;
        }

        if (null !== $request->muteHangupNum) {
            @$query['MuteHangupNum'] = $request->muteHangupNum;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->qualificationId) {
            @$query['QualificationId'] = $request->qualificationId;
        }

        if (null !== $request->qualificationName) {
            @$query['QualificationName'] = $request->qualificationName;
        }

        if (null !== $request->recordingFile) {
            @$query['RecordingFile'] = $request->recordingFile;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->speechContent) {
            @$query['SpeechContent'] = $request->speechContent;
        }

        if (null !== $request->speechId) {
            @$query['SpeechId'] = $request->speechId;
        }

        if (null !== $request->startWord) {
            @$query['StartWord'] = $request->startWord;
        }

        if (null !== $request->startWordType) {
            @$query['StartWordType'] = $request->startWordType;
        }

        if (null !== $request->ttsConfigShrink) {
            @$query['TtsConfig'] = $request->ttsConfigShrink;
        }

        if (null !== $request->usageDesc) {
            @$query['UsageDesc'] = $request->usageDesc;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddModelApplication',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddModelApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a model application.
     *
     * @param request - AddModelApplicationRequest
     *
     * @returns AddModelApplicationResponse
     *
     * @param AddModelApplicationRequest $request
     *
     * @return AddModelApplicationResponse
     */
    public function addModelApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addModelApplicationWithOptions($request, $runtime);
    }

    /**
     * Invoke AddOuterAccount to add an external account.
     *
     * @param request - AddOuterAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddOuterAccountResponse
     *
     * @param AddOuterAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return AddOuterAccountResponse
     */
    public function addOuterAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddOuterAccount',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddOuterAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke AddOuterAccount to add an external account.
     *
     * @param request - AddOuterAccountRequest
     *
     * @returns AddOuterAccountResponse
     *
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
     * Invoke AddSkillGroup to create an external skill group.
     *
     * @param request - AddSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSkillGroupResponse
     *
     * @param AddSkillGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddSkillGroupResponse
     */
    public function addSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSkillGroup',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke AddSkillGroup to create an external skill group.
     *
     * @param request - AddSkillGroupRequest
     *
     * @returns AddSkillGroupResponse
     *
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
     * Invoke the AiccsSmartCall API to initiate an Intelligent Speech Interaction call.
     *
     * @param request - AiccsSmartCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AiccsSmartCallResponse
     *
     * @param AiccsSmartCallRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AiccsSmartCallResponse
     */
    public function aiccsSmartCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionCodeBreak) {
            @$query['ActionCodeBreak'] = $request->actionCodeBreak;
        }

        if (null !== $request->actionCodeTimeBreak) {
            @$query['ActionCodeTimeBreak'] = $request->actionCodeTimeBreak;
        }

        if (null !== $request->asrAlsAmId) {
            @$query['AsrAlsAmId'] = $request->asrAlsAmId;
        }

        if (null !== $request->asrBaseId) {
            @$query['AsrBaseId'] = $request->asrBaseId;
        }

        if (null !== $request->asrModelId) {
            @$query['AsrModelId'] = $request->asrModelId;
        }

        if (null !== $request->asrVocabularyId) {
            @$query['AsrVocabularyId'] = $request->asrVocabularyId;
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

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pauseTime) {
            @$query['PauseTime'] = $request->pauseTime;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
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
            'action' => 'AiccsSmartCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AiccsSmartCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the AiccsSmartCall API to initiate an Intelligent Speech Interaction call.
     *
     * @param request - AiccsSmartCallRequest
     *
     * @returns AiccsSmartCallResponse
     *
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
     * Invoke the AiccsSmartCallOperate API to initiate a specified action during an Intelligent outbound call. This API is only used for scenarios such as parallel transfer to a human agent or allowing a human agent to listen in on the man-machine dialogue.
     *
     * @param request - AiccsSmartCallOperateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AiccsSmartCallOperateResponse
     *
     * @param AiccsSmartCallOperateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AiccsSmartCallOperateResponse
     */
    public function aiccsSmartCallOperateWithOptions($request, $runtime)
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

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
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
            'action' => 'AiccsSmartCallOperate',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AiccsSmartCallOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the AiccsSmartCallOperate API to initiate a specified action during an Intelligent outbound call. This API is only used for scenarios such as parallel transfer to a human agent or allowing a human agent to listen in on the man-machine dialogue.
     *
     * @param request - AiccsSmartCallOperateRequest
     *
     * @returns AiccsSmartCallOperateResponse
     *
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
     * Invoke AnswerCall to answer an incoming call.
     *
     * @param request - AnswerCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AnswerCallResponse
     *
     * @param AnswerCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AnswerCallResponse
     */
    public function answerCallWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->callId) {
            @$body['CallId'] = $request->callId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$body['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AnswerCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AnswerCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke AnswerCall to answer an incoming call.
     *
     * @param request - AnswerCallRequest
     *
     * @returns AnswerCallResponse
     *
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
     * Append job details.
     *
     * @remarks
     * - After creating an Intelligent Contact Robot calling job, you can invoke this API to append job details.
     * - Before invoking this API, ensure that you already have a successfully created Intelligent Contact Robot calling job.
     * - If you do not have a successfully created Intelligent Contact Robot calling job, you can click **Create Job** on the [Task Management](https://aiccs.console.aliyun.com/job/list) interface or create a job by using the [CreateTask](https://help.aliyun.com/document_detail/2718003.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - AttachTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachTaskResponse
     *
     * @param AttachTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AttachTaskResponse
     */
    public function attachTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callString) {
            @$query['CallString'] = $request->callString;
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
            'action' => 'AttachTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Append job details.
     *
     * @remarks
     * - After creating an Intelligent Contact Robot calling job, you can invoke this API to append job details.
     * - Before invoking this API, ensure that you already have a successfully created Intelligent Contact Robot calling job.
     * - If you do not have a successfully created Intelligent Contact Robot calling job, you can click **Create Job** on the [Task Management](https://aiccs.console.aliyun.com/job/list) interface or create a job by using the [CreateTask](https://help.aliyun.com/document_detail/2718003.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - AttachTaskRequest
     *
     * @returns AttachTaskResponse
     *
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
     * @param request - BatchCreateQualityProjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchCreateQualityProjectsResponse
     *
     * @param BatchCreateQualityProjectsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchCreateQualityProjectsResponse
     */
    public function batchCreateQualityProjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analysisIds) {
            @$query['AnalysisIds'] = $request->analysisIds;
        }

        if (null !== $request->channelTouchType) {
            @$query['ChannelTouchType'] = $request->channelTouchType;
        }

        if (null !== $request->checkFreqType) {
            @$query['CheckFreqType'] = $request->checkFreqType;
        }

        if (null !== $request->instanceList) {
            @$query['InstanceList'] = $request->instanceList;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->timeRangeEnd) {
            @$query['TimeRangeEnd'] = $request->timeRangeEnd;
        }

        if (null !== $request->timeRangeStart) {
            @$query['TimeRangeStart'] = $request->timeRangeStart;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchCreateQualityProjects',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchCreateQualityProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchCreateQualityProjectsRequest
     *
     * @returns BatchCreateQualityProjectsResponse
     *
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
     * This operation cancels calls from a call task. You cannot cancel a call if its detail record is already in the pending call queue or is in progress.
     *
     * @remarks
     * - Use this operation to cancel calls. Alternatively, you can manually cancel calls in the console by navigating to **Call Task Management** > **Manage** > **Execution Records** > **Pending**.
     * - Before calling this operation, ensure you have created a call task and imported callee data.
     * - If you have not created a call task, you can create one and import callee data on the **Call Task Management** page. You can also call the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926815.html) and [ImportTaskNumberDatas]() operations.
     * - Canceling a call task may affect your business. Please proceed with caution.
     *
     * @param tmpReq - CancelAiCallDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAiCallDetailsResponse
     *
     * @param CancelAiCallDetailsRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CancelAiCallDetailsResponse
     */
    public function cancelAiCallDetailsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CancelAiCallDetailsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->detailIdList) {
            $request->detailIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->detailIdList, 'DetailIdList', 'json');
        }

        if (null !== $tmpReq->phoneNumbers) {
            $request->phoneNumbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->phoneNumbers, 'PhoneNumbers', 'json');
        }

        $query = [];
        if (null !== $request->batchId) {
            @$query['BatchId'] = $request->batchId;
        }

        if (null !== $request->detailIdListShrink) {
            @$query['DetailIdList'] = $request->detailIdListShrink;
        }

        if (null !== $request->encryptionType) {
            @$query['EncryptionType'] = $request->encryptionType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneNumbersShrink) {
            @$query['PhoneNumbers'] = $request->phoneNumbersShrink;
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
            'action' => 'CancelAiCallDetails',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAiCallDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation cancels calls from a call task. You cannot cancel a call if its detail record is already in the pending call queue or is in progress.
     *
     * @remarks
     * - Use this operation to cancel calls. Alternatively, you can manually cancel calls in the console by navigating to **Call Task Management** > **Manage** > **Execution Records** > **Pending**.
     * - Before calling this operation, ensure you have created a call task and imported callee data.
     * - If you have not created a call task, you can create one and import callee data on the **Call Task Management** page. You can also call the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926815.html) and [ImportTaskNumberDatas]() operations.
     * - Canceling a call task may affect your business. Please proceed with caution.
     *
     * @param request - CancelAiCallDetailsRequest
     *
     * @returns CancelAiCallDetailsResponse
     *
     * @param CancelAiCallDetailsRequest $request
     *
     * @return CancelAiCallDetailsResponse
     */
    public function cancelAiCallDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAiCallDetailsWithOptions($request, $runtime);
    }

    /**
     * Cancel an Intelligent Contact Robot calling job.
     *
     * @remarks
     * - You can invoke this API to cancel an Intelligent Contact Robot calling job, or manually cancel the job in the [Task Management](https://aiccs.console.aliyun.com/job/list) interface.
     * - After an Intelligent Contact Robot calling job is canceled, it cannot be started again. Proceed with caution.
     * - If you want to pause a job and restart it later, you can manually pause the job in the [Task Management](https://aiccs.console.aliyun.com/job/list) interface or pause it by using the [StopTask](https://help.aliyun.com/document_detail/2718006.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - CancelTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelTaskResponse
     *
     * @param CancelTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CancelTaskResponse
     */
    public function cancelTaskWithOptions($request, $runtime)
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
            'action' => 'CancelTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancel an Intelligent Contact Robot calling job.
     *
     * @remarks
     * - You can invoke this API to cancel an Intelligent Contact Robot calling job, or manually cancel the job in the [Task Management](https://aiccs.console.aliyun.com/job/list) interface.
     * - After an Intelligent Contact Robot calling job is canceled, it cannot be started again. Proceed with caution.
     * - If you want to pause a job and restart it later, you can manually pause the job in the [Task Management](https://aiccs.console.aliyun.com/job/list) interface or pause it by using the [StopTask](https://help.aliyun.com/document_detail/2718006.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - CancelTaskRequest
     *
     * @returns CancelTaskResponse
     *
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
     * Invoke ChangeChatAgentStatus to modify the Live Support status.
     *
     * @remarks
     * > Currently, only changing the Live Support status to offline is supported.
     *
     * @param request - ChangeChatAgentStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeChatAgentStatusResponse
     *
     * @param ChangeChatAgentStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ChangeChatAgentStatusResponse
     */
    public function changeChatAgentStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->method) {
            @$body['Method'] = $request->method;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ChangeChatAgentStatus',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeChatAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke ChangeChatAgentStatus to modify the Live Support status.
     *
     * @remarks
     * > Currently, only changing the Live Support status to offline is supported.
     *
     * @param request - ChangeChatAgentStatusRequest
     *
     * @returns ChangeChatAgentStatusResponse
     *
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
     * @param request - ChangeQualityProjectStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeQualityProjectStatusResponse
     *
     * @param ChangeQualityProjectStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ChangeQualityProjectStatusResponse
     */
    public function changeQualityProjectStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeQualityProjectStatus',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeQualityProjectStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ChangeQualityProjectStatusRequest
     *
     * @returns ChangeQualityProjectStatusResponse
     *
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
     * Create an agent account in the Cloud Customer Service System and return the agent ID.
     *
     * @remarks
     * - Before calling this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify skill group information, refer to the guidance in [Request Parameters](#api-detail-35).
     * - You can manage agents by calling [DeleteAgent](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-deleteagent) to delete an agent or [UpdateAgent](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-updateagent) to update agent data.
     * ### QPS Limit
     * - Per-user call frequency: No rate limiting.
     * - API call frequency: 100 queries per second (QPS).
     * > If the total calls from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - CreateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAgentResponse
     *
     * @param CreateAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAgentResponse
     */
    public function createAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $bodyFlat = [];
        if (null !== $request->skillGroupId) {
            @$bodyFlat['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->skillGroupIdList) {
            @$bodyFlat['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateAgent',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an agent account in the Cloud Customer Service System and return the agent ID.
     *
     * @remarks
     * - Before calling this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify skill group information, refer to the guidance in [Request Parameters](#api-detail-35).
     * - You can manage agents by calling [DeleteAgent](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-deleteagent) to delete an agent or [UpdateAgent](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-updateagent) to update agent data.
     * ### QPS Limit
     * - Per-user call frequency: No rate limiting.
     * - API call frequency: 100 queries per second (QPS).
     * > If the total calls from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - CreateAgentRequest
     *
     * @returns CreateAgentResponse
     *
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
     * Creates a call task.
     *
     * @remarks
     * Before creating a call task, make a test call with an agent to ensure the results meet your requirements.
     *
     * @param tmpReq - CreateAiCallTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAiCallTaskResponse
     *
     * @param CreateAiCallTaskRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAiCallTaskResponse
     */
    public function createAiCallTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAiCallTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->callDay) {
            $request->callDayShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->callDay, 'CallDay', 'json');
        }

        if (null !== $tmpReq->callRetryReason) {
            $request->callRetryReasonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->callRetryReason, 'CallRetryReason', 'json');
        }

        if (null !== $tmpReq->callTime) {
            $request->callTimeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->callTime, 'CallTime', 'json');
        }

        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->applicationCode) {
            @$query['ApplicationCode'] = $request->applicationCode;
        }

        if (null !== $request->callDayShrink) {
            @$query['CallDay'] = $request->callDayShrink;
        }

        if (null !== $request->callRetryInterval) {
            @$query['CallRetryInterval'] = $request->callRetryInterval;
        }

        if (null !== $request->callRetryReasonShrink) {
            @$query['CallRetryReason'] = $request->callRetryReasonShrink;
        }

        if (null !== $request->callRetryTimes) {
            @$query['CallRetryTimes'] = $request->callRetryTimes;
        }

        if (null !== $request->callTimeShrink) {
            @$query['CallTime'] = $request->callTimeShrink;
        }

        if (null !== $request->lineEncoding) {
            @$query['LineEncoding'] = $request->lineEncoding;
        }

        if (null !== $request->linePhoneNum) {
            @$query['LinePhoneNum'] = $request->linePhoneNum;
        }

        if (null !== $request->missCallRetry) {
            @$query['MissCallRetry'] = $request->missCallRetry;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneType) {
            @$query['PhoneType'] = $request->phoneType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->startType) {
            @$query['StartType'] = $request->startType;
        }

        if (null !== $request->taskCps) {
            @$query['TaskCps'] = $request->taskCps;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskStartTime) {
            @$query['TaskStartTime'] = $request->taskStartTime;
        }

        if (null !== $request->virtualNumber) {
            @$query['VirtualNumber'] = $request->virtualNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAiCallTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAiCallTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a call task.
     *
     * @remarks
     * Before creating a call task, make a test call with an agent to ensure the results meet your requirements.
     *
     * @param request - CreateAiCallTaskRequest
     *
     * @returns CreateAiCallTaskResponse
     *
     * @param CreateAiCallTaskRequest $request
     *
     * @return CreateAiCallTaskResponse
     */
    public function createAiCallTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAiCallTaskWithOptions($request, $runtime);
    }

    /**
     * Create an Intelligent Outbound Call Job. You can configure the Task Type, job name, outbound caller ID, callee number deduplication policy, and other settings when creating the job.
     *
     * @remarks
     * - The **Data** field in the response parameters of this API is the job ID.
     * - After creating an Intelligent Outbound Call Job, if you need to make updates, you can invoke the [UpdateAiOutboundTask](https://help.aliyun.com/document_detail/2718021.html) API to update the outbound call job.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 20 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param tmpReq - CreateAiOutboundTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAiOutboundTaskResponse
     *
     * @param CreateAiOutboundTaskRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateAiOutboundTaskResponse
     */
    public function createAiOutboundTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateAiOutboundTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->outboundNums) {
            $request->outboundNumsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outboundNums, 'OutboundNums', 'json');
        }

        if (null !== $tmpReq->recallRule) {
            $request->recallRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recallRule, 'RecallRule', 'json');
        }

        $query = [];
        if (null !== $request->concurrentRate) {
            @$query['ConcurrentRate'] = $request->concurrentRate;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->executionTime) {
            @$query['ExecutionTime'] = $request->executionTime;
        }

        if (null !== $request->forecastCallRate) {
            @$query['ForecastCallRate'] = $request->forecastCallRate;
        }

        if (null !== $request->handlerId) {
            @$query['HandlerId'] = $request->handlerId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->numRepeated) {
            @$query['NumRepeated'] = $request->numRepeated;
        }

        if (null !== $request->outboundNumsShrink) {
            @$query['OutboundNums'] = $request->outboundNumsShrink;
        }

        if (null !== $request->recallRuleShrink) {
            @$query['RecallRule'] = $request->recallRuleShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAiOutboundTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAiOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an Intelligent Outbound Call Job. You can configure the Task Type, job name, outbound caller ID, callee number deduplication policy, and other settings when creating the job.
     *
     * @remarks
     * - The **Data** field in the response parameters of this API is the job ID.
     * - After creating an Intelligent Outbound Call Job, if you need to make updates, you can invoke the [UpdateAiOutboundTask](https://help.aliyun.com/document_detail/2718021.html) API to update the outbound call job.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 20 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - CreateAiOutboundTaskRequest
     *
     * @returns CreateAiOutboundTaskResponse
     *
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
     * Creates a batch for an Intelligent Outbound Calling job based on the instance ID and job ID, enabling data under the job to be queried by batch.
     *
     * @remarks
     * Before invoking this API, we recommend that you confirm the instance ID and job ID. For guidance on how to obtain them, see the instructions in [Request Parameters](#api-detail-35).
     * ### QPS limit
     * - Per-user invocation frequency: 20 queries per second (QPS).
     * - API-wide invocation frequency: 20 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - CreateAiOutboundTaskBatchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAiOutboundTaskBatchResponse
     *
     * @param CreateAiOutboundTaskBatchRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateAiOutboundTaskBatchResponse
     */
    public function createAiOutboundTaskBatchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAiOutboundTaskBatch',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAiOutboundTaskBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a batch for an Intelligent Outbound Calling job based on the instance ID and job ID, enabling data under the job to be queried by batch.
     *
     * @remarks
     * Before invoking this API, we recommend that you confirm the instance ID and job ID. For guidance on how to obtain them, see the instructions in [Request Parameters](#api-detail-35).
     * ### QPS limit
     * - Per-user invocation frequency: 20 queries per second (QPS).
     * - API-wide invocation frequency: 20 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - CreateAiOutboundTaskBatchRequest
     *
     * @returns CreateAiOutboundTaskBatchResponse
     *
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
     * Creates department information based on the Artificial Intelligence Cloud Call Service (AICCS) instance ID and department name. Upon successful creation, the department ID is returned.
     *
     * @remarks
     * - If you need to update department information, you can invoke the [UpdateDepartment](https://help.aliyun.com/document_detail/2717977.html) API.
     * - After successfully creating department information by invoking this API, the **Data** field in the response contains the department ID. If you need to query the department ID later, you can invoke the [GetAllDepartment](https://help.aliyun.com/document_detail/2717975.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API invocation frequency: 100 times/second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param request - CreateDepartmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDepartmentResponse
     *
     * @param CreateDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDepartmentResponse
     */
    public function createDepartmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->departmentName) {
            @$query['DepartmentName'] = $request->departmentName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDepartment',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates department information based on the Artificial Intelligence Cloud Call Service (AICCS) instance ID and department name. Upon successful creation, the department ID is returned.
     *
     * @remarks
     * - If you need to update department information, you can invoke the [UpdateDepartment](https://help.aliyun.com/document_detail/2717977.html) API.
     * - After successfully creating department information by invoking this API, the **Data** field in the response contains the department ID. If you need to query the department ID later, you can invoke the [GetAllDepartment](https://help.aliyun.com/document_detail/2717975.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API invocation frequency: 100 times/second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param request - CreateDepartmentRequest
     *
     * @returns CreateDepartmentResponse
     *
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
     * @param request - CreateOutboundTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOutboundTaskResponse
     *
     * @param CreateOutboundTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateOutboundTaskResponse
     */
    public function createOutboundTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ani) {
            @$query['Ani'] = $request->ani;
        }

        if (null !== $request->callInfos) {
            @$query['CallInfos'] = $request->callInfos;
        }

        if (null !== $request->departmentId) {
            @$query['DepartmentId'] = $request->departmentId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->extAttrs) {
            @$query['ExtAttrs'] = $request->extAttrs;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->retryInterval) {
            @$query['RetryInterval'] = $request->retryInterval;
        }

        if (null !== $request->retryTime) {
            @$query['RetryTime'] = $request->retryTime;
        }

        if (null !== $request->skillGroup) {
            @$query['SkillGroup'] = $request->skillGroup;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateOutboundTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateOutboundTaskRequest
     *
     * @returns CreateOutboundTaskResponse
     *
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
     * @param request - CreateQualityProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQualityProjectResponse
     *
     * @param CreateQualityProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateQualityProjectResponse
     */
    public function createQualityProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->analysisIds) {
            @$body['AnalysisIds'] = $request->analysisIds;
        }

        if (null !== $request->channelTouchType) {
            @$body['ChannelTouchType'] = $request->channelTouchType;
        }

        if (null !== $request->checkFreqType) {
            @$body['CheckFreqType'] = $request->checkFreqType;
        }

        if (null !== $request->depList) {
            @$body['DepList'] = $request->depList;
        }

        if (null !== $request->groupList) {
            @$body['GroupList'] = $request->groupList;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        if (null !== $request->scopeType) {
            @$body['ScopeType'] = $request->scopeType;
        }

        if (null !== $request->servicerList) {
            @$body['ServicerList'] = $request->servicerList;
        }

        if (null !== $request->timeRangeEnd) {
            @$body['TimeRangeEnd'] = $request->timeRangeEnd;
        }

        if (null !== $request->timeRangeStart) {
            @$body['TimeRangeStart'] = $request->timeRangeStart;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateQualityProject',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateQualityProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateQualityProjectRequest
     *
     * @returns CreateQualityProjectResponse
     *
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
     * @param request - CreateQualityRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateQualityRuleResponse
     *
     * @param CreateQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateQualityRuleResponse
     */
    public function createQualityRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyWords) {
            @$body['KeyWords'] = $request->keyWords;
        }

        if (null !== $request->matchType) {
            @$body['MatchType'] = $request->matchType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->ruleTag) {
            @$body['RuleTag'] = $request->ruleTag;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateQualityRule',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateQualityRuleRequest
     *
     * @returns CreateQualityRuleResponse
     *
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
     * Create a skill group based on the skill group name and channel type.
     *
     * @remarks
     * - This API allows you to define information such as the external display name and description of the skill group. For details, see [Request Parameters](#api-detail-35).
     * - The **Data** parameter returned by this API is the ID of the successfully created skill group.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 1000 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - CreateSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSkillGroupResponse
     *
     * @param CreateSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSkillGroupResponse
     */
    public function createSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channelType) {
            @$body['ChannelType'] = $request->channelType;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->departmentId) {
            @$body['DepartmentId'] = $request->departmentId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupName) {
            @$body['SkillGroupName'] = $request->skillGroupName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSkillGroup',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a skill group based on the skill group name and channel type.
     *
     * @remarks
     * - This API allows you to define information such as the external display name and description of the skill group. For details, see [Request Parameters](#api-detail-35).
     * - The **Data** parameter returned by this API is the ID of the successfully created skill group.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 1000 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - CreateSkillGroupRequest
     *
     * @returns CreateSkillGroupResponse
     *
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
     * Create an Artificial Intelligence Cloud Call Service robot outbound calling job.
     *
     * @remarks
     * - You can invoke this API to create a job, or create one in the **Artificial Intelligence Cloud Call Service console** > **Outbound Robot (Standard Edition)** > [Task Management](https://aiccs.console.aliyun.com/job/list) by clicking **Create Job**.
     * - After invoking this API, the **Data** field in the response contains the unique job ID of the robot outbound calling task.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - CreateTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTaskResponse
     *
     * @param CreateTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateTaskResponse
     */
    public function createTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callString) {
            @$query['CallString'] = $request->callString;
        }

        if (null !== $request->callStringType) {
            @$query['CallStringType'] = $request->callStringType;
        }

        if (null !== $request->caller) {
            @$query['Caller'] = $request->caller;
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

        if (null !== $request->retryCount) {
            @$query['RetryCount'] = $request->retryCount;
        }

        if (null !== $request->retryFlag) {
            @$query['RetryFlag'] = $request->retryFlag;
        }

        if (null !== $request->retryInterval) {
            @$query['RetryInterval'] = $request->retryInterval;
        }

        if (null !== $request->retryStatusCode) {
            @$query['RetryStatusCode'] = $request->retryStatusCode;
        }

        if (null !== $request->robotId) {
            @$query['RobotId'] = $request->robotId;
        }

        if (null !== $request->seatCount) {
            @$query['SeatCount'] = $request->seatCount;
        }

        if (null !== $request->startNow) {
            @$query['StartNow'] = $request->startNow;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->workDay) {
            @$query['WorkDay'] = $request->workDay;
        }

        if (null !== $request->workTimeList) {
            @$query['WorkTimeList'] = $request->workTimeList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an Artificial Intelligence Cloud Call Service robot outbound calling job.
     *
     * @remarks
     * - You can invoke this API to create a job, or create one in the **Artificial Intelligence Cloud Call Service console** > **Outbound Robot (Standard Edition)** > [Task Management](https://aiccs.console.aliyun.com/job/list) by clicking **Create Job**.
     * - After invoking this API, the **Data** field in the response contains the unique job ID of the robot outbound calling task.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - CreateTaskRequest
     *
     * @returns CreateTaskResponse
     *
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
     * Create an agent that enables password-free login to the Cloud Customer Service System based on a User Account.
     *
     * @param request - CreateThirdSsoAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateThirdSsoAgentResponse
     *
     * @param CreateThirdSsoAgentRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateThirdSsoAgentResponse
     */
    public function createThirdSsoAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->clientId) {
            @$body['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $bodyFlat = [];
        if (null !== $request->roleIds) {
            @$bodyFlat['RoleIds'] = $request->roleIds;
        }

        if (null !== $request->skillGroupIds) {
            @$bodyFlat['SkillGroupIds'] = $request->skillGroupIds;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateThirdSsoAgent',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateThirdSsoAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an agent that enables password-free login to the Cloud Customer Service System based on a User Account.
     *
     * @param request - CreateThirdSsoAgentRequest
     *
     * @returns CreateThirdSsoAgentResponse
     *
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
     * Deletes an agent account in the Cloud Customer Service System based on the instance ID and agent account name.
     *
     * @remarks
     * - Before deletion, we recommend that you confirm the agent account name and instance ID to be deleted. For guidance on how to obtain them, see the description of [Request Parameters](#api-detail-35).
     * - If an agent is accidentally deleted, you can invoke the [CreateAgent](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-createagent) API to recreate the agent.
     * > If an account is re-added after deletion, the agent ID remains unchanged.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param request - DeleteAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAgentResponse
     *
     * @param DeleteAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAgentResponse
     */
    public function deleteAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAgent',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an agent account in the Cloud Customer Service System based on the instance ID and agent account name.
     *
     * @remarks
     * - Before deletion, we recommend that you confirm the agent account name and instance ID to be deleted. For guidance on how to obtain them, see the description of [Request Parameters](#api-detail-35).
     * - If an agent is accidentally deleted, you can invoke the [CreateAgent](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-createagent) API to recreate the agent.
     * > If an account is re-added after deletion, the agent ID remains unchanged.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param request - DeleteAgentRequest
     *
     * @returns DeleteAgentResponse
     *
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
     * Deletes an Intelligent Outbound Calling job by instance ID and job ID. After deletion, the job will no longer appear in the outbound calling job list.
     *
     * @remarks
     * >Notice: Deletion is a sensitive operation. Proceed with caution.
     * - Before deletion, we recommend that you confirm the job ID and related information. You can call the [GetAiOutboundTaskList](https://help.aliyun.com/document_detail/2718026.html) API to view the outbound calling job list and verify the task name, description, and corresponding job ID.
     * - If you need to recreate an Intelligent Outbound Calling job, you can call the [CreateAiOutboundTask](https://help.aliyun.com/document_detail/312260.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 20 times/second.
     * - API invocation frequency: 20 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - DeleteAiOutboundTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAiOutboundTaskResponse
     *
     * @param DeleteAiOutboundTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteAiOutboundTaskResponse
     */
    public function deleteAiOutboundTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAiOutboundTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAiOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Intelligent Outbound Calling job by instance ID and job ID. After deletion, the job will no longer appear in the outbound calling job list.
     *
     * @remarks
     * >Notice: Deletion is a sensitive operation. Proceed with caution.
     * - Before deletion, we recommend that you confirm the job ID and related information. You can call the [GetAiOutboundTaskList](https://help.aliyun.com/document_detail/2718026.html) API to view the outbound calling job list and verify the task name, description, and corresponding job ID.
     * - If you need to recreate an Intelligent Outbound Calling job, you can call the [CreateAiOutboundTask](https://help.aliyun.com/document_detail/312260.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 20 times/second.
     * - API invocation frequency: 20 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - DeleteAiOutboundTaskRequest
     *
     * @returns DeleteAiOutboundTaskResponse
     *
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
     * Deletes department information based on the Artificial Intelligence Cloud Call Service (AICCS) instance ID and department ID.
     *
     * @remarks
     * - Deletion is a sensitive operation. Proceed with caution.
     * - Before invoking this API, we recommend that you confirm the AICCS instance ID and department ID. For guidance on how to obtain them, see the instructions in [Request Parameters](#api-detail-35).
     * - If you accidentally delete department information, you can call the [CreateDepartment](https://help.aliyun.com/document_detail/2717974.html) API to recreate it.
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: 100 times/second.
     * - API invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - DeleteDepartmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDepartmentResponse
     *
     * @param DeleteDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDepartmentResponse
     */
    public function deleteDepartmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->departmentId) {
            @$query['DepartmentId'] = $request->departmentId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDepartment',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes department information based on the Artificial Intelligence Cloud Call Service (AICCS) instance ID and department ID.
     *
     * @remarks
     * - Deletion is a sensitive operation. Proceed with caution.
     * - Before invoking this API, we recommend that you confirm the AICCS instance ID and department ID. For guidance on how to obtain them, see the instructions in [Request Parameters](#api-detail-35).
     * - If you accidentally delete department information, you can call the [CreateDepartment](https://help.aliyun.com/document_detail/2717974.html) API to recreate it.
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: 100 times/second.
     * - API invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - DeleteDepartmentRequest
     *
     * @returns DeleteDepartmentResponse
     *
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
     * Invoke the DeleteHotlineNumber API to delete a configured hotline number.
     *
     * @param request - DeleteHotlineNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHotlineNumberResponse
     *
     * @param DeleteHotlineNumberRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteHotlineNumberResponse
     */
    public function deleteHotlineNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->hotlineNumber) {
            @$body['HotlineNumber'] = $request->hotlineNumber;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteHotlineNumber',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHotlineNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the DeleteHotlineNumber API to delete a configured hotline number.
     *
     * @param request - DeleteHotlineNumberRequest
     *
     * @returns DeleteHotlineNumberResponse
     *
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
     * @param request - DeleteOutboundTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOutboundTaskResponse
     *
     * @param DeleteOutboundTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteOutboundTaskResponse
     */
    public function deleteOutboundTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->outboundTaskId) {
            @$query['OutboundTaskId'] = $request->outboundTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOutboundTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteOutboundTaskRequest
     *
     * @returns DeleteOutboundTaskResponse
     *
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
     * Invoke DeleteOuterAccount to delete an external account by its external Account ID.
     *
     * @param request - DeleteOuterAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOuterAccountResponse
     *
     * @param DeleteOuterAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteOuterAccountResponse
     */
    public function deleteOuterAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOuterAccount',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOuterAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke DeleteOuterAccount to delete an external account by its external Account ID.
     *
     * @param request - DeleteOuterAccountRequest
     *
     * @returns DeleteOuterAccountResponse
     *
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
     * @param request - DeleteQualityProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQualityProjectResponse
     *
     * @param DeleteQualityProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteQualityProjectResponse
     */
    public function deleteQualityProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteQualityProject',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteQualityProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteQualityProjectRequest
     *
     * @returns DeleteQualityProjectResponse
     *
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
     * @param request - DeleteQualityRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteQualityRuleResponse
     *
     * @param DeleteQualityRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteQualityRuleResponse
     */
    public function deleteQualityRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteQualityRule',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteQualityRuleRequest
     *
     * @returns DeleteQualityRuleResponse
     *
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
     * Deletes an external skill group based on the skill group ID and skill group channel type.
     *
     * @param request - DeleteSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSkillGroupResponse
     *
     * @param DeleteSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteSkillGroupResponse
     */
    public function deleteSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSkillGroup',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an external skill group based on the skill group ID and skill group channel type.
     *
     * @param request - DeleteSkillGroupRequest
     *
     * @returns DeleteSkillGroupResponse
     *
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
     * Invoke the DescribeRecordData API to retrieve call information.
     *
     * @param request - DescribeRecordDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecordDataResponse
     *
     * @param DescribeRecordDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRecordDataResponse
     */
    public function describeRecordDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->acid) {
            @$query['Acid'] = $request->acid;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        if (null !== $request->secLevel) {
            @$query['SecLevel'] = $request->secLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecordData',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecordDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the DescribeRecordData API to retrieve call information.
     *
     * @param request - DescribeRecordDataRequest
     *
     * @returns DescribeRecordDataResponse
     *
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
     * @param request - EditQualityProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditQualityProjectResponse
     *
     * @param EditQualityProjectRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EditQualityProjectResponse
     */
    public function editQualityProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analysisIds) {
            @$query['AnalysisIds'] = $request->analysisIds;
        }

        if (null !== $request->channelTouchType) {
            @$query['ChannelTouchType'] = $request->channelTouchType;
        }

        if (null !== $request->checkFreqType) {
            @$query['CheckFreqType'] = $request->checkFreqType;
        }

        if (null !== $request->depList) {
            @$query['DepList'] = $request->depList;
        }

        if (null !== $request->groupList) {
            @$query['GroupList'] = $request->groupList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->projectVersion) {
            @$query['ProjectVersion'] = $request->projectVersion;
        }

        if (null !== $request->scopeType) {
            @$query['ScopeType'] = $request->scopeType;
        }

        if (null !== $request->servicerList) {
            @$query['ServicerList'] = $request->servicerList;
        }

        if (null !== $request->timeRangeEnd) {
            @$query['TimeRangeEnd'] = $request->timeRangeEnd;
        }

        if (null !== $request->timeRangeStart) {
            @$query['TimeRangeStart'] = $request->timeRangeStart;
        }

        $body = [];
        if (null !== $request->projectName) {
            @$body['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EditQualityProject',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EditQualityProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EditQualityProjectRequest
     *
     * @returns EditQualityProjectResponse
     *
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
     * @param request - EditQualityRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditQualityRuleResponse
     *
     * @param EditQualityRuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EditQualityRuleResponse
     */
    public function editQualityRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyWords) {
            @$body['KeyWords'] = $request->keyWords;
        }

        if (null !== $request->matchType) {
            @$body['MatchType'] = $request->matchType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->qualityRuleId) {
            @$body['QualityRuleId'] = $request->qualityRuleId;
        }

        if (null !== $request->ruleTag) {
            @$body['RuleTag'] = $request->ruleTag;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EditQualityRule',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EditQualityRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EditQualityRuleRequest
     *
     * @returns EditQualityRuleResponse
     *
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
     * @param request - EditQualityRuleTagRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditQualityRuleTagResponse
     *
     * @param EditQualityRuleTagRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EditQualityRuleTagResponse
     */
    public function editQualityRuleTagWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analysisTypes) {
            @$query['AnalysisTypes'] = $request->analysisTypes;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EditQualityRuleTag',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EditQualityRuleTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - EditQualityRuleTagRequest
     *
     * @returns EditQualityRuleTagResponse
     *
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
     * Invoke EncryptPhoneNum to encrypt the User\\"s Phone number.
     *
     * @param request - EncryptPhoneNumRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EncryptPhoneNumResponse
     *
     * @param EncryptPhoneNumRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return EncryptPhoneNumResponse
     */
    public function encryptPhoneNumWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EncryptPhoneNum',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EncryptPhoneNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke EncryptPhoneNum to encrypt the User\\"s Phone number.
     *
     * @param request - EncryptPhoneNumRequest
     *
     * @returns EncryptPhoneNumResponse
     *
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
     * Retrieve or recover a call.
     *
     * @param request - FetchCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FetchCallResponse
     *
     * @param FetchCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return FetchCallResponse
     */
    public function fetchCallWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->callId) {
            @$body['CallId'] = $request->callId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$body['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->holdConnectionId) {
            @$body['HoldConnectionId'] = $request->holdConnectionId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FetchCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FetchCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve or recover a call.
     *
     * @param request - FetchCallRequest
     *
     * @returns FetchCallResponse
     *
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
     * End the hotline service by instance ID and agent account name.
     *
     * @remarks
     * ### Queries per second (QPS) limit
     * - Per-user API call frequency: No rate limiting.
     * - API frequency: 100 calls per second.
     * > If the total number of calls from multiple users exceeds the API frequency limit, throttling will be triggered.
     *
     * @param request - FinishHotlineServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FinishHotlineServiceResponse
     *
     * @param FinishHotlineServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return FinishHotlineServiceResponse
     */
    public function finishHotlineServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FinishHotlineService',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FinishHotlineServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * End the hotline service by instance ID and agent account name.
     *
     * @remarks
     * ### Queries per second (QPS) limit
     * - Per-user API call frequency: No rate limiting.
     * - API frequency: 100 calls per second.
     * > If the total number of calls from multiple users exceeds the API frequency limit, throttling will be triggered.
     *
     * @param request - FinishHotlineServiceRequest
     *
     * @returns FinishHotlineServiceResponse
     *
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
     * Generate a message channel access signature based on the Artificial Intelligence Cloud Call Service (AICCS) instance ID and agent account name.
     *
     * @remarks
     * - You can invoke this API to generate a message channel access signature. The **Data** field in the response contains the MessageBox message channel signature code.
     * - Before invoking the API, we recommend that you confirm your AICCS instance ID. For instructions on how to obtain it, see the description of [Request Parameters](#api-detail-35).
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API-wide frequency: 100 queries per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GenerateWebSocketSignRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateWebSocketSignResponse
     *
     * @param GenerateWebSocketSignRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GenerateWebSocketSignResponse
     */
    public function generateWebSocketSignWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GenerateWebSocketSign',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateWebSocketSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generate a message channel access signature based on the Artificial Intelligence Cloud Call Service (AICCS) instance ID and agent account name.
     *
     * @remarks
     * - You can invoke this API to generate a message channel access signature. The **Data** field in the response contains the MessageBox message channel signature code.
     * - Before invoking the API, we recommend that you confirm your AICCS instance ID. For instructions on how to obtain it, see the description of [Request Parameters](#api-detail-35).
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API-wide frequency: 100 queries per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GenerateWebSocketSignRequest
     *
     * @returns GenerateWebSocketSignResponse
     *
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
     * Query agent information in the Cloud Customer Service System by instance ID and agent account name, such as agent ID.
     *
     * @remarks
     * - Before invoking this API, confirm the AICCS instance information and the agent account name. For guidance on how to obtain these details, refer to the instructions in [Request Parameters](#api-detail-35).
     * - Deleted agents can also be queried. Check the **Status** parameter in the response. If its value is 2, it indicates that the agent has been deleted.
     * ### queries per second (QPS) Limit
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentResponse
     *
     * @param GetAgentRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetAgentResponse
     */
    public function getAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgent',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query agent information in the Cloud Customer Service System by instance ID and agent account name, such as agent ID.
     *
     * @remarks
     * - Before invoking this API, confirm the AICCS instance information and the agent account name. For guidance on how to obtain these details, refer to the instructions in [Request Parameters](#api-detail-35).
     * - Deleted agents can also be queried. Check the **Status** parameter in the response. If its value is 2, it indicates that the agent has been deleted.
     * ### queries per second (QPS) Limit
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetAgentRequest
     *
     * @returns GetAgentResponse
     *
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
     * Obtain the agent-level status metrics under hotline monitoring. Supports queries by instance, time range, agent, and department group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to provide agent or department information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param tmpReq - GetAgentBasisStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentBasisStatusResponse
     *
     * @param GetAgentBasisStatusRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return GetAgentBasisStatusResponse
     */
    public function getAgentBasisStatusWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAgentBasisStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->agentIds) {
            $request->agentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }

        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentBasisStatus',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentBasisStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the agent-level status metrics under hotline monitoring. Supports queries by instance, time range, agent, and department group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to provide agent or department information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GetAgentBasisStatusRequest
     *
     * @returns GetAgentBasisStatusResponse
     *
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
     * @param request - GetAgentByIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentByIdResponse
     *
     * @param GetAgentByIdRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAgentByIdResponse
     */
    public function getAgentByIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->agentId) {
            @$body['AgentId'] = $request->agentId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAgentById',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetAgentByIdRequest
     *
     * @returns GetAgentByIdResponse
     *
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
     * Retrieve the summary data of hotline agent details under hotline reports. Supports queries by instance, time range, agent, and department group.
     *
     * @remarks
     * - Before you invoke this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to provide agent or department information, refer to the instructions in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param tmpReq - GetAgentDetailReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentDetailReportResponse
     *
     * @param GetAgentDetailReportRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return GetAgentDetailReportResponse
     */
    public function getAgentDetailReportWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAgentDetailReportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->agentIds) {
            $request->agentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }

        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentDetailReport',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentDetailReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the summary data of hotline agent details under hotline reports. Supports queries by instance, time range, agent, and department group.
     *
     * @remarks
     * - Before you invoke this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to provide agent or department information, refer to the instructions in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GetAgentDetailReportRequest
     *
     * @returns GetAgentDetailReportResponse
     *
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
     * Obtain real-time agent detail data grouped by instance, department, and skill group (real-time data).
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department or skill group information, refer to the instructions in the [Request Parameters](#api-detail-35) section.
     * ### queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 10 requests per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetAgentIndexRealTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentIndexRealTimeResponse
     *
     * @param GetAgentIndexRealTimeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAgentIndexRealTimeResponse
     */
    public function getAgentIndexRealTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->depIds) {
            @$query['DepIds'] = $request->depIds;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentIndexRealTime',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentIndexRealTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain real-time agent detail data grouped by instance, department, and skill group (real-time data).
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department or skill group information, refer to the instructions in the [Request Parameters](#api-detail-35) section.
     * ### queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 10 requests per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetAgentIndexRealTimeRequest
     *
     * @returns GetAgentIndexRealTimeResponse
     *
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
     * Obtain the agent service status metrics from online reports. Supports queries by instance, time range, agent, and department group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to provide agent or department information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 queries per second.
     * - API-wide invocation frequency: 100 queries per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param tmpReq - GetAgentServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentServiceStatusResponse
     *
     * @param GetAgentServiceStatusRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return GetAgentServiceStatusResponse
     */
    public function getAgentServiceStatusWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAgentServiceStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->agentIds) {
            $request->agentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }

        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentServiceStatus',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the agent service status metrics from online reports. Supports queries by instance, time range, agent, and department group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to provide agent or department information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 queries per second.
     * - API-wide invocation frequency: 100 queries per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param request - GetAgentServiceStatusRequest
     *
     * @returns GetAgentServiceStatusResponse
     *
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
     * Obtain agent-level statistics under hotline monitoring. Supports querying by instance, time range, agent, and department group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify agent or department information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### queries per second (QPS) limit
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param tmpReq - GetAgentStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAgentStatisticsResponse
     *
     * @param GetAgentStatisticsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return GetAgentStatisticsResponse
     */
    public function getAgentStatisticsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAgentStatisticsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->agentIds) {
            $request->agentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }

        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAgentStatistics',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAgentStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain agent-level statistics under hotline monitoring. Supports querying by instance, time range, agent, and department group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify agent or department information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### queries per second (QPS) limit
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param request - GetAgentStatisticsRequest
     *
     * @returns GetAgentStatisticsResponse
     *
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
     * Query the business information associated with this call by instance ID and session ID.
     *
     * @remarks
     * ### Queries per second (QPS) limits
     * - Call frequency per user: 100 times/second.
     * - API call frequency: 100 times/second.
     * > If the total calls from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetAiOutboundTaskBizDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiOutboundTaskBizDataResponse
     *
     * @param GetAiOutboundTaskBizDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAiOutboundTaskBizDataResponse
     */
    public function getAiOutboundTaskBizDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiOutboundTaskBizData',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAiOutboundTaskBizDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the business information associated with this call by instance ID and session ID.
     *
     * @remarks
     * ### Queries per second (QPS) limits
     * - Call frequency per user: 100 times/second.
     * - API call frequency: 100 times/second.
     * > If the total calls from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetAiOutboundTaskBizDataRequest
     *
     * @returns GetAiOutboundTaskBizDataResponse
     *
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
     * Obtain the outbound call job details by instance ID and job ID.
     *
     * @remarks
     * The outbound call job details include the job ID, job status, task type, outbound caller number, callee number repetition policy, and other information. For more information, see [Response parameters](#api-detail-40).
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetAiOutboundTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiOutboundTaskDetailResponse
     *
     * @param GetAiOutboundTaskDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetAiOutboundTaskDetailResponse
     */
    public function getAiOutboundTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiOutboundTaskDetail',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAiOutboundTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the outbound call job details by instance ID and job ID.
     *
     * @remarks
     * The outbound call job details include the job ID, job status, task type, outbound caller number, callee number repetition policy, and other information. For more information, see [Response parameters](#api-detail-40).
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetAiOutboundTaskDetailRequest
     *
     * @returns GetAiOutboundTaskDetailResponse
     *
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
     * Obtain task execution details by instance ID and job ID.
     *
     * @remarks
     * The task execution details include the total number of jobs, job batches, outbound call numbers, corresponding call counts, execution status, and other information.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetAiOutboundTaskExecDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiOutboundTaskExecDetailResponse
     *
     * @param GetAiOutboundTaskExecDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetAiOutboundTaskExecDetailResponse
     */
    public function getAiOutboundTaskExecDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiOutboundTaskExecDetail',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAiOutboundTaskExecDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain task execution details by instance ID and job ID.
     *
     * @remarks
     * The task execution details include the total number of jobs, job batches, outbound call numbers, corresponding call counts, execution status, and other information.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetAiOutboundTaskExecDetailRequest
     *
     * @returns GetAiOutboundTaskExecDetailResponse
     *
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
     * Retrieve the outbound call job list by instance ID and Task Type.
     *
     * @remarks
     * - The job list contains job information, including job ID, Task Status, Task Name, task completion rate, and more. For details, see [Response parameters](#api-detail-40).
     * - If you need to update job information, you can invoke the [UpdateAiOutboundTask](https://help.aliyun.com/document_detail/2718021.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API invocation frequency: 100 times/second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param request - GetAiOutboundTaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiOutboundTaskListResponse
     *
     * @param GetAiOutboundTaskListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAiOutboundTaskListResponse
     */
    public function getAiOutboundTaskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiOutboundTaskList',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAiOutboundTaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the outbound call job list by instance ID and Task Type.
     *
     * @remarks
     * - The job list contains job information, including job ID, Task Status, Task Name, task completion rate, and more. For details, see [Response parameters](#api-detail-40).
     * - If you need to update job information, you can invoke the [UpdateAiOutboundTask](https://help.aliyun.com/document_detail/2718021.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API invocation frequency: 100 times/second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param request - GetAiOutboundTaskListRequest
     *
     * @returns GetAiOutboundTaskListResponse
     *
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
     * Obtain the outbound call job progress by instance ID and job ID.
     *
     * @remarks
     * - Before invoking this API, we recommend that you confirm the instance ID and job ID. For more information, see [Request Parameters](#api-detail-35).
     * - The outbound call job progress includes information such as job ID, Task Type, job completion rate, agent connection rate, and customer connection rate. For details, see [Response Parameters](#api-detail-40).
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API-wide invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GetAiOutboundTaskProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAiOutboundTaskProgressResponse
     *
     * @param GetAiOutboundTaskProgressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetAiOutboundTaskProgressResponse
     */
    public function getAiOutboundTaskProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAiOutboundTaskProgress',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAiOutboundTaskProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the outbound call job progress by instance ID and job ID.
     *
     * @remarks
     * - Before invoking this API, we recommend that you confirm the instance ID and job ID. For more information, see [Request Parameters](#api-detail-35).
     * - The outbound call job progress includes information such as job ID, Task Type, job completion rate, agent connection rate, and customer connection rate. For details, see [Response Parameters](#api-detail-40).
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API-wide invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GetAiOutboundTaskProgressRequest
     *
     * @returns GetAiOutboundTaskProgressResponse
     *
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
     * getAllDepartment.
     *
     * @remarks
     * - You can invoke this API to obtain department IDs for department group queries in certain data query APIs (such as [GetHotlineServiceStatistics](https://help.aliyun.com/document_detail/2717938.html)).
     * - After creating, deleting, or updating department information, you can invoke this API to confirm whether the department information matches your expectations.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetAllDepartmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAllDepartmentResponse
     *
     * @param GetAllDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetAllDepartmentResponse
     */
    public function getAllDepartmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAllDepartment',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAllDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * getAllDepartment.
     *
     * @remarks
     * - You can invoke this API to obtain department IDs for department group queries in certain data query APIs (such as [GetHotlineServiceStatistics](https://help.aliyun.com/document_detail/2717938.html)).
     * - After creating, deleting, or updating department information, you can invoke this API to confirm whether the department information matches your expectations.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetAllDepartmentRequest
     *
     * @returns GetAllDepartmentResponse
     *
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
     * Retrieves the upload address for a voice memo recording.
     *
     * @param request - GetAudioNoteUploadUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAudioNoteUploadUrlResponse
     *
     * @param GetAudioNoteUploadUrlRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetAudioNoteUploadUrlResponse
     */
    public function getAudioNoteUploadUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAudioNoteUploadUrl',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAudioNoteUploadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the upload address for a voice memo recording.
     *
     * @param request - GetAudioNoteUploadUrlRequest
     *
     * @returns GetAudioNoteUploadUrlResponse
     *
     * @param GetAudioNoteUploadUrlRequest $request
     *
     * @return GetAudioNoteUploadUrlResponse
     */
    public function getAudioNoteUploadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAudioNoteUploadUrlWithOptions($request, $runtime);
    }

    /**
     * Retrieves the dialog content for a call by using its call ID. You can retrieve content for calls completed within the last 30 days.
     *
     * @param request - GetCallDialogContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCallDialogContentResponse
     *
     * @param GetCallDialogContentRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetCallDialogContentResponse
     */
    public function getCallDialogContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callDate) {
            @$query['CallDate'] = $request->callDate;
        }

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
            'action' => 'GetCallDialogContent',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCallDialogContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the dialog content for a call by using its call ID. You can retrieve content for calls completed within the last 30 days.
     *
     * @param request - GetCallDialogContentRequest
     *
     * @returns GetCallDialogContentResponse
     *
     * @param GetCallDialogContentRequest $request
     *
     * @return GetCallDialogContentResponse
     */
    public function getCallDialogContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCallDialogContentWithOptions($request, $runtime);
    }

    /**
     * Obtain the URL of a call recording file based on the call creation time and the unique call ID, and then retrieve the call recording file using the URL.
     *
     * @remarks
     * ### Prerequisites
     * Before invoking this API, ensure that call recording was enabled during the invocation of the [RobotCall](https://help.aliyun.com/document_detail/223270.html) API and that you successfully received the recording receipt, indicating that the recording file has been generated. Otherwise, an invalid URL will be returned.
     * ### How-To
     * This API serves as a supplementary method to the recording receipt. If the URL in the recording receipt message expires, you can use this API to obtain a new recording URL. By default, the validity period of the recording receipt URL is three days.
     * > We recommend that you directly download the recording content using the recording receipt URL and save it locally, rather than relying on the receipt URL, to avoid issues caused by expiration.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > Throttling will be triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param request - GetCallSoundRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCallSoundRecordResponse
     *
     * @param GetCallSoundRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetCallSoundRecordResponse
     */
    public function getCallSoundRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->createTime) {
            @$query['CreateTime'] = $request->createTime;
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
            'action' => 'GetCallSoundRecord',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCallSoundRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the URL of a call recording file based on the call creation time and the unique call ID, and then retrieve the call recording file using the URL.
     *
     * @remarks
     * ### Prerequisites
     * Before invoking this API, ensure that call recording was enabled during the invocation of the [RobotCall](https://help.aliyun.com/document_detail/223270.html) API and that you successfully received the recording receipt, indicating that the recording file has been generated. Otherwise, an invalid URL will be returned.
     * ### How-To
     * This API serves as a supplementary method to the recording receipt. If the URL in the recording receipt message expires, you can use this API to obtain a new recording URL. By default, the validity period of the recording receipt URL is three days.
     * > We recommend that you directly download the recording content using the recording receipt URL and save it locally, rather than relying on the receipt URL, to avoid issues caused by expiration.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > Throttling will be triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param request - GetCallSoundRecordRequest
     *
     * @returns GetCallSoundRecordResponse
     *
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
     * Invoke the GetConfigNumList API to obtain the hotline settings number list.
     *
     * @param request - GetConfigNumListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConfigNumListResponse
     *
     * @param GetConfigNumListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetConfigNumListResponse
     */
    public function getConfigNumListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConfigNumList',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConfigNumListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the GetConfigNumList API to obtain the hotline settings number list.
     *
     * @param request - GetConfigNumListRequest
     *
     * @returns GetConfigNumListResponse
     *
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
     * You can invoke the GetCustomerInfo API to obtain membership details by Workbench membership ID.
     *
     * @param request - GetCustomerInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCustomerInfoResponse
     *
     * @param GetCustomerInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetCustomerInfoResponse
     */
    public function getCustomerInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCustomerInfo',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCustomerInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can invoke the GetCustomerInfo API to obtain membership details by Workbench membership ID.
     *
     * @param request - GetCustomerInfoRequest
     *
     * @returns GetCustomerInfoResponse
     *
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
     * Queries skill group categories and the skill group list by AICCS instance ID and agent ID.
     *
     * @remarks
     * - The skill groups returned by this API are grouped by department ID, which can be specified when you [create a skill group](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-createskillgroup).
     * - To query detailed skill group information, you can invoke the [QuerySkillGroups](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-queryskillgroups) API.
     * - Before invoking this API, you should confirm the AICCS instance ID and agent ID. For guidance on how to obtain them, see the description of [Request Parameters](#api-detail-35).
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 1000 queries per second.
     * - API-wide invocation frequency: 1000 queries per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GetDepGroupTreeDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDepGroupTreeDataResponse
     *
     * @param GetDepGroupTreeDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetDepGroupTreeDataResponse
     */
    public function getDepGroupTreeDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDepGroupTreeData',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDepGroupTreeDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries skill group categories and the skill group list by AICCS instance ID and agent ID.
     *
     * @remarks
     * - The skill groups returned by this API are grouped by department ID, which can be specified when you [create a skill group](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-createskillgroup).
     * - To query detailed skill group information, you can invoke the [QuerySkillGroups](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-queryskillgroups) API.
     * - Before invoking this API, you should confirm the AICCS instance ID and agent ID. For guidance on how to obtain them, see the description of [Request Parameters](#api-detail-35).
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 1000 queries per second.
     * - API-wide invocation frequency: 1000 queries per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GetDepGroupTreeDataRequest
     *
     * @returns GetDepGroupTreeDataResponse
     *
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
     * Obtain department-level status metrics under hotline monitoring. Supports queries by instance, time range, and department group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API-wide invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param tmpReq - GetDepartmentalLatitudeAgentStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDepartmentalLatitudeAgentStatusResponse
     *
     * @param GetDepartmentalLatitudeAgentStatusRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return GetDepartmentalLatitudeAgentStatusResponse
     */
    public function getDepartmentalLatitudeAgentStatusWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetDepartmentalLatitudeAgentStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDepartmentalLatitudeAgentStatus',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDepartmentalLatitudeAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain department-level status metrics under hotline monitoring. Supports queries by instance, time range, and department group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API-wide invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GetDepartmentalLatitudeAgentStatusRequest
     *
     * @returns GetDepartmentalLatitudeAgentStatusResponse
     *
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
     * Obtain the current service details of a hotline agent based on the instance ID and agent account name.
     *
     * @remarks
     * The hotline agent details include information such as agent posture status, agent ID, and heartbeat signature. For more information, see [Response parameters](#api-detail-40).
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: Rate Limiting is not applied.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetHotlineAgentDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotlineAgentDetailResponse
     *
     * @param GetHotlineAgentDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetHotlineAgentDetailResponse
     */
    public function getHotlineAgentDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHotlineAgentDetail',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotlineAgentDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the current service details of a hotline agent based on the instance ID and agent account name.
     *
     * @remarks
     * The hotline agent details include information such as agent posture status, agent ID, and heartbeat signature. For more information, see [Response parameters](#api-detail-40).
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: Rate Limiting is not applied.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetHotlineAgentDetailRequest
     *
     * @returns GetHotlineAgentDetailResponse
     *
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
     * Obtain detailed data metrics by hotline agent dimension (T+1). Supports grouping queries by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/document_detail/276009.html) and [created an instance](https://help.aliyun.com/document_detail/276011.html).
     * - If you need to specify department or skill group information, refer to the instructions in the [Request Parameters](#api-detail-35) section.
     * > Query logic priority:
     * > - If GroupIds is not empty, query data metrics under the specified skill groups.
     * > - Otherwise, if DepIds is not empty, query data metrics under the corresponding department groups.
     * > - Otherwise, query data metrics under the AICCS instance.
     * ### QPS Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 10 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetHotlineAgentDetailReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotlineAgentDetailReportResponse
     *
     * @param GetHotlineAgentDetailReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHotlineAgentDetailReportResponse
     */
    public function getHotlineAgentDetailReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->depIds) {
            @$query['DepIds'] = $request->depIds;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHotlineAgentDetailReport',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotlineAgentDetailReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain detailed data metrics by hotline agent dimension (T+1). Supports grouping queries by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/document_detail/276009.html) and [created an instance](https://help.aliyun.com/document_detail/276011.html).
     * - If you need to specify department or skill group information, refer to the instructions in the [Request Parameters](#api-detail-35) section.
     * > Query logic priority:
     * > - If GroupIds is not empty, query data metrics under the specified skill groups.
     * > - Otherwise, if DepIds is not empty, query data metrics under the corresponding department groups.
     * > - Otherwise, query data metrics under the AICCS instance.
     * ### QPS Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 10 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetHotlineAgentDetailReportRequest
     *
     * @returns GetHotlineAgentDetailReportResponse
     *
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
     * Queries the hotline agent status in the Cloud Customer Service System by AICCS instance ID and agent account name.
     *
     * @remarks
     * - Before invoking this API, confirm the AICCS instance information and the agent account name. For guidance on how to obtain these details, see the description in [Request Parameters](#api-detail-35).
     * - To retrieve detailed information about a hotline agent, you can invoke the [GetHotlineAgentDetail](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-gethotlineagentdetail) API.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API-wide frequency: 200 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetHotlineAgentStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotlineAgentStatusResponse
     *
     * @param GetHotlineAgentStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetHotlineAgentStatusResponse
     */
    public function getHotlineAgentStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetHotlineAgentStatus',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotlineAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the hotline agent status in the Cloud Customer Service System by AICCS instance ID and agent account name.
     *
     * @remarks
     * - Before invoking this API, confirm the AICCS instance information and the agent account name. For guidance on how to obtain these details, see the description in [Request Parameters](#api-detail-35).
     * - To retrieve detailed information about a hotline agent, you can invoke the [GetHotlineAgentDetail](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-gethotlineagentdetail) API.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API-wide frequency: 200 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetHotlineAgentStatusRequest
     *
     * @returns GetHotlineAgentStatusResponse
     *
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
     * Invoke the GetHotlineCallAction API to query the result data of call actions.
     *
     * @remarks
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 50 times/second.
     * - API invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetHotlineCallActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotlineCallActionResponse
     *
     * @param GetHotlineCallActionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetHotlineCallActionResponse
     */
    public function getHotlineCallActionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->acc) {
            @$body['Acc'] = $request->acc;
        }

        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->act) {
            @$body['Act'] = $request->act;
        }

        if (null !== $request->biz) {
            @$body['Biz'] = $request->biz;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->fromSource) {
            @$body['FromSource'] = $request->fromSource;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetHotlineCallAction',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotlineCallActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the GetHotlineCallAction API to query the result data of call actions.
     *
     * @remarks
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 50 times/second.
     * - API invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetHotlineCallActionRequest
     *
     * @returns GetHotlineCallActionResponse
     *
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
     * Retrieve detailed (T+1) data by hotline skill group dimension. Supports grouping by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/document_detail/276009.html) and [created an instance](https://help.aliyun.com/document_detail/276011.html).
     * - If you need to specify agent, department, or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 10 queries per second.
     * > Throttle will be triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param request - GetHotlineGroupDetailReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotlineGroupDetailReportResponse
     *
     * @param GetHotlineGroupDetailReportRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHotlineGroupDetailReportResponse
     */
    public function getHotlineGroupDetailReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->depIds) {
            @$query['DepIds'] = $request->depIds;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHotlineGroupDetailReport',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotlineGroupDetailReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve detailed (T+1) data by hotline skill group dimension. Supports grouping by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/document_detail/276009.html) and [created an instance](https://help.aliyun.com/document_detail/276011.html).
     * - If you need to specify agent, department, or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 10 queries per second.
     * > Throttle will be triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param request - GetHotlineGroupDetailReportRequest
     *
     * @returns GetHotlineGroupDetailReportResponse
     *
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
     * Invoke the GetHotlineMessageLog API to retrieve hotline message records.
     *
     * @param request - GetHotlineMessageLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotlineMessageLogResponse
     *
     * @param GetHotlineMessageLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetHotlineMessageLogResponse
     */
    public function getHotlineMessageLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHotlineMessageLog',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotlineMessageLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the GetHotlineMessageLog API to retrieve hotline message records.
     *
     * @param request - GetHotlineMessageLogRequest
     *
     * @returns GetHotlineMessageLogResponse
     *
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
     * Invoke the GetHotlineRuntimeInfo API to query hotline runtime information.
     *
     * @param request - GetHotlineRuntimeInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotlineRuntimeInfoResponse
     *
     * @param GetHotlineRuntimeInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetHotlineRuntimeInfoResponse
     */
    public function getHotlineRuntimeInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHotlineRuntimeInfo',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotlineRuntimeInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the GetHotlineRuntimeInfo API to query hotline runtime information.
     *
     * @param request - GetHotlineRuntimeInfoRequest
     *
     * @returns GetHotlineRuntimeInfoResponse
     *
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
     * Obtain service statistics under hotline monitoring. Supports grouped queries by instance, time dimension, agent, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to provide agent, department, or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param tmpReq - GetHotlineServiceStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotlineServiceStatisticsResponse
     *
     * @param GetHotlineServiceStatisticsRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return GetHotlineServiceStatisticsResponse
     */
    public function getHotlineServiceStatisticsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetHotlineServiceStatisticsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->agentIds) {
            $request->agentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }

        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        if (null !== $tmpReq->groupIds) {
            $request->groupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHotlineServiceStatistics',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotlineServiceStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain service statistics under hotline monitoring. Supports grouped queries by instance, time dimension, agent, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to provide agent, department, or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param request - GetHotlineServiceStatisticsRequest
     *
     * @returns GetHotlineServiceStatisticsResponse
     *
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
     * Obtain the queue length of hotline members.
     *
     * @param request - GetHotlineWaitingNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetHotlineWaitingNumberResponse
     *
     * @param GetHotlineWaitingNumberRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetHotlineWaitingNumberResponse
     */
    public function getHotlineWaitingNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetHotlineWaitingNumber',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetHotlineWaitingNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the queue length of hotline members.
     *
     * @param request - GetHotlineWaitingNumberRequest
     *
     * @returns GetHotlineWaitingNumberResponse
     *
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
     * You can obtain the current statistical metrics (real-time data) and query them by instance ID, department, or skill group.
     *
     * @remarks
     * - The current data statistics metrics include cumulative metrics for the day and real-time metrics.
     * - If you need to specify department or skill group information, refer to the instructions in the [Request Parameters](#api-detail-35) section.
     * > Query logic priority:
     * > - If GroupIds is not empty, query the data metrics for the specified skill groups.
     * > - Otherwise, if DepIds is not empty, query the data metrics for the specified departments.
     * > - Otherwise, query the data metrics for the Artificial Intelligence Cloud Call Service (AICCS) instance.
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetIndexCurrentValueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIndexCurrentValueResponse
     *
     * @param GetIndexCurrentValueRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetIndexCurrentValueResponse
     */
    public function getIndexCurrentValueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->depIds) {
            @$query['DepIds'] = $request->depIds;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetIndexCurrentValue',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetIndexCurrentValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can obtain the current statistical metrics (real-time data) and query them by instance ID, department, or skill group.
     *
     * @remarks
     * - The current data statistics metrics include cumulative metrics for the day and real-time metrics.
     * - If you need to specify department or skill group information, refer to the instructions in the [Request Parameters](#api-detail-35) section.
     * > Query logic priority:
     * > - If GroupIds is not empty, query the data metrics for the specified skill groups.
     * > - Otherwise, if DepIds is not empty, query the data metrics for the specified departments.
     * > - Otherwise, query the data metrics for the Artificial Intelligence Cloud Call Service (AICCS) instance.
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetIndexCurrentValueRequest
     *
     * @returns GetIndexCurrentValueResponse
     *
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
     * @param request - GetInstanceListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceListResponse
     *
     * @param GetInstanceListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetInstanceListResponse
     */
    public function getInstanceListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInstanceList',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetInstanceListRequest
     *
     * @returns GetInstanceListResponse
     *
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
     * Invoke the GetMcuLvsIp API to query the hotline server IP address.
     *
     * @param request - GetMcuLvsIpRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMcuLvsIpResponse
     *
     * @param GetMcuLvsIpRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetMcuLvsIpResponse
     */
    public function getMcuLvsIpWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMcuLvsIp',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMcuLvsIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the GetMcuLvsIp API to query the hotline server IP address.
     *
     * @param request - GetMcuLvsIpRequest
     *
     * @returns GetMcuLvsIpResponse
     *
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
     * Obtain the number\\"s归属地 information based on the instance ID and phone number.
     *
     * @remarks
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetNumLocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNumLocationResponse
     *
     * @param GetNumLocationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetNumLocationResponse
     */
    public function getNumLocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetNumLocation',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetNumLocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the number\\"s归属地 information based on the instance ID and phone number.
     *
     * @remarks
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetNumLocationRequest
     *
     * @returns GetNumLocationResponse
     *
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
     * Obtain online agent information data under real-time monitoring. Support queries by instance, time range, agent, and department group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify agent or department information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param tmpReq - GetOnlineSeatInformationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOnlineSeatInformationResponse
     *
     * @param GetOnlineSeatInformationRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return GetOnlineSeatInformationResponse
     */
    public function getOnlineSeatInformationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetOnlineSeatInformationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->agentIds) {
            $request->agentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }

        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOnlineSeatInformation',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOnlineSeatInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain online agent information data under real-time monitoring. Support queries by instance, time range, agent, and department group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify agent or department information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param request - GetOnlineSeatInformationRequest
     *
     * @returns GetOnlineSeatInformationResponse
     *
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
     * Obtain the volume of Online Services under online monitoring. Support grouped queries by instance, time range, agent, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify agent, department, or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param tmpReq - GetOnlineServiceVolumeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOnlineServiceVolumeResponse
     *
     * @param GetOnlineServiceVolumeRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return GetOnlineServiceVolumeResponse
     */
    public function getOnlineServiceVolumeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetOnlineServiceVolumeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->agentIds) {
            $request->agentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }

        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        if (null !== $tmpReq->groupIds) {
            $request->groupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOnlineServiceVolume',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOnlineServiceVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the volume of Online Services under online monitoring. Support grouped queries by instance, time range, agent, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify agent, department, or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GetOnlineServiceVolumeRequest
     *
     * @returns GetOnlineServiceVolumeResponse
     *
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
     * Retrieve the list of external hotline numbers.
     *
     * @param request - GetOutbounNumListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOutbounNumListResponse
     *
     * @param GetOutbounNumListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetOutbounNumListResponse
     */
    public function getOutbounNumListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOutbounNumList',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOutbounNumListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the list of external hotline numbers.
     *
     * @param request - GetOutbounNumListRequest
     *
     * @returns GetOutbounNumListResponse
     *
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
     * Invoke GetQualityProjectDetail to obtain the quality inspection job details.
     *
     * @param request - GetQualityProjectDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQualityProjectDetailResponse
     *
     * @param GetQualityProjectDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetQualityProjectDetailResponse
     */
    public function getQualityProjectDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQualityProjectDetail',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQualityProjectDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke GetQualityProjectDetail to obtain the quality inspection job details.
     *
     * @param request - GetQualityProjectDetailRequest
     *
     * @returns GetQualityProjectDetailResponse
     *
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
     * Invoke GetQualityProjectList to obtain the quality inspection job list.
     *
     * @param request - GetQualityProjectListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQualityProjectListResponse
     *
     * @param GetQualityProjectListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetQualityProjectListResponse
     */
    public function getQualityProjectListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->checkFreqType) {
            @$query['checkFreqType'] = $request->checkFreqType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQualityProjectList',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQualityProjectListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke GetQualityProjectList to obtain the quality inspection job list.
     *
     * @param request - GetQualityProjectListRequest
     *
     * @returns GetQualityProjectListResponse
     *
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
     * @param request - GetQualityProjectLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQualityProjectLogResponse
     *
     * @param GetQualityProjectLogRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetQualityProjectLogResponse
     */
    public function getQualityProjectLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQualityProjectLog',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQualityProjectLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetQualityProjectLogRequest
     *
     * @returns GetQualityProjectLogResponse
     *
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
     * @param request - GetQualityResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQualityResultResponse
     *
     * @param GetQualityResultRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetQualityResultResponse
     */
    public function getQualityResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelType) {
            @$query['ChannelType'] = $request->channelType;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->hitStatus) {
            @$query['HitStatus'] = $request->hitStatus;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectIds) {
            @$query['ProjectIds'] = $request->projectIds;
        }

        if (null !== $request->qualityRuleIds) {
            @$query['QualityRuleIds'] = $request->qualityRuleIds;
        }

        if (null !== $request->touchEndTime) {
            @$query['TouchEndTime'] = $request->touchEndTime;
        }

        if (null !== $request->touchStartTime) {
            @$query['TouchStartTime'] = $request->touchStartTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQualityResult',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQualityResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetQualityResultRequest
     *
     * @returns GetQualityResultResponse
     *
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
     * @param request - GetQualityRuleDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQualityRuleDetailResponse
     *
     * @param GetQualityRuleDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetQualityRuleDetailResponse
     */
    public function getQualityRuleDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->qualityRuleId) {
            @$query['QualityRuleId'] = $request->qualityRuleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQualityRuleDetail',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQualityRuleDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetQualityRuleDetailRequest
     *
     * @returns GetQualityRuleDetailResponse
     *
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
     * @param request - GetQualityRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQualityRuleListResponse
     *
     * @param GetQualityRuleListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetQualityRuleListResponse
     */
    public function getQualityRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQualityRuleList',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQualityRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetQualityRuleListRequest
     *
     * @returns GetQualityRuleListResponse
     *
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
     * @param request - GetQualityRuleTagListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQualityRuleTagListResponse
     *
     * @param GetQualityRuleTagListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetQualityRuleTagListResponse
     */
    public function getQualityRuleTagListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQualityRuleTagList',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQualityRuleTagListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetQualityRuleTagListRequest
     *
     * @returns GetQualityRuleTagListResponse
     *
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
     * Obtain queue information under the skill group dimension in online monitoring. Supports queries grouped by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param tmpReq - GetQueueInformationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetQueueInformationResponse
     *
     * @param GetQueueInformationRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return GetQueueInformationResponse
     */
    public function getQueueInformationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetQueueInformationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        if (null !== $tmpReq->groupIds) {
            $request->groupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueueInformation',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueueInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain queue information under the skill group dimension in online monitoring. Supports queries grouped by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GetQueueInformationRequest
     *
     * @returns GetQueueInformationResponse
     *
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
     * Invoke the GetRecordData API to obtain a recording file.
     *
     * @param request - GetRecordDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecordDataResponse
     *
     * @param GetRecordDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetRecordDataResponse
     */
    public function getRecordDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acid) {
            @$query['Acid'] = $request->acid;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRecordData',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRecordDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the GetRecordData API to obtain a recording file.
     *
     * @param request - GetRecordDataRequest
     *
     * @returns GetRecordDataResponse
     *
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
     * Invoke the GetRecordUrl API to obtain the incoming and outgoing calls recording link.
     *
     * @param request - GetRecordUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRecordUrlResponse
     *
     * @param GetRecordUrlRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetRecordUrlResponse
     */
    public function getRecordUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRecordUrl',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRecordUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the GetRecordUrl API to obtain the incoming and outgoing calls recording link.
     *
     * @param request - GetRecordUrlRequest
     *
     * @returns GetRecordUrlResponse
     *
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
     * Invoke GetRtcToken to obtain the token for a shift agent.
     *
     * @param request - GetRtcTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRtcTokenResponse
     *
     * @param GetRtcTokenRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetRtcTokenResponse
     */
    public function getRtcTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRtcToken',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRtcTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke GetRtcToken to obtain the token for a shift agent.
     *
     * @param request - GetRtcTokenRequest
     *
     * @returns GetRtcTokenResponse
     *
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
     * Obtain agent service capacity data under online monitoring. Supports queries by instance, time range, and department group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param tmpReq - GetSeatInformationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSeatInformationResponse
     *
     * @param GetSeatInformationRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return GetSeatInformationResponse
     */
    public function getSeatInformationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSeatInformationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'depIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSeatInformation',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSeatInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain agent service capacity data under online monitoring. Supports queries by instance, time range, and department group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GetSeatInformationRequest
     *
     * @returns GetSeatInformationResponse
     *
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
     * Obtain the service status metrics of skill groups. Support grouped queries by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param tmpReq - GetSkillGroupAgentStatusDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillGroupAgentStatusDetailsResponse
     *
     * @param GetSkillGroupAgentStatusDetailsRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return GetSkillGroupAgentStatusDetailsResponse
     */
    public function getSkillGroupAgentStatusDetailsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSkillGroupAgentStatusDetailsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        if (null !== $tmpReq->groupIds) {
            $request->groupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkillGroupAgentStatusDetails',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillGroupAgentStatusDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the service status metrics of skill groups. Support grouped queries by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - GetSkillGroupAgentStatusDetailsRequest
     *
     * @returns GetSkillGroupAgentStatusDetailsResponse
     *
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
     * Obtain the aggregated agent status metrics for skill groups under hotline monitoring. Supports grouped queries by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param tmpReq - GetSkillGroupAndAgentStatusSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillGroupAndAgentStatusSummaryResponse
     *
     * @param GetSkillGroupAndAgentStatusSummaryRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return GetSkillGroupAndAgentStatusSummaryResponse
     */
    public function getSkillGroupAndAgentStatusSummaryWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSkillGroupAndAgentStatusSummaryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        if (null !== $tmpReq->groupIds) {
            $request->groupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkillGroupAndAgentStatusSummary',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillGroupAndAgentStatusSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the aggregated agent status metrics for skill groups under hotline monitoring. Supports grouped queries by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param request - GetSkillGroupAndAgentStatusSummaryRequest
     *
     * @returns GetSkillGroupAndAgentStatusSummaryResponse
     *
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
     * Obtain the hotline monitoring status metrics by skill group dimension. Supports queries grouped by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param tmpReq - GetSkillGroupLatitudeStateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillGroupLatitudeStateResponse
     *
     * @param GetSkillGroupLatitudeStateRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return GetSkillGroupLatitudeStateResponse
     */
    public function getSkillGroupLatitudeStateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSkillGroupLatitudeStateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        if (null !== $tmpReq->groupIds) {
            $request->groupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkillGroupLatitudeState',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillGroupLatitudeStateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the hotline monitoring status metrics by skill group dimension. Supports queries grouped by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetSkillGroupLatitudeStateRequest
     *
     * @returns GetSkillGroupLatitudeStateResponse
     *
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
     * Retrieve skill group–level service capacity data under online monitoring. Supports queries grouped by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param tmpReq - GetSkillGroupServiceCapabilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillGroupServiceCapabilityResponse
     *
     * @param GetSkillGroupServiceCapabilityRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return GetSkillGroupServiceCapabilityResponse
     */
    public function getSkillGroupServiceCapabilityWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSkillGroupServiceCapabilityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        if (null !== $tmpReq->groupIds) {
            $request->groupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkillGroupServiceCapability',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillGroupServiceCapabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve skill group–level service capacity data under online monitoring. Supports queries grouped by instance, time range, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify department or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param request - GetSkillGroupServiceCapabilityRequest
     *
     * @returns GetSkillGroupServiceCapabilityResponse
     *
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
     * Obtain the service status metrics of skill groups in online reports.
     *
     * @remarks
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param tmpReq - GetSkillGroupServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillGroupServiceStatusResponse
     *
     * @param GetSkillGroupServiceStatusRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return GetSkillGroupServiceStatusResponse
     */
    public function getSkillGroupServiceStatusWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSkillGroupServiceStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->agentIds) {
            $request->agentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }

        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        if (null !== $tmpReq->groupIds) {
            $request->groupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkillGroupServiceStatus',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillGroupServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the service status metrics of skill groups in online reports.
     *
     * @remarks
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - GetSkillGroupServiceStatusRequest
     *
     * @returns GetSkillGroupServiceStatusResponse
     *
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
     * Obtain the total status count of skill groups under hotline reports. Supports grouped queries by instance, time range, agent, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify agent, department, or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > Throttling will be triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param tmpReq - GetSkillGroupStatusTotalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSkillGroupStatusTotalResponse
     *
     * @param GetSkillGroupStatusTotalRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return GetSkillGroupStatusTotalResponse
     */
    public function getSkillGroupStatusTotalWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSkillGroupStatusTotalShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->agentIds) {
            $request->agentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'simple');
        }

        if (null !== $tmpReq->depIds) {
            $request->depIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->depIds, 'DepIds', 'simple');
        }

        if (null !== $tmpReq->groupIds) {
            $request->groupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'simple');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSkillGroupStatusTotal',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSkillGroupStatusTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the total status count of skill groups under hotline reports. Supports grouped queries by instance, time range, agent, department, and skill group.
     *
     * @remarks
     * - Before invoking this API, ensure that you have [activated the service](https://help.aliyun.com/zh/aiccs/user-guide/activate-aiccs?spm=a2c4g.11186623.0.0.38365923RQDwdH) and [created an instance](https://help.aliyun.com/zh/aiccs/user-guide/create-an-instance?spm=a2c4g.11186623.0.0.8e0b5a2fWNeRUn).
     * - If you need to specify agent, department, or skill group information, refer to the guidance in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times per second.
     * - API-wide invocation frequency: 100 times per second.
     * > Throttling will be triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param request - GetSkillGroupStatusTotalRequest
     *
     * @returns GetSkillGroupStatusTotalResponse
     *
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
     * Cancel dual-call.
     *
     * @param request - HangUpDoubleCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HangUpDoubleCallResponse
     *
     * @param HangUpDoubleCallRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return HangUpDoubleCallResponse
     */
    public function hangUpDoubleCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acid) {
            @$query['Acid'] = $request->acid;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HangUpDoubleCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HangUpDoubleCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancel dual-call.
     *
     * @param request - HangUpDoubleCallRequest
     *
     * @returns HangUpDoubleCallResponse
     *
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
     * Invoke HangupCall to execute the agent hang-up operation.
     *
     * @param request - HangupCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HangupCallResponse
     *
     * @param HangupCallRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return HangupCallResponse
     */
    public function hangupCallWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->callId) {
            @$body['CallId'] = $request->callId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$body['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HangupCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HangupCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke HangupCall to execute the agent hang-up operation.
     *
     * @param request - HangupCallRequest
     *
     * @returns HangupCallResponse
     *
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
     * Hangs up a call in Communication Intelligence Engine.
     *
     * @remarks
     * - Before you hang up a call in Communication Intelligence Engine, ensure that a call has been initiated by a large model.
     * - If a call has not been initiated, use the [LlmSmartCall](https://help.aliyun.com/document_detail/2862828.html) or [LlmSmartCallEncrypt](https://help.aliyun.com/document_detail/2881065.html) operation to do so.
     *
     * @param request - HangupOperateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HangupOperateResponse
     *
     * @param HangupOperateRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return HangupOperateResponse
     */
    public function hangupOperateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->immediateHangup) {
            @$query['ImmediateHangup'] = $request->immediateHangup;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HangupOperate',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HangupOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Hangs up a call in Communication Intelligence Engine.
     *
     * @remarks
     * - Before you hang up a call in Communication Intelligence Engine, ensure that a call has been initiated by a large model.
     * - If a call has not been initiated, use the [LlmSmartCall](https://help.aliyun.com/document_detail/2862828.html) or [LlmSmartCallEncrypt](https://help.aliyun.com/document_detail/2881065.html) operation to do so.
     *
     * @param request - HangupOperateRequest
     *
     * @returns HangupOperateResponse
     *
     * @param HangupOperateRequest $request
     *
     * @return HangupOperateResponse
     */
    public function hangupOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hangupOperateWithOptions($request, $runtime);
    }

    /**
     * Hang up a third-party call.
     *
     * @param request - HangupThirdCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HangupThirdCallResponse
     *
     * @param HangupThirdCallRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return HangupThirdCallResponse
     */
    public function hangupThirdCallWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->callId) {
            @$body['CallId'] = $request->callId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$body['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HangupThirdCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HangupThirdCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Hang up a third-party call.
     *
     * @param request - HangupThirdCallRequest
     *
     * @returns HangupThirdCallResponse
     *
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
     * Hold the call.
     *
     * @param request - HoldCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HoldCallResponse
     *
     * @param HoldCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return HoldCallResponse
     */
    public function holdCallWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->callId) {
            @$body['CallId'] = $request->callId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$body['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'HoldCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HoldCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Hold the call.
     *
     * @param request - HoldCallRequest
     *
     * @returns HoldCallResponse
     *
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
     * Query call details by instance ID.
     *
     * @remarks
     * Call details include the total number of records, call result, agent name, call time, and other information.
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 80 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency, throttling will be triggered.
     *
     * @param request - HotlineSessionQueryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HotlineSessionQueryResponse
     *
     * @param HotlineSessionQueryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return HotlineSessionQueryResponse
     */
    public function hotlineSessionQueryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acid) {
            @$query['Acid'] = $request->acid;
        }

        if (null !== $request->acidList) {
            @$query['AcidList'] = $request->acidList;
        }

        if (null !== $request->callResult) {
            @$query['CallResult'] = $request->callResult;
        }

        if (null !== $request->callResultList) {
            @$query['CallResultList'] = $request->callResultList;
        }

        if (null !== $request->callType) {
            @$query['CallType'] = $request->callType;
        }

        if (null !== $request->callTypeList) {
            @$query['CallTypeList'] = $request->callTypeList;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->calledNumberList) {
            @$query['CalledNumberList'] = $request->calledNumberList;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->callingNumberList) {
            @$query['CallingNumberList'] = $request->callingNumberList;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupIdList) {
            @$query['GroupIdList'] = $request->groupIdList;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->memberId) {
            @$query['MemberId'] = $request->memberId;
        }

        if (null !== $request->memberIdList) {
            @$query['MemberIdList'] = $request->memberIdList;
        }

        if (null !== $request->memberName) {
            @$query['MemberName'] = $request->memberName;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->queryEndTime) {
            @$query['QueryEndTime'] = $request->queryEndTime;
        }

        if (null !== $request->queryStartTime) {
            @$query['QueryStartTime'] = $request->queryStartTime;
        }

        if (null !== $request->requestId) {
            @$query['RequestId'] = $request->requestId;
        }

        if (null !== $request->servicerId) {
            @$query['ServicerId'] = $request->servicerId;
        }

        if (null !== $request->servicerIdList) {
            @$query['ServicerIdList'] = $request->servicerIdList;
        }

        if (null !== $request->servicerName) {
            @$query['ServicerName'] = $request->servicerName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HotlineSessionQuery',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HotlineSessionQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query call details by instance ID.
     *
     * @remarks
     * Call details include the total number of records, call result, agent name, call time, and other information.
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 80 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency, throttling will be triggered.
     *
     * @param request - HotlineSessionQueryRequest
     *
     * @returns HotlineSessionQueryResponse
     *
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
     * Imports a single phone number to a task.
     *
     * @param tmpReq - ImportOneTaskPhoneNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportOneTaskPhoneNumberResponse
     *
     * @param ImportOneTaskPhoneNumberRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ImportOneTaskPhoneNumberResponse
     */
    public function importOneTaskPhoneNumberWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ImportOneTaskPhoneNumberShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->variables) {
            $request->variablesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->variables, 'Variables', 'json');
        }

        $query = [];
        if (null !== $request->encryptionType) {
            @$query['EncryptionType'] = $request->encryptionType;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

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

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->variablesShrink) {
            @$query['Variables'] = $request->variablesShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportOneTaskPhoneNumber',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportOneTaskPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports a single phone number to a task.
     *
     * @param request - ImportOneTaskPhoneNumberRequest
     *
     * @returns ImportOneTaskPhoneNumberResponse
     *
     * @param ImportOneTaskPhoneNumberRequest $request
     *
     * @return ImportOneTaskPhoneNumberResponse
     */
    public function importOneTaskPhoneNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importOneTaskPhoneNumberWithOptions($request, $runtime);
    }

    /**
     * Imports callee data for a call task.
     *
     * @remarks
     * - You can import callee data by calling this operation. Alternatively, go to the **call task management** page, click **Import Callee Data**, download the template, and then upload your file.
     * - This API operation currently supports only the JSON data type for importing callee data.
     * - Ensure that you have created a call task before you call this operation.
     * - To create a call task, go to the **call task management** page and click **Create Call Task**, or call the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926796.html) operation.
     *
     * @param tmpReq - ImportTaskNumberDatasRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportTaskNumberDatasResponse
     *
     * @param ImportTaskNumberDatasRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ImportTaskNumberDatasResponse
     */
    public function importTaskNumberDatasWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ImportTaskNumberDatasShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->phoneNumberList) {
            $request->phoneNumberListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->phoneNumberList, 'PhoneNumberList', 'json');
        }

        $query = [];
        if (null !== $request->dataType) {
            @$query['DataType'] = $request->dataType;
        }

        if (null !== $request->encryptionType) {
            @$query['EncryptionType'] = $request->encryptionType;
        }

        if (null !== $request->ossFileName) {
            @$query['OssFileName'] = $request->ossFileName;
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

        $body = [];
        if (null !== $request->phoneNumberListShrink) {
            @$body['PhoneNumberList'] = $request->phoneNumberListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportTaskNumberDatas',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportTaskNumberDatasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports callee data for a call task.
     *
     * @remarks
     * - You can import callee data by calling this operation. Alternatively, go to the **call task management** page, click **Import Callee Data**, download the template, and then upload your file.
     * - This API operation currently supports only the JSON data type for importing callee data.
     * - Ensure that you have created a call task before you call this operation.
     * - To create a call task, go to the **call task management** page and click **Create Call Task**, or call the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926796.html) operation.
     *
     * @param request - ImportTaskNumberDatasRequest
     *
     * @returns ImportTaskNumberDatasResponse
     *
     * @param ImportTaskNumberDatasRequest $request
     *
     * @return ImportTaskNumberDatasResponse
     */
    public function importTaskNumberDatas($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importTaskNumberDatasWithOptions($request, $runtime);
    }

    /**
     * Import outbound call callee numbers based on the instance ID and job ID.
     *
     * @remarks
     * - After importing outbound call callee numbers, the outbound calling job can operate normally.
     * - Before invoking this API, we recommend that you confirm the instance ID and job ID. For more information, see [Request Parameters](#api-detail-35).
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 20 times/second.
     * - API invocation frequency: 50 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param tmpReq - InsertAiOutboundPhoneNumsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertAiOutboundPhoneNumsResponse
     *
     * @param InsertAiOutboundPhoneNumsRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return InsertAiOutboundPhoneNumsResponse
     */
    public function insertAiOutboundPhoneNumsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InsertAiOutboundPhoneNumsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->details) {
            $request->detailsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->details, 'Details', 'json');
        }

        $query = [];
        if (null !== $request->batchVersion) {
            @$query['BatchVersion'] = $request->batchVersion;
        }

        if (null !== $request->detailsShrink) {
            @$query['Details'] = $request->detailsShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertAiOutboundPhoneNums',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InsertAiOutboundPhoneNumsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Import outbound call callee numbers based on the instance ID and job ID.
     *
     * @remarks
     * - After importing outbound call callee numbers, the outbound calling job can operate normally.
     * - Before invoking this API, we recommend that you confirm the instance ID and job ID. For more information, see [Request Parameters](#api-detail-35).
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 20 times/second.
     * - API invocation frequency: 50 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - InsertAiOutboundPhoneNumsRequest
     *
     * @returns InsertAiOutboundPhoneNumsResponse
     *
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
     * @param request - InsertTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertTaskDetailResponse
     *
     * @param InsertTaskDetailRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return InsertTaskDetailResponse
     */
    public function insertTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callInfos) {
            @$query['CallInfos'] = $request->callInfos;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->outboundTaskId) {
            @$query['OutboundTaskId'] = $request->outboundTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InsertTaskDetail',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InsertTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - InsertTaskDetailRequest
     *
     * @returns InsertTaskDetailResponse
     *
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
     * Add a third party to the call.
     *
     * @param request - JoinThirdCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns JoinThirdCallResponse
     *
     * @param JoinThirdCallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return JoinThirdCallResponse
     */
    public function joinThirdCallWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->callId) {
            @$body['CallId'] = $request->callId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$body['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->holdConnectionId) {
            @$body['HoldConnectionId'] = $request->holdConnectionId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'JoinThirdCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return JoinThirdCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Add a third party to the call.
     *
     * @param request - JoinThirdCallRequest
     *
     * @returns JoinThirdCallResponse
     *
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
     * Query the agent list in the Cloud Customer Service System by AICCS instance ID and skill group ID.
     *
     * @remarks
     * - Before invoking this API, confirm the AICCS instance information and skill group information. For guidance on how to obtain these details, refer to the description of [Request Parameters](#api-detail-35).
     * - If an agent is not assigned to any skill group, you can invoke [GetAgent](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-getagent) to query the agent information.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListAgentBySkillGroupIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAgentBySkillGroupIdResponse
     *
     * @param ListAgentBySkillGroupIdRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListAgentBySkillGroupIdResponse
     */
    public function listAgentBySkillGroupIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAgentBySkillGroupId',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAgentBySkillGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the agent list in the Cloud Customer Service System by AICCS instance ID and skill group ID.
     *
     * @remarks
     * - Before invoking this API, confirm the AICCS instance information and skill group information. For guidance on how to obtain these details, refer to the description of [Request Parameters](#api-detail-35).
     * - If an agent is not assigned to any skill group, you can invoke [GetAgent](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-getagent) to query the agent information.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListAgentBySkillGroupIdRequest
     *
     * @returns ListAgentBySkillGroupIdResponse
     *
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
     * Retrieve the list of robot scripts, including robot type, robot name, robot ID, associated business, and industry information.
     *
     * @remarks
     * - Before invoking this API, ensure that you already have scripts that have passed the Review.
     * - If you do not have any scripts that have passed the Review, add a script and submit it for Review in the [Script Management](https://aiccs.console.aliyun.com/patter/list) interface first.
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 500 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttle will be triggered.
     *
     * @param request - ListAiccsRobotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAiccsRobotResponse
     *
     * @param ListAiccsRobotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAiccsRobotResponse
     */
    public function listAiccsRobotWithOptions($request, $runtime)
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

        if (null !== $request->robotName) {
            @$query['RobotName'] = $request->robotName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAiccsRobot',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAiccsRobotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the list of robot scripts, including robot type, robot name, robot ID, associated business, and industry information.
     *
     * @remarks
     * - Before invoking this API, ensure that you already have scripts that have passed the Review.
     * - If you do not have any scripts that have passed the Review, add a script and submit it for Review in the [Script Management](https://aiccs.console.aliyun.com/patter/list) interface first.
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 500 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttle will be triggered.
     *
     * @param request - ListAiccsRobotRequest
     *
     * @returns ListAiccsRobotResponse
     *
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
     * Lists the system and custom TTS voices available for large model-based outbound calls.
     *
     * @remarks
     * If you have not created and published any custom voices on the [Custom Voice](https://aiccs.console.aliyun.com/engine/voiceprint) page, the operation returns only system voices.
     *
     * @param request - ListAvailableTtsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAvailableTtsResponse
     *
     * @param ListAvailableTtsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAvailableTtsResponse
     */
    public function listAvailableTtsWithOptions($request, $runtime)
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

        if (null !== $request->ttsVoiceCode) {
            @$query['TtsVoiceCode'] = $request->ttsVoiceCode;
        }

        if (null !== $request->voiceType) {
            @$query['VoiceType'] = $request->voiceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAvailableTts',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAvailableTtsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Lists the system and custom TTS voices available for large model-based outbound calls.
     *
     * @remarks
     * If you have not created and published any custom voices on the [Custom Voice](https://aiccs.console.aliyun.com/engine/voiceprint) page, the operation returns only system voices.
     *
     * @param request - ListAvailableTtsRequest
     *
     * @returns ListAvailableTtsResponse
     *
     * @param ListAvailableTtsRequest $request
     *
     * @return ListAvailableTtsResponse
     */
    public function listAvailableTts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvailableTtsWithOptions($request, $runtime);
    }

    /**
     * Invoke ListChatRecordDetail to query online session details by time period.
     *
     * @remarks
     * This API queries information about completed online sessions within a specified time range, including session content. The query rules are as follows:
     * - The maximum time span for the query is 1 Day.
     * - If only the query End Time is provided, the query Start Time is set to 1 hour before the End Time.
     * - If only the query Start Time is provided, the End Time is set to 1 hour after the Start Time.
     * - If neither time is provided, the End Time defaults to the current time, and the Start Time is set to 1 hour before the End Time.
     * - If both times are provided but the time span exceeds 1 Day, an abnormal response is returned.
     *
     * @param request - ListChatRecordDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListChatRecordDetailResponse
     *
     * @param ListChatRecordDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListChatRecordDetailResponse
     */
    public function listChatRecordDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListChatRecordDetail',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListChatRecordDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke ListChatRecordDetail to query online session details by time period.
     *
     * @remarks
     * This API queries information about completed online sessions within a specified time range, including session content. The query rules are as follows:
     * - The maximum time span for the query is 1 Day.
     * - If only the query End Time is provided, the query Start Time is set to 1 hour before the End Time.
     * - If only the query Start Time is provided, the End Time is set to 1 hour after the Start Time.
     * - If neither time is provided, the End Time defaults to the current time, and the Start Time is set to 1 hour before the End Time.
     * - If both times are provided but the time span exceeds 1 Day, an abnormal response is returned.
     *
     * @param request - ListChatRecordDetailRequest
     *
     * @returns ListChatRecordDetailResponse
     *
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
     * Query Intelligent Contact Bot conversation records.
     *
     * @remarks
     * - You can invoke this API to query Intelligent Contact Bot conversation records, or view them in the **Task Management** > **Details** > **View Conversation Records** interface.
     * - Before invoking this API, ensure that your created Intelligent Contact Bot calling job has successfully connected to at least one phone number.
     * - If you do not have an existing Intelligent Contact Bot calling job, you can create and start a job in the [Task Management](https://aiccs.console.aliyun.com/job/list) interface, or use the [CreateTask](https://help.aliyun.com/document_detail/2718003.html) and [StartTask](https://help.aliyun.com/document_detail/2718005.html) APIs to create and start a job.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListDialogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDialogResponse
     *
     * @param ListDialogRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListDialogResponse
     */
    public function listDialogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->called) {
            @$query['Called'] = $request->called;
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
            'action' => 'ListDialog',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDialogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Intelligent Contact Bot conversation records.
     *
     * @remarks
     * - You can invoke this API to query Intelligent Contact Bot conversation records, or view them in the **Task Management** > **Details** > **View Conversation Records** interface.
     * - Before invoking this API, ensure that your created Intelligent Contact Bot calling job has successfully connected to at least one phone number.
     * - If you do not have an existing Intelligent Contact Bot calling job, you can create and start a job in the [Task Management](https://aiccs.console.aliyun.com/job/list) interface, or use the [CreateTask](https://help.aliyun.com/document_detail/2718003.html) and [StartTask](https://help.aliyun.com/document_detail/2718005.html) APIs to create and start a job.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListDialogRequest
     *
     * @returns ListDialogResponse
     *
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
     * Invoke ListHotlineRecord to query the hotline recording list by hotline session ID.
     *
     * @param request - ListHotlineRecordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHotlineRecordResponse
     *
     * @param ListHotlineRecordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListHotlineRecordResponse
     */
    public function listHotlineRecordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHotlineRecord',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHotlineRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke ListHotlineRecord to query the hotline recording list by hotline session ID.
     *
     * @param request - ListHotlineRecordRequest
     *
     * @returns ListHotlineRecordResponse
     *
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
     * Query the list of hotline details by time period.
     *
     * @remarks
     * This API queries detailed hotline information within a specified time range, including hotline call information. The query rules are as follows:
     * - The maximum time span for the query is 1 Day.
     * - If only the query End Time is provided, the query Start Time is set to 1 hour before the End Time.
     * - If only the query Start Time is provided, the End Time is set to 1 hour after the Start Time.
     * - If neither time is provided, the End Time defaults to the current time, and the Start Time is set to 1 hour before the End Time.
     * - If both times are provided but the time span exceeds 1 Day, an abnormal result is returned.
     *
     * @param request - ListHotlineRecordDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListHotlineRecordDetailResponse
     *
     * @param ListHotlineRecordDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListHotlineRecordDetailResponse
     */
    public function listHotlineRecordDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListHotlineRecordDetail',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListHotlineRecordDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the list of hotline details by time period.
     *
     * @remarks
     * This API queries detailed hotline information within a specified time range, including hotline call information. The query rules are as follows:
     * - The maximum time span for the query is 1 Day.
     * - If only the query End Time is provided, the query Start Time is set to 1 hour before the End Time.
     * - If only the query Start Time is provided, the End Time is set to 1 hour after the Start Time.
     * - If neither time is provided, the End Time defaults to the current time, and the Start Time is set to 1 hour before the End Time.
     * - If both times are provided but the time span exceeds 1 Day, an abnormal result is returned.
     *
     * @param request - ListHotlineRecordDetailRequest
     *
     * @returns ListHotlineRecordDetailResponse
     *
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
     * Obtain the outbound caller phone numbers for a specified agent based on the instance ID and agent account name.
     *
     * @remarks
     * ### Queries per second (QPS) limit
     * - Per-user API call frequency: No rate limiting.
     * - API frequency: 100 calls per second.
     * > If the total calls from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListOutboundPhoneNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOutboundPhoneNumberResponse
     *
     * @param ListOutboundPhoneNumberRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListOutboundPhoneNumberResponse
     */
    public function listOutboundPhoneNumberWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOutboundPhoneNumber',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOutboundPhoneNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the outbound caller phone numbers for a specified agent based on the instance ID and agent account name.
     *
     * @remarks
     * ### Queries per second (QPS) limit
     * - Per-user API call frequency: No rate limiting.
     * - API frequency: 100 calls per second.
     * > If the total calls from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListOutboundPhoneNumberRequest
     *
     * @returns ListOutboundPhoneNumberResponse
     *
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
     * Query Intelligent Contact Robot call records.
     *
     * @remarks
     * - Before invoking this API, ensure that you have already initiated an outbound job using the Intelligent Contact Robot.
     * - If you have not yet initiated an outbound job using the Intelligent Contact Robot, you can invoke the [RobotCall](https://help.aliyun.com/document_detail/2717996.html) API to start one.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListRobotCallDialogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRobotCallDialogResponse
     *
     * @param ListRobotCallDialogRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListRobotCallDialogResponse
     */
    public function listRobotCallDialogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->createTime) {
            @$query['CreateTime'] = $request->createTime;
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
            'action' => 'ListRobotCallDialog',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRobotCallDialogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query Intelligent Contact Robot call records.
     *
     * @remarks
     * - Before invoking this API, ensure that you have already initiated an outbound job using the Intelligent Contact Robot.
     * - If you have not yet initiated an outbound job using the Intelligent Contact Robot, you can invoke the [RobotCall](https://help.aliyun.com/document_detail/2717996.html) API to start one.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListRobotCallDialogRequest
     *
     * @returns ListRobotCallDialogResponse
     *
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
     * Retrieves the list of robot node information based on the robot ID, which is the script ID.
     *
     * @remarks
     * - Robot node information includes flow name, model name, node name, whether it is an output, and output ID.
     * - Before invoking this API, you can confirm the robot ID (that is, the script ID) by following the instructions in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListRobotNodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRobotNodeResponse
     *
     * @param ListRobotNodeRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListRobotNodeResponse
     */
    public function listRobotNodeWithOptions($request, $runtime)
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

        if (null !== $request->robotId) {
            @$query['RobotId'] = $request->robotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRobotNode',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRobotNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the list of robot node information based on the robot ID, which is the script ID.
     *
     * @remarks
     * - Robot node information includes flow name, model name, node name, whether it is an output, and output ID.
     * - Before invoking this API, you can confirm the robot ID (that is, the script ID) by following the instructions in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListRobotNodeRequest
     *
     * @returns ListRobotNodeResponse
     *
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
     * Queries the list of robot parameters by robot ID, which is also the script ID.
     *
     * @remarks
     * - Before invoking this API, ensure that you have already added input parameters for the robot.
     * - If your robot does not have any input parameters, go to the [**Script Management**](https://aiccs.console.aliyun.com/patter/list) > **Configuration** > **Input and Output Parameters** interface and click to add an input parameter.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttle will be triggered.
     *
     * @param request - ListRobotParamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRobotParamsResponse
     *
     * @param ListRobotParamsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListRobotParamsResponse
     */
    public function listRobotParamsWithOptions($request, $runtime)
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

        if (null !== $request->robotId) {
            @$query['RobotId'] = $request->robotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRobotParams',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRobotParamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of robot parameters by robot ID, which is also the script ID.
     *
     * @remarks
     * - Before invoking this API, ensure that you have already added input parameters for the robot.
     * - If your robot does not have any input parameters, go to the [**Script Management**](https://aiccs.console.aliyun.com/patter/list) > **Configuration** > **Input and Output Parameters** interface and click to add an input parameter.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttle will be triggered.
     *
     * @param request - ListRobotParamsRequest
     *
     * @returns ListRobotParamsResponse
     *
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
     * Invoke ListRoles to obtain the list of all roles under a tenant.
     *
     * @param request - ListRolesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRolesResponse
     *
     * @param ListRolesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListRolesResponse
     */
    public function listRolesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRoles',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke ListRoles to obtain the list of all roles under a tenant.
     *
     * @param request - ListRolesRequest
     *
     * @returns ListRolesResponse
     *
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
     * Query skill groups in the Cloud Customer Service System by instance ID and skill group channel type.
     *
     * @remarks
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSkillGroupResponse
     *
     * @param ListSkillGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListSkillGroupResponse
     */
    public function listSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSkillGroup',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query skill groups in the Cloud Customer Service System by instance ID and skill group channel type.
     *
     * @remarks
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListSkillGroupRequest
     *
     * @returns ListSkillGroupResponse
     *
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
     * Perform a paged query to retrieve the list of Intelligent Contact Robot call jobs. The response includes the total number of jobs and job details.
     *
     * @remarks
     * - You can use this API to obtain the list of Intelligent Contact Robot call jobs, or retrieve the job list from the [Task Management](https://aiccs.console.aliyun.com/job/list) interface.
     * - If you have not created any Intelligent Contact Robot call jobs, you can click **Create Job** in the [Task Management](https://aiccs.console.aliyun.com/job/list) interface or create a job by invoking the [CreateTask](https://help.aliyun.com/document_detail/2718003.html) API.
     * - The optional parameters of this API serve as Filter Conditions for the Intelligent Contact Robot call job list. If these parameters are not specified, the API queries all jobs.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 500 calls per second.
     * > If the combined invocations from multiple users exceed the API frequency limit, throttle will be triggered.
     *
     * @param request - ListTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTaskResponse
     *
     * @param ListTaskRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListTaskResponse
     */
    public function listTaskWithOptions($request, $runtime)
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

        if (null !== $request->robotName) {
            @$query['RobotName'] = $request->robotName;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Perform a paged query to retrieve the list of Intelligent Contact Robot call jobs. The response includes the total number of jobs and job details.
     *
     * @remarks
     * - You can use this API to obtain the list of Intelligent Contact Robot call jobs, or retrieve the job list from the [Task Management](https://aiccs.console.aliyun.com/job/list) interface.
     * - If you have not created any Intelligent Contact Robot call jobs, you can click **Create Job** in the [Task Management](https://aiccs.console.aliyun.com/job/list) interface or create a job by invoking the [CreateTask](https://help.aliyun.com/document_detail/2718003.html) API.
     * - The optional parameters of this API serve as Filter Conditions for the Intelligent Contact Robot call job list. If these parameters are not specified, the API queries all jobs.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 500 calls per second.
     * > If the combined invocations from multiple users exceed the API frequency limit, throttle will be triggered.
     *
     * @param request - ListTaskRequest
     *
     * @returns ListTaskResponse
     *
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
     * Obtain the detail information of Intelligent Contact Robot call jobs.
     *
     * @remarks
     * - You can invoke this API to obtain the detail information of Intelligent Contact Robot call jobs. Alternatively, you can view this information in the **Detail** interface under [**Task Management**](https://aiccs.console.aliyun.com/job/list).
     * - Before invoking this API, ensure that you have created an Intelligent Contact Robot and successfully started a job.
     * - If you do not have any successfully created Intelligent Contact Robot call jobs, you can create and start a job in the [Task Management](https://aiccs.console.aliyun.com/job/list) interface, or use the [CreateTask](https://help.aliyun.com/document_detail/2718003.html) and [StartTask](https://help.aliyun.com/document_detail/2718005.html) APIs to create and start a job.
     * - The optional parameters in this API serve as filter conditions for the detail information of Intelligent Contact Robot call jobs. If these parameters are not specified, all job details will be queried.
     * ### queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTaskDetailResponse
     *
     * @param ListTaskDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListTaskDetailResponse
     */
    public function listTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->called) {
            @$query['Called'] = $request->called;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->statusCode) {
            @$query['StatusCode'] = $request->statusCode;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTaskDetail',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtain the detail information of Intelligent Contact Robot call jobs.
     *
     * @remarks
     * - You can invoke this API to obtain the detail information of Intelligent Contact Robot call jobs. Alternatively, you can view this information in the **Detail** interface under [**Task Management**](https://aiccs.console.aliyun.com/job/list).
     * - Before invoking this API, ensure that you have created an Intelligent Contact Robot and successfully started a job.
     * - If you do not have any successfully created Intelligent Contact Robot call jobs, you can create and start a job in the [Task Management](https://aiccs.console.aliyun.com/job/list) interface, or use the [CreateTask](https://help.aliyun.com/document_detail/2718003.html) and [StartTask](https://help.aliyun.com/document_detail/2718005.html) APIs to create and start a job.
     * - The optional parameters in this API serve as filter conditions for the detail information of Intelligent Contact Robot call jobs. If these parameters are not specified, all job details will be queried.
     * ### queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - ListTaskDetailRequest
     *
     * @returns ListTaskDetailResponse
     *
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
     * Performs full-duplex large language model operations.
     *
     * @remarks
     * - This operation can be called only during an intelligent outbound call. When you call this operation, set the **CallId** request parameter to the unique receipt ID of the ongoing call.
     * - **CallId** is the **CallId** parameter returned by the [LlmSmartCallFullDuplex](https://help.aliyun.com/document_detail/2718012.html) operation.
     *
     * @param request - LlmFullDuplexCallOperateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LlmFullDuplexCallOperateResponse
     *
     * @param LlmFullDuplexCallOperateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return LlmFullDuplexCallOperateResponse
     */
    public function llmFullDuplexCallOperateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->param) {
            @$query['Param'] = $request->param;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LlmFullDuplexCallOperate',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LlmFullDuplexCallOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs full-duplex large language model operations.
     *
     * @remarks
     * - This operation can be called only during an intelligent outbound call. When you call this operation, set the **CallId** request parameter to the unique receipt ID of the ongoing call.
     * - **CallId** is the **CallId** parameter returned by the [LlmSmartCallFullDuplex](https://help.aliyun.com/document_detail/2718012.html) operation.
     *
     * @param request - LlmFullDuplexCallOperateRequest
     *
     * @returns LlmFullDuplexCallOperateResponse
     *
     * @param LlmFullDuplexCallOperateRequest $request
     *
     * @return LlmFullDuplexCallOperateResponse
     */
    public function llmFullDuplexCallOperate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->llmFullDuplexCallOperateWithOptions($request, $runtime);
    }

    /**
     * Intelligent outbound call based on an LLM.
     *
     * @remarks
     * - Each API invocation supports adding only one called number. If you have multiple called numbers, invoke the API multiple times.
     * - Before initiating an intelligent call based on an LLM, ensure that you have created an LLM application in the [Application Management](https://aiccs.console.aliyun.com/engine/llmApp) interface and have successfully requested a real number in the Voice Service [Number Management](https://dyvmsnext.console.aliyun.com/number/list/normal) interface.
     *
     * @param tmpReq - LlmSmartCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LlmSmartCallResponse
     *
     * @param LlmSmartCallRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return LlmSmartCallResponse
     */
    public function llmSmartCallWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new LlmSmartCallShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bizParam) {
            $request->bizParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bizParam, 'BizParam', 'json');
        }

        if (null !== $tmpReq->promptParam) {
            $request->promptParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->promptParam, 'PromptParam', 'json');
        }

        if (null !== $tmpReq->startWordParam) {
            $request->startWordParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->startWordParam, 'StartWordParam', 'json');
        }

        $query = [];
        if (null !== $request->applicationCode) {
            @$query['ApplicationCode'] = $request->applicationCode;
        }

        if (null !== $request->bizParamShrink) {
            @$query['BizParam'] = $request->bizParamShrink;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callerNumber) {
            @$query['CallerNumber'] = $request->callerNumber;
        }

        if (null !== $request->customerLineCode) {
            @$query['CustomerLineCode'] = $request->customerLineCode;
        }

        if (null !== $request->extension) {
            @$query['Extension'] = $request->extension;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->promptParamShrink) {
            @$query['PromptParam'] = $request->promptParamShrink;
        }

        if (null !== $request->sessionTimeout) {
            @$query['SessionTimeout'] = $request->sessionTimeout;
        }

        if (null !== $request->startWordParamShrink) {
            @$query['StartWordParam'] = $request->startWordParamShrink;
        }

        if (null !== $request->ttsSpeed) {
            @$query['TtsSpeed'] = $request->ttsSpeed;
        }

        if (null !== $request->ttsVoiceCode) {
            @$query['TtsVoiceCode'] = $request->ttsVoiceCode;
        }

        if (null !== $request->ttsVolume) {
            @$query['TtsVolume'] = $request->ttsVolume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LlmSmartCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LlmSmartCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Intelligent outbound call based on an LLM.
     *
     * @remarks
     * - Each API invocation supports adding only one called number. If you have multiple called numbers, invoke the API multiple times.
     * - Before initiating an intelligent call based on an LLM, ensure that you have created an LLM application in the [Application Management](https://aiccs.console.aliyun.com/engine/llmApp) interface and have successfully requested a real number in the Voice Service [Number Management](https://dyvmsnext.console.aliyun.com/number/list/normal) interface.
     *
     * @param request - LlmSmartCallRequest
     *
     * @returns LlmSmartCallResponse
     *
     * @param LlmSmartCallRequest $request
     *
     * @return LlmSmartCallResponse
     */
    public function llmSmartCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->llmSmartCallWithOptions($request, $runtime);
    }

    /**
     * Initiates a smart call to an encrypted number using a large language model.
     *
     * @param tmpReq - LlmSmartCallEncryptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LlmSmartCallEncryptResponse
     *
     * @param LlmSmartCallEncryptRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return LlmSmartCallEncryptResponse
     */
    public function llmSmartCallEncryptWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new LlmSmartCallEncryptShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->promptParam) {
            $request->promptParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->promptParam, 'PromptParam', 'json');
        }

        if (null !== $tmpReq->startWordParam) {
            $request->startWordParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->startWordParam, 'StartWordParam', 'json');
        }

        $query = [];
        if (null !== $request->applicationCode) {
            @$query['ApplicationCode'] = $request->applicationCode;
        }

        if (null !== $request->callerNumber) {
            @$query['CallerNumber'] = $request->callerNumber;
        }

        if (null !== $request->encryptCalledNumber) {
            @$query['EncryptCalledNumber'] = $request->encryptCalledNumber;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->promptParamShrink) {
            @$query['PromptParam'] = $request->promptParamShrink;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startWordParamShrink) {
            @$query['StartWordParam'] = $request->startWordParamShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LlmSmartCallEncrypt',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LlmSmartCallEncryptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a smart call to an encrypted number using a large language model.
     *
     * @param request - LlmSmartCallEncryptRequest
     *
     * @returns LlmSmartCallEncryptResponse
     *
     * @param LlmSmartCallEncryptRequest $request
     *
     * @return LlmSmartCallEncryptResponse
     */
    public function llmSmartCallEncrypt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->llmSmartCallEncryptWithOptions($request, $runtime);
    }

    /**
     * Initiates a full-duplex Artificial Intelligence Cloud Call Service call with support for personalized configurations.
     *
     * @remarks
     * ## Operation description
     * - Before calling this operation, make sure that you have configured the ASR callback URL.
     * - This operation is available only to users whose UIDs are added to the whitelist.
     * - The request rate limit for a single user is 100 QPS.
     * - `CalledNumber` and `CallerNumber` are required parameters that specify the called number and the calling number, respectively.
     * - Optional parameters such as `StartWordParam`, `TtsVoiceCode`, `TtsSpeed`, and `TtsVolume` allow you to customize the call experience. If these parameters are not specified, the default settings of the application are used.
     * - The `SessionTimeout` parameter specifies the maximum call duration in seconds. The call is automatically ended when the specified duration is exceeded. For the default value and valid range, refer to the relevant documentation.
     * - The `OutId` field can be used to track a unique identifier in an external system. The value must be 1 to 32 bytes in length.
     *
     * @param tmpReq - LlmSmartCallFullDuplexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LlmSmartCallFullDuplexResponse
     *
     * @param LlmSmartCallFullDuplexRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return LlmSmartCallFullDuplexResponse
     */
    public function llmSmartCallFullDuplexWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new LlmSmartCallFullDuplexShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->startWordParam) {
            $request->startWordParamShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->startWordParam, 'StartWordParam', 'json');
        }

        $query = [];
        if (null !== $request->applicationCode) {
            @$query['ApplicationCode'] = $request->applicationCode;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callerNumber) {
            @$query['CallerNumber'] = $request->callerNumber;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->sessionTimeout) {
            @$query['SessionTimeout'] = $request->sessionTimeout;
        }

        if (null !== $request->startWordParamShrink) {
            @$query['StartWordParam'] = $request->startWordParamShrink;
        }

        if (null !== $request->ttsSpeed) {
            @$query['TtsSpeed'] = $request->ttsSpeed;
        }

        if (null !== $request->ttsVoiceCode) {
            @$query['TtsVoiceCode'] = $request->ttsVoiceCode;
        }

        if (null !== $request->ttsVolume) {
            @$query['TtsVolume'] = $request->ttsVolume;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LlmSmartCallFullDuplex',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LlmSmartCallFullDuplexResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a full-duplex Artificial Intelligence Cloud Call Service call with support for personalized configurations.
     *
     * @remarks
     * ## Operation description
     * - Before calling this operation, make sure that you have configured the ASR callback URL.
     * - This operation is available only to users whose UIDs are added to the whitelist.
     * - The request rate limit for a single user is 100 QPS.
     * - `CalledNumber` and `CallerNumber` are required parameters that specify the called number and the calling number, respectively.
     * - Optional parameters such as `StartWordParam`, `TtsVoiceCode`, `TtsSpeed`, and `TtsVolume` allow you to customize the call experience. If these parameters are not specified, the default settings of the application are used.
     * - The `SessionTimeout` parameter specifies the maximum call duration in seconds. The call is automatically ended when the specified duration is exceeded. For the default value and valid range, refer to the relevant documentation.
     * - The `OutId` field can be used to track a unique identifier in an external system. The value must be 1 to 32 bytes in length.
     *
     * @param request - LlmSmartCallFullDuplexRequest
     *
     * @returns LlmSmartCallFullDuplexResponse
     *
     * @param LlmSmartCallFullDuplexRequest $request
     *
     * @return LlmSmartCallFullDuplexResponse
     */
    public function llmSmartCallFullDuplex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->llmSmartCallFullDuplexWithOptions($request, $runtime);
    }

    /**
     * Invoke MakeCall to initiate a call.
     *
     * @param request - MakeCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MakeCallResponse
     *
     * @param MakeCallRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return MakeCallResponse
     */
    public function makeCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->commandCode) {
            @$query['CommandCode'] = $request->commandCode;
        }

        if (null !== $request->extInfo) {
            @$query['ExtInfo'] = $request->extInfo;
        }

        if (null !== $request->outerAccountId) {
            @$query['OuterAccountId'] = $request->outerAccountId;
        }

        if (null !== $request->outerAccountType) {
            @$query['OuterAccountType'] = $request->outerAccountType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MakeCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MakeCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke MakeCall to initiate a call.
     *
     * @param request - MakeCallRequest
     *
     * @returns MakeCallResponse
     *
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
     * You can invoke MakeDoubleCall to initiate a call by using the server-side software development kit (SDK).
     *
     * @param request - MakeDoubleCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MakeDoubleCallResponse
     *
     * @param MakeDoubleCallRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return MakeDoubleCallResponse
     */
    public function makeDoubleCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountName) {
            @$query['AccountName'] = $request->accountName;
        }

        if (null !== $request->bizData) {
            @$query['BizData'] = $request->bizData;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->memberPhone) {
            @$query['MemberPhone'] = $request->memberPhone;
        }

        if (null !== $request->outboundCallNumber) {
            @$query['OutboundCallNumber'] = $request->outboundCallNumber;
        }

        if (null !== $request->servicerPhone) {
            @$query['ServicerPhone'] = $request->servicerPhone;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MakeDoubleCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MakeDoubleCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can invoke MakeDoubleCall to initiate a call by using the server-side software development kit (SDK).
     *
     * @param request - MakeDoubleCallRequest
     *
     * @returns MakeDoubleCallResponse
     *
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
     * Returns a paginated list of agents.
     *
     * @param request - PageQueryAgentListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PageQueryAgentListResponse
     *
     * @param PageQueryAgentListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PageQueryAgentListResponse
     */
    public function pageQueryAgentListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentName) {
            @$query['AgentName'] = $request->agentName;
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

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PageQueryAgentList',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PageQueryAgentListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Returns a paginated list of agents.
     *
     * @param request - PageQueryAgentListRequest
     *
     * @returns PageQueryAgentListResponse
     *
     * @param PageQueryAgentListRequest $request
     *
     * @return PageQueryAgentListResponse
     */
    public function pageQueryAgentList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageQueryAgentListWithOptions($request, $runtime);
    }

    /**
     * Retrieve a paginated list of agents (agency mode V2).
     *
     * @param request - PageQueryAgentListNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PageQueryAgentListNewResponse
     *
     * @param PageQueryAgentListNewRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PageQueryAgentListNewResponse
     */
    public function pageQueryAgentListNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentName) {
            @$query['AgentName'] = $request->agentName;
        }

        if (null !== $request->isAvailable) {
            @$query['IsAvailable'] = $request->isAvailable;
        }

        if (null !== $request->pageIndex) {
            @$query['PageIndex'] = $request->pageIndex;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PageQueryAgentListNew',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PageQueryAgentListNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve a paginated list of agents (agency mode V2).
     *
     * @param request - PageQueryAgentListNewRequest
     *
     * @returns PageQueryAgentListNewResponse
     *
     * @param PageQueryAgentListNewRequest $request
     *
     * @return PageQueryAgentListNewResponse
     */
    public function pageQueryAgentListNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageQueryAgentListNewWithOptions($request, $runtime);
    }

    /**
     * Runs a paginated query for call task details.
     *
     * @remarks
     * - You must create a call task before you can query its details.
     * - You can create a call task on the **call task management** page or by calling the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926796.html) API.
     *
     * @param tmpReq - QueryAiCallDetailPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAiCallDetailPageResponse
     *
     * @param QueryAiCallDetailPageRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return QueryAiCallDetailPageResponse
     */
    public function queryAiCallDetailPageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryAiCallDetailPageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->detailIds) {
            $request->detailIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->detailIds, 'DetailIds', 'json');
        }

        $query = [];
        if (null !== $request->batchId) {
            @$query['BatchId'] = $request->batchId;
        }

        if (null !== $request->callResult) {
            @$query['CallResult'] = $request->callResult;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->detailIdsShrink) {
            @$query['DetailIds'] = $request->detailIdsShrink;
        }

        if (null !== $request->encryptionType) {
            @$query['EncryptionType'] = $request->encryptionType;
        }

        if (null !== $request->endCallingTime) {
            @$query['EndCallingTime'] = $request->endCallingTime;
        }

        if (null !== $request->endImportedTime) {
            @$query['EndImportedTime'] = $request->endImportedTime;
        }

        if (null !== $request->majorIntent) {
            @$query['MajorIntent'] = $request->majorIntent;
        }

        if (null !== $request->maxConversationDuration) {
            @$query['MaxConversationDuration'] = $request->maxConversationDuration;
        }

        if (null !== $request->minConversationDuration) {
            @$query['MinConversationDuration'] = $request->minConversationDuration;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
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

        if (null !== $request->startCallingTime) {
            @$query['StartCallingTime'] = $request->startCallingTime;
        }

        if (null !== $request->startImportedTime) {
            @$query['StartImportedTime'] = $request->startImportedTime;
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
            'action' => 'QueryAiCallDetailPage',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAiCallDetailPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs a paginated query for call task details.
     *
     * @remarks
     * - You must create a call task before you can query its details.
     * - You can create a call task on the **call task management** page or by calling the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926796.html) API.
     *
     * @param request - QueryAiCallDetailPageRequest
     *
     * @returns QueryAiCallDetailPageResponse
     *
     * @param QueryAiCallDetailPageRequest $request
     *
     * @return QueryAiCallDetailPageResponse
     */
    public function queryAiCallDetailPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAiCallDetailPageWithOptions($request, $runtime);
    }

    /**
     * Gets basic information for a call task.
     *
     * @param request - QueryAiCallTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAiCallTaskDetailResponse
     *
     * @param QueryAiCallTaskDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryAiCallTaskDetailResponse
     */
    public function queryAiCallTaskDetailWithOptions($request, $runtime)
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
            'action' => 'QueryAiCallTaskDetail',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAiCallTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets basic information for a call task.
     *
     * @param request - QueryAiCallTaskDetailRequest
     *
     * @returns QueryAiCallTaskDetailResponse
     *
     * @param QueryAiCallTaskDetailRequest $request
     *
     * @return QueryAiCallTaskDetailResponse
     */
    public function queryAiCallTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAiCallTaskDetailWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of call tasks.
     *
     * @param request - QueryAiCallTaskPageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAiCallTaskPageResponse
     *
     * @param QueryAiCallTaskPageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryAiCallTaskPageResponse
     */
    public function queryAiCallTaskPageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentName) {
            @$query['AgentName'] = $request->agentName;
        }

        if (null !== $request->applicationCode) {
            @$query['ApplicationCode'] = $request->applicationCode;
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

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAiCallTaskPage',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAiCallTaskPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of call tasks.
     *
     * @param request - QueryAiCallTaskPageRequest
     *
     * @returns QueryAiCallTaskPageResponse
     *
     * @param QueryAiCallTaskPageRequest $request
     *
     * @return QueryAiCallTaskPageResponse
     */
    public function queryAiCallTaskPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAiCallTaskPageWithOptions($request, $runtime);
    }

    /**
     * Retrieve the details of a communication agent.
     *
     * @param request - QueryAiVoiceAgentDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAiVoiceAgentDetailResponse
     *
     * @param QueryAiVoiceAgentDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryAiVoiceAgentDetailResponse
     */
    public function queryAiVoiceAgentDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
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
            'action' => 'QueryAiVoiceAgentDetail',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAiVoiceAgentDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieve the details of a communication agent.
     *
     * @param request - QueryAiVoiceAgentDetailRequest
     *
     * @returns QueryAiVoiceAgentDetailResponse
     *
     * @param QueryAiVoiceAgentDetailRequest $request
     *
     * @return QueryAiVoiceAgentDetailResponse
     */
    public function queryAiVoiceAgentDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAiVoiceAgentDetailWithOptions($request, $runtime);
    }

    /**
     * Gets details for a specified agent, including its basic, branch, and version information.
     *
     * @remarks
     * ## Usage notes
     * - This API retrieves the details of a communication agent.
     * - If you do not specify `BranchId` and `VersionId`, the API returns the configuration for the latest published version on the effective branch. If the effective branch only contains a draft version, no configuration is returned.
     * - If you specify only `BranchId`, the API returns the configuration for the latest published version on the specified branch. If the specified branch only contains a draft version, no configuration is returned.
     * - If you specify both `BranchId` and `VersionId`, the API returns the configuration for the specified version.
     * - When `BranchDeployStatus` is `1` (branch deployed) and `VersionPublishStatus` is `1` (version published), imported outbound tasks use the configuration of this branch.
     *
     * @param request - QueryAiVoiceAgentDetailNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryAiVoiceAgentDetailNewResponse
     *
     * @param QueryAiVoiceAgentDetailNewRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryAiVoiceAgentDetailNewResponse
     */
    public function queryAiVoiceAgentDetailNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->branchId) {
            @$query['BranchId'] = $request->branchId;
        }

        if (null !== $request->versionId) {
            @$query['VersionId'] = $request->versionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryAiVoiceAgentDetailNew',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryAiVoiceAgentDetailNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets details for a specified agent, including its basic, branch, and version information.
     *
     * @remarks
     * ## Usage notes
     * - This API retrieves the details of a communication agent.
     * - If you do not specify `BranchId` and `VersionId`, the API returns the configuration for the latest published version on the effective branch. If the effective branch only contains a draft version, no configuration is returned.
     * - If you specify only `BranchId`, the API returns the configuration for the latest published version on the specified branch. If the specified branch only contains a draft version, no configuration is returned.
     * - If you specify both `BranchId` and `VersionId`, the API returns the configuration for the specified version.
     * - When `BranchDeployStatus` is `1` (branch deployed) and `VersionPublishStatus` is `1` (version published), imported outbound tasks use the configuration of this branch.
     *
     * @param request - QueryAiVoiceAgentDetailNewRequest
     *
     * @returns QueryAiVoiceAgentDetailNewResponse
     *
     * @param QueryAiVoiceAgentDetailNewRequest $request
     *
     * @return QueryAiVoiceAgentDetailNewResponse
     */
    public function queryAiVoiceAgentDetailNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAiVoiceAgentDetailNewWithOptions($request, $runtime);
    }

    /**
     * Gets call details.
     *
     * @remarks
     * - This API retrieves call details. You can also view these details on the **call task management** > **details** > **execution history** > **completed** > **call details** page.
     * - Before calling this API, make sure you have created a call task and imported called number data.
     * - You can create a call task and import called number data either on the **call task management** page or by using the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926796.html) and [ImportTaskNumberDatas](https://help.aliyun.com/document_detail/2926815.html) APIs.
     *
     * @param request - QueryConversationDetailInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConversationDetailInfoResponse
     *
     * @param QueryConversationDetailInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryConversationDetailInfoResponse
     */
    public function queryConversationDetailInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->batchId) {
            @$query['BatchId'] = $request->batchId;
        }

        if (null !== $request->detailId) {
            @$query['DetailId'] = $request->detailId;
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
            'action' => 'QueryConversationDetailInfo',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryConversationDetailInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Gets call details.
     *
     * @remarks
     * - This API retrieves call details. You can also view these details on the **call task management** > **details** > **execution history** > **completed** > **call details** page.
     * - Before calling this API, make sure you have created a call task and imported called number data.
     * - You can create a call task and import called number data either on the **call task management** page or by using the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926796.html) and [ImportTaskNumberDatas](https://help.aliyun.com/document_detail/2926815.html) APIs.
     *
     * @param request - QueryConversationDetailInfoRequest
     *
     * @returns QueryConversationDetailInfoResponse
     *
     * @param QueryConversationDetailInfoRequest $request
     *
     * @return QueryConversationDetailInfoResponse
     */
    public function queryConversationDetailInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConversationDetailInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a call task and call records.
     *
     * @remarks
     * - You can call this operation to query call details. You can also view call details in the **Call Task Management** > **Details** > **Execution Records** > **Completed** > **Call Details** console.
     * - Before calling this operation, make sure that you have created a call task and imported callee data.
     * - If you do not have a created call task, create a call task and import callee data in the **Call Task Management** console, or call the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926796.html) and [ImportTaskNumberDatas](https://help.aliyun.com/document_detail/2926815.html) operations to create a call task and import callee data.
     *
     * @param request - QueryConversationDetailInfoNewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConversationDetailInfoNewResponse
     *
     * @param QueryConversationDetailInfoNewRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryConversationDetailInfoNewResponse
     */
    public function queryConversationDetailInfoNewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callId) {
            @$query['CallId'] = $request->callId;
        }

        if (null !== $request->detailId) {
            @$query['DetailId'] = $request->detailId;
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

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryConversationDetailInfoNew',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryConversationDetailInfoNewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a call task and call records.
     *
     * @remarks
     * - You can call this operation to query call details. You can also view call details in the **Call Task Management** > **Details** > **Execution Records** > **Completed** > **Call Details** console.
     * - Before calling this operation, make sure that you have created a call task and imported callee data.
     * - If you do not have a created call task, create a call task and import callee data in the **Call Task Management** console, or call the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926796.html) and [ImportTaskNumberDatas](https://help.aliyun.com/document_detail/2926815.html) operations to create a call task and import callee data.
     *
     * @param request - QueryConversationDetailInfoNewRequest
     *
     * @returns QueryConversationDetailInfoNewResponse
     *
     * @param QueryConversationDetailInfoNewRequest $request
     *
     * @return QueryConversationDetailInfoNewResponse
     */
    public function queryConversationDetailInfoNew($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConversationDetailInfoNewWithOptions($request, $runtime);
    }

    /**
     * Invoke QueryHotlineInQueue to obtain hotline agent data for a skill group by skill group ID.
     *
     * @param request - QueryHotlineInQueueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryHotlineInQueueResponse
     *
     * @param QueryHotlineInQueueRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryHotlineInQueueResponse
     */
    public function queryHotlineInQueueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryHotlineInQueue',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryHotlineInQueueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke QueryHotlineInQueue to obtain hotline agent data for a skill group by skill group ID.
     *
     * @param request - QueryHotlineInQueueRequest
     *
     * @returns QueryHotlineInQueueResponse
     *
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
     * Query the hotline number configuration list by instance ID. Fuzzy query by hotline number is supported.
     *
     * @remarks
     * The hotline number configuration includes information such as the hotline number, number location, carrier, and whether it is used for incoming calls. For details, see [Return Parameters](#api-detail-40).
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: 100 times per second.
     * - API invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param tmpReq - QueryHotlineNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryHotlineNumberResponse
     *
     * @param QueryHotlineNumberRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return QueryHotlineNumberResponse
     */
    public function queryHotlineNumberWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryHotlineNumberShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->groupIds) {
            $request->groupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->groupIds, 'GroupIds', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryHotlineNumber',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryHotlineNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the hotline number configuration list by instance ID. Fuzzy query by hotline number is supported.
     *
     * @remarks
     * The hotline number configuration includes information such as the hotline number, number location, carrier, and whether it is used for incoming calls. For details, see [Return Parameters](#api-detail-40).
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: 100 times per second.
     * - API invocation frequency: 100 times per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - QueryHotlineNumberRequest
     *
     * @returns QueryHotlineNumberResponse
     *
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
     * 查询呼入CallId.
     *
     * @param request - QueryInboundCallIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryInboundCallIdResponse
     *
     * @param QueryInboundCallIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryInboundCallIdResponse
     */
    public function queryInboundCallIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callDate) {
            @$query['CallDate'] = $request->callDate;
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
            'action' => 'QueryInboundCallId',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryInboundCallIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询呼入CallId.
     *
     * @param request - QueryInboundCallIdRequest
     *
     * @returns QueryInboundCallIdResponse
     *
     * @param QueryInboundCallIdRequest $request
     *
     * @return QueryInboundCallIdResponse
     */
    public function queryInboundCallId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInboundCallIdWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryOutboundTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOutboundTaskResponse
     *
     * @param QueryOutboundTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryOutboundTaskResponse
     */
    public function queryOutboundTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ani) {
            @$query['Ani'] = $request->ani;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->departmentId) {
            @$query['DepartmentId'] = $request->departmentId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->skillGroup) {
            @$query['SkillGroup'] = $request->skillGroup;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
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

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryOutboundTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryOutboundTaskRequest
     *
     * @returns QueryOutboundTaskResponse
     *
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
     * Queries the skill group list of the Cloud Customer Service System by instance ID.
     *
     * @remarks
     * This API allows you to query information such as the display name, description, channel type, and ID of skill groups. For details, see [Response Parameters](#api-detail-40).
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 1000 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - QuerySkillGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySkillGroupsResponse
     *
     * @param QuerySkillGroupsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySkillGroupsResponse
     */
    public function querySkillGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelType) {
            @$query['ChannelType'] = $request->channelType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->departmentId) {
            @$query['DepartmentId'] = $request->departmentId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySkillGroups',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySkillGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the skill group list of the Cloud Customer Service System by instance ID.
     *
     * @remarks
     * This API allows you to query information such as the display name, description, channel type, and ID of skill groups. For details, see [Response Parameters](#api-detail-40).
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 1000 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - QuerySkillGroupsRequest
     *
     * @returns QuerySkillGroupsResponse
     *
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
     * @param request - QueryTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTaskDetailResponse
     *
     * @param QueryTaskDetailRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTaskDetailResponse
     */
    public function queryTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ani) {
            @$query['Ani'] = $request->ani;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->departmentIdList) {
            @$query['DepartmentIdList'] = $request->departmentIdList;
        }

        if (null !== $request->dnis) {
            @$query['Dnis'] = $request->dnis;
        }

        if (null !== $request->endReasonList) {
            @$query['EndReasonList'] = $request->endReasonList;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->outboundTaskId) {
            @$query['OutboundTaskId'] = $request->outboundTaskId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->priorityList) {
            @$query['PriorityList'] = $request->priorityList;
        }

        if (null !== $request->servicerId) {
            @$query['ServicerId'] = $request->servicerId;
        }

        if (null !== $request->servicerName) {
            @$query['ServicerName'] = $request->servicerName;
        }

        if (null !== $request->sid) {
            @$query['Sid'] = $request->sid;
        }

        if (null !== $request->skillGroup) {
            @$query['SkillGroup'] = $request->skillGroup;
        }

        if (null !== $request->statusList) {
            @$query['StatusList'] = $request->statusList;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTaskDetail',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTaskDetailRequest
     *
     * @returns QueryTaskDetailResponse
     *
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
     * Invoke the QueryTickets API to query ticket information.
     *
     * @param tmpReq - QueryTicketsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTicketsResponse
     *
     * @param QueryTicketsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return QueryTicketsResponse
     */
    public function queryTicketsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryTicketsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }

        $body = [];
        if (null !== $request->caseId) {
            @$body['CaseId'] = $request->caseId;
        }

        if (null !== $request->caseStatus) {
            @$body['CaseStatus'] = $request->caseStatus;
        }

        if (null !== $request->caseType) {
            @$body['CaseType'] = $request->caseType;
        }

        if (null !== $request->channelId) {
            @$body['ChannelId'] = $request->channelId;
        }

        if (null !== $request->channelType) {
            @$body['ChannelType'] = $request->channelType;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dealId) {
            @$body['DealId'] = $request->dealId;
        }

        if (null !== $request->extraShrink) {
            @$body['Extra'] = $request->extraShrink;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->srType) {
            @$body['SrType'] = $request->srType;
        }

        if (null !== $request->taskStatus) {
            @$body['TaskStatus'] = $request->taskStatus;
        }

        if (null !== $request->touchId) {
            @$body['TouchId'] = $request->touchId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryTickets',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTicketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the QueryTickets API to query ticket information.
     *
     * @param request - QueryTicketsRequest
     *
     * @returns QueryTicketsResponse
     *
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
     * Query contact data by instance, list of contact IDs, list of session IDs, and so on.
     *
     * @remarks
     * This API allows you to query contact data such as contact status, session recipient, agent name, contact channel, satisfaction rating, and evaluation status. For details, see [Response parameters](#api-detail-40).
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 50 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - QueryTouchListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTouchListResponse
     *
     * @param QueryTouchListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryTouchListResponse
     */
    public function queryTouchListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channelId) {
            @$body['ChannelId'] = $request->channelId;
        }

        if (null !== $request->channelType) {
            @$body['ChannelType'] = $request->channelType;
        }

        if (null !== $request->closeTimeEnd) {
            @$body['CloseTimeEnd'] = $request->closeTimeEnd;
        }

        if (null !== $request->closeTimeStart) {
            @$body['CloseTimeStart'] = $request->closeTimeStart;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->evaluationLevel) {
            @$body['EvaluationLevel'] = $request->evaluationLevel;
        }

        if (null !== $request->evaluationScore) {
            @$body['EvaluationScore'] = $request->evaluationScore;
        }

        if (null !== $request->evaluationStatus) {
            @$body['EvaluationStatus'] = $request->evaluationStatus;
        }

        if (null !== $request->firstTimeEnd) {
            @$body['FirstTimeEnd'] = $request->firstTimeEnd;
        }

        if (null !== $request->firstTimeStart) {
            @$body['FirstTimeStart'] = $request->firstTimeStart;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->memberId) {
            @$body['MemberId'] = $request->memberId;
        }

        if (null !== $request->memberName) {
            @$body['MemberName'] = $request->memberName;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queueId) {
            @$body['QueueId'] = $request->queueId;
        }

        if (null !== $request->servicerId) {
            @$body['ServicerId'] = $request->servicerId;
        }

        if (null !== $request->servicerName) {
            @$body['ServicerName'] = $request->servicerName;
        }

        if (null !== $request->touchId) {
            @$body['TouchId'] = $request->touchId;
        }

        if (null !== $request->touchType) {
            @$body['TouchType'] = $request->touchType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryTouchList',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTouchListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query contact data by instance, list of contact IDs, list of session IDs, and so on.
     *
     * @remarks
     * This API allows you to query contact data such as contact status, session recipient, agent name, contact channel, satisfaction rating, and evaluation status. For details, see [Response parameters](#api-detail-40).
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No Rate Limiting.
     * - API frequency: 50 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - QueryTouchListRequest
     *
     * @returns QueryTouchListResponse
     *
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
     * Remove agent accounts from a skill group by specifying the skill group and agent IDs.
     *
     * @remarks
     * - If you need to provide agent or skill group information, refer to the instructions in the [Request Parameters](#api-detail-35) section.
     * - You can invoke [ListAgentBySkillGroupId](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-listagentbyskillgroupid) to retrieve agent information under a skill group and verify whether the removal aligns with your expectations.
     * - If you accidentally remove an agent, you can invoke [UpdateAgent](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-updateagent) to update the agent data and reassign the skill group to the agent.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 50 times/second.
     * - API-wide invocation frequency: 100 times/second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param tmpReq - RemoveAgentFromSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveAgentFromSkillGroupResponse
     *
     * @param RemoveAgentFromSkillGroupRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return RemoveAgentFromSkillGroupResponse
     */
    public function removeAgentFromSkillGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveAgentFromSkillGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->agentIds) {
            $request->agentIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->agentIds, 'AgentIds', 'json');
        }

        $query = [];
        if (null !== $request->agentIdsShrink) {
            @$query['AgentIds'] = $request->agentIdsShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveAgentFromSkillGroup',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveAgentFromSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Remove agent accounts from a skill group by specifying the skill group and agent IDs.
     *
     * @remarks
     * - If you need to provide agent or skill group information, refer to the instructions in the [Request Parameters](#api-detail-35) section.
     * - You can invoke [ListAgentBySkillGroupId](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-listagentbyskillgroupid) to retrieve agent information under a skill group and verify whether the removal aligns with your expectations.
     * - If you accidentally remove an agent, you can invoke [UpdateAgent](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-updateagent) to update the agent data and reassign the skill group to the agent.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 50 times/second.
     * - API-wide invocation frequency: 100 times/second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param request - RemoveAgentFromSkillGroupRequest
     *
     * @returns RemoveAgentFromSkillGroupResponse
     *
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
     * Deletes a skill group in the Cloud Customer Service System based on the AICCS instance ID and skill group ID.
     *
     * @remarks
     * - Deletion is a sensitive operation. Proceed with caution.
     * - Before deletion, confirm the AICCS instance ID and the skill group ID to be deleted. Refer to the guidance in [Request Parameters](#api-detail-35) for details on how to obtain them.
     * - After deletion, you can invoke the [QuerySkillGroups](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-queryskillgroups) API to verify the skill group status.
     * - If you accidentally delete a skill group, you can recreate it by invoking the [CreateSkillGroup](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-createskillgroup) API.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 1000 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - RemoveSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveSkillGroupResponse
     *
     * @param RemoveSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RemoveSkillGroupResponse
     */
    public function removeSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupId) {
            @$body['SkillGroupId'] = $request->skillGroupId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveSkillGroup',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a skill group in the Cloud Customer Service System based on the AICCS instance ID and skill group ID.
     *
     * @remarks
     * - Deletion is a sensitive operation. Proceed with caution.
     * - Before deletion, confirm the AICCS instance ID and the skill group ID to be deleted. Refer to the guidance in [Request Parameters](#api-detail-35) for details on how to obtain them.
     * - After deletion, you can invoke the [QuerySkillGroups](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-queryskillgroups) API to verify the skill group status.
     * - If you accidentally delete a skill group, you can recreate it by invoking the [CreateSkillGroup](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-createskillgroup) API.
     * ### Queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 1000 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - RemoveSkillGroupRequest
     *
     * @returns RemoveSkillGroupResponse
     *
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
     * Invoke the ResetHotlineNumber API to reset the inbound (IVR flow) and outbound (effective scope) configuration information of a hotline number.
     *
     * @param tmpReq - ResetHotlineNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetHotlineNumberResponse
     *
     * @param ResetHotlineNumberRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return ResetHotlineNumberResponse
     */
    public function resetHotlineNumberWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ResetHotlineNumberShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->outboundRangeList) {
            $request->outboundRangeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outboundRangeList, 'OutboundRangeList', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->enableInbound) {
            @$body['EnableInbound'] = $request->enableInbound;
        }

        if (null !== $request->enableInboundEvaluation) {
            @$body['EnableInboundEvaluation'] = $request->enableInboundEvaluation;
        }

        if (null !== $request->enableOutbound) {
            @$body['EnableOutbound'] = $request->enableOutbound;
        }

        if (null !== $request->enableOutboundEvaluation) {
            @$body['EnableOutboundEvaluation'] = $request->enableOutboundEvaluation;
        }

        if (null !== $request->evaluationLevel) {
            @$body['EvaluationLevel'] = $request->evaluationLevel;
        }

        if (null !== $request->hotlineNumber) {
            @$body['HotlineNumber'] = $request->hotlineNumber;
        }

        if (null !== $request->inboundFlowId) {
            @$body['InboundFlowId'] = $request->inboundFlowId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->outboundAllDepart) {
            @$body['OutboundAllDepart'] = $request->outboundAllDepart;
        }

        if (null !== $request->outboundRangeListShrink) {
            @$body['OutboundRangeList'] = $request->outboundRangeListShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ResetHotlineNumber',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetHotlineNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the ResetHotlineNumber API to reset the inbound (IVR flow) and outbound (effective scope) configuration information of a hotline number.
     *
     * @param request - ResetHotlineNumberRequest
     *
     * @returns ResetHotlineNumberResponse
     *
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
     * @param request - RestartOutboundTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestartOutboundTaskResponse
     *
     * @param RestartOutboundTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RestartOutboundTaskResponse
     */
    public function restartOutboundTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->outboundTaskId) {
            @$query['OutboundTaskId'] = $request->outboundTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RestartOutboundTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestartOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - RestartOutboundTaskRequest
     *
     * @returns RestartOutboundTaskResponse
     *
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
     * Initiate an outbound call using the Intelligent Contact Robot.
     *
     * @remarks
     * - Before initiating an outbound call using the Intelligent Contact Robot, ensure that you already have a reviewed and approved script in the [Script Management](https://aiccs.console.aliyun.com/patter/list) interface and an approved real number in the Voice Service [Real Number Management](https://dyvmsnext.console.aliyun.com/number/list/normal) interface.
     * - You can obtain the creation time of the call from the **date** parameter in the **Response Header** after invoking this API.
     * > For example, if the **date** parameter is: `"date": "Mon, 24 Jun 2024 03:40:31 GMT"`, then the call creation time is: `"2024-06-24 03:40:31"`.
     * ### queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 1000 calls per second.
     * > If the total calls from multiple users exceed the API frequency limit, throttle will be triggered.
     *
     * @param request - RobotCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RobotCallResponse
     *
     * @param RobotCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return RobotCallResponse
     */
    public function robotCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->calledShowNumber) {
            @$query['CalledShowNumber'] = $request->calledShowNumber;
        }

        if (null !== $request->earlyMediaAsr) {
            @$query['EarlyMediaAsr'] = $request->earlyMediaAsr;
        }

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
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

        if (null !== $request->robotId) {
            @$query['RobotId'] = $request->robotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RobotCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RobotCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiate an outbound call using the Intelligent Contact Robot.
     *
     * @remarks
     * - Before initiating an outbound call using the Intelligent Contact Robot, ensure that you already have a reviewed and approved script in the [Script Management](https://aiccs.console.aliyun.com/patter/list) interface and an approved real number in the Voice Service [Real Number Management](https://dyvmsnext.console.aliyun.com/number/list/normal) interface.
     * - You can obtain the creation time of the call from the **date** parameter in the **Response Header** after invoking this API.
     * > For example, if the **date** parameter is: `"date": "Mon, 24 Jun 2024 03:40:31 GMT"`, then the call creation time is: `"2024-06-24 03:40:31"`.
     * ### queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 1000 calls per second.
     * > If the total calls from multiple users exceed the API frequency limit, throttle will be triggered.
     *
     * @param request - RobotCallRequest
     *
     * @returns RobotCallResponse
     *
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
     * Initiate an Intelligent Speech Interaction call based on the callee\\"s caller ID, callee number, and intelligent outbound call audio file.
     *
     * @remarks
     * - The following characters cannot appear in the Intelligent Speech Interaction SendCcoSmartCall callback: `@ = : "" $ { } ^ * ￥`.
     * - After invoking this API, the **Data** field in the response contains the unique receipt ID for this call, which can be used when invoking the [SendCcoSmartCallOperate](https://help.aliyun.com/document_detail/2718013.html) API.
     * ### Queries Per Second (QPS) Limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - SendCcoSmartCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendCcoSmartCallResponse
     *
     * @param SendCcoSmartCallRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SendCcoSmartCallResponse
     */
    public function sendCcoSmartCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionCodeBreak) {
            @$query['ActionCodeBreak'] = $request->actionCodeBreak;
        }

        if (null !== $request->actionCodeTimeBreak) {
            @$query['ActionCodeTimeBreak'] = $request->actionCodeTimeBreak;
        }

        if (null !== $request->asrAlsAmId) {
            @$query['AsrAlsAmId'] = $request->asrAlsAmId;
        }

        if (null !== $request->asrBaseId) {
            @$query['AsrBaseId'] = $request->asrBaseId;
        }

        if (null !== $request->asrModelId) {
            @$query['AsrModelId'] = $request->asrModelId;
        }

        if (null !== $request->asrVocabularyId) {
            @$query['AsrVocabularyId'] = $request->asrVocabularyId;
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

        if (null !== $request->outId) {
            @$query['OutId'] = $request->outId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pauseTime) {
            @$query['PauseTime'] = $request->pauseTime;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
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
            'action' => 'SendCcoSmartCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendCcoSmartCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiate an Intelligent Speech Interaction call based on the callee\\"s caller ID, callee number, and intelligent outbound call audio file.
     *
     * @remarks
     * - The following characters cannot appear in the Intelligent Speech Interaction SendCcoSmartCall callback: `@ = : "" $ { } ^ * ￥`.
     * - After invoking this API, the **Data** field in the response contains the unique receipt ID for this call, which can be used when invoking the [SendCcoSmartCallOperate](https://help.aliyun.com/document_detail/2718013.html) API.
     * ### Queries Per Second (QPS) Limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - SendCcoSmartCallRequest
     *
     * @returns SendCcoSmartCallResponse
     *
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
     * Initiates a specified action during an Intelligent Outbound Call, applicable only to scenarios such as parallel transfer to a human agent or allowing a human agent to listen in on the man-machine dialogue.
     *
     * @remarks
     * - This API can be successfully invoked only during an ongoing Intelligent Outbound Call. When invoking it, note that the **CallId** in the request parameters must be set to the unique receipt ID of the active call.
     * - The **CallId** is the **Data** parameter returned when you invoke the [SendCcoSmartCall](https://help.aliyun.com/document_detail/2718012.html) API.
     *
     * @param request - SendCcoSmartCallOperateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendCcoSmartCallOperateResponse
     *
     * @param SendCcoSmartCallOperateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SendCcoSmartCallOperateResponse
     */
    public function sendCcoSmartCallOperateWithOptions($request, $runtime)
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

        if (null !== $request->prodCode) {
            @$query['ProdCode'] = $request->prodCode;
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
            'action' => 'SendCcoSmartCallOperate',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendCcoSmartCallOperateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a specified action during an Intelligent Outbound Call, applicable only to scenarios such as parallel transfer to a human agent or allowing a human agent to listen in on the man-machine dialogue.
     *
     * @remarks
     * - This API can be successfully invoked only during an ongoing Intelligent Outbound Call. When invoking it, note that the **CallId** in the request parameters must be set to the unique receipt ID of the active call.
     * - The **CallId** is the **Data** parameter returned when you invoke the [SendCcoSmartCall](https://help.aliyun.com/document_detail/2718012.html) API.
     *
     * @param request - SendCcoSmartCallOperateRequest
     *
     * @returns SendCcoSmartCallOperateResponse
     *
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
     * Send a hotline heartbeat request based on the instance ID, agent account name, and heartbeat signature.
     *
     * @remarks
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - SendHotlineHeartBeatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendHotlineHeartBeatResponse
     *
     * @param SendHotlineHeartBeatRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SendHotlineHeartBeatResponse
     */
    public function sendHotlineHeartBeatWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendHotlineHeartBeat',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendHotlineHeartBeatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Send a hotline heartbeat request based on the instance ID, agent account name, and heartbeat signature.
     *
     * @remarks
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - SendHotlineHeartBeatRequest
     *
     * @returns SendHotlineHeartBeatResponse
     *
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
     * Starts a call task.
     *
     * @remarks
     * - Before you start a call task, ensure its status is Stopped.
     * - If you do not have a call task, create one on the **Call Task Management** page or by calling the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926796.html) operation.
     *
     * @param request - StartAiCallTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartAiCallTaskResponse
     *
     * @param StartAiCallTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartAiCallTaskResponse
     */
    public function startAiCallTaskWithOptions($request, $runtime)
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
            'action' => 'StartAiCallTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartAiCallTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a call task.
     *
     * @remarks
     * - Before you start a call task, ensure its status is Stopped.
     * - If you do not have a call task, create one on the **Call Task Management** page or by calling the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926796.html) operation.
     *
     * @param request - StartAiCallTaskRequest
     *
     * @returns StartAiCallTaskResponse
     *
     * @param StartAiCallTaskRequest $request
     *
     * @return StartAiCallTaskResponse
     */
    public function startAiCallTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAiCallTaskWithOptions($request, $runtime);
    }

    /**
     * Start an outbound calling job by instance ID and job ID.
     *
     * @remarks
     * - You can invoke this API to start an outbound calling job that is in the paused state.
     * - An outbound calling job in the stopped state cannot be started again.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 20 times per second.
     * - API invocation frequency: 20 times per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - StartAiOutboundTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartAiOutboundTaskResponse
     *
     * @param StartAiOutboundTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartAiOutboundTaskResponse
     */
    public function startAiOutboundTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartAiOutboundTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartAiOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Start an outbound calling job by instance ID and job ID.
     *
     * @remarks
     * - You can invoke this API to start an outbound calling job that is in the paused state.
     * - An outbound calling job in the stopped state cannot be started again.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 20 times per second.
     * - API invocation frequency: 20 times per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - StartAiOutboundTaskRequest
     *
     * @returns StartAiOutboundTaskResponse
     *
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
     * Initiate an outbound call based on the instance ID, agent account name, hotline outbound caller number, and callee number.
     *
     * @remarks
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - StartCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartCallResponse
     *
     * @param StartCallRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StartCallResponse
     */
    public function startCallWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->callee) {
            @$body['Callee'] = $request->callee;
        }

        if (null !== $request->caller) {
            @$body['Caller'] = $request->caller;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartCall',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiate an outbound call based on the instance ID, agent account name, hotline outbound caller number, and callee number.
     *
     * @remarks
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - StartCallRequest
     *
     * @returns StartCallResponse
     *
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
     * Invoke StartCallV2 to initiate an outbound call V2.
     *
     * @param request - StartCallV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartCallV2Response
     *
     * @param StartCallV2Request $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartCallV2Response
     */
    public function startCallV2WithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->callee) {
            @$body['Callee'] = $request->callee;
        }

        if (null !== $request->caller) {
            @$body['Caller'] = $request->caller;
        }

        if (null !== $request->callerType) {
            @$body['CallerType'] = $request->callerType;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartCallV2',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartCallV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke StartCallV2 to initiate an outbound call V2.
     *
     * @param request - StartCallV2Request
     *
     * @returns StartCallV2Response
     *
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
     * Invoke StartChatWork to switch an online agent to the working status.
     *
     * @param request - StartChatWorkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartChatWorkResponse
     *
     * @param StartChatWorkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartChatWorkResponse
     */
    public function startChatWorkWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartChatWork',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartChatWorkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke StartChatWork to switch an online agent to the working status.
     *
     * @param request - StartChatWorkRequest
     *
     * @returns StartChatWorkResponse
     *
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
     * Sign in a hotline agent by instance ID and agent account name to start the hotline service.
     *
     * @remarks
     * - The **Data** parameter returned by this API is the token required to initiate a heartbeat.
     * - If the agent takes a break, you can pause the hotline service by invoking the [SuspendHotlineService](https://help.aliyun.com/document_detail/2718046.html) API.
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - StartHotlineServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartHotlineServiceResponse
     *
     * @param StartHotlineServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartHotlineServiceResponse
     */
    public function startHotlineServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartHotlineService',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartHotlineServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sign in a hotline agent by instance ID and agent account name to start the hotline service.
     *
     * @remarks
     * - The **Data** parameter returned by this API is the token required to initiate a heartbeat.
     * - If the agent takes a break, you can pause the hotline service by invoking the [SuspendHotlineService](https://help.aliyun.com/document_detail/2718046.html) API.
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - StartHotlineServiceRequest
     *
     * @returns StartHotlineServiceResponse
     *
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
     * Invoke the StartMicroOutbound API to initiate an outbound call request.
     *
     * @param request - StartMicroOutboundRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartMicroOutboundResponse
     *
     * @param StartMicroOutboundRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartMicroOutboundResponse
     */
    public function startMicroOutboundWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->accountType) {
            @$query['AccountType'] = $request->accountType;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->calledNumber) {
            @$query['CalledNumber'] = $request->calledNumber;
        }

        if (null !== $request->callingNumber) {
            @$query['CallingNumber'] = $request->callingNumber;
        }

        if (null !== $request->commandCode) {
            @$query['CommandCode'] = $request->commandCode;
        }

        if (null !== $request->extInfo) {
            @$query['ExtInfo'] = $request->extInfo;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartMicroOutbound',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartMicroOutboundResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the StartMicroOutbound API to initiate an outbound call request.
     *
     * @param request - StartMicroOutboundRequest
     *
     * @returns StartMicroOutboundResponse
     *
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
     * Start a successfully created Intelligent Contact Robot calling job.
     *
     * @remarks
     * - You can invoke this API to start a successfully created Intelligent Contact Robot calling job, or manually start the job on the [Task Management](https://aiccs.console.aliyun.com/job/list) page.
     * - Before invoking this API, ensure that you already have a successfully created Intelligent Contact Robot calling job.
     * - If you do not have a successfully created Intelligent Contact Robot outbound calling job, you can click to create a job on the [Task Management](https://aiccs.console.aliyun.com/job/list) page or create one by using the [CreateTask](https://help.aliyun.com/document_detail/2718003.html) API.
     * ### queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - StartTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartTaskResponse
     *
     * @param StartTaskRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return StartTaskResponse
     */
    public function startTaskWithOptions($request, $runtime)
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

        if (null !== $request->startNow) {
            @$query['StartNow'] = $request->startNow;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Start a successfully created Intelligent Contact Robot calling job.
     *
     * @remarks
     * - You can invoke this API to start a successfully created Intelligent Contact Robot calling job, or manually start the job on the [Task Management](https://aiccs.console.aliyun.com/job/list) page.
     * - Before invoking this API, ensure that you already have a successfully created Intelligent Contact Robot calling job.
     * - If you do not have a successfully created Intelligent Contact Robot outbound calling job, you can click to create a job on the [Task Management](https://aiccs.console.aliyun.com/job/list) page or create one by using the [CreateTask](https://help.aliyun.com/document_detail/2718003.html) API.
     * ### queries per second (QPS) Limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - StartTaskRequest
     *
     * @returns StartTaskResponse
     *
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
     * Stops an outbound call task.
     *
     * @remarks
     * - Before you stop an outbound call task, ensure that the task has been created and its status is `running`.
     * - If you have not created an outbound call task, create one on the Outbound Task Management page or call the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926796.html) operation.
     *
     * @param request - StopAiCallTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopAiCallTaskResponse
     *
     * @param StopAiCallTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopAiCallTaskResponse
     */
    public function stopAiCallTaskWithOptions($request, $runtime)
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
            'action' => 'StopAiCallTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopAiCallTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops an outbound call task.
     *
     * @remarks
     * - Before you stop an outbound call task, ensure that the task has been created and its status is `running`.
     * - If you have not created an outbound call task, create one on the Outbound Task Management page or call the [CreateAiCallTask](https://help.aliyun.com/document_detail/2926796.html) operation.
     *
     * @param request - StopAiCallTaskRequest
     *
     * @returns StopAiCallTaskResponse
     *
     * @param StopAiCallTaskRequest $request
     *
     * @return StopAiCallTaskResponse
     */
    public function stopAiCallTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAiCallTaskWithOptions($request, $runtime);
    }

    /**
     * Pause an outbound calling job by instance ID and job ID.
     *
     * @remarks
     * After pausing an outbound calling job, you can invoke the [StartAiOutboundTask](https://help.aliyun.com/document_detail/2718027.html) API to restart it.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 20 times/second.
     * - API invocation frequency: 20 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - StopAiOutboundTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopAiOutboundTaskResponse
     *
     * @param StopAiOutboundTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopAiOutboundTaskResponse
     */
    public function stopAiOutboundTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopAiOutboundTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopAiOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pause an outbound calling job by instance ID and job ID.
     *
     * @remarks
     * After pausing an outbound calling job, you can invoke the [StartAiOutboundTask](https://help.aliyun.com/document_detail/2718027.html) API to restart it.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 20 times/second.
     * - API invocation frequency: 20 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - StopAiOutboundTaskRequest
     *
     * @returns StopAiOutboundTaskResponse
     *
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
     * Pause an Intelligent Contact Robot calling job that has been successfully started.
     *
     * @remarks
     * - You can use this API to pause an Intelligent Contact Robot calling job that has been successfully started, or manually pause the job on the [Task Management](https://aiccs.console.aliyun.com/job/list) interface.
     * - Before invoking this API, ensure that you already have a successfully started Intelligent Contact Robot calling job.
     * - If you do not have a successfully started Intelligent Contact Robot calling job, click **Start** on the [Task Management](https://aiccs.console.aliyun.com/job/list) interface or start a job by using the [StartTask](https://help.aliyun.com/document_detail/2718005.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - StopTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTaskResponse
     *
     * @param StopTaskRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopTaskResponse
     */
    public function stopTaskWithOptions($request, $runtime)
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
            'action' => 'StopTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pause an Intelligent Contact Robot calling job that has been successfully started.
     *
     * @remarks
     * - You can use this API to pause an Intelligent Contact Robot calling job that has been successfully started, or manually pause the job on the [Task Management](https://aiccs.console.aliyun.com/job/list) interface.
     * - Before invoking this API, ensure that you already have a successfully started Intelligent Contact Robot calling job.
     * - If you do not have a successfully started Intelligent Contact Robot calling job, click **Start** on the [Task Management](https://aiccs.console.aliyun.com/job/list) interface or start a job by using the [StartTask](https://help.aliyun.com/document_detail/2718005.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 500 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - StopTaskRequest
     *
     * @returns StopTaskResponse
     *
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
     * Submits a recording notes task.
     *
     * @param request - SubmitAudioNoteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitAudioNoteResponse
     *
     * @param SubmitAudioNoteRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SubmitAudioNoteResponse
     */
    public function submitAudioNoteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->bizId) {
            @$query['BizId'] = $request->bizId;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->llmModelId) {
            @$query['LlmModelId'] = $request->llmModelId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SubmitAudioNote',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitAudioNoteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a recording notes task.
     *
     * @param request - SubmitAudioNoteRequest
     *
     * @returns SubmitAudioNoteResponse
     *
     * @param SubmitAudioNoteRequest $request
     *
     * @return SubmitAudioNoteResponse
     */
    public function submitAudioNote($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAudioNoteWithOptions($request, $runtime);
    }

    /**
     * Pause hotline service when an agent takes a short break.
     *
     * @remarks
     * If the break ends and you need to resume hotline service, you can invoke the [StartHotlineService](https://help.aliyun.com/document_detail/2718045.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - SuspendHotlineServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendHotlineServiceResponse
     *
     * @param SuspendHotlineServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SuspendHotlineServiceResponse
     */
    public function suspendHotlineServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SuspendHotlineService',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendHotlineServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pause hotline service when an agent takes a short break.
     *
     * @remarks
     * If the break ends and you need to resume hotline service, you can invoke the [StartHotlineService](https://help.aliyun.com/document_detail/2718045.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 100 queries per second (QPS).
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - SuspendHotlineServiceRequest
     *
     * @returns SuspendHotlineServiceResponse
     *
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
     * @param request - SuspendOutboundTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SuspendOutboundTaskResponse
     *
     * @param SuspendOutboundTaskRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SuspendOutboundTaskResponse
     */
    public function suspendOutboundTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->outboundTaskId) {
            @$query['OutboundTaskId'] = $request->outboundTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SuspendOutboundTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SuspendOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SuspendOutboundTaskRequest
     *
     * @returns SuspendOutboundTaskResponse
     *
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
     * Terminate an outbound call job by instance ID and job ID.
     *
     * @remarks
     * - This API supports terminating an outbound call job. Once terminated, the job cannot be restarted.
     * - To temporarily stop an outbound call job, you can invoke the [StopAiOutboundTask](https://help.aliyun.com/document_detail/2718024.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 20 times/second.
     * - API-wide invocation frequency: 20 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - TerminateAiOutboundTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TerminateAiOutboundTaskResponse
     *
     * @param TerminateAiOutboundTaskRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return TerminateAiOutboundTaskResponse
     */
    public function terminateAiOutboundTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TerminateAiOutboundTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TerminateAiOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminate an outbound call job by instance ID and job ID.
     *
     * @remarks
     * - This API supports terminating an outbound call job. Once terminated, the job cannot be restarted.
     * - To temporarily stop an outbound call job, you can invoke the [StopAiOutboundTask](https://help.aliyun.com/document_detail/2718024.html) API.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 20 times/second.
     * - API-wide invocation frequency: 20 times/second.
     * > If the total invocations from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - TerminateAiOutboundTaskRequest
     *
     * @returns TerminateAiOutboundTaskResponse
     *
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
     * TestLargeModel.
     *
     * @param tmpReq - TestLargeModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TestLargeModelResponse
     *
     * @param TestLargeModelRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return TestLargeModelResponse
     */
    public function testLargeModelWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new TestLargeModelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->baseModel) {
            $request->baseModelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->baseModel, 'BaseModel', 'json');
        }

        $query = [];
        if (null !== $request->baseModelShrink) {
            @$query['BaseModel'] = $request->baseModelShrink;
        }

        if (null !== $request->modelCode) {
            @$query['ModelCode'] = $request->modelCode;
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

        if (null !== $request->userDialogContent) {
            @$query['UserDialogContent'] = $request->userDialogContent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TestLargeModel',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TestLargeModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * TestLargeModel.
     *
     * @param request - TestLargeModelRequest
     *
     * @returns TestLargeModelResponse
     *
     * @param TestLargeModelRequest $request
     *
     * @return TestLargeModelResponse
     */
    public function testLargeModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testLargeModelWithOptions($request, $runtime);
    }

    /**
     * Invoke the TransferCallToSkillGroup API to execute a single-step or two-step transfer to a skill group.
     *
     * @param request - TransferCallToSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferCallToSkillGroupResponse
     *
     * @param TransferCallToSkillGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return TransferCallToSkillGroupResponse
     */
    public function transferCallToSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->callId) {
            @$body['CallId'] = $request->callId;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->connectionId) {
            @$body['ConnectionId'] = $request->connectionId;
        }

        if (null !== $request->holdConnectionId) {
            @$body['HoldConnectionId'] = $request->holdConnectionId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isSingleTransfer) {
            @$body['IsSingleTransfer'] = $request->isSingleTransfer;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->skillGroupId) {
            @$body['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TransferCallToSkillGroup',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TransferCallToSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke the TransferCallToSkillGroup API to execute a single-step or two-step transfer to a skill group.
     *
     * @param request - TransferCallToSkillGroupRequest
     *
     * @returns TransferCallToSkillGroupResponse
     *
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
     * Modify agent information in the Cloud Customer Service System based on the instance ID and agent account name. You can modify the agent\\"s display name and the skill groups to which the agent belongs.
     *
     * @remarks
     * - Before invoking this API, we recommend that you confirm your Artificial Intelligence Cloud Call Service (AICCS) instance ID. For guidance on how to obtain it, see the description of [Request Parameters](#api-detail-35).
     * - After the update, you can invoke the [GetAgent](https://help.aliyun.com/document_detail/2717961.html) API to confirm whether the update meets your expectations.
     * > Currently, only the display name and assigned skill groups can be modified.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API-wide invocation frequency: 100 queries per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param request - UpdateAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentResponse
     *
     * @param UpdateAgentRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAgentResponse
     */
    public function updateAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->displayName) {
            @$body['DisplayName'] = $request->displayName;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupId) {
            @$body['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->skillGroupIdList) {
            @$body['SkillGroupIdList'] = $request->skillGroupIdList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAgent',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify agent information in the Cloud Customer Service System based on the instance ID and agent account name. You can modify the agent\\"s display name and the skill groups to which the agent belongs.
     *
     * @remarks
     * - Before invoking this API, we recommend that you confirm your Artificial Intelligence Cloud Call Service (AICCS) instance ID. For guidance on how to obtain it, see the description of [Request Parameters](#api-detail-35).
     * - After the update, you can invoke the [GetAgent](https://help.aliyun.com/document_detail/2717961.html) API to confirm whether the update meets your expectations.
     * > Currently, only the display name and assigned skill groups can be modified.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: No rate limiting.
     * - API-wide invocation frequency: 100 queries per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API-wide frequency limit.
     *
     * @param request - UpdateAgentRequest
     *
     * @returns UpdateAgentResponse
     *
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
     * Updates a call task configuration.
     *
     * @remarks
     * Ensure the call task is stopped before you update its configuration.
     *
     * @param tmpReq - UpdateAiCallTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAiCallTaskResponse
     *
     * @param UpdateAiCallTaskRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAiCallTaskResponse
     */
    public function updateAiCallTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAiCallTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->callDay) {
            $request->callDayShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->callDay, 'CallDay', 'json');
        }

        if (null !== $tmpReq->callRetryReason) {
            $request->callRetryReasonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->callRetryReason, 'CallRetryReason', 'json');
        }

        if (null !== $tmpReq->callTime) {
            $request->callTimeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->callTime, 'CallTime', 'json');
        }

        $query = [];
        if (null !== $request->callDayShrink) {
            @$query['CallDay'] = $request->callDayShrink;
        }

        if (null !== $request->callRetryInterval) {
            @$query['CallRetryInterval'] = $request->callRetryInterval;
        }

        if (null !== $request->callRetryReasonShrink) {
            @$query['CallRetryReason'] = $request->callRetryReasonShrink;
        }

        if (null !== $request->callRetryTimes) {
            @$query['CallRetryTimes'] = $request->callRetryTimes;
        }

        if (null !== $request->callTimeShrink) {
            @$query['CallTime'] = $request->callTimeShrink;
        }

        if (null !== $request->lineEncoding) {
            @$query['LineEncoding'] = $request->lineEncoding;
        }

        if (null !== $request->linePhoneNum) {
            @$query['LinePhoneNum'] = $request->linePhoneNum;
        }

        if (null !== $request->missCallRetry) {
            @$query['MissCallRetry'] = $request->missCallRetry;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->phoneType) {
            @$query['PhoneType'] = $request->phoneType;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->startType) {
            @$query['StartType'] = $request->startType;
        }

        if (null !== $request->taskCps) {
            @$query['TaskCps'] = $request->taskCps;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskStartTime) {
            @$query['TaskStartTime'] = $request->taskStartTime;
        }

        if (null !== $request->virtualNumber) {
            @$query['VirtualNumber'] = $request->virtualNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAiCallTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAiCallTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a call task configuration.
     *
     * @remarks
     * Ensure the call task is stopped before you update its configuration.
     *
     * @param request - UpdateAiCallTaskRequest
     *
     * @returns UpdateAiCallTaskResponse
     *
     * @param UpdateAiCallTaskRequest $request
     *
     * @return UpdateAiCallTaskResponse
     */
    public function updateAiCallTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAiCallTaskWithOptions($request, $runtime);
    }

    /**
     * Update an outbound call job by instance ID and job ID.
     *
     * @remarks
     * This API supports updating information such as the task name, task description, outbound caller number, and skill group ID. For details, see [Request Parameters](#api-detail-35).
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 20 times per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param tmpReq - UpdateAiOutboundTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAiOutboundTaskResponse
     *
     * @param UpdateAiOutboundTaskRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateAiOutboundTaskResponse
     */
    public function updateAiOutboundTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAiOutboundTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->outboundNums) {
            $request->outboundNumsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outboundNums, 'OutboundNums', 'json');
        }

        if (null !== $tmpReq->recallRule) {
            $request->recallRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recallRule, 'RecallRule', 'json');
        }

        $query = [];
        if (null !== $request->concurrentRate) {
            @$query['ConcurrentRate'] = $request->concurrentRate;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->executionTime) {
            @$query['ExecutionTime'] = $request->executionTime;
        }

        if (null !== $request->forecastCallRate) {
            @$query['ForecastCallRate'] = $request->forecastCallRate;
        }

        if (null !== $request->handlerId) {
            @$query['HandlerId'] = $request->handlerId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->numRepeated) {
            @$query['NumRepeated'] = $request->numRepeated;
        }

        if (null !== $request->outboundNumsShrink) {
            @$query['OutboundNums'] = $request->outboundNumsShrink;
        }

        if (null !== $request->recallRuleShrink) {
            @$query['RecallRule'] = $request->recallRuleShrink;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAiOutboundTask',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAiOutboundTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update an outbound call job by instance ID and job ID.
     *
     * @remarks
     * This API supports updating information such as the task name, task description, outbound caller number, and skill group ID. For details, see [Request Parameters](#api-detail-35).
     * ### Queries per second (QPS) limit
     * - Per-user invocation frequency: No rate limiting.
     * - API frequency: 20 times per second.
     * > Throttling is triggered if the total invocations from multiple users exceed the API frequency limit.
     *
     * @param request - UpdateAiOutboundTaskRequest
     *
     * @returns UpdateAiOutboundTaskResponse
     *
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
     * Update the department name based on the Artificial Intelligence Cloud Call Service (AICCS) instance ID and department ID.
     *
     * @remarks
     * - This API supports updating only the department name and does not support updating the department ID.
     * - Before invoking this API, we recommend that you confirm the AICCS instance ID and department ID. For guidance on how to obtain them, see the instructions in [Request Parameters](#api-detail-35).
     * - After the update is complete, you can invoke the [GetAllDepartment](https://help.aliyun.com/document_detail/2717975.html) API to confirm whether the department information matches your expectations.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API-wide invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - UpdateDepartmentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateDepartmentResponse
     *
     * @param UpdateDepartmentRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDepartmentResponse
     */
    public function updateDepartmentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->departmentId) {
            @$query['DepartmentId'] = $request->departmentId;
        }

        if (null !== $request->departmentName) {
            @$query['DepartmentName'] = $request->departmentName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateDepartment',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateDepartmentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the department name based on the Artificial Intelligence Cloud Call Service (AICCS) instance ID and department ID.
     *
     * @remarks
     * - This API supports updating only the department name and does not support updating the department ID.
     * - Before invoking this API, we recommend that you confirm the AICCS instance ID and department ID. For guidance on how to obtain them, see the instructions in [Request Parameters](#api-detail-35).
     * - After the update is complete, you can invoke the [GetAllDepartment](https://help.aliyun.com/document_detail/2717975.html) API to confirm whether the department information matches your expectations.
     * ### Queries per second (QPS) limits
     * - Per-user invocation frequency: 100 times/second.
     * - API-wide invocation frequency: 100 times/second.
     * > If the total invocations from multiple users exceed the API-wide frequency limit, throttling will be triggered.
     *
     * @param request - UpdateDepartmentRequest
     *
     * @returns UpdateDepartmentResponse
     *
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
     * Updates a large language model.
     *
     * @param tmpReq - UpdateLargeModelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLargeModelResponse
     *
     * @param UpdateLargeModelRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateLargeModelResponse
     */
    public function updateLargeModelWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateLargeModelShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->baseModel) {
            $request->baseModelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->baseModel, 'BaseModel', 'json');
        }

        $query = [];
        if (null !== $request->authCode) {
            @$query['AuthCode'] = $request->authCode;
        }

        if (null !== $request->baseModelShrink) {
            @$query['BaseModel'] = $request->baseModelShrink;
        }

        if (null !== $request->modelCode) {
            @$query['ModelCode'] = $request->modelCode;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->modelUrl) {
            @$query['ModelUrl'] = $request->modelUrl;
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

        if (null !== $request->temperature) {
            @$query['Temperature'] = $request->temperature;
        }

        if (null !== $request->topK) {
            @$query['TopK'] = $request->topK;
        }

        if (null !== $request->topP) {
            @$query['TopP'] = $request->topP;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateLargeModel',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateLargeModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a large language model.
     *
     * @param request - UpdateLargeModelRequest
     *
     * @returns UpdateLargeModelResponse
     *
     * @param UpdateLargeModelRequest $request
     *
     * @return UpdateLargeModelResponse
     */
    public function updateLargeModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLargeModelWithOptions($request, $runtime);
    }

    /**
     * Edit Model Application.
     *
     * @param tmpReq - UpdateModelApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateModelApplicationResponse
     *
     * @param UpdateModelApplicationRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateModelApplicationResponse
     */
    public function updateModelApplicationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateModelApplicationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->interruptConfig) {
            $request->interruptConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->interruptConfig, 'InterruptConfig', 'json');
        }

        if (null !== $tmpReq->ttsConfig) {
            $request->ttsConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ttsConfig, 'TtsConfig', 'json');
        }

        $query = [];
        if (null !== $request->applicationCode) {
            @$query['ApplicationCode'] = $request->applicationCode;
        }

        if (null !== $request->applicationCps) {
            @$query['ApplicationCps'] = $request->applicationCps;
        }

        if (null !== $request->applicationName) {
            @$query['ApplicationName'] = $request->applicationName;
        }

        if (null !== $request->callAssistantHangup) {
            @$query['CallAssistantHangup'] = $request->callAssistantHangup;
        }

        if (null !== $request->callAssistantRecognize) {
            @$query['CallAssistantRecognize'] = $request->callAssistantRecognize;
        }

        if (null !== $request->callConnectedTriggerModel) {
            @$query['CallConnectedTriggerModel'] = $request->callConnectedTriggerModel;
        }

        if (null !== $request->dtmfAllowedDigits) {
            @$query['DtmfAllowedDigits'] = $request->dtmfAllowedDigits;
        }

        if (null !== $request->dtmfAutoValidateEnable) {
            @$query['DtmfAutoValidateEnable'] = $request->dtmfAutoValidateEnable;
        }

        if (null !== $request->dtmfDigitCount) {
            @$query['DtmfDigitCount'] = $request->dtmfDigitCount;
        }

        if (null !== $request->dtmfInputTimeout) {
            @$query['DtmfInputTimeout'] = $request->dtmfInputTimeout;
        }

        if (null !== $request->dtmfOutOfRangeAction) {
            @$query['DtmfOutOfRangeAction'] = $request->dtmfOutOfRangeAction;
        }

        if (null !== $request->dtmfRetryPlayTimes) {
            @$query['DtmfRetryPlayTimes'] = $request->dtmfRetryPlayTimes;
        }

        if (null !== $request->dtmfRetryPromptText) {
            @$query['DtmfRetryPromptText'] = $request->dtmfRetryPromptText;
        }

        if (null !== $request->dtmfSendMaxCount) {
            @$query['DtmfSendMaxCount'] = $request->dtmfSendMaxCount;
        }

        if (null !== $request->dtmfSendWaitTimeout) {
            @$query['DtmfSendWaitTimeout'] = $request->dtmfSendWaitTimeout;
        }

        if (null !== $request->dyvmsSceneName) {
            @$query['DyvmsSceneName'] = $request->dyvmsSceneName;
        }

        if (null !== $request->enableDtmfReceive) {
            @$query['EnableDtmfReceive'] = $request->enableDtmfReceive;
        }

        if (null !== $request->enableDtmfSend) {
            @$query['EnableDtmfSend'] = $request->enableDtmfSend;
        }

        if (null !== $request->enableMorse) {
            @$query['EnableMorse'] = $request->enableMorse;
        }

        if (null !== $request->interruptConfigShrink) {
            @$query['InterruptConfig'] = $request->interruptConfigShrink;
        }

        if (null !== $request->modelCode) {
            @$query['ModelCode'] = $request->modelCode;
        }

        if (null !== $request->modelVersion) {
            @$query['ModelVersion'] = $request->modelVersion;
        }

        if (null !== $request->muteActive) {
            @$query['MuteActive'] = $request->muteActive;
        }

        if (null !== $request->muteDuration) {
            @$query['MuteDuration'] = $request->muteDuration;
        }

        if (null !== $request->muteHangupNum) {
            @$query['MuteHangupNum'] = $request->muteHangupNum;
        }

        if (null !== $request->mutePushMode) {
            @$query['MutePushMode'] = $request->mutePushMode;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->prompt) {
            @$query['Prompt'] = $request->prompt;
        }

        if (null !== $request->qualificationId) {
            @$query['QualificationId'] = $request->qualificationId;
        }

        if (null !== $request->qualificationName) {
            @$query['QualificationName'] = $request->qualificationName;
        }

        if (null !== $request->recordingFile) {
            @$query['RecordingFile'] = $request->recordingFile;
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

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->speechContent) {
            @$query['SpeechContent'] = $request->speechContent;
        }

        if (null !== $request->speechId) {
            @$query['SpeechId'] = $request->speechId;
        }

        if (null !== $request->startWord) {
            @$query['StartWord'] = $request->startWord;
        }

        if (null !== $request->startWordType) {
            @$query['StartWordType'] = $request->startWordType;
        }

        if (null !== $request->ttsConfigShrink) {
            @$query['TtsConfig'] = $request->ttsConfigShrink;
        }

        if (null !== $request->usageDesc) {
            @$query['UsageDesc'] = $request->usageDesc;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateModelApplication',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateModelApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Edit Model Application.
     *
     * @param request - UpdateModelApplicationRequest
     *
     * @returns UpdateModelApplicationResponse
     *
     * @param UpdateModelApplicationRequest $request
     *
     * @return UpdateModelApplicationResponse
     */
    public function updateModelApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateModelApplicationWithOptions($request, $runtime);
    }

    /**
     * Invoke UpdateOuterAccount to update an external account based on the external account ID.
     *
     * @param request - UpdateOuterAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateOuterAccountResponse
     *
     * @param UpdateOuterAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateOuterAccountResponse
     */
    public function updateOuterAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateOuterAccount',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateOuterAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Invoke UpdateOuterAccount to update an external account based on the external account ID.
     *
     * @param request - UpdateOuterAccountRequest
     *
     * @returns UpdateOuterAccountResponse
     *
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
     * Update the skill group information in the Cloud Customer Service System based on the AICCS instance ID and skill group ID. This API supports updating the skill group description and display name.
     *
     * @remarks
     * - This API does not support updating the skill group ID or skill group name.
     * - After the update, you can invoke the [QuerySkillGroups](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-queryskillgroups) API to query the skill group information.
     * - If you need to provide the AICCS instance ID and skill group ID, refer to the instructions in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limit
     * - Per-user call frequency: No rate limiting.
     * - API call frequency: 1000 calls per second.
     * > If the total calls from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - UpdateSkillGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSkillGroupResponse
     *
     * @param UpdateSkillGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateSkillGroupResponse
     */
    public function updateSkillGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->skillGroupId) {
            @$query['SkillGroupId'] = $request->skillGroupId;
        }

        if (null !== $request->skillGroupName) {
            @$query['SkillGroupName'] = $request->skillGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSkillGroup',
            'version' => '2019-10-15',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSkillGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the skill group information in the Cloud Customer Service System based on the AICCS instance ID and skill group ID. This API supports updating the skill group description and display name.
     *
     * @remarks
     * - This API does not support updating the skill group ID or skill group name.
     * - After the update, you can invoke the [QuerySkillGroups](https://help.aliyun.com/zh/aiccs/developer-reference/api-aiccs-2019-10-15-queryskillgroups) API to query the skill group information.
     * - If you need to provide the AICCS instance ID and skill group ID, refer to the instructions in the [Request Parameters](#api-detail-35) section.
     * ### Queries per second (QPS) limit
     * - Per-user call frequency: No rate limiting.
     * - API call frequency: 1000 calls per second.
     * > If the total calls from multiple users exceed the API frequency limit, throttling will be triggered.
     *
     * @param request - UpdateSkillGroupRequest
     *
     * @returns UpdateSkillGroupResponse
     *
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
