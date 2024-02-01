<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ContinueDeployServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ContinueDeployServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CreateServiceInstanceShrinkRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\DeleteServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceTemplateParameterConstraintsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceTemplateParameterConstraintsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceLogsRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceLogsResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceResourcesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstanceResourcesResponse;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
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
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2021-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->option)) {
            $query['Option'] = $request->option;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ContinueDeployServiceInstance',
            'version'     => '2021-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ContinueDeployServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($tmpReq->businessInfo)) {
            $request->businessInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->businessInfo, 'BusinessInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->businessInfoShrink)) {
            $query['BusinessInfo'] = $request->businessInfoShrink;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->commodity)) {
            $query['Commodity'] = $request->commodity;
        }
        if (!Utils::isUnset($request->contactGroup)) {
            $query['ContactGroup'] = $request->contactGroup;
        }
        if (!Utils::isUnset($request->dryRun)) {
            $query['DryRun'] = $request->dryRun;
        }
        if (!Utils::isUnset($request->enableInstanceOps)) {
            $query['EnableInstanceOps'] = $request->enableInstanceOps;
        }
        if (!Utils::isUnset($request->enableUserPrometheus)) {
            $query['EnableUserPrometheus'] = $request->enableUserPrometheus;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->operationMetadata)) {
            $query['OperationMetadata'] = $request->operationMetadata;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->specificationCode)) {
            $query['SpecificationCode'] = $request->specificationCode;
        }
        if (!Utils::isUnset($request->specificationName)) {
            $query['SpecificationName'] = $request->specificationName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->trialType)) {
            $query['TrialType'] = $request->trialType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceInstance',
            'version'     => '2021-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteServiceInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteServiceInstancesResponse
     */
    public function deleteServiceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceInstances',
            'version'     => '2021-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->marketInstanceId)) {
            $query['MarketInstanceId'] = $request->marketInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceInstance',
            'version'     => '2021-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetServiceTemplateParameterConstraintsRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return GetServiceTemplateParameterConstraintsResponse
     */
    public function getServiceTemplateParameterConstraintsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->deployRegionId)) {
            $query['DeployRegionId'] = $request->deployRegionId;
        }
        if (!Utils::isUnset($request->enablePrivateVpcConnection)) {
            $query['EnablePrivateVpcConnection'] = $request->enablePrivateVpcConnection;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->serviceVersion)) {
            $query['ServiceVersion'] = $request->serviceVersion;
        }
        if (!Utils::isUnset($request->specificationName)) {
            $query['SpecificationName'] = $request->specificationName;
        }
        if (!Utils::isUnset($request->templateName)) {
            $query['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->trialType)) {
            $query['TrialType'] = $request->trialType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetServiceTemplateParameterConstraints',
            'version'     => '2021-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetServiceTemplateParameterConstraintsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetServiceTemplateParameterConstraintsRequest $request
     *
     * @return GetServiceTemplateParameterConstraintsResponse
     */
    public function getServiceTemplateParameterConstraints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceTemplateParameterConstraintsWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->logSource)) {
            $query['LogSource'] = $request->logSource;
        }
        if (!Utils::isUnset($request->logstore)) {
            $query['Logstore'] = $request->logstore;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceInstanceLogs',
            'version'     => '2021-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServiceInstanceLogsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListServiceInstanceResourcesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListServiceInstanceResourcesResponse
     */
    public function listServiceInstanceResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expireTimeEnd)) {
            $query['ExpireTimeEnd'] = $request->expireTimeEnd;
        }
        if (!Utils::isUnset($request->expireTimeStart)) {
            $query['ExpireTimeStart'] = $request->expireTimeStart;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceARN)) {
            $query['ResourceARN'] = $request->resourceARN;
        }
        if (!Utils::isUnset($request->serviceInstanceId)) {
            $query['ServiceInstanceId'] = $request->serviceInstanceId;
        }
        if (!Utils::isUnset($request->serviceInstanceResourceType)) {
            $query['ServiceInstanceResourceType'] = $request->serviceInstanceResourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceInstanceResources',
            'version'     => '2021-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServiceInstanceResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServiceInstanceResourcesRequest $request
     *
     * @return ListServiceInstanceResourcesResponse
     */
    public function listServiceInstanceResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstanceResourcesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceInstances',
            'version'     => '2021-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
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
}
