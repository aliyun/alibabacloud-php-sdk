<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108;

use AlibabaCloud\Endpoint\Endpoint;
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
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigurationRecorderRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigurationRecorderResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeDeliveryChannelsRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeDeliveryChannelsResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeDiscoveredResourceRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeDiscoveredResourceResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\DescribeEvaluationResultsResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceCountsRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceCountsResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceSummaryRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceSummaryResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\GetResourceComplianceTimelineRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\GetResourceComplianceTimelineResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\GetResourceConfigurationTimelineRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\GetResourceConfigurationTimelineResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\GetSupportedResourceTypesRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\GetSupportedResourceTypesResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponse;
use AlibabaCloud\SDK\Config\V20190108\Models\ListDiscoveredResourcesRequest;
use AlibabaCloud\SDK\Config\V20190108\Models\ListDiscoveredResourcesResponse;
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
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Rpc\Rpc\Config;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Config extends Rpc
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
     * @param GetResourceComplianceTimelineRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return GetResourceComplianceTimelineResponse
     */
    public function getResourceComplianceTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetResourceComplianceTimelineResponse::fromMap($this->doRequest('GetResourceComplianceTimeline', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
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

        return GetResourceConfigurationTimelineResponse::fromMap($this->doRequest('GetResourceConfigurationTimeline', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
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
     * @param DescribeDeliveryChannelsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDeliveryChannelsResponse
     */
    public function describeDeliveryChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDeliveryChannelsResponse::fromMap($this->doRequest('DescribeDeliveryChannels', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
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
     * @param PutConfigurationRecorderRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return PutConfigurationRecorderResponse
     */
    public function putConfigurationRecorderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PutConfigurationRecorderResponse::fromMap($this->doRequest('PutConfigurationRecorder', 'HTTPS', 'POST', '2019-01-08', 'AK', null, $request->toMap(), $runtime));
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
     * @param GetDiscoveredResourceSummaryRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetDiscoveredResourceSummaryResponse
     */
    public function getDiscoveredResourceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDiscoveredResourceSummaryResponse::fromMap($this->doRequest('GetDiscoveredResourceSummary', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
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
     * @param ActiveConfigRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ActiveConfigRulesResponse
     */
    public function activeConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ActiveConfigRulesResponse::fromMap($this->doRequest('ActiveConfigRules', 'HTTPS', 'POST', '2019-01-08', 'AK', null, $request->toMap(), $runtime));
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
     * @param StopConfigRulesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopConfigRulesResponse
     */
    public function stopConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopConfigRulesResponse::fromMap($this->doRequest('StopConfigRules', 'HTTPS', 'POST', '2019-01-08', 'AK', null, $request->toMap(), $runtime));
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

    /**
     * @param DescribeComplianceSummaryRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeComplianceSummaryResponse
     */
    public function describeComplianceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeComplianceSummaryResponse::fromMap($this->doRequest('DescribeComplianceSummary', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
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
     * @param ListConfigRulesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListConfigRulesResponse
     */
    public function listConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListConfigRulesResponse::fromMap($this->doRequest('ListConfigRules', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
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
     * @param PutConfigRuleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PutConfigRuleResponse
     */
    public function putConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PutConfigRuleResponse::fromMap($this->doRequest('PutConfigRule', 'HTTPS', 'POST', '2019-01-08', 'AK', null, $request->toMap(), $runtime));
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
     * @param DescribeEvaluationResultsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEvaluationResultsResponse
     */
    public function describeEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeEvaluationResultsResponse::fromMap($this->doRequest('DescribeEvaluationResults', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
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
     * @param DeleteConfigRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteConfigRulesResponse
     */
    public function deleteConfigRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteConfigRulesResponse::fromMap($this->doRequest('DeleteConfigRules', 'HTTPS', 'POST', '2019-01-08', 'AK', null, $request->toMap(), $runtime));
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

        return DescribeComplianceResponse::fromMap($this->doRequest('DescribeCompliance', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
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
     * @param GetDiscoveredResourceCountsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetDiscoveredResourceCountsResponse
     */
    public function getDiscoveredResourceCountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDiscoveredResourceCountsResponse::fromMap($this->doRequest('GetDiscoveredResourceCounts', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
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
     * @param ListDiscoveredResourcesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListDiscoveredResourcesResponse
     */
    public function listDiscoveredResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDiscoveredResourcesResponse::fromMap($this->doRequest('ListDiscoveredResources', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
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
     * @param DescribeConfigurationRecorderRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeConfigurationRecorderResponse
     */
    public function describeConfigurationRecorderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeConfigurationRecorderResponse::fromMap($this->doRequest('DescribeConfigurationRecorder', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
    }

    /**
     * @param DescribeConfigurationRecorderRequest $request
     *
     * @return DescribeConfigurationRecorderResponse
     */
    public function describeConfigurationRecorder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigurationRecorderWithOptions($request, $runtime);
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

        return DescribeDiscoveredResourceResponse::fromMap($this->doRequest('DescribeDiscoveredResource', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
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
     * @param StartConfigurationRecorderRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return StartConfigurationRecorderResponse
     */
    public function startConfigurationRecorderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartConfigurationRecorderResponse::fromMap($this->doRequest('StartConfigurationRecorder', 'HTTPS', 'POST', '2019-01-08', 'AK', null, $request->toMap(), $runtime));
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
     * @param DescribeConfigRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeConfigRuleResponse
     */
    public function describeConfigRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeConfigRuleResponse::fromMap($this->doRequest('DescribeConfigRule', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
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
     * @param GetSupportedResourceTypesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetSupportedResourceTypesResponse
     */
    public function getSupportedResourceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSupportedResourceTypesResponse::fromMap($this->doRequest('GetSupportedResourceTypes', 'HTTPS', 'GET', '2019-01-08', 'AK', $request->toMap(), null, $runtime));
    }

    /**
     * @param GetSupportedResourceTypesRequest $request
     *
     * @return GetSupportedResourceTypesResponse
     */
    public function getSupportedResourceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSupportedResourceTypesWithOptions($request, $runtime);
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

        return PutDeliveryChannelResponse::fromMap($this->doRequest('PutDeliveryChannel', 'HTTPS', 'POST', '2019-01-08', 'AK', null, $request->toMap(), $runtime));
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

        return PutEvaluationsResponse::fromMap($this->doRequest('PutEvaluations', 'HTTPS', 'POST', '2019-01-08', 'AK', null, $request->toMap(), $runtime));
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

        return StartConfigRuleEvaluationResponse::fromMap($this->doRequest('StartConfigRuleEvaluation', 'HTTPS', 'POST', '2019-01-08', 'AK', null, $request->toMap(), $runtime));
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
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap['regionId'])) {
            return @$endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
