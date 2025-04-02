<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddRecordPermissionHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddRecordPermissionRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddRecordPermissionResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddRecordPermissionShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddRecordPermissionShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddScenegroupMemberHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddScenegroupMemberRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddScenegroupMemberResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddScenegroupMemberShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddTicketMemoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddTicketMemoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddTicketMemoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddTicketMemoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddTicketMemoShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\AssignTicketHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AssignTicketRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AssignTicketResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AssignTicketShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AssignTicketShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\CheckAlibabaStaffHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CheckAlibabaStaffRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CheckAlibabaStaffResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CheckAlibabaStaffShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CheckAlibabaStaffShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\CloseVideoConferenceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CloseVideoConferenceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CloseVideoConferenceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CloseVideoConferenceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CloseVideoConferenceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CopyDentryHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CopyDentryRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CopyDentryResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CopyDentryShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CopyDentryShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageResponse;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponse;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateThreadHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateThreadRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateThreadResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\FinishTicketHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\FinishTicketRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\FinishTicketResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\FinishTicketShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\FinishTicketShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDeptNoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDeptNoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDeptNoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDeptNoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDeptNoShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileUploadInfoShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetGroupLiveListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetGroupLiveListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetGroupLiveListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetGroupLiveListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetGroupLiveListShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableAllFieldsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableAllFieldsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableAllFieldsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableAllFieldsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableAllFieldsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableAllSheetsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableAllSheetsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableAllSheetsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableAllSheetsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableAllSheetsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableRecordHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableRecordRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableRecordResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableRecordShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableRecordShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableSheetHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableSheetRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableSheetResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableSheetShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableSheetShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgLiveListShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgOrWebOpenDocContentTaskIdHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgOrWebOpenDocContentTaskIdRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgOrWebOpenDocContentTaskIdResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgOrWebOpenDocContentTaskIdShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetOrgOrWebOpenDocContentTaskIdShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetScheduleShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetContentJobIdHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetContentJobIdRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetContentJobIdResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetContentJobIdShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetContentJobIdShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTodoTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTodoTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTodoTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTodoTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTodoTaskShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserIdByOrgIdAndStaffIdHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserIdByOrgIdAndStaffIdRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserIdByOrgIdAndStaffIdResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserIdByOrgIdAndStaffIdShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserIdByOrgIdAndStaffIdShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserIdHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserIdRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserIdResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserIdShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserIdShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\InitMultipartFileUploadHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InitMultipartFileUploadRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InitMultipartFileUploadResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InitMultipartFileUploadShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InitMultipartFileUploadShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeSkillHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeSkillRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeSkillResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeSkillShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeSkillShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMessageHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMessageRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMessageResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMultiDimTableRecordsShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTemplateHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTemplateRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTemplateResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTemplateShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTemplateShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListTicketOperateRecordShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoByRoomCodeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoByRoomCodeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoByRoomCodeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoByRoomCodeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoByRoomCodeShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryGroupLiveInfoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryGroupLiveInfoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryGroupLiveInfoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryGroupLiveInfoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryGroupLiveInfoShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesTextHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesTextRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesTextResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesTextShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesTextShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryRecordMinutesUrlHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryRecordMinutesUrlRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryRecordMinutesUrlResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryRecordMinutesUrlShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryRecordMinutesUrlShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryReportDetailHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryReportDetailRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryReportDetailResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryReportDetailShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryReportDetailShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceInfoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceInfoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceInfoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceInfoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceInfoShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\RespondEventHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RespondEventRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RespondEventResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RespondEventShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RespondEventShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RetrieveRunHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RetrieveRunRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RetrieveRunResponse;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetConferenceHostsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetConferenceHostsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetConferenceHostsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetConferenceHostsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetConferenceHostsShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartMinutesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartMinutesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartMinutesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartMinutesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartMinutesShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopMinutesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopMinutesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopMinutesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopMinutesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopMinutesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeCalendarHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeCalendarRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeCalendarResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeCalendarShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeEventHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeEventRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeEventResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeEventShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SubscribeEventShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SyncDingTypeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SyncDingTypeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SyncDingTypeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SyncDingTypeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SyncDingTypeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TerminateInstanceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TerminateInstanceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TerminateInstanceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TerminateInstanceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TransferTicketHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TransferTicketRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TransferTicketResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TransferTicketShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\TransferTicketShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeCalendarHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeCalendarRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeCalendarResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeCalendarShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeEventHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeEventRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeEventResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeEventShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UnsubscribeEventShrinkRequest;
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
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateVideoConferenceSettingHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateVideoConferenceSettingRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateVideoConferenceSettingResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateVideoConferenceSettingShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateVideoConferenceSettingShrinkRequest;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 添加日程参与者.
     *
     * @param tmpReq - AddAttendeeRequest
     * @param tmpHeader - AddAttendeeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddAttendeeResponse
     *
     * @param AddAttendeeRequest $tmpReq
     * @param AddAttendeeHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return AddAttendeeResponse
     */
    public function addAttendeeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new AddAttendeeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new AddAttendeeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->attendeesToAdd) {
            $request->attendeesToAddShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attendeesToAdd, 'AttendeesToAdd', 'json');
        }

        $body = [];
        if (null !== $request->attendeesToAddShrink) {
            @$body['AttendeesToAdd'] = $request->attendeesToAddShrink;
        }

        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        if (null !== $request->eventId) {
            @$body['EventId'] = $request->eventId;
        }

        if (null !== $request->chatNotification) {
            @$body['chatNotification'] = $request->chatNotification;
        }

        if (null !== $request->pushNotification) {
            @$body['pushNotification'] = $request->pushNotification;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddAttendee',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/addAttendee',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddAttendeeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddAttendeeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 添加日程参与者.
     *
     * @param request - AddAttendeeRequest
     *
     * @returns AddAttendeeResponse
     *
     * @param AddAttendeeRequest $request
     *
     * @return AddAttendeeResponse
     */
    public function addAttendee($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddAttendeeHeaders([]);

        return $this->addAttendeeWithOptions($request, $headers, $runtime);
    }

    /**
     * 新建钉盘空间.
     *
     * @param tmpReq - AddDriveSpaceRequest
     * @param tmpHeader - AddDriveSpaceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDriveSpaceResponse
     *
     * @param AddDriveSpaceRequest $tmpReq
     * @param AddDriveSpaceHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return AddDriveSpaceResponse
     */
    public function addDriveSpaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new AddDriveSpaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new AddDriveSpaceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddDriveSpace',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/addDriveSpace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddDriveSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddDriveSpaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 新建钉盘空间.
     *
     * @param request - AddDriveSpaceRequest
     *
     * @returns AddDriveSpaceResponse
     *
     * @param AddDriveSpaceRequest $request
     *
     * @return AddDriveSpaceResponse
     */
    public function addDriveSpace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddDriveSpaceHeaders([]);

        return $this->addDriveSpaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 预定会议室.
     *
     * @param tmpReq - AddMeetingRoomsRequest
     * @param tmpHeader - AddMeetingRoomsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMeetingRoomsResponse
     *
     * @param AddMeetingRoomsRequest $tmpReq
     * @param AddMeetingRoomsHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return AddMeetingRoomsResponse
     */
    public function addMeetingRoomsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new AddMeetingRoomsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new AddMeetingRoomsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->meetingRoomsToAdd) {
            $request->meetingRoomsToAddShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->meetingRoomsToAdd, 'MeetingRoomsToAdd', 'json');
        }

        $body = [];
        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        if (null !== $request->eventId) {
            @$body['EventId'] = $request->eventId;
        }

        if (null !== $request->meetingRoomsToAddShrink) {
            @$body['MeetingRoomsToAdd'] = $request->meetingRoomsToAddShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddMeetingRooms',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/addMeetingRooms',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddMeetingRoomsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddMeetingRoomsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 预定会议室.
     *
     * @param request - AddMeetingRoomsRequest
     *
     * @returns AddMeetingRoomsResponse
     *
     * @param AddMeetingRoomsRequest $request
     *
     * @return AddMeetingRoomsResponse
     */
    public function addMeetingRooms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddMeetingRoomsHeaders([]);

        return $this->addMeetingRoomsWithOptions($request, $headers, $runtime);
    }

    /**
     * 添加闪记权限.
     *
     * @param tmpReq - AddRecordPermissionRequest
     * @param tmpHeader - AddRecordPermissionHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddRecordPermissionResponse
     *
     * @param AddRecordPermissionRequest $tmpReq
     * @param AddRecordPermissionHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return AddRecordPermissionResponse
     */
    public function addRecordPermissionWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new AddRecordPermissionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new AddRecordPermissionShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->conferenceId) {
            @$body['ConferenceId'] = $request->conferenceId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddRecordPermission',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/addRecordPermission',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddRecordPermissionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddRecordPermissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 添加闪记权限.
     *
     * @param request - AddRecordPermissionRequest
     *
     * @returns AddRecordPermissionResponse
     *
     * @param AddRecordPermissionRequest $request
     *
     * @return AddRecordPermissionResponse
     */
    public function addRecordPermission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddRecordPermissionHeaders([]);

        return $this->addRecordPermissionWithOptions($request, $headers, $runtime);
    }

    /**
     * 新增群成员.
     *
     * @param request - AddScenegroupMemberRequest
     * @param tmpHeader - AddScenegroupMemberHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddScenegroupMemberResponse
     *
     * @param AddScenegroupMemberRequest $request
     * @param AddScenegroupMemberHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return AddScenegroupMemberResponse
     */
    public function addScenegroupMemberWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new AddScenegroupMemberShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->openConversationId) {
            @$body['OpenConversationId'] = $request->openConversationId;
        }

        if (null !== $request->userIds) {
            @$body['UserIds'] = $request->userIds;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddScenegroupMember',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/im/addScenegroupMember',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddScenegroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddScenegroupMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 新增群成员.
     *
     * @param request - AddScenegroupMemberRequest
     *
     * @returns AddScenegroupMemberResponse
     *
     * @param AddScenegroupMemberRequest $request
     *
     * @return AddScenegroupMemberResponse
     */
    public function addScenegroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddScenegroupMemberHeaders([]);

        return $this->addScenegroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * 工单添加备注.
     *
     * @param tmpReq - AddTicketMemoRequest
     * @param tmpHeader - AddTicketMemoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTicketMemoResponse
     *
     * @param AddTicketMemoRequest $tmpReq
     * @param AddTicketMemoHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return AddTicketMemoResponse
     */
    public function addTicketMemoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new AddTicketMemoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new AddTicketMemoShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->ticketMemo) {
            $request->ticketMemoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ticketMemo, 'TicketMemo', 'json');
        }

        $body = [];
        if (null !== $request->openTeamId) {
            @$body['OpenTeamId'] = $request->openTeamId;
        }

        if (null !== $request->openTicketId) {
            @$body['OpenTicketId'] = $request->openTicketId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->ticketMemoShrink) {
            @$body['TicketMemo'] = $request->ticketMemoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddTicketMemo',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ticket/addTicketMemo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddTicketMemoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddTicketMemoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 工单添加备注.
     *
     * @param request - AddTicketMemoRequest
     *
     * @returns AddTicketMemoResponse
     *
     * @param AddTicketMemoRequest $request
     *
     * @return AddTicketMemoResponse
     */
    public function addTicketMemo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddTicketMemoHeaders([]);

        return $this->addTicketMemoWithOptions($request, $headers, $runtime);
    }

    /**
     * 新建知识库.
     *
     * @param tmpReq - AddWorkspaceRequest
     * @param tmpHeader - AddWorkspaceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddWorkspaceResponse
     *
     * @param AddWorkspaceRequest $tmpReq
     * @param AddWorkspaceHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return AddWorkspaceResponse
     */
    public function addWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new AddWorkspaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new AddWorkspaceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->option) {
            $request->optionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->optionShrink) {
            @$body['Option'] = $request->optionShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddWorkspace',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/addWorkspace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 新建知识库.
     *
     * @param request - AddWorkspaceRequest
     *
     * @returns AddWorkspaceResponse
     *
     * @param AddWorkspaceRequest $request
     *
     * @return AddWorkspaceResponse
     */
    public function addWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddWorkspaceHeaders([]);

        return $this->addWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 添加知识库文档成员.
     *
     * @param tmpReq - AddWorkspaceDocMembersRequest
     * @param tmpHeader - AddWorkspaceDocMembersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddWorkspaceDocMembersResponse
     *
     * @param AddWorkspaceDocMembersRequest $tmpReq
     * @param AddWorkspaceDocMembersHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return AddWorkspaceDocMembersResponse
     */
    public function addWorkspaceDocMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new AddWorkspaceDocMembersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new AddWorkspaceDocMembersShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->members) {
            $request->membersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->membersShrink) {
            @$body['Members'] = $request->membersShrink;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddWorkspaceDocMembers',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/addWorkspaceDocMembers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddWorkspaceDocMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddWorkspaceDocMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 添加知识库文档成员.
     *
     * @param request - AddWorkspaceDocMembersRequest
     *
     * @returns AddWorkspaceDocMembersResponse
     *
     * @param AddWorkspaceDocMembersRequest $request
     *
     * @return AddWorkspaceDocMembersResponse
     */
    public function addWorkspaceDocMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddWorkspaceDocMembersHeaders([]);

        return $this->addWorkspaceDocMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * 添加知识库成员.
     *
     * @param tmpReq - AddWorkspaceMembersRequest
     * @param tmpHeader - AddWorkspaceMembersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddWorkspaceMembersResponse
     *
     * @param AddWorkspaceMembersRequest $tmpReq
     * @param AddWorkspaceMembersHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return AddWorkspaceMembersResponse
     */
    public function addWorkspaceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new AddWorkspaceMembersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new AddWorkspaceMembersShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->members) {
            $request->membersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->membersShrink) {
            @$body['Members'] = $request->membersShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddWorkspaceMembers',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/addWorkspaceMembers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddWorkspaceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddWorkspaceMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 添加知识库成员.
     *
     * @param request - AddWorkspaceMembersRequest
     *
     * @returns AddWorkspaceMembersResponse
     *
     * @param AddWorkspaceMembersRequest $request
     *
     * @return AddWorkspaceMembersResponse
     */
    public function addWorkspaceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddWorkspaceMembersHeaders([]);

        return $this->addWorkspaceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * 指派工单.
     *
     * @param tmpReq - AssignTicketRequest
     * @param tmpHeader - AssignTicketHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssignTicketResponse
     *
     * @param AssignTicketRequest $tmpReq
     * @param AssignTicketHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return AssignTicketResponse
     */
    public function assignTicketWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new AssignTicketShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new AssignTicketShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->notify) {
            $request->notifyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notify, 'Notify', 'json');
        }

        if (null !== $tmpReq->processorUserIds) {
            $request->processorUserIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->processorUserIds, 'ProcessorUserIds', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->ticketMemo) {
            $request->ticketMemoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ticketMemo, 'TicketMemo', 'json');
        }

        $body = [];
        if (null !== $request->notifyShrink) {
            @$body['Notify'] = $request->notifyShrink;
        }

        if (null !== $request->openTeamId) {
            @$body['OpenTeamId'] = $request->openTeamId;
        }

        if (null !== $request->openTicketId) {
            @$body['OpenTicketId'] = $request->openTicketId;
        }

        if (null !== $request->processorUserIdsShrink) {
            @$body['ProcessorUserIds'] = $request->processorUserIdsShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->ticketMemoShrink) {
            @$body['TicketMemo'] = $request->ticketMemoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssignTicket',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ticket/assignTicket',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AssignTicketResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AssignTicketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 指派工单.
     *
     * @param request - AssignTicketRequest
     *
     * @returns AssignTicketResponse
     *
     * @param AssignTicketRequest $request
     *
     * @return AssignTicketResponse
     */
    public function assignTicket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AssignTicketHeaders([]);

        return $this->assignTicketWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量获取表单实例数据.
     *
     * @param tmpReq - BatchGetFormDataByIdListRequest
     * @param tmpHeader - BatchGetFormDataByIdListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchGetFormDataByIdListResponse
     *
     * @param BatchGetFormDataByIdListRequest $tmpReq
     * @param BatchGetFormDataByIdListHeaders $tmpHeader
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchGetFormDataByIdListResponse
     */
    public function batchGetFormDataByIdListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchGetFormDataByIdListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new BatchGetFormDataByIdListShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->formInstanceIdList) {
            $request->formInstanceIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->formInstanceIdList, 'FormInstanceIdList', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->formInstanceIdListShrink) {
            @$body['FormInstanceIdList'] = $request->formInstanceIdListShrink;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->needFormInstanceValue) {
            @$body['NeedFormInstanceValue'] = $request->needFormInstanceValue;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchGetFormDataByIdList',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/batchGetFormDataByIdList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchGetFormDataByIdListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchGetFormDataByIdListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量获取表单实例数据.
     *
     * @param request - BatchGetFormDataByIdListRequest
     *
     * @returns BatchGetFormDataByIdListResponse
     *
     * @param BatchGetFormDataByIdListRequest $request
     *
     * @return BatchGetFormDataByIdListResponse
     */
    public function batchGetFormDataByIdList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchGetFormDataByIdListHeaders([]);

        return $this->batchGetFormDataByIdListWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量删除表单实例.
     *
     * @param tmpReq - BatchRemovalByFormInstanceIdListRequest
     * @param tmpHeader - BatchRemovalByFormInstanceIdListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchRemovalByFormInstanceIdListResponse
     *
     * @param BatchRemovalByFormInstanceIdListRequest $tmpReq
     * @param BatchRemovalByFormInstanceIdListHeaders $tmpHeader
     * @param RuntimeOptions                          $runtime
     *
     * @return BatchRemovalByFormInstanceIdListResponse
     */
    public function batchRemovalByFormInstanceIdListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchRemovalByFormInstanceIdListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new BatchRemovalByFormInstanceIdListShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->formInstanceIdList) {
            $request->formInstanceIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->formInstanceIdList, 'FormInstanceIdList', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->asynchronousExecution) {
            @$body['AsynchronousExecution'] = $request->asynchronousExecution;
        }

        if (null !== $request->executeExpression) {
            @$body['ExecuteExpression'] = $request->executeExpression;
        }

        if (null !== $request->formInstanceIdListShrink) {
            @$body['FormInstanceIdList'] = $request->formInstanceIdListShrink;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchRemovalByFormInstanceIdList',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/batchRemovalByFormInstanceIdList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchRemovalByFormInstanceIdListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchRemovalByFormInstanceIdListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量删除表单实例.
     *
     * @param request - BatchRemovalByFormInstanceIdListRequest
     *
     * @returns BatchRemovalByFormInstanceIdListResponse
     *
     * @param BatchRemovalByFormInstanceIdListRequest $request
     *
     * @return BatchRemovalByFormInstanceIdListResponse
     */
    public function batchRemovalByFormInstanceIdList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchRemovalByFormInstanceIdListHeaders([]);

        return $this->batchRemovalByFormInstanceIdListWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量创建表单实例.
     *
     * @param tmpReq - BatchSaveFormDataRequest
     * @param tmpHeader - BatchSaveFormDataHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSaveFormDataResponse
     *
     * @param BatchSaveFormDataRequest $tmpReq
     * @param BatchSaveFormDataHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return BatchSaveFormDataResponse
     */
    public function batchSaveFormDataWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchSaveFormDataShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new BatchSaveFormDataShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->formDataJsonList) {
            $request->formDataJsonListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->formDataJsonList, 'FormDataJsonList', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->asynchronousExecution) {
            @$body['AsynchronousExecution'] = $request->asynchronousExecution;
        }

        if (null !== $request->formDataJsonListShrink) {
            @$body['FormDataJsonList'] = $request->formDataJsonListShrink;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->keepRunningAfterException) {
            @$body['KeepRunningAfterException'] = $request->keepRunningAfterException;
        }

        if (null !== $request->noExecuteExpression) {
            @$body['NoExecuteExpression'] = $request->noExecuteExpression;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchSaveFormData',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/batchSaveFormData',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchSaveFormDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchSaveFormDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量创建表单实例.
     *
     * @param request - BatchSaveFormDataRequest
     *
     * @returns BatchSaveFormDataResponse
     *
     * @param BatchSaveFormDataRequest $request
     *
     * @return BatchSaveFormDataResponse
     */
    public function batchSaveFormData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchSaveFormDataHeaders([]);

        return $this->batchSaveFormDataWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量更新表单实例内的组件值
     *
     * @param tmpReq - BatchUpdateFormDataByInstanceIdRequest
     * @param tmpHeader - BatchUpdateFormDataByInstanceIdHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUpdateFormDataByInstanceIdResponse
     *
     * @param BatchUpdateFormDataByInstanceIdRequest $tmpReq
     * @param BatchUpdateFormDataByInstanceIdHeaders $tmpHeader
     * @param RuntimeOptions                         $runtime
     *
     * @return BatchUpdateFormDataByInstanceIdResponse
     */
    public function batchUpdateFormDataByInstanceIdWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchUpdateFormDataByInstanceIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new BatchUpdateFormDataByInstanceIdShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->formInstanceIdList) {
            $request->formInstanceIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->formInstanceIdList, 'FormInstanceIdList', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->asynchronousExecution) {
            @$body['AsynchronousExecution'] = $request->asynchronousExecution;
        }

        if (null !== $request->formInstanceIdListShrink) {
            @$body['FormInstanceIdList'] = $request->formInstanceIdListShrink;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->ignoreEmpty) {
            @$body['IgnoreEmpty'] = $request->ignoreEmpty;
        }

        if (null !== $request->noExecuteExpression) {
            @$body['NoExecuteExpression'] = $request->noExecuteExpression;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->updateFormDataJson) {
            @$body['UpdateFormDataJson'] = $request->updateFormDataJson;
        }

        if (null !== $request->useLatestFormSchemaVersion) {
            @$body['UseLatestFormSchemaVersion'] = $request->useLatestFormSchemaVersion;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchUpdateFormDataByInstanceId',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/batchUpdateFormDataByInstanceId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchUpdateFormDataByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchUpdateFormDataByInstanceIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量更新表单实例内的组件值
     *
     * @param request - BatchUpdateFormDataByInstanceIdRequest
     *
     * @returns BatchUpdateFormDataByInstanceIdResponse
     *
     * @param BatchUpdateFormDataByInstanceIdRequest $request
     *
     * @return BatchUpdateFormDataByInstanceIdResponse
     */
    public function batchUpdateFormDataByInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchUpdateFormDataByInstanceIdHeaders([]);

        return $this->batchUpdateFormDataByInstanceIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过表单实例数据批量更新表单实例.
     *
     * @param tmpReq - BatchUpdateFormDataByInstanceMapRequest
     * @param tmpHeader - BatchUpdateFormDataByInstanceMapHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUpdateFormDataByInstanceMapResponse
     *
     * @param BatchUpdateFormDataByInstanceMapRequest $tmpReq
     * @param BatchUpdateFormDataByInstanceMapHeaders $tmpHeader
     * @param RuntimeOptions                          $runtime
     *
     * @return BatchUpdateFormDataByInstanceMapResponse
     */
    public function batchUpdateFormDataByInstanceMapWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchUpdateFormDataByInstanceMapShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new BatchUpdateFormDataByInstanceMapShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->updateFormDataJsonMap) {
            $request->updateFormDataJsonMapShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->updateFormDataJsonMap, 'UpdateFormDataJsonMap', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->asynchronousExecution) {
            @$body['AsynchronousExecution'] = $request->asynchronousExecution;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->ignoreEmpty) {
            @$body['IgnoreEmpty'] = $request->ignoreEmpty;
        }

        if (null !== $request->noExecuteExpression) {
            @$body['NoExecuteExpression'] = $request->noExecuteExpression;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->updateFormDataJsonMapShrink) {
            @$body['UpdateFormDataJsonMap'] = $request->updateFormDataJsonMapShrink;
        }

        if (null !== $request->useLatestFormSchemaVersion) {
            @$body['UseLatestFormSchemaVersion'] = $request->useLatestFormSchemaVersion;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BatchUpdateFormDataByInstanceMap',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/batchUpdateFormDataByInstanceMap',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchUpdateFormDataByInstanceMapResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchUpdateFormDataByInstanceMapResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 通过表单实例数据批量更新表单实例.
     *
     * @param request - BatchUpdateFormDataByInstanceMapRequest
     *
     * @returns BatchUpdateFormDataByInstanceMapResponse
     *
     * @param BatchUpdateFormDataByInstanceMapRequest $request
     *
     * @return BatchUpdateFormDataByInstanceMapResponse
     */
    public function batchUpdateFormDataByInstanceMap($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchUpdateFormDataByInstanceMapHeaders([]);

        return $this->batchUpdateFormDataByInstanceMapWithOptions($request, $headers, $runtime);
    }

    /**
     * 取消预约会议.
     *
     * @param tmpReq - CancelScheduleConferenceRequest
     * @param tmpHeader - CancelScheduleConferenceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelScheduleConferenceResponse
     *
     * @param CancelScheduleConferenceRequest $tmpReq
     * @param CancelScheduleConferenceHeaders $tmpHeader
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelScheduleConferenceResponse
     */
    public function cancelScheduleConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CancelScheduleConferenceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CancelScheduleConferenceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->scheduleConferenceId) {
            @$body['ScheduleConferenceId'] = $request->scheduleConferenceId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelScheduleConference',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/cancelScheduleConference',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelScheduleConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelScheduleConferenceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 取消预约会议.
     *
     * @param request - CancelScheduleConferenceRequest
     *
     * @returns CancelScheduleConferenceResponse
     *
     * @param CancelScheduleConferenceRequest $request
     *
     * @return CancelScheduleConferenceResponse
     */
    public function cancelScheduleConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CancelScheduleConferenceHeaders([]);

        return $this->cancelScheduleConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * 校验阿里员工.
     *
     * @param tmpReq - CheckAlibabaStaffRequest
     * @param tmpHeader - CheckAlibabaStaffHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckAlibabaStaffResponse
     *
     * @param CheckAlibabaStaffRequest $tmpReq
     * @param CheckAlibabaStaffHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return CheckAlibabaStaffResponse
     */
    public function checkAlibabaStaffWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CheckAlibabaStaffShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CheckAlibabaStaffShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->mobile) {
            @$body['Mobile'] = $request->mobile;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckAlibabaStaff',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/im/checkAlibabaStaff',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CheckAlibabaStaffResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckAlibabaStaffResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 校验阿里员工.
     *
     * @param request - CheckAlibabaStaffRequest
     *
     * @returns CheckAlibabaStaffResponse
     *
     * @param CheckAlibabaStaffRequest $request
     *
     * @return CheckAlibabaStaffResponse
     */
    public function checkAlibabaStaff($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CheckAlibabaStaffHeaders([]);

        return $this->checkAlibabaStaffWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询用户是否为企业内部群成员.
     *
     * @param request - CheckUserIsGroupMemberRequest
     * @param tmpHeader - CheckUserIsGroupMemberHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CheckUserIsGroupMemberResponse
     *
     * @param CheckUserIsGroupMemberRequest $request
     * @param CheckUserIsGroupMemberHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return CheckUserIsGroupMemberResponse
     */
    public function checkUserIsGroupMemberWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new CheckUserIsGroupMemberShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->openConversationId) {
            @$body['OpenConversationId'] = $request->openConversationId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CheckUserIsGroupMember',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/im/checkUserIsGroupMember',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CheckUserIsGroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CheckUserIsGroupMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询用户是否为企业内部群成员.
     *
     * @param request - CheckUserIsGroupMemberRequest
     *
     * @returns CheckUserIsGroupMemberResponse
     *
     * @param CheckUserIsGroupMemberRequest $request
     *
     * @return CheckUserIsGroupMemberResponse
     */
    public function checkUserIsGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CheckUserIsGroupMemberHeaders([]);

        return $this->checkUserIsGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * 清除单元格所有内容.
     *
     * @param tmpReq - ClearRequest
     * @param tmpHeader - ClearHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClearResponse
     *
     * @param ClearRequest   $tmpReq
     * @param ClearHeaders   $tmpHeader
     * @param RuntimeOptions $runtime
     *
     * @return ClearResponse
     */
    public function clearWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ClearShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ClearShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->rangeAddress) {
            @$body['RangeAddress'] = $request->rangeAddress;
        }

        if (null !== $request->sheetId) {
            @$body['SheetId'] = $request->sheetId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'Clear',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/clear',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ClearResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ClearResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 清除单元格所有内容.
     *
     * @param request - ClearRequest
     *
     * @returns ClearResponse
     *
     * @param ClearRequest $request
     *
     * @return ClearResponse
     */
    public function clear($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ClearHeaders([]);

        return $this->clearWithOptions($request, $headers, $runtime);
    }

    /**
     * 清除单元格数据.
     *
     * @param tmpReq - ClearDataRequest
     * @param tmpHeader - ClearDataHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClearDataResponse
     *
     * @param ClearDataRequest $tmpReq
     * @param ClearDataHeaders $tmpHeader
     * @param RuntimeOptions   $runtime
     *
     * @return ClearDataResponse
     */
    public function clearDataWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ClearDataShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ClearDataShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->rangeAddress) {
            @$body['RangeAddress'] = $request->rangeAddress;
        }

        if (null !== $request->sheetId) {
            @$body['SheetId'] = $request->sheetId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ClearData',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/clearData',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ClearDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ClearDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 清除单元格数据.
     *
     * @param request - ClearDataRequest
     *
     * @returns ClearDataResponse
     *
     * @param ClearDataRequest $request
     *
     * @return ClearDataResponse
     */
    public function clearData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ClearDataHeaders([]);

        return $this->clearDataWithOptions($request, $headers, $runtime);
    }

    /**
     * 关闭视频会议.
     *
     * @param tmpReq - CloseVideoConferenceRequest
     * @param tmpHeader - CloseVideoConferenceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseVideoConferenceResponse
     *
     * @param CloseVideoConferenceRequest $tmpReq
     * @param CloseVideoConferenceHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return CloseVideoConferenceResponse
     */
    public function closeVideoConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CloseVideoConferenceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CloseVideoConferenceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloseVideoConference',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/closeVideoConference',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CloseVideoConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CloseVideoConferenceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 关闭视频会议.
     *
     * @param request - CloseVideoConferenceRequest
     *
     * @returns CloseVideoConferenceResponse
     *
     * @param CloseVideoConferenceRequest $request
     *
     * @return CloseVideoConferenceResponse
     */
    public function closeVideoConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CloseVideoConferenceHeaders([]);

        return $this->closeVideoConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取日志评论列表.
     *
     * @param tmpReq - CommentListReportRequest
     * @param tmpHeader - CommentListReportHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CommentListReportResponse
     *
     * @param CommentListReportRequest $tmpReq
     * @param CommentListReportHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return CommentListReportResponse
     */
    public function commentListReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CommentListReportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CommentListReportShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->offset) {
            @$body['Offset'] = $request->offset;
        }

        if (null !== $request->reportId) {
            @$body['ReportId'] = $request->reportId;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CommentListReport',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/log/commentListReport',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CommentListReportResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CommentListReportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取日志评论列表.
     *
     * @param request - CommentListReportRequest
     *
     * @returns CommentListReportResponse
     *
     * @param CommentListReportRequest $request
     *
     * @return CommentListReportResponse
     */
    public function commentListReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CommentListReportHeaders([]);

        return $this->commentListReportWithOptions($request, $headers, $runtime);
    }

    /**
     * 提交文件.
     *
     * @param tmpReq - CommitFileRequest
     * @param tmpHeader - CommitFileHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CommitFileResponse
     *
     * @param CommitFileRequest $tmpReq
     * @param CommitFileHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return CommitFileResponse
     */
    public function commitFileWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CommitFileShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CommitFileShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->option) {
            $request->optionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->optionShrink) {
            @$body['Option'] = $request->optionShrink;
        }

        if (null !== $request->parentDentryUuid) {
            @$body['ParentDentryUuid'] = $request->parentDentryUuid;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->uploadKey) {
            @$body['UploadKey'] = $request->uploadKey;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CommitFile',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/commitFile',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CommitFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CommitFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交文件.
     *
     * @param request - CommitFileRequest
     *
     * @returns CommitFileResponse
     *
     * @param CommitFileRequest $request
     *
     * @return CommitFileResponse
     */
    public function commitFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CommitFileHeaders([]);

        return $this->commitFileWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建知识库节点副本.
     *
     * @param tmpReq - CopyDentryRequest
     * @param tmpHeader - CopyDentryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyDentryResponse
     *
     * @param CopyDentryRequest $tmpReq
     * @param CopyDentryHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return CopyDentryResponse
     */
    public function copyDentryWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CopyDentryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CopyDentryShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->dentryId) {
            @$body['DentryId'] = $request->dentryId;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->spaceId) {
            @$body['SpaceId'] = $request->spaceId;
        }

        if (null !== $request->targetSpaceId) {
            @$body['TargetSpaceId'] = $request->targetSpaceId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->toNextDentryId) {
            @$body['ToNextDentryId'] = $request->toNextDentryId;
        }

        if (null !== $request->toParentDentryId) {
            @$body['ToParentDentryId'] = $request->toParentDentryId;
        }

        if (null !== $request->toPrevDentryId) {
            @$body['ToPrevDentryId'] = $request->toPrevDentryId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CopyDentry',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/copyDentry',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CopyDentryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CopyDentryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建知识库节点副本.
     *
     * @param request - CopyDentryRequest
     *
     * @returns CopyDentryResponse
     *
     * @param CopyDentryRequest $request
     *
     * @return CopyDentryResponse
     */
    public function copyDentry($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CopyDentryHeaders([]);

        return $this->copyDentryWithOptions($request, $headers, $runtime);
    }

    /**
     * 发布钉钉投放活动.
     *
     * @param tmpReq - CreateDeliveryPlanRequest
     * @param tmpHeader - CreateDeliveryPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeliveryPlanResponse
     *
     * @param CreateDeliveryPlanRequest $tmpReq
     * @param CreateDeliveryPlanHeaders $tmpHeader
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDeliveryPlanResponse
     */
    public function createDeliveryPlanWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDeliveryPlanShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateDeliveryPlanShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->content) {
            $request->contentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->userIdList) {
            $request->userIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIdList, 'UserIdList', 'json');
        }

        $body = [];
        if (null !== $request->contentShrink) {
            @$body['Content'] = $request->contentShrink;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->resId) {
            @$body['ResId'] = $request->resId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->userIdListShrink) {
            @$body['UserIdList'] = $request->userIdListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDeliveryPlan',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/watt/createDeliveryPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDeliveryPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDeliveryPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发布钉钉投放活动.
     *
     * @param request - CreateDeliveryPlanRequest
     *
     * @returns CreateDeliveryPlanResponse
     *
     * @param CreateDeliveryPlanRequest $request
     *
     * @return CreateDeliveryPlanResponse
     */
    public function createDeliveryPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDeliveryPlanHeaders([]);

        return $this->createDeliveryPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * 委托权限创建钉钉个人待办.
     *
     * @param tmpReq - CreateDingtalkPersonalTodoTaskRequest
     * @param tmpHeader - CreateDingtalkPersonalTodoTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDingtalkPersonalTodoTaskResponse
     *
     * @param CreateDingtalkPersonalTodoTaskRequest $tmpReq
     * @param CreateDingtalkPersonalTodoTaskHeaders $tmpHeader
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateDingtalkPersonalTodoTaskResponse
     */
    public function createDingtalkPersonalTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDingtalkPersonalTodoTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateDingtalkPersonalTodoTaskShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->executorIds) {
            $request->executorIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'ExecutorIds', 'json');
        }

        if (null !== $tmpReq->notifyConfigs) {
            $request->notifyConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifyConfigs, 'NotifyConfigs', 'json');
        }

        if (null !== $tmpReq->participantIds) {
            $request->participantIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->participantIds, 'ParticipantIds', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dueTime) {
            @$body['DueTime'] = $request->dueTime;
        }

        if (null !== $request->executorIdsShrink) {
            @$body['ExecutorIds'] = $request->executorIdsShrink;
        }

        if (null !== $request->notifyConfigsShrink) {
            @$body['NotifyConfigs'] = $request->notifyConfigsShrink;
        }

        if (null !== $request->participantIdsShrink) {
            @$body['ParticipantIds'] = $request->participantIdsShrink;
        }

        if (null !== $request->subject) {
            @$body['Subject'] = $request->subject;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->userToken) {
            @$body['UserToken'] = $request->userToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateDingtalkPersonalTodoTask',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/task/createDingtalkPersonalTodoTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDingtalkPersonalTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDingtalkPersonalTodoTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 委托权限创建钉钉个人待办.
     *
     * @param request - CreateDingtalkPersonalTodoTaskRequest
     *
     * @returns CreateDingtalkPersonalTodoTaskResponse
     *
     * @param CreateDingtalkPersonalTodoTaskRequest $request
     *
     * @return CreateDingtalkPersonalTodoTaskResponse
     */
    public function createDingtalkPersonalTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateDingtalkPersonalTodoTaskHeaders([]);

        return $this->createDingtalkPersonalTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建日程.
     *
     * @param tmpReq - CreateEventRequest
     * @param tmpHeader - CreateEventHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEventResponse
     *
     * @param CreateEventRequest $tmpReq
     * @param CreateEventHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return CreateEventResponse
     */
    public function createEventWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEventShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateEventShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->attendees) {
            $request->attendeesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attendees, 'Attendees', 'json');
        }

        if (null !== $tmpReq->cardInstances) {
            $request->cardInstancesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cardInstances, 'CardInstances', 'json');
        }

        if (null !== $tmpReq->end) {
            $request->endShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->end, 'End', 'json');
        }

        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }

        if (null !== $tmpReq->location) {
            $request->locationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->location, 'Location', 'json');
        }

        if (null !== $tmpReq->onlineMeetingInfo) {
            $request->onlineMeetingInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->onlineMeetingInfo, 'OnlineMeetingInfo', 'json');
        }

        if (null !== $tmpReq->recurrence) {
            $request->recurrenceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recurrence, 'Recurrence', 'json');
        }

        if (null !== $tmpReq->reminders) {
            $request->remindersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->reminders, 'Reminders', 'json');
        }

        if (null !== $tmpReq->richTextDescription) {
            $request->richTextDescriptionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->richTextDescription, 'RichTextDescription', 'json');
        }

        if (null !== $tmpReq->uiConfigs) {
            $request->uiConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->uiConfigs, 'UiConfigs', 'json');
        }

        if (null !== $tmpReq->start) {
            $request->startShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->start, 'start', 'json');
        }

        $body = [];
        if (null !== $request->attendeesShrink) {
            @$body['Attendees'] = $request->attendeesShrink;
        }

        if (null !== $request->cardInstancesShrink) {
            @$body['CardInstances'] = $request->cardInstancesShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->endShrink) {
            @$body['End'] = $request->endShrink;
        }

        if (null !== $request->extraShrink) {
            @$body['Extra'] = $request->extraShrink;
        }

        if (null !== $request->isAllDay) {
            @$body['IsAllDay'] = $request->isAllDay;
        }

        if (null !== $request->locationShrink) {
            @$body['Location'] = $request->locationShrink;
        }

        if (null !== $request->onlineMeetingInfoShrink) {
            @$body['OnlineMeetingInfo'] = $request->onlineMeetingInfoShrink;
        }

        if (null !== $request->recurrenceShrink) {
            @$body['Recurrence'] = $request->recurrenceShrink;
        }

        if (null !== $request->remindersShrink) {
            @$body['Reminders'] = $request->remindersShrink;
        }

        if (null !== $request->richTextDescriptionShrink) {
            @$body['RichTextDescription'] = $request->richTextDescriptionShrink;
        }

        if (null !== $request->summary) {
            @$body['Summary'] = $request->summary;
        }

        if (null !== $request->uiConfigsShrink) {
            @$body['UiConfigs'] = $request->uiConfigsShrink;
        }

        if (null !== $request->calendarId) {
            @$body['calendarId'] = $request->calendarId;
        }

        if (null !== $request->startShrink) {
            @$body['start'] = $request->startShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateEvent',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/createEvent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateEventResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建日程.
     *
     * @param request - CreateEventRequest
     *
     * @returns CreateEventResponse
     *
     * @param CreateEventRequest $request
     *
     * @return CreateEventResponse
     */
    public function createEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateEventHeaders([]);

        return $this->createEventWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建直播.
     *
     * @param tmpReq - CreateLiveRequest
     * @param tmpHeader - CreateLiveHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLiveResponse
     *
     * @param CreateLiveRequest $tmpReq
     * @param CreateLiveHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return CreateLiveResponse
     */
    public function createLiveWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateLiveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateLiveShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->coverUrl) {
            @$body['CoverUrl'] = $request->coverUrl;
        }

        if (null !== $request->introduction) {
            @$body['Introduction'] = $request->introduction;
        }

        if (null !== $request->preEndTime) {
            @$body['PreEndTime'] = $request->preEndTime;
        }

        if (null !== $request->preStartTime) {
            @$body['PreStartTime'] = $request->preStartTime;
        }

        if (null !== $request->publicType) {
            @$body['PublicType'] = $request->publicType;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLive',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/createLive',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLiveResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLiveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建直播.
     *
     * @param request - CreateLiveRequest
     *
     * @returns CreateLiveResponse
     *
     * @param CreateLiveRequest $request
     *
     * @return CreateLiveResponse
     */
    public function createLive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateLiveHeaders([]);

        return $this->createLiveWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建会议室.
     *
     * @param tmpReq - CreateMeetingRoomRequest
     * @param tmpHeader - CreateMeetingRoomHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMeetingRoomResponse
     *
     * @param CreateMeetingRoomRequest $tmpReq
     * @param CreateMeetingRoomHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMeetingRoomResponse
     */
    public function createMeetingRoomWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMeetingRoomShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateMeetingRoomShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->reservationAuthority) {
            $request->reservationAuthorityShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->reservationAuthority, 'ReservationAuthority', 'json');
        }

        if (null !== $tmpReq->roomLabelIds) {
            $request->roomLabelIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roomLabelIds, 'RoomLabelIds', 'json');
        }

        if (null !== $tmpReq->roomLocation) {
            $request->roomLocationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roomLocation, 'RoomLocation', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->enableCycleReservation) {
            @$body['EnableCycleReservation'] = $request->enableCycleReservation;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->isvRoomId) {
            @$body['IsvRoomId'] = $request->isvRoomId;
        }

        if (null !== $request->reservationAuthorityShrink) {
            @$body['ReservationAuthority'] = $request->reservationAuthorityShrink;
        }

        if (null !== $request->roomCapacity) {
            @$body['RoomCapacity'] = $request->roomCapacity;
        }

        if (null !== $request->roomLabelIdsShrink) {
            @$body['RoomLabelIds'] = $request->roomLabelIdsShrink;
        }

        if (null !== $request->roomLocationShrink) {
            @$body['RoomLocation'] = $request->roomLocationShrink;
        }

        if (null !== $request->roomName) {
            @$body['RoomName'] = $request->roomName;
        }

        if (null !== $request->roomPicture) {
            @$body['RoomPicture'] = $request->roomPicture;
        }

        if (null !== $request->roomStatus) {
            @$body['RoomStatus'] = $request->roomStatus;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMeetingRoom',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/createMeetingRoom',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateMeetingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMeetingRoomResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建会议室.
     *
     * @param request - CreateMeetingRoomRequest
     *
     * @returns CreateMeetingRoomResponse
     *
     * @param CreateMeetingRoomRequest $request
     *
     * @return CreateMeetingRoomResponse
     */
    public function createMeetingRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateMeetingRoomHeaders([]);

        return $this->createMeetingRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建会议室分组.
     *
     * @param tmpReq - CreateMeetingRoomGroupRequest
     * @param tmpHeader - CreateMeetingRoomGroupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMeetingRoomGroupResponse
     *
     * @param CreateMeetingRoomGroupRequest $tmpReq
     * @param CreateMeetingRoomGroupHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMeetingRoomGroupResponse
     */
    public function createMeetingRoomGroupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateMeetingRoomGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateMeetingRoomGroupShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->parentGroupId) {
            @$body['ParentGroupId'] = $request->parentGroupId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMeetingRoomGroup',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/createMeetingRoomGroup',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateMeetingRoomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMeetingRoomGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建会议室分组.
     *
     * @param request - CreateMeetingRoomGroupRequest
     *
     * @returns CreateMeetingRoomGroupResponse
     *
     * @param CreateMeetingRoomGroupRequest $request
     *
     * @return CreateMeetingRoomGroupResponse
     */
    public function createMeetingRoomGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateMeetingRoomGroupHeaders([]);

        return $this->createMeetingRoomGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建消息.
     *
     * @param request - CreateMessageRequest
     * @param headers - CreateMessageHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMessageResponse
     *
     * @param CreateMessageRequest $request
     * @param CreateMessageHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateMessageResponse
     */
    public function createMessageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assistantId) {
            @$body['assistantId'] = $request->assistantId;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->originalAssistantId) {
            @$body['originalAssistantId'] = $request->originalAssistantId;
        }

        if (null !== $request->role) {
            @$body['role'] = $request->role;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountId) {
            @$realHeaders['accountId'] = '' . $headers->accountId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateMessage',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/ai/v1/assistant/createMessage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateMessageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建消息.
     *
     * @param request - CreateMessageRequest
     *
     * @returns CreateMessageResponse
     *
     * @param CreateMessageRequest $request
     *
     * @return CreateMessageResponse
     */
    public function createMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateMessageHeaders([]);

        return $this->createMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * 新增或更新表单实例.
     *
     * @param request - CreateOrUpdateFormDataRequest
     * @param tmpHeader - CreateOrUpdateFormDataHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrUpdateFormDataResponse
     *
     * @param CreateOrUpdateFormDataRequest $request
     * @param CreateOrUpdateFormDataHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return CreateOrUpdateFormDataResponse
     */
    public function createOrUpdateFormDataWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new CreateOrUpdateFormDataShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->formDataJson) {
            @$body['FormDataJson'] = $request->formDataJson;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->noExecuteExpression) {
            @$body['NoExecuteExpression'] = $request->noExecuteExpression;
        }

        if (null !== $request->searchCondition) {
            @$body['SearchCondition'] = $request->searchCondition;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOrUpdateFormData',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/createOrUpdateFormData',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrUpdateFormDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrUpdateFormDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 新增或更新表单实例.
     *
     * @param request - CreateOrUpdateFormDataRequest
     *
     * @returns CreateOrUpdateFormDataResponse
     *
     * @param CreateOrUpdateFormDataRequest $request
     *
     * @return CreateOrUpdateFormDataResponse
     */
    public function createOrUpdateFormData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateOrUpdateFormDataHeaders([]);

        return $this->createOrUpdateFormDataWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建荣誉勋章模板
     *
     * @param tmpReq - CreateOrgHonorTemplateRequest
     * @param tmpHeader - CreateOrgHonorTemplateHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateOrgHonorTemplateResponse
     *
     * @param CreateOrgHonorTemplateRequest $tmpReq
     * @param CreateOrgHonorTemplateHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return CreateOrgHonorTemplateResponse
     */
    public function createOrgHonorTemplateWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateOrgHonorTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateOrgHonorTemplateShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->avatarFrameMediaId) {
            @$body['avatarFrameMediaId'] = $request->avatarFrameMediaId;
        }

        if (null !== $request->defaultBgColor) {
            @$body['defaultBgColor'] = $request->defaultBgColor;
        }

        if (null !== $request->medalDesc) {
            @$body['medalDesc'] = $request->medalDesc;
        }

        if (null !== $request->medalMediaId) {
            @$body['medalMediaId'] = $request->medalMediaId;
        }

        if (null !== $request->medalName) {
            @$body['medalName'] = $request->medalName;
        }

        if (null !== $request->orgId) {
            @$body['orgId'] = $request->orgId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateOrgHonorTemplate',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/aliding/v1/honor/createOrgHonorTemplate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateOrgHonorTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateOrgHonorTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建荣誉勋章模板
     *
     * @param request - CreateOrgHonorTemplateRequest
     *
     * @returns CreateOrgHonorTemplateResponse
     *
     * @param CreateOrgHonorTemplateRequest $request
     *
     * @return CreateOrgHonorTemplateResponse
     */
    public function createOrgHonorTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateOrgHonorTemplateHeaders([]);

        return $this->createOrgHonorTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建钉钉个人待办任务
     *
     * @param tmpReq - CreatePersonalTodoTaskRequest
     * @param tmpHeader - CreatePersonalTodoTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePersonalTodoTaskResponse
     *
     * @param CreatePersonalTodoTaskRequest $tmpReq
     * @param CreatePersonalTodoTaskHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePersonalTodoTaskResponse
     */
    public function createPersonalTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreatePersonalTodoTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreatePersonalTodoTaskShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->executorIds) {
            $request->executorIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'ExecutorIds', 'json');
        }

        if (null !== $tmpReq->notifyConfigs) {
            $request->notifyConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifyConfigs, 'NotifyConfigs', 'json');
        }

        if (null !== $tmpReq->participantIds) {
            $request->participantIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->participantIds, 'ParticipantIds', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->dueTime) {
            @$body['DueTime'] = $request->dueTime;
        }

        if (null !== $request->executorIdsShrink) {
            @$body['ExecutorIds'] = $request->executorIdsShrink;
        }

        if (null !== $request->notifyConfigsShrink) {
            @$body['NotifyConfigs'] = $request->notifyConfigsShrink;
        }

        if (null !== $request->participantIdsShrink) {
            @$body['ParticipantIds'] = $request->participantIdsShrink;
        }

        if (null !== $request->reminderTimeStamp) {
            @$body['ReminderTimeStamp'] = $request->reminderTimeStamp;
        }

        if (null !== $request->subject) {
            @$body['Subject'] = $request->subject;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePersonalTodoTask',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/task/createPersonalTodoTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePersonalTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePersonalTodoTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建钉钉个人待办任务
     *
     * @param request - CreatePersonalTodoTaskRequest
     *
     * @returns CreatePersonalTodoTaskResponse
     *
     * @param CreatePersonalTodoTaskRequest $request
     *
     * @return CreatePersonalTodoTaskResponse
     */
    public function createPersonalTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreatePersonalTodoTaskHeaders([]);

        return $this->createPersonalTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建日志.
     *
     * @param tmpReq - CreateReportRequest
     * @param tmpHeader - CreateReportHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateReportResponse
     *
     * @param CreateReportRequest $tmpReq
     * @param CreateReportHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return CreateReportResponse
     */
    public function createReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateReportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateReportShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->contents) {
            $request->contentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'Contents', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->toCids) {
            $request->toCidsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->toCids, 'ToCids', 'json');
        }

        if (null !== $tmpReq->toUserids) {
            $request->toUseridsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->toUserids, 'ToUserids', 'json');
        }

        $body = [];
        if (null !== $request->contentsShrink) {
            @$body['Contents'] = $request->contentsShrink;
        }

        if (null !== $request->ddFrom) {
            @$body['DdFrom'] = $request->ddFrom;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->toChat) {
            @$body['ToChat'] = $request->toChat;
        }

        if (null !== $request->toCidsShrink) {
            @$body['ToCids'] = $request->toCidsShrink;
        }

        if (null !== $request->toUseridsShrink) {
            @$body['ToUserids'] = $request->toUseridsShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateReport',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/log/createReport',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateReportResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateReportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建日志.
     *
     * @param request - CreateReportRequest
     *
     * @returns CreateReportResponse
     *
     * @param CreateReportRequest $request
     *
     * @return CreateReportResponse
     */
    public function createReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateReportHeaders([]);

        return $this->createReportWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建运行.
     *
     * @param request - CreateRunRequest
     * @param headers - CreateRunHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRunResponse
     *
     * @param CreateRunRequest $request
     * @param CreateRunHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateRunResponse
     */
    public function createRunWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assistantId) {
            @$body['assistantId'] = $request->assistantId;
        }

        if (null !== $request->instructions) {
            @$body['instructions'] = $request->instructions;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->originalAssistantId) {
            @$body['originalAssistantId'] = $request->originalAssistantId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountId) {
            @$realHeaders['accountId'] = '' . $headers->accountId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateRun',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/ai/v1/assistant/createRun',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateRunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建运行.
     *
     * @param request - CreateRunRequest
     *
     * @returns CreateRunResponse
     *
     * @param CreateRunRequest $request
     *
     * @return CreateRunResponse
     */
    public function createRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateRunHeaders([]);

        return $this->createRunWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建场景群.
     *
     * @param request - CreateScenegroupRequest
     * @param tmpHeader - CreateScenegroupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScenegroupResponse
     *
     * @param CreateScenegroupRequest $request
     * @param CreateScenegroupHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return CreateScenegroupResponse
     */
    public function createScenegroupWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new CreateScenegroupShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->addFriendForbidden) {
            @$body['AddFriendForbidden'] = $request->addFriendForbidden;
        }

        if (null !== $request->allMembersCanCreateCalendar) {
            @$body['AllMembersCanCreateCalendar'] = $request->allMembersCanCreateCalendar;
        }

        if (null !== $request->allMembersCanCreateMcsConf) {
            @$body['AllMembersCanCreateMcsConf'] = $request->allMembersCanCreateMcsConf;
        }

        if (null !== $request->chatBannedType) {
            @$body['ChatBannedType'] = $request->chatBannedType;
        }

        if (null !== $request->groupEmailDisabled) {
            @$body['GroupEmailDisabled'] = $request->groupEmailDisabled;
        }

        if (null !== $request->groupLiveSwitch) {
            @$body['GroupLiveSwitch'] = $request->groupLiveSwitch;
        }

        if (null !== $request->icon) {
            @$body['Icon'] = $request->icon;
        }

        if (null !== $request->managementType) {
            @$body['ManagementType'] = $request->managementType;
        }

        if (null !== $request->membersToAdminChat) {
            @$body['MembersToAdminChat'] = $request->membersToAdminChat;
        }

        if (null !== $request->mentionAllAuthority) {
            @$body['MentionAllAuthority'] = $request->mentionAllAuthority;
        }

        if (null !== $request->onlyAdminCanDing) {
            @$body['OnlyAdminCanDing'] = $request->onlyAdminCanDing;
        }

        if (null !== $request->onlyAdminCanSetMsgTop) {
            @$body['OnlyAdminCanSetMsgTop'] = $request->onlyAdminCanSetMsgTop;
        }

        if (null !== $request->searchable) {
            @$body['Searchable'] = $request->searchable;
        }

        if (null !== $request->showHistoryType) {
            @$body['ShowHistoryType'] = $request->showHistoryType;
        }

        if (null !== $request->subadminIds) {
            @$body['SubadminIds'] = $request->subadminIds;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        if (null !== $request->userIds) {
            @$body['UserIds'] = $request->userIds;
        }

        if (null !== $request->uuid) {
            @$body['Uuid'] = $request->uuid;
        }

        if (null !== $request->validationType) {
            @$body['ValidationType'] = $request->validationType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateScenegroup',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/im/createScenegroup',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateScenegroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScenegroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建场景群.
     *
     * @param request - CreateScenegroupRequest
     *
     * @returns CreateScenegroupResponse
     *
     * @param CreateScenegroupRequest $request
     *
     * @return CreateScenegroupResponse
     */
    public function createScenegroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateScenegroupHeaders([]);

        return $this->createScenegroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建预约会议.
     *
     * @param tmpReq - CreateScheduleConferenceRequest
     * @param tmpHeader - CreateScheduleConferenceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateScheduleConferenceResponse
     *
     * @param CreateScheduleConferenceRequest $tmpReq
     * @param CreateScheduleConferenceHeaders $tmpHeader
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateScheduleConferenceResponse
     */
    public function createScheduleConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateScheduleConferenceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateScheduleConferenceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->scheduleConfSettingModel) {
            $request->scheduleConfSettingModelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfSettingModel, 'ScheduleConfSettingModel', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->scheduleConfSettingModelShrink) {
            @$body['ScheduleConfSettingModel'] = $request->scheduleConfSettingModelShrink;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateScheduleConference',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/createScheduleConference',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateScheduleConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateScheduleConferenceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建预约会议.
     *
     * @param request - CreateScheduleConferenceRequest
     *
     * @returns CreateScheduleConferenceResponse
     *
     * @param CreateScheduleConferenceRequest $request
     *
     * @return CreateScheduleConferenceResponse
     */
    public function createScheduleConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateScheduleConferenceHeaders([]);

        return $this->createScheduleConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * 发布钉钉搜索穹顶.
     *
     * @param tmpReq - CreateSearchDomeRequest
     * @param tmpHeader - CreateSearchDomeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSearchDomeResponse
     *
     * @param CreateSearchDomeRequest $tmpReq
     * @param CreateSearchDomeHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSearchDomeResponse
     */
    public function createSearchDomeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSearchDomeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateSearchDomeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->userIdList) {
            $request->userIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIdList, 'UserIdList', 'json');
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->resId) {
            @$body['ResId'] = $request->resId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->userIdListShrink) {
            @$body['UserIdList'] = $request->userIdListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSearchDome',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/watt/createSearchDome',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSearchDomeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSearchDomeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发布钉钉搜索穹顶.
     *
     * @param request - CreateSearchDomeRequest
     *
     * @returns CreateSearchDomeResponse
     *
     * @param CreateSearchDomeRequest $request
     *
     * @return CreateSearchDomeResponse
     */
    public function createSearchDome($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSearchDomeHeaders([]);

        return $this->createSearchDomeWithOptions($request, $headers, $runtime);
    }

    /**
     * 发布钉钉搜索关键词.
     *
     * @param tmpReq - CreateSearchKeywordRequest
     * @param tmpHeader - CreateSearchKeywordHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSearchKeywordResponse
     *
     * @param CreateSearchKeywordRequest $tmpReq
     * @param CreateSearchKeywordHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSearchKeywordResponse
     */
    public function createSearchKeywordWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSearchKeywordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateSearchKeywordShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->userIdList) {
            $request->userIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIdList, 'UserIdList', 'json');
        }

        $body = [];
        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->resId) {
            @$body['ResId'] = $request->resId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->userIdListShrink) {
            @$body['UserIdList'] = $request->userIdListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSearchKeyword',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/watt/createSearchKeyword',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSearchKeywordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSearchKeywordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发布钉钉搜索关键词.
     *
     * @param request - CreateSearchKeywordRequest
     *
     * @returns CreateSearchKeywordResponse
     *
     * @param CreateSearchKeywordRequest $request
     *
     * @return CreateSearchKeywordResponse
     */
    public function createSearchKeyword($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSearchKeywordHeaders([]);

        return $this->createSearchKeywordWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建工作表.
     *
     * @param tmpReq - CreateSheetRequest
     * @param tmpHeader - CreateSheetHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSheetResponse
     *
     * @param CreateSheetRequest $tmpReq
     * @param CreateSheetHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSheetResponse
     */
    public function createSheetWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSheetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateSheetShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSheet',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/createSheet',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSheetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSheetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建工作表.
     *
     * @param request - CreateSheetRequest
     *
     * @returns CreateSheetResponse
     *
     * @param CreateSheetRequest $request
     *
     * @return CreateSheetResponse
     */
    public function createSheet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSheetHeaders([]);

        return $this->createSheetWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建订阅日历.
     *
     * @param tmpReq - CreateSubscribedCalendarRequest
     * @param tmpHeader - CreateSubscribedCalendarHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSubscribedCalendarResponse
     *
     * @param CreateSubscribedCalendarRequest $tmpReq
     * @param CreateSubscribedCalendarHeaders $tmpHeader
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateSubscribedCalendarResponse
     */
    public function createSubscribedCalendarWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSubscribedCalendarShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateSubscribedCalendarShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->managers) {
            $request->managersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->managers, 'Managers', 'json');
        }

        if (null !== $tmpReq->subscribeScope) {
            $request->subscribeScopeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subscribeScope, 'SubscribeScope', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->managersShrink) {
            @$body['Managers'] = $request->managersShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->subscribeScopeShrink) {
            @$body['SubscribeScope'] = $request->subscribeScopeShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateSubscribedCalendar',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/createSubscribedCalendar',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSubscribedCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSubscribedCalendarResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建订阅日历.
     *
     * @param request - CreateSubscribedCalendarRequest
     *
     * @returns CreateSubscribedCalendarResponse
     *
     * @param CreateSubscribedCalendarRequest $request
     *
     * @return CreateSubscribedCalendarResponse
     */
    public function createSubscribedCalendar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSubscribedCalendarHeaders([]);

        return $this->createSubscribedCalendarWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建线程.
     *
     * @param request - CreateThreadRequest
     * @param headers - CreateThreadHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateThreadResponse
     *
     * @param CreateThreadRequest $request
     * @param CreateThreadHeaders $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateThreadResponse
     */
    public function createThreadWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assistantId) {
            @$body['assistantId'] = $request->assistantId;
        }

        if (null !== $request->metadata) {
            @$body['metadata'] = $request->metadata;
        }

        if (null !== $request->originalAssistantId) {
            @$body['originalAssistantId'] = $request->originalAssistantId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountId) {
            @$realHeaders['accountId'] = '' . $headers->accountId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateThread',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/ai/v1/assistant/createThread',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateThreadResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateThreadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建线程.
     *
     * @param request - CreateThreadRequest
     *
     * @returns CreateThreadResponse
     *
     * @param CreateThreadRequest $request
     *
     * @return CreateThreadResponse
     */
    public function createThread($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateThreadHeaders([]);

        return $this->createThreadWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建工单.
     *
     * @param tmpReq - CreateTicketRequest
     * @param tmpHeader - CreateTicketHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $tmpReq
     * @param CreateTicketHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return CreateTicketResponse
     */
    public function createTicketWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTicketShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateTicketShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->notify) {
            $request->notifyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notify, 'Notify', 'json');
        }

        if (null !== $tmpReq->processorUserIds) {
            $request->processorUserIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->processorUserIds, 'ProcessorUserIds', 'json');
        }

        if (null !== $tmpReq->sceneContext) {
            $request->sceneContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sceneContext, 'SceneContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->customFields) {
            @$body['CustomFields'] = $request->customFields;
        }

        if (null !== $request->notifyShrink) {
            @$body['Notify'] = $request->notifyShrink;
        }

        if (null !== $request->openTeamId) {
            @$body['OpenTeamId'] = $request->openTeamId;
        }

        if (null !== $request->openTemplateBizId) {
            @$body['OpenTemplateBizId'] = $request->openTemplateBizId;
        }

        if (null !== $request->processorUserIdsShrink) {
            @$body['ProcessorUserIds'] = $request->processorUserIdsShrink;
        }

        if (null !== $request->scene) {
            @$body['Scene'] = $request->scene;
        }

        if (null !== $request->sceneContextShrink) {
            @$body['SceneContext'] = $request->sceneContextShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTicket',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ticket/createTicket',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTicketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建工单.
     *
     * @param request - CreateTicketRequest
     *
     * @returns CreateTicketResponse
     *
     * @param CreateTicketRequest $request
     *
     * @return CreateTicketResponse
     */
    public function createTicket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateTicketHeaders([]);

        return $this->createTicketWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建代办.
     *
     * @param tmpReq - CreateTodoTaskRequest
     * @param tmpHeader - CreateTodoTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTodoTaskResponse
     *
     * @param CreateTodoTaskRequest $tmpReq
     * @param CreateTodoTaskHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTodoTaskResponse
     */
    public function createTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateTodoTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateTodoTaskShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->actionList) {
            $request->actionListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->actionList, 'actionList', 'json');
        }

        if (null !== $tmpReq->contentFieldList) {
            $request->contentFieldListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contentFieldList, 'contentFieldList', 'json');
        }

        if (null !== $tmpReq->detailUrl) {
            $request->detailUrlShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->detailUrl, 'detailUrl', 'json');
        }

        if (null !== $tmpReq->executorIds) {
            $request->executorIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'executorIds', 'json');
        }

        if (null !== $tmpReq->notifyConfigs) {
            $request->notifyConfigsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notifyConfigs, 'notifyConfigs', 'json');
        }

        if (null !== $tmpReq->participantIds) {
            $request->participantIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->participantIds, 'participantIds', 'json');
        }

        $query = [];
        if (null !== $request->operatorId) {
            @$query['operatorId'] = $request->operatorId;
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->actionListShrink) {
            @$body['actionList'] = $request->actionListShrink;
        }

        if (null !== $request->contentFieldListShrink) {
            @$body['contentFieldList'] = $request->contentFieldListShrink;
        }

        if (null !== $request->creatorId) {
            @$body['creatorId'] = $request->creatorId;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->detailUrlShrink) {
            @$body['detailUrl'] = $request->detailUrlShrink;
        }

        if (null !== $request->dueTime) {
            @$body['dueTime'] = $request->dueTime;
        }

        if (null !== $request->executorIdsShrink) {
            @$body['executorIds'] = $request->executorIdsShrink;
        }

        if (null !== $request->isOnlyShowExecutor) {
            @$body['isOnlyShowExecutor'] = $request->isOnlyShowExecutor;
        }

        if (null !== $request->notifyConfigsShrink) {
            @$body['notifyConfigs'] = $request->notifyConfigsShrink;
        }

        if (null !== $request->participantIdsShrink) {
            @$body['participantIds'] = $request->participantIdsShrink;
        }

        if (null !== $request->priority) {
            @$body['priority'] = $request->priority;
        }

        if (null !== $request->sourceId) {
            @$body['sourceId'] = $request->sourceId;
        }

        if (null !== $request->subject) {
            @$body['subject'] = $request->subject;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTodoTask',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/task/createTodoTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateTodoTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建代办.
     *
     * @param request - CreateTodoTaskRequest
     *
     * @returns CreateTodoTaskResponse
     *
     * @param CreateTodoTaskRequest $request
     *
     * @return CreateTodoTaskResponse
     */
    public function createTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateTodoTaskHeaders([]);

        return $this->createTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建视频会议.
     *
     * @param tmpReq - CreateVideoConferenceRequest
     * @param tmpHeader - CreateVideoConferenceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVideoConferenceResponse
     *
     * @param CreateVideoConferenceRequest $tmpReq
     * @param CreateVideoConferenceHeaders $tmpHeader
     * @param RuntimeOptions               $runtime
     *
     * @return CreateVideoConferenceResponse
     */
    public function createVideoConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateVideoConferenceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateVideoConferenceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->inviteUserIds) {
            $request->inviteUserIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inviteUserIds, 'InviteUserIds', 'json');
        }

        $body = [];
        if (null !== $request->confTitle) {
            @$body['ConfTitle'] = $request->confTitle;
        }

        if (null !== $request->inviteCaller) {
            @$body['InviteCaller'] = $request->inviteCaller;
        }

        if (null !== $request->inviteUserIdsShrink) {
            @$body['InviteUserIds'] = $request->inviteUserIdsShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateVideoConference',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/createVideoConference',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateVideoConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVideoConferenceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建视频会议.
     *
     * @param request - CreateVideoConferenceRequest
     *
     * @returns CreateVideoConferenceResponse
     *
     * @param CreateVideoConferenceRequest $request
     *
     * @return CreateVideoConferenceResponse
     */
    public function createVideoConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateVideoConferenceHeaders([]);

        return $this->createVideoConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建知识库.
     *
     * @param tmpReq - CreateWorkspaceRequest
     * @param tmpHeader - CreateWorkspaceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $tmpReq
     * @param CreateWorkspaceHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWorkspaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateWorkspaceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkspace',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/createWorkspace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建知识库.
     *
     * @param request - CreateWorkspaceRequest
     *
     * @returns CreateWorkspaceResponse
     *
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateWorkspaceHeaders([]);

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 创建知识库文档.
     *
     * @param tmpReq - CreateWorkspaceDocRequest
     * @param tmpHeader - CreateWorkspaceDocHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateWorkspaceDocResponse
     *
     * @param CreateWorkspaceDocRequest $tmpReq
     * @param CreateWorkspaceDocHeaders $tmpHeader
     * @param RuntimeOptions            $runtime
     *
     * @return CreateWorkspaceDocResponse
     */
    public function createWorkspaceDocWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateWorkspaceDocShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new CreateWorkspaceDocShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->docType) {
            @$body['DocType'] = $request->docType;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->parentNodeId) {
            @$body['ParentNodeId'] = $request->parentNodeId;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateType) {
            @$body['TemplateType'] = $request->templateType;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateWorkspaceDoc',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/createWorkspaceDoc',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateWorkspaceDocResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateWorkspaceDocResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建知识库文档.
     *
     * @param request - CreateWorkspaceDocRequest
     *
     * @returns CreateWorkspaceDocResponse
     *
     * @param CreateWorkspaceDocRequest $request
     *
     * @return CreateWorkspaceDocResponse
     */
    public function createWorkspaceDoc($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateWorkspaceDocHeaders([]);

        return $this->createWorkspaceDocWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除指定列.
     *
     * @param tmpReq - DeleteColumnsRequest
     * @param tmpHeader - DeleteColumnsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteColumnsResponse
     *
     * @param DeleteColumnsRequest $tmpReq
     * @param DeleteColumnsHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteColumnsResponse
     */
    public function deleteColumnsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteColumnsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new DeleteColumnsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->column) {
            @$body['Column'] = $request->column;
        }

        if (null !== $request->columnCount) {
            @$body['ColumnCount'] = $request->columnCount;
        }

        if (null !== $request->sheetId) {
            @$body['SheetId'] = $request->sheetId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteColumns',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/deleteColumns',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteColumnsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除指定列.
     *
     * @param request - DeleteColumnsRequest
     *
     * @returns DeleteColumnsResponse
     *
     * @param DeleteColumnsRequest $request
     *
     * @return DeleteColumnsResponse
     */
    public function deleteColumns($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteColumnsHeaders([]);

        return $this->deleteColumnsWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除钉盘空间.
     *
     * @param tmpReq - DeleteDriveSpaceRequest
     * @param tmpHeader - DeleteDriveSpaceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDriveSpaceResponse
     *
     * @param DeleteDriveSpaceRequest $tmpReq
     * @param DeleteDriveSpaceHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDriveSpaceResponse
     */
    public function deleteDriveSpaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteDriveSpaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new DeleteDriveSpaceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->spaceId) {
            @$body['SpaceId'] = $request->spaceId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDriveSpace',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/deleteDriveSpace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDriveSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDriveSpaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除钉盘空间.
     *
     * @param request - DeleteDriveSpaceRequest
     *
     * @returns DeleteDriveSpaceResponse
     *
     * @param DeleteDriveSpaceRequest $request
     *
     * @return DeleteDriveSpaceResponse
     */
    public function deleteDriveSpace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteDriveSpaceHeaders([]);

        return $this->deleteDriveSpaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除日程.
     *
     * @param request - DeleteEventRequest
     * @param tmpHeader - DeleteEventHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEventResponse
     *
     * @param DeleteEventRequest $request
     * @param DeleteEventHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteEventResponse
     */
    public function deleteEventWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new DeleteEventShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        if (null !== $request->eventId) {
            @$body['EventId'] = $request->eventId;
        }

        if (null !== $request->pushNotification) {
            @$body['pushNotification'] = $request->pushNotification;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteEvent',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/deleteEvent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEventResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除日程.
     *
     * @param request - DeleteEventRequest
     *
     * @returns DeleteEventResponse
     *
     * @param DeleteEventRequest $request
     *
     * @return DeleteEventResponse
     */
    public function deleteEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteEventHeaders([]);

        return $this->deleteEventWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除表单数据.
     *
     * @param request - DeleteFormDataRequest
     * @param tmpHeader - DeleteFormDataHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFormDataResponse
     *
     * @param DeleteFormDataRequest $request
     * @param DeleteFormDataHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteFormDataResponse
     */
    public function deleteFormDataWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new DeleteFormDataShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->formInstanceId) {
            @$body['FormInstanceId'] = $request->formInstanceId;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteFormData',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/deleteFormData',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFormDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFormDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除表单数据.
     *
     * @param request - DeleteFormDataRequest
     *
     * @returns DeleteFormDataResponse
     *
     * @param DeleteFormDataRequest $request
     *
     * @return DeleteFormDataResponse
     */
    public function deleteFormData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteFormDataHeaders([]);

        return $this->deleteFormDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - DeleteInstanceRequest
     * @param tmpHeader - DeleteInstanceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     * @param DeleteInstanceHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new DeleteInstanceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->processInstanceId) {
            @$body['ProcessInstanceId'] = $request->processInstanceId;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteInstance',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/deleteInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DeleteInstanceRequest
     *
     * @returns DeleteInstanceResponse
     *
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteInstanceHeaders([]);

        return $this->deleteInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除直播.
     *
     * @param tmpReq - DeleteLiveRequest
     * @param tmpHeader - DeleteLiveHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLiveResponse
     *
     * @param DeleteLiveRequest $tmpReq
     * @param DeleteLiveHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteLiveResponse
     */
    public function deleteLiveWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteLiveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new DeleteLiveShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->liveId) {
            @$body['LiveId'] = $request->liveId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteLive',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/deleteLive',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLiveResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除直播.
     *
     * @param request - DeleteLiveRequest
     *
     * @returns DeleteLiveResponse
     *
     * @param DeleteLiveRequest $request
     *
     * @return DeleteLiveResponse
     */
    public function deleteLive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteLiveHeaders([]);

        return $this->deleteLiveWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除会议室.
     *
     * @param tmpReq - DeleteMeetingRoomRequest
     * @param tmpHeader - DeleteMeetingRoomHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMeetingRoomResponse
     *
     * @param DeleteMeetingRoomRequest $tmpReq
     * @param DeleteMeetingRoomHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMeetingRoomResponse
     */
    public function deleteMeetingRoomWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteMeetingRoomShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new DeleteMeetingRoomShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->roomId) {
            @$body['RoomId'] = $request->roomId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMeetingRoom',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/deleteMeetingRoom',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteMeetingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMeetingRoomResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除会议室.
     *
     * @param request - DeleteMeetingRoomRequest
     *
     * @returns DeleteMeetingRoomResponse
     *
     * @param DeleteMeetingRoomRequest $request
     *
     * @return DeleteMeetingRoomResponse
     */
    public function deleteMeetingRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteMeetingRoomHeaders([]);

        return $this->deleteMeetingRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除会议室分组.
     *
     * @param tmpReq - DeleteMeetingRoomGroupRequest
     * @param tmpHeader - DeleteMeetingRoomGroupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMeetingRoomGroupResponse
     *
     * @param DeleteMeetingRoomGroupRequest $tmpReq
     * @param DeleteMeetingRoomGroupHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteMeetingRoomGroupResponse
     */
    public function deleteMeetingRoomGroupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteMeetingRoomGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new DeleteMeetingRoomGroupShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteMeetingRoomGroup',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/deleteMeetingRoomGroup',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteMeetingRoomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMeetingRoomGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除会议室分组.
     *
     * @param request - DeleteMeetingRoomGroupRequest
     *
     * @returns DeleteMeetingRoomGroupResponse
     *
     * @param DeleteMeetingRoomGroupRequest $request
     *
     * @return DeleteMeetingRoomGroupResponse
     */
    public function deleteMeetingRoomGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteMeetingRoomGroupHeaders([]);

        return $this->deleteMeetingRoomGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除指定行.
     *
     * @param tmpReq - DeleteRowsRequest
     * @param tmpHeader - DeleteRowsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRowsResponse
     *
     * @param DeleteRowsRequest $tmpReq
     * @param DeleteRowsHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRowsResponse
     */
    public function deleteRowsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteRowsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new DeleteRowsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->row) {
            @$body['Row'] = $request->row;
        }

        if (null !== $request->rowCount) {
            @$body['RowCount'] = $request->rowCount;
        }

        if (null !== $request->sheetId) {
            @$body['SheetId'] = $request->sheetId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRows',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/deleteRows',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteRowsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteRowsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除指定行.
     *
     * @param request - DeleteRowsRequest
     *
     * @returns DeleteRowsResponse
     *
     * @param DeleteRowsRequest $request
     *
     * @return DeleteRowsResponse
     */
    public function deleteRows($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteRowsHeaders([]);

        return $this->deleteRowsWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除群成员.
     *
     * @param request - DeleteScenegroupMemberRequest
     * @param tmpHeader - DeleteScenegroupMemberHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScenegroupMemberResponse
     *
     * @param DeleteScenegroupMemberRequest $request
     * @param DeleteScenegroupMemberHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteScenegroupMemberResponse
     */
    public function deleteScenegroupMemberWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new DeleteScenegroupMemberShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->openConversationId) {
            @$body['OpenConversationId'] = $request->openConversationId;
        }

        if (null !== $request->userIds) {
            @$body['UserIds'] = $request->userIds;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteScenegroupMember',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/im/deleteScenegroupMember',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteScenegroupMemberResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteScenegroupMemberResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除群成员.
     *
     * @param request - DeleteScenegroupMemberRequest
     *
     * @returns DeleteScenegroupMemberResponse
     *
     * @param DeleteScenegroupMemberRequest $request
     *
     * @return DeleteScenegroupMemberResponse
     */
    public function deleteScenegroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteScenegroupMemberHeaders([]);

        return $this->deleteScenegroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除一个工作表.
     *
     * @param tmpReq - DeleteSheetRequest
     * @param tmpHeader - DeleteSheetHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSheetResponse
     *
     * @param DeleteSheetRequest $tmpReq
     * @param DeleteSheetHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSheetResponse
     */
    public function deleteSheetWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteSheetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new DeleteSheetShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->sheetId) {
            @$body['SheetId'] = $request->sheetId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSheet',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/deleteSheet',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSheetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSheetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除一个工作表.
     *
     * @param request - DeleteSheetRequest
     *
     * @returns DeleteSheetResponse
     *
     * @param DeleteSheetRequest $request
     *
     * @return DeleteSheetResponse
     */
    public function deleteSheet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteSheetHeaders([]);

        return $this->deleteSheetWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除订阅日历.
     *
     * @param request - DeleteSubscribedCalendarRequest
     * @param tmpHeader - DeleteSubscribedCalendarHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSubscribedCalendarResponse
     *
     * @param DeleteSubscribedCalendarRequest $request
     * @param DeleteSubscribedCalendarHeaders $tmpHeader
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteSubscribedCalendarResponse
     */
    public function deleteSubscribedCalendarWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new DeleteSubscribedCalendarShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteSubscribedCalendar',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/deleteSubscribedCalendar',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSubscribedCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSubscribedCalendarResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除订阅日历.
     *
     * @param request - DeleteSubscribedCalendarRequest
     *
     * @returns DeleteSubscribedCalendarResponse
     *
     * @param DeleteSubscribedCalendarRequest $request
     *
     * @return DeleteSubscribedCalendarResponse
     */
    public function deleteSubscribedCalendar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteSubscribedCalendarHeaders([]);

        return $this->deleteSubscribedCalendarWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除代办.
     *
     * @param tmpReq - DeleteTodoTaskRequest
     * @param tmpHeader - DeleteTodoTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTodoTaskResponse
     *
     * @param DeleteTodoTaskRequest $tmpReq
     * @param DeleteTodoTaskHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTodoTaskResponse
     */
    public function deleteTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteTodoTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new DeleteTodoTaskShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->operatorId) {
            @$body['operatorId'] = $request->operatorId;
        }

        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTodoTask',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/task/deleteTodoTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTodoTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除代办.
     *
     * @param request - DeleteTodoTaskRequest
     *
     * @returns DeleteTodoTaskResponse
     *
     * @param DeleteTodoTaskRequest $request
     *
     * @return DeleteTodoTaskResponse
     */
    public function deleteTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteTodoTaskHeaders([]);

        return $this->deleteTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除知识库文档成员.
     *
     * @param tmpReq - DeleteWorkspaceDocMembersRequest
     * @param tmpHeader - DeleteWorkspaceDocMembersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkspaceDocMembersResponse
     *
     * @param DeleteWorkspaceDocMembersRequest $tmpReq
     * @param DeleteWorkspaceDocMembersHeaders $tmpHeader
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteWorkspaceDocMembersResponse
     */
    public function deleteWorkspaceDocMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteWorkspaceDocMembersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new DeleteWorkspaceDocMembersShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->members) {
            $request->membersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->membersShrink) {
            @$body['Members'] = $request->membersShrink;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkspaceDocMembers',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/deleteWorkspaceDocMembers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteWorkspaceDocMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWorkspaceDocMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除知识库文档成员.
     *
     * @param request - DeleteWorkspaceDocMembersRequest
     *
     * @returns DeleteWorkspaceDocMembersResponse
     *
     * @param DeleteWorkspaceDocMembersRequest $request
     *
     * @return DeleteWorkspaceDocMembersResponse
     */
    public function deleteWorkspaceDocMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteWorkspaceDocMembersHeaders([]);

        return $this->deleteWorkspaceDocMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除知识库成员.
     *
     * @param tmpReq - DeleteWorkspaceMembersRequest
     * @param tmpHeader - DeleteWorkspaceMembersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWorkspaceMembersResponse
     *
     * @param DeleteWorkspaceMembersRequest $tmpReq
     * @param DeleteWorkspaceMembersHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteWorkspaceMembersResponse
     */
    public function deleteWorkspaceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteWorkspaceMembersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new DeleteWorkspaceMembersShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->members) {
            $request->membersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->membersShrink) {
            @$body['Members'] = $request->membersShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWorkspaceMembers',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/deleteWorkspaceMembers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteWorkspaceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteWorkspaceMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除知识库成员.
     *
     * @param request - DeleteWorkspaceMembersRequest
     *
     * @returns DeleteWorkspaceMembersResponse
     *
     * @param DeleteWorkspaceMembersRequest $request
     *
     * @return DeleteWorkspaceMembersResponse
     */
    public function deleteWorkspaceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteWorkspaceMembersHeaders([]);

        return $this->deleteWorkspaceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量执行宜搭审批任务
     *
     * @param request - ExecuteBatchTaskRequest
     * @param tmpHeader - ExecuteBatchTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteBatchTaskResponse
     *
     * @param ExecuteBatchTaskRequest $request
     * @param ExecuteBatchTaskHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return ExecuteBatchTaskResponse
     */
    public function executeBatchTaskWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new ExecuteBatchTaskShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->outResult) {
            @$body['OutResult'] = $request->outResult;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->taskInformationList) {
            @$body['TaskInformationList'] = $request->taskInformationList;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteBatchTask',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/executeBatchTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteBatchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteBatchTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量执行宜搭审批任务
     *
     * @param request - ExecuteBatchTaskRequest
     *
     * @returns ExecuteBatchTaskResponse
     *
     * @param ExecuteBatchTaskRequest $request
     *
     * @return ExecuteBatchTaskResponse
     */
    public function executeBatchTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExecuteBatchTaskHeaders([]);

        return $this->executeBatchTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 执行宜搭的审批任务
     *
     * @param request - ExecutePlatformTaskRequest
     * @param tmpHeader - ExecutePlatformTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecutePlatformTaskResponse
     *
     * @param ExecutePlatformTaskRequest $request
     * @param ExecutePlatformTaskHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return ExecutePlatformTaskResponse
     */
    public function executePlatformTaskWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new ExecutePlatformTaskShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->formDataJson) {
            @$body['FormDataJson'] = $request->formDataJson;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->noExecuteExpressions) {
            @$body['NoExecuteExpressions'] = $request->noExecuteExpressions;
        }

        if (null !== $request->outResult) {
            @$body['OutResult'] = $request->outResult;
        }

        if (null !== $request->processInstanceId) {
            @$body['ProcessInstanceId'] = $request->processInstanceId;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecutePlatformTask',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/executePlatformTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecutePlatformTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecutePlatformTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 执行宜搭的审批任务
     *
     * @param request - ExecutePlatformTaskRequest
     *
     * @returns ExecutePlatformTaskResponse
     *
     * @param ExecutePlatformTaskRequest $request
     *
     * @return ExecutePlatformTaskResponse
     */
    public function executePlatformTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExecutePlatformTaskHeaders([]);

        return $this->executePlatformTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 同意或拒绝宜搭审批任务(执行审批任务).
     *
     * @param request - ExecuteTaskRequest
     * @param tmpHeader - ExecuteTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteTaskResponse
     *
     * @param ExecuteTaskRequest $request
     * @param ExecuteTaskHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return ExecuteTaskResponse
     */
    public function executeTaskWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new ExecuteTaskShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->digitalSignUrl) {
            @$body['DigitalSignUrl'] = $request->digitalSignUrl;
        }

        if (null !== $request->formDataJson) {
            @$body['FormDataJson'] = $request->formDataJson;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->noExecuteExpressions) {
            @$body['NoExecuteExpressions'] = $request->noExecuteExpressions;
        }

        if (null !== $request->outResult) {
            @$body['OutResult'] = $request->outResult;
        }

        if (null !== $request->processInstanceId) {
            @$body['ProcessInstanceId'] = $request->processInstanceId;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteTask',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/executeTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExecuteTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExecuteTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 同意或拒绝宜搭审批任务(执行审批任务).
     *
     * @param request - ExecuteTaskRequest
     *
     * @returns ExecuteTaskResponse
     *
     * @param ExecuteTaskRequest $request
     *
     * @return ExecuteTaskResponse
     */
    public function executeTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExecuteTaskHeaders([]);

        return $this->executeTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 群扩容.
     *
     * @param tmpReq - ExpandGroupCapacityRequest
     * @param tmpHeader - ExpandGroupCapacityHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExpandGroupCapacityResponse
     *
     * @param ExpandGroupCapacityRequest $tmpReq
     * @param ExpandGroupCapacityHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return ExpandGroupCapacityResponse
     */
    public function expandGroupCapacityWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ExpandGroupCapacityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ExpandGroupCapacityShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->openConversationId) {
            @$body['OpenConversationId'] = $request->openConversationId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExpandGroupCapacity',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/aliding/v1/im/expandGroupCapacity',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ExpandGroupCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ExpandGroupCapacityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 群扩容.
     *
     * @param request - ExpandGroupCapacityRequest
     *
     * @returns ExpandGroupCapacityResponse
     *
     * @param ExpandGroupCapacityRequest $request
     *
     * @return ExpandGroupCapacityResponse
     */
    public function expandGroupCapacity($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ExpandGroupCapacityHeaders([]);

        return $this->expandGroupCapacityWithOptions($request, $headers, $runtime);
    }

    /**
     * 完结工单.
     *
     * @param tmpReq - FinishTicketRequest
     * @param tmpHeader - FinishTicketHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FinishTicketResponse
     *
     * @param FinishTicketRequest $tmpReq
     * @param FinishTicketHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return FinishTicketResponse
     */
    public function finishTicketWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new FinishTicketShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new FinishTicketShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->notify) {
            $request->notifyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notify, 'Notify', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->ticketMemo) {
            $request->ticketMemoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ticketMemo, 'TicketMemo', 'json');
        }

        $body = [];
        if (null !== $request->notifyShrink) {
            @$body['Notify'] = $request->notifyShrink;
        }

        if (null !== $request->openTeamId) {
            @$body['OpenTeamId'] = $request->openTeamId;
        }

        if (null !== $request->openTicketId) {
            @$body['OpenTicketId'] = $request->openTicketId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->ticketMemoShrink) {
            @$body['TicketMemo'] = $request->ticketMemoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'FinishTicket',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ticket/finishTicket',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return FinishTicketResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return FinishTicketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 完结工单.
     *
     * @param request - FinishTicketRequest
     *
     * @returns FinishTicketResponse
     *
     * @param FinishTicketRequest $request
     *
     * @return FinishTicketResponse
     */
    public function finishTicket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new FinishTicketHeaders([]);

        return $this->finishTicketWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取流程设计的节点信息.
     *
     * @param request - GetActivityListRequest
     * @param tmpHeader - GetActivityListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetActivityListResponse
     *
     * @param GetActivityListRequest $request
     * @param GetActivityListHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return GetActivityListResponse
     */
    public function getActivityListWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetActivityListShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->processCode) {
            @$body['ProcessCode'] = $request->processCode;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetActivityList',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getActivityList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetActivityListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetActivityListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取流程设计的节点信息.
     *
     * @param request - GetActivityListRequest
     *
     * @returns GetActivityListResponse
     *
     * @param GetActivityListRequest $request
     *
     * @return GetActivityListResponse
     */
    public function getActivityList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetActivityListHeaders([]);

        return $this->getActivityListWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取所有工作表.
     *
     * @param tmpReq - GetAllSheetsRequest
     * @param tmpHeader - GetAllSheetsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAllSheetsResponse
     *
     * @param GetAllSheetsRequest $tmpReq
     * @param GetAllSheetsHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return GetAllSheetsResponse
     */
    public function getAllSheetsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetAllSheetsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetAllSheetsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetAllSheets',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/getAllSheets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAllSheetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAllSheetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取所有工作表.
     *
     * @param request - GetAllSheetsRequest
     *
     * @returns GetAllSheetsResponse
     *
     * @param GetAllSheetsRequest $request
     *
     * @return GetAllSheetsResponse
     */
    public function getAllSheets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetAllSheetsHeaders([]);

        return $this->getAllSheetsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取群存储空间信息.
     *
     * @param tmpReq - GetConversaionSpaceRequest
     * @param tmpHeader - GetConversaionSpaceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConversaionSpaceResponse
     *
     * @param GetConversaionSpaceRequest $tmpReq
     * @param GetConversaionSpaceHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return GetConversaionSpaceResponse
     */
    public function getConversaionSpaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetConversaionSpaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetConversaionSpaceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->openConversationId) {
            @$body['OpenConversationId'] = $request->openConversationId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetConversaionSpace',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/getConversaionSpace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetConversaionSpaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetConversaionSpaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取群存储空间信息.
     *
     * @param request - GetConversaionSpaceRequest
     *
     * @returns GetConversaionSpaceResponse
     *
     * @param GetConversaionSpaceRequest $request
     *
     * @return GetConversaionSpaceResponse
     */
    public function getConversaionSpace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetConversaionSpaceHeaders([]);

        return $this->getConversaionSpaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取组织内已完成的审批任务
     *
     * @param request - GetCorpAccomplishmentTasksRequest
     * @param tmpHeader - GetCorpAccomplishmentTasksHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCorpAccomplishmentTasksResponse
     *
     * @param GetCorpAccomplishmentTasksRequest $request
     * @param GetCorpAccomplishmentTasksHeaders $tmpHeader
     * @param RuntimeOptions                    $runtime
     *
     * @return GetCorpAccomplishmentTasksResponse
     */
    public function getCorpAccomplishmentTasksWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetCorpAccomplishmentTasksShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appTypes) {
            @$body['AppTypes'] = $request->appTypes;
        }

        if (null !== $request->corpId) {
            @$body['CorpId'] = $request->corpId;
        }

        if (null !== $request->createFromTimeGMT) {
            @$body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }

        if (null !== $request->createToTimeGMT) {
            @$body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->processCodes) {
            @$body['ProcessCodes'] = $request->processCodes;
        }

        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCorpAccomplishmentTasks',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getCorpAccomplishmentTasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCorpAccomplishmentTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCorpAccomplishmentTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取组织内已完成的审批任务
     *
     * @param request - GetCorpAccomplishmentTasksRequest
     *
     * @returns GetCorpAccomplishmentTasksResponse
     *
     * @param GetCorpAccomplishmentTasksRequest $request
     *
     * @return GetCorpAccomplishmentTasksResponse
     */
    public function getCorpAccomplishmentTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetCorpAccomplishmentTasksHeaders([]);

        return $this->getCorpAccomplishmentTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取任务列表（组织维度）.
     *
     * @param request - GetCorpTasksRequest
     * @param tmpHeader - GetCorpTasksHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCorpTasksResponse
     *
     * @param GetCorpTasksRequest $request
     * @param GetCorpTasksHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return GetCorpTasksResponse
     */
    public function getCorpTasksWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetCorpTasksShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appTypes) {
            @$body['AppTypes'] = $request->appTypes;
        }

        if (null !== $request->corpId) {
            @$body['CorpId'] = $request->corpId;
        }

        if (null !== $request->createFromTimeGMT) {
            @$body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }

        if (null !== $request->createToTimeGMT) {
            @$body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->processCodes) {
            @$body['ProcessCodes'] = $request->processCodes;
        }

        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCorpTasks',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getCorpTasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCorpTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCorpTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取任务列表（组织维度）.
     *
     * @param request - GetCorpTasksRequest
     *
     * @returns GetCorpTasksResponse
     *
     * @param GetCorpTasksRequest $request
     *
     * @return GetCorpTasksResponse
     */
    public function getCorpTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetCorpTasksHeaders([]);

        return $this->getCorpTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * @param tmpReq - GetDeptNoRequest
     * @param tmpHeader - GetDeptNoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDeptNoResponse
     *
     * @param GetDeptNoRequest $tmpReq
     * @param GetDeptNoHeaders $tmpHeader
     * @param RuntimeOptions   $runtime
     *
     * @return GetDeptNoResponse
     */
    public function getDeptNoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetDeptNoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetDeptNoShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->deptId) {
            @$body['deptId'] = $request->deptId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDeptNo',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/aliding/v1/dept/getDeptNo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDeptNoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDeptNoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetDeptNoRequest
     *
     * @returns GetDeptNoResponse
     *
     * @param GetDeptNoRequest $request
     *
     * @return GetDeptNoResponse
     */
    public function getDeptNo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDeptNoHeaders([]);

        return $this->getDeptNoWithOptions($request, $headers, $runtime);
    }

    /**
     * 委托权限获取文档内容.
     *
     * @param tmpReq - GetDocContentRequest
     * @param tmpHeader - GetDocContentHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocContentResponse
     *
     * @param GetDocContentRequest $tmpReq
     * @param GetDocContentHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return GetDocContentResponse
     */
    public function getDocContentWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetDocContentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetDocContentShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->dentryUuid) {
            @$body['DentryUuid'] = $request->dentryUuid;
        }

        if (null !== $request->targetFormat) {
            @$body['TargetFormat'] = $request->targetFormat;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->userToken) {
            @$body['userToken'] = $request->userToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocContent',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/getDocContent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDocContentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDocContentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 委托权限获取文档内容.
     *
     * @param request - GetDocContentRequest
     *
     * @returns GetDocContentResponse
     *
     * @param GetDocContentRequest $request
     *
     * @return GetDocContentResponse
     */
    public function getDocContent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDocContentHeaders([]);

        return $this->getDocContentWithOptions($request, $headers, $runtime);
    }

    /**
     * 委托权限获取文档内容taskId.
     *
     * @param tmpReq - GetDocContentTakIdRequest
     * @param tmpHeader - GetDocContentTakIdHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDocContentTakIdResponse
     *
     * @param GetDocContentTakIdRequest $tmpReq
     * @param GetDocContentTakIdHeaders $tmpHeader
     * @param RuntimeOptions            $runtime
     *
     * @return GetDocContentTakIdResponse
     */
    public function getDocContentTakIdWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetDocContentTakIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetDocContentTakIdShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->dentryUuid) {
            @$body['DentryUuid'] = $request->dentryUuid;
        }

        if (null !== $request->generateCp) {
            @$body['GenerateCp'] = $request->generateCp;
        }

        if (null !== $request->targetFormat) {
            @$body['TargetFormat'] = $request->targetFormat;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetDocContentTakId',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/getDocContentTakId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDocContentTakIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDocContentTakIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 委托权限获取文档内容taskId.
     *
     * @param request - GetDocContentTakIdRequest
     *
     * @returns GetDocContentTakIdResponse
     *
     * @param GetDocContentTakIdRequest $request
     *
     * @return GetDocContentTakIdResponse
     */
    public function getDocContentTakId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetDocContentTakIdHeaders([]);

        return $this->getDocContentTakIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询单个日程详情.
     *
     * @param request - GetEventRequest
     * @param tmpHeader - GetEventHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEventResponse
     *
     * @param GetEventRequest $request
     * @param GetEventHeaders $tmpHeader
     * @param RuntimeOptions  $runtime
     *
     * @return GetEventResponse
     */
    public function getEventWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetEventShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $query = [];
        if (null !== $request->maxAttendees) {
            @$query['MaxAttendees'] = $request->maxAttendees;
        }

        $body = [];
        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        if (null !== $request->eventId) {
            @$body['EventId'] = $request->eventId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetEvent',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/getEvent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetEventResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询单个日程详情.
     *
     * @param request - GetEventRequest
     *
     * @returns GetEventResponse
     *
     * @param GetEventRequest $request
     *
     * @return GetEventResponse
     */
    public function getEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetEventHeaders([]);

        return $this->getEventWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取表单内的组件信息.
     *
     * @param request - GetFieldDefByUuidRequest
     * @param tmpHeader - GetFieldDefByUuidHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFieldDefByUuidResponse
     *
     * @param GetFieldDefByUuidRequest $request
     * @param GetFieldDefByUuidHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return GetFieldDefByUuidResponse
     */
    public function getFieldDefByUuidWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetFieldDefByUuidShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFieldDefByUuid',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getFieldDefByUuid',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFieldDefByUuidResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFieldDefByUuidResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取表单内的组件信息.
     *
     * @param request - GetFieldDefByUuidRequest
     *
     * @returns GetFieldDefByUuidResponse
     *
     * @param GetFieldDefByUuidRequest $request
     *
     * @return GetFieldDefByUuidResponse
     */
    public function getFieldDefByUuid($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFieldDefByUuidHeaders([]);

        return $this->getFieldDefByUuidWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取文件下载信息.
     *
     * @param tmpReq - GetFileDownloadInfoRequest
     * @param tmpHeader - GetFileDownloadInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileDownloadInfoResponse
     *
     * @param GetFileDownloadInfoRequest $tmpReq
     * @param GetFileDownloadInfoHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return GetFileDownloadInfoResponse
     */
    public function getFileDownloadInfoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetFileDownloadInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetFileDownloadInfoShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->option) {
            $request->optionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->dentryId) {
            @$body['DentryId'] = $request->dentryId;
        }

        if (null !== $request->optionShrink) {
            @$body['Option'] = $request->optionShrink;
        }

        if (null !== $request->spaceId) {
            @$body['SpaceId'] = $request->spaceId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFileDownloadInfo',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/getFileDownloadInfo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFileDownloadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFileDownloadInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取文件下载信息.
     *
     * @param request - GetFileDownloadInfoRequest
     *
     * @returns GetFileDownloadInfoResponse
     *
     * @param GetFileDownloadInfoRequest $request
     *
     * @return GetFileDownloadInfoResponse
     */
    public function getFileDownloadInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFileDownloadInfoHeaders([]);

        return $this->getFileDownloadInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取文件上传信息.
     *
     * @param tmpReq - GetFileUploadInfoRequest
     * @param tmpHeader - GetFileUploadInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFileUploadInfoResponse
     *
     * @param GetFileUploadInfoRequest $tmpReq
     * @param GetFileUploadInfoHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return GetFileUploadInfoResponse
     */
    public function getFileUploadInfoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetFileUploadInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetFileUploadInfoShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->option) {
            $request->optionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->optionShrink) {
            @$body['Option'] = $request->optionShrink;
        }

        if (null !== $request->parentDentryUuid) {
            @$body['ParentDentryUuid'] = $request->parentDentryUuid;
        }

        if (null !== $request->protocol) {
            @$body['Protocol'] = $request->protocol;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFileUploadInfo',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/getFileUploadInfo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFileUploadInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFileUploadInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取文件上传信息.
     *
     * @param request - GetFileUploadInfoRequest
     *
     * @returns GetFileUploadInfoResponse
     *
     * @param GetFileUploadInfoRequest $request
     *
     * @return GetFileUploadInfoResponse
     */
    public function getFileUploadInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFileUploadInfoHeaders([]);

        return $this->getFileUploadInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取表单组件定义列表.
     *
     * @param request - GetFormComponentDefinitionListRequest
     * @param tmpHeader - GetFormComponentDefinitionListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFormComponentDefinitionListResponse
     *
     * @param GetFormComponentDefinitionListRequest $request
     * @param GetFormComponentDefinitionListHeaders $tmpHeader
     * @param RuntimeOptions                        $runtime
     *
     * @return GetFormComponentDefinitionListResponse
     */
    public function getFormComponentDefinitionListWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetFormComponentDefinitionListShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFormComponentDefinitionList',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getFormComponentDefinitionList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFormComponentDefinitionListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFormComponentDefinitionListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取表单组件定义列表.
     *
     * @param request - GetFormComponentDefinitionListRequest
     *
     * @returns GetFormComponentDefinitionListResponse
     *
     * @param GetFormComponentDefinitionListRequest $request
     *
     * @return GetFormComponentDefinitionListResponse
     */
    public function getFormComponentDefinitionList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFormComponentDefinitionListHeaders([]);

        return $this->getFormComponentDefinitionListWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询表单数据.
     *
     * @param request - GetFormDataByIDRequest
     * @param tmpHeader - GetFormDataByIDHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFormDataByIDResponse
     *
     * @param GetFormDataByIDRequest $request
     * @param GetFormDataByIDHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return GetFormDataByIDResponse
     */
    public function getFormDataByIDWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetFormDataByIDShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFormDataByID',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getFormDataByID',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFormDataByIDResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFormDataByIDResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询表单数据.
     *
     * @param request - GetFormDataByIDRequest
     *
     * @returns GetFormDataByIDResponse
     *
     * @param GetFormDataByIDRequest $request
     *
     * @return GetFormDataByIDResponse
     */
    public function getFormDataByID($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFormDataByIDHeaders([]);

        return $this->getFormDataByIDWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取指定应用下的表单列表.
     *
     * @param request - GetFormListInAppRequest
     * @param tmpHeader - GetFormListInAppHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetFormListInAppResponse
     *
     * @param GetFormListInAppRequest $request
     * @param GetFormListInAppHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return GetFormListInAppResponse
     */
    public function getFormListInAppWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetFormListInAppShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->formTypes) {
            @$body['FormTypes'] = $request->formTypes;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetFormListInApp',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getFormListInApp',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetFormListInAppResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetFormListInAppResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取指定应用下的表单列表.
     *
     * @param request - GetFormListInAppRequest
     *
     * @returns GetFormListInAppResponse
     *
     * @param GetFormListInAppRequest $request
     *
     * @return GetFormListInAppResponse
     */
    public function getFormListInApp($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFormListInAppHeaders([]);

        return $this->getFormListInAppWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询群内直播信息(最早支持2024年01月数据).
     *
     * @param tmpReq - GetGroupLiveListRequest
     * @param tmpHeader - GetGroupLiveListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetGroupLiveListResponse
     *
     * @param GetGroupLiveListRequest $tmpReq
     * @param GetGroupLiveListHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return GetGroupLiveListResponse
     */
    public function getGroupLiveListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetGroupLiveListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetGroupLiveListShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->openConversationId) {
            @$body['OpenConversationId'] = $request->openConversationId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetGroupLiveList',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/getGroupLiveList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetGroupLiveListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetGroupLiveListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询群内直播信息(最早支持2024年01月数据).
     *
     * @param request - GetGroupLiveListRequest
     *
     * @returns GetGroupLiveListResponse
     *
     * @param GetGroupLiveListRequest $request
     *
     * @return GetGroupLiveListResponse
     */
    public function getGroupLiveList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetGroupLiveListHeaders([]);

        return $this->getGroupLiveListWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询企业内部群成员.
     *
     * @param request - GetInnerGroupMembersRequest
     * @param tmpHeader - GetInnerGroupMembersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInnerGroupMembersResponse
     *
     * @param GetInnerGroupMembersRequest $request
     * @param GetInnerGroupMembersHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return GetInnerGroupMembersResponse
     */
    public function getInnerGroupMembersWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetInnerGroupMembersShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->openConversationId) {
            @$body['OpenConversationId'] = $request->openConversationId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInnerGroupMembers',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/im/getInnerGroupMembers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInnerGroupMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInnerGroupMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询企业内部群成员.
     *
     * @param request - GetInnerGroupMembersRequest
     *
     * @returns GetInnerGroupMembersResponse
     *
     * @param GetInnerGroupMembersRequest $request
     *
     * @return GetInnerGroupMembersResponse
     */
    public function getInnerGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetInnerGroupMembersHeaders([]);

        return $this->getInnerGroupMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * 根据流程实例ID获取流程实例.
     *
     * @param request - GetInstanceByIdRequest
     * @param tmpHeader - GetInstanceByIdHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceByIdResponse
     *
     * @param GetInstanceByIdRequest $request
     * @param GetInstanceByIdHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return GetInstanceByIdResponse
     */
    public function getInstanceByIdWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetInstanceByIdShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInstanceById',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getInstanceById',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInstanceByIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInstanceByIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据流程实例ID获取流程实例.
     *
     * @param request - GetInstanceByIdRequest
     *
     * @returns GetInstanceByIdResponse
     *
     * @param GetInstanceByIdRequest $request
     *
     * @return GetInstanceByIdResponse
     */
    public function getInstanceById($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetInstanceByIdHeaders([]);

        return $this->getInstanceByIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取实例ID列表.
     *
     * @param request - GetInstanceIdListRequest
     * @param tmpHeader - GetInstanceIdListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceIdListResponse
     *
     * @param GetInstanceIdListRequest $request
     * @param GetInstanceIdListHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return GetInstanceIdListResponse
     */
    public function getInstanceIdListWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetInstanceIdListShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->approvedResult) {
            @$body['ApprovedResult'] = $request->approvedResult;
        }

        if (null !== $request->createFromTimeGMT) {
            @$body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }

        if (null !== $request->createToTimeGMT) {
            @$body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->instanceStatus) {
            @$body['InstanceStatus'] = $request->instanceStatus;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->modifiedFromTimeGMT) {
            @$body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }

        if (null !== $request->modifiedToTimeGMT) {
            @$body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }

        if (null !== $request->originatorId) {
            @$body['OriginatorId'] = $request->originatorId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchFieldJson) {
            @$body['SearchFieldJson'] = $request->searchFieldJson;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInstanceIdList',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getInstanceIdList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInstanceIdListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInstanceIdListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取实例ID列表.
     *
     * @param request - GetInstanceIdListRequest
     *
     * @returns GetInstanceIdListResponse
     *
     * @param GetInstanceIdListRequest $request
     *
     * @return GetInstanceIdListResponse
     */
    public function getInstanceIdList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetInstanceIdListHeaders([]);

        return $this->getInstanceIdListWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取流程实例.
     *
     * @param request - GetInstancesRequest
     * @param tmpHeader - GetInstancesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstancesResponse
     *
     * @param GetInstancesRequest $request
     * @param GetInstancesHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return GetInstancesResponse
     */
    public function getInstancesWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetInstancesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->approvedResult) {
            @$body['ApprovedResult'] = $request->approvedResult;
        }

        if (null !== $request->createFromTimeGMT) {
            @$body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }

        if (null !== $request->createToTimeGMT) {
            @$body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->instanceStatus) {
            @$body['InstanceStatus'] = $request->instanceStatus;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->modifiedFromTimeGMT) {
            @$body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }

        if (null !== $request->modifiedToTimeGMT) {
            @$body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }

        if (null !== $request->orderConfigJson) {
            @$body['OrderConfigJson'] = $request->orderConfigJson;
        }

        if (null !== $request->originatorId) {
            @$body['OriginatorId'] = $request->originatorId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchFieldJson) {
            @$body['SearchFieldJson'] = $request->searchFieldJson;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInstances',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getInstances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取流程实例.
     *
     * @param request - GetInstancesRequest
     *
     * @returns GetInstancesResponse
     *
     * @param GetInstancesRequest $request
     *
     * @return GetInstancesResponse
     */
    public function getInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetInstancesHeaders([]);

        return $this->getInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * 根据实例 ID 列表批量获取流程实例详情(批量获取流程实例列表).
     *
     * @param request - GetInstancesByIdListRequest
     * @param tmpHeader - GetInstancesByIdListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstancesByIdListResponse
     *
     * @param GetInstancesByIdListRequest $request
     * @param GetInstancesByIdListHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return GetInstancesByIdListResponse
     */
    public function getInstancesByIdListWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetInstancesByIdListShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->processInstanceIds) {
            @$body['ProcessInstanceIds'] = $request->processInstanceIds;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInstancesByIdList',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getInstancesByIdList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetInstancesByIdListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetInstancesByIdListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据实例 ID 列表批量获取流程实例详情(批量获取流程实例列表).
     *
     * @param request - GetInstancesByIdListRequest
     *
     * @returns GetInstancesByIdListResponse
     *
     * @param GetInstancesByIdListRequest $request
     *
     * @return GetInstancesByIdListResponse
     */
    public function getInstancesByIdList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetInstancesByIdListHeaders([]);

        return $this->getInstancesByIdListWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取直播的可下载回放地址
     *
     * @param tmpReq - GetLiveReplayUrlRequest
     * @param tmpHeader - GetLiveReplayUrlHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLiveReplayUrlResponse
     *
     * @param GetLiveReplayUrlRequest $tmpReq
     * @param GetLiveReplayUrlHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return GetLiveReplayUrlResponse
     */
    public function getLiveReplayUrlWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetLiveReplayUrlShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetLiveReplayUrlShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->liveId) {
            @$body['LiveId'] = $request->liveId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetLiveReplayUrl',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/getLiveReplayUrl',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLiveReplayUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveReplayUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取直播的可下载回放地址
     *
     * @param request - GetLiveReplayUrlRequest
     *
     * @returns GetLiveReplayUrlResponse
     *
     * @param GetLiveReplayUrlRequest $request
     *
     * @return GetLiveReplayUrlResponse
     */
    public function getLiveReplayUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetLiveReplayUrlHeaders([]);

        return $this->getLiveReplayUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取组织内某人提交的任务
     *
     * @param request - GetMeCorpSubmissionRequest
     * @param tmpHeader - GetMeCorpSubmissionHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMeCorpSubmissionResponse
     *
     * @param GetMeCorpSubmissionRequest $request
     * @param GetMeCorpSubmissionHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return GetMeCorpSubmissionResponse
     */
    public function getMeCorpSubmissionWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetMeCorpSubmissionShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appTypes) {
            @$body['AppTypes'] = $request->appTypes;
        }

        if (null !== $request->corpId) {
            @$body['CorpId'] = $request->corpId;
        }

        if (null !== $request->createFromTimeGMT) {
            @$body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }

        if (null !== $request->createToTimeGMT) {
            @$body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->processCodes) {
            @$body['ProcessCodes'] = $request->processCodes;
        }

        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMeCorpSubmission',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getMeCorpSubmission',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMeCorpSubmissionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMeCorpSubmissionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取组织内某人提交的任务
     *
     * @param request - GetMeCorpSubmissionRequest
     *
     * @returns GetMeCorpSubmissionResponse
     *
     * @param GetMeCorpSubmissionRequest $request
     *
     * @return GetMeCorpSubmissionResponse
     */
    public function getMeCorpSubmission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMeCorpSubmissionHeaders([]);

        return $this->getMeCorpSubmissionWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取会议室忙闲信息.
     *
     * @param tmpReq - GetMeetingRoomsScheduleRequest
     * @param tmpHeader - GetMeetingRoomsScheduleHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMeetingRoomsScheduleResponse
     *
     * @param GetMeetingRoomsScheduleRequest $tmpReq
     * @param GetMeetingRoomsScheduleHeaders $tmpHeader
     * @param RuntimeOptions                 $runtime
     *
     * @return GetMeetingRoomsScheduleResponse
     */
    public function getMeetingRoomsScheduleWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetMeetingRoomsScheduleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetMeetingRoomsScheduleShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->roomIds) {
            $request->roomIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roomIds, 'RoomIds', 'json');
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->roomIdsShrink) {
            @$body['RoomIds'] = $request->roomIdsShrink;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMeetingRoomsSchedule',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/getMeetingRoomsSchedule',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMeetingRoomsScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMeetingRoomsScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取会议室忙闲信息.
     *
     * @param request - GetMeetingRoomsScheduleRequest
     *
     * @returns GetMeetingRoomsScheduleResponse
     *
     * @param GetMeetingRoomsScheduleRequest $request
     *
     * @return GetMeetingRoomsScheduleResponse
     */
    public function getMeetingRoomsSchedule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMeetingRoomsScheduleHeaders([]);

        return $this->getMeetingRoomsScheduleWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取我的文档知识库信息.
     *
     * @param tmpReq - GetMineWorkspaceRequest
     * @param tmpHeader - GetMineWorkspaceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMineWorkspaceResponse
     *
     * @param GetMineWorkspaceRequest $tmpReq
     * @param GetMineWorkspaceHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return GetMineWorkspaceResponse
     */
    public function getMineWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetMineWorkspaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetMineWorkspaceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->request) {
            $request->requestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->requestShrink) {
            @$body['Request'] = $request->requestShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMineWorkspace',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/getMineWorkspace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMineWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMineWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取我的文档知识库信息.
     *
     * @param request - GetMineWorkspaceRequest
     *
     * @returns GetMineWorkspaceResponse
     *
     * @param GetMineWorkspaceRequest $request
     *
     * @return GetMineWorkspaceResponse
     */
    public function getMineWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMineWorkspaceHeaders([]);

        return $this->getMineWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取所有字段.
     *
     * @param tmpReq - GetMultiDimTableAllFieldsRequest
     * @param tmpHeader - GetMultiDimTableAllFieldsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultiDimTableAllFieldsResponse
     *
     * @param GetMultiDimTableAllFieldsRequest $tmpReq
     * @param GetMultiDimTableAllFieldsHeaders $tmpHeader
     * @param RuntimeOptions                   $runtime
     *
     * @return GetMultiDimTableAllFieldsResponse
     */
    public function getMultiDimTableAllFieldsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetMultiDimTableAllFieldsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetMultiDimTableAllFieldsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->baseId) {
            @$body['BaseId'] = $request->baseId;
        }

        if (null !== $request->sheetIdOrName) {
            @$body['SheetIdOrName'] = $request->sheetIdOrName;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMultiDimTableAllFields',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/table/getMultiDimTableAllFields',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMultiDimTableAllFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMultiDimTableAllFieldsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取所有字段.
     *
     * @param request - GetMultiDimTableAllFieldsRequest
     *
     * @returns GetMultiDimTableAllFieldsResponse
     *
     * @param GetMultiDimTableAllFieldsRequest $request
     *
     * @return GetMultiDimTableAllFieldsResponse
     */
    public function getMultiDimTableAllFields($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMultiDimTableAllFieldsHeaders([]);

        return $this->getMultiDimTableAllFieldsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取所有数据表.
     *
     * @param tmpReq - GetMultiDimTableAllSheetsRequest
     * @param tmpHeader - GetMultiDimTableAllSheetsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultiDimTableAllSheetsResponse
     *
     * @param GetMultiDimTableAllSheetsRequest $tmpReq
     * @param GetMultiDimTableAllSheetsHeaders $tmpHeader
     * @param RuntimeOptions                   $runtime
     *
     * @return GetMultiDimTableAllSheetsResponse
     */
    public function getMultiDimTableAllSheetsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetMultiDimTableAllSheetsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetMultiDimTableAllSheetsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->baseId) {
            @$body['BaseId'] = $request->baseId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMultiDimTableAllSheets',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/table/getMultiDimTableAllSheets',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMultiDimTableAllSheetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMultiDimTableAllSheetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取所有数据表.
     *
     * @param request - GetMultiDimTableAllSheetsRequest
     *
     * @returns GetMultiDimTableAllSheetsResponse
     *
     * @param GetMultiDimTableAllSheetsRequest $request
     *
     * @return GetMultiDimTableAllSheetsResponse
     */
    public function getMultiDimTableAllSheets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMultiDimTableAllSheetsHeaders([]);

        return $this->getMultiDimTableAllSheetsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取记录.
     *
     * @param tmpReq - GetMultiDimTableRecordRequest
     * @param tmpHeader - GetMultiDimTableRecordHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultiDimTableRecordResponse
     *
     * @param GetMultiDimTableRecordRequest $tmpReq
     * @param GetMultiDimTableRecordHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return GetMultiDimTableRecordResponse
     */
    public function getMultiDimTableRecordWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetMultiDimTableRecordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetMultiDimTableRecordShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->baseId) {
            @$body['BaseId'] = $request->baseId;
        }

        if (null !== $request->recordId) {
            @$body['RecordId'] = $request->recordId;
        }

        if (null !== $request->sheetIdOrName) {
            @$body['SheetIdOrName'] = $request->sheetIdOrName;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMultiDimTableRecord',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/table/getMultiDimTableRecord',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMultiDimTableRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMultiDimTableRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取记录.
     *
     * @param request - GetMultiDimTableRecordRequest
     *
     * @returns GetMultiDimTableRecordResponse
     *
     * @param GetMultiDimTableRecordRequest $request
     *
     * @return GetMultiDimTableRecordResponse
     */
    public function getMultiDimTableRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMultiDimTableRecordHeaders([]);

        return $this->getMultiDimTableRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取数据表.
     *
     * @param tmpReq - GetMultiDimTableSheetRequest
     * @param tmpHeader - GetMultiDimTableSheetHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultiDimTableSheetResponse
     *
     * @param GetMultiDimTableSheetRequest $tmpReq
     * @param GetMultiDimTableSheetHeaders $tmpHeader
     * @param RuntimeOptions               $runtime
     *
     * @return GetMultiDimTableSheetResponse
     */
    public function getMultiDimTableSheetWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetMultiDimTableSheetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetMultiDimTableSheetShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->baseId) {
            @$body['BaseId'] = $request->baseId;
        }

        if (null !== $request->sheetIdOrName) {
            @$body['SheetIdOrName'] = $request->sheetIdOrName;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMultiDimTableSheet',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/table/getMultiDimTableSheet',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMultiDimTableSheetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMultiDimTableSheetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取数据表.
     *
     * @param request - GetMultiDimTableSheetRequest
     *
     * @returns GetMultiDimTableSheetResponse
     *
     * @param GetMultiDimTableSheetRequest $request
     *
     * @return GetMultiDimTableSheetResponse
     */
    public function getMultiDimTableSheet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMultiDimTableSheetHeaders([]);

        return $this->getMultiDimTableSheetWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取文件分片上传信息.
     *
     * @param tmpReq - GetMultipartFileUploadInfosRequest
     * @param tmpHeader - GetMultipartFileUploadInfosHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMultipartFileUploadInfosResponse
     *
     * @param GetMultipartFileUploadInfosRequest $tmpReq
     * @param GetMultipartFileUploadInfosHeaders $tmpHeader
     * @param RuntimeOptions                     $runtime
     *
     * @return GetMultipartFileUploadInfosResponse
     */
    public function getMultipartFileUploadInfosWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetMultipartFileUploadInfosShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetMultipartFileUploadInfosShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->option) {
            $request->optionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }

        if (null !== $tmpReq->partNumbers) {
            $request->partNumbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->partNumbers, 'PartNumbers', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->optionShrink) {
            @$body['Option'] = $request->optionShrink;
        }

        if (null !== $request->partNumbersShrink) {
            @$body['PartNumbers'] = $request->partNumbersShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->uploadKey) {
            @$body['UploadKey'] = $request->uploadKey;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMultipartFileUploadInfos',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/GetMultipartFileUploadInfos',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMultipartFileUploadInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMultipartFileUploadInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取文件分片上传信息.
     *
     * @param request - GetMultipartFileUploadInfosRequest
     *
     * @returns GetMultipartFileUploadInfosResponse
     *
     * @param GetMultipartFileUploadInfosRequest $request
     *
     * @return GetMultipartFileUploadInfosResponse
     */
    public function getMultipartFileUploadInfos($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMultipartFileUploadInfosHeaders([]);

        return $this->getMultipartFileUploadInfosWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询最近活跃的企业内部群列表.
     *
     * @param tmpReq - GetNewestInnerGroupsRequest
     * @param tmpHeader - GetNewestInnerGroupsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNewestInnerGroupsResponse
     *
     * @param GetNewestInnerGroupsRequest $tmpReq
     * @param GetNewestInnerGroupsHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return GetNewestInnerGroupsResponse
     */
    public function getNewestInnerGroupsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetNewestInnerGroupsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetNewestInnerGroupsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->request) {
            $request->requestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }

        $body = [];
        if (null !== $request->requestShrink) {
            @$body['Request'] = $request->requestShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNewestInnerGroups',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/im/getNewestInnerGroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNewestInnerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNewestInnerGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询最近活跃的企业内部群列表.
     *
     * @param request - GetNewestInnerGroupsRequest
     *
     * @returns GetNewestInnerGroupsResponse
     *
     * @param GetNewestInnerGroupsRequest $request
     *
     * @return GetNewestInnerGroupsResponse
     */
    public function getNewestInnerGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNewestInnerGroupsHeaders([]);

        return $this->getNewestInnerGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取节点.
     *
     * @param tmpReq - GetNodeRequest
     * @param tmpHeader - GetNodeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNodeResponse
     *
     * @param GetNodeRequest $tmpReq
     * @param GetNodeHeaders $tmpHeader
     * @param RuntimeOptions $runtime
     *
     * @return GetNodeResponse
     */
    public function getNodeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetNodeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetNodeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->withPermissionRole) {
            @$body['WithPermissionRole'] = $request->withPermissionRole;
        }

        if (null !== $request->withStatisticalInfo) {
            @$body['WithStatisticalInfo'] = $request->withStatisticalInfo;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNode',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/getNode',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取节点.
     *
     * @param request - GetNodeRequest
     *
     * @returns GetNodeResponse
     *
     * @param GetNodeRequest $request
     *
     * @return GetNodeResponse
     */
    public function getNode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNodeHeaders([]);

        return $this->getNodeWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过链接获取节点.
     *
     * @param tmpReq - GetNodeByUrlRequest
     * @param tmpHeader - GetNodeByUrlHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNodeByUrlResponse
     *
     * @param GetNodeByUrlRequest $tmpReq
     * @param GetNodeByUrlHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return GetNodeByUrlResponse
     */
    public function getNodeByUrlWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetNodeByUrlShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetNodeByUrlShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->option) {
            $request->optionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->optionShrink) {
            @$body['Option'] = $request->optionShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->url) {
            @$body['Url'] = $request->url;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNodeByUrl',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/getNodeByUrl',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNodeByUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNodeByUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 通过链接获取节点.
     *
     * @param request - GetNodeByUrlRequest
     *
     * @returns GetNodeByUrlResponse
     *
     * @param GetNodeByUrlRequest $request
     *
     * @return GetNodeByUrlResponse
     */
    public function getNodeByUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNodeByUrlHeaders([]);

        return $this->getNodeByUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量获取节点.
     *
     * @param tmpReq - GetNodesRequest
     * @param tmpHeader - GetNodesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNodesResponse
     *
     * @param GetNodesRequest $tmpReq
     * @param GetNodesHeaders $tmpHeader
     * @param RuntimeOptions  $runtime
     *
     * @return GetNodesResponse
     */
    public function getNodesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetNodesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->nodeIds) {
            $request->nodeIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->nodeIds, 'NodeIds', 'json');
        }

        if (null !== $tmpReq->option) {
            $request->optionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->nodeIdsShrink) {
            @$body['NodeIds'] = $request->nodeIdsShrink;
        }

        if (null !== $request->optionShrink) {
            @$body['Option'] = $request->optionShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNodes',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/getNodes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量获取节点.
     *
     * @param request - GetNodesRequest
     *
     * @returns GetNodesResponse
     *
     * @param GetNodesRequest $request
     *
     * @return GetNodesResponse
     */
    public function getNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNodesHeaders([]);

        return $this->getNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取发送给用户的通知.
     *
     * @param request - GetNotifyMeRequest
     * @param tmpHeader - GetNotifyMeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNotifyMeResponse
     *
     * @param GetNotifyMeRequest $request
     * @param GetNotifyMeHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return GetNotifyMeResponse
     */
    public function getNotifyMeWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetNotifyMeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appTypes) {
            @$body['AppTypes'] = $request->appTypes;
        }

        if (null !== $request->corpId) {
            @$body['CorpId'] = $request->corpId;
        }

        if (null !== $request->createFromTimeGMT) {
            @$body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }

        if (null !== $request->createToTimeGMT) {
            @$body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }

        if (null !== $request->instanceCreateFromTimeGMT) {
            @$body['InstanceCreateFromTimeGMT'] = $request->instanceCreateFromTimeGMT;
        }

        if (null !== $request->instanceCreateToTimeGMT) {
            @$body['InstanceCreateToTimeGMT'] = $request->instanceCreateToTimeGMT;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->processCodes) {
            @$body['ProcessCodes'] = $request->processCodes;
        }

        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNotifyMe',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getNotifyMe',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNotifyMeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNotifyMeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取发送给用户的通知.
     *
     * @param request - GetNotifyMeRequest
     *
     * @returns GetNotifyMeResponse
     *
     * @param GetNotifyMeRequest $request
     *
     * @return GetNotifyMeResponse
     */
    public function getNotifyMe($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNotifyMeHeaders([]);

        return $this->getNotifyMeWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取宜搭附件临时免登地址
     *
     * @param request - GetOpenUrlRequest
     * @param tmpHeader - GetOpenUrlHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOpenUrlResponse
     *
     * @param GetOpenUrlRequest $request
     * @param GetOpenUrlHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return GetOpenUrlResponse
     */
    public function getOpenUrlWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetOpenUrlShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->fileUrl) {
            @$body['FileUrl'] = $request->fileUrl;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->timeout) {
            @$body['Timeout'] = $request->timeout;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOpenUrl',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getOpenUrl',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOpenUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOpenUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取宜搭附件临时免登地址
     *
     * @param request - GetOpenUrlRequest
     *
     * @returns GetOpenUrlResponse
     *
     * @param GetOpenUrlRequest $request
     *
     * @return GetOpenUrlResponse
     */
    public function getOpenUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetOpenUrlHeaders([]);

        return $this->getOpenUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取审批记录.
     *
     * @param request - GetOperationRecordsRequest
     * @param tmpHeader - GetOperationRecordsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOperationRecordsResponse
     *
     * @param GetOperationRecordsRequest $request
     * @param GetOperationRecordsHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return GetOperationRecordsResponse
     */
    public function getOperationRecordsWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetOperationRecordsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->processInstanceId) {
            @$body['ProcessInstanceId'] = $request->processInstanceId;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOperationRecords',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getOperationRecords',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOperationRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOperationRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取审批记录.
     *
     * @param request - GetOperationRecordsRequest
     *
     * @returns GetOperationRecordsResponse
     *
     * @param GetOperationRecordsRequest $request
     *
     * @return GetOperationRecordsResponse
     */
    public function getOperationRecords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetOperationRecordsHeaders([]);

        return $this->getOperationRecordsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param tmpReq - GetOrgLiveListRequest
     * @param tmpHeader - GetOrgLiveListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOrgLiveListResponse
     *
     * @param GetOrgLiveListRequest $tmpReq
     * @param GetOrgLiveListHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return GetOrgLiveListResponse
     */
    public function getOrgLiveListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetOrgLiveListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetOrgLiveListShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->corpId) {
            @$body['CorpId'] = $request->corpId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOrgLiveList',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/getOrgLiveList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOrgLiveListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOrgLiveListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetOrgLiveListRequest
     *
     * @returns GetOrgLiveListResponse
     *
     * @param GetOrgLiveListRequest $request
     *
     * @return GetOrgLiveListResponse
     */
    public function getOrgLiveList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetOrgLiveListHeaders([]);

        return $this->getOrgLiveListWithOptions($request, $headers, $runtime);
    }

    /**
     * 委托权限获取组织或者互联网公开文档内容taskId.
     *
     * @param tmpReq - GetOrgOrWebOpenDocContentTaskIdRequest
     * @param tmpHeader - GetOrgOrWebOpenDocContentTaskIdHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOrgOrWebOpenDocContentTaskIdResponse
     *
     * @param GetOrgOrWebOpenDocContentTaskIdRequest $tmpReq
     * @param GetOrgOrWebOpenDocContentTaskIdHeaders $tmpHeader
     * @param RuntimeOptions                         $runtime
     *
     * @return GetOrgOrWebOpenDocContentTaskIdResponse
     */
    public function getOrgOrWebOpenDocContentTaskIdWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetOrgOrWebOpenDocContentTaskIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetOrgOrWebOpenDocContentTaskIdShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->dentryUuid) {
            @$body['DentryUuid'] = $request->dentryUuid;
        }

        if (null !== $request->generateCp) {
            @$body['GenerateCp'] = $request->generateCp;
        }

        if (null !== $request->scopeType) {
            @$body['ScopeType'] = $request->scopeType;
        }

        if (null !== $request->targetFormat) {
            @$body['TargetFormat'] = $request->targetFormat;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetOrgOrWebOpenDocContentTaskId',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/getOrgOrWebOpenDocContentTaskId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetOrgOrWebOpenDocContentTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetOrgOrWebOpenDocContentTaskIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 委托权限获取组织或者互联网公开文档内容taskId.
     *
     * @param request - GetOrgOrWebOpenDocContentTaskIdRequest
     *
     * @returns GetOrgOrWebOpenDocContentTaskIdResponse
     *
     * @param GetOrgOrWebOpenDocContentTaskIdRequest $request
     *
     * @return GetOrgOrWebOpenDocContentTaskIdResponse
     */
    public function getOrgOrWebOpenDocContentTaskId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetOrgOrWebOpenDocContentTaskIdHeaders([]);

        return $this->getOrgOrWebOpenDocContentTaskIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取流程定义.
     *
     * @param request - GetProcessDefinitionRequest
     * @param tmpHeader - GetProcessDefinitionHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProcessDefinitionResponse
     *
     * @param GetProcessDefinitionRequest $request
     * @param GetProcessDefinitionHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return GetProcessDefinitionResponse
     */
    public function getProcessDefinitionWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetProcessDefinitionShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->corpId) {
            @$body['CorpId'] = $request->corpId;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->nameSpace) {
            @$body['NameSpace'] = $request->nameSpace;
        }

        if (null !== $request->orderNumber) {
            @$body['OrderNumber'] = $request->orderNumber;
        }

        if (null !== $request->processInstanceId) {
            @$body['ProcessInstanceId'] = $request->processInstanceId;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->systemType) {
            @$body['SystemType'] = $request->systemType;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetProcessDefinition',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getProcessDefinition',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetProcessDefinitionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProcessDefinitionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取流程定义.
     *
     * @param request - GetProcessDefinitionRequest
     *
     * @returns GetProcessDefinitionResponse
     *
     * @param GetProcessDefinitionRequest $request
     *
     * @return GetProcessDefinitionResponse
     */
    public function getProcessDefinition($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetProcessDefinitionHeaders([]);

        return $this->getProcessDefinitionWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取单元格区域
     *
     * @param tmpReq - GetRangeRequest
     * @param tmpHeader - GetRangeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRangeResponse
     *
     * @param GetRangeRequest $tmpReq
     * @param GetRangeHeaders $tmpHeader
     * @param RuntimeOptions  $runtime
     *
     * @return GetRangeResponse
     */
    public function getRangeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetRangeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetRangeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->rangeAddress) {
            @$body['RangeAddress'] = $request->rangeAddress;
        }

        if (null !== $request->select) {
            @$body['Select'] = $request->select;
        }

        if (null !== $request->sheetId) {
            @$body['SheetId'] = $request->sheetId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRange',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/getRange',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRangeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRangeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取单元格区域
     *
     * @param request - GetRangeRequest
     *
     * @returns GetRangeResponse
     *
     * @param GetRangeRequest $request
     *
     * @return GetRangeResponse
     */
    public function getRange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetRangeHeaders([]);

        return $this->getRangeWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询用户有权限的知识库列表(旧).
     *
     * @param tmpReq - GetRelatedWorkspacesRequest
     * @param tmpHeader - GetRelatedWorkspacesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRelatedWorkspacesResponse
     *
     * @param GetRelatedWorkspacesRequest $tmpReq
     * @param GetRelatedWorkspacesHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return GetRelatedWorkspacesResponse
     */
    public function getRelatedWorkspacesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetRelatedWorkspacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetRelatedWorkspacesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->includeRecent) {
            @$body['IncludeRecent'] = $request->includeRecent;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRelatedWorkspaces',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/getRelatedWorkspaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRelatedWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRelatedWorkspacesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询用户有权限的知识库列表(旧).
     *
     * @param request - GetRelatedWorkspacesRequest
     *
     * @returns GetRelatedWorkspacesResponse
     *
     * @param GetRelatedWorkspacesRequest $request
     *
     * @return GetRelatedWorkspacesResponse
     */
    public function getRelatedWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetRelatedWorkspacesHeaders([]);

        return $this->getRelatedWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取模板详情.
     *
     * @param tmpReq - GetReportTemplateByNameRequest
     * @param tmpHeader - GetReportTemplateByNameHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReportTemplateByNameResponse
     *
     * @param GetReportTemplateByNameRequest $tmpReq
     * @param GetReportTemplateByNameHeaders $tmpHeader
     * @param RuntimeOptions                 $runtime
     *
     * @return GetReportTemplateByNameResponse
     */
    public function getReportTemplateByNameWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetReportTemplateByNameShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetReportTemplateByNameShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetReportTemplateByName',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/log/getReportTemplateByName',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetReportTemplateByNameResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetReportTemplateByNameResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取模板详情.
     *
     * @param request - GetReportTemplateByNameRequest
     *
     * @returns GetReportTemplateByNameResponse
     *
     * @param GetReportTemplateByNameRequest $request
     *
     * @return GetReportTemplateByNameResponse
     */
    public function getReportTemplateByName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetReportTemplateByNameHeaders([]);

        return $this->getReportTemplateByNameWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取员工有多少数量的日志（一个月内）是未读状态
     *
     * @param tmpReq - GetReportUnReadCountRequest
     * @param tmpHeader - GetReportUnReadCountHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReportUnReadCountResponse
     *
     * @param GetReportUnReadCountRequest $tmpReq
     * @param GetReportUnReadCountHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return GetReportUnReadCountResponse
     */
    public function getReportUnReadCountWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetReportUnReadCountShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetReportUnReadCountShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->request) {
            $request->requestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->requestShrink) {
            @$body['Request'] = $request->requestShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetReportUnReadCount',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/log/getReportUnReadCount',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetReportUnReadCountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetReportUnReadCountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取员工有多少数量的日志（一个月内）是未读状态
     *
     * @param request - GetReportUnReadCountRequest
     *
     * @returns GetReportUnReadCountResponse
     *
     * @param GetReportUnReadCountRequest $request
     *
     * @return GetReportUnReadCountResponse
     */
    public function getReportUnReadCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetReportUnReadCountHeaders([]);

        return $this->getReportUnReadCountWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询流程运行任务（VPC）.
     *
     * @param request - GetRunningTasksRequest
     * @param tmpHeader - GetRunningTasksHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRunningTasksResponse
     *
     * @param GetRunningTasksRequest $request
     * @param GetRunningTasksHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return GetRunningTasksResponse
     */
    public function getRunningTasksWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetRunningTasksShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->processCodes) {
            @$body['ProcessCodes'] = $request->processCodes;
        }

        if (null !== $request->processInstanceId) {
            @$body['ProcessInstanceId'] = $request->processInstanceId;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetRunningTasks',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getRunningTasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetRunningTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetRunningTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询流程运行任务（VPC）.
     *
     * @param request - GetRunningTasksRequest
     *
     * @returns GetRunningTasksResponse
     *
     * @param GetRunningTasksRequest $request
     *
     * @return GetRunningTasksResponse
     */
    public function getRunningTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetRunningTasksHeaders([]);

        return $this->getRunningTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取用户忙闲信息.
     *
     * @param tmpReq - GetScheduleRequest
     * @param tmpHeader - GetScheduleHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScheduleResponse
     *
     * @param GetScheduleRequest $tmpReq
     * @param GetScheduleHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return GetScheduleResponse
     */
    public function getScheduleWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetScheduleShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetScheduleShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->userIds) {
            $request->userIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIds, 'UserIds', 'json');
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->userIdsShrink) {
            @$body['UserIds'] = $request->userIdsShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSchedule',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/getSchedule',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetScheduleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取用户忙闲信息.
     *
     * @param request - GetScheduleRequest
     *
     * @returns GetScheduleResponse
     *
     * @param GetScheduleRequest $request
     *
     * @return GetScheduleResponse
     */
    public function getSchedule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetScheduleHeaders([]);

        return $this->getScheduleWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取工作表.
     *
     * @param tmpReq - GetSheetRequest
     * @param tmpHeader - GetSheetHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSheetResponse
     *
     * @param GetSheetRequest $tmpReq
     * @param GetSheetHeaders $tmpHeader
     * @param RuntimeOptions  $runtime
     *
     * @return GetSheetResponse
     */
    public function getSheetWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSheetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetSheetShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->sheetId) {
            @$body['SheetId'] = $request->sheetId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSheet',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/getSheet',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSheetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSheetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取工作表.
     *
     * @param request - GetSheetRequest
     *
     * @returns GetSheetResponse
     *
     * @param GetSheetRequest $request
     *
     * @return GetSheetResponse
     */
    public function getSheet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSheetHeaders([]);

        return $this->getSheetWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取表格文档内容jobId.
     *
     * @param tmpReq - GetSheetContentJobIdRequest
     * @param tmpHeader - GetSheetContentJobIdHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSheetContentJobIdResponse
     *
     * @param GetSheetContentJobIdRequest $tmpReq
     * @param GetSheetContentJobIdHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return GetSheetContentJobIdResponse
     */
    public function getSheetContentJobIdWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSheetContentJobIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetSheetContentJobIdShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->dentryUuid) {
            @$body['DentryUuid'] = $request->dentryUuid;
        }

        if (null !== $request->exportType) {
            @$body['ExportType'] = $request->exportType;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSheetContentJobId',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/getSheetContentJobId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSheetContentJobIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSheetContentJobIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取表格文档内容jobId.
     *
     * @param request - GetSheetContentJobIdRequest
     *
     * @returns GetSheetContentJobIdResponse
     *
     * @param GetSheetContentJobIdRequest $request
     *
     * @return GetSheetContentJobIdResponse
     */
    public function getSheetContentJobId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSheetContentJobIdHeaders([]);

        return $this->getSheetContentJobIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询知识库下的目录结构.
     *
     * @param tmpReq - GetSpaceDirectoriesRequest
     * @param tmpHeader - GetSpaceDirectoriesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSpaceDirectoriesResponse
     *
     * @param GetSpaceDirectoriesRequest $tmpReq
     * @param GetSpaceDirectoriesHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return GetSpaceDirectoriesResponse
     */
    public function getSpaceDirectoriesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetSpaceDirectoriesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetSpaceDirectoriesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->dentryId) {
            @$body['DentryId'] = $request->dentryId;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->spaceId) {
            @$body['SpaceId'] = $request->spaceId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSpaceDirectories',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/getSpaceDirectories',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSpaceDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSpaceDirectoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询知识库下的目录结构.
     *
     * @param request - GetSpaceDirectoriesRequest
     *
     * @returns GetSpaceDirectoriesResponse
     *
     * @param GetSpaceDirectoriesRequest $request
     *
     * @return GetSpaceDirectoriesResponse
     */
    public function getSpaceDirectories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSpaceDirectoriesHeaders([]);

        return $this->getSpaceDirectoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询单个订阅日历详情.
     *
     * @param request - GetSubscribedCalendarRequest
     * @param tmpHeader - GetSubscribedCalendarHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSubscribedCalendarResponse
     *
     * @param GetSubscribedCalendarRequest $request
     * @param GetSubscribedCalendarHeaders $tmpHeader
     * @param RuntimeOptions               $runtime
     *
     * @return GetSubscribedCalendarResponse
     */
    public function getSubscribedCalendarWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetSubscribedCalendarShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetSubscribedCalendar',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/getSubscribedCalendar',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSubscribedCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSubscribedCalendarResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询单个订阅日历详情.
     *
     * @param request - GetSubscribedCalendarRequest
     *
     * @returns GetSubscribedCalendarResponse
     *
     * @param GetSubscribedCalendarRequest $request
     *
     * @return GetSubscribedCalendarResponse
     */
    public function getSubscribedCalendar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSubscribedCalendarHeaders([]);

        return $this->getSubscribedCalendarWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询抄送我的任务列表（应用维度）.
     *
     * @param request - GetTaskCopiesRequest
     * @param tmpHeader - GetTaskCopiesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskCopiesResponse
     *
     * @param GetTaskCopiesRequest $request
     * @param GetTaskCopiesHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskCopiesResponse
     */
    public function getTaskCopiesWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new GetTaskCopiesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->createFromTimeGMT) {
            @$body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }

        if (null !== $request->createToTimeGMT) {
            @$body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->processCodes) {
            @$body['ProcessCodes'] = $request->processCodes;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTaskCopies',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/getTaskCopies',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTaskCopiesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTaskCopiesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询抄送我的任务列表（应用维度）.
     *
     * @param request - GetTaskCopiesRequest
     *
     * @returns GetTaskCopiesResponse
     *
     * @param GetTaskCopiesRequest $request
     *
     * @return GetTaskCopiesResponse
     */
    public function getTaskCopies($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetTaskCopiesHeaders([]);

        return $this->getTaskCopiesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取用户可见的日志模板
     *
     * @param tmpReq - GetTemplateListByUserIdRequest
     * @param tmpHeader - GetTemplateListByUserIdHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateListByUserIdResponse
     *
     * @param GetTemplateListByUserIdRequest $tmpReq
     * @param GetTemplateListByUserIdHeaders $tmpHeader
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTemplateListByUserIdResponse
     */
    public function getTemplateListByUserIdWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetTemplateListByUserIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetTemplateListByUserIdShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->offset) {
            @$body['Offset'] = $request->offset;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTemplateListByUserId',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/log/getTemplateListByUserId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTemplateListByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTemplateListByUserIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取用户可见的日志模板
     *
     * @param request - GetTemplateListByUserIdRequest
     *
     * @returns GetTemplateListByUserIdResponse
     *
     * @param GetTemplateListByUserIdRequest $request
     *
     * @return GetTemplateListByUserIdResponse
     */
    public function getTemplateListByUserId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetTemplateListByUserIdHeaders([]);

        return $this->getTemplateListByUserIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取指定工单详情.
     *
     * @param tmpReq - GetTicketRequest
     * @param tmpHeader - GetTicketHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTicketResponse
     *
     * @param GetTicketRequest $tmpReq
     * @param GetTicketHeaders $tmpHeader
     * @param RuntimeOptions   $runtime
     *
     * @return GetTicketResponse
     */
    public function getTicketWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetTicketShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetTicketShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->openTeamId) {
            @$body['OpenTeamId'] = $request->openTeamId;
        }

        if (null !== $request->openTicketId) {
            @$body['OpenTicketId'] = $request->openTicketId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTicket',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ticket/getTicket',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTicketResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTicketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取指定工单详情.
     *
     * @param request - GetTicketRequest
     *
     * @returns GetTicketResponse
     *
     * @param GetTicketRequest $request
     *
     * @return GetTicketResponse
     */
    public function getTicket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetTicketHeaders([]);

        return $this->getTicketWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取钉钉待办任务详情.
     *
     * @param tmpReq - GetTodoTaskRequest
     * @param tmpHeader - GetTodoTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTodoTaskResponse
     *
     * @param GetTodoTaskRequest $tmpReq
     * @param GetTodoTaskHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return GetTodoTaskResponse
     */
    public function getTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetTodoTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetTodoTaskShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTodoTask',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/task/getTodoTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTodoTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取钉钉待办任务详情.
     *
     * @param request - GetTodoTaskRequest
     *
     * @returns GetTodoTaskResponse
     *
     * @param GetTodoTaskRequest $request
     *
     * @return GetTodoTaskResponse
     */
    public function getTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetTodoTaskHeaders([]);

        return $this->getTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取专属账号信息.
     *
     * @param tmpReq - GetUserRequest
     * @param tmpHeader - GetUserHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $tmpReq
     * @param GetUserHeaders $tmpHeader
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetUserShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetUserShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->language) {
            @$body['language'] = $request->language;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUser',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/im/getUser',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取专属账号信息.
     *
     * @param request - GetUserRequest
     *
     * @returns GetUserResponse
     *
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserHeaders([]);

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * 根据unionId获取用户userId.
     *
     * @param tmpReq - GetUserIdRequest
     * @param tmpHeader - GetUserIdHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserIdResponse
     *
     * @param GetUserIdRequest $tmpReq
     * @param GetUserIdHeaders $tmpHeader
     * @param RuntimeOptions   $runtime
     *
     * @return GetUserIdResponse
     */
    public function getUserIdWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetUserIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetUserIdShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->unionId) {
            @$body['UnionId'] = $request->unionId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserId',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/im/getUserId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据unionId获取用户userId.
     *
     * @param request - GetUserIdRequest
     *
     * @returns GetUserIdResponse
     *
     * @param GetUserIdRequest $request
     *
     * @return GetUserIdResponse
     */
    public function getUserId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdHeaders([]);

        return $this->getUserIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 根据orgId和staffId获取用户userId.
     *
     * @param tmpReq - GetUserIdByOrgIdAndStaffIdRequest
     * @param tmpHeader - GetUserIdByOrgIdAndStaffIdHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserIdByOrgIdAndStaffIdResponse
     *
     * @param GetUserIdByOrgIdAndStaffIdRequest $tmpReq
     * @param GetUserIdByOrgIdAndStaffIdHeaders $tmpHeader
     * @param RuntimeOptions                    $runtime
     *
     * @return GetUserIdByOrgIdAndStaffIdResponse
     */
    public function getUserIdByOrgIdAndStaffIdWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetUserIdByOrgIdAndStaffIdShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetUserIdByOrgIdAndStaffIdShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->orgId) {
            @$body['OrgId'] = $request->orgId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserIdByOrgIdAndStaffId',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/im/getUserIdByOrgIdAndStaffId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUserIdByOrgIdAndStaffIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserIdByOrgIdAndStaffIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据orgId和staffId获取用户userId.
     *
     * @param request - GetUserIdByOrgIdAndStaffIdRequest
     *
     * @returns GetUserIdByOrgIdAndStaffIdResponse
     *
     * @param GetUserIdByOrgIdAndStaffIdRequest $request
     *
     * @return GetUserIdByOrgIdAndStaffIdResponse
     */
    public function getUserIdByOrgIdAndStaffId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserIdByOrgIdAndStaffIdHeaders([]);

        return $this->getUserIdByOrgIdAndStaffIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取用户最新的有效的专属账号迁移方案.
     *
     * @param tmpReq - GetUserLatestPlanRequest
     * @param tmpHeader - GetUserLatestPlanHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserLatestPlanResponse
     *
     * @param GetUserLatestPlanRequest $tmpReq
     * @param GetUserLatestPlanHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return GetUserLatestPlanResponse
     */
    public function getUserLatestPlanWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetUserLatestPlanShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetUserLatestPlanShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetUserLatestPlan',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/aliding/v1/indepding/getUserLatestPlan',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUserLatestPlanResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUserLatestPlanResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取用户最新的有效的专属账号迁移方案.
     *
     * @param request - GetUserLatestPlanRequest
     *
     * @returns GetUserLatestPlanResponse
     *
     * @param GetUserLatestPlanRequest $request
     *
     * @return GetUserLatestPlanResponse
     */
    public function getUserLatestPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserLatestPlanHeaders([]);

        return $this->getUserLatestPlanWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取知识库.
     *
     * @param tmpReq - GetWorkspaceRequest
     * @param tmpHeader - GetWorkspaceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspaceResponse
     *
     * @param GetWorkspaceRequest $tmpReq
     * @param GetWorkspaceHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetWorkspaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetWorkspaceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->withPermissionRole) {
            @$body['WithPermissionRole'] = $request->withPermissionRole;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetWorkspace',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/getWorkspace',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetWorkspaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取知识库.
     *
     * @param request - GetWorkspaceRequest
     *
     * @returns GetWorkspaceResponse
     *
     * @param GetWorkspaceRequest $request
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetWorkspaceHeaders([]);

        return $this->getWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量获取知识库.
     *
     * @param tmpReq - GetWorkspacesRequest
     * @param tmpHeader - GetWorkspacesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetWorkspacesResponse
     *
     * @param GetWorkspacesRequest $tmpReq
     * @param GetWorkspacesHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return GetWorkspacesResponse
     */
    public function getWorkspacesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GetWorkspacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GetWorkspacesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->option) {
            $request->optionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->workspaceIds) {
            $request->workspaceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->workspaceIds, 'WorkspaceIds', 'json');
        }

        $body = [];
        if (null !== $request->optionShrink) {
            @$body['Option'] = $request->optionShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workspaceIdsShrink) {
            @$body['WorkspaceIds'] = $request->workspaceIdsShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetWorkspaces',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/getWorkspaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetWorkspacesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量获取知识库.
     *
     * @param request - GetWorkspacesRequest
     *
     * @returns GetWorkspacesResponse
     *
     * @param GetWorkspacesRequest $request
     *
     * @return GetWorkspacesResponse
     */
    public function getWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetWorkspacesHeaders([]);

        return $this->getWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * 授予勋章.
     *
     * @param tmpReq - GrantHonorRequest
     * @param tmpHeader - GrantHonorHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GrantHonorResponse
     *
     * @param GrantHonorRequest $tmpReq
     * @param GrantHonorHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return GrantHonorResponse
     */
    public function grantHonorWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new GrantHonorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new GrantHonorShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->openConversationIds) {
            $request->openConversationIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->openConversationIds, 'openConversationIds', 'json');
        }

        if (null !== $tmpReq->receiverUserIds) {
            $request->receiverUserIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->receiverUserIds, 'receiverUserIds', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->expirationTime) {
            @$body['expirationTime'] = $request->expirationTime;
        }

        if (null !== $request->grantReason) {
            @$body['grantReason'] = $request->grantReason;
        }

        if (null !== $request->granterName) {
            @$body['granterName'] = $request->granterName;
        }

        if (null !== $request->honorId) {
            @$body['honorId'] = $request->honorId;
        }

        if (null !== $request->noticeAnnouncer) {
            @$body['noticeAnnouncer'] = $request->noticeAnnouncer;
        }

        if (null !== $request->noticeSingle) {
            @$body['noticeSingle'] = $request->noticeSingle;
        }

        if (null !== $request->openConversationIdsShrink) {
            @$body['openConversationIds'] = $request->openConversationIdsShrink;
        }

        if (null !== $request->orgId) {
            @$body['orgId'] = $request->orgId;
        }

        if (null !== $request->receiverUserIdsShrink) {
            @$body['receiverUserIds'] = $request->receiverUserIdsShrink;
        }

        if (null !== $request->senderUserId) {
            @$body['senderUserId'] = $request->senderUserId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GrantHonor',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/aliding/v1/honor/grantHonor',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GrantHonorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GrantHonorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 授予勋章.
     *
     * @param request - GrantHonorRequest
     *
     * @returns GrantHonorResponse
     *
     * @param GrantHonorRequest $request
     *
     * @return GrantHonorResponse
     */
    public function grantHonor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GrantHonorHeaders([]);

        return $this->grantHonorWithOptions($request, $headers, $runtime);
    }

    /**
     * 初始化文件分片上传.
     *
     * @param tmpReq - InitMultipartFileUploadRequest
     * @param tmpHeader - InitMultipartFileUploadHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InitMultipartFileUploadResponse
     *
     * @param InitMultipartFileUploadRequest $tmpReq
     * @param InitMultipartFileUploadHeaders $tmpHeader
     * @param RuntimeOptions                 $runtime
     *
     * @return InitMultipartFileUploadResponse
     */
    public function initMultipartFileUploadWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new InitMultipartFileUploadShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new InitMultipartFileUploadShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->option) {
            $request->optionShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->optionShrink) {
            @$body['Option'] = $request->optionShrink;
        }

        if (null !== $request->parentDentryUuid) {
            @$body['ParentDentryUuid'] = $request->parentDentryUuid;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InitMultipartFileUpload',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/initMultipartFileUpload',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InitMultipartFileUploadResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InitMultipartFileUploadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 初始化文件分片上传.
     *
     * @param request - InitMultipartFileUploadRequest
     *
     * @returns InitMultipartFileUploadResponse
     *
     * @param InitMultipartFileUploadRequest $request
     *
     * @return InitMultipartFileUploadResponse
     */
    public function initMultipartFileUpload($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InitMultipartFileUploadHeaders([]);

        return $this->initMultipartFileUploadWithOptions($request, $headers, $runtime);
    }

    /**
     * 在指定列左侧插入若干列.
     *
     * @param tmpReq - InsertColumnsBeforeRequest
     * @param tmpHeader - InsertColumnsBeforeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertColumnsBeforeResponse
     *
     * @param InsertColumnsBeforeRequest $tmpReq
     * @param InsertColumnsBeforeHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return InsertColumnsBeforeResponse
     */
    public function insertColumnsBeforeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new InsertColumnsBeforeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new InsertColumnsBeforeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->column) {
            @$body['Column'] = $request->column;
        }

        if (null !== $request->columnCount) {
            @$body['ColumnCount'] = $request->columnCount;
        }

        if (null !== $request->sheetId) {
            @$body['SheetId'] = $request->sheetId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InsertColumnsBefore',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/insertColumnsBefore',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InsertColumnsBeforeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InsertColumnsBeforeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 在指定列左侧插入若干列.
     *
     * @param request - InsertColumnsBeforeRequest
     *
     * @returns InsertColumnsBeforeResponse
     *
     * @param InsertColumnsBeforeRequest $request
     *
     * @return InsertColumnsBeforeResponse
     */
    public function insertColumnsBefore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsertColumnsBeforeHeaders([]);

        return $this->insertColumnsBeforeWithOptions($request, $headers, $runtime);
    }

    /**
     * 在指定行上方插入若干行.
     *
     * @param tmpReq - InsertRowsBeforeRequest
     * @param tmpHeader - InsertRowsBeforeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InsertRowsBeforeResponse
     *
     * @param InsertRowsBeforeRequest $tmpReq
     * @param InsertRowsBeforeHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return InsertRowsBeforeResponse
     */
    public function insertRowsBeforeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new InsertRowsBeforeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new InsertRowsBeforeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->row) {
            @$body['Row'] = $request->row;
        }

        if (null !== $request->rowCount) {
            @$body['RowCount'] = $request->rowCount;
        }

        if (null !== $request->sheetId) {
            @$body['SheetId'] = $request->sheetId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InsertRowsBefore',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/insertRowsBefore',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InsertRowsBeforeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InsertRowsBeforeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 在指定行上方插入若干行.
     *
     * @param request - InsertRowsBeforeRequest
     *
     * @returns InsertRowsBeforeResponse
     *
     * @param InsertRowsBeforeRequest $request
     *
     * @return InsertRowsBeforeResponse
     */
    public function insertRowsBefore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsertRowsBeforeHeaders([]);

        return $this->insertRowsBeforeWithOptions($request, $headers, $runtime);
    }

    /**
     * 邀请用户入会.
     *
     * @param tmpReq - InviteUsersRequest
     * @param tmpHeader - InviteUsersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InviteUsersResponse
     *
     * @param InviteUsersRequest $tmpReq
     * @param InviteUsersHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return InviteUsersResponse
     */
    public function inviteUsersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new InviteUsersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new InviteUsersShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->inviteeList) {
            $request->inviteeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inviteeList, 'InviteeList', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->phoneInviteeList) {
            $request->phoneInviteeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->phoneInviteeList, 'phoneInviteeList', 'json');
        }

        $body = [];
        if (null !== $request->inviteeListShrink) {
            @$body['InviteeList'] = $request->inviteeListShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        if (null !== $request->phoneInviteeListShrink) {
            @$body['phoneInviteeList'] = $request->phoneInviteeListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InviteUsers',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/inviteUsers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InviteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InviteUsersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 邀请用户入会.
     *
     * @param request - InviteUsersRequest
     *
     * @returns InviteUsersResponse
     *
     * @param InviteUsersRequest $request
     *
     * @return InviteUsersResponse
     */
    public function inviteUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InviteUsersHeaders([]);

        return $this->inviteUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * 调用助理.
     *
     * @param request - InvokeAssistantRequest
     * @param headers - InvokeAssistantHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokeAssistantResponse
     *
     * @param InvokeAssistantRequest $request
     * @param InvokeAssistantHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return InvokeAssistantResponse
     */
    public function invokeAssistantWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assistantId) {
            @$body['assistantId'] = $request->assistantId;
        }

        if (null !== $request->content) {
            @$body['content'] = $request->content;
        }

        if (null !== $request->history) {
            @$body['history'] = $request->history;
        }

        if (null !== $request->sessionId) {
            @$body['sessionId'] = $request->sessionId;
        }

        if (null !== $request->stream) {
            @$body['stream'] = $request->stream;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountId) {
            @$realHeaders['accountId'] = '' . $headers->accountId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvokeAssistant',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/ai/v1/assistant/invokeAssistant',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InvokeAssistantResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InvokeAssistantResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 调用助理.
     *
     * @param request - InvokeAssistantRequest
     *
     * @returns InvokeAssistantResponse
     *
     * @param InvokeAssistantRequest $request
     *
     * @return InvokeAssistantResponse
     */
    public function invokeAssistant($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvokeAssistantHeaders([]);

        return $this->invokeAssistantWithOptions($request, $headers, $runtime);
    }

    /**
     * 调用AI技能.
     *
     * @param tmpReq - InvokeSkillRequest
     * @param tmpHeader - InvokeSkillHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InvokeSkillResponse
     *
     * @param InvokeSkillRequest $tmpReq
     * @param InvokeSkillHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return InvokeSkillResponse
     */
    public function invokeSkillWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new InvokeSkillShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new InvokeSkillShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->params) {
            $request->paramsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->params, 'Params', 'json');
        }

        $body = [];
        if (null !== $request->paramsShrink) {
            @$body['Params'] = $request->paramsShrink;
        }

        if (null !== $request->skillId) {
            @$body['SkillId'] = $request->skillId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'InvokeSkill',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/ai/v1/skill/invoke',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InvokeSkillResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InvokeSkillResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 调用AI技能.
     *
     * @param request - InvokeSkillRequest
     *
     * @returns InvokeSkillResponse
     *
     * @param InvokeSkillRequest $request
     *
     * @return InvokeSkillResponse
     */
    public function invokeSkill($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InvokeSkillHeaders([]);

        return $this->invokeSkillWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询宜搭应用列表.
     *
     * @param request - ListApplicationRequest
     * @param tmpHeader - ListApplicationHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationResponse
     *
     * @param ListApplicationRequest $request
     * @param ListApplicationHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return ListApplicationResponse
     */
    public function listApplicationWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new ListApplicationShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appFilter) {
            @$body['AppFilter'] = $request->appFilter;
        }

        if (null !== $request->appNameSearchKeyword) {
            @$body['AppNameSearchKeyword'] = $request->appNameSearchKeyword;
        }

        if (null !== $request->corpId) {
            @$body['CorpId'] = $request->corpId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->token) {
            @$body['Token'] = $request->token;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListApplication',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/listApplication',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListApplicationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询宜搭应用列表.
     *
     * @param request - ListApplicationRequest
     *
     * @returns ListApplicationResponse
     *
     * @param ListApplicationRequest $request
     *
     * @return ListApplicationResponse
     */
    public function listApplication($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListApplicationHeaders([]);

        return $this->listApplicationWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询日历.
     *
     * @param tmpReq - ListCalendarsRequest
     * @param tmpHeader - ListCalendarsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCalendarsResponse
     *
     * @param ListCalendarsRequest $tmpReq
     * @param ListCalendarsHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return ListCalendarsResponse
     */
    public function listCalendarsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ListCalendarsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ListCalendarsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->request) {
            $request->requestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }

        $body = [];
        if (null !== $request->requestShrink) {
            @$body['Request'] = $request->requestShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCalendars',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/listCalendars',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCalendarsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCalendarsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询日历.
     *
     * @param request - ListCalendarsRequest
     *
     * @returns ListCalendarsResponse
     *
     * @param ListCalendarsRequest $request
     *
     * @return ListCalendarsResponse
     */
    public function listCalendars($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListCalendarsHeaders([]);

        return $this->listCalendarsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取文件或文件夹列表.
     *
     * @param tmpReq - ListDentriesRequest
     * @param tmpHeader - ListDentriesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDentriesResponse
     *
     * @param ListDentriesRequest $tmpReq
     * @param ListDentriesHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return ListDentriesResponse
     */
    public function listDentriesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDentriesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ListDentriesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->order) {
            @$body['Order'] = $request->order;
        }

        if (null !== $request->orderBy) {
            @$body['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->parentId) {
            @$body['ParentId'] = $request->parentId;
        }

        if (null !== $request->spaceId) {
            @$body['SpaceId'] = $request->spaceId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->withThumbnail) {
            @$body['WithThumbnail'] = $request->withThumbnail;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDentries',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/listDentries',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDentriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDentriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取文件或文件夹列表.
     *
     * @param request - ListDentriesRequest
     *
     * @returns ListDentriesResponse
     *
     * @param ListDentriesRequest $request
     *
     * @return ListDentriesResponse
     */
    public function listDentries($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDentriesHeaders([]);

        return $this->listDentriesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取钉盘空间列表.
     *
     * @param tmpReq - ListDriveSpacesRequest
     * @param tmpHeader - ListDriveSpacesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDriveSpacesResponse
     *
     * @param ListDriveSpacesRequest $tmpReq
     * @param ListDriveSpacesHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return ListDriveSpacesResponse
     */
    public function listDriveSpacesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ListDriveSpacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ListDriveSpacesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->spaceType) {
            @$body['SpaceType'] = $request->spaceType;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDriveSpaces',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/listDriveSpaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDriveSpacesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDriveSpacesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取钉盘空间列表.
     *
     * @param request - ListDriveSpacesRequest
     *
     * @returns ListDriveSpacesResponse
     *
     * @param ListDriveSpacesRequest $request
     *
     * @return ListDriveSpacesResponse
     */
    public function listDriveSpaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListDriveSpacesHeaders([]);

        return $this->listDriveSpacesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询日程列表.
     *
     * @param request - ListEventsRequest
     * @param tmpHeader - ListEventsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEventsResponse
     *
     * @param ListEventsRequest $request
     * @param ListEventsHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return ListEventsResponse
     */
    public function listEventsWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new ListEventsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        if (null !== $request->maxAttendees) {
            @$body['MaxAttendees'] = $request->maxAttendees;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->seriesMasterId) {
            @$body['SeriesMasterId'] = $request->seriesMasterId;
        }

        if (null !== $request->showDeleted) {
            @$body['ShowDeleted'] = $request->showDeleted;
        }

        if (null !== $request->syncToken) {
            @$body['SyncToken'] = $request->syncToken;
        }

        if (null !== $request->timeMax) {
            @$body['TimeMax'] = $request->timeMax;
        }

        if (null !== $request->timeMin) {
            @$body['TimeMin'] = $request->timeMin;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListEvents',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/listEvents',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEventsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEventsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询日程列表.
     *
     * @param request - ListEventsRequest
     *
     * @returns ListEventsResponse
     *
     * @param ListEventsRequest $request
     *
     * @return ListEventsResponse
     */
    public function listEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListEventsHeaders([]);

        return $this->listEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询日程视图.
     *
     * @param request - ListEventsViewRequest
     * @param tmpHeader - ListEventsViewHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEventsViewResponse
     *
     * @param ListEventsViewRequest $request
     * @param ListEventsViewHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return ListEventsViewResponse
     */
    public function listEventsViewWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new ListEventsViewShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        if (null !== $request->maxAttendees) {
            @$body['MaxAttendees'] = $request->maxAttendees;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->timeMax) {
            @$body['TimeMax'] = $request->timeMax;
        }

        if (null !== $request->timeMin) {
            @$body['TimeMin'] = $request->timeMin;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListEventsView',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/listEventsView',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEventsViewResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEventsViewResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询日程视图.
     *
     * @param request - ListEventsViewRequest
     *
     * @returns ListEventsViewResponse
     *
     * @param ListEventsViewRequest $request
     *
     * @return ListEventsViewResponse
     */
    public function listEventsView($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListEventsViewHeaders([]);

        return $this->listEventsViewWithOptions($request, $headers, $runtime);
    }

    /**
     * 批量查询宜搭表单实例的评论.
     *
     * @param tmpReq - ListFormRemarksRequest
     * @param tmpHeader - ListFormRemarksHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFormRemarksResponse
     *
     * @param ListFormRemarksRequest $tmpReq
     * @param ListFormRemarksHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return ListFormRemarksResponse
     */
    public function listFormRemarksWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ListFormRemarksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ListFormRemarksShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->formInstanceIdList) {
            $request->formInstanceIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->formInstanceIdList, 'FormInstanceIdList', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->formInstanceIdListShrink) {
            @$body['FormInstanceIdList'] = $request->formInstanceIdListShrink;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListFormRemarks',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/listFormRemarks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListFormRemarksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFormRemarksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量查询宜搭表单实例的评论.
     *
     * @param request - ListFormRemarksRequest
     *
     * @returns ListFormRemarksResponse
     *
     * @param ListFormRemarksRequest $request
     *
     * @return ListFormRemarksResponse
     */
    public function listFormRemarks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListFormRemarksHeaders([]);

        return $this->listFormRemarksWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询消息.
     *
     * @param request - ListMessageRequest
     * @param headers - ListMessageHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMessageResponse
     *
     * @param ListMessageRequest $request
     * @param ListMessageHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListMessageResponse
     */
    public function listMessageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assistantId) {
            @$body['assistantId'] = $request->assistantId;
        }

        if (null !== $request->limit) {
            @$body['limit'] = $request->limit;
        }

        if (null !== $request->order) {
            @$body['order'] = $request->order;
        }

        if (null !== $request->originalAssistantid) {
            @$body['originalAssistantid'] = $request->originalAssistantid;
        }

        if (null !== $request->runId) {
            @$body['runId'] = $request->runId;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountId) {
            @$realHeaders['accountId'] = '' . $headers->accountId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMessage',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/ai/v1/assistant/listMessage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListMessageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询消息.
     *
     * @param request - ListMessageRequest
     *
     * @returns ListMessageResponse
     *
     * @param ListMessageRequest $request
     *
     * @return ListMessageResponse
     */
    public function listMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListMessageHeaders([]);

        return $this->listMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * 列出多行记录.
     *
     * @param tmpReq - ListMultiDimTableRecordsRequest
     * @param tmpHeader - ListMultiDimTableRecordsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMultiDimTableRecordsResponse
     *
     * @param ListMultiDimTableRecordsRequest $tmpReq
     * @param ListMultiDimTableRecordsHeaders $tmpHeader
     * @param RuntimeOptions                  $runtime
     *
     * @return ListMultiDimTableRecordsResponse
     */
    public function listMultiDimTableRecordsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ListMultiDimTableRecordsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ListMultiDimTableRecordsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->filter) {
            $request->filterShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->baseId) {
            @$body['BaseId'] = $request->baseId;
        }

        if (null !== $request->filterShrink) {
            @$body['Filter'] = $request->filterShrink;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->sheetIdOrName) {
            @$body['SheetIdOrName'] = $request->sheetIdOrName;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMultiDimTableRecords',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/table/listMultiDimTableRecords',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListMultiDimTableRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMultiDimTableRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列出多行记录.
     *
     * @param request - ListMultiDimTableRecordsRequest
     *
     * @returns ListMultiDimTableRecordsResponse
     *
     * @param ListMultiDimTableRecordsRequest $request
     *
     * @return ListMultiDimTableRecordsResponse
     */
    public function listMultiDimTableRecords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListMultiDimTableRecordsHeaders([]);

        return $this->listMultiDimTableRecordsWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取应用下的页面列表.
     *
     * @param request - ListNavigationByFormTypeRequest
     * @param tmpHeader - ListNavigationByFormTypeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNavigationByFormTypeResponse
     *
     * @param ListNavigationByFormTypeRequest $request
     * @param ListNavigationByFormTypeHeaders $tmpHeader
     * @param RuntimeOptions                  $runtime
     *
     * @return ListNavigationByFormTypeResponse
     */
    public function listNavigationByFormTypeWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new ListNavigationByFormTypeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->formType) {
            @$body['FormType'] = $request->formType;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNavigationByFormType',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/listNavigationByFormType',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNavigationByFormTypeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNavigationByFormTypeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取应用下的页面列表.
     *
     * @param request - ListNavigationByFormTypeRequest
     *
     * @returns ListNavigationByFormTypeResponse
     *
     * @param ListNavigationByFormTypeRequest $request
     *
     * @return ListNavigationByFormTypeResponse
     */
    public function listNavigationByFormType($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListNavigationByFormTypeHeaders([]);

        return $this->listNavigationByFormTypeWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取节点列表.
     *
     * @param tmpReq - ListNodesRequest
     * @param tmpHeader - ListNodesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $tmpReq
     * @param ListNodesHeaders $tmpHeader
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ListNodesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ListNodesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->parentNodeId) {
            @$body['ParentNodeId'] = $request->parentNodeId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->withPermissionRole) {
            @$body['WithPermissionRole'] = $request->withPermissionRole;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListNodes',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/listNodes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListNodesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取节点列表.
     *
     * @param request - ListNodesRequest
     *
     * @returns ListNodesResponse
     *
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListNodesHeaders([]);

        return $this->listNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取用户发出的日志列表.
     *
     * @param tmpReq - ListReportRequest
     * @param tmpHeader - ListReportHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListReportResponse
     *
     * @param ListReportRequest $tmpReq
     * @param ListReportHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return ListReportResponse
     */
    public function listReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ListReportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ListReportShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->cursor) {
            @$body['Cursor'] = $request->cursor;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->modifiedEndTime) {
            @$body['ModifiedEndTime'] = $request->modifiedEndTime;
        }

        if (null !== $request->modifiedStartTime) {
            @$body['ModifiedStartTime'] = $request->modifiedStartTime;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListReport',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/log/listReport',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListReportResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListReportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取用户发出的日志列表.
     *
     * @param request - ListReportRequest
     *
     * @returns ListReportResponse
     *
     * @param ListReportRequest $request
     *
     * @return ListReportResponse
     */
    public function listReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListReportHeaders([]);

        return $this->listReportWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取子表组件数据.
     *
     * @param request - ListTableDataByFormInstanceIdTableIdRequest
     * @param tmpHeader - ListTableDataByFormInstanceIdTableIdHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTableDataByFormInstanceIdTableIdResponse
     *
     * @param ListTableDataByFormInstanceIdTableIdRequest $request
     * @param ListTableDataByFormInstanceIdTableIdHeaders $tmpHeader
     * @param RuntimeOptions                              $runtime
     *
     * @return ListTableDataByFormInstanceIdTableIdResponse
     */
    public function listTableDataByFormInstanceIdTableIdWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new ListTableDataByFormInstanceIdTableIdShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->formInstanceId) {
            @$body['FormInstanceId'] = $request->formInstanceId;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->tableFieldId) {
            @$body['TableFieldId'] = $request->tableFieldId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTableDataByFormInstanceIdTableId',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/listTableDataByFormInstanceIdTableId',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTableDataByFormInstanceIdTableIdResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTableDataByFormInstanceIdTableIdResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取子表组件数据.
     *
     * @param request - ListTableDataByFormInstanceIdTableIdRequest
     *
     * @returns ListTableDataByFormInstanceIdTableIdResponse
     *
     * @param ListTableDataByFormInstanceIdTableIdRequest $request
     *
     * @return ListTableDataByFormInstanceIdTableIdResponse
     */
    public function listTableDataByFormInstanceIdTableId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListTableDataByFormInstanceIdTableIdHeaders([]);

        return $this->listTableDataByFormInstanceIdTableIdWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取知识小组列表.
     *
     * @param tmpReq - ListTeamsRequest
     * @param tmpHeader - ListTeamsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTeamsResponse
     *
     * @param ListTeamsRequest $tmpReq
     * @param ListTeamsHeaders $tmpHeader
     * @param RuntimeOptions   $runtime
     *
     * @return ListTeamsResponse
     */
    public function listTeamsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTeamsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ListTeamsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTeams',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/listTeams',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTeamsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTeamsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取知识小组列表.
     *
     * @param request - ListTeamsRequest
     *
     * @returns ListTeamsResponse
     *
     * @param ListTeamsRequest $request
     *
     * @return ListTeamsResponse
     */
    public function listTeams($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListTeamsHeaders([]);

        return $this->listTeamsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询文档模板
     *
     * @param tmpReq - ListTemplateRequest
     * @param tmpHeader - ListTemplateHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTemplateResponse
     *
     * @param ListTemplateRequest $tmpReq
     * @param ListTemplateHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return ListTemplateResponse
     */
    public function listTemplateWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ListTemplateShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->templateType) {
            @$body['TemplateType'] = $request->templateType;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTemplate',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/listTemplate',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询文档模板
     *
     * @param request - ListTemplateRequest
     *
     * @returns ListTemplateResponse
     *
     * @param ListTemplateRequest $request
     *
     * @return ListTemplateResponse
     */
    public function listTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListTemplateHeaders([]);

        return $this->listTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询工单操作记录.
     *
     * @param tmpReq - ListTicketOperateRecordRequest
     * @param tmpHeader - ListTicketOperateRecordHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTicketOperateRecordResponse
     *
     * @param ListTicketOperateRecordRequest $tmpReq
     * @param ListTicketOperateRecordHeaders $tmpHeader
     * @param RuntimeOptions                 $runtime
     *
     * @return ListTicketOperateRecordResponse
     */
    public function listTicketOperateRecordWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTicketOperateRecordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ListTicketOperateRecordShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->openTeamId) {
            @$body['OpenTeamId'] = $request->openTeamId;
        }

        if (null !== $request->openTicketId) {
            @$body['OpenTicketId'] = $request->openTicketId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListTicketOperateRecord',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ticket/listTicketOperateRecord',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTicketOperateRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTicketOperateRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询工单操作记录.
     *
     * @param request - ListTicketOperateRecordRequest
     *
     * @returns ListTicketOperateRecordResponse
     *
     * @param ListTicketOperateRecordRequest $request
     *
     * @return ListTicketOperateRecordResponse
     */
    public function listTicketOperateRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListTicketOperateRecordHeaders([]);

        return $this->listTicketOperateRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取知识库列表.
     *
     * @param tmpReq - ListWorkspacesRequest
     * @param tmpHeader - ListWorkspacesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $tmpReq
     * @param ListWorkspacesHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ListWorkspacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ListWorkspacesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderBy) {
            @$body['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->teamId) {
            @$body['TeamId'] = $request->teamId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->withPermissionRole) {
            @$body['WithPermissionRole'] = $request->withPermissionRole;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListWorkspaces',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/listWorkspaces',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListWorkspacesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取知识库列表.
     *
     * @param request - ListWorkspacesRequest
     *
     * @returns ListWorkspacesResponse
     *
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListWorkspacesHeaders([]);

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改日程.
     *
     * @param tmpReq - PatchEventRequest
     * @param tmpHeader - PatchEventHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PatchEventResponse
     *
     * @param PatchEventRequest $tmpReq
     * @param PatchEventHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return PatchEventResponse
     */
    public function patchEventWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new PatchEventShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new PatchEventShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->attendees) {
            $request->attendeesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attendees, 'Attendees', 'json');
        }

        if (null !== $tmpReq->cardInstances) {
            $request->cardInstancesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->cardInstances, 'CardInstances', 'json');
        }

        if (null !== $tmpReq->end) {
            $request->endShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->end, 'End', 'json');
        }

        if (null !== $tmpReq->extra) {
            $request->extraShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }

        if (null !== $tmpReq->location) {
            $request->locationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->location, 'Location', 'json');
        }

        if (null !== $tmpReq->recurrence) {
            $request->recurrenceShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recurrence, 'Recurrence', 'json');
        }

        if (null !== $tmpReq->reminders) {
            $request->remindersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->reminders, 'Reminders', 'json');
        }

        if (null !== $tmpReq->start) {
            $request->startShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->start, 'Start', 'json');
        }

        $body = [];
        if (null !== $request->attendeesShrink) {
            @$body['Attendees'] = $request->attendeesShrink;
        }

        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        if (null !== $request->cardInstancesShrink) {
            @$body['CardInstances'] = $request->cardInstancesShrink;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->endShrink) {
            @$body['End'] = $request->endShrink;
        }

        if (null !== $request->eventId) {
            @$body['EventId'] = $request->eventId;
        }

        if (null !== $request->extraShrink) {
            @$body['Extra'] = $request->extraShrink;
        }

        if (null !== $request->isAllDay) {
            @$body['IsAllDay'] = $request->isAllDay;
        }

        if (null !== $request->locationShrink) {
            @$body['Location'] = $request->locationShrink;
        }

        if (null !== $request->recurrenceShrink) {
            @$body['Recurrence'] = $request->recurrenceShrink;
        }

        if (null !== $request->remindersShrink) {
            @$body['Reminders'] = $request->remindersShrink;
        }

        if (null !== $request->startShrink) {
            @$body['Start'] = $request->startShrink;
        }

        if (null !== $request->summary) {
            @$body['Summary'] = $request->summary;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PatchEvent',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/patchEvent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return PatchEventResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return PatchEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改日程.
     *
     * @param request - PatchEventRequest
     *
     * @returns PatchEventResponse
     *
     * @param PatchEventRequest $request
     *
     * @return PatchEventResponse
     */
    public function patchEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PatchEventHeaders([]);

        return $this->patchEventWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询会议录制中的文本信息.
     *
     * @param tmpReq - QueryCloudRecordTextRequest
     * @param tmpHeader - QueryCloudRecordTextHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCloudRecordTextResponse
     *
     * @param QueryCloudRecordTextRequest $tmpReq
     * @param QueryCloudRecordTextHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return QueryCloudRecordTextResponse
     */
    public function queryCloudRecordTextWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryCloudRecordTextShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryCloudRecordTextShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->direction) {
            @$body['Direction'] = $request->direction;
        }

        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCloudRecordText',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryCloudRecordText',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryCloudRecordTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCloudRecordTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询会议录制中的文本信息.
     *
     * @param request - QueryCloudRecordTextRequest
     *
     * @returns QueryCloudRecordTextResponse
     *
     * @param QueryCloudRecordTextRequest $request
     *
     * @return QueryCloudRecordTextResponse
     */
    public function queryCloudRecordText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCloudRecordTextHeaders([]);

        return $this->queryCloudRecordTextWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询会议录制的详情信息.
     *
     * @param tmpReq - QueryCloudRecordVideoRequest
     * @param tmpHeader - QueryCloudRecordVideoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCloudRecordVideoResponse
     *
     * @param QueryCloudRecordVideoRequest $tmpReq
     * @param QueryCloudRecordVideoHeaders $tmpHeader
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCloudRecordVideoResponse
     */
    public function queryCloudRecordVideoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryCloudRecordVideoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryCloudRecordVideoShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCloudRecordVideo',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryCloudRecordVideo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryCloudRecordVideoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCloudRecordVideoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询会议录制的详情信息.
     *
     * @param request - QueryCloudRecordVideoRequest
     *
     * @returns QueryCloudRecordVideoResponse
     *
     * @param QueryCloudRecordVideoRequest $request
     *
     * @return QueryCloudRecordVideoResponse
     */
    public function queryCloudRecordVideo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCloudRecordVideoHeaders([]);

        return $this->queryCloudRecordVideoWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询会议录制中的视频信息.
     *
     * @param tmpReq - QueryCloudRecordVideoPlayInfoRequest
     * @param tmpHeader - QueryCloudRecordVideoPlayInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCloudRecordVideoPlayInfoResponse
     *
     * @param QueryCloudRecordVideoPlayInfoRequest $tmpReq
     * @param QueryCloudRecordVideoPlayInfoHeaders $tmpHeader
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryCloudRecordVideoPlayInfoResponse
     */
    public function queryCloudRecordVideoPlayInfoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryCloudRecordVideoPlayInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryCloudRecordVideoPlayInfoShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->conferenceId) {
            @$body['ConferenceId'] = $request->conferenceId;
        }

        if (null !== $request->mediaId) {
            @$body['MediaId'] = $request->mediaId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryCloudRecordVideoPlayInfo',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryCloudRecordVideoPlayInfo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryCloudRecordVideoPlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCloudRecordVideoPlayInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询会议录制中的视频信息.
     *
     * @param request - QueryCloudRecordVideoPlayInfoRequest
     *
     * @returns QueryCloudRecordVideoPlayInfoResponse
     *
     * @param QueryCloudRecordVideoPlayInfoRequest $request
     *
     * @return QueryCloudRecordVideoPlayInfoResponse
     */
    public function queryCloudRecordVideoPlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCloudRecordVideoPlayInfoHeaders([]);

        return $this->queryCloudRecordVideoPlayInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询视频会议信息.
     *
     * @param request - QueryConferenceInfoRequest
     * @param tmpHeader - QueryConferenceInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConferenceInfoResponse
     *
     * @param QueryConferenceInfoRequest $request
     * @param QueryConferenceInfoHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return QueryConferenceInfoResponse
     */
    public function queryConferenceInfoWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new QueryConferenceInfoShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryConferenceInfo',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryConferenceInfo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryConferenceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryConferenceInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询视频会议信息.
     *
     * @param request - QueryConferenceInfoRequest
     *
     * @returns QueryConferenceInfoResponse
     *
     * @param QueryConferenceInfoRequest $request
     *
     * @return QueryConferenceInfoResponse
     */
    public function queryConferenceInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryConferenceInfoHeaders([]);

        return $this->queryConferenceInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 根据会议码查询视频会议信息.
     *
     * @param tmpReq - QueryConferenceInfoByRoomCodeRequest
     * @param tmpHeader - QueryConferenceInfoByRoomCodeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConferenceInfoByRoomCodeResponse
     *
     * @param QueryConferenceInfoByRoomCodeRequest $tmpReq
     * @param QueryConferenceInfoByRoomCodeHeaders $tmpHeader
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryConferenceInfoByRoomCodeResponse
     */
    public function queryConferenceInfoByRoomCodeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryConferenceInfoByRoomCodeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryConferenceInfoByRoomCodeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->roomCode) {
            @$body['roomCode'] = $request->roomCode;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryConferenceInfoByRoomCode',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryConferenceInfoByRoomCode',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryConferenceInfoByRoomCodeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryConferenceInfoByRoomCodeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据会议码查询视频会议信息.
     *
     * @param request - QueryConferenceInfoByRoomCodeRequest
     *
     * @returns QueryConferenceInfoByRoomCodeResponse
     *
     * @param QueryConferenceInfoByRoomCodeRequest $request
     *
     * @return QueryConferenceInfoByRoomCodeResponse
     */
    public function queryConferenceInfoByRoomCode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryConferenceInfoByRoomCodeHeaders([]);

        return $this->queryConferenceInfoByRoomCodeWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询视频会议成员.
     *
     * @param tmpReq - QueryConferenceMembersRequest
     * @param tmpHeader - QueryConferenceMembersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryConferenceMembersResponse
     *
     * @param QueryConferenceMembersRequest $tmpReq
     * @param QueryConferenceMembersHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return QueryConferenceMembersResponse
     */
    public function queryConferenceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryConferenceMembersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryConferenceMembersShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryConferenceMembers',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryConferenceMembers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryConferenceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryConferenceMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询视频会议成员.
     *
     * @param request - QueryConferenceMembersRequest
     *
     * @returns QueryConferenceMembersResponse
     *
     * @param QueryConferenceMembersRequest $request
     *
     * @return QueryConferenceMembersResponse
     */
    public function queryConferenceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryConferenceMembersHeaders([]);

        return $this->queryConferenceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询知识库节点信息.
     *
     * @param tmpReq - QueryDentryRequest
     * @param tmpHeader - QueryDentryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDentryResponse
     *
     * @param QueryDentryRequest $tmpReq
     * @param QueryDentryHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return QueryDentryResponse
     */
    public function queryDentryWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryDentryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryDentryShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->dentryId) {
            @$body['DentryId'] = $request->dentryId;
        }

        if (null !== $request->includeSpace) {
            @$body['IncludeSpace'] = $request->includeSpace;
        }

        if (null !== $request->spaceId) {
            @$body['SpaceId'] = $request->spaceId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryDentry',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v2/documents/queryDentry',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryDentryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryDentryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询知识库节点信息.
     *
     * @param request - QueryDentryRequest
     *
     * @returns QueryDentryResponse
     *
     * @param QueryDentryRequest $request
     *
     * @return QueryDentryResponse
     */
    public function queryDentry($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryDentryHeaders([]);

        return $this->queryDentryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询群直播详情.
     *
     * @param tmpReq - QueryGroupLiveInfoRequest
     * @param tmpHeader - QueryGroupLiveInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryGroupLiveInfoResponse
     *
     * @param QueryGroupLiveInfoRequest $tmpReq
     * @param QueryGroupLiveInfoHeaders $tmpHeader
     * @param RuntimeOptions            $runtime
     *
     * @return QueryGroupLiveInfoResponse
     */
    public function queryGroupLiveInfoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryGroupLiveInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryGroupLiveInfoShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->anchorUnionId) {
            @$body['AnchorUnionId'] = $request->anchorUnionId;
        }

        if (null !== $request->liveUuid) {
            @$body['LiveUuid'] = $request->liveUuid;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryGroupLiveInfo',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryGroupLiveInfo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryGroupLiveInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryGroupLiveInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询群直播详情.
     *
     * @param request - QueryGroupLiveInfoRequest
     *
     * @returns QueryGroupLiveInfoResponse
     *
     * @param QueryGroupLiveInfoRequest $request
     *
     * @return QueryGroupLiveInfoResponse
     */
    public function queryGroupLiveInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryGroupLiveInfoHeaders([]);

        return $this->queryGroupLiveInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询直播信息.
     *
     * @param tmpReq - QueryLiveInfoRequest
     * @param tmpHeader - QueryLiveInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryLiveInfoResponse
     *
     * @param QueryLiveInfoRequest $tmpReq
     * @param QueryLiveInfoHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return QueryLiveInfoResponse
     */
    public function queryLiveInfoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryLiveInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryLiveInfoShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->liveId) {
            @$body['LiveId'] = $request->liveId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryLiveInfo',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryLiveInfo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryLiveInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryLiveInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询直播信息.
     *
     * @param request - QueryLiveInfoRequest
     *
     * @returns QueryLiveInfoResponse
     *
     * @param QueryLiveInfoRequest $request
     *
     * @return QueryLiveInfoResponse
     */
    public function queryLiveInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryLiveInfoHeaders([]);

        return $this->queryLiveInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询直播的观看数据.
     *
     * @param tmpReq - QueryLiveWatchDetailRequest
     * @param tmpHeader - QueryLiveWatchDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryLiveWatchDetailResponse
     *
     * @param QueryLiveWatchDetailRequest $tmpReq
     * @param QueryLiveWatchDetailHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return QueryLiveWatchDetailResponse
     */
    public function queryLiveWatchDetailWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryLiveWatchDetailShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryLiveWatchDetailShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->liveId) {
            @$body['LiveId'] = $request->liveId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryLiveWatchDetail',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryLiveWatchDetail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryLiveWatchDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryLiveWatchDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询直播的观看数据.
     *
     * @param request - QueryLiveWatchDetailRequest
     *
     * @returns QueryLiveWatchDetailResponse
     *
     * @param QueryLiveWatchDetailRequest $request
     *
     * @return QueryLiveWatchDetailResponse
     */
    public function queryLiveWatchDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryLiveWatchDetailHeaders([]);

        return $this->queryLiveWatchDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询直播观看人员信息.
     *
     * @param tmpReq - QueryLiveWatchUserListRequest
     * @param tmpHeader - QueryLiveWatchUserListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryLiveWatchUserListResponse
     *
     * @param QueryLiveWatchUserListRequest $tmpReq
     * @param QueryLiveWatchUserListHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return QueryLiveWatchUserListResponse
     */
    public function queryLiveWatchUserListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryLiveWatchUserListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryLiveWatchUserListShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->liveId) {
            @$body['LiveId'] = $request->liveId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryLiveWatchUserList',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryLiveWatchUserList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryLiveWatchUserListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryLiveWatchUserListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询直播观看人员信息.
     *
     * @param request - QueryLiveWatchUserListRequest
     *
     * @returns QueryLiveWatchUserListResponse
     *
     * @param QueryLiveWatchUserListRequest $request
     *
     * @return QueryLiveWatchUserListResponse
     */
    public function queryLiveWatchUserList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryLiveWatchUserListHeaders([]);

        return $this->queryLiveWatchUserListWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询会议室详情.
     *
     * @param tmpReq - QueryMeetingRoomRequest
     * @param tmpHeader - QueryMeetingRoomHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMeetingRoomResponse
     *
     * @param QueryMeetingRoomRequest $tmpReq
     * @param QueryMeetingRoomHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return QueryMeetingRoomResponse
     */
    public function queryMeetingRoomWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryMeetingRoomShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryMeetingRoomShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->roomId) {
            @$body['RoomId'] = $request->roomId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMeetingRoom',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryMeetingRoom',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMeetingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMeetingRoomResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询会议室详情.
     *
     * @param request - QueryMeetingRoomRequest
     *
     * @returns QueryMeetingRoomResponse
     *
     * @param QueryMeetingRoomRequest $request
     *
     * @return QueryMeetingRoomResponse
     */
    public function queryMeetingRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMeetingRoomHeaders([]);

        return $this->queryMeetingRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询会议室分组信息.
     *
     * @param tmpReq - QueryMeetingRoomGroupRequest
     * @param tmpHeader - QueryMeetingRoomGroupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMeetingRoomGroupResponse
     *
     * @param QueryMeetingRoomGroupRequest $tmpReq
     * @param QueryMeetingRoomGroupHeaders $tmpHeader
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMeetingRoomGroupResponse
     */
    public function queryMeetingRoomGroupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryMeetingRoomGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryMeetingRoomGroupShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMeetingRoomGroup',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryMeetingRoomGroup',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMeetingRoomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMeetingRoomGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询会议室分组信息.
     *
     * @param request - QueryMeetingRoomGroupRequest
     *
     * @returns QueryMeetingRoomGroupResponse
     *
     * @param QueryMeetingRoomGroupRequest $request
     *
     * @return QueryMeetingRoomGroupResponse
     */
    public function queryMeetingRoomGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMeetingRoomGroupHeaders([]);

        return $this->queryMeetingRoomGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询会议室分组列表.
     *
     * @param tmpReq - QueryMeetingRoomGroupListRequest
     * @param tmpHeader - QueryMeetingRoomGroupListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMeetingRoomGroupListResponse
     *
     * @param QueryMeetingRoomGroupListRequest $tmpReq
     * @param QueryMeetingRoomGroupListHeaders $tmpHeader
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryMeetingRoomGroupListResponse
     */
    public function queryMeetingRoomGroupListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryMeetingRoomGroupListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryMeetingRoomGroupListShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->request) {
            $request->requestShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->requestShrink) {
            @$body['Request'] = $request->requestShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMeetingRoomGroupList',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryMeetingRoomGroupList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMeetingRoomGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMeetingRoomGroupListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询会议室分组列表.
     *
     * @param request - QueryMeetingRoomGroupListRequest
     *
     * @returns QueryMeetingRoomGroupListResponse
     *
     * @param QueryMeetingRoomGroupListRequest $request
     *
     * @return QueryMeetingRoomGroupListResponse
     */
    public function queryMeetingRoomGroupList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMeetingRoomGroupListHeaders([]);

        return $this->queryMeetingRoomGroupListWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询会议室列表.
     *
     * @param tmpReq - QueryMeetingRoomListRequest
     * @param tmpHeader - QueryMeetingRoomListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMeetingRoomListResponse
     *
     * @param QueryMeetingRoomListRequest $tmpReq
     * @param QueryMeetingRoomListHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return QueryMeetingRoomListResponse
     */
    public function queryMeetingRoomListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryMeetingRoomListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryMeetingRoomListShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMeetingRoomList',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryMeetingRoomList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMeetingRoomListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMeetingRoomListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询会议室列表.
     *
     * @param request - QueryMeetingRoomListRequest
     *
     * @returns QueryMeetingRoomListResponse
     *
     * @param QueryMeetingRoomListRequest $request
     *
     * @return QueryMeetingRoomListResponse
     */
    public function queryMeetingRoomList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMeetingRoomListHeaders([]);

        return $this->queryMeetingRoomListWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询闪记录音.
     *
     * @param tmpReq - QueryMinutesRequest
     * @param tmpHeader - QueryMinutesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMinutesResponse
     *
     * @param QueryMinutesRequest $tmpReq
     * @param QueryMinutesHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return QueryMinutesResponse
     */
    public function queryMinutesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryMinutesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryMinutesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMinutes',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryMinutes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMinutesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMinutesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询闪记录音.
     *
     * @param request - QueryMinutesRequest
     *
     * @returns QueryMinutesResponse
     *
     * @param QueryMinutesRequest $request
     *
     * @return QueryMinutesResponse
     */
    public function queryMinutes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMinutesHeaders([]);

        return $this->queryMinutesWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询会议闪记智能纪要
     *
     * @param tmpReq - QueryMinutesSummaryRequest
     * @param tmpHeader - QueryMinutesSummaryHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMinutesSummaryResponse
     *
     * @param QueryMinutesSummaryRequest $tmpReq
     * @param QueryMinutesSummaryHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return QueryMinutesSummaryResponse
     */
    public function queryMinutesSummaryWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryMinutesSummaryShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryMinutesSummaryShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->summaryTypeList) {
            $request->summaryTypeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->summaryTypeList, 'summaryTypeList', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        if (null !== $request->summaryTypeListShrink) {
            @$body['summaryTypeList'] = $request->summaryTypeListShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMinutesSummary',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryMinutesSummary',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMinutesSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMinutesSummaryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询会议闪记智能纪要
     *
     * @param request - QueryMinutesSummaryRequest
     *
     * @returns QueryMinutesSummaryResponse
     *
     * @param QueryMinutesSummaryRequest $request
     *
     * @return QueryMinutesSummaryResponse
     */
    public function queryMinutesSummary($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMinutesSummaryHeaders([]);

        return $this->queryMinutesSummaryWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询会议闪记的文本信息.
     *
     * @param tmpReq - QueryMinutesTextRequest
     * @param tmpHeader - QueryMinutesTextHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMinutesTextResponse
     *
     * @param QueryMinutesTextRequest $tmpReq
     * @param QueryMinutesTextHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return QueryMinutesTextResponse
     */
    public function queryMinutesTextWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryMinutesTextShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryMinutesTextShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        if (null !== $request->direction) {
            @$body['direction'] = $request->direction;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryMinutesText',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryMinutesText',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMinutesTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMinutesTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询会议闪记的文本信息.
     *
     * @param request - QueryMinutesTextRequest
     *
     * @returns QueryMinutesTextResponse
     *
     * @param QueryMinutesTextRequest $request
     *
     * @return QueryMinutesTextResponse
     */
    public function queryMinutesText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMinutesTextHeaders([]);

        return $this->queryMinutesTextWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询企业荣誉.
     *
     * @param tmpReq - QueryOrgHonorsRequest
     * @param tmpHeader - QueryOrgHonorsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOrgHonorsResponse
     *
     * @param QueryOrgHonorsRequest $tmpReq
     * @param QueryOrgHonorsHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return QueryOrgHonorsResponse
     */
    public function queryOrgHonorsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryOrgHonorsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryOrgHonorsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orgId) {
            @$body['orgId'] = $request->orgId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryOrgHonors',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/aliding/v1/honor/queryOrgHonors',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryOrgHonorsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryOrgHonorsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询企业荣誉.
     *
     * @param request - QueryOrgHonorsRequest
     *
     * @returns QueryOrgHonorsResponse
     *
     * @param QueryOrgHonorsRequest $request
     *
     * @return QueryOrgHonorsResponse
     */
    public function queryOrgHonors($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryOrgHonorsHeaders([]);

        return $this->queryOrgHonorsWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询企业代办.
     *
     * @param tmpReq - QueryOrgTodoTasksRequest
     * @param tmpHeader - QueryOrgTodoTasksHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryOrgTodoTasksResponse
     *
     * @param QueryOrgTodoTasksRequest $tmpReq
     * @param QueryOrgTodoTasksHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return QueryOrgTodoTasksResponse
     */
    public function queryOrgTodoTasksWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryOrgTodoTasksShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryOrgTodoTasksShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->isDone) {
            @$body['isDone'] = $request->isDone;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryOrgTodoTasks',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/task/queryOrgTodoTasks',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryOrgTodoTasksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryOrgTodoTasksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询企业代办.
     *
     * @param request - QueryOrgTodoTasksRequest
     *
     * @returns QueryOrgTodoTasksResponse
     *
     * @param QueryOrgTodoTasksRequest $request
     *
     * @return QueryOrgTodoTasksResponse
     */
    public function queryOrgTodoTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryOrgTodoTasksHeaders([]);

        return $this->queryOrgTodoTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询闪记的链接，可通过链接查看闪记内容.
     *
     * @param tmpReq - QueryRecordMinutesUrlRequest
     * @param tmpHeader - QueryRecordMinutesUrlHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryRecordMinutesUrlResponse
     *
     * @param QueryRecordMinutesUrlRequest $tmpReq
     * @param QueryRecordMinutesUrlHeaders $tmpHeader
     * @param RuntimeOptions               $runtime
     *
     * @return QueryRecordMinutesUrlResponse
     */
    public function queryRecordMinutesUrlWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryRecordMinutesUrlShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryRecordMinutesUrlShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->conferenceId) {
            @$body['ConferenceId'] = $request->conferenceId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryRecordMinutesUrl',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryRecordMinutesUrl',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryRecordMinutesUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryRecordMinutesUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询闪记的链接，可通过链接查看闪记内容.
     *
     * @param request - QueryRecordMinutesUrlRequest
     *
     * @returns QueryRecordMinutesUrlResponse
     *
     * @param QueryRecordMinutesUrlRequest $request
     *
     * @return QueryRecordMinutesUrlResponse
     */
    public function queryRecordMinutesUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryRecordMinutesUrlHeaders([]);

        return $this->queryRecordMinutesUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取日志详情.
     *
     * @param tmpReq - QueryReportDetailRequest
     * @param tmpHeader - QueryReportDetailHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryReportDetailResponse
     *
     * @param QueryReportDetailRequest $tmpReq
     * @param QueryReportDetailHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return QueryReportDetailResponse
     */
    public function queryReportDetailWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryReportDetailShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryReportDetailShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->reportId) {
            @$body['ReportId'] = $request->reportId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryReportDetail',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/log/queryReportDetail',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryReportDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryReportDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取日志详情.
     *
     * @param request - QueryReportDetailRequest
     *
     * @returns QueryReportDetailResponse
     *
     * @param QueryReportDetailRequest $request
     *
     * @return QueryReportDetailResponse
     */
    public function queryReportDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryReportDetailHeaders([]);

        return $this->queryReportDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询预约会议.
     *
     * @param tmpReq - QueryScheduleConferenceRequest
     * @param tmpHeader - QueryScheduleConferenceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryScheduleConferenceResponse
     *
     * @param QueryScheduleConferenceRequest $tmpReq
     * @param QueryScheduleConferenceHeaders $tmpHeader
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryScheduleConferenceResponse
     */
    public function queryScheduleConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryScheduleConferenceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryScheduleConferenceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->scheduleConferenceId) {
            @$body['scheduleConferenceId'] = $request->scheduleConferenceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryScheduleConference',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryScheduleConference',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryScheduleConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryScheduleConferenceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询预约会议.
     *
     * @param request - QueryScheduleConferenceRequest
     *
     * @returns QueryScheduleConferenceResponse
     *
     * @param QueryScheduleConferenceRequest $request
     *
     * @return QueryScheduleConferenceResponse
     */
    public function queryScheduleConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryScheduleConferenceHeaders([]);

        return $this->queryScheduleConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询预约会议历史会议信息.
     *
     * @param tmpReq - QueryScheduleConferenceInfoRequest
     * @param tmpHeader - QueryScheduleConferenceInfoHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryScheduleConferenceInfoResponse
     *
     * @param QueryScheduleConferenceInfoRequest $tmpReq
     * @param QueryScheduleConferenceInfoHeaders $tmpHeader
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryScheduleConferenceInfoResponse
     */
    public function queryScheduleConferenceInfoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryScheduleConferenceInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryScheduleConferenceInfoShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->scheduleConferenceId) {
            @$body['ScheduleConferenceId'] = $request->scheduleConferenceId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryScheduleConferenceInfo',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/queryScheduleConferenceInfo',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryScheduleConferenceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryScheduleConferenceInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询预约会议历史会议信息.
     *
     * @param request - QueryScheduleConferenceInfoRequest
     *
     * @returns QueryScheduleConferenceInfoResponse
     *
     * @param QueryScheduleConferenceInfoRequest $request
     *
     * @return QueryScheduleConferenceInfoResponse
     */
    public function queryScheduleConferenceInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryScheduleConferenceInfoHeaders([]);

        return $this->queryScheduleConferenceInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询员工勋章列表.
     *
     * @param tmpReq - QueryUserHonorsRequest
     * @param tmpHeader - QueryUserHonorsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryUserHonorsResponse
     *
     * @param QueryUserHonorsRequest $tmpReq
     * @param QueryUserHonorsHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return QueryUserHonorsResponse
     */
    public function queryUserHonorsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new QueryUserHonorsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new QueryUserHonorsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->maxResults) {
            @$body['maxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['nextToken'] = $request->nextToken;
        }

        if (null !== $request->orgId) {
            @$body['orgId'] = $request->orgId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryUserHonors',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/aliding/v1/honor/queryUserHonors',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryUserHonorsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryUserHonorsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询员工勋章列表.
     *
     * @param request - QueryUserHonorsRequest
     *
     * @returns QueryUserHonorsResponse
     *
     * @param QueryUserHonorsRequest $request
     *
     * @return QueryUserHonorsResponse
     */
    public function queryUserHonors($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryUserHonorsHeaders([]);

        return $this->queryUserHonorsWithOptions($request, $headers, $runtime);
    }

    /**
     * 收回勋章.
     *
     * @param tmpReq - RecallHonorRequest
     * @param tmpHeader - RecallHonorHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecallHonorResponse
     *
     * @param RecallHonorRequest $tmpReq
     * @param RecallHonorHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return RecallHonorResponse
     */
    public function recallHonorWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new RecallHonorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new RecallHonorShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->honorId) {
            @$body['honorId'] = $request->honorId;
        }

        if (null !== $request->orgId) {
            @$body['orgId'] = $request->orgId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecallHonor',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/aliding/v1/honor/recallHonor',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RecallHonorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RecallHonorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 收回勋章.
     *
     * @param request - RecallHonorRequest
     *
     * @returns RecallHonorResponse
     *
     * @param RecallHonorRequest $request
     *
     * @return RecallHonorResponse
     */
    public function recallHonor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RecallHonorHeaders([]);

        return $this->recallHonorWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取日志接收人员列表.
     *
     * @param tmpReq - ReceiverListReportRequest
     * @param tmpHeader - ReceiverListReportHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReceiverListReportResponse
     *
     * @param ReceiverListReportRequest $tmpReq
     * @param ReceiverListReportHeaders $tmpHeader
     * @param RuntimeOptions            $runtime
     *
     * @return ReceiverListReportResponse
     */
    public function receiverListReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new ReceiverListReportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new ReceiverListReportShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->offset) {
            @$body['Offset'] = $request->offset;
        }

        if (null !== $request->reportId) {
            @$body['ReportId'] = $request->reportId;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReceiverListReport',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/log/receiverListReport',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ReceiverListReportResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReceiverListReportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取日志接收人员列表.
     *
     * @param request - ReceiverListReportRequest
     *
     * @returns ReceiverListReportResponse
     *
     * @param ReceiverListReportRequest $request
     *
     * @return ReceiverListReportResponse
     */
    public function receiverListReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ReceiverListReportHeaders([]);

        return $this->receiverListReportWithOptions($request, $headers, $runtime);
    }

    /**
     * 转交任务
     *
     * @param request - RedirectTaskRequest
     * @param tmpHeader - RedirectTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RedirectTaskResponse
     *
     * @param RedirectTaskRequest $request
     * @param RedirectTaskHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return RedirectTaskResponse
     */
    public function redirectTaskWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new RedirectTaskShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->byManager) {
            @$body['ByManager'] = $request->byManager;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->nowActionExecutorId) {
            @$body['NowActionExecutorId'] = $request->nowActionExecutorId;
        }

        if (null !== $request->processInstanceId) {
            @$body['ProcessInstanceId'] = $request->processInstanceId;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RedirectTask',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/redirectTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RedirectTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RedirectTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 转交任务
     *
     * @param request - RedirectTaskRequest
     *
     * @returns RedirectTaskResponse
     *
     * @param RedirectTaskRequest $request
     *
     * @return RedirectTaskResponse
     */
    public function redirectTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RedirectTaskHeaders([]);

        return $this->redirectTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 删除日程参与者.
     *
     * @param tmpReq - RemoveAttendeeRequest
     * @param tmpHeader - RemoveAttendeeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveAttendeeResponse
     *
     * @param RemoveAttendeeRequest $tmpReq
     * @param RemoveAttendeeHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return RemoveAttendeeResponse
     */
    public function removeAttendeeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveAttendeeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new RemoveAttendeeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->attendeesToRemove) {
            $request->attendeesToRemoveShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attendeesToRemove, 'AttendeesToRemove', 'json');
        }

        $body = [];
        if (null !== $request->attendeesToRemoveShrink) {
            @$body['AttendeesToRemove'] = $request->attendeesToRemoveShrink;
        }

        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        if (null !== $request->eventId) {
            @$body['EventId'] = $request->eventId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveAttendee',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/removeAttendee',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveAttendeeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveAttendeeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除日程参与者.
     *
     * @param request - RemoveAttendeeRequest
     *
     * @returns RemoveAttendeeResponse
     *
     * @param RemoveAttendeeRequest $request
     *
     * @return RemoveAttendeeResponse
     */
    public function removeAttendee($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveAttendeeHeaders([]);

        return $this->removeAttendeeWithOptions($request, $headers, $runtime);
    }

    /**
     * 取消预定会议室.
     *
     * @param tmpReq - RemoveMeetingRoomsRequest
     * @param tmpHeader - RemoveMeetingRoomsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveMeetingRoomsResponse
     *
     * @param RemoveMeetingRoomsRequest $tmpReq
     * @param RemoveMeetingRoomsHeaders $tmpHeader
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveMeetingRoomsResponse
     */
    public function removeMeetingRoomsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveMeetingRoomsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new RemoveMeetingRoomsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->meetingRoomsToRemove) {
            $request->meetingRoomsToRemoveShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->meetingRoomsToRemove, 'MeetingRoomsToRemove', 'json');
        }

        $body = [];
        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        if (null !== $request->eventId) {
            @$body['EventId'] = $request->eventId;
        }

        if (null !== $request->meetingRoomsToRemoveShrink) {
            @$body['MeetingRoomsToRemove'] = $request->meetingRoomsToRemoveShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveMeetingRooms',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/removeMeetingRooms',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveMeetingRoomsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveMeetingRoomsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 取消预定会议室.
     *
     * @param request - RemoveMeetingRoomsRequest
     *
     * @returns RemoveMeetingRoomsResponse
     *
     * @param RemoveMeetingRoomsRequest $request
     *
     * @return RemoveMeetingRoomsResponse
     */
    public function removeMeetingRooms($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveMeetingRoomsHeaders([]);

        return $this->removeMeetingRoomsWithOptions($request, $headers, $runtime);
    }

    /**
     * 设置日程响应邀请状态
     *
     * @param tmpReq - RespondEventRequest
     * @param tmpHeader - RespondEventHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RespondEventResponse
     *
     * @param RespondEventRequest $tmpReq
     * @param RespondEventHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return RespondEventResponse
     */
    public function respondEventWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new RespondEventShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new RespondEventShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        if (null !== $request->eventId) {
            @$body['EventId'] = $request->eventId;
        }

        if (null !== $request->responseStatus) {
            @$body['ResponseStatus'] = $request->responseStatus;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RespondEvent',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/respondEvent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RespondEventResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RespondEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 设置日程响应邀请状态
     *
     * @param request - RespondEventRequest
     *
     * @returns RespondEventResponse
     *
     * @param RespondEventRequest $request
     *
     * @return RespondEventResponse
     */
    public function respondEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RespondEventHeaders([]);

        return $this->respondEventWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询运行.
     *
     * @param request - RetrieveRunRequest
     * @param headers - RetrieveRunHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RetrieveRunResponse
     *
     * @param RetrieveRunRequest $request
     * @param RetrieveRunHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return RetrieveRunResponse
     */
    public function retrieveRunWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assistantId) {
            @$body['assistantId'] = $request->assistantId;
        }

        if (null !== $request->originalAssistantId) {
            @$body['originalAssistantId'] = $request->originalAssistantId;
        }

        if (null !== $request->runId) {
            @$body['runId'] = $request->runId;
        }

        if (null !== $request->threadId) {
            @$body['threadId'] = $request->threadId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountId) {
            @$realHeaders['accountId'] = '' . $headers->accountId;
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RetrieveRun',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/ai/v1/assistant/retrieveRun',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RetrieveRunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RetrieveRunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询运行.
     *
     * @param request - RetrieveRunRequest
     *
     * @returns RetrieveRunResponse
     *
     * @param RetrieveRunRequest $request
     *
     * @return RetrieveRunResponse
     */
    public function retrieveRun($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RetrieveRunHeaders([]);

        return $this->retrieveRunWithOptions($request, $headers, $runtime);
    }

    /**
     * 保存日志内容.
     *
     * @param tmpReq - SaveContentRequest
     * @param tmpHeader - SaveContentHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveContentResponse
     *
     * @param SaveContentRequest $tmpReq
     * @param SaveContentHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return SaveContentResponse
     */
    public function saveContentWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new SaveContentShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new SaveContentShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->contents) {
            $request->contentsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'Contents', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->contentsShrink) {
            @$body['Contents'] = $request->contentsShrink;
        }

        if (null !== $request->ddFrom) {
            @$body['DdFrom'] = $request->ddFrom;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveContent',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/log/saveContent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SaveContentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SaveContentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 保存日志内容.
     *
     * @param request - SaveContentRequest
     *
     * @returns SaveContentResponse
     *
     * @param SaveContentRequest $request
     *
     * @return SaveContentResponse
     */
    public function saveContent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SaveContentHeaders([]);

        return $this->saveContentWithOptions($request, $headers, $runtime);
    }

    /**
     * 保存表单数据.
     *
     * @param request - SaveFormDataRequest
     * @param tmpHeader - SaveFormDataHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveFormDataResponse
     *
     * @param SaveFormDataRequest $request
     * @param SaveFormDataHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return SaveFormDataResponse
     */
    public function saveFormDataWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new SaveFormDataShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->formDataJson) {
            @$body['FormDataJson'] = $request->formDataJson;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveFormData',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/saveFormData',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SaveFormDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SaveFormDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 保存表单数据.
     *
     * @param request - SaveFormDataRequest
     *
     * @returns SaveFormDataResponse
     *
     * @param SaveFormDataRequest $request
     *
     * @return SaveFormDataResponse
     */
    public function saveFormData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SaveFormDataHeaders([]);

        return $this->saveFormDataWithOptions($request, $headers, $runtime);
    }

    /**
     * 提交表单或流程实例下的评论.
     *
     * @param request - SaveFormRemarkRequest
     * @param tmpHeader - SaveFormRemarkHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveFormRemarkResponse
     *
     * @param SaveFormRemarkRequest $request
     * @param SaveFormRemarkHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return SaveFormRemarkResponse
     */
    public function saveFormRemarkWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new SaveFormRemarkShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->atUserId) {
            @$body['AtUserId'] = $request->atUserId;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->formInstanceId) {
            @$body['FormInstanceId'] = $request->formInstanceId;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->replyId) {
            @$body['ReplyId'] = $request->replyId;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SaveFormRemark',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/saveFormRemark',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SaveFormRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SaveFormRemarkResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交表单或流程实例下的评论.
     *
     * @param request - SaveFormRemarkRequest
     *
     * @returns SaveFormRemarkResponse
     *
     * @param SaveFormRemarkRequest $request
     *
     * @return SaveFormRemarkResponse
     */
    public function saveFormRemark($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SaveFormRemarkHeaders([]);

        return $this->saveFormRemarkWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取员工组件的值
     *
     * @param request - SearchEmployeeFieldValuesRequest
     * @param tmpHeader - SearchEmployeeFieldValuesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchEmployeeFieldValuesResponse
     *
     * @param SearchEmployeeFieldValuesRequest $request
     * @param SearchEmployeeFieldValuesHeaders $tmpHeader
     * @param RuntimeOptions                   $runtime
     *
     * @return SearchEmployeeFieldValuesResponse
     */
    public function searchEmployeeFieldValuesWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new SearchEmployeeFieldValuesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->createFromTimeGMT) {
            @$body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }

        if (null !== $request->createToTimeGMT) {
            @$body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->modifiedFromTimeGMT) {
            @$body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }

        if (null !== $request->modifiedToTimeGMT) {
            @$body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }

        if (null !== $request->originatorId) {
            @$body['OriginatorId'] = $request->originatorId;
        }

        if (null !== $request->searchFieldJson) {
            @$body['SearchFieldJson'] = $request->searchFieldJson;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->targetFieldJson) {
            @$body['TargetFieldJson'] = $request->targetFieldJson;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchEmployeeFieldValues',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/searchEmployeeFieldValues',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchEmployeeFieldValuesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchEmployeeFieldValuesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取员工组件的值
     *
     * @param request - SearchEmployeeFieldValuesRequest
     *
     * @returns SearchEmployeeFieldValuesResponse
     *
     * @param SearchEmployeeFieldValuesRequest $request
     *
     * @return SearchEmployeeFieldValuesResponse
     */
    public function searchEmployeeFieldValues($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchEmployeeFieldValuesHeaders([]);

        return $this->searchEmployeeFieldValuesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取多个表单实例ID.
     *
     * @param request - SearchFormDataIdListRequest
     * @param tmpHeader - SearchFormDataIdListHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchFormDataIdListResponse
     *
     * @param SearchFormDataIdListRequest $request
     * @param SearchFormDataIdListHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return SearchFormDataIdListResponse
     */
    public function searchFormDataIdListWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new SearchFormDataIdListShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->createFromTimeGMT) {
            @$body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }

        if (null !== $request->createToTimeGMT) {
            @$body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->modifiedFromTimeGMT) {
            @$body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }

        if (null !== $request->modifiedToTimeGMT) {
            @$body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }

        if (null !== $request->originatorId) {
            @$body['OriginatorId'] = $request->originatorId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchFieldJson) {
            @$body['SearchFieldJson'] = $request->searchFieldJson;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchFormDataIdList',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/searchFormDataIdList',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchFormDataIdListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchFormDataIdListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取多个表单实例ID.
     *
     * @param request - SearchFormDataIdListRequest
     *
     * @returns SearchFormDataIdListResponse
     *
     * @param SearchFormDataIdListRequest $request
     *
     * @return SearchFormDataIdListResponse
     */
    public function searchFormDataIdList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchFormDataIdListHeaders([]);

        return $this->searchFormDataIdListWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过高级查询条件获取表单实例数据（包括子表单组件数据）.
     *
     * @param request - SearchFormDataSecondGenerationRequest
     * @param tmpHeader - SearchFormDataSecondGenerationHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchFormDataSecondGenerationResponse
     *
     * @param SearchFormDataSecondGenerationRequest $request
     * @param SearchFormDataSecondGenerationHeaders $tmpHeader
     * @param RuntimeOptions                        $runtime
     *
     * @return SearchFormDataSecondGenerationResponse
     */
    public function searchFormDataSecondGenerationWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new SearchFormDataSecondGenerationShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->createFromTimeGMT) {
            @$body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }

        if (null !== $request->createToTimeGMT) {
            @$body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->modifiedFromTimeGMT) {
            @$body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }

        if (null !== $request->modifiedToTimeGMT) {
            @$body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }

        if (null !== $request->orderConfigJson) {
            @$body['OrderConfigJson'] = $request->orderConfigJson;
        }

        if (null !== $request->originatorId) {
            @$body['OriginatorId'] = $request->originatorId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchCondition) {
            @$body['SearchCondition'] = $request->searchCondition;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchFormDataSecondGeneration',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/searchFormDataSecondGeneration',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchFormDataSecondGenerationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchFormDataSecondGenerationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 通过高级查询条件获取表单实例数据（包括子表单组件数据）.
     *
     * @param request - SearchFormDataSecondGenerationRequest
     *
     * @returns SearchFormDataSecondGenerationResponse
     *
     * @param SearchFormDataSecondGenerationRequest $request
     *
     * @return SearchFormDataSecondGenerationResponse
     */
    public function searchFormDataSecondGeneration($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchFormDataSecondGenerationHeaders([]);

        return $this->searchFormDataSecondGenerationWithOptions($request, $headers, $runtime);
    }

    /**
     * 通过高级查询条件获取表单实例数据（不包括子表单组件数据）.
     *
     * @param request - SearchFormDataSecondGenerationNoTableFieldRequest
     * @param tmpHeader - SearchFormDataSecondGenerationNoTableFieldHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchFormDataSecondGenerationNoTableFieldResponse
     *
     * @param SearchFormDataSecondGenerationNoTableFieldRequest $request
     * @param SearchFormDataSecondGenerationNoTableFieldHeaders $tmpHeader
     * @param RuntimeOptions                                    $runtime
     *
     * @return SearchFormDataSecondGenerationNoTableFieldResponse
     */
    public function searchFormDataSecondGenerationNoTableFieldWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new SearchFormDataSecondGenerationNoTableFieldShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->createFromTimeGMT) {
            @$body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }

        if (null !== $request->createToTimeGMT) {
            @$body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->modifiedFromTimeGMT) {
            @$body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }

        if (null !== $request->modifiedToTimeGMT) {
            @$body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }

        if (null !== $request->orderConfigJson) {
            @$body['OrderConfigJson'] = $request->orderConfigJson;
        }

        if (null !== $request->originatorId) {
            @$body['OriginatorId'] = $request->originatorId;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchCondition) {
            @$body['SearchCondition'] = $request->searchCondition;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchFormDataSecondGenerationNoTableField',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/searchFormDataSecondGenerationNoTableField',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchFormDataSecondGenerationNoTableFieldResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchFormDataSecondGenerationNoTableFieldResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 通过高级查询条件获取表单实例数据（不包括子表单组件数据）.
     *
     * @param request - SearchFormDataSecondGenerationNoTableFieldRequest
     *
     * @returns SearchFormDataSecondGenerationNoTableFieldResponse
     *
     * @param SearchFormDataSecondGenerationNoTableFieldRequest $request
     *
     * @return SearchFormDataSecondGenerationNoTableFieldResponse
     */
    public function searchFormDataSecondGenerationNoTableField($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchFormDataSecondGenerationNoTableFieldHeaders([]);

        return $this->searchFormDataSecondGenerationNoTableFieldWithOptions($request, $headers, $runtime);
    }

    /**
     * 查询表单实例数据.
     *
     * @param request - SearchFormDatasRequest
     * @param tmpHeader - SearchFormDatasHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchFormDatasResponse
     *
     * @param SearchFormDatasRequest $request
     * @param SearchFormDatasHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return SearchFormDatasResponse
     */
    public function searchFormDatasWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new SearchFormDatasShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->createFromTimeGMT) {
            @$body['CreateFromTimeGMT'] = $request->createFromTimeGMT;
        }

        if (null !== $request->createToTimeGMT) {
            @$body['CreateToTimeGMT'] = $request->createToTimeGMT;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dynamicOrder) {
            @$body['DynamicOrder'] = $request->dynamicOrder;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->modifiedFromTimeGMT) {
            @$body['ModifiedFromTimeGMT'] = $request->modifiedFromTimeGMT;
        }

        if (null !== $request->modifiedToTimeGMT) {
            @$body['ModifiedToTimeGMT'] = $request->modifiedToTimeGMT;
        }

        if (null !== $request->originatorId) {
            @$body['OriginatorId'] = $request->originatorId;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchFieldJson) {
            @$body['SearchFieldJson'] = $request->searchFieldJson;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchFormDatas',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/searchFormDatas',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchFormDatasResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchFormDatasResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询表单实例数据.
     *
     * @param request - SearchFormDatasRequest
     *
     * @returns SearchFormDatasResponse
     *
     * @param SearchFormDatasRequest $request
     *
     * @return SearchFormDatasResponse
     */
    public function searchFormDatas($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchFormDatasHeaders([]);

        return $this->searchFormDatasWithOptions($request, $headers, $runtime);
    }

    /**
     * 根据关键词搜索企业内部群.
     *
     * @param request - SearchInnerGroupsRequest
     * @param tmpHeader - SearchInnerGroupsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchInnerGroupsResponse
     *
     * @param SearchInnerGroupsRequest $request
     * @param SearchInnerGroupsHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return SearchInnerGroupsResponse
     */
    public function searchInnerGroupsWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new SearchInnerGroupsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->searchKey) {
            @$body['SearchKey'] = $request->searchKey;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SearchInnerGroups',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/im/searchInnerGroups',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchInnerGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchInnerGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 根据关键词搜索企业内部群.
     *
     * @param request - SearchInnerGroupsRequest
     *
     * @returns SearchInnerGroupsResponse
     *
     * @param SearchInnerGroupsRequest $request
     *
     * @return SearchInnerGroupsResponse
     */
    public function searchInnerGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SearchInnerGroupsHeaders([]);

        return $this->searchInnerGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * 发送钉钉Banner通知.
     *
     * @param tmpReq - SendBannerRequest
     * @param tmpHeader - SendBannerHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendBannerResponse
     *
     * @param SendBannerRequest $tmpReq
     * @param SendBannerHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return SendBannerResponse
     */
    public function sendBannerWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new SendBannerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new SendBannerShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->content) {
            $request->contentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->contentShrink) {
            @$body['Content'] = $request->contentShrink;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendBanner',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/watt/sendBanner',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SendBannerResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendBannerResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发送钉钉Banner通知.
     *
     * @param request - SendBannerRequest
     *
     * @returns SendBannerResponse
     *
     * @param SendBannerRequest $request
     *
     * @return SendBannerResponse
     */
    public function sendBanner($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendBannerHeaders([]);

        return $this->sendBannerWithOptions($request, $headers, $runtime);
    }

    /**
     * 发送钉钉封屏弹窗.
     *
     * @param tmpReq - SendPopupRequest
     * @param tmpHeader - SendPopupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendPopupResponse
     *
     * @param SendPopupRequest $tmpReq
     * @param SendPopupHeaders $tmpHeader
     * @param RuntimeOptions   $runtime
     *
     * @return SendPopupResponse
     */
    public function sendPopupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new SendPopupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new SendPopupShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->content) {
            $request->contentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->contentShrink) {
            @$body['Content'] = $request->contentShrink;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendPopup',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/watt/sendPopup',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SendPopupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendPopupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发送钉钉封屏弹窗.
     *
     * @param request - SendPopupRequest
     *
     * @returns SendPopupResponse
     *
     * @param SendPopupRequest $request
     *
     * @return SendPopupResponse
     */
    public function sendPopup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendPopupHeaders([]);

        return $this->sendPopupWithOptions($request, $headers, $runtime);
    }

    /**
     * 发送钉钉搜索底纹.
     *
     * @param tmpReq - SendSearchShadeRequest
     * @param tmpHeader - SendSearchShadeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendSearchShadeResponse
     *
     * @param SendSearchShadeRequest $tmpReq
     * @param SendSearchShadeHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return SendSearchShadeResponse
     */
    public function sendSearchShadeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new SendSearchShadeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new SendSearchShadeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->content) {
            $request->contentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->content, 'Content', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->contentShrink) {
            @$body['Content'] = $request->contentShrink;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendSearchShade',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/watt/sendSearchShade',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SendSearchShadeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendSearchShadeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发送钉钉搜索底纹.
     *
     * @param request - SendSearchShadeRequest
     *
     * @returns SendSearchShadeResponse
     *
     * @param SendSearchShadeRequest $request
     *
     * @return SendSearchShadeResponse
     */
    public function sendSearchShade($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendSearchShadeHeaders([]);

        return $this->sendSearchShadeWithOptions($request, $headers, $runtime);
    }

    /**
     * 指定列隐藏.
     *
     * @param tmpReq - SetColumnsVisibilityRequest
     * @param tmpHeader - SetColumnsVisibilityHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetColumnsVisibilityResponse
     *
     * @param SetColumnsVisibilityRequest $tmpReq
     * @param SetColumnsVisibilityHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return SetColumnsVisibilityResponse
     */
    public function setColumnsVisibilityWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new SetColumnsVisibilityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new SetColumnsVisibilityShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->column) {
            @$body['Column'] = $request->column;
        }

        if (null !== $request->columnCount) {
            @$body['ColumnCount'] = $request->columnCount;
        }

        if (null !== $request->sheetId) {
            @$body['SheetId'] = $request->sheetId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->visibility) {
            @$body['Visibility'] = $request->visibility;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetColumnsVisibility',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/setColumnsVisibility',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetColumnsVisibilityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetColumnsVisibilityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 指定列隐藏.
     *
     * @param request - SetColumnsVisibilityRequest
     *
     * @returns SetColumnsVisibilityResponse
     *
     * @param SetColumnsVisibilityRequest $request
     *
     * @return SetColumnsVisibilityResponse
     */
    public function setColumnsVisibility($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SetColumnsVisibilityHeaders([]);

        return $this->setColumnsVisibilityWithOptions($request, $headers, $runtime);
    }

    /**
     * 设置联席主持人.
     *
     * @param tmpReq - SetConferenceHostsRequest
     * @param tmpHeader - SetConferenceHostsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetConferenceHostsResponse
     *
     * @param SetConferenceHostsRequest $tmpReq
     * @param SetConferenceHostsHeaders $tmpHeader
     * @param RuntimeOptions            $runtime
     *
     * @return SetConferenceHostsResponse
     */
    public function setConferenceHostsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new SetConferenceHostsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new SetConferenceHostsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->userIds) {
            $request->userIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIds, 'UserIds', 'json');
        }

        $body = [];
        if (null !== $request->operationType) {
            @$body['OperationType'] = $request->operationType;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->userIdsShrink) {
            @$body['UserIds'] = $request->userIdsShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetConferenceHosts',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/setConferenceHosts',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetConferenceHostsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetConferenceHostsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 设置联席主持人.
     *
     * @param request - SetConferenceHostsRequest
     *
     * @returns SetConferenceHostsResponse
     *
     * @param SetConferenceHostsRequest $request
     *
     * @return SetConferenceHostsResponse
     */
    public function setConferenceHosts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SetConferenceHostsHeaders([]);

        return $this->setConferenceHostsWithOptions($request, $headers, $runtime);
    }

    /**
     * 指定行隐藏.
     *
     * @param tmpReq - SetRowsVisibilityRequest
     * @param tmpHeader - SetRowsVisibilityHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetRowsVisibilityResponse
     *
     * @param SetRowsVisibilityRequest $tmpReq
     * @param SetRowsVisibilityHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return SetRowsVisibilityResponse
     */
    public function setRowsVisibilityWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new SetRowsVisibilityShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new SetRowsVisibilityShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->row) {
            @$body['Row'] = $request->row;
        }

        if (null !== $request->rowCount) {
            @$body['RowCount'] = $request->rowCount;
        }

        if (null !== $request->sheetId) {
            @$body['SheetId'] = $request->sheetId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->visibility) {
            @$body['Visibility'] = $request->visibility;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetRowsVisibility',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/setRowsVisibility',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetRowsVisibilityResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetRowsVisibilityResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 指定行隐藏.
     *
     * @param request - SetRowsVisibilityRequest
     *
     * @returns SetRowsVisibilityResponse
     *
     * @param SetRowsVisibilityRequest $request
     *
     * @return SetRowsVisibilityResponse
     */
    public function setRowsVisibility($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SetRowsVisibilityHeaders([]);

        return $this->setRowsVisibilityWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取用户发送日志的概要信息.
     *
     * @param tmpReq - SimpleListReportRequest
     * @param tmpHeader - SimpleListReportHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SimpleListReportResponse
     *
     * @param SimpleListReportRequest $tmpReq
     * @param SimpleListReportHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return SimpleListReportResponse
     */
    public function simpleListReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new SimpleListReportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new SimpleListReportShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->cursor) {
            @$body['Cursor'] = $request->cursor;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SimpleListReport',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/log/simpleListReport',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SimpleListReportResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SimpleListReportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取用户发送日志的概要信息.
     *
     * @param request - SimpleListReportRequest
     *
     * @returns SimpleListReportResponse
     *
     * @param SimpleListReportRequest $request
     *
     * @return SimpleListReportResponse
     */
    public function simpleListReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SimpleListReportHeaders([]);

        return $this->simpleListReportWithOptions($request, $headers, $runtime);
    }

    /**
     * 开启视频会议云录制.
     *
     * @param tmpReq - StartCloudRecordRequest
     * @param tmpHeader - StartCloudRecordHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartCloudRecordResponse
     *
     * @param StartCloudRecordRequest $tmpReq
     * @param StartCloudRecordHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return StartCloudRecordResponse
     */
    public function startCloudRecordWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new StartCloudRecordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new StartCloudRecordShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->mode) {
            @$body['Mode'] = $request->mode;
        }

        if (null !== $request->smallWindowPosition) {
            @$body['SmallWindowPosition'] = $request->smallWindowPosition;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartCloudRecord',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/startCloudRecord',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartCloudRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartCloudRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 开启视频会议云录制.
     *
     * @param request - StartCloudRecordRequest
     *
     * @returns StartCloudRecordResponse
     *
     * @param StartCloudRecordRequest $request
     *
     * @return StartCloudRecordResponse
     */
    public function startCloudRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartCloudRecordHeaders([]);

        return $this->startCloudRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * 发起宜搭审批流程.
     *
     * @param request - StartInstanceRequest
     * @param tmpHeader - StartInstanceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     * @param StartInstanceHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new StartInstanceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->departmentId) {
            @$body['DepartmentId'] = $request->departmentId;
        }

        if (null !== $request->formDataJson) {
            @$body['FormDataJson'] = $request->formDataJson;
        }

        if (null !== $request->formUuid) {
            @$body['FormUuid'] = $request->formUuid;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->processCode) {
            @$body['ProcessCode'] = $request->processCode;
        }

        if (null !== $request->processData) {
            @$body['ProcessData'] = $request->processData;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartInstance',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/startInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 发起宜搭审批流程.
     *
     * @param request - StartInstanceRequest
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartInstanceHeaders([]);

        return $this->startInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 开启闪记.
     *
     * @param tmpReq - StartMinutesRequest
     * @param tmpHeader - StartMinutesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartMinutesResponse
     *
     * @param StartMinutesRequest $tmpReq
     * @param StartMinutesHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return StartMinutesResponse
     */
    public function startMinutesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new StartMinutesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new StartMinutesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        if (null !== $request->ownerUserId) {
            @$body['ownerUserId'] = $request->ownerUserId;
        }

        if (null !== $request->recordAudio) {
            @$body['recordAudio'] = $request->recordAudio;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StartMinutes',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/startMinutes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartMinutesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartMinutesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 开启闪记.
     *
     * @param request - StartMinutesRequest
     *
     * @returns StartMinutesResponse
     *
     * @param StartMinutesRequest $request
     *
     * @return StartMinutesResponse
     */
    public function startMinutes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartMinutesHeaders([]);

        return $this->startMinutesWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取日志相关人员列表.
     *
     * @param tmpReq - StatisticsListByTypeReportRequest
     * @param tmpHeader - StatisticsListByTypeReportHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StatisticsListByTypeReportResponse
     *
     * @param StatisticsListByTypeReportRequest $tmpReq
     * @param StatisticsListByTypeReportHeaders $tmpHeader
     * @param RuntimeOptions                    $runtime
     *
     * @return StatisticsListByTypeReportResponse
     */
    public function statisticsListByTypeReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new StatisticsListByTypeReportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new StatisticsListByTypeReportShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->offset) {
            @$body['Offset'] = $request->offset;
        }

        if (null !== $request->reportId) {
            @$body['ReportId'] = $request->reportId;
        }

        if (null !== $request->size) {
            @$body['Size'] = $request->size;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->type) {
            @$body['Type'] = $request->type;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StatisticsListByTypeReport',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/log/statisticsListByTypeReport',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StatisticsListByTypeReportResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StatisticsListByTypeReportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取日志相关人员列表.
     *
     * @param request - StatisticsListByTypeReportRequest
     *
     * @returns StatisticsListByTypeReportResponse
     *
     * @param StatisticsListByTypeReportRequest $request
     *
     * @return StatisticsListByTypeReportResponse
     */
    public function statisticsListByTypeReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StatisticsListByTypeReportHeaders([]);

        return $this->statisticsListByTypeReportWithOptions($request, $headers, $runtime);
    }

    /**
     * 获取日志统计数据.
     *
     * @param tmpReq - StatisticsReportRequest
     * @param tmpHeader - StatisticsReportHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StatisticsReportResponse
     *
     * @param StatisticsReportRequest $tmpReq
     * @param StatisticsReportHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return StatisticsReportResponse
     */
    public function statisticsReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new StatisticsReportShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new StatisticsReportShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->reportId) {
            @$body['ReportId'] = $request->reportId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StatisticsReport',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/log/statisticsReport',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StatisticsReportResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StatisticsReportResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取日志统计数据.
     *
     * @param request - StatisticsReportRequest
     *
     * @returns StatisticsReportResponse
     *
     * @param StatisticsReportRequest $request
     *
     * @return StatisticsReportResponse
     */
    public function statisticsReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StatisticsReportHeaders([]);

        return $this->statisticsReportWithOptions($request, $headers, $runtime);
    }

    /**
     * 停止视频会议云录制.
     *
     * @param tmpReq - StopCloudRecordRequest
     * @param tmpHeader - StopCloudRecordHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopCloudRecordResponse
     *
     * @param StopCloudRecordRequest $tmpReq
     * @param StopCloudRecordHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return StopCloudRecordResponse
     */
    public function stopCloudRecordWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new StopCloudRecordShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new StopCloudRecordShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopCloudRecord',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/stopCloudRecord',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopCloudRecordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopCloudRecordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 停止视频会议云录制.
     *
     * @param request - StopCloudRecordRequest
     *
     * @returns StopCloudRecordResponse
     *
     * @param StopCloudRecordRequest $request
     *
     * @return StopCloudRecordResponse
     */
    public function stopCloudRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StopCloudRecordHeaders([]);

        return $this->stopCloudRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * 暂停闪记.
     *
     * @param tmpReq - StopMinutesRequest
     * @param tmpHeader - StopMinutesHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopMinutesResponse
     *
     * @param StopMinutesRequest $tmpReq
     * @param StopMinutesHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return StopMinutesResponse
     */
    public function stopMinutesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new StopMinutesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new StopMinutesShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'StopMinutes',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/stopMinutes',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopMinutesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopMinutesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 暂停闪记.
     *
     * @param request - StopMinutesRequest
     *
     * @returns StopMinutesResponse
     *
     * @param StopMinutesRequest $request
     *
     * @return StopMinutesResponse
     */
    public function stopMinutes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StopMinutesHeaders([]);

        return $this->stopMinutesWithOptions($request, $headers, $runtime);
    }

    /**
     * 订阅公共日历.
     *
     * @param request - SubscribeCalendarRequest
     * @param tmpHeader - SubscribeCalendarHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubscribeCalendarResponse
     *
     * @param SubscribeCalendarRequest $request
     * @param SubscribeCalendarHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return SubscribeCalendarResponse
     */
    public function subscribeCalendarWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new SubscribeCalendarShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubscribeCalendar',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/subscribeCalendar',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubscribeCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubscribeCalendarResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 订阅公共日历.
     *
     * @param request - SubscribeCalendarRequest
     *
     * @returns SubscribeCalendarResponse
     *
     * @param SubscribeCalendarRequest $request
     *
     * @return SubscribeCalendarResponse
     */
    public function subscribeCalendar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SubscribeCalendarHeaders([]);

        return $this->subscribeCalendarWithOptions($request, $headers, $runtime);
    }

    /**
     * 订阅文件变更事件.
     *
     * @param tmpReq - SubscribeEventRequest
     * @param tmpHeader - SubscribeEventHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubscribeEventResponse
     *
     * @param SubscribeEventRequest $tmpReq
     * @param SubscribeEventHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return SubscribeEventResponse
     */
    public function subscribeEventWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new SubscribeEventShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new SubscribeEventShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->scope) {
            @$body['Scope'] = $request->scope;
        }

        if (null !== $request->scopeId) {
            @$body['ScopeId'] = $request->scopeId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubscribeEvent',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/subscribeEvent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubscribeEventResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubscribeEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 订阅文件变更事件.
     *
     * @param request - SubscribeEventRequest
     *
     * @returns SubscribeEventResponse
     *
     * @param SubscribeEventRequest $request
     *
     * @return SubscribeEventResponse
     */
    public function subscribeEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SubscribeEventHeaders([]);

        return $this->subscribeEventWithOptions($request, $headers, $runtime);
    }

    /**
     * 同步钉钉账号类型.
     *
     * @param tmpReq - SyncDingTypeRequest
     * @param tmpHeader - SyncDingTypeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncDingTypeResponse
     *
     * @param SyncDingTypeRequest $tmpReq
     * @param SyncDingTypeHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return SyncDingTypeResponse
     */
    public function syncDingTypeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new SyncDingTypeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new SyncDingTypeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->dingType) {
            @$body['DingType'] = $request->dingType;
        }

        if (null !== $request->isDimission) {
            @$body['IsDimission'] = $request->isDimission;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workNo) {
            @$body['WorkNo'] = $request->workNo;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SyncDingType',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/aliding/v1/indepding/syncDingType',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SyncDingTypeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SyncDingTypeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 同步钉钉账号类型.
     *
     * @param request - SyncDingTypeRequest
     *
     * @returns SyncDingTypeResponse
     *
     * @param SyncDingTypeRequest $request
     *
     * @return SyncDingTypeResponse
     */
    public function syncDingType($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SyncDingTypeHeaders([]);

        return $this->syncDingTypeWithOptions($request, $headers, $runtime);
    }

    /**
     * 终止流程实例.
     *
     * @param request - TerminateInstanceRequest
     * @param tmpHeader - TerminateInstanceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TerminateInstanceResponse
     *
     * @param TerminateInstanceRequest $request
     * @param TerminateInstanceHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return TerminateInstanceResponse
     */
    public function terminateInstanceWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new TerminateInstanceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->processInstanceId) {
            @$body['ProcessInstanceId'] = $request->processInstanceId;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TerminateInstance',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/terminateInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TerminateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TerminateInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 终止流程实例.
     *
     * @param request - TerminateInstanceRequest
     *
     * @returns TerminateInstanceResponse
     *
     * @param TerminateInstanceRequest $request
     *
     * @return TerminateInstanceResponse
     */
    public function terminateInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TerminateInstanceHeaders([]);

        return $this->terminateInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 转交工单.
     *
     * @param tmpReq - TransferTicketRequest
     * @param tmpHeader - TransferTicketHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TransferTicketResponse
     *
     * @param TransferTicketRequest $tmpReq
     * @param TransferTicketHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return TransferTicketResponse
     */
    public function transferTicketWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new TransferTicketShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new TransferTicketShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->notify) {
            $request->notifyShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->notify, 'Notify', 'json');
        }

        if (null !== $tmpReq->processorUserIds) {
            $request->processorUserIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->processorUserIds, 'ProcessorUserIds', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->ticketMemo) {
            $request->ticketMemoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ticketMemo, 'TicketMemo', 'json');
        }

        $body = [];
        if (null !== $request->notifyShrink) {
            @$body['Notify'] = $request->notifyShrink;
        }

        if (null !== $request->openTeamId) {
            @$body['OpenTeamId'] = $request->openTeamId;
        }

        if (null !== $request->openTicketId) {
            @$body['OpenTicketId'] = $request->openTicketId;
        }

        if (null !== $request->processorUserIdsShrink) {
            @$body['ProcessorUserIds'] = $request->processorUserIdsShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->ticketMemoShrink) {
            @$body['TicketMemo'] = $request->ticketMemoShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TransferTicket',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ticket/transferTicket',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TransferTicketResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TransferTicketResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 转交工单.
     *
     * @param request - TransferTicketRequest
     *
     * @returns TransferTicketResponse
     *
     * @param TransferTicketRequest $request
     *
     * @return TransferTicketResponse
     */
    public function transferTicket($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TransferTicketHeaders([]);

        return $this->transferTicketWithOptions($request, $headers, $runtime);
    }

    /**
     * 取消订阅公共日历.
     *
     * @param request - UnsubscribeCalendarRequest
     * @param tmpHeader - UnsubscribeCalendarHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnsubscribeCalendarResponse
     *
     * @param UnsubscribeCalendarRequest $request
     * @param UnsubscribeCalendarHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return UnsubscribeCalendarResponse
     */
    public function unsubscribeCalendarWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new UnsubscribeCalendarShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnsubscribeCalendar',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/unsubscribeCalendar',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnsubscribeCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnsubscribeCalendarResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 取消订阅公共日历.
     *
     * @param request - UnsubscribeCalendarRequest
     *
     * @returns UnsubscribeCalendarResponse
     *
     * @param UnsubscribeCalendarRequest $request
     *
     * @return UnsubscribeCalendarResponse
     */
    public function unsubscribeCalendar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UnsubscribeCalendarHeaders([]);

        return $this->unsubscribeCalendarWithOptions($request, $headers, $runtime);
    }

    /**
     * 取消订阅文件变更事件.
     *
     * @param tmpReq - UnsubscribeEventRequest
     * @param tmpHeader - UnsubscribeEventHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnsubscribeEventResponse
     *
     * @param UnsubscribeEventRequest $tmpReq
     * @param UnsubscribeEventHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return UnsubscribeEventResponse
     */
    public function unsubscribeEventWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UnsubscribeEventShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UnsubscribeEventShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->scope) {
            @$body['Scope'] = $request->scope;
        }

        if (null !== $request->scopeId) {
            @$body['ScopeId'] = $request->scopeId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UnsubscribeEvent',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/unsubscribeEvent',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UnsubscribeEventResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UnsubscribeEventResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 取消订阅文件变更事件.
     *
     * @param request - UnsubscribeEventRequest
     *
     * @returns UnsubscribeEventResponse
     *
     * @param UnsubscribeEventRequest $request
     *
     * @return UnsubscribeEventResponse
     */
    public function unsubscribeEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UnsubscribeEventHeaders([]);

        return $this->unsubscribeEventWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新表单数据.
     *
     * @param request - UpdateFormDataRequest
     * @param tmpHeader - UpdateFormDataHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFormDataResponse
     *
     * @param UpdateFormDataRequest $request
     * @param UpdateFormDataHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFormDataResponse
     */
    public function updateFormDataWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new UpdateFormDataShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->formInstanceId) {
            @$body['FormInstanceId'] = $request->formInstanceId;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->updateFormDataJson) {
            @$body['UpdateFormDataJson'] = $request->updateFormDataJson;
        }

        if (null !== $request->useLatestVersion) {
            @$body['UseLatestVersion'] = $request->useLatestVersion;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateFormData',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/updateFormData',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateFormDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateFormDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新表单数据.
     *
     * @param request - UpdateFormDataRequest
     *
     * @returns UpdateFormDataResponse
     *
     * @param UpdateFormDataRequest $request
     *
     * @return UpdateFormDataResponse
     */
    public function updateFormData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateFormDataHeaders([]);

        return $this->updateFormDataWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新流程实例.
     *
     * @param request - UpdateInstanceRequest
     * @param tmpHeader - UpdateInstanceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     * @param UpdateInstanceHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new UpdateInstanceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->processInstanceId) {
            @$body['ProcessInstanceId'] = $request->processInstanceId;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        if (null !== $request->updateFormDataJson) {
            @$body['UpdateFormDataJson'] = $request->updateFormDataJson;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/updateInstance',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新流程实例.
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateInstanceHeaders([]);

        return $this->updateInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改直播属性信息.
     *
     * @param tmpReq - UpdateLiveRequest
     * @param tmpHeader - UpdateLiveHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateLiveResponse
     *
     * @param UpdateLiveRequest $tmpReq
     * @param UpdateLiveHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateLiveResponse
     */
    public function updateLiveWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateLiveShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateLiveShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->coverUrl) {
            @$body['CoverUrl'] = $request->coverUrl;
        }

        if (null !== $request->introduction) {
            @$body['Introduction'] = $request->introduction;
        }

        if (null !== $request->liveId) {
            @$body['LiveId'] = $request->liveId;
        }

        if (null !== $request->preEndTime) {
            @$body['PreEndTime'] = $request->preEndTime;
        }

        if (null !== $request->preStartTime) {
            @$body['PreStartTime'] = $request->preStartTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateLive',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/updateLive',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateLiveResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLiveResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改直播属性信息.
     *
     * @param request - UpdateLiveRequest
     *
     * @returns UpdateLiveResponse
     *
     * @param UpdateLiveRequest $request
     *
     * @return UpdateLiveResponse
     */
    public function updateLive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateLiveHeaders([]);

        return $this->updateLiveWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新会议室信息.
     *
     * @param tmpReq - UpdateMeetingRoomRequest
     * @param tmpHeader - UpdateMeetingRoomHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMeetingRoomResponse
     *
     * @param UpdateMeetingRoomRequest $tmpReq
     * @param UpdateMeetingRoomHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateMeetingRoomResponse
     */
    public function updateMeetingRoomWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMeetingRoomShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateMeetingRoomShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->reservationAuthority) {
            $request->reservationAuthorityShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->reservationAuthority, 'ReservationAuthority', 'json');
        }

        if (null !== $tmpReq->roomLabelIds) {
            $request->roomLabelIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roomLabelIds, 'RoomLabelIds', 'json');
        }

        if (null !== $tmpReq->roomLocation) {
            $request->roomLocationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->roomLocation, 'RoomLocation', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->enableCycleReservation) {
            @$body['EnableCycleReservation'] = $request->enableCycleReservation;
        }

        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->isvRoomId) {
            @$body['IsvRoomId'] = $request->isvRoomId;
        }

        if (null !== $request->reservationAuthorityShrink) {
            @$body['ReservationAuthority'] = $request->reservationAuthorityShrink;
        }

        if (null !== $request->roomCapacity) {
            @$body['RoomCapacity'] = $request->roomCapacity;
        }

        if (null !== $request->roomId) {
            @$body['RoomId'] = $request->roomId;
        }

        if (null !== $request->roomLabelIdsShrink) {
            @$body['RoomLabelIds'] = $request->roomLabelIdsShrink;
        }

        if (null !== $request->roomLocationShrink) {
            @$body['RoomLocation'] = $request->roomLocationShrink;
        }

        if (null !== $request->roomName) {
            @$body['RoomName'] = $request->roomName;
        }

        if (null !== $request->roomPicture) {
            @$body['RoomPicture'] = $request->roomPicture;
        }

        if (null !== $request->roomStatus) {
            @$body['RoomStatus'] = $request->roomStatus;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMeetingRoom',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/updateMeetingRoom',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateMeetingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMeetingRoomResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新会议室信息.
     *
     * @param request - UpdateMeetingRoomRequest
     *
     * @returns UpdateMeetingRoomResponse
     *
     * @param UpdateMeetingRoomRequest $request
     *
     * @return UpdateMeetingRoomResponse
     */
    public function updateMeetingRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateMeetingRoomHeaders([]);

        return $this->updateMeetingRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新会议室分组信息.
     *
     * @param tmpReq - UpdateMeetingRoomGroupRequest
     * @param tmpHeader - UpdateMeetingRoomGroupHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMeetingRoomGroupResponse
     *
     * @param UpdateMeetingRoomGroupRequest $tmpReq
     * @param UpdateMeetingRoomGroupHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateMeetingRoomGroupResponse
     */
    public function updateMeetingRoomGroupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateMeetingRoomGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateMeetingRoomGroupShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->groupId) {
            @$body['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateMeetingRoomGroup',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/updateMeetingRoomGroup',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateMeetingRoomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMeetingRoomGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新会议室分组信息.
     *
     * @param request - UpdateMeetingRoomGroupRequest
     *
     * @returns UpdateMeetingRoomGroupResponse
     *
     * @param UpdateMeetingRoomGroupRequest $request
     *
     * @return UpdateMeetingRoomGroupResponse
     */
    public function updateMeetingRoomGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateMeetingRoomGroupHeaders([]);

        return $this->updateMeetingRoomGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新单元格区域
     *
     * @param tmpReq - UpdateRangeRequest
     * @param tmpHeader - UpdateRangeHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRangeResponse
     *
     * @param UpdateRangeRequest $tmpReq
     * @param UpdateRangeHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateRangeResponse
     */
    public function updateRangeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateRangeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateRangeShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->backgroundColors) {
            $request->backgroundColorsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->backgroundColors, 'BackgroundColors', 'json');
        }

        if (null !== $tmpReq->hyperlinks) {
            $request->hyperlinksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->hyperlinks, 'Hyperlinks', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->values) {
            $request->valuesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->values, 'Values', 'json');
        }

        $body = [];
        if (null !== $request->backgroundColorsShrink) {
            @$body['BackgroundColors'] = $request->backgroundColorsShrink;
        }

        if (null !== $request->hyperlinksShrink) {
            @$body['Hyperlinks'] = $request->hyperlinksShrink;
        }

        if (null !== $request->numberFormat) {
            @$body['NumberFormat'] = $request->numberFormat;
        }

        if (null !== $request->rangeAddress) {
            @$body['RangeAddress'] = $request->rangeAddress;
        }

        if (null !== $request->sheetId) {
            @$body['SheetId'] = $request->sheetId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->valuesShrink) {
            @$body['Values'] = $request->valuesShrink;
        }

        if (null !== $request->workbookId) {
            @$body['WorkbookId'] = $request->workbookId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRange',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/updateRange',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRangeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRangeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新单元格区域
     *
     * @param request - UpdateRangeRequest
     *
     * @returns UpdateRangeResponse
     *
     * @param UpdateRangeRequest $request
     *
     * @return UpdateRangeResponse
     */
    public function updateRange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateRangeHeaders([]);

        return $this->updateRangeWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新预约会议设置.
     *
     * @param tmpReq - UpdateScheduleConfSettingsRequest
     * @param tmpHeader - UpdateScheduleConfSettingsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateScheduleConfSettingsResponse
     *
     * @param UpdateScheduleConfSettingsRequest $tmpReq
     * @param UpdateScheduleConfSettingsHeaders $tmpHeader
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateScheduleConfSettingsResponse
     */
    public function updateScheduleConfSettingsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateScheduleConfSettingsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateScheduleConfSettingsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->scheduleConfSettingModel) {
            $request->scheduleConfSettingModelShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfSettingModel, 'ScheduleConfSettingModel', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->scheduleConfSettingModelShrink) {
            @$body['ScheduleConfSettingModel'] = $request->scheduleConfSettingModelShrink;
        }

        if (null !== $request->scheduleConferenceId) {
            @$body['ScheduleConferenceId'] = $request->scheduleConferenceId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateScheduleConfSettings',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/updateScheduleConfSettings',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateScheduleConfSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateScheduleConfSettingsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新预约会议设置.
     *
     * @param request - UpdateScheduleConfSettingsRequest
     *
     * @returns UpdateScheduleConfSettingsResponse
     *
     * @param UpdateScheduleConfSettingsRequest $request
     *
     * @return UpdateScheduleConfSettingsResponse
     */
    public function updateScheduleConfSettings($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateScheduleConfSettingsHeaders([]);

        return $this->updateScheduleConfSettingsWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新预约会议.
     *
     * @param tmpReq - UpdateScheduleConferenceRequest
     * @param tmpHeader - UpdateScheduleConferenceHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateScheduleConferenceResponse
     *
     * @param UpdateScheduleConferenceRequest $tmpReq
     * @param UpdateScheduleConferenceHeaders $tmpHeader
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateScheduleConferenceResponse
     */
    public function updateScheduleConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateScheduleConferenceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateScheduleConferenceShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->scheduleConferenceId) {
            @$body['ScheduleConferenceId'] = $request->scheduleConferenceId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateScheduleConference',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/updateScheduleConference',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateScheduleConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateScheduleConferenceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新预约会议.
     *
     * @param request - UpdateScheduleConferenceRequest
     *
     * @returns UpdateScheduleConferenceResponse
     *
     * @param UpdateScheduleConferenceRequest $request
     *
     * @return UpdateScheduleConferenceResponse
     */
    public function updateScheduleConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateScheduleConferenceHeaders([]);

        return $this->updateScheduleConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新状态
     *
     * @param tmpReq - UpdateStatusRequest
     * @param tmpHeader - UpdateStatusHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateStatusResponse
     *
     * @param UpdateStatusRequest $tmpReq
     * @param UpdateStatusHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateStatusResponse
     */
    public function updateStatusWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateStatusShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->errorLines) {
            $request->errorLinesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->errorLines, 'ErrorLines', 'json');
        }

        $body = [];
        if (null !== $request->appType) {
            @$body['AppType'] = $request->appType;
        }

        if (null !== $request->errorLinesShrink) {
            @$body['ErrorLines'] = $request->errorLinesShrink;
        }

        if (null !== $request->importSequence) {
            @$body['ImportSequence'] = $request->importSequence;
        }

        if (null !== $request->language) {
            @$body['Language'] = $request->language;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->systemToken) {
            @$body['SystemToken'] = $request->systemToken;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateStatus',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/yida/updateStatus',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新状态
     *
     * @param request - UpdateStatusRequest
     *
     * @returns UpdateStatusResponse
     *
     * @param UpdateStatusRequest $request
     *
     * @return UpdateStatusResponse
     */
    public function updateStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateStatusHeaders([]);

        return $this->updateStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新订阅日历.
     *
     * @param tmpReq - UpdateSubscribedCalendarsRequest
     * @param tmpHeader - UpdateSubscribedCalendarsHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSubscribedCalendarsResponse
     *
     * @param UpdateSubscribedCalendarsRequest $tmpReq
     * @param UpdateSubscribedCalendarsHeaders $tmpHeader
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateSubscribedCalendarsResponse
     */
    public function updateSubscribedCalendarsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateSubscribedCalendarsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateSubscribedCalendarsShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->managers) {
            $request->managersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->managers, 'Managers', 'json');
        }

        if (null !== $tmpReq->subscribeScope) {
            $request->subscribeScopeShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->subscribeScope, 'SubscribeScope', 'json');
        }

        $body = [];
        if (null !== $request->calendarId) {
            @$body['CalendarId'] = $request->calendarId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->managersShrink) {
            @$body['Managers'] = $request->managersShrink;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->subscribeScopeShrink) {
            @$body['SubscribeScope'] = $request->subscribeScopeShrink;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateSubscribedCalendars',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/calendar/updateSubscribedCalendars',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateSubscribedCalendarsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSubscribedCalendarsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新订阅日历.
     *
     * @param request - UpdateSubscribedCalendarsRequest
     *
     * @returns UpdateSubscribedCalendarsResponse
     *
     * @param UpdateSubscribedCalendarsRequest $request
     *
     * @return UpdateSubscribedCalendarsResponse
     */
    public function updateSubscribedCalendars($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateSubscribedCalendarsHeaders([]);

        return $this->updateSubscribedCalendarsWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新代办.
     *
     * @param tmpReq - UpdateTodoTaskRequest
     * @param tmpHeader - UpdateTodoTaskHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTodoTaskResponse
     *
     * @param UpdateTodoTaskRequest $tmpReq
     * @param UpdateTodoTaskHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTodoTaskResponse
     */
    public function updateTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTodoTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateTodoTaskShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->executorIds) {
            $request->executorIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'executorIds', 'json');
        }

        if (null !== $tmpReq->participantIds) {
            $request->participantIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->participantIds, 'participantIds', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->description) {
            @$body['description'] = $request->description;
        }

        if (null !== $request->done) {
            @$body['done'] = $request->done;
        }

        if (null !== $request->dueTime) {
            @$body['dueTime'] = $request->dueTime;
        }

        if (null !== $request->executorIdsShrink) {
            @$body['executorIds'] = $request->executorIdsShrink;
        }

        if (null !== $request->participantIdsShrink) {
            @$body['participantIds'] = $request->participantIdsShrink;
        }

        if (null !== $request->subject) {
            @$body['subject'] = $request->subject;
        }

        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTodoTask',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/task/updateTodoTask',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTodoTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新代办.
     *
     * @param request - UpdateTodoTaskRequest
     *
     * @returns UpdateTodoTaskResponse
     *
     * @param UpdateTodoTaskRequest $request
     *
     * @return UpdateTodoTaskResponse
     */
    public function updateTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateTodoTaskHeaders([]);

        return $this->updateTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新代办执行者状态
     *
     * @param tmpReq - UpdateTodoTaskExecutorStatusRequest
     * @param tmpHeader - UpdateTodoTaskExecutorStatusHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTodoTaskExecutorStatusResponse
     *
     * @param UpdateTodoTaskExecutorStatusRequest $tmpReq
     * @param UpdateTodoTaskExecutorStatusHeaders $tmpHeader
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateTodoTaskExecutorStatusResponse
     */
    public function updateTodoTaskExecutorStatusWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTodoTaskExecutorStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateTodoTaskExecutorStatusShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        if (null !== $tmpReq->executorStatusList) {
            $request->executorStatusListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->executorStatusList, 'executorStatusList', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->executorStatusListShrink) {
            @$body['executorStatusList'] = $request->executorStatusListShrink;
        }

        if (null !== $request->operatorId) {
            @$body['operatorId'] = $request->operatorId;
        }

        if (null !== $request->taskId) {
            @$body['taskId'] = $request->taskId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTodoTaskExecutorStatus',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/task/updateTodoTaskExecutorStatus',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateTodoTaskExecutorStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTodoTaskExecutorStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新代办执行者状态
     *
     * @param request - UpdateTodoTaskExecutorStatusRequest
     *
     * @returns UpdateTodoTaskExecutorStatusResponse
     *
     * @param UpdateTodoTaskExecutorStatusRequest $request
     *
     * @return UpdateTodoTaskExecutorStatusResponse
     */
    public function updateTodoTaskExecutorStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateTodoTaskExecutorStatusHeaders([]);

        return $this->updateTodoTaskExecutorStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新企业账号用户头像.
     *
     * @param request - UpdateUserAvatarRequest
     * @param tmpHeader - UpdateUserAvatarHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateUserAvatarResponse
     *
     * @param UpdateUserAvatarRequest $request
     * @param UpdateUserAvatarHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateUserAvatarResponse
     */
    public function updateUserAvatarWithOptions($request, $tmpHeader, $runtime)
    {
        $request->validate();
        $headers = new UpdateUserAvatarShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        $body = [];
        if (null !== $request->avatarMediaId) {
            @$body['AvatarMediaId'] = $request->avatarMediaId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateUserAvatar',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/contact/updateUserAvatar',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateUserAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateUserAvatarResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新企业账号用户头像.
     *
     * @param request - UpdateUserAvatarRequest
     *
     * @returns UpdateUserAvatarResponse
     *
     * @param UpdateUserAvatarRequest $request
     *
     * @return UpdateUserAvatarResponse
     */
    public function updateUserAvatar($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateUserAvatarHeaders([]);

        return $this->updateUserAvatarWithOptions($request, $headers, $runtime);
    }

    /**
     * 设置正在进行中的视频会议属性.
     *
     * @param tmpReq - UpdateVideoConferenceSettingRequest
     * @param tmpHeader - UpdateVideoConferenceSettingHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVideoConferenceSettingResponse
     *
     * @param UpdateVideoConferenceSettingRequest $tmpReq
     * @param UpdateVideoConferenceSettingHeaders $tmpHeader
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateVideoConferenceSettingResponse
     */
    public function updateVideoConferenceSettingWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateVideoConferenceSettingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateVideoConferenceSettingShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->allowUnmuteSelf) {
            @$body['AllowUnmuteSelf'] = $request->allowUnmuteSelf;
        }

        if (null !== $request->autoTransferHost) {
            @$body['AutoTransferHost'] = $request->autoTransferHost;
        }

        if (null !== $request->forbiddenShareScreen) {
            @$body['ForbiddenShareScreen'] = $request->forbiddenShareScreen;
        }

        if (null !== $request->lockConference) {
            @$body['LockConference'] = $request->lockConference;
        }

        if (null !== $request->muteAll) {
            @$body['MuteAll'] = $request->muteAll;
        }

        if (null !== $request->onlyInternalEmployeesJoin) {
            @$body['OnlyInternalEmployeesJoin'] = $request->onlyInternalEmployeesJoin;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->conferenceId) {
            @$body['conferenceId'] = $request->conferenceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateVideoConferenceSetting',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/ysp/updateVideoConferenceSetting',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateVideoConferenceSettingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateVideoConferenceSettingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 设置正在进行中的视频会议属性.
     *
     * @param request - UpdateVideoConferenceSettingRequest
     *
     * @returns UpdateVideoConferenceSettingResponse
     *
     * @param UpdateVideoConferenceSettingRequest $request
     *
     * @return UpdateVideoConferenceSettingResponse
     */
    public function updateVideoConferenceSetting($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateVideoConferenceSettingHeaders([]);

        return $this->updateVideoConferenceSettingWithOptions($request, $headers, $runtime);
    }

    /**
     * 修改知识库文档成员权限.
     *
     * @param tmpReq - UpdateWorkspaceDocMembersRequest
     * @param tmpHeader - UpdateWorkspaceDocMembersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkspaceDocMembersResponse
     *
     * @param UpdateWorkspaceDocMembersRequest $tmpReq
     * @param UpdateWorkspaceDocMembersHeaders $tmpHeader
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateWorkspaceDocMembersResponse
     */
    public function updateWorkspaceDocMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateWorkspaceDocMembersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateWorkspaceDocMembersShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->members) {
            $request->membersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->membersShrink) {
            @$body['Members'] = $request->membersShrink;
        }

        if (null !== $request->nodeId) {
            @$body['NodeId'] = $request->nodeId;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkspaceDocMembers',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/updateWorkspaceDocMembers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateWorkspaceDocMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateWorkspaceDocMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改知识库文档成员权限.
     *
     * @param request - UpdateWorkspaceDocMembersRequest
     *
     * @returns UpdateWorkspaceDocMembersResponse
     *
     * @param UpdateWorkspaceDocMembersRequest $request
     *
     * @return UpdateWorkspaceDocMembersResponse
     */
    public function updateWorkspaceDocMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateWorkspaceDocMembersHeaders([]);

        return $this->updateWorkspaceDocMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * 更新知识库成员权限.
     *
     * @param tmpReq - UpdateWorkspaceMembersRequest
     * @param tmpHeader - UpdateWorkspaceMembersHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWorkspaceMembersResponse
     *
     * @param UpdateWorkspaceMembersRequest $tmpReq
     * @param UpdateWorkspaceMembersHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateWorkspaceMembersResponse
     */
    public function updateWorkspaceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateWorkspaceMembersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UpdateWorkspaceMembersShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->members) {
            $request->membersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->membersShrink) {
            @$body['Members'] = $request->membersShrink;
        }

        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWorkspaceMembers',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/dingtalk/v1/documents/updateWorkspaceMembers',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateWorkspaceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateWorkspaceMembersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新知识库成员权限.
     *
     * @param request - UpdateWorkspaceMembersRequest
     *
     * @returns UpdateWorkspaceMembersResponse
     *
     * @param UpdateWorkspaceMembersRequest $request
     *
     * @return UpdateWorkspaceMembersResponse
     */
    public function updateWorkspaceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateWorkspaceMembersHeaders([]);

        return $this->updateWorkspaceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * 上传媒体<br/>.
     *
     * @param tmpReq - UploadMediaRequest
     * @param tmpHeader - UploadMediaHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadMediaResponse
     *
     * @param UploadMediaRequest $tmpReq
     * @param UploadMediaHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return UploadMediaResponse
     */
    public function uploadMediaWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new UploadMediaShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new UploadMediaShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->mediaName) {
            @$body['mediaName'] = $request->mediaName;
        }

        if (null !== $request->mediaType) {
            @$body['mediaType'] = $request->mediaType;
        }

        if (null !== $request->orgId) {
            @$body['orgId'] = $request->orgId;
        }

        if (null !== $request->url) {
            @$body['url'] = $request->url;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadMedia',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/aliding/v1/documents/uploadMedia',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadMediaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadMediaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 上传媒体<br/>.
     *
     * @param request - UploadMediaRequest
     *
     * @returns UploadMediaResponse
     *
     * @param UploadMediaRequest $request
     *
     * @return UploadMediaResponse
     */
    public function uploadMedia($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UploadMediaHeaders([]);

        return $this->uploadMediaWithOptions($request, $headers, $runtime);
    }

    /**
     * 穿戴勋章.
     *
     * @param tmpReq - WearOrgHonorRequest
     * @param tmpHeader - WearOrgHonorHeaders
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WearOrgHonorResponse
     *
     * @param WearOrgHonorRequest $tmpReq
     * @param WearOrgHonorHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return WearOrgHonorResponse
     */
    public function wearOrgHonorWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        $tmpReq->validate();
        $request = new WearOrgHonorShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        $headers = new WearOrgHonorShrinkHeaders([]);
        Utils::convert($tmpHeader, $headers);
        if (null !== $tmpHeader->accountContext) {
            $headers->accountContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }

        if (null !== $tmpReq->tenantContext) {
            $request->tenantContextShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }

        $body = [];
        if (null !== $request->tenantContextShrink) {
            @$body['TenantContext'] = $request->tenantContextShrink;
        }

        if (null !== $request->honorId) {
            @$body['honorId'] = $request->honorId;
        }

        if (null !== $request->orgId) {
            @$body['orgId'] = $request->orgId;
        }

        if (null !== $request->userId) {
            @$body['userId'] = $request->userId;
        }

        if (null !== $request->wear) {
            @$body['wear'] = $request->wear;
        }

        $realHeaders = [];
        if (null !== $headers->commonHeaders) {
            $realHeaders = $headers->commonHeaders;
        }

        if (null !== $headers->accountContextShrink) {
            @$realHeaders['AccountContext'] = json_encode($headers->accountContextShrink, \JSON_UNESCAPED_UNICODE + \JSON_UNESCAPED_SLASHES);
        }

        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'WearOrgHonor',
            'version' => '2023-04-26',
            'protocol' => 'HTTPS',
            'pathname' => '/aliding/v1/honor/wearOrgHonor',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return WearOrgHonorResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return WearOrgHonorResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 穿戴勋章.
     *
     * @param request - WearOrgHonorRequest
     *
     * @returns WearOrgHonorResponse
     *
     * @param WearOrgHonorRequest $request
     *
     * @return WearOrgHonorResponse
     */
    public function wearOrgHonor($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new WearOrgHonorHeaders([]);

        return $this->wearOrgHonorWithOptions($request, $headers, $runtime);
    }
}
