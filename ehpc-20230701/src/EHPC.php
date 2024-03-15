<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EHPC\V20230701\Models\AddImageRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\AddImageResponse;
use AlibabaCloud\SDK\EHPC\V20230701\Models\AddImageShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\CreateJobRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\CreateJobResponse;
use AlibabaCloud\SDK\EHPC\V20230701\Models\CreateJobShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\DeleteJobsRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\DeleteJobsResponse;
use AlibabaCloud\SDK\EHPC\V20230701\Models\DeleteJobsShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\GetImageRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\GetImageResponse;
use AlibabaCloud\SDK\EHPC\V20230701\Models\GetJobRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\GetJobResponse;
use AlibabaCloud\SDK\EHPC\V20230701\Models\ListExecutorsRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\ListExecutorsResponse;
use AlibabaCloud\SDK\EHPC\V20230701\Models\ListExecutorsShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\ListImagesRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\ListImagesResponse;
use AlibabaCloud\SDK\EHPC\V20230701\Models\ListImagesShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\ListJobExecutorsRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\ListJobExecutorsResponse;
use AlibabaCloud\SDK\EHPC\V20230701\Models\ListJobsRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\ListJobsResponse;
use AlibabaCloud\SDK\EHPC\V20230701\Models\ListJobsShrinkRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\RemoveImageRequest;
use AlibabaCloud\SDK\EHPC\V20230701\Models\RemoveImageResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class EHPC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ehpc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddImageRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return AddImageResponse
     */
    public function addImageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddImageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->containerImageSpec)) {
            $request->containerImageSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->containerImageSpec, 'ContainerImageSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->VMImageSpec)) {
            $request->VMImageSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->VMImageSpec, 'VMImageSpec', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->containerImageSpecShrink)) {
            $query['ContainerImageSpec'] = $request->containerImageSpecShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->VMImageSpecShrink)) {
            $query['VMImageSpec'] = $request->VMImageSpecShrink;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddImage',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddImageRequest $request
     *
     * @return AddImageResponse
     */
    public function addImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImageWithOptions($request, $runtime);
    }

    /**
     * @param CreateJobRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->deploymentPolicy)) {
            $request->deploymentPolicyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->deploymentPolicy, 'DeploymentPolicy', 'json');
        }
        if (!Utils::isUnset($tmpReq->tasks)) {
            $request->tasksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tasks, 'Tasks', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->deploymentPolicyShrink)) {
            $query['DeploymentPolicy'] = $request->deploymentPolicyShrink;
        }
        if (!Utils::isUnset($request->jobDescription)) {
            $query['JobDescription'] = $request->jobDescription;
        }
        if (!Utils::isUnset($request->jobName)) {
            $query['JobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->tasksShrink)) {
            $query['Tasks'] = $request->tasksShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateJob',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobWithOptions($request, $runtime);
    }

    /**
     * @param DeleteJobsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->executorIds)) {
            $request->executorIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'ExecutorIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->jobSpec)) {
            $request->jobSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobSpec, 'JobSpec', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->executorIdsShrink)) {
            $query['ExecutorIds'] = $request->executorIdsShrink;
        }
        if (!Utils::isUnset($request->jobSpecShrink)) {
            $query['JobSpec'] = $request->jobSpecShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteJobs',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteJobsRequest $request
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobsWithOptions($request, $runtime);
    }

    /**
     * @param GetImageRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return GetImageResponse
     */
    public function getImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImage',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetImageRequest $request
     *
     * @return GetImageResponse
     */
    public function getImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageWithOptions($request, $runtime);
    }

    /**
     * @param GetJobRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJob',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetJobRequest $request
     *
     * @return GetJobResponse
     */
    public function getJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobWithOptions($request, $runtime);
    }

    /**
     * @param ListExecutorsRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ListExecutorsResponse
     */
    public function listExecutorsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListExecutorsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterShrink)) {
            $query['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListExecutors',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListExecutorsRequest $request
     *
     * @return ListExecutorsResponse
     */
    public function listExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutorsWithOptions($request, $runtime);
    }

    /**
     * @param ListImagesRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListImagesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->imageIds)) {
            $request->imageIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageIds, 'ImageIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->imageNames)) {
            $request->imageNamesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->imageNames, 'ImageNames', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->imageIdsShrink)) {
            $query['ImageIds'] = $request->imageIdsShrink;
        }
        if (!Utils::isUnset($request->imageNamesShrink)) {
            $query['ImageNames'] = $request->imageNamesShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImages',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListImagesRequest $request
     *
     * @return ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesWithOptions($request, $runtime);
    }

    /**
     * @param ListJobExecutorsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListJobExecutorsResponse
     */
    public function listJobExecutorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobExecutors',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListJobExecutorsRequest $request
     *
     * @return ListJobExecutorsResponse
     */
    public function listJobExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobExecutorsWithOptions($request, $runtime);
    }

    /**
     * @param ListJobsRequest $tmpReq
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filter)) {
            $request->filterShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filter, 'Filter', 'json');
        }
        if (!Utils::isUnset($tmpReq->sortBy)) {
            $request->sortByShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->sortBy, 'SortBy', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->filterShrink)) {
            $query['Filter'] = $request->filterShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortByShrink)) {
            $query['SortBy'] = $request->sortByShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * @param RemoveImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveImageResponse
     */
    public function removeImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveImage',
            'version'     => '2023-07-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveImageRequest $request
     *
     * @return RemoveImageResponse
     */
    public function removeImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeImageWithOptions($request, $runtime);
    }
}
