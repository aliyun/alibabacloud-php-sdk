<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\CreateClientRuleStrategyRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\CreateClientRuleStrategyResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\CreateClientRuleStrategyShrinkRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\CreateSelectionConfigRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\CreateSelectionConfigResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\CreateSimilarSecurityEventsQueryTaskRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\CreateSimilarSecurityEventsQueryTaskResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DeleteClientRuleStrategyRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DeleteClientRuleStrategyResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DeleteClientRuleStrategyShrinkRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DeleteSecurityEventMarkMissListRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DeleteSecurityEventMarkMissListResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeAssetScopeRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeAssetScopeResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeNsasSuspEventTypeRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeNsasSuspEventTypeResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSecurityEventMarkMissListRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSecurityEventMarkMissListResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSecurityEventOperationsRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSecurityEventOperationsResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSecurityEventOperationStatusRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSecurityEventOperationStatusResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSimilarEventScenariosRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSimilarEventScenariosResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSimilarSecurityEventsRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSimilarSecurityEventsResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSuspEventsRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\DescribeSuspEventsResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\GetClientRuleStrategyDetailRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\GetClientRuleStrategyDetailResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\GetClientRuleStrategyStatisticsRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\GetClientRuleStrategyStatisticsResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\HandleSecurityEventsRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\HandleSecurityEventsResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\HandleSimilarSecurityEventsRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\HandleSimilarSecurityEventsResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\ListClientRuleStrategyRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\ListClientRuleStrategyResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\ListSystemConfigRulesRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\ListSystemConfigRulesResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\ListSystemConfigRulesShrinkRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\OperateTargetConfigRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\OperateTargetConfigResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\OperateTargetConfigShrinkRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\UpdateAssetScopeRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\UpdateAssetScopeResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\UpdateClientRuleStrategyRequest;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\UpdateClientRuleStrategyResponse;
use AlibabaCloud\SDK\CsasEdr\V20241122\Models\UpdateClientRuleStrategyShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class CsasEdr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('csasedr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates a client rule policy.
     *
     * @remarks
     * Creates a client rule policy. The policy type is specified by PolicyType.
     *
     * @param tmpReq - CreateClientRuleStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClientRuleStrategyResponse
     *
     * @param CreateClientRuleStrategyRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateClientRuleStrategyResponse
     */
    public function createClientRuleStrategyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateClientRuleStrategyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->excludeUserNameList) {
            $request->excludeUserNameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->excludeUserNameList, 'ExcludeUserNameList', 'json');
        }

        if (null !== $tmpReq->includeGroupIdList) {
            $request->includeGroupIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->includeGroupIdList, 'IncludeGroupIdList', 'json');
        }

        if (null !== $tmpReq->portOnList) {
            $request->portOnListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->portOnList, 'PortOnList', 'json');
        }

        if (null !== $tmpReq->softWareOnList) {
            $request->softWareOnListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->softWareOnList, 'SoftWareOnList', 'json');
        }

        $query = [];
        if (null !== $request->actionType) {
            @$query['ActionType'] = $request->actionType;
        }

        if (null !== $request->allGroup) {
            @$query['AllGroup'] = $request->allGroup;
        }

        if (null !== $request->approvalId) {
            @$query['ApprovalId'] = $request->approvalId;
        }

        if (null !== $request->cmdline) {
            @$query['Cmdline'] = $request->cmdline;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->excludeUserNameListShrink) {
            @$query['ExcludeUserNameList'] = $request->excludeUserNameListShrink;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->inSwitch) {
            @$query['InSwitch'] = $request->inSwitch;
        }

        if (null !== $request->includeGroupIdListShrink) {
            @$query['IncludeGroupIdList'] = $request->includeGroupIdListShrink;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->mainButtonTextCh) {
            @$query['MainButtonTextCh'] = $request->mainButtonTextCh;
        }

        if (null !== $request->mainButtonTextEn) {
            @$query['MainButtonTextEn'] = $request->mainButtonTextEn;
        }

        if (null !== $request->matchMode) {
            @$query['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->matchTargetIds) {
            @$query['MatchTargetIds'] = $request->matchTargetIds;
        }

        if (null !== $request->md5List) {
            @$query['Md5List'] = $request->md5List;
        }

        if (null !== $request->minorButtonTextCh) {
            @$query['MinorButtonTextCh'] = $request->minorButtonTextCh;
        }

        if (null !== $request->minorButtonTextEn) {
            @$query['MinorButtonTextEn'] = $request->minorButtonTextEn;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->newFilePath) {
            @$query['NewFilePath'] = $request->newFilePath;
        }

        if (null !== $request->outSwitch) {
            @$query['OutSwitch'] = $request->outSwitch;
        }

        if (null !== $request->parentCmdline) {
            @$query['ParentCmdline'] = $request->parentCmdline;
        }

        if (null !== $request->parentProcPath) {
            @$query['ParentProcPath'] = $request->parentProcPath;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->portOnListShrink) {
            @$query['PortOnList'] = $request->portOnListShrink;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->procPath) {
            @$query['ProcPath'] = $request->procPath;
        }

        if (null !== $request->registryContent) {
            @$query['RegistryContent'] = $request->registryContent;
        }

        if (null !== $request->registryKey) {
            @$query['RegistryKey'] = $request->registryKey;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->selectionKey) {
            @$query['SelectionKey'] = $request->selectionKey;
        }

        if (null !== $request->softWareOnListShrink) {
            @$query['SoftWareOnList'] = $request->softWareOnListShrink;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->strategySourceType) {
            @$query['StrategySourceType'] = $request->strategySourceType;
        }

        if (null !== $request->supportsApproval) {
            @$query['SupportsApproval'] = $request->supportsApproval;
        }

        if (null !== $request->usContent) {
            @$query['UsContent'] = $request->usContent;
        }

        if (null !== $request->usTitle) {
            @$query['UsTitle'] = $request->usTitle;
        }

        if (null !== $request->zhContent) {
            @$query['ZhContent'] = $request->zhContent;
        }

        if (null !== $request->zhTitle) {
            @$query['ZhTitle'] = $request->zhTitle;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateClientRuleStrategy',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClientRuleStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a client rule policy.
     *
     * @remarks
     * Creates a client rule policy. The policy type is specified by PolicyType.
     *
     * @param request - CreateClientRuleStrategyRequest
     *
     * @returns CreateClientRuleStrategyResponse
     *
     * @param CreateClientRuleStrategyRequest $request
     *
     * @return CreateClientRuleStrategyResponse
     */
    public function createClientRuleStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClientRuleStrategyWithOptions($request, $runtime);
    }

    /**
     * Creates a general asset selection configuration and generates a SelectionKey for use in What to do next.
     *
     * @remarks
     * This operation is used for the initialization of a general asset selection configuration and generates a SelectionKey. The addition or selection of specific assets is completed in What to do next. When you invoke this operation, it only generates the configuration object and does not save the configuration record.
     *
     * @param request - CreateSelectionConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSelectionConfigResponse
     *
     * @param CreateSelectionConfigRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSelectionConfigResponse
     */
    public function createSelectionConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'CreateSelectionConfig',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSelectionConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a general asset selection configuration and generates a SelectionKey for use in What to do next.
     *
     * @remarks
     * This operation is used for the initialization of a general asset selection configuration and generates a SelectionKey. The addition or selection of specific assets is completed in What to do next. When you invoke this operation, it only generates the configuration object and does not save the configuration record.
     *
     * @param request - CreateSelectionConfigRequest
     *
     * @returns CreateSelectionConfigResponse
     *
     * @param CreateSelectionConfigRequest $request
     *
     * @return CreateSelectionConfigResponse
     */
    public function createSelectionConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSelectionConfigWithOptions($request, $runtime);
    }

    /**
     * Creates a node to query alerting events triggered by the same rule or Alarm Metric.
     *
     * @param request - CreateSimilarSecurityEventsQueryTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSimilarSecurityEventsQueryTaskResponse
     *
     * @param CreateSimilarSecurityEventsQueryTaskRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CreateSimilarSecurityEventsQueryTaskResponse
     */
    public function createSimilarSecurityEventsQueryTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityEventId) {
            @$query['SecurityEventId'] = $request->securityEventId;
        }

        if (null !== $request->similarEventScenarioCode) {
            @$query['SimilarEventScenarioCode'] = $request->similarEventScenarioCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSimilarSecurityEventsQueryTask',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSimilarSecurityEventsQueryTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a node to query alerting events triggered by the same rule or Alarm Metric.
     *
     * @param request - CreateSimilarSecurityEventsQueryTaskRequest
     *
     * @returns CreateSimilarSecurityEventsQueryTaskResponse
     *
     * @param CreateSimilarSecurityEventsQueryTaskRequest $request
     *
     * @return CreateSimilarSecurityEventsQueryTaskResponse
     */
    public function createSimilarSecurityEventsQueryTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSimilarSecurityEventsQueryTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes client rule policies based on a list of policy IDs.
     *
     * @param tmpReq - DeleteClientRuleStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClientRuleStrategyResponse
     *
     * @param DeleteClientRuleStrategyRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteClientRuleStrategyResponse
     */
    public function deleteClientRuleStrategyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteClientRuleStrategyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->idList) {
            $request->idListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->idList, 'IdList', 'json');
        }

        $query = [];
        if (null !== $request->idListShrink) {
            @$query['IdList'] = $request->idListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteClientRuleStrategy',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClientRuleStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes client rule policies based on a list of policy IDs.
     *
     * @param request - DeleteClientRuleStrategyRequest
     *
     * @returns DeleteClientRuleStrategyResponse
     *
     * @param DeleteClientRuleStrategyRequest $request
     *
     * @return DeleteClientRuleStrategyResponse
     */
    public function deleteClientRuleStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClientRuleStrategyWithOptions($request, $runtime);
    }

    /**
     * Deletes alert whitelist configurations in batches.
     *
     * @param request - DeleteSecurityEventMarkMissListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecurityEventMarkMissListResponse
     *
     * @param DeleteSecurityEventMarkMissListRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteSecurityEventMarkMissListResponse
     */
    public function deleteSecurityEventMarkMissListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ids) {
            @$query['Ids'] = $request->ids;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecurityEventMarkMissList',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSecurityEventMarkMissListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes alert whitelist configurations in batches.
     *
     * @param request - DeleteSecurityEventMarkMissListRequest
     *
     * @returns DeleteSecurityEventMarkMissListResponse
     *
     * @param DeleteSecurityEventMarkMissListRequest $request
     *
     * @return DeleteSecurityEventMarkMissListResponse
     */
    public function deleteSecurityEventMarkMissList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityEventMarkMissListWithOptions($request, $runtime);
    }

    /**
     * Queries the effective scope mode, target list, and scope record information based on the asset scope ID.
     *
     * @param request - DescribeAssetScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAssetScopeResponse
     *
     * @param DescribeAssetScopeRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAssetScopeResponse
     */
    public function describeAssetScopeWithOptions($request, $runtime)
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
            'action' => 'DescribeAssetScope',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAssetScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the effective scope mode, target list, and scope record information based on the asset scope ID.
     *
     * @param request - DescribeAssetScopeRequest
     *
     * @returns DescribeAssetScopeResponse
     *
     * @param DescribeAssetScopeRequest $request
     *
     * @return DescribeAssetScopeResponse
     */
    public function describeAssetScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAssetScopeWithOptions($request, $runtime);
    }

    /**
     * Queries security alert types.
     *
     * @param request - DescribeNsasSuspEventTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNsasSuspEventTypeResponse
     *
     * @param DescribeNsasSuspEventTypeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNsasSuspEventTypeResponse
     */
    public function describeNsasSuspEventTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->containerFieldName) {
            @$query['ContainerFieldName'] = $request->containerFieldName;
        }

        if (null !== $request->containerFieldValue) {
            @$query['ContainerFieldValue'] = $request->containerFieldValue;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->uuids) {
            @$query['Uuids'] = $request->uuids;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNsasSuspEventType',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNsasSuspEventTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries security alert types.
     *
     * @param request - DescribeNsasSuspEventTypeRequest
     *
     * @returns DescribeNsasSuspEventTypeResponse
     *
     * @param DescribeNsasSuspEventTypeRequest $request
     *
     * @return DescribeNsasSuspEventTypeResponse
     */
    public function describeNsasSuspEventType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNsasSuspEventTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the automatic whitelist rules for alerts.
     *
     * @param request - DescribeSecurityEventMarkMissListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityEventMarkMissListResponse
     *
     * @param DescribeSecurityEventMarkMissListRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeSecurityEventMarkMissListResponse
     */
    public function describeSecurityEventMarkMissListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->disposalWay) {
            @$query['DisposalWay'] = $request->disposalWay;
        }

        if (null !== $request->eventName) {
            @$query['EventName'] = $request->eventName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityEventMarkMissList',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityEventMarkMissListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the automatic whitelist rules for alerts.
     *
     * @param request - DescribeSecurityEventMarkMissListRequest
     *
     * @returns DescribeSecurityEventMarkMissListResponse
     *
     * @param DescribeSecurityEventMarkMissListRequest $request
     *
     * @return DescribeSecurityEventMarkMissListResponse
     */
    public function describeSecurityEventMarkMissList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventMarkMissListWithOptions($request, $runtime);
    }

    /**
     * Queries the processing status of security alerts based on the task ID or alert event ID.
     *
     * @param request - DescribeSecurityEventOperationStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityEventOperationStatusResponse
     *
     * @param DescribeSecurityEventOperationStatusRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeSecurityEventOperationStatusResponse
     */
    public function describeSecurityEventOperationStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityEventIds) {
            @$query['SecurityEventIds'] = $request->securityEventIds;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityEventOperationStatus',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityEventOperationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the processing status of security alerts based on the task ID or alert event ID.
     *
     * @param request - DescribeSecurityEventOperationStatusRequest
     *
     * @returns DescribeSecurityEventOperationStatusResponse
     *
     * @param DescribeSecurityEventOperationStatusRequest $request
     *
     * @return DescribeSecurityEventOperationStatusResponse
     */
    public function describeSecurityEventOperationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventOperationStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the handling operations, operability, and whitelist rule configurations for a specified endpoint alert in its current state.
     *
     * @remarks
     * This operation queries the handling operations that can be displayed for a specified endpoint alert. When initiating a subsequent response, you must select the operation items returned in this response where UserCanOperate is true, and submit parameters as required by the response operation. The query result does not guarantee that the subsequent response will succeed.
     * The actual returned results are affected by feature switches, canary releases, dynamic allowlists, alert templates, alert statuses, and filter conditions. The list may be empty. The examples are used to illustrate field formats or rule combinations and do not represent that a specific alert will definitely return these values. MappingMarkFields and its subfields are generic compatibility structures. The current query pipeline does not populate their elements, and you should not infer that this operation supports the corresponding capabilities based on them.
     *
     * @param request - DescribeSecurityEventOperationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityEventOperationsResponse
     *
     * @param DescribeSecurityEventOperationsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSecurityEventOperationsResponse
     */
    public function describeSecurityEventOperationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityEventId) {
            @$query['SecurityEventId'] = $request->securityEventId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityEventOperations',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityEventOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the handling operations, operability, and whitelist rule configurations for a specified endpoint alert in its current state.
     *
     * @remarks
     * This operation queries the handling operations that can be displayed for a specified endpoint alert. When initiating a subsequent response, you must select the operation items returned in this response where UserCanOperate is true, and submit parameters as required by the response operation. The query result does not guarantee that the subsequent response will succeed.
     * The actual returned results are affected by feature switches, canary releases, dynamic allowlists, alert templates, alert statuses, and filter conditions. The list may be empty. The examples are used to illustrate field formats or rule combinations and do not represent that a specific alert will definitely return these values. MappingMarkFields and its subfields are generic compatibility structures. The current query pipeline does not populate their elements, and you should not infer that this operation supports the corresponding capabilities based on them.
     *
     * @param request - DescribeSecurityEventOperationsRequest
     *
     * @returns DescribeSecurityEventOperationsResponse
     *
     * @param DescribeSecurityEventOperationsRequest $request
     *
     * @return DescribeSecurityEventOperationsResponse
     */
    public function describeSecurityEventOperations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventOperationsWithOptions($request, $runtime);
    }

    /**
     * Queries the handling scenarios for alerts triggered by the same rule or type.
     *
     * @param request - DescribeSimilarEventScenariosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSimilarEventScenariosResponse
     *
     * @param DescribeSimilarEventScenariosRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSimilarEventScenariosResponse
     */
    public function describeSimilarEventScenariosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityEventId) {
            @$query['SecurityEventId'] = $request->securityEventId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSimilarEventScenarios',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSimilarEventScenariosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the handling scenarios for alerts triggered by the same rule or type.
     *
     * @param request - DescribeSimilarEventScenariosRequest
     *
     * @returns DescribeSimilarEventScenariosResponse
     *
     * @param DescribeSimilarEventScenariosRequest $request
     *
     * @return DescribeSimilarEventScenariosResponse
     */
    public function describeSimilarEventScenarios($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSimilarEventScenariosWithOptions($request, $runtime);
    }

    /**
     * Queries aggregated alerts triggered by the same rule or type.
     *
     * @param request - DescribeSimilarSecurityEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSimilarSecurityEventsResponse
     *
     * @param DescribeSimilarSecurityEventsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeSimilarSecurityEventsResponse
     */
    public function describeSimilarSecurityEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSimilarSecurityEvents',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSimilarSecurityEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries aggregated alerts triggered by the same rule or type.
     *
     * @param request - DescribeSimilarSecurityEventsRequest
     *
     * @returns DescribeSimilarSecurityEventsResponse
     *
     * @param DescribeSimilarSecurityEventsRequest $request
     *
     * @return DescribeSimilarSecurityEventsResponse
     */
    public function describeSimilarSecurityEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSimilarSecurityEventsWithOptions($request, $runtime);
    }

    /**
     * Queries endpoint security alerts and supports filtering by alert, endpoint, and processing status.
     *
     * @param request - DescribeSuspEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSuspEventsResponse
     *
     * @param DescribeSuspEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSuspEventsResponse
     */
    public function describeSuspEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmEventName) {
            @$query['AlarmEventName'] = $request->alarmEventName;
        }

        if (null !== $request->alarmUniqueInfo) {
            @$query['AlarmUniqueInfo'] = $request->alarmUniqueInfo;
        }

        if (null !== $request->assetsTypeList) {
            @$query['AssetsTypeList'] = $request->assetsTypeList;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->containerFieldName) {
            @$query['ContainerFieldName'] = $request->containerFieldName;
        }

        if (null !== $request->containerFieldValue) {
            @$query['ContainerFieldValue'] = $request->containerFieldValue;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->dealed) {
            @$query['Dealed'] = $request->dealed;
        }

        if (null !== $request->department) {
            @$query['Department'] = $request->department;
        }

        if (null !== $request->eventNames) {
            @$query['EventNames'] = $request->eventNames;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->innerIp) {
            @$query['InnerIp'] = $request->innerIp;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->levels) {
            @$query['Levels'] = $request->levels;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->operateErrorCodeList) {
            @$query['OperateErrorCodeList'] = $request->operateErrorCodeList;
        }

        if (null !== $request->operateTimeEnd) {
            @$query['OperateTimeEnd'] = $request->operateTimeEnd;
        }

        if (null !== $request->operateTimeStart) {
            @$query['OperateTimeStart'] = $request->operateTimeStart;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentEventTypes) {
            @$query['ParentEventTypes'] = $request->parentEventTypes;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->sortColumn) {
            @$query['SortColumn'] = $request->sortColumn;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->sourceIp) {
            @$query['SourceIp'] = $request->sourceIp;
        }

        if (null !== $request->srcIp) {
            @$query['SrcIp'] = $request->srcIp;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->strictMode) {
            @$query['StrictMode'] = $request->strictMode;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        if (null !== $request->timeEnd) {
            @$query['TimeEnd'] = $request->timeEnd;
        }

        if (null !== $request->timeStart) {
            @$query['TimeStart'] = $request->timeStart;
        }

        if (null !== $request->uniqueInfo) {
            @$query['UniqueInfo'] = $request->uniqueInfo;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->uuids) {
            @$query['Uuids'] = $request->uuids;
        }

        $body = [];
        if (null !== $request->tacticId) {
            @$body['TacticId'] = $request->tacticId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeSuspEvents',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSuspEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries endpoint security alerts and supports filtering by alert, endpoint, and processing status.
     *
     * @param request - DescribeSuspEventsRequest
     *
     * @returns DescribeSuspEventsResponse
     *
     * @param DescribeSuspEventsRequest $request
     *
     * @return DescribeSuspEventsResponse
     */
    public function describeSuspEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspEventsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a client rule policy.
     *
     * @remarks
     * Queries the detailed information of a client rule policy based on the policy ID.
     *
     * @param request - GetClientRuleStrategyDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClientRuleStrategyDetailResponse
     *
     * @param GetClientRuleStrategyDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetClientRuleStrategyDetailResponse
     */
    public function getClientRuleStrategyDetailWithOptions($request, $runtime)
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
            'action' => 'GetClientRuleStrategyDetail',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetClientRuleStrategyDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a client rule policy.
     *
     * @remarks
     * Queries the detailed information of a client rule policy based on the policy ID.
     *
     * @param request - GetClientRuleStrategyDetailRequest
     *
     * @returns GetClientRuleStrategyDetailResponse
     *
     * @param GetClientRuleStrategyDetailRequest $request
     *
     * @return GetClientRuleStrategyDetailResponse
     */
    public function getClientRuleStrategyDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientRuleStrategyDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the number of system rules and custom rules in proactive defense policies.
     *
     * @remarks
     * Counts the number of proactive defense policies (PolicyType=2) for the current account and returns the number of system rule policies and custom rule policies.
     *
     * @param request - GetClientRuleStrategyStatisticsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClientRuleStrategyStatisticsResponse
     *
     * @param GetClientRuleStrategyStatisticsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return GetClientRuleStrategyStatisticsResponse
     */
    public function getClientRuleStrategyStatisticsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetClientRuleStrategyStatistics',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetClientRuleStrategyStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of system rules and custom rules in proactive defense policies.
     *
     * @remarks
     * Counts the number of proactive defense policies (PolicyType=2) for the current account and returns the number of system rule policies and custom rule policies.
     *
     * @param request - GetClientRuleStrategyStatisticsRequest
     *
     * @returns GetClientRuleStrategyStatisticsResponse
     *
     * @param GetClientRuleStrategyStatisticsRequest $request
     *
     * @return GetClientRuleStrategyStatisticsResponse
     */
    public function getClientRuleStrategyStatistics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClientRuleStrategyStatisticsWithOptions($request, $runtime);
    }

    /**
     * Handles security alert events.
     *
     * @param request - HandleSecurityEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HandleSecurityEventsResponse
     *
     * @param HandleSecurityEventsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return HandleSecurityEventsResponse
     */
    public function handleSecurityEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->markBatch) {
            @$query['MarkBatch'] = $request->markBatch;
        }

        if (null !== $request->markMissParam) {
            @$query['MarkMissParam'] = $request->markMissParam;
        }

        if (null !== $request->operationCode) {
            @$query['OperationCode'] = $request->operationCode;
        }

        if (null !== $request->operationParams) {
            @$query['OperationParams'] = $request->operationParams;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->securityEventIds) {
            @$query['SecurityEventIds'] = $request->securityEventIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HandleSecurityEvents',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HandleSecurityEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Handles security alert events.
     *
     * @param request - HandleSecurityEventsRequest
     *
     * @returns HandleSecurityEventsResponse
     *
     * @param HandleSecurityEventsRequest $request
     *
     * @return HandleSecurityEventsResponse
     */
    public function handleSecurityEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->handleSecurityEventsWithOptions($request, $runtime);
    }

    /**
     * Performs batch operations on similar security alerts filtered by a query task.
     *
     * @remarks
     * First, call the CreateSimilarSecurityEventsQueryTask operation to create a similar alert query task. Wait until the data extraction for the task is complete and the task reaches the DataRetrieved state before you call this operation. The processing scope covers the security alerts filtered under the TaskId. This scope is determined by the similar scenario and alert configurations selected when the query task was created. The scope does not equal all alerts of the same type, nor is it fixed to alerts with the same IP address. After this operation is successfully called, the processing continues to run asynchronously in the background.
     *
     * @param request - HandleSimilarSecurityEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HandleSimilarSecurityEventsResponse
     *
     * @param HandleSimilarSecurityEventsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return HandleSimilarSecurityEventsResponse
     */
    public function handleSimilarSecurityEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->markMissParam) {
            @$query['MarkMissParam'] = $request->markMissParam;
        }

        if (null !== $request->operationCode) {
            @$query['OperationCode'] = $request->operationCode;
        }

        if (null !== $request->operationParams) {
            @$query['OperationParams'] = $request->operationParams;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HandleSimilarSecurityEvents',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HandleSimilarSecurityEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs batch operations on similar security alerts filtered by a query task.
     *
     * @remarks
     * First, call the CreateSimilarSecurityEventsQueryTask operation to create a similar alert query task. Wait until the data extraction for the task is complete and the task reaches the DataRetrieved state before you call this operation. The processing scope covers the security alerts filtered under the TaskId. This scope is determined by the similar scenario and alert configurations selected when the query task was created. The scope does not equal all alerts of the same type, nor is it fixed to alerts with the same IP address. After this operation is successfully called, the processing continues to run asynchronously in the background.
     *
     * @param request - HandleSimilarSecurityEventsRequest
     *
     * @returns HandleSimilarSecurityEventsResponse
     *
     * @param HandleSimilarSecurityEventsRequest $request
     *
     * @return HandleSimilarSecurityEventsResponse
     */
    public function handleSimilarSecurityEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->handleSimilarSecurityEventsWithOptions($request, $runtime);
    }

    /**
     * Queries the client rule policy list by using a paged query with paging.
     *
     * @remarks
     * Performs a paged query to retrieve client rule policies based on the policy type (PolicyType) with paging. You can call GetClientRuleStrategyDetail to query the details.
     *
     * @param request - ListClientRuleStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClientRuleStrategyResponse
     *
     * @param ListClientRuleStrategyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListClientRuleStrategyResponse
     */
    public function listClientRuleStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClientRuleStrategy',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClientRuleStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the client rule policy list by using a paged query with paging.
     *
     * @remarks
     * Performs a paged query to retrieve client rule policies based on the policy type (PolicyType) with paging. You can call GetClientRuleStrategyDetail to query the details.
     *
     * @param request - ListClientRuleStrategyRequest
     *
     * @returns ListClientRuleStrategyResponse
     *
     * @param ListClientRuleStrategyRequest $request
     *
     * @return ListClientRuleStrategyResponse
     */
    public function listClientRuleStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClientRuleStrategyWithOptions($request, $runtime);
    }

    /**
     * Queries system defense rules and the switch status of rules under a specified SelectionKey by paging in a paged query.
     *
     * @remarks
     * Queries the system rule catalog and the switch status of rules under a specified SelectionKey. You can use the returned SwitchId and the same SelectionKey to call the OperateTargetConfig operation to modify the switch status.
     *
     * @param tmpReq - ListSystemConfigRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSystemConfigRulesResponse
     *
     * @param ListSystemConfigRulesRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return ListSystemConfigRulesResponse
     */
    public function listSystemConfigRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListSystemConfigRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->aggregationIds) {
            $request->aggregationIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->aggregationIds, 'AggregationIds', 'json');
        }

        if (null !== $tmpReq->ruleTypes) {
            $request->ruleTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ruleTypes, 'RuleTypes', 'json');
        }

        $query = [];
        if (null !== $request->aggregationIdsShrink) {
            @$query['AggregationIds'] = $request->aggregationIdsShrink;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleTypesShrink) {
            @$query['RuleTypes'] = $request->ruleTypesShrink;
        }

        if (null !== $request->selectionKey) {
            @$query['SelectionKey'] = $request->selectionKey;
        }

        if (null !== $request->systemType) {
            @$query['SystemType'] = $request->systemType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSystemConfigRules',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSystemConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries system defense rules and the switch status of rules under a specified SelectionKey by paging in a paged query.
     *
     * @remarks
     * Queries the system rule catalog and the switch status of rules under a specified SelectionKey. You can use the returned SwitchId and the same SelectionKey to call the OperateTargetConfig operation to modify the switch status.
     *
     * @param request - ListSystemConfigRulesRequest
     *
     * @returns ListSystemConfigRulesResponse
     *
     * @param ListSystemConfigRulesRequest $request
     *
     * @return ListSystemConfigRulesResponse
     */
    public function listSystemConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemConfigRulesWithOptions($request, $runtime);
    }

    /**
     * Updates the switch status of system rules in batches by SelectionKey.
     *
     * @remarks
     * Updates the override configuration of rule switches for each SwitchId under the same SelectionKey. Obtain the rule SwitchId by calling ListSystemConfigRules first. Do not use this operation to replace UpdateClientRuleStrategy for updating the overall policy switch Status, and do not use software process names as system rule SwitchIds.
     *
     * @param tmpReq - OperateTargetConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateTargetConfigResponse
     *
     * @param OperateTargetConfigRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return OperateTargetConfigResponse
     */
    public function operateTargetConfigWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateTargetConfigShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->switchIdList) {
            $request->switchIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->switchIdList, 'SwitchIdList', 'json');
        }

        $query = [];
        if (null !== $request->selectionKey) {
            @$query['SelectionKey'] = $request->selectionKey;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->switchIdListShrink) {
            @$query['SwitchIdList'] = $request->switchIdListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateTargetConfig',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateTargetConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the switch status of system rules in batches by SelectionKey.
     *
     * @remarks
     * Updates the override configuration of rule switches for each SwitchId under the same SelectionKey. Obtain the rule SwitchId by calling ListSystemConfigRules first. Do not use this operation to replace UpdateClientRuleStrategy for updating the overall policy switch Status, and do not use software process names as system rule SwitchIds.
     *
     * @param request - OperateTargetConfigRequest
     *
     * @returns OperateTargetConfigResponse
     *
     * @param OperateTargetConfigRequest $request
     *
     * @return OperateTargetConfigResponse
     */
    public function operateTargetConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateTargetConfigWithOptions($request, $runtime);
    }

    /**
     * Updates the effective scope mode and target list of a specified asset scope record.
     *
     * @param request - UpdateAssetScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAssetScopeResponse
     *
     * @param UpdateAssetScopeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAssetScopeResponse
     */
    public function updateAssetScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->matchMode) {
            @$query['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->matchTargetIds) {
            @$query['MatchTargetIds'] = $request->matchTargetIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAssetScope',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAssetScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the effective scope mode and target list of a specified asset scope record.
     *
     * @param request - UpdateAssetScopeRequest
     *
     * @returns UpdateAssetScopeResponse
     *
     * @param UpdateAssetScopeRequest $request
     *
     * @return UpdateAssetScopeResponse
     */
    public function updateAssetScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAssetScopeWithOptions($request, $runtime);
    }

    /**
     * Updates a client rule policy.
     *
     * @remarks
     * Updates a client rule policy based on the policy ID.
     *
     * @param tmpReq - UpdateClientRuleStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClientRuleStrategyResponse
     *
     * @param UpdateClientRuleStrategyRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateClientRuleStrategyResponse
     */
    public function updateClientRuleStrategyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateClientRuleStrategyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->excludeUserNameList) {
            $request->excludeUserNameListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->excludeUserNameList, 'ExcludeUserNameList', 'json');
        }

        if (null !== $tmpReq->includeGroupIdList) {
            $request->includeGroupIdListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->includeGroupIdList, 'IncludeGroupIdList', 'json');
        }

        if (null !== $tmpReq->portOnList) {
            $request->portOnListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->portOnList, 'PortOnList', 'json');
        }

        if (null !== $tmpReq->softWareOnList) {
            $request->softWareOnListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->softWareOnList, 'SoftWareOnList', 'json');
        }

        $query = [];
        if (null !== $request->actionType) {
            @$query['ActionType'] = $request->actionType;
        }

        if (null !== $request->allGroup) {
            @$query['AllGroup'] = $request->allGroup;
        }

        if (null !== $request->approvalId) {
            @$query['ApprovalId'] = $request->approvalId;
        }

        if (null !== $request->cmdline) {
            @$query['Cmdline'] = $request->cmdline;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->excludeUserNameListShrink) {
            @$query['ExcludeUserNameList'] = $request->excludeUserNameListShrink;
        }

        if (null !== $request->filePath) {
            @$query['FilePath'] = $request->filePath;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->inSwitch) {
            @$query['InSwitch'] = $request->inSwitch;
        }

        if (null !== $request->includeGroupIdListShrink) {
            @$query['IncludeGroupIdList'] = $request->includeGroupIdListShrink;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->mainButtonTextCh) {
            @$query['MainButtonTextCh'] = $request->mainButtonTextCh;
        }

        if (null !== $request->mainButtonTextEn) {
            @$query['MainButtonTextEn'] = $request->mainButtonTextEn;
        }

        if (null !== $request->matchMode) {
            @$query['MatchMode'] = $request->matchMode;
        }

        if (null !== $request->matchTargetIds) {
            @$query['MatchTargetIds'] = $request->matchTargetIds;
        }

        if (null !== $request->md5List) {
            @$query['Md5List'] = $request->md5List;
        }

        if (null !== $request->minorButtonTextCh) {
            @$query['MinorButtonTextCh'] = $request->minorButtonTextCh;
        }

        if (null !== $request->minorButtonTextEn) {
            @$query['MinorButtonTextEn'] = $request->minorButtonTextEn;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->newFilePath) {
            @$query['NewFilePath'] = $request->newFilePath;
        }

        if (null !== $request->outSwitch) {
            @$query['OutSwitch'] = $request->outSwitch;
        }

        if (null !== $request->parentCmdline) {
            @$query['ParentCmdline'] = $request->parentCmdline;
        }

        if (null !== $request->parentProcPath) {
            @$query['ParentProcPath'] = $request->parentProcPath;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->policyType) {
            @$query['PolicyType'] = $request->policyType;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->portOnListShrink) {
            @$query['PortOnList'] = $request->portOnListShrink;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->procPath) {
            @$query['ProcPath'] = $request->procPath;
        }

        if (null !== $request->registryContent) {
            @$query['RegistryContent'] = $request->registryContent;
        }

        if (null !== $request->registryKey) {
            @$query['RegistryKey'] = $request->registryKey;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        if (null !== $request->softWareOnListShrink) {
            @$query['SoftWareOnList'] = $request->softWareOnListShrink;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->strategySourceType) {
            @$query['StrategySourceType'] = $request->strategySourceType;
        }

        if (null !== $request->supportsApproval) {
            @$query['SupportsApproval'] = $request->supportsApproval;
        }

        if (null !== $request->usContent) {
            @$query['UsContent'] = $request->usContent;
        }

        if (null !== $request->usTitle) {
            @$query['UsTitle'] = $request->usTitle;
        }

        if (null !== $request->zhContent) {
            @$query['ZhContent'] = $request->zhContent;
        }

        if (null !== $request->zhTitle) {
            @$query['ZhTitle'] = $request->zhTitle;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateClientRuleStrategy',
            'version' => '2024-11-22',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateClientRuleStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a client rule policy.
     *
     * @remarks
     * Updates a client rule policy based on the policy ID.
     *
     * @param request - UpdateClientRuleStrategyRequest
     *
     * @returns UpdateClientRuleStrategyResponse
     *
     * @param UpdateClientRuleStrategyRequest $request
     *
     * @return UpdateClientRuleStrategyResponse
     */
    public function updateClientRuleStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClientRuleStrategyWithOptions($request, $runtime);
    }
}
