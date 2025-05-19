<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cms\V20180308\Models\AccessKeyGetRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\AccessKeyGetResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\AddMyGroupInstancesRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\AddMyGroupInstancesResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\CreateAlarmRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\CreateAlarmResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\CreateHybridDoubleWriteRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\CreateHybridDoubleWriteResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\CreateMonitoringTemplateRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\CreateMonitoringTemplateResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\CreateMyGroupsRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\CreateMyGroupsResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\CreateTaskRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\CreateTaskResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteAlarmRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteAlarmResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteCustomMetricRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteCustomMetricResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteHybridDoubleWriteRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteHybridDoubleWriteResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteMetricRulesRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteMetricRulesResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteMetricRuleTargetsRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteMetricRuleTargetsResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteMyGroupInstancesRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteMyGroupInstancesResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteMyGroupsRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteMyGroupsResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteTasksRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteTasksResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmHistoryRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmHistoryResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmsForResourcesRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmsForResourcesResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmsRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmsResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlertHistoryListRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlertHistoryListResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeContactRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeContactResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeHybridDoubleWriteRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeHybridDoubleWriteResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeISPAreaCityRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeISPAreaCityResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeMetricRuleListRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeMetricRuleListResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeTaskDetailRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeTaskDetailResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeTasksRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DescribeTasksResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\DisableAlarmRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\DisableAlarmResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\EnableAlarmRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\EnableAlarmResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\GetContactsRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\GetContactsResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\GetLineSplitResultRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\GetLineSplitResultResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\GetLogColumnTranslateResultRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\GetLogColumnTranslateResultResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\GetMonitoringTemplateRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\GetMonitoringTemplateResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\GetMyGroupsRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\GetMyGroupsResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListAlarmHistoryRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListAlarmHistoryResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListAlarmRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListAlarmResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListContactGroupRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListContactGroupResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListEventRulesRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListEventRulesResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListMyGroupInstancesRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListMyGroupInstancesResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListMyGroupsRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\ListMyGroupsResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\ModifyTaskRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\ModifyTaskResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\NodeListRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\NodeListResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\NodeProcessCreateRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\NodeProcessCreateResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\NodeProcessesRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\NodeProcessesResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\NodeStatusListRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\NodeStatusListResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\NodeUninstallRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\NodeUninstallResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutCustomMetricRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutCustomMetricResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventRuleRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventRuleResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutMetricRuleTargetsRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutMetricRuleTargetsResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutResourceMetricRuleRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutResourceMetricRuleResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryCustomMetricListRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryCustomMetricListResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryMetricDataRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryMetricDataResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryMetricLastRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryMetricLastResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryMetricListRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryMetricListResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryMetricMetaRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryMetricMetaResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryMetricTopRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryMetricTopResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryProjectMetaRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryProjectMetaResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryStaticsAvailabilityRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryStaticsAvailabilityResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryStaticsResponseTimeRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryStaticsResponseTimeResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QuerySystemEventCountRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QuerySystemEventCountResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QuerySystemEventDemoRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QuerySystemEventDemoResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryTaskConfigRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryTaskConfigResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryTaskMonitorDataRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\QueryTaskMonitorDataResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\TaskConfigListRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\TaskConfigListResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\UpdateAlarmRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\UpdateAlarmResponse;
use AlibabaCloud\SDK\Cms\V20180308\Models\UpdateMonitoringTemplateRequest;
use AlibabaCloud\SDK\Cms\V20180308\Models\UpdateMonitoringTemplateResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cms extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cms', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * AccessKeyGet.
     *
     * @param request - AccessKeyGetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AccessKeyGetResponse
     *
     * @param AccessKeyGetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AccessKeyGetResponse
     */
    public function accessKeyGetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AccessKeyGet',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AccessKeyGetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AccessKeyGet.
     *
     * @param request - AccessKeyGetRequest
     *
     * @returns AccessKeyGetResponse
     *
     * @param AccessKeyGetRequest $request
     *
     * @return AccessKeyGetResponse
     */
    public function accessKeyGet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->accessKeyGetWithOptions($request, $runtime);
    }

    /**
     * @param request - AddMyGroupInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddMyGroupInstancesResponse
     *
     * @param AddMyGroupInstancesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddMyGroupInstancesResponse
     */
    public function addMyGroupInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instances) {
            @$query['Instances'] = $request->instances;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddMyGroupInstances',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddMyGroupInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddMyGroupInstancesRequest
     *
     * @returns AddMyGroupInstancesResponse
     *
     * @param AddMyGroupInstancesRequest $request
     *
     * @return AddMyGroupInstancesResponse
     */
    public function addMyGroupInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMyGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * CreateAlarm.
     *
     * @param request - CreateAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAlarmResponse
     *
     * @param CreateAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAlarmResponse
     */
    public function createAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comparisonOperator) {
            @$query['ComparisonOperator'] = $request->comparisonOperator;
        }

        if (null !== $request->contactGroups) {
            @$query['ContactGroups'] = $request->contactGroups;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->notifyType) {
            @$query['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->silenceTime) {
            @$query['SilenceTime'] = $request->silenceTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->statistics) {
            @$query['Statistics'] = $request->statistics;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        if (null !== $request->webhook) {
            @$query['Webhook'] = $request->webhook;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAlarm',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * CreateAlarm.
     *
     * @param request - CreateAlarmRequest
     *
     * @returns CreateAlarmResponse
     *
     * @param CreateAlarmRequest $request
     *
     * @return CreateAlarmResponse
     */
    public function createAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlarmWithOptions($request, $runtime);
    }

    /**
     * 创建双写配置.
     *
     * @param request - CreateHybridDoubleWriteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHybridDoubleWriteResponse
     *
     * @param CreateHybridDoubleWriteRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateHybridDoubleWriteResponse
     */
    public function createHybridDoubleWriteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->sourceNamespace) {
            @$query['SourceNamespace'] = $request->sourceNamespace;
        }

        if (null !== $request->sourceUserId) {
            @$query['SourceUserId'] = $request->sourceUserId;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHybridDoubleWrite',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHybridDoubleWriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建双写配置.
     *
     * @param request - CreateHybridDoubleWriteRequest
     *
     * @returns CreateHybridDoubleWriteResponse
     *
     * @param CreateHybridDoubleWriteRequest $request
     *
     * @return CreateHybridDoubleWriteResponse
     */
    public function createHybridDoubleWrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHybridDoubleWriteWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMonitoringTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMonitoringTemplateResponse
     *
     * @param CreateMonitoringTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateMonitoringTemplateResponse
     */
    public function createMonitoringTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertTemplatesJson) {
            @$query['AlertTemplatesJson'] = $request->alertTemplatesJson;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->hostAvailabilityTemplate) {
            @$query['HostAvailabilityTemplate'] = $request->hostAvailabilityTemplate;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->processMonitorTemplates) {
            @$query['ProcessMonitorTemplates'] = $request->processMonitorTemplates;
        }

        if (null !== $request->systemEventTemplates) {
            @$query['SystemEventTemplates'] = $request->systemEventTemplates;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMonitoringTemplate',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMonitoringTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMonitoringTemplateRequest
     *
     * @returns CreateMonitoringTemplateResponse
     *
     * @param CreateMonitoringTemplateRequest $request
     *
     * @return CreateMonitoringTemplateResponse
     */
    public function createMonitoringTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMonitoringTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateMyGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMyGroupsResponse
     *
     * @param CreateMyGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateMyGroupsResponse
     */
    public function createMyGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindUrl) {
            @$query['BindUrl'] = $request->bindUrl;
        }

        if (null !== $request->contactGroups) {
            @$query['ContactGroups'] = $request->contactGroups;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->options) {
            @$query['Options'] = $request->options;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMyGroups',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMyGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateMyGroupsRequest
     *
     * @returns CreateMyGroupsResponse
     *
     * @param CreateMyGroupsRequest $request
     *
     * @return CreateMyGroupsResponse
     */
    public function createMyGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMyGroupsWithOptions($request, $runtime);
    }

    /**
     * CreateTask.
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
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->alertIds) {
            @$query['AlertIds'] = $request->alertIds;
        }

        if (null !== $request->alertRule) {
            @$query['AlertRule'] = $request->alertRule;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->intervalUnit) {
            @$query['IntervalUnit'] = $request->intervalUnit;
        }

        if (null !== $request->ispCity) {
            @$query['IspCity'] = $request->ispCity;
        }

        if (null !== $request->options) {
            @$query['Options'] = $request->options;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        if (null !== $request->caller) {
            @$query['caller'] = $request->caller;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTask',
            'version' => '2018-03-08',
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
     * CreateTask.
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
     * DeleteAlarm.
     *
     * @param request - DeleteAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAlarmResponse
     *
     * @param DeleteAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteAlarmResponse
     */
    public function deleteAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAlarm',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteAlarm.
     *
     * @param request - DeleteAlarmRequest
     *
     * @returns DeleteAlarmResponse
     *
     * @param DeleteAlarmRequest $request
     *
     * @return DeleteAlarmResponse
     */
    public function deleteAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlarmWithOptions($request, $runtime);
    }

    /**
     * DeleteCustomMetric.
     *
     * @param request - DeleteCustomMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomMetricResponse
     *
     * @param DeleteCustomMetricRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCustomMetricResponse
     */
    public function deleteCustomMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->md5) {
            @$query['Md5'] = $request->md5;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->UUID) {
            @$query['UUID'] = $request->UUID;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomMetric',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteCustomMetric.
     *
     * @param request - DeleteCustomMetricRequest
     *
     * @returns DeleteCustomMetricResponse
     *
     * @param DeleteCustomMetricRequest $request
     *
     * @return DeleteCustomMetricResponse
     */
    public function deleteCustomMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomMetricWithOptions($request, $runtime);
    }

    /**
     * 删除双写配置.
     *
     * @param request - DeleteHybridDoubleWriteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHybridDoubleWriteResponse
     *
     * @param DeleteHybridDoubleWriteRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteHybridDoubleWriteResponse
     */
    public function deleteHybridDoubleWriteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceNamespace) {
            @$query['SourceNamespace'] = $request->sourceNamespace;
        }

        if (null !== $request->sourceUserId) {
            @$query['SourceUserId'] = $request->sourceUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHybridDoubleWrite',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHybridDoubleWriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除双写配置.
     *
     * @param request - DeleteHybridDoubleWriteRequest
     *
     * @returns DeleteHybridDoubleWriteResponse
     *
     * @param DeleteHybridDoubleWriteRequest $request
     *
     * @return DeleteHybridDoubleWriteResponse
     */
    public function deleteHybridDoubleWrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHybridDoubleWriteWithOptions($request, $runtime);
    }

    /**
     * DeleteMetricRuleTargets.
     *
     * @param request - DeleteMetricRuleTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMetricRuleTargetsResponse
     *
     * @param DeleteMetricRuleTargetsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteMetricRuleTargetsResponse
     */
    public function deleteMetricRuleTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->targetIds) {
            @$query['TargetIds'] = $request->targetIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMetricRuleTargets',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMetricRuleTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteMetricRuleTargets.
     *
     * @param request - DeleteMetricRuleTargetsRequest
     *
     * @returns DeleteMetricRuleTargetsResponse
     *
     * @param DeleteMetricRuleTargetsRequest $request
     *
     * @return DeleteMetricRuleTargetsResponse
     */
    public function deleteMetricRuleTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * DeleteMetricRules.
     *
     * @param request - DeleteMetricRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMetricRulesResponse
     *
     * @param DeleteMetricRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMetricRulesResponse
     */
    public function deleteMetricRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMetricRules',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMetricRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DeleteMetricRules.
     *
     * @param request - DeleteMetricRulesRequest
     *
     * @returns DeleteMetricRulesResponse
     *
     * @param DeleteMetricRulesRequest $request
     *
     * @return DeleteMetricRulesResponse
     */
    public function deleteMetricRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMetricRulesWithOptions($request, $runtime);
    }

    /**
     * deletemygroupinstances.
     *
     * @param request - DeleteMyGroupInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMyGroupInstancesResponse
     *
     * @param DeleteMyGroupInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteMyGroupInstancesResponse
     */
    public function deleteMyGroupInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceIdList) {
            @$query['InstanceIdList'] = $request->instanceIdList;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMyGroupInstances',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMyGroupInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * deletemygroupinstances.
     *
     * @param request - DeleteMyGroupInstancesRequest
     *
     * @returns DeleteMyGroupInstancesResponse
     *
     * @param DeleteMyGroupInstancesRequest $request
     *
     * @return DeleteMyGroupInstancesResponse
     */
    public function deleteMyGroupInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMyGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteMyGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMyGroupsResponse
     *
     * @param DeleteMyGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteMyGroupsResponse
     */
    public function deleteMyGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMyGroups',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMyGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteMyGroupsRequest
     *
     * @returns DeleteMyGroupsResponse
     *
     * @param DeleteMyGroupsRequest $request
     *
     * @return DeleteMyGroupsResponse
     */
    public function deleteMyGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMyGroupsWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTasksResponse
     *
     * @param DeleteTasksRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteTasksResponse
     */
    public function deleteTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->isDeleteAlarms) {
            @$query['IsDeleteAlarms'] = $request->isDeleteAlarms;
        }

        if (null !== $request->taskIds) {
            @$query['TaskIds'] = $request->taskIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTasks',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteTasksRequest
     *
     * @returns DeleteTasksResponse
     *
     * @param DeleteTasksRequest $request
     *
     * @return DeleteTasksResponse
     */
    public function deleteTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTasksWithOptions($request, $runtime);
    }

    /**
     * DescribeAlarmHistory.
     *
     * @param request - DescribeAlarmHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlarmHistoryResponse
     *
     * @param DescribeAlarmHistoryRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAlarmHistoryResponse
     */
    public function describeAlarmHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertName) {
            @$query['AlertName'] = $request->alertName;
        }

        if (null !== $request->ascending) {
            @$query['Ascending'] = $request->ascending;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->onlyCount) {
            @$query['OnlyCount'] = $request->onlyCount;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAlarmHistory',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlarmHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeAlarmHistory.
     *
     * @param request - DescribeAlarmHistoryRequest
     *
     * @returns DescribeAlarmHistoryResponse
     *
     * @param DescribeAlarmHistoryRequest $request
     *
     * @return DescribeAlarmHistoryResponse
     */
    public function describeAlarmHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlarmHistoryWithOptions($request, $runtime);
    }

    /**
     * DescribeAlarms.
     *
     * @param request - DescribeAlarmsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlarmsResponse
     *
     * @param DescribeAlarmsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeAlarmsResponse
     */
    public function describeAlarmsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertState) {
            @$query['AlertState'] = $request->alertState;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->enableState) {
            @$query['EnableState'] = $request->enableState;
        }

        if (null !== $request->groupBy) {
            @$query['GroupBy'] = $request->groupBy;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->nameKeyword) {
            @$query['NameKeyword'] = $request->nameKeyword;
        }

        if (null !== $request->names) {
            @$query['Names'] = $request->names;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAlarms',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlarmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeAlarms.
     *
     * @param request - DescribeAlarmsRequest
     *
     * @returns DescribeAlarmsResponse
     *
     * @param DescribeAlarmsRequest $request
     *
     * @return DescribeAlarmsResponse
     */
    public function describeAlarms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlarmsWithOptions($request, $runtime);
    }

    /**
     * describealarmsforresources.
     *
     * @param request - DescribeAlarmsForResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlarmsForResourcesResponse
     *
     * @param DescribeAlarmsForResourcesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAlarmsForResourcesResponse
     */
    public function describeAlarmsForResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertState) {
            @$query['AlertState'] = $request->alertState;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->enableState) {
            @$query['EnableState'] = $request->enableState;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAlarmsForResources',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlarmsForResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * describealarmsforresources.
     *
     * @param request - DescribeAlarmsForResourcesRequest
     *
     * @returns DescribeAlarmsForResourcesResponse
     *
     * @param DescribeAlarmsForResourcesRequest $request
     *
     * @return DescribeAlarmsForResourcesResponse
     */
    public function describeAlarmsForResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlarmsForResourcesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeAlertHistoryListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertHistoryListResponse
     *
     * @param DescribeAlertHistoryListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAlertHistoryListResponse
     */
    public function describeAlertHistoryListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertName) {
            @$query['AlertName'] = $request->alertName;
        }

        if (null !== $request->ascending) {
            @$query['Ascending'] = $request->ascending;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->onlyCount) {
            @$query['OnlyCount'] = $request->onlyCount;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertHistoryList',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertHistoryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAlertHistoryListRequest
     *
     * @returns DescribeAlertHistoryListResponse
     *
     * @param DescribeAlertHistoryListRequest $request
     *
     * @return DescribeAlertHistoryListResponse
     */
    public function describeAlertHistoryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertHistoryListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeContactRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeContactResponse
     *
     * @param DescribeContactRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeContactResponse
     */
    public function describeContactWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactName) {
            @$query['ContactName'] = $request->contactName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeContact',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeContactResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeContactRequest
     *
     * @returns DescribeContactResponse
     *
     * @param DescribeContactRequest $request
     *
     * @return DescribeContactResponse
     */
    public function describeContact($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContactWithOptions($request, $runtime);
    }

    /**
     * 查询本数据源被双写到哪里.
     *
     * @param request - DescribeHybridDoubleWriteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHybridDoubleWriteResponse
     *
     * @param DescribeHybridDoubleWriteRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHybridDoubleWriteResponse
     */
    public function describeHybridDoubleWriteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceNamespace) {
            @$query['SourceNamespace'] = $request->sourceNamespace;
        }

        if (null !== $request->sourceUserId) {
            @$query['SourceUserId'] = $request->sourceUserId;
        }

        if (null !== $request->targetNamespace) {
            @$query['TargetNamespace'] = $request->targetNamespace;
        }

        if (null !== $request->targetUserId) {
            @$query['TargetUserId'] = $request->targetUserId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHybridDoubleWrite',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHybridDoubleWriteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询本数据源被双写到哪里.
     *
     * @param request - DescribeHybridDoubleWriteRequest
     *
     * @returns DescribeHybridDoubleWriteResponse
     *
     * @param DescribeHybridDoubleWriteRequest $request
     *
     * @return DescribeHybridDoubleWriteResponse
     */
    public function describeHybridDoubleWrite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHybridDoubleWriteWithOptions($request, $runtime);
    }

    /**
     * 获取探针列表.
     *
     * @param request - DescribeISPAreaCityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeISPAreaCityResponse
     *
     * @param DescribeISPAreaCityRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeISPAreaCityResponse
     */
    public function describeISPAreaCityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->city) {
            @$query['City'] = $request->city;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeISPAreaCity',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeISPAreaCityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取探针列表.
     *
     * @param request - DescribeISPAreaCityRequest
     *
     * @returns DescribeISPAreaCityResponse
     *
     * @param DescribeISPAreaCityRequest $request
     *
     * @return DescribeISPAreaCityResponse
     */
    public function describeISPAreaCity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeISPAreaCityWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeMetricRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricRuleListResponse
     *
     * @param DescribeMetricRuleListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeMetricRuleListResponse
     */
    public function describeMetricRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertState) {
            @$query['AlertState'] = $request->alertState;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->enableState) {
            @$query['EnableState'] = $request->enableState;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->ruleIds) {
            @$query['RuleIds'] = $request->ruleIds;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricRuleList',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeMetricRuleListRequest
     *
     * @returns DescribeMetricRuleListResponse
     *
     * @param DescribeMetricRuleListRequest $request
     *
     * @return DescribeMetricRuleListResponse
     */
    public function describeMetricRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricRuleListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeTaskDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTaskDetailResponse
     *
     * @param DescribeTaskDetailRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTaskDetailResponse
     */
    public function describeTaskDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTaskDetail',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTaskDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeTaskDetailRequest
     *
     * @returns DescribeTaskDetailResponse
     *
     * @param DescribeTaskDetailRequest $request
     *
     * @return DescribeTaskDetailResponse
     */
    public function describeTaskDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTaskDetailWithOptions($request, $runtime);
    }

    /**
     * DescribeTasks.
     *
     * @param request - DescribeTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTasksResponse
     *
     * @param DescribeTasksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTasksResponse
     */
    public function describeTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTasks',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DescribeTasks.
     *
     * @param request - DescribeTasksRequest
     *
     * @returns DescribeTasksResponse
     *
     * @param DescribeTasksRequest $request
     *
     * @return DescribeTasksResponse
     */
    public function describeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTasksWithOptions($request, $runtime);
    }

    /**
     * DisableAlarm.
     *
     * @param request - DisableAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableAlarmResponse
     *
     * @param DisableAlarmRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DisableAlarmResponse
     */
    public function disableAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableAlarm',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * DisableAlarm.
     *
     * @param request - DisableAlarmRequest
     *
     * @returns DisableAlarmResponse
     *
     * @param DisableAlarmRequest $request
     *
     * @return DisableAlarmResponse
     */
    public function disableAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAlarmWithOptions($request, $runtime);
    }

    /**
     * EnableAlarm.
     *
     * @param request - EnableAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAlarmResponse
     *
     * @param EnableAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return EnableAlarmResponse
     */
    public function enableAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnableAlarm',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * EnableAlarm.
     *
     * @param request - EnableAlarmRequest
     *
     * @returns EnableAlarmResponse
     *
     * @param EnableAlarmRequest $request
     *
     * @return EnableAlarmResponse
     */
    public function enableAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAlarmWithOptions($request, $runtime);
    }

    /**
     * @param request - GetContactsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetContactsResponse
     *
     * @param GetContactsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetContactsResponse
     */
    public function getContactsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetContacts',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetContactsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetContactsRequest
     *
     * @returns GetContactsResponse
     *
     * @param GetContactsRequest $request
     *
     * @return GetContactsResponse
     */
    public function getContacts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContactsWithOptions($request, $runtime);
    }

    /**
     * 获取行切分结果.
     *
     * @param request - GetLineSplitResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLineSplitResultResponse
     *
     * @param GetLineSplitResultRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetLineSplitResultResponse
     */
    public function getLineSplitResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->line) {
            @$query['Line'] = $request->line;
        }

        if (null !== $request->prefix) {
            @$query['Prefix'] = $request->prefix;
        }

        if (null !== $request->regex) {
            @$query['Regex'] = $request->regex;
        }

        if (null !== $request->selectContent) {
            @$query['SelectContent'] = $request->selectContent;
        }

        if (null !== $request->splitType) {
            @$query['SplitType'] = $request->splitType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLineSplitResult',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLineSplitResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取行切分结果.
     *
     * @param request - GetLineSplitResultRequest
     *
     * @returns GetLineSplitResultResponse
     *
     * @param GetLineSplitResultRequest $request
     *
     * @return GetLineSplitResultResponse
     */
    public function getLineSplitResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLineSplitResultWithOptions($request, $runtime);
    }

    /**
     * 获取日期提取结果的翻译.
     *
     * @param request - GetLogColumnTranslateResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogColumnTranslateResultResponse
     *
     * @param GetLogColumnTranslateResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetLogColumnTranslateResultResponse
     */
    public function getLogColumnTranslateResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->columnValue) {
            @$query['ColumnValue'] = $request->columnValue;
        }

        if (null !== $request->translateConfig) {
            @$query['TranslateConfig'] = $request->translateConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLogColumnTranslateResult',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLogColumnTranslateResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取日期提取结果的翻译.
     *
     * @param request - GetLogColumnTranslateResultRequest
     *
     * @returns GetLogColumnTranslateResultResponse
     *
     * @param GetLogColumnTranslateResultRequest $request
     *
     * @return GetLogColumnTranslateResultResponse
     */
    public function getLogColumnTranslateResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogColumnTranslateResultWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMonitoringTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMonitoringTemplateResponse
     *
     * @param GetMonitoringTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetMonitoringTemplateResponse
     */
    public function getMonitoringTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMonitoringTemplate',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMonitoringTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMonitoringTemplateRequest
     *
     * @returns GetMonitoringTemplateResponse
     *
     * @param GetMonitoringTemplateRequest $request
     *
     * @return GetMonitoringTemplateResponse
     */
    public function getMonitoringTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMonitoringTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - GetMyGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMyGroupsResponse
     *
     * @param GetMyGroupsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetMyGroupsResponse
     */
    public function getMyGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindUrl) {
            @$query['BindUrl'] = $request->bindUrl;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->selectContactGroups) {
            @$query['SelectContactGroups'] = $request->selectContactGroups;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMyGroups',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetMyGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetMyGroupsRequest
     *
     * @returns GetMyGroupsResponse
     *
     * @param GetMyGroupsRequest $request
     *
     * @return GetMyGroupsResponse
     */
    public function getMyGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMyGroupsWithOptions($request, $runtime);
    }

    /**
     * ListAlarm.
     *
     * @param request - ListAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlarmResponse
     *
     * @param ListAlarmRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListAlarmResponse
     */
    public function listAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dimension) {
            @$query['Dimension'] = $request->dimension;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->isEnable) {
            @$query['IsEnable'] = $request->isEnable;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlarm',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListAlarm.
     *
     * @param request - ListAlarmRequest
     *
     * @returns ListAlarmResponse
     *
     * @param ListAlarmRequest $request
     *
     * @return ListAlarmResponse
     */
    public function listAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmWithOptions($request, $runtime);
    }

    /**
     * ListAlarmHistory.
     *
     * @param request - ListAlarmHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlarmHistoryResponse
     *
     * @param ListAlarmHistoryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAlarmHistoryResponse
     */
    public function listAlarmHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlarmHistory',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAlarmHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ListAlarmHistory.
     *
     * @param request - ListAlarmHistoryRequest
     *
     * @returns ListAlarmHistoryResponse
     *
     * @param ListAlarmHistoryRequest $request
     *
     * @return ListAlarmHistoryResponse
     */
    public function listAlarmHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmHistoryWithOptions($request, $runtime);
    }

    /**
     * @param request - ListContactGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListContactGroupResponse
     *
     * @param ListContactGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListContactGroupResponse
     */
    public function listContactGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListContactGroup',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListContactGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListContactGroupRequest
     *
     * @returns ListContactGroupResponse
     *
     * @param ListContactGroupRequest $request
     *
     * @return ListContactGroupResponse
     */
    public function listContactGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listContactGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - ListEventRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEventRulesResponse
     *
     * @param ListEventRulesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListEventRulesResponse
     */
    public function listEventRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->namePrefix) {
            @$query['NamePrefix'] = $request->namePrefix;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEventRules',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEventRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListEventRulesRequest
     *
     * @returns ListEventRulesResponse
     *
     * @param ListEventRulesRequest $request
     *
     * @return ListEventRulesResponse
     */
    public function listEventRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEventRulesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMyGroupInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMyGroupInstancesResponse
     *
     * @param ListMyGroupInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListMyGroupInstancesResponse
     */
    public function listMyGroupInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->total) {
            @$query['Total'] = $request->total;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMyGroupInstances',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMyGroupInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMyGroupInstancesRequest
     *
     * @returns ListMyGroupInstancesResponse
     *
     * @param ListMyGroupInstancesRequest $request
     *
     * @return ListMyGroupInstancesResponse
     */
    public function listMyGroupInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMyGroupInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListMyGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMyGroupsResponse
     *
     * @param ListMyGroupsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListMyGroupsResponse
     */
    public function listMyGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bindUrls) {
            @$query['BindUrls'] = $request->bindUrls;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->selectContactGroups) {
            @$query['SelectContactGroups'] = $request->selectContactGroups;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListMyGroups',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListMyGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ListMyGroupsRequest
     *
     * @returns ListMyGroupsResponse
     *
     * @param ListMyGroupsRequest $request
     *
     * @return ListMyGroupsResponse
     */
    public function listMyGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMyGroupsWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTaskResponse
     *
     * @param ModifyTaskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyTaskResponse
     */
    public function modifyTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->address) {
            @$query['Address'] = $request->address;
        }

        if (null !== $request->alertIds) {
            @$query['AlertIds'] = $request->alertIds;
        }

        if (null !== $request->alertRule) {
            @$query['AlertRule'] = $request->alertRule;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->intervalUnit) {
            @$query['IntervalUnit'] = $request->intervalUnit;
        }

        if (null !== $request->ispCity) {
            @$query['IspCity'] = $request->ispCity;
        }

        if (null !== $request->options) {
            @$query['Options'] = $request->options;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        if (null !== $request->caller) {
            @$query['caller'] = $request->caller;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTask',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyTaskRequest
     *
     * @returns ModifyTaskResponse
     *
     * @param ModifyTaskRequest $request
     *
     * @return ModifyTaskResponse
     */
    public function modifyTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTaskWithOptions($request, $runtime);
    }

    /**
     * NodeList.
     *
     * @param request - NodeListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns NodeListResponse
     *
     * @param NodeListRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return NodeListResponse
     */
    public function nodeListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->instanceRegionId) {
            @$query['InstanceRegionId'] = $request->instanceRegionId;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->serialNumbers) {
            @$query['SerialNumbers'] = $request->serialNumbers;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'NodeList',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return NodeListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * NodeList.
     *
     * @param request - NodeListRequest
     *
     * @returns NodeListResponse
     *
     * @param NodeListRequest $request
     *
     * @return NodeListResponse
     */
    public function nodeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->nodeListWithOptions($request, $runtime);
    }

    /**
     * NodeProcessCreate.
     *
     * @param request - NodeProcessCreateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns NodeProcessCreateResponse
     *
     * @param NodeProcessCreateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return NodeProcessCreateResponse
     */
    public function nodeProcessCreateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->processName) {
            @$query['ProcessName'] = $request->processName;
        }

        if (null !== $request->processUser) {
            @$query['ProcessUser'] = $request->processUser;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'NodeProcessCreate',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return NodeProcessCreateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * NodeProcessCreate.
     *
     * @param request - NodeProcessCreateRequest
     *
     * @returns NodeProcessCreateResponse
     *
     * @param NodeProcessCreateRequest $request
     *
     * @return NodeProcessCreateResponse
     */
    public function nodeProcessCreate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->nodeProcessCreateWithOptions($request, $runtime);
    }

    /**
     * NodeProcesses.
     *
     * @param request - NodeProcessesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns NodeProcessesResponse
     *
     * @param NodeProcessesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return NodeProcessesResponse
     */
    public function nodeProcessesWithOptions($request, $runtime)
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
            'action' => 'NodeProcesses',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return NodeProcessesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * NodeProcesses.
     *
     * @param request - NodeProcessesRequest
     *
     * @returns NodeProcessesResponse
     *
     * @param NodeProcessesRequest $request
     *
     * @return NodeProcessesResponse
     */
    public function nodeProcesses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->nodeProcessesWithOptions($request, $runtime);
    }

    /**
     * NodeStatusList.
     *
     * @param request - NodeStatusListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns NodeStatusListResponse
     *
     * @param NodeStatusListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return NodeStatusListResponse
     */
    public function nodeStatusListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'NodeStatusList',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return NodeStatusListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * NodeStatusList.
     *
     * @param request - NodeStatusListRequest
     *
     * @returns NodeStatusListResponse
     *
     * @param NodeStatusListRequest $request
     *
     * @return NodeStatusListResponse
     */
    public function nodeStatusList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->nodeStatusListWithOptions($request, $runtime);
    }

    /**
     * NodeUninstall.
     *
     * @param request - NodeUninstallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns NodeUninstallResponse
     *
     * @param NodeUninstallRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return NodeUninstallResponse
     */
    public function nodeUninstallWithOptions($request, $runtime)
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
            'action' => 'NodeUninstall',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return NodeUninstallResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * NodeUninstall.
     *
     * @param request - NodeUninstallRequest
     *
     * @returns NodeUninstallResponse
     *
     * @param NodeUninstallRequest $request
     *
     * @return NodeUninstallResponse
     */
    public function nodeUninstall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->nodeUninstallWithOptions($request, $runtime);
    }

    /**
     * PutCustomMetric.
     *
     * @param request - PutCustomMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutCustomMetricResponse
     *
     * @param PutCustomMetricRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PutCustomMetricResponse
     */
    public function putCustomMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->metricList) {
            @$query['MetricList'] = $request->metricList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutCustomMetric',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutCustomMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * PutCustomMetric.
     *
     * @param request - PutCustomMetricRequest
     *
     * @returns PutCustomMetricResponse
     *
     * @param PutCustomMetricRequest $request
     *
     * @return PutCustomMetricResponse
     */
    public function putCustomMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCustomMetricWithOptions($request, $runtime);
    }

    /**
     * PutEvent.
     *
     * @param request - PutEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutEventResponse
     *
     * @param PutEventRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return PutEventResponse
     */
    public function putEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventInfo) {
            @$query['EventInfo'] = $request->eventInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutEvent',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * PutEvent.
     *
     * @param request - PutEventRequest
     *
     * @returns PutEventResponse
     *
     * @param PutEventRequest $request
     *
     * @return PutEventResponse
     */
    public function putEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEventWithOptions($request, $runtime);
    }

    /**
     * @param request - PutEventRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutEventRuleResponse
     *
     * @param PutEventRuleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PutEventRuleResponse
     */
    public function putEventRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->eventPattern) {
            @$query['EventPattern'] = $request->eventPattern;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutEventRule',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutEventRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PutEventRuleRequest
     *
     * @returns PutEventRuleResponse
     *
     * @param PutEventRuleRequest $request
     *
     * @return PutEventRuleResponse
     */
    public function putEventRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEventRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - PutEventTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutEventTargetsResponse
     *
     * @param PutEventTargetsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return PutEventTargetsResponse
     */
    public function putEventTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactParameters) {
            @$query['ContactParameters'] = $request->contactParameters;
        }

        if (null !== $request->fcParameters) {
            @$query['FcParameters'] = $request->fcParameters;
        }

        if (null !== $request->mnsParameters) {
            @$query['MnsParameters'] = $request->mnsParameters;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->slsParameters) {
            @$query['SlsParameters'] = $request->slsParameters;
        }

        if (null !== $request->webhookParameters) {
            @$query['WebhookParameters'] = $request->webhookParameters;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutEventTargets',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutEventTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - PutEventTargetsRequest
     *
     * @returns PutEventTargetsResponse
     *
     * @param PutEventTargetsRequest $request
     *
     * @return PutEventTargetsResponse
     */
    public function putEventTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEventTargetsWithOptions($request, $runtime);
    }

    /**
     * PutMetricRuleTargets.
     *
     * @param request - PutMetricRuleTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutMetricRuleTargetsResponse
     *
     * @param PutMetricRuleTargetsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PutMetricRuleTargetsResponse
     */
    public function putMetricRuleTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->targets) {
            @$query['Targets'] = $request->targets;
        }

        $body = [];
        if (null !== $request->actions) {
            @$body['Actions'] = $request->actions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PutMetricRuleTargets',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutMetricRuleTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * PutMetricRuleTargets.
     *
     * @param request - PutMetricRuleTargetsRequest
     *
     * @returns PutMetricRuleTargetsResponse
     *
     * @param PutMetricRuleTargetsRequest $request
     *
     * @return PutMetricRuleTargetsResponse
     */
    public function putMetricRuleTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putMetricRuleTargetsWithOptions($request, $runtime);
    }

    /**
     * PutResourceMetricRule.
     *
     * @param request - PutResourceMetricRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutResourceMetricRuleResponse
     *
     * @param PutResourceMetricRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PutResourceMetricRuleResponse
     */
    public function putResourceMetricRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->contactGroups) {
            @$query['ContactGroups'] = $request->contactGroups;
        }

        if (null !== $request->effectiveInterval) {
            @$query['EffectiveInterval'] = $request->effectiveInterval;
        }

        if (null !== $request->emailSubject) {
            @$query['EmailSubject'] = $request->emailSubject;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->noEffectiveInterval) {
            @$query['NoEffectiveInterval'] = $request->noEffectiveInterval;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->resources) {
            @$query['Resources'] = $request->resources;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->silenceTime) {
            @$query['SilenceTime'] = $request->silenceTime;
        }

        if (null !== $request->webhook) {
            @$query['Webhook'] = $request->webhook;
        }

        if (null !== $request->escalations) {
            @$query['Escalations'] = $request->escalations;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutResourceMetricRule',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutResourceMetricRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * PutResourceMetricRule.
     *
     * @param request - PutResourceMetricRuleRequest
     *
     * @returns PutResourceMetricRuleResponse
     *
     * @param PutResourceMetricRuleRequest $request
     *
     * @return PutResourceMetricRuleResponse
     */
    public function putResourceMetricRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putResourceMetricRuleWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryCustomMetricListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryCustomMetricListResponse
     *
     * @param QueryCustomMetricListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCustomMetricListResponse
     */
    public function queryCustomMetricListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dimension) {
            @$query['Dimension'] = $request->dimension;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->md5) {
            @$query['Md5'] = $request->md5;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryCustomMetricList',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryCustomMetricListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryCustomMetricListRequest
     *
     * @returns QueryCustomMetricListResponse
     *
     * @param QueryCustomMetricListRequest $request
     *
     * @return QueryCustomMetricListResponse
     */
    public function queryCustomMetricList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomMetricListWithOptions($request, $runtime);
    }

    /**
     * QueryMetricData.
     *
     * @param request - QueryMetricDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMetricDataResponse
     *
     * @param QueryMetricDataRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMetricDataResponse
     */
    public function queryMetricDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->express) {
            @$query['Express'] = $request->express;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->project) {
            @$query['Project'] = $request->project;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMetricData',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * QueryMetricData.
     *
     * @param request - QueryMetricDataRequest
     *
     * @returns QueryMetricDataResponse
     *
     * @param QueryMetricDataRequest $request
     *
     * @return QueryMetricDataResponse
     */
    public function queryMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricDataWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMetricLastRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMetricLastResponse
     *
     * @param QueryMetricLastRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMetricLastResponse
     */
    public function queryMetricLastWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->express) {
            @$query['Express'] = $request->express;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->project) {
            @$query['Project'] = $request->project;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMetricLast',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMetricLastResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMetricLastRequest
     *
     * @returns QueryMetricLastResponse
     *
     * @param QueryMetricLastRequest $request
     *
     * @return QueryMetricLastResponse
     */
    public function queryMetricLast($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricLastWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryMetricListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMetricListResponse
     *
     * @param QueryMetricListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMetricListResponse
     */
    public function queryMetricListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->express) {
            @$query['Express'] = $request->express;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->project) {
            @$query['Project'] = $request->project;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMetricList',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMetricListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryMetricListRequest
     *
     * @returns QueryMetricListResponse
     *
     * @param QueryMetricListRequest $request
     *
     * @return QueryMetricListResponse
     */
    public function queryMetricList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricListWithOptions($request, $runtime);
    }

    /**
     * 查询云监控开放的监控项详情.
     *
     * @param request - QueryMetricMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMetricMetaResponse
     *
     * @param QueryMetricMetaRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryMetricMetaResponse
     */
    public function queryMetricMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->project) {
            @$query['Project'] = $request->project;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMetricMeta',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMetricMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云监控开放的监控项详情.
     *
     * @param request - QueryMetricMetaRequest
     *
     * @returns QueryMetricMetaResponse
     *
     * @param QueryMetricMetaRequest $request
     *
     * @return QueryMetricMetaResponse
     */
    public function queryMetricMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricMetaWithOptions($request, $runtime);
    }

    /**
     * QueryMetricTop.
     *
     * @param request - QueryMetricTopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryMetricTopResponse
     *
     * @param QueryMetricTopRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QueryMetricTopResponse
     */
    public function queryMetricTopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->express) {
            @$query['Express'] = $request->express;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->metric) {
            @$query['Metric'] = $request->metric;
        }

        if (null !== $request->orderDesc) {
            @$query['OrderDesc'] = $request->orderDesc;
        }

        if (null !== $request->orderby) {
            @$query['Orderby'] = $request->orderby;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->project) {
            @$query['Project'] = $request->project;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryMetricTop',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryMetricTopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * QueryMetricTop.
     *
     * @param request - QueryMetricTopRequest
     *
     * @returns QueryMetricTopResponse
     *
     * @param QueryMetricTopRequest $request
     *
     * @return QueryMetricTopResponse
     */
    public function queryMetricTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMetricTopWithOptions($request, $runtime);
    }

    /**
     * 查询云监控支持的时序类监控项产品列表.
     *
     * @param request - QueryProjectMetaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryProjectMetaResponse
     *
     * @param QueryProjectMetaRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryProjectMetaResponse
     */
    public function queryProjectMetaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labels) {
            @$query['Labels'] = $request->labels;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryProjectMeta',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryProjectMetaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云监控支持的时序类监控项产品列表.
     *
     * @param request - QueryProjectMetaRequest
     *
     * @returns QueryProjectMetaResponse
     *
     * @param QueryProjectMetaRequest $request
     *
     * @return QueryProjectMetaResponse
     */
    public function queryProjectMeta($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProjectMetaWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryStaticsAvailabilityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryStaticsAvailabilityResponse
     *
     * @param QueryStaticsAvailabilityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryStaticsAvailabilityResponse
     */
    public function queryStaticsAvailabilityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryStaticsAvailability',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryStaticsAvailabilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryStaticsAvailabilityRequest
     *
     * @returns QueryStaticsAvailabilityResponse
     *
     * @param QueryStaticsAvailabilityRequest $request
     *
     * @return QueryStaticsAvailabilityResponse
     */
    public function queryStaticsAvailability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStaticsAvailabilityWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryStaticsResponseTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryStaticsResponseTimeResponse
     *
     * @param QueryStaticsResponseTimeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryStaticsResponseTimeResponse
     */
    public function queryStaticsResponseTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->timeRange) {
            @$query['TimeRange'] = $request->timeRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryStaticsResponseTime',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryStaticsResponseTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryStaticsResponseTimeRequest
     *
     * @returns QueryStaticsResponseTimeResponse
     *
     * @param QueryStaticsResponseTimeRequest $request
     *
     * @return QueryStaticsResponseTimeResponse
     */
    public function queryStaticsResponseTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryStaticsResponseTimeWithOptions($request, $runtime);
    }

    /**
     * QuerySystemEventCount.
     *
     * @param request - QuerySystemEventCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySystemEventCountResponse
     *
     * @param QuerySystemEventCountRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QuerySystemEventCountResponse
     */
    public function querySystemEventCountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->queryJson) {
            @$query['QueryJson'] = $request->queryJson;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySystemEventCount',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySystemEventCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * QuerySystemEventCount.
     *
     * @param request - QuerySystemEventCountRequest
     *
     * @returns QuerySystemEventCountResponse
     *
     * @param QuerySystemEventCountRequest $request
     *
     * @return QuerySystemEventCountResponse
     */
    public function querySystemEventCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySystemEventCountWithOptions($request, $runtime);
    }

    /**
     * @param request - QuerySystemEventDemoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QuerySystemEventDemoResponse
     *
     * @param QuerySystemEventDemoRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QuerySystemEventDemoResponse
     */
    public function querySystemEventDemoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventName) {
            @$query['EventName'] = $request->eventName;
        }

        if (null !== $request->product) {
            @$query['Product'] = $request->product;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QuerySystemEventDemo',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QuerySystemEventDemoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QuerySystemEventDemoRequest
     *
     * @returns QuerySystemEventDemoResponse
     *
     * @param QuerySystemEventDemoRequest $request
     *
     * @return QuerySystemEventDemoResponse
     */
    public function querySystemEventDemo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySystemEventDemoWithOptions($request, $runtime);
    }

    /**
     * @param request - QueryTaskConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTaskConfigResponse
     *
     * @param QueryTaskConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryTaskConfigResponse
     */
    public function queryTaskConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'QueryTaskConfig',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - QueryTaskConfigRequest
     *
     * @returns QueryTaskConfigResponse
     *
     * @param QueryTaskConfigRequest $request
     *
     * @return QueryTaskConfigResponse
     */
    public function queryTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskConfigWithOptions($request, $runtime);
    }

    /**
     * QueryTaskMonitorData.
     *
     * @param request - QueryTaskMonitorDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryTaskMonitorDataResponse
     *
     * @param QueryTaskMonitorDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTaskMonitorDataResponse
     */
    public function queryTaskMonitorDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cursor) {
            @$query['Cursor'] = $request->cursor;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->metricName) {
            @$query['metricName'] = $request->metricName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'QueryTaskMonitorData',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryTaskMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * QueryTaskMonitorData.
     *
     * @param request - QueryTaskMonitorDataRequest
     *
     * @returns QueryTaskMonitorDataResponse
     *
     * @param QueryTaskMonitorDataRequest $request
     *
     * @return QueryTaskMonitorDataResponse
     */
    public function queryTaskMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTaskMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @param request - TaskConfigListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TaskConfigListResponse
     *
     * @param TaskConfigListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TaskConfigListResponse
     */
    public function taskConfigListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskName) {
            @$query['TaskName'] = $request->taskName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TaskConfigList',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TaskConfigListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - TaskConfigListRequest
     *
     * @returns TaskConfigListResponse
     *
     * @param TaskConfigListRequest $request
     *
     * @return TaskConfigListResponse
     */
    public function taskConfigList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->taskConfigListWithOptions($request, $runtime);
    }

    /**
     * UpdateAlarm.
     *
     * @param request - UpdateAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAlarmResponse
     *
     * @param UpdateAlarmRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateAlarmResponse
     */
    public function updateAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->comparisonOperator) {
            @$query['ComparisonOperator'] = $request->comparisonOperator;
        }

        if (null !== $request->contactGroups) {
            @$query['ContactGroups'] = $request->contactGroups;
        }

        if (null !== $request->dryRun) {
            @$query['DryRun'] = $request->dryRun;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->evaluationCount) {
            @$query['EvaluationCount'] = $request->evaluationCount;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->notifyType) {
            @$query['NotifyType'] = $request->notifyType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->silenceTime) {
            @$query['SilenceTime'] = $request->silenceTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->statistics) {
            @$query['Statistics'] = $request->statistics;
        }

        if (null !== $request->threshold) {
            @$query['Threshold'] = $request->threshold;
        }

        if (null !== $request->webhook) {
            @$query['Webhook'] = $request->webhook;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAlarm',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * UpdateAlarm.
     *
     * @param request - UpdateAlarmRequest
     *
     * @returns UpdateAlarmResponse
     *
     * @param UpdateAlarmRequest $request
     *
     * @return UpdateAlarmResponse
     */
    public function updateAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAlarmWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateMonitoringTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateMonitoringTemplateResponse
     *
     * @param UpdateMonitoringTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateMonitoringTemplateResponse
     */
    public function updateMonitoringTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alertTemplatesJson) {
            @$query['AlertTemplatesJson'] = $request->alertTemplatesJson;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->hostAvailabilityTemplate) {
            @$query['HostAvailabilityTemplate'] = $request->hostAvailabilityTemplate;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->processMonitorTemplates) {
            @$query['ProcessMonitorTemplates'] = $request->processMonitorTemplates;
        }

        if (null !== $request->restVersion) {
            @$query['RestVersion'] = $request->restVersion;
        }

        if (null !== $request->systemEventTemplates) {
            @$query['SystemEventTemplates'] = $request->systemEventTemplates;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateMonitoringTemplate',
            'version' => '2018-03-08',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateMonitoringTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateMonitoringTemplateRequest
     *
     * @returns UpdateMonitoringTemplateResponse
     *
     * @param UpdateMonitoringTemplateRequest $request
     *
     * @return UpdateMonitoringTemplateResponse
     */
    public function updateMonitoringTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMonitoringTemplateWithOptions($request, $runtime);
    }
}
