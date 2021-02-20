<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Rtc\V20180111\Models\AddRecordTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\AddRecordTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateChannelRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateChannelResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateConferenceRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateConferenceResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateEventSubscribeRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateEventSubscribeResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateMPULayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateMPULayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateMPURuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateMPURuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateServiceLinkedRoleForRtcRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateServiceLinkedRoleForRtcResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateSubscribeRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateSubscribeResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteChannelRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteChannelResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteConferenceRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteConferenceResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteEventSubscribeRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteEventSubscribeResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteMPULayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteMPULayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteMPURuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteMPURuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteRecordTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteRecordTemplateResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteSubscribeRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteSubscribeResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAutoLiveStreamRuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAutoLiveStreamRuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelParticipantsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelParticipantsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUsersRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUsersResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeConferenceAuthInfoRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeConferenceAuthInfoResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPURuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPURuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordFilesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordFilesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTasksRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTasksResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTemplatesRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTemplatesResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRTCAppKeyRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRTCAppKeyResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelCntDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelCntDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelDetailRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelDetailResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelUserListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelUserListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcDurationDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakUserCntDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakUserCntDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcScaleDetailRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcScaleDetailResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcScaleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcScaleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserCntDataRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserCntDataResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserEventsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserEventsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserListRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserListResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUserInfoInChannelRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUserInfoInChannelResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DisableMPURuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DisableMPURuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\EnableMPURuleRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\EnableMPURuleResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\GetMPUTaskStatusRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\GetMPUTaskStatusResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyConferenceRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyConferenceResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyMPULayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyMPULayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\MuteAudioAllRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\MuteAudioAllResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\MuteAudioRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\MuteAudioResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ReceiveNotifyRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ReceiveNotifyResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveParticipantsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveParticipantsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveTerminalsRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\RemoveTerminalsResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\SetChannelPropertyRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\SetChannelPropertyResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartRecordTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartRecordTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopChannelUserPublishRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopChannelUserPublishResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopMPUTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopMPUTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopRecordTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StopRecordTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UnmuteAudioAllRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UnmuteAudioAllResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UnmuteAudioRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UnmuteAudioResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateChannelRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateChannelResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPULayoutRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPULayoutResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTaskRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTaskResponse;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTemplateRequest;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTemplateResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Rtc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('rtc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddRecordTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddRecordTemplateResponse
     */
    public function addRecordTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddRecordTemplateResponse::fromMap($this->doRPCRequest('AddRecordTemplate', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddRecordTemplateRequest $request
     *
     * @return AddRecordTemplateResponse
     */
    public function addRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAutoLiveStreamRuleResponse
     */
    public function createAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAutoLiveStreamRuleResponse::fromMap($this->doRPCRequest('CreateAutoLiveStreamRule', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAutoLiveStreamRuleRequest $request
     *
     * @return CreateAutoLiveStreamRuleResponse
     */
    public function createAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateChannelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateChannelResponse
     */
    public function createChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateChannelResponse::fromMap($this->doRPCRequest('CreateChannel', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateChannelRequest $request
     *
     * @return CreateChannelResponse
     */
    public function createChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChannelWithOptions($request, $runtime);
    }

    /**
     * @param CreateConferenceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConferenceResponse
     */
    public function createConferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateConferenceResponse::fromMap($this->doRPCRequest('CreateConference', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateConferenceRequest $request
     *
     * @return CreateConferenceResponse
     */
    public function createConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConferenceWithOptions($request, $runtime);
    }

    /**
     * @param CreateEventSubscribeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEventSubscribeResponse
     */
    public function createEventSubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateEventSubscribeResponse::fromMap($this->doRPCRequest('CreateEventSubscribe', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateEventSubscribeRequest $request
     *
     * @return CreateEventSubscribeResponse
     */
    public function createEventSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEventSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param CreateMPULayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateMPULayoutResponse
     */
    public function createMPULayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMPULayoutResponse::fromMap($this->doRPCRequest('CreateMPULayout', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateMPULayoutRequest $request
     *
     * @return CreateMPULayoutResponse
     */
    public function createMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMPULayoutWithOptions($request, $runtime);
    }

    /**
     * @param CreateMPURuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateMPURuleResponse
     */
    public function createMPURuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateMPURuleResponse::fromMap($this->doRPCRequest('CreateMPURule', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateMPURuleRequest $request
     *
     * @return CreateMPURuleResponse
     */
    public function createMPURule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMPURuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceLinkedRoleForRtcRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateServiceLinkedRoleForRtcResponse
     */
    public function createServiceLinkedRoleForRtcWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateServiceLinkedRoleForRtcResponse::fromMap($this->doRPCRequest('CreateServiceLinkedRoleForRtc', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateServiceLinkedRoleForRtcRequest $request
     *
     * @return CreateServiceLinkedRoleForRtcResponse
     */
    public function createServiceLinkedRoleForRtc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleForRtcWithOptions($request, $runtime);
    }

    /**
     * @param CreateSubscribeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSubscribeResponse
     */
    public function createSubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSubscribeResponse::fromMap($this->doRPCRequest('CreateSubscribe', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSubscribeRequest $request
     *
     * @return CreateSubscribeResponse
     */
    public function createSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteAutoLiveStreamRuleResponse
     */
    public function deleteAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAutoLiveStreamRuleResponse::fromMap($this->doRPCRequest('DeleteAutoLiveStreamRule', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAutoLiveStreamRuleRequest $request
     *
     * @return DeleteAutoLiveStreamRuleResponse
     */
    public function deleteAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteChannelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteChannelResponse
     */
    public function deleteChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteChannelResponse::fromMap($this->doRPCRequest('DeleteChannel', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteChannelRequest $request
     *
     * @return DeleteChannelResponse
     */
    public function deleteChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChannelWithOptions($request, $runtime);
    }

    /**
     * @param DeleteConferenceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteConferenceResponse
     */
    public function deleteConferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteConferenceResponse::fromMap($this->doRPCRequest('DeleteConference', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteConferenceRequest $request
     *
     * @return DeleteConferenceResponse
     */
    public function deleteConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConferenceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEventSubscribeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEventSubscribeResponse
     */
    public function deleteEventSubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteEventSubscribeResponse::fromMap($this->doRPCRequest('DeleteEventSubscribe', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteEventSubscribeRequest $request
     *
     * @return DeleteEventSubscribeResponse
     */
    public function deleteEventSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEventSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMPULayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteMPULayoutResponse
     */
    public function deleteMPULayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMPULayoutResponse::fromMap($this->doRPCRequest('DeleteMPULayout', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMPULayoutRequest $request
     *
     * @return DeleteMPULayoutResponse
     */
    public function deleteMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMPULayoutWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMPURuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteMPURuleResponse
     */
    public function deleteMPURuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMPURuleResponse::fromMap($this->doRPCRequest('DeleteMPURule', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMPURuleRequest $request
     *
     * @return DeleteMPURuleResponse
     */
    public function deleteMPURule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMPURuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRecordTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteRecordTemplateResponse
     */
    public function deleteRecordTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRecordTemplateResponse::fromMap($this->doRPCRequest('DeleteRecordTemplate', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRecordTemplateRequest $request
     *
     * @return DeleteRecordTemplateResponse
     */
    public function deleteRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSubscribeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSubscribeResponse
     */
    public function deleteSubscribeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSubscribeResponse::fromMap($this->doRPCRequest('DeleteSubscribe', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSubscribeRequest $request
     *
     * @return DeleteSubscribeResponse
     */
    public function deleteSubscribe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSubscribeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAppsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeAppsResponse
     */
    public function describeAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAppsResponse::fromMap($this->doRPCRequest('DescribeApps', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAppsRequest $request
     *
     * @return DescribeAppsResponse
     */
    public function describeApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAppsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutoLiveStreamRuleRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAutoLiveStreamRuleResponse
     */
    public function describeAutoLiveStreamRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAutoLiveStreamRuleResponse::fromMap($this->doRPCRequest('DescribeAutoLiveStreamRule', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAutoLiveStreamRuleRequest $request
     *
     * @return DescribeAutoLiveStreamRuleResponse
     */
    public function describeAutoLiveStreamRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoLiveStreamRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChannelParticipantsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeChannelParticipantsResponse
     */
    public function describeChannelParticipantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeChannelParticipantsResponse::fromMap($this->doRPCRequest('DescribeChannelParticipants', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeChannelParticipantsRequest $request
     *
     * @return DescribeChannelParticipantsResponse
     */
    public function describeChannelParticipants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelParticipantsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeChannelUsersRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeChannelUsersResponse
     */
    public function describeChannelUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeChannelUsersResponse::fromMap($this->doRPCRequest('DescribeChannelUsers', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeChannelUsersRequest $request
     *
     * @return DescribeChannelUsersResponse
     */
    public function describeChannelUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeChannelUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConferenceAuthInfoRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeConferenceAuthInfoResponse
     */
    public function describeConferenceAuthInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeConferenceAuthInfoResponse::fromMap($this->doRPCRequest('DescribeConferenceAuthInfo', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeConferenceAuthInfoRequest $request
     *
     * @return DescribeConferenceAuthInfoResponse
     */
    public function describeConferenceAuthInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConferenceAuthInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMPULayoutInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeMPULayoutInfoResponse
     */
    public function describeMPULayoutInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMPULayoutInfoResponse::fromMap($this->doRPCRequest('DescribeMPULayoutInfo', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMPULayoutInfoRequest $request
     *
     * @return DescribeMPULayoutInfoResponse
     */
    public function describeMPULayoutInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMPULayoutInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMPULayoutInfoListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMPULayoutInfoListResponse
     */
    public function describeMPULayoutInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMPULayoutInfoListResponse::fromMap($this->doRPCRequest('DescribeMPULayoutInfoList', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMPULayoutInfoListRequest $request
     *
     * @return DescribeMPULayoutInfoListResponse
     */
    public function describeMPULayoutInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMPULayoutInfoListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMPULayoutListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeMPULayoutListResponse
     */
    public function describeMPULayoutListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMPULayoutListResponse::fromMap($this->doRPCRequest('DescribeMPULayoutList', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMPULayoutListRequest $request
     *
     * @return DescribeMPULayoutListResponse
     */
    public function describeMPULayoutList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMPULayoutListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMPURuleRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeMPURuleResponse
     */
    public function describeMPURuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMPURuleResponse::fromMap($this->doRPCRequest('DescribeMPURule', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMPURuleRequest $request
     *
     * @return DescribeMPURuleResponse
     */
    public function describeMPURule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMPURuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRecordFilesResponse
     */
    public function describeRecordFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRecordFilesResponse::fromMap($this->doRPCRequest('DescribeRecordFiles', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRecordFilesRequest $request
     *
     * @return DescribeRecordFilesResponse
     */
    public function describeRecordFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordTasksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRecordTasksResponse
     */
    public function describeRecordTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRecordTasksResponse::fromMap($this->doRPCRequest('DescribeRecordTasks', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRecordTasksRequest $request
     *
     * @return DescribeRecordTasksResponse
     */
    public function describeRecordTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRecordTemplatesResponse
     */
    public function describeRecordTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRecordTemplatesResponse::fromMap($this->doRPCRequest('DescribeRecordTemplates', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRecordTemplatesRequest $request
     *
     * @return DescribeRecordTemplatesResponse
     */
    public function describeRecordTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRTCAppKeyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeRTCAppKeyResponse
     */
    public function describeRTCAppKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRTCAppKeyResponse::fromMap($this->doRPCRequest('DescribeRTCAppKey', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRTCAppKeyRequest $request
     *
     * @return DescribeRTCAppKeyResponse
     */
    public function describeRTCAppKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRTCAppKeyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcChannelCntDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRtcChannelCntDataResponse
     */
    public function describeRtcChannelCntDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcChannelCntDataResponse::fromMap($this->doRPCRequest('DescribeRtcChannelCntData', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcChannelCntDataRequest $request
     *
     * @return DescribeRtcChannelCntDataResponse
     */
    public function describeRtcChannelCntData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcChannelCntDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcChannelDetailRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRtcChannelDetailResponse
     */
    public function describeRtcChannelDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcChannelDetailResponse::fromMap($this->doRPCRequest('DescribeRtcChannelDetail', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcChannelDetailRequest $request
     *
     * @return DescribeRtcChannelDetailResponse
     */
    public function describeRtcChannelDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcChannelDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcChannelListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRtcChannelListResponse
     */
    public function describeRtcChannelListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcChannelListResponse::fromMap($this->doRPCRequest('DescribeRtcChannelList', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcChannelListRequest $request
     *
     * @return DescribeRtcChannelListResponse
     */
    public function describeRtcChannelList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcChannelListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcChannelMetricRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRtcChannelMetricResponse
     */
    public function describeRtcChannelMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcChannelMetricResponse::fromMap($this->doRPCRequest('DescribeRtcChannelMetric', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcChannelMetricRequest $request
     *
     * @return DescribeRtcChannelMetricResponse
     */
    public function describeRtcChannelMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcChannelMetricWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcChannelMetricsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRtcChannelMetricsResponse
     */
    public function describeRtcChannelMetricsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcChannelMetricsResponse::fromMap($this->doRPCRequest('DescribeRtcChannelMetrics', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcChannelMetricsRequest $request
     *
     * @return DescribeRtcChannelMetricsResponse
     */
    public function describeRtcChannelMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcChannelMetricsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcChannelsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRtcChannelsResponse
     */
    public function describeRtcChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcChannelsResponse::fromMap($this->doRPCRequest('DescribeRtcChannels', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcChannelsRequest $request
     *
     * @return DescribeRtcChannelsResponse
     */
    public function describeRtcChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcChannelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcChannelUserListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeRtcChannelUserListResponse
     */
    public function describeRtcChannelUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcChannelUserListResponse::fromMap($this->doRPCRequest('DescribeRtcChannelUserList', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcChannelUserListRequest $request
     *
     * @return DescribeRtcChannelUserListResponse
     */
    public function describeRtcChannelUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcChannelUserListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcDurationDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeRtcDurationDataResponse
     */
    public function describeRtcDurationDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcDurationDataResponse::fromMap($this->doRPCRequest('DescribeRtcDurationData', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcDurationDataRequest $request
     *
     * @return DescribeRtcDurationDataResponse
     */
    public function describeRtcDurationData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcDurationDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcPeakChannelCntDataRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeRtcPeakChannelCntDataResponse
     */
    public function describeRtcPeakChannelCntDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcPeakChannelCntDataResponse::fromMap($this->doRPCRequest('DescribeRtcPeakChannelCntData', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcPeakChannelCntDataRequest $request
     *
     * @return DescribeRtcPeakChannelCntDataResponse
     */
    public function describeRtcPeakChannelCntData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcPeakChannelCntDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcPeakUserCntDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeRtcPeakUserCntDataResponse
     */
    public function describeRtcPeakUserCntDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcPeakUserCntDataResponse::fromMap($this->doRPCRequest('DescribeRtcPeakUserCntData', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcPeakUserCntDataRequest $request
     *
     * @return DescribeRtcPeakUserCntDataResponse
     */
    public function describeRtcPeakUserCntData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcPeakUserCntDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcScaleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeRtcScaleResponse
     */
    public function describeRtcScaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcScaleResponse::fromMap($this->doRPCRequest('DescribeRtcScale', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcScaleRequest $request
     *
     * @return DescribeRtcScaleResponse
     */
    public function describeRtcScale($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcScaleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcScaleDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRtcScaleDetailResponse
     */
    public function describeRtcScaleDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcScaleDetailResponse::fromMap($this->doRPCRequest('DescribeRtcScaleDetail', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcScaleDetailRequest $request
     *
     * @return DescribeRtcScaleDetailResponse
     */
    public function describeRtcScaleDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcScaleDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcUserCntDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRtcUserCntDataResponse
     */
    public function describeRtcUserCntDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcUserCntDataResponse::fromMap($this->doRPCRequest('DescribeRtcUserCntData', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcUserCntDataRequest $request
     *
     * @return DescribeRtcUserCntDataResponse
     */
    public function describeRtcUserCntData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcUserCntDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcUserEventsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeRtcUserEventsResponse
     */
    public function describeRtcUserEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcUserEventsResponse::fromMap($this->doRPCRequest('DescribeRtcUserEvents', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcUserEventsRequest $request
     *
     * @return DescribeRtcUserEventsResponse
     */
    public function describeRtcUserEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcUserEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRtcUserListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRtcUserListResponse
     */
    public function describeRtcUserListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRtcUserListResponse::fromMap($this->doRPCRequest('DescribeRtcUserList', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRtcUserListRequest $request
     *
     * @return DescribeRtcUserListResponse
     */
    public function describeRtcUserList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcUserListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserInfoInChannelRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserInfoInChannelResponse
     */
    public function describeUserInfoInChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserInfoInChannelResponse::fromMap($this->doRPCRequest('DescribeUserInfoInChannel', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserInfoInChannelRequest $request
     *
     * @return DescribeUserInfoInChannelResponse
     */
    public function describeUserInfoInChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserInfoInChannelWithOptions($request, $runtime);
    }

    /**
     * @param DisableMPURuleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DisableMPURuleResponse
     */
    public function disableMPURuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableMPURuleResponse::fromMap($this->doRPCRequest('DisableMPURule', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableMPURuleRequest $request
     *
     * @return DisableMPURuleResponse
     */
    public function disableMPURule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableMPURuleWithOptions($request, $runtime);
    }

    /**
     * @param EnableMPURuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return EnableMPURuleResponse
     */
    public function enableMPURuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableMPURuleResponse::fromMap($this->doRPCRequest('EnableMPURule', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableMPURuleRequest $request
     *
     * @return EnableMPURuleResponse
     */
    public function enableMPURule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableMPURuleWithOptions($request, $runtime);
    }

    /**
     * @param GetMPUTaskStatusRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetMPUTaskStatusResponse
     */
    public function getMPUTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetMPUTaskStatusResponse::fromMap($this->doRPCRequest('GetMPUTaskStatus', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetMPUTaskStatusRequest $request
     *
     * @return GetMPUTaskStatusResponse
     */
    public function getMPUTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMPUTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ModifyAppResponse
     */
    public function modifyAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAppResponse::fromMap($this->doRPCRequest('ModifyApp', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAppRequest $request
     *
     * @return ModifyAppResponse
     */
    public function modifyApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppWithOptions($request, $runtime);
    }

    /**
     * @param ModifyConferenceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyConferenceResponse
     */
    public function modifyConferenceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyConferenceResponse::fromMap($this->doRPCRequest('ModifyConference', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyConferenceRequest $request
     *
     * @return ModifyConferenceResponse
     */
    public function modifyConference($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyConferenceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyMPULayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyMPULayoutResponse
     */
    public function modifyMPULayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyMPULayoutResponse::fromMap($this->doRPCRequest('ModifyMPULayout', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyMPULayoutRequest $request
     *
     * @return ModifyMPULayoutResponse
     */
    public function modifyMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyMPULayoutWithOptions($request, $runtime);
    }

    /**
     * @param MuteAudioRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return MuteAudioResponse
     */
    public function muteAudioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MuteAudioResponse::fromMap($this->doRPCRequest('MuteAudio', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MuteAudioRequest $request
     *
     * @return MuteAudioResponse
     */
    public function muteAudio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->muteAudioWithOptions($request, $runtime);
    }

    /**
     * @param MuteAudioAllRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return MuteAudioAllResponse
     */
    public function muteAudioAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MuteAudioAllResponse::fromMap($this->doRPCRequest('MuteAudioAll', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MuteAudioAllRequest $request
     *
     * @return MuteAudioAllResponse
     */
    public function muteAudioAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->muteAudioAllWithOptions($request, $runtime);
    }

    /**
     * @param ReceiveNotifyRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ReceiveNotifyResponse
     */
    public function receiveNotifyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReceiveNotifyResponse::fromMap($this->doRPCRequest('ReceiveNotify', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReceiveNotifyRequest $request
     *
     * @return ReceiveNotifyResponse
     */
    public function receiveNotify($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->receiveNotifyWithOptions($request, $runtime);
    }

    /**
     * @param RemoveParticipantsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RemoveParticipantsResponse
     */
    public function removeParticipantsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveParticipantsResponse::fromMap($this->doRPCRequest('RemoveParticipants', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveParticipantsRequest $request
     *
     * @return RemoveParticipantsResponse
     */
    public function removeParticipants($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeParticipantsWithOptions($request, $runtime);
    }

    /**
     * @param RemoveTerminalsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveTerminalsResponse
     */
    public function removeTerminalsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemoveTerminalsResponse::fromMap($this->doRPCRequest('RemoveTerminals', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemoveTerminalsRequest $request
     *
     * @return RemoveTerminalsResponse
     */
    public function removeTerminals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeTerminalsWithOptions($request, $runtime);
    }

    /**
     * @param SetChannelPropertyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetChannelPropertyResponse
     */
    public function setChannelPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetChannelPropertyResponse::fromMap($this->doRPCRequest('SetChannelProperty', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetChannelPropertyRequest $request
     *
     * @return SetChannelPropertyResponse
     */
    public function setChannelProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setChannelPropertyWithOptions($request, $runtime);
    }

    /**
     * @param StartMPUTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartMPUTaskResponse
     */
    public function startMPUTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartMPUTaskResponse::fromMap($this->doRPCRequest('StartMPUTask', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartMPUTaskRequest $request
     *
     * @return StartMPUTaskResponse
     */
    public function startMPUTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startMPUTaskWithOptions($request, $runtime);
    }

    /**
     * @param StartRecordTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StartRecordTaskResponse
     */
    public function startRecordTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartRecordTaskResponse::fromMap($this->doRPCRequest('StartRecordTask', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartRecordTaskRequest $request
     *
     * @return StartRecordTaskResponse
     */
    public function startRecordTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRecordTaskWithOptions($request, $runtime);
    }

    /**
     * @param StopChannelUserPublishRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return StopChannelUserPublishResponse
     */
    public function stopChannelUserPublishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopChannelUserPublishResponse::fromMap($this->doRPCRequest('StopChannelUserPublish', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopChannelUserPublishRequest $request
     *
     * @return StopChannelUserPublishResponse
     */
    public function stopChannelUserPublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopChannelUserPublishWithOptions($request, $runtime);
    }

    /**
     * @param StopMPUTaskRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopMPUTaskResponse
     */
    public function stopMPUTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopMPUTaskResponse::fromMap($this->doRPCRequest('StopMPUTask', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopMPUTaskRequest $request
     *
     * @return StopMPUTaskResponse
     */
    public function stopMPUTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMPUTaskWithOptions($request, $runtime);
    }

    /**
     * @param StopRecordTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopRecordTaskResponse
     */
    public function stopRecordTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopRecordTaskResponse::fromMap($this->doRPCRequest('StopRecordTask', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopRecordTaskRequest $request
     *
     * @return StopRecordTaskResponse
     */
    public function stopRecordTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRecordTaskWithOptions($request, $runtime);
    }

    /**
     * @param UnmuteAudioRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnmuteAudioResponse
     */
    public function unmuteAudioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnmuteAudioResponse::fromMap($this->doRPCRequest('UnmuteAudio', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnmuteAudioRequest $request
     *
     * @return UnmuteAudioResponse
     */
    public function unmuteAudio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unmuteAudioWithOptions($request, $runtime);
    }

    /**
     * @param UnmuteAudioAllRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnmuteAudioAllResponse
     */
    public function unmuteAudioAllWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnmuteAudioAllResponse::fromMap($this->doRPCRequest('UnmuteAudioAll', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnmuteAudioAllRequest $request
     *
     * @return UnmuteAudioAllResponse
     */
    public function unmuteAudioAll($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unmuteAudioAllWithOptions($request, $runtime);
    }

    /**
     * @param UpdateChannelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateChannelResponse
     */
    public function updateChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateChannelResponse::fromMap($this->doRPCRequest('UpdateChannel', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateChannelRequest $request
     *
     * @return UpdateChannelResponse
     */
    public function updateChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChannelWithOptions($request, $runtime);
    }

    /**
     * @param UpdateMPULayoutRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMPULayoutResponse
     */
    public function updateMPULayoutWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateMPULayoutResponse::fromMap($this->doRPCRequest('UpdateMPULayout', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMPULayoutRequest $request
     *
     * @return UpdateMPULayoutResponse
     */
    public function updateMPULayout($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMPULayoutWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRecordTaskRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateRecordTaskResponse
     */
    public function updateRecordTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRecordTaskResponse::fromMap($this->doRPCRequest('UpdateRecordTask', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRecordTaskRequest $request
     *
     * @return UpdateRecordTaskResponse
     */
    public function updateRecordTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordTaskWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRecordTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateRecordTemplateResponse
     */
    public function updateRecordTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRecordTemplateResponse::fromMap($this->doRPCRequest('UpdateRecordTemplate', '2018-01-11', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRecordTemplateRequest $request
     *
     * @return UpdateRecordTemplateResponse
     */
    public function updateRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRecordTemplateWithOptions($request, $runtime);
    }
}
