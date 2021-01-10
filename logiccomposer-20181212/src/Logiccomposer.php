<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\AbolishFlowRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\AbolishFlowResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\CloneFlowRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\CloneFlowResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\CreateFlowRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\CreateFlowResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DeleteFlowRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DeleteFlowResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DeployFlowRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DeployFlowResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeAccountSummaryResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorAttributeRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorAttributeResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorCapabilityRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorCapabilityResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeFlowMetricRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeFlowMetricResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeFlowRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeFlowResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeFlowTemplateRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeFlowTemplateResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeInvocationLogResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeMetricDetailRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeMetricDetailResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DisableFlowRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DisableFlowResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\EnableFlowRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\EnableFlowResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\InvokeFlowRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\InvokeFlowResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListConnectorsRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListConnectorsResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListConnectorTriggersRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListConnectorTriggersResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowConnectionsRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowConnectionsResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowTemplateRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowTemplateResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowTriggersRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowTriggersResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowVersionRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowVersionResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListInvocationLogsRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListInvocationLogsResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListTagResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ModifyFlowRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ModifyFlowResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\RollBackFlowRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\RollBackFlowResponse;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\UpdateConnectionRequest;
use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\UpdateConnectionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Logiccomposer extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('logiccomposer', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AbolishFlowRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AbolishFlowResponse
     */
    public function abolishFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AbolishFlowResponse::fromMap($this->doRPCRequest('AbolishFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AbolishFlowRequest $request
     *
     * @return AbolishFlowResponse
     */
    public function abolishFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->abolishFlowWithOptions($request, $runtime);
    }

    /**
     * @param CloneFlowRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CloneFlowResponse
     */
    public function cloneFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CloneFlowResponse::fromMap($this->doRPCRequest('CloneFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CloneFlowRequest $request
     *
     * @return CloneFlowResponse
     */
    public function cloneFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneFlowWithOptions($request, $runtime);
    }

    /**
     * @param CreateFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateFlowResponse
     */
    public function createFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFlowResponse::fromMap($this->doRPCRequest('CreateFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFlowRequest $request
     *
     * @return CreateFlowResponse
     */
    public function createFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFlowWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFlowResponse::fromMap($this->doRPCRequest('DeleteFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFlowRequest $request
     *
     * @return DeleteFlowResponse
     */
    public function deleteFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFlowWithOptions($request, $runtime);
    }

    /**
     * @param DeployFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeployFlowResponse
     */
    public function deployFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeployFlowResponse::fromMap($this->doRPCRequest('DeployFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeployFlowRequest $request
     *
     * @return DeployFlowResponse
     */
    public function deployFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployFlowWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAccountSummaryResponse
     */
    public function describeAccountSummaryWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeAccountSummaryResponse::fromMap($this->doRPCRequest('DescribeAccountSummary', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeAccountSummaryResponse
     */
    public function describeAccountSummary()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountSummaryWithOptions($runtime);
    }

    /**
     * @param DescribeConnectorAttributeRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeConnectorAttributeResponse
     */
    public function describeConnectorAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeConnectorAttributeResponse::fromMap($this->doRPCRequest('DescribeConnectorAttribute', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeConnectorAttributeRequest $request
     *
     * @return DescribeConnectorAttributeResponse
     */
    public function describeConnectorAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConnectorAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeConnectorCapabilityRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeConnectorCapabilityResponse
     */
    public function describeConnectorCapabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeConnectorCapabilityResponse::fromMap($this->doRPCRequest('DescribeConnectorCapability', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeConnectorCapabilityRequest $request
     *
     * @return DescribeConnectorCapabilityResponse
     */
    public function describeConnectorCapability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConnectorCapabilityWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeFlowResponse
     */
    public function describeFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowResponse::fromMap($this->doRPCRequest('DescribeFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowRequest $request
     *
     * @return DescribeFlowResponse
     */
    public function describeFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowMetricRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFlowMetricResponse
     */
    public function describeFlowMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowMetricResponse::fromMap($this->doRPCRequest('DescribeFlowMetric', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowMetricRequest $request
     *
     * @return DescribeFlowMetricResponse
     */
    public function describeFlowMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowMetricWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFlowTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeFlowTemplateResponse
     */
    public function describeFlowTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeFlowTemplateResponse::fromMap($this->doRPCRequest('DescribeFlowTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeFlowTemplateRequest $request
     *
     * @return DescribeFlowTemplateResponse
     */
    public function describeFlowTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInvocationLogRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInvocationLogResponse
     */
    public function describeInvocationLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInvocationLogResponse::fromMap($this->doRPCRequest('DescribeInvocationLog', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInvocationLogRequest $request
     *
     * @return DescribeInvocationLogResponse
     */
    public function describeInvocationLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationLogWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMetricDetailRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeMetricDetailResponse
     */
    public function describeMetricDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMetricDetailResponse::fromMap($this->doRPCRequest('DescribeMetricDetail', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMetricDetailRequest $request
     *
     * @return DescribeMetricDetailResponse
     */
    public function describeMetricDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricDetailWithOptions($request, $runtime);
    }

    /**
     * @param DisableFlowRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DisableFlowResponse
     */
    public function disableFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableFlowResponse::fromMap($this->doRPCRequest('DisableFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableFlowRequest $request
     *
     * @return DisableFlowResponse
     */
    public function disableFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableFlowWithOptions($request, $runtime);
    }

    /**
     * @param EnableFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return EnableFlowResponse
     */
    public function enableFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableFlowResponse::fromMap($this->doRPCRequest('EnableFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableFlowRequest $request
     *
     * @return EnableFlowResponse
     */
    public function enableFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableFlowWithOptions($request, $runtime);
    }

    /**
     * @param InvokeFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return InvokeFlowResponse
     */
    public function invokeFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InvokeFlowResponse::fromMap($this->doRPCRequest('InvokeFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InvokeFlowRequest $request
     *
     * @return InvokeFlowResponse
     */
    public function invokeFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeFlowWithOptions($request, $runtime);
    }

    /**
     * @param ListConnectorsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListConnectorsResponse
     */
    public function listConnectorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListConnectorsResponse::fromMap($this->doRPCRequest('ListConnectors', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListConnectorsRequest $request
     *
     * @return ListConnectorsResponse
     */
    public function listConnectors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectorsWithOptions($request, $runtime);
    }

    /**
     * @param ListConnectorTriggersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListConnectorTriggersResponse
     */
    public function listConnectorTriggersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListConnectorTriggersResponse::fromMap($this->doRPCRequest('ListConnectorTriggers', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListConnectorTriggersRequest $request
     *
     * @return ListConnectorTriggersResponse
     */
    public function listConnectorTriggers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listConnectorTriggersWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListFlowResponse
     */
    public function listFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowResponse::fromMap($this->doRPCRequest('ListFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowRequest $request
     *
     * @return ListFlowResponse
     */
    public function listFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowConnectionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListFlowConnectionsResponse
     */
    public function listFlowConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowConnectionsResponse::fromMap($this->doRPCRequest('ListFlowConnections', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowConnectionsRequest $request
     *
     * @return ListFlowConnectionsResponse
     */
    public function listFlowConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFlowTemplateResponse
     */
    public function listFlowTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowTemplateResponse::fromMap($this->doRPCRequest('ListFlowTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowTemplateRequest $request
     *
     * @return ListFlowTemplateResponse
     */
    public function listFlowTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowTriggersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListFlowTriggersResponse
     */
    public function listFlowTriggersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowTriggersResponse::fromMap($this->doRPCRequest('ListFlowTriggers', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowTriggersRequest $request
     *
     * @return ListFlowTriggersResponse
     */
    public function listFlowTriggers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowTriggersWithOptions($request, $runtime);
    }

    /**
     * @param ListFlowVersionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListFlowVersionResponse
     */
    public function listFlowVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFlowVersionResponse::fromMap($this->doRPCRequest('ListFlowVersion', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFlowVersionRequest $request
     *
     * @return ListFlowVersionResponse
     */
    public function listFlowVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFlowVersionWithOptions($request, $runtime);
    }

    /**
     * @param ListInvocationLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInvocationLogsResponse
     */
    public function listInvocationLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInvocationLogsResponse::fromMap($this->doRPCRequest('ListInvocationLogs', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListInvocationLogsRequest $request
     *
     * @return ListInvocationLogsResponse
     */
    public function listInvocationLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInvocationLogsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListTagResponse
     */
    public function listTagWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListTagResponse::fromMap($this->doRPCRequest('ListTag', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListTagResponse
     */
    public function listTag()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagWithOptions($runtime);
    }

    /**
     * @param ModifyFlowRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyFlowResponse
     */
    public function modifyFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyFlowResponse::fromMap($this->doRPCRequest('ModifyFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyFlowRequest $request
     *
     * @return ModifyFlowResponse
     */
    public function modifyFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFlowWithOptions($request, $runtime);
    }

    /**
     * @param RollBackFlowRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RollBackFlowResponse
     */
    public function rollBackFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RollBackFlowResponse::fromMap($this->doRPCRequest('RollBackFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RollBackFlowRequest $request
     *
     * @return RollBackFlowResponse
     */
    public function rollBackFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollBackFlowWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConnectionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateConnectionResponse
     */
    public function updateConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateConnectionResponse::fromMap($this->doRPCRequest('UpdateConnection', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateConnectionRequest $request
     *
     * @return UpdateConnectionResponse
     */
    public function updateConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnectionWithOptions($request, $runtime);
    }
}
