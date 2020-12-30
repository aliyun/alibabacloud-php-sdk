<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Airec\V20181012\Models\AttachDatasetResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\CreateDiversifyResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\CreateMixResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\CreateRuleResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\CreateSceneRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\CreateSceneResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DeleteDataSetResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DeleteDiversifyResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DeleteMixResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DeleteSceneResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeDataSetMessageResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeDataSetReportResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeDiversifyResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeExposureSettingsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeInstanceResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeMixResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeQuotaResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeRuleRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeRuleResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeSceneResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeSceneThroughputResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeSyncReportDetailRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeSyncReportDetailResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeSyncReportOutliersRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeSyncReportOutliersResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeUserMetricsRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\DescribeUserMetricsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\DowngradeInstanceResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardDetailsFlowsRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardDetailsFlowsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardDetailsRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardDetailsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardMetricsFlowsRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardMetricsFlowsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardMetricsRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardMetricsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardParametersResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardUidResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDataSetResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDataSourceResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListDiversifyResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListInstanceRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListInstanceResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListInstanceTaskResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListItemsRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListItemsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListLogsRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListLogsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListMixResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListRuleConditionsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListRulesRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListRulesResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListRuleTasksRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListRuleTasksResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListSceneItemsRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListSceneItemsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListScenesRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListScenesResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ListUmengAppkeysResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ModifyDataSourceResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ModifyDiversifyResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ModifyExposureSettingsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ModifyInstanceResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ModifyItemsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ModifyMixResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ModifyRuleResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ModifySceneResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\PublishRuleRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\PublishRuleResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\PushDocumentResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\PushInterventionResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\QueryDataMessageRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\QueryDataMessageResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\QueryDataMessageStatisticsRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\QueryDataMessageStatisticsResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\QueryExceptionHistoryRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\QueryExceptionHistoryResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\QueryRawDataRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\QueryRawDataResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\QuerySingleAggregationReportResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\QuerySingleReportRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\QuerySingleReportResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\QuerySyncReportAggregationRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\QuerySyncReportAggregationResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\RecommendHeaders;
use AlibabaCloud\SDK\Airec\V20181012\Models\RecommendRequest;
use AlibabaCloud\SDK\Airec\V20181012\Models\RecommendResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\RunInstanceResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\StopDataSetResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\UpgradeInstanceResponse;
use AlibabaCloud\SDK\Airec\V20181012\Models\ValidateInstanceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Airec extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('airec', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string $InstanceId
     * @param string $VersionId
     *
     * @return AttachDatasetResponse
     */
    public function attachDataset($InstanceId, $VersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->attachDatasetWithOptions($InstanceId, $VersionId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $VersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return AttachDatasetResponse
     */
    public function attachDatasetWithOptions($InstanceId, $VersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return AttachDatasetResponse::fromMap($this->doROARequest('AttachDataset', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/dataSets/{VersionId}/actions/current', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return CreateDiversifyResponse
     */
    public function createDiversify($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDiversifyWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateDiversifyResponse
     */
    public function createDiversifyWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateDiversifyResponse::fromMap($this->doROARequest('CreateDiversify', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/diversifies', 'json', $req, $runtime));
    }

    /**
     * @return CreateInstanceResponse
     */
    public function createInstance()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateInstanceResponse::fromMap($this->doROARequest('CreateInstance', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return CreateMixResponse
     */
    public function createMix($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMixWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateMixResponse
     */
    public function createMixWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateMixResponse::fromMap($this->doROARequest('CreateMix', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/mixes', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return CreateRuleResponse
     */
    public function createRule($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createRuleWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateRuleResponse
     */
    public function createRuleWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateRuleResponse::fromMap($this->doROARequest('CreateRule', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/rules', 'json', $req, $runtime));
    }

    /**
     * @param string             $InstanceId
     * @param CreateSceneRequest $request
     *
     * @return CreateSceneResponse
     */
    public function createScene($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSceneWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string             $InstanceId
     * @param CreateSceneRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSceneResponse
     */
    public function createSceneWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dryRun)) {
            @$query['DryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateSceneResponse::fromMap($this->doROARequest('CreateScene', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/scenes', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $VersionId
     *
     * @return DeleteDataSetResponse
     */
    public function deleteDataSet($InstanceId, $VersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataSetWithOptions($InstanceId, $VersionId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $VersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDataSetResponse
     */
    public function deleteDataSetWithOptions($InstanceId, $VersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteDataSetResponse::fromMap($this->doROARequest('DeleteDataSet', '2018-10-12', 'HTTPS', 'DELETE', 'AK', '/openapi/instances/' . $InstanceId . '/dataSets/{VersionId}', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $Name
     *
     * @return DeleteDiversifyResponse
     */
    public function deleteDiversify($InstanceId, $Name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDiversifyWithOptions($InstanceId, $Name, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $Name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDiversifyResponse
     */
    public function deleteDiversifyWithOptions($InstanceId, $Name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteDiversifyResponse::fromMap($this->doROARequest('DeleteDiversify', '2018-10-12', 'HTTPS', 'DELETE', 'AK', '/openapi/instances/' . $InstanceId . '/diversifies/{Name}', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $Name
     *
     * @return DeleteMixResponse
     */
    public function deleteMix($InstanceId, $Name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMixWithOptions($InstanceId, $Name, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $Name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteMixResponse
     */
    public function deleteMixWithOptions($InstanceId, $Name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteMixResponse::fromMap($this->doROARequest('DeleteMix', '2018-10-12', 'HTTPS', 'DELETE', 'AK', '/openapi/instances/' . $InstanceId . '/mixes/{Name}', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $SceneId
     *
     * @return DeleteSceneResponse
     */
    public function deleteScene($InstanceId, $SceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSceneWithOptions($InstanceId, $SceneId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $SceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSceneResponse
     */
    public function deleteSceneWithOptions($InstanceId, $SceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteSceneResponse::fromMap($this->doROARequest('DeleteScene', '2018-10-12', 'HTTPS', 'DELETE', 'AK', '/openapi/instances/' . $InstanceId . '/scenes/{SceneId}', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $VersionId
     *
     * @return DescribeDataSetMessageResponse
     */
    public function describeDataSetMessage($InstanceId, $VersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDataSetMessageWithOptions($InstanceId, $VersionId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $VersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDataSetMessageResponse
     */
    public function describeDataSetMessageWithOptions($InstanceId, $VersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeDataSetMessageResponse::fromMap($this->doROARequest('DescribeDataSetMessage', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dataSets/{VersionId}/messages', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $VersionId
     *
     * @return DescribeDataSetReportResponse
     */
    public function describeDataSetReport($InstanceId, $VersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDataSetReportWithOptions($InstanceId, $VersionId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $VersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDataSetReportResponse
     */
    public function describeDataSetReportWithOptions($InstanceId, $VersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeDataSetReportResponse::fromMap($this->doROARequest('DescribeDataSetReport', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dataSets/{VersionId}/report', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $Name
     *
     * @return DescribeDiversifyResponse
     */
    public function describeDiversify($InstanceId, $Name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDiversifyWithOptions($InstanceId, $Name, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $Name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDiversifyResponse
     */
    public function describeDiversifyWithOptions($InstanceId, $Name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeDiversifyResponse::fromMap($this->doROARequest('DescribeDiversify', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/diversifies/{Name}', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return DescribeExposureSettingsResponse
     */
    public function describeExposureSettings($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeExposureSettingsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeExposureSettingsResponse
     */
    public function describeExposureSettingsWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeExposureSettingsResponse::fromMap($this->doROARequest('DescribeExposureSettings', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/exposure-settings', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInstanceResponse
     */
    public function describeInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeInstanceResponse::fromMap($this->doROARequest('DescribeInstance', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $Name
     *
     * @return DescribeMixResponse
     */
    public function describeMix($InstanceId, $Name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeMixWithOptions($InstanceId, $Name, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $Name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeMixResponse
     */
    public function describeMixWithOptions($InstanceId, $Name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeMixResponse::fromMap($this->doROARequest('DescribeMix', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/mixes/{Name}', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return DescribeQuotaResponse
     */
    public function describeQuota($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeQuotaWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeQuotaResponse
     */
    public function describeQuotaWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeQuotaResponse::fromMap($this->doROARequest('DescribeQuota', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/quota', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeRegionsResponse::fromMap($this->doROARequest('DescribeRegions', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/configurations/regions', 'json', $req, $runtime));
    }

    /**
     * @param string              $InstanceId
     * @param string              $RuleId
     * @param DescribeRuleRequest $request
     *
     * @return DescribeRuleResponse
     */
    public function describeRule($InstanceId, $RuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRuleWithOptions($InstanceId, $RuleId, $request, $headers, $runtime);
    }

    /**
     * @param string              $InstanceId
     * @param string              $RuleId
     * @param DescribeRuleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeRuleResponse
     */
    public function describeRuleWithOptions($InstanceId, $RuleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            @$query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            @$query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeRuleResponse::fromMap($this->doROARequest('DescribeRule', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/rules/{RuleId}', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $SceneId
     *
     * @return DescribeSceneResponse
     */
    public function describeScene($InstanceId, $SceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSceneWithOptions($InstanceId, $SceneId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $SceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSceneResponse
     */
    public function describeSceneWithOptions($InstanceId, $SceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeSceneResponse::fromMap($this->doROARequest('DescribeScene', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/scenes/{SceneId}', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $SceneId
     *
     * @return DescribeSceneThroughputResponse
     */
    public function describeSceneThroughput($InstanceId, $SceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSceneThroughputWithOptions($InstanceId, $SceneId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $SceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSceneThroughputResponse
     */
    public function describeSceneThroughputWithOptions($InstanceId, $SceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DescribeSceneThroughputResponse::fromMap($this->doROARequest('DescribeSceneThroughput', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/scenes/{SceneId}/throughput', 'json', $req, $runtime));
    }

    /**
     * @param string                          $InstanceId
     * @param DescribeSyncReportDetailRequest $request
     *
     * @return DescribeSyncReportDetailResponse
     */
    public function describeSyncReportDetail($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSyncReportDetailWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $InstanceId
     * @param DescribeSyncReportDetailRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSyncReportDetailResponse
     */
    public function describeSyncReportDetailWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->levelType)) {
            @$query['LevelType'] = $request->levelType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeSyncReportDetailResponse::fromMap($this->doROARequest('DescribeSyncReportDetail', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/sync-reports/detail', 'json', $req, $runtime));
    }

    /**
     * @param string                            $InstanceId
     * @param DescribeSyncReportOutliersRequest $request
     *
     * @return DescribeSyncReportOutliersResponse
     */
    public function describeSyncReportOutliers($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSyncReportOutliersWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $InstanceId
     * @param DescribeSyncReportOutliersRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeSyncReportOutliersResponse
     */
    public function describeSyncReportOutliersWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->key)) {
            @$query['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->levelType)) {
            @$query['LevelType'] = $request->levelType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeSyncReportOutliersResponse::fromMap($this->doROARequest('DescribeSyncReportOutliers', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/sync-reports/outliers', 'json', $req, $runtime));
    }

    /**
     * @param string                     $InstanceId
     * @param DescribeUserMetricsRequest $request
     *
     * @return DescribeUserMetricsResponse
     */
    public function describeUserMetrics($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserMetricsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $InstanceId
     * @param DescribeUserMetricsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeUserMetricsResponse
     */
    public function describeUserMetricsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricType)) {
            @$query['MetricType'] = $request->metricType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DescribeUserMetricsResponse::fromMap($this->doROARequest('DescribeUserMetrics', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/metrics', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return DowngradeInstanceResponse
     */
    public function downgradeInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->downgradeInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DowngradeInstanceResponse
     */
    public function downgradeInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DowngradeInstanceResponse::fromMap($this->doROARequest('DowngradeInstance', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/downgrade', 'json', $req, $runtime));
    }

    /**
     * @param string               $InstanceId
     * @param ListDashboardRequest $request
     *
     * @return ListDashboardResponse
     */
    public function listDashboard($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string               $InstanceId
     * @param ListDashboardRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListDashboardResponse
     */
    public function listDashboardWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startDate)) {
            @$query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->endDate)) {
            @$query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->traceId)) {
            @$query['TraceId'] = $request->traceId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            @$query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDashboardResponse::fromMap($this->doROARequest('ListDashboard', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dashboard/statistics', 'json', $req, $runtime));
    }

    /**
     * @param string                      $InstanceId
     * @param ListDashboardDetailsRequest $request
     *
     * @return ListDashboardDetailsResponse
     */
    public function listDashboardDetails($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardDetailsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $InstanceId
     * @param ListDashboardDetailsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDashboardDetailsResponse
     */
    public function listDashboardDetailsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->traceIds)) {
            @$query['TraceIds'] = $request->traceIds;
        }
        if (!Utils::isUnset($request->sceneIds)) {
            @$query['SceneIds'] = $request->sceneIds;
        }
        if (!Utils::isUnset($request->metricType)) {
            @$query['MetricType'] = $request->metricType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDashboardDetailsResponse::fromMap($this->doROARequest('ListDashboardDetails', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dashboard/details', 'json', $req, $runtime));
    }

    /**
     * @param string                           $InstanceId
     * @param ListDashboardDetailsFlowsRequest $request
     *
     * @return ListDashboardDetailsFlowsResponse
     */
    public function listDashboardDetailsFlows($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardDetailsFlowsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $InstanceId
     * @param ListDashboardDetailsFlowsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDashboardDetailsFlowsResponse
     */
    public function listDashboardDetailsFlowsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->traceIds)) {
            @$query['TraceIds'] = $request->traceIds;
        }
        if (!Utils::isUnset($request->sceneIds)) {
            @$query['SceneIds'] = $request->sceneIds;
        }
        if (!Utils::isUnset($request->metricType)) {
            @$query['MetricType'] = $request->metricType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDashboardDetailsFlowsResponse::fromMap($this->doROARequest('ListDashboardDetailsFlows', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dashboard/details/flows', 'json', $req, $runtime));
    }

    /**
     * @param string                      $InstanceId
     * @param ListDashboardMetricsRequest $request
     *
     * @return ListDashboardMetricsResponse
     */
    public function listDashboardMetrics($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardMetricsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $InstanceId
     * @param ListDashboardMetricsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDashboardMetricsResponse
     */
    public function listDashboardMetricsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricType)) {
            @$query['MetricType'] = $request->metricType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDashboardMetricsResponse::fromMap($this->doROARequest('ListDashboardMetrics', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dashboard/metrics', 'json', $req, $runtime));
    }

    /**
     * @param string                           $InstanceId
     * @param ListDashboardMetricsFlowsRequest $request
     *
     * @return ListDashboardMetricsFlowsResponse
     */
    public function listDashboardMetricsFlows($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardMetricsFlowsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                           $InstanceId
     * @param ListDashboardMetricsFlowsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDashboardMetricsFlowsResponse
     */
    public function listDashboardMetricsFlowsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricType)) {
            @$query['MetricType'] = $request->metricType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDashboardMetricsFlowsResponse::fromMap($this->doROARequest('ListDashboardMetricsFlows', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dashboard/metrics/flows', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ListDashboardParametersResponse
     */
    public function listDashboardParameters($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardParametersWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDashboardParametersResponse
     */
    public function listDashboardParametersWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListDashboardParametersResponse::fromMap($this->doROARequest('ListDashboardParameters', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dashboard/parameters', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ListDashboardUidResponse
     */
    public function listDashboardUid($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDashboardUidWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDashboardUidResponse
     */
    public function listDashboardUidWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListDashboardUidResponse::fromMap($this->doROARequest('ListDashboardUid', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dashboard/uid', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ListDataSetResponse
     */
    public function listDataSet($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSetWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDataSetResponse
     */
    public function listDataSetWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListDataSetResponse::fromMap($this->doROARequest('ListDataSet', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dataSets', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ListDataSourceResponse
     */
    public function listDataSource($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDataSourceResponse
     */
    public function listDataSourceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListDataSourceResponse::fromMap($this->doROARequest('ListDataSource', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/dataSources', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ListDiversifyResponse
     */
    public function listDiversify($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDiversifyWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListDiversifyResponse
     */
    public function listDiversifyWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListDiversifyResponse::fromMap($this->doROARequest('ListDiversify', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/diversifies', 'json', $req, $runtime));
    }

    /**
     * @param ListInstanceRequest $request
     *
     * @return ListInstanceResponse
     */
    public function listInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListInstanceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListInstanceResponse
     */
    public function listInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            @$query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['size'] = $request->size;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            @$query['ExpiredTime'] = $request->expiredTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListInstanceResponse::fromMap($this->doROARequest('ListInstance', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ListInstanceTaskResponse
     */
    public function listInstanceTask($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceTaskWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListInstanceTaskResponse
     */
    public function listInstanceTaskWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListInstanceTaskResponse::fromMap($this->doROARequest('ListInstanceTask', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/tasks', 'json', $req, $runtime));
    }

    /**
     * @param string           $InstanceId
     * @param ListItemsRequest $request
     *
     * @return ListItemsResponse
     */
    public function listItems($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listItemsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string           $InstanceId
     * @param ListItemsRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListItemsResponse
     */
    public function listItemsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListItemsResponse::fromMap($this->doROARequest('ListItems', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/items/actions/list', 'json', $req, $runtime));
    }

    /**
     * @param string          $InstanceId
     * @param ListLogsRequest $request
     *
     * @return ListLogsResponse
     */
    public function listLogs($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listLogsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string          $InstanceId
     * @param ListLogsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListLogsResponse
     */
    public function listLogsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->queryParams)) {
            @$query['QueryParams'] = $request->queryParams;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListLogsResponse::fromMap($this->doROARequest('ListLogs', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/logs', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ListMixResponse
     */
    public function listMix($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMixWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListMixResponse
     */
    public function listMixWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListMixResponse::fromMap($this->doROARequest('ListMix', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/mixes', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ListRuleConditionsResponse
     */
    public function listRuleConditions($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRuleConditionsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRuleConditionsResponse
     */
    public function listRuleConditionsWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListRuleConditionsResponse::fromMap($this->doROARequest('ListRuleConditions', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/rule-conditions', 'json', $req, $runtime));
    }

    /**
     * @param string           $InstanceId
     * @param ListRulesRequest $request
     *
     * @return ListRulesResponse
     */
    public function listRules($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRulesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string           $InstanceId
     * @param ListRulesRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListRulesResponse
     */
    public function listRulesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            @$query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            @$query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRulesResponse::fromMap($this->doROARequest('ListRules', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/rules', 'json', $req, $runtime));
    }

    /**
     * @param string               $InstanceId
     * @param ListRuleTasksRequest $request
     *
     * @return ListRuleTasksResponse
     */
    public function listRuleTasks($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRuleTasksWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string               $InstanceId
     * @param ListRuleTasksRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListRuleTasksResponse
     */
    public function listRuleTasksWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            @$query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListRuleTasksResponse::fromMap($this->doROARequest('ListRuleTasks', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/rule-tasks', 'json', $req, $runtime));
    }

    /**
     * @param string                $InstanceId
     * @param string                $SceneId
     * @param ListSceneItemsRequest $request
     *
     * @return ListSceneItemsResponse
     */
    public function listSceneItems($InstanceId, $SceneId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSceneItemsWithOptions($InstanceId, $SceneId, $request, $headers, $runtime);
    }

    /**
     * @param string                $InstanceId
     * @param string                $SceneId
     * @param ListSceneItemsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListSceneItemsResponse
     */
    public function listSceneItemsWithOptions($InstanceId, $SceneId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operationRuleId)) {
            @$query['OperationRuleId'] = $request->operationRuleId;
        }
        if (!Utils::isUnset($request->selectionRuleId)) {
            @$query['SelectionRuleId'] = $request->selectionRuleId;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->previewType)) {
            @$query['PreviewType'] = $request->previewType;
        }
        if (!Utils::isUnset($request->queryCount)) {
            @$query['QueryCount'] = $request->queryCount;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListSceneItemsResponse::fromMap($this->doROARequest('ListSceneItems', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/scenes/{SceneId}/items', 'json', $req, $runtime));
    }

    /**
     * @param string            $InstanceId
     * @param ListScenesRequest $request
     *
     * @return ListScenesResponse
     */
    public function listScenes($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listScenesWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string            $InstanceId
     * @param ListScenesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListScenesResponse
     */
    public function listScenesWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListScenesResponse::fromMap($this->doROARequest('ListScenes', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/scenes', 'json', $req, $runtime));
    }

    /**
     * @return ListUmengAppkeysResponse
     */
    public function listUmengAppkeys()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUmengAppkeysWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListUmengAppkeysResponse
     */
    public function listUmengAppkeysWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListUmengAppkeysResponse::fromMap($this->doROARequest('ListUmengAppkeys', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/umeng/appkeys', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $TableName
     *
     * @return ModifyDataSourceResponse
     */
    public function modifyDataSource($InstanceId, $TableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDataSourceWithOptions($InstanceId, $TableName, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $TableName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyDataSourceResponse
     */
    public function modifyDataSourceWithOptions($InstanceId, $TableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyDataSourceResponse::fromMap($this->doROARequest('ModifyDataSource', '2018-10-12', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/dataSources/{TableName}', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $Name
     *
     * @return ModifyDiversifyResponse
     */
    public function modifyDiversify($InstanceId, $Name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyDiversifyWithOptions($InstanceId, $Name, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $Name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyDiversifyResponse
     */
    public function modifyDiversifyWithOptions($InstanceId, $Name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyDiversifyResponse::fromMap($this->doROARequest('ModifyDiversify', '2018-10-12', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/diversifies/{Name}', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ModifyExposureSettingsResponse
     */
    public function modifyExposureSettings($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyExposureSettingsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyExposureSettingsResponse
     */
    public function modifyExposureSettingsWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyExposureSettingsResponse::fromMap($this->doROARequest('ModifyExposureSettings', '2018-10-12', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/exposure-settings', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyInstanceResponse::fromMap($this->doROARequest('ModifyInstance', '2018-10-12', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ModifyItemsResponse
     */
    public function modifyItems($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyItemsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyItemsResponse
     */
    public function modifyItemsWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyItemsResponse::fromMap($this->doROARequest('ModifyItems', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/items', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $Name
     *
     * @return ModifyMixResponse
     */
    public function modifyMix($InstanceId, $Name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyMixWithOptions($InstanceId, $Name, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $Name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyMixResponse
     */
    public function modifyMixWithOptions($InstanceId, $Name, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyMixResponse::fromMap($this->doROARequest('ModifyMix', '2018-10-12', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/mixes/{Name}', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $RuleId
     *
     * @return ModifyRuleResponse
     */
    public function modifyRule($InstanceId, $RuleId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyRuleWithOptions($InstanceId, $RuleId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $RuleId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyRuleResponse
     */
    public function modifyRuleWithOptions($InstanceId, $RuleId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyRuleResponse::fromMap($this->doROARequest('ModifyRule', '2018-10-12', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/rules/{RuleId}', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $SceneId
     *
     * @return ModifySceneResponse
     */
    public function modifyScene($InstanceId, $SceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifySceneWithOptions($InstanceId, $SceneId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $SceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifySceneResponse
     */
    public function modifySceneWithOptions($InstanceId, $SceneId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifySceneResponse::fromMap($this->doROARequest('ModifyScene', '2018-10-12', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/scenes/{SceneId}', 'json', $req, $runtime));
    }

    /**
     * @param string             $InstanceId
     * @param string             $RuleId
     * @param PublishRuleRequest $request
     *
     * @return PublishRuleResponse
     */
    public function publishRule($InstanceId, $RuleId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->publishRuleWithOptions($InstanceId, $RuleId, $request, $headers, $runtime);
    }

    /**
     * @param string             $InstanceId
     * @param string             $RuleId
     * @param PublishRuleRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return PublishRuleResponse
     */
    public function publishRuleWithOptions($InstanceId, $RuleId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ruleType)) {
            @$query['RuleType'] = $request->ruleType;
        }
        if (!Utils::isUnset($request->sceneId)) {
            @$query['SceneId'] = $request->sceneId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return PublishRuleResponse::fromMap($this->doROARequest('PublishRule', '2018-10-12', 'HTTPS', 'PUT', 'AK', '/openapi/instances/' . $InstanceId . '/rules/{RuleId}/actions/publish', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $TableName
     *
     * @return PushDocumentResponse
     */
    public function pushDocument($InstanceId, $TableName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushDocumentWithOptions($InstanceId, $TableName, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $TableName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PushDocumentResponse
     */
    public function pushDocumentWithOptions($InstanceId, $TableName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return PushDocumentResponse::fromMap($this->doROARequest('PushDocument', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/tables/{TableName}/actions/bulk', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return PushInterventionResponse
     */
    public function pushIntervention($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushInterventionWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PushInterventionResponse
     */
    public function pushInterventionWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return PushInterventionResponse::fromMap($this->doROARequest('PushIntervention', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/intervene', 'json', $req, $runtime));
    }

    /**
     * @param string                  $InstanceId
     * @param string                  $Table
     * @param QueryDataMessageRequest $request
     *
     * @return QueryDataMessageResponse
     */
    public function queryDataMessage($InstanceId, $Table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDataMessageWithOptions($InstanceId, $Table, $request, $headers, $runtime);
    }

    /**
     * @param string                  $InstanceId
     * @param string                  $Table
     * @param QueryDataMessageRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryDataMessageResponse
     */
    public function queryDataMessageWithOptions($InstanceId, $Table, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->cmdType)) {
            @$query['CmdType'] = $request->cmdType;
        }
        if (!Utils::isUnset($request->itemId)) {
            @$query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itemType)) {
            @$query['ItemType'] = $request->itemType;
        }
        if (!Utils::isUnset($request->userId)) {
            @$query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userType)) {
            @$query['UserType'] = $request->userType;
        }
        if (!Utils::isUnset($request->page)) {
            @$query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            @$query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->traceId)) {
            @$query['TraceId'] = $request->traceId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            @$query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->bhvType)) {
            @$query['BhvType'] = $request->bhvType;
        }
        if (!Utils::isUnset($request->messageSource)) {
            @$query['MessageSource'] = $request->messageSource;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryDataMessageResponse::fromMap($this->doROARequest('QueryDataMessage', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/tables/{Table}/data-message', 'json', $req, $runtime));
    }

    /**
     * @param string                            $InstanceId
     * @param string                            $Table
     * @param QueryDataMessageStatisticsRequest $request
     *
     * @return QueryDataMessageStatisticsResponse
     */
    public function queryDataMessageStatistics($InstanceId, $Table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryDataMessageStatisticsWithOptions($InstanceId, $Table, $request, $headers, $runtime);
    }

    /**
     * @param string                            $InstanceId
     * @param string                            $Table
     * @param QueryDataMessageStatisticsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryDataMessageStatisticsResponse
     */
    public function queryDataMessageStatisticsWithOptions($InstanceId, $Table, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->cmdType)) {
            @$query['CmdType'] = $request->cmdType;
        }
        if (!Utils::isUnset($request->itemId)) {
            @$query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itemType)) {
            @$query['ItemType'] = $request->itemType;
        }
        if (!Utils::isUnset($request->userId)) {
            @$query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userType)) {
            @$query['UserType'] = $request->userType;
        }
        if (!Utils::isUnset($request->traceId)) {
            @$query['TraceId'] = $request->traceId;
        }
        if (!Utils::isUnset($request->sceneId)) {
            @$query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->bhvType)) {
            @$query['BhvType'] = $request->bhvType;
        }
        if (!Utils::isUnset($request->messageSource)) {
            @$query['MessageSource'] = $request->messageSource;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryDataMessageStatisticsResponse::fromMap($this->doROARequest('QueryDataMessageStatistics', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/tables/{Table}/data-message-statistics', 'json', $req, $runtime));
    }

    /**
     * @param string                       $InstanceId
     * @param QueryExceptionHistoryRequest $request
     *
     * @return QueryExceptionHistoryResponse
     */
    public function queryExceptionHistory($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryExceptionHistoryWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $InstanceId
     * @param QueryExceptionHistoryRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QueryExceptionHistoryResponse
     */
    public function queryExceptionHistoryWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryExceptionHistoryResponse::fromMap($this->doROARequest('QueryExceptionHistory', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/sync-reports/exception-history', 'json', $req, $runtime));
    }

    /**
     * @param string              $InstanceId
     * @param string              $Table
     * @param QueryRawDataRequest $request
     *
     * @return QueryRawDataResponse
     */
    public function queryRawData($InstanceId, $Table, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryRawDataWithOptions($InstanceId, $Table, $request, $headers, $runtime);
    }

    /**
     * @param string              $InstanceId
     * @param string              $Table
     * @param QueryRawDataRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return QueryRawDataResponse
     */
    public function queryRawDataWithOptions($InstanceId, $Table, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->itemId)) {
            @$query['ItemId'] = $request->itemId;
        }
        if (!Utils::isUnset($request->itemType)) {
            @$query['ItemType'] = $request->itemType;
        }
        if (!Utils::isUnset($request->userId)) {
            @$query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userType)) {
            @$query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryRawDataResponse::fromMap($this->doROARequest('QueryRawData', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/tables/{Table}/raw-data', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return QuerySingleAggregationReportResponse
     */
    public function querySingleAggregationReport($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySingleAggregationReportWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return QuerySingleAggregationReportResponse
     */
    public function querySingleAggregationReportWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return QuerySingleAggregationReportResponse::fromMap($this->doROARequest('QuerySingleAggregationReport', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/sync-reports/single-aggregation-report', 'json', $req, $runtime));
    }

    /**
     * @param string                   $InstanceId
     * @param QuerySingleReportRequest $request
     *
     * @return QuerySingleReportResponse
     */
    public function querySingleReport($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySingleReportWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $InstanceId
     * @param QuerySingleReportRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QuerySingleReportResponse
     */
    public function querySingleReportWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reportType)) {
            @$query['ReportType'] = $request->reportType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QuerySingleReportResponse::fromMap($this->doROARequest('QuerySingleReport', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/sync-reports/single-report', 'json', $req, $runtime));
    }

    /**
     * @param string                            $InstanceId
     * @param QuerySyncReportAggregationRequest $request
     *
     * @return QuerySyncReportAggregationResponse
     */
    public function querySyncReportAggregation($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->querySyncReportAggregationWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                            $InstanceId
     * @param QuerySyncReportAggregationRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QuerySyncReportAggregationResponse
     */
    public function querySyncReportAggregationWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->startTime)) {
            @$query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->endTime)) {
            @$query['EndTime'] = $request->endTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QuerySyncReportAggregationResponse::fromMap($this->doROARequest('QuerySyncReportAggregation', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/sync-reports/aggregation', 'json', $req, $runtime));
    }

    /**
     * @param string           $InstanceId
     * @param RecommendRequest $request
     *
     * @return RecommendResponse
     */
    public function recommend($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RecommendHeaders([]);

        return $this->recommendWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string           $InstanceId
     * @param RecommendRequest $request
     * @param RecommendHeaders $headers
     * @param RuntimeOptions   $runtime
     *
     * @return RecommendResponse
     */
    public function recommendWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sceneId)) {
            @$query['SceneId'] = $request->sceneId;
        }
        if (!Utils::isUnset($request->userId)) {
            @$query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->ip)) {
            @$query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->imei)) {
            @$query['Imei'] = $request->imei;
        }
        if (!Utils::isUnset($request->returnCount)) {
            @$query['ReturnCount'] = $request->returnCount;
        }
        if (!Utils::isUnset($request->items)) {
            @$query['Items'] = $request->items;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->regionId)) {
            @$realHeaders['RegionId'] = $headers->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RecommendResponse::fromMap($this->doROARequest('Recommend', '2018-10-12', 'HTTPS', 'GET', 'AK', '/openapi/instances/' . $InstanceId . '/actions/recommend', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return RunInstanceResponse
     */
    public function runInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->runInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RunInstanceResponse
     */
    public function runInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return RunInstanceResponse::fromMap($this->doROARequest('RunInstance', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/import', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $VersionId
     *
     * @return StopDataSetResponse
     */
    public function stopDataSet($InstanceId, $VersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopDataSetWithOptions($InstanceId, $VersionId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $VersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopDataSetResponse
     */
    public function stopDataSetWithOptions($InstanceId, $VersionId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return StopDataSetResponse::fromMap($this->doROARequest('StopDataSet', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/dataSets/{VersionId}/actions/stop', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return UpgradeInstanceResponse
     */
    public function upgradeInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->upgradeInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpgradeInstanceResponse
     */
    public function upgradeInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return UpgradeInstanceResponse::fromMap($this->doROARequest('UpgradeInstance', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/upgrade', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ValidateInstanceResponse
     */
    public function validateInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ValidateInstanceResponse
     */
    public function validateInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ValidateInstanceResponse::fromMap($this->doROARequest('ValidateInstance', '2018-10-12', 'HTTPS', 'POST', 'AK', '/openapi/instances/' . $InstanceId . '/actions/validate', 'json', $req, $runtime));
    }
}
