<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateBenchmarkTaskRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateBenchmarkTaskResponse;
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
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateStressRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateStressResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceDLinkResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceLogResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceAutoScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceCronScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceMirrorResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteStressResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeBenchmarkTaskReportResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeResourceDLinkResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeResourceLogResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceAutoScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceCronScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceLogRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceLogResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceMirrorResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeStressResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstanceWorkerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceInstanceWorkerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceServicesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourceServicesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourcesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListResourcesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceInstancesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceInstancesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServicesRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServicesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListStressesResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ReleaseServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\ReleaseServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\ReportStressResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StartBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StartServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StartStressResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StopBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StopServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\StopStressResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateBenchmarkTaskRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateBenchmarkTaskResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceDLinkRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceDLinkResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateResourceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceCronScalerRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceCronScalerResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceMirrorRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceMirrorResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceVersionRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceVersionResponse;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateStressRequest;
use AlibabaCloud\SDK\Eas\V20210701\Models\UpdateStressResponse;
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
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $body       = [];
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
        if (!Utils::isUnset($request->userData)) {
            $body['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateResourceInstances',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateResourceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $body       = [];
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
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '/log',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateResourceLogResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CreateServiceRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
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
     * @param CreateServiceAutoScalerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceAutoScalerResponse
     */
    public function createServiceAutoScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $body        = [];
        if (!Utils::isUnset($request->max)) {
            $body['Max'] = $request->max;
        }
        if (!Utils::isUnset($request->min)) {
            $body['Min'] = $request->min;
        }
        if (!Utils::isUnset($request->strategies)) {
            $body['Strategies'] = $request->strategies;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateServiceAutoScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/autoscaler',
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
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $body        = [];
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
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/cronscaler',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceCronScalerResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $body        = [];
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
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/mirror',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateServiceMirrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateStressRequest $request
     *
     * @return CreateStressResponse
     */
    public function createStress($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createStressWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateStressRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return CreateStressResponse
     */
    public function createStressWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'CreateStress',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/stress',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateStressResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteBenchmarkTaskResponse
     */
    public function deleteBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $ClusterId = OpenApiUtilClient::getEncodeParam($ClusterId);
        $TaskName  = OpenApiUtilClient::getEncodeParam($TaskName);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteBenchmarkTask',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks/' . $ClusterId . '/' . $TaskName . '',
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
     * @return DeleteResourceResponse
     */
    public function deleteResourceWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteResource',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '',
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
     * @return DeleteResourceDLinkResponse
     */
    public function deleteResourceDLink($ClusterId, $ResourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteResourceDLinkWithOptions($ClusterId, $ResourceId, $headers, $runtime);
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
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceDLink',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '/dlink',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceDLinkResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $query      = [];
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
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '/instances',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteResourceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteResourceLogResponse
     */
    public function deleteResourceLogWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteResourceLog',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '/log',
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
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '',
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
     * @return DeleteServiceAutoScalerResponse
     */
    public function deleteServiceAutoScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceAutoScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/autoscaler',
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
     * @return DeleteServiceCronScalerResponse
     */
    public function deleteServiceCronScaler($ClusterId, $ServiceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteServiceCronScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime);
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
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceCronScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/cronscaler',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceCronScalerResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $query       = [];
        if (!Utils::isUnset($request->instanceList)) {
            $query['InstanceList'] = $request->instanceList;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceInstances',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/instances',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteServiceMirrorResponse
     */
    public function deleteServiceMirrorWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteServiceMirror',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/mirror',
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
     * @param string $StressName
     *
     * @return DeleteStressResponse
     */
    public function deleteStress($ClusterId, $StressName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteStressWithOptions($ClusterId, $StressName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $StressName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteStressResponse
     */
    public function deleteStressWithOptions($ClusterId, $StressName, $headers, $runtime)
    {
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $StressName = OpenApiUtilClient::getEncodeParam($StressName);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteStress',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/stress/' . $ClusterId . '/' . $StressName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteStressResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeBenchmarkTaskResponse
     */
    public function describeBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $ClusterId = OpenApiUtilClient::getEncodeParam($ClusterId);
        $TaskName  = OpenApiUtilClient::getEncodeParam($TaskName);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeBenchmarkTask',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks/' . $ClusterId . '/' . $TaskName . '',
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
     * @return DescribeBenchmarkTaskReportResponse
     */
    public function describeBenchmarkTaskReport($ClusterId, $TaskName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeBenchmarkTaskReportWithOptions($ClusterId, $TaskName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeBenchmarkTaskReportResponse
     */
    public function describeBenchmarkTaskReportWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $ClusterId = OpenApiUtilClient::getEncodeParam($ClusterId);
        $TaskName  = OpenApiUtilClient::getEncodeParam($TaskName);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeBenchmarkTaskReport',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks/' . $ClusterId . '/' . $TaskName . '/report',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeBenchmarkTaskReportResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @return DescribeResourceResponse
     */
    public function describeResourceWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeResource',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '',
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
     * @return DescribeResourceDLinkResponse
     */
    public function describeResourceDLinkWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceDLink',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '/dlink',
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
     * @param string         $ResourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeResourceLogResponse
     */
    public function describeResourceLogWithOptions($ClusterId, $ResourceId, $headers, $runtime)
    {
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceLog',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '/log',
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
     * @return DescribeServiceResponse
     */
    public function describeServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '',
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
     * @return DescribeServiceAutoScalerResponse
     */
    public function describeServiceAutoScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceAutoScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/autoscaler',
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
     * @return DescribeServiceCronScalerResponse
     */
    public function describeServiceCronScalerWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceCronScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/cronscaler',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceCronScalerResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $query       = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeServiceLogResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeServiceMirrorResponse
     */
    public function describeServiceMirrorWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeServiceMirror',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/mirror',
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
     * @param string $StressName
     *
     * @return DescribeStressResponse
     */
    public function describeStress($ClusterId, $StressName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeStressWithOptions($ClusterId, $StressName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $StressName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeStressResponse
     */
    public function describeStressWithOptions($ClusterId, $StressName, $headers, $runtime)
    {
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $StressName = OpenApiUtilClient::getEncodeParam($StressName);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeStress',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/stress/' . $ClusterId . '/' . $StressName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeStressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListBenchmarkTaskResponse
     */
    public function listBenchmarkTask()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listBenchmarkTaskWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListBenchmarkTaskResponse
     */
    public function listBenchmarkTaskWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
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
        $ClusterId    = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId   = OpenApiUtilClient::getEncodeParam($ResourceId);
        $InstanceName = OpenApiUtilClient::getEncodeParam($InstanceName);
        $query        = [];
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
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '/instance/' . $InstanceName . '/workers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceInstanceWorkerResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $query      = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
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
            'action'      => 'ListResourceInstances',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $query      = [];
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
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '/services',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListResourceServicesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $query       = [];
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
            'action'      => 'ListServiceInstances',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListServiceInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListServicesRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
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
     * @return ListStressesResponse
     */
    public function listStresses()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStressesWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListStressesResponse
     */
    public function listStressesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListStresses',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/stress',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListStressesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $body        = [];
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
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/release',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $ClusterId
     * @param string $StressName
     *
     * @return ReportStressResponse
     */
    public function reportStress($ClusterId, $StressName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reportStressWithOptions($ClusterId, $StressName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $StressName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReportStressResponse
     */
    public function reportStressWithOptions($ClusterId, $StressName, $headers, $runtime)
    {
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $StressName = OpenApiUtilClient::getEncodeParam($StressName);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ReportStress',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/stress/' . $ClusterId . '/' . $StressName . '/report',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReportStressResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartBenchmarkTaskResponse
     */
    public function startBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $ClusterId = OpenApiUtilClient::getEncodeParam($ClusterId);
        $TaskName  = OpenApiUtilClient::getEncodeParam($TaskName);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartBenchmarkTask',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks/' . $ClusterId . '/' . $TaskName . '/start',
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
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartServiceResponse
     */
    public function startServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/start',
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
     * @param string $StressName
     *
     * @return StartStressResponse
     */
    public function startStress($ClusterId, $StressName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startStressWithOptions($ClusterId, $StressName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $StressName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartStressResponse
     */
    public function startStressWithOptions($ClusterId, $StressName, $headers, $runtime)
    {
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $StressName = OpenApiUtilClient::getEncodeParam($StressName);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartStress',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/stress/' . $ClusterId . '/' . $StressName . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartStressResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string         $TaskName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopBenchmarkTaskResponse
     */
    public function stopBenchmarkTaskWithOptions($ClusterId, $TaskName, $headers, $runtime)
    {
        $ClusterId = OpenApiUtilClient::getEncodeParam($ClusterId);
        $TaskName  = OpenApiUtilClient::getEncodeParam($TaskName);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopBenchmarkTask',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks/' . $ClusterId . '/' . $TaskName . '/stop',
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
     * @param string         $ClusterId
     * @param string         $ServiceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopServiceResponse
     */
    public function stopServiceWithOptions($ClusterId, $ServiceName, $headers, $runtime)
    {
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/stop',
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
     * @param string $StressName
     *
     * @return StopStressResponse
     */
    public function stopStress($ClusterId, $StressName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopStressWithOptions($ClusterId, $StressName, $headers, $runtime);
    }

    /**
     * @param string         $ClusterId
     * @param string         $StressName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopStressResponse
     */
    public function stopStressWithOptions($ClusterId, $StressName, $headers, $runtime)
    {
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $StressName = OpenApiUtilClient::getEncodeParam($StressName);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopStress',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/stress/' . $ClusterId . '/' . $StressName . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopStressResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId = OpenApiUtilClient::getEncodeParam($ClusterId);
        $TaskName  = OpenApiUtilClient::getEncodeParam($TaskName);
        $req       = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateBenchmarkTask',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/benchmark-tasks/' . $ClusterId . '/' . $TaskName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateBenchmarkTaskResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $body       = [];
        if (!Utils::isUnset($request->resourceName)) {
            $body['ResourceName'] = $request->resourceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateResource',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ResourceId = OpenApiUtilClient::getEncodeParam($ResourceId);
        $body       = [];
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
            'pathname'    => '/api/v2/resources/' . $ClusterId . '/' . $ResourceId . '/dlink',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateResourceDLinkResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $req         = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateService',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateServiceAutoScalerRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateServiceAutoScalerResponse
     */
    public function updateServiceAutoScalerWithOptions($ClusterId, $ServiceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $body        = [];
        if (!Utils::isUnset($request->max)) {
            $body['Max'] = $request->max;
        }
        if (!Utils::isUnset($request->min)) {
            $body['Min'] = $request->min;
        }
        if (!Utils::isUnset($request->strategies)) {
            $body['Strategies'] = $request->strategies;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateServiceAutoScaler',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/autoscaler',
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
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $body        = [];
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
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/cronscaler',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceCronScalerResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $body        = [];
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
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/mirror',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceMirrorResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $ClusterId   = OpenApiUtilClient::getEncodeParam($ClusterId);
        $ServiceName = OpenApiUtilClient::getEncodeParam($ServiceName);
        $body        = [];
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
            'pathname'    => '/api/v2/services/' . $ClusterId . '/' . $ServiceName . '/version',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateServiceVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $ClusterId
     * @param string              $StressName
     * @param UpdateStressRequest $request
     *
     * @return UpdateStressResponse
     */
    public function updateStress($ClusterId, $StressName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateStressWithOptions($ClusterId, $StressName, $request, $headers, $runtime);
    }

    /**
     * @param string              $ClusterId
     * @param string              $StressName
     * @param UpdateStressRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateStressResponse
     */
    public function updateStressWithOptions($ClusterId, $StressName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $ClusterId  = OpenApiUtilClient::getEncodeParam($ClusterId);
        $StressName = OpenApiUtilClient::getEncodeParam($StressName);
        $req        = new OpenApiRequest([
            'headers' => $headers,
            'body'    => $request->body,
        ]);
        $params = new Params([
            'action'      => 'UpdateStress',
            'version'     => '2021-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/stress/' . $ClusterId . '/' . $StressName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateStressResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
