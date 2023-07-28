<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
     * @param AddBlacklistRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return AddBlacklistResponse
     */
    public function addBlacklistWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddBlacklistShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->numbers)) {
            $request->numbersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->expiredDay)) {
            $query['ExpiredDay'] = $request->expiredDay;
        }
        if (!Utils::isUnset($request->numbersShrink)) {
            $query['Numbers'] = $request->numbersShrink;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
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
            'action'      => 'AddBlacklist',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBlacklistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AddTaskRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return AddTaskResponse
     */
    public function addTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->callTimeList)) {
            $request->callTimeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->callTimeList, 'CallTimeList', 'json');
        }
        if (!Utils::isUnset($tmpReq->repeatReason)) {
            $request->repeatReasonShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->repeatReason, 'RepeatReason', 'json');
        }
        if (!Utils::isUnset($tmpReq->repeatTimes)) {
            $request->repeatTimesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->repeatTimes, 'RepeatTimes', 'json');
        }
        if (!Utils::isUnset($tmpReq->sendSmsPlan)) {
            $request->sendSmsPlanShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sendSmsPlan, 'SendSmsPlan', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->callTimeListShrink)) {
            $query['CallTimeList'] = $request->callTimeListShrink;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $query['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $query['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playSleepVal)) {
            $query['PlaySleepVal'] = $request->playSleepVal;
        }
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->recallType)) {
            $query['RecallType'] = $request->recallType;
        }
        if (!Utils::isUnset($request->recordPath)) {
            $query['RecordPath'] = $request->recordPath;
        }
        if (!Utils::isUnset($request->repeatCount)) {
            $query['RepeatCount'] = $request->repeatCount;
        }
        if (!Utils::isUnset($request->repeatInterval)) {
            $query['RepeatInterval'] = $request->repeatInterval;
        }
        if (!Utils::isUnset($request->repeatReasonShrink)) {
            $query['RepeatReason'] = $request->repeatReasonShrink;
        }
        if (!Utils::isUnset($request->repeatTimesShrink)) {
            $query['RepeatTimes'] = $request->repeatTimesShrink;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendSmsPlanShrink)) {
            $query['SendSmsPlan'] = $request->sendSmsPlanShrink;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddTask',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AgentCancelCallRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return AgentCancelCallResponse
     */
    public function agentCancelCallWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AgentCancelCallShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->numbers)) {
            $request->numbersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentTag)) {
            $query['AgentTag'] = $request->agentTag;
        }
        if (!Utils::isUnset($request->numbersShrink)) {
            $query['Numbers'] = $request->numbersShrink;
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
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AgentCancelCall',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AgentCancelCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param AgentRecoverCallRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return AgentRecoverCallResponse
     */
    public function agentRecoverCallWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AgentRecoverCallShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->numbers)) {
            $request->numbersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentTag)) {
            $query['AgentTag'] = $request->agentTag;
        }
        if (!Utils::isUnset($request->beginImportTime)) {
            $query['BeginImportTime'] = $request->beginImportTime;
        }
        if (!Utils::isUnset($request->endImportTime)) {
            $query['EndImportTime'] = $request->endImportTime;
        }
        if (!Utils::isUnset($request->numbersShrink)) {
            $query['Numbers'] = $request->numbersShrink;
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
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AgentRecoverCall',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AgentRecoverCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DetailsRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return DetailsResponse
     */
    public function detailsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DetailsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->numbers)) {
            $request->numbersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->batchId)) {
            $query['BatchId'] = $request->batchId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->numberStatus)) {
            $query['NumberStatus'] = $request->numberStatus;
        }
        if (!Utils::isUnset($request->numbersShrink)) {
            $query['Numbers'] = $request->numbersShrink;
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
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Details',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param EditTaskRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return EditTaskResponse
     */
    public function editTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new EditTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->callTimeList)) {
            $request->callTimeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->callTimeList, 'CallTimeList', 'json');
        }
        if (!Utils::isUnset($tmpReq->repeatReason)) {
            $request->repeatReasonShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->repeatReason, 'RepeatReason', 'json');
        }
        if (!Utils::isUnset($tmpReq->repeatTimes)) {
            $request->repeatTimesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->repeatTimes, 'RepeatTimes', 'json');
        }
        if (!Utils::isUnset($tmpReq->sendSmsPlan)) {
            $request->sendSmsPlanShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sendSmsPlan, 'SendSmsPlan', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->callTimeListShrink)) {
            $query['CallTimeList'] = $request->callTimeListShrink;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $query['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $query['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playSleepVal)) {
            $query['PlaySleepVal'] = $request->playSleepVal;
        }
        if (!Utils::isUnset($request->playTimes)) {
            $query['PlayTimes'] = $request->playTimes;
        }
        if (!Utils::isUnset($request->recallType)) {
            $query['RecallType'] = $request->recallType;
        }
        if (!Utils::isUnset($request->recordPath)) {
            $query['RecordPath'] = $request->recordPath;
        }
        if (!Utils::isUnset($request->repeatCount)) {
            $query['RepeatCount'] = $request->repeatCount;
        }
        if (!Utils::isUnset($request->repeatInterval)) {
            $query['RepeatInterval'] = $request->repeatInterval;
        }
        if (!Utils::isUnset($request->repeatReasonShrink)) {
            $query['RepeatReason'] = $request->repeatReasonShrink;
        }
        if (!Utils::isUnset($request->repeatTimesShrink)) {
            $query['RepeatTimes'] = $request->repeatTimesShrink;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->sendSmsPlanShrink)) {
            $query['SendSmsPlan'] = $request->sendSmsPlanShrink;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EditTask',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EditTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ImportNumberRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ImportNumberResponse
     */
    public function importNumberWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ImportNumberShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->customers)) {
            $request->customersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customers, 'Customers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->customersShrink)) {
            $query['Customers'] = $request->customersShrink;
        }
        if (!Utils::isUnset($request->failReturn)) {
            $query['FailReturn'] = $request->failReturn;
        }
        if (!Utils::isUnset($request->outId)) {
            $query['OutId'] = $request->outId;
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
            'action'      => 'ImportNumber',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportNumberResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param PageRequest    $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return PageResponse
     */
    public function pageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->numbers)) {
            $request->numbersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->numbersShrink)) {
            $query['Numbers'] = $request->numbersShrink;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'Page',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SmsTemplateCreateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SmsTemplateCreateResponse
     */
    public function smsTemplateCreateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
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
        if (!Utils::isUnset($request->sign)) {
            $query['Sign'] = $request->sign;
        }
        if (!Utils::isUnset($request->smsType)) {
            $query['SmsType'] = $request->smsType;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SmsTemplateCreate',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SmsTemplateCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param SmsTemplatePageListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SmsTemplatePageListResponse
     */
    public function smsTemplatePageListWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->sign)) {
            $query['Sign'] = $request->sign;
        }
        if (!Utils::isUnset($request->smsType)) {
            $query['SmsType'] = $request->smsType;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SmsTemplatePageList',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SmsTemplatePageListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TaskCallChatsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return TaskCallChatsResponse
     */
    public function taskCallChatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentTag)) {
            $query['AgentTag'] = $request->agentTag;
        }
        if (!Utils::isUnset($request->callId)) {
            $query['CallId'] = $request->callId;
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
            'action'      => 'TaskCallChats',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TaskCallChatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TaskCallInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TaskCallInfoResponse
     */
    public function taskCallInfoWithOptions($request, $runtime)
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
            'action'      => 'TaskCallInfo',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TaskCallInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TaskCallListRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return TaskCallListResponse
     */
    public function taskCallListWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TaskCallListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->intentTags)) {
            $request->intentTagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->intentTags, 'IntentTags', 'json');
        }
        if (!Utils::isUnset($tmpReq->numbers)) {
            $request->numbersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->batchId)) {
            $query['BatchId'] = $request->batchId;
        }
        if (!Utils::isUnset($request->callDate)) {
            $query['CallDate'] = $request->callDate;
        }
        if (!Utils::isUnset($request->endCallDate)) {
            $query['EndCallDate'] = $request->endCallDate;
        }
        if (!Utils::isUnset($request->intentTagsShrink)) {
            $query['IntentTags'] = $request->intentTagsShrink;
        }
        if (!Utils::isUnset($request->numbersShrink)) {
            $query['Numbers'] = $request->numbersShrink;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
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
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TaskCallList',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TaskCallListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TaskCancelCallRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return TaskCancelCallResponse
     */
    public function taskCancelCallWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TaskCancelCallShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->numbers)) {
            $request->numbersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->numbersShrink)) {
            $query['Numbers'] = $request->numbersShrink;
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
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TaskCancelCall',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TaskCancelCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TaskListRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return TaskListResponse
     */
    public function taskListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTime)) {
            $query['CreateTime'] = $request->createTime;
        }
        if (!Utils::isUnset($request->lastCallTime)) {
            $query['LastCallTime'] = $request->lastCallTime;
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
            'action'      => 'TaskList',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TaskListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TaskRecoverCallRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return TaskRecoverCallResponse
     */
    public function taskRecoverCallWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TaskRecoverCallShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->numbers)) {
            $request->numbersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->numbers, 'Numbers', 'json');
        }
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->beginImportTime)) {
            $query['BeginImportTime'] = $request->beginImportTime;
        }
        if (!Utils::isUnset($request->endImportTime)) {
            $query['EndImportTime'] = $request->endImportTime;
        }
        if (!Utils::isUnset($request->numbersShrink)) {
            $query['Numbers'] = $request->numbersShrink;
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
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TaskRecoverCall',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TaskRecoverCallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param TemplateListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TemplateListResponse
     */
    public function templateListWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TemplateList',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TemplateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateAgentStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAgentStatusResponse
     */
    public function updateAgentStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->agentId)) {
            $query['AgentId'] = $request->agentId;
        }
        if (!Utils::isUnset($request->agentStatus)) {
            $query['AgentStatus'] = $request->agentStatus;
        }
        if (!Utils::isUnset($request->agentTag)) {
            $query['AgentTag'] = $request->agentTag;
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
            'action'      => 'UpdateAgentStatus',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateTaskCustomerRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateTaskCustomerResponse
     */
    public function updateTaskCustomerWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTaskCustomerShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->customers)) {
            $request->customersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->customers, 'Customers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->customersShrink)) {
            $query['Customers'] = $request->customersShrink;
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
            'action'      => 'UpdateTaskCustomer',
            'version'     => '2023-05-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTaskCustomerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
