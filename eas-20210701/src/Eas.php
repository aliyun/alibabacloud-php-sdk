<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Eas\V20210701\Models\CommitServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateAppServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateAppServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateBenchmarkTaskRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateGatewayIntranetLinkedVpcRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateGatewayIntranetLinkedVpcResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateGatewayRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateGatewayResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceLogRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceLogResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceCronScalerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceCronScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceMirrorRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceMirrorResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayIntranetLinkedVpcRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayIntranetLinkedVpcResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceDLinkResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceLogResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceAutoScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceCronScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceLabelRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceLabelResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceLabelShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceMirrorResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeBenchmarkTaskReportRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeBenchmarkTaskReportResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeGatewayResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeGroupResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeResourceDLinkResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeResourceLogResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceAutoScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceCronScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceDiagnosisResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceEventRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceEventResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceInstanceDiagnosisResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceLogRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceLogResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceMirrorResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DevelopServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DevelopServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListBenchmarkTaskRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayIntranetLinkedVpcResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGroupsRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGroupsResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstanceWorkerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstanceWorkerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceServicesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceServicesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourcesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourcesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceContainersResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServicesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServicesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServicesShrinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceVersionsRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceVersionsResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ReleaseServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ReleaseServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\RestartServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StartBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StartServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StopBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StopServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateAppServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateAppServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateBenchmarkTaskRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateGatewayRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateGatewayResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceDLinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceDLinkResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceInstanceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceInstanceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceCronScalerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceCronScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceInstanceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceInstanceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceLabelRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceLabelResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceMirrorRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceMirrorResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceSafetyLockRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceSafetyLockResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceVersionRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceVersionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Eas extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'            => 'pai-eas.cn-beijing.aliyuncs.com',
            'cn-zhangjiakou'        => 'pai-eas.cn-zhangjiakou.aliyuncs.com',
            'cn-hangzhou'           => 'pai-eas.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'           => 'pai-eas.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'           => 'pai-eas.cn-shenzhen.aliyuncs.com',
            'cn-hongkong'           => 'pai-eas.cn-hongkong.aliyuncs.com',
            'ap-southeast-1'        => 'pai-eas.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'pai-eas.ap-southeast-5.aliyuncs.com',
            'us-east-1'             => 'pai-eas.us-east-1.aliyuncs.com',
            'us-west-1'             => 'pai-eas.us-west-1.aliyuncs.com',
            'eu-central-1'          => 'pai-eas.eu-central-1.aliyuncs.com',
            'ap-south-1'            => 'pai-eas.ap-south-1.aliyuncs.com',
            'cn-shanghai-finance-1' => 'pai-eas.cn-shanghai-finance-1.aliyuncs.com',
            'cn-north-2-gov-1'      => 'pai-eas.cn-north-2-gov-1.aliyuncs.com',
            'cn-chengdu'            => 'pai-eas.cn-chengdu.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eas', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CommitServiceResponse
     */
    public function commitServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CommitService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/commit',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CommitServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return CommitServiceResponse
     */
    public function commitService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->commitServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param CreateAppServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateAppServiceResponse
     */
    public function createAppServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->quotaId)) {
            $query['QuotaId'] = $request->quotaId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $body['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->replicas)) {
            $body['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $body['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceSpec)) {
            $body['ServiceSpec'] = $request->serviceSpec;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAppService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/app_services',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAppServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppServiceRequest $request
     *
     * @return CreateAppServiceResponse
     */
    public function createAppService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateBenchmarkTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateBenchmarkTaskResponse
     */
    public function createBenchmarkTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateBenchmarkTask',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateBenchmarkTaskRequest $request
     *
     * @return CreateBenchmarkTaskResponse
     */
    public function createBenchmarkTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBenchmarkTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateGatewayRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateGatewayResponse
     */
    public function createGatewayWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        $body = [];
        if (!Utils::isUnset($request->enableInternet)) {
            $body['EnableInternet'] = $request->enableInternet;
        }
        if (!Utils::isUnset($request->enableIntranet)) {
            $body['EnableIntranet'] = $request->enableIntranet;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateGateway',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/gateways',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGatewayRequest $request
     *
     * @return CreateGatewayResponse
     */
    public function createGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                                $ClusterId
     * @param string                                $GatewayId
     * @param CreateGatewayIntranetLinkedVpcRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateGatewayIntranetLinkedVpcResponse
     */
    public function createGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGatewayIntranetLinkedVpc',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/gateways/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($GatewayId) . '/intranet_endpoint_linked_vpc',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateGatewayIntranetLinkedVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                $ClusterId
     * @param string                                $GatewayId
     * @param CreateGatewayIntranetLinkedVpcRequest $request
     *
     * @return CreateGatewayIntranetLinkedVpcResponse
     */
    public function createGatewayIntranetLinkedVpc($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * @param CreateResourceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateResourceResponse
     */
    public function createResourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoRenewal)) {
            $body['AutoRenewal'] = $request->autoRenewal;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->ecsInstanceCount)) {
            $body['EcsInstanceCount'] = $request->ecsInstanceCount;
        }
        if (!Utils::isUnset($request->ecsInstanceType)) {
            $body['EcsInstanceType'] = $request->ecsInstanceType;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->selfManagedResourceOptions)) {
            $body['SelfManagedResourceOptions'] = $request->selfManagedResourceOptions;
        }
        if (!Utils::isUnset($request->systemDiskSize)) {
            $body['SystemDiskSize'] = $request->systemDiskSize;
        }
        if (!Utils::isUnset($request->zone)) {
            $body['Zone'] = $request->zone;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResource',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateResourceRequest $request
     *
     * @return CreateResourceResponse
     */
    public function createResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param CreateResourceInstancesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateResourceInstancesResponse
     */
    public function createResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoRenewal)) {
            $body['AutoRenewal'] = $request->autoRenewal;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->ecsInstanceCount)) {
            $body['EcsInstanceCount'] = $request->ecsInstanceCount;
        }
        if (!Utils::isUnset($request->ecsInstanceType)) {
            $body['EcsInstanceType'] = $request->ecsInstanceType;
        }
        if (!Utils::isUnset($request->systemDiskSize)) {
            $body['SystemDiskSize'] = $request->systemDiskSize;
        }
        if (!Utils::isUnset($request->userData)) {
            $body['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->zone)) {
            $body['Zone'] = $request->zone;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceInstances',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateResourceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param CreateResourceInstancesRequest $request
     *
     * @return CreateResourceInstancesResponse
     */
    public function createResourceInstances($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $ClusterId
     * @param string                   $ResourceId
     * @param CreateResourceLogRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateResourceLogResponse
     */
    public function createResourceLogWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->logStore)) {
            $body['LogStore'] = $request->logStore;
        }
        if (!Utils::isUnset($request->projectName)) {
            $body['ProjectName'] = $request->projectName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceLog',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/log',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateResourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $ClusterId
     * @param string                   $ResourceId
     * @param CreateResourceLogRequest $request
     *
     * @return CreateResourceLogResponse
     */
    public function createResourceLog($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceLogWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @param CreateServiceRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateServiceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labels)) {
            $request->labelsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labels, 'Labels', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->develop)) {
            $query['Develop'] = $request->develop;
        }
        if (!Utils::isUnset($request->labelsShrink)) {
            $query['Labels'] = $request->labelsShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param CreateServiceAutoScalerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceAutoScalerResponse
     */
    public function createServiceAutoScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->behavior)) {
            $body['behavior'] = $request->behavior;
        }
        if (!Utils::isUnset($request->max)) {
            $body['max'] = $request->max;
        }
        if (!Utils::isUnset($request->min)) {
            $body['min'] = $request->min;
        }
        if (!Utils::isUnset($request->scaleStrategies)) {
            $body['scaleStrategies'] = $request->scaleStrategies;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceAutoScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/autoscaler',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceAutoScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param CreateServiceAutoScalerRequest $request
     *
     * @return CreateServiceAutoScalerResponse
     */
    public function createServiceAutoScaler($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceAutoScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param CreateServiceCronScalerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceCronScalerResponse
     */
    public function createServiceCronScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->excludeDates)) {
            $body['ExcludeDates'] = $request->excludeDates;
        }
        if (!Utils::isUnset($request->scaleJobs)) {
            $body['ScaleJobs'] = $request->scaleJobs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceCronScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/cronscaler',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceCronScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param CreateServiceCronScalerRequest $request
     *
     * @return CreateServiceCronScalerResponse
     */
    public function createServiceCronScaler($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceCronScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param CreateServiceMirrorRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return CreateServiceMirrorResponse
     */
    public function createServiceMirrorWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ratio)) {
            $body['Ratio'] = $request->ratio;
        }
        if (!Utils::isUnset($request->target)) {
            $body['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceMirror',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/mirror',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceMirrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param CreateServiceMirrorRequest $request
     *
     * @return CreateServiceMirrorResponse
     */
    public function createServiceMirror($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceMirrorWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBenchmarkTaskResponse
     */
    public function deleteBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteBenchmarkTask',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($TaskName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $TaskName
     *
     * @return DeleteBenchmarkTaskResponse
     */
    public function deleteBenchmarkTask($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $GatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGatewayWithOptions($ClusterId, $GatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteGateway',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/gateways/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($GatewayId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $GatewayId
     *
     * @return DeleteGatewayResponse
     */
    public function deleteGateway($ClusterId, $GatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayWithOptions($ClusterId, $GatewayId, $headers, $runtime);
    }

    /**
     * @param string                                $ClusterId
     * @param string                                $GatewayId
     * @param DeleteGatewayIntranetLinkedVpcRequest $request
     * @param string[]                              $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteGatewayIntranetLinkedVpcResponse
     */
    public function deleteGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGatewayIntranetLinkedVpc',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/gateways/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($GatewayId) . '/intranet_endpoint_linked_vpc',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteGatewayIntranetLinkedVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                $ClusterId
     * @param string                                $GatewayId
     * @param DeleteGatewayIntranetLinkedVpcRequest $request
     *
     * @return DeleteGatewayIntranetLinkedVpcResponse
     */
    public function deleteGatewayIntranetLinkedVpc($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceResponse
     */
    public function deleteResourceWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteResource',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DeleteResourceResponse
     */
    public function deleteResource($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceDLinkResponse
     */
    public function deleteResourceDLinkWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceDLink',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/dlink',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceDLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DeleteResourceDLinkResponse
     */
    public function deleteResourceDLink($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceDLinkWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param DeleteResourceInstancesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteResourceInstancesResponse
     */
    public function deleteResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allFailed)) {
            $query['AllFailed'] = $request->allFailed;
        }
        if (!Utils::isUnset($request->instanceList)) {
            $query['InstanceList'] = $request->instanceList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceInstances',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/instances',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param DeleteResourceInstancesRequest $request
     *
     * @return DeleteResourceInstancesResponse
     */
    public function deleteResourceInstances($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceLogResponse
     */
    public function deleteResourceLogWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceLog',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/log',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DeleteResourceLogResponse
     */
    public function deleteResourceLog($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceLogWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceAutoScalerResponse
     */
    public function deleteServiceAutoScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceAutoScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/autoscaler',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceAutoScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DeleteServiceAutoScalerResponse
     */
    public function deleteServiceAutoScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceAutoScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceCronScalerResponse
     */
    public function deleteServiceCronScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceCronScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/cronscaler',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceCronScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DeleteServiceCronScalerResponse
     */
    public function deleteServiceCronScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceCronScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param string                        $ClusterId
     * @param string                        $ServiceName
     * @param DeleteServiceInstancesRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteServiceInstancesResponse
     */
    public function deleteServiceInstancesWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->container)) {
            $query['Container'] = $request->container;
        }
        if (!Utils::isUnset($request->instanceList)) {
            $query['InstanceList'] = $request->instanceList;
        }
        if (!Utils::isUnset($request->softRestart)) {
            $query['SoftRestart'] = $request->softRestart;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceInstances',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/instances',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $ClusterId
     * @param string                        $ServiceName
     * @param DeleteServiceInstancesRequest $request
     *
     * @return DeleteServiceInstancesResponse
     */
    public function deleteServiceInstances($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceInstancesWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param DeleteServiceLabelRequest $tmpReq
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteServiceLabelResponse
     */
    public function deleteServiceLabelWithOptions($ClusterId, $ServiceName, $tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteServiceLabelShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->keys)) {
            $request->keysShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->keys, 'Keys', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->keysShrink)) {
            $query['Keys'] = $request->keysShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceLabel',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/label',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param DeleteServiceLabelRequest $request
     *
     * @return DeleteServiceLabelResponse
     */
    public function deleteServiceLabel($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceLabelWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceMirrorResponse
     */
    public function deleteServiceMirrorWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceMirror',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/mirror',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceMirrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DeleteServiceMirrorResponse
     */
    public function deleteServiceMirror($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceMirrorWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeBenchmarkTaskResponse
     */
    public function describeBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeBenchmarkTask',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($TaskName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $TaskName
     *
     * @return DescribeBenchmarkTaskResponse
     */
    public function describeBenchmarkTask($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * @param string                             $ClusterId
     * @param string                             $TaskName
     * @param DescribeBenchmarkTaskReportRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeBenchmarkTaskReportResponse
     */
    public function describeBenchmarkTaskReportWithOptions($ClusterId, $TaskName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reportType)) {
            $query['ReportType'] = $request->reportType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBenchmarkTaskReport',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($TaskName) . '/report',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBenchmarkTaskReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                             $ClusterId
     * @param string                             $TaskName
     * @param DescribeBenchmarkTaskReportRequest $request
     *
     * @return DescribeBenchmarkTaskReportResponse
     */
    public function describeBenchmarkTaskReport($ClusterId, $TaskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeBenchmarkTaskReportWithOptions($ClusterId, $TaskName, $request, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $GatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeGatewayResponse
     */
    public function describeGatewayWithOptions($ClusterId, $GatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeGateway',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/gateways/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($GatewayId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $GatewayId
     *
     * @return DescribeGatewayResponse
     */
    public function describeGateway($ClusterId, $GatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeGatewayWithOptions($ClusterId, $GatewayId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $GroupName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeGroupResponse
     */
    public function describeGroupWithOptions($ClusterId, $GroupName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeGroup',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/groups/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($GroupName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $GroupName
     *
     * @return DescribeGroupResponse
     */
    public function describeGroup($ClusterId, $GroupName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeGroupWithOptions($ClusterId, $GroupName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeResourceResponse
     */
    public function describeResourceWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeResource',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DescribeResourceResponse
     */
    public function describeResource($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourceWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeResourceDLinkResponse
     */
    public function describeResourceDLinkWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceDLink',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/dlink',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceDLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DescribeResourceDLinkResponse
     */
    public function describeResourceDLink($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourceDLinkWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeResourceLogResponse
     */
    public function describeResourceLogWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceLog',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/log',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DescribeResourceLogResponse
     */
    public function describeResourceLog($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourceLogWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceResponse
     */
    public function describeServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceResponse
     */
    public function describeService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceAutoScalerResponse
     */
    public function describeServiceAutoScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceAutoScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/autoscaler',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceAutoScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceAutoScalerResponse
     */
    public function describeServiceAutoScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceAutoScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceCronScalerResponse
     */
    public function describeServiceCronScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceCronScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/cronscaler',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceCronScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceCronScalerResponse
     */
    public function describeServiceCronScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceCronScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceDiagnosisResponse
     */
    public function describeServiceDiagnosisWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceDiagnosis',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/diagnosis',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceDiagnosisResponse
     */
    public function describeServiceDiagnosis($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceDiagnosisWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param DescribeServiceEventRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeServiceEventResponse
     */
    public function describeServiceEventWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceEvent',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/events',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param DescribeServiceEventRequest $request
     *
     * @return DescribeServiceEventResponse
     */
    public function describeServiceEvent($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceEventWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string         $InstanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceInstanceDiagnosisResponse
     */
    public function describeServiceInstanceDiagnosisWithOptions($ClusterId, $ServiceName, $InstanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceInstanceDiagnosis',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/instances/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/diagnosis',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceInstanceDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     * @param string $InstanceName
     *
     * @return DescribeServiceInstanceDiagnosisResponse
     */
    public function describeServiceInstanceDiagnosis($ClusterId, $ServiceName, $InstanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceInstanceDiagnosisWithOptions($ClusterId, $ServiceName, $InstanceName, $headers, $runtime);
    }

    /**
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param DescribeServiceLogRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeServiceLogResponse
     */
    public function describeServiceLogWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->containerName)) {
            $query['ContainerName'] = $request->containerName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->previous)) {
            $query['Previous'] = $request->previous;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceLog',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param DescribeServiceLogRequest $request
     *
     * @return DescribeServiceLogResponse
     */
    public function describeServiceLog($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceLogWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceMirrorResponse
     */
    public function describeServiceMirrorWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceMirror',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/mirror',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceMirrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceMirrorResponse
     */
    public function describeServiceMirror($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceMirrorWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param string                $ClusterId
     * @param string                $ServiceName
     * @param DevelopServiceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DevelopServiceResponse
     */
    public function developServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exit_)) {
            $query['Exit'] = $request->exit_;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DevelopService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/develop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DevelopServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $ClusterId
     * @param string                $ServiceName
     * @param DevelopServiceRequest $request
     *
     * @return DevelopServiceResponse
     */
    public function developService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->developServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param ListBenchmarkTaskRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListBenchmarkTaskResponse
     */
    public function listBenchmarkTaskWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBenchmarkTask',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBenchmarkTaskRequest $request
     *
     * @return ListBenchmarkTaskResponse
     */
    public function listBenchmarkTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBenchmarkTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $GatewayId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListGatewayIntranetLinkedVpcResponse
     */
    public function listGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListGatewayIntranetLinkedVpc',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/gateways/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($GatewayId) . '/intranet_endpoint_linked_vpc',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGatewayIntranetLinkedVpcResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $GatewayId
     *
     * @return ListGatewayIntranetLinkedVpcResponse
     */
    public function listGatewayIntranetLinkedVpc($ClusterId, $GatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $headers, $runtime);
    }

    /**
     * @param ListGroupsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListGroupsResponse
     */
    public function listGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListGroups',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/groups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListGroupsRequest $request
     *
     * @return ListGroupsResponse
     */
    public function listGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                            $ClusterId
     * @param string                            $ResourceId
     * @param string                            $InstanceName
     * @param ListResourceInstanceWorkerRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ListResourceInstanceWorkerResponse
     */
    public function listResourceInstanceWorkerWithOptions($ClusterId, $ResourceId, $InstanceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceInstanceWorker',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/instance/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/workers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceInstanceWorkerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $ClusterId
     * @param string                            $ResourceId
     * @param string                            $InstanceName
     * @param ListResourceInstanceWorkerRequest $request
     *
     * @return ListResourceInstanceWorkerResponse
     */
    public function listResourceInstanceWorker($ClusterId, $ResourceId, $InstanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceInstanceWorkerWithOptions($ClusterId, $ResourceId, $InstanceName, $request, $headers, $runtime);
    }

    /**
     * @param string                       $ClusterId
     * @param string                       $ResourceId
     * @param ListResourceInstancesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListResourceInstancesResponse
     */
    public function listResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceIP)) {
            $query['InstanceIP'] = $request->instanceIP;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceStatus)) {
            $query['InstanceStatus'] = $request->instanceStatus;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceInstances',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $ClusterId
     * @param string                       $ResourceId
     * @param ListResourceInstancesRequest $request
     *
     * @return ListResourceInstancesResponse
     */
    public function listResourceInstances($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $ResourceId
     * @param ListResourceServicesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListResourceServicesResponse
     */
    public function listResourceServicesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourceServices',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/services',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $ResourceId
     * @param ListResourceServicesRequest $request
     *
     * @return ListResourceServicesResponse
     */
    public function listResourceServices($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceServicesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @param ListResourcesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListResourcesResponse
     */
    public function listResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResources',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourcesRequest $request
     *
     * @return ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string         $InstanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListServiceContainersResponse
     */
    public function listServiceContainersWithOptions($ClusterId, $ServiceName, $InstanceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListServiceContainers',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/instances/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '/containers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceContainersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     * @param string $InstanceName
     *
     * @return ListServiceContainersResponse
     */
    public function listServiceContainers($ClusterId, $ServiceName, $InstanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceContainersWithOptions($ClusterId, $ServiceName, $InstanceName, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param ListServiceInstancesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstancesWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->hostIP)) {
            $query['HostIP'] = $request->hostIP;
        }
        if (!Utils::isUnset($request->instanceIP)) {
            $query['InstanceIP'] = $request->instanceIP;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceStatus)) {
            $query['InstanceStatus'] = $request->instanceStatus;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->isSpot)) {
            $query['IsSpot'] = $request->isSpot;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceInstances',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param ListServiceInstancesRequest $request
     *
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstances($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceInstancesWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param ListServiceVersionsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListServiceVersionsResponse
     */
    public function listServiceVersionsWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServiceVersions',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/versions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param ListServiceVersionsRequest $request
     *
     * @return ListServiceVersionsResponse
     */
    public function listServiceVersions($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceVersionsWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param ListServicesRequest $tmpReq
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListServicesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->label)) {
            $request->labelShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->label, 'Label', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->labelShrink)) {
            $query['Label'] = $request->labelShrink;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentServiceUid)) {
            $query['ParentServiceUid'] = $request->parentServiceUid;
        }
        if (!Utils::isUnset($request->resourceName)) {
            $query['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->serviceName)) {
            $query['ServiceName'] = $request->serviceName;
        }
        if (!Utils::isUnset($request->serviceStatus)) {
            $query['ServiceStatus'] = $request->serviceStatus;
        }
        if (!Utils::isUnset($request->serviceType)) {
            $query['ServiceType'] = $request->serviceType;
        }
        if (!Utils::isUnset($request->serviceUid)) {
            $query['ServiceUid'] = $request->serviceUid;
        }
        if (!Utils::isUnset($request->sort)) {
            $query['Sort'] = $request->sort;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListServices',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param string                $ClusterId
     * @param string                $ServiceName
     * @param ReleaseServiceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ReleaseServiceResponse
     */
    public function releaseServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->trafficState)) {
            $body['TrafficState'] = $request->trafficState;
        }
        if (!Utils::isUnset($request->weight)) {
            $body['Weight'] = $request->weight;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReleaseService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/release',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $ClusterId
     * @param string                $ServiceName
     * @param ReleaseServiceRequest $request
     *
     * @return ReleaseServiceResponse
     */
    public function releaseService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RestartServiceResponse
     */
    public function restartServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RestartService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/restart',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RestartServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return RestartServiceResponse
     */
    public function restartService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartBenchmarkTaskResponse
     */
    public function startBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartBenchmarkTask',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($TaskName) . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $TaskName
     *
     * @return StartBenchmarkTaskResponse
     */
    public function startBenchmarkTask($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartServiceResponse
     */
    public function startServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return StartServiceResponse
     */
    public function startService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopBenchmarkTaskResponse
     */
    public function stopBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopBenchmarkTask',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($TaskName) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $TaskName
     *
     * @return StopBenchmarkTaskResponse
     */
    public function stopBenchmarkTask($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopServiceResponse
     */
    public function stopServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return StopServiceResponse
     */
    public function stopService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @param string                  $ClusterId
     * @param string                  $ServiceName
     * @param UpdateAppServiceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateAppServiceResponse
     */
    public function updateAppServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->quotaId)) {
            $query['QuotaId'] = $request->quotaId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $body = [];
        if (!Utils::isUnset($request->appType)) {
            $body['AppType'] = $request->appType;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $body['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->replicas)) {
            $body['Replicas'] = $request->replicas;
        }
        if (!Utils::isUnset($request->serviceSpec)) {
            $body['ServiceSpec'] = $request->serviceSpec;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/app_services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAppServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $ClusterId
     * @param string                  $ServiceName
     * @param UpdateAppServiceRequest $request
     *
     * @return UpdateAppServiceResponse
     */
    public function updateAppService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string                     $ClusterId
     * @param string                     $TaskName
     * @param UpdateBenchmarkTaskRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateBenchmarkTaskResponse
     */
    public function updateBenchmarkTaskWithOptions($ClusterId, $TaskName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateBenchmarkTask',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($TaskName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $ClusterId
     * @param string                     $TaskName
     * @param UpdateBenchmarkTaskRequest $request
     *
     * @return UpdateBenchmarkTaskResponse
     */
    public function updateBenchmarkTask($ClusterId, $TaskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBenchmarkTaskWithOptions($ClusterId, $TaskName, $request, $headers, $runtime);
    }

    /**
     * @param string               $GatewayId
     * @param string               $ClusterId
     * @param UpdateGatewayRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateGatewayResponse
     */
    public function updateGatewayWithOptions($GatewayId, $ClusterId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->enableInternet)) {
            $body['EnableInternet'] = $request->enableInternet;
        }
        if (!Utils::isUnset($request->enableIntranet)) {
            $body['EnableIntranet'] = $request->enableIntranet;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $body['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateGateway',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/gateways/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($GatewayId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $GatewayId
     * @param string               $ClusterId
     * @param UpdateGatewayRequest $request
     *
     * @return UpdateGatewayResponse
     */
    public function updateGateway($GatewayId, $ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayWithOptions($GatewayId, $ClusterId, $request, $headers, $runtime);
    }

    /**
     * @param string                $ClusterId
     * @param string                $ResourceId
     * @param UpdateResourceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateResourceResponse
     */
    public function updateResourceWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceName)) {
            $body['ResourceName'] = $request->resourceName;
        }
        if (!Utils::isUnset($request->selfManagedResourceOptions)) {
            $body['SelfManagedResourceOptions'] = $request->selfManagedResourceOptions;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResource',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $ClusterId
     * @param string                $ResourceId
     * @param UpdateResourceRequest $request
     *
     * @return UpdateResourceResponse
     */
    public function updateResource($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $ClusterId
     * @param string                     $ResourceId
     * @param UpdateResourceDLinkRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateResourceDLinkResponse
     */
    public function updateResourceDLinkWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->destinationCIDRs)) {
            $body['DestinationCIDRs'] = $request->destinationCIDRs;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $body['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $body['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vSwitchIdList)) {
            $body['VSwitchIdList'] = $request->vSwitchIdList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceDLink',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/dlink',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceDLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $ClusterId
     * @param string                     $ResourceId
     * @param UpdateResourceDLinkRequest $request
     *
     * @return UpdateResourceDLinkResponse
     */
    public function updateResourceDLink($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceDLinkWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $ClusterId
     * @param string                        $ResourceId
     * @param string                        $InstanceId
     * @param UpdateResourceInstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateResourceInstanceResponse
     */
    public function updateResourceInstanceWithOptions($ClusterId, $ResourceId, $InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->action)) {
            $body['Action'] = $request->action;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResourceInstance',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ResourceId) . '/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $ClusterId
     * @param string                        $ResourceId
     * @param string                        $InstanceId
     * @param UpdateResourceInstanceRequest $request
     *
     * @return UpdateResourceInstanceResponse
     */
    public function updateResourceInstance($ClusterId, $ResourceId, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceInstanceWithOptions($ClusterId, $ResourceId, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string               $ClusterId
     * @param string               $ServiceName
     * @param UpdateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->updateType)) {
            $query['UpdateType'] = $request->updateType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $ClusterId
     * @param string               $ServiceName
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceAutoScalerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateServiceAutoScalerResponse
     */
    public function updateServiceAutoScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->behavior)) {
            $body['behavior'] = $request->behavior;
        }
        if (!Utils::isUnset($request->max)) {
            $body['max'] = $request->max;
        }
        if (!Utils::isUnset($request->min)) {
            $body['min'] = $request->min;
        }
        if (!Utils::isUnset($request->scaleStrategies)) {
            $body['scaleStrategies'] = $request->scaleStrategies;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceAutoScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/autoscaler',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceAutoScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceAutoScalerRequest $request
     *
     * @return UpdateServiceAutoScalerResponse
     */
    public function updateServiceAutoScaler($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceAutoScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceCronScalerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateServiceCronScalerResponse
     */
    public function updateServiceCronScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->excludeDates)) {
            $body['ExcludeDates'] = $request->excludeDates;
        }
        if (!Utils::isUnset($request->scaleJobs)) {
            $body['ScaleJobs'] = $request->scaleJobs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceCronScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/cronscaler',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceCronScalerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceCronScalerRequest $request
     *
     * @return UpdateServiceCronScalerResponse
     */
    public function updateServiceCronScaler($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceCronScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string                       $ClusterId
     * @param string                       $ServiceName
     * @param string                       $InstanceName
     * @param UpdateServiceInstanceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateServiceInstanceResponse
     */
    public function updateServiceInstanceWithOptions($ClusterId, $ServiceName, $InstanceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->isolate)) {
            $body['Isolate'] = $request->isolate;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceInstance',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/instances/' . OpenApiUtilClient::getEncodeParam($InstanceName) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $ClusterId
     * @param string                       $ServiceName
     * @param string                       $InstanceName
     * @param UpdateServiceInstanceRequest $request
     *
     * @return UpdateServiceInstanceResponse
     */
    public function updateServiceInstance($ClusterId, $ServiceName, $InstanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceInstanceWithOptions($ClusterId, $ServiceName, $InstanceName, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param UpdateServiceLabelRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateServiceLabelResponse
     */
    public function updateServiceLabelWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceLabel',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/label',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceLabelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param UpdateServiceLabelRequest $request
     *
     * @return UpdateServiceLabelResponse
     */
    public function updateServiceLabel($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceLabelWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param UpdateServiceMirrorRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateServiceMirrorResponse
     */
    public function updateServiceMirrorWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->ratio)) {
            $body['Ratio'] = $request->ratio;
        }
        if (!Utils::isUnset($request->target)) {
            $body['Target'] = $request->target;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceMirror',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/mirror',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceMirrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param UpdateServiceMirrorRequest $request
     *
     * @return UpdateServiceMirrorResponse
     */
    public function updateServiceMirror($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceMirrorWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceSafetyLockRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateServiceSafetyLockResponse
     */
    public function updateServiceSafetyLockWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->lock)) {
            $body['Lock'] = $request->lock;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceSafetyLock',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/lock',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceSafetyLockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceSafetyLockRequest $request
     *
     * @return UpdateServiceSafetyLockResponse
     */
    public function updateServiceSafetyLock($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceSafetyLockWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param UpdateServiceVersionRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateServiceVersionResponse
     */
    public function updateServiceVersionWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->version)) {
            $body['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceVersion',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/version',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param UpdateServiceVersionRequest $request
     *
     * @return UpdateServiceVersionResponse
     */
    public function updateServiceVersion($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceVersionWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }
}
