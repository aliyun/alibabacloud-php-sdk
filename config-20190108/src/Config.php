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
use Darabonba\OpenApi\Models\Params;
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
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActiveConfigRules',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActiveConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteConfigRules',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCompliance',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeComplianceResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeComplianceSummary',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeComplianceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeConfigRule',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeConfigurationRecorder',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeConfigurationRecorderResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeliveryChannels',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeliveryChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiscoveredResource',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiscoveredResourceResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEvaluationResults',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAggregateDiscoveredResource',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAggregateDiscoveredResourceResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiscoveredResourceCounts',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiscoveredResourceCountsResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDiscoveredResourceSummary',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiscoveredResourceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceComplianceTimeline',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceComplianceTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceConfigurationTimeline',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourceConfigurationTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetSupportedResourceTypes',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSupportedResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->aggregatorId)) {
            $query['AggregatorId'] = $request->aggregatorId;
        }
        if (!Utils::isUnset($request->folderId)) {
            $query['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->resourceDeleted)) {
            $query['ResourceDeleted'] = $request->resourceDeleted;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAggregateDiscoveredResources',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAggregateDiscoveredResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListConfigRules',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->memberId)) {
            $query['MemberId'] = $request->memberId;
        }
        if (!Utils::isUnset($request->multiAccount)) {
            $query['MultiAccount'] = $request->multiAccount;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->resourceDeleted)) {
            $query['ResourceDeleted'] = $request->resourceDeleted;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDiscoveredResources',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDiscoveredResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->managedRuleIdentifier)) {
            $query['ManagedRuleIdentifier'] = $request->managedRuleIdentifier;
        }
        if (!Utils::isUnset($request->remediationType)) {
            $query['RemediationType'] = $request->remediationType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRemediationTemplates',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRemediationTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->memberId)) {
            $query['MemberId'] = $request->memberId;
        }
        if (!Utils::isUnset($request->multiAccount)) {
            $query['MultiAccount'] = $request->multiAccount;
        }
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $body['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->configRuleName)) {
            $body['ConfigRuleName'] = $request->configRuleName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inputParameters)) {
            $body['InputParameters'] = $request->inputParameters;
        }
        if (!Utils::isUnset($request->riskLevel)) {
            $body['RiskLevel'] = $request->riskLevel;
        }
        if (!Utils::isUnset($request->scopeComplianceResourceId)) {
            $body['ScopeComplianceResourceId'] = $request->scopeComplianceResourceId;
        }
        if (!Utils::isUnset($request->scopeComplianceResourceTypes)) {
            $body['ScopeComplianceResourceTypes'] = $request->scopeComplianceResourceTypes;
        }
        if (!Utils::isUnset($request->sourceDetailMessageType)) {
            $body['SourceDetailMessageType'] = $request->sourceDetailMessageType;
        }
        if (!Utils::isUnset($request->sourceIdentifier)) {
            $body['SourceIdentifier'] = $request->sourceIdentifier;
        }
        if (!Utils::isUnset($request->sourceMaximumExecutionFrequency)) {
            $body['SourceMaximumExecutionFrequency'] = $request->sourceMaximumExecutionFrequency;
        }
        if (!Utils::isUnset($request->sourceOwner)) {
            $body['SourceOwner'] = $request->sourceOwner;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutConfigRule',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutConfigRuleResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->resourceTypes)) {
            $body['ResourceTypes'] = $request->resourceTypes;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutConfigurationRecorder',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutConfigurationRecorderResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deliveryChannelAssumeRoleArn)) {
            $body['DeliveryChannelAssumeRoleArn'] = $request->deliveryChannelAssumeRoleArn;
        }
        if (!Utils::isUnset($request->deliveryChannelCondition)) {
            $body['DeliveryChannelCondition'] = $request->deliveryChannelCondition;
        }
        if (!Utils::isUnset($request->deliveryChannelId)) {
            $body['DeliveryChannelId'] = $request->deliveryChannelId;
        }
        if (!Utils::isUnset($request->deliveryChannelName)) {
            $body['DeliveryChannelName'] = $request->deliveryChannelName;
        }
        if (!Utils::isUnset($request->deliveryChannelTargetArn)) {
            $body['DeliveryChannelTargetArn'] = $request->deliveryChannelTargetArn;
        }
        if (!Utils::isUnset($request->deliveryChannelType)) {
            $body['DeliveryChannelType'] = $request->deliveryChannelType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutDeliveryChannel',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutDeliveryChannelResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->evaluations)) {
            $body['Evaluations'] = $request->evaluations;
        }
        if (!Utils::isUnset($request->resultToken)) {
            $body['ResultToken'] = $request->resultToken;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutEvaluations',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutEvaluationsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->compliancePackId)) {
            $query['CompliancePackId'] = $request->compliancePackId;
        }
        if (!Utils::isUnset($request->configRuleId)) {
            $query['ConfigRuleId'] = $request->configRuleId;
        }
        if (!Utils::isUnset($request->revertEvaluation)) {
            $query['RevertEvaluation'] = $request->revertEvaluation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartConfigRuleEvaluation',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartConfigRuleEvaluationResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $body = [];
        if (!Utils::isUnset($request->enterpriseEdition)) {
            $body['EnterpriseEdition'] = $request->enterpriseEdition;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartConfigurationRecorder',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartConfigurationRecorderResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->configRuleIds)) {
            $query['ConfigRuleIds'] = $request->configRuleIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopConfigRules',
            'version'     => '2019-01-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopConfigRulesResponse::fromMap($this->callApi($params, $req, $runtime));
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
