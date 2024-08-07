<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddDataSourceLogRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddDataSourceLogResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddDataSourceRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddDataSourceResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddUserRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddUserResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddUserSourceLogConfigRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddUserSourceLogConfigResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\BatchJobSubmitRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\BatchJobSubmitResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteUserRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteUserResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAttackTimeLineRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAttackTimeLineResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCsImportedProdStatusByUserRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCsImportedProdStatusByUserResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeJobStatusRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeJobStatusResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogFieldsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogFieldsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogSourceRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogSourceResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogStoreRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogStoreResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DoQuickFieldRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DoQuickFieldResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DoSelfDelegateRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DoSelfDelegateResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\EnableAccessForCloudSiemRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\EnableAccessForCloudSiemResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\EnableServiceForCloudSiemRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\EnableServiceForCloudSiemResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetCapacityRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetCapacityResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetHistogramsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetHistogramsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetLogsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetLogsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetQuickQueryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetQuickQueryResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListImportedLogsByProdRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListImportedLogsByProdResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListOperationRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListOperationResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListProjectLogStoresRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListProjectLogStoresResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListQuickQueryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListQuickQueryResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListRdUsersRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListRdUsersResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListUserProdLogsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListUserProdLogsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListUsersByProdRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListUsersByProdResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\SaveQuickQueryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\SaveQuickQueryResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\SetStorageRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\SetStorageResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ShowQuickAnalysisRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ShowQuickAnalysisResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\SubmitImportLogTasksRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\SubmitImportLogTasksResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\SubmitJobsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\SubmitJobsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\UpdateAutomateResponseConfigStatusRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\UpdateAutomateResponseConfigStatusResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\UpdateWhiteRuleListRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\UpdateWhiteRuleListResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Adds a data source to a cloud account that is added to the threat analysis feature.
     *  *
     * @param AddDataSourceRequest $request AddDataSourceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDataSourceResponse AddDataSourceResponse
     */
    public function addDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->dataSourceInstanceName)) {
            $body['DataSourceInstanceName'] = $request->dataSourceInstanceName;
        }
        if (!Utils::isUnset($request->dataSourceInstanceParams)) {
            $body['DataSourceInstanceParams'] = $request->dataSourceInstanceParams;
        }
        if (!Utils::isUnset($request->dataSourceInstanceRemark)) {
            $body['DataSourceInstanceRemark'] = $request->dataSourceInstanceRemark;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDataSource',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a data source to a cloud account that is added to the threat analysis feature.
     *  *
     * @param AddDataSourceRequest $request AddDataSourceRequest
     *
     * @return AddDataSourceResponse AddDataSourceResponse
     */
    public function addDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Adds logs of a cloud account to the threat analysis feature.
     *  *
     * @param AddDataSourceLogRequest $request AddDataSourceLogRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDataSourceLogResponse AddDataSourceLogResponse
     */
    public function addDataSourceLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->dataSourceInstanceId)) {
            $body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceInstanceLogs)) {
            $body['DataSourceInstanceLogs'] = $request->dataSourceInstanceLogs;
        }
        if (!Utils::isUnset($request->logCode)) {
            $body['LogCode'] = $request->logCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddDataSourceLog',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDataSourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds logs of a cloud account to the threat analysis feature.
     *  *
     * @param AddDataSourceLogRequest $request AddDataSourceLogRequest
     *
     * @return AddDataSourceLogResponse AddDataSourceLogResponse
     */
    public function addDataSourceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDataSourceLogWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a cloud account to the threat analysis feature for centralized management. After you add the account, you can use the account to perform operations that are supported by the threat analysis feature. For example, you can add logs of the account to the threat analysis feature.
     *  *
     * @param AddUserRequest $request AddUserRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserResponse AddUserResponse
     */
    public function addUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->addedUserId)) {
            $body['AddedUserId'] = $request->addedUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddUser',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a cloud account to the threat analysis feature for centralized management. After you add the account, you can use the account to perform operations that are supported by the threat analysis feature. For example, you can add logs of the account to the threat analysis feature.
     *  *
     * @param AddUserRequest $request AddUserRequest
     *
     * @return AddUserResponse AddUserResponse
     */
    public function addUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserWithOptions($request, $runtime);
    }

    /**
     * @summary Adds the logs of a cloud service within a cloud account to the threat analysis feature for alert and event anslysis.
     *  *
     * @param AddUserSourceLogConfigRequest $request AddUserSourceLogConfigRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserSourceLogConfigResponse AddUserSourceLogConfigResponse
     */
    public function addUserSourceLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->deleted)) {
            $body['Deleted'] = $request->deleted;
        }
        if (!Utils::isUnset($request->disPlayLine)) {
            $body['DisPlayLine'] = $request->disPlayLine;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceLogCode)) {
            $body['SourceLogCode'] = $request->sourceLogCode;
        }
        if (!Utils::isUnset($request->sourceLogInfo)) {
            $body['SourceLogInfo'] = $request->sourceLogInfo;
        }
        if (!Utils::isUnset($request->sourceProdCode)) {
            $body['SourceProdCode'] = $request->sourceProdCode;
        }
        if (!Utils::isUnset($request->subUserId)) {
            $body['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddUserSourceLogConfig',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserSourceLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds the logs of a cloud service within a cloud account to the threat analysis feature for alert and event anslysis.
     *  *
     * @param AddUserSourceLogConfigRequest $request AddUserSourceLogConfigRequest
     *
     * @return AddUserSourceLogConfigResponse AddUserSourceLogConfigResponse
     */
    public function addUserSourceLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserSourceLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Configures log collection tasks based on resource directories.
     *  *
     * @param BatchJobSubmitRequest $request BatchJobSubmitRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchJobSubmitResponse BatchJobSubmitResponse
     */
    public function batchJobSubmitWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jsonConfig)) {
            $body['JsonConfig'] = $request->jsonConfig;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BatchJobSubmit',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchJobSubmitResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures log collection tasks based on resource directories.
     *  *
     * @param BatchJobSubmitRequest $request BatchJobSubmitRequest
     *
     * @return BatchJobSubmitResponse BatchJobSubmitResponse
     */
    public function batchJobSubmit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchJobSubmitWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a third-party cloud account that is displayed on the Multi-cloud assets tab of the Feature Settings page to the threat analysis feature.
     *  *
     * @param BindAccountRequest $request BindAccountRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return BindAccountResponse BindAccountResponse
     */
    public function bindAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessId)) {
            $body['AccessId'] = $request->accessId;
        }
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'BindAccount',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a third-party cloud account that is displayed on the Multi-cloud assets tab of the Feature Settings page to the threat analysis feature.
     *  *
     * @param BindAccountRequest $request BindAccountRequest
     *
     * @return BindAccountResponse BindAccountResponse
     */
    public function bindAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Disables the log delivery feature for a cloud service.
     *  *
     * @param CloseDeliveryRequest $request CloseDeliveryRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CloseDeliveryResponse CloseDeliveryResponse
     */
    public function closeDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->logCode)) {
            $body['LogCode'] = $request->logCode;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CloseDelivery',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CloseDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables the log delivery feature for a cloud service.
     *  *
     * @param CloseDeliveryRequest $request CloseDeliveryRequest
     *
     * @return CloseDeliveryResponse CloseDeliveryResponse
     */
    public function closeDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->closeDeliveryWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the automated response rule with a specified ID.
     *  *
     * @param DeleteAutomateResponseConfigRequest $request DeleteAutomateResponseConfigRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAutomateResponseConfigResponse DeleteAutomateResponseConfigResponse
     */
    public function deleteAutomateResponseConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAutomateResponseConfig',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAutomateResponseConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the automated response rule with a specified ID.
     *  *
     * @param DeleteAutomateResponseConfigRequest $request DeleteAutomateResponseConfigRequest
     *
     * @return DeleteAutomateResponseConfigResponse DeleteAutomateResponseConfigResponse
     */
    public function deleteAutomateResponseConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutomateResponseConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a third-party cloud account that is added to the threat analysis feature by using its AccessKey ID. You can add another cloud account based on your business requirements.
     *  *
     * @param DeleteBindAccountRequest $request DeleteBindAccountRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBindAccountResponse DeleteBindAccountResponse
     */
    public function deleteBindAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessId)) {
            $body['AccessId'] = $request->accessId;
        }
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->bindId)) {
            $body['BindId'] = $request->bindId;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteBindAccount',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBindAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes a third-party cloud account that is added to the threat analysis feature by using its AccessKey ID. You can add another cloud account based on your business requirements.
     *  *
     * @param DeleteBindAccountRequest $request DeleteBindAccountRequest
     *
     * @return DeleteBindAccountResponse DeleteBindAccountResponse
     */
    public function deleteBindAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBindAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a rule by rule ID.
     *  *
     * @param DeleteCustomizeRuleRequest $request DeleteCustomizeRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomizeRuleResponse DeleteCustomizeRuleResponse
     */
    public function deleteCustomizeRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomizeRule',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomizeRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a rule by rule ID.
     *  *
     * @param DeleteCustomizeRuleRequest $request DeleteCustomizeRuleRequest
     *
     * @return DeleteCustomizeRuleResponse DeleteCustomizeRuleResponse
     */
    public function deleteCustomizeRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomizeRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a data source that is no longer required.
     *  *
     * @param DeleteDataSourceRequest $request DeleteDataSourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDataSourceResponse DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->dataSourceInstanceId)) {
            $body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSource',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes a data source that is no longer required.
     *  *
     * @param DeleteDataSourceRequest $request DeleteDataSourceRequest
     *
     * @return DeleteDataSourceResponse DeleteDataSourceResponse
     */
    public function deleteDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Removes a log.
     *  *
     * @param DeleteDataSourceLogRequest $request DeleteDataSourceLogRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDataSourceLogResponse DeleteDataSourceLogResponse
     */
    public function deleteDataSourceLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->dataSourceInstanceId)) {
            $body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }
        if (!Utils::isUnset($request->logInstanceId)) {
            $body['LogInstanceId'] = $request->logInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSourceLog',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDataSourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes a log.
     *  *
     * @param DeleteDataSourceLogRequest $request DeleteDataSourceLogRequest
     *
     * @return DeleteDataSourceLogResponse DeleteDataSourceLogResponse
     */
    public function deleteDataSourceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDataSourceLogWithOptions($request, $runtime);
    }

    /**
     * @summary Removes an Alibaba Cloud account that is added to the threat analysis feature for centralized management. You can add the account to the feature again if required.
     *  *
     * @param DeleteUserRequest $request DeleteUserRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->addedUserId)) {
            $body['AddedUserId'] = $request->addedUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteUser',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes an Alibaba Cloud account that is added to the threat analysis feature for centralized management. You can add the account to the feature again if required.
     *  *
     * @param DeleteUserRequest $request DeleteUserRequest
     *
     * @return DeleteUserResponse DeleteUserResponse
     */
    public function deleteUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an alert whitelist rule with a specified ID.
     *  *
     * @param DeleteWhiteRuleListRequest $request DeleteWhiteRuleListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteWhiteRuleListResponse DeleteWhiteRuleListResponse
     */
    public function deleteWhiteRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWhiteRuleList',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWhiteRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an alert whitelist rule with a specified ID.
     *  *
     * @param DeleteWhiteRuleListRequest $request DeleteWhiteRuleListRequest
     *
     * @return DeleteWhiteRuleListResponse DeleteWhiteRuleListResponse
     */
    public function deleteWhiteRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWhiteRuleListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the aggregate functions that are supported for a custom rule.
     *  *
     * @param DescribeAggregateFunctionRequest $request DescribeAggregateFunctionRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAggregateFunctionResponse DescribeAggregateFunctionResponse
     */
    public function describeAggregateFunctionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAggregateFunction',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAggregateFunctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the aggregate functions that are supported for a custom rule.
     *  *
     * @param DescribeAggregateFunctionRequest $request DescribeAggregateFunctionRequest
     *
     * @return DescribeAggregateFunctionResponse DescribeAggregateFunctionResponse
     */
    public function describeAggregateFunction($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAggregateFunctionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the scenarios in which an alert needs to be added to the whitelist.
     *  *
     * @param DescribeAlertSceneRequest $request DescribeAlertSceneRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertSceneResponse DescribeAlertSceneResponse
     */
    public function describeAlertSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertScene',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the scenarios in which an alert needs to be added to the whitelist.
     *  *
     * @param DescribeAlertSceneRequest $request DescribeAlertSceneRequest
     *
     * @return DescribeAlertSceneResponse DescribeAlertSceneResponse
     */
    public function describeAlertScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertSceneWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the scenarios and objects that can be added to an alert whitelist rule.
     *  *
     * @param DescribeAlertSceneByEventRequest $request DescribeAlertSceneByEventRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertSceneByEventResponse DescribeAlertSceneByEventResponse
     */
    public function describeAlertSceneByEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertSceneByEvent',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertSceneByEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the scenarios and objects that can be added to an alert whitelist rule.
     *  *
     * @param DescribeAlertSceneByEventRequest $request DescribeAlertSceneByEventRequest
     *
     * @return DescribeAlertSceneByEventResponse DescribeAlertSceneByEventResponse
     */
    public function describeAlertSceneByEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertSceneByEventWithOptions($request, $runtime);
    }

    /**
     * @summary Queries alert data sources.
     *  *
     * @param DescribeAlertSourceRequest $request DescribeAlertSourceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertSourceResponse DescribeAlertSourceResponse
     */
    public function describeAlertSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->level)) {
            $body['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertSource',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries alert data sources.
     *  *
     * @param DescribeAlertSourceRequest $request DescribeAlertSourceRequest
     *
     * @return DescribeAlertSourceResponse DescribeAlertSourceResponse
     */
    public function describeAlertSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the data sources of the alert that is associated with an event.
     *  *
     * @param DescribeAlertSourceWithEventRequest $request DescribeAlertSourceWithEventRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertSourceWithEventResponse DescribeAlertSourceWithEventResponse
     */
    public function describeAlertSourceWithEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertSourceWithEvent',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertSourceWithEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the data sources of the alert that is associated with an event.
     *  *
     * @param DescribeAlertSourceWithEventRequest $request DescribeAlertSourceWithEventRequest
     *
     * @return DescribeAlertSourceWithEventResponse DescribeAlertSourceWithEventResponse
     */
    public function describeAlertSourceWithEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertSourceWithEventWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the threat types that you can select when you create a custom rule.
     *  *
     * @param DescribeAlertTypeRequest $request DescribeAlertTypeRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertTypeResponse DescribeAlertTypeResponse
     */
    public function describeAlertTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $body['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertType',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the threat types that you can select when you create a custom rule.
     *  *
     * @param DescribeAlertTypeRequest $request DescribeAlertTypeRequest
     *
     * @return DescribeAlertTypeResponse DescribeAlertTypeResponse
     */
    public function describeAlertType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries alerts within your account.
     *  *
     * @param DescribeAlertsRequest $request DescribeAlertsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertsResponse DescribeAlertsResponse
     */
    public function describeAlertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertTitle)) {
            $body['AlertTitle'] = $request->alertTitle;
        }
        if (!Utils::isUnset($request->alertUuid)) {
            $body['AlertUuid'] = $request->alertUuid;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->isDefend)) {
            $body['IsDefend'] = $request->isDefend;
        }
        if (!Utils::isUnset($request->level)) {
            $body['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->subUserId)) {
            $body['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlerts',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries alerts within your account.
     *  *
     * @param DescribeAlertsRequest $request DescribeAlertsRequest
     *
     * @return DescribeAlertsResponse DescribeAlertsResponse
     */
    public function describeAlerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of alerts of different severities.
     *  *
     * @param DescribeAlertsCountRequest $request DescribeAlertsCountRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertsCountResponse DescribeAlertsCountResponse
     */
    public function describeAlertsCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertsCount',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertsCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of alerts of different severities.
     *  *
     * @param DescribeAlertsCountRequest $request DescribeAlertsCountRequest
     *
     * @return DescribeAlertsCountResponse DescribeAlertsCountResponse
     */
    public function describeAlertsCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertsCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the alerts that are associated with an entity.
     *  *
     * @param DescribeAlertsWithEntityRequest $request DescribeAlertsWithEntityRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertsWithEntityResponse DescribeAlertsWithEntityResponse
     */
    public function describeAlertsWithEntityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->entityId)) {
            $body['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->sophonTaskId)) {
            $body['SophonTaskId'] = $request->sophonTaskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertsWithEntity',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertsWithEntityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the alerts that are associated with an entity.
     *  *
     * @param DescribeAlertsWithEntityRequest $request DescribeAlertsWithEntityRequest
     *
     * @return DescribeAlertsWithEntityResponse DescribeAlertsWithEntityResponse
     */
    public function describeAlertsWithEntity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertsWithEntityWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the alerts that are associated with an event.
     *  *
     * @param DescribeAlertsWithEventRequest $request DescribeAlertsWithEventRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAlertsWithEventResponse DescribeAlertsWithEventResponse
     */
    public function describeAlertsWithEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertTitle)) {
            $body['AlertTitle'] = $request->alertTitle;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->isDefend)) {
            $body['IsDefend'] = $request->isDefend;
        }
        if (!Utils::isUnset($request->level)) {
            $body['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->source)) {
            $body['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->subUserId)) {
            $body['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlertsWithEvent',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlertsWithEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the alerts that are associated with an event.
     *  *
     * @param DescribeAlertsWithEventRequest $request DescribeAlertsWithEventRequest
     *
     * @return DescribeAlertsWithEventResponse DescribeAlertsWithEventResponse
     */
    public function describeAlertsWithEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlertsWithEventWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the timeline of the alerts that are associated with an event.
     *  *
     * @param DescribeAttackTimeLineRequest $request DescribeAttackTimeLineRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAttackTimeLineResponse DescribeAttackTimeLineResponse
     */
    public function describeAttackTimeLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assetName)) {
            $body['AssetName'] = $request->assetName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAttackTimeLine',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAttackTimeLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the timeline of the alerts that are associated with an event.
     *  *
     * @param DescribeAttackTimeLineRequest $request DescribeAttackTimeLineRequest
     *
     * @return DescribeAttackTimeLineResponse DescribeAttackTimeLineResponse
     */
    public function describeAttackTimeLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAttackTimeLineWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether the security information and event management (SIEM) system is granted the required permissions to access other cloud resources within your Alibaba Cloud account and whether the AliyunServiceRoleForSasCloudSiem service-linked role is created.
     *  *
     * @param DescribeAuthRequest $request DescribeAuthRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAuthResponse DescribeAuthResponse
     */
    public function describeAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAuth',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAuthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether the security information and event management (SIEM) system is granted the required permissions to access other cloud resources within your Alibaba Cloud account and whether the AliyunServiceRoleForSasCloudSiem service-linked role is created.
     *  *
     * @param DescribeAuthRequest $request DescribeAuthRequest
     *
     * @return DescribeAuthResponse DescribeAuthResponse
     */
    public function describeAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuthWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of automated response rules.
     *  *
     * @param DescribeAutomateResponseConfigCounterRequest $request DescribeAutomateResponseConfigCounterRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutomateResponseConfigCounterResponse DescribeAutomateResponseConfigCounterResponse
     */
    public function describeAutomateResponseConfigCounterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutomateResponseConfigCounter',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutomateResponseConfigCounterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of automated response rules.
     *  *
     * @param DescribeAutomateResponseConfigCounterRequest $request DescribeAutomateResponseConfigCounterRequest
     *
     * @return DescribeAutomateResponseConfigCounterResponse DescribeAutomateResponseConfigCounterResponse
     */
    public function describeAutomateResponseConfigCounter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutomateResponseConfigCounterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurable fields and operators of an automated response rule.
     *  *
     * @param DescribeAutomateResponseConfigFeatureRequest $request DescribeAutomateResponseConfigFeatureRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutomateResponseConfigFeatureResponse DescribeAutomateResponseConfigFeatureResponse
     */
    public function describeAutomateResponseConfigFeatureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoResponseType)) {
            $body['AutoResponseType'] = $request->autoResponseType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutomateResponseConfigFeature',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutomateResponseConfigFeatureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurable fields and operators of an automated response rule.
     *  *
     * @param DescribeAutomateResponseConfigFeatureRequest $request DescribeAutomateResponseConfigFeatureRequest
     *
     * @return DescribeAutomateResponseConfigFeatureResponse DescribeAutomateResponseConfigFeatureResponse
     */
    public function describeAutomateResponseConfigFeature($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutomateResponseConfigFeatureWithOptions($request, $runtime);
    }

    /**
     * @summary Queries user-defined playbooks.
     *  *
     * @param DescribeAutomateResponseConfigPlayBooksRequest $request DescribeAutomateResponseConfigPlayBooksRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutomateResponseConfigPlayBooksResponse DescribeAutomateResponseConfigPlayBooksResponse
     */
    public function describeAutomateResponseConfigPlayBooksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoResponseType)) {
            $body['AutoResponseType'] = $request->autoResponseType;
        }
        if (!Utils::isUnset($request->entityType)) {
            $body['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutomateResponseConfigPlayBooks',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutomateResponseConfigPlayBooksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries user-defined playbooks.
     *  *
     * @param DescribeAutomateResponseConfigPlayBooksRequest $request DescribeAutomateResponseConfigPlayBooksRequest
     *
     * @return DescribeAutomateResponseConfigPlayBooksResponse DescribeAutomateResponseConfigPlayBooksResponse
     */
    public function describeAutomateResponseConfigPlayBooks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutomateResponseConfigPlayBooksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the assets that are associated with an event.
     *  *
     * @param DescribeCloudSiemAssetsRequest $request DescribeCloudSiemAssetsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudSiemAssetsResponse DescribeCloudSiemAssetsResponse
     */
    public function describeCloudSiemAssetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assetType)) {
            $body['AssetType'] = $request->assetType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudSiemAssets',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudSiemAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the assets that are associated with an event.
     *  *
     * @param DescribeCloudSiemAssetsRequest $request DescribeCloudSiemAssetsRequest
     *
     * @return DescribeCloudSiemAssetsResponse DescribeCloudSiemAssetsResponse
     */
    public function describeCloudSiemAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudSiemAssetsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of assets that are associated with an event by asset type.
     *  *
     * @param DescribeCloudSiemAssetsCounterRequest $request DescribeCloudSiemAssetsCounterRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudSiemAssetsCounterResponse DescribeCloudSiemAssetsCounterResponse
     */
    public function describeCloudSiemAssetsCounterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudSiemAssetsCounter',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudSiemAssetsCounterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of assets that are associated with an event by asset type.
     *  *
     * @param DescribeCloudSiemAssetsCounterRequest $request DescribeCloudSiemAssetsCounterRequest
     *
     * @return DescribeCloudSiemAssetsCounterResponse DescribeCloudSiemAssetsCounterResponse
     */
    public function describeCloudSiemAssetsCounter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudSiemAssetsCounterWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an event.
     *  *
     * @param DescribeCloudSiemEventDetailRequest $request DescribeCloudSiemEventDetailRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudSiemEventDetailResponse DescribeCloudSiemEventDetailResponse
     */
    public function describeCloudSiemEventDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudSiemEventDetail',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudSiemEventDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an event.
     *  *
     * @param DescribeCloudSiemEventDetailRequest $request DescribeCloudSiemEventDetailRequest
     *
     * @return DescribeCloudSiemEventDetailResponse DescribeCloudSiemEventDetailResponse
     */
    public function describeCloudSiemEventDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudSiemEventDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries events in SIEM.
     *  *
     * @param DescribeCloudSiemEventsRequest $request DescribeCloudSiemEventsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudSiemEventsResponse DescribeCloudSiemEventsResponse
     */
    public function describeCloudSiemEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->assetId)) {
            $body['AssetId'] = $request->assetId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventName)) {
            $body['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->order)) {
            $body['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderField)) {
            $body['OrderField'] = $request->orderField;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->threadLevel)) {
            $body['ThreadLevel'] = $request->threadLevel;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudSiemEvents',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudSiemEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries events in SIEM.
     *  *
     * @param DescribeCloudSiemEventsRequest $request DescribeCloudSiemEventsRequest
     *
     * @return DescribeCloudSiemEventsResponse DescribeCloudSiemEventsResponse
     */
    public function describeCloudSiemEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudSiemEventsWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether an Alibaba Cloud service is activated for an Alibaba Cloud account.
     *  *
     * @param DescribeCsImportedProdStatusByUserRequest $request DescribeCsImportedProdStatusByUserRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCsImportedProdStatusByUserResponse DescribeCsImportedProdStatusByUserResponse
     */
    public function describeCsImportedProdStatusByUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceLogProd)) {
            $body['SourceLogProd'] = $request->sourceLogProd;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCsImportedProdStatusByUser',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCsImportedProdStatusByUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether an Alibaba Cloud service is activated for an Alibaba Cloud account.
     *  *
     * @param DescribeCsImportedProdStatusByUserRequest $request DescribeCsImportedProdStatusByUserRequest
     *
     * @return DescribeCsImportedProdStatusByUserResponse DescribeCsImportedProdStatusByUserResponse
     */
    public function describeCsImportedProdStatusByUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCsImportedProdStatusByUserWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of custom rules.
     *  *
     * @param DescribeCustomizeRuleCountRequest $request DescribeCustomizeRuleCountRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomizeRuleCountResponse DescribeCustomizeRuleCountResponse
     */
    public function describeCustomizeRuleCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomizeRuleCount',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomizeRuleCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of custom rules.
     *  *
     * @param DescribeCustomizeRuleCountRequest $request DescribeCustomizeRuleCountRequest
     *
     * @return DescribeCustomizeRuleCountResponse DescribeCustomizeRuleCountResponse
     */
    public function describeCustomizeRuleCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomizeRuleCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the historical simulation data that is used in a simulation test scenario.
     *  *
     * @param DescribeCustomizeRuleTestRequest $request DescribeCustomizeRuleTestRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomizeRuleTestResponse DescribeCustomizeRuleTestResponse
     */
    public function describeCustomizeRuleTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomizeRuleTest',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomizeRuleTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the historical simulation data that is used in a simulation test scenario.
     *  *
     * @param DescribeCustomizeRuleTestRequest $request DescribeCustomizeRuleTestRequest
     *
     * @return DescribeCustomizeRuleTestResponse DescribeCustomizeRuleTestResponse
     */
    public function describeCustomizeRuleTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomizeRuleTestWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the chart that displays the test results of business data for a custom rule.
     *  *
     * @param DescribeCustomizeRuleTestHistogramRequest $request DescribeCustomizeRuleTestHistogramRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomizeRuleTestHistogramResponse DescribeCustomizeRuleTestHistogramResponse
     */
    public function describeCustomizeRuleTestHistogramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomizeRuleTestHistogram',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomizeRuleTestHistogramResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the chart that displays the test results of business data for a custom rule.
     *  *
     * @param DescribeCustomizeRuleTestHistogramRequest $request DescribeCustomizeRuleTestHistogramRequest
     *
     * @return DescribeCustomizeRuleTestHistogramResponse DescribeCustomizeRuleTestHistogramResponse
     */
    public function describeCustomizeRuleTestHistogram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomizeRuleTestHistogramWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a data source.
     *  *
     * @param DescribeDataSourceInstanceRequest $request DescribeDataSourceInstanceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataSourceInstanceResponse DescribeDataSourceInstanceResponse
     */
    public function describeDataSourceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->dataSourceInstanceId)) {
            $body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataSourceInstance',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataSourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a data source.
     *  *
     * @param DescribeDataSourceInstanceRequest $request DescribeDataSourceInstanceRequest
     *
     * @return DescribeDataSourceInstanceResponse DescribeDataSourceInstanceResponse
     */
    public function describeDataSourceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSourceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the parameters of a data source.
     *  *
     * @param DescribeDataSourceParametersRequest $request DescribeDataSourceParametersRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataSourceParametersResponse DescribeDataSourceParametersResponse
     */
    public function describeDataSourceParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataSourceParameters',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataSourceParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the parameters of a data source.
     *  *
     * @param DescribeDataSourceParametersRequest $request DescribeDataSourceParametersRequest
     *
     * @return DescribeDataSourceParametersResponse DescribeDataSourceParametersResponse
     */
    public function describeDataSourceParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataSourceParametersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of entities and playbooks that need to be handled.
     *  *
     * @param DescribeDisposeAndPlaybookRequest $request DescribeDisposeAndPlaybookRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDisposeAndPlaybookResponse DescribeDisposeAndPlaybookResponse
     */
    public function describeDisposeAndPlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->entityType)) {
            $body['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDisposeAndPlaybook',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDisposeAndPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of entities and playbooks that need to be handled.
     *  *
     * @param DescribeDisposeAndPlaybookRequest $request DescribeDisposeAndPlaybookRequest
     *
     * @return DescribeDisposeAndPlaybookResponse DescribeDisposeAndPlaybookResponse
     */
    public function describeDisposeAndPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisposeAndPlaybookWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of playbooks that are used by a handling policy.
     *  *
     * @param DescribeDisposeStrategyPlaybookRequest $request DescribeDisposeStrategyPlaybookRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDisposeStrategyPlaybookResponse DescribeDisposeStrategyPlaybookResponse
     */
    public function describeDisposeStrategyPlaybookWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDisposeStrategyPlaybook',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDisposeStrategyPlaybookResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of playbooks that are used by a handling policy.
     *  *
     * @param DescribeDisposeStrategyPlaybookRequest $request DescribeDisposeStrategyPlaybookRequest
     *
     * @return DescribeDisposeStrategyPlaybookResponse DescribeDisposeStrategyPlaybookResponse
     */
    public function describeDisposeStrategyPlaybook($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisposeStrategyPlaybookWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an entity.
     *  *
     * @param DescribeEntityInfoRequest $request DescribeEntityInfoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEntityInfoResponse DescribeEntityInfoResponse
     */
    public function describeEntityInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->entityId)) {
            $body['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->entityIdentity)) {
            $body['EntityIdentity'] = $request->entityIdentity;
        }
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->sophonTaskId)) {
            $body['SophonTaskId'] = $request->sophonTaskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEntityInfo',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEntityInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an entity.
     *  *
     * @param DescribeEntityInfoRequest $request DescribeEntityInfoRequest
     *
     * @return DescribeEntityInfoResponse DescribeEntityInfoResponse
     */
    public function describeEntityInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEntityInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of events by type.
     *  *
     * @param DescribeEventCountByThreatLevelRequest $request DescribeEventCountByThreatLevelRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventCountByThreatLevelResponse DescribeEventCountByThreatLevelResponse
     */
    public function describeEventCountByThreatLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventCountByThreatLevel',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventCountByThreatLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of events by type.
     *  *
     * @param DescribeEventCountByThreatLevelRequest $request DescribeEventCountByThreatLevelRequest
     *
     * @return DescribeEventCountByThreatLevelResponse DescribeEventCountByThreatLevelResponse
     */
    public function describeEventCountByThreatLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventCountByThreatLevelWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the handling policies of a historical event.
     *  *
     * @param DescribeEventDisposeRequest $request DescribeEventDisposeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEventDisposeResponse DescribeEventDisposeResponse
     */
    public function describeEventDisposeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeEventDispose',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEventDisposeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the handling policies of a historical event.
     *  *
     * @param DescribeEventDisposeRequest $request DescribeEventDisposeRequest
     *
     * @return DescribeEventDisposeResponse DescribeEventDisposeResponse
     */
    public function describeEventDispose($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventDisposeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of logs that are added to the threat analysis feature.
     *  *
     * @param DescribeImportedLogCountRequest $request DescribeImportedLogCountRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeImportedLogCountResponse DescribeImportedLogCountResponse
     */
    public function describeImportedLogCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeImportedLogCount',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImportedLogCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of logs that are added to the threat analysis feature.
     *  *
     * @param DescribeImportedLogCountRequest $request DescribeImportedLogCountRequest
     *
     * @return DescribeImportedLogCountResponse DescribeImportedLogCountResponse
     */
    public function describeImportedLogCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImportedLogCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of collection tasks by using the submitId parameter of the tasks.
     *  *
     * @param DescribeJobStatusRequest $request DescribeJobStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeJobStatusResponse DescribeJobStatusResponse
     */
    public function describeJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->submitId)) {
            $body['SubmitId'] = $request->submitId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeJobStatus',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeJobStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of collection tasks by using the submitId parameter of the tasks.
     *  *
     * @param DescribeJobStatusRequest $request DescribeJobStatusRequest
     *
     * @return DescribeJobStatusResponse DescribeJobStatusResponse
     */
    public function describeJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the fields that can be configured for a custom rule.
     *  *
     * @param DescribeLogFieldsRequest $request DescribeLogFieldsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogFieldsResponse DescribeLogFieldsResponse
     */
    public function describeLogFieldsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->logSource)) {
            $body['LogSource'] = $request->logSource;
        }
        if (!Utils::isUnset($request->logType)) {
            $body['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogFields',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the fields that can be configured for a custom rule.
     *  *
     * @param DescribeLogFieldsRequest $request DescribeLogFieldsRequest
     *
     * @return DescribeLogFieldsResponse DescribeLogFieldsResponse
     */
    public function describeLogFields($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogFieldsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the log sources that can be configured for a custom rule.
     *  *
     * @param DescribeLogSourceRequest $request DescribeLogSourceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogSourceResponse DescribeLogSourceResponse
     */
    public function describeLogSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->logType)) {
            $body['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogSource',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the log sources that can be configured for a custom rule.
     *  *
     * @param DescribeLogSourceRequest $request DescribeLogSourceRequest
     *
     * @return DescribeLogSourceResponse DescribeLogSourceResponse
     */
    public function describeLogSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a Logstore that is used in the threat analysis feature of Simple Log Service on the user side. The information may be the Logstore name or the time-to-live (TTL) period of data in the Logstore.
     *  *
     * @param DescribeLogStoreRequest $request DescribeLogStoreRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogStoreResponse DescribeLogStoreResponse
     */
    public function describeLogStoreWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogStore',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogStoreResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a Logstore that is used in the threat analysis feature of Simple Log Service on the user side. The information may be the Logstore name or the time-to-live (TTL) period of data in the Logstore.
     *  *
     * @param DescribeLogStoreRequest $request DescribeLogStoreRequest
     *
     * @return DescribeLogStoreResponse DescribeLogStoreResponse
     */
    public function describeLogStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogStoreWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the log types that can be configured for a custom rule.
     *  *
     * @param DescribeLogTypeRequest $request DescribeLogTypeRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLogTypeResponse DescribeLogTypeResponse
     */
    public function describeLogTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeLogType',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLogTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the log types that can be configured for a custom rule.
     *  *
     * @param DescribeLogTypeRequest $request DescribeLogTypeRequest
     *
     * @return DescribeLogTypeResponse DescribeLogTypeResponse
     */
    public function describeLogType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the operator of a custom rule.
     *  *
     * @param DescribeOperatorsRequest $request DescribeOperatorsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOperatorsResponse DescribeOperatorsResponse
     */
    public function describeOperatorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->sceneType)) {
            $body['SceneType'] = $request->sceneType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeOperators',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOperatorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the operator of a custom rule.
     *  *
     * @param DescribeOperatorsRequest $request DescribeOperatorsRequest
     *
     * @return DescribeOperatorsResponse DescribeOperatorsResponse
     */
    public function describeOperators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOperatorsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the number of services that can be added to the threat analysis feature in Alibaba Cloud, Tenant Cloud, and Huawei Cloud.
     *  *
     * @param DescribeProdCountRequest $request DescribeProdCountRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeProdCountResponse DescribeProdCountResponse
     */
    public function describeProdCountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeProdCount',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProdCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the number of services that can be added to the threat analysis feature in Alibaba Cloud, Tenant Cloud, and Huawei Cloud.
     *  *
     * @param DescribeProdCountRequest $request DescribeProdCountRequest
     *
     * @return DescribeProdCountResponse DescribeProdCountResponse
     */
    public function describeProdCount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProdCountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of users in the playbook scope.
     *  *
     * @param DescribeScopeUsersRequest $request DescribeScopeUsersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeScopeUsersResponse DescribeScopeUsersResponse
     */
    public function describeScopeUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeScopeUsers',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScopeUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the list of users in the playbook scope.
     *  *
     * @param DescribeScopeUsersRequest $request DescribeScopeUsersRequest
     *
     * @return DescribeScopeUsersResponse DescribeScopeUsersResponse
     */
    public function describeScopeUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScopeUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether the threat analysis feature is authorized to access a resource directory.
     *  *
     * @param DescribeServiceStatusRequest $request DescribeServiceStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceStatusResponse DescribeServiceStatusResponse
     */
    public function describeServiceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceStatus',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether the threat analysis feature is authorized to access a resource directory.
     *  *
     * @param DescribeServiceStatusRequest $request DescribeServiceStatusRequest
     *
     * @return DescribeServiceStatusResponse DescribeServiceStatusResponse
     */
    public function describeServiceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServiceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of the Logstores for the threat analysis feature in Simple Log Service on the user side.
     *  *
     * @param DescribeStorageRequest $request DescribeStorageRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStorageResponse DescribeStorageResponse
     */
    public function describeStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeStorage',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status of the Logstores for the threat analysis feature in Simple Log Service on the user side.
     *  *
     * @param DescribeStorageRequest $request DescribeStorageRequest
     *
     * @return DescribeStorageResponse DescribeStorageResponse
     */
    public function describeStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether the current Alibaba Cloud account or the management account of a resource directory is used to purchase the threat analysis feature.
     *  *
     * @param DescribeUserBuyStatusRequest $request DescribeUserBuyStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserBuyStatusResponse DescribeUserBuyStatusResponse
     */
    public function describeUserBuyStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subUserId)) {
            $body['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserBuyStatus',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserBuyStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Checks whether the current Alibaba Cloud account or the management account of a resource directory is used to purchase the threat analysis feature.
     *  *
     * @param DescribeUserBuyStatusRequest $request DescribeUserBuyStatusRequest
     *
     * @return DescribeUserBuyStatusResponse DescribeUserBuyStatusResponse
     */
    public function describeUserBuyStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBuyStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the protected domain names of the WAF instance for a user to which an entity belongs.
     *  *
     * @param DescribeWafScopeRequest $request DescribeWafScopeRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWafScopeResponse DescribeWafScopeResponse
     */
    public function describeWafScopeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->entityId)) {
            $body['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeWafScope',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWafScopeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the protected domain names of the WAF instance for a user to which an entity belongs.
     *  *
     * @param DescribeWafScopeRequest $request DescribeWafScopeRequest
     *
     * @return DescribeWafScopeResponse DescribeWafScopeResponse
     */
    public function describeWafScope($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWafScopeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of whitelist rules for alerts.
     *  *
     * @param DescribeWhiteRuleListRequest $request DescribeWhiteRuleListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeWhiteRuleListResponse DescribeWhiteRuleListResponse
     */
    public function describeWhiteRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertName)) {
            $body['AlertName'] = $request->alertName;
        }
        if (!Utils::isUnset($request->alertType)) {
            $body['AlertType'] = $request->alertType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeWhiteRuleList',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWhiteRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of whitelist rules for alerts.
     *  *
     * @param DescribeWhiteRuleListRequest $request DescribeWhiteRuleListRequest
     *
     * @return DescribeWhiteRuleListResponse DescribeWhiteRuleListResponse
     */
    public function describeWhiteRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWhiteRuleListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries and analyzes the distribution of specific fields by using quick analysis.
     *  *
     * @param DoQuickFieldRequest $request DoQuickFieldRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DoQuickFieldResponse DoQuickFieldResponse
     */
    public function doQuickFieldWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->from)) {
            $body['From'] = $request->from;
        }
        if (!Utils::isUnset($request->index)) {
            $body['Index'] = $request->index;
        }
        if (!Utils::isUnset($request->page)) {
            $body['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reverse)) {
            $body['Reverse'] = $request->reverse;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->to)) {
            $body['To'] = $request->to;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DoQuickField',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DoQuickFieldResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries and analyzes the distribution of specific fields by using quick analysis.
     *  *
     * @param DoQuickFieldRequest $request DoQuickFieldRequest
     *
     * @return DoQuickFieldResponse DoQuickFieldResponse
     */
    public function doQuickField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doQuickFieldWithOptions($request, $runtime);
    }

    /**
     * @summary Grants permissions to or revokes permissions from a regular member on the threat analysis feature. This helps manage the authorization to view information such as log analysis and alerts.
     *  *
     * @param DoSelfDelegateRequest $request DoSelfDelegateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DoSelfDelegateResponse DoSelfDelegateResponse
     */
    public function doSelfDelegateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->aliUid)) {
            $body['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->delegateOrNot)) {
            $body['DelegateOrNot'] = $request->delegateOrNot;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DoSelfDelegate',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DoSelfDelegateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Grants permissions to or revokes permissions from a regular member on the threat analysis feature. This helps manage the authorization to view information such as log analysis and alerts.
     *  *
     * @param DoSelfDelegateRequest $request DoSelfDelegateRequest
     *
     * @return DoSelfDelegateResponse DoSelfDelegateResponse
     */
    public function doSelfDelegate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doSelfDelegateWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a service-linked role named AliyunServiceRoleForSasCloudSiem for the threat analysis feature. The feature can assume this role to access cloud services.
     *  *
     * @param EnableAccessForCloudSiemRequest $request EnableAccessForCloudSiemRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableAccessForCloudSiemResponse EnableAccessForCloudSiemResponse
     */
    public function enableAccessForCloudSiemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoSubmit)) {
            $body['AutoSubmit'] = $request->autoSubmit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableAccessForCloudSiem',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableAccessForCloudSiemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a service-linked role named AliyunServiceRoleForSasCloudSiem for the threat analysis feature. The feature can assume this role to access cloud services.
     *  *
     * @param EnableAccessForCloudSiemRequest $request EnableAccessForCloudSiemRequest
     *
     * @return EnableAccessForCloudSiemResponse EnableAccessForCloudSiemResponse
     */
    public function enableAccessForCloudSiem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableAccessForCloudSiemWithOptions($request, $runtime);
    }

    /**
     * @summary Authorizes the threat analysis feature to access a resource directory. This operation must be called by the management account of the resource directory.
     *  *
     * @param EnableServiceForCloudSiemRequest $request EnableServiceForCloudSiemRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableServiceForCloudSiemResponse EnableServiceForCloudSiemResponse
     */
    public function enableServiceForCloudSiemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'EnableServiceForCloudSiem',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableServiceForCloudSiemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Authorizes the threat analysis feature to access a resource directory. This operation must be called by the management account of the resource directory.
     *  *
     * @param EnableServiceForCloudSiemRequest $request EnableServiceForCloudSiemRequest
     *
     * @return EnableServiceForCloudSiemResponse EnableServiceForCloudSiemResponse
     */
    public function enableServiceForCloudSiem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableServiceForCloudSiemWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the storage capacity usage of the threat analysis feature and the purchased storage capacity
     *  *
     * @param GetCapacityRequest $request GetCapacityRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCapacityResponse GetCapacityResponse
     */
    public function getCapacityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCapacity',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the storage capacity usage of the threat analysis feature and the purchased storage capacity
     *  *
     * @param GetCapacityRequest $request GetCapacityRequest
     *
     * @return GetCapacityResponse GetCapacityResponse
     */
    public function getCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCapacityWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the results of of search statements that are displayed in histograms.
     *  *
     * @param GetHistogramsRequest $request GetHistogramsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHistogramsResponse GetHistogramsResponse
     */
    public function getHistogramsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->from)) {
            $body['From'] = $request->from;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->to)) {
            $body['To'] = $request->to;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetHistograms',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHistogramsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the results of of search statements that are displayed in histograms.
     *  *
     * @param GetHistogramsRequest $request GetHistogramsRequest
     *
     * @return GetHistogramsResponse GetHistogramsResponse
     */
    public function getHistograms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistogramsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the results of a log query by using SQL statements.
     *  *
     * @param GetLogsRequest $request GetLogsRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLogsResponse GetLogsResponse
     */
    public function getLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->from)) {
            $body['From'] = $request->from;
        }
        if (!Utils::isUnset($request->pageIndex)) {
            $body['PageIndex'] = $request->pageIndex;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->reverseOrNot)) {
            $body['ReverseOrNot'] = $request->reverseOrNot;
        }
        if (!Utils::isUnset($request->to)) {
            $body['To'] = $request->to;
        }
        if (!Utils::isUnset($request->total)) {
            $body['Total'] = $request->total;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetLogs',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the results of a log query by using SQL statements.
     *  *
     * @param GetLogsRequest $request GetLogsRequest
     *
     * @return GetLogsResponse GetLogsResponse
     */
    public function getLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a query statement that is saved as a saved search in log analysis by name.
     *  *
     * @param GetQuickQueryRequest $request GetQuickQueryRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQuickQueryResponse GetQuickQueryResponse
     */
    public function getQuickQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->searchName)) {
            $body['SearchName'] = $request->searchName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetQuickQuery',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQuickQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a query statement that is saved as a saved search in log analysis by name.
     *  *
     * @param GetQuickQueryRequest $request GetQuickQueryRequest
     *
     * @return GetQuickQueryResponse GetQuickQueryResponse
     */
    public function getQuickQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuickQueryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the storage configurations for the threat analysis feature on the user side.
     *  *
     * @param GetStorageRequest $request GetStorageRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStorageResponse GetStorageResponse
     */
    public function getStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetStorage',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the storage configurations for the threat analysis feature on the user side.
     *  *
     * @param GetStorageRequest $request GetStorageRequest
     *
     * @return GetStorageResponse GetStorageResponse
     */
    public function getStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStorageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of AccessKey IDs of third-party cloud accounts that are added to the threat analysis feature.
     *  *
     * @param ListAccountAccessIdRequest $request ListAccountAccessIdRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccountAccessIdResponse ListAccountAccessIdResponse
     */
    public function listAccountAccessIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAccountAccessId',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccountAccessIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of AccessKey IDs of third-party cloud accounts that are added to the threat analysis feature.
     *  *
     * @param ListAccountAccessIdRequest $request ListAccountAccessIdRequest
     *
     * @return ListAccountAccessIdResponse ListAccountAccessIdResponse
     */
    public function listAccountAccessId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountAccessIdWithOptions($request, $runtime);
    }

    /**
     * @summary Query accounts by log.
     *  *
     * @param ListAccountsByLogRequest $request ListAccountsByLogRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccountsByLogResponse ListAccountsByLogResponse
     */
    public function listAccountsByLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->logCodes)) {
            $body['LogCodes'] = $request->logCodes;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $body['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAccountsByLog',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAccountsByLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query accounts by log.
     *  *
     * @param ListAccountsByLogRequest $request ListAccountsByLogRequest
     *
     * @return ListAccountsByLogResponse ListAccountsByLogResponse
     */
    public function listAccountsByLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountsByLogWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of cloud services that can be added to the threat analysis feature.
     *  *
     * @param ListAllProdsRequest $request ListAllProdsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAllProdsResponse ListAllProdsResponse
     */
    public function listAllProdsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAllProds',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAllProdsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of cloud services that can be added to the threat analysis feature.
     *  *
     * @param ListAllProdsRequest $request ListAllProdsRequest
     *
     * @return ListAllProdsResponse ListAllProdsResponse
     */
    public function listAllProds($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllProdsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries automated response rules.
     *  *
     * @param ListAutomateResponseConfigsRequest $request ListAutomateResponseConfigsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAutomateResponseConfigsResponse ListAutomateResponseConfigsResponse
     */
    public function listAutomateResponseConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->actionType)) {
            $body['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->autoResponseType)) {
            $body['AutoResponseType'] = $request->autoResponseType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->subUserId)) {
            $body['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAutomateResponseConfigs',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAutomateResponseConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries automated response rules.
     *  *
     * @param ListAutomateResponseConfigsRequest $request ListAutomateResponseConfigsRequest
     *
     * @return ListAutomateResponseConfigsResponse ListAutomateResponseConfigsResponse
     */
    public function listAutomateResponseConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAutomateResponseConfigsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of cloud accounts that are added to the threat analysis feature.
     *  *
     * @param ListBindAccountRequest $request ListBindAccountRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBindAccountResponse ListBindAccountResponse
     */
    public function listBindAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListBindAccount',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBindAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of cloud accounts that are added to the threat analysis feature.
     *  *
     * @param ListBindAccountRequest $request ListBindAccountRequest
     *
     * @return ListBindAccountResponse ListBindAccountResponse
     */
    public function listBindAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBindAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of data sources that are added to the threat analysis feature.
     *  *
     * @param ListBindDataSourcesRequest $request ListBindDataSourcesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBindDataSourcesResponse ListBindDataSourcesResponse
     */
    public function listBindDataSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListBindDataSources',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBindDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of data sources that are added to the threat analysis feature.
     *  *
     * @param ListBindDataSourcesRequest $request ListBindDataSourcesRequest
     *
     * @return ListBindDataSourcesResponse ListBindDataSourcesResponse
     */
    public function listBindDataSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBindDataSourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries custom rules.
     *  *
     * @param ListCloudSiemCustomizeRulesRequest $request ListCloudSiemCustomizeRulesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCloudSiemCustomizeRulesResponse ListCloudSiemCustomizeRulesResponse
     */
    public function listCloudSiemCustomizeRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertType)) {
            $body['AlertType'] = $request->alertType;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->order)) {
            $body['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderField)) {
            $body['OrderField'] = $request->orderField;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $body['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->threatLevel)) {
            $body['ThreatLevel'] = $request->threatLevel;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListCloudSiemCustomizeRules',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCloudSiemCustomizeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries custom rules.
     *  *
     * @param ListCloudSiemCustomizeRulesRequest $request ListCloudSiemCustomizeRulesRequest
     *
     * @return ListCloudSiemCustomizeRulesResponse ListCloudSiemCustomizeRulesResponse
     */
    public function listCloudSiemCustomizeRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudSiemCustomizeRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries predefined rules.
     *  *
     * @param ListCloudSiemPredefinedRulesRequest $request ListCloudSiemPredefinedRulesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCloudSiemPredefinedRulesResponse ListCloudSiemPredefinedRulesResponse
     */
    public function listCloudSiemPredefinedRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertType)) {
            $body['AlertType'] = $request->alertType;
        }
        if (!Utils::isUnset($request->attCk)) {
            $body['AttCk'] = $request->attCk;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventTransferType)) {
            $body['EventTransferType'] = $request->eventTransferType;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->logSource)) {
            $body['LogSource'] = $request->logSource;
        }
        if (!Utils::isUnset($request->order)) {
            $body['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderField)) {
            $body['OrderField'] = $request->orderField;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $body['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->threatLevel)) {
            $body['ThreatLevel'] = $request->threatLevel;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListCloudSiemPredefinedRules',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCloudSiemPredefinedRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries predefined rules.
     *  *
     * @param ListCloudSiemPredefinedRulesRequest $request ListCloudSiemPredefinedRulesRequest
     *
     * @return ListCloudSiemPredefinedRulesResponse ListCloudSiemPredefinedRulesResponse
     */
    public function listCloudSiemPredefinedRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudSiemPredefinedRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the test results of a custom rule.
     *  *
     * @param ListCustomizeRuleTestResultRequest $request ListCustomizeRuleTestResultRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomizeRuleTestResultResponse ListCustomizeRuleTestResultResponse
     */
    public function listCustomizeRuleTestResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListCustomizeRuleTestResult',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomizeRuleTestResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the test results of a custom rule.
     *  *
     * @param ListCustomizeRuleTestResultRequest $request ListCustomizeRuleTestResultRequest
     *
     * @return ListCustomizeRuleTestResultResponse ListCustomizeRuleTestResultResponse
     */
    public function listCustomizeRuleTestResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomizeRuleTestResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the logs of a data source.
     *  *
     * @param ListDataSourceLogsRequest $request ListDataSourceLogsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataSourceLogsResponse ListDataSourceLogsResponse
     */
    public function listDataSourceLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->dataSourceInstanceId)) {
            $body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataSourceLogs',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataSourceLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the logs of a data source.
     *  *
     * @param ListDataSourceLogsRequest $request ListDataSourceLogsRequest
     *
     * @return ListDataSourceLogsResponse ListDataSourceLogsResponse
     */
    public function listDataSourceLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of data source types in third-party cloud services that can be added to the threat analysis feature.
     *  *
     * @param ListDataSourceTypesRequest $request ListDataSourceTypesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDataSourceTypesResponse ListDataSourceTypesResponse
     */
    public function listDataSourceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDataSourceTypes',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDataSourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of data source types in third-party cloud services that can be added to the threat analysis feature.
     *  *
     * @param ListDataSourceTypesRequest $request ListDataSourceTypesRequest
     *
     * @return ListDataSourceTypesResponse ListDataSourceTypesResponse
     */
    public function listDataSourceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDataSourceTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the cloud services that are integrated with the threat analysis feature, the logs of the cloud services, and the delivery of the logs.
     *  *
     * @param ListDeliveryRequest $request ListDeliveryRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDeliveryResponse ListDeliveryResponse
     */
    public function listDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDelivery',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the cloud services that are integrated with the threat analysis feature, the logs of the cloud services, and the delivery of the logs.
     *  *
     * @param ListDeliveryRequest $request ListDeliveryRequest
     *
     * @return ListDeliveryResponse ListDeliveryResponse
     */
    public function listDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeliveryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries handling policies.
     *  *
     * @param ListDisposeStrategyRequest $request ListDisposeStrategyRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDisposeStrategyResponse ListDisposeStrategyResponse
     */
    public function listDisposeStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->effectiveStatus)) {
            $body['EffectiveStatus'] = $request->effectiveStatus;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->entityIdentity)) {
            $body['EntityIdentity'] = $request->entityIdentity;
        }
        if (!Utils::isUnset($request->entityType)) {
            $body['EntityType'] = $request->entityType;
        }
        if (!Utils::isUnset($request->order)) {
            $body['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->orderField)) {
            $body['OrderField'] = $request->orderField;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->playbookName)) {
            $body['PlaybookName'] = $request->playbookName;
        }
        if (!Utils::isUnset($request->playbookTypes)) {
            $body['PlaybookTypes'] = $request->playbookTypes;
        }
        if (!Utils::isUnset($request->playbookUuid)) {
            $body['PlaybookUuid'] = $request->playbookUuid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->sophonTaskId)) {
            $body['SophonTaskId'] = $request->sophonTaskId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListDisposeStrategy',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDisposeStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries handling policies.
     *  *
     * @param ListDisposeStrategyRequest $request ListDisposeStrategyRequest
     *
     * @return ListDisposeStrategyResponse ListDisposeStrategyResponse
     */
    public function listDisposeStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDisposeStrategyWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the logs in a cloud service that is added to the threat analysis feature.
     *  *
     * @param ListImportedLogsByProdRequest $request ListImportedLogsByProdRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImportedLogsByProdResponse ListImportedLogsByProdResponse
     */
    public function listImportedLogsByProdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $body['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListImportedLogsByProd',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListImportedLogsByProdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the logs in a cloud service that is added to the threat analysis feature.
     *  *
     * @param ListImportedLogsByProdRequest $request ListImportedLogsByProdRequest
     *
     * @return ListImportedLogsByProdResponse ListImportedLogsByProdResponse
     */
    public function listImportedLogsByProd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImportedLogsByProdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the resource-related permissions granted to the current user. The threat analysis feature supports two types of identities: administrators and common members. An administrator is granted all permissions, and a common member is granted permissions to access only specific resources.
     *  *
     * @param ListOperationRequest $request ListOperationRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOperationResponse ListOperationResponse
     */
    public function listOperationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListOperation',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOperationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the resource-related permissions granted to the current user. The threat analysis feature supports two types of identities: administrators and common members. An administrator is granted all permissions, and a common member is granted permissions to access only specific resources.
     *  *
     * @param ListOperationRequest $request ListOperationRequest
     *
     * @return ListOperationResponse ListOperationResponse
     */
    public function listOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOperationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the dedicated Simple Log Service project and Logstore for a cloud service based on the patterns of the project and Logstore names.
     *  *
     * @param ListProjectLogStoresRequest $request ListProjectLogStoresRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProjectLogStoresResponse ListProjectLogStoresResponse
     */
    public function listProjectLogStoresWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceLogCode)) {
            $body['SourceLogCode'] = $request->sourceLogCode;
        }
        if (!Utils::isUnset($request->sourceProdCode)) {
            $body['SourceProdCode'] = $request->sourceProdCode;
        }
        if (!Utils::isUnset($request->subUserId)) {
            $body['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListProjectLogStores',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProjectLogStoresResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the dedicated Simple Log Service project and Logstore for a cloud service based on the patterns of the project and Logstore names.
     *  *
     * @param ListProjectLogStoresRequest $request ListProjectLogStoresRequest
     *
     * @return ListProjectLogStoresResponse ListProjectLogStoresResponse
     */
    public function listProjectLogStores($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectLogStoresWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the saved searches of the Logstore.
     *  *
     * @param ListQuickQueryRequest $request ListQuickQueryRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListQuickQueryResponse ListQuickQueryResponse
     */
    public function listQuickQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->offset)) {
            $body['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListQuickQuery',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListQuickQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the saved searches of the Logstore.
     *  *
     * @param ListQuickQueryRequest $request ListQuickQueryRequest
     *
     * @return ListQuickQueryResponse ListQuickQueryResponse
     */
    public function listQuickQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuickQueryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of Alibaba Cloud accounts that are added to the threat analysis feature for centralized management. These accounts can be used to perform operations supported by the threat analysis feature, such as adding logs and handling events.
     *  *
     * @param ListRdUsersRequest $request ListRdUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRdUsersResponse ListRdUsersResponse
     */
    public function listRdUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListRdUsers',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRdUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of Alibaba Cloud accounts that are added to the threat analysis feature for centralized management. These accounts can be used to perform operations supported by the threat analysis feature, such as adding logs and handling events.
     *  *
     * @param ListRdUsersRequest $request ListRdUsersRequest
     *
     * @return ListRdUsersResponse ListRdUsersResponse
     */
    public function listRdUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRdUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of logs that are added to the threat analysis feature by cloud service.
     *  *
     * @param ListUserProdLogsRequest $request ListUserProdLogsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserProdLogsResponse ListUserProdLogsResponse
     */
    public function listUserProdLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->sourceLogCode)) {
            $body['SourceLogCode'] = $request->sourceLogCode;
        }
        if (!Utils::isUnset($request->sourceProdCode)) {
            $body['SourceProdCode'] = $request->sourceProdCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListUserProdLogs',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserProdLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of logs that are added to the threat analysis feature by cloud service.
     *  *
     * @param ListUserProdLogsRequest $request ListUserProdLogsRequest
     *
     * @return ListUserProdLogsResponse ListUserProdLogsResponse
     */
    public function listUserProdLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserProdLogsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the logs that are added to the threat analysis feature by cloud service.
     *  *
     * @param ListUsersByProdRequest $request ListUsersByProdRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUsersByProdResponse ListUsersByProdResponse
     */
    public function listUsersByProdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->sourceProdCode)) {
            $body['SourceProdCode'] = $request->sourceProdCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListUsersByProd',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUsersByProdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the logs that are added to the threat analysis feature by cloud service.
     *  *
     * @param ListUsersByProdRequest $request ListUsersByProdRequest
     *
     * @return ListUsersByProdResponse ListUsersByProdResponse
     */
    public function listUsersByProd($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUsersByProdWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a third-party cloud account that is added to the threat analysis feature.
     *  *
     * @param ModifyBindAccountRequest $request ModifyBindAccountRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBindAccountResponse ModifyBindAccountResponse
     */
    public function modifyBindAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessId)) {
            $body['AccessId'] = $request->accessId;
        }
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->bindId)) {
            $body['BindId'] = $request->bindId;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyBindAccount',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBindAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a third-party cloud account that is added to the threat analysis feature.
     *  *
     * @param ModifyBindAccountRequest $request ModifyBindAccountRequest
     *
     * @return ModifyBindAccountResponse ModifyBindAccountResponse
     */
    public function modifyBindAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBindAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a data source that is added to the threat analysis feature.
     *  *
     * @param ModifyDataSourceRequest $request ModifyDataSourceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDataSourceResponse ModifyDataSourceResponse
     */
    public function modifyDataSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->dataSourceInstanceId)) {
            $body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceInstanceName)) {
            $body['DataSourceInstanceName'] = $request->dataSourceInstanceName;
        }
        if (!Utils::isUnset($request->dataSourceInstanceParams)) {
            $body['DataSourceInstanceParams'] = $request->dataSourceInstanceParams;
        }
        if (!Utils::isUnset($request->dataSourceInstanceRemark)) {
            $body['DataSourceInstanceRemark'] = $request->dataSourceInstanceRemark;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDataSource',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a data source that is added to the threat analysis feature.
     *  *
     * @param ModifyDataSourceRequest $request ModifyDataSourceRequest
     *
     * @return ModifyDataSourceResponse ModifyDataSourceResponse
     */
    public function modifyDataSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of the logs that are added to the threat analysis feature for a data source within a cloud account.
     *  *
     * @param ModifyDataSourceLogRequest $request ModifyDataSourceLogRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDataSourceLogResponse ModifyDataSourceLogResponse
     */
    public function modifyDataSourceLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountId)) {
            $body['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->dataSourceInstanceId)) {
            $body['DataSourceInstanceId'] = $request->dataSourceInstanceId;
        }
        if (!Utils::isUnset($request->dataSourceInstanceLogs)) {
            $body['DataSourceInstanceLogs'] = $request->dataSourceInstanceLogs;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->logCode)) {
            $body['LogCode'] = $request->logCode;
        }
        if (!Utils::isUnset($request->logInstanceId)) {
            $body['LogInstanceId'] = $request->logInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyDataSourceLog',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDataSourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of the logs that are added to the threat analysis feature for a data source within a cloud account.
     *  *
     * @param ModifyDataSourceLogRequest $request ModifyDataSourceLogRequest
     *
     * @return ModifyDataSourceLogResponse ModifyDataSourceLogResponse
     */
    public function modifyDataSourceLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDataSourceLogWithOptions($request, $runtime);
    }

    /**
     * @summary Enables the log delivery feature for a cloud service that is integrated with Simple Log Service.
     *  *
     * @param OpenDeliveryRequest $request OpenDeliveryRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenDeliveryResponse OpenDeliveryResponse
     */
    public function openDeliveryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->logCode)) {
            $body['LogCode'] = $request->logCode;
        }
        if (!Utils::isUnset($request->productCode)) {
            $body['ProductCode'] = $request->productCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'OpenDelivery',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenDeliveryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables the log delivery feature for a cloud service that is integrated with Simple Log Service.
     *  *
     * @param OpenDeliveryRequest $request OpenDeliveryRequest
     *
     * @return OpenDeliveryResponse OpenDeliveryResponse
     */
    public function openDelivery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->openDeliveryWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or updates an automatic response rule.
     *  *
     * @param PostAutomateResponseConfigRequest $request PostAutomateResponseConfigRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return PostAutomateResponseConfigResponse PostAutomateResponseConfigResponse
     */
    public function postAutomateResponseConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->actionConfig)) {
            $body['ActionConfig'] = $request->actionConfig;
        }
        if (!Utils::isUnset($request->actionType)) {
            $body['ActionType'] = $request->actionType;
        }
        if (!Utils::isUnset($request->autoResponseType)) {
            $body['AutoResponseType'] = $request->autoResponseType;
        }
        if (!Utils::isUnset($request->executionCondition)) {
            $body['ExecutionCondition'] = $request->executionCondition;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->subUserId)) {
            $body['SubUserId'] = $request->subUserId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PostAutomateResponseConfig',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PostAutomateResponseConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates or updates an automatic response rule.
     *  *
     * @param PostAutomateResponseConfigRequest $request PostAutomateResponseConfigRequest
     *
     * @return PostAutomateResponseConfigResponse PostAutomateResponseConfigResponse
     */
    public function postAutomateResponseConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postAutomateResponseConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or updates a custom rule.
     *  *
     * @param PostCustomizeRuleRequest $request PostCustomizeRuleRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return PostCustomizeRuleResponse PostCustomizeRuleResponse
     */
    public function postCustomizeRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->alertType)) {
            $body['AlertType'] = $request->alertType;
        }
        if (!Utils::isUnset($request->alertTypeMds)) {
            $body['AlertTypeMds'] = $request->alertTypeMds;
        }
        if (!Utils::isUnset($request->attCk)) {
            $body['AttCk'] = $request->attCk;
        }
        if (!Utils::isUnset($request->eventTransferExt)) {
            $body['EventTransferExt'] = $request->eventTransferExt;
        }
        if (!Utils::isUnset($request->eventTransferSwitch)) {
            $body['EventTransferSwitch'] = $request->eventTransferSwitch;
        }
        if (!Utils::isUnset($request->eventTransferType)) {
            $body['EventTransferType'] = $request->eventTransferType;
        }
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->logSource)) {
            $body['LogSource'] = $request->logSource;
        }
        if (!Utils::isUnset($request->logSourceMds)) {
            $body['LogSourceMds'] = $request->logSourceMds;
        }
        if (!Utils::isUnset($request->logType)) {
            $body['LogType'] = $request->logType;
        }
        if (!Utils::isUnset($request->logTypeMds)) {
            $body['LogTypeMds'] = $request->logTypeMds;
        }
        if (!Utils::isUnset($request->queryCycle)) {
            $body['QueryCycle'] = $request->queryCycle;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->ruleCondition)) {
            $body['RuleCondition'] = $request->ruleCondition;
        }
        if (!Utils::isUnset($request->ruleDesc)) {
            $body['RuleDesc'] = $request->ruleDesc;
        }
        if (!Utils::isUnset($request->ruleGroup)) {
            $body['RuleGroup'] = $request->ruleGroup;
        }
        if (!Utils::isUnset($request->ruleName)) {
            $body['RuleName'] = $request->ruleName;
        }
        if (!Utils::isUnset($request->ruleThreshold)) {
            $body['RuleThreshold'] = $request->ruleThreshold;
        }
        if (!Utils::isUnset($request->threatLevel)) {
            $body['ThreatLevel'] = $request->threatLevel;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PostCustomizeRule',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PostCustomizeRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates or updates a custom rule.
     *  *
     * @param PostCustomizeRuleRequest $request PostCustomizeRuleRequest
     *
     * @return PostCustomizeRuleResponse PostCustomizeRuleResponse
     */
    public function postCustomizeRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postCustomizeRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a custom rule for testing.
     *  *
     * @param PostCustomizeRuleTestRequest $request PostCustomizeRuleTestRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return PostCustomizeRuleTestResponse PostCustomizeRuleTestResponse
     */
    public function postCustomizeRuleTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->simulatedData)) {
            $body['SimulatedData'] = $request->simulatedData;
        }
        if (!Utils::isUnset($request->testType)) {
            $body['TestType'] = $request->testType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PostCustomizeRuleTest',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PostCustomizeRuleTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits a custom rule for testing.
     *  *
     * @param PostCustomizeRuleTestRequest $request PostCustomizeRuleTestRequest
     *
     * @return PostCustomizeRuleTestResponse PostCustomizeRuleTestResponse
     */
    public function postCustomizeRuleTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postCustomizeRuleTestWithOptions($request, $runtime);
    }

    /**
     * @summary Submits event handling information.
     *  *
     * @param PostEventDisposeAndWhiteruleListRequest $request PostEventDisposeAndWhiteruleListRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return PostEventDisposeAndWhiteruleListResponse PostEventDisposeAndWhiteruleListResponse
     */
    public function postEventDisposeAndWhiteruleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->eventDispose)) {
            $body['EventDispose'] = $request->eventDispose;
        }
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->receiverInfo)) {
            $body['ReceiverInfo'] = $request->receiverInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PostEventDisposeAndWhiteruleList',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PostEventDisposeAndWhiteruleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits event handling information.
     *  *
     * @param PostEventDisposeAndWhiteruleListRequest $request PostEventDisposeAndWhiteruleListRequest
     *
     * @return PostEventDisposeAndWhiteruleListResponse PostEventDisposeAndWhiteruleListResponse
     */
    public function postEventDisposeAndWhiteruleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postEventDisposeAndWhiteruleListWithOptions($request, $runtime);
    }

    /**
     * @summary Submits an alert whitelist rule.
     *  *
     * @param PostEventWhiteruleListRequest $request PostEventWhiteruleListRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return PostEventWhiteruleListResponse PostEventWhiteruleListResponse
     */
    public function postEventWhiteruleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->whiteruleList)) {
            $body['WhiteruleList'] = $request->whiteruleList;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PostEventWhiteruleList',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PostEventWhiteruleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits an alert whitelist rule.
     *  *
     * @param PostEventWhiteruleListRequest $request PostEventWhiteruleListRequest
     *
     * @return PostEventWhiteruleListResponse PostEventWhiteruleListResponse
     */
    public function postEventWhiteruleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postEventWhiteruleListWithOptions($request, $runtime);
    }

    /**
     * @summary Ends the test of a custom rule.
     *  *
     * @param PostFinishCustomizeRuleTestRequest $request PostFinishCustomizeRuleTestRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return PostFinishCustomizeRuleTestResponse PostFinishCustomizeRuleTestResponse
     */
    public function postFinishCustomizeRuleTestWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->id)) {
            $body['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PostFinishCustomizeRuleTest',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PostFinishCustomizeRuleTestResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Ends the test of a custom rule.
     *  *
     * @param PostFinishCustomizeRuleTestRequest $request PostFinishCustomizeRuleTestRequest
     *
     * @return PostFinishCustomizeRuleTestResponse PostFinishCustomizeRuleTestResponse
     */
    public function postFinishCustomizeRuleTest($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postFinishCustomizeRuleTestWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the status of a custom rule.
     *  *
     * @param PostRuleStatusChangeRequest $request PostRuleStatusChangeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return PostRuleStatusChangeResponse PostRuleStatusChangeResponse
     */
    public function postRuleStatusChangeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ids)) {
            $body['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->inUse)) {
            $body['InUse'] = $request->inUse;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $body['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PostRuleStatusChange',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PostRuleStatusChangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the status of a custom rule.
     *  *
     * @param PostRuleStatusChangeRequest $request PostRuleStatusChangeRequest
     *
     * @return PostRuleStatusChangeResponse PostRuleStatusChangeResponse
     */
    public function postRuleStatusChange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->postRuleStatusChangeWithOptions($request, $runtime);
    }

    /**
     * @summary Releases storage to reduce the storage usage. The release operation is irreversible and may cause data loss. Proceed with caution.
     *  *
     * @param RestoreCapacityRequest $request RestoreCapacityRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RestoreCapacityResponse RestoreCapacityResponse
     */
    public function restoreCapacityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RestoreCapacity',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestoreCapacityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases storage to reduce the storage usage. The release operation is irreversible and may cause data loss. Proceed with caution.
     *  *
     * @param RestoreCapacityRequest $request RestoreCapacityRequest
     *
     * @return RestoreCapacityResponse RestoreCapacityResponse
     */
    public function restoreCapacity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreCapacityWithOptions($request, $runtime);
    }

    /**
     * @summary Saves a query statement in log analysis as a saved search. This helps save the time required to write the query statement.
     *  *
     * @param SaveQuickQueryRequest $request SaveQuickQueryRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveQuickQueryResponse SaveQuickQueryResponse
     */
    public function saveQuickQueryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->query)) {
            $body['Query'] = $request->query;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveQuickQuery',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveQuickQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Saves a query statement in log analysis as a saved search. This helps save the time required to write the query statement.
     *  *
     * @param SaveQuickQueryRequest $request SaveQuickQueryRequest
     *
     * @return SaveQuickQueryResponse SaveQuickQueryResponse
     */
    public function saveQuickQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveQuickQueryWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the settings of log storage, such as the storage duration and storage region.
     *  *
     * @param SetStorageRequest $request SetStorageRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return SetStorageResponse SetStorageResponse
     */
    public function setStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->ttl)) {
            $body['Ttl'] = $request->ttl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetStorage',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetStorageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures the settings of log storage, such as the storage duration and storage region.
     *  *
     * @param SetStorageRequest $request SetStorageRequest
     *
     * @return SetStorageResponse SetStorageResponse
     */
    public function setStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setStorageWithOptions($request, $runtime);
    }

    /**
     * @summary Configures index fields to display in log analysis. The index fields can be used for quick analysis.
     *  *
     * @param ShowQuickAnalysisRequest $request ShowQuickAnalysisRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ShowQuickAnalysisResponse ShowQuickAnalysisResponse
     */
    public function showQuickAnalysisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ShowQuickAnalysis',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ShowQuickAnalysisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures index fields to display in log analysis. The index fields can be used for quick analysis.
     *  *
     * @param ShowQuickAnalysisRequest $request ShowQuickAnalysisRequest
     *
     * @return ShowQuickAnalysisResponse ShowQuickAnalysisResponse
     */
    public function showQuickAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->showQuickAnalysisWithOptions($request, $runtime);
    }

    /**
     * @summary Submits log collection tasks at a time.
     *  *
     * @param SubmitImportLogTasksRequest $request SubmitImportLogTasksRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitImportLogTasksResponse SubmitImportLogTasksResponse
     */
    public function submitImportLogTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accounts)) {
            $body['Accounts'] = $request->accounts;
        }
        if (!Utils::isUnset($request->autoImported)) {
            $body['AutoImported'] = $request->autoImported;
        }
        if (!Utils::isUnset($request->cloudCode)) {
            $body['CloudCode'] = $request->cloudCode;
        }
        if (!Utils::isUnset($request->logCodes)) {
            $body['LogCodes'] = $request->logCodes;
        }
        if (!Utils::isUnset($request->prodCode)) {
            $body['ProdCode'] = $request->prodCode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitImportLogTasks',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitImportLogTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits log collection tasks at a time.
     *  *
     * @param SubmitImportLogTasksRequest $request SubmitImportLogTasksRequest
     *
     * @return SubmitImportLogTasksResponse SubmitImportLogTasksResponse
     */
    public function submitImportLogTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitImportLogTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Submits multiple tasks that add logs to the threat analysis feature at a time. After the logs are added, you can perform alert and event analysis.
     *  *
     * @param SubmitJobsRequest $request SubmitJobsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitJobsResponse SubmitJobsResponse
     */
    public function submitJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jsonParam)) {
            $body['JsonParam'] = $request->jsonParam;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitJobs',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Submits multiple tasks that add logs to the threat analysis feature at a time. After the logs are added, you can perform alert and event analysis.
     *  *
     * @param SubmitJobsRequest $request SubmitJobsRequest
     *
     * @return SubmitJobsResponse SubmitJobsResponse
     */
    public function submitJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the status of an automatic response rule.
     *  *
     * @param UpdateAutomateResponseConfigStatusRequest $request UpdateAutomateResponseConfigStatusRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAutomateResponseConfigStatusResponse UpdateAutomateResponseConfigStatusResponse
     */
    public function updateAutomateResponseConfigStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ids)) {
            $body['Ids'] = $request->ids;
        }
        if (!Utils::isUnset($request->inUse)) {
            $body['InUse'] = $request->inUse;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAutomateResponseConfigStatus',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAutomateResponseConfigStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the status of an automatic response rule.
     *  *
     * @param UpdateAutomateResponseConfigStatusRequest $request UpdateAutomateResponseConfigStatusRequest
     *
     * @return UpdateAutomateResponseConfigStatusResponse UpdateAutomateResponseConfigStatusResponse
     */
    public function updateAutomateResponseConfigStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutomateResponseConfigStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Creates or updates an alert whitelist rule.
     *  *
     * @param UpdateWhiteRuleListRequest $request UpdateWhiteRuleListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateWhiteRuleListResponse UpdateWhiteRuleListResponse
     */
    public function updateWhiteRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->expression)) {
            $body['Expression'] = $request->expression;
        }
        if (!Utils::isUnset($request->incidentUuid)) {
            $body['IncidentUuid'] = $request->incidentUuid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->roleFor)) {
            $body['RoleFor'] = $request->roleFor;
        }
        if (!Utils::isUnset($request->roleType)) {
            $body['RoleType'] = $request->roleType;
        }
        if (!Utils::isUnset($request->whiteRuleId)) {
            $body['WhiteRuleId'] = $request->whiteRuleId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWhiteRuleList',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWhiteRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates or updates an alert whitelist rule.
     *  *
     * @param UpdateWhiteRuleListRequest $request UpdateWhiteRuleListRequest
     *
     * @return UpdateWhiteRuleListResponse UpdateWhiteRuleListResponse
     */
    public function updateWhiteRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWhiteRuleListWithOptions($request, $runtime);
    }
}
