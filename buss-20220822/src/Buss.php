<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Buss\V20220822\Models\BusinessResultServiceRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\BusinessResultServiceResponse;
use AlibabaCloud\SDK\Buss\V20220822\Models\BusinessResultServiceShrinkRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\CreateUserInvestigationInfoQueryTaskRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\CreateUserInvestigationInfoQueryTaskResponse;
use AlibabaCloud\SDK\Buss\V20220822\Models\FindInstanceInfoRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\FindInstanceInfoResponse;
use AlibabaCloud\SDK\Buss\V20220822\Models\FindInstanceInfoShrinkRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\FindUserAvailbleResourcesRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\FindUserAvailbleResourcesResponse;
use AlibabaCloud\SDK\Buss\V20220822\Models\GetSecurityEventDetailRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\GetSecurityEventDetailResponse;
use AlibabaCloud\SDK\Buss\V20220822\Models\PunishResourceSearchRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\PunishResourceSearchResponse;
use AlibabaCloud\SDK\Buss\V20220822\Models\PunishResourceSearchShrinkRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\RecordClickLinkActionRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\RecordClickLinkActionResponse;
use AlibabaCloud\SDK\Buss\V20220822\Models\RiskEventSyncRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\RiskEventSyncResponse;
use AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishEventsRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishEventsResponse;
use AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishEventsShrinkRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishRecordsRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishRecordsResponse;
use AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishRecordsShrinkRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishRequestRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishRequestResponse;
use AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishRequestShrinkRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\UpdateSecurityEventStatusRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\UpdateSecurityEventStatusResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Buss extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('buss', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 处罚请求异步接口回调.
     *
     * @param tmpReq - BusinessResultServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BusinessResultServiceResponse
     *
     * @param BusinessResultServiceRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return BusinessResultServiceResponse
     */
    public function businessResultServiceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BusinessResultServiceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->result) {
            $request->resultShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->result, 'Result', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BusinessResultService',
            'version' => '2022-08-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BusinessResultServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 处罚请求异步接口回调.
     *
     * @param request - BusinessResultServiceRequest
     *
     * @returns BusinessResultServiceResponse
     *
     * @param BusinessResultServiceRequest $request
     *
     * @return BusinessResultServiceResponse
     */
    public function businessResultService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->businessResultServiceWithOptions($request, $runtime);
    }

    /**
     * 协查中心查询任务接口.
     *
     * @param request - CreateUserInvestigationInfoQueryTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateUserInvestigationInfoQueryTaskResponse
     *
     * @param CreateUserInvestigationInfoQueryTaskRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateUserInvestigationInfoQueryTaskResponse
     */
    public function createUserInvestigationInfoQueryTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateUserInvestigationInfoQueryTask',
            'version' => '2022-08-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateUserInvestigationInfoQueryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 协查中心查询任务接口.
     *
     * @param request - CreateUserInvestigationInfoQueryTaskRequest
     *
     * @returns CreateUserInvestigationInfoQueryTaskResponse
     *
     * @param CreateUserInvestigationInfoQueryTaskRequest $request
     *
     * @return CreateUserInvestigationInfoQueryTaskResponse
     */
    public function createUserInvestigationInfoQueryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserInvestigationInfoQueryTaskWithOptions($request, $runtime);
    }

    /**
     * 反查资源.
     *
     * @param tmpReq - FindInstanceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindInstanceInfoResponse
     *
     * @param FindInstanceInfoRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return FindInstanceInfoResponse
     */
    public function findInstanceInfoWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new FindInstanceInfoShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->extras) {
            $request->extrasShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->extras, 'extras', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindInstanceInfo',
            'version' => '2022-08-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindInstanceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 反查资源.
     *
     * @param request - FindInstanceInfoRequest
     *
     * @returns FindInstanceInfoResponse
     *
     * @param FindInstanceInfoRequest $request
     *
     * @return FindInstanceInfoResponse
     */
    public function findInstanceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findInstanceInfoWithOptions($request, $runtime);
    }

    /**
     * 根据用户id查询对应产品下全部可用资产信息接口.
     *
     * @param request - FindUserAvailbleResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FindUserAvailbleResourcesResponse
     *
     * @param FindUserAvailbleResourcesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return FindUserAvailbleResourcesResponse
     */
    public function findUserAvailbleResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FindUserAvailbleResources',
            'version' => '2022-08-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FindUserAvailbleResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据用户id查询对应产品下全部可用资产信息接口.
     *
     * @param request - FindUserAvailbleResourcesRequest
     *
     * @returns FindUserAvailbleResourcesResponse
     *
     * @param FindUserAvailbleResourcesRequest $request
     *
     * @return FindUserAvailbleResourcesResponse
     */
    public function findUserAvailbleResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findUserAvailbleResourcesWithOptions($request, $runtime);
    }

    /**
     * 查询安全事件详情.
     *
     * @param request - GetSecurityEventDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSecurityEventDetailResponse
     *
     * @param GetSecurityEventDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSecurityEventDetailResponse
     */
    public function getSecurityEventDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSecurityEventDetail',
            'version' => '2022-08-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSecurityEventDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询安全事件详情.
     *
     * @param request - GetSecurityEventDetailRequest
     *
     * @returns GetSecurityEventDetailResponse
     *
     * @param GetSecurityEventDetailRequest $request
     *
     * @return GetSecurityEventDetailResponse
     */
    public function getSecurityEventDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSecurityEventDetailWithOptions($request, $runtime);
    }

    /**
     * 处罚资源搜索.
     *
     * @param tmpReq - PunishResourceSearchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PunishResourceSearchResponse
     *
     * @param PunishResourceSearchRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return PunishResourceSearchResponse
     */
    public function punishResourceSearchWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PunishResourceSearchShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->actionCodes) {
            $request->actionCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->actionCodes, 'ActionCodes', 'json');
        }

        if (null !== $tmpReq->bussinessCodes) {
            $request->bussinessCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bussinessCodes, 'BussinessCodes', 'json');
        }

        if (null !== $tmpReq->sourceCodes) {
            $request->sourceCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceCodes, 'SourceCodes', 'json');
        }

        if (null !== $tmpReq->userIds) {
            $request->userIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIds, 'UserIds', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PunishResourceSearch',
            'version' => '2022-08-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PunishResourceSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 处罚资源搜索.
     *
     * @param request - PunishResourceSearchRequest
     *
     * @returns PunishResourceSearchResponse
     *
     * @param PunishResourceSearchRequest $request
     *
     * @return PunishResourceSearchResponse
     */
    public function punishResourceSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->punishResourceSearchWithOptions($request, $runtime);
    }

    /**
     * 记录是否点击链接.
     *
     * @param request - RecordClickLinkActionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecordClickLinkActionResponse
     *
     * @param RecordClickLinkActionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RecordClickLinkActionResponse
     */
    public function recordClickLinkActionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RecordClickLinkAction',
            'version' => '2022-08-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecordClickLinkActionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 记录是否点击链接.
     *
     * @param request - RecordClickLinkActionRequest
     *
     * @returns RecordClickLinkActionResponse
     *
     * @param RecordClickLinkActionRequest $request
     *
     * @return RecordClickLinkActionResponse
     */
    public function recordClickLinkAction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recordClickLinkActionWithOptions($request, $runtime);
    }

    /**
     * 风险事件同步.
     *
     * @param request - RiskEventSyncRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RiskEventSyncResponse
     *
     * @param RiskEventSyncRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RiskEventSyncResponse
     */
    public function riskEventSyncWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deleted) {
            @$body['Deleted'] = $request->deleted;
        }

        if (null !== $request->discoveryTime) {
            @$body['DiscoveryTime'] = $request->discoveryTime;
        }

        if (null !== $request->eventName) {
            @$body['EventName'] = $request->eventName;
        }

        if (null !== $request->eventNumber) {
            @$body['EventNumber'] = $request->eventNumber;
        }

        if (null !== $request->relevanceBu) {
            @$body['RelevanceBu'] = $request->relevanceBu;
        }

        if (null !== $request->riskDetail) {
            @$body['RiskDetail'] = $request->riskDetail;
        }

        if (null !== $request->riskEffectType) {
            @$body['RiskEffectType'] = $request->riskEffectType;
        }

        if (null !== $request->riskLevel) {
            @$body['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->riskType) {
            @$body['RiskType'] = $request->riskType;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        if (null !== $request->submitter) {
            @$body['Submitter'] = $request->submitter;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RiskEventSync',
            'version' => '2022-08-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RiskEventSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 风险事件同步.
     *
     * @param request - RiskEventSyncRequest
     *
     * @returns RiskEventSyncResponse
     *
     * @param RiskEventSyncRequest $request
     *
     * @return RiskEventSyncResponse
     */
    public function riskEventSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->riskEventSyncWithOptions($request, $runtime);
    }

    /**
     * 管控事件查询.
     *
     * @param tmpReq - SearchPunishEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchPunishEventsResponse
     *
     * @param SearchPunishEventsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SearchPunishEventsResponse
     */
    public function searchPunishEventsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchPunishEventsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->bussinessCodes) {
            $request->bussinessCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bussinessCodes, 'BussinessCodes', 'json');
        }

        if (null !== $tmpReq->caseCodes) {
            $request->caseCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->caseCodes, 'CaseCodes', 'json');
        }

        if (null !== $tmpReq->eventCodes) {
            $request->eventCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventCodes, 'EventCodes', 'json');
        }

        $query = [];
        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->bussinessCodesShrink) {
            @$query['BussinessCodes'] = $request->bussinessCodesShrink;
        }

        if (null !== $request->caseCodesShrink) {
            @$query['CaseCodes'] = $request->caseCodesShrink;
        }

        if (null !== $request->eventCodesShrink) {
            @$query['EventCodes'] = $request->eventCodesShrink;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchPunishEvents',
            'version' => '2022-08-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchPunishEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 管控事件查询.
     *
     * @param request - SearchPunishEventsRequest
     *
     * @returns SearchPunishEventsResponse
     *
     * @param SearchPunishEventsRequest $request
     *
     * @return SearchPunishEventsResponse
     */
    public function searchPunishEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPunishEventsWithOptions($request, $runtime);
    }

    /**
     * 管控事件查询.
     *
     * @param tmpReq - SearchPunishRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchPunishRecordsResponse
     *
     * @param SearchPunishRecordsRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return SearchPunishRecordsResponse
     */
    public function searchPunishRecordsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchPunishRecordsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->actionCodes) {
            $request->actionCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->actionCodes, 'ActionCodes', 'json');
        }

        if (null !== $tmpReq->caseCodes) {
            $request->caseCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->caseCodes, 'CaseCodes', 'json');
        }

        if (null !== $tmpReq->eventCodes) {
            $request->eventCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventCodes, 'EventCodes', 'json');
        }

        if (null !== $tmpReq->punishStatus) {
            $request->punishStatusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->punishStatus, 'PunishStatus', 'json');
        }

        if (null !== $tmpReq->sourceCodes) {
            $request->sourceCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceCodes, 'SourceCodes', 'json');
        }

        $query = [];
        if (null !== $request->actionCodesShrink) {
            @$query['ActionCodes'] = $request->actionCodesShrink;
        }

        if (null !== $request->aliUid) {
            @$query['AliUid'] = $request->aliUid;
        }

        if (null !== $request->bussinessCodes) {
            @$query['BussinessCodes'] = $request->bussinessCodes;
        }

        if (null !== $request->caseCodesShrink) {
            @$query['CaseCodes'] = $request->caseCodesShrink;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventCodesShrink) {
            @$query['EventCodes'] = $request->eventCodesShrink;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->punishStatusShrink) {
            @$query['PunishStatus'] = $request->punishStatusShrink;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->sourceCodesShrink) {
            @$query['SourceCodes'] = $request->sourceCodesShrink;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        if (null !== $request->urlFuzzy) {
            @$query['UrlFuzzy'] = $request->urlFuzzy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchPunishRecords',
            'version' => '2022-08-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchPunishRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 管控事件查询.
     *
     * @param request - SearchPunishRecordsRequest
     *
     * @returns SearchPunishRecordsResponse
     *
     * @param SearchPunishRecordsRequest $request
     *
     * @return SearchPunishRecordsResponse
     */
    public function searchPunishRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPunishRecordsWithOptions($request, $runtime);
    }

    /**
     * 处罚记录查询.
     *
     * @param tmpReq - SearchPunishRequestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SearchPunishRequestResponse
     *
     * @param SearchPunishRequestRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return SearchPunishRequestResponse
     */
    public function searchPunishRequestWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SearchPunishRequestShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->antiStatuses) {
            $request->antiStatusesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->antiStatuses, 'AntiStatuses', 'json');
        }

        if (null !== $tmpReq->bussinessCodes) {
            $request->bussinessCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->bussinessCodes, 'BussinessCodes', 'json');
        }

        if (null !== $tmpReq->eventCodes) {
            $request->eventCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventCodes, 'EventCodes', 'json');
        }

        if (null !== $tmpReq->punishStatuses) {
            $request->punishStatusesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->punishStatuses, 'PunishStatuses', 'json');
        }

        if (null !== $tmpReq->sourceCodes) {
            $request->sourceCodesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sourceCodes, 'SourceCodes', 'json');
        }

        if (null !== $tmpReq->userIds) {
            $request->userIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userIds, 'UserIds', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SearchPunishRequest',
            'version' => '2022-08-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SearchPunishRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 处罚记录查询.
     *
     * @param request - SearchPunishRequestRequest
     *
     * @returns SearchPunishRequestResponse
     *
     * @param SearchPunishRequestRequest $request
     *
     * @return SearchPunishRequestResponse
     */
    public function searchPunishRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPunishRequestWithOptions($request, $runtime);
    }

    /**
     * 更新安全事件状态
     *
     * @param request - UpdateSecurityEventStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSecurityEventStatusResponse
     *
     * @param UpdateSecurityEventStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateSecurityEventStatusResponse
     */
    public function updateSecurityEventStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSecurityEventStatus',
            'version' => '2022-08-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSecurityEventStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新安全事件状态
     *
     * @param request - UpdateSecurityEventStatusRequest
     *
     * @returns UpdateSecurityEventStatusResponse
     *
     * @param UpdateSecurityEventStatusRequest $request
     *
     * @return UpdateSecurityEventStatusResponse
     */
    public function updateSecurityEventStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSecurityEventStatusWithOptions($request, $runtime);
    }
}
