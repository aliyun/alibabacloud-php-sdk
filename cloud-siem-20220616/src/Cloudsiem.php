<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddDataSourceLogRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddDataSourceLogResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddDataSourceRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddDataSourceResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddUserSourceLogConfigRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddUserSourceLogConfigResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\BindAccountRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\BindAccountResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\CloseDeliveryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\CloseDeliveryResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteAutomateResponseConfigRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteAutomateResponseConfigResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteBindAccountRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteBindAccountResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteCustomizeRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteCustomizeRuleResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteDataSourceLogRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteDataSourceLogResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteDataSourceRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteWhiteRuleListRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteWhiteRuleListResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAggregateFunctionRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAggregateFunctionResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSceneByEventRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSceneByEventResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSceneRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSceneResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsCountRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsCountResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSourceRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSourceResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSourceWithEventRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSourceWithEventResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsWithEntityRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsWithEntityResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsWithEventRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertsWithEventResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertTypeRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertTypeResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAuthRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAuthResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigCounterRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigCounterResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigFeatureRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigFeatureResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigPlayBooksRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigPlayBooksResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemAssetsCounterRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemAssetsCounterResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemAssetsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemAssetsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemEventDetailRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemEventDetailResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemEventsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemEventsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleCountRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleCountResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleTestHistogramRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleTestHistogramResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleTestRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleTestResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceInstanceRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceInstanceResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceParametersRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDataSourceParametersResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDisposeAndPlaybookRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDisposeAndPlaybookResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDisposeStrategyPlaybookRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDisposeStrategyPlaybookResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEntityInfoRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEntityInfoResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventCountByThreatLevelRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventCountByThreatLevelResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventDisposeRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEventDisposeResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeImportedLogCountRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeImportedLogCountResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogFieldsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogFieldsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogSourceRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogSourceResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogTypeRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogTypeResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeOperatorsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeOperatorsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeProdCountRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeProdCountResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeScopeUsersRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeScopeUsersResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeServiceStatusRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeServiceStatusResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeStorageRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeStorageResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeUserBuyStatusRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeUserBuyStatusResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWafScopeRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWafScopeResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\EnableAccessForCloudSiemRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\EnableAccessForCloudSiemResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\EnableServiceForCloudSiemRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\EnableServiceForCloudSiemResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetCapacityRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetCapacityResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetStorageRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetStorageResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAccountAccessIdRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAccountAccessIdResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAccountsByLogRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAccountsByLogResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAllProdsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAllProdsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAutomateResponseConfigsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAutomateResponseConfigsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListBindAccountRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListBindAccountResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListBindDataSourcesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListBindDataSourcesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemCustomizeRulesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemCustomizeRulesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemPredefinedRulesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemPredefinedRulesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCustomizeRuleTestResultRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCustomizeRuleTestResultResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceLogsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceLogsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceTypesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceTypesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListEntitiesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListEntitiesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListImportedLogsByProdRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListImportedLogsByProdResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListProjectLogStoresRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListProjectLogStoresResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListRdUsersRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListRdUsersResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ModifyBindAccountRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ModifyBindAccountResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ModifyDataSourceLogRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ModifyDataSourceLogResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ModifyDataSourceRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ModifyDataSourceResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\OpenDeliveryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\OpenDeliveryResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostAutomateResponseConfigRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostAutomateResponseConfigResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostCustomizeRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostCustomizeRuleResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostCustomizeRuleTestRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostCustomizeRuleTestResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostEventDisposeAndWhiteruleListRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostEventDisposeAndWhiteruleListResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostEventWhiteruleListRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostEventWhiteruleListResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostFinishCustomizeRuleTestRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostFinishCustomizeRuleTestResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostRuleStatusChangeRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\PostRuleStatusChangeResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\RestoreCapacityRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\RestoreCapacityResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\SetStorageRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\SetStorageResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\SubmitImportLogTasksRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\SubmitImportLogTasksResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\UpdateAutomateResponseConfigStatusRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\UpdateAutomateResponseConfigStatusResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\UpdateWhiteRuleListRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\UpdateWhiteRuleListResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Cloudsiem extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloud-siem', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds a data source to a cloud account that is added to the threat analysis feature.
     *
     * @param request - AddDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDataSourceResponse
     *
     * @param AddDataSourceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddDataSourceResponse
     */
    public function addDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->dataSourceInstanceName) {
            @$body['DataSourceInstanceName'] = $request->dataSourceInstanceName;
        }

        if (null !== $request->dataSourceInstanceParams) {
            @$body['DataSourceInstanceParams'] = $request->dataSourceInstanceParams;
        }

        if (null !== $request->dataSourceInstanceRemark) {
            @$body['DataSourceInstanceRemark'] = $request->dataSourceInstanceRemark;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddDataSource',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a data source to a cloud account that is added to the threat analysis feature.
     *
     * @param request - AddDataSourceRequest
     *
     * @returns AddDataSourceResponse
     *
     * @param AddDataSourceRequest $request
     *
     * @return AddDataSourceResponse
     */
    public function addDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDataSourceWithOptions($request, $runtime);
    }

    /**
     * Adds logs of a cloud account to the threat analysis feature.
     *
     * @param request - AddDataSourceLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDataSourceLogResponse
     *
     * @param AddDataSourceLogRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AddDataSourceLogResponse
     */
    public function addDataSourceLogWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->dataSourceInstanceId) {
            @$body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }

        if (null !== $request->dataSourceInstanceLogs) {
            @$body['DataSourceInstanceLogs'] = $request->dataSourceInstanceLogs;
        }

        if (null !== $request->logCode) {
            @$body['LogCode'] = $request->logCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddDataSourceLog',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDataSourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds logs of a cloud account to the threat analysis feature.
     *
     * @param request - AddDataSourceLogRequest
     *
     * @returns AddDataSourceLogResponse
     *
     * @param AddDataSourceLogRequest $request
     *
     * @return AddDataSourceLogResponse
     */
    public function addDataSourceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDataSourceLogWithOptions($request, $runtime);
    }

    /**
     * Adds the logs of a cloud service within a cloud account to the threat analysis feature for alert and event anslysis.
     *
     * @param request - AddUserSourceLogConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserSourceLogConfigResponse
     *
     * @param AddUserSourceLogConfigRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddUserSourceLogConfigResponse
     */
    public function addUserSourceLogConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->deleted) {
            @$body['Deleted'] = $request->deleted;
        }

        if (null !== $request->disPlayLine) {
            @$body['DisPlayLine'] = $request->disPlayLine;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->sourceLogCode) {
            @$body['SourceLogCode'] = $request->sourceLogCode;
        }

        if (null !== $request->sourceLogInfo) {
            @$body['SourceLogInfo'] = $request->sourceLogInfo;
        }

        if (null !== $request->sourceProdCode) {
            @$body['SourceProdCode'] = $request->sourceProdCode;
        }

        if (null !== $request->subUserId) {
            @$body['SubUserId'] = $request->subUserId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AddUserSourceLogConfig',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserSourceLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds the logs of a cloud service within a cloud account to the threat analysis feature for alert and event anslysis.
     *
     * @param request - AddUserSourceLogConfigRequest
     *
     * @returns AddUserSourceLogConfigResponse
     *
     * @param AddUserSourceLogConfigRequest $request
     *
     * @return AddUserSourceLogConfigResponse
     */
    public function addUserSourceLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserSourceLogConfigWithOptions($request, $runtime);
    }

    /**
     * Adds a third-party cloud account that is displayed on the Multi-cloud assets tab of the Feature Settings page to the threat analysis feature.
     *
     * @param request - BindAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindAccountResponse
     *
     * @param BindAccountRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return BindAccountResponse
     */
    public function bindAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessId) {
            @$body['AccessId'] = $request->accessId;
        }

        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'BindAccount',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a third-party cloud account that is displayed on the Multi-cloud assets tab of the Feature Settings page to the threat analysis feature.
     *
     * @param request - BindAccountRequest
     *
     * @returns BindAccountResponse
     *
     * @param BindAccountRequest $request
     *
     * @return BindAccountResponse
     */
    public function bindAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAccountWithOptions($request, $runtime);
    }

    /**
     * Disables the log delivery feature for a cloud service.
     *
     * @param request - CloseDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloseDeliveryResponse
     *
     * @param CloseDeliveryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CloseDeliveryResponse
     */
    public function closeDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->logCode) {
            @$body['LogCode'] = $request->logCode;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CloseDelivery',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloseDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables the log delivery feature for a cloud service.
     *
     * @param request - CloseDeliveryRequest
     *
     * @returns CloseDeliveryResponse
     *
     * @param CloseDeliveryRequest $request
     *
     * @return CloseDeliveryResponse
     */
    public function closeDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeDeliveryWithOptions($request, $runtime);
    }

    /**
     * Deletes the automated response rule with a specified ID.
     *
     * @param request - DeleteAutomateResponseConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAutomateResponseConfigResponse
     *
     * @param DeleteAutomateResponseConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteAutomateResponseConfigResponse
     */
    public function deleteAutomateResponseConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteAutomateResponseConfig',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAutomateResponseConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the automated response rule with a specified ID.
     *
     * @param request - DeleteAutomateResponseConfigRequest
     *
     * @returns DeleteAutomateResponseConfigResponse
     *
     * @param DeleteAutomateResponseConfigRequest $request
     *
     * @return DeleteAutomateResponseConfigResponse
     */
    public function deleteAutomateResponseConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutomateResponseConfigWithOptions($request, $runtime);
    }

    /**
     * Removes a third-party cloud account that is added to the threat analysis feature by using its AccessKey ID. You can add another cloud account based on your business requirements.
     *
     * @param request - DeleteBindAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBindAccountResponse
     *
     * @param DeleteBindAccountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteBindAccountResponse
     */
    public function deleteBindAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessId) {
            @$body['AccessId'] = $request->accessId;
        }

        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->bindId) {
            @$body['BindId'] = $request->bindId;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteBindAccount',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBindAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a third-party cloud account that is added to the threat analysis feature by using its AccessKey ID. You can add another cloud account based on your business requirements.
     *
     * @param request - DeleteBindAccountRequest
     *
     * @returns DeleteBindAccountResponse
     *
     * @param DeleteBindAccountRequest $request
     *
     * @return DeleteBindAccountResponse
     */
    public function deleteBindAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBindAccountWithOptions($request, $runtime);
    }

    /**
     * Deletes a rule by rule ID.
     *
     * @param request - DeleteCustomizeRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCustomizeRuleResponse
     *
     * @param DeleteCustomizeRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCustomizeRuleResponse
     */
    public function deleteCustomizeRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->ruleId) {
            @$body['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteCustomizeRule',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCustomizeRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a rule by rule ID.
     *
     * @param request - DeleteCustomizeRuleRequest
     *
     * @returns DeleteCustomizeRuleResponse
     *
     * @param DeleteCustomizeRuleRequest $request
     *
     * @return DeleteCustomizeRuleResponse
     */
    public function deleteCustomizeRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomizeRuleWithOptions($request, $runtime);
    }

    /**
     * Removes a data source that is no longer required.
     *
     * @param request - DeleteDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataSourceResponse
     *
     * @param DeleteDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->dataSourceInstanceId) {
            @$body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDataSource',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a data source that is no longer required.
     *
     * @param request - DeleteDataSourceRequest
     *
     * @returns DeleteDataSourceResponse
     *
     * @param DeleteDataSourceRequest $request
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceWithOptions($request, $runtime);
    }

    /**
     * Removes a log.
     *
     * @param request - DeleteDataSourceLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDataSourceLogResponse
     *
     * @param DeleteDataSourceLogRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteDataSourceLogResponse
     */
    public function deleteDataSourceLogWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->dataSourceInstanceId) {
            @$body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }

        if (null !== $request->logInstanceId) {
            @$body['LogInstanceId'] = $request->logInstanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteDataSourceLog',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDataSourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a log.
     *
     * @param request - DeleteDataSourceLogRequest
     *
     * @returns DeleteDataSourceLogResponse
     *
     * @param DeleteDataSourceLogRequest $request
     *
     * @return DeleteDataSourceLogResponse
     */
    public function deleteDataSourceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceLogWithOptions($request, $runtime);
    }

    /**
     * Deletes an alert whitelist rule with a specified ID.
     *
     * @param request - DeleteWhiteRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteWhiteRuleListResponse
     *
     * @param DeleteWhiteRuleListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteWhiteRuleListResponse
     */
    public function deleteWhiteRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteWhiteRuleList',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteWhiteRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an alert whitelist rule with a specified ID.
     *
     * @param request - DeleteWhiteRuleListRequest
     *
     * @returns DeleteWhiteRuleListResponse
     *
     * @param DeleteWhiteRuleListRequest $request
     *
     * @return DeleteWhiteRuleListResponse
     */
    public function deleteWhiteRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWhiteRuleListWithOptions($request, $runtime);
    }

    /**
     * Queries the aggregate functions that are supported for a custom rule.
     *
     * @param request - DescribeAggregateFunctionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAggregateFunctionResponse
     *
     * @param DescribeAggregateFunctionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAggregateFunctionResponse
     */
    public function describeAggregateFunctionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAggregateFunction',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAggregateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the aggregate functions that are supported for a custom rule.
     *
     * @param request - DescribeAggregateFunctionRequest
     *
     * @returns DescribeAggregateFunctionResponse
     *
     * @param DescribeAggregateFunctionRequest $request
     *
     * @return DescribeAggregateFunctionResponse
     */
    public function describeAggregateFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAggregateFunctionWithOptions($request, $runtime);
    }

    /**
     * Queries the scenarios in which an alert needs to be added to the whitelist.
     *
     * @param request - DescribeAlertSceneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertSceneResponse
     *
     * @param DescribeAlertSceneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAlertSceneResponse
     */
    public function describeAlertSceneWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertScene',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the scenarios in which an alert needs to be added to the whitelist.
     *
     * @param request - DescribeAlertSceneRequest
     *
     * @returns DescribeAlertSceneResponse
     *
     * @param DescribeAlertSceneRequest $request
     *
     * @return DescribeAlertSceneResponse
     */
    public function describeAlertScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertSceneWithOptions($request, $runtime);
    }

    /**
     * Queries the scenarios and objects that can be added to an alert whitelist rule.
     *
     * @param request - DescribeAlertSceneByEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertSceneByEventResponse
     *
     * @param DescribeAlertSceneByEventRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAlertSceneByEventResponse
     */
    public function describeAlertSceneByEventWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertSceneByEvent',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertSceneByEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the scenarios and objects that can be added to an alert whitelist rule.
     *
     * @param request - DescribeAlertSceneByEventRequest
     *
     * @returns DescribeAlertSceneByEventResponse
     *
     * @param DescribeAlertSceneByEventRequest $request
     *
     * @return DescribeAlertSceneByEventResponse
     */
    public function describeAlertSceneByEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertSceneByEventWithOptions($request, $runtime);
    }

    /**
     * Queries alert data sources.
     *
     * @param request - DescribeAlertSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertSourceResponse
     *
     * @param DescribeAlertSourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAlertSourceResponse
     */
    public function describeAlertSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->level) {
            @$body['Level'] = $request->level;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertSource',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries alert data sources.
     *
     * @param request - DescribeAlertSourceRequest
     *
     * @returns DescribeAlertSourceResponse
     *
     * @param DescribeAlertSourceRequest $request
     *
     * @return DescribeAlertSourceResponse
     */
    public function describeAlertSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertSourceWithOptions($request, $runtime);
    }

    /**
     * Queries the data sources of the alert that is associated with an event.
     *
     * @param request - DescribeAlertSourceWithEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertSourceWithEventResponse
     *
     * @param DescribeAlertSourceWithEventRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAlertSourceWithEventResponse
     */
    public function describeAlertSourceWithEventWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertSourceWithEvent',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertSourceWithEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the data sources of the alert that is associated with an event.
     *
     * @param request - DescribeAlertSourceWithEventRequest
     *
     * @returns DescribeAlertSourceWithEventResponse
     *
     * @param DescribeAlertSourceWithEventRequest $request
     *
     * @return DescribeAlertSourceWithEventResponse
     */
    public function describeAlertSourceWithEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertSourceWithEventWithOptions($request, $runtime);
    }

    /**
     * Queries the threat types that you can select when you create a custom rule.
     *
     * @param request - DescribeAlertTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertTypeResponse
     *
     * @param DescribeAlertTypeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAlertTypeResponse
     */
    public function describeAlertTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->ruleType) {
            @$body['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertType',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the threat types that you can select when you create a custom rule.
     *
     * @param request - DescribeAlertTypeRequest
     *
     * @returns DescribeAlertTypeResponse
     *
     * @param DescribeAlertTypeRequest $request
     *
     * @return DescribeAlertTypeResponse
     */
    public function describeAlertType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertTypeWithOptions($request, $runtime);
    }

    /**
     * Queries alerts within your account.
     *
     * @param request - DescribeAlertsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertsResponse
     *
     * @param DescribeAlertsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeAlertsResponse
     */
    public function describeAlertsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertName) {
            @$body['AlertName'] = $request->alertName;
        }

        if (null !== $request->alertTitle) {
            @$body['AlertTitle'] = $request->alertTitle;
        }

        if (null !== $request->alertType) {
            @$body['AlertType'] = $request->alertType;
        }

        if (null !== $request->alertUuid) {
            @$body['AlertUuid'] = $request->alertUuid;
        }

        if (null !== $request->assetId) {
            @$body['AssetId'] = $request->assetId;
        }

        if (null !== $request->assetName) {
            @$body['AssetName'] = $request->assetName;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        if (null !== $request->entityName) {
            @$body['EntityName'] = $request->entityName;
        }

        if (null !== $request->isDefend) {
            @$body['IsDefend'] = $request->isDefend;
        }

        if (null !== $request->labelType) {
            @$body['LabelType'] = $request->labelType;
        }

        if (null !== $request->level) {
            @$body['Level'] = $request->level;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->subUserId) {
            @$body['SubUserId'] = $request->subUserId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAlerts',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries alerts within your account.
     *
     * @param request - DescribeAlertsRequest
     *
     * @returns DescribeAlertsResponse
     *
     * @param DescribeAlertsRequest $request
     *
     * @return DescribeAlertsResponse
     */
    public function describeAlerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertsWithOptions($request, $runtime);
    }

    /**
     * Queries the number of alerts of different severities.
     *
     * @param request - DescribeAlertsCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertsCountResponse
     *
     * @param DescribeAlertsCountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAlertsCountResponse
     */
    public function describeAlertsCountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->queryType) {
            @$body['QueryType'] = $request->queryType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertsCount',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertsCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of alerts of different severities.
     *
     * @param request - DescribeAlertsCountRequest
     *
     * @returns DescribeAlertsCountResponse
     *
     * @param DescribeAlertsCountRequest $request
     *
     * @return DescribeAlertsCountResponse
     */
    public function describeAlertsCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertsCountWithOptions($request, $runtime);
    }

    /**
     * Queries the alerts that are associated with an entity.
     *
     * @param request - DescribeAlertsWithEntityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertsWithEntityResponse
     *
     * @param DescribeAlertsWithEntityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAlertsWithEntityResponse
     */
    public function describeAlertsWithEntityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        if (null !== $request->entityUuid) {
            @$body['EntityUuid'] = $request->entityUuid;
        }

        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->sophonTaskId) {
            @$body['SophonTaskId'] = $request->sophonTaskId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertsWithEntity',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertsWithEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the alerts that are associated with an entity.
     *
     * @param request - DescribeAlertsWithEntityRequest
     *
     * @returns DescribeAlertsWithEntityResponse
     *
     * @param DescribeAlertsWithEntityRequest $request
     *
     * @return DescribeAlertsWithEntityResponse
     */
    public function describeAlertsWithEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertsWithEntityWithOptions($request, $runtime);
    }

    /**
     * Queries the alerts that are associated with an event.
     *
     * @param request - DescribeAlertsWithEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAlertsWithEventResponse
     *
     * @param DescribeAlertsWithEventRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAlertsWithEventResponse
     */
    public function describeAlertsWithEventWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertName) {
            @$body['AlertName'] = $request->alertName;
        }

        if (null !== $request->alertTitle) {
            @$body['AlertTitle'] = $request->alertTitle;
        }

        if (null !== $request->alertType) {
            @$body['AlertType'] = $request->alertType;
        }

        if (null !== $request->assetId) {
            @$body['AssetId'] = $request->assetId;
        }

        if (null !== $request->assetName) {
            @$body['AssetName'] = $request->assetName;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        if (null !== $request->entityName) {
            @$body['EntityName'] = $request->entityName;
        }

        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->isDefend) {
            @$body['IsDefend'] = $request->isDefend;
        }

        if (null !== $request->level) {
            @$body['Level'] = $request->level;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->source) {
            @$body['Source'] = $request->source;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->subUserId) {
            @$body['SubUserId'] = $request->subUserId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAlertsWithEvent',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAlertsWithEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the alerts that are associated with an event.
     *
     * @param request - DescribeAlertsWithEventRequest
     *
     * @returns DescribeAlertsWithEventResponse
     *
     * @param DescribeAlertsWithEventRequest $request
     *
     * @return DescribeAlertsWithEventResponse
     */
    public function describeAlertsWithEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertsWithEventWithOptions($request, $runtime);
    }

    /**
     * Checks whether the security information and event management (SIEM) system is granted the required permissions to access other cloud resources within your Alibaba Cloud account and whether the AliyunServiceRoleForSasCloudSiem service-linked role is created.
     *
     * @param request - DescribeAuthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuthResponse
     *
     * @param DescribeAuthRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeAuthResponse
     */
    public function describeAuthWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAuth',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether the security information and event management (SIEM) system is granted the required permissions to access other cloud resources within your Alibaba Cloud account and whether the AliyunServiceRoleForSasCloudSiem service-linked role is created.
     *
     * @param request - DescribeAuthRequest
     *
     * @returns DescribeAuthResponse
     *
     * @param DescribeAuthRequest $request
     *
     * @return DescribeAuthResponse
     */
    public function describeAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthWithOptions($request, $runtime);
    }

    /**
     * Queries the number of automated response rules.
     *
     * @param request - DescribeAutomateResponseConfigCounterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutomateResponseConfigCounterResponse
     *
     * @param DescribeAutomateResponseConfigCounterRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAutomateResponseConfigCounterResponse
     */
    public function describeAutomateResponseConfigCounterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAutomateResponseConfigCounter',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutomateResponseConfigCounterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of automated response rules.
     *
     * @param request - DescribeAutomateResponseConfigCounterRequest
     *
     * @returns DescribeAutomateResponseConfigCounterResponse
     *
     * @param DescribeAutomateResponseConfigCounterRequest $request
     *
     * @return DescribeAutomateResponseConfigCounterResponse
     */
    public function describeAutomateResponseConfigCounter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutomateResponseConfigCounterWithOptions($request, $runtime);
    }

    /**
     * Queries the configurable fields and operators of an automated response rule.
     *
     * @param request - DescribeAutomateResponseConfigFeatureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutomateResponseConfigFeatureResponse
     *
     * @param DescribeAutomateResponseConfigFeatureRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAutomateResponseConfigFeatureResponse
     */
    public function describeAutomateResponseConfigFeatureWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoResponseType) {
            @$body['AutoResponseType'] = $request->autoResponseType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAutomateResponseConfigFeature',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutomateResponseConfigFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurable fields and operators of an automated response rule.
     *
     * @param request - DescribeAutomateResponseConfigFeatureRequest
     *
     * @returns DescribeAutomateResponseConfigFeatureResponse
     *
     * @param DescribeAutomateResponseConfigFeatureRequest $request
     *
     * @return DescribeAutomateResponseConfigFeatureResponse
     */
    public function describeAutomateResponseConfigFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutomateResponseConfigFeatureWithOptions($request, $runtime);
    }

    /**
     * Queries user-defined playbooks.
     *
     * @param request - DescribeAutomateResponseConfigPlayBooksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutomateResponseConfigPlayBooksResponse
     *
     * @param DescribeAutomateResponseConfigPlayBooksRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeAutomateResponseConfigPlayBooksResponse
     */
    public function describeAutomateResponseConfigPlayBooksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoResponseType) {
            @$body['AutoResponseType'] = $request->autoResponseType;
        }

        if (null !== $request->entityType) {
            @$body['EntityType'] = $request->entityType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeAutomateResponseConfigPlayBooks',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutomateResponseConfigPlayBooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries user-defined playbooks.
     *
     * @param request - DescribeAutomateResponseConfigPlayBooksRequest
     *
     * @returns DescribeAutomateResponseConfigPlayBooksResponse
     *
     * @param DescribeAutomateResponseConfigPlayBooksRequest $request
     *
     * @return DescribeAutomateResponseConfigPlayBooksResponse
     */
    public function describeAutomateResponseConfigPlayBooks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutomateResponseConfigPlayBooksWithOptions($request, $runtime);
    }

    /**
     * Queries the assets that are associated with an event.
     *
     * @param request - DescribeCloudSiemAssetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudSiemAssetsResponse
     *
     * @param DescribeCloudSiemAssetsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCloudSiemAssetsResponse
     */
    public function describeCloudSiemAssetsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assetName) {
            @$body['AssetName'] = $request->assetName;
        }

        if (null !== $request->assetType) {
            @$body['AssetType'] = $request->assetType;
        }

        if (null !== $request->assetUuid) {
            @$body['AssetUuid'] = $request->assetUuid;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudSiemAssets',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudSiemAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the assets that are associated with an event.
     *
     * @param request - DescribeCloudSiemAssetsRequest
     *
     * @returns DescribeCloudSiemAssetsResponse
     *
     * @param DescribeCloudSiemAssetsRequest $request
     *
     * @return DescribeCloudSiemAssetsResponse
     */
    public function describeCloudSiemAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudSiemAssetsWithOptions($request, $runtime);
    }

    /**
     * Queries the number of assets that are associated with an event by asset type.
     *
     * @param request - DescribeCloudSiemAssetsCounterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudSiemAssetsCounterResponse
     *
     * @param DescribeCloudSiemAssetsCounterRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCloudSiemAssetsCounterResponse
     */
    public function describeCloudSiemAssetsCounterWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudSiemAssetsCounter',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudSiemAssetsCounterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of assets that are associated with an event by asset type.
     *
     * @param request - DescribeCloudSiemAssetsCounterRequest
     *
     * @returns DescribeCloudSiemAssetsCounterResponse
     *
     * @param DescribeCloudSiemAssetsCounterRequest $request
     *
     * @return DescribeCloudSiemAssetsCounterResponse
     */
    public function describeCloudSiemAssetsCounter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudSiemAssetsCounterWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an event.
     *
     * @param request - DescribeCloudSiemEventDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudSiemEventDetailResponse
     *
     * @param DescribeCloudSiemEventDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCloudSiemEventDetailResponse
     */
    public function describeCloudSiemEventDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudSiemEventDetail',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudSiemEventDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an event.
     *
     * @param request - DescribeCloudSiemEventDetailRequest
     *
     * @returns DescribeCloudSiemEventDetailResponse
     *
     * @param DescribeCloudSiemEventDetailRequest $request
     *
     * @return DescribeCloudSiemEventDetailResponse
     */
    public function describeCloudSiemEventDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudSiemEventDetailWithOptions($request, $runtime);
    }

    /**
     * Queries events in SIEM.
     *
     * @param request - DescribeCloudSiemEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudSiemEventsResponse
     *
     * @param DescribeCloudSiemEventsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCloudSiemEventsResponse
     */
    public function describeCloudSiemEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->assetId) {
            @$body['AssetId'] = $request->assetId;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->entityUuid) {
            @$body['EntityUuid'] = $request->entityUuid;
        }

        if (null !== $request->eventName) {
            @$body['EventName'] = $request->eventName;
        }

        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->order) {
            @$body['Order'] = $request->order;
        }

        if (null !== $request->orderField) {
            @$body['OrderField'] = $request->orderField;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->threadLevel) {
            @$body['ThreadLevel'] = $request->threadLevel;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudSiemEvents',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudSiemEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries events in SIEM.
     *
     * @param request - DescribeCloudSiemEventsRequest
     *
     * @returns DescribeCloudSiemEventsResponse
     *
     * @param DescribeCloudSiemEventsRequest $request
     *
     * @return DescribeCloudSiemEventsResponse
     */
    public function describeCloudSiemEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudSiemEventsWithOptions($request, $runtime);
    }

    /**
     * Queries the number of custom rules.
     *
     * @param request - DescribeCustomizeRuleCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomizeRuleCountResponse
     *
     * @param DescribeCustomizeRuleCountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCustomizeRuleCountResponse
     */
    public function describeCustomizeRuleCountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomizeRuleCount',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomizeRuleCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of custom rules.
     *
     * @param request - DescribeCustomizeRuleCountRequest
     *
     * @returns DescribeCustomizeRuleCountResponse
     *
     * @param DescribeCustomizeRuleCountRequest $request
     *
     * @return DescribeCustomizeRuleCountResponse
     */
    public function describeCustomizeRuleCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomizeRuleCountWithOptions($request, $runtime);
    }

    /**
     * Queries the historical simulation data that is used in a simulation test scenario.
     *
     * @param request - DescribeCustomizeRuleTestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomizeRuleTestResponse
     *
     * @param DescribeCustomizeRuleTestRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCustomizeRuleTestResponse
     */
    public function describeCustomizeRuleTestWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomizeRuleTest',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomizeRuleTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the historical simulation data that is used in a simulation test scenario.
     *
     * @param request - DescribeCustomizeRuleTestRequest
     *
     * @returns DescribeCustomizeRuleTestResponse
     *
     * @param DescribeCustomizeRuleTestRequest $request
     *
     * @return DescribeCustomizeRuleTestResponse
     */
    public function describeCustomizeRuleTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomizeRuleTestWithOptions($request, $runtime);
    }

    /**
     * Queries the chart that displays the test results of business data for a custom rule.
     *
     * @param request - DescribeCustomizeRuleTestHistogramRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomizeRuleTestHistogramResponse
     *
     * @param DescribeCustomizeRuleTestHistogramRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeCustomizeRuleTestHistogramResponse
     */
    public function describeCustomizeRuleTestHistogramWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomizeRuleTestHistogram',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomizeRuleTestHistogramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the chart that displays the test results of business data for a custom rule.
     *
     * @param request - DescribeCustomizeRuleTestHistogramRequest
     *
     * @returns DescribeCustomizeRuleTestHistogramResponse
     *
     * @param DescribeCustomizeRuleTestHistogramRequest $request
     *
     * @return DescribeCustomizeRuleTestHistogramResponse
     */
    public function describeCustomizeRuleTestHistogram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomizeRuleTestHistogramWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a data source.
     *
     * @param request - DescribeDataSourceInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataSourceInstanceResponse
     *
     * @param DescribeDataSourceInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDataSourceInstanceResponse
     */
    public function describeDataSourceInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->dataSourceInstanceId) {
            @$body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDataSourceInstance',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataSourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a data source.
     *
     * @param request - DescribeDataSourceInstanceRequest
     *
     * @returns DescribeDataSourceInstanceResponse
     *
     * @param DescribeDataSourceInstanceRequest $request
     *
     * @return DescribeDataSourceInstanceResponse
     */
    public function describeDataSourceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSourceInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the parameters of a data source.
     *
     * @param request - DescribeDataSourceParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataSourceParametersResponse
     *
     * @param DescribeDataSourceParametersRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDataSourceParametersResponse
     */
    public function describeDataSourceParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDataSourceParameters',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataSourceParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the parameters of a data source.
     *
     * @param request - DescribeDataSourceParametersRequest
     *
     * @returns DescribeDataSourceParametersResponse
     *
     * @param DescribeDataSourceParametersRequest $request
     *
     * @return DescribeDataSourceParametersResponse
     */
    public function describeDataSourceParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSourceParametersWithOptions($request, $runtime);
    }

    /**
     * Queries the list of entities and playbooks that need to be handled.
     *
     * @param request - DescribeDisposeAndPlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDisposeAndPlaybookResponse
     *
     * @param DescribeDisposeAndPlaybookRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDisposeAndPlaybookResponse
     */
    public function describeDisposeAndPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->entityType) {
            @$body['EntityType'] = $request->entityType;
        }

        if (null !== $request->entityUuid) {
            @$body['EntityUuid'] = $request->entityUuid;
        }

        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDisposeAndPlaybook',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDisposeAndPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of entities and playbooks that need to be handled.
     *
     * @param request - DescribeDisposeAndPlaybookRequest
     *
     * @returns DescribeDisposeAndPlaybookResponse
     *
     * @param DescribeDisposeAndPlaybookRequest $request
     *
     * @return DescribeDisposeAndPlaybookResponse
     */
    public function describeDisposeAndPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisposeAndPlaybookWithOptions($request, $runtime);
    }

    /**
     * Queries the list of playbooks that are used by a handling policy.
     *
     * @param request - DescribeDisposeStrategyPlaybookRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDisposeStrategyPlaybookResponse
     *
     * @param DescribeDisposeStrategyPlaybookRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDisposeStrategyPlaybookResponse
     */
    public function describeDisposeStrategyPlaybookWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDisposeStrategyPlaybook',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDisposeStrategyPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of playbooks that are used by a handling policy.
     *
     * @param request - DescribeDisposeStrategyPlaybookRequest
     *
     * @returns DescribeDisposeStrategyPlaybookResponse
     *
     * @param DescribeDisposeStrategyPlaybookRequest $request
     *
     * @return DescribeDisposeStrategyPlaybookResponse
     */
    public function describeDisposeStrategyPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisposeStrategyPlaybookWithOptions($request, $runtime);
    }

    /**
     * Queries the details of an entity.
     *
     * @param request - DescribeEntityInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEntityInfoResponse
     *
     * @param DescribeEntityInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEntityInfoResponse
     */
    public function describeEntityInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        if (null !== $request->entityIdentity) {
            @$body['EntityIdentity'] = $request->entityIdentity;
        }

        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->sophonTaskId) {
            @$body['SophonTaskId'] = $request->sophonTaskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeEntityInfo',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEntityInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an entity.
     *
     * @param request - DescribeEntityInfoRequest
     *
     * @returns DescribeEntityInfoResponse
     *
     * @param DescribeEntityInfoRequest $request
     *
     * @return DescribeEntityInfoResponse
     */
    public function describeEntityInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEntityInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the number of events by type.
     *
     * @param request - DescribeEventCountByThreatLevelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventCountByThreatLevelResponse
     *
     * @param DescribeEventCountByThreatLevelRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeEventCountByThreatLevelResponse
     */
    public function describeEventCountByThreatLevelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeEventCountByThreatLevel',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventCountByThreatLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of events by type.
     *
     * @param request - DescribeEventCountByThreatLevelRequest
     *
     * @returns DescribeEventCountByThreatLevelResponse
     *
     * @param DescribeEventCountByThreatLevelRequest $request
     *
     * @return DescribeEventCountByThreatLevelResponse
     */
    public function describeEventCountByThreatLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventCountByThreatLevelWithOptions($request, $runtime);
    }

    /**
     * Queries the handling policies of a historical event.
     *
     * @param request - DescribeEventDisposeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventDisposeResponse
     *
     * @param DescribeEventDisposeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEventDisposeResponse
     */
    public function describeEventDisposeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeEventDispose',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventDisposeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the handling policies of a historical event.
     *
     * @param request - DescribeEventDisposeRequest
     *
     * @returns DescribeEventDisposeResponse
     *
     * @param DescribeEventDisposeRequest $request
     *
     * @return DescribeEventDisposeResponse
     */
    public function describeEventDispose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventDisposeWithOptions($request, $runtime);
    }

    /**
     * Queries the number of logs that are added to the threat analysis feature.
     *
     * @param request - DescribeImportedLogCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImportedLogCountResponse
     *
     * @param DescribeImportedLogCountRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeImportedLogCountResponse
     */
    public function describeImportedLogCountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeImportedLogCount',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImportedLogCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of logs that are added to the threat analysis feature.
     *
     * @param request - DescribeImportedLogCountRequest
     *
     * @returns DescribeImportedLogCountResponse
     *
     * @param DescribeImportedLogCountRequest $request
     *
     * @return DescribeImportedLogCountResponse
     */
    public function describeImportedLogCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImportedLogCountWithOptions($request, $runtime);
    }

    /**
     * Queries the fields that can be configured for a custom rule.
     *
     * @param request - DescribeLogFieldsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogFieldsResponse
     *
     * @param DescribeLogFieldsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeLogFieldsResponse
     */
    public function describeLogFieldsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->logSource) {
            @$body['LogSource'] = $request->logSource;
        }

        if (null !== $request->logType) {
            @$body['LogType'] = $request->logType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeLogFields',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the fields that can be configured for a custom rule.
     *
     * @param request - DescribeLogFieldsRequest
     *
     * @returns DescribeLogFieldsResponse
     *
     * @param DescribeLogFieldsRequest $request
     *
     * @return DescribeLogFieldsResponse
     */
    public function describeLogFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogFieldsWithOptions($request, $runtime);
    }

    /**
     * Queries the log sources that can be configured for a custom rule.
     *
     * @param request - DescribeLogSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogSourceResponse
     *
     * @param DescribeLogSourceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeLogSourceResponse
     */
    public function describeLogSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->logType) {
            @$body['LogType'] = $request->logType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeLogSource',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the log sources that can be configured for a custom rule.
     *
     * @param request - DescribeLogSourceRequest
     *
     * @returns DescribeLogSourceResponse
     *
     * @param DescribeLogSourceRequest $request
     *
     * @return DescribeLogSourceResponse
     */
    public function describeLogSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogSourceWithOptions($request, $runtime);
    }

    /**
     * Queries the log types that can be configured for a custom rule.
     *
     * @param request - DescribeLogTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLogTypeResponse
     *
     * @param DescribeLogTypeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeLogTypeResponse
     */
    public function describeLogTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeLogType',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLogTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the log types that can be configured for a custom rule.
     *
     * @param request - DescribeLogTypeRequest
     *
     * @returns DescribeLogTypeResponse
     *
     * @param DescribeLogTypeRequest $request
     *
     * @return DescribeLogTypeResponse
     */
    public function describeLogType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the operator of a custom rule.
     *
     * @param request - DescribeOperatorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOperatorsResponse
     *
     * @param DescribeOperatorsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeOperatorsResponse
     */
    public function describeOperatorsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->sceneType) {
            @$body['SceneType'] = $request->sceneType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeOperators',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOperatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the operator of a custom rule.
     *
     * @param request - DescribeOperatorsRequest
     *
     * @returns DescribeOperatorsResponse
     *
     * @param DescribeOperatorsRequest $request
     *
     * @return DescribeOperatorsResponse
     */
    public function describeOperators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperatorsWithOptions($request, $runtime);
    }

    /**
     * Queries the number of services that can be added to the threat analysis feature in Alibaba Cloud, Tenant Cloud, and Huawei Cloud.
     *
     * @param request - DescribeProdCountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeProdCountResponse
     *
     * @param DescribeProdCountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeProdCountResponse
     */
    public function describeProdCountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeProdCount',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeProdCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the number of services that can be added to the threat analysis feature in Alibaba Cloud, Tenant Cloud, and Huawei Cloud.
     *
     * @param request - DescribeProdCountRequest
     *
     * @returns DescribeProdCountResponse
     *
     * @param DescribeProdCountRequest $request
     *
     * @return DescribeProdCountResponse
     */
    public function describeProdCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProdCountWithOptions($request, $runtime);
    }

    /**
     * Queries the list of users in the playbook scope.
     *
     * @param request - DescribeScopeUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeScopeUsersResponse
     *
     * @param DescribeScopeUsersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeScopeUsersResponse
     */
    public function describeScopeUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeScopeUsers',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeScopeUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of users in the playbook scope.
     *
     * @param request - DescribeScopeUsersRequest
     *
     * @returns DescribeScopeUsersResponse
     *
     * @param DescribeScopeUsersRequest $request
     *
     * @return DescribeScopeUsersResponse
     */
    public function describeScopeUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScopeUsersWithOptions($request, $runtime);
    }

    /**
     * Checks whether the threat analysis feature is authorized to access a resource directory.
     *
     * @param request - DescribeServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServiceStatusResponse
     *
     * @param DescribeServiceStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeServiceStatusResponse
     */
    public function describeServiceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeServiceStatus',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether the threat analysis feature is authorized to access a resource directory.
     *
     * @param request - DescribeServiceStatusRequest
     *
     * @returns DescribeServiceStatusResponse
     *
     * @param DescribeServiceStatusRequest $request
     *
     * @return DescribeServiceStatusResponse
     */
    public function describeServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the status of the Logstores for the threat analysis feature in Simple Log Service on the user side.
     *
     * @param request - DescribeStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStorageResponse
     *
     * @param DescribeStorageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeStorageResponse
     */
    public function describeStorageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeStorage',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the status of the Logstores for the threat analysis feature in Simple Log Service on the user side.
     *
     * @param request - DescribeStorageRequest
     *
     * @returns DescribeStorageResponse
     *
     * @param DescribeStorageRequest $request
     *
     * @return DescribeStorageResponse
     */
    public function describeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageWithOptions($request, $runtime);
    }

    /**
     * Checks whether the current Alibaba Cloud account or the management account of a resource directory is used to purchase the threat analysis feature.
     *
     * @param request - DescribeUserBuyStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserBuyStatusResponse
     *
     * @param DescribeUserBuyStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUserBuyStatusResponse
     */
    public function describeUserBuyStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->subUserId) {
            @$body['SubUserId'] = $request->subUserId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeUserBuyStatus',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserBuyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Checks whether the current Alibaba Cloud account or the management account of a resource directory is used to purchase the threat analysis feature.
     *
     * @param request - DescribeUserBuyStatusRequest
     *
     * @returns DescribeUserBuyStatusResponse
     *
     * @param DescribeUserBuyStatusRequest $request
     *
     * @return DescribeUserBuyStatusResponse
     */
    public function describeUserBuyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBuyStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the protected domain names of the WAF instance for a user to which an entity belongs.
     *
     * @param request - DescribeWafScopeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWafScopeResponse
     *
     * @param DescribeWafScopeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeWafScopeResponse
     */
    public function describeWafScopeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->entityId) {
            @$body['EntityId'] = $request->entityId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeWafScope',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWafScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the protected domain names of the WAF instance for a user to which an entity belongs.
     *
     * @param request - DescribeWafScopeRequest
     *
     * @returns DescribeWafScopeResponse
     *
     * @param DescribeWafScopeRequest $request
     *
     * @return DescribeWafScopeResponse
     */
    public function describeWafScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWafScopeWithOptions($request, $runtime);
    }

    /**
     * Queries a list of whitelist rules for alerts.
     *
     * @param request - DescribeWhiteRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeWhiteRuleListResponse
     *
     * @param DescribeWhiteRuleListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeWhiteRuleListResponse
     */
    public function describeWhiteRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertName) {
            @$body['AlertName'] = $request->alertName;
        }

        if (null !== $request->alertType) {
            @$body['AlertType'] = $request->alertType;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeWhiteRuleList',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeWhiteRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of whitelist rules for alerts.
     *
     * @param request - DescribeWhiteRuleListRequest
     *
     * @returns DescribeWhiteRuleListResponse
     *
     * @param DescribeWhiteRuleListRequest $request
     *
     * @return DescribeWhiteRuleListResponse
     */
    public function describeWhiteRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhiteRuleListWithOptions($request, $runtime);
    }

    /**
     * Creates a service-linked role named AliyunServiceRoleForSasCloudSiem for the threat analysis feature. The feature can assume this role to access cloud services.
     *
     * @param request - EnableAccessForCloudSiemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableAccessForCloudSiemResponse
     *
     * @param EnableAccessForCloudSiemRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return EnableAccessForCloudSiemResponse
     */
    public function enableAccessForCloudSiemWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoSubmit) {
            @$body['AutoSubmit'] = $request->autoSubmit;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableAccessForCloudSiem',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableAccessForCloudSiemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a service-linked role named AliyunServiceRoleForSasCloudSiem for the threat analysis feature. The feature can assume this role to access cloud services.
     *
     * @param request - EnableAccessForCloudSiemRequest
     *
     * @returns EnableAccessForCloudSiemResponse
     *
     * @param EnableAccessForCloudSiemRequest $request
     *
     * @return EnableAccessForCloudSiemResponse
     */
    public function enableAccessForCloudSiem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAccessForCloudSiemWithOptions($request, $runtime);
    }

    /**
     * Authorizes the threat analysis feature to access a resource directory. This operation must be called by the management account of the resource directory.
     *
     * @param request - EnableServiceForCloudSiemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnableServiceForCloudSiemResponse
     *
     * @param EnableServiceForCloudSiemRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return EnableServiceForCloudSiemResponse
     */
    public function enableServiceForCloudSiemWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'EnableServiceForCloudSiem',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnableServiceForCloudSiemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Authorizes the threat analysis feature to access a resource directory. This operation must be called by the management account of the resource directory.
     *
     * @param request - EnableServiceForCloudSiemRequest
     *
     * @returns EnableServiceForCloudSiemResponse
     *
     * @param EnableServiceForCloudSiemRequest $request
     *
     * @return EnableServiceForCloudSiemResponse
     */
    public function enableServiceForCloudSiem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableServiceForCloudSiemWithOptions($request, $runtime);
    }

    /**
     * Queries the storage capacity usage of the threat analysis feature and the purchased storage capacity.
     *
     * @param request - GetCapacityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCapacityResponse
     *
     * @param GetCapacityRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetCapacityResponse
     */
    public function getCapacityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetCapacity',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage capacity usage of the threat analysis feature and the purchased storage capacity.
     *
     * @param request - GetCapacityRequest
     *
     * @returns GetCapacityResponse
     *
     * @param GetCapacityRequest $request
     *
     * @return GetCapacityResponse
     */
    public function getCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCapacityWithOptions($request, $runtime);
    }

    /**
     * Queries the storage configurations for the threat analysis feature on the user side.
     *
     * @param request - GetStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetStorageResponse
     *
     * @param GetStorageRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetStorageResponse
     */
    public function getStorageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetStorage',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage configurations for the threat analysis feature on the user side.
     *
     * @param request - GetStorageRequest
     *
     * @returns GetStorageResponse
     *
     * @param GetStorageRequest $request
     *
     * @return GetStorageResponse
     */
    public function getStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStorageWithOptions($request, $runtime);
    }

    /**
     * Queries a list of AccessKey IDs of third-party cloud accounts that are added to the threat analysis feature.
     *
     * @param request - ListAccountAccessIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccountAccessIdResponse
     *
     * @param ListAccountAccessIdRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAccountAccessIdResponse
     */
    public function listAccountAccessIdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAccountAccessId',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccountAccessIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of AccessKey IDs of third-party cloud accounts that are added to the threat analysis feature.
     *
     * @param request - ListAccountAccessIdRequest
     *
     * @returns ListAccountAccessIdResponse
     *
     * @param ListAccountAccessIdRequest $request
     *
     * @return ListAccountAccessIdResponse
     */
    public function listAccountAccessId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountAccessIdWithOptions($request, $runtime);
    }

    /**
     * Query accounts by log.
     *
     * @param request - ListAccountsByLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccountsByLogResponse
     *
     * @param ListAccountsByLogRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListAccountsByLogResponse
     */
    public function listAccountsByLogWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->logCodes) {
            @$body['LogCodes'] = $request->logCodes;
        }

        if (null !== $request->prodCode) {
            @$body['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAccountsByLog',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccountsByLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query accounts by log.
     *
     * @param request - ListAccountsByLogRequest
     *
     * @returns ListAccountsByLogResponse
     *
     * @param ListAccountsByLogRequest $request
     *
     * @return ListAccountsByLogResponse
     */
    public function listAccountsByLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountsByLogWithOptions($request, $runtime);
    }

    /**
     * Queries a list of cloud services that can be added to the threat analysis feature.
     *
     * @param request - ListAllProdsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAllProdsResponse
     *
     * @param ListAllProdsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAllProdsResponse
     */
    public function listAllProdsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAllProds',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAllProdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of cloud services that can be added to the threat analysis feature.
     *
     * @param request - ListAllProdsRequest
     *
     * @returns ListAllProdsResponse
     *
     * @param ListAllProdsRequest $request
     *
     * @return ListAllProdsResponse
     */
    public function listAllProds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllProdsWithOptions($request, $runtime);
    }

    /**
     * Queries automated response rules.
     *
     * @param request - ListAutomateResponseConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAutomateResponseConfigsResponse
     *
     * @param ListAutomateResponseConfigsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListAutomateResponseConfigsResponse
     */
    public function listAutomateResponseConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->actionType) {
            @$body['ActionType'] = $request->actionType;
        }

        if (null !== $request->autoResponseType) {
            @$body['AutoResponseType'] = $request->autoResponseType;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->ruleName) {
            @$body['RuleName'] = $request->ruleName;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->subUserId) {
            @$body['SubUserId'] = $request->subUserId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListAutomateResponseConfigs',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAutomateResponseConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries automated response rules.
     *
     * @param request - ListAutomateResponseConfigsRequest
     *
     * @returns ListAutomateResponseConfigsResponse
     *
     * @param ListAutomateResponseConfigsRequest $request
     *
     * @return ListAutomateResponseConfigsResponse
     */
    public function listAutomateResponseConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutomateResponseConfigsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of cloud accounts that are added to the threat analysis feature.
     *
     * @param request - ListBindAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBindAccountResponse
     *
     * @param ListBindAccountRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListBindAccountResponse
     */
    public function listBindAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListBindAccount',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBindAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of cloud accounts that are added to the threat analysis feature.
     *
     * @param request - ListBindAccountRequest
     *
     * @returns ListBindAccountResponse
     *
     * @param ListBindAccountRequest $request
     *
     * @return ListBindAccountResponse
     */
    public function listBindAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBindAccountWithOptions($request, $runtime);
    }

    /**
     * Queries a list of data sources that are added to the threat analysis feature.
     *
     * @param request - ListBindDataSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBindDataSourcesResponse
     *
     * @param ListBindDataSourcesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListBindDataSourcesResponse
     */
    public function listBindDataSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListBindDataSources',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBindDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of data sources that are added to the threat analysis feature.
     *
     * @param request - ListBindDataSourcesRequest
     *
     * @returns ListBindDataSourcesResponse
     *
     * @param ListBindDataSourcesRequest $request
     *
     * @return ListBindDataSourcesResponse
     */
    public function listBindDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBindDataSourcesWithOptions($request, $runtime);
    }

    /**
     * Queries custom rules.
     *
     * @param request - ListCloudSiemCustomizeRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudSiemCustomizeRulesResponse
     *
     * @param ListCloudSiemCustomizeRulesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListCloudSiemCustomizeRulesResponse
     */
    public function listCloudSiemCustomizeRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertType) {
            @$body['AlertType'] = $request->alertType;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->order) {
            @$body['Order'] = $request->order;
        }

        if (null !== $request->orderField) {
            @$body['OrderField'] = $request->orderField;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->ruleName) {
            @$body['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleType) {
            @$body['RuleType'] = $request->ruleType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->threatLevel) {
            @$body['ThreatLevel'] = $request->threatLevel;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCloudSiemCustomizeRules',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudSiemCustomizeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom rules.
     *
     * @param request - ListCloudSiemCustomizeRulesRequest
     *
     * @returns ListCloudSiemCustomizeRulesResponse
     *
     * @param ListCloudSiemCustomizeRulesRequest $request
     *
     * @return ListCloudSiemCustomizeRulesResponse
     */
    public function listCloudSiemCustomizeRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudSiemCustomizeRulesWithOptions($request, $runtime);
    }

    /**
     * Queries predefined rules.
     *
     * @param request - ListCloudSiemPredefinedRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudSiemPredefinedRulesResponse
     *
     * @param ListCloudSiemPredefinedRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListCloudSiemPredefinedRulesResponse
     */
    public function listCloudSiemPredefinedRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertType) {
            @$body['AlertType'] = $request->alertType;
        }

        if (null !== $request->attCk) {
            @$body['AttCk'] = $request->attCk;
        }

        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventTransferType) {
            @$body['EventTransferType'] = $request->eventTransferType;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->logSource) {
            @$body['LogSource'] = $request->logSource;
        }

        if (null !== $request->order) {
            @$body['Order'] = $request->order;
        }

        if (null !== $request->orderField) {
            @$body['OrderField'] = $request->orderField;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->ruleName) {
            @$body['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleType) {
            @$body['RuleType'] = $request->ruleType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->threatLevel) {
            @$body['ThreatLevel'] = $request->threatLevel;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCloudSiemPredefinedRules',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudSiemPredefinedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries predefined rules.
     *
     * @param request - ListCloudSiemPredefinedRulesRequest
     *
     * @returns ListCloudSiemPredefinedRulesResponse
     *
     * @param ListCloudSiemPredefinedRulesRequest $request
     *
     * @return ListCloudSiemPredefinedRulesResponse
     */
    public function listCloudSiemPredefinedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudSiemPredefinedRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the test results of a custom rule.
     *
     * @param request - ListCustomizeRuleTestResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCustomizeRuleTestResultResponse
     *
     * @param ListCustomizeRuleTestResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListCustomizeRuleTestResultResponse
     */
    public function listCustomizeRuleTestResultWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->detectionRuleId) {
            @$body['DetectionRuleId'] = $request->detectionRuleId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->verifyType) {
            @$body['VerifyType'] = $request->verifyType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListCustomizeRuleTestResult',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCustomizeRuleTestResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the test results of a custom rule.
     *
     * @param request - ListCustomizeRuleTestResultRequest
     *
     * @returns ListCustomizeRuleTestResultResponse
     *
     * @param ListCustomizeRuleTestResultRequest $request
     *
     * @return ListCustomizeRuleTestResultResponse
     */
    public function listCustomizeRuleTestResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomizeRuleTestResultWithOptions($request, $runtime);
    }

    /**
     * Queries the logs of a data source.
     *
     * @param request - ListDataSourceLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourceLogsResponse
     *
     * @param ListDataSourceLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListDataSourceLogsResponse
     */
    public function listDataSourceLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->dataSourceInstanceId) {
            @$body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataSourceLogs',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataSourceLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the logs of a data source.
     *
     * @param request - ListDataSourceLogsRequest
     *
     * @returns ListDataSourceLogsResponse
     *
     * @param ListDataSourceLogsRequest $request
     *
     * @return ListDataSourceLogsResponse
     */
    public function listDataSourceLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceLogsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of data source types in third-party cloud services that can be added to the threat analysis feature.
     *
     * @param request - ListDataSourceTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDataSourceTypesResponse
     *
     * @param ListDataSourceTypesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDataSourceTypesResponse
     */
    public function listDataSourceTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDataSourceTypes',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDataSourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of data source types in third-party cloud services that can be added to the threat analysis feature.
     *
     * @param request - ListDataSourceTypesRequest
     *
     * @returns ListDataSourceTypesResponse
     *
     * @param ListDataSourceTypesRequest $request
     *
     * @return ListDataSourceTypesResponse
     */
    public function listDataSourceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceTypesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about the cloud services that are integrated with the threat analysis feature, the logs of the cloud services, and the delivery of the logs.
     *
     * @param request - ListDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDeliveryResponse
     *
     * @param ListDeliveryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListDeliveryResponse
     */
    public function listDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDelivery',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about the cloud services that are integrated with the threat analysis feature, the logs of the cloud services, and the delivery of the logs.
     *
     * @param request - ListDeliveryRequest
     *
     * @returns ListDeliveryResponse
     *
     * @param ListDeliveryRequest $request
     *
     * @return ListDeliveryResponse
     */
    public function listDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeliveryWithOptions($request, $runtime);
    }

    /**
     * Queries handling policies.
     *
     * @param request - ListDisposeStrategyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDisposeStrategyResponse
     *
     * @param ListDisposeStrategyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDisposeStrategyResponse
     */
    public function listDisposeStrategyWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->effectiveStatus) {
            @$body['EffectiveStatus'] = $request->effectiveStatus;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->entityIdentity) {
            @$body['EntityIdentity'] = $request->entityIdentity;
        }

        if (null !== $request->entityType) {
            @$body['EntityType'] = $request->entityType;
        }

        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->order) {
            @$body['Order'] = $request->order;
        }

        if (null !== $request->orderField) {
            @$body['OrderField'] = $request->orderField;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->playbookName) {
            @$body['PlaybookName'] = $request->playbookName;
        }

        if (null !== $request->playbookTypes) {
            @$body['PlaybookTypes'] = $request->playbookTypes;
        }

        if (null !== $request->playbookUuid) {
            @$body['PlaybookUuid'] = $request->playbookUuid;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->sophonTaskId) {
            @$body['SophonTaskId'] = $request->sophonTaskId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListDisposeStrategy',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDisposeStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries handling policies.
     *
     * @param request - ListDisposeStrategyRequest
     *
     * @returns ListDisposeStrategyResponse
     *
     * @param ListDisposeStrategyRequest $request
     *
     * @return ListDisposeStrategyResponse
     */
    public function listDisposeStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDisposeStrategyWithOptions($request, $runtime);
    }

    /**
     * 查询实体列表.
     *
     * @param request - ListEntitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEntitiesResponse
     *
     * @param ListEntitiesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListEntitiesResponse
     */
    public function listEntitiesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->currentPage) {
            @$body['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->entityName) {
            @$body['EntityName'] = $request->entityName;
        }

        if (null !== $request->entityType) {
            @$body['EntityType'] = $request->entityType;
        }

        if (null !== $request->entityUuid) {
            @$body['EntityUuid'] = $request->entityUuid;
        }

        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->isMalwareEntity) {
            @$body['IsMalwareEntity'] = $request->isMalwareEntity;
        }

        if (null !== $request->malwareType) {
            @$body['MalwareType'] = $request->malwareType;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListEntities',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实体列表.
     *
     * @param request - ListEntitiesRequest
     *
     * @returns ListEntitiesResponse
     *
     * @param ListEntitiesRequest $request
     *
     * @return ListEntitiesResponse
     */
    public function listEntities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEntitiesWithOptions($request, $runtime);
    }

    /**
     * Queries the details of the logs in a cloud service that is added to the threat analysis feature.
     *
     * @param request - ListImportedLogsByProdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListImportedLogsByProdResponse
     *
     * @param ListImportedLogsByProdRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListImportedLogsByProdResponse
     */
    public function listImportedLogsByProdWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->prodCode) {
            @$body['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListImportedLogsByProd',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListImportedLogsByProdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of the logs in a cloud service that is added to the threat analysis feature.
     *
     * @param request - ListImportedLogsByProdRequest
     *
     * @returns ListImportedLogsByProdResponse
     *
     * @param ListImportedLogsByProdRequest $request
     *
     * @return ListImportedLogsByProdResponse
     */
    public function listImportedLogsByProd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImportedLogsByProdWithOptions($request, $runtime);
    }

    /**
     * Queries the dedicated Simple Log Service project and Logstore for a cloud service based on the patterns of the project and Logstore names.
     *
     * @param request - ListProjectLogStoresRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProjectLogStoresResponse
     *
     * @param ListProjectLogStoresRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListProjectLogStoresResponse
     */
    public function listProjectLogStoresWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->sourceLogCode) {
            @$body['SourceLogCode'] = $request->sourceLogCode;
        }

        if (null !== $request->sourceProdCode) {
            @$body['SourceProdCode'] = $request->sourceProdCode;
        }

        if (null !== $request->subUserId) {
            @$body['SubUserId'] = $request->subUserId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListProjectLogStores',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProjectLogStoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the dedicated Simple Log Service project and Logstore for a cloud service based on the patterns of the project and Logstore names.
     *
     * @param request - ListProjectLogStoresRequest
     *
     * @returns ListProjectLogStoresResponse
     *
     * @param ListProjectLogStoresRequest $request
     *
     * @return ListProjectLogStoresResponse
     */
    public function listProjectLogStores($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectLogStoresWithOptions($request, $runtime);
    }

    /**
     * Queries a list of Alibaba Cloud accounts that are added to the threat analysis feature for centralized management. These accounts can be used to perform operations supported by the threat analysis feature, such as adding logs and handling events.
     *
     * @param request - ListRdUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRdUsersResponse
     *
     * @param ListRdUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRdUsersResponse
     */
    public function listRdUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListRdUsers',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRdUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Alibaba Cloud accounts that are added to the threat analysis feature for centralized management. These accounts can be used to perform operations supported by the threat analysis feature, such as adding logs and handling events.
     *
     * @param request - ListRdUsersRequest
     *
     * @returns ListRdUsersResponse
     *
     * @param ListRdUsersRequest $request
     *
     * @return ListRdUsersResponse
     */
    public function listRdUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRdUsersWithOptions($request, $runtime);
    }

    /**
     * Modifies a third-party cloud account that is added to the threat analysis feature.
     *
     * @param request - ModifyBindAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBindAccountResponse
     *
     * @param ModifyBindAccountRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyBindAccountResponse
     */
    public function modifyBindAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessId) {
            @$body['AccessId'] = $request->accessId;
        }

        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->accountName) {
            @$body['AccountName'] = $request->accountName;
        }

        if (null !== $request->bindId) {
            @$body['BindId'] = $request->bindId;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyBindAccount',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBindAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a third-party cloud account that is added to the threat analysis feature.
     *
     * @param request - ModifyBindAccountRequest
     *
     * @returns ModifyBindAccountResponse
     *
     * @param ModifyBindAccountRequest $request
     *
     * @return ModifyBindAccountResponse
     */
    public function modifyBindAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBindAccountWithOptions($request, $runtime);
    }

    /**
     * Modifies a data source that is added to the threat analysis feature.
     *
     * @param request - ModifyDataSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDataSourceResponse
     *
     * @param ModifyDataSourceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyDataSourceResponse
     */
    public function modifyDataSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->dataSourceInstanceId) {
            @$body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }

        if (null !== $request->dataSourceInstanceName) {
            @$body['DataSourceInstanceName'] = $request->dataSourceInstanceName;
        }

        if (null !== $request->dataSourceInstanceParams) {
            @$body['DataSourceInstanceParams'] = $request->dataSourceInstanceParams;
        }

        if (null !== $request->dataSourceInstanceRemark) {
            @$body['DataSourceInstanceRemark'] = $request->dataSourceInstanceRemark;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDataSource',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a data source that is added to the threat analysis feature.
     *
     * @param request - ModifyDataSourceRequest
     *
     * @returns ModifyDataSourceResponse
     *
     * @param ModifyDataSourceRequest $request
     *
     * @return ModifyDataSourceResponse
     */
    public function modifyDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataSourceWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of the logs that are added to the threat analysis feature for a data source within a cloud account.
     *
     * @param request - ModifyDataSourceLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDataSourceLogResponse
     *
     * @param ModifyDataSourceLogRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDataSourceLogResponse
     */
    public function modifyDataSourceLogWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->dataSourceInstanceId) {
            @$body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }

        if (null !== $request->dataSourceInstanceLogs) {
            @$body['DataSourceInstanceLogs'] = $request->dataSourceInstanceLogs;
        }

        if (null !== $request->dataSourceType) {
            @$body['DataSourceType'] = $request->dataSourceType;
        }

        if (null !== $request->logCode) {
            @$body['LogCode'] = $request->logCode;
        }

        if (null !== $request->logInstanceId) {
            @$body['LogInstanceId'] = $request->logInstanceId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyDataSourceLog',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDataSourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of the logs that are added to the threat analysis feature for a data source within a cloud account.
     *
     * @param request - ModifyDataSourceLogRequest
     *
     * @returns ModifyDataSourceLogResponse
     *
     * @param ModifyDataSourceLogRequest $request
     *
     * @return ModifyDataSourceLogResponse
     */
    public function modifyDataSourceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataSourceLogWithOptions($request, $runtime);
    }

    /**
     * Enables the log delivery feature for a cloud service that is integrated with Simple Log Service.
     *
     * @param request - OpenDeliveryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenDeliveryResponse
     *
     * @param OpenDeliveryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return OpenDeliveryResponse
     */
    public function openDeliveryWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->logCode) {
            @$body['LogCode'] = $request->logCode;
        }

        if (null !== $request->productCode) {
            @$body['ProductCode'] = $request->productCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OpenDelivery',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the log delivery feature for a cloud service that is integrated with Simple Log Service.
     *
     * @param request - OpenDeliveryRequest
     *
     * @returns OpenDeliveryResponse
     *
     * @param OpenDeliveryRequest $request
     *
     * @return OpenDeliveryResponse
     */
    public function openDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openDeliveryWithOptions($request, $runtime);
    }

    /**
     * Creates or updates an automatic response rule.
     *
     * @param request - PostAutomateResponseConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PostAutomateResponseConfigResponse
     *
     * @param PostAutomateResponseConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PostAutomateResponseConfigResponse
     */
    public function postAutomateResponseConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->actionConfig) {
            @$body['ActionConfig'] = $request->actionConfig;
        }

        if (null !== $request->actionType) {
            @$body['ActionType'] = $request->actionType;
        }

        if (null !== $request->autoResponseType) {
            @$body['AutoResponseType'] = $request->autoResponseType;
        }

        if (null !== $request->executionCondition) {
            @$body['ExecutionCondition'] = $request->executionCondition;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->ruleName) {
            @$body['RuleName'] = $request->ruleName;
        }

        if (null !== $request->subUserId) {
            @$body['SubUserId'] = $request->subUserId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PostAutomateResponseConfig',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PostAutomateResponseConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or updates an automatic response rule.
     *
     * @param request - PostAutomateResponseConfigRequest
     *
     * @returns PostAutomateResponseConfigResponse
     *
     * @param PostAutomateResponseConfigRequest $request
     *
     * @return PostAutomateResponseConfigResponse
     */
    public function postAutomateResponseConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postAutomateResponseConfigWithOptions($request, $runtime);
    }

    /**
     * Creates or updates a custom rule.
     *
     * @param request - PostCustomizeRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PostCustomizeRuleResponse
     *
     * @param PostCustomizeRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PostCustomizeRuleResponse
     */
    public function postCustomizeRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->alertType) {
            @$body['AlertType'] = $request->alertType;
        }

        if (null !== $request->alertTypeMds) {
            @$body['AlertTypeMds'] = $request->alertTypeMds;
        }

        if (null !== $request->attCk) {
            @$body['AttCk'] = $request->attCk;
        }

        if (null !== $request->eventTransferExt) {
            @$body['EventTransferExt'] = $request->eventTransferExt;
        }

        if (null !== $request->eventTransferSwitch) {
            @$body['EventTransferSwitch'] = $request->eventTransferSwitch;
        }

        if (null !== $request->eventTransferType) {
            @$body['EventTransferType'] = $request->eventTransferType;
        }

        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->logSource) {
            @$body['LogSource'] = $request->logSource;
        }

        if (null !== $request->logSourceMds) {
            @$body['LogSourceMds'] = $request->logSourceMds;
        }

        if (null !== $request->logType) {
            @$body['LogType'] = $request->logType;
        }

        if (null !== $request->logTypeMds) {
            @$body['LogTypeMds'] = $request->logTypeMds;
        }

        if (null !== $request->queryCycle) {
            @$body['QueryCycle'] = $request->queryCycle;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->ruleCondition) {
            @$body['RuleCondition'] = $request->ruleCondition;
        }

        if (null !== $request->ruleDesc) {
            @$body['RuleDesc'] = $request->ruleDesc;
        }

        if (null !== $request->ruleGroup) {
            @$body['RuleGroup'] = $request->ruleGroup;
        }

        if (null !== $request->ruleName) {
            @$body['RuleName'] = $request->ruleName;
        }

        if (null !== $request->ruleThreshold) {
            @$body['RuleThreshold'] = $request->ruleThreshold;
        }

        if (null !== $request->threatLevel) {
            @$body['ThreatLevel'] = $request->threatLevel;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PostCustomizeRule',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PostCustomizeRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or updates a custom rule.
     *
     * @param request - PostCustomizeRuleRequest
     *
     * @returns PostCustomizeRuleResponse
     *
     * @param PostCustomizeRuleRequest $request
     *
     * @return PostCustomizeRuleResponse
     */
    public function postCustomizeRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postCustomizeRuleWithOptions($request, $runtime);
    }

    /**
     * Submits a custom rule for testing.
     *
     * @param request - PostCustomizeRuleTestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PostCustomizeRuleTestResponse
     *
     * @param PostCustomizeRuleTestRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PostCustomizeRuleTestResponse
     */
    public function postCustomizeRuleTestWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->simulatedData) {
            @$body['SimulatedData'] = $request->simulatedData;
        }

        if (null !== $request->testType) {
            @$body['TestType'] = $request->testType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PostCustomizeRuleTest',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PostCustomizeRuleTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits a custom rule for testing.
     *
     * @param request - PostCustomizeRuleTestRequest
     *
     * @returns PostCustomizeRuleTestResponse
     *
     * @param PostCustomizeRuleTestRequest $request
     *
     * @return PostCustomizeRuleTestResponse
     */
    public function postCustomizeRuleTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postCustomizeRuleTestWithOptions($request, $runtime);
    }

    /**
     * Submits event handling information.
     *
     * @param request - PostEventDisposeAndWhiteruleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PostEventDisposeAndWhiteruleListResponse
     *
     * @param PostEventDisposeAndWhiteruleListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return PostEventDisposeAndWhiteruleListResponse
     */
    public function postEventDisposeAndWhiteruleListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->eventDispose) {
            @$body['EventDispose'] = $request->eventDispose;
        }

        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->receiverInfo) {
            @$body['ReceiverInfo'] = $request->receiverInfo;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$body['Remark'] = $request->remark;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->threatLevel) {
            @$body['ThreatLevel'] = $request->threatLevel;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PostEventDisposeAndWhiteruleList',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PostEventDisposeAndWhiteruleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits event handling information.
     *
     * @param request - PostEventDisposeAndWhiteruleListRequest
     *
     * @returns PostEventDisposeAndWhiteruleListResponse
     *
     * @param PostEventDisposeAndWhiteruleListRequest $request
     *
     * @return PostEventDisposeAndWhiteruleListResponse
     */
    public function postEventDisposeAndWhiteruleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postEventDisposeAndWhiteruleListWithOptions($request, $runtime);
    }

    /**
     * Submits an alert whitelist rule.
     *
     * @param request - PostEventWhiteruleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PostEventWhiteruleListResponse
     *
     * @param PostEventWhiteruleListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PostEventWhiteruleListResponse
     */
    public function postEventWhiteruleListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->whiteruleList) {
            @$body['WhiteruleList'] = $request->whiteruleList;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PostEventWhiteruleList',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PostEventWhiteruleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits an alert whitelist rule.
     *
     * @param request - PostEventWhiteruleListRequest
     *
     * @returns PostEventWhiteruleListResponse
     *
     * @param PostEventWhiteruleListRequest $request
     *
     * @return PostEventWhiteruleListResponse
     */
    public function postEventWhiteruleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postEventWhiteruleListWithOptions($request, $runtime);
    }

    /**
     * Ends the test of a custom rule.
     *
     * @param request - PostFinishCustomizeRuleTestRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PostFinishCustomizeRuleTestResponse
     *
     * @param PostFinishCustomizeRuleTestRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return PostFinishCustomizeRuleTestResponse
     */
    public function postFinishCustomizeRuleTestWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->id) {
            @$body['Id'] = $request->id;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PostFinishCustomizeRuleTest',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PostFinishCustomizeRuleTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Ends the test of a custom rule.
     *
     * @param request - PostFinishCustomizeRuleTestRequest
     *
     * @returns PostFinishCustomizeRuleTestResponse
     *
     * @param PostFinishCustomizeRuleTestRequest $request
     *
     * @return PostFinishCustomizeRuleTestResponse
     */
    public function postFinishCustomizeRuleTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postFinishCustomizeRuleTestWithOptions($request, $runtime);
    }

    /**
     * Updates the status of a custom rule.
     *
     * @param request - PostRuleStatusChangeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PostRuleStatusChangeResponse
     *
     * @param PostRuleStatusChangeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PostRuleStatusChangeResponse
     */
    public function postRuleStatusChangeWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ids) {
            @$body['Ids'] = $request->ids;
        }

        if (null !== $request->inUse) {
            @$body['InUse'] = $request->inUse;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->ruleType) {
            @$body['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'PostRuleStatusChange',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PostRuleStatusChangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the status of a custom rule.
     *
     * @param request - PostRuleStatusChangeRequest
     *
     * @returns PostRuleStatusChangeResponse
     *
     * @param PostRuleStatusChangeRequest $request
     *
     * @return PostRuleStatusChangeResponse
     */
    public function postRuleStatusChange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postRuleStatusChangeWithOptions($request, $runtime);
    }

    /**
     * Releases storage to reduce the storage usage. The release operation is irreversible and may cause data loss. Proceed with caution.
     *
     * @param request - RestoreCapacityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RestoreCapacityResponse
     *
     * @param RestoreCapacityRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestoreCapacityResponse
     */
    public function restoreCapacityWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RestoreCapacity',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RestoreCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases storage to reduce the storage usage. The release operation is irreversible and may cause data loss. Proceed with caution.
     *
     * @param request - RestoreCapacityRequest
     *
     * @returns RestoreCapacityResponse
     *
     * @param RestoreCapacityRequest $request
     *
     * @return RestoreCapacityResponse
     */
    public function restoreCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreCapacityWithOptions($request, $runtime);
    }

    /**
     * Configures the settings of log storage, such as the storage duration and storage region.
     *
     * @param request - SetStorageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetStorageResponse
     *
     * @param SetStorageRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetStorageResponse
     */
    public function setStorageWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->region) {
            @$body['Region'] = $request->region;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->ttl) {
            @$body['Ttl'] = $request->ttl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetStorage',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the settings of log storage, such as the storage duration and storage region.
     *
     * @param request - SetStorageRequest
     *
     * @returns SetStorageResponse
     *
     * @param SetStorageRequest $request
     *
     * @return SetStorageResponse
     */
    public function setStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setStorageWithOptions($request, $runtime);
    }

    /**
     * Submits log collection tasks at a time.
     *
     * @param request - SubmitImportLogTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SubmitImportLogTasksResponse
     *
     * @param SubmitImportLogTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitImportLogTasksResponse
     */
    public function submitImportLogTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accounts) {
            @$body['Accounts'] = $request->accounts;
        }

        if (null !== $request->autoImported) {
            @$body['AutoImported'] = $request->autoImported;
        }

        if (null !== $request->cloudCode) {
            @$body['CloudCode'] = $request->cloudCode;
        }

        if (null !== $request->logCodes) {
            @$body['LogCodes'] = $request->logCodes;
        }

        if (null !== $request->prodCode) {
            @$body['ProdCode'] = $request->prodCode;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SubmitImportLogTasks',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SubmitImportLogTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Submits log collection tasks at a time.
     *
     * @param request - SubmitImportLogTasksRequest
     *
     * @returns SubmitImportLogTasksResponse
     *
     * @param SubmitImportLogTasksRequest $request
     *
     * @return SubmitImportLogTasksResponse
     */
    public function submitImportLogTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitImportLogTasksWithOptions($request, $runtime);
    }

    /**
     * Updates the status of an automatic response rule.
     *
     * @param request - UpdateAutomateResponseConfigStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAutomateResponseConfigStatusResponse
     *
     * @param UpdateAutomateResponseConfigStatusRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateAutomateResponseConfigStatusResponse
     */
    public function updateAutomateResponseConfigStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->ids) {
            @$body['Ids'] = $request->ids;
        }

        if (null !== $request->inUse) {
            @$body['InUse'] = $request->inUse;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateAutomateResponseConfigStatus',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAutomateResponseConfigStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the status of an automatic response rule.
     *
     * @param request - UpdateAutomateResponseConfigStatusRequest
     *
     * @returns UpdateAutomateResponseConfigStatusResponse
     *
     * @param UpdateAutomateResponseConfigStatusRequest $request
     *
     * @return UpdateAutomateResponseConfigStatusResponse
     */
    public function updateAutomateResponseConfigStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutomateResponseConfigStatusWithOptions($request, $runtime);
    }

    /**
     * Creates or updates an alert whitelist rule.
     *
     * @param request - UpdateWhiteRuleListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateWhiteRuleListResponse
     *
     * @param UpdateWhiteRuleListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateWhiteRuleListResponse
     */
    public function updateWhiteRuleListWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->expression) {
            @$body['Expression'] = $request->expression;
        }

        if (null !== $request->incidentUuid) {
            @$body['IncidentUuid'] = $request->incidentUuid;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->roleFor) {
            @$body['RoleFor'] = $request->roleFor;
        }

        if (null !== $request->roleType) {
            @$body['RoleType'] = $request->roleType;
        }

        if (null !== $request->whiteRuleId) {
            @$body['WhiteRuleId'] = $request->whiteRuleId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateWhiteRuleList',
            'version' => '2022-06-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateWhiteRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or updates an alert whitelist rule.
     *
     * @param request - UpdateWhiteRuleListRequest
     *
     * @returns UpdateWhiteRuleListResponse
     *
     * @param UpdateWhiteRuleListRequest $request
     *
     * @return UpdateWhiteRuleListResponse
     */
    public function updateWhiteRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWhiteRuleListWithOptions($request, $runtime);
    }
}
