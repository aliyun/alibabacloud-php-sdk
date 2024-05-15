<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddDriveSpaceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddDriveSpaceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddDriveSpaceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddDriveSpaceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddDriveSpaceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddMeetingRoomsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddMeetingRoomsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddMeetingRoomsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddMeetingRoomsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddMeetingRoomsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddScenegroupMemberHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddScenegroupMemberRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddScenegroupMemberResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddScenegroupMemberShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchGetFormDataByIdListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchGetFormDataByIdListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchGetFormDataByIdListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchGetFormDataByIdListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchGetFormDataByIdListShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchRemovalByFormInstanceIdListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchRemovalByFormInstanceIdListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchRemovalByFormInstanceIdListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchRemovalByFormInstanceIdListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchRemovalByFormInstanceIdListShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchSaveFormDataHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchSaveFormDataRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchSaveFormDataResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchSaveFormDataShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchSaveFormDataShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchUpdateFormDataByInstanceIdHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchUpdateFormDataByInstanceIdRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchUpdateFormDataByInstanceIdResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchUpdateFormDataByInstanceIdShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchUpdateFormDataByInstanceIdShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchUpdateFormDataByInstanceMapHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchUpdateFormDataByInstanceMapRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchUpdateFormDataByInstanceMapResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchUpdateFormDataByInstanceMapShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchUpdateFormDataByInstanceMapShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CancelScheduleConferenceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CancelScheduleConferenceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CancelScheduleConferenceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CancelScheduleConferenceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CancelScheduleConferenceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CheckUserIsGroupMemberHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CheckUserIsGroupMemberRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CheckUserIsGroupMemberResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CheckUserIsGroupMemberShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearDataHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearDataRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearDataResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearDataShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearDataShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDeliveryPlanHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDeliveryPlanRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDeliveryPlanResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDeliveryPlanShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDeliveryPlanShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDingtalkPersonalTodoTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDingtalkPersonalTodoTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDingtalkPersonalTodoTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDingtalkPersonalTodoTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDingtalkPersonalTodoTaskShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateLiveHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateLiveRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateLiveResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateLiveShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateLiveShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomGroupHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomGroupRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomGroupResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomGroupShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomGroupShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateOrgHonorTemplateHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateOrgHonorTemplateRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateOrgHonorTemplateResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateOrgHonorTemplateShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateOrgHonorTemplateShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateOrUpdateFormDataHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateOrUpdateFormDataRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateOrUpdateFormDataResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateOrUpdateFormDataShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreatePersonalTodoTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreatePersonalTodoTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreatePersonalTodoTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreatePersonalTodoTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreatePersonalTodoTaskShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScenegroupHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScenegroupRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScenegroupResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScenegroupShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchDomeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchDomeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchDomeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchDomeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchDomeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchKeywordHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchKeywordRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchKeywordResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchKeywordShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchKeywordShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSubscribedCalendarHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSubscribedCalendarRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSubscribedCalendarResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSubscribedCalendarShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSubscribedCalendarShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateVideoConferenceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateVideoConferenceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateVideoConferenceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateVideoConferenceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateVideoConferenceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteColumnsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteColumnsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteColumnsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteColumnsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteColumnsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteDriveSpaceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteDriveSpaceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteDriveSpaceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteDriveSpaceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteDriveSpaceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteEventHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteEventRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteEventResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteEventShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteFormDataHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteFormDataRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteFormDataResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteFormDataShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteInstanceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteInstanceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteLiveHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteLiveRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteLiveResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteLiveShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteLiveShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomGroupHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomGroupRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomGroupResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomGroupShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomGroupShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteRowsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteRowsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteRowsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteRowsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteRowsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteScenegroupMemberHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteScenegroupMemberRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteScenegroupMemberResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteScenegroupMemberShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSheetHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSheetRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSheetResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSheetShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSheetShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSubscribedCalendarHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSubscribedCalendarRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSubscribedCalendarResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSubscribedCalendarShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteTodoTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteTodoTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteTodoTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteTodoTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteTodoTaskShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExecuteBatchTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExecuteBatchTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExecuteBatchTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExecuteBatchTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExecutePlatformTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExecutePlatformTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExecutePlatformTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExecutePlatformTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExecuteTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExecuteTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExecuteTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExecuteTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExpandGroupCapacityHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExpandGroupCapacityRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExpandGroupCapacityResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExpandGroupCapacityShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ExpandGroupCapacityShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetActivityListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetActivityListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetActivityListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetActivityListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAllSheetsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAllSheetsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAllSheetsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAllSheetsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAllSheetsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetConversaionSpaceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetConversaionSpaceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetConversaionSpaceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetConversaionSpaceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetConversaionSpaceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetCorpAccomplishmentTasksHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetCorpAccomplishmentTasksRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetCorpAccomplishmentTasksResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetCorpAccomplishmentTasksShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetCorpTasksHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetCorpTasksRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetCorpTasksResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetCorpTasksShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDocContentHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDocContentRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDocContentResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDocContentShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDocContentShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDocContentTakIdHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDocContentTakIdRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDocContentTakIdResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDocContentTakIdShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDocContentTakIdShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFieldDefByUuidHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFieldDefByUuidRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFieldDefByUuidResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFieldDefByUuidShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileDownloadInfoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileDownloadInfoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileDownloadInfoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileDownloadInfoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileDownloadInfoShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormComponentDefinitionListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormComponentDefinitionListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormComponentDefinitionListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormComponentDefinitionListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormDataByIDHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormDataByIDRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormDataByIDResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormDataByIDShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormListInAppHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormListInAppRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormListInAppResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormListInAppShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInnerGroupMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInnerGroupMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInnerGroupMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInnerGroupMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceByIdHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceByIdRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceByIdResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceByIdShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceIdListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceIdListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceIdListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstanceIdListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesByIdListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesByIdListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesByIdListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesByIdListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetLiveReplayUrlHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetLiveReplayUrlRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetLiveReplayUrlResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetLiveReplayUrlShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetLiveReplayUrlShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeCorpSubmissionHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeCorpSubmissionRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeCorpSubmissionResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeCorpSubmissionShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMineWorkspaceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMineWorkspaceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMineWorkspaceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMineWorkspaceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMineWorkspaceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNewestInnerGroupsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNewestInnerGroupsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNewestInnerGroupsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNewestInnerGroupsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNewestInnerGroupsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNotifyMeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNotifyMeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNotifyMeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNotifyMeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOpenUrlHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOpenUrlRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOpenUrlResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOpenUrlShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOperationRecordsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOperationRecordsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOperationRecordsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOperationRecordsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRelatedWorkspacesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRelatedWorkspacesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRelatedWorkspacesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRelatedWorkspacesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRelatedWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportUnReadCountHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportUnReadCountRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportUnReadCountResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportUnReadCountShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportUnReadCountShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRunningTasksHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRunningTasksRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRunningTasksResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRunningTasksShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSubscribedCalendarHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSubscribedCalendarRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSubscribedCalendarResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSubscribedCalendarShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTaskCopiesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTaskCopiesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTaskCopiesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTaskCopiesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTemplateListByUserIdHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTemplateListByUserIdRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTemplateListByUserIdResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTemplateListByUserIdShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTemplateListByUserIdShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserLatestPlanHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserLatestPlanRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserLatestPlanResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserLatestPlanShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserLatestPlanShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspaceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspaceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspaceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspaceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GrantHonorHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GrantHonorRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GrantHonorResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GrantHonorShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GrantHonorShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertColumnsBeforeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertColumnsBeforeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertColumnsBeforeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertColumnsBeforeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertColumnsBeforeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListApplicationHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListApplicationRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListApplicationResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListApplicationShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListDentriesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListDentriesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListDentriesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListDentriesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListDentriesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListDriveSpacesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListDriveSpacesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListDriveSpacesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListDriveSpacesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListDriveSpacesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsViewHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsViewRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsViewResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsViewShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListFormRemarksHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListFormRemarksRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListFormRemarksResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListFormRemarksShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListFormRemarksShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNavigationByFormTypeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNavigationByFormTypeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNavigationByFormTypeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNavigationByFormTypeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNodesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNodesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNodesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNodesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNodesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTableDataByFormInstanceIdTableIdHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTableDataByFormInstanceIdTableIdRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTableDataByFormInstanceIdTableIdResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTableDataByFormInstanceIdTableIdShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTeamsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTeamsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTeamsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTeamsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTeamsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoPlayInfoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoPlayInfoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoPlayInfoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoPlayInfoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoPlayInfoShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveInfoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveInfoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveInfoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveInfoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveInfoShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchDetailHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchDetailRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchDetailResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchDetailShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchDetailShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupListShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgHonorsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgHonorsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgHonorsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgHonorsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgHonorsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RecallHonorHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RecallHonorRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RecallHonorResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RecallHonorShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RecallHonorShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ReceiverListReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ReceiverListReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ReceiverListReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ReceiverListReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ReceiverListReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RedirectTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RedirectTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RedirectTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RedirectTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveAttendeeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveAttendeeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveAttendeeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveAttendeeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveAttendeeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveMeetingRoomsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveMeetingRoomsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveMeetingRoomsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveMeetingRoomsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveMeetingRoomsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveFormDataHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveFormDataRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveFormDataResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveFormDataShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveFormRemarkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveFormRemarkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveFormRemarkResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveFormRemarkShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchEmployeeFieldValuesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchEmployeeFieldValuesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchEmployeeFieldValuesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchEmployeeFieldValuesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataIdListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataIdListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataIdListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataIdListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationNoTableFieldHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationNoTableFieldRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationNoTableFieldResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationNoTableFieldShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDataSecondGenerationShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchFormDatasShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchInnerGroupsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchInnerGroupsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchInnerGroupsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SearchInnerGroupsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendBannerHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendBannerRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendBannerResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendBannerShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendBannerShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendPopupHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendPopupRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendPopupResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendPopupShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendPopupShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendSearchShadeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendSearchShadeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendSearchShadeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendSearchShadeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SendSearchShadeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetColumnsVisibilityHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetColumnsVisibilityRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetColumnsVisibilityResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetColumnsVisibilityShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetColumnsVisibilityShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetRowsVisibilityHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetRowsVisibilityRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetRowsVisibilityResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetRowsVisibilityShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetRowsVisibilityShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartCloudRecordHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartCloudRecordRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartCloudRecordResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartCloudRecordShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartCloudRecordShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartInstanceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartInstanceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsListByTypeReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsListByTypeReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsListByTypeReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsListByTypeReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsListByTypeReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopCloudRecordHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopCloudRecordRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopCloudRecordResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopCloudRecordShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopCloudRecordShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeCalendarHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeCalendarRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeCalendarResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeCalendarShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SyncDingTypeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SyncDingTypeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SyncDingTypeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SyncDingTypeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SyncDingTypeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TerminateInstanceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TerminateInstanceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TerminateInstanceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TerminateInstanceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeCalendarHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeCalendarRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeCalendarResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeCalendarShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateFormDataHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateFormDataRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateFormDataResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateFormDataShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateInstanceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateInstanceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateLiveHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateLiveRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateLiveResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateLiveShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateLiveShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomGroupHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomGroupRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomGroupResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomGroupShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomGroupShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConferenceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConferenceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConferenceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConferenceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConferenceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateStatusHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateStatusRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateStatusResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateStatusShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateStatusShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateSubscribedCalendarsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateSubscribedCalendarsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateSubscribedCalendarsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateSubscribedCalendarsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateSubscribedCalendarsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateUserAvatarHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateUserAvatarRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateUserAvatarResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateUserAvatarShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UploadMediaHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UploadMediaRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UploadMediaResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UploadMediaShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UploadMediaShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\WearOrgHonorHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\WearOrgHonorRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\WearOrgHonorResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\WearOrgHonorShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\WearOrgHonorShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Aliding extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aliding', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 添加日程参与者
     *  *
     * @param AddAttendeeRequest $tmpReq    AddAttendeeRequest
     * @param AddAttendeeHeaders $tmpHeader AddAttendeeHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return AddAttendeeResponse AddAttendeeResponse
     */
    public function addAttendeeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddAttendeeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new AddAttendeeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->attendeesToAdd)) {
            $request->attendeesToAddShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attendeesToAdd, 'AttendeesToAdd', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->attendeesToAddShrink)) {
            $body['AttendeesToAdd'] = $request->attendeesToAddShrink;
        }
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->chatNotification)) {
            $body['chatNotification'] = $request->chatNotification;
        }
        if (!Utils::isUnset($request->pushNotification)) {
            $body['pushNotification'] = $request->pushNotification;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddAttendee',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/addAttendee',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAttendeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加日程参与者
     *  *
     * @param AddAttendeeRequest $request AddAttendeeRequest
     *
     * @return AddAttendeeResponse AddAttendeeResponse
     */
    public function addAttendee($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddAttendeeHeaders([]);

        return $this->addAttendeeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 新建钉盘空间
     *  *
     * @param AddDriveSpaceRequest $tmpReq    AddDriveSpaceRequest
     * @param AddDriveSpaceHeaders $tmpHeader AddDriveSpaceHeaders
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return AddDriveSpaceResponse AddDriveSpaceResponse
     */
    public function addDriveSpaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddDriveSpaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new AddDriveSpaceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDriveSpace',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/addDriveSpace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDriveSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建钉盘空间
     *  *
     * @param AddDriveSpaceRequest $request AddDriveSpaceRequest
     *
     * @return AddDriveSpaceResponse AddDriveSpaceResponse
     */
    public function addDriveSpace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddDriveSpaceHeaders([]);

        return $this->addDriveSpaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 预定会议室
     *  *
     * @param AddMeetingRoomsRequest $tmpReq    AddMeetingRoomsRequest
     * @param AddMeetingRoomsHeaders $tmpHeader AddMeetingRoomsHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return AddMeetingRoomsResponse AddMeetingRoomsResponse
     */
    public function addMeetingRoomsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddMeetingRoomsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new AddMeetingRoomsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->meetingRoomsToAdd)) {
            $request->meetingRoomsToAddShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->meetingRoomsToAdd, 'MeetingRoomsToAdd', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->meetingRoomsToAddShrink)) {
            $body['MeetingRoomsToAdd'] = $request->meetingRoomsToAddShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddMeetingRooms',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/addMeetingRooms',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddMeetingRoomsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 预定会议室
     *  *
     * @param AddMeetingRoomsRequest $request AddMeetingRoomsRequest
     *
     * @return AddMeetingRoomsResponse AddMeetingRoomsResponse
     */
    public function addMeetingRooms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddMeetingRoomsHeaders([]);

        return $this->addMeetingRoomsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 新增群成员
     *  *
     * @param AddScenegroupMemberRequest $request   AddScenegroupMemberRequest
     * @param AddScenegroupMemberHeaders $tmpHeader AddScenegroupMemberHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return AddScenegroupMemberResponse AddScenegroupMemberResponse
     */
    public function addScenegroupMemberWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new AddScenegroupMemberShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->openConversationId)) {
            $body['OpenConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $body['UserIds'] = $request->userIds;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddScenegroupMember',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/im/addScenegroupMember',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddScenegroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增群成员
     *  *
     * @param AddScenegroupMemberRequest $request AddScenegroupMemberRequest
     *
     * @return AddScenegroupMemberResponse AddScenegroupMemberResponse
     */
    public function addScenegroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddScenegroupMemberHeaders([]);

        return $this->addScenegroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 新建知识库
     *  *
     * @param AddWorkspaceRequest $tmpReq    AddWorkspaceRequest
     * @param AddWorkspaceHeaders $tmpHeader AddWorkspaceHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return AddWorkspaceResponse AddWorkspaceResponse
     */
    public function addWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddWorkspaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new AddWorkspaceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->option)) {
            $request->optionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->optionShrink)) {
            $body['Option'] = $request->optionShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddWorkspace',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/addWorkspace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新建知识库
     *  *
     * @param AddWorkspaceRequest $request AddWorkspaceRequest
     *
     * @return AddWorkspaceResponse AddWorkspaceResponse
     */
    public function addWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddWorkspaceHeaders([]);

        return $this->addWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 添加知识库文档成员
     *  *
     * @param AddWorkspaceDocMembersRequest $tmpReq    AddWorkspaceDocMembersRequest
     * @param AddWorkspaceDocMembersHeaders $tmpHeader AddWorkspaceDocMembersHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return AddWorkspaceDocMembersResponse AddWorkspaceDocMembersResponse
     */
    public function addWorkspaceDocMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddWorkspaceDocMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new AddWorkspaceDocMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddWorkspaceDocMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/addWorkspaceDocMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWorkspaceDocMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加知识库文档成员
     *  *
     * @param AddWorkspaceDocMembersRequest $request AddWorkspaceDocMembersRequest
     *
     * @return AddWorkspaceDocMembersResponse AddWorkspaceDocMembersResponse
     */
    public function addWorkspaceDocMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddWorkspaceDocMembersHeaders([]);

        return $this->addWorkspaceDocMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 添加知识库成员
     *  *
     * @param AddWorkspaceMembersRequest $tmpReq    AddWorkspaceMembersRequest
     * @param AddWorkspaceMembersHeaders $tmpHeader AddWorkspaceMembersHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return AddWorkspaceMembersResponse AddWorkspaceMembersResponse
     */
    public function addWorkspaceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddWorkspaceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new AddWorkspaceMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddWorkspaceMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/addWorkspaceMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWorkspaceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加知识库成员
     *  *
     * @param AddWorkspaceMembersRequest $request AddWorkspaceMembersRequest
     *
     * @return AddWorkspaceMembersResponse AddWorkspaceMembersResponse
     */
    public function addWorkspaceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddWorkspaceMembersHeaders([]);

        return $this->addWorkspaceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量获取表单实例数据
     *  *
     * @param BatchGetFormDataByIdListRequest $tmpReq    BatchGetFormDataByIdListRequest
     * @param BatchGetFormDataByIdListHeaders $tmpHeader BatchGetFormDataByIdListHeaders
     * @param RuntimeOptions                  $runtime   runtime options for this request RuntimeOptions
     *
     * @return BatchGetFormDataByIdListResponse BatchGetFormDataByIdListResponse
     */
    public function batchGetFormDataByIdListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchGetFormDataByIdListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new BatchGetFormDataByIdListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->formInstanceIdList)) {
            $request->formInstanceIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->formInstanceIdList, 'FormInstanceIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->formInstanceIdListShrink)) {
            $body['FormInstanceIdList'] = $request->formInstanceIdListShrink;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->needFormInstanceValue)) {
            $body['NeedFormInstanceValue'] = $request->needFormInstanceValue;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchGetFormDataByIdList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/batchGetFormDataByIdList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchGetFormDataByIdListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量获取表单实例数据
     *  *
     * @param BatchGetFormDataByIdListRequest $request BatchGetFormDataByIdListRequest
     *
     * @return BatchGetFormDataByIdListResponse BatchGetFormDataByIdListResponse
     */
    public function batchGetFormDataByIdList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchGetFormDataByIdListHeaders([]);

        return $this->batchGetFormDataByIdListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量删除表单实例
     *  *
     * @param BatchRemovalByFormInstanceIdListRequest $tmpReq    BatchRemovalByFormInstanceIdListRequest
     * @param BatchRemovalByFormInstanceIdListHeaders $tmpHeader BatchRemovalByFormInstanceIdListHeaders
     * @param RuntimeOptions                          $runtime   runtime options for this request RuntimeOptions
     *
     * @return BatchRemovalByFormInstanceIdListResponse BatchRemovalByFormInstanceIdListResponse
     */
    public function batchRemovalByFormInstanceIdListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchRemovalByFormInstanceIdListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new BatchRemovalByFormInstanceIdListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->formInstanceIdList)) {
            $request->formInstanceIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->formInstanceIdList, 'FormInstanceIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->asynchronousExecution)) {
            $body['AsynchronousExecution'] = $request->asynchronousExecution;
        }
        if (!Utils::isUnset($request->executeExpression)) {
            $body['ExecuteExpression'] = $request->executeExpression;
        }
        if (!Utils::isUnset($request->formInstanceIdListShrink)) {
            $body['FormInstanceIdList'] = $request->formInstanceIdListShrink;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchRemovalByFormInstanceIdList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/batchRemovalByFormInstanceIdList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchRemovalByFormInstanceIdListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量删除表单实例
     *  *
     * @param BatchRemovalByFormInstanceIdListRequest $request BatchRemovalByFormInstanceIdListRequest
     *
     * @return BatchRemovalByFormInstanceIdListResponse BatchRemovalByFormInstanceIdListResponse
     */
    public function batchRemovalByFormInstanceIdList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchRemovalByFormInstanceIdListHeaders([]);

        return $this->batchRemovalByFormInstanceIdListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量创建表单实例
     *  *
     * @param BatchSaveFormDataRequest $tmpReq    BatchSaveFormDataRequest
     * @param BatchSaveFormDataHeaders $tmpHeader BatchSaveFormDataHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return BatchSaveFormDataResponse BatchSaveFormDataResponse
     */
    public function batchSaveFormDataWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchSaveFormDataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new BatchSaveFormDataShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->formDataJsonList)) {
            $request->formDataJsonListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->formDataJsonList, 'FormDataJsonList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->asynchronousExecution)) {
            $body['AsynchronousExecution'] = $request->asynchronousExecution;
        }
        if (!Utils::isUnset($request->formDataJsonListShrink)) {
            $body['FormDataJsonList'] = $request->formDataJsonListShrink;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->keepRunningAfterException)) {
            $body['KeepRunningAfterException'] = $request->keepRunningAfterException;
        }
        if (!Utils::isUnset($request->noExecuteExpression)) {
            $body['NoExecuteExpression'] = $request->noExecuteExpression;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchSaveFormData',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/batchSaveFormData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSaveFormDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量创建表单实例
     *  *
     * @param BatchSaveFormDataRequest $request BatchSaveFormDataRequest
     *
     * @return BatchSaveFormDataResponse BatchSaveFormDataResponse
     */
    public function batchSaveFormData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchSaveFormDataHeaders([]);

        return $this->batchSaveFormDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量更新表单实例内的组件值
     *  *
     * @param BatchUpdateFormDataByInstanceIdRequest $tmpReq    BatchUpdateFormDataByInstanceIdRequest
     * @param BatchUpdateFormDataByInstanceIdHeaders $tmpHeader BatchUpdateFormDataByInstanceIdHeaders
     * @param RuntimeOptions                         $runtime   runtime options for this request RuntimeOptions
     *
     * @return BatchUpdateFormDataByInstanceIdResponse BatchUpdateFormDataByInstanceIdResponse
     */
    public function batchUpdateFormDataByInstanceIdWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchUpdateFormDataByInstanceIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new BatchUpdateFormDataByInstanceIdShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->formInstanceIdList)) {
            $request->formInstanceIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->formInstanceIdList, 'FormInstanceIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->asynchronousExecution)) {
            $body['AsynchronousExecution'] = $request->asynchronousExecution;
        }
        if (!Utils::isUnset($request->formInstanceIdListShrink)) {
            $body['FormInstanceIdList'] = $request->formInstanceIdListShrink;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->ignoreEmpty)) {
            $body['IgnoreEmpty'] = $request->ignoreEmpty;
        }
        if (!Utils::isUnset($request->noExecuteExpression)) {
            $body['NoExecuteExpression'] = $request->noExecuteExpression;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->updateFormDataJson)) {
            $body['UpdateFormDataJson'] = $request->updateFormDataJson;
        }
        if (!Utils::isUnset($request->useLatestFormSchemaVersion)) {
            $body['UseLatestFormSchemaVersion'] = $request->useLatestFormSchemaVersion;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchUpdateFormDataByInstanceId',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/batchUpdateFormDataByInstanceId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUpdateFormDataByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量更新表单实例内的组件值
     *  *
     * @param BatchUpdateFormDataByInstanceIdRequest $request BatchUpdateFormDataByInstanceIdRequest
     *
     * @return BatchUpdateFormDataByInstanceIdResponse BatchUpdateFormDataByInstanceIdResponse
     */
    public function batchUpdateFormDataByInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchUpdateFormDataByInstanceIdHeaders([]);

        return $this->batchUpdateFormDataByInstanceIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 通过表单实例数据批量更新表单实例
     *  *
     * @param BatchUpdateFormDataByInstanceMapRequest $tmpReq    BatchUpdateFormDataByInstanceMapRequest
     * @param BatchUpdateFormDataByInstanceMapHeaders $tmpHeader BatchUpdateFormDataByInstanceMapHeaders
     * @param RuntimeOptions                          $runtime   runtime options for this request RuntimeOptions
     *
     * @return BatchUpdateFormDataByInstanceMapResponse BatchUpdateFormDataByInstanceMapResponse
     */
    public function batchUpdateFormDataByInstanceMapWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchUpdateFormDataByInstanceMapShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new BatchUpdateFormDataByInstanceMapShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->updateFormDataJsonMap)) {
            $request->updateFormDataJsonMapShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->updateFormDataJsonMap, 'UpdateFormDataJsonMap', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->asynchronousExecution)) {
            $body['AsynchronousExecution'] = $request->asynchronousExecution;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->ignoreEmpty)) {
            $body['IgnoreEmpty'] = $request->ignoreEmpty;
        }
        if (!Utils::isUnset($request->noExecuteExpression)) {
            $body['NoExecuteExpression'] = $request->noExecuteExpression;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->updateFormDataJsonMapShrink)) {
            $body['UpdateFormDataJsonMap'] = $request->updateFormDataJsonMapShrink;
        }
        if (!Utils::isUnset($request->useLatestFormSchemaVersion)) {
            $body['UseLatestFormSchemaVersion'] = $request->useLatestFormSchemaVersion;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchUpdateFormDataByInstanceMap',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/batchUpdateFormDataByInstanceMap',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUpdateFormDataByInstanceMapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过表单实例数据批量更新表单实例
     *  *
     * @param BatchUpdateFormDataByInstanceMapRequest $request BatchUpdateFormDataByInstanceMapRequest
     *
     * @return BatchUpdateFormDataByInstanceMapResponse BatchUpdateFormDataByInstanceMapResponse
     */
    public function batchUpdateFormDataByInstanceMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchUpdateFormDataByInstanceMapHeaders([]);

        return $this->batchUpdateFormDataByInstanceMapWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 取消预约会议
     *  *
     * @param CancelScheduleConferenceRequest $tmpReq    CancelScheduleConferenceRequest
     * @param CancelScheduleConferenceHeaders $tmpHeader CancelScheduleConferenceHeaders
     * @param RuntimeOptions                  $runtime   runtime options for this request RuntimeOptions
     *
     * @return CancelScheduleConferenceResponse CancelScheduleConferenceResponse
     */
    public function cancelScheduleConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CancelScheduleConferenceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CancelScheduleConferenceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->scheduleConferenceId)) {
            $body['ScheduleConferenceId'] = $request->scheduleConferenceId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelScheduleConference',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/cancelScheduleConference',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelScheduleConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消预约会议
     *  *
     * @param CancelScheduleConferenceRequest $request CancelScheduleConferenceRequest
     *
     * @return CancelScheduleConferenceResponse CancelScheduleConferenceResponse
     */
    public function cancelScheduleConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CancelScheduleConferenceHeaders([]);

        return $this->cancelScheduleConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询用户是否为企业内部群成员
     *  *
     * @param CheckUserIsGroupMemberRequest $request   CheckUserIsGroupMemberRequest
     * @param CheckUserIsGroupMemberHeaders $tmpHeader CheckUserIsGroupMemberHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return CheckUserIsGroupMemberResponse CheckUserIsGroupMemberResponse
     */
    public function checkUserIsGroupMemberWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new CheckUserIsGroupMemberShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->openConversationId)) {
            $body['OpenConversationId'] = $request->openConversationId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckUserIsGroupMember',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/im/checkUserIsGroupMember',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckUserIsGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户是否为企业内部群成员
     *  *
     * @param CheckUserIsGroupMemberRequest $request CheckUserIsGroupMemberRequest
     *
     * @return CheckUserIsGroupMemberResponse CheckUserIsGroupMemberResponse
     */
    public function checkUserIsGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CheckUserIsGroupMemberHeaders([]);

        return $this->checkUserIsGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 清除单元格所有内容
     *  *
     * @param ClearRequest   $tmpReq    ClearRequest
     * @param ClearHeaders   $tmpHeader ClearHeaders
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return ClearResponse ClearResponse
     */
    public function clearWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ClearShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ClearShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->rangeAddress)) {
            $body['RangeAddress'] = $request->rangeAddress;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Clear',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/clear',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 清除单元格所有内容
     *  *
     * @param ClearRequest $request ClearRequest
     *
     * @return ClearResponse ClearResponse
     */
    public function clear($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ClearHeaders([]);

        return $this->clearWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 清除单元格数据
     *  *
     * @param ClearDataRequest $tmpReq    ClearDataRequest
     * @param ClearDataHeaders $tmpHeader ClearDataHeaders
     * @param RuntimeOptions   $runtime   runtime options for this request RuntimeOptions
     *
     * @return ClearDataResponse ClearDataResponse
     */
    public function clearDataWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ClearDataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ClearDataShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->rangeAddress)) {
            $body['RangeAddress'] = $request->rangeAddress;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ClearData',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/clearData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 清除单元格数据
     *  *
     * @param ClearDataRequest $request ClearDataRequest
     *
     * @return ClearDataResponse ClearDataResponse
     */
    public function clearData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ClearDataHeaders([]);

        return $this->clearDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取日志评论列表
     *  *
     * @param CommentListReportRequest $tmpReq    CommentListReportRequest
     * @param CommentListReportHeaders $tmpHeader CommentListReportHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return CommentListReportResponse CommentListReportResponse
     */
    public function commentListReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CommentListReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CommentListReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->offset)) {
            $body['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->reportId)) {
            $body['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CommentListReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/commentListReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CommentListReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取日志评论列表
     *  *
     * @param CommentListReportRequest $request CommentListReportRequest
     *
     * @return CommentListReportResponse CommentListReportResponse
     */
    public function commentListReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CommentListReportHeaders([]);

        return $this->commentListReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发布钉钉投放活动
     *  *
     * @param CreateDeliveryPlanRequest $tmpReq    CreateDeliveryPlanRequest
     * @param CreateDeliveryPlanHeaders $tmpHeader CreateDeliveryPlanHeaders
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateDeliveryPlanResponse CreateDeliveryPlanResponse
     */
    public function createDeliveryPlanWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDeliveryPlanShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateDeliveryPlanShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->content)) {
            $request->contentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->userIdList)) {
            $request->userIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userIdList, 'UserIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->contentShrink)) {
            $body['Content'] = $request->contentShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resId)) {
            $body['ResId'] = $request->resId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->userIdListShrink)) {
            $body['UserIdList'] = $request->userIdListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDeliveryPlan',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/watt/createDeliveryPlan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeliveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布钉钉投放活动
     *  *
     * @param CreateDeliveryPlanRequest $request CreateDeliveryPlanRequest
     *
     * @return CreateDeliveryPlanResponse CreateDeliveryPlanResponse
     */
    public function createDeliveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDeliveryPlanHeaders([]);

        return $this->createDeliveryPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 委托权限创建钉钉个人待办
     *  *
     * @param CreateDingtalkPersonalTodoTaskRequest $tmpReq    CreateDingtalkPersonalTodoTaskRequest
     * @param CreateDingtalkPersonalTodoTaskHeaders $tmpHeader CreateDingtalkPersonalTodoTaskHeaders
     * @param RuntimeOptions                        $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateDingtalkPersonalTodoTaskResponse CreateDingtalkPersonalTodoTaskResponse
     */
    public function createDingtalkPersonalTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateDingtalkPersonalTodoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateDingtalkPersonalTodoTaskShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->executorIds)) {
            $request->executorIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'ExecutorIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->notifyConfigs)) {
            $request->notifyConfigsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notifyConfigs, 'NotifyConfigs', 'json');
        }
        if (!Utils::isUnset($tmpReq->participantIds)) {
            $request->participantIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->participantIds, 'ParticipantIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dueTime)) {
            $body['DueTime'] = $request->dueTime;
        }
        if (!Utils::isUnset($request->executorIdsShrink)) {
            $body['ExecutorIds'] = $request->executorIdsShrink;
        }
        if (!Utils::isUnset($request->notifyConfigsShrink)) {
            $body['NotifyConfigs'] = $request->notifyConfigsShrink;
        }
        if (!Utils::isUnset($request->participantIdsShrink)) {
            $body['ParticipantIds'] = $request->participantIdsShrink;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->userToken)) {
            $body['UserToken'] = $request->userToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDingtalkPersonalTodoTask',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/task/createDingtalkPersonalTodoTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDingtalkPersonalTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 委托权限创建钉钉个人待办
     *  *
     * @param CreateDingtalkPersonalTodoTaskRequest $request CreateDingtalkPersonalTodoTaskRequest
     *
     * @return CreateDingtalkPersonalTodoTaskResponse CreateDingtalkPersonalTodoTaskResponse
     */
    public function createDingtalkPersonalTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDingtalkPersonalTodoTaskHeaders([]);

        return $this->createDingtalkPersonalTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建日程
     *  *
     * @param CreateEventRequest $tmpReq    CreateEventRequest
     * @param CreateEventHeaders $tmpHeader CreateEventHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateEventResponse CreateEventResponse
     */
    public function createEventWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEventShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateEventShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->attendees)) {
            $request->attendeesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attendees, 'Attendees', 'json');
        }
        if (!Utils::isUnset($tmpReq->end)) {
            $request->endShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->end, 'End', 'json');
        }
        if (!Utils::isUnset($tmpReq->extra)) {
            $request->extraShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }
        if (!Utils::isUnset($tmpReq->location)) {
            $request->locationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->location, 'Location', 'json');
        }
        if (!Utils::isUnset($tmpReq->onlineMeetingInfo)) {
            $request->onlineMeetingInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->onlineMeetingInfo, 'OnlineMeetingInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->recurrence)) {
            $request->recurrenceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recurrence, 'Recurrence', 'json');
        }
        if (!Utils::isUnset($tmpReq->reminders)) {
            $request->remindersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->reminders, 'Reminders', 'json');
        }
        if (!Utils::isUnset($tmpReq->richTextDescription)) {
            $request->richTextDescriptionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->richTextDescription, 'RichTextDescription', 'json');
        }
        if (!Utils::isUnset($tmpReq->uiConfigs)) {
            $request->uiConfigsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->uiConfigs, 'UiConfigs', 'json');
        }
        if (!Utils::isUnset($tmpReq->start)) {
            $request->startShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->start, 'start', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->attendeesShrink)) {
            $body['Attendees'] = $request->attendeesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endShrink)) {
            $body['End'] = $request->endShrink;
        }
        if (!Utils::isUnset($request->extraShrink)) {
            $body['Extra'] = $request->extraShrink;
        }
        if (!Utils::isUnset($request->isAllDay)) {
            $body['IsAllDay'] = $request->isAllDay;
        }
        if (!Utils::isUnset($request->locationShrink)) {
            $body['Location'] = $request->locationShrink;
        }
        if (!Utils::isUnset($request->onlineMeetingInfoShrink)) {
            $body['OnlineMeetingInfo'] = $request->onlineMeetingInfoShrink;
        }
        if (!Utils::isUnset($request->recurrenceShrink)) {
            $body['Recurrence'] = $request->recurrenceShrink;
        }
        if (!Utils::isUnset($request->remindersShrink)) {
            $body['Reminders'] = $request->remindersShrink;
        }
        if (!Utils::isUnset($request->richTextDescriptionShrink)) {
            $body['RichTextDescription'] = $request->richTextDescriptionShrink;
        }
        if (!Utils::isUnset($request->summary)) {
            $body['Summary'] = $request->summary;
        }
        if (!Utils::isUnset($request->uiConfigsShrink)) {
            $body['UiConfigs'] = $request->uiConfigsShrink;
        }
        if (!Utils::isUnset($request->calendarId)) {
            $body['calendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->startShrink)) {
            $body['start'] = $request->startShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEvent',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/createEvent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建日程
     *  *
     * @param CreateEventRequest $request CreateEventRequest
     *
     * @return CreateEventResponse CreateEventResponse
     */
    public function createEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateEventHeaders([]);

        return $this->createEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建直播
     *  *
     * @param CreateLiveRequest $tmpReq    CreateLiveRequest
     * @param CreateLiveHeaders $tmpHeader CreateLiveHeaders
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateLiveResponse CreateLiveResponse
     */
    public function createLiveWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLiveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateLiveShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->coverUrl)) {
            $body['CoverUrl'] = $request->coverUrl;
        }
        if (!Utils::isUnset($request->introduction)) {
            $body['Introduction'] = $request->introduction;
        }
        if (!Utils::isUnset($request->preEndTime)) {
            $body['PreEndTime'] = $request->preEndTime;
        }
        if (!Utils::isUnset($request->preStartTime)) {
            $body['PreStartTime'] = $request->preStartTime;
        }
        if (!Utils::isUnset($request->publicType)) {
            $body['PublicType'] = $request->publicType;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLive',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/createLive',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建直播
     *  *
     * @param CreateLiveRequest $request CreateLiveRequest
     *
     * @return CreateLiveResponse CreateLiveResponse
     */
    public function createLive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateLiveHeaders([]);

        return $this->createLiveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建会议室
     *  *
     * @param CreateMeetingRoomRequest $tmpReq    CreateMeetingRoomRequest
     * @param CreateMeetingRoomHeaders $tmpHeader CreateMeetingRoomHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateMeetingRoomResponse CreateMeetingRoomResponse
     */
    public function createMeetingRoomWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMeetingRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateMeetingRoomShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->reservationAuthority)) {
            $request->reservationAuthorityShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->reservationAuthority, 'ReservationAuthority', 'json');
        }
        if (!Utils::isUnset($tmpReq->roomLabelIds)) {
            $request->roomLabelIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomLabelIds, 'RoomLabelIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->roomLocation)) {
            $request->roomLocationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomLocation, 'RoomLocation', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->enableCycleReservation)) {
            $body['EnableCycleReservation'] = $request->enableCycleReservation;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->isvRoomId)) {
            $body['IsvRoomId'] = $request->isvRoomId;
        }
        if (!Utils::isUnset($request->reservationAuthorityShrink)) {
            $body['ReservationAuthority'] = $request->reservationAuthorityShrink;
        }
        if (!Utils::isUnset($request->roomCapacity)) {
            $body['RoomCapacity'] = $request->roomCapacity;
        }
        if (!Utils::isUnset($request->roomLabelIdsShrink)) {
            $body['RoomLabelIds'] = $request->roomLabelIdsShrink;
        }
        if (!Utils::isUnset($request->roomLocationShrink)) {
            $body['RoomLocation'] = $request->roomLocationShrink;
        }
        if (!Utils::isUnset($request->roomName)) {
            $body['RoomName'] = $request->roomName;
        }
        if (!Utils::isUnset($request->roomPicture)) {
            $body['RoomPicture'] = $request->roomPicture;
        }
        if (!Utils::isUnset($request->roomStatus)) {
            $body['RoomStatus'] = $request->roomStatus;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMeetingRoom',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/createMeetingRoom',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMeetingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建会议室
     *  *
     * @param CreateMeetingRoomRequest $request CreateMeetingRoomRequest
     *
     * @return CreateMeetingRoomResponse CreateMeetingRoomResponse
     */
    public function createMeetingRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateMeetingRoomHeaders([]);

        return $this->createMeetingRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建会议室分组
     *  *
     * @param CreateMeetingRoomGroupRequest $tmpReq    CreateMeetingRoomGroupRequest
     * @param CreateMeetingRoomGroupHeaders $tmpHeader CreateMeetingRoomGroupHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateMeetingRoomGroupResponse CreateMeetingRoomGroupResponse
     */
    public function createMeetingRoomGroupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMeetingRoomGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateMeetingRoomGroupShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->parentGroupId)) {
            $body['ParentGroupId'] = $request->parentGroupId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMeetingRoomGroup',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/createMeetingRoomGroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMeetingRoomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建会议室分组
     *  *
     * @param CreateMeetingRoomGroupRequest $request CreateMeetingRoomGroupRequest
     *
     * @return CreateMeetingRoomGroupResponse CreateMeetingRoomGroupResponse
     */
    public function createMeetingRoomGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateMeetingRoomGroupHeaders([]);

        return $this->createMeetingRoomGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 新增或更新表单实例
     *  *
     * @param CreateOrUpdateFormDataRequest $request   CreateOrUpdateFormDataRequest
     * @param CreateOrUpdateFormDataHeaders $tmpHeader CreateOrUpdateFormDataHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateOrUpdateFormDataResponse CreateOrUpdateFormDataResponse
     */
    public function createOrUpdateFormDataWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new CreateOrUpdateFormDataShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->formDataJson)) {
            $body['FormDataJson'] = $request->formDataJson;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->noExecuteExpression)) {
            $body['NoExecuteExpression'] = $request->noExecuteExpression;
        }
        if (!Utils::isUnset($request->searchCondition)) {
            $body['SearchCondition'] = $request->searchCondition;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrUpdateFormData',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/createOrUpdateFormData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrUpdateFormDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 新增或更新表单实例
     *  *
     * @param CreateOrUpdateFormDataRequest $request CreateOrUpdateFormDataRequest
     *
     * @return CreateOrUpdateFormDataResponse CreateOrUpdateFormDataResponse
     */
    public function createOrUpdateFormData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateOrUpdateFormDataHeaders([]);

        return $this->createOrUpdateFormDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建荣誉勋章模板
     *  *
     * @param CreateOrgHonorTemplateRequest $tmpReq    CreateOrgHonorTemplateRequest
     * @param CreateOrgHonorTemplateHeaders $tmpHeader CreateOrgHonorTemplateHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateOrgHonorTemplateResponse CreateOrgHonorTemplateResponse
     */
    public function createOrgHonorTemplateWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateOrgHonorTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateOrgHonorTemplateShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->avatarFrameMediaId)) {
            $body['avatarFrameMediaId'] = $request->avatarFrameMediaId;
        }
        if (!Utils::isUnset($request->defaultBgColor)) {
            $body['defaultBgColor'] = $request->defaultBgColor;
        }
        if (!Utils::isUnset($request->medalDesc)) {
            $body['medalDesc'] = $request->medalDesc;
        }
        if (!Utils::isUnset($request->medalMediaId)) {
            $body['medalMediaId'] = $request->medalMediaId;
        }
        if (!Utils::isUnset($request->medalName)) {
            $body['medalName'] = $request->medalName;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['orgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateOrgHonorTemplate',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/aliding/v1/honor/createOrgHonorTemplate',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateOrgHonorTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建荣誉勋章模板
     *  *
     * @param CreateOrgHonorTemplateRequest $request CreateOrgHonorTemplateRequest
     *
     * @return CreateOrgHonorTemplateResponse CreateOrgHonorTemplateResponse
     */
    public function createOrgHonorTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateOrgHonorTemplateHeaders([]);

        return $this->createOrgHonorTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建钉钉个人待办任务
     *  *
     * @param CreatePersonalTodoTaskRequest $tmpReq    CreatePersonalTodoTaskRequest
     * @param CreatePersonalTodoTaskHeaders $tmpHeader CreatePersonalTodoTaskHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreatePersonalTodoTaskResponse CreatePersonalTodoTaskResponse
     */
    public function createPersonalTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreatePersonalTodoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreatePersonalTodoTaskShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->executorIds)) {
            $request->executorIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'ExecutorIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->notifyConfigs)) {
            $request->notifyConfigsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notifyConfigs, 'NotifyConfigs', 'json');
        }
        if (!Utils::isUnset($tmpReq->participantIds)) {
            $request->participantIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->participantIds, 'ParticipantIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dueTime)) {
            $body['DueTime'] = $request->dueTime;
        }
        if (!Utils::isUnset($request->executorIdsShrink)) {
            $body['ExecutorIds'] = $request->executorIdsShrink;
        }
        if (!Utils::isUnset($request->notifyConfigsShrink)) {
            $body['NotifyConfigs'] = $request->notifyConfigsShrink;
        }
        if (!Utils::isUnset($request->participantIdsShrink)) {
            $body['ParticipantIds'] = $request->participantIdsShrink;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['Subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePersonalTodoTask',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/task/createPersonalTodoTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePersonalTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建钉钉个人待办任务
     *  *
     * @param CreatePersonalTodoTaskRequest $request CreatePersonalTodoTaskRequest
     *
     * @return CreatePersonalTodoTaskResponse CreatePersonalTodoTaskResponse
     */
    public function createPersonalTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreatePersonalTodoTaskHeaders([]);

        return $this->createPersonalTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建日志
     *  *
     * @param CreateReportRequest $tmpReq    CreateReportRequest
     * @param CreateReportHeaders $tmpHeader CreateReportHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateReportResponse CreateReportResponse
     */
    public function createReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->contents)) {
            $request->contentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'Contents', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->toCids)) {
            $request->toCidsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->toCids, 'ToCids', 'json');
        }
        if (!Utils::isUnset($tmpReq->toUserids)) {
            $request->toUseridsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->toUserids, 'ToUserids', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->contentsShrink)) {
            $body['Contents'] = $request->contentsShrink;
        }
        if (!Utils::isUnset($request->ddFrom)) {
            $body['DdFrom'] = $request->ddFrom;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->toChat)) {
            $body['ToChat'] = $request->toChat;
        }
        if (!Utils::isUnset($request->toCidsShrink)) {
            $body['ToCids'] = $request->toCidsShrink;
        }
        if (!Utils::isUnset($request->toUseridsShrink)) {
            $body['ToUserids'] = $request->toUseridsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/createReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建日志
     *  *
     * @param CreateReportRequest $request CreateReportRequest
     *
     * @return CreateReportResponse CreateReportResponse
     */
    public function createReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateReportHeaders([]);

        return $this->createReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建场景群
     *  *
     * @param CreateScenegroupRequest $request   CreateScenegroupRequest
     * @param CreateScenegroupHeaders $tmpHeader CreateScenegroupHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateScenegroupResponse CreateScenegroupResponse
     */
    public function createScenegroupWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new CreateScenegroupShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->addFriendForbidden)) {
            $body['AddFriendForbidden'] = $request->addFriendForbidden;
        }
        if (!Utils::isUnset($request->allMembersCanCreateCalendar)) {
            $body['AllMembersCanCreateCalendar'] = $request->allMembersCanCreateCalendar;
        }
        if (!Utils::isUnset($request->allMembersCanCreateMcsConf)) {
            $body['AllMembersCanCreateMcsConf'] = $request->allMembersCanCreateMcsConf;
        }
        if (!Utils::isUnset($request->chatBannedType)) {
            $body['ChatBannedType'] = $request->chatBannedType;
        }
        if (!Utils::isUnset($request->groupEmailDisabled)) {
            $body['GroupEmailDisabled'] = $request->groupEmailDisabled;
        }
        if (!Utils::isUnset($request->groupLiveSwitch)) {
            $body['GroupLiveSwitch'] = $request->groupLiveSwitch;
        }
        if (!Utils::isUnset($request->icon)) {
            $body['Icon'] = $request->icon;
        }
        if (!Utils::isUnset($request->managementType)) {
            $body['ManagementType'] = $request->managementType;
        }
        if (!Utils::isUnset($request->membersToAdminChat)) {
            $body['MembersToAdminChat'] = $request->membersToAdminChat;
        }
        if (!Utils::isUnset($request->mentionAllAuthority)) {
            $body['MentionAllAuthority'] = $request->mentionAllAuthority;
        }
        if (!Utils::isUnset($request->onlyAdminCanDing)) {
            $body['OnlyAdminCanDing'] = $request->onlyAdminCanDing;
        }
        if (!Utils::isUnset($request->onlyAdminCanSetMsgTop)) {
            $body['OnlyAdminCanSetMsgTop'] = $request->onlyAdminCanSetMsgTop;
        }
        if (!Utils::isUnset($request->searchable)) {
            $body['Searchable'] = $request->searchable;
        }
        if (!Utils::isUnset($request->showHistoryType)) {
            $body['ShowHistoryType'] = $request->showHistoryType;
        }
        if (!Utils::isUnset($request->subadminIds)) {
            $body['SubadminIds'] = $request->subadminIds;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userIds)) {
            $body['UserIds'] = $request->userIds;
        }
        if (!Utils::isUnset($request->uuid)) {
            $body['Uuid'] = $request->uuid;
        }
        if (!Utils::isUnset($request->validationType)) {
            $body['ValidationType'] = $request->validationType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateScenegroup',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/im/createScenegroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScenegroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建场景群
     *  *
     * @param CreateScenegroupRequest $request CreateScenegroupRequest
     *
     * @return CreateScenegroupResponse CreateScenegroupResponse
     */
    public function createScenegroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateScenegroupHeaders([]);

        return $this->createScenegroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建预约会议
     *  *
     * @param CreateScheduleConferenceRequest $tmpReq    CreateScheduleConferenceRequest
     * @param CreateScheduleConferenceHeaders $tmpHeader CreateScheduleConferenceHeaders
     * @param RuntimeOptions                  $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateScheduleConferenceResponse CreateScheduleConferenceResponse
     */
    public function createScheduleConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateScheduleConferenceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateScheduleConferenceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateScheduleConference',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/createScheduleConference',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScheduleConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建预约会议
     *  *
     * @param CreateScheduleConferenceRequest $request CreateScheduleConferenceRequest
     *
     * @return CreateScheduleConferenceResponse CreateScheduleConferenceResponse
     */
    public function createScheduleConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateScheduleConferenceHeaders([]);

        return $this->createScheduleConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发布钉钉搜索穹顶
     *  *
     * @param CreateSearchDomeRequest $tmpReq    CreateSearchDomeRequest
     * @param CreateSearchDomeHeaders $tmpHeader CreateSearchDomeHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateSearchDomeResponse CreateSearchDomeResponse
     */
    public function createSearchDomeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSearchDomeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateSearchDomeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->userIdList)) {
            $request->userIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userIdList, 'UserIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resId)) {
            $body['ResId'] = $request->resId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->userIdListShrink)) {
            $body['UserIdList'] = $request->userIdListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSearchDome',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/watt/createSearchDome',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSearchDomeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布钉钉搜索穹顶
     *  *
     * @param CreateSearchDomeRequest $request CreateSearchDomeRequest
     *
     * @return CreateSearchDomeResponse CreateSearchDomeResponse
     */
    public function createSearchDome($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSearchDomeHeaders([]);

        return $this->createSearchDomeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发布钉钉搜索关键词
     *  *
     * @param CreateSearchKeywordRequest $tmpReq    CreateSearchKeywordRequest
     * @param CreateSearchKeywordHeaders $tmpHeader CreateSearchKeywordHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateSearchKeywordResponse CreateSearchKeywordResponse
     */
    public function createSearchKeywordWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSearchKeywordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateSearchKeywordShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->userIdList)) {
            $request->userIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userIdList, 'UserIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resId)) {
            $body['ResId'] = $request->resId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->userIdListShrink)) {
            $body['UserIdList'] = $request->userIdListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSearchKeyword',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/watt/createSearchKeyword',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSearchKeywordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发布钉钉搜索关键词
     *  *
     * @param CreateSearchKeywordRequest $request CreateSearchKeywordRequest
     *
     * @return CreateSearchKeywordResponse CreateSearchKeywordResponse
     */
    public function createSearchKeyword($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSearchKeywordHeaders([]);

        return $this->createSearchKeywordWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建工作表
     *  *
     * @param CreateSheetRequest $tmpReq    CreateSheetRequest
     * @param CreateSheetHeaders $tmpHeader CreateSheetHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateSheetResponse CreateSheetResponse
     */
    public function createSheetWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSheetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateSheetShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSheet',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/createSheet',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSheetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建工作表
     *  *
     * @param CreateSheetRequest $request CreateSheetRequest
     *
     * @return CreateSheetResponse CreateSheetResponse
     */
    public function createSheet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSheetHeaders([]);

        return $this->createSheetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建订阅日历
     *  *
     * @param CreateSubscribedCalendarRequest $tmpReq    CreateSubscribedCalendarRequest
     * @param CreateSubscribedCalendarHeaders $tmpHeader CreateSubscribedCalendarHeaders
     * @param RuntimeOptions                  $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateSubscribedCalendarResponse CreateSubscribedCalendarResponse
     */
    public function createSubscribedCalendarWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSubscribedCalendarShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateSubscribedCalendarShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->managers)) {
            $request->managersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->managers, 'Managers', 'json');
        }
        if (!Utils::isUnset($tmpReq->subscribeScope)) {
            $request->subscribeScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subscribeScope, 'SubscribeScope', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->managersShrink)) {
            $body['Managers'] = $request->managersShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->subscribeScopeShrink)) {
            $body['SubscribeScope'] = $request->subscribeScopeShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSubscribedCalendar',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/createSubscribedCalendar',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSubscribedCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建订阅日历
     *  *
     * @param CreateSubscribedCalendarRequest $request CreateSubscribedCalendarRequest
     *
     * @return CreateSubscribedCalendarResponse CreateSubscribedCalendarResponse
     */
    public function createSubscribedCalendar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSubscribedCalendarHeaders([]);

        return $this->createSubscribedCalendarWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建代办
     *  *
     * @param CreateTodoTaskRequest $tmpReq    CreateTodoTaskRequest
     * @param CreateTodoTaskHeaders $tmpHeader CreateTodoTaskHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateTodoTaskResponse CreateTodoTaskResponse
     */
    public function createTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTodoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateTodoTaskShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->contentFieldList)) {
            $request->contentFieldListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contentFieldList, 'contentFieldList', 'json');
        }
        if (!Utils::isUnset($tmpReq->detailUrl)) {
            $request->detailUrlShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->detailUrl, 'detailUrl', 'json');
        }
        if (!Utils::isUnset($tmpReq->executorIds)) {
            $request->executorIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'executorIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->notifyConfigs)) {
            $request->notifyConfigsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notifyConfigs, 'notifyConfigs', 'json');
        }
        if (!Utils::isUnset($tmpReq->participantIds)) {
            $request->participantIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->participantIds, 'participantIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->operatorId)) {
            $query['operatorId'] = $request->operatorId;
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->contentFieldListShrink)) {
            $body['contentFieldList'] = $request->contentFieldListShrink;
        }
        if (!Utils::isUnset($request->creatorId)) {
            $body['creatorId'] = $request->creatorId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->detailUrlShrink)) {
            $body['detailUrl'] = $request->detailUrlShrink;
        }
        if (!Utils::isUnset($request->dueTime)) {
            $body['dueTime'] = $request->dueTime;
        }
        if (!Utils::isUnset($request->executorIdsShrink)) {
            $body['executorIds'] = $request->executorIdsShrink;
        }
        if (!Utils::isUnset($request->isOnlyShowExecutor)) {
            $body['isOnlyShowExecutor'] = $request->isOnlyShowExecutor;
        }
        if (!Utils::isUnset($request->notifyConfigsShrink)) {
            $body['notifyConfigs'] = $request->notifyConfigsShrink;
        }
        if (!Utils::isUnset($request->participantIdsShrink)) {
            $body['participantIds'] = $request->participantIdsShrink;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $body['sourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['subject'] = $request->subject;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTodoTask',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/task/createTodoTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建代办
     *  *
     * @param CreateTodoTaskRequest $request CreateTodoTaskRequest
     *
     * @return CreateTodoTaskResponse CreateTodoTaskResponse
     */
    public function createTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateTodoTaskHeaders([]);

        return $this->createTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建视频会议
     *  *
     * @param CreateVideoConferenceRequest $tmpReq    CreateVideoConferenceRequest
     * @param CreateVideoConferenceHeaders $tmpHeader CreateVideoConferenceHeaders
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateVideoConferenceResponse CreateVideoConferenceResponse
     */
    public function createVideoConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateVideoConferenceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateVideoConferenceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->inviteUserIds)) {
            $request->inviteUserIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inviteUserIds, 'InviteUserIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->confTitle)) {
            $body['ConfTitle'] = $request->confTitle;
        }
        if (!Utils::isUnset($request->inviteCaller)) {
            $body['InviteCaller'] = $request->inviteCaller;
        }
        if (!Utils::isUnset($request->inviteUserIdsShrink)) {
            $body['InviteUserIds'] = $request->inviteUserIdsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVideoConference',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/createVideoConference',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVideoConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建视频会议
     *  *
     * @param CreateVideoConferenceRequest $request CreateVideoConferenceRequest
     *
     * @return CreateVideoConferenceResponse CreateVideoConferenceResponse
     */
    public function createVideoConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateVideoConferenceHeaders([]);

        return $this->createVideoConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建知识库
     *  *
     * @param CreateWorkspaceRequest $tmpReq    CreateWorkspaceRequest
     * @param CreateWorkspaceHeaders $tmpHeader CreateWorkspaceHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateWorkspaceResponse CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateWorkspaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateWorkspaceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspace',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/createWorkspace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建知识库
     *  *
     * @param CreateWorkspaceRequest $request CreateWorkspaceRequest
     *
     * @return CreateWorkspaceResponse CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateWorkspaceHeaders([]);

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建知识库文档
     *  *
     * @param CreateWorkspaceDocRequest $tmpReq    CreateWorkspaceDocRequest
     * @param CreateWorkspaceDocHeaders $tmpHeader CreateWorkspaceDocHeaders
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateWorkspaceDocResponse CreateWorkspaceDocResponse
     */
    public function createWorkspaceDocWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateWorkspaceDocShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateWorkspaceDocShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentNodeId)) {
            $body['ParentNodeId'] = $request->parentNodeId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $body['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspaceDoc',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/createWorkspaceDoc',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建知识库文档
     *  *
     * @param CreateWorkspaceDocRequest $request CreateWorkspaceDocRequest
     *
     * @return CreateWorkspaceDocResponse CreateWorkspaceDocResponse
     */
    public function createWorkspaceDoc($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateWorkspaceDocHeaders([]);

        return $this->createWorkspaceDocWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除指定列
     *  *
     * @param DeleteColumnsRequest $tmpReq    DeleteColumnsRequest
     * @param DeleteColumnsHeaders $tmpHeader DeleteColumnsHeaders
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteColumnsResponse DeleteColumnsResponse
     */
    public function deleteColumnsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteColumnsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteColumnsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->column)) {
            $body['Column'] = $request->column;
        }
        if (!Utils::isUnset($request->columnCount)) {
            $body['ColumnCount'] = $request->columnCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteColumns',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteColumns',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定列
     *  *
     * @param DeleteColumnsRequest $request DeleteColumnsRequest
     *
     * @return DeleteColumnsResponse DeleteColumnsResponse
     */
    public function deleteColumns($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteColumnsHeaders([]);

        return $this->deleteColumnsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除钉盘空间
     *  *
     * @param DeleteDriveSpaceRequest $tmpReq    DeleteDriveSpaceRequest
     * @param DeleteDriveSpaceHeaders $tmpHeader DeleteDriveSpaceHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteDriveSpaceResponse DeleteDriveSpaceResponse
     */
    public function deleteDriveSpaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteDriveSpaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteDriveSpaceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDriveSpace',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteDriveSpace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDriveSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除钉盘空间
     *  *
     * @param DeleteDriveSpaceRequest $request DeleteDriveSpaceRequest
     *
     * @return DeleteDriveSpaceResponse DeleteDriveSpaceResponse
     */
    public function deleteDriveSpace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteDriveSpaceHeaders([]);

        return $this->deleteDriveSpaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除日程
     *  *
     * @param DeleteEventRequest $request   DeleteEventRequest
     * @param DeleteEventHeaders $tmpHeader DeleteEventHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteEventResponse DeleteEventResponse
     */
    public function deleteEventWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new DeleteEventShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->pushNotification)) {
            $body['pushNotification'] = $request->pushNotification;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteEvent',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/deleteEvent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除日程
     *  *
     * @param DeleteEventRequest $request DeleteEventRequest
     *
     * @return DeleteEventResponse DeleteEventResponse
     */
    public function deleteEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteEventHeaders([]);

        return $this->deleteEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除表单数据
     *  *
     * @param DeleteFormDataRequest $request   DeleteFormDataRequest
     * @param DeleteFormDataHeaders $tmpHeader DeleteFormDataHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteFormDataResponse DeleteFormDataResponse
     */
    public function deleteFormDataWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new DeleteFormDataShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->formInstanceId)) {
            $body['FormInstanceId'] = $request->formInstanceId;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteFormData',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/deleteFormData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFormDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除表单数据
     *  *
     * @param DeleteFormDataRequest $request DeleteFormDataRequest
     *
     * @return DeleteFormDataResponse DeleteFormDataResponse
     */
    public function deleteFormData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteFormDataHeaders([]);

        return $this->deleteFormDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteInstanceRequest $request   DeleteInstanceRequest
     * @param DeleteInstanceHeaders $tmpHeader DeleteInstanceHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new DeleteInstanceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->processInstanceId)) {
            $body['ProcessInstanceId'] = $request->processInstanceId;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/deleteInstance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteInstanceHeaders([]);

        return $this->deleteInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除直播
     *  *
     * @param DeleteLiveRequest $tmpReq    DeleteLiveRequest
     * @param DeleteLiveHeaders $tmpHeader DeleteLiveHeaders
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveResponse DeleteLiveResponse
     */
    public function deleteLiveWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteLiveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteLiveShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteLive',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/deleteLive',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除直播
     *  *
     * @param DeleteLiveRequest $request DeleteLiveRequest
     *
     * @return DeleteLiveResponse DeleteLiveResponse
     */
    public function deleteLive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteLiveHeaders([]);

        return $this->deleteLiveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除会议室
     *  *
     * @param DeleteMeetingRoomRequest $tmpReq    DeleteMeetingRoomRequest
     * @param DeleteMeetingRoomHeaders $tmpHeader DeleteMeetingRoomHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteMeetingRoomResponse DeleteMeetingRoomResponse
     */
    public function deleteMeetingRoomWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteMeetingRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteMeetingRoomShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMeetingRoom',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/deleteMeetingRoom',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMeetingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除会议室
     *  *
     * @param DeleteMeetingRoomRequest $request DeleteMeetingRoomRequest
     *
     * @return DeleteMeetingRoomResponse DeleteMeetingRoomResponse
     */
    public function deleteMeetingRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteMeetingRoomHeaders([]);

        return $this->deleteMeetingRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除会议室分组
     *  *
     * @param DeleteMeetingRoomGroupRequest $tmpReq    DeleteMeetingRoomGroupRequest
     * @param DeleteMeetingRoomGroupHeaders $tmpHeader DeleteMeetingRoomGroupHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteMeetingRoomGroupResponse DeleteMeetingRoomGroupResponse
     */
    public function deleteMeetingRoomGroupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteMeetingRoomGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteMeetingRoomGroupShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMeetingRoomGroup',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/deleteMeetingRoomGroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMeetingRoomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除会议室分组
     *  *
     * @param DeleteMeetingRoomGroupRequest $request DeleteMeetingRoomGroupRequest
     *
     * @return DeleteMeetingRoomGroupResponse DeleteMeetingRoomGroupResponse
     */
    public function deleteMeetingRoomGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteMeetingRoomGroupHeaders([]);

        return $this->deleteMeetingRoomGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除指定行
     *  *
     * @param DeleteRowsRequest $tmpReq    DeleteRowsRequest
     * @param DeleteRowsHeaders $tmpHeader DeleteRowsHeaders
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteRowsResponse DeleteRowsResponse
     */
    public function deleteRowsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteRowsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteRowsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->row)) {
            $body['Row'] = $request->row;
        }
        if (!Utils::isUnset($request->rowCount)) {
            $body['RowCount'] = $request->rowCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRows',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteRows',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除指定行
     *  *
     * @param DeleteRowsRequest $request DeleteRowsRequest
     *
     * @return DeleteRowsResponse DeleteRowsResponse
     */
    public function deleteRows($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteRowsHeaders([]);

        return $this->deleteRowsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除群成员
     *  *
     * @param DeleteScenegroupMemberRequest $request   DeleteScenegroupMemberRequest
     * @param DeleteScenegroupMemberHeaders $tmpHeader DeleteScenegroupMemberHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteScenegroupMemberResponse DeleteScenegroupMemberResponse
     */
    public function deleteScenegroupMemberWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new DeleteScenegroupMemberShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->openConversationId)) {
            $body['OpenConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->userIds)) {
            $body['UserIds'] = $request->userIds;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteScenegroupMember',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/im/deleteScenegroupMember',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteScenegroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除群成员
     *  *
     * @param DeleteScenegroupMemberRequest $request DeleteScenegroupMemberRequest
     *
     * @return DeleteScenegroupMemberResponse DeleteScenegroupMemberResponse
     */
    public function deleteScenegroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteScenegroupMemberHeaders([]);

        return $this->deleteScenegroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除一个工作表
     *  *
     * @param DeleteSheetRequest $tmpReq    DeleteSheetRequest
     * @param DeleteSheetHeaders $tmpHeader DeleteSheetHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteSheetResponse DeleteSheetResponse
     */
    public function deleteSheetWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteSheetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteSheetShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSheet',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteSheet',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSheetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除一个工作表
     *  *
     * @param DeleteSheetRequest $request DeleteSheetRequest
     *
     * @return DeleteSheetResponse DeleteSheetResponse
     */
    public function deleteSheet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteSheetHeaders([]);

        return $this->deleteSheetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除订阅日历
     *  *
     * @param DeleteSubscribedCalendarRequest $request   DeleteSubscribedCalendarRequest
     * @param DeleteSubscribedCalendarHeaders $tmpHeader DeleteSubscribedCalendarHeaders
     * @param RuntimeOptions                  $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteSubscribedCalendarResponse DeleteSubscribedCalendarResponse
     */
    public function deleteSubscribedCalendarWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new DeleteSubscribedCalendarShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSubscribedCalendar',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/deleteSubscribedCalendar',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSubscribedCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除订阅日历
     *  *
     * @param DeleteSubscribedCalendarRequest $request DeleteSubscribedCalendarRequest
     *
     * @return DeleteSubscribedCalendarResponse DeleteSubscribedCalendarResponse
     */
    public function deleteSubscribedCalendar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteSubscribedCalendarHeaders([]);

        return $this->deleteSubscribedCalendarWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除代办
     *  *
     * @param DeleteTodoTaskRequest $tmpReq    DeleteTodoTaskRequest
     * @param DeleteTodoTaskHeaders $tmpHeader DeleteTodoTaskHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteTodoTaskResponse DeleteTodoTaskResponse
     */
    public function deleteTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteTodoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteTodoTaskShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->operatorId)) {
            $body['operatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteTodoTask',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/task/deleteTodoTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除代办
     *  *
     * @param DeleteTodoTaskRequest $request DeleteTodoTaskRequest
     *
     * @return DeleteTodoTaskResponse DeleteTodoTaskResponse
     */
    public function deleteTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteTodoTaskHeaders([]);

        return $this->deleteTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除知识库文档成员
     *  *
     * @param DeleteWorkspaceDocMembersRequest $tmpReq    DeleteWorkspaceDocMembersRequest
     * @param DeleteWorkspaceDocMembersHeaders $tmpHeader DeleteWorkspaceDocMembersHeaders
     * @param RuntimeOptions                   $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkspaceDocMembersResponse DeleteWorkspaceDocMembersResponse
     */
    public function deleteWorkspaceDocMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteWorkspaceDocMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteWorkspaceDocMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkspaceDocMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteWorkspaceDocMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkspaceDocMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除知识库文档成员
     *  *
     * @param DeleteWorkspaceDocMembersRequest $request DeleteWorkspaceDocMembersRequest
     *
     * @return DeleteWorkspaceDocMembersResponse DeleteWorkspaceDocMembersResponse
     */
    public function deleteWorkspaceDocMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteWorkspaceDocMembersHeaders([]);

        return $this->deleteWorkspaceDocMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除知识库成员
     *  *
     * @param DeleteWorkspaceMembersRequest $tmpReq    DeleteWorkspaceMembersRequest
     * @param DeleteWorkspaceMembersHeaders $tmpHeader DeleteWorkspaceMembersHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteWorkspaceMembersResponse DeleteWorkspaceMembersResponse
     */
    public function deleteWorkspaceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteWorkspaceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteWorkspaceMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkspaceMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteWorkspaceMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkspaceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除知识库成员
     *  *
     * @param DeleteWorkspaceMembersRequest $request DeleteWorkspaceMembersRequest
     *
     * @return DeleteWorkspaceMembersResponse DeleteWorkspaceMembersResponse
     */
    public function deleteWorkspaceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteWorkspaceMembersHeaders([]);

        return $this->deleteWorkspaceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量执行宜搭审批任务
     *  *
     * @param ExecuteBatchTaskRequest $request   ExecuteBatchTaskRequest
     * @param ExecuteBatchTaskHeaders $tmpHeader ExecuteBatchTaskHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return ExecuteBatchTaskResponse ExecuteBatchTaskResponse
     */
    public function executeBatchTaskWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new ExecuteBatchTaskShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->outResult)) {
            $body['OutResult'] = $request->outResult;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->taskInformationList)) {
            $body['TaskInformationList'] = $request->taskInformationList;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteBatchTask',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/executeBatchTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteBatchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量执行宜搭审批任务
     *  *
     * @param ExecuteBatchTaskRequest $request ExecuteBatchTaskRequest
     *
     * @return ExecuteBatchTaskResponse ExecuteBatchTaskResponse
     */
    public function executeBatchTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExecuteBatchTaskHeaders([]);

        return $this->executeBatchTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 执行宜搭的审批任务
     *  *
     * @param ExecutePlatformTaskRequest $request   ExecutePlatformTaskRequest
     * @param ExecutePlatformTaskHeaders $tmpHeader ExecutePlatformTaskHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return ExecutePlatformTaskResponse ExecutePlatformTaskResponse
     */
    public function executePlatformTaskWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new ExecutePlatformTaskShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->formDataJson)) {
            $body['FormDataJson'] = $request->formDataJson;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->noExecuteExpressions)) {
            $body['NoExecuteExpressions'] = $request->noExecuteExpressions;
        }
        if (!Utils::isUnset($request->outResult)) {
            $body['OutResult'] = $request->outResult;
        }
        if (!Utils::isUnset($request->processInstanceId)) {
            $body['ProcessInstanceId'] = $request->processInstanceId;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecutePlatformTask',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/executePlatformTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecutePlatformTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 执行宜搭的审批任务
     *  *
     * @param ExecutePlatformTaskRequest $request ExecutePlatformTaskRequest
     *
     * @return ExecutePlatformTaskResponse ExecutePlatformTaskResponse
     */
    public function executePlatformTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExecutePlatformTaskHeaders([]);

        return $this->executePlatformTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 同意或拒绝宜搭审批任务(执行审批任务)
     *  *
     * @param ExecuteTaskRequest $request   ExecuteTaskRequest
     * @param ExecuteTaskHeaders $tmpHeader ExecuteTaskHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return ExecuteTaskResponse ExecuteTaskResponse
     */
    public function executeTaskWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new ExecuteTaskShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->digitalSignUrl)) {
            $body['DigitalSignUrl'] = $request->digitalSignUrl;
        }
        if (!Utils::isUnset($request->formDataJson)) {
            $body['FormDataJson'] = $request->formDataJson;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->noExecuteExpressions)) {
            $body['NoExecuteExpressions'] = $request->noExecuteExpressions;
        }
        if (!Utils::isUnset($request->outResult)) {
            $body['OutResult'] = $request->outResult;
        }
        if (!Utils::isUnset($request->processInstanceId)) {
            $body['ProcessInstanceId'] = $request->processInstanceId;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteTask',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/executeTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 同意或拒绝宜搭审批任务(执行审批任务)
     *  *
     * @param ExecuteTaskRequest $request ExecuteTaskRequest
     *
     * @return ExecuteTaskResponse ExecuteTaskResponse
     */
    public function executeTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExecuteTaskHeaders([]);

        return $this->executeTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 群扩容
     *  *
     * @param ExpandGroupCapacityRequest $tmpReq    ExpandGroupCapacityRequest
     * @param ExpandGroupCapacityHeaders $tmpHeader ExpandGroupCapacityHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return ExpandGroupCapacityResponse ExpandGroupCapacityResponse
     */
    public function expandGroupCapacityWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExpandGroupCapacityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ExpandGroupCapacityShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->openConversationId)) {
            $body['OpenConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExpandGroupCapacity',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/aliding/v1/im/expandGroupCapacity',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExpandGroupCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 群扩容
     *  *
     * @param ExpandGroupCapacityRequest $request ExpandGroupCapacityRequest
     *
     * @return ExpandGroupCapacityResponse ExpandGroupCapacityResponse
     */
    public function expandGroupCapacity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExpandGroupCapacityHeaders([]);

        return $this->expandGroupCapacityWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取流程设计的节点信息
     *  *
     * @param GetActivityListRequest $request   GetActivityListRequest
     * @param GetActivityListHeaders $tmpHeader GetActivityListHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetActivityListResponse GetActivityListResponse
     */
    public function getActivityListWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetActivityListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->processCode)) {
            $body['ProcessCode'] = $request->processCode;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetActivityList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getActivityList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetActivityListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流程设计的节点信息
     *  *
     * @param GetActivityListRequest $request GetActivityListRequest
     *
     * @return GetActivityListResponse GetActivityListResponse
     */
    public function getActivityList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetActivityListHeaders([]);

        return $this->getActivityListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取所有工作表
     *  *
     * @param GetAllSheetsRequest $tmpReq    GetAllSheetsRequest
     * @param GetAllSheetsHeaders $tmpHeader GetAllSheetsHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetAllSheetsResponse GetAllSheetsResponse
     */
    public function getAllSheetsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetAllSheetsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetAllSheetsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAllSheets',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/getAllSheets',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAllSheetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取所有工作表
     *  *
     * @param GetAllSheetsRequest $request GetAllSheetsRequest
     *
     * @return GetAllSheetsResponse GetAllSheetsResponse
     */
    public function getAllSheets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetAllSheetsHeaders([]);

        return $this->getAllSheetsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取群存储空间信息
     *  *
     * @param GetConversaionSpaceRequest $tmpReq    GetConversaionSpaceRequest
     * @param GetConversaionSpaceHeaders $tmpHeader GetConversaionSpaceHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetConversaionSpaceResponse GetConversaionSpaceResponse
     */
    public function getConversaionSpaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetConversaionSpaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetConversaionSpaceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->openConversationId)) {
            $body['OpenConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetConversaionSpace',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/getConversaionSpace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConversaionSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取群存储空间信息
     *  *
     * @param GetConversaionSpaceRequest $request GetConversaionSpaceRequest
     *
     * @return GetConversaionSpaceResponse GetConversaionSpaceResponse
     */
    public function getConversaionSpace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetConversaionSpaceHeaders([]);

        return $this->getConversaionSpaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取组织内已完成的审批任务
     *  *
     * @param GetCorpAccomplishmentTasksRequest $request   GetCorpAccomplishmentTasksRequest
     * @param GetCorpAccomplishmentTasksHeaders $tmpHeader GetCorpAccomplishmentTasksHeaders
     * @param RuntimeOptions                    $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetCorpAccomplishmentTasksResponse GetCorpAccomplishmentTasksResponse
     */
    public function getCorpAccomplishmentTasksWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetCorpAccomplishmentTasksShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appTypes)) {
            $body['AppTypes'] = $request->appTypes;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['CorpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->createFromTimeGMT)) {
            $body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }
        if (!Utils::isUnset($request->createToTimeGMT)) {
            $body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->processCodes)) {
            $body['ProcessCodes'] = $request->processCodes;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCorpAccomplishmentTasks',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getCorpAccomplishmentTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCorpAccomplishmentTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取组织内已完成的审批任务
     *  *
     * @param GetCorpAccomplishmentTasksRequest $request GetCorpAccomplishmentTasksRequest
     *
     * @return GetCorpAccomplishmentTasksResponse GetCorpAccomplishmentTasksResponse
     */
    public function getCorpAccomplishmentTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetCorpAccomplishmentTasksHeaders([]);

        return $this->getCorpAccomplishmentTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取任务列表（组织维度）
     *  *
     * @param GetCorpTasksRequest $request   GetCorpTasksRequest
     * @param GetCorpTasksHeaders $tmpHeader GetCorpTasksHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetCorpTasksResponse GetCorpTasksResponse
     */
    public function getCorpTasksWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetCorpTasksShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appTypes)) {
            $body['AppTypes'] = $request->appTypes;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['CorpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->createFromTimeGMT)) {
            $body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }
        if (!Utils::isUnset($request->createToTimeGMT)) {
            $body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->processCodes)) {
            $body['ProcessCodes'] = $request->processCodes;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCorpTasks',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getCorpTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCorpTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务列表（组织维度）
     *  *
     * @param GetCorpTasksRequest $request GetCorpTasksRequest
     *
     * @return GetCorpTasksResponse GetCorpTasksResponse
     */
    public function getCorpTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetCorpTasksHeaders([]);

        return $this->getCorpTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 委托权限获取文档内容
     *  *
     * @param GetDocContentRequest $tmpReq    GetDocContentRequest
     * @param GetDocContentHeaders $tmpHeader GetDocContentHeaders
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetDocContentResponse GetDocContentResponse
     */
    public function getDocContentWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetDocContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetDocContentShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dentryUuid)) {
            $body['DentryUuid'] = $request->dentryUuid;
        }
        if (!Utils::isUnset($request->targetFormat)) {
            $body['TargetFormat'] = $request->targetFormat;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->userToken)) {
            $body['userToken'] = $request->userToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDocContent',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getDocContent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDocContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 委托权限获取文档内容
     *  *
     * @param GetDocContentRequest $request GetDocContentRequest
     *
     * @return GetDocContentResponse GetDocContentResponse
     */
    public function getDocContent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDocContentHeaders([]);

        return $this->getDocContentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 委托权限获取文档内容taskId
     *  *
     * @param GetDocContentTakIdRequest $tmpReq    GetDocContentTakIdRequest
     * @param GetDocContentTakIdHeaders $tmpHeader GetDocContentTakIdHeaders
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetDocContentTakIdResponse GetDocContentTakIdResponse
     */
    public function getDocContentTakIdWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetDocContentTakIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetDocContentTakIdShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dentryUuid)) {
            $body['DentryUuid'] = $request->dentryUuid;
        }
        if (!Utils::isUnset($request->targetFormat)) {
            $body['TargetFormat'] = $request->targetFormat;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDocContentTakId',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getDocContentTakId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDocContentTakIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 委托权限获取文档内容taskId
     *  *
     * @param GetDocContentTakIdRequest $request GetDocContentTakIdRequest
     *
     * @return GetDocContentTakIdResponse GetDocContentTakIdResponse
     */
    public function getDocContentTakId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDocContentTakIdHeaders([]);

        return $this->getDocContentTakIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询单个日程详情
     *  *
     * @param GetEventRequest $request   GetEventRequest
     * @param GetEventHeaders $tmpHeader GetEventHeaders
     * @param RuntimeOptions  $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetEventResponse GetEventResponse
     */
    public function getEventWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetEventShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->maxAttendees)) {
            $query['MaxAttendees'] = $request->maxAttendees;
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEvent',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/getEvent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单个日程详情
     *  *
     * @param GetEventRequest $request GetEventRequest
     *
     * @return GetEventResponse GetEventResponse
     */
    public function getEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetEventHeaders([]);

        return $this->getEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取表单内的组件信息
     *  *
     * @param GetFieldDefByUuidRequest $request   GetFieldDefByUuidRequest
     * @param GetFieldDefByUuidHeaders $tmpHeader GetFieldDefByUuidHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetFieldDefByUuidResponse GetFieldDefByUuidResponse
     */
    public function getFieldDefByUuidWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetFieldDefByUuidShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFieldDefByUuid',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getFieldDefByUuid',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFieldDefByUuidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取表单内的组件信息
     *  *
     * @param GetFieldDefByUuidRequest $request GetFieldDefByUuidRequest
     *
     * @return GetFieldDefByUuidResponse GetFieldDefByUuidResponse
     */
    public function getFieldDefByUuid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFieldDefByUuidHeaders([]);

        return $this->getFieldDefByUuidWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取文件下载信息
     *  *
     * @param GetFileDownloadInfoRequest $tmpReq    GetFileDownloadInfoRequest
     * @param GetFileDownloadInfoHeaders $tmpHeader GetFileDownloadInfoHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetFileDownloadInfoResponse GetFileDownloadInfoResponse
     */
    public function getFileDownloadInfoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetFileDownloadInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetFileDownloadInfoShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->option)) {
            $request->optionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dentryId)) {
            $body['DentryId'] = $request->dentryId;
        }
        if (!Utils::isUnset($request->optionShrink)) {
            $body['Option'] = $request->optionShrink;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFileDownloadInfo',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/getFileDownloadInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFileDownloadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文件下载信息
     *  *
     * @param GetFileDownloadInfoRequest $request GetFileDownloadInfoRequest
     *
     * @return GetFileDownloadInfoResponse GetFileDownloadInfoResponse
     */
    public function getFileDownloadInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFileDownloadInfoHeaders([]);

        return $this->getFileDownloadInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取表单组件定义列表
     *  *
     * @param GetFormComponentDefinitionListRequest $request   GetFormComponentDefinitionListRequest
     * @param GetFormComponentDefinitionListHeaders $tmpHeader GetFormComponentDefinitionListHeaders
     * @param RuntimeOptions                        $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetFormComponentDefinitionListResponse GetFormComponentDefinitionListResponse
     */
    public function getFormComponentDefinitionListWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetFormComponentDefinitionListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFormComponentDefinitionList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getFormComponentDefinitionList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFormComponentDefinitionListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取表单组件定义列表
     *  *
     * @param GetFormComponentDefinitionListRequest $request GetFormComponentDefinitionListRequest
     *
     * @return GetFormComponentDefinitionListResponse GetFormComponentDefinitionListResponse
     */
    public function getFormComponentDefinitionList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFormComponentDefinitionListHeaders([]);

        return $this->getFormComponentDefinitionListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询表单数据
     *  *
     * @param GetFormDataByIDRequest $request   GetFormDataByIDRequest
     * @param GetFormDataByIDHeaders $tmpHeader GetFormDataByIDHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetFormDataByIDResponse GetFormDataByIDResponse
     */
    public function getFormDataByIDWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetFormDataByIDShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFormDataByID',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getFormDataByID',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFormDataByIDResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询表单数据
     *  *
     * @param GetFormDataByIDRequest $request GetFormDataByIDRequest
     *
     * @return GetFormDataByIDResponse GetFormDataByIDResponse
     */
    public function getFormDataByID($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFormDataByIDHeaders([]);

        return $this->getFormDataByIDWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取指定应用下的表单列表
     *  *
     * @param GetFormListInAppRequest $request   GetFormListInAppRequest
     * @param GetFormListInAppHeaders $tmpHeader GetFormListInAppHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetFormListInAppResponse GetFormListInAppResponse
     */
    public function getFormListInAppWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetFormListInAppShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->formTypes)) {
            $body['FormTypes'] = $request->formTypes;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFormListInApp',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getFormListInApp',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFormListInAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定应用下的表单列表
     *  *
     * @param GetFormListInAppRequest $request GetFormListInAppRequest
     *
     * @return GetFormListInAppResponse GetFormListInAppResponse
     */
    public function getFormListInApp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFormListInAppHeaders([]);

        return $this->getFormListInAppWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询企业内部群成员
     *  *
     * @param GetInnerGroupMembersRequest $request   GetInnerGroupMembersRequest
     * @param GetInnerGroupMembersHeaders $tmpHeader GetInnerGroupMembersHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetInnerGroupMembersResponse GetInnerGroupMembersResponse
     */
    public function getInnerGroupMembersWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetInnerGroupMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            $body['OpenConversationId'] = $request->openConversationId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInnerGroupMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/im/getInnerGroupMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInnerGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询企业内部群成员
     *  *
     * @param GetInnerGroupMembersRequest $request GetInnerGroupMembersRequest
     *
     * @return GetInnerGroupMembersResponse GetInnerGroupMembersResponse
     */
    public function getInnerGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetInnerGroupMembersHeaders([]);

        return $this->getInnerGroupMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 根据流程实例ID获取流程实例
     *  *
     * @param GetInstanceByIdRequest $request   GetInstanceByIdRequest
     * @param GetInstanceByIdHeaders $tmpHeader GetInstanceByIdHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetInstanceByIdResponse GetInstanceByIdResponse
     */
    public function getInstanceByIdWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetInstanceByIdShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceById',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getInstanceById',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceByIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据流程实例ID获取流程实例
     *  *
     * @param GetInstanceByIdRequest $request GetInstanceByIdRequest
     *
     * @return GetInstanceByIdResponse GetInstanceByIdResponse
     */
    public function getInstanceById($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetInstanceByIdHeaders([]);

        return $this->getInstanceByIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取实例ID列表
     *  *
     * @param GetInstanceIdListRequest $request   GetInstanceIdListRequest
     * @param GetInstanceIdListHeaders $tmpHeader GetInstanceIdListHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetInstanceIdListResponse GetInstanceIdListResponse
     */
    public function getInstanceIdListWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetInstanceIdListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->approvedResult)) {
            $body['ApprovedResult'] = $request->approvedResult;
        }
        if (!Utils::isUnset($request->createFromTimeGMT)) {
            $body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }
        if (!Utils::isUnset($request->createToTimeGMT)) {
            $body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->instanceStatus)) {
            $body['InstanceStatus'] = $request->instanceStatus;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->modifiedFromTimeGMT)) {
            $body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }
        if (!Utils::isUnset($request->modifiedToTimeGMT)) {
            $body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }
        if (!Utils::isUnset($request->originatorId)) {
            $body['OriginatorId'] = $request->originatorId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchFieldJson)) {
            $body['SearchFieldJson'] = $request->searchFieldJson;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceIdList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getInstanceIdList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceIdListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例ID列表
     *  *
     * @param GetInstanceIdListRequest $request GetInstanceIdListRequest
     *
     * @return GetInstanceIdListResponse GetInstanceIdListResponse
     */
    public function getInstanceIdList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetInstanceIdListHeaders([]);

        return $this->getInstanceIdListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取流程实例
     *  *
     * @param GetInstancesRequest $request   GetInstancesRequest
     * @param GetInstancesHeaders $tmpHeader GetInstancesHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetInstancesResponse GetInstancesResponse
     */
    public function getInstancesWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetInstancesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->approvedResult)) {
            $body['ApprovedResult'] = $request->approvedResult;
        }
        if (!Utils::isUnset($request->createFromTimeGMT)) {
            $body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }
        if (!Utils::isUnset($request->createToTimeGMT)) {
            $body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->instanceStatus)) {
            $body['InstanceStatus'] = $request->instanceStatus;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->modifiedFromTimeGMT)) {
            $body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }
        if (!Utils::isUnset($request->modifiedToTimeGMT)) {
            $body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }
        if (!Utils::isUnset($request->orderConfigJson)) {
            $body['OrderConfigJson'] = $request->orderConfigJson;
        }
        if (!Utils::isUnset($request->originatorId)) {
            $body['OriginatorId'] = $request->originatorId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchFieldJson)) {
            $body['SearchFieldJson'] = $request->searchFieldJson;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstances',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getInstances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流程实例
     *  *
     * @param GetInstancesRequest $request GetInstancesRequest
     *
     * @return GetInstancesResponse GetInstancesResponse
     */
    public function getInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetInstancesHeaders([]);

        return $this->getInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 根据实例 ID 列表批量获取流程实例详情(批量获取流程实例列表)
     *  *
     * @param GetInstancesByIdListRequest $request   GetInstancesByIdListRequest
     * @param GetInstancesByIdListHeaders $tmpHeader GetInstancesByIdListHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetInstancesByIdListResponse GetInstancesByIdListResponse
     */
    public function getInstancesByIdListWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetInstancesByIdListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->processInstanceIds)) {
            $body['ProcessInstanceIds'] = $request->processInstanceIds;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstancesByIdList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getInstancesByIdList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstancesByIdListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据实例 ID 列表批量获取流程实例详情(批量获取流程实例列表)
     *  *
     * @param GetInstancesByIdListRequest $request GetInstancesByIdListRequest
     *
     * @return GetInstancesByIdListResponse GetInstancesByIdListResponse
     */
    public function getInstancesByIdList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetInstancesByIdListHeaders([]);

        return $this->getInstancesByIdListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取直播的可下载回放地址
     *  *
     * @param GetLiveReplayUrlRequest $tmpReq    GetLiveReplayUrlRequest
     * @param GetLiveReplayUrlHeaders $tmpHeader GetLiveReplayUrlHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetLiveReplayUrlResponse GetLiveReplayUrlResponse
     */
    public function getLiveReplayUrlWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetLiveReplayUrlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetLiveReplayUrlShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLiveReplayUrl',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/getLiveReplayUrl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLiveReplayUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取直播的可下载回放地址
     *  *
     * @param GetLiveReplayUrlRequest $request GetLiveReplayUrlRequest
     *
     * @return GetLiveReplayUrlResponse GetLiveReplayUrlResponse
     */
    public function getLiveReplayUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetLiveReplayUrlHeaders([]);

        return $this->getLiveReplayUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取组织内某人提交的任务
     *  *
     * @param GetMeCorpSubmissionRequest $request   GetMeCorpSubmissionRequest
     * @param GetMeCorpSubmissionHeaders $tmpHeader GetMeCorpSubmissionHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetMeCorpSubmissionResponse GetMeCorpSubmissionResponse
     */
    public function getMeCorpSubmissionWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetMeCorpSubmissionShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appTypes)) {
            $body['AppTypes'] = $request->appTypes;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['CorpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->createFromTimeGMT)) {
            $body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }
        if (!Utils::isUnset($request->createToTimeGMT)) {
            $body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->processCodes)) {
            $body['ProcessCodes'] = $request->processCodes;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMeCorpSubmission',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getMeCorpSubmission',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMeCorpSubmissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取组织内某人提交的任务
     *  *
     * @param GetMeCorpSubmissionRequest $request GetMeCorpSubmissionRequest
     *
     * @return GetMeCorpSubmissionResponse GetMeCorpSubmissionResponse
     */
    public function getMeCorpSubmission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMeCorpSubmissionHeaders([]);

        return $this->getMeCorpSubmissionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取会议室忙闲信息
     *  *
     * @param GetMeetingRoomsScheduleRequest $tmpReq    GetMeetingRoomsScheduleRequest
     * @param GetMeetingRoomsScheduleHeaders $tmpHeader GetMeetingRoomsScheduleHeaders
     * @param RuntimeOptions                 $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetMeetingRoomsScheduleResponse GetMeetingRoomsScheduleResponse
     */
    public function getMeetingRoomsScheduleWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetMeetingRoomsScheduleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetMeetingRoomsScheduleShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->roomIds)) {
            $request->roomIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomIds, 'RoomIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->roomIdsShrink)) {
            $body['RoomIds'] = $request->roomIdsShrink;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMeetingRoomsSchedule',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/getMeetingRoomsSchedule',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMeetingRoomsScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取会议室忙闲信息
     *  *
     * @param GetMeetingRoomsScheduleRequest $request GetMeetingRoomsScheduleRequest
     *
     * @return GetMeetingRoomsScheduleResponse GetMeetingRoomsScheduleResponse
     */
    public function getMeetingRoomsSchedule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMeetingRoomsScheduleHeaders([]);

        return $this->getMeetingRoomsScheduleWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取我的文档知识库信息
     *  *
     * @param GetMineWorkspaceRequest $tmpReq    GetMineWorkspaceRequest
     * @param GetMineWorkspaceHeaders $tmpHeader GetMineWorkspaceHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetMineWorkspaceResponse GetMineWorkspaceResponse
     */
    public function getMineWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetMineWorkspaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetMineWorkspaceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMineWorkspace',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getMineWorkspace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMineWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取我的文档知识库信息
     *  *
     * @param GetMineWorkspaceRequest $request GetMineWorkspaceRequest
     *
     * @return GetMineWorkspaceResponse GetMineWorkspaceResponse
     */
    public function getMineWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMineWorkspaceHeaders([]);

        return $this->getMineWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询最近活跃的企业内部群列表
     *  *
     * @param GetNewestInnerGroupsRequest $tmpReq    GetNewestInnerGroupsRequest
     * @param GetNewestInnerGroupsHeaders $tmpHeader GetNewestInnerGroupsHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetNewestInnerGroupsResponse GetNewestInnerGroupsResponse
     */
    public function getNewestInnerGroupsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetNewestInnerGroupsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetNewestInnerGroupsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNewestInnerGroups',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/im/getNewestInnerGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNewestInnerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询最近活跃的企业内部群列表
     *  *
     * @param GetNewestInnerGroupsRequest $request GetNewestInnerGroupsRequest
     *
     * @return GetNewestInnerGroupsResponse GetNewestInnerGroupsResponse
     */
    public function getNewestInnerGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNewestInnerGroupsHeaders([]);

        return $this->getNewestInnerGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取节点
     *  *
     * @param GetNodeRequest $tmpReq    GetNodeRequest
     * @param GetNodeHeaders $tmpHeader GetNodeHeaders
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetNodeResponse GetNodeResponse
     */
    public function getNodeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetNodeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetNodeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->withPermissionRole)) {
            $body['WithPermissionRole'] = $request->withPermissionRole;
        }
        if (!Utils::isUnset($request->withStatisticalInfo)) {
            $body['WithStatisticalInfo'] = $request->withStatisticalInfo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNode',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getNode',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取节点
     *  *
     * @param GetNodeRequest $request GetNodeRequest
     *
     * @return GetNodeResponse GetNodeResponse
     */
    public function getNode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNodeHeaders([]);

        return $this->getNodeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 通过链接获取节点
     *  *
     * @param GetNodeByUrlRequest $tmpReq    GetNodeByUrlRequest
     * @param GetNodeByUrlHeaders $tmpHeader GetNodeByUrlHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetNodeByUrlResponse GetNodeByUrlResponse
     */
    public function getNodeByUrlWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetNodeByUrlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetNodeByUrlShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->option)) {
            $request->optionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->optionShrink)) {
            $body['Option'] = $request->optionShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNodeByUrl',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getNodeByUrl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeByUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过链接获取节点
     *  *
     * @param GetNodeByUrlRequest $request GetNodeByUrlRequest
     *
     * @return GetNodeByUrlResponse GetNodeByUrlResponse
     */
    public function getNodeByUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNodeByUrlHeaders([]);

        return $this->getNodeByUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量获取节点
     *  *
     * @param GetNodesRequest $tmpReq    GetNodesRequest
     * @param GetNodesHeaders $tmpHeader GetNodesHeaders
     * @param RuntimeOptions  $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetNodesResponse GetNodesResponse
     */
    public function getNodesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetNodesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->nodeIds)) {
            $request->nodeIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeIds, 'NodeIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->option)) {
            $request->optionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->nodeIdsShrink)) {
            $body['NodeIds'] = $request->nodeIdsShrink;
        }
        if (!Utils::isUnset($request->optionShrink)) {
            $body['Option'] = $request->optionShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNodes',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getNodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量获取节点
     *  *
     * @param GetNodesRequest $request GetNodesRequest
     *
     * @return GetNodesResponse GetNodesResponse
     */
    public function getNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNodesHeaders([]);

        return $this->getNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取发送给用户的通知
     *  *
     * @param GetNotifyMeRequest $request   GetNotifyMeRequest
     * @param GetNotifyMeHeaders $tmpHeader GetNotifyMeHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetNotifyMeResponse GetNotifyMeResponse
     */
    public function getNotifyMeWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetNotifyMeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appTypes)) {
            $body['AppTypes'] = $request->appTypes;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['CorpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->createFromTimeGMT)) {
            $body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }
        if (!Utils::isUnset($request->createToTimeGMT)) {
            $body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }
        if (!Utils::isUnset($request->instanceCreateFromTimeGMT)) {
            $body['InstanceCreateFromTimeGMT'] = $request->instanceCreateFromTimeGMT;
        }
        if (!Utils::isUnset($request->instanceCreateToTimeGMT)) {
            $body['InstanceCreateToTimeGMT'] = $request->instanceCreateToTimeGMT;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->processCodes)) {
            $body['ProcessCodes'] = $request->processCodes;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNotifyMe',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getNotifyMe',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNotifyMeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取发送给用户的通知
     *  *
     * @param GetNotifyMeRequest $request GetNotifyMeRequest
     *
     * @return GetNotifyMeResponse GetNotifyMeResponse
     */
    public function getNotifyMe($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNotifyMeHeaders([]);

        return $this->getNotifyMeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取宜搭附件临时免登地址
     *  *
     * @param GetOpenUrlRequest $request   GetOpenUrlRequest
     * @param GetOpenUrlHeaders $tmpHeader GetOpenUrlHeaders
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetOpenUrlResponse GetOpenUrlResponse
     */
    public function getOpenUrlWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetOpenUrlShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->fileUrl)) {
            $body['FileUrl'] = $request->fileUrl;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->timeout)) {
            $body['Timeout'] = $request->timeout;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOpenUrl',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getOpenUrl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOpenUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取宜搭附件临时免登地址
     *  *
     * @param GetOpenUrlRequest $request GetOpenUrlRequest
     *
     * @return GetOpenUrlResponse GetOpenUrlResponse
     */
    public function getOpenUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetOpenUrlHeaders([]);

        return $this->getOpenUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取审批记录
     *  *
     * @param GetOperationRecordsRequest $request   GetOperationRecordsRequest
     * @param GetOperationRecordsHeaders $tmpHeader GetOperationRecordsHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetOperationRecordsResponse GetOperationRecordsResponse
     */
    public function getOperationRecordsWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetOperationRecordsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->processInstanceId)) {
            $body['ProcessInstanceId'] = $request->processInstanceId;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOperationRecords',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getOperationRecords',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOperationRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取审批记录
     *  *
     * @param GetOperationRecordsRequest $request GetOperationRecordsRequest
     *
     * @return GetOperationRecordsResponse GetOperationRecordsResponse
     */
    public function getOperationRecords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetOperationRecordsHeaders([]);

        return $this->getOperationRecordsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取流程定义
     *  *
     * @param GetProcessDefinitionRequest $request   GetProcessDefinitionRequest
     * @param GetProcessDefinitionHeaders $tmpHeader GetProcessDefinitionHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetProcessDefinitionResponse GetProcessDefinitionResponse
     */
    public function getProcessDefinitionWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetProcessDefinitionShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['CorpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->nameSpace_)) {
            $body['NameSpace'] = $request->nameSpace_;
        }
        if (!Utils::isUnset($request->orderNumber)) {
            $body['OrderNumber'] = $request->orderNumber;
        }
        if (!Utils::isUnset($request->processInstanceId)) {
            $body['ProcessInstanceId'] = $request->processInstanceId;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->systemType)) {
            $body['SystemType'] = $request->systemType;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetProcessDefinition',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getProcessDefinition',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProcessDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取流程定义
     *  *
     * @param GetProcessDefinitionRequest $request GetProcessDefinitionRequest
     *
     * @return GetProcessDefinitionResponse GetProcessDefinitionResponse
     */
    public function getProcessDefinition($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetProcessDefinitionHeaders([]);

        return $this->getProcessDefinitionWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取单元格区域
     *  *
     * @param GetRangeRequest $tmpReq    GetRangeRequest
     * @param GetRangeHeaders $tmpHeader GetRangeHeaders
     * @param RuntimeOptions  $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetRangeResponse GetRangeResponse
     */
    public function getRangeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetRangeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetRangeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->rangeAddress)) {
            $body['RangeAddress'] = $request->rangeAddress;
        }
        if (!Utils::isUnset($request->select)) {
            $body['Select'] = $request->select;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRange',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/getRange',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取单元格区域
     *  *
     * @param GetRangeRequest $request GetRangeRequest
     *
     * @return GetRangeResponse GetRangeResponse
     */
    public function getRange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetRangeHeaders([]);

        return $this->getRangeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询用户有权限的知识库列表(旧)
     *  *
     * @param GetRelatedWorkspacesRequest $tmpReq    GetRelatedWorkspacesRequest
     * @param GetRelatedWorkspacesHeaders $tmpHeader GetRelatedWorkspacesHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetRelatedWorkspacesResponse GetRelatedWorkspacesResponse
     */
    public function getRelatedWorkspacesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetRelatedWorkspacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetRelatedWorkspacesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->includeRecent)) {
            $body['IncludeRecent'] = $request->includeRecent;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRelatedWorkspaces',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/getRelatedWorkspaces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRelatedWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户有权限的知识库列表(旧)
     *  *
     * @param GetRelatedWorkspacesRequest $request GetRelatedWorkspacesRequest
     *
     * @return GetRelatedWorkspacesResponse GetRelatedWorkspacesResponse
     */
    public function getRelatedWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetRelatedWorkspacesHeaders([]);

        return $this->getRelatedWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取模板详情
     *  *
     * @param GetReportTemplateByNameRequest $tmpReq    GetReportTemplateByNameRequest
     * @param GetReportTemplateByNameHeaders $tmpHeader GetReportTemplateByNameHeaders
     * @param RuntimeOptions                 $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetReportTemplateByNameResponse GetReportTemplateByNameResponse
     */
    public function getReportTemplateByNameWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetReportTemplateByNameShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetReportTemplateByNameShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetReportTemplateByName',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/getReportTemplateByName',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetReportTemplateByNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取模板详情
     *  *
     * @param GetReportTemplateByNameRequest $request GetReportTemplateByNameRequest
     *
     * @return GetReportTemplateByNameResponse GetReportTemplateByNameResponse
     */
    public function getReportTemplateByName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetReportTemplateByNameHeaders([]);

        return $this->getReportTemplateByNameWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取员工有多少数量的日志（一个月内）是未读状态
     *  *
     * @param GetReportUnReadCountRequest $tmpReq    GetReportUnReadCountRequest
     * @param GetReportUnReadCountHeaders $tmpHeader GetReportUnReadCountHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetReportUnReadCountResponse GetReportUnReadCountResponse
     */
    public function getReportUnReadCountWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetReportUnReadCountShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetReportUnReadCountShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetReportUnReadCount',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/getReportUnReadCount',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetReportUnReadCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取员工有多少数量的日志（一个月内）是未读状态
     *  *
     * @param GetReportUnReadCountRequest $request GetReportUnReadCountRequest
     *
     * @return GetReportUnReadCountResponse GetReportUnReadCountResponse
     */
    public function getReportUnReadCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetReportUnReadCountHeaders([]);

        return $this->getReportUnReadCountWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询流程运行任务（VPC）
     *  *
     * @param GetRunningTasksRequest $request   GetRunningTasksRequest
     * @param GetRunningTasksHeaders $tmpHeader GetRunningTasksHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetRunningTasksResponse GetRunningTasksResponse
     */
    public function getRunningTasksWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetRunningTasksShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->processCodes)) {
            $body['ProcessCodes'] = $request->processCodes;
        }
        if (!Utils::isUnset($request->processInstanceId)) {
            $body['ProcessInstanceId'] = $request->processInstanceId;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRunningTasks',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getRunningTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRunningTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询流程运行任务（VPC）
     *  *
     * @param GetRunningTasksRequest $request GetRunningTasksRequest
     *
     * @return GetRunningTasksResponse GetRunningTasksResponse
     */
    public function getRunningTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetRunningTasksHeaders([]);

        return $this->getRunningTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取工作表
     *  *
     * @param GetSheetRequest $tmpReq    GetSheetRequest
     * @param GetSheetHeaders $tmpHeader GetSheetHeaders
     * @param RuntimeOptions  $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetSheetResponse GetSheetResponse
     */
    public function getSheetWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSheetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetSheetShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSheet',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/getSheet',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSheetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取工作表
     *  *
     * @param GetSheetRequest $request GetSheetRequest
     *
     * @return GetSheetResponse GetSheetResponse
     */
    public function getSheet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSheetHeaders([]);

        return $this->getSheetWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询知识库下的目录结构
     *  *
     * @param GetSpaceDirectoriesRequest $tmpReq    GetSpaceDirectoriesRequest
     * @param GetSpaceDirectoriesHeaders $tmpHeader GetSpaceDirectoriesHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetSpaceDirectoriesResponse GetSpaceDirectoriesResponse
     */
    public function getSpaceDirectoriesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSpaceDirectoriesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetSpaceDirectoriesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dentryId)) {
            $body['DentryId'] = $request->dentryId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSpaceDirectories',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getSpaceDirectories',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSpaceDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询知识库下的目录结构
     *  *
     * @param GetSpaceDirectoriesRequest $request GetSpaceDirectoriesRequest
     *
     * @return GetSpaceDirectoriesResponse GetSpaceDirectoriesResponse
     */
    public function getSpaceDirectories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSpaceDirectoriesHeaders([]);

        return $this->getSpaceDirectoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询单个订阅日历详情
     *  *
     * @param GetSubscribedCalendarRequest $request   GetSubscribedCalendarRequest
     * @param GetSubscribedCalendarHeaders $tmpHeader GetSubscribedCalendarHeaders
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetSubscribedCalendarResponse GetSubscribedCalendarResponse
     */
    public function getSubscribedCalendarWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetSubscribedCalendarShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSubscribedCalendar',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/getSubscribedCalendar',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSubscribedCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询单个订阅日历详情
     *  *
     * @param GetSubscribedCalendarRequest $request GetSubscribedCalendarRequest
     *
     * @return GetSubscribedCalendarResponse GetSubscribedCalendarResponse
     */
    public function getSubscribedCalendar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSubscribedCalendarHeaders([]);

        return $this->getSubscribedCalendarWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询抄送我的任务列表（应用维度）
     *  *
     * @param GetTaskCopiesRequest $request   GetTaskCopiesRequest
     * @param GetTaskCopiesHeaders $tmpHeader GetTaskCopiesHeaders
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetTaskCopiesResponse GetTaskCopiesResponse
     */
    public function getTaskCopiesWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetTaskCopiesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->createFromTimeGMT)) {
            $body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }
        if (!Utils::isUnset($request->createToTimeGMT)) {
            $body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->processCodes)) {
            $body['ProcessCodes'] = $request->processCodes;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTaskCopies',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/getTaskCopies',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskCopiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询抄送我的任务列表（应用维度）
     *  *
     * @param GetTaskCopiesRequest $request GetTaskCopiesRequest
     *
     * @return GetTaskCopiesResponse GetTaskCopiesResponse
     */
    public function getTaskCopies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetTaskCopiesHeaders([]);

        return $this->getTaskCopiesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取用户可见的日志模板
     *  *
     * @param GetTemplateListByUserIdRequest $tmpReq    GetTemplateListByUserIdRequest
     * @param GetTemplateListByUserIdHeaders $tmpHeader GetTemplateListByUserIdHeaders
     * @param RuntimeOptions                 $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetTemplateListByUserIdResponse GetTemplateListByUserIdResponse
     */
    public function getTemplateListByUserIdWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetTemplateListByUserIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetTemplateListByUserIdShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->offset)) {
            $body['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateListByUserId',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/getTemplateListByUserId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateListByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户可见的日志模板
     *  *
     * @param GetTemplateListByUserIdRequest $request GetTemplateListByUserIdRequest
     *
     * @return GetTemplateListByUserIdResponse GetTemplateListByUserIdResponse
     */
    public function getTemplateListByUserId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetTemplateListByUserIdHeaders([]);

        return $this->getTemplateListByUserIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取专属账号信息
     *  *
     * @param GetUserRequest $tmpReq    GetUserRequest
     * @param GetUserHeaders $tmpHeader GetUserHeaders
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUserWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetUserShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->language)) {
            $body['language'] = $request->language;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/im/getUser',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取专属账号信息
     *  *
     * @param GetUserRequest $request GetUserRequest
     *
     * @return GetUserResponse GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserHeaders([]);

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取用户最新的有效的专属账号迁移方案
     *  *
     * @param GetUserLatestPlanRequest $tmpReq    GetUserLatestPlanRequest
     * @param GetUserLatestPlanHeaders $tmpHeader GetUserLatestPlanHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetUserLatestPlanResponse GetUserLatestPlanResponse
     */
    public function getUserLatestPlanWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetUserLatestPlanShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetUserLatestPlanShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUserLatestPlan',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/aliding/v1/indepding/getUserLatestPlan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserLatestPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户最新的有效的专属账号迁移方案
     *  *
     * @param GetUserLatestPlanRequest $request GetUserLatestPlanRequest
     *
     * @return GetUserLatestPlanResponse GetUserLatestPlanResponse
     */
    public function getUserLatestPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserLatestPlanHeaders([]);

        return $this->getUserLatestPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取知识库
     *  *
     * @param GetWorkspaceRequest $tmpReq    GetWorkspaceRequest
     * @param GetWorkspaceHeaders $tmpHeader GetWorkspaceHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetWorkspaceResponse GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetWorkspaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetWorkspaceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->withPermissionRole)) {
            $body['WithPermissionRole'] = $request->withPermissionRole;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWorkspace',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getWorkspace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取知识库
     *  *
     * @param GetWorkspaceRequest $request GetWorkspaceRequest
     *
     * @return GetWorkspaceResponse GetWorkspaceResponse
     */
    public function getWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetWorkspaceHeaders([]);

        return $this->getWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量获取知识库
     *  *
     * @param GetWorkspacesRequest $tmpReq    GetWorkspacesRequest
     * @param GetWorkspacesHeaders $tmpHeader GetWorkspacesHeaders
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return GetWorkspacesResponse GetWorkspacesResponse
     */
    public function getWorkspacesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetWorkspacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetWorkspacesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->option)) {
            $request->optionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->workspaceIds)) {
            $request->workspaceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->workspaceIds, 'WorkspaceIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->optionShrink)) {
            $body['Option'] = $request->optionShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceIdsShrink)) {
            $body['WorkspaceIds'] = $request->workspaceIdsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWorkspaces',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getWorkspaces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量获取知识库
     *  *
     * @param GetWorkspacesRequest $request GetWorkspacesRequest
     *
     * @return GetWorkspacesResponse GetWorkspacesResponse
     */
    public function getWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetWorkspacesHeaders([]);

        return $this->getWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 授予勋章
     *  *
     * @param GrantHonorRequest $tmpReq    GrantHonorRequest
     * @param GrantHonorHeaders $tmpHeader GrantHonorHeaders
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return GrantHonorResponse GrantHonorResponse
     */
    public function grantHonorWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GrantHonorShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GrantHonorShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->openConversationIds)) {
            $request->openConversationIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->openConversationIds, 'openConversationIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->receiverUserIds)) {
            $request->receiverUserIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->receiverUserIds, 'receiverUserIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->expirationTime)) {
            $body['expirationTime'] = $request->expirationTime;
        }
        if (!Utils::isUnset($request->grantReason)) {
            $body['grantReason'] = $request->grantReason;
        }
        if (!Utils::isUnset($request->granterName)) {
            $body['granterName'] = $request->granterName;
        }
        if (!Utils::isUnset($request->honorId)) {
            $body['honorId'] = $request->honorId;
        }
        if (!Utils::isUnset($request->noticeAnnouncer)) {
            $body['noticeAnnouncer'] = $request->noticeAnnouncer;
        }
        if (!Utils::isUnset($request->noticeSingle)) {
            $body['noticeSingle'] = $request->noticeSingle;
        }
        if (!Utils::isUnset($request->openConversationIdsShrink)) {
            $body['openConversationIds'] = $request->openConversationIdsShrink;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['orgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->receiverUserIdsShrink)) {
            $body['receiverUserIds'] = $request->receiverUserIdsShrink;
        }
        if (!Utils::isUnset($request->senderUserId)) {
            $body['senderUserId'] = $request->senderUserId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GrantHonor',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/aliding/v1/honor/grantHonor',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GrantHonorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 授予勋章
     *  *
     * @param GrantHonorRequest $request GrantHonorRequest
     *
     * @return GrantHonorResponse GrantHonorResponse
     */
    public function grantHonor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GrantHonorHeaders([]);

        return $this->grantHonorWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 在指定列左侧插入若干列
     *  *
     * @param InsertColumnsBeforeRequest $tmpReq    InsertColumnsBeforeRequest
     * @param InsertColumnsBeforeHeaders $tmpHeader InsertColumnsBeforeHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return InsertColumnsBeforeResponse InsertColumnsBeforeResponse
     */
    public function insertColumnsBeforeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertColumnsBeforeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new InsertColumnsBeforeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->column)) {
            $body['Column'] = $request->column;
        }
        if (!Utils::isUnset($request->columnCount)) {
            $body['ColumnCount'] = $request->columnCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InsertColumnsBefore',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/insertColumnsBefore',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertColumnsBeforeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 在指定列左侧插入若干列
     *  *
     * @param InsertColumnsBeforeRequest $request InsertColumnsBeforeRequest
     *
     * @return InsertColumnsBeforeResponse InsertColumnsBeforeResponse
     */
    public function insertColumnsBefore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsertColumnsBeforeHeaders([]);

        return $this->insertColumnsBeforeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 在指定行上方插入若干行
     *  *
     * @param InsertRowsBeforeRequest $tmpReq    InsertRowsBeforeRequest
     * @param InsertRowsBeforeHeaders $tmpHeader InsertRowsBeforeHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return InsertRowsBeforeResponse InsertRowsBeforeResponse
     */
    public function insertRowsBeforeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertRowsBeforeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new InsertRowsBeforeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->row)) {
            $body['Row'] = $request->row;
        }
        if (!Utils::isUnset($request->rowCount)) {
            $body['RowCount'] = $request->rowCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InsertRowsBefore',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/insertRowsBefore',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertRowsBeforeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 在指定行上方插入若干行
     *  *
     * @param InsertRowsBeforeRequest $request InsertRowsBeforeRequest
     *
     * @return InsertRowsBeforeResponse InsertRowsBeforeResponse
     */
    public function insertRowsBefore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsertRowsBeforeHeaders([]);

        return $this->insertRowsBeforeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 邀请用户入会
     *  *
     * @param InviteUsersRequest $tmpReq    InviteUsersRequest
     * @param InviteUsersHeaders $tmpHeader InviteUsersHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return InviteUsersResponse InviteUsersResponse
     */
    public function inviteUsersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InviteUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new InviteUsersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->inviteeList)) {
            $request->inviteeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inviteeList, 'InviteeList', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->phoneInviteeList)) {
            $request->phoneInviteeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->phoneInviteeList, 'phoneInviteeList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->inviteeListShrink)) {
            $body['InviteeList'] = $request->inviteeListShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        if (!Utils::isUnset($request->phoneInviteeListShrink)) {
            $body['phoneInviteeList'] = $request->phoneInviteeListShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InviteUsers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/inviteUsers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InviteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 邀请用户入会
     *  *
     * @param InviteUsersRequest $request InviteUsersRequest
     *
     * @return InviteUsersResponse InviteUsersResponse
     */
    public function inviteUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InviteUsersHeaders([]);

        return $this->inviteUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询宜搭应用列表
     *  *
     * @param ListApplicationRequest $request   ListApplicationRequest
     * @param ListApplicationHeaders $tmpHeader ListApplicationHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListApplicationResponse ListApplicationResponse
     */
    public function listApplicationWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new ListApplicationShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appFilter)) {
            $body['AppFilter'] = $request->appFilter;
        }
        if (!Utils::isUnset($request->appNameSearchKeyword)) {
            $body['AppNameSearchKeyword'] = $request->appNameSearchKeyword;
        }
        if (!Utils::isUnset($request->corpId)) {
            $body['CorpId'] = $request->corpId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->token)) {
            $body['Token'] = $request->token;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListApplication',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/listApplication',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询宜搭应用列表
     *  *
     * @param ListApplicationRequest $request ListApplicationRequest
     *
     * @return ListApplicationResponse ListApplicationResponse
     */
    public function listApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListApplicationHeaders([]);

        return $this->listApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询日历
     *  *
     * @param ListCalendarsRequest $tmpReq    ListCalendarsRequest
     * @param ListCalendarsHeaders $tmpHeader ListCalendarsHeaders
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListCalendarsResponse ListCalendarsResponse
     */
    public function listCalendarsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCalendarsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ListCalendarsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListCalendars',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/listCalendars',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCalendarsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询日历
     *  *
     * @param ListCalendarsRequest $request ListCalendarsRequest
     *
     * @return ListCalendarsResponse ListCalendarsResponse
     */
    public function listCalendars($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListCalendarsHeaders([]);

        return $this->listCalendarsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取文件或文件夹列表
     *  *
     * @param ListDentriesRequest $tmpReq    ListDentriesRequest
     * @param ListDentriesHeaders $tmpHeader ListDentriesHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListDentriesResponse ListDentriesResponse
     */
    public function listDentriesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDentriesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ListDentriesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->order)) {
            $body['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->parentId)) {
            $body['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->withThumbnail)) {
            $body['WithThumbnail'] = $request->withThumbnail;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDentries',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/listDentries',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDentriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取文件或文件夹列表
     *  *
     * @param ListDentriesRequest $request ListDentriesRequest
     *
     * @return ListDentriesResponse ListDentriesResponse
     */
    public function listDentries($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDentriesHeaders([]);

        return $this->listDentriesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取钉盘空间列表
     *  *
     * @param ListDriveSpacesRequest $tmpReq    ListDriveSpacesRequest
     * @param ListDriveSpacesHeaders $tmpHeader ListDriveSpacesHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListDriveSpacesResponse ListDriveSpacesResponse
     */
    public function listDriveSpacesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListDriveSpacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ListDriveSpacesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->spaceType)) {
            $body['SpaceType'] = $request->spaceType;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDriveSpaces',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/listDriveSpaces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDriveSpacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取钉盘空间列表
     *  *
     * @param ListDriveSpacesRequest $request ListDriveSpacesRequest
     *
     * @return ListDriveSpacesResponse ListDriveSpacesResponse
     */
    public function listDriveSpaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDriveSpacesHeaders([]);

        return $this->listDriveSpacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询日程列表
     *  *
     * @param ListEventsRequest $request   ListEventsRequest
     * @param ListEventsHeaders $tmpHeader ListEventsHeaders
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListEventsResponse ListEventsResponse
     */
    public function listEventsWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new ListEventsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->maxAttendees)) {
            $body['MaxAttendees'] = $request->maxAttendees;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->seriesMasterId)) {
            $body['SeriesMasterId'] = $request->seriesMasterId;
        }
        if (!Utils::isUnset($request->showDeleted)) {
            $body['ShowDeleted'] = $request->showDeleted;
        }
        if (!Utils::isUnset($request->syncToken)) {
            $body['SyncToken'] = $request->syncToken;
        }
        if (!Utils::isUnset($request->timeMax)) {
            $body['TimeMax'] = $request->timeMax;
        }
        if (!Utils::isUnset($request->timeMin)) {
            $body['TimeMin'] = $request->timeMin;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListEvents',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/listEvents',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询日程列表
     *  *
     * @param ListEventsRequest $request ListEventsRequest
     *
     * @return ListEventsResponse ListEventsResponse
     */
    public function listEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListEventsHeaders([]);

        return $this->listEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询日程视图
     *  *
     * @param ListEventsViewRequest $request   ListEventsViewRequest
     * @param ListEventsViewHeaders $tmpHeader ListEventsViewHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListEventsViewResponse ListEventsViewResponse
     */
    public function listEventsViewWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new ListEventsViewShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->maxAttendees)) {
            $body['MaxAttendees'] = $request->maxAttendees;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->timeMax)) {
            $body['TimeMax'] = $request->timeMax;
        }
        if (!Utils::isUnset($request->timeMin)) {
            $body['TimeMin'] = $request->timeMin;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListEventsView',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/listEventsView',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEventsViewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询日程视图
     *  *
     * @param ListEventsViewRequest $request ListEventsViewRequest
     *
     * @return ListEventsViewResponse ListEventsViewResponse
     */
    public function listEventsView($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListEventsViewHeaders([]);

        return $this->listEventsViewWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 批量查询宜搭表单实例的评论
     *  *
     * @param ListFormRemarksRequest $tmpReq    ListFormRemarksRequest
     * @param ListFormRemarksHeaders $tmpHeader ListFormRemarksHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListFormRemarksResponse ListFormRemarksResponse
     */
    public function listFormRemarksWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListFormRemarksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ListFormRemarksShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->formInstanceIdList)) {
            $request->formInstanceIdListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->formInstanceIdList, 'FormInstanceIdList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->formInstanceIdListShrink)) {
            $body['FormInstanceIdList'] = $request->formInstanceIdListShrink;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListFormRemarks',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/listFormRemarks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFormRemarksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量查询宜搭表单实例的评论
     *  *
     * @param ListFormRemarksRequest $request ListFormRemarksRequest
     *
     * @return ListFormRemarksResponse ListFormRemarksResponse
     */
    public function listFormRemarks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListFormRemarksHeaders([]);

        return $this->listFormRemarksWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取应用下的页面列表
     *  *
     * @param ListNavigationByFormTypeRequest $request   ListNavigationByFormTypeRequest
     * @param ListNavigationByFormTypeHeaders $tmpHeader ListNavigationByFormTypeHeaders
     * @param RuntimeOptions                  $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListNavigationByFormTypeResponse ListNavigationByFormTypeResponse
     */
    public function listNavigationByFormTypeWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new ListNavigationByFormTypeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->formType)) {
            $body['FormType'] = $request->formType;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListNavigationByFormType',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/listNavigationByFormType',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNavigationByFormTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取应用下的页面列表
     *  *
     * @param ListNavigationByFormTypeRequest $request ListNavigationByFormTypeRequest
     *
     * @return ListNavigationByFormTypeResponse ListNavigationByFormTypeResponse
     */
    public function listNavigationByFormType($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListNavigationByFormTypeHeaders([]);

        return $this->listNavigationByFormTypeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取节点列表
     *  *
     * @param ListNodesRequest $tmpReq    ListNodesRequest
     * @param ListNodesHeaders $tmpHeader ListNodesHeaders
     * @param RuntimeOptions   $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ListNodesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->parentNodeId)) {
            $body['ParentNodeId'] = $request->parentNodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->withPermissionRole)) {
            $body['WithPermissionRole'] = $request->withPermissionRole;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/listNodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取节点列表
     *  *
     * @param ListNodesRequest $request ListNodesRequest
     *
     * @return ListNodesResponse ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListNodesHeaders([]);

        return $this->listNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取用户发出的日志列表
     *  *
     * @param ListReportRequest $tmpReq    ListReportRequest
     * @param ListReportHeaders $tmpHeader ListReportHeaders
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListReportResponse ListReportResponse
     */
    public function listReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ListReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->cursor)) {
            $body['Cursor'] = $request->cursor;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->modifiedEndTime)) {
            $body['ModifiedEndTime'] = $request->modifiedEndTime;
        }
        if (!Utils::isUnset($request->modifiedStartTime)) {
            $body['ModifiedStartTime'] = $request->modifiedStartTime;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/listReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户发出的日志列表
     *  *
     * @param ListReportRequest $request ListReportRequest
     *
     * @return ListReportResponse ListReportResponse
     */
    public function listReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListReportHeaders([]);

        return $this->listReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取子表组件数据
     *  *
     * @param ListTableDataByFormInstanceIdTableIdRequest $request   ListTableDataByFormInstanceIdTableIdRequest
     * @param ListTableDataByFormInstanceIdTableIdHeaders $tmpHeader ListTableDataByFormInstanceIdTableIdHeaders
     * @param RuntimeOptions                              $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListTableDataByFormInstanceIdTableIdResponse ListTableDataByFormInstanceIdTableIdResponse
     */
    public function listTableDataByFormInstanceIdTableIdWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new ListTableDataByFormInstanceIdTableIdShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->formInstanceId)) {
            $body['FormInstanceId'] = $request->formInstanceId;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->tableFieldId)) {
            $body['TableFieldId'] = $request->tableFieldId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTableDataByFormInstanceIdTableId',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/listTableDataByFormInstanceIdTableId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTableDataByFormInstanceIdTableIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取子表组件数据
     *  *
     * @param ListTableDataByFormInstanceIdTableIdRequest $request ListTableDataByFormInstanceIdTableIdRequest
     *
     * @return ListTableDataByFormInstanceIdTableIdResponse ListTableDataByFormInstanceIdTableIdResponse
     */
    public function listTableDataByFormInstanceIdTableId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListTableDataByFormInstanceIdTableIdHeaders([]);

        return $this->listTableDataByFormInstanceIdTableIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取知识小组列表
     *  *
     * @param ListTeamsRequest $tmpReq    ListTeamsRequest
     * @param ListTeamsHeaders $tmpHeader ListTeamsHeaders
     * @param RuntimeOptions   $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListTeamsResponse ListTeamsResponse
     */
    public function listTeamsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTeamsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ListTeamsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListTeams',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/listTeams',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTeamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取知识小组列表
     *  *
     * @param ListTeamsRequest $request ListTeamsRequest
     *
     * @return ListTeamsResponse ListTeamsResponse
     */
    public function listTeams($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListTeamsHeaders([]);

        return $this->listTeamsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取知识库列表
     *  *
     * @param ListWorkspacesRequest $tmpReq    ListWorkspacesRequest
     * @param ListWorkspacesHeaders $tmpHeader ListWorkspacesHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWorkspacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ListWorkspacesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->teamId)) {
            $body['TeamId'] = $request->teamId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->withPermissionRole)) {
            $body['WithPermissionRole'] = $request->withPermissionRole;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaces',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/listWorkspaces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取知识库列表
     *  *
     * @param ListWorkspacesRequest $request ListWorkspacesRequest
     *
     * @return ListWorkspacesResponse ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListWorkspacesHeaders([]);

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改日程
     *  *
     * @param PatchEventRequest $tmpReq    PatchEventRequest
     * @param PatchEventHeaders $tmpHeader PatchEventHeaders
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return PatchEventResponse PatchEventResponse
     */
    public function patchEventWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PatchEventShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new PatchEventShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->attendees)) {
            $request->attendeesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attendees, 'Attendees', 'json');
        }
        if (!Utils::isUnset($tmpReq->end)) {
            $request->endShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->end, 'End', 'json');
        }
        if (!Utils::isUnset($tmpReq->extra)) {
            $request->extraShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }
        if (!Utils::isUnset($tmpReq->location)) {
            $request->locationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->location, 'Location', 'json');
        }
        if (!Utils::isUnset($tmpReq->recurrence)) {
            $request->recurrenceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recurrence, 'Recurrence', 'json');
        }
        if (!Utils::isUnset($tmpReq->reminders)) {
            $request->remindersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->reminders, 'Reminders', 'json');
        }
        if (!Utils::isUnset($tmpReq->start)) {
            $request->startShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->start, 'Start', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->attendeesShrink)) {
            $body['Attendees'] = $request->attendeesShrink;
        }
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endShrink)) {
            $body['End'] = $request->endShrink;
        }
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->extraShrink)) {
            $body['Extra'] = $request->extraShrink;
        }
        if (!Utils::isUnset($request->isAllDay)) {
            $body['IsAllDay'] = $request->isAllDay;
        }
        if (!Utils::isUnset($request->locationShrink)) {
            $body['Location'] = $request->locationShrink;
        }
        if (!Utils::isUnset($request->recurrenceShrink)) {
            $body['Recurrence'] = $request->recurrenceShrink;
        }
        if (!Utils::isUnset($request->remindersShrink)) {
            $body['Reminders'] = $request->remindersShrink;
        }
        if (!Utils::isUnset($request->startShrink)) {
            $body['Start'] = $request->startShrink;
        }
        if (!Utils::isUnset($request->summary)) {
            $body['Summary'] = $request->summary;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PatchEvent',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/patchEvent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PatchEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改日程
     *  *
     * @param PatchEventRequest $request PatchEventRequest
     *
     * @return PatchEventResponse PatchEventResponse
     */
    public function patchEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PatchEventHeaders([]);

        return $this->patchEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询会议录制中的文本信息
     *  *
     * @param QueryCloudRecordTextRequest $tmpReq    QueryCloudRecordTextRequest
     * @param QueryCloudRecordTextHeaders $tmpHeader QueryCloudRecordTextHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryCloudRecordTextResponse QueryCloudRecordTextResponse
     */
    public function queryCloudRecordTextWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryCloudRecordTextShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryCloudRecordTextShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->direction)) {
            $body['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryCloudRecordText',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryCloudRecordText',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCloudRecordTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询会议录制中的文本信息
     *  *
     * @param QueryCloudRecordTextRequest $request QueryCloudRecordTextRequest
     *
     * @return QueryCloudRecordTextResponse QueryCloudRecordTextResponse
     */
    public function queryCloudRecordText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCloudRecordTextHeaders([]);

        return $this->queryCloudRecordTextWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询会议录制的详情信息
     *  *
     * @param QueryCloudRecordVideoRequest $tmpReq    QueryCloudRecordVideoRequest
     * @param QueryCloudRecordVideoHeaders $tmpHeader QueryCloudRecordVideoHeaders
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryCloudRecordVideoResponse QueryCloudRecordVideoResponse
     */
    public function queryCloudRecordVideoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryCloudRecordVideoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryCloudRecordVideoShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryCloudRecordVideo',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryCloudRecordVideo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCloudRecordVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询会议录制的详情信息
     *  *
     * @param QueryCloudRecordVideoRequest $request QueryCloudRecordVideoRequest
     *
     * @return QueryCloudRecordVideoResponse QueryCloudRecordVideoResponse
     */
    public function queryCloudRecordVideo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCloudRecordVideoHeaders([]);

        return $this->queryCloudRecordVideoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询会议录制中的视频信息
     *  *
     * @param QueryCloudRecordVideoPlayInfoRequest $tmpReq    QueryCloudRecordVideoPlayInfoRequest
     * @param QueryCloudRecordVideoPlayInfoHeaders $tmpHeader QueryCloudRecordVideoPlayInfoHeaders
     * @param RuntimeOptions                       $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryCloudRecordVideoPlayInfoResponse QueryCloudRecordVideoPlayInfoResponse
     */
    public function queryCloudRecordVideoPlayInfoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryCloudRecordVideoPlayInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryCloudRecordVideoPlayInfoShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->conferenceId)) {
            $body['ConferenceId'] = $request->conferenceId;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $body['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryCloudRecordVideoPlayInfo',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryCloudRecordVideoPlayInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCloudRecordVideoPlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询会议录制中的视频信息
     *  *
     * @param QueryCloudRecordVideoPlayInfoRequest $request QueryCloudRecordVideoPlayInfoRequest
     *
     * @return QueryCloudRecordVideoPlayInfoResponse QueryCloudRecordVideoPlayInfoResponse
     */
    public function queryCloudRecordVideoPlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCloudRecordVideoPlayInfoHeaders([]);

        return $this->queryCloudRecordVideoPlayInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询视频会议信息
     *  *
     * @param QueryConferenceInfoRequest $request   QueryConferenceInfoRequest
     * @param QueryConferenceInfoHeaders $tmpHeader QueryConferenceInfoHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryConferenceInfoResponse QueryConferenceInfoResponse
     */
    public function queryConferenceInfoWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new QueryConferenceInfoShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryConferenceInfo',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryConferenceInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConferenceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询视频会议信息
     *  *
     * @param QueryConferenceInfoRequest $request QueryConferenceInfoRequest
     *
     * @return QueryConferenceInfoResponse QueryConferenceInfoResponse
     */
    public function queryConferenceInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryConferenceInfoHeaders([]);

        return $this->queryConferenceInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询视频会议成员
     *  *
     * @param QueryConferenceMembersRequest $tmpReq    QueryConferenceMembersRequest
     * @param QueryConferenceMembersHeaders $tmpHeader QueryConferenceMembersHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryConferenceMembersResponse QueryConferenceMembersResponse
     */
    public function queryConferenceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryConferenceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryConferenceMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryConferenceMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryConferenceMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConferenceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询视频会议成员
     *  *
     * @param QueryConferenceMembersRequest $request QueryConferenceMembersRequest
     *
     * @return QueryConferenceMembersResponse QueryConferenceMembersResponse
     */
    public function queryConferenceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryConferenceMembersHeaders([]);

        return $this->queryConferenceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询知识库节点信息
     *  *
     * @param QueryDentryRequest $tmpReq    QueryDentryRequest
     * @param QueryDentryHeaders $tmpHeader QueryDentryHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryDentryResponse QueryDentryResponse
     */
    public function queryDentryWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryDentryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryDentryShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dentryId)) {
            $body['DentryId'] = $request->dentryId;
        }
        if (!Utils::isUnset($request->includeSpace)) {
            $body['IncludeSpace'] = $request->includeSpace;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDentry',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/queryDentry',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDentryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询知识库节点信息
     *  *
     * @param QueryDentryRequest $request QueryDentryRequest
     *
     * @return QueryDentryResponse QueryDentryResponse
     */
    public function queryDentry($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryDentryHeaders([]);

        return $this->queryDentryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询直播信息
     *  *
     * @param QueryLiveInfoRequest $tmpReq    QueryLiveInfoRequest
     * @param QueryLiveInfoHeaders $tmpHeader QueryLiveInfoHeaders
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryLiveInfoResponse QueryLiveInfoResponse
     */
    public function queryLiveInfoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryLiveInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryLiveInfoShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryLiveInfo',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryLiveInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLiveInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询直播信息
     *  *
     * @param QueryLiveInfoRequest $request QueryLiveInfoRequest
     *
     * @return QueryLiveInfoResponse QueryLiveInfoResponse
     */
    public function queryLiveInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryLiveInfoHeaders([]);

        return $this->queryLiveInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询直播的观看数据
     *  *
     * @param QueryLiveWatchDetailRequest $tmpReq    QueryLiveWatchDetailRequest
     * @param QueryLiveWatchDetailHeaders $tmpHeader QueryLiveWatchDetailHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryLiveWatchDetailResponse QueryLiveWatchDetailResponse
     */
    public function queryLiveWatchDetailWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryLiveWatchDetailShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryLiveWatchDetailShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryLiveWatchDetail',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryLiveWatchDetail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLiveWatchDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询直播的观看数据
     *  *
     * @param QueryLiveWatchDetailRequest $request QueryLiveWatchDetailRequest
     *
     * @return QueryLiveWatchDetailResponse QueryLiveWatchDetailResponse
     */
    public function queryLiveWatchDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryLiveWatchDetailHeaders([]);

        return $this->queryLiveWatchDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询直播观看人员信息
     *  *
     * @param QueryLiveWatchUserListRequest $tmpReq    QueryLiveWatchUserListRequest
     * @param QueryLiveWatchUserListHeaders $tmpHeader QueryLiveWatchUserListHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryLiveWatchUserListResponse QueryLiveWatchUserListResponse
     */
    public function queryLiveWatchUserListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryLiveWatchUserListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryLiveWatchUserListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryLiveWatchUserList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryLiveWatchUserList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLiveWatchUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询直播观看人员信息
     *  *
     * @param QueryLiveWatchUserListRequest $request QueryLiveWatchUserListRequest
     *
     * @return QueryLiveWatchUserListResponse QueryLiveWatchUserListResponse
     */
    public function queryLiveWatchUserList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryLiveWatchUserListHeaders([]);

        return $this->queryLiveWatchUserListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询会议室详情
     *  *
     * @param QueryMeetingRoomRequest $tmpReq    QueryMeetingRoomRequest
     * @param QueryMeetingRoomHeaders $tmpHeader QueryMeetingRoomHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryMeetingRoomResponse QueryMeetingRoomResponse
     */
    public function queryMeetingRoomWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryMeetingRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryMeetingRoomShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMeetingRoom',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryMeetingRoom',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMeetingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询会议室详情
     *  *
     * @param QueryMeetingRoomRequest $request QueryMeetingRoomRequest
     *
     * @return QueryMeetingRoomResponse QueryMeetingRoomResponse
     */
    public function queryMeetingRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMeetingRoomHeaders([]);

        return $this->queryMeetingRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询会议室分组信息
     *  *
     * @param QueryMeetingRoomGroupRequest $tmpReq    QueryMeetingRoomGroupRequest
     * @param QueryMeetingRoomGroupHeaders $tmpHeader QueryMeetingRoomGroupHeaders
     * @param RuntimeOptions               $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryMeetingRoomGroupResponse QueryMeetingRoomGroupResponse
     */
    public function queryMeetingRoomGroupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryMeetingRoomGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryMeetingRoomGroupShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMeetingRoomGroup',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryMeetingRoomGroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMeetingRoomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询会议室分组信息
     *  *
     * @param QueryMeetingRoomGroupRequest $request QueryMeetingRoomGroupRequest
     *
     * @return QueryMeetingRoomGroupResponse QueryMeetingRoomGroupResponse
     */
    public function queryMeetingRoomGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMeetingRoomGroupHeaders([]);

        return $this->queryMeetingRoomGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询会议室分组列表
     *  *
     * @param QueryMeetingRoomGroupListRequest $tmpReq    QueryMeetingRoomGroupListRequest
     * @param QueryMeetingRoomGroupListHeaders $tmpHeader QueryMeetingRoomGroupListHeaders
     * @param RuntimeOptions                   $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryMeetingRoomGroupListResponse QueryMeetingRoomGroupListResponse
     */
    public function queryMeetingRoomGroupListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryMeetingRoomGroupListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryMeetingRoomGroupListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMeetingRoomGroupList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryMeetingRoomGroupList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMeetingRoomGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询会议室分组列表
     *  *
     * @param QueryMeetingRoomGroupListRequest $request QueryMeetingRoomGroupListRequest
     *
     * @return QueryMeetingRoomGroupListResponse QueryMeetingRoomGroupListResponse
     */
    public function queryMeetingRoomGroupList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMeetingRoomGroupListHeaders([]);

        return $this->queryMeetingRoomGroupListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询会议室列表
     *  *
     * @param QueryMeetingRoomListRequest $tmpReq    QueryMeetingRoomListRequest
     * @param QueryMeetingRoomListHeaders $tmpHeader QueryMeetingRoomListHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryMeetingRoomListResponse QueryMeetingRoomListResponse
     */
    public function queryMeetingRoomListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryMeetingRoomListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryMeetingRoomListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMeetingRoomList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryMeetingRoomList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMeetingRoomListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询会议室列表
     *  *
     * @param QueryMeetingRoomListRequest $request QueryMeetingRoomListRequest
     *
     * @return QueryMeetingRoomListResponse QueryMeetingRoomListResponse
     */
    public function queryMeetingRoomList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMeetingRoomListHeaders([]);

        return $this->queryMeetingRoomListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询企业荣誉
     *  *
     * @param QueryOrgHonorsRequest $tmpReq    QueryOrgHonorsRequest
     * @param QueryOrgHonorsHeaders $tmpHeader QueryOrgHonorsHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryOrgHonorsResponse QueryOrgHonorsResponse
     */
    public function queryOrgHonorsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryOrgHonorsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryOrgHonorsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['orgId'] = $request->orgId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrgHonors',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/aliding/v1/honor/queryOrgHonors',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrgHonorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询企业荣誉
     *  *
     * @param QueryOrgHonorsRequest $request QueryOrgHonorsRequest
     *
     * @return QueryOrgHonorsResponse QueryOrgHonorsResponse
     */
    public function queryOrgHonors($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryOrgHonorsHeaders([]);

        return $this->queryOrgHonorsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询企业代办
     *  *
     * @param QueryOrgTodoTasksRequest $tmpReq    QueryOrgTodoTasksRequest
     * @param QueryOrgTodoTasksHeaders $tmpHeader QueryOrgTodoTasksHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryOrgTodoTasksResponse QueryOrgTodoTasksResponse
     */
    public function queryOrgTodoTasksWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryOrgTodoTasksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryOrgTodoTasksShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->isDone)) {
            $body['isDone'] = $request->isDone;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrgTodoTasks',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/task/queryOrgTodoTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrgTodoTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询企业代办
     *  *
     * @param QueryOrgTodoTasksRequest $request QueryOrgTodoTasksRequest
     *
     * @return QueryOrgTodoTasksResponse QueryOrgTodoTasksResponse
     */
    public function queryOrgTodoTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryOrgTodoTasksHeaders([]);

        return $this->queryOrgTodoTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询预约会议
     *  *
     * @param QueryScheduleConferenceRequest $tmpReq    QueryScheduleConferenceRequest
     * @param QueryScheduleConferenceHeaders $tmpHeader QueryScheduleConferenceHeaders
     * @param RuntimeOptions                 $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryScheduleConferenceResponse QueryScheduleConferenceResponse
     */
    public function queryScheduleConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryScheduleConferenceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryScheduleConferenceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->scheduleConferenceId)) {
            $body['scheduleConferenceId'] = $request->scheduleConferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryScheduleConference',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryScheduleConference',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryScheduleConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询预约会议
     *  *
     * @param QueryScheduleConferenceRequest $request QueryScheduleConferenceRequest
     *
     * @return QueryScheduleConferenceResponse QueryScheduleConferenceResponse
     */
    public function queryScheduleConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryScheduleConferenceHeaders([]);

        return $this->queryScheduleConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询员工勋章列表
     *  *
     * @param QueryUserHonorsRequest $tmpReq    QueryUserHonorsRequest
     * @param QueryUserHonorsHeaders $tmpHeader QueryUserHonorsHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return QueryUserHonorsResponse QueryUserHonorsResponse
     */
    public function queryUserHonorsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryUserHonorsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryUserHonorsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['orgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryUserHonors',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/aliding/v1/honor/queryUserHonors',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryUserHonorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询员工勋章列表
     *  *
     * @param QueryUserHonorsRequest $request QueryUserHonorsRequest
     *
     * @return QueryUserHonorsResponse QueryUserHonorsResponse
     */
    public function queryUserHonors($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryUserHonorsHeaders([]);

        return $this->queryUserHonorsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 收回勋章
     *  *
     * @param RecallHonorRequest $tmpReq    RecallHonorRequest
     * @param RecallHonorHeaders $tmpHeader RecallHonorHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return RecallHonorResponse RecallHonorResponse
     */
    public function recallHonorWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RecallHonorShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new RecallHonorShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->honorId)) {
            $body['honorId'] = $request->honorId;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['orgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RecallHonor',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/aliding/v1/honor/recallHonor',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecallHonorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 收回勋章
     *  *
     * @param RecallHonorRequest $request RecallHonorRequest
     *
     * @return RecallHonorResponse RecallHonorResponse
     */
    public function recallHonor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RecallHonorHeaders([]);

        return $this->recallHonorWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取日志接收人员列表
     *  *
     * @param ReceiverListReportRequest $tmpReq    ReceiverListReportRequest
     * @param ReceiverListReportHeaders $tmpHeader ReceiverListReportHeaders
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return ReceiverListReportResponse ReceiverListReportResponse
     */
    public function receiverListReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ReceiverListReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ReceiverListReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->offset)) {
            $body['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->reportId)) {
            $body['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReceiverListReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/receiverListReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReceiverListReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取日志接收人员列表
     *  *
     * @param ReceiverListReportRequest $request ReceiverListReportRequest
     *
     * @return ReceiverListReportResponse ReceiverListReportResponse
     */
    public function receiverListReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ReceiverListReportHeaders([]);

        return $this->receiverListReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 转交任务
     *  *
     * @param RedirectTaskRequest $request   RedirectTaskRequest
     * @param RedirectTaskHeaders $tmpHeader RedirectTaskHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return RedirectTaskResponse RedirectTaskResponse
     */
    public function redirectTaskWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new RedirectTaskShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->byManager)) {
            $body['ByManager'] = $request->byManager;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->nowActionExecutorId)) {
            $body['NowActionExecutorId'] = $request->nowActionExecutorId;
        }
        if (!Utils::isUnset($request->processInstanceId)) {
            $body['ProcessInstanceId'] = $request->processInstanceId;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RedirectTask',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/redirectTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RedirectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 转交任务
     *  *
     * @param RedirectTaskRequest $request RedirectTaskRequest
     *
     * @return RedirectTaskResponse RedirectTaskResponse
     */
    public function redirectTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RedirectTaskHeaders([]);

        return $this->redirectTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 删除日程参与者
     *  *
     * @param RemoveAttendeeRequest $tmpReq    RemoveAttendeeRequest
     * @param RemoveAttendeeHeaders $tmpHeader RemoveAttendeeHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return RemoveAttendeeResponse RemoveAttendeeResponse
     */
    public function removeAttendeeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveAttendeeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new RemoveAttendeeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->attendeesToRemove)) {
            $request->attendeesToRemoveShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attendeesToRemove, 'AttendeesToRemove', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->attendeesToRemoveShrink)) {
            $body['AttendeesToRemove'] = $request->attendeesToRemoveShrink;
        }
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveAttendee',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/removeAttendee',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAttendeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除日程参与者
     *  *
     * @param RemoveAttendeeRequest $request RemoveAttendeeRequest
     *
     * @return RemoveAttendeeResponse RemoveAttendeeResponse
     */
    public function removeAttendee($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveAttendeeHeaders([]);

        return $this->removeAttendeeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 取消预定会议室
     *  *
     * @param RemoveMeetingRoomsRequest $tmpReq    RemoveMeetingRoomsRequest
     * @param RemoveMeetingRoomsHeaders $tmpHeader RemoveMeetingRoomsHeaders
     * @param RuntimeOptions            $runtime   runtime options for this request RuntimeOptions
     *
     * @return RemoveMeetingRoomsResponse RemoveMeetingRoomsResponse
     */
    public function removeMeetingRoomsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveMeetingRoomsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new RemoveMeetingRoomsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->meetingRoomsToRemove)) {
            $request->meetingRoomsToRemoveShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->meetingRoomsToRemove, 'MeetingRoomsToRemove', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->meetingRoomsToRemoveShrink)) {
            $body['MeetingRoomsToRemove'] = $request->meetingRoomsToRemoveShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveMeetingRooms',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/removeMeetingRooms',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveMeetingRoomsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消预定会议室
     *  *
     * @param RemoveMeetingRoomsRequest $request RemoveMeetingRoomsRequest
     *
     * @return RemoveMeetingRoomsResponse RemoveMeetingRoomsResponse
     */
    public function removeMeetingRooms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveMeetingRoomsHeaders([]);

        return $this->removeMeetingRoomsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 保存日志内容
     *  *
     * @param SaveContentRequest $tmpReq    SaveContentRequest
     * @param SaveContentHeaders $tmpHeader SaveContentHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return SaveContentResponse SaveContentResponse
     */
    public function saveContentWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SaveContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new SaveContentShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->contents)) {
            $request->contentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'Contents', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->contentsShrink)) {
            $body['Contents'] = $request->contentsShrink;
        }
        if (!Utils::isUnset($request->ddFrom)) {
            $body['DdFrom'] = $request->ddFrom;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveContent',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/saveContent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 保存日志内容
     *  *
     * @param SaveContentRequest $request SaveContentRequest
     *
     * @return SaveContentResponse SaveContentResponse
     */
    public function saveContent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SaveContentHeaders([]);

        return $this->saveContentWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 保存表单数据
     *  *
     * @param SaveFormDataRequest $request   SaveFormDataRequest
     * @param SaveFormDataHeaders $tmpHeader SaveFormDataHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return SaveFormDataResponse SaveFormDataResponse
     */
    public function saveFormDataWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new SaveFormDataShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->formDataJson)) {
            $body['FormDataJson'] = $request->formDataJson;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveFormData',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/saveFormData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveFormDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 保存表单数据
     *  *
     * @param SaveFormDataRequest $request SaveFormDataRequest
     *
     * @return SaveFormDataResponse SaveFormDataResponse
     */
    public function saveFormData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SaveFormDataHeaders([]);

        return $this->saveFormDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 提交表单或流程实例下的评论
     *  *
     * @param SaveFormRemarkRequest $request   SaveFormRemarkRequest
     * @param SaveFormRemarkHeaders $tmpHeader SaveFormRemarkHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return SaveFormRemarkResponse SaveFormRemarkResponse
     */
    public function saveFormRemarkWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new SaveFormRemarkShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->atUserId)) {
            $body['AtUserId'] = $request->atUserId;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->formInstanceId)) {
            $body['FormInstanceId'] = $request->formInstanceId;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->replyId)) {
            $body['ReplyId'] = $request->replyId;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveFormRemark',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/saveFormRemark',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveFormRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 提交表单或流程实例下的评论
     *  *
     * @param SaveFormRemarkRequest $request SaveFormRemarkRequest
     *
     * @return SaveFormRemarkResponse SaveFormRemarkResponse
     */
    public function saveFormRemark($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SaveFormRemarkHeaders([]);

        return $this->saveFormRemarkWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取员工组件的值
     *  *
     * @param SearchEmployeeFieldValuesRequest $request   SearchEmployeeFieldValuesRequest
     * @param SearchEmployeeFieldValuesHeaders $tmpHeader SearchEmployeeFieldValuesHeaders
     * @param RuntimeOptions                   $runtime   runtime options for this request RuntimeOptions
     *
     * @return SearchEmployeeFieldValuesResponse SearchEmployeeFieldValuesResponse
     */
    public function searchEmployeeFieldValuesWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new SearchEmployeeFieldValuesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->createFromTimeGMT)) {
            $body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }
        if (!Utils::isUnset($request->createToTimeGMT)) {
            $body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->modifiedFromTimeGMT)) {
            $body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }
        if (!Utils::isUnset($request->modifiedToTimeGMT)) {
            $body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }
        if (!Utils::isUnset($request->originatorId)) {
            $body['OriginatorId'] = $request->originatorId;
        }
        if (!Utils::isUnset($request->searchFieldJson)) {
            $body['SearchFieldJson'] = $request->searchFieldJson;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->targetFieldJson)) {
            $body['TargetFieldJson'] = $request->targetFieldJson;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchEmployeeFieldValues',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/searchEmployeeFieldValues',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchEmployeeFieldValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取员工组件的值
     *  *
     * @param SearchEmployeeFieldValuesRequest $request SearchEmployeeFieldValuesRequest
     *
     * @return SearchEmployeeFieldValuesResponse SearchEmployeeFieldValuesResponse
     */
    public function searchEmployeeFieldValues($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchEmployeeFieldValuesHeaders([]);

        return $this->searchEmployeeFieldValuesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取多个表单实例ID
     *  *
     * @param SearchFormDataIdListRequest $request   SearchFormDataIdListRequest
     * @param SearchFormDataIdListHeaders $tmpHeader SearchFormDataIdListHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return SearchFormDataIdListResponse SearchFormDataIdListResponse
     */
    public function searchFormDataIdListWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new SearchFormDataIdListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->createFromTimeGMT)) {
            $body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }
        if (!Utils::isUnset($request->createToTimeGMT)) {
            $body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->modifiedFromTimeGMT)) {
            $body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }
        if (!Utils::isUnset($request->modifiedToTimeGMT)) {
            $body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }
        if (!Utils::isUnset($request->originatorId)) {
            $body['OriginatorId'] = $request->originatorId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchFieldJson)) {
            $body['SearchFieldJson'] = $request->searchFieldJson;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchFormDataIdList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/searchFormDataIdList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchFormDataIdListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取多个表单实例ID
     *  *
     * @param SearchFormDataIdListRequest $request SearchFormDataIdListRequest
     *
     * @return SearchFormDataIdListResponse SearchFormDataIdListResponse
     */
    public function searchFormDataIdList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchFormDataIdListHeaders([]);

        return $this->searchFormDataIdListWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 通过高级查询条件获取表单实例数据（包括子表单组件数据）
     *  *
     * @param SearchFormDataSecondGenerationRequest $request   SearchFormDataSecondGenerationRequest
     * @param SearchFormDataSecondGenerationHeaders $tmpHeader SearchFormDataSecondGenerationHeaders
     * @param RuntimeOptions                        $runtime   runtime options for this request RuntimeOptions
     *
     * @return SearchFormDataSecondGenerationResponse SearchFormDataSecondGenerationResponse
     */
    public function searchFormDataSecondGenerationWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new SearchFormDataSecondGenerationShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->createFromTimeGMT)) {
            $body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }
        if (!Utils::isUnset($request->createToTimeGMT)) {
            $body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->modifiedFromTimeGMT)) {
            $body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }
        if (!Utils::isUnset($request->modifiedToTimeGMT)) {
            $body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }
        if (!Utils::isUnset($request->orderConfigJson)) {
            $body['OrderConfigJson'] = $request->orderConfigJson;
        }
        if (!Utils::isUnset($request->originatorId)) {
            $body['OriginatorId'] = $request->originatorId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchCondition)) {
            $body['SearchCondition'] = $request->searchCondition;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchFormDataSecondGeneration',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/searchFormDataSecondGeneration',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchFormDataSecondGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过高级查询条件获取表单实例数据（包括子表单组件数据）
     *  *
     * @param SearchFormDataSecondGenerationRequest $request SearchFormDataSecondGenerationRequest
     *
     * @return SearchFormDataSecondGenerationResponse SearchFormDataSecondGenerationResponse
     */
    public function searchFormDataSecondGeneration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchFormDataSecondGenerationHeaders([]);

        return $this->searchFormDataSecondGenerationWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 通过高级查询条件获取表单实例数据（不包括子表单组件数据）
     *  *
     * @param SearchFormDataSecondGenerationNoTableFieldRequest $request   SearchFormDataSecondGenerationNoTableFieldRequest
     * @param SearchFormDataSecondGenerationNoTableFieldHeaders $tmpHeader SearchFormDataSecondGenerationNoTableFieldHeaders
     * @param RuntimeOptions                                    $runtime   runtime options for this request RuntimeOptions
     *
     * @return SearchFormDataSecondGenerationNoTableFieldResponse SearchFormDataSecondGenerationNoTableFieldResponse
     */
    public function searchFormDataSecondGenerationNoTableFieldWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new SearchFormDataSecondGenerationNoTableFieldShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->createFromTimeGMT)) {
            $body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }
        if (!Utils::isUnset($request->createToTimeGMT)) {
            $body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->modifiedFromTimeGMT)) {
            $body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }
        if (!Utils::isUnset($request->modifiedToTimeGMT)) {
            $body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }
        if (!Utils::isUnset($request->orderConfigJson)) {
            $body['OrderConfigJson'] = $request->orderConfigJson;
        }
        if (!Utils::isUnset($request->originatorId)) {
            $body['OriginatorId'] = $request->originatorId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchCondition)) {
            $body['SearchCondition'] = $request->searchCondition;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchFormDataSecondGenerationNoTableField',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/searchFormDataSecondGenerationNoTableField',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchFormDataSecondGenerationNoTableFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 通过高级查询条件获取表单实例数据（不包括子表单组件数据）
     *  *
     * @param SearchFormDataSecondGenerationNoTableFieldRequest $request SearchFormDataSecondGenerationNoTableFieldRequest
     *
     * @return SearchFormDataSecondGenerationNoTableFieldResponse SearchFormDataSecondGenerationNoTableFieldResponse
     */
    public function searchFormDataSecondGenerationNoTableField($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchFormDataSecondGenerationNoTableFieldHeaders([]);

        return $this->searchFormDataSecondGenerationNoTableFieldWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询表单实例数据
     *  *
     * @param SearchFormDatasRequest $request   SearchFormDatasRequest
     * @param SearchFormDatasHeaders $tmpHeader SearchFormDatasHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return SearchFormDatasResponse SearchFormDatasResponse
     */
    public function searchFormDatasWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new SearchFormDatasShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->createFromTimeGMT)) {
            $body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }
        if (!Utils::isUnset($request->createToTimeGMT)) {
            $body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dynamicOrder)) {
            $body['DynamicOrder'] = $request->dynamicOrder;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->modifiedFromTimeGMT)) {
            $body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }
        if (!Utils::isUnset($request->modifiedToTimeGMT)) {
            $body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }
        if (!Utils::isUnset($request->originatorId)) {
            $body['OriginatorId'] = $request->originatorId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchFieldJson)) {
            $body['SearchFieldJson'] = $request->searchFieldJson;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchFormDatas',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/searchFormDatas',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchFormDatasResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询表单实例数据
     *  *
     * @param SearchFormDatasRequest $request SearchFormDatasRequest
     *
     * @return SearchFormDatasResponse SearchFormDatasResponse
     */
    public function searchFormDatas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchFormDatasHeaders([]);

        return $this->searchFormDatasWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 根据关键词搜索企业内部群
     *  *
     * @param SearchInnerGroupsRequest $request   SearchInnerGroupsRequest
     * @param SearchInnerGroupsHeaders $tmpHeader SearchInnerGroupsHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return SearchInnerGroupsResponse SearchInnerGroupsResponse
     */
    public function searchInnerGroupsWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new SearchInnerGroupsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $body['SearchKey'] = $request->searchKey;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SearchInnerGroups',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/im/searchInnerGroups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchInnerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据关键词搜索企业内部群
     *  *
     * @param SearchInnerGroupsRequest $request SearchInnerGroupsRequest
     *
     * @return SearchInnerGroupsResponse SearchInnerGroupsResponse
     */
    public function searchInnerGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchInnerGroupsHeaders([]);

        return $this->searchInnerGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发送钉钉Banner通知
     *  *
     * @param SendBannerRequest $tmpReq    SendBannerRequest
     * @param SendBannerHeaders $tmpHeader SendBannerHeaders
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return SendBannerResponse SendBannerResponse
     */
    public function sendBannerWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendBannerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new SendBannerShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->content)) {
            $request->contentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->contentShrink)) {
            $body['Content'] = $request->contentShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendBanner',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/watt/sendBanner',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendBannerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发送钉钉Banner通知
     *  *
     * @param SendBannerRequest $request SendBannerRequest
     *
     * @return SendBannerResponse SendBannerResponse
     */
    public function sendBanner($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendBannerHeaders([]);

        return $this->sendBannerWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发送钉钉封屏弹窗
     *  *
     * @param SendPopupRequest $tmpReq    SendPopupRequest
     * @param SendPopupHeaders $tmpHeader SendPopupHeaders
     * @param RuntimeOptions   $runtime   runtime options for this request RuntimeOptions
     *
     * @return SendPopupResponse SendPopupResponse
     */
    public function sendPopupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendPopupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new SendPopupShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->content)) {
            $request->contentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->contentShrink)) {
            $body['Content'] = $request->contentShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendPopup',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/watt/sendPopup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendPopupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发送钉钉封屏弹窗
     *  *
     * @param SendPopupRequest $request SendPopupRequest
     *
     * @return SendPopupResponse SendPopupResponse
     */
    public function sendPopup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendPopupHeaders([]);

        return $this->sendPopupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发送钉钉搜索底纹
     *  *
     * @param SendSearchShadeRequest $tmpReq    SendSearchShadeRequest
     * @param SendSearchShadeHeaders $tmpHeader SendSearchShadeHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return SendSearchShadeResponse SendSearchShadeResponse
     */
    public function sendSearchShadeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SendSearchShadeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new SendSearchShadeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->content)) {
            $request->contentShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->contentShrink)) {
            $body['Content'] = $request->contentShrink;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendSearchShade',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/watt/sendSearchShade',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendSearchShadeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发送钉钉搜索底纹
     *  *
     * @param SendSearchShadeRequest $request SendSearchShadeRequest
     *
     * @return SendSearchShadeResponse SendSearchShadeResponse
     */
    public function sendSearchShade($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendSearchShadeHeaders([]);

        return $this->sendSearchShadeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 指定列隐藏
     *  *
     * @param SetColumnsVisibilityRequest $tmpReq    SetColumnsVisibilityRequest
     * @param SetColumnsVisibilityHeaders $tmpHeader SetColumnsVisibilityHeaders
     * @param RuntimeOptions              $runtime   runtime options for this request RuntimeOptions
     *
     * @return SetColumnsVisibilityResponse SetColumnsVisibilityResponse
     */
    public function setColumnsVisibilityWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetColumnsVisibilityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new SetColumnsVisibilityShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->column)) {
            $body['Column'] = $request->column;
        }
        if (!Utils::isUnset($request->columnCount)) {
            $body['ColumnCount'] = $request->columnCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->visibility)) {
            $body['Visibility'] = $request->visibility;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetColumnsVisibility',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/setColumnsVisibility',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetColumnsVisibilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 指定列隐藏
     *  *
     * @param SetColumnsVisibilityRequest $request SetColumnsVisibilityRequest
     *
     * @return SetColumnsVisibilityResponse SetColumnsVisibilityResponse
     */
    public function setColumnsVisibility($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SetColumnsVisibilityHeaders([]);

        return $this->setColumnsVisibilityWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 指定行隐藏
     *  *
     * @param SetRowsVisibilityRequest $tmpReq    SetRowsVisibilityRequest
     * @param SetRowsVisibilityHeaders $tmpHeader SetRowsVisibilityHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return SetRowsVisibilityResponse SetRowsVisibilityResponse
     */
    public function setRowsVisibilityWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetRowsVisibilityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new SetRowsVisibilityShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->row)) {
            $body['Row'] = $request->row;
        }
        if (!Utils::isUnset($request->rowCount)) {
            $body['RowCount'] = $request->rowCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->visibility)) {
            $body['Visibility'] = $request->visibility;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetRowsVisibility',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/setRowsVisibility',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetRowsVisibilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 指定行隐藏
     *  *
     * @param SetRowsVisibilityRequest $request SetRowsVisibilityRequest
     *
     * @return SetRowsVisibilityResponse SetRowsVisibilityResponse
     */
    public function setRowsVisibility($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SetRowsVisibilityHeaders([]);

        return $this->setRowsVisibilityWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取用户发送日志的概要信息
     *  *
     * @param SimpleListReportRequest $tmpReq    SimpleListReportRequest
     * @param SimpleListReportHeaders $tmpHeader SimpleListReportHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return SimpleListReportResponse SimpleListReportResponse
     */
    public function simpleListReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SimpleListReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new SimpleListReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->cursor)) {
            $body['Cursor'] = $request->cursor;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SimpleListReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/simpleListReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SimpleListReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户发送日志的概要信息
     *  *
     * @param SimpleListReportRequest $request SimpleListReportRequest
     *
     * @return SimpleListReportResponse SimpleListReportResponse
     */
    public function simpleListReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SimpleListReportHeaders([]);

        return $this->simpleListReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 开启视频会议云录制
     *  *
     * @param StartCloudRecordRequest $tmpReq    StartCloudRecordRequest
     * @param StartCloudRecordHeaders $tmpHeader StartCloudRecordHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return StartCloudRecordResponse StartCloudRecordResponse
     */
    public function startCloudRecordWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartCloudRecordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new StartCloudRecordShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->smallWindowPosition)) {
            $body['SmallWindowPosition'] = $request->smallWindowPosition;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartCloudRecord',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/startCloudRecord',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartCloudRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 开启视频会议云录制
     *  *
     * @param StartCloudRecordRequest $request StartCloudRecordRequest
     *
     * @return StartCloudRecordResponse StartCloudRecordResponse
     */
    public function startCloudRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartCloudRecordHeaders([]);

        return $this->startCloudRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 发起宜搭审批流程
     *  *
     * @param StartInstanceRequest $request   StartInstanceRequest
     * @param StartInstanceHeaders $tmpHeader StartInstanceHeaders
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return StartInstanceResponse StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new StartInstanceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->departmentId)) {
            $body['DepartmentId'] = $request->departmentId;
        }
        if (!Utils::isUnset($request->formDataJson)) {
            $body['FormDataJson'] = $request->formDataJson;
        }
        if (!Utils::isUnset($request->formUuid)) {
            $body['FormUuid'] = $request->formUuid;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->processCode)) {
            $body['ProcessCode'] = $request->processCode;
        }
        if (!Utils::isUnset($request->processData)) {
            $body['ProcessData'] = $request->processData;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartInstance',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/startInstance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 发起宜搭审批流程
     *  *
     * @param StartInstanceRequest $request StartInstanceRequest
     *
     * @return StartInstanceResponse StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartInstanceHeaders([]);

        return $this->startInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取日志相关人员列表
     *  *
     * @param StatisticsListByTypeReportRequest $tmpReq    StatisticsListByTypeReportRequest
     * @param StatisticsListByTypeReportHeaders $tmpHeader StatisticsListByTypeReportHeaders
     * @param RuntimeOptions                    $runtime   runtime options for this request RuntimeOptions
     *
     * @return StatisticsListByTypeReportResponse StatisticsListByTypeReportResponse
     */
    public function statisticsListByTypeReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StatisticsListByTypeReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new StatisticsListByTypeReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->offset)) {
            $body['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->reportId)) {
            $body['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StatisticsListByTypeReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/statisticsListByTypeReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StatisticsListByTypeReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取日志相关人员列表
     *  *
     * @param StatisticsListByTypeReportRequest $request StatisticsListByTypeReportRequest
     *
     * @return StatisticsListByTypeReportResponse StatisticsListByTypeReportResponse
     */
    public function statisticsListByTypeReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StatisticsListByTypeReportHeaders([]);

        return $this->statisticsListByTypeReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取日志统计数据
     *  *
     * @param StatisticsReportRequest $tmpReq    StatisticsReportRequest
     * @param StatisticsReportHeaders $tmpHeader StatisticsReportHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return StatisticsReportResponse StatisticsReportResponse
     */
    public function statisticsReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StatisticsReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new StatisticsReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->reportId)) {
            $body['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StatisticsReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/statisticsReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StatisticsReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取日志统计数据
     *  *
     * @param StatisticsReportRequest $request StatisticsReportRequest
     *
     * @return StatisticsReportResponse StatisticsReportResponse
     */
    public function statisticsReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StatisticsReportHeaders([]);

        return $this->statisticsReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 停止视频会议云录制
     *  *
     * @param StopCloudRecordRequest $tmpReq    StopCloudRecordRequest
     * @param StopCloudRecordHeaders $tmpHeader StopCloudRecordHeaders
     * @param RuntimeOptions         $runtime   runtime options for this request RuntimeOptions
     *
     * @return StopCloudRecordResponse StopCloudRecordResponse
     */
    public function stopCloudRecordWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopCloudRecordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new StopCloudRecordShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopCloudRecord',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/stopCloudRecord',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopCloudRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止视频会议云录制
     *  *
     * @param StopCloudRecordRequest $request StopCloudRecordRequest
     *
     * @return StopCloudRecordResponse StopCloudRecordResponse
     */
    public function stopCloudRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StopCloudRecordHeaders([]);

        return $this->stopCloudRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 订阅公共日历
     *  *
     * @param SubscribeCalendarRequest $request   SubscribeCalendarRequest
     * @param SubscribeCalendarHeaders $tmpHeader SubscribeCalendarHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return SubscribeCalendarResponse SubscribeCalendarResponse
     */
    public function subscribeCalendarWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new SubscribeCalendarShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubscribeCalendar',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/subscribeCalendar',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubscribeCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 订阅公共日历
     *  *
     * @param SubscribeCalendarRequest $request SubscribeCalendarRequest
     *
     * @return SubscribeCalendarResponse SubscribeCalendarResponse
     */
    public function subscribeCalendar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SubscribeCalendarHeaders([]);

        return $this->subscribeCalendarWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 同步钉钉账号类型
     *  *
     * @param SyncDingTypeRequest $tmpReq    SyncDingTypeRequest
     * @param SyncDingTypeHeaders $tmpHeader SyncDingTypeHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return SyncDingTypeResponse SyncDingTypeResponse
     */
    public function syncDingTypeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SyncDingTypeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new SyncDingTypeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dingType)) {
            $body['DingType'] = $request->dingType;
        }
        if (!Utils::isUnset($request->isDimission)) {
            $body['IsDimission'] = $request->isDimission;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workNo)) {
            $body['WorkNo'] = $request->workNo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncDingType',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/aliding/v1/indepding/syncDingType',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncDingTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 同步钉钉账号类型
     *  *
     * @param SyncDingTypeRequest $request SyncDingTypeRequest
     *
     * @return SyncDingTypeResponse SyncDingTypeResponse
     */
    public function syncDingType($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SyncDingTypeHeaders([]);

        return $this->syncDingTypeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 终止流程实例
     *  *
     * @param TerminateInstanceRequest $request   TerminateInstanceRequest
     * @param TerminateInstanceHeaders $tmpHeader TerminateInstanceHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return TerminateInstanceResponse TerminateInstanceResponse
     */
    public function terminateInstanceWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new TerminateInstanceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->processInstanceId)) {
            $body['ProcessInstanceId'] = $request->processInstanceId;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TerminateInstance',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/terminateInstance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TerminateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 终止流程实例
     *  *
     * @param TerminateInstanceRequest $request TerminateInstanceRequest
     *
     * @return TerminateInstanceResponse TerminateInstanceResponse
     */
    public function terminateInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TerminateInstanceHeaders([]);

        return $this->terminateInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 取消订阅公共日历
     *  *
     * @param UnsubscribeCalendarRequest $request   UnsubscribeCalendarRequest
     * @param UnsubscribeCalendarHeaders $tmpHeader UnsubscribeCalendarHeaders
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return UnsubscribeCalendarResponse UnsubscribeCalendarResponse
     */
    public function unsubscribeCalendarWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new UnsubscribeCalendarShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnsubscribeCalendar',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/unsubscribeCalendar',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnsubscribeCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 取消订阅公共日历
     *  *
     * @param UnsubscribeCalendarRequest $request UnsubscribeCalendarRequest
     *
     * @return UnsubscribeCalendarResponse UnsubscribeCalendarResponse
     */
    public function unsubscribeCalendar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UnsubscribeCalendarHeaders([]);

        return $this->unsubscribeCalendarWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新表单数据
     *  *
     * @param UpdateFormDataRequest $request   UpdateFormDataRequest
     * @param UpdateFormDataHeaders $tmpHeader UpdateFormDataHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateFormDataResponse UpdateFormDataResponse
     */
    public function updateFormDataWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new UpdateFormDataShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->formInstanceId)) {
            $body['FormInstanceId'] = $request->formInstanceId;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->updateFormDataJson)) {
            $body['UpdateFormDataJson'] = $request->updateFormDataJson;
        }
        if (!Utils::isUnset($request->useLatestVersion)) {
            $body['UseLatestVersion'] = $request->useLatestVersion;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFormData',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/updateFormData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFormDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新表单数据
     *  *
     * @param UpdateFormDataRequest $request UpdateFormDataRequest
     *
     * @return UpdateFormDataResponse UpdateFormDataResponse
     */
    public function updateFormData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateFormDataHeaders([]);

        return $this->updateFormDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新流程实例
     *  *
     * @param UpdateInstanceRequest $request   UpdateInstanceRequest
     * @param UpdateInstanceHeaders $tmpHeader UpdateInstanceHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new UpdateInstanceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->processInstanceId)) {
            $body['ProcessInstanceId'] = $request->processInstanceId;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        if (!Utils::isUnset($request->updateFormDataJson)) {
            $body['UpdateFormDataJson'] = $request->updateFormDataJson;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstance',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/updateInstance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新流程实例
     *  *
     * @param UpdateInstanceRequest $request UpdateInstanceRequest
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateInstanceHeaders([]);

        return $this->updateInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改直播属性信息
     *  *
     * @param UpdateLiveRequest $tmpReq    UpdateLiveRequest
     * @param UpdateLiveHeaders $tmpHeader UpdateLiveHeaders
     * @param RuntimeOptions    $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateLiveResponse UpdateLiveResponse
     */
    public function updateLiveWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLiveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateLiveShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->coverUrl)) {
            $body['CoverUrl'] = $request->coverUrl;
        }
        if (!Utils::isUnset($request->introduction)) {
            $body['Introduction'] = $request->introduction;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->preEndTime)) {
            $body['PreEndTime'] = $request->preEndTime;
        }
        if (!Utils::isUnset($request->preStartTime)) {
            $body['PreStartTime'] = $request->preStartTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLive',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/updateLive',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改直播属性信息
     *  *
     * @param UpdateLiveRequest $request UpdateLiveRequest
     *
     * @return UpdateLiveResponse UpdateLiveResponse
     */
    public function updateLive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateLiveHeaders([]);

        return $this->updateLiveWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新会议室信息
     *  *
     * @param UpdateMeetingRoomRequest $tmpReq    UpdateMeetingRoomRequest
     * @param UpdateMeetingRoomHeaders $tmpHeader UpdateMeetingRoomHeaders
     * @param RuntimeOptions           $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateMeetingRoomResponse UpdateMeetingRoomResponse
     */
    public function updateMeetingRoomWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMeetingRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateMeetingRoomShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->reservationAuthority)) {
            $request->reservationAuthorityShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->reservationAuthority, 'ReservationAuthority', 'json');
        }
        if (!Utils::isUnset($tmpReq->roomLabelIds)) {
            $request->roomLabelIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomLabelIds, 'RoomLabelIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->roomLocation)) {
            $request->roomLocationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomLocation, 'RoomLocation', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->enableCycleReservation)) {
            $body['EnableCycleReservation'] = $request->enableCycleReservation;
        }
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->isvRoomId)) {
            $body['IsvRoomId'] = $request->isvRoomId;
        }
        if (!Utils::isUnset($request->reservationAuthorityShrink)) {
            $body['ReservationAuthority'] = $request->reservationAuthorityShrink;
        }
        if (!Utils::isUnset($request->roomCapacity)) {
            $body['RoomCapacity'] = $request->roomCapacity;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->roomLabelIdsShrink)) {
            $body['RoomLabelIds'] = $request->roomLabelIdsShrink;
        }
        if (!Utils::isUnset($request->roomLocationShrink)) {
            $body['RoomLocation'] = $request->roomLocationShrink;
        }
        if (!Utils::isUnset($request->roomName)) {
            $body['RoomName'] = $request->roomName;
        }
        if (!Utils::isUnset($request->roomPicture)) {
            $body['RoomPicture'] = $request->roomPicture;
        }
        if (!Utils::isUnset($request->roomStatus)) {
            $body['RoomStatus'] = $request->roomStatus;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMeetingRoom',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/updateMeetingRoom',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMeetingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新会议室信息
     *  *
     * @param UpdateMeetingRoomRequest $request UpdateMeetingRoomRequest
     *
     * @return UpdateMeetingRoomResponse UpdateMeetingRoomResponse
     */
    public function updateMeetingRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateMeetingRoomHeaders([]);

        return $this->updateMeetingRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新会议室分组信息
     *  *
     * @param UpdateMeetingRoomGroupRequest $tmpReq    UpdateMeetingRoomGroupRequest
     * @param UpdateMeetingRoomGroupHeaders $tmpHeader UpdateMeetingRoomGroupHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateMeetingRoomGroupResponse UpdateMeetingRoomGroupResponse
     */
    public function updateMeetingRoomGroupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMeetingRoomGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateMeetingRoomGroupShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMeetingRoomGroup',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/updateMeetingRoomGroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMeetingRoomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新会议室分组信息
     *  *
     * @param UpdateMeetingRoomGroupRequest $request UpdateMeetingRoomGroupRequest
     *
     * @return UpdateMeetingRoomGroupResponse UpdateMeetingRoomGroupResponse
     */
    public function updateMeetingRoomGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateMeetingRoomGroupHeaders([]);

        return $this->updateMeetingRoomGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新单元格区域
     *  *
     * @param UpdateRangeRequest $tmpReq    UpdateRangeRequest
     * @param UpdateRangeHeaders $tmpHeader UpdateRangeHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateRangeResponse UpdateRangeResponse
     */
    public function updateRangeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateRangeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateRangeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->backgroundColors)) {
            $request->backgroundColorsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->backgroundColors, 'BackgroundColors', 'json');
        }
        if (!Utils::isUnset($tmpReq->hyperlinks)) {
            $request->hyperlinksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hyperlinks, 'Hyperlinks', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->values)) {
            $request->valuesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->values, 'Values', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->backgroundColorsShrink)) {
            $body['BackgroundColors'] = $request->backgroundColorsShrink;
        }
        if (!Utils::isUnset($request->hyperlinksShrink)) {
            $body['Hyperlinks'] = $request->hyperlinksShrink;
        }
        if (!Utils::isUnset($request->numberFormat)) {
            $body['NumberFormat'] = $request->numberFormat;
        }
        if (!Utils::isUnset($request->rangeAddress)) {
            $body['RangeAddress'] = $request->rangeAddress;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->valuesShrink)) {
            $body['Values'] = $request->valuesShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRange',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/updateRange',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新单元格区域
     *  *
     * @param UpdateRangeRequest $request UpdateRangeRequest
     *
     * @return UpdateRangeResponse UpdateRangeResponse
     */
    public function updateRange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateRangeHeaders([]);

        return $this->updateRangeWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新预约会议设置
     *  *
     * @param UpdateScheduleConfSettingsRequest $tmpReq    UpdateScheduleConfSettingsRequest
     * @param UpdateScheduleConfSettingsHeaders $tmpHeader UpdateScheduleConfSettingsHeaders
     * @param RuntimeOptions                    $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateScheduleConfSettingsResponse UpdateScheduleConfSettingsResponse
     */
    public function updateScheduleConfSettingsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateScheduleConfSettingsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateScheduleConfSettingsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfSettingModel)) {
            $request->scheduleConfSettingModelShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfSettingModel, 'ScheduleConfSettingModel', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->scheduleConfSettingModelShrink)) {
            $body['ScheduleConfSettingModel'] = $request->scheduleConfSettingModelShrink;
        }
        if (!Utils::isUnset($request->scheduleConferenceId)) {
            $body['ScheduleConferenceId'] = $request->scheduleConferenceId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateScheduleConfSettings',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/updateScheduleConfSettings',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateScheduleConfSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新预约会议设置
     *  *
     * @param UpdateScheduleConfSettingsRequest $request UpdateScheduleConfSettingsRequest
     *
     * @return UpdateScheduleConfSettingsResponse UpdateScheduleConfSettingsResponse
     */
    public function updateScheduleConfSettings($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateScheduleConfSettingsHeaders([]);

        return $this->updateScheduleConfSettingsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新预约会议
     *  *
     * @param UpdateScheduleConferenceRequest $tmpReq    UpdateScheduleConferenceRequest
     * @param UpdateScheduleConferenceHeaders $tmpHeader UpdateScheduleConferenceHeaders
     * @param RuntimeOptions                  $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateScheduleConferenceResponse UpdateScheduleConferenceResponse
     */
    public function updateScheduleConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateScheduleConferenceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateScheduleConferenceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->scheduleConferenceId)) {
            $body['ScheduleConferenceId'] = $request->scheduleConferenceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateScheduleConference',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/updateScheduleConference',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateScheduleConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新预约会议
     *  *
     * @param UpdateScheduleConferenceRequest $request UpdateScheduleConferenceRequest
     *
     * @return UpdateScheduleConferenceResponse UpdateScheduleConferenceResponse
     */
    public function updateScheduleConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateScheduleConferenceHeaders([]);

        return $this->updateScheduleConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新状态
     *  *
     * @param UpdateStatusRequest $tmpReq    UpdateStatusRequest
     * @param UpdateStatusHeaders $tmpHeader UpdateStatusHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateStatusResponse UpdateStatusResponse
     */
    public function updateStatusWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateStatusShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->errorLines)) {
            $request->errorLinesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->errorLines, 'ErrorLines', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->errorLinesShrink)) {
            $body['ErrorLines'] = $request->errorLinesShrink;
        }
        if (!Utils::isUnset($request->importSequence)) {
            $body['ImportSequence'] = $request->importSequence;
        }
        if (!Utils::isUnset($request->language)) {
            $body['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->systemToken)) {
            $body['SystemToken'] = $request->systemToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateStatus',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/yida/updateStatus',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新状态
     *  *
     * @param UpdateStatusRequest $request UpdateStatusRequest
     *
     * @return UpdateStatusResponse UpdateStatusResponse
     */
    public function updateStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateStatusHeaders([]);

        return $this->updateStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新订阅日历
     *  *
     * @param UpdateSubscribedCalendarsRequest $tmpReq    UpdateSubscribedCalendarsRequest
     * @param UpdateSubscribedCalendarsHeaders $tmpHeader UpdateSubscribedCalendarsHeaders
     * @param RuntimeOptions                   $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateSubscribedCalendarsResponse UpdateSubscribedCalendarsResponse
     */
    public function updateSubscribedCalendarsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateSubscribedCalendarsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateSubscribedCalendarsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->managers)) {
            $request->managersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->managers, 'Managers', 'json');
        }
        if (!Utils::isUnset($tmpReq->subscribeScope)) {
            $request->subscribeScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subscribeScope, 'SubscribeScope', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->managersShrink)) {
            $body['Managers'] = $request->managersShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->subscribeScopeShrink)) {
            $body['SubscribeScope'] = $request->subscribeScopeShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateSubscribedCalendars',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/updateSubscribedCalendars',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSubscribedCalendarsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新订阅日历
     *  *
     * @param UpdateSubscribedCalendarsRequest $request UpdateSubscribedCalendarsRequest
     *
     * @return UpdateSubscribedCalendarsResponse UpdateSubscribedCalendarsResponse
     */
    public function updateSubscribedCalendars($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateSubscribedCalendarsHeaders([]);

        return $this->updateSubscribedCalendarsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新代办
     *  *
     * @param UpdateTodoTaskRequest $tmpReq    UpdateTodoTaskRequest
     * @param UpdateTodoTaskHeaders $tmpHeader UpdateTodoTaskHeaders
     * @param RuntimeOptions        $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateTodoTaskResponse UpdateTodoTaskResponse
     */
    public function updateTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTodoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateTodoTaskShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->executorIds)) {
            $request->executorIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'executorIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->participantIds)) {
            $request->participantIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->participantIds, 'participantIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->done)) {
            $body['done'] = $request->done;
        }
        if (!Utils::isUnset($request->dueTime)) {
            $body['dueTime'] = $request->dueTime;
        }
        if (!Utils::isUnset($request->executorIdsShrink)) {
            $body['executorIds'] = $request->executorIdsShrink;
        }
        if (!Utils::isUnset($request->participantIdsShrink)) {
            $body['participantIds'] = $request->participantIdsShrink;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTodoTask',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/task/updateTodoTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新代办
     *  *
     * @param UpdateTodoTaskRequest $request UpdateTodoTaskRequest
     *
     * @return UpdateTodoTaskResponse UpdateTodoTaskResponse
     */
    public function updateTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateTodoTaskHeaders([]);

        return $this->updateTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新代办执行者状态
     *  *
     * @param UpdateTodoTaskExecutorStatusRequest $tmpReq    UpdateTodoTaskExecutorStatusRequest
     * @param UpdateTodoTaskExecutorStatusHeaders $tmpHeader UpdateTodoTaskExecutorStatusHeaders
     * @param RuntimeOptions                      $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateTodoTaskExecutorStatusResponse UpdateTodoTaskExecutorStatusResponse
     */
    public function updateTodoTaskExecutorStatusWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTodoTaskExecutorStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateTodoTaskExecutorStatusShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->executorStatusList)) {
            $request->executorStatusListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executorStatusList, 'executorStatusList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->executorStatusListShrink)) {
            $body['executorStatusList'] = $request->executorStatusListShrink;
        }
        if (!Utils::isUnset($request->operatorId)) {
            $body['operatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTodoTaskExecutorStatus',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/task/updateTodoTaskExecutorStatus',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTodoTaskExecutorStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新代办执行者状态
     *  *
     * @param UpdateTodoTaskExecutorStatusRequest $request UpdateTodoTaskExecutorStatusRequest
     *
     * @return UpdateTodoTaskExecutorStatusResponse UpdateTodoTaskExecutorStatusResponse
     */
    public function updateTodoTaskExecutorStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateTodoTaskExecutorStatusHeaders([]);

        return $this->updateTodoTaskExecutorStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新企业账号用户头像
     *  *
     * @param UpdateUserAvatarRequest $request   UpdateUserAvatarRequest
     * @param UpdateUserAvatarHeaders $tmpHeader UpdateUserAvatarHeaders
     * @param RuntimeOptions          $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateUserAvatarResponse UpdateUserAvatarResponse
     */
    public function updateUserAvatarWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new UpdateUserAvatarShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->avatarMediaId)) {
            $body['AvatarMediaId'] = $request->avatarMediaId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateUserAvatar',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/contact/updateUserAvatar',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateUserAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新企业账号用户头像
     *  *
     * @param UpdateUserAvatarRequest $request UpdateUserAvatarRequest
     *
     * @return UpdateUserAvatarResponse UpdateUserAvatarResponse
     */
    public function updateUserAvatar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateUserAvatarHeaders([]);

        return $this->updateUserAvatarWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 修改知识库文档成员权限
     *  *
     * @param UpdateWorkspaceDocMembersRequest $tmpReq    UpdateWorkspaceDocMembersRequest
     * @param UpdateWorkspaceDocMembersHeaders $tmpHeader UpdateWorkspaceDocMembersHeaders
     * @param RuntimeOptions                   $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkspaceDocMembersResponse UpdateWorkspaceDocMembersResponse
     */
    public function updateWorkspaceDocMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateWorkspaceDocMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateWorkspaceDocMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspaceDocMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/updateWorkspaceDocMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkspaceDocMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改知识库文档成员权限
     *  *
     * @param UpdateWorkspaceDocMembersRequest $request UpdateWorkspaceDocMembersRequest
     *
     * @return UpdateWorkspaceDocMembersResponse UpdateWorkspaceDocMembersResponse
     */
    public function updateWorkspaceDocMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateWorkspaceDocMembersHeaders([]);

        return $this->updateWorkspaceDocMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 更新知识库成员权限
     *  *
     * @param UpdateWorkspaceMembersRequest $tmpReq    UpdateWorkspaceMembersRequest
     * @param UpdateWorkspaceMembersHeaders $tmpHeader UpdateWorkspaceMembersHeaders
     * @param RuntimeOptions                $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateWorkspaceMembersResponse UpdateWorkspaceMembersResponse
     */
    public function updateWorkspaceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateWorkspaceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateWorkspaceMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspaceMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/updateWorkspaceMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkspaceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新知识库成员权限
     *  *
     * @param UpdateWorkspaceMembersRequest $request UpdateWorkspaceMembersRequest
     *
     * @return UpdateWorkspaceMembersResponse UpdateWorkspaceMembersResponse
     */
    public function updateWorkspaceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateWorkspaceMembersHeaders([]);

        return $this->updateWorkspaceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 上传媒体<br/>
     *  *
     * @param UploadMediaRequest $tmpReq    UploadMediaRequest
     * @param UploadMediaHeaders $tmpHeader UploadMediaHeaders
     * @param RuntimeOptions     $runtime   runtime options for this request RuntimeOptions
     *
     * @return UploadMediaResponse UploadMediaResponse
     */
    public function uploadMediaWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UploadMediaShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UploadMediaShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->mediaName)) {
            $body['mediaName'] = $request->mediaName;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $body['mediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['orgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->url)) {
            $body['url'] = $request->url;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UploadMedia',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/aliding/v1/documents/uploadMedia',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadMediaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上传媒体<br/>
     *  *
     * @param UploadMediaRequest $request UploadMediaRequest
     *
     * @return UploadMediaResponse UploadMediaResponse
     */
    public function uploadMedia($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UploadMediaHeaders([]);

        return $this->uploadMediaWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 穿戴勋章
     *  *
     * @param WearOrgHonorRequest $tmpReq    WearOrgHonorRequest
     * @param WearOrgHonorHeaders $tmpHeader WearOrgHonorHeaders
     * @param RuntimeOptions      $runtime   runtime options for this request RuntimeOptions
     *
     * @return WearOrgHonorResponse WearOrgHonorResponse
     */
    public function wearOrgHonorWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new WearOrgHonorShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new WearOrgHonorShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->honorId)) {
            $body['honorId'] = $request->honorId;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['orgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['userId'] = $request->userId;
        }
        if (!Utils::isUnset($request->wear)) {
            $body['wear'] = $request->wear;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'WearOrgHonor',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/aliding/v1/honor/wearOrgHonor',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WearOrgHonorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 穿戴勋章
     *  *
     * @param WearOrgHonorRequest $request WearOrgHonorRequest
     *
     * @return WearOrgHonorResponse WearOrgHonorResponse
     */
    public function wearOrgHonor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new WearOrgHonorHeaders([]);

        return $this->wearOrgHonorWithOptions($request, $headers, $runtime);
    }
}
