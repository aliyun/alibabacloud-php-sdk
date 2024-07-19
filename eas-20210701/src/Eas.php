<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Eas\V20210701\Models\CloneServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CloneServiceResponse;
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
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeSpotDiscountHistoryRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeSpotDiscountHistoryResponse;
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
     * @summary Clones a service.
     *  *
     * @param string              $ClusterId
     * @param string              $ServiceName
     * @param CloneServiceRequest $request     CloneServiceRequest
     * @param string[]            $headers     map
     * @param RuntimeOptions      $runtime     runtime options for this request RuntimeOptions
     *
     * @return CloneServiceResponse CloneServiceResponse
     */
    public function cloneServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CloneService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . OpenApiUtilClient::getEncodeParam($ClusterId) . '/' . OpenApiUtilClient::getEncodeParam($ServiceName) . '/clone',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CloneServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Clones a service.
     *  *
     * @param string              $ClusterId
     * @param string              $ServiceName
     * @param CloneServiceRequest $request     CloneServiceRequest
     *
     * @return CloneServiceResponse CloneServiceResponse
     */
    public function cloneService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cloneServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Commits the Worker0 container in the custom container service and deploys the container as a new image.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return CommitServiceResponse CommitServiceResponse
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
     * @summary Commits the Worker0 container in the custom container service and deploys the container as a new image.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return CommitServiceResponse CommitServiceResponse
     */
    public function commitService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->commitServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Creates an application service.
     *  *
     * @param CreateAppServiceRequest $request CreateAppServiceRequest
     * @param string[]                $headers map
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppServiceResponse CreateAppServiceResponse
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
     * @summary Creates an application service.
     *  *
     * @param CreateAppServiceRequest $request CreateAppServiceRequest
     *
     * @return CreateAppServiceResponse CreateAppServiceResponse
     */
    public function createAppService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a stress testing task.
     *  *
     * @param CreateBenchmarkTaskRequest $request CreateBenchmarkTaskRequest
     * @param string[]                   $headers map
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBenchmarkTaskResponse CreateBenchmarkTaskResponse
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
     * @summary Creates a stress testing task.
     *  *
     * @param CreateBenchmarkTaskRequest $request CreateBenchmarkTaskRequest
     *
     * @return CreateBenchmarkTaskResponse CreateBenchmarkTaskResponse
     */
    public function createBenchmarkTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createBenchmarkTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates a private gateway. You can create a private gateway only in a self-managed resource group.
     *  *
     * @param CreateGatewayRequest $request CreateGatewayRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGatewayResponse CreateGatewayResponse
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
     * @summary Creates a private gateway. You can create a private gateway only in a self-managed resource group.
     *  *
     * @param CreateGatewayRequest $request CreateGatewayRequest
     *
     * @return CreateGatewayResponse CreateGatewayResponse
     */
    public function createGateway($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates an internal endpoint of a private gateway.
     *  *
     * @param string                                $ClusterId
     * @param string                                $GatewayId
     * @param CreateGatewayIntranetLinkedVpcRequest $request   CreateGatewayIntranetLinkedVpcRequest
     * @param string[]                              $headers   map
     * @param RuntimeOptions                        $runtime   runtime options for this request RuntimeOptions
     *
     * @return CreateGatewayIntranetLinkedVpcResponse CreateGatewayIntranetLinkedVpcResponse
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
     * @summary Creates an internal endpoint of a private gateway.
     *  *
     * @param string                                $ClusterId
     * @param string                                $GatewayId
     * @param CreateGatewayIntranetLinkedVpcRequest $request   CreateGatewayIntranetLinkedVpcRequest
     *
     * @return CreateGatewayIntranetLinkedVpcResponse CreateGatewayIntranetLinkedVpcResponse
     */
    public function createGatewayIntranetLinkedVpc($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a resource group.
     *  *
     * @description **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/144261.html) of Elastic Algorithm Service (EAS).
     *  *
     * @param CreateResourceRequest $request CreateResourceRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateResourceResponse CreateResourceResponse
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
     * @summary Creates a resource group.
     *  *
     * @description **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/144261.html) of Elastic Algorithm Service (EAS).
     *  *
     * @param CreateResourceRequest $request CreateResourceRequest
     *
     * @return CreateResourceResponse CreateResourceResponse
     */
    public function createResource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Creates instances in a dedicated resource group.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param CreateResourceInstancesRequest $request    CreateResourceInstancesRequest
     * @param string[]                       $headers    map
     * @param RuntimeOptions                 $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateResourceInstancesResponse CreateResourceInstancesResponse
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
     * @summary Creates instances in a dedicated resource group.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param CreateResourceInstancesRequest $request    CreateResourceInstancesRequest
     *
     * @return CreateResourceInstancesResponse CreateResourceInstancesResponse
     */
    public function createResourceInstances($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @summary Enables the LogShipper feature of Log Service for a resource group.
     *  *
     * @param string                   $ClusterId
     * @param string                   $ResourceId
     * @param CreateResourceLogRequest $request    CreateResourceLogRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateResourceLogResponse CreateResourceLogResponse
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
     * @summary Enables the LogShipper feature of Log Service for a resource group.
     *  *
     * @param string                   $ClusterId
     * @param string                   $ResourceId
     * @param CreateResourceLogRequest $request    CreateResourceLogRequest
     *
     * @return CreateResourceLogResponse CreateResourceLogResponse
     */
    public function createResourceLog($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createResourceLogWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @summary Creates a model service in Elastic Algorithm Service (EAS).
     *  *
     * @description **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/144261.html) of Elastic Algorithm Service (EAS).
     *  *
     * @param CreateServiceRequest $tmpReq  CreateServiceRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateServiceResponse CreateServiceResponse
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
     * @summary Creates a model service in Elastic Algorithm Service (EAS).
     *  *
     * @description **Before you call this operation, make sure that you are familiar with the [billing](https://help.aliyun.com/document_detail/144261.html) of Elastic Algorithm Service (EAS).
     *  *
     * @param CreateServiceRequest $request CreateServiceRequest
     *
     * @return CreateServiceResponse CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Enables the Autoscaler feature and creates an Autoscaler controller for a service.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param CreateServiceAutoScalerRequest $request     CreateServiceAutoScalerRequest
     * @param string[]                       $headers     map
     * @param RuntimeOptions                 $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreateServiceAutoScalerResponse CreateServiceAutoScalerResponse
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
     * @summary Enables the Autoscaler feature and creates an Autoscaler controller for a service.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param CreateServiceAutoScalerRequest $request     CreateServiceAutoScalerRequest
     *
     * @return CreateServiceAutoScalerResponse CreateServiceAutoScalerResponse
     */
    public function createServiceAutoScaler($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceAutoScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Enables the Cron Horizontal Pod Autoscaler (CronHPA) feature for a service.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param CreateServiceCronScalerRequest $request     CreateServiceCronScalerRequest
     * @param string[]                       $headers     map
     * @param RuntimeOptions                 $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreateServiceCronScalerResponse CreateServiceCronScalerResponse
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
     * @summary Enables the Cron Horizontal Pod Autoscaler (CronHPA) feature for a service.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param CreateServiceCronScalerRequest $request     CreateServiceCronScalerRequest
     *
     * @return CreateServiceCronScalerResponse CreateServiceCronScalerResponse
     */
    public function createServiceCronScaler($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceCronScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Enables the traffic mirroring feature for a service. After the feature is enabled, requests received by the service can be mirrored to another service.
     *  *
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param CreateServiceMirrorRequest $request     CreateServiceMirrorRequest
     * @param string[]                   $headers     map
     * @param RuntimeOptions             $runtime     runtime options for this request RuntimeOptions
     *
     * @return CreateServiceMirrorResponse CreateServiceMirrorResponse
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
     * @summary Enables the traffic mirroring feature for a service. After the feature is enabled, requests received by the service can be mirrored to another service.
     *  *
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param CreateServiceMirrorRequest $request     CreateServiceMirrorRequest
     *
     * @return CreateServiceMirrorResponse CreateServiceMirrorResponse
     */
    public function createServiceMirror($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createServiceMirrorWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes a stress testing task.
     *  *
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteBenchmarkTaskResponse DeleteBenchmarkTaskResponse
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
     * @summary Deletes a stress testing task.
     *  *
     * @param string $ClusterId
     * @param string $TaskName
     *
     * @return DeleteBenchmarkTaskResponse DeleteBenchmarkTaskResponse
     */
    public function deleteBenchmarkTask($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * @summary Deletes a private gateway.
     *  *
     * @param string         $ClusterId
     * @param string         $GatewayId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayResponse DeleteGatewayResponse
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
     * @summary Deletes a private gateway.
     *  *
     * @param string $ClusterId
     * @param string $GatewayId
     *
     * @return DeleteGatewayResponse DeleteGatewayResponse
     */
    public function deleteGateway($ClusterId, $GatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayWithOptions($ClusterId, $GatewayId, $headers, $runtime);
    }

    /**
     * @summary 删除网关内网访问端点
     *  *
     * @param string                                $ClusterId
     * @param string                                $GatewayId
     * @param DeleteGatewayIntranetLinkedVpcRequest $request   DeleteGatewayIntranetLinkedVpcRequest
     * @param string[]                              $headers   map
     * @param RuntimeOptions                        $runtime   runtime options for this request RuntimeOptions
     *
     * @return DeleteGatewayIntranetLinkedVpcResponse DeleteGatewayIntranetLinkedVpcResponse
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
     * @summary 删除网关内网访问端点
     *  *
     * @param string                                $ClusterId
     * @param string                                $GatewayId
     * @param DeleteGatewayIntranetLinkedVpcRequest $request   DeleteGatewayIntranetLinkedVpcRequest
     *
     * @return DeleteGatewayIntranetLinkedVpcResponse DeleteGatewayIntranetLinkedVpcResponse
     */
    public function deleteGatewayIntranetLinkedVpc($ClusterId, $GatewayId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes a resource group that contains no resources or instances.
     *  *
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceResponse DeleteResourceResponse
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
     * @summary Deletes a resource group that contains no resources or instances.
     *  *
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DeleteResourceResponse DeleteResourceResponse
     */
    public function deleteResource($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * @summary Disables the virtual private cloud (VPC) direct connection feature for a dedicated resource group.
     *  *
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceDLinkResponse DeleteResourceDLinkResponse
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
     * @summary Disables the virtual private cloud (VPC) direct connection feature for a dedicated resource group.
     *  *
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DeleteResourceDLinkResponse DeleteResourceDLinkResponse
     */
    public function deleteResourceDLink($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceDLinkWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * @summary Deletes instances in a dedicated resource group. You can delete only pay-as-you-go instances as a regular user.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param DeleteResourceInstancesRequest $request    DeleteResourceInstancesRequest
     * @param string[]                       $headers    map
     * @param RuntimeOptions                 $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceInstancesResponse DeleteResourceInstancesResponse
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
     * @summary Deletes instances in a dedicated resource group. You can delete only pay-as-you-go instances as a regular user.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ResourceId
     * @param DeleteResourceInstancesRequest $request    DeleteResourceInstancesRequest
     *
     * @return DeleteResourceInstancesResponse DeleteResourceInstancesResponse
     */
    public function deleteResourceInstances($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @summary Disables the LogShipper feature of Log Service for a dedicated resource group.
     *  *
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteResourceLogResponse DeleteResourceLogResponse
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
     * @summary Disables the LogShipper feature of Log Service for a dedicated resource group.
     *  *
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DeleteResourceLogResponse DeleteResourceLogResponse
     */
    public function deleteResourceLog($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceLogWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * @summary Deletes a service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceResponse DeleteServiceResponse
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
     * @summary Deletes a service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DeleteServiceResponse DeleteServiceResponse
     */
    public function deleteService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Deletes the existing Autoscaler controller and disables the Autoscaler feature for a service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceAutoScalerResponse DeleteServiceAutoScalerResponse
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
     * @summary Deletes the existing Autoscaler controller and disables the Autoscaler feature for a service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DeleteServiceAutoScalerResponse DeleteServiceAutoScalerResponse
     */
    public function deleteServiceAutoScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceAutoScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Disables the Cronscaler feature for a service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceCronScalerResponse DeleteServiceCronScalerResponse
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
     * @summary Disables the Cronscaler feature for a service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DeleteServiceCronScalerResponse DeleteServiceCronScalerResponse
     */
    public function deleteServiceCronScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceCronScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Restarts the instances of a service.
     *  *
     * @param string                        $ClusterId
     * @param string                        $ServiceName
     * @param DeleteServiceInstancesRequest $request     DeleteServiceInstancesRequest
     * @param string[]                      $headers     map
     * @param RuntimeOptions                $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceInstancesResponse DeleteServiceInstancesResponse
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
     * @summary Restarts the instances of a service.
     *  *
     * @param string                        $ClusterId
     * @param string                        $ServiceName
     * @param DeleteServiceInstancesRequest $request     DeleteServiceInstancesRequest
     *
     * @return DeleteServiceInstancesResponse DeleteServiceInstancesResponse
     */
    public function deleteServiceInstances($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceInstancesWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Deletes existing service tags.
     *  *
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param DeleteServiceLabelRequest $tmpReq      DeleteServiceLabelRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceLabelResponse DeleteServiceLabelResponse
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
     * @summary Deletes existing service tags.
     *  *
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param DeleteServiceLabelRequest $request     DeleteServiceLabelRequest
     *
     * @return DeleteServiceLabelResponse DeleteServiceLabelResponse
     */
    public function deleteServiceLabel($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceLabelWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Disables the traffic mirroring feature for a service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DeleteServiceMirrorResponse DeleteServiceMirrorResponse
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
     * @summary Disables the traffic mirroring feature for a service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DeleteServiceMirrorResponse DeleteServiceMirrorResponse
     */
    public function deleteServiceMirror($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceMirrorWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Queries details about the configurations of a stress testing task.
     *  *
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeBenchmarkTaskResponse DescribeBenchmarkTaskResponse
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
     * @summary Queries details about the configurations of a stress testing task.
     *  *
     * @param string $ClusterId
     * @param string $TaskName
     *
     * @return DescribeBenchmarkTaskResponse DescribeBenchmarkTaskResponse
     */
    public function describeBenchmarkTask($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * @summary Queries the report of a stress testing task.
     *  *
     * @param string                             $ClusterId
     * @param string                             $TaskName
     * @param DescribeBenchmarkTaskReportRequest $request   DescribeBenchmarkTaskReportRequest
     * @param string[]                           $headers   map
     * @param RuntimeOptions                     $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeBenchmarkTaskReportResponse DescribeBenchmarkTaskReportResponse
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
     * @summary Queries the report of a stress testing task.
     *  *
     * @param string                             $ClusterId
     * @param string                             $TaskName
     * @param DescribeBenchmarkTaskReportRequest $request   DescribeBenchmarkTaskReportRequest
     *
     * @return DescribeBenchmarkTaskReportResponse DescribeBenchmarkTaskReportResponse
     */
    public function describeBenchmarkTaskReport($ClusterId, $TaskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeBenchmarkTaskReportWithOptions($ClusterId, $TaskName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the details of a private gateway.
     *  *
     * @param string         $ClusterId
     * @param string         $GatewayId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeGatewayResponse DescribeGatewayResponse
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
     * @summary Queries the details of a private gateway.
     *  *
     * @param string $ClusterId
     * @param string $GatewayId
     *
     * @return DescribeGatewayResponse DescribeGatewayResponse
     */
    public function describeGateway($ClusterId, $GatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeGatewayWithOptions($ClusterId, $GatewayId, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a service group.
     *  *
     * @param string         $ClusterId
     * @param string         $GroupName
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupResponse DescribeGroupResponse
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
     * @summary Queries the information about a service group.
     *  *
     * @param string $ClusterId
     * @param string $GroupName
     *
     * @return DescribeGroupResponse DescribeGroupResponse
     */
    public function describeGroup($ClusterId, $GroupName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeGroupWithOptions($ClusterId, $GroupName, $headers, $runtime);
    }

    /**
     * @summary Queries the information about a resource group.
     *  *
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeResourceResponse DescribeResourceResponse
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
     * @summary Queries the information about a resource group.
     *  *
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DescribeResourceResponse DescribeResourceResponse
     */
    public function describeResource($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourceWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * @summary Queries detailed configurations about a virtual private cloud (VPC) direct connection of a dedicated resource group.
     *  *
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeResourceDLinkResponse DescribeResourceDLinkResponse
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
     * @summary Queries detailed configurations about a virtual private cloud (VPC) direct connection of a dedicated resource group.
     *  *
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DescribeResourceDLinkResponse DescribeResourceDLinkResponse
     */
    public function describeResourceDLink($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourceDLinkWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * @summary Queries the details about the LogShipper configurations of Log Service for a dedicated resource group.
     *  *
     * @param string         $ClusterId
     * @param string         $ResourceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DescribeResourceLogResponse DescribeResourceLogResponse
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
     * @summary Queries the details about the LogShipper configurations of Log Service for a dedicated resource group.
     *  *
     * @param string $ClusterId
     * @param string $ResourceId
     *
     * @return DescribeResourceLogResponse DescribeResourceLogResponse
     */
    public function describeResourceLog($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeResourceLogWithOptions($ClusterId, $ResourceId, $headers, $runtime);
    }

    /**
     * @summary Queries the details about a service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceResponse DescribeServiceResponse
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
     * @summary Queries the details about a service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceResponse DescribeServiceResponse
     */
    public function describeService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Queries information about the Autoscaler configurations of a service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceAutoScalerResponse DescribeServiceAutoScalerResponse
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
     * @summary Queries information about the Autoscaler configurations of a service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceAutoScalerResponse DescribeServiceAutoScalerResponse
     */
    public function describeServiceAutoScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceAutoScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Queries the Cron Horizontal Pod Autoscaler (CronHPA) configurations of a service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceCronScalerResponse DescribeServiceCronScalerResponse
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
     * @summary Queries the Cron Horizontal Pod Autoscaler (CronHPA) configurations of a service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceCronScalerResponse DescribeServiceCronScalerResponse
     */
    public function describeServiceCronScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceCronScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Queries the diagnostics details of a service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceDiagnosisResponse DescribeServiceDiagnosisResponse
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
     * @summary Queries the diagnostics details of a service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceDiagnosisResponse DescribeServiceDiagnosisResponse
     */
    public function describeServiceDiagnosis($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceDiagnosisWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Queries information about recent service deployment events.
     *  *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param DescribeServiceEventRequest $request     DescribeServiceEventRequest
     * @param string[]                    $headers     map
     * @param RuntimeOptions              $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceEventResponse DescribeServiceEventResponse
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
     * @summary Queries information about recent service deployment events.
     *  *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param DescribeServiceEventRequest $request     DescribeServiceEventRequest
     *
     * @return DescribeServiceEventResponse DescribeServiceEventResponse
     */
    public function describeServiceEvent($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceEventWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the diagnostics details of an instance that runs Elastic Algorithm Service (EAS).
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string         $InstanceName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceInstanceDiagnosisResponse DescribeServiceInstanceDiagnosisResponse
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
     * @summary Queries the diagnostics details of an instance that runs Elastic Algorithm Service (EAS).
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     * @param string $InstanceName
     *
     * @return DescribeServiceInstanceDiagnosisResponse DescribeServiceInstanceDiagnosisResponse
     */
    public function describeServiceInstanceDiagnosis($ClusterId, $ServiceName, $InstanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceInstanceDiagnosisWithOptions($ClusterId, $ServiceName, $InstanceName, $headers, $runtime);
    }

    /**
     * @summary Queries the information about the logs of a service.
     *  *
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param DescribeServiceLogRequest $request     DescribeServiceLogRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceLogResponse DescribeServiceLogResponse
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
     * @summary Queries the information about the logs of a service.
     *  *
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param DescribeServiceLogRequest $request     DescribeServiceLogRequest
     *
     * @return DescribeServiceLogResponse DescribeServiceLogResponse
     */
    public function describeServiceLog($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceLogWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries details about the traffic mirroring settings of a service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return DescribeServiceMirrorResponse DescribeServiceMirrorResponse
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
     * @summary Queries details about the traffic mirroring settings of a service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return DescribeServiceMirrorResponse DescribeServiceMirrorResponse
     */
    public function describeServiceMirror($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeServiceMirrorWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Queries the historical prices of preemptible instances. For more information about preemptible instances, see Create and use preemptible instances.
     *  *
     * @param DescribeSpotDiscountHistoryRequest $request DescribeSpotDiscountHistoryRequest
     * @param string[]                           $headers map
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSpotDiscountHistoryResponse DescribeSpotDiscountHistoryResponse
     */
    public function describeSpotDiscountHistoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->isProtect)) {
            $query['IsProtect'] = $request->isProtect;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSpotDiscountHistory',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/public/spot_discount',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSpotDiscountHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the historical prices of preemptible instances. For more information about preemptible instances, see Create and use preemptible instances.
     *  *
     * @param DescribeSpotDiscountHistoryRequest $request DescribeSpotDiscountHistoryRequest
     *
     * @return DescribeSpotDiscountHistoryResponse DescribeSpotDiscountHistoryResponse
     */
    public function describeSpotDiscountHistory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSpotDiscountHistoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Switches a container service to development mode or exits development mode.
     *  *
     * @param string                $ClusterId
     * @param string                $ServiceName
     * @param DevelopServiceRequest $request     DevelopServiceRequest
     * @param string[]              $headers     map
     * @param RuntimeOptions        $runtime     runtime options for this request RuntimeOptions
     *
     * @return DevelopServiceResponse DevelopServiceResponse
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
     * @summary Switches a container service to development mode or exits development mode.
     *  *
     * @param string                $ClusterId
     * @param string                $ServiceName
     * @param DevelopServiceRequest $request     DevelopServiceRequest
     *
     * @return DevelopServiceResponse DevelopServiceResponse
     */
    public function developService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->developServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of stress testing tasks that are created by the current user.
     *  *
     * @param ListBenchmarkTaskRequest $request ListBenchmarkTaskRequest
     * @param string[]                 $headers map
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBenchmarkTaskResponse ListBenchmarkTaskResponse
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
     * @summary Queries a list of stress testing tasks that are created by the current user.
     *  *
     * @param ListBenchmarkTaskRequest $request ListBenchmarkTaskRequest
     *
     * @return ListBenchmarkTaskResponse ListBenchmarkTaskResponse
     */
    public function listBenchmarkTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBenchmarkTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of the internal endpoints of a private gateway.
     *  *
     * @param string         $ClusterId
     * @param string         $GatewayId
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return ListGatewayIntranetLinkedVpcResponse ListGatewayIntranetLinkedVpcResponse
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
     * @summary Queries a list of the internal endpoints of a private gateway.
     *  *
     * @param string $ClusterId
     * @param string $GatewayId
     *
     * @return ListGatewayIntranetLinkedVpcResponse ListGatewayIntranetLinkedVpcResponse
     */
    public function listGatewayIntranetLinkedVpc($ClusterId, $GatewayId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGatewayIntranetLinkedVpcWithOptions($ClusterId, $GatewayId, $headers, $runtime);
    }

    /**
     * @summary Queries created service groups.
     *  *
     * @param ListGroupsRequest $request ListGroupsRequest
     * @param string[]          $headers map
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListGroupsResponse ListGroupsResponse
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
     * @summary Queries created service groups.
     *  *
     * @param ListGroupsRequest $request ListGroupsRequest
     *
     * @return ListGroupsResponse ListGroupsResponse
     */
    public function listGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of workers in a resource group.
     *  *
     * @param string                            $ClusterId
     * @param string                            $ResourceId
     * @param string                            $InstanceName
     * @param ListResourceInstanceWorkerRequest $request      ListResourceInstanceWorkerRequest
     * @param string[]                          $headers      map
     * @param RuntimeOptions                    $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListResourceInstanceWorkerResponse ListResourceInstanceWorkerResponse
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
     * @summary Queries a list of workers in a resource group.
     *  *
     * @param string                            $ClusterId
     * @param string                            $ResourceId
     * @param string                            $InstanceName
     * @param ListResourceInstanceWorkerRequest $request      ListResourceInstanceWorkerRequest
     *
     * @return ListResourceInstanceWorkerResponse ListResourceInstanceWorkerResponse
     */
    public function listResourceInstanceWorker($ClusterId, $ResourceId, $InstanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceInstanceWorkerWithOptions($ClusterId, $ResourceId, $InstanceName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of instances in a dedicated resource group.
     *  *
     * @param string                       $ClusterId
     * @param string                       $ResourceId
     * @param ListResourceInstancesRequest $request    ListResourceInstancesRequest
     * @param string[]                     $headers    map
     * @param RuntimeOptions               $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListResourceInstancesResponse ListResourceInstancesResponse
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
     * @summary Queries a list of instances in a dedicated resource group.
     *  *
     * @param string                       $ClusterId
     * @param string                       $ResourceId
     * @param ListResourceInstancesRequest $request    ListResourceInstancesRequest
     *
     * @return ListResourceInstancesResponse ListResourceInstancesResponse
     */
    public function listResourceInstances($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceInstancesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of services that are deployed in the dedicated resource group.
     *  *
     * @param string                      $ClusterId
     * @param string                      $ResourceId
     * @param ListResourceServicesRequest $request    ListResourceServicesRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListResourceServicesResponse ListResourceServicesResponse
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
     * @summary Queries a list of services that are deployed in the dedicated resource group.
     *  *
     * @param string                      $ClusterId
     * @param string                      $ResourceId
     * @param ListResourceServicesRequest $request    ListResourceServicesRequest
     *
     * @return ListResourceServicesResponse ListResourceServicesResponse
     */
    public function listResourceServices($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourceServicesWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of dedicated resource groups for the current user.
     *  *
     * @param ListResourcesRequest $request ListResourcesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListResourcesResponse ListResourcesResponse
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
     * @summary Queries a list of dedicated resource groups for the current user.
     *  *
     * @param ListResourcesRequest $request ListResourcesRequest
     *
     * @return ListResourcesResponse ListResourcesResponse
     */
    public function listResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Queries the containers of a service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string         $InstanceName
     * @param string[]       $headers      map
     * @param RuntimeOptions $runtime      runtime options for this request RuntimeOptions
     *
     * @return ListServiceContainersResponse ListServiceContainersResponse
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
     * @summary Queries the containers of a service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     * @param string $InstanceName
     *
     * @return ListServiceContainersResponse ListServiceContainersResponse
     */
    public function listServiceContainers($ClusterId, $ServiceName, $InstanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceContainersWithOptions($ClusterId, $ServiceName, $InstanceName, $headers, $runtime);
    }

    /**
     * @summary Queries instances of a service.
     *  *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param ListServiceInstancesRequest $request     ListServiceInstancesRequest
     * @param string[]                    $headers     map
     * @param RuntimeOptions              $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListServiceInstancesResponse ListServiceInstancesResponse
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
     * @summary Queries instances of a service.
     *  *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param ListServiceInstancesRequest $request     ListServiceInstancesRequest
     *
     * @return ListServiceInstancesResponse ListServiceInstancesResponse
     */
    public function listServiceInstances($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceInstancesWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries the information about the historical versions of a service.
     *  *
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param ListServiceVersionsRequest $request     ListServiceVersionsRequest
     * @param string[]                   $headers     map
     * @param RuntimeOptions             $runtime     runtime options for this request RuntimeOptions
     *
     * @return ListServiceVersionsResponse ListServiceVersionsResponse
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
     * @summary Queries the information about the historical versions of a service.
     *  *
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param ListServiceVersionsRequest $request     ListServiceVersionsRequest
     *
     * @return ListServiceVersionsResponse ListServiceVersionsResponse
     */
    public function listServiceVersions($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServiceVersionsWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Queries a list of services that are created by the current user.
     *  *
     * @param ListServicesRequest $tmpReq  ListServicesRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListServicesResponse ListServicesResponse
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
        if (!Utils::isUnset($request->quotaId)) {
            $query['QuotaId'] = $request->quotaId;
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
     * @summary Queries a list of services that are created by the current user.
     *  *
     * @param ListServicesRequest $request ListServicesRequest
     *
     * @return ListServicesResponse ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listServicesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary Performs canary release or blue-green release of a service.
     *  *
     * @param string                $ClusterId
     * @param string                $ServiceName
     * @param ReleaseServiceRequest $request     ReleaseServiceRequest
     * @param string[]              $headers     map
     * @param RuntimeOptions        $runtime     runtime options for this request RuntimeOptions
     *
     * @return ReleaseServiceResponse ReleaseServiceResponse
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
     * @summary Performs canary release or blue-green release of a service.
     *  *
     * @param string                $ClusterId
     * @param string                $ServiceName
     * @param ReleaseServiceRequest $request     ReleaseServiceRequest
     *
     * @return ReleaseServiceResponse ReleaseServiceResponse
     */
    public function releaseService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Restarts a service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return RestartServiceResponse RestartServiceResponse
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
     * @summary Restarts a service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return RestartServiceResponse RestartServiceResponse
     */
    public function restartService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->restartServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Starts a stress testing task.
     *  *
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return StartBenchmarkTaskResponse StartBenchmarkTaskResponse
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
     * @summary Starts a stress testing task.
     *  *
     * @param string $ClusterId
     * @param string $TaskName
     *
     * @return StartBenchmarkTaskResponse StartBenchmarkTaskResponse
     */
    public function startBenchmarkTask($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * @summary Starts a service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return StartServiceResponse StartServiceResponse
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
     * @summary Starts a service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return StartServiceResponse StartServiceResponse
     */
    public function startService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Stops a stress testing task.
     *  *
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers   map
     * @param RuntimeOptions $runtime   runtime options for this request RuntimeOptions
     *
     * @return StopBenchmarkTaskResponse StopBenchmarkTaskResponse
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
     * @summary Stops a stress testing task.
     *  *
     * @param string $ClusterId
     * @param string $TaskName
     *
     * @return StopBenchmarkTaskResponse StopBenchmarkTaskResponse
     */
    public function stopBenchmarkTask($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * @summary Stops a running service.
     *  *
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers     map
     * @param RuntimeOptions $runtime     runtime options for this request RuntimeOptions
     *
     * @return StopServiceResponse StopServiceResponse
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
     * @summary Stops a running service.
     *  *
     * @param string $ClusterId
     * @param string $ServiceName
     *
     * @return StopServiceResponse StopServiceResponse
     */
    public function stopService($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime);
    }

    /**
     * @summary Updates an application service.
     *  *
     * @param string                  $ClusterId
     * @param string                  $ServiceName
     * @param UpdateAppServiceRequest $request     UpdateAppServiceRequest
     * @param string[]                $headers     map
     * @param RuntimeOptions          $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateAppServiceResponse UpdateAppServiceResponse
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
     * @summary Updates an application service.
     *  *
     * @param string                  $ClusterId
     * @param string                  $ServiceName
     * @param UpdateAppServiceRequest $request     UpdateAppServiceRequest
     *
     * @return UpdateAppServiceResponse UpdateAppServiceResponse
     */
    public function updateAppService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAppServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a stress testing task.
     *  *
     * @param string                     $ClusterId
     * @param string                     $TaskName
     * @param UpdateBenchmarkTaskRequest $request   UpdateBenchmarkTaskRequest
     * @param string[]                   $headers   map
     * @param RuntimeOptions             $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateBenchmarkTaskResponse UpdateBenchmarkTaskResponse
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
     * @summary Updates a stress testing task.
     *  *
     * @param string                     $ClusterId
     * @param string                     $TaskName
     * @param UpdateBenchmarkTaskRequest $request   UpdateBenchmarkTaskRequest
     *
     * @return UpdateBenchmarkTaskResponse UpdateBenchmarkTaskResponse
     */
    public function updateBenchmarkTask($ClusterId, $TaskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateBenchmarkTaskWithOptions($ClusterId, $TaskName, $request, $headers, $runtime);
    }

    /**
     * @summary Update a private gateway.
     *  *
     * @param string               $GatewayId
     * @param string               $ClusterId
     * @param UpdateGatewayRequest $request   UpdateGatewayRequest
     * @param string[]             $headers   map
     * @param RuntimeOptions       $runtime   runtime options for this request RuntimeOptions
     *
     * @return UpdateGatewayResponse UpdateGatewayResponse
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
     * @summary Update a private gateway.
     *  *
     * @param string               $GatewayId
     * @param string               $ClusterId
     * @param UpdateGatewayRequest $request   UpdateGatewayRequest
     *
     * @return UpdateGatewayResponse UpdateGatewayResponse
     */
    public function updateGateway($GatewayId, $ClusterId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateGatewayWithOptions($GatewayId, $ClusterId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the information about a dedicated resource group. Only the name of a dedicated resource group can be updated.
     *  *
     * @param string                $ClusterId
     * @param string                $ResourceId
     * @param UpdateResourceRequest $request    UpdateResourceRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceResponse UpdateResourceResponse
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
     * @summary Updates the information about a dedicated resource group. Only the name of a dedicated resource group can be updated.
     *  *
     * @param string                $ClusterId
     * @param string                $ResourceId
     * @param UpdateResourceRequest $request    UpdateResourceRequest
     *
     * @return UpdateResourceResponse UpdateResourceResponse
     */
    public function updateResource($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the configurations of a virtual private cloud (VPC) direct connection for a dedicated resource group.
     *  *
     * @param string                     $ClusterId
     * @param string                     $ResourceId
     * @param UpdateResourceDLinkRequest $request    UpdateResourceDLinkRequest
     * @param string[]                   $headers    map
     * @param RuntimeOptions             $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceDLinkResponse UpdateResourceDLinkResponse
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
     * @summary Updates the configurations of a virtual private cloud (VPC) direct connection for a dedicated resource group.
     *  *
     * @param string                     $ClusterId
     * @param string                     $ResourceId
     * @param UpdateResourceDLinkRequest $request    UpdateResourceDLinkRequest
     *
     * @return UpdateResourceDLinkResponse UpdateResourceDLinkResponse
     */
    public function updateResourceDLink($ClusterId, $ResourceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceDLinkWithOptions($ClusterId, $ResourceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the service scheduling status of an instance in a dedicated resource group.
     *  *
     * @param string                        $ClusterId
     * @param string                        $ResourceId
     * @param string                        $InstanceId
     * @param UpdateResourceInstanceRequest $request    UpdateResourceInstanceRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateResourceInstanceResponse UpdateResourceInstanceResponse
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
     * @summary Updates the service scheduling status of an instance in a dedicated resource group.
     *  *
     * @param string                        $ClusterId
     * @param string                        $ResourceId
     * @param string                        $InstanceId
     * @param UpdateResourceInstanceRequest $request    UpdateResourceInstanceRequest
     *
     * @return UpdateResourceInstanceResponse UpdateResourceInstanceResponse
     */
    public function updateResourceInstance($ClusterId, $ResourceId, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateResourceInstanceWithOptions($ClusterId, $ResourceId, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary Updates a model or processor of a service. If only the metadata.instance field is updated, manual scaling can be performed.
     *  *
     * @param string               $ClusterId
     * @param string               $ServiceName
     * @param UpdateServiceRequest $request     UpdateServiceRequest
     * @param string[]             $headers     map
     * @param RuntimeOptions       $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceResponse UpdateServiceResponse
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
     * @summary Updates a model or processor of a service. If only the metadata.instance field is updated, manual scaling can be performed.
     *  *
     * @param string               $ClusterId
     * @param string               $ServiceName
     * @param UpdateServiceRequest $request     UpdateServiceRequest
     *
     * @return UpdateServiceResponse UpdateServiceResponse
     */
    public function updateService($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the Autoscaler configurations of a service.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceAutoScalerRequest $request     UpdateServiceAutoScalerRequest
     * @param string[]                       $headers     map
     * @param RuntimeOptions                 $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceAutoScalerResponse UpdateServiceAutoScalerResponse
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
     * @summary Updates the Autoscaler configurations of a service.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceAutoScalerRequest $request     UpdateServiceAutoScalerRequest
     *
     * @return UpdateServiceAutoScalerResponse UpdateServiceAutoScalerResponse
     */
    public function updateServiceAutoScaler($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceAutoScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the Cron Horizontal Pod Autoscaler (CronHPA) settings of a service.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceCronScalerRequest $request     UpdateServiceCronScalerRequest
     * @param string[]                       $headers     map
     * @param RuntimeOptions                 $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceCronScalerResponse UpdateServiceCronScalerResponse
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
     * @summary Updates the Cron Horizontal Pod Autoscaler (CronHPA) settings of a service.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceCronScalerRequest $request     UpdateServiceCronScalerRequest
     *
     * @return UpdateServiceCronScalerResponse UpdateServiceCronScalerResponse
     */
    public function updateServiceCronScaler($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceCronScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates attributes of service instances. Only isolation can be performed for service instances.
     *  *
     * @param string                       $ClusterId
     * @param string                       $ServiceName
     * @param string                       $InstanceName
     * @param UpdateServiceInstanceRequest $request      UpdateServiceInstanceRequest
     * @param string[]                     $headers      map
     * @param RuntimeOptions               $runtime      runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceInstanceResponse UpdateServiceInstanceResponse
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
     * @summary Updates attributes of service instances. Only isolation can be performed for service instances.
     *  *
     * @param string                       $ClusterId
     * @param string                       $ServiceName
     * @param string                       $InstanceName
     * @param UpdateServiceInstanceRequest $request      UpdateServiceInstanceRequest
     *
     * @return UpdateServiceInstanceResponse UpdateServiceInstanceResponse
     */
    public function updateServiceInstance($ClusterId, $ServiceName, $InstanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceInstanceWithOptions($ClusterId, $ServiceName, $InstanceName, $request, $headers, $runtime);
    }

    /**
     * @summary Adds service tags or updates existing service tags.
     *  *
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param UpdateServiceLabelRequest $request     UpdateServiceLabelRequest
     * @param string[]                  $headers     map
     * @param RuntimeOptions            $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceLabelResponse UpdateServiceLabelResponse
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
     * @summary Adds service tags or updates existing service tags.
     *  *
     * @param string                    $ClusterId
     * @param string                    $ServiceName
     * @param UpdateServiceLabelRequest $request     UpdateServiceLabelRequest
     *
     * @return UpdateServiceLabelResponse UpdateServiceLabelResponse
     */
    public function updateServiceLabel($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceLabelWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the traffic mirroring configurations of a service.
     *  *
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param UpdateServiceMirrorRequest $request     UpdateServiceMirrorRequest
     * @param string[]                   $headers     map
     * @param RuntimeOptions             $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceMirrorResponse UpdateServiceMirrorResponse
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
     * @summary Updates the traffic mirroring configurations of a service.
     *  *
     * @param string                     $ClusterId
     * @param string                     $ServiceName
     * @param UpdateServiceMirrorRequest $request     UpdateServiceMirrorRequest
     *
     * @return UpdateServiceMirrorResponse UpdateServiceMirrorResponse
     */
    public function updateServiceMirror($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceMirrorWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the safety lock of a service to minimize misoperations on the service.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceSafetyLockRequest $request     UpdateServiceSafetyLockRequest
     * @param string[]                       $headers     map
     * @param RuntimeOptions                 $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceSafetyLockResponse UpdateServiceSafetyLockResponse
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
     * @summary Updates the safety lock of a service to minimize misoperations on the service.
     *  *
     * @param string                         $ClusterId
     * @param string                         $ServiceName
     * @param UpdateServiceSafetyLockRequest $request     UpdateServiceSafetyLockRequest
     *
     * @return UpdateServiceSafetyLockResponse UpdateServiceSafetyLockResponse
     */
    public function updateServiceSafetyLock($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceSafetyLockWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }

    /**
     * @summary Updates the version of a service or rolls back the service to a specific version.
     *  *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param UpdateServiceVersionRequest $request     UpdateServiceVersionRequest
     * @param string[]                    $headers     map
     * @param RuntimeOptions              $runtime     runtime options for this request RuntimeOptions
     *
     * @return UpdateServiceVersionResponse UpdateServiceVersionResponse
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
     * @summary Updates the version of a service or rolls back the service to a specific version.
     *  *
     * @param string                      $ClusterId
     * @param string                      $ServiceName
     * @param UpdateServiceVersionRequest $request     UpdateServiceVersionRequest
     *
     * @return UpdateServiceVersionResponse UpdateServiceVersionResponse
     */
    public function updateServiceVersion($ClusterId, $ServiceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateServiceVersionWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime);
    }
}
