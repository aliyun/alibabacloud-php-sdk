<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AddBlacklistRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AddBlacklistResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AddBlacklistShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AddTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AddTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AddTaskShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AgentCancelCallRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AgentCancelCallResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AgentCancelCallShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AgentRecoverCallRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AgentRecoverCallResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\AgentRecoverCallShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\DetailsRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\DetailsResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\DetailsShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\EditTaskRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\EditTaskResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\EditTaskShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\ImportNumberRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\ImportNumberResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\ImportNumberShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\ImportNumberV2Request;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\ImportNumberV2Response;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\ImportNumberV2ShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\PageRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\PageResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\PageShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\SmsTemplateCreateRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\SmsTemplateCreateResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\SmsTemplatePageListRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\SmsTemplatePageListResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCallChatsRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCallChatsResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCallInfoRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCallInfoResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCallListRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCallListResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCallListShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCancelCallRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCancelCallResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCancelCallShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskListRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskListResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskRecoverCallRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskRecoverCallResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskRecoverCallShrinkRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TemplateListRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\TemplateListResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\UpdateAgentStatusRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\UpdateAgentStatusResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\UpdateTaskCustomerRequest;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\UpdateTaskCustomerResponse;
use AlibabaCloud\SDK\Aiccs\V20230516\Models\UpdateTaskCustomerShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 添加黑名单接口.
     *
     * @param tmpReq - AddBlacklistRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddBlacklistResponse
     *
     * @param AddBlacklistRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return AddBlacklistResponse
     */
    public function addBlacklistWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddBlacklistShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->numbers) {
            $request->numbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }

        $query = [];
        if (null !== $request->expiredDay) {
            @$query['ExpiredDay'] = $request->expiredDay;
        }

        if (null !== $request->numbersShrink) {
            @$query['Numbers'] = $request->numbersShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
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
            'action' => 'AddBlacklist',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加黑名单接口.
     *
     * @param request - AddBlacklistRequest
     *
     * @returns AddBlacklistResponse
     *
     * @param AddBlacklistRequest $request
     *
     * @return AddBlacklistResponse
     */
    public function addBlacklist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBlacklistWithOptions($request, $runtime);
    }

    /**
     * 创建任务接口.
     *
     * @param tmpReq - AddTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddTaskResponse
     *
     * @param AddTaskRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return AddTaskResponse
     */
    public function addTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->callTimeList) {
            $request->callTimeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->callTimeList, 'CallTimeList', 'json');
        }

        if (null !== $tmpReq->repeatReason) {
            $request->repeatReasonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->repeatReason, 'RepeatReason', 'json');
        }

        if (null !== $tmpReq->repeatTimes) {
            $request->repeatTimesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->repeatTimes, 'RepeatTimes', 'json');
        }

        if (null !== $tmpReq->sendSmsPlan) {
            $request->sendSmsPlanShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sendSmsPlan, 'SendSmsPlan', 'json');
        }

        $query = [];
        if (null !== $request->callTimeListShrink) {
            @$query['CallTimeList'] = $request->callTimeListShrink;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->flashSmsTemplateId) {
            @$query['FlashSmsTemplateId'] = $request->flashSmsTemplateId;
        }

        if (null !== $request->flashSmsType) {
            @$query['FlashSmsType'] = $request->flashSmsType;
        }

        if (null !== $request->maxConcurrency) {
            @$query['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playSleepVal) {
            @$query['PlaySleepVal'] = $request->playSleepVal;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->recallType) {
            @$query['RecallType'] = $request->recallType;
        }

        if (null !== $request->recordPath) {
            @$query['RecordPath'] = $request->recordPath;
        }

        if (null !== $request->repeatCount) {
            @$query['RepeatCount'] = $request->repeatCount;
        }

        if (null !== $request->repeatInterval) {
            @$query['RepeatInterval'] = $request->repeatInterval;
        }

        if (null !== $request->repeatReasonShrink) {
            @$query['RepeatReason'] = $request->repeatReasonShrink;
        }

        if (null !== $request->repeatTimesShrink) {
            @$query['RepeatTimes'] = $request->repeatTimesShrink;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendSmsPlanShrink) {
            @$query['SendSmsPlan'] = $request->sendSmsPlanShrink;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddTask',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建任务接口.
     *
     * @param request - AddTaskRequest
     *
     * @returns AddTaskResponse
     *
     * @param AddTaskRequest $request
     *
     * @return AddTaskResponse
     */
    public function addTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTaskWithOptions($request, $runtime);
    }

    /**
     * 坐席取消号码外呼
     *
     * @param tmpReq - AgentCancelCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AgentCancelCallResponse
     *
     * @param AgentCancelCallRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return AgentCancelCallResponse
     */
    public function agentCancelCallWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AgentCancelCallShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->numbers) {
            $request->numbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentTag) {
            @$query['AgentTag'] = $request->agentTag;
        }

        if (null !== $request->numbersShrink) {
            @$query['Numbers'] = $request->numbersShrink;
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

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AgentCancelCall',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AgentCancelCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 坐席取消号码外呼
     *
     * @param request - AgentCancelCallRequest
     *
     * @returns AgentCancelCallResponse
     *
     * @param AgentCancelCallRequest $request
     *
     * @return AgentCancelCallResponse
     */
    public function agentCancelCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->agentCancelCallWithOptions($request, $runtime);
    }

    /**
     * 坐席任务恢复号码
     *
     * @param tmpReq - AgentRecoverCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AgentRecoverCallResponse
     *
     * @param AgentRecoverCallRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return AgentRecoverCallResponse
     */
    public function agentRecoverCallWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AgentRecoverCallShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->numbers) {
            $request->numbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentTag) {
            @$query['AgentTag'] = $request->agentTag;
        }

        if (null !== $request->beginImportTime) {
            @$query['BeginImportTime'] = $request->beginImportTime;
        }

        if (null !== $request->endImportTime) {
            @$query['EndImportTime'] = $request->endImportTime;
        }

        if (null !== $request->numbersShrink) {
            @$query['Numbers'] = $request->numbersShrink;
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

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AgentRecoverCall',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AgentRecoverCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 坐席任务恢复号码
     *
     * @param request - AgentRecoverCallRequest
     *
     * @returns AgentRecoverCallResponse
     *
     * @param AgentRecoverCallRequest $request
     *
     * @return AgentRecoverCallResponse
     */
    public function agentRecoverCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->agentRecoverCallWithOptions($request, $runtime);
    }

    /**
     * AI批量任务查询号码状态接口.
     *
     * @param tmpReq - DetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetailsResponse
     *
     * @param DetailsRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return DetailsResponse
     */
    public function detailsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetailsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->numbers) {
            $request->numbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }

        $query = [];
        if (null !== $request->batchId) {
            @$query['BatchId'] = $request->batchId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->numberStatus) {
            @$query['NumberStatus'] = $request->numberStatus;
        }

        if (null !== $request->numbersShrink) {
            @$query['Numbers'] = $request->numbersShrink;
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

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Details',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AI批量任务查询号码状态接口.
     *
     * @param request - DetailsRequest
     *
     * @returns DetailsResponse
     *
     * @param DetailsRequest $request
     *
     * @return DetailsResponse
     */
    public function details($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detailsWithOptions($request, $runtime);
    }

    /**
     * 编辑任务接口.
     *
     * @param tmpReq - EditTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EditTaskResponse
     *
     * @param EditTaskRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return EditTaskResponse
     */
    public function editTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new EditTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->callTimeList) {
            $request->callTimeListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->callTimeList, 'CallTimeList', 'json');
        }

        if (null !== $tmpReq->repeatReason) {
            $request->repeatReasonShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->repeatReason, 'RepeatReason', 'json');
        }

        if (null !== $tmpReq->repeatTimes) {
            $request->repeatTimesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->repeatTimes, 'RepeatTimes', 'json');
        }

        if (null !== $tmpReq->sendSmsPlan) {
            $request->sendSmsPlanShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sendSmsPlan, 'SendSmsPlan', 'json');
        }

        $query = [];
        if (null !== $request->callTimeListShrink) {
            @$query['CallTimeList'] = $request->callTimeListShrink;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->flashSmsTemplateId) {
            @$query['FlashSmsTemplateId'] = $request->flashSmsTemplateId;
        }

        if (null !== $request->flashSmsType) {
            @$query['FlashSmsType'] = $request->flashSmsType;
        }

        if (null !== $request->maxConcurrency) {
            @$query['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playSleepVal) {
            @$query['PlaySleepVal'] = $request->playSleepVal;
        }

        if (null !== $request->playTimes) {
            @$query['PlayTimes'] = $request->playTimes;
        }

        if (null !== $request->recallType) {
            @$query['RecallType'] = $request->recallType;
        }

        if (null !== $request->recordPath) {
            @$query['RecordPath'] = $request->recordPath;
        }

        if (null !== $request->repeatCount) {
            @$query['RepeatCount'] = $request->repeatCount;
        }

        if (null !== $request->repeatInterval) {
            @$query['RepeatInterval'] = $request->repeatInterval;
        }

        if (null !== $request->repeatReasonShrink) {
            @$query['RepeatReason'] = $request->repeatReasonShrink;
        }

        if (null !== $request->repeatTimesShrink) {
            @$query['RepeatTimes'] = $request->repeatTimesShrink;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->sendSmsPlanShrink) {
            @$query['SendSmsPlan'] = $request->sendSmsPlanShrink;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EditTask',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EditTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 编辑任务接口.
     *
     * @param request - EditTaskRequest
     *
     * @returns EditTaskResponse
     *
     * @param EditTaskRequest $request
     *
     * @return EditTaskResponse
     */
    public function editTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->editTaskWithOptions($request, $runtime);
    }

    /**
     * 导入号码
     *
     * @param tmpReq - ImportNumberRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportNumberResponse
     *
     * @param ImportNumberRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ImportNumberResponse
     */
    public function importNumberWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ImportNumberShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customers) {
            $request->customersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customers, 'Customers', 'json');
        }

        $query = [];
        if (null !== $request->customersShrink) {
            @$query['Customers'] = $request->customersShrink;
        }

        if (null !== $request->failReturn) {
            @$query['FailReturn'] = $request->failReturn;
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
            'action' => 'ImportNumber',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导入号码
     *
     * @param request - ImportNumberRequest
     *
     * @returns ImportNumberResponse
     *
     * @param ImportNumberRequest $request
     *
     * @return ImportNumberResponse
     */
    public function importNumber($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importNumberWithOptions($request, $runtime);
    }

    /**
     * 导入号码
     *
     * @param tmpReq - ImportNumberV2Request
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportNumberV2Response
     *
     * @param ImportNumberV2Request $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ImportNumberV2Response
     */
    public function importNumberV2WithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ImportNumberV2ShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customers) {
            $request->customersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customers, 'Customers', 'json');
        }

        $query = [];
        if (null !== $request->customersShrink) {
            @$query['Customers'] = $request->customersShrink;
        }

        if (null !== $request->failReturn) {
            @$query['FailReturn'] = $request->failReturn;
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
            'action' => 'ImportNumberV2',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportNumberV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 导入号码
     *
     * @param request - ImportNumberV2Request
     *
     * @returns ImportNumberV2Response
     *
     * @param ImportNumberV2Request $request
     *
     * @return ImportNumberV2Response
     */
    public function importNumberV2($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importNumberV2WithOptions($request, $runtime);
    }

    /**
     * 查询企业黑名单.
     *
     * @param tmpReq - PageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PageResponse
     *
     * @param PageRequest    $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return PageResponse
     */
    public function pageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->numbers) {
            $request->numbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }

        $query = [];
        if (null !== $request->numbersShrink) {
            @$query['Numbers'] = $request->numbersShrink;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Page',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询企业黑名单.
     *
     * @param request - PageRequest
     *
     * @returns PageResponse
     *
     * @param PageRequest $request
     *
     * @return PageResponse
     */
    public function page($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageWithOptions($request, $runtime);
    }

    /**
     * 短信模板创建.
     *
     * @param request - SmsTemplateCreateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SmsTemplateCreateResponse
     *
     * @param SmsTemplateCreateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SmsTemplateCreateResponse
     */
    public function smsTemplateCreateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
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

        if (null !== $request->sign) {
            @$query['Sign'] = $request->sign;
        }

        if (null !== $request->smsType) {
            @$query['SmsType'] = $request->smsType;
        }

        if (null !== $request->templateName) {
            @$query['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SmsTemplateCreate',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SmsTemplateCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 短信模板创建.
     *
     * @param request - SmsTemplateCreateRequest
     *
     * @returns SmsTemplateCreateResponse
     *
     * @param SmsTemplateCreateRequest $request
     *
     * @return SmsTemplateCreateResponse
     */
    public function smsTemplateCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smsTemplateCreateWithOptions($request, $runtime);
    }

    /**
     * 短信模板列表查询.
     *
     * @param request - SmsTemplatePageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SmsTemplatePageListResponse
     *
     * @param SmsTemplatePageListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SmsTemplatePageListResponse
     */
    public function smsTemplatePageListWithOptions($request, $runtime)
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

        if (null !== $request->sign) {
            @$query['Sign'] = $request->sign;
        }

        if (null !== $request->smsType) {
            @$query['SmsType'] = $request->smsType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SmsTemplatePageList',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SmsTemplatePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 短信模板列表查询.
     *
     * @param request - SmsTemplatePageListRequest
     *
     * @returns SmsTemplatePageListResponse
     *
     * @param SmsTemplatePageListRequest $request
     *
     * @return SmsTemplatePageListResponse
     */
    public function smsTemplatePageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->smsTemplatePageListWithOptions($request, $runtime);
    }

    /**
     * 查询聊天记录接口.
     *
     * @param request - TaskCallChatsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TaskCallChatsResponse
     *
     * @param TaskCallChatsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return TaskCallChatsResponse
     */
    public function taskCallChatsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentTag) {
            @$query['AgentTag'] = $request->agentTag;
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

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TaskCallChats',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TaskCallChatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询聊天记录接口.
     *
     * @param request - TaskCallChatsRequest
     *
     * @returns TaskCallChatsResponse
     *
     * @param TaskCallChatsRequest $request
     *
     * @return TaskCallChatsResponse
     */
    public function taskCallChats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taskCallChatsWithOptions($request, $runtime);
    }

    /**
     * 获取任务外呼情况接口.
     *
     * @param request - TaskCallInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TaskCallInfoResponse
     *
     * @param TaskCallInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TaskCallInfoResponse
     */
    public function taskCallInfoWithOptions($request, $runtime)
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
            'action' => 'TaskCallInfo',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TaskCallInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取任务外呼情况接口.
     *
     * @param request - TaskCallInfoRequest
     *
     * @returns TaskCallInfoResponse
     *
     * @param TaskCallInfoRequest $request
     *
     * @return TaskCallInfoResponse
     */
    public function taskCallInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taskCallInfoWithOptions($request, $runtime);
    }

    /**
     * AI批量任务查询外呼记录接口.
     *
     * @param tmpReq - TaskCallListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TaskCallListResponse
     *
     * @param TaskCallListRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return TaskCallListResponse
     */
    public function taskCallListWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new TaskCallListShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->intentTags) {
            $request->intentTagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->intentTags, 'IntentTags', 'json');
        }

        if (null !== $tmpReq->numbers) {
            $request->numbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }

        $query = [];
        if (null !== $request->batchId) {
            @$query['BatchId'] = $request->batchId;
        }

        if (null !== $request->callDate) {
            @$query['CallDate'] = $request->callDate;
        }

        if (null !== $request->endCallDate) {
            @$query['EndCallDate'] = $request->endCallDate;
        }

        if (null !== $request->intentTagsShrink) {
            @$query['IntentTags'] = $request->intentTagsShrink;
        }

        if (null !== $request->numbersShrink) {
            @$query['Numbers'] = $request->numbersShrink;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
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
            'action' => 'TaskCallList',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TaskCallListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AI批量任务查询外呼记录接口.
     *
     * @param request - TaskCallListRequest
     *
     * @returns TaskCallListResponse
     *
     * @param TaskCallListRequest $request
     *
     * @return TaskCallListResponse
     */
    public function taskCallList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taskCallListWithOptions($request, $runtime);
    }

    /**
     * 批量任务取消号码外呼
     *
     * @param tmpReq - TaskCancelCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TaskCancelCallResponse
     *
     * @param TaskCancelCallRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return TaskCancelCallResponse
     */
    public function taskCancelCallWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new TaskCancelCallShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->numbers) {
            $request->numbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->numbersShrink) {
            @$query['Numbers'] = $request->numbersShrink;
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

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TaskCancelCall',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TaskCancelCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量任务取消号码外呼
     *
     * @param request - TaskCancelCallRequest
     *
     * @returns TaskCancelCallResponse
     *
     * @param TaskCancelCallRequest $request
     *
     * @return TaskCancelCallResponse
     */
    public function taskCancelCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taskCancelCallWithOptions($request, $runtime);
    }

    /**
     * 查询任务列表接口.
     *
     * @param request - TaskListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TaskListResponse
     *
     * @param TaskListRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return TaskListResponse
     */
    public function taskListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTime) {
            @$query['CreateTime'] = $request->createTime;
        }

        if (null !== $request->lastCallTime) {
            @$query['LastCallTime'] = $request->lastCallTime;
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
            'action' => 'TaskList',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询任务列表接口.
     *
     * @param request - TaskListRequest
     *
     * @returns TaskListResponse
     *
     * @param TaskListRequest $request
     *
     * @return TaskListResponse
     */
    public function taskList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taskListWithOptions($request, $runtime);
    }

    /**
     * 批量任务恢复号码
     *
     * @param tmpReq - TaskRecoverCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TaskRecoverCallResponse
     *
     * @param TaskRecoverCallRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return TaskRecoverCallResponse
     */
    public function taskRecoverCallWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new TaskRecoverCallShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->numbers) {
            $request->numbersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->beginImportTime) {
            @$query['BeginImportTime'] = $request->beginImportTime;
        }

        if (null !== $request->endImportTime) {
            @$query['EndImportTime'] = $request->endImportTime;
        }

        if (null !== $request->numbersShrink) {
            @$query['Numbers'] = $request->numbersShrink;
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

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TaskRecoverCall',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TaskRecoverCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 批量任务恢复号码
     *
     * @param request - TaskRecoverCallRequest
     *
     * @returns TaskRecoverCallResponse
     *
     * @param TaskRecoverCallRequest $request
     *
     * @return TaskRecoverCallResponse
     */
    public function taskRecoverCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taskRecoverCallWithOptions($request, $runtime);
    }

    /**
     * 话术模板列表查询接口.
     *
     * @param request - TemplateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TemplateListResponse
     *
     * @param TemplateListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TemplateListResponse
     */
    public function templateListWithOptions($request, $runtime)
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

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TemplateList',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 话术模板列表查询接口.
     *
     * @param request - TemplateListRequest
     *
     * @returns TemplateListResponse
     *
     * @param TemplateListRequest $request
     *
     * @return TemplateListResponse
     */
    public function templateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->templateListWithOptions($request, $runtime);
    }

    /**
     * 修改坐席状态
     *
     * @param request - UpdateAgentStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAgentStatusResponse
     *
     * @param UpdateAgentStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAgentStatusResponse
     */
    public function updateAgentStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->agentStatus) {
            @$query['AgentStatus'] = $request->agentStatus;
        }

        if (null !== $request->agentTag) {
            @$query['AgentTag'] = $request->agentTag;
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
            'action' => 'UpdateAgentStatus',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改坐席状态
     *
     * @param request - UpdateAgentStatusRequest
     *
     * @returns UpdateAgentStatusResponse
     *
     * @param UpdateAgentStatusRequest $request
     *
     * @return UpdateAgentStatusResponse
     */
    public function updateAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAgentStatusWithOptions($request, $runtime);
    }

    /**
     * 更新当天导入的号码
     *
     * @param tmpReq - UpdateTaskCustomerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTaskCustomerResponse
     *
     * @param UpdateTaskCustomerRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateTaskCustomerResponse
     */
    public function updateTaskCustomerWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateTaskCustomerShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->customers) {
            $request->customersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->customers, 'Customers', 'json');
        }

        $query = [];
        if (null !== $request->customersShrink) {
            @$query['Customers'] = $request->customersShrink;
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
            'action' => 'UpdateTaskCustomer',
            'version' => '2023-05-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTaskCustomerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新当天导入的号码
     *
     * @param request - UpdateTaskCustomerRequest
     *
     * @returns UpdateTaskCustomerResponse
     *
     * @param UpdateTaskCustomerRequest $request
     *
     * @return UpdateTaskCustomerResponse
     */
    public function updateTaskCustomer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTaskCustomerWithOptions($request, $runtime);
    }
}
