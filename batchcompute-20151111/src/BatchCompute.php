<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BatchCompute\V20151111;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\CancelImageRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\CancelImageResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ChangeJobPriorityRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ChangeJobPriorityResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\CreateAppResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\CreateClusterRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\CreateClusterResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\CreateImageRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\CreateImageResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\CreateJobRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\CreateJobResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\DeleteAppResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\DeleteClusterInstanceRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\DeleteClusterInstanceResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\DeleteImageRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\DeleteImageResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\DeleteJobRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\DeleteJobResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetAppResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetClusterInstanceRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetClusterInstanceResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetClusterRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetClusterResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetImageRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetImageResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetInstanceRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetInstanceResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetJobDescriptionRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetJobDescriptionResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetJobRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetJobResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetQuotaRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetQuotaResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetTaskRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\GetTaskResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListAppsResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListAvailableInstanceTypeResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListClusterInstancesRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListClusterInstancesResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListClustersRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListClustersResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListImagesRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListImagesResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListInstancesRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListInstancesResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListJobsRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListJobsResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListRegionsResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListTasksRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ListTasksResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ModifyAppResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ModifyClusterRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ModifyClusterResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\PollForTaskRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\PollForTaskResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\RecreateClusterInstanceRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\RecreateClusterInstanceResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\RenewClusterInstanceRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\RenewClusterInstanceResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ReportTaskStatusRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ReportTaskStatusResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ReportWorkerStatusRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\ReportWorkerStatusResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\StartJobRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\StartJobResponse;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\StopJobRequest;
use AlibabaCloud\SDK\BatchCompute\V20151111\Models\StopJobResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class BatchCompute extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('batchcompute', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param string             $ResourceName
     * @param CancelImageRequest $request
     *
     * @return CancelImageResponse
     */
    public function cancelImage($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->cancelImageWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string             $ResourceName
     * @param CancelImageRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CancelImageResponse
     */
    public function cancelImageWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CancelImageResponse::fromMap($this->doROARequest('CancelImage', '2015-11-11', 'HTTPS', 'PUT', 'AK', '/images/' . $ResourceName . '', 'none', $req, $runtime));
    }

    /**
     * @param string                   $ResourceName
     * @param ChangeJobPriorityRequest $request
     *
     * @return ChangeJobPriorityResponse
     */
    public function changeJobPriority($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->changeJobPriorityWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string                   $ResourceName
     * @param ChangeJobPriorityRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ChangeJobPriorityResponse
     */
    public function changeJobPriorityWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ChangeJobPriorityResponse::fromMap($this->doROARequest('ChangeJobPriority', '2015-11-11', 'HTTPS', 'PUT', 'AK', '/jobs/' . $ResourceName . '', 'none', $req, $runtime));
    }

    /**
     * @return CreateAppResponse
     */
    public function createApp()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return CreateAppResponse::fromMap($this->doROARequest('CreateApp', '2015-11-11', 'HTTPS', 'POST', 'AK', '/apps', 'none', $req, $runtime));
    }

    /**
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createClusterWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateClusterResponse::fromMap($this->doROARequest('CreateCluster', '2015-11-11', 'HTTPS', 'POST', 'AK', '/clusters', 'none', $req, $runtime));
    }

    /**
     * @param CreateImageRequest $request
     *
     * @return CreateImageResponse
     */
    public function createImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateImageRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return CreateImageResponse
     */
    public function createImageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateImageResponse::fromMap($this->doROARequest('CreateImage', '2015-11-11', 'HTTPS', 'POST', 'AK', '/images', 'none', $req, $runtime));
    }

    /**
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return CreateJobResponse::fromMap($this->doROARequest('CreateJob', '2015-11-11', 'HTTPS', 'POST', 'AK', '/jobs', 'none', $req, $runtime));
    }

    /**
     * @param string $ResourceName
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($ResourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteAppWithOptions($ResourceName, $headers, $runtime);
    }

    /**
     * @param string         $ResourceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($ResourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteAppResponse::fromMap($this->doROARequest('DeleteApp', '2015-11-11', 'HTTPS', 'DELETE', 'AK', '/apps/' . $ResourceName . '', 'none', $req, $runtime));
    }

    /**
     * @param string               $ResourceName
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string               $ResourceName
     * @param DeleteClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteClusterResponse::fromMap($this->doROARequest('DeleteCluster', '2015-11-11', 'HTTPS', 'DELETE', 'AK', '/clusters/' . $ResourceName . '', 'none', $req, $runtime));
    }

    /**
     * @param string                       $ClusterId
     * @param string                       $GroupName
     * @param string                       $InstanceId
     * @param DeleteClusterInstanceRequest $request
     *
     * @return DeleteClusterInstanceResponse
     */
    public function deleteClusterInstance($ClusterId, $GroupName, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteClusterInstanceWithOptions($ClusterId, $GroupName, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                       $ClusterId
     * @param string                       $GroupName
     * @param string                       $InstanceId
     * @param DeleteClusterInstanceRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteClusterInstanceResponse
     */
    public function deleteClusterInstanceWithOptions($ClusterId, $GroupName, $InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteClusterInstanceResponse::fromMap($this->doROARequest('DeleteClusterInstance', '2015-11-11', 'HTTPS', 'DELETE', 'AK', '/clusters/' . $ClusterId . '/groups/{GroupName}/instances/{InstanceId}', 'none', $req, $runtime));
    }

    /**
     * @param string             $ResourceName
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteImageWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string             $ResourceName
     * @param DeleteImageRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteImageResponse::fromMap($this->doROARequest('DeleteImage', '2015-11-11', 'HTTPS', 'DELETE', 'AK', '/images/' . $ResourceName . '', 'none', $req, $runtime));
    }

    /**
     * @param string           $ResourceName
     * @param DeleteJobRequest $request
     *
     * @return DeleteJobResponse
     */
    public function deleteJob($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteJobWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string           $ResourceName
     * @param DeleteJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteJobResponse
     */
    public function deleteJobWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteJobResponse::fromMap($this->doROARequest('DeleteJob', '2015-11-11', 'HTTPS', 'DELETE', 'AK', '/jobs/' . $ResourceName . '', 'none', $req, $runtime));
    }

    /**
     * @param string               $ProjectName
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($ProjectName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteProjectWithOptions($ProjectName, $request, $headers, $runtime);
    }

    /**
     * @param string               $ProjectName
     * @param DeleteProjectRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($ProjectName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return DeleteProjectResponse::fromMap($this->doROARequest('DeleteProject', '2015-11-11', 'HTTPS', 'DELETE', 'AK', '/projects/' . $ProjectName . '', 'none', $req, $runtime));
    }

    /**
     * @param string $ResourceName
     *
     * @return GetAppResponse
     */
    public function getApp($ResourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAppWithOptions($ResourceName, $headers, $runtime);
    }

    /**
     * @param string         $ResourceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAppResponse
     */
    public function getAppWithOptions($ResourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetAppResponse::fromMap($this->doROARequest('GetApp', '2015-11-11', 'HTTPS', 'GET', 'AK', '/apps/' . $ResourceName . '', 'none', $req, $runtime));
    }

    /**
     * @param string            $ResourceName
     * @param GetClusterRequest $request
     *
     * @return GetClusterResponse
     */
    public function getCluster($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string            $ResourceName
     * @param GetClusterRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetClusterResponse
     */
    public function getClusterWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetClusterResponse::fromMap($this->doROARequest('GetCluster', '2015-11-11', 'HTTPS', 'GET', 'AK', '/clusters/' . $ResourceName . '', 'none', $req, $runtime));
    }

    /**
     * @param string                    $ClusterId
     * @param string                    $GroupName
     * @param string                    $InstanceId
     * @param GetClusterInstanceRequest $request
     *
     * @return GetClusterInstanceResponse
     */
    public function getClusterInstance($ClusterId, $GroupName, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getClusterInstanceWithOptions($ClusterId, $GroupName, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ClusterId
     * @param string                    $GroupName
     * @param string                    $InstanceId
     * @param GetClusterInstanceRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetClusterInstanceResponse
     */
    public function getClusterInstanceWithOptions($ClusterId, $GroupName, $InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetClusterInstanceResponse::fromMap($this->doROARequest('GetClusterInstance', '2015-11-11', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/groups/{GroupName}/instances/{InstanceId}', 'none', $req, $runtime));
    }

    /**
     * @param string          $ResourceName
     * @param GetImageRequest $request
     *
     * @return GetImageResponse
     */
    public function getImage($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getImageWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string          $ResourceName
     * @param GetImageRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetImageResponse
     */
    public function getImageWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetImageResponse::fromMap($this->doROARequest('GetImage', '2015-11-11', 'HTTPS', 'GET', 'AK', '/images/' . $ResourceName . '', 'none', $req, $runtime));
    }

    /**
     * @param string             $ResourceName
     * @param string             $TaskName
     * @param string             $InstanceId
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($ResourceName, $TaskName, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($ResourceName, $TaskName, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string             $ResourceName
     * @param string             $TaskName
     * @param string             $InstanceId
     * @param GetInstanceRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($ResourceName, $TaskName, $InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetInstanceResponse::fromMap($this->doROARequest('GetInstance', '2015-11-11', 'HTTPS', 'GET', 'AK', '/jobs/' . $ResourceName . '/tasks/{TaskName}/instances/{InstanceId}', 'none', $req, $runtime));
    }

    /**
     * @param string        $ResourceName
     * @param GetJobRequest $request
     *
     * @return GetJobResponse
     */
    public function getJob($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string         $ResourceName
     * @param GetJobRequest  $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetJobResponse::fromMap($this->doROARequest('GetJob', '2015-11-11', 'HTTPS', 'GET', 'AK', '/jobs/' . $ResourceName . '', 'none', $req, $runtime));
    }

    /**
     * @param string                   $ResourceName
     * @param GetJobDescriptionRequest $request
     *
     * @return GetJobDescriptionResponse
     */
    public function getJobDescription($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobDescriptionWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string                   $ResourceName
     * @param GetJobDescriptionRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetJobDescriptionResponse
     */
    public function getJobDescriptionWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetJobDescriptionResponse::fromMap($this->doROARequest('GetJobDescription', '2015-11-11', 'HTTPS', 'GET', 'AK', '/jobs/' . $ResourceName . '?description', 'none', $req, $runtime));
    }

    /**
     * @param GetQuotaRequest $request
     *
     * @return GetQuotaResponse
     */
    public function getQuota($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getQuotaWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetQuotaRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetQuotaResponse
     */
    public function getQuotaWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetQuotaResponse::fromMap($this->doROARequest('GetQuota', '2015-11-11', 'HTTPS', 'GET', 'AK', '/quotas', 'none', $req, $runtime));
    }

    /**
     * @param string         $ResourceName
     * @param string         $TaskName
     * @param GetTaskRequest $request
     *
     * @return GetTaskResponse
     */
    public function getTask($ResourceName, $TaskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTaskWithOptions($ResourceName, $TaskName, $request, $headers, $runtime);
    }

    /**
     * @param string         $ResourceName
     * @param string         $TaskName
     * @param GetTaskRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($ResourceName, $TaskName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetTaskResponse::fromMap($this->doROARequest('GetTask', '2015-11-11', 'HTTPS', 'GET', 'AK', '/jobs/' . $ResourceName . '/tasks/{TaskName}', 'none', $req, $runtime));
    }

    /**
     * @return ListAppsResponse
     */
    public function listApps()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppsWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListAppsResponse
     */
    public function listAppsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListAppsResponse::fromMap($this->doROARequest('ListApps', '2015-11-11', 'HTTPS', 'GET', 'AK', '/apps', 'none', $req, $runtime));
    }

    /**
     * @return ListAvailableInstanceTypeResponse
     */
    public function listAvailableInstanceType()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAvailableInstanceTypeWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListAvailableInstanceTypeResponse
     */
    public function listAvailableInstanceTypeWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListAvailableInstanceTypeResponse::fromMap($this->doROARequest('ListAvailableInstanceType', '2015-11-11', 'HTTPS', 'GET', 'AK', '/available', 'none', $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $GroupName
     * @param ListClusterInstancesRequest $request
     *
     * @return ListClusterInstancesResponse
     */
    public function listClusterInstances($ClusterId, $GroupName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClusterInstancesWithOptions($ClusterId, $GroupName, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $GroupName
     * @param ListClusterInstancesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListClusterInstancesResponse
     */
    public function listClusterInstancesWithOptions($ClusterId, $GroupName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListClusterInstancesResponse::fromMap($this->doROARequest('ListClusterInstances', '2015-11-11', 'HTTPS', 'GET', 'AK', '/clusters/' . $ClusterId . '/groups/{GroupName}/instances', 'none', $req, $runtime));
    }

    /**
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listClustersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListClustersRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListClustersResponse::fromMap($this->doROARequest('ListClusters', '2015-11-11', 'HTTPS', 'GET', 'AK', '/clusters', 'none', $req, $runtime));
    }

    /**
     * @param ListImagesRequest $request
     *
     * @return ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listImagesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListImagesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListImagesResponse::fromMap($this->doROARequest('ListImages', '2015-11-11', 'HTTPS', 'GET', 'AK', '/images', 'none', $req, $runtime));
    }

    /**
     * @param string               $ResourceName
     * @param string               $TaskName
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($ResourceName, $TaskName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($ResourceName, $TaskName, $request, $headers, $runtime);
    }

    /**
     * @param string               $ResourceName
     * @param string               $TaskName
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($ResourceName, $TaskName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListInstancesResponse::fromMap($this->doROARequest('ListInstances', '2015-11-11', 'HTTPS', 'GET', 'AK', '/jobs/' . $ResourceName . '/tasks/{TaskName}/instances', 'none', $req, $runtime));
    }

    /**
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListJobsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListJobsResponse::fromMap($this->doROARequest('ListJobs', '2015-11-11', 'HTTPS', 'GET', 'AK', '/jobs', 'none', $req, $runtime));
    }

    /**
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegionsWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListRegionsResponse::fromMap($this->doROARequest('ListRegions', '2015-11-11', 'HTTPS', 'GET', 'AK', '/regions', 'none', $req, $runtime));
    }

    /**
     * @param string           $ResourceName
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTasksWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string           $ResourceName
     * @param ListTasksRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListTasksResponse::fromMap($this->doROARequest('ListTasks', '2015-11-11', 'HTTPS', 'GET', 'AK', '/jobs/' . $ResourceName . '/tasks', 'none', $req, $runtime));
    }

    /**
     * @param string $ResourceName
     *
     * @return ModifyAppResponse
     */
    public function modifyApp($ResourceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAppWithOptions($ResourceName, $headers, $runtime);
    }

    /**
     * @param string         $ResourceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyAppResponse
     */
    public function modifyAppWithOptions($ResourceName, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ModifyAppResponse::fromMap($this->doROARequest('ModifyApp', '2015-11-11', 'HTTPS', 'PUT', 'AK', '/apps/' . $ResourceName . '', 'none', $req, $runtime));
    }

    /**
     * @param string               $ResourceName
     * @param ModifyClusterRequest $request
     *
     * @return ModifyClusterResponse
     */
    public function modifyCluster($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyClusterWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string               $ResourceName
     * @param ModifyClusterRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyClusterResponse
     */
    public function modifyClusterWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ModifyClusterResponse::fromMap($this->doROARequest('ModifyCluster', '2015-11-11', 'HTTPS', 'PUT', 'AK', '/clusters/' . $ResourceName . '', 'none', $req, $runtime));
    }

    /**
     * @param string             $ClusterId
     * @param string             $WorkerId
     * @param PollForTaskRequest $request
     *
     * @return PollForTaskResponse
     */
    public function pollForTask($ClusterId, $WorkerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pollForTaskWithOptions($ClusterId, $WorkerId, $request, $headers, $runtime);
    }

    /**
     * @param string             $ClusterId
     * @param string             $WorkerId
     * @param PollForTaskRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return PollForTaskResponse
     */
    public function pollForTaskWithOptions($ClusterId, $WorkerId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return PollForTaskResponse::fromMap($this->doROARequest('PollForTask', '2015-11-11', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/workers/{WorkerId}/fetchTask', 'none', $req, $runtime));
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $GroupName
     * @param string                         $InstanceId
     * @param RecreateClusterInstanceRequest $request
     *
     * @return RecreateClusterInstanceResponse
     */
    public function recreateClusterInstance($ClusterId, $GroupName, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recreateClusterInstanceWithOptions($ClusterId, $GroupName, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                         $ClusterId
     * @param string                         $GroupName
     * @param string                         $InstanceId
     * @param RecreateClusterInstanceRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return RecreateClusterInstanceResponse
     */
    public function recreateClusterInstanceWithOptions($ClusterId, $GroupName, $InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RecreateClusterInstanceResponse::fromMap($this->doROARequest('RecreateClusterInstance', '2015-11-11', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/groups/{GroupName}/instances/{InstanceId}/recreate', 'none', $req, $runtime));
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $GroupName
     * @param string                      $InstanceId
     * @param RenewClusterInstanceRequest $request
     *
     * @return RenewClusterInstanceResponse
     */
    public function renewClusterInstance($ClusterId, $GroupName, $InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewClusterInstanceWithOptions($ClusterId, $GroupName, $InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $ClusterId
     * @param string                      $GroupName
     * @param string                      $InstanceId
     * @param RenewClusterInstanceRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return RenewClusterInstanceResponse
     */
    public function renewClusterInstanceWithOptions($ClusterId, $GroupName, $InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return RenewClusterInstanceResponse::fromMap($this->doROARequest('RenewClusterInstance', '2015-11-11', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/groups/{GroupName}/instances/{InstanceId}/renew', 'none', $req, $runtime));
    }

    /**
     * @param string                  $ClusterId
     * @param string                  $WorkerId
     * @param ReportTaskStatusRequest $request
     *
     * @return ReportTaskStatusResponse
     */
    public function reportTaskStatus($ClusterId, $WorkerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reportTaskStatusWithOptions($ClusterId, $WorkerId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $ClusterId
     * @param string                  $WorkerId
     * @param ReportTaskStatusRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ReportTaskStatusResponse
     */
    public function reportTaskStatusWithOptions($ClusterId, $WorkerId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ReportTaskStatusResponse::fromMap($this->doROARequest('ReportTaskStatus', '2015-11-11', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/workers/{WorkerId}/updateTaskStatus', 'none', $req, $runtime));
    }

    /**
     * @param string                    $ClusterId
     * @param string                    $WorkerId
     * @param ReportWorkerStatusRequest $request
     *
     * @return ReportWorkerStatusResponse
     */
    public function reportWorkerStatus($ClusterId, $WorkerId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->reportWorkerStatusWithOptions($ClusterId, $WorkerId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $ClusterId
     * @param string                    $WorkerId
     * @param ReportWorkerStatusRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ReportWorkerStatusResponse
     */
    public function reportWorkerStatusWithOptions($ClusterId, $WorkerId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ReportWorkerStatusResponse::fromMap($this->doROARequest('ReportWorkerStatus', '2015-11-11', 'HTTPS', 'POST', 'AK', '/clusters/' . $ClusterId . '/workers/{WorkerId}/updateStatus', 'none', $req, $runtime));
    }

    /**
     * @param string          $ResourceName
     * @param StartJobRequest $request
     *
     * @return StartJobResponse
     */
    public function startJob($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startJobWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string          $ResourceName
     * @param StartJobRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return StartJobResponse
     */
    public function startJobWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return StartJobResponse::fromMap($this->doROARequest('StartJob', '2015-11-11', 'HTTPS', 'POST', 'AK', '/jobs/' . $ResourceName . '/start', 'none', $req, $runtime));
    }

    /**
     * @param string         $ResourceName
     * @param StopJobRequest $request
     *
     * @return StopJobResponse
     */
    public function stopJob($ResourceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopJobWithOptions($ResourceName, $request, $headers, $runtime);
    }

    /**
     * @param string         $ResourceName
     * @param StopJobRequest $request
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopJobResponse
     */
    public function stopJobWithOptions($ResourceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            @$query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return StopJobResponse::fromMap($this->doROARequest('StopJob', '2015-11-11', 'HTTPS', 'POST', 'AK', '/jobs/' . $ResourceName . '/stop', 'none', $req, $runtime));
    }
}
