<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20190430;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Vcs\V20190430\Models\CreateComputeTaskRequest;
use AlibabaCloud\SDK\Vcs\V20190430\Models\CreateComputeTaskResponse;
use AlibabaCloud\SDK\Vcs\V20190430\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Vcs\V20190430\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Vcs\V20190430\Models\DescribeComputeTasksRequest;
use AlibabaCloud\SDK\Vcs\V20190430\Models\DescribeComputeTasksResponse;
use AlibabaCloud\SDK\Vcs\V20190430\Models\DescribeDevicesRequest;
use AlibabaCloud\SDK\Vcs\V20190430\Models\DescribeDevicesResponse;
use AlibabaCloud\SDK\Vcs\V20190430\Models\DescribeProjectsRequest;
use AlibabaCloud\SDK\Vcs\V20190430\Models\DescribeProjectsResponse;
use AlibabaCloud\SDK\Vcs\V20190430\Models\GetPictureSearchResultsRequest;
use AlibabaCloud\SDK\Vcs\V20190430\Models\GetPictureSearchResultsResponse;
use AlibabaCloud\SDK\Vcs\V20190430\Models\ImportDevicesRequest;
use AlibabaCloud\SDK\Vcs\V20190430\Models\ImportDevicesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Vcs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vcs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateComputeTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateComputeTaskResponse
     */
    public function createComputeTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithmCodeList)) {
            $query['AlgorithmCodeList'] = $request->algorithmCodeList;
        }
        if (!Utils::isUnset($request->deviceCodeList)) {
            $query['DeviceCodeList'] = $request->deviceCodeList;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskName)) {
            $query['TaskName'] = $request->taskName;
        }
        if (!Utils::isUnset($request->vcsId)) {
            $query['VcsId'] = $request->vcsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateComputeTask',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateComputeTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateComputeTaskRequest $request
     *
     * @return CreateComputeTaskResponse
     */
    public function createComputeTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createComputeTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->areaCode)) {
            $query['AreaCode'] = $request->areaCode;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->timeZoneCode)) {
            $query['TimeZoneCode'] = $request->timeZoneCode;
        }
        if (!Utils::isUnset($request->vcsId)) {
            $query['VcsId'] = $request->vcsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @param DescribeComputeTasksRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeComputeTasksResponse
     */
    public function describeComputeTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->vcsId)) {
            $query['VcsId'] = $request->vcsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeComputeTasks',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeComputeTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeComputeTasksRequest $request
     *
     * @return DescribeComputeTasksResponse
     */
    public function describeComputeTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeComputeTasksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDevicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDevicesResponse
     */
    public function describeDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterKey)) {
            $query['FilterKey'] = $request->filterKey;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->vcsId)) {
            $query['VcsId'] = $request->vcsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDevices',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDevicesRequest $request
     *
     * @return DescribeDevicesResponse
     */
    public function describeDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProjectsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeProjectsResponse
     */
    public function describeProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->projectName)) {
            $query['ProjectName'] = $request->projectName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vcsId)) {
            $query['VcsId'] = $request->vcsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeProjects',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeProjectsRequest $request
     *
     * @return DescribeProjectsResponse
     */
    public function describeProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProjectsWithOptions($request, $runtime);
    }

    /**
     * @param GetPictureSearchResultsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetPictureSearchResultsResponse
     */
    public function getPictureSearchResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->algorithmType)) {
            $query['AlgorithmType'] = $request->algorithmType;
        }
        if (!Utils::isUnset($request->beginTime)) {
            $query['BeginTime'] = $request->beginTime;
        }
        if (!Utils::isUnset($request->deviceList)) {
            $query['DeviceList'] = $request->deviceList;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pictureContents)) {
            $query['PictureContents'] = $request->pictureContents;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->topNum)) {
            $query['TopNum'] = $request->topNum;
        }
        if (!Utils::isUnset($request->vcsId)) {
            $query['VcsId'] = $request->vcsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPictureSearchResults',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPictureSearchResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPictureSearchResultsRequest $request
     *
     * @return GetPictureSearchResultsResponse
     */
    public function getPictureSearchResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPictureSearchResultsWithOptions($request, $runtime);
    }

    /**
     * @param ImportDevicesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ImportDevicesResponse
     */
    public function importDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceList)) {
            $query['DeviceList'] = $request->deviceList;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vcsId)) {
            $query['VcsId'] = $request->vcsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportDevices',
            'version'     => '2019-04-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportDevicesRequest $request
     *
     * @return ImportDevicesResponse
     */
    public function importDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importDevicesWithOptions($request, $runtime);
    }
}
