<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddEventRecordPlanDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddEventRecordPlanDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceDeviceGroupRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceDeviceGroupResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceDeviceToDeviceGroupRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceDeviceToDeviceGroupResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceUserGroupAndDeviceGroupRelationRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceUserGroupAndDeviceGroupRelationResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceUserGroupRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceUserGroupResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceUserPictureRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceUserPictureResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceUserRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceUserResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceUserToUserGroupRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceUserToUserGroupResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddRecordPlanDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddRecordPlanDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\BindAIPlanWithDevicesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\BindAIPlanWithDevicesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\BindPictureSearchAppWithDevicesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\BindPictureSearchAppWithDevicesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CheckFaceUserDoExistOnDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CheckFaceUserDoExistOnDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ClearFaceDeviceDBRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ClearFaceDeviceDBResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ConfigAIActionRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ConfigAIActionResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateAIAppRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateAIAppResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateAIPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateAIPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateAlgorithmRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateAlgorithmResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateDevicePurifyJobByPlanIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateDevicePurifyJobByPlanIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateDevicePurifyJobRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateDevicePurifyJobResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateDevicePurifyPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateDevicePurifyPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateEventRecordPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateEventRecordPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateModelRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateModelResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreatePictureSearchAppRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreatePictureSearchAppResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateRecordPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateRecordPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateTimeTemplateRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateTimeTemplateResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteAlgorithmRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteAlgorithmResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteEventRecordPlanDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteEventRecordPlanDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteEventRecordPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteEventRecordPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteFaceDeviceGroupRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteFaceDeviceGroupResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteFaceUserGroupAndDeviceGroupRelationRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteFaceUserGroupAndDeviceGroupRelationResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteFaceUserGroupRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteFaceUserGroupResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteFaceUserPictureRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteFaceUserPictureResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteFaceUserRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteFaceUserResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteModelRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteModelResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteRecordPlanDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteRecordPlanDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteRecordPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteRecordPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteTimeTemplateRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteTimeTemplateResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeployModelBatchRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeployModelBatchResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DetectUserFaceByUrlRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DetectUserFaceByUrlResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIActionConfigRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIActionConfigResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIActionRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIActionResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIAppRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIAppResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIJobRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIJobResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAlgorithmDetailByIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAlgorithmDetailByIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAlgorithmDetailByNameRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAlgorithmDetailByNameResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetDevicePurifyJobByJobIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetDevicePurifyJobByJobIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetModelDetailByIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetModelDetailByIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetModelDetailRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetModelDetailResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetModelOssPolicyRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetModelOssPolicyResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetPictureInfoWithVectorIdsRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetPictureInfoWithVectorIdsResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetPictureWithVectorIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetPictureWithVectorIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ListAlgorithmsByPageRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ListAlgorithmsByPageResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ListDeployTaskByModelIdAndDevicesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ListDeployTaskByModelIdAndDevicesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ListDeployTaskByPageRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ListDeployTaskByPageResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ListModelsByPageRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ListModelsByPageResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ListModelVersionsByPageRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ListModelVersionsByPageResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\PictureSearchPictureRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\PictureSearchPictureResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIActionRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIActionResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIAppRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIAppResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIJobsRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIJobsResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIPlanTemplatesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIPlanTemplatesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventPictureRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventPictureResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventRecordRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventRecordResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceFileVodRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceFileVodResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureFileRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureFileResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureLifeCycleRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureLifeCycleResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePurifyJobsRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePurifyJobsResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePurifyPlanByPlanIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePurifyPlanByPlanIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePurifyPlansRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePurifyPlansResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceRecordLifeCycleRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceRecordLifeCycleResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceVodUrlRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceVodUrlResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryEventRecordPlanDetailRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryEventRecordPlanDetailResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryEventRecordPlanDeviceByDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryEventRecordPlanDeviceByDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryEventRecordPlanDeviceByPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryEventRecordPlanDeviceByPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryEventRecordPlansRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryEventRecordPlansResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllDeviceGroupRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllDeviceGroupResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllUserGroupAndDeviceGroupRelationRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllUserGroupAndDeviceGroupRelationResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllUserGroupRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllUserGroupResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllUserIdsByGroupIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceAllUserIdsByGroupIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceCustomUserIdByUserIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceCustomUserIdByUserIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceDeviceGroupsByDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceDeviceGroupsByDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserGroupAndDeviceGroupRelationRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserGroupAndDeviceGroupRelationResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserGroupRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserGroupResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserIdByCustomUserIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserIdByCustomUserIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryIotIdsByAIPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryIotIdsByAIPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLiveStreamingRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLiveStreamingResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryMonthRecordRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryMonthRecordResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureFilesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureFilesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchAiboxesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchAiboxesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchAppRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchAppResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchDevicesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchDevicesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordByRecordIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordByRecordIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordPlanDetailRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordPlanDetailResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordPlanDeviceByDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordPlanDeviceByDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordPlanDeviceByPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordPlanDeviceByPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordPlansRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordPlansResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordUrlRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordUrlResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryStandardAIAppTemplatesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryStandardAIAppTemplatesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryTimeTemplateDetailRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryTimeTemplateDetailResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryTimeTemplateRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryTimeTemplateResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryVoiceIntercomRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryVoiceIntercomResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\RemoveAIAppRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\RemoveAIAppResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\RemoveAIPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\RemoveAIPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\RemoveDevicePurifyPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\RemoveDevicePurifyPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\RemoveFaceDeviceFromDeviceGroupRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\RemoveFaceDeviceFromDeviceGroupResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\RemoveFaceUserFromUserGroupRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\RemoveFaceUserFromUserGroupResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\SetDevicePictureLifeCycleRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\SetDevicePictureLifeCycleResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\SetDeviceRecordLifeCycleRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\SetDeviceRecordLifeCycleResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\StopLiveStreamingRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\StopLiveStreamingResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\StopTriggeredRecordRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\StopTriggeredRecordResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\TriggerCapturePictureRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\TriggerCapturePictureResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\TriggerRecordRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\TriggerRecordResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UnbindAIPlanWithDevicesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UnbindAIPlanWithDevicesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UnbindPictureSearchAppWithDevicesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UnbindPictureSearchAppWithDevicesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateAIAppRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateAIAppResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateAIPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateAIPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateDevicePurifyPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateDevicePurifyPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateEventRecordPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateEventRecordPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateFaceUserGroupAndDeviceGroupRelationRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateFaceUserGroupAndDeviceGroupRelationResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateFaceUserRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateFaceUserResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateModelRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateModelResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateRecordPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateRecordPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateTimeTemplateRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateTimeTemplateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Linkvisual extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'linkvisual.aliyuncs.com',
            'ap-northeast-2-pop'          => 'linkvisual.aliyuncs.com',
            'ap-south-1'                  => 'linkvisual.aliyuncs.com',
            'ap-southeast-1'              => 'linkvisual.aliyuncs.com',
            'ap-southeast-2'              => 'linkvisual.aliyuncs.com',
            'ap-southeast-3'              => 'linkvisual.aliyuncs.com',
            'ap-southeast-5'              => 'linkvisual.aliyuncs.com',
            'cn-beijing'                  => 'linkvisual.aliyuncs.com',
            'cn-beijing-finance-1'        => 'linkvisual.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'linkvisual.aliyuncs.com',
            'cn-beijing-gov-1'            => 'linkvisual.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'linkvisual.aliyuncs.com',
            'cn-chengdu'                  => 'linkvisual.aliyuncs.com',
            'cn-edge-1'                   => 'linkvisual.aliyuncs.com',
            'cn-fujian'                   => 'linkvisual.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-finance'         => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'linkvisual.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'linkvisual.aliyuncs.com',
            'cn-hongkong'                 => 'linkvisual.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'linkvisual.aliyuncs.com',
            'cn-huhehaote'                => 'linkvisual.aliyuncs.com',
            'cn-north-2-gov-1'            => 'linkvisual.aliyuncs.com',
            'cn-qingdao'                  => 'linkvisual.aliyuncs.com',
            'cn-qingdao-nebula'           => 'linkvisual.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'linkvisual.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'linkvisual.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'linkvisual.aliyuncs.com',
            'cn-shanghai-inner'           => 'linkvisual.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'linkvisual.aliyuncs.com',
            'cn-shenzhen'                 => 'linkvisual.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'linkvisual.aliyuncs.com',
            'cn-shenzhen-inner'           => 'linkvisual.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'linkvisual.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'linkvisual.aliyuncs.com',
            'cn-wuhan'                    => 'linkvisual.aliyuncs.com',
            'cn-yushanfang'               => 'linkvisual.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'linkvisual.aliyuncs.com',
            'cn-zhangjiakou'              => 'linkvisual.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'linkvisual.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'linkvisual.aliyuncs.com',
            'eu-central-1'                => 'linkvisual.aliyuncs.com',
            'eu-west-1'                   => 'linkvisual.aliyuncs.com',
            'eu-west-1-oxs'               => 'linkvisual.aliyuncs.com',
            'me-east-1'                   => 'linkvisual.aliyuncs.com',
            'rus-west-1-pop'              => 'linkvisual.aliyuncs.com',
            'us-east-1'                   => 'linkvisual.aliyuncs.com',
            'us-west-1'                   => 'linkvisual.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('linkvisual', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddEventRecordPlanDeviceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddEventRecordPlanDeviceResponse
     */
    public function addEventRecordPlanDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddEventRecordPlanDeviceResponse::fromMap($this->doRPCRequest('AddEventRecordPlanDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddEventRecordPlanDeviceRequest $request
     *
     * @return AddEventRecordPlanDeviceResponse
     */
    public function addEventRecordPlanDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEventRecordPlanDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceDeviceGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddFaceDeviceGroupResponse
     */
    public function addFaceDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddFaceDeviceGroupResponse::fromMap($this->doRPCRequest('AddFaceDeviceGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddFaceDeviceGroupRequest $request
     *
     * @return AddFaceDeviceGroupResponse
     */
    public function addFaceDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceDeviceToDeviceGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddFaceDeviceToDeviceGroupResponse
     */
    public function addFaceDeviceToDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddFaceDeviceToDeviceGroupResponse::fromMap($this->doRPCRequest('AddFaceDeviceToDeviceGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddFaceDeviceToDeviceGroupRequest $request
     *
     * @return AddFaceDeviceToDeviceGroupResponse
     */
    public function addFaceDeviceToDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceDeviceToDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceUserRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddFaceUserResponse
     */
    public function addFaceUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddFaceUserResponse::fromMap($this->doRPCRequest('AddFaceUser', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddFaceUserRequest $request
     *
     * @return AddFaceUserResponse
     */
    public function addFaceUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceUserWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceUserGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddFaceUserGroupResponse
     */
    public function addFaceUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddFaceUserGroupResponse::fromMap($this->doRPCRequest('AddFaceUserGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddFaceUserGroupRequest $request
     *
     * @return AddFaceUserGroupResponse
     */
    public function addFaceUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceUserGroupAndDeviceGroupRelationRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return AddFaceUserGroupAndDeviceGroupRelationResponse
     */
    public function addFaceUserGroupAndDeviceGroupRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddFaceUserGroupAndDeviceGroupRelationResponse::fromMap($this->doRPCRequest('AddFaceUserGroupAndDeviceGroupRelation', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddFaceUserGroupAndDeviceGroupRelationRequest $request
     *
     * @return AddFaceUserGroupAndDeviceGroupRelationResponse
     */
    public function addFaceUserGroupAndDeviceGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceUserGroupAndDeviceGroupRelationWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceUserPictureRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddFaceUserPictureResponse
     */
    public function addFaceUserPictureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddFaceUserPictureResponse::fromMap($this->doRPCRequest('AddFaceUserPicture', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddFaceUserPictureRequest $request
     *
     * @return AddFaceUserPictureResponse
     */
    public function addFaceUserPicture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceUserPictureWithOptions($request, $runtime);
    }

    /**
     * @param AddFaceUserToUserGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddFaceUserToUserGroupResponse
     */
    public function addFaceUserToUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddFaceUserToUserGroupResponse::fromMap($this->doRPCRequest('AddFaceUserToUserGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddFaceUserToUserGroupRequest $request
     *
     * @return AddFaceUserToUserGroupResponse
     */
    public function addFaceUserToUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFaceUserToUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddRecordPlanDeviceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddRecordPlanDeviceResponse
     */
    public function addRecordPlanDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddRecordPlanDeviceResponse::fromMap($this->doRPCRequest('AddRecordPlanDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddRecordPlanDeviceRequest $request
     *
     * @return AddRecordPlanDeviceResponse
     */
    public function addRecordPlanDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRecordPlanDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BindAIPlanWithDevicesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return BindAIPlanWithDevicesResponse
     */
    public function bindAIPlanWithDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindAIPlanWithDevicesResponse::fromMap($this->doRPCRequest('BindAIPlanWithDevices', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindAIPlanWithDevicesRequest $request
     *
     * @return BindAIPlanWithDevicesResponse
     */
    public function bindAIPlanWithDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAIPlanWithDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BindPictureSearchAppWithDevicesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return BindPictureSearchAppWithDevicesResponse
     */
    public function bindPictureSearchAppWithDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindPictureSearchAppWithDevicesResponse::fromMap($this->doRPCRequest('BindPictureSearchAppWithDevices', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindPictureSearchAppWithDevicesRequest $request
     *
     * @return BindPictureSearchAppWithDevicesResponse
     */
    public function bindPictureSearchAppWithDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindPictureSearchAppWithDevicesWithOptions($request, $runtime);
    }

    /**
     * @param CheckFaceUserDoExistOnDeviceRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CheckFaceUserDoExistOnDeviceResponse
     */
    public function checkFaceUserDoExistOnDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckFaceUserDoExistOnDeviceResponse::fromMap($this->doRPCRequest('CheckFaceUserDoExistOnDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckFaceUserDoExistOnDeviceRequest $request
     *
     * @return CheckFaceUserDoExistOnDeviceResponse
     */
    public function checkFaceUserDoExistOnDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkFaceUserDoExistOnDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ClearFaceDeviceDBRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ClearFaceDeviceDBResponse
     */
    public function clearFaceDeviceDBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClearFaceDeviceDBResponse::fromMap($this->doRPCRequest('ClearFaceDeviceDB', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ClearFaceDeviceDBRequest $request
     *
     * @return ClearFaceDeviceDBResponse
     */
    public function clearFaceDeviceDB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearFaceDeviceDBWithOptions($request, $runtime);
    }

    /**
     * @param ConfigAIActionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ConfigAIActionResponse
     */
    public function configAIActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigAIActionResponse::fromMap($this->doRPCRequest('ConfigAIAction', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigAIActionRequest $request
     *
     * @return ConfigAIActionResponse
     */
    public function configAIAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configAIActionWithOptions($request, $runtime);
    }

    /**
     * @param CreateAIAppRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAIAppResponse
     */
    public function createAIAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAIAppResponse::fromMap($this->doRPCRequest('CreateAIApp', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAIAppRequest $request
     *
     * @return CreateAIAppResponse
     */
    public function createAIApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAIAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateAIPlanRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateAIPlanResponse
     */
    public function createAIPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAIPlanResponse::fromMap($this->doRPCRequest('CreateAIPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAIPlanRequest $request
     *
     * @return CreateAIPlanResponse
     */
    public function createAIPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAIPlanWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlgorithmRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateAlgorithmResponse
     */
    public function createAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAlgorithmResponse::fromMap($this->doRPCRequest('CreateAlgorithm', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAlgorithmRequest $request
     *
     * @return CreateAlgorithmResponse
     */
    public function createAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param CreateDevicePurifyJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDevicePurifyJobResponse
     */
    public function createDevicePurifyJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDevicePurifyJobResponse::fromMap($this->doRPCRequest('CreateDevicePurifyJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDevicePurifyJobRequest $request
     *
     * @return CreateDevicePurifyJobResponse
     */
    public function createDevicePurifyJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDevicePurifyJobWithOptions($request, $runtime);
    }

    /**
     * @param CreateDevicePurifyJobByPlanIdRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateDevicePurifyJobByPlanIdResponse
     */
    public function createDevicePurifyJobByPlanIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDevicePurifyJobByPlanIdResponse::fromMap($this->doRPCRequest('CreateDevicePurifyJobByPlanId', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDevicePurifyJobByPlanIdRequest $request
     *
     * @return CreateDevicePurifyJobByPlanIdResponse
     */
    public function createDevicePurifyJobByPlanId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDevicePurifyJobByPlanIdWithOptions($request, $runtime);
    }

    /**
     * @param CreateDevicePurifyPlanRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDevicePurifyPlanResponse
     */
    public function createDevicePurifyPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDevicePurifyPlanResponse::fromMap($this->doRPCRequest('CreateDevicePurifyPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDevicePurifyPlanRequest $request
     *
     * @return CreateDevicePurifyPlanResponse
     */
    public function createDevicePurifyPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDevicePurifyPlanWithOptions($request, $runtime);
    }

    /**
     * @param CreateEventRecordPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateEventRecordPlanResponse
     */
    public function createEventRecordPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEventRecordPlanResponse::fromMap($this->doRPCRequest('CreateEventRecordPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateEventRecordPlanRequest $request
     *
     * @return CreateEventRecordPlanResponse
     */
    public function createEventRecordPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventRecordPlanWithOptions($request, $runtime);
    }

    /**
     * @param CreateModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateModelResponse::fromMap($this->doRPCRequest('CreateModel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateModelRequest $request
     *
     * @return CreateModelResponse
     */
    public function createModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createModelWithOptions($request, $runtime);
    }

    /**
     * @param CreatePictureSearchAppRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePictureSearchAppResponse
     */
    public function createPictureSearchAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePictureSearchAppResponse::fromMap($this->doRPCRequest('CreatePictureSearchApp', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePictureSearchAppRequest $request
     *
     * @return CreatePictureSearchAppResponse
     */
    public function createPictureSearchApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPictureSearchAppWithOptions($request, $runtime);
    }

    /**
     * @param CreateRecordPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateRecordPlanResponse
     */
    public function createRecordPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRecordPlanResponse::fromMap($this->doRPCRequest('CreateRecordPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRecordPlanRequest $request
     *
     * @return CreateRecordPlanResponse
     */
    public function createRecordPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRecordPlanWithOptions($request, $runtime);
    }

    /**
     * @param CreateTimeTemplateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateTimeTemplateResponse
     */
    public function createTimeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTimeTemplateResponse::fromMap($this->doRPCRequest('CreateTimeTemplate', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTimeTemplateRequest $request
     *
     * @return CreateTimeTemplateResponse
     */
    public function createTimeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTimeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlgorithmRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteAlgorithmResponse
     */
    public function deleteAlgorithmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAlgorithmResponse::fromMap($this->doRPCRequest('DeleteAlgorithm', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAlgorithmRequest $request
     *
     * @return DeleteAlgorithmResponse
     */
    public function deleteAlgorithm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlgorithmWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEventRecordPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteEventRecordPlanResponse
     */
    public function deleteEventRecordPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEventRecordPlanResponse::fromMap($this->doRPCRequest('DeleteEventRecordPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEventRecordPlanRequest $request
     *
     * @return DeleteEventRecordPlanResponse
     */
    public function deleteEventRecordPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventRecordPlanWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEventRecordPlanDeviceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteEventRecordPlanDeviceResponse
     */
    public function deleteEventRecordPlanDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEventRecordPlanDeviceResponse::fromMap($this->doRPCRequest('DeleteEventRecordPlanDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEventRecordPlanDeviceRequest $request
     *
     * @return DeleteEventRecordPlanDeviceResponse
     */
    public function deleteEventRecordPlanDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventRecordPlanDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceDeviceGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteFaceDeviceGroupResponse
     */
    public function deleteFaceDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFaceDeviceGroupResponse::fromMap($this->doRPCRequest('DeleteFaceDeviceGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFaceDeviceGroupRequest $request
     *
     * @return DeleteFaceDeviceGroupResponse
     */
    public function deleteFaceDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceUserRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteFaceUserResponse
     */
    public function deleteFaceUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFaceUserResponse::fromMap($this->doRPCRequest('DeleteFaceUser', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFaceUserRequest $request
     *
     * @return DeleteFaceUserResponse
     */
    public function deleteFaceUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceUserWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceUserGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteFaceUserGroupResponse
     */
    public function deleteFaceUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFaceUserGroupResponse::fromMap($this->doRPCRequest('DeleteFaceUserGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFaceUserGroupRequest $request
     *
     * @return DeleteFaceUserGroupResponse
     */
    public function deleteFaceUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceUserGroupAndDeviceGroupRelationRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DeleteFaceUserGroupAndDeviceGroupRelationResponse
     */
    public function deleteFaceUserGroupAndDeviceGroupRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFaceUserGroupAndDeviceGroupRelationResponse::fromMap($this->doRPCRequest('DeleteFaceUserGroupAndDeviceGroupRelation', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFaceUserGroupAndDeviceGroupRelationRequest $request
     *
     * @return DeleteFaceUserGroupAndDeviceGroupRelationResponse
     */
    public function deleteFaceUserGroupAndDeviceGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceUserGroupAndDeviceGroupRelationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFaceUserPictureRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteFaceUserPictureResponse
     */
    public function deleteFaceUserPictureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFaceUserPictureResponse::fromMap($this->doRPCRequest('DeleteFaceUserPicture', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFaceUserPictureRequest $request
     *
     * @return DeleteFaceUserPictureResponse
     */
    public function deleteFaceUserPicture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFaceUserPictureWithOptions($request, $runtime);
    }

    /**
     * @param DeleteModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteModelResponse::fromMap($this->doRPCRequest('DeleteModel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteModelRequest $request
     *
     * @return DeleteModelResponse
     */
    public function deleteModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteModelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRecordPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteRecordPlanResponse
     */
    public function deleteRecordPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRecordPlanResponse::fromMap($this->doRPCRequest('DeleteRecordPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRecordPlanRequest $request
     *
     * @return DeleteRecordPlanResponse
     */
    public function deleteRecordPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecordPlanWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRecordPlanDeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteRecordPlanDeviceResponse
     */
    public function deleteRecordPlanDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRecordPlanDeviceResponse::fromMap($this->doRPCRequest('DeleteRecordPlanDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRecordPlanDeviceRequest $request
     *
     * @return DeleteRecordPlanDeviceResponse
     */
    public function deleteRecordPlanDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecordPlanDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTimeTemplateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteTimeTemplateResponse
     */
    public function deleteTimeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTimeTemplateResponse::fromMap($this->doRPCRequest('DeleteTimeTemplate', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteTimeTemplateRequest $request
     *
     * @return DeleteTimeTemplateResponse
     */
    public function deleteTimeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTimeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeployModelBatchRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeployModelBatchResponse
     */
    public function deployModelBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeployModelBatchResponse::fromMap($this->doRPCRequest('DeployModelBatch', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeployModelBatchRequest $request
     *
     * @return DeployModelBatchResponse
     */
    public function deployModelBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployModelBatchWithOptions($request, $runtime);
    }

    /**
     * @param DetectUserFaceByUrlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetectUserFaceByUrlResponse
     */
    public function detectUserFaceByUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetectUserFaceByUrlResponse::fromMap($this->doRPCRequest('DetectUserFaceByUrl', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetectUserFaceByUrlRequest $request
     *
     * @return DetectUserFaceByUrlResponse
     */
    public function detectUserFaceByUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectUserFaceByUrlWithOptions($request, $runtime);
    }

    /**
     * @param GetAIActionRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetAIActionResponse
     */
    public function getAIActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAIActionResponse::fromMap($this->doRPCRequest('GetAIAction', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAIActionRequest $request
     *
     * @return GetAIActionResponse
     */
    public function getAIAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIActionWithOptions($request, $runtime);
    }

    /**
     * @param GetAIActionConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAIActionConfigResponse
     */
    public function getAIActionConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAIActionConfigResponse::fromMap($this->doRPCRequest('GetAIActionConfig', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAIActionConfigRequest $request
     *
     * @return GetAIActionConfigResponse
     */
    public function getAIActionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIActionConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetAIAppRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetAIAppResponse
     */
    public function getAIAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAIAppResponse::fromMap($this->doRPCRequest('GetAIApp', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAIAppRequest $request
     *
     * @return GetAIAppResponse
     */
    public function getAIApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIAppWithOptions($request, $runtime);
    }

    /**
     * @param GetAIJobRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetAIJobResponse
     */
    public function getAIJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAIJobResponse::fromMap($this->doRPCRequest('GetAIJob', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAIJobRequest $request
     *
     * @return GetAIJobResponse
     */
    public function getAIJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIJobWithOptions($request, $runtime);
    }

    /**
     * @param GetAIPlanRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetAIPlanResponse
     */
    public function getAIPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAIPlanResponse::fromMap($this->doRPCRequest('GetAIPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAIPlanRequest $request
     *
     * @return GetAIPlanResponse
     */
    public function getAIPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIPlanWithOptions($request, $runtime);
    }

    /**
     * @param GetAlgorithmDetailByIdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAlgorithmDetailByIdResponse
     */
    public function getAlgorithmDetailByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAlgorithmDetailByIdResponse::fromMap($this->doRPCRequest('GetAlgorithmDetailById', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAlgorithmDetailByIdRequest $request
     *
     * @return GetAlgorithmDetailByIdResponse
     */
    public function getAlgorithmDetailById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlgorithmDetailByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetAlgorithmDetailByNameRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetAlgorithmDetailByNameResponse
     */
    public function getAlgorithmDetailByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAlgorithmDetailByNameResponse::fromMap($this->doRPCRequest('GetAlgorithmDetailByName', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAlgorithmDetailByNameRequest $request
     *
     * @return GetAlgorithmDetailByNameResponse
     */
    public function getAlgorithmDetailByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAlgorithmDetailByNameWithOptions($request, $runtime);
    }

    /**
     * @param GetDevicePurifyJobByJobIdRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetDevicePurifyJobByJobIdResponse
     */
    public function getDevicePurifyJobByJobIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetDevicePurifyJobByJobIdResponse::fromMap($this->doRPCRequest('GetDevicePurifyJobByJobId', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDevicePurifyJobByJobIdRequest $request
     *
     * @return GetDevicePurifyJobByJobIdResponse
     */
    public function getDevicePurifyJobByJobId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDevicePurifyJobByJobIdWithOptions($request, $runtime);
    }

    /**
     * @param GetModelDetailRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetModelDetailResponse
     */
    public function getModelDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetModelDetailResponse::fromMap($this->doRPCRequest('GetModelDetail', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetModelDetailRequest $request
     *
     * @return GetModelDetailResponse
     */
    public function getModelDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetModelDetailByIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetModelDetailByIdResponse
     */
    public function getModelDetailByIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetModelDetailByIdResponse::fromMap($this->doRPCRequest('GetModelDetailById', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetModelDetailByIdRequest $request
     *
     * @return GetModelDetailByIdResponse
     */
    public function getModelDetailById($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelDetailByIdWithOptions($request, $runtime);
    }

    /**
     * @param GetModelOssPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetModelOssPolicyResponse
     */
    public function getModelOssPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetModelOssPolicyResponse::fromMap($this->doRPCRequest('GetModelOssPolicy', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetModelOssPolicyRequest $request
     *
     * @return GetModelOssPolicyResponse
     */
    public function getModelOssPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getModelOssPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetPictureInfoWithVectorIdsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetPictureInfoWithVectorIdsResponse
     */
    public function getPictureInfoWithVectorIdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPictureInfoWithVectorIdsResponse::fromMap($this->doRPCRequest('GetPictureInfoWithVectorIds', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPictureInfoWithVectorIdsRequest $request
     *
     * @return GetPictureInfoWithVectorIdsResponse
     */
    public function getPictureInfoWithVectorIds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPictureInfoWithVectorIdsWithOptions($request, $runtime);
    }

    /**
     * @param GetPictureWithVectorIdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetPictureWithVectorIdResponse
     */
    public function getPictureWithVectorIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPictureWithVectorIdResponse::fromMap($this->doRPCRequest('GetPictureWithVectorId', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPictureWithVectorIdRequest $request
     *
     * @return GetPictureWithVectorIdResponse
     */
    public function getPictureWithVectorId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPictureWithVectorIdWithOptions($request, $runtime);
    }

    /**
     * @param ListAlgorithmsByPageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListAlgorithmsByPageResponse
     */
    public function listAlgorithmsByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAlgorithmsByPageResponse::fromMap($this->doRPCRequest('ListAlgorithmsByPage', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAlgorithmsByPageRequest $request
     *
     * @return ListAlgorithmsByPageResponse
     */
    public function listAlgorithmsByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlgorithmsByPageWithOptions($request, $runtime);
    }

    /**
     * @param ListDeployTaskByModelIdAndDevicesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ListDeployTaskByModelIdAndDevicesResponse
     */
    public function listDeployTaskByModelIdAndDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDeployTaskByModelIdAndDevicesResponse::fromMap($this->doRPCRequest('ListDeployTaskByModelIdAndDevices', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeployTaskByModelIdAndDevicesRequest $request
     *
     * @return ListDeployTaskByModelIdAndDevicesResponse
     */
    public function listDeployTaskByModelIdAndDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeployTaskByModelIdAndDevicesWithOptions($request, $runtime);
    }

    /**
     * @param ListDeployTaskByPageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDeployTaskByPageResponse
     */
    public function listDeployTaskByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDeployTaskByPageResponse::fromMap($this->doRPCRequest('ListDeployTaskByPage', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeployTaskByPageRequest $request
     *
     * @return ListDeployTaskByPageResponse
     */
    public function listDeployTaskByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeployTaskByPageWithOptions($request, $runtime);
    }

    /**
     * @param ListModelsByPageRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListModelsByPageResponse
     */
    public function listModelsByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListModelsByPageResponse::fromMap($this->doRPCRequest('ListModelsByPage', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListModelsByPageRequest $request
     *
     * @return ListModelsByPageResponse
     */
    public function listModelsByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelsByPageWithOptions($request, $runtime);
    }

    /**
     * @param ListModelVersionsByPageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListModelVersionsByPageResponse
     */
    public function listModelVersionsByPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListModelVersionsByPageResponse::fromMap($this->doRPCRequest('ListModelVersionsByPage', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListModelVersionsByPageRequest $request
     *
     * @return ListModelVersionsByPageResponse
     */
    public function listModelVersionsByPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listModelVersionsByPageWithOptions($request, $runtime);
    }

    /**
     * @param PictureSearchPictureRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PictureSearchPictureResponse
     */
    public function pictureSearchPictureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PictureSearchPictureResponse::fromMap($this->doRPCRequest('PictureSearchPicture', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PictureSearchPictureRequest $request
     *
     * @return PictureSearchPictureResponse
     */
    public function pictureSearchPicture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pictureSearchPictureWithOptions($request, $runtime);
    }

    /**
     * @param QueryAIActionRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryAIActionResponse
     */
    public function queryAIActionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAIActionResponse::fromMap($this->doRPCRequest('QueryAIAction', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAIActionRequest $request
     *
     * @return QueryAIActionResponse
     */
    public function queryAIAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAIActionWithOptions($request, $runtime);
    }

    /**
     * @param QueryAIAppRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return QueryAIAppResponse
     */
    public function queryAIAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAIAppResponse::fromMap($this->doRPCRequest('QueryAIApp', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAIAppRequest $request
     *
     * @return QueryAIAppResponse
     */
    public function queryAIApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAIAppWithOptions($request, $runtime);
    }

    /**
     * @param QueryAIJobsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryAIJobsResponse
     */
    public function queryAIJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAIJobsResponse::fromMap($this->doRPCRequest('QueryAIJobs', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAIJobsRequest $request
     *
     * @return QueryAIJobsResponse
     */
    public function queryAIJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAIJobsWithOptions($request, $runtime);
    }

    /**
     * @param QueryAIPlanRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryAIPlanResponse
     */
    public function queryAIPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAIPlanResponse::fromMap($this->doRPCRequest('QueryAIPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAIPlanRequest $request
     *
     * @return QueryAIPlanResponse
     */
    public function queryAIPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAIPlanWithOptions($request, $runtime);
    }

    /**
     * @param QueryAIPlanTemplatesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryAIPlanTemplatesResponse
     */
    public function queryAIPlanTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryAIPlanTemplatesResponse::fromMap($this->doRPCRequest('QueryAIPlanTemplates', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAIPlanTemplatesRequest $request
     *
     * @return QueryAIPlanTemplatesResponse
     */
    public function queryAIPlanTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAIPlanTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceEventRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDeviceEventResponse
     */
    public function queryDeviceEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceEventResponse::fromMap($this->doRPCRequest('QueryDeviceEvent', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDeviceEventRequest $request
     *
     * @return QueryDeviceEventResponse
     */
    public function queryDeviceEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceEventWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceEventPictureRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDeviceEventPictureResponse
     */
    public function queryDeviceEventPictureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceEventPictureResponse::fromMap($this->doRPCRequest('QueryDeviceEventPicture', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDeviceEventPictureRequest $request
     *
     * @return QueryDeviceEventPictureResponse
     */
    public function queryDeviceEventPicture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceEventPictureWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceEventRecordRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDeviceEventRecordResponse
     */
    public function queryDeviceEventRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceEventRecordResponse::fromMap($this->doRPCRequest('QueryDeviceEventRecord', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDeviceEventRecordRequest $request
     *
     * @return QueryDeviceEventRecordResponse
     */
    public function queryDeviceEventRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceEventRecordWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceFileVodRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryDeviceFileVodResponse
     */
    public function queryDeviceFileVodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceFileVodResponse::fromMap($this->doRPCRequest('QueryDeviceFileVod', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDeviceFileVodRequest $request
     *
     * @return QueryDeviceFileVodResponse
     */
    public function queryDeviceFileVod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceFileVodWithOptions($request, $runtime);
    }

    /**
     * @param QueryDevicePictureFileRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDevicePictureFileResponse
     */
    public function queryDevicePictureFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDevicePictureFileResponse::fromMap($this->doRPCRequest('QueryDevicePictureFile', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDevicePictureFileRequest $request
     *
     * @return QueryDevicePictureFileResponse
     */
    public function queryDevicePictureFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicePictureFileWithOptions($request, $runtime);
    }

    /**
     * @param QueryDevicePictureLifeCycleRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryDevicePictureLifeCycleResponse
     */
    public function queryDevicePictureLifeCycleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDevicePictureLifeCycleResponse::fromMap($this->doRPCRequest('QueryDevicePictureLifeCycle', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDevicePictureLifeCycleRequest $request
     *
     * @return QueryDevicePictureLifeCycleResponse
     */
    public function queryDevicePictureLifeCycle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicePictureLifeCycleWithOptions($request, $runtime);
    }

    /**
     * @param QueryDevicePurifyJobsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryDevicePurifyJobsResponse
     */
    public function queryDevicePurifyJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDevicePurifyJobsResponse::fromMap($this->doRPCRequest('QueryDevicePurifyJobs', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDevicePurifyJobsRequest $request
     *
     * @return QueryDevicePurifyJobsResponse
     */
    public function queryDevicePurifyJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicePurifyJobsWithOptions($request, $runtime);
    }

    /**
     * @param QueryDevicePurifyPlanByPlanIdRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryDevicePurifyPlanByPlanIdResponse
     */
    public function queryDevicePurifyPlanByPlanIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDevicePurifyPlanByPlanIdResponse::fromMap($this->doRPCRequest('QueryDevicePurifyPlanByPlanId', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDevicePurifyPlanByPlanIdRequest $request
     *
     * @return QueryDevicePurifyPlanByPlanIdResponse
     */
    public function queryDevicePurifyPlanByPlanId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicePurifyPlanByPlanIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryDevicePurifyPlansRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryDevicePurifyPlansResponse
     */
    public function queryDevicePurifyPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDevicePurifyPlansResponse::fromMap($this->doRPCRequest('QueryDevicePurifyPlans', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDevicePurifyPlansRequest $request
     *
     * @return QueryDevicePurifyPlansResponse
     */
    public function queryDevicePurifyPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicePurifyPlansWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceRecordLifeCycleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryDeviceRecordLifeCycleResponse
     */
    public function queryDeviceRecordLifeCycleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceRecordLifeCycleResponse::fromMap($this->doRPCRequest('QueryDeviceRecordLifeCycle', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDeviceRecordLifeCycleRequest $request
     *
     * @return QueryDeviceRecordLifeCycleResponse
     */
    public function queryDeviceRecordLifeCycle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceRecordLifeCycleWithOptions($request, $runtime);
    }

    /**
     * @param QueryDeviceVodUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryDeviceVodUrlResponse
     */
    public function queryDeviceVodUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryDeviceVodUrlResponse::fromMap($this->doRPCRequest('QueryDeviceVodUrl', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryDeviceVodUrlRequest $request
     *
     * @return QueryDeviceVodUrlResponse
     */
    public function queryDeviceVodUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceVodUrlWithOptions($request, $runtime);
    }

    /**
     * @param QueryEventRecordPlanDetailRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryEventRecordPlanDetailResponse
     */
    public function queryEventRecordPlanDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEventRecordPlanDetailResponse::fromMap($this->doRPCRequest('QueryEventRecordPlanDetail', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryEventRecordPlanDetailRequest $request
     *
     * @return QueryEventRecordPlanDetailResponse
     */
    public function queryEventRecordPlanDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEventRecordPlanDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryEventRecordPlanDeviceByDeviceRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryEventRecordPlanDeviceByDeviceResponse
     */
    public function queryEventRecordPlanDeviceByDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEventRecordPlanDeviceByDeviceResponse::fromMap($this->doRPCRequest('QueryEventRecordPlanDeviceByDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryEventRecordPlanDeviceByDeviceRequest $request
     *
     * @return QueryEventRecordPlanDeviceByDeviceResponse
     */
    public function queryEventRecordPlanDeviceByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEventRecordPlanDeviceByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param QueryEventRecordPlanDeviceByPlanRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryEventRecordPlanDeviceByPlanResponse
     */
    public function queryEventRecordPlanDeviceByPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEventRecordPlanDeviceByPlanResponse::fromMap($this->doRPCRequest('QueryEventRecordPlanDeviceByPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryEventRecordPlanDeviceByPlanRequest $request
     *
     * @return QueryEventRecordPlanDeviceByPlanResponse
     */
    public function queryEventRecordPlanDeviceByPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEventRecordPlanDeviceByPlanWithOptions($request, $runtime);
    }

    /**
     * @param QueryEventRecordPlansRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryEventRecordPlansResponse
     */
    public function queryEventRecordPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryEventRecordPlansResponse::fromMap($this->doRPCRequest('QueryEventRecordPlans', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryEventRecordPlansRequest $request
     *
     * @return QueryEventRecordPlansResponse
     */
    public function queryEventRecordPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEventRecordPlansWithOptions($request, $runtime);
    }

    /**
     * @param QueryFaceAllDeviceGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryFaceAllDeviceGroupResponse
     */
    public function queryFaceAllDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFaceAllDeviceGroupResponse::fromMap($this->doRPCRequest('QueryFaceAllDeviceGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFaceAllDeviceGroupRequest $request
     *
     * @return QueryFaceAllDeviceGroupResponse
     */
    public function queryFaceAllDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceAllDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param QueryFaceAllUserGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryFaceAllUserGroupResponse
     */
    public function queryFaceAllUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFaceAllUserGroupResponse::fromMap($this->doRPCRequest('QueryFaceAllUserGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFaceAllUserGroupRequest $request
     *
     * @return QueryFaceAllUserGroupResponse
     */
    public function queryFaceAllUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceAllUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param QueryFaceAllUserGroupAndDeviceGroupRelationRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return QueryFaceAllUserGroupAndDeviceGroupRelationResponse
     */
    public function queryFaceAllUserGroupAndDeviceGroupRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFaceAllUserGroupAndDeviceGroupRelationResponse::fromMap($this->doRPCRequest('QueryFaceAllUserGroupAndDeviceGroupRelation', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFaceAllUserGroupAndDeviceGroupRelationRequest $request
     *
     * @return QueryFaceAllUserGroupAndDeviceGroupRelationResponse
     */
    public function queryFaceAllUserGroupAndDeviceGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceAllUserGroupAndDeviceGroupRelationWithOptions($request, $runtime);
    }

    /**
     * @param QueryFaceAllUserIdsByGroupIdRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryFaceAllUserIdsByGroupIdResponse
     */
    public function queryFaceAllUserIdsByGroupIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFaceAllUserIdsByGroupIdResponse::fromMap($this->doRPCRequest('QueryFaceAllUserIdsByGroupId', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFaceAllUserIdsByGroupIdRequest $request
     *
     * @return QueryFaceAllUserIdsByGroupIdResponse
     */
    public function queryFaceAllUserIdsByGroupId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceAllUserIdsByGroupIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryFaceCustomUserIdByUserIdRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryFaceCustomUserIdByUserIdResponse
     */
    public function queryFaceCustomUserIdByUserIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFaceCustomUserIdByUserIdResponse::fromMap($this->doRPCRequest('QueryFaceCustomUserIdByUserId', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFaceCustomUserIdByUserIdRequest $request
     *
     * @return QueryFaceCustomUserIdByUserIdResponse
     */
    public function queryFaceCustomUserIdByUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceCustomUserIdByUserIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryFaceDeviceGroupsByDeviceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryFaceDeviceGroupsByDeviceResponse
     */
    public function queryFaceDeviceGroupsByDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFaceDeviceGroupsByDeviceResponse::fromMap($this->doRPCRequest('QueryFaceDeviceGroupsByDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFaceDeviceGroupsByDeviceRequest $request
     *
     * @return QueryFaceDeviceGroupsByDeviceResponse
     */
    public function queryFaceDeviceGroupsByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceDeviceGroupsByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param QueryFaceUserRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryFaceUserResponse
     */
    public function queryFaceUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFaceUserResponse::fromMap($this->doRPCRequest('QueryFaceUser', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFaceUserRequest $request
     *
     * @return QueryFaceUserResponse
     */
    public function queryFaceUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceUserWithOptions($request, $runtime);
    }

    /**
     * @param QueryFaceUserGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryFaceUserGroupResponse
     */
    public function queryFaceUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFaceUserGroupResponse::fromMap($this->doRPCRequest('QueryFaceUserGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFaceUserGroupRequest $request
     *
     * @return QueryFaceUserGroupResponse
     */
    public function queryFaceUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param QueryFaceUserGroupAndDeviceGroupRelationRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return QueryFaceUserGroupAndDeviceGroupRelationResponse
     */
    public function queryFaceUserGroupAndDeviceGroupRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFaceUserGroupAndDeviceGroupRelationResponse::fromMap($this->doRPCRequest('QueryFaceUserGroupAndDeviceGroupRelation', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFaceUserGroupAndDeviceGroupRelationRequest $request
     *
     * @return QueryFaceUserGroupAndDeviceGroupRelationResponse
     */
    public function queryFaceUserGroupAndDeviceGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceUserGroupAndDeviceGroupRelationWithOptions($request, $runtime);
    }

    /**
     * @param QueryFaceUserIdByCustomUserIdRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryFaceUserIdByCustomUserIdResponse
     */
    public function queryFaceUserIdByCustomUserIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryFaceUserIdByCustomUserIdResponse::fromMap($this->doRPCRequest('QueryFaceUserIdByCustomUserId', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryFaceUserIdByCustomUserIdRequest $request
     *
     * @return QueryFaceUserIdByCustomUserIdResponse
     */
    public function queryFaceUserIdByCustomUserId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceUserIdByCustomUserIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryIotIdsByAIPlanRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryIotIdsByAIPlanResponse
     */
    public function queryIotIdsByAIPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryIotIdsByAIPlanResponse::fromMap($this->doRPCRequest('QueryIotIdsByAIPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryIotIdsByAIPlanRequest $request
     *
     * @return QueryIotIdsByAIPlanResponse
     */
    public function queryIotIdsByAIPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIotIdsByAIPlanWithOptions($request, $runtime);
    }

    /**
     * @param QueryLiveStreamingRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryLiveStreamingResponse
     */
    public function queryLiveStreamingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryLiveStreamingResponse::fromMap($this->doRPCRequest('QueryLiveStreaming', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryLiveStreamingRequest $request
     *
     * @return QueryLiveStreamingResponse
     */
    public function queryLiveStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLiveStreamingWithOptions($request, $runtime);
    }

    /**
     * @param QueryMonthRecordRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryMonthRecordResponse
     */
    public function queryMonthRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryMonthRecordResponse::fromMap($this->doRPCRequest('QueryMonthRecord', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryMonthRecordRequest $request
     *
     * @return QueryMonthRecordResponse
     */
    public function queryMonthRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonthRecordWithOptions($request, $runtime);
    }

    /**
     * @param QueryPictureFilesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryPictureFilesResponse
     */
    public function queryPictureFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPictureFilesResponse::fromMap($this->doRPCRequest('QueryPictureFiles', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryPictureFilesRequest $request
     *
     * @return QueryPictureFilesResponse
     */
    public function queryPictureFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPictureFilesWithOptions($request, $runtime);
    }

    /**
     * @param QueryPictureSearchAiboxesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryPictureSearchAiboxesResponse
     */
    public function queryPictureSearchAiboxesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPictureSearchAiboxesResponse::fromMap($this->doRPCRequest('QueryPictureSearchAiboxes', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryPictureSearchAiboxesRequest $request
     *
     * @return QueryPictureSearchAiboxesResponse
     */
    public function queryPictureSearchAiboxes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPictureSearchAiboxesWithOptions($request, $runtime);
    }

    /**
     * @param QueryPictureSearchAppRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryPictureSearchAppResponse
     */
    public function queryPictureSearchAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPictureSearchAppResponse::fromMap($this->doRPCRequest('QueryPictureSearchApp', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryPictureSearchAppRequest $request
     *
     * @return QueryPictureSearchAppResponse
     */
    public function queryPictureSearchApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPictureSearchAppWithOptions($request, $runtime);
    }

    /**
     * @param QueryPictureSearchDevicesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryPictureSearchDevicesResponse
     */
    public function queryPictureSearchDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryPictureSearchDevicesResponse::fromMap($this->doRPCRequest('QueryPictureSearchDevices', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryPictureSearchDevicesRequest $request
     *
     * @return QueryPictureSearchDevicesResponse
     */
    public function queryPictureSearchDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPictureSearchDevicesWithOptions($request, $runtime);
    }

    /**
     * @param QueryRecordRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return QueryRecordResponse
     */
    public function queryRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRecordResponse::fromMap($this->doRPCRequest('QueryRecord', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryRecordRequest $request
     *
     * @return QueryRecordResponse
     */
    public function queryRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordWithOptions($request, $runtime);
    }

    /**
     * @param QueryRecordByRecordIdRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryRecordByRecordIdResponse
     */
    public function queryRecordByRecordIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRecordByRecordIdResponse::fromMap($this->doRPCRequest('QueryRecordByRecordId', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryRecordByRecordIdRequest $request
     *
     * @return QueryRecordByRecordIdResponse
     */
    public function queryRecordByRecordId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordByRecordIdWithOptions($request, $runtime);
    }

    /**
     * @param QueryRecordPlanDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryRecordPlanDetailResponse
     */
    public function queryRecordPlanDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRecordPlanDetailResponse::fromMap($this->doRPCRequest('QueryRecordPlanDetail', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryRecordPlanDetailRequest $request
     *
     * @return QueryRecordPlanDetailResponse
     */
    public function queryRecordPlanDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordPlanDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryRecordPlanDeviceByDeviceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryRecordPlanDeviceByDeviceResponse
     */
    public function queryRecordPlanDeviceByDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRecordPlanDeviceByDeviceResponse::fromMap($this->doRPCRequest('QueryRecordPlanDeviceByDevice', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryRecordPlanDeviceByDeviceRequest $request
     *
     * @return QueryRecordPlanDeviceByDeviceResponse
     */
    public function queryRecordPlanDeviceByDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordPlanDeviceByDeviceWithOptions($request, $runtime);
    }

    /**
     * @param QueryRecordPlanDeviceByPlanRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryRecordPlanDeviceByPlanResponse
     */
    public function queryRecordPlanDeviceByPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRecordPlanDeviceByPlanResponse::fromMap($this->doRPCRequest('QueryRecordPlanDeviceByPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryRecordPlanDeviceByPlanRequest $request
     *
     * @return QueryRecordPlanDeviceByPlanResponse
     */
    public function queryRecordPlanDeviceByPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordPlanDeviceByPlanWithOptions($request, $runtime);
    }

    /**
     * @param QueryRecordPlansRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryRecordPlansResponse
     */
    public function queryRecordPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRecordPlansResponse::fromMap($this->doRPCRequest('QueryRecordPlans', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryRecordPlansRequest $request
     *
     * @return QueryRecordPlansResponse
     */
    public function queryRecordPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordPlansWithOptions($request, $runtime);
    }

    /**
     * @param QueryRecordUrlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryRecordUrlResponse
     */
    public function queryRecordUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryRecordUrlResponse::fromMap($this->doRPCRequest('QueryRecordUrl', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryRecordUrlRequest $request
     *
     * @return QueryRecordUrlResponse
     */
    public function queryRecordUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordUrlWithOptions($request, $runtime);
    }

    /**
     * @param QueryStandardAIAppTemplatesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryStandardAIAppTemplatesResponse
     */
    public function queryStandardAIAppTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryStandardAIAppTemplatesResponse::fromMap($this->doRPCRequest('QueryStandardAIAppTemplates', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryStandardAIAppTemplatesRequest $request
     *
     * @return QueryStandardAIAppTemplatesResponse
     */
    public function queryStandardAIAppTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStandardAIAppTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param QueryTimeTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryTimeTemplateResponse
     */
    public function queryTimeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTimeTemplateResponse::fromMap($this->doRPCRequest('QueryTimeTemplate', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTimeTemplateRequest $request
     *
     * @return QueryTimeTemplateResponse
     */
    public function queryTimeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTimeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param QueryTimeTemplateDetailRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryTimeTemplateDetailResponse
     */
    public function queryTimeTemplateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryTimeTemplateDetailResponse::fromMap($this->doRPCRequest('QueryTimeTemplateDetail', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryTimeTemplateDetailRequest $request
     *
     * @return QueryTimeTemplateDetailResponse
     */
    public function queryTimeTemplateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTimeTemplateDetailWithOptions($request, $runtime);
    }

    /**
     * @param QueryVoiceIntercomRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryVoiceIntercomResponse
     */
    public function queryVoiceIntercomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryVoiceIntercomResponse::fromMap($this->doRPCRequest('QueryVoiceIntercom', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryVoiceIntercomRequest $request
     *
     * @return QueryVoiceIntercomResponse
     */
    public function queryVoiceIntercom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryVoiceIntercomWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAIAppRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveAIAppResponse
     */
    public function removeAIAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveAIAppResponse::fromMap($this->doRPCRequest('RemoveAIApp', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveAIAppRequest $request
     *
     * @return RemoveAIAppResponse
     */
    public function removeAIApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAIAppWithOptions($request, $runtime);
    }

    /**
     * @param RemoveAIPlanRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RemoveAIPlanResponse
     */
    public function removeAIPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveAIPlanResponse::fromMap($this->doRPCRequest('RemoveAIPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveAIPlanRequest $request
     *
     * @return RemoveAIPlanResponse
     */
    public function removeAIPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeAIPlanWithOptions($request, $runtime);
    }

    /**
     * @param RemoveDevicePurifyPlanRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RemoveDevicePurifyPlanResponse
     */
    public function removeDevicePurifyPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveDevicePurifyPlanResponse::fromMap($this->doRPCRequest('RemoveDevicePurifyPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveDevicePurifyPlanRequest $request
     *
     * @return RemoveDevicePurifyPlanResponse
     */
    public function removeDevicePurifyPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDevicePurifyPlanWithOptions($request, $runtime);
    }

    /**
     * @param RemoveFaceDeviceFromDeviceGroupRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RemoveFaceDeviceFromDeviceGroupResponse
     */
    public function removeFaceDeviceFromDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveFaceDeviceFromDeviceGroupResponse::fromMap($this->doRPCRequest('RemoveFaceDeviceFromDeviceGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveFaceDeviceFromDeviceGroupRequest $request
     *
     * @return RemoveFaceDeviceFromDeviceGroupResponse
     */
    public function removeFaceDeviceFromDeviceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeFaceDeviceFromDeviceGroupWithOptions($request, $runtime);
    }

    /**
     * @param RemoveFaceUserFromUserGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RemoveFaceUserFromUserGroupResponse
     */
    public function removeFaceUserFromUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveFaceUserFromUserGroupResponse::fromMap($this->doRPCRequest('RemoveFaceUserFromUserGroup', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveFaceUserFromUserGroupRequest $request
     *
     * @return RemoveFaceUserFromUserGroupResponse
     */
    public function removeFaceUserFromUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeFaceUserFromUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param SetDevicePictureLifeCycleRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetDevicePictureLifeCycleResponse
     */
    public function setDevicePictureLifeCycleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDevicePictureLifeCycleResponse::fromMap($this->doRPCRequest('SetDevicePictureLifeCycle', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetDevicePictureLifeCycleRequest $request
     *
     * @return SetDevicePictureLifeCycleResponse
     */
    public function setDevicePictureLifeCycle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDevicePictureLifeCycleWithOptions($request, $runtime);
    }

    /**
     * @param SetDeviceRecordLifeCycleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetDeviceRecordLifeCycleResponse
     */
    public function setDeviceRecordLifeCycleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetDeviceRecordLifeCycleResponse::fromMap($this->doRPCRequest('SetDeviceRecordLifeCycle', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetDeviceRecordLifeCycleRequest $request
     *
     * @return SetDeviceRecordLifeCycleResponse
     */
    public function setDeviceRecordLifeCycle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDeviceRecordLifeCycleWithOptions($request, $runtime);
    }

    /**
     * @param StopLiveStreamingRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StopLiveStreamingResponse
     */
    public function stopLiveStreamingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopLiveStreamingResponse::fromMap($this->doRPCRequest('StopLiveStreaming', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopLiveStreamingRequest $request
     *
     * @return StopLiveStreamingResponse
     */
    public function stopLiveStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLiveStreamingWithOptions($request, $runtime);
    }

    /**
     * @param StopTriggeredRecordRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StopTriggeredRecordResponse
     */
    public function stopTriggeredRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopTriggeredRecordResponse::fromMap($this->doRPCRequest('StopTriggeredRecord', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopTriggeredRecordRequest $request
     *
     * @return StopTriggeredRecordResponse
     */
    public function stopTriggeredRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTriggeredRecordWithOptions($request, $runtime);
    }

    /**
     * @param TriggerCapturePictureRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return TriggerCapturePictureResponse
     */
    public function triggerCapturePictureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TriggerCapturePictureResponse::fromMap($this->doRPCRequest('TriggerCapturePicture', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TriggerCapturePictureRequest $request
     *
     * @return TriggerCapturePictureResponse
     */
    public function triggerCapturePicture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerCapturePictureWithOptions($request, $runtime);
    }

    /**
     * @param TriggerRecordRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return TriggerRecordResponse
     */
    public function triggerRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TriggerRecordResponse::fromMap($this->doRPCRequest('TriggerRecord', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TriggerRecordRequest $request
     *
     * @return TriggerRecordResponse
     */
    public function triggerRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->triggerRecordWithOptions($request, $runtime);
    }

    /**
     * @param UnbindAIPlanWithDevicesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UnbindAIPlanWithDevicesResponse
     */
    public function unbindAIPlanWithDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindAIPlanWithDevicesResponse::fromMap($this->doRPCRequest('UnbindAIPlanWithDevices', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindAIPlanWithDevicesRequest $request
     *
     * @return UnbindAIPlanWithDevicesResponse
     */
    public function unbindAIPlanWithDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindAIPlanWithDevicesWithOptions($request, $runtime);
    }

    /**
     * @param UnbindPictureSearchAppWithDevicesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UnbindPictureSearchAppWithDevicesResponse
     */
    public function unbindPictureSearchAppWithDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindPictureSearchAppWithDevicesResponse::fromMap($this->doRPCRequest('UnbindPictureSearchAppWithDevices', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindPictureSearchAppWithDevicesRequest $request
     *
     * @return UnbindPictureSearchAppWithDevicesResponse
     */
    public function unbindPictureSearchAppWithDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindPictureSearchAppWithDevicesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAIAppRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAIAppResponse
     */
    public function updateAIAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAIAppResponse::fromMap($this->doRPCRequest('UpdateAIApp', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAIAppRequest $request
     *
     * @return UpdateAIAppResponse
     */
    public function updateAIApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAIAppWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAIPlanRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateAIPlanResponse
     */
    public function updateAIPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAIPlanResponse::fromMap($this->doRPCRequest('UpdateAIPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAIPlanRequest $request
     *
     * @return UpdateAIPlanResponse
     */
    public function updateAIPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAIPlanWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDevicePurifyPlanRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateDevicePurifyPlanResponse
     */
    public function updateDevicePurifyPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDevicePurifyPlanResponse::fromMap($this->doRPCRequest('UpdateDevicePurifyPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDevicePurifyPlanRequest $request
     *
     * @return UpdateDevicePurifyPlanResponse
     */
    public function updateDevicePurifyPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDevicePurifyPlanWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEventRecordPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateEventRecordPlanResponse
     */
    public function updateEventRecordPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateEventRecordPlanResponse::fromMap($this->doRPCRequest('UpdateEventRecordPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateEventRecordPlanRequest $request
     *
     * @return UpdateEventRecordPlanResponse
     */
    public function updateEventRecordPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEventRecordPlanWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFaceUserRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFaceUserResponse
     */
    public function updateFaceUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFaceUserResponse::fromMap($this->doRPCRequest('UpdateFaceUser', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFaceUserRequest $request
     *
     * @return UpdateFaceUserResponse
     */
    public function updateFaceUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFaceUserWithOptions($request, $runtime);
    }

    /**
     * @param UpdateFaceUserGroupAndDeviceGroupRelationRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return UpdateFaceUserGroupAndDeviceGroupRelationResponse
     */
    public function updateFaceUserGroupAndDeviceGroupRelationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateFaceUserGroupAndDeviceGroupRelationResponse::fromMap($this->doRPCRequest('UpdateFaceUserGroupAndDeviceGroupRelation', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateFaceUserGroupAndDeviceGroupRelationRequest $request
     *
     * @return UpdateFaceUserGroupAndDeviceGroupRelationResponse
     */
    public function updateFaceUserGroupAndDeviceGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFaceUserGroupAndDeviceGroupRelationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateModelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateModelResponse
     */
    public function updateModelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateModelResponse::fromMap($this->doRPCRequest('UpdateModel', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateModelRequest $request
     *
     * @return UpdateModelResponse
     */
    public function updateModel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateModelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRecordPlanRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRecordPlanResponse
     */
    public function updateRecordPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRecordPlanResponse::fromMap($this->doRPCRequest('UpdateRecordPlan', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRecordPlanRequest $request
     *
     * @return UpdateRecordPlanResponse
     */
    public function updateRecordPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordPlanWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTimeTemplateRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateTimeTemplateResponse
     */
    public function updateTimeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateTimeTemplateResponse::fromMap($this->doRPCRequest('UpdateTimeTemplate', '2018-01-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTimeTemplateRequest $request
     *
     * @return UpdateTimeTemplateResponse
     */
    public function updateTimeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTimeTemplateWithOptions($request, $runtime);
    }
}
