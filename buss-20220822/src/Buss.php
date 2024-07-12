<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Buss\V20220822\Models\PunishResourceSearchRequest;
use AlibabaCloud\SDK\Buss\V20220822\Models\PunishResourceSearchResponse;
use AlibabaCloud\SDK\Buss\V20220822\Models\PunishResourceSearchShrinkRequest;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 处罚请求异步接口回调
     *  *
     * @param BusinessResultServiceRequest $tmpReq  BusinessResultServiceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return BusinessResultServiceResponse BusinessResultServiceResponse
     */
    public function businessResultServiceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BusinessResultServiceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->result)) {
            $request->resultShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->result, 'Result', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BusinessResultService',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BusinessResultServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 处罚请求异步接口回调
     *  *
     * @param BusinessResultServiceRequest $request BusinessResultServiceRequest
     *
     * @return BusinessResultServiceResponse BusinessResultServiceResponse
     */
    public function businessResultService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->businessResultServiceWithOptions($request, $runtime);
    }

    /**
     * @summary 协查中心查询任务接口
     *  *
     * @param CreateUserInvestigationInfoQueryTaskRequest $request CreateUserInvestigationInfoQueryTaskRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUserInvestigationInfoQueryTaskResponse CreateUserInvestigationInfoQueryTaskResponse
     */
    public function createUserInvestigationInfoQueryTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateUserInvestigationInfoQueryTask',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUserInvestigationInfoQueryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 协查中心查询任务接口
     *  *
     * @param CreateUserInvestigationInfoQueryTaskRequest $request CreateUserInvestigationInfoQueryTaskRequest
     *
     * @return CreateUserInvestigationInfoQueryTaskResponse CreateUserInvestigationInfoQueryTaskResponse
     */
    public function createUserInvestigationInfoQueryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUserInvestigationInfoQueryTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 反查资源
     *  *
     * @param FindInstanceInfoRequest $tmpReq  FindInstanceInfoRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return FindInstanceInfoResponse FindInstanceInfoResponse
     */
    public function findInstanceInfoWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FindInstanceInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extras)) {
            $request->extrasShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extras, 'extras', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FindInstanceInfo',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FindInstanceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 反查资源
     *  *
     * @param FindInstanceInfoRequest $request FindInstanceInfoRequest
     *
     * @return FindInstanceInfoResponse FindInstanceInfoResponse
     */
    public function findInstanceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findInstanceInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 根据用户id查询对应产品下全部可用资产信息接口
     *  *
     * @param FindUserAvailbleResourcesRequest $request FindUserAvailbleResourcesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return FindUserAvailbleResourcesResponse FindUserAvailbleResourcesResponse
     */
    public function findUserAvailbleResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FindUserAvailbleResources',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FindUserAvailbleResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据用户id查询对应产品下全部可用资产信息接口
     *  *
     * @param FindUserAvailbleResourcesRequest $request FindUserAvailbleResourcesRequest
     *
     * @return FindUserAvailbleResourcesResponse FindUserAvailbleResourcesResponse
     */
    public function findUserAvailbleResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->findUserAvailbleResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 处罚资源搜索
     *  *
     * @param PunishResourceSearchRequest $tmpReq  PunishResourceSearchRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return PunishResourceSearchResponse PunishResourceSearchResponse
     */
    public function punishResourceSearchWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PunishResourceSearchShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actionCodes)) {
            $request->actionCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actionCodes, 'ActionCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->bussinessCodes)) {
            $request->bussinessCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->bussinessCodes, 'BussinessCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceCodes)) {
            $request->sourceCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceCodes, 'SourceCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->userIds)) {
            $request->userIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userIds, 'UserIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PunishResourceSearch',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PunishResourceSearchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 处罚资源搜索
     *  *
     * @param PunishResourceSearchRequest $request PunishResourceSearchRequest
     *
     * @return PunishResourceSearchResponse PunishResourceSearchResponse
     */
    public function punishResourceSearch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->punishResourceSearchWithOptions($request, $runtime);
    }

    /**
     * @summary 风险事件同步
     *  *
     * @param RiskEventSyncRequest $request RiskEventSyncRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RiskEventSyncResponse RiskEventSyncResponse
     */
    public function riskEventSyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deleted)) {
            $body['Deleted'] = $request->deleted;
        }
        if (!Utils::isUnset($request->discoveryTime)) {
            $body['DiscoveryTime'] = $request->discoveryTime;
        }
        if (!Utils::isUnset($request->eventName)) {
            $body['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->eventNumber)) {
            $body['EventNumber'] = $request->eventNumber;
        }
        if (!Utils::isUnset($request->relevanceBu)) {
            $body['RelevanceBu'] = $request->relevanceBu;
        }
        if (!Utils::isUnset($request->riskDetail)) {
            $body['RiskDetail'] = $request->riskDetail;
        }
        if (!Utils::isUnset($request->riskEffectType)) {
            $body['RiskEffectType'] = $request->riskEffectType;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->riskType)) {
            $body['RiskType'] = $request->riskType;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->submitter)) {
            $body['Submitter'] = $request->submitter;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RiskEventSync',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RiskEventSyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 风险事件同步
     *  *
     * @param RiskEventSyncRequest $request RiskEventSyncRequest
     *
     * @return RiskEventSyncResponse RiskEventSyncResponse
     */
    public function riskEventSync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->riskEventSyncWithOptions($request, $runtime);
    }

    /**
     * @summary 管控事件查询
     *  *
     * @param SearchPunishEventsRequest $tmpReq  SearchPunishEventsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchPunishEventsResponse SearchPunishEventsResponse
     */
    public function searchPunishEventsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchPunishEventsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->bussinessCodes)) {
            $request->bussinessCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->bussinessCodes, 'BussinessCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->caseCodes)) {
            $request->caseCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->caseCodes, 'CaseCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->eventCodes)) {
            $request->eventCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->eventCodes, 'EventCodes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->bussinessCodesShrink)) {
            $query['BussinessCodes'] = $request->bussinessCodesShrink;
        }
        if (!Utils::isUnset($request->caseCodesShrink)) {
            $query['CaseCodes'] = $request->caseCodesShrink;
        }
        if (!Utils::isUnset($request->eventCodesShrink)) {
            $query['EventCodes'] = $request->eventCodesShrink;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchPunishEvents',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchPunishEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 管控事件查询
     *  *
     * @param SearchPunishEventsRequest $request SearchPunishEventsRequest
     *
     * @return SearchPunishEventsResponse SearchPunishEventsResponse
     */
    public function searchPunishEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPunishEventsWithOptions($request, $runtime);
    }

    /**
     * @summary 管控事件查询
     *  *
     * @param SearchPunishRecordsRequest $tmpReq  SearchPunishRecordsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchPunishRecordsResponse SearchPunishRecordsResponse
     */
    public function searchPunishRecordsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchPunishRecordsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->actionCodes)) {
            $request->actionCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->actionCodes, 'ActionCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->caseCodes)) {
            $request->caseCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->caseCodes, 'CaseCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->eventCodes)) {
            $request->eventCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->eventCodes, 'EventCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->punishStatus)) {
            $request->punishStatusShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->punishStatus, 'PunishStatus', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceCodes)) {
            $request->sourceCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceCodes, 'SourceCodes', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->actionCodesShrink)) {
            $query['ActionCodes'] = $request->actionCodesShrink;
        }
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->bussinessCodes)) {
            $query['BussinessCodes'] = $request->bussinessCodes;
        }
        if (!Utils::isUnset($request->caseCodesShrink)) {
            $query['CaseCodes'] = $request->caseCodesShrink;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventCodesShrink)) {
            $query['EventCodes'] = $request->eventCodesShrink;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->punishStatusShrink)) {
            $query['PunishStatus'] = $request->punishStatusShrink;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->sourceCodesShrink)) {
            $query['SourceCodes'] = $request->sourceCodesShrink;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->urlFuzzy)) {
            $query['UrlFuzzy'] = $request->urlFuzzy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchPunishRecords',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchPunishRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 管控事件查询
     *  *
     * @param SearchPunishRecordsRequest $request SearchPunishRecordsRequest
     *
     * @return SearchPunishRecordsResponse SearchPunishRecordsResponse
     */
    public function searchPunishRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPunishRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 处罚记录查询
     *  *
     * @param SearchPunishRequestRequest $tmpReq  SearchPunishRequestRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchPunishRequestResponse SearchPunishRequestResponse
     */
    public function searchPunishRequestWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SearchPunishRequestShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->antiStatuses)) {
            $request->antiStatusesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->antiStatuses, 'AntiStatuses', 'json');
        }
        if (!Utils::isUnset($tmpReq->bussinessCodes)) {
            $request->bussinessCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->bussinessCodes, 'BussinessCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->eventCodes)) {
            $request->eventCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->eventCodes, 'EventCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->punishStatuses)) {
            $request->punishStatusesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->punishStatuses, 'PunishStatuses', 'json');
        }
        if (!Utils::isUnset($tmpReq->sourceCodes)) {
            $request->sourceCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sourceCodes, 'SourceCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->userIds)) {
            $request->userIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userIds, 'UserIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchPunishRequest',
            'version'     => '2022-08-22',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SearchPunishRequestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 处罚记录查询
     *  *
     * @param SearchPunishRequestRequest $request SearchPunishRequestRequest
     *
     * @return SearchPunishRequestResponse SearchPunishRequestResponse
     */
    public function searchPunishRequest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPunishRequestWithOptions($request, $runtime);
    }
}
