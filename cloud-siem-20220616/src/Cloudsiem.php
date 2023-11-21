<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\BatchJobCheckRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\BatchJobCheckResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\BatchJobSubmitRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\BatchJobSubmitResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\CloseDeliveryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\CloseDeliveryResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteAutomateResponseConfigRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteAutomateResponseConfigResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteCustomizeRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteCustomizeRuleResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteQuickQueryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DeleteQuickQueryResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleTestHistogramRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleTestHistogramResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleTestRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleTestResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeScopeUsersRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeScopeUsersResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeStorageRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeStorageResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWafScopeRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWafScopeResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DoQuickFieldRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DoQuickFieldResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DoSelfDelegateRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DoSelfDelegateResponse;
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
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAutomateResponseConfigsRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListAutomateResponseConfigsResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemCustomizeRulesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemCustomizeRulesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemPredefinedRulesRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCloudSiemPredefinedRulesResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCustomizeRuleTestResultRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListCustomizeRuleTestResultResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDeliveryResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListOperationRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListOperationResponse;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListQuickQueryRequest;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListQuickQueryResponse;
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
     * @param BatchJobCheckRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BatchJobCheckResponse
     */
    public function batchJobCheckWithOptions($request, $runtime)
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
            'action'      => 'BatchJobCheck',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchJobCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchJobCheckRequest $request
     *
     * @return BatchJobCheckResponse
     */
    public function batchJobCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchJobCheckWithOptions($request, $runtime);
    }

    /**
     * @param BatchJobSubmitRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return BatchJobSubmitResponse
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
     * @param BatchJobSubmitRequest $request
     *
     * @return BatchJobSubmitResponse
     */
    public function batchJobSubmit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchJobSubmitWithOptions($request, $runtime);
    }

    /**
     * @param CloseDeliveryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CloseDeliveryResponse
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
     * @param DeleteAutomateResponseConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteAutomateResponseConfigResponse
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
     * @param DeleteCustomizeRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteCustomizeRuleResponse
     */
    public function deleteCustomizeRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
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
     * @param DeleteQuickQueryRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteQuickQueryResponse
     */
    public function deleteQuickQueryWithOptions($request, $runtime)
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
            'action'      => 'DeleteQuickQuery',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteQuickQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteQuickQueryRequest $request
     *
     * @return DeleteQuickQueryResponse
     */
    public function deleteQuickQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteQuickQueryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWhiteRuleListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteWhiteRuleListResponse
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
     * @param DescribeAggregateFunctionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAggregateFunctionResponse
     */
    public function describeAggregateFunctionWithOptions($request, $runtime)
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
     * @param DescribeAlertSceneRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAlertSceneResponse
     */
    public function describeAlertSceneWithOptions($request, $runtime)
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
     * @param DescribeAlertSceneByEventRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAlertSceneByEventResponse
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
     * @param DescribeAlertSourceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAlertSourceResponse
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
     * @param DescribeAlertSourceWithEventRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeAlertSourceWithEventResponse
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
     * @param DescribeAlertTypeRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAlertTypeResponse
     */
    public function describeAlertTypeWithOptions($request, $runtime)
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
     * @param DescribeAlertsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeAlertsResponse
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
     * @param DescribeAlertsCountRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAlertsCountResponse
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
     * @param DescribeAlertsWithEntityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeAlertsWithEntityResponse
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
     * @param DescribeAlertsWithEventRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAlertsWithEventResponse
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
     * @param DescribeAttackTimeLineRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeAttackTimeLineResponse
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
     * @param DescribeAttackTimeLineRequest $request
     *
     * @return DescribeAttackTimeLineResponse
     */
    public function describeAttackTimeLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAttackTimeLineWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAutomateResponseConfigCounterRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAutomateResponseConfigCounterResponse
     */
    public function describeAutomateResponseConfigCounterWithOptions($request, $runtime)
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
     * @param DescribeAutomateResponseConfigFeatureRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAutomateResponseConfigFeatureResponse
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
     * @param DescribeAutomateResponseConfigPlayBooksRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeAutomateResponseConfigPlayBooksResponse
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
     * @param DescribeCloudSiemAssetsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCloudSiemAssetsResponse
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
     * @param DescribeCloudSiemAssetsCounterRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeCloudSiemAssetsCounterResponse
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
     * @param DescribeCloudSiemEventDetailRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCloudSiemEventDetailResponse
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
     * @param DescribeCloudSiemEventsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCloudSiemEventsResponse
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
     * @param DescribeCustomizeRuleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeCustomizeRuleResponse
     */
    public function describeCustomizeRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $body['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomizeRule',
            'version'     => '2022-06-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomizeRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCustomizeRuleRequest $request
     *
     * @return DescribeCustomizeRuleResponse
     */
    public function describeCustomizeRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomizeRuleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomizeRuleCountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCustomizeRuleCountResponse
     */
    public function describeCustomizeRuleCountWithOptions($request, $runtime)
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
     * @param DescribeCustomizeRuleTestRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCustomizeRuleTestResponse
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
     * @param DescribeCustomizeRuleTestHistogramRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeCustomizeRuleTestHistogramResponse
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
     * @param DescribeDisposeAndPlaybookRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDisposeAndPlaybookResponse
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
     * @param DescribeDisposeStrategyPlaybookRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDisposeStrategyPlaybookResponse
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
     * @param DescribeEntityInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEntityInfoResponse
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
     * @param DescribeEventCountByThreatLevelRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeEventCountByThreatLevelResponse
     */
    public function describeEventCountByThreatLevelWithOptions($request, $runtime)
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
     * @param DescribeEventDisposeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEventDisposeResponse
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
     * @param DescribeJobStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeJobStatusResponse
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
     * @param DescribeJobStatusRequest $request
     *
     * @return DescribeJobStatusResponse
     */
    public function describeJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogFieldsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeLogFieldsResponse
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
     * @param DescribeLogSourceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeLogSourceResponse
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
     * @param DescribeLogStoreRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeLogStoreResponse
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
     * @param DescribeLogStoreRequest $request
     *
     * @return DescribeLogStoreResponse
     */
    public function describeLogStore($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLogStoreWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLogTypeRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeLogTypeResponse
     */
    public function describeLogTypeWithOptions($request, $runtime)
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
     * @param DescribeOperatorsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeOperatorsResponse
     */
    public function describeOperatorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
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
     * @param DescribeScopeUsersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeScopeUsersResponse
     */
    public function describeScopeUsersWithOptions($request, $runtime)
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
     * @param DescribeStorageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeStorageResponse
     */
    public function describeStorageWithOptions($request, $runtime)
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
     * @param DescribeWafScopeRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeWafScopeResponse
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
     * @param DescribeWhiteRuleListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeWhiteRuleListResponse
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
     * @param DoQuickFieldRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DoQuickFieldResponse
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
     * @param DoQuickFieldRequest $request
     *
     * @return DoQuickFieldResponse
     */
    public function doQuickField($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doQuickFieldWithOptions($request, $runtime);
    }

    /**
     * @param DoSelfDelegateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DoSelfDelegateResponse
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
     * @param DoSelfDelegateRequest $request
     *
     * @return DoSelfDelegateResponse
     */
    public function doSelfDelegate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doSelfDelegateWithOptions($request, $runtime);
    }

    /**
     * @param GetCapacityRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetCapacityResponse
     */
    public function getCapacityWithOptions($request, $runtime)
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
     * @param GetHistogramsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetHistogramsResponse
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
     * @param GetHistogramsRequest $request
     *
     * @return GetHistogramsResponse
     */
    public function getHistograms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHistogramsWithOptions($request, $runtime);
    }

    /**
     * @param GetLogsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetLogsResponse
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
     * @param GetLogsRequest $request
     *
     * @return GetLogsResponse
     */
    public function getLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogsWithOptions($request, $runtime);
    }

    /**
     * @param GetQuickQueryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetQuickQueryResponse
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
     * @param GetQuickQueryRequest $request
     *
     * @return GetQuickQueryResponse
     */
    public function getQuickQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQuickQueryWithOptions($request, $runtime);
    }

    /**
     * @param GetStorageRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetStorageResponse
     */
    public function getStorageWithOptions($request, $runtime)
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
     * @param ListAutomateResponseConfigsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListAutomateResponseConfigsResponse
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
     * @param ListCloudSiemCustomizeRulesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListCloudSiemCustomizeRulesResponse
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
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
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
     * @param ListCloudSiemPredefinedRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListCloudSiemPredefinedRulesResponse
     */
    public function listCloudSiemPredefinedRulesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
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
     * @param ListCustomizeRuleTestResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListCustomizeRuleTestResultResponse
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
     * @param ListDeliveryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListDeliveryResponse
     */
    public function listDeliveryWithOptions($request, $runtime)
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
     * @param ListDisposeStrategyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListDisposeStrategyResponse
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
     * @param ListOperationRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListOperationResponse
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
     * @param ListOperationRequest $request
     *
     * @return ListOperationResponse
     */
    public function listOperation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOperationWithOptions($request, $runtime);
    }

    /**
     * @param ListQuickQueryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListQuickQueryResponse
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
     * @param ListQuickQueryRequest $request
     *
     * @return ListQuickQueryResponse
     */
    public function listQuickQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listQuickQueryWithOptions($request, $runtime);
    }

    /**
     * @param OpenDeliveryRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return OpenDeliveryResponse
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
     * @param PostAutomateResponseConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return PostAutomateResponseConfigResponse
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
     * @param PostCustomizeRuleRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return PostCustomizeRuleResponse
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
     * @param PostCustomizeRuleTestRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return PostCustomizeRuleTestResponse
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
     * @param PostEventDisposeAndWhiteruleListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return PostEventDisposeAndWhiteruleListResponse
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
     * @param PostEventWhiteruleListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PostEventWhiteruleListResponse
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
     * @param PostFinishCustomizeRuleTestRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return PostFinishCustomizeRuleTestResponse
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
     * @param PostRuleStatusChangeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return PostRuleStatusChangeResponse
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
     * @param RestoreCapacityRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestoreCapacityResponse
     */
    public function restoreCapacityWithOptions($request, $runtime)
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
     * @param SaveQuickQueryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveQuickQueryResponse
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
     * @param SaveQuickQueryRequest $request
     *
     * @return SaveQuickQueryResponse
     */
    public function saveQuickQuery($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveQuickQueryWithOptions($request, $runtime);
    }

    /**
     * @param SetStorageRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetStorageResponse
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
     * @param ShowQuickAnalysisRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ShowQuickAnalysisResponse
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
     * @param ShowQuickAnalysisRequest $request
     *
     * @return ShowQuickAnalysisResponse
     */
    public function showQuickAnalysis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->showQuickAnalysisWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAutomateResponseConfigStatusRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return UpdateAutomateResponseConfigStatusResponse
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
     * @param UpdateWhiteRuleListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateWhiteRuleListResponse
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
