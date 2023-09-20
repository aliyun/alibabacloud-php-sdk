<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\BindPictureSearchAppWithDevicesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\BindPictureSearchAppWithDevicesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CheckFaceUserDoExistOnDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CheckFaceUserDoExistOnDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ClearFaceDeviceDBRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ClearFaceDeviceDBResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateEventRecordPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateEventRecordPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateLocalFileUploadJobRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateLocalFileUploadJobResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreatePictureSearchAppRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreatePictureSearchAppResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreatePictureSearchJobRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreatePictureSearchJobResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateRecordPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateRecordPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateTimeTemplateRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\CreateTimeTemplateResponse;
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
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteLocalFileUploadJobRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteLocalFileUploadJobResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeletePictureRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeletePictureResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteRecordPlanDeviceRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteRecordPlanDeviceResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteRecordPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteRecordPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteRecordRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteRecordResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteTimeTemplateRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeleteTimeTemplateResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DetectUserFaceByUrlRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\DetectUserFaceByUrlResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetPictureSearchJobStatusRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetPictureSearchJobStatusResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\PictureSearchPictureRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\PictureSearchPictureResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryCarProcessEventsRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryCarProcessEventsResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventPictureRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventPictureResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventRecordRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventRecordResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureByListRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureByListResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureFileRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureFileResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureLifeCycleRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureLifeCycleResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceRecordLifeCycleRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceRecordLifeCycleResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceVodUrlByTimeRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceVodUrlByTimeResponse;
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
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserBatchRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserBatchResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserByNameRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserByNameResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserGroupAndDeviceGroupRelationRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserGroupAndDeviceGroupRelationResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserGroupRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserGroupResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserIdByCustomUserIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserIdByCustomUserIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLiveStreamingRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLiveStreamingResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLocalFileUploadJobRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLocalFileUploadJobResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryMonthRecordRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryMonthRecordResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureFilesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureFilesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchAiboxesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchAiboxesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchAppsRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchAppsResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchDevicesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchDevicesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchJobRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchJobResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchJobResultRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryPictureSearchJobResultResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordByRecordIdRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordByRecordIdResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordDownloadUrlRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordDownloadUrlResponse;
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
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordUrlByTimeRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordUrlByTimeResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordUrlRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRecordUrlResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryTimeTemplateDetailRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryTimeTemplateDetailResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryTimeTemplateRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryTimeTemplateResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryVoiceIntercomRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryVoiceIntercomResponse;
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
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\TransferDeviceInstanceRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\TransferDeviceInstanceResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\TriggerCapturePictureRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\TriggerCapturePictureResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\TriggerRecordRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\TriggerRecordResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UnbindPictureSearchAppWithDevicesRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UnbindPictureSearchAppWithDevicesResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateEventRecordPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateEventRecordPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateFaceUserGroupAndDeviceGroupRelationRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateFaceUserGroupAndDeviceGroupRelationResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateFaceUserRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateFaceUserResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateInstanceInternetProtocolRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateInstanceInternetProtocolResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdatePictureSearchAppRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdatePictureSearchAppResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateRecordPlanRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateRecordPlanResponse;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateTimeTemplateRequest;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateTimeTemplateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddEventRecordPlanDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddEventRecordPlanDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceGroupName)) {
            $query['DeviceGroupName'] = $request->deviceGroupName;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddFaceDeviceGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFaceDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceGroupId)) {
            $query['DeviceGroupId'] = $request->deviceGroupId;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddFaceDeviceToDeviceGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFaceDeviceToDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->customUserId)) {
            $query['CustomUserId'] = $request->customUserId;
        }
        if (!Utils::isUnset($request->facePicUrl)) {
            $query['FacePicUrl'] = $request->facePicUrl;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddFaceUser',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFaceUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->userGroupName)) {
            $query['UserGroupName'] = $request->userGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddFaceUserGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFaceUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceGroupId)) {
            $query['DeviceGroupId'] = $request->deviceGroupId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->relation)) {
            $query['Relation'] = $request->relation;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddFaceUserGroupAndDeviceGroupRelation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFaceUserGroupAndDeviceGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->facePicUrl)) {
            $query['FacePicUrl'] = $request->facePicUrl;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddFaceUserPicture',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFaceUserPictureResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddFaceUserToUserGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFaceUserToUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddRecordPlanDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddRecordPlanDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param BindPictureSearchAppWithDevicesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return BindPictureSearchAppWithDevicesResponse
     */
    public function bindPictureSearchAppWithDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appInstanceId)) {
            $query['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->deviceIotIds)) {
            $query['DeviceIotIds'] = $request->deviceIotIds;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindPictureSearchAppWithDevices',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindPictureSearchAppWithDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckFaceUserDoExistOnDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckFaceUserDoExistOnDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClearFaceDeviceDB',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearFaceDeviceDBResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateEventRecordPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateEventRecordPlanResponse
     */
    public function createEventRecordPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventTypes)) {
            $query['EventTypes'] = $request->eventTypes;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->preRecordDuration)) {
            $query['PreRecordDuration'] = $request->preRecordDuration;
        }
        if (!Utils::isUnset($request->recordDuration)) {
            $query['RecordDuration'] = $request->recordDuration;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEventRecordPlan',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEventRecordPlanResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateLocalFileUploadJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateLocalFileUploadJobResponse
     */
    public function createLocalFileUploadJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->timeSlot)) {
            $query['TimeSlot'] = $request->timeSlot;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLocalFileUploadJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLocalFileUploadJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLocalFileUploadJobRequest $request
     *
     * @return CreateLocalFileUploadJobResponse
     */
    public function createLocalFileUploadJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLocalFileUploadJobWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePictureSearchApp',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePictureSearchAppResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreatePictureSearchJobRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreatePictureSearchJobResponse
     */
    public function createPictureSearchJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appInstanceId)) {
            $query['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->bodyThreshold)) {
            $query['BodyThreshold'] = $request->bodyThreshold;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pictureSearchType)) {
            $query['PictureSearchType'] = $request->pictureSearchType;
        }
        if (!Utils::isUnset($request->searchPicUrl)) {
            $query['SearchPicUrl'] = $request->searchPicUrl;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePictureSearchJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePictureSearchJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePictureSearchJobRequest $request
     *
     * @return CreatePictureSearchJobResponse
     */
    public function createPictureSearchJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPictureSearchJobWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRecordPlan',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRecordPlanResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->allDay)) {
            $query['AllDay'] = $request->allDay;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->timeSections)) {
            $query['TimeSections'] = $request->timeSections;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTimeTemplate',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTimeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteEventRecordPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteEventRecordPlanResponse
     */
    public function deleteEventRecordPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEventRecordPlan',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEventRecordPlanResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEventRecordPlanDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEventRecordPlanDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceGroupId)) {
            $query['DeviceGroupId'] = $request->deviceGroupId;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFaceDeviceGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFaceDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFaceUser',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFaceUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFaceUserGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFaceUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->controlId)) {
            $query['ControlId'] = $request->controlId;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFaceUserGroupAndDeviceGroupRelation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFaceUserGroupAndDeviceGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->facePicMd5)) {
            $query['FacePicMd5'] = $request->facePicMd5;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFaceUserPicture',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFaceUserPictureResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteLocalFileUploadJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteLocalFileUploadJobResponse
     */
    public function deleteLocalFileUploadJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLocalFileUploadJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLocalFileUploadJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLocalFileUploadJobRequest $request
     *
     * @return DeleteLocalFileUploadJobResponse
     */
    public function deleteLocalFileUploadJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLocalFileUploadJobWithOptions($request, $runtime);
    }

    /**
     * @param DeletePictureRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeletePictureResponse
     */
    public function deletePictureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pictureIdList)) {
            $query['PictureIdList'] = $request->pictureIdList;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePicture',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePictureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePictureRequest $request
     *
     * @return DeletePictureResponse
     */
    public function deletePicture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePictureWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRecordRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteRecordResponse
     */
    public function deleteRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->fileNameList)) {
            $query['FileNameList'] = $request->fileNameList;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRecord',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRecordRequest $request
     *
     * @return DeleteRecordResponse
     */
    public function deleteRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecordWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRecordPlan',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRecordPlanResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRecordPlanDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRecordPlanDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTimeTemplate',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTimeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DetectUserFaceByUrlRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DetectUserFaceByUrlResponse
     */
    public function detectUserFaceByUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->facePicUrl)) {
            $query['FacePicUrl'] = $request->facePicUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectUserFaceByUrl',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetectUserFaceByUrlResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetPictureSearchJobStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetPictureSearchJobStatusResponse
     */
    public function getPictureSearchJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appInstanceId)) {
            $query['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPictureSearchJobStatus',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPictureSearchJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPictureSearchJobStatusRequest $request
     *
     * @return GetPictureSearchJobStatusResponse
     */
    public function getPictureSearchJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPictureSearchJobStatusWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->appInstanceId)) {
            $query['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->containPicUrl)) {
            $query['ContainPicUrl'] = $request->containPicUrl;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pictureSearchType)) {
            $query['PictureSearchType'] = $request->pictureSearchType;
        }
        if (!Utils::isUnset($request->searchPicUrl)) {
            $query['SearchPicUrl'] = $request->searchPicUrl;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PictureSearchPicture',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PictureSearchPictureResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryCarProcessEventsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCarProcessEventsResponse
     */
    public function queryCarProcessEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionType)) {
            $query['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->areaIndex)) {
            $query['AreaIndex'] = $request->areaIndex;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->plateNo)) {
            $query['PlateNo'] = $request->plateNo;
        }
        if (!Utils::isUnset($request->subDeviceName)) {
            $query['SubDeviceName'] = $request->subDeviceName;
        }
        if (!Utils::isUnset($request->subIotId)) {
            $query['SubIotId'] = $request->subIotId;
        }
        if (!Utils::isUnset($request->subProductKey)) {
            $query['SubProductKey'] = $request->subProductKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCarProcessEvents',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCarProcessEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCarProcessEventsRequest $request
     *
     * @return QueryCarProcessEventsResponse
     */
    public function queryCarProcessEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCarProcessEventsWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceEvent',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceEventResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceEventPicture',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceEventPictureResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->eventId)) {
            $query['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceEventRecord',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceEventRecordResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryDevicePictureByListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryDevicePictureByListResponse
     */
    public function queryDevicePictureByListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pictureIdList)) {
            $query['PictureIdList'] = $request->pictureIdList;
        }
        if (!Utils::isUnset($request->pictureType)) {
            $query['PictureType'] = $request->pictureType;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->thumbWidth)) {
            $query['ThumbWidth'] = $request->thumbWidth;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDevicePictureByList',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDevicePictureByListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDevicePictureByListRequest $request
     *
     * @return QueryDevicePictureByListResponse
     */
    public function queryDevicePictureByList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDevicePictureByListWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->captureId)) {
            $query['CaptureId'] = $request->captureId;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pictureType)) {
            $query['PictureType'] = $request->pictureType;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->thumbWidth)) {
            $query['ThumbWidth'] = $request->thumbWidth;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDevicePictureFile',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDevicePictureFileResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDevicePictureLifeCycle',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDevicePictureLifeCycleResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryDeviceRecordLifeCycleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryDeviceRecordLifeCycleResponse
     */
    public function queryDeviceRecordLifeCycleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceList)) {
            $query['DeviceList'] = $request->deviceList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceRecordLifeCycle',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceRecordLifeCycleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->enableStun)) {
            $query['EnableStun'] = $request->enableStun;
        }
        if (!Utils::isUnset($request->encryptType)) {
            $query['EncryptType'] = $request->encryptType;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->playUnLimited)) {
            $query['PlayUnLimited'] = $request->playUnLimited;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->scheme)) {
            $query['Scheme'] = $request->scheme;
        }
        if (!Utils::isUnset($request->seekTime)) {
            $query['SeekTime'] = $request->seekTime;
        }
        if (!Utils::isUnset($request->shouldEncrypt)) {
            $query['ShouldEncrypt'] = $request->shouldEncrypt;
        }
        if (!Utils::isUnset($request->urlValidDuration)) {
            $query['UrlValidDuration'] = $request->urlValidDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceVodUrl',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceVodUrlResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryDeviceVodUrlByTimeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryDeviceVodUrlByTimeResponse
     */
    public function queryDeviceVodUrlByTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->enableStun)) {
            $query['EnableStun'] = $request->enableStun;
        }
        if (!Utils::isUnset($request->encryptType)) {
            $query['EncryptType'] = $request->encryptType;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->playUnLimited)) {
            $query['PlayUnLimited'] = $request->playUnLimited;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->scheme)) {
            $query['Scheme'] = $request->scheme;
        }
        if (!Utils::isUnset($request->seekTime)) {
            $query['SeekTime'] = $request->seekTime;
        }
        if (!Utils::isUnset($request->shouldEncrypt)) {
            $query['ShouldEncrypt'] = $request->shouldEncrypt;
        }
        if (!Utils::isUnset($request->urlValidDuration)) {
            $query['UrlValidDuration'] = $request->urlValidDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDeviceVodUrlByTime',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDeviceVodUrlByTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDeviceVodUrlByTimeRequest $request
     *
     * @return QueryDeviceVodUrlByTimeResponse
     */
    public function queryDeviceVodUrlByTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDeviceVodUrlByTimeWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEventRecordPlanDetail',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEventRecordPlanDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEventRecordPlanDeviceByDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEventRecordPlanDeviceByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEventRecordPlanDeviceByPlan',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEventRecordPlanDeviceByPlanResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryEventRecordPlans',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryEventRecordPlansResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
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
            'action'      => 'QueryFaceAllDeviceGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceAllDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
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
            'action'      => 'QueryFaceAllUserGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceAllUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
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
            'action'      => 'QueryFaceAllUserGroupAndDeviceGroupRelation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceAllUserGroupAndDeviceGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFaceAllUserIdsByGroupId',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceAllUserIdsByGroupIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFaceCustomUserIdByUserId',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceCustomUserIdByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFaceDeviceGroupsByDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceDeviceGroupsByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFaceUser',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryFaceUserBatchRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryFaceUserBatchResponse
     */
    public function queryFaceUserBatchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->userIdList)) {
            $query['UserIdList'] = $request->userIdList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFaceUserBatch',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceUserBatchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryFaceUserBatchRequest $request
     *
     * @return QueryFaceUserBatchResponse
     */
    public function queryFaceUserBatch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceUserBatchWithOptions($request, $runtime);
    }

    /**
     * @param QueryFaceUserByNameRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryFaceUserByNameResponse
     */
    public function queryFaceUserByNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFaceUserByName',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceUserByNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryFaceUserByNameRequest $request
     *
     * @return QueryFaceUserByNameResponse
     */
    public function queryFaceUserByName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryFaceUserByNameWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFaceUserGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->controlId)) {
            $query['ControlId'] = $request->controlId;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFaceUserGroupAndDeviceGroupRelation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceUserGroupAndDeviceGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->customUserId)) {
            $query['CustomUserId'] = $request->customUserId;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryFaceUserIdByCustomUserId',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryFaceUserIdByCustomUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryLiveStreamingRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryLiveStreamingResponse
     */
    public function queryLiveStreamingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cacheDuration)) {
            $query['CacheDuration'] = $request->cacheDuration;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->enableStun)) {
            $query['EnableStun'] = $request->enableStun;
        }
        if (!Utils::isUnset($request->encryptType)) {
            $query['EncryptType'] = $request->encryptType;
        }
        if (!Utils::isUnset($request->forceIFrame)) {
            $query['ForceIFrame'] = $request->forceIFrame;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->playUnLimited)) {
            $query['PlayUnLimited'] = $request->playUnLimited;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->scheme)) {
            $query['Scheme'] = $request->scheme;
        }
        if (!Utils::isUnset($request->shouldEncrypt)) {
            $query['ShouldEncrypt'] = $request->shouldEncrypt;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        if (!Utils::isUnset($request->urlValidDuration)) {
            $query['UrlValidDuration'] = $request->urlValidDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryLiveStreaming',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLiveStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryLocalFileUploadJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryLocalFileUploadJobResponse
     */
    public function queryLocalFileUploadJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryLocalFileUploadJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLocalFileUploadJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryLocalFileUploadJobRequest $request
     *
     * @return QueryLocalFileUploadJobResponse
     */
    public function queryLocalFileUploadJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryLocalFileUploadJobWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->month)) {
            $query['Month'] = $request->month;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMonthRecord',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMonthRecordResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pictureSource)) {
            $query['PictureSource'] = $request->pictureSource;
        }
        if (!Utils::isUnset($request->pictureType)) {
            $query['PictureType'] = $request->pictureType;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPictureFiles',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPictureFilesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->appInstanceId)) {
            $query['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPictureSearchAiboxes',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPictureSearchAiboxesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryPictureSearchAppsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryPictureSearchAppsResponse
     */
    public function queryPictureSearchAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPictureSearchApps',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPictureSearchAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPictureSearchAppsRequest $request
     *
     * @return QueryPictureSearchAppsResponse
     */
    public function queryPictureSearchApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPictureSearchAppsWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->appInstanceId)) {
            $query['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPictureSearchDevices',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPictureSearchDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryPictureSearchJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryPictureSearchJobResponse
     */
    public function queryPictureSearchJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appInstanceId)) {
            $query['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->jobStatus)) {
            $query['JobStatus'] = $request->jobStatus;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPictureSearchJob',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPictureSearchJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPictureSearchJobRequest $request
     *
     * @return QueryPictureSearchJobResponse
     */
    public function queryPictureSearchJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPictureSearchJobWithOptions($request, $runtime);
    }

    /**
     * @param QueryPictureSearchJobResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryPictureSearchJobResultResponse
     */
    public function queryPictureSearchJobResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appInstanceId)) {
            $query['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryPictureSearchJobResult',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryPictureSearchJobResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryPictureSearchJobResultRequest $request
     *
     * @return QueryPictureSearchJobResultResponse
     */
    public function queryPictureSearchJobResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPictureSearchJobResultWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->needSnapshot)) {
            $query['NeedSnapshot'] = $request->needSnapshot;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->recordType)) {
            $query['RecordType'] = $request->recordType;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRecord',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecordResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRecordByRecordId',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecordByRecordIdResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryRecordDownloadUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return QueryRecordDownloadUrlResponse
     */
    public function queryRecordDownloadUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRecordDownloadUrl',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecordDownloadUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRecordDownloadUrlRequest $request
     *
     * @return QueryRecordDownloadUrlResponse
     */
    public function queryRecordDownloadUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordDownloadUrlWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRecordPlanDetail',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecordPlanDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRecordPlanDeviceByDevice',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecordPlanDeviceByDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRecordPlanDeviceByPlan',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecordPlanDeviceByPlanResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRecordPlans',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecordPlansResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->seekTime)) {
            $query['SeekTime'] = $request->seekTime;
        }
        if (!Utils::isUnset($request->urlValidDuration)) {
            $query['UrlValidDuration'] = $request->urlValidDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRecordUrl',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecordUrlResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param QueryRecordUrlByTimeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryRecordUrlByTimeResponse
     */
    public function queryRecordUrlByTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        if (!Utils::isUnset($request->urlValidDuration)) {
            $query['UrlValidDuration'] = $request->urlValidDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryRecordUrlByTime',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRecordUrlByTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryRecordUrlByTimeRequest $request
     *
     * @return QueryRecordUrlByTimeResponse
     */
    public function queryRecordUrlByTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRecordUrlByTimeWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTimeTemplate',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTimeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTimeTemplateDetail',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryTimeTemplateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->scheme)) {
            $query['Scheme'] = $request->scheme;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryVoiceIntercom',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryVoiceIntercomResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RemoveFaceDeviceFromDeviceGroupRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return RemoveFaceDeviceFromDeviceGroupResponse
     */
    public function removeFaceDeviceFromDeviceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceGroupId)) {
            $query['DeviceGroupId'] = $request->deviceGroupId;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveFaceDeviceFromDeviceGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveFaceDeviceFromDeviceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveFaceUserFromUserGroup',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveFaceUserFromUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->day)) {
            $query['Day'] = $request->day;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDevicePictureLifeCycle',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDevicePictureLifeCycleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->day)) {
            $query['Day'] = $request->day;
        }
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDeviceRecordLifeCycle',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDeviceRecordLifeCycleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopLiveStreaming',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopLiveStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->recordId)) {
            $query['RecordId'] = $request->recordId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopTriggeredRecord',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopTriggeredRecordResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param TransferDeviceInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return TransferDeviceInstanceResponse
     */
    public function transferDeviceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceNameList)) {
            $query['DeviceNameList'] = $request->deviceNameList;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->sourceInstanceId)) {
            $query['SourceInstanceId'] = $request->sourceInstanceId;
        }
        if (!Utils::isUnset($request->targetInstanceId)) {
            $query['TargetInstanceId'] = $request->targetInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TransferDeviceInstance',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TransferDeviceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TransferDeviceInstanceRequest $request
     *
     * @return TransferDeviceInstanceResponse
     */
    public function transferDeviceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->transferDeviceInstanceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TriggerCapturePicture',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TriggerCapturePictureResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->deviceName)) {
            $query['DeviceName'] = $request->deviceName;
        }
        if (!Utils::isUnset($request->iotId)) {
            $query['IotId'] = $request->iotId;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->preRecordDuration)) {
            $query['PreRecordDuration'] = $request->preRecordDuration;
        }
        if (!Utils::isUnset($request->productKey)) {
            $query['ProductKey'] = $request->productKey;
        }
        if (!Utils::isUnset($request->recordDuration)) {
            $query['RecordDuration'] = $request->recordDuration;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TriggerRecord',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TriggerRecordResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UnbindPictureSearchAppWithDevicesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return UnbindPictureSearchAppWithDevicesResponse
     */
    public function unbindPictureSearchAppWithDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appInstanceId)) {
            $query['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->deviceIotIds)) {
            $query['DeviceIotIds'] = $request->deviceIotIds;
        }
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindPictureSearchAppWithDevices',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindPictureSearchAppWithDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateEventRecordPlanRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateEventRecordPlanResponse
     */
    public function updateEventRecordPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eventTypes)) {
            $query['EventTypes'] = $request->eventTypes;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->preRecordDuration)) {
            $query['PreRecordDuration'] = $request->preRecordDuration;
        }
        if (!Utils::isUnset($request->recordDuration)) {
            $query['RecordDuration'] = $request->recordDuration;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEventRecordPlan',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEventRecordPlanResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->customUserId)) {
            $query['CustomUserId'] = $request->customUserId;
        }
        if (!Utils::isUnset($request->facePicUrl)) {
            $query['FacePicUrl'] = $request->facePicUrl;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFaceUser',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFaceUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->controlId)) {
            $query['ControlId'] = $request->controlId;
        }
        if (!Utils::isUnset($request->isolationId)) {
            $query['IsolationId'] = $request->isolationId;
        }
        if (!Utils::isUnset($request->relation)) {
            $query['Relation'] = $request->relation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFaceUserGroupAndDeviceGroupRelation',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFaceUserGroupAndDeviceGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateInstanceInternetProtocolRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateInstanceInternetProtocolResponse
     */
    public function updateInstanceInternetProtocolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->iotInstanceId)) {
            $query['IotInstanceId'] = $request->iotInstanceId;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceInternetProtocol',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceInternetProtocolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateInstanceInternetProtocolRequest $request
     *
     * @return UpdateInstanceInternetProtocolResponse
     */
    public function updateInstanceInternetProtocol($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceInternetProtocolWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePictureSearchAppRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdatePictureSearchAppResponse
     */
    public function updatePictureSearchAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appInstanceId)) {
            $query['AppInstanceId'] = $request->appInstanceId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdatePictureSearchApp',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePictureSearchAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePictureSearchAppRequest $request
     *
     * @return UpdatePictureSearchAppResponse
     */
    public function updatePictureSearchApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePictureSearchAppWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRecordPlan',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRecordPlanResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->allDay)) {
            $query['AllDay'] = $request->allDay;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->timeSections)) {
            $query['TimeSections'] = $request->timeSections;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTimeTemplate',
            'version'     => '2018-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTimeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
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
