<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Config\V20190108\Models\ActiveConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\ActiveConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\DeleteConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\DeleteConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeComplianceRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeComplianceResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeComplianceSummaryRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeComplianceSummaryResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigurationRecorderResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeDeliveryChannelsRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeDeliveryChannelsResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeDiscoveredResourceRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeDiscoveredResourceResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\GetAggregateDiscoveredResourceRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\GetAggregateDiscoveredResourceResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceCountsRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceCountsResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceSummaryRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceSummaryResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\GetResourceComplianceTimelineRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\GetResourceComplianceTimelineResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\GetResourceConfigurationTimelineRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\GetResourceConfigurationTimelineResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\GetSupportedResourceTypesResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\ListAggregateDiscoveredResourcesRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\ListAggregateDiscoveredResourcesResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\ListDiscoveredResourcesRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\ListDiscoveredResourcesResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\ListRemediationTemplatesRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\ListRemediationTemplatesResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\PutConfigRuleRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\PutConfigRuleResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\PutConfigurationRecorderRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\PutConfigurationRecorderResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\PutDeliveryChannelRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\PutDeliveryChannelResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\PutEvaluationsRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\PutEvaluationsResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\StartConfigRuleEvaluationRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\StartConfigRuleEvaluationResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\StartConfigurationRecorderRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\StartConfigurationRecorderResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\StopConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\StopConfigRulesResponse;
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
     * @param ActiveConfigRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ActiveConfigRulesResponse
     */
    public function activeConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ActiveConfigRulesResponse::fromMap($this->doRPCRequest('ActiveConfigRules', '2019-01-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ActiveConfigRulesRequest $request
     *
     * @return ActiveConfigRulesResponse
     */
    public function activeConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activeConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteConfigRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteConfigRulesResponse
     */
    public function deleteConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteConfigRulesResponse::fromMap($this->doRPCRequest('DeleteConfigRules', '2019-01-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteConfigRulesRequest $request
     *
     * @return DeleteConfigRulesResponse
     */
    public function deleteConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeComplianceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeComplianceResponse
     */
    public function describeComplianceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeComplianceResponse::fromMap($this->doRPCRequest('DescribeCompliance', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeComplianceRequest $request
     *
     * @return DescribeComplianceResponse
     */
    public function describeCompliance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComplianceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeComplianceSummaryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeComplianceSummaryResponse
     */
    public function describeComplianceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeComplianceSummaryResponse::fromMap($this->doRPCRequest('DescribeComplianceSummary', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeComplianceSummaryRequest $request
     *
     * @return DescribeComplianceSummaryResponse
     */
    public function describeComplianceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComplianceSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConfigRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeConfigRuleResponse
     */
    public function describeConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeConfigRuleResponse::fromMap($this->doRPCRequest('DescribeConfigRule', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeConfigRuleRequest $request
     *
     * @return DescribeConfigRuleResponse
     */
    public function describeConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeConfigurationRecorderResponse
     */
    public function describeConfigurationRecorderWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeConfigurationRecorderResponse::fromMap($this->doRPCRequest('DescribeConfigurationRecorder', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeConfigurationRecorderResponse
     */
    public function describeConfigurationRecorder()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigurationRecorderWithOptions($runtime);
    }

    /**
     * @param DescribeDeliveryChannelsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDeliveryChannelsResponse
     */
    public function describeDeliveryChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeDeliveryChannelsResponse::fromMap($this->doRPCRequest('DescribeDeliveryChannels', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeliveryChannelsRequest $request
     *
     * @return DescribeDeliveryChannelsResponse
     */
    public function describeDeliveryChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeliveryChannelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDiscoveredResourceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDiscoveredResourceResponse
     */
    public function describeDiscoveredResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeDiscoveredResourceResponse::fromMap($this->doRPCRequest('DescribeDiscoveredResource', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDiscoveredResourceRequest $request
     *
     * @return DescribeDiscoveredResourceResponse
     */
    public function describeDiscoveredResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiscoveredResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEvaluationResultsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEvaluationResultsResponse
     */
    public function describeEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return DescribeEvaluationResultsResponse::fromMap($this->doRPCRequest('DescribeEvaluationResults', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEvaluationResultsRequest $request
     *
     * @return DescribeEvaluationResultsResponse
     */
    public function describeEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @param GetAggregateDiscoveredResourceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return GetAggregateDiscoveredResourceResponse
     */
    public function getAggregateDiscoveredResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetAggregateDiscoveredResourceResponse::fromMap($this->doRPCRequest('GetAggregateDiscoveredResource', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAggregateDiscoveredResourceRequest $request
     *
     * @return GetAggregateDiscoveredResourceResponse
     */
    public function getAggregateDiscoveredResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAggregateDiscoveredResourceWithOptions($request, $runtime);
    }

    /**
     * @param GetDiscoveredResourceCountsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetDiscoveredResourceCountsResponse
     */
    public function getDiscoveredResourceCountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetDiscoveredResourceCountsResponse::fromMap($this->doRPCRequest('GetDiscoveredResourceCounts', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDiscoveredResourceCountsRequest $request
     *
     * @return GetDiscoveredResourceCountsResponse
     */
    public function getDiscoveredResourceCounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceCountsWithOptions($request, $runtime);
    }

    /**
     * @param GetDiscoveredResourceSummaryRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetDiscoveredResourceSummaryResponse
     */
    public function getDiscoveredResourceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return GetDiscoveredResourceSummaryResponse::fromMap($this->doRPCRequest('GetDiscoveredResourceSummary', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetDiscoveredResourceSummaryRequest $request
     *
     * @return GetDiscoveredResourceSummaryResponse
     */
    public function getDiscoveredResourceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiscoveredResourceSummaryWithOptions($request, $runtime);
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

        return GetResourceComplianceTimelineResponse::fromMap($this->doRPCRequest('GetResourceComplianceTimeline', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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

        return GetResourceConfigurationTimelineResponse::fromMap($this->doRPCRequest('GetResourceConfigurationTimeline', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
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
     * @return GetSupportedResourceTypesResponse
     */
    public function getSupportedResourceTypesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return GetSupportedResourceTypesResponse::fromMap($this->doRPCRequest('GetSupportedResourceTypes', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return GetSupportedResourceTypesResponse
     */
    public function getSupportedResourceTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSupportedResourceTypesWithOptions($runtime);
    }

    /**
     * @param ListAggregateDiscoveredResourcesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ListAggregateDiscoveredResourcesResponse
     */
    public function listAggregateDiscoveredResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListAggregateDiscoveredResourcesResponse::fromMap($this->doRPCRequest('ListAggregateDiscoveredResources', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListAggregateDiscoveredResourcesRequest $request
     *
     * @return ListAggregateDiscoveredResourcesResponse
     */
    public function listAggregateDiscoveredResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAggregateDiscoveredResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListConfigRulesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListConfigRulesResponse
     */
    public function listConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListConfigRulesResponse::fromMap($this->doRPCRequest('ListConfigRules', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListConfigRulesRequest $request
     *
     * @return ListConfigRulesResponse
     */
    public function listConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConfigRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListDiscoveredResourcesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDiscoveredResourcesResponse
     */
    public function listDiscoveredResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return ListDiscoveredResourcesResponse::fromMap($this->doRPCRequest('ListDiscoveredResources', '2019-01-08', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDiscoveredResourcesRequest $request
     *
     * @return ListDiscoveredResourcesResponse
     */
    public function listDiscoveredResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDiscoveredResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListRemediationTemplatesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListRemediationTemplatesResponse
     */
    public function listRemediationTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListRemediationTemplatesResponse::fromMap($this->doRPCRequest('ListRemediationTemplates', '2019-01-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListRemediationTemplatesRequest $request
     *
     * @return ListRemediationTemplatesResponse
     */
    public function listRemediationTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRemediationTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param PutConfigRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PutConfigRuleResponse
     */
    public function putConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutConfigRuleResponse::fromMap($this->doRPCRequest('PutConfigRule', '2019-01-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutConfigRuleRequest $request
     *
     * @return PutConfigRuleResponse
     */
    public function putConfigRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putConfigRuleWithOptions($request, $runtime);
    }

    /**
     * @param PutConfigurationRecorderRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return PutConfigurationRecorderResponse
     */
    public function putConfigurationRecorderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutConfigurationRecorderResponse::fromMap($this->doRPCRequest('PutConfigurationRecorder', '2019-01-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutConfigurationRecorderRequest $request
     *
     * @return PutConfigurationRecorderResponse
     */
    public function putConfigurationRecorder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putConfigurationRecorderWithOptions($request, $runtime);
    }

    /**
     * @param PutDeliveryChannelRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PutDeliveryChannelResponse
     */
    public function putDeliveryChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutDeliveryChannelResponse::fromMap($this->doRPCRequest('PutDeliveryChannel', '2019-01-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutDeliveryChannelRequest $request
     *
     * @return PutDeliveryChannelResponse
     */
    public function putDeliveryChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putDeliveryChannelWithOptions($request, $runtime);
    }

    /**
     * @param PutEvaluationsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PutEvaluationsResponse
     */
    public function putEvaluationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutEvaluationsResponse::fromMap($this->doRPCRequest('PutEvaluations', '2019-01-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutEvaluationsRequest $request
     *
     * @return PutEvaluationsResponse
     */
    public function putEvaluations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putEvaluationsWithOptions($request, $runtime);
    }

    /**
     * @param StartConfigRuleEvaluationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartConfigRuleEvaluationResponse
     */
    public function startConfigRuleEvaluationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartConfigRuleEvaluationResponse::fromMap($this->doRPCRequest('StartConfigRuleEvaluation', '2019-01-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartConfigRuleEvaluationRequest $request
     *
     * @return StartConfigRuleEvaluationResponse
     */
    public function startConfigRuleEvaluation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startConfigRuleEvaluationWithOptions($request, $runtime);
    }

    /**
     * @param StartConfigurationRecorderRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return StartConfigurationRecorderResponse
     */
    public function startConfigurationRecorderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartConfigurationRecorderResponse::fromMap($this->doRPCRequest('StartConfigurationRecorder', '2019-01-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartConfigurationRecorderRequest $request
     *
     * @return StartConfigurationRecorderResponse
     */
    public function startConfigurationRecorder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startConfigurationRecorderWithOptions($request, $runtime);
    }

    /**
     * @param StopConfigRulesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopConfigRulesResponse
     */
    public function stopConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopConfigRulesResponse::fromMap($this->doRPCRequest('StopConfigRules', '2019-01-08', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopConfigRulesRequest $request
     *
     * @return StopConfigRulesResponse
     */
    public function stopConfigRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopConfigRulesWithOptions($request, $runtime);
    }
}
