<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Config\V20200907\Models\ActiveAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ActiveAggregateConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregatorRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregatorResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregatorShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveAggregateConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeactiveConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregatorsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\DeleteRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateConfigRulesReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateConfigRulesReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateResourceInventoryRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateAggregateResourceInventoryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateConfigRulesReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateConfigRulesReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateResourceInventoryRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GenerateResourceInventoryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateAccountComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRulesReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRulesReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleSummaryByRiskLevelRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleSummaryByRiskLevelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceConfigurationTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceConfigurationTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByRegionRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByRegionResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByResourceTypeRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByResourceTypeResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceInventoryRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceInventoryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackReportRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRulesReportResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigRuleSummaryByRiskLevelResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByRegionRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByRegionResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByResourceTypeRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByResourceTypeResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByPackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceByPackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationTimelineRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceConfigurationTimelineResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceInventoryResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRuleEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourceOwnerInAllAggregatorResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StartAggregateConfigRuleEvaluationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartAggregateConfigRuleEvaluationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StartAggregateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartAggregateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\StartRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\StartRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregateRemediationResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateCompliancePackRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateCompliancePackResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateCompliancePackShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateConfigRuleShrinkRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateRemediationRequest;
use AlibabaCloud\SDK\Config\V20200907\Models\UpdateRemediationResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Config extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-shanghai'    => 'config.cn-shanghai.aliyuncs.com',
            'ap-southeast-1' => 'config.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('config', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ActiveAggregateConfigRulesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ActiveAggregateConfigRulesResponse
     */
    public function activeAggregateConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ActiveAggregateConfigRulesResponse::fromMap($this->doRPCRequest('ActiveAggregateConfigRules', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ActiveAggregateConfigRulesRequest $request
     *
     * @return ActiveAggregateConfigRulesResponse
     */
    public function activeAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param CreateAggregateCompliancePackRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateAggregateCompliancePackResponse
     */
    public function createAggregateCompliancePackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAggregateCompliancePackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configRules)) {
            $request->configRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAggregateCompliancePackResponse::fromMap($this->doRPCRequest('CreateAggregateCompliancePack', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAggregateCompliancePackRequest $request
     *
     * @return CreateAggregateCompliancePackResponse
     */
    public function createAggregateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param CreateAggregateConfigRuleRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return CreateAggregateConfigRuleResponse
     */
    public function createAggregateConfigRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAggregateConfigRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputParameters)) {
            $request->inputParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceTypesScope)) {
            $request->resourceTypesScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAggregateConfigRuleResponse::fromMap($this->doRPCRequest('CreateAggregateConfigRule', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAggregateConfigRuleRequest $request
     *
     * @return CreateAggregateConfigRuleResponse
     */
    public function createAggregateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateAggregateRemediationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAggregateRemediationResponse
     */
    public function createAggregateRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAggregateRemediationResponse::fromMap($this->doRPCRequest('CreateAggregateRemediation', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAggregateRemediationRequest $request
     *
     * @return CreateAggregateRemediationResponse
     */
    public function createAggregateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregateRemediationWithOptions($request, $runtime);
    }

    /**
     * @param CreateAggregatorRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAggregatorResponse
     */
    public function createAggregatorWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAggregatorShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->aggregatorAccounts)) {
            $request->aggregatorAccountsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->aggregatorAccounts, 'AggregatorAccounts', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAggregatorResponse::fromMap($this->doRPCRequest('CreateAggregator', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAggregatorRequest $request
     *
     * @return CreateAggregatorResponse
     */
    public function createAggregator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAggregatorWithOptions($request, $runtime);
    }

    /**
     * @param CreateCompliancePackRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCompliancePackResponse
     */
    public function createCompliancePackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCompliancePackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configRules)) {
            $request->configRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCompliancePackResponse::fromMap($this->doRPCRequest('CreateCompliancePack', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCompliancePackRequest $request
     *
     * @return CreateCompliancePackResponse
     */
    public function createCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param CreateConfigRuleRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConfigRuleResponse
     */
    public function createConfigRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateConfigRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputParameters)) {
            $request->inputParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceTypesScope)) {
            $request->resourceTypesScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateConfigRuleResponse::fromMap($this->doRPCRequest('CreateConfigRule', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateConfigRuleRequest $request
     *
     * @return CreateConfigRuleResponse
     */
    public function createConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRemediationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateRemediationResponse
     */
    public function createRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRemediationResponse::fromMap($this->doRPCRequest('CreateRemediation', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRemediationRequest $request
     *
     * @return CreateRemediationResponse
     */
    public function createRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRemediationWithOptions($request, $runtime);
    }

    /**
     * @param DeactiveAggregateConfigRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeactiveAggregateConfigRulesResponse
     */
    public function deactiveAggregateConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeactiveAggregateConfigRulesResponse::fromMap($this->doRPCRequest('DeactiveAggregateConfigRules', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeactiveAggregateConfigRulesRequest $request
     *
     * @return DeactiveAggregateConfigRulesResponse
     */
    public function deactiveAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactiveAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeactiveConfigRulesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeactiveConfigRulesResponse
     */
    public function deactiveConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeactiveConfigRulesResponse::fromMap($this->doRPCRequest('DeactiveConfigRules', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeactiveConfigRulesRequest $request
     *
     * @return DeactiveConfigRulesResponse
     */
    public function deactiveConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deactiveConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAggregateCompliancePacksRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteAggregateCompliancePacksResponse
     */
    public function deleteAggregateCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAggregateCompliancePacksResponse::fromMap($this->doRPCRequest('DeleteAggregateCompliancePacks', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAggregateCompliancePacksRequest $request
     *
     * @return DeleteAggregateCompliancePacksResponse
     */
    public function deleteAggregateCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAggregateConfigRulesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteAggregateConfigRulesResponse
     */
    public function deleteAggregateConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAggregateConfigRulesResponse::fromMap($this->doRPCRequest('DeleteAggregateConfigRules', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAggregateConfigRulesRequest $request
     *
     * @return DeleteAggregateConfigRulesResponse
     */
    public function deleteAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAggregateRemediationsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteAggregateRemediationsResponse
     */
    public function deleteAggregateRemediationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAggregateRemediationsResponse::fromMap($this->doRPCRequest('DeleteAggregateRemediations', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAggregateRemediationsRequest $request
     *
     * @return DeleteAggregateRemediationsResponse
     */
    public function deleteAggregateRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregateRemediationsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAggregatorsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAggregatorsResponse
     */
    public function deleteAggregatorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAggregatorsResponse::fromMap($this->doRPCRequest('DeleteAggregators', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAggregatorsRequest $request
     *
     * @return DeleteAggregatorsResponse
     */
    public function deleteAggregators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAggregatorsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCompliancePacksRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCompliancePacksResponse
     */
    public function deleteCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCompliancePacksResponse::fromMap($this->doRPCRequest('DeleteCompliancePacks', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCompliancePacksRequest $request
     *
     * @return DeleteCompliancePacksResponse
     */
    public function deleteCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRemediationsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteRemediationsResponse
     */
    public function deleteRemediationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteRemediationsResponse::fromMap($this->doRPCRequest('DeleteRemediations', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteRemediationsRequest $request
     *
     * @return DeleteRemediationsResponse
     */
    public function deleteRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRemediationsWithOptions($request, $runtime);
    }

    /**
     * @param GenerateAggregateCompliancePackReportRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return GenerateAggregateCompliancePackReportResponse
     */
    public function generateAggregateCompliancePackReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateAggregateCompliancePackReportResponse::fromMap($this->doRPCRequest('GenerateAggregateCompliancePackReport', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateAggregateCompliancePackReportRequest $request
     *
     * @return GenerateAggregateCompliancePackReportResponse
     */
    public function generateAggregateCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAggregateCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * @param GenerateAggregateConfigRulesReportRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GenerateAggregateConfigRulesReportResponse
     */
    public function generateAggregateConfigRulesReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateAggregateConfigRulesReportResponse::fromMap($this->doRPCRequest('GenerateAggregateConfigRulesReport', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateAggregateConfigRulesReportRequest $request
     *
     * @return GenerateAggregateConfigRulesReportResponse
     */
    public function generateAggregateConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAggregateConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * @param GenerateAggregateResourceInventoryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return GenerateAggregateResourceInventoryResponse
     */
    public function generateAggregateResourceInventoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateAggregateResourceInventoryResponse::fromMap($this->doRPCRequest('GenerateAggregateResourceInventory', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateAggregateResourceInventoryRequest $request
     *
     * @return GenerateAggregateResourceInventoryResponse
     */
    public function generateAggregateResourceInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAggregateResourceInventoryWithOptions($request, $runtime);
    }

    /**
     * @param GenerateCompliancePackReportRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GenerateCompliancePackReportResponse
     */
    public function generateCompliancePackReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateCompliancePackReportResponse::fromMap($this->doRPCRequest('GenerateCompliancePackReport', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateCompliancePackReportRequest $request
     *
     * @return GenerateCompliancePackReportResponse
     */
    public function generateCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * @param GenerateConfigRulesReportRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateConfigRulesReportResponse
     */
    public function generateConfigRulesReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateConfigRulesReportResponse::fromMap($this->doRPCRequest('GenerateConfigRulesReport', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateConfigRulesReportRequest $request
     *
     * @return GenerateConfigRulesReportResponse
     */
    public function generateConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * @param GenerateResourceInventoryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateResourceInventoryResponse
     */
    public function generateResourceInventoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateResourceInventoryResponse::fromMap($this->doRPCRequest('GenerateResourceInventory', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateResourceInventoryRequest $request
     *
     * @return GenerateResourceInventoryResponse
     */
    public function generateResourceInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateResourceInventoryWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateAccountComplianceByPackRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetAggregateAccountComplianceByPackResponse
     */
    public function getAggregateAccountComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateAccountComplianceByPackResponse::fromMap($this->doRPCRequest('GetAggregateAccountComplianceByPack', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateAccountComplianceByPackRequest $request
     *
     * @return GetAggregateAccountComplianceByPackResponse
     */
    public function getAggregateAccountComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateAccountComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateCompliancePackRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetAggregateCompliancePackResponse
     */
    public function getAggregateCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateCompliancePackResponse::fromMap($this->doRPCRequest('GetAggregateCompliancePack', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateCompliancePackRequest $request
     *
     * @return GetAggregateCompliancePackResponse
     */
    public function getAggregateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateCompliancePackReportRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetAggregateCompliancePackReportResponse
     */
    public function getAggregateCompliancePackReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateCompliancePackReportResponse::fromMap($this->doRPCRequest('GetAggregateCompliancePackReport', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateCompliancePackReportRequest $request
     *
     * @return GetAggregateCompliancePackReportResponse
     */
    public function getAggregateCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateConfigRuleRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetAggregateConfigRuleResponse
     */
    public function getAggregateConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateConfigRuleResponse::fromMap($this->doRPCRequest('GetAggregateConfigRule', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateConfigRuleRequest $request
     *
     * @return GetAggregateConfigRuleResponse
     */
    public function getAggregateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateConfigRuleComplianceByPackRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetAggregateConfigRuleComplianceByPackResponse
     */
    public function getAggregateConfigRuleComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateConfigRuleComplianceByPackResponse::fromMap($this->doRPCRequest('GetAggregateConfigRuleComplianceByPack', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateConfigRuleComplianceByPackRequest $request
     *
     * @return GetAggregateConfigRuleComplianceByPackResponse
     */
    public function getAggregateConfigRuleComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRuleComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateConfigRulesReportRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetAggregateConfigRulesReportResponse
     */
    public function getAggregateConfigRulesReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateConfigRulesReportResponse::fromMap($this->doRPCRequest('GetAggregateConfigRulesReport', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateConfigRulesReportRequest $request
     *
     * @return GetAggregateConfigRulesReportResponse
     */
    public function getAggregateConfigRulesReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRulesReportWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateConfigRuleSummaryByRiskLevelRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetAggregateConfigRuleSummaryByRiskLevelResponse
     */
    public function getAggregateConfigRuleSummaryByRiskLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateConfigRuleSummaryByRiskLevelResponse::fromMap($this->doRPCRequest('GetAggregateConfigRuleSummaryByRiskLevel', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateConfigRuleSummaryByRiskLevelRequest $request
     *
     * @return GetAggregateConfigRuleSummaryByRiskLevelResponse
     */
    public function getAggregateConfigRuleSummaryByRiskLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateConfigRuleSummaryByRiskLevelWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceComplianceByConfigRuleRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return GetAggregateResourceComplianceByConfigRuleResponse
     */
    public function getAggregateResourceComplianceByConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateResourceComplianceByConfigRuleResponse::fromMap($this->doRPCRequest('GetAggregateResourceComplianceByConfigRule', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateResourceComplianceByConfigRuleRequest $request
     *
     * @return GetAggregateResourceComplianceByConfigRuleResponse
     */
    public function getAggregateResourceComplianceByConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceByConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceComplianceByPackRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return GetAggregateResourceComplianceByPackResponse
     */
    public function getAggregateResourceComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateResourceComplianceByPackResponse::fromMap($this->doRPCRequest('GetAggregateResourceComplianceByPack', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateResourceComplianceByPackRequest $request
     *
     * @return GetAggregateResourceComplianceByPackResponse
     */
    public function getAggregateResourceComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceComplianceTimelineRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetAggregateResourceComplianceTimelineResponse
     */
    public function getAggregateResourceComplianceTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateResourceComplianceTimelineResponse::fromMap($this->doRPCRequest('GetAggregateResourceComplianceTimeline', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateResourceComplianceTimelineRequest $request
     *
     * @return GetAggregateResourceComplianceTimelineResponse
     */
    public function getAggregateResourceComplianceTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceComplianceTimelineWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceConfigurationTimelineRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return GetAggregateResourceConfigurationTimelineResponse
     */
    public function getAggregateResourceConfigurationTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateResourceConfigurationTimelineResponse::fromMap($this->doRPCRequest('GetAggregateResourceConfigurationTimeline', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateResourceConfigurationTimelineRequest $request
     *
     * @return GetAggregateResourceConfigurationTimelineResponse
     */
    public function getAggregateResourceConfigurationTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceConfigurationTimelineWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceCountsGroupByRegionRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return GetAggregateResourceCountsGroupByRegionResponse
     */
    public function getAggregateResourceCountsGroupByRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateResourceCountsGroupByRegionResponse::fromMap($this->doRPCRequest('GetAggregateResourceCountsGroupByRegion', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateResourceCountsGroupByRegionRequest $request
     *
     * @return GetAggregateResourceCountsGroupByRegionResponse
     */
    public function getAggregateResourceCountsGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceCountsGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceCountsGroupByResourceTypeRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return GetAggregateResourceCountsGroupByResourceTypeResponse
     */
    public function getAggregateResourceCountsGroupByResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateResourceCountsGroupByResourceTypeResponse::fromMap($this->doRPCRequest('GetAggregateResourceCountsGroupByResourceType', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateResourceCountsGroupByResourceTypeRequest $request
     *
     * @return GetAggregateResourceCountsGroupByResourceTypeResponse
     */
    public function getAggregateResourceCountsGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceCountsGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateResourceInventoryRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetAggregateResourceInventoryResponse
     */
    public function getAggregateResourceInventoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAggregateResourceInventoryResponse::fromMap($this->doRPCRequest('GetAggregateResourceInventory', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateResourceInventoryRequest $request
     *
     * @return GetAggregateResourceInventoryResponse
     */
    public function getAggregateResourceInventory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateResourceInventoryWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregatorRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetAggregatorResponse
     */
    public function getAggregatorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregatorResponse::fromMap($this->doRPCRequest('GetAggregator', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregatorRequest $request
     *
     * @return GetAggregatorResponse
     */
    public function getAggregator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregatorWithOptions($request, $runtime);
    }

    /**
     * @param GetCompliancePackRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCompliancePackResponse
     */
    public function getCompliancePackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetCompliancePackResponse::fromMap($this->doRPCRequest('GetCompliancePack', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCompliancePackRequest $request
     *
     * @return GetCompliancePackResponse
     */
    public function getCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param GetCompliancePackReportRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetCompliancePackReportResponse
     */
    public function getCompliancePackReportWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetCompliancePackReportResponse::fromMap($this->doRPCRequest('GetCompliancePackReport', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCompliancePackReportRequest $request
     *
     * @return GetCompliancePackReportResponse
     */
    public function getCompliancePackReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCompliancePackReportWithOptions($request, $runtime);
    }

    /**
     * @param GetConfigRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetConfigRuleResponse
     */
    public function getConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetConfigRuleResponse::fromMap($this->doRPCRequest('GetConfigRule', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetConfigRuleRequest $request
     *
     * @return GetConfigRuleResponse
     */
    public function getConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetConfigRuleComplianceByPackRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetConfigRuleComplianceByPackResponse
     */
    public function getConfigRuleComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetConfigRuleComplianceByPackResponse::fromMap($this->doRPCRequest('GetConfigRuleComplianceByPack', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetConfigRuleComplianceByPackRequest $request
     *
     * @return GetConfigRuleComplianceByPackResponse
     */
    public function getConfigRuleComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetConfigRulesReportResponse
     */
    public function getConfigRulesReportWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetConfigRulesReportResponse::fromMap($this->doRPCRequest('GetConfigRulesReport', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetConfigRulesReportResponse
     */
    public function getConfigRulesReport()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRulesReportWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetConfigRuleSummaryByRiskLevelResponse
     */
    public function getConfigRuleSummaryByRiskLevelWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetConfigRuleSummaryByRiskLevelResponse::fromMap($this->doRPCRequest('GetConfigRuleSummaryByRiskLevel', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetConfigRuleSummaryByRiskLevelResponse
     */
    public function getConfigRuleSummaryByRiskLevel()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConfigRuleSummaryByRiskLevelWithOptions($runtime);
    }

    /**
     * @param GetDiscoveredResourceCountsGroupByRegionRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return GetDiscoveredResourceCountsGroupByRegionResponse
     */
    public function getDiscoveredResourceCountsGroupByRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetDiscoveredResourceCountsGroupByRegionResponse::fromMap($this->doRPCRequest('GetDiscoveredResourceCountsGroupByRegion', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDiscoveredResourceCountsGroupByRegionRequest $request
     *
     * @return GetDiscoveredResourceCountsGroupByRegionResponse
     */
    public function getDiscoveredResourceCountsGroupByRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceCountsGroupByRegionWithOptions($request, $runtime);
    }

    /**
     * @param GetDiscoveredResourceCountsGroupByResourceTypeRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return GetDiscoveredResourceCountsGroupByResourceTypeResponse
     */
    public function getDiscoveredResourceCountsGroupByResourceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetDiscoveredResourceCountsGroupByResourceTypeResponse::fromMap($this->doRPCRequest('GetDiscoveredResourceCountsGroupByResourceType', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDiscoveredResourceCountsGroupByResourceTypeRequest $request
     *
     * @return GetDiscoveredResourceCountsGroupByResourceTypeResponse
     */
    public function getDiscoveredResourceCountsGroupByResourceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceCountsGroupByResourceTypeWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceComplianceByConfigRuleRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetResourceComplianceByConfigRuleResponse
     */
    public function getResourceComplianceByConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetResourceComplianceByConfigRuleResponse::fromMap($this->doRPCRequest('GetResourceComplianceByConfigRule', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetResourceComplianceByConfigRuleRequest $request
     *
     * @return GetResourceComplianceByConfigRuleResponse
     */
    public function getResourceComplianceByConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceByConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceComplianceByPackRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetResourceComplianceByPackResponse
     */
    public function getResourceComplianceByPackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetResourceComplianceByPackResponse::fromMap($this->doRPCRequest('GetResourceComplianceByPack', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetResourceComplianceByPackRequest $request
     *
     * @return GetResourceComplianceByPackResponse
     */
    public function getResourceComplianceByPack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceByPackWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceComplianceTimelineRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetResourceComplianceTimelineResponse
     */
    public function getResourceComplianceTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetResourceComplianceTimelineResponse::fromMap($this->doRPCRequest('GetResourceComplianceTimeline', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetResourceComplianceTimelineRequest $request
     *
     * @return GetResourceComplianceTimelineResponse
     */
    public function getResourceComplianceTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceComplianceTimelineWithOptions($request, $runtime);
    }

    /**
     * @param GetResourceConfigurationTimelineRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return GetResourceConfigurationTimelineResponse
     */
    public function getResourceConfigurationTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetResourceConfigurationTimelineResponse::fromMap($this->doRPCRequest('GetResourceConfigurationTimeline', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetResourceConfigurationTimelineRequest $request
     *
     * @return GetResourceConfigurationTimelineResponse
     */
    public function getResourceConfigurationTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceConfigurationTimelineWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetResourceInventoryResponse
     */
    public function getResourceInventoryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetResourceInventoryResponse::fromMap($this->doRPCRequest('GetResourceInventory', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetResourceInventoryResponse
     */
    public function getResourceInventory()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourceInventoryWithOptions($runtime);
    }

    /**
     * @param ListAggregateCompliancePacksRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListAggregateCompliancePacksResponse
     */
    public function listAggregateCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAggregateCompliancePacksResponse::fromMap($this->doRPCRequest('ListAggregateCompliancePacks', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAggregateCompliancePacksRequest $request
     *
     * @return ListAggregateCompliancePacksResponse
     */
    public function listAggregateCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregateConfigRuleEvaluationResultsRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return ListAggregateConfigRuleEvaluationResultsResponse
     */
    public function listAggregateConfigRuleEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAggregateConfigRuleEvaluationResultsResponse::fromMap($this->doRPCRequest('ListAggregateConfigRuleEvaluationResults', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAggregateConfigRuleEvaluationResultsRequest $request
     *
     * @return ListAggregateConfigRuleEvaluationResultsResponse
     */
    public function listAggregateConfigRuleEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigRuleEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregateConfigRulesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListAggregateConfigRulesResponse
     */
    public function listAggregateConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAggregateConfigRulesResponse::fromMap($this->doRPCRequest('ListAggregateConfigRules', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAggregateConfigRulesRequest $request
     *
     * @return ListAggregateConfigRulesResponse
     */
    public function listAggregateConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregateRemediationsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListAggregateRemediationsResponse
     */
    public function listAggregateRemediationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListAggregateRemediationsResponse::fromMap($this->doRPCRequest('ListAggregateRemediations', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAggregateRemediationsRequest $request
     *
     * @return ListAggregateRemediationsResponse
     */
    public function listAggregateRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateRemediationsWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregateResourceEvaluationResultsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return ListAggregateResourceEvaluationResultsResponse
     */
    public function listAggregateResourceEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAggregateResourceEvaluationResultsResponse::fromMap($this->doRPCRequest('ListAggregateResourceEvaluationResults', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAggregateResourceEvaluationResultsRequest $request
     *
     * @return ListAggregateResourceEvaluationResultsResponse
     */
    public function listAggregateResourceEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateResourceEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListAggregatorsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListAggregatorsResponse
     */
    public function listAggregatorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAggregatorsResponse::fromMap($this->doRPCRequest('ListAggregators', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAggregatorsRequest $request
     *
     * @return ListAggregatorsResponse
     */
    public function listAggregators($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregatorsWithOptions($request, $runtime);
    }

    /**
     * @param ListCompliancePacksRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListCompliancePacksResponse
     */
    public function listCompliancePacksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListCompliancePacksResponse::fromMap($this->doRPCRequest('ListCompliancePacks', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCompliancePacksRequest $request
     *
     * @return ListCompliancePacksResponse
     */
    public function listCompliancePacks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCompliancePacksWithOptions($request, $runtime);
    }

    /**
     * @param ListCompliancePackTemplatesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListCompliancePackTemplatesResponse
     */
    public function listCompliancePackTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListCompliancePackTemplatesResponse::fromMap($this->doRPCRequest('ListCompliancePackTemplates', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListCompliancePackTemplatesRequest $request
     *
     * @return ListCompliancePackTemplatesResponse
     */
    public function listCompliancePackTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCompliancePackTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param ListConfigRuleEvaluationResultsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListConfigRuleEvaluationResultsResponse
     */
    public function listConfigRuleEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListConfigRuleEvaluationResultsResponse::fromMap($this->doRPCRequest('ListConfigRuleEvaluationResults', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListConfigRuleEvaluationResultsRequest $request
     *
     * @return ListConfigRuleEvaluationResultsResponse
     */
    public function listConfigRuleEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigRuleEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListRemediationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListRemediationsResponse
     */
    public function listRemediationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRemediationsResponse::fromMap($this->doRPCRequest('ListRemediations', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRemediationsRequest $request
     *
     * @return ListRemediationsResponse
     */
    public function listRemediations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemediationsWithOptions($request, $runtime);
    }

    /**
     * @param ListResourceEvaluationResultsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListResourceEvaluationResultsResponse
     */
    public function listResourceEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListResourceEvaluationResultsResponse::fromMap($this->doRPCRequest('ListResourceEvaluationResults', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListResourceEvaluationResultsRequest $request
     *
     * @return ListResourceEvaluationResultsResponse
     */
    public function listResourceEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListResourceOwnerInAllAggregatorResponse
     */
    public function listResourceOwnerInAllAggregatorWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListResourceOwnerInAllAggregatorResponse::fromMap($this->doRPCRequest('ListResourceOwnerInAllAggregator', '2020-09-07', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListResourceOwnerInAllAggregatorResponse
     */
    public function listResourceOwnerInAllAggregator()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourceOwnerInAllAggregatorWithOptions($runtime);
    }

    /**
     * @param StartAggregateConfigRuleEvaluationRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return StartAggregateConfigRuleEvaluationResponse
     */
    public function startAggregateConfigRuleEvaluationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartAggregateConfigRuleEvaluationResponse::fromMap($this->doRPCRequest('StartAggregateConfigRuleEvaluation', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartAggregateConfigRuleEvaluationRequest $request
     *
     * @return StartAggregateConfigRuleEvaluationResponse
     */
    public function startAggregateConfigRuleEvaluation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAggregateConfigRuleEvaluationWithOptions($request, $runtime);
    }

    /**
     * @param StartAggregateRemediationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartAggregateRemediationResponse
     */
    public function startAggregateRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartAggregateRemediationResponse::fromMap($this->doRPCRequest('StartAggregateRemediation', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartAggregateRemediationRequest $request
     *
     * @return StartAggregateRemediationResponse
     */
    public function startAggregateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAggregateRemediationWithOptions($request, $runtime);
    }

    /**
     * @param StartRemediationRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartRemediationResponse
     */
    public function startRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartRemediationResponse::fromMap($this->doRPCRequest('StartRemediation', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartRemediationRequest $request
     *
     * @return StartRemediationResponse
     */
    public function startRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRemediationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAggregateCompliancePackRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateAggregateCompliancePackResponse
     */
    public function updateAggregateCompliancePackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAggregateCompliancePackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configRules)) {
            $request->configRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAggregateCompliancePackResponse::fromMap($this->doRPCRequest('UpdateAggregateCompliancePack', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAggregateCompliancePackRequest $request
     *
     * @return UpdateAggregateCompliancePackResponse
     */
    public function updateAggregateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAggregateConfigRuleRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateAggregateConfigRuleResponse
     */
    public function updateAggregateConfigRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAggregateConfigRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputParameters)) {
            $request->inputParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceTypesScope)) {
            $request->resourceTypesScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAggregateConfigRuleResponse::fromMap($this->doRPCRequest('UpdateAggregateConfigRule', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAggregateConfigRuleRequest $request
     *
     * @return UpdateAggregateConfigRuleResponse
     */
    public function updateAggregateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAggregateRemediationRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateAggregateRemediationResponse
     */
    public function updateAggregateRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAggregateRemediationResponse::fromMap($this->doRPCRequest('UpdateAggregateRemediation', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAggregateRemediationRequest $request
     *
     * @return UpdateAggregateRemediationResponse
     */
    public function updateAggregateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregateRemediationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAggregatorRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAggregatorResponse
     */
    public function updateAggregatorWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAggregatorShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->aggregatorAccounts)) {
            $request->aggregatorAccountsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->aggregatorAccounts, 'AggregatorAccounts', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateAggregatorResponse::fromMap($this->doRPCRequest('UpdateAggregator', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateAggregatorRequest $request
     *
     * @return UpdateAggregatorResponse
     */
    public function updateAggregator($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAggregatorWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCompliancePackRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCompliancePackResponse
     */
    public function updateCompliancePackWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateCompliancePackShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configRules)) {
            $request->configRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configRules, 'ConfigRules', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateCompliancePackResponse::fromMap($this->doRPCRequest('UpdateCompliancePack', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateCompliancePackRequest $request
     *
     * @return UpdateCompliancePackResponse
     */
    public function updateCompliancePack($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCompliancePackWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConfigRuleRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateConfigRuleResponse
     */
    public function updateConfigRuleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateConfigRuleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputParameters)) {
            $request->inputParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputParameters, 'InputParameters', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceTypesScope)) {
            $request->resourceTypesScopeShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceTypesScope, 'ResourceTypesScope', 'simple');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateConfigRuleResponse::fromMap($this->doRPCRequest('UpdateConfigRule', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateConfigRuleRequest $request
     *
     * @return UpdateConfigRuleResponse
     */
    public function updateConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRemediationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateRemediationResponse
     */
    public function updateRemediationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateRemediationResponse::fromMap($this->doRPCRequest('UpdateRemediation', '2020-09-07', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRemediationRequest $request
     *
     * @return UpdateRemediationResponse
     */
    public function updateRemediation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRemediationWithOptions($request, $runtime);
    }
}
