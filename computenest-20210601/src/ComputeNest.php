<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ContinueDeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ContinueDeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceShrinkRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DisableOperationServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DisableOperationServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\EnableOperationServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\EnableOperationServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListInuseServicesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListInuseServicesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceLogsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceLogsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class ComputeNest extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('computenest', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DeleteServiceInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteServiceInstancesResponse
     */
    public function deleteServiceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteServiceInstancesResponse::fromMap($this->doRPCRequest('DeleteServiceInstances', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteServiceInstancesRequest $request
     *
     * @return DeleteServiceInstancesResponse
     */
    public function deleteServiceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceInstancesWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceInstanceResponse
     */
    public function getServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetServiceInstanceResponse::fromMap($this->doRPCRequest('GetServiceInstance', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceInstanceRequest $request
     *
     * @return GetServiceInstanceResponse
     */
    public function getServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListServiceInstanceLogsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListServiceInstanceLogsResponse
     */
    public function listServiceInstanceLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListServiceInstanceLogsResponse::fromMap($this->doRPCRequest('ListServiceInstanceLogs', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListServiceInstanceLogsRequest $request
     *
     * @return ListServiceInstanceLogsResponse
     */
    public function listServiceInstanceLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceLogsWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceInstanceRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateServiceInstanceResponse
     */
    public function createServiceInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateServiceInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateServiceInstanceResponse::fromMap($this->doRPCRequest('CreateServiceInstance', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateServiceInstanceRequest $request
     *
     * @return CreateServiceInstanceResponse
     */
    public function createServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ContinueDeployServiceInstanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ContinueDeployServiceInstanceResponse
     */
    public function continueDeployServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ContinueDeployServiceInstanceResponse::fromMap($this->doRPCRequest('ContinueDeployServiceInstance', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ContinueDeployServiceInstanceRequest $request
     *
     * @return ContinueDeployServiceInstanceResponse
     */
    public function continueDeployServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continueDeployServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DisableOperationServiceInstanceRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DisableOperationServiceInstanceResponse
     */
    public function disableOperationServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableOperationServiceInstanceResponse::fromMap($this->doRPCRequest('DisableOperationServiceInstance', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableOperationServiceInstanceRequest $request
     *
     * @return DisableOperationServiceInstanceResponse
     */
    public function disableOperationServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableOperationServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeployServiceInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeployServiceInstanceResponse
     */
    public function deployServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeployServiceInstanceResponse::fromMap($this->doRPCRequest('DeployServiceInstance', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeployServiceInstanceRequest $request
     *
     * @return DeployServiceInstanceResponse
     */
    public function deployServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ListServiceInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListServiceInstancesResponse::fromMap($this->doRPCRequest('ListServiceInstances', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListServiceInstancesRequest $request
     *
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListPoliciesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPoliciesResponse::fromMap($this->doRPCRequest('ListPolicies', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPoliciesRequest $request
     *
     * @return ListPoliciesResponse
     */
    public function listPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param ListInuseServicesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListInuseServicesResponse
     */
    public function listInuseServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInuseServicesResponse::fromMap($this->doRPCRequest('ListInuseServices', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListInuseServicesRequest $request
     *
     * @return ListInuseServicesResponse
     */
    public function listInuseServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInuseServicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param EnableOperationServiceInstanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return EnableOperationServiceInstanceResponse
     */
    public function enableOperationServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableOperationServiceInstanceResponse::fromMap($this->doRPCRequest('EnableOperationServiceInstance', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableOperationServiceInstanceRequest $request
     *
     * @return EnableOperationServiceInstanceResponse
     */
    public function enableOperationServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableOperationServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetServiceResponse::fromMap($this->doRPCRequest('GetService', '2021-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceRequest $request
     *
     * @return GetServiceResponse
     */
    public function getService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceWithOptions($request, $runtime);
    }
}
