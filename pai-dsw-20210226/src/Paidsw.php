<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceShutdownTimerRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceSnapshotRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\DeleteInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\DeleteInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetAuthorizationResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetDashboardStatisticsRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetDashboardStatisticsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstancesStatisticsRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstancesStatisticsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListEcsSpecsRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListEcsSpecsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListImagesRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListImagesResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstanceSnapshotsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesStatusRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesStatusResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceSnapshotRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateV3InstanceByUserRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateV3InstanceByUserResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Paidsw extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pai-dsw', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->datasetList)) {
            $body['DatasetList'] = $request->datasetList;
        }
        if (!Utils::isUnset($request->ecsSpec)) {
            $body['EcsSpec'] = $request->ecsSpec;
        }
        if (!Utils::isUnset($request->environments)) {
            $body['Environments'] = $request->environments;
        }
        if (!Utils::isUnset($request->imageId)) {
            $body['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->isPublic)) {
            $body['IsPublic'] = $request->isPublic;
        }
        if (!Utils::isUnset($request->nasFileSystemId)) {
            $body['NasFileSystemId'] = $request->nasFileSystemId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userVpc)) {
            $body['UserVpc'] = $request->userVpc;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                             $InstanceId
     * @param CreateInstanceShutdownTimerRequest $request
     *
     * @return CreateInstanceShutdownTimerResponse
     */
    public function createInstanceShutdownTimer($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceShutdownTimerWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                             $InstanceId
     * @param CreateInstanceShutdownTimerRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateInstanceShutdownTimerResponse
     */
    public function createInstanceShutdownTimerWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $body       = [];
        if (!Utils::isUnset($request->scheduleTime)) {
            $body['ScheduleTime'] = $request->scheduleTime;
        }
        if (!Utils::isUnset($request->ttlInMillis)) {
            $body['TtlInMillis'] = $request->ttlInMillis;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceShutdownTimer',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '/shutdownTimer',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceShutdownTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $InstanceId
     * @param CreateInstanceSnapshotRequest $request
     *
     * @return CreateInstanceSnapshotResponse
     */
    public function createInstanceSnapshot($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceSnapshotWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $InstanceId
     * @param CreateInstanceSnapshotRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateInstanceSnapshotResponse
     */
    public function createInstanceSnapshotWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $body       = [];
        if (!Utils::isUnset($request->instanceSnapshotDescription)) {
            $body['InstanceSnapshotDescription'] = $request->instanceSnapshotDescription;
        }
        if (!Utils::isUnset($request->instanceSnapshotName)) {
            $body['InstanceSnapshotName'] = $request->instanceSnapshotName;
        }
        if (!Utils::isUnset($request->instanceSnapshotRepoUrl)) {
            $body['InstanceSnapshotRepoUrl'] = $request->instanceSnapshotRepoUrl;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceSnapshot',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '/snapshots',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return DeleteInstanceShutdownTimerResponse
     */
    public function deleteInstanceShutdownTimer($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceShutdownTimerWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInstanceShutdownTimerResponse
     */
    public function deleteInstanceShutdownTimerWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceShutdownTimer',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '/shutdownTimer',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceShutdownTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $InstanceSnapshotId
     *
     * @return DeleteInstanceSnapshotResponse
     */
    public function deleteInstanceSnapshot($InstanceId, $InstanceSnapshotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceSnapshotWithOptions($InstanceId, $InstanceSnapshotId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $InstanceSnapshotId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInstanceSnapshotResponse
     */
    public function deleteInstanceSnapshotWithOptions($InstanceId, $InstanceSnapshotId, $headers, $runtime)
    {
        $InstanceId         = OpenApiUtilClient::getEncodeParam($InstanceId);
        $InstanceSnapshotId = OpenApiUtilClient::getEncodeParam($InstanceSnapshotId);
        $req                = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceSnapshot',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '/snapshots/' . $InstanceSnapshotId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetAuthorizationResponse
     */
    public function getAuthorization()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getAuthorizationWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetAuthorizationResponse
     */
    public function getAuthorizationWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetAuthorization',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/authorization',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetAuthorizationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDashboardStatisticsRequest $request
     *
     * @return GetDashboardStatisticsResponse
     */
    public function getDashboardStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDashboardStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetDashboardStatisticsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetDashboardStatisticsResponse
     */
    public function getDashboardStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDashboardStatistics',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/statistics/dashboard',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDashboardStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return GetInstanceResponse
     */
    public function getInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return GetInstanceShutdownTimerResponse
     */
    public function getInstanceShutdownTimer($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceShutdownTimerWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceShutdownTimerResponse
     */
    public function getInstanceShutdownTimerWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstanceShutdownTimer',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '/shutdownTimer',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceShutdownTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     * @param string $InstanceSnapshotId
     *
     * @return GetInstanceSnapshotResponse
     */
    public function getInstanceSnapshot($InstanceId, $InstanceSnapshotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceSnapshotWithOptions($InstanceId, $InstanceSnapshotId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $InstanceSnapshotId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceSnapshotResponse
     */
    public function getInstanceSnapshotWithOptions($InstanceId, $InstanceSnapshotId, $headers, $runtime)
    {
        $InstanceId         = OpenApiUtilClient::getEncodeParam($InstanceId);
        $InstanceSnapshotId = OpenApiUtilClient::getEncodeParam($InstanceSnapshotId);
        $req                = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstanceSnapshot',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '/snapshots/' . $InstanceSnapshotId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstancesStatisticsRequest $request
     *
     * @return GetInstancesStatisticsResponse
     */
    public function getInstancesStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstancesStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetInstancesStatisticsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetInstancesStatisticsResponse
     */
    public function getInstancesStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceIds)) {
            $query['WorkspaceIds'] = $request->workspaceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstancesStatistics',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/statistics/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstancesStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEcsSpecsRequest $request
     *
     * @return ListEcsSpecsResponse
     */
    public function listEcsSpecs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEcsSpecsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEcsSpecsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListEcsSpecsResponse
     */
    public function listEcsSpecsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorTypeEquals)) {
            $query['AcceleratorTypeEquals'] = $request->acceleratorTypeEquals;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEcsSpecs',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/ecsSpecs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEcsSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        if (!Utils::isUnset($request->acceleratorTypeEquals)) {
            $query['AcceleratorTypeEquals'] = $request->acceleratorTypeEquals;
        }
        if (!Utils::isUnset($request->imageNameContains)) {
            $query['ImageNameContains'] = $request->imageNameContains;
        }
        if (!Utils::isUnset($request->imageTypeEquals)) {
            $query['ImageTypeEquals'] = $request->imageTypeEquals;
        }
        if (!Utils::isUnset($request->product)) {
            $query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImages',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return ListInstanceSnapshotsResponse
     */
    public function listInstanceSnapshots($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceSnapshotsWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListInstanceSnapshotsResponse
     */
    public function listInstanceSnapshotsWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListInstanceSnapshots',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '/snapshots',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListInstancesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inWorkspace)) {
            $query['InWorkspace'] = $request->inWorkspace;
        }
        if (!Utils::isUnset($request->instanceNameContains)) {
            $query['InstanceNameContains'] = $request->instanceNameContains;
        }
        if (!Utils::isUnset($request->instanceStatusEquals)) {
            $query['InstanceStatusEquals'] = $request->instanceStatusEquals;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->workspaceIdEquals)) {
            $query['WorkspaceIdEquals'] = $request->workspaceIdEquals;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstancesStatusRequest $request
     *
     * @return ListInstancesStatusResponse
     */
    public function listInstancesStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListInstancesStatusRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListInstancesStatusResponse
     */
    public function listInstancesStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstancesStatus',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/statuses/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return StartInstanceResponse
     */
    public function startInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartInstance',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $InstanceId
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string              $InstanceId
     * @param StopInstanceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
        if (!Utils::isUnset($request->saveImage)) {
            $query['SaveImage'] = $request->saveImage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopInstance',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $body       = [];
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstance',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $InstanceId
     * @param string                        $InstanceSnapshotId
     * @param UpdateInstanceSnapshotRequest $request
     *
     * @return UpdateInstanceSnapshotResponse
     */
    public function updateInstanceSnapshot($InstanceId, $InstanceSnapshotId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceSnapshotWithOptions($InstanceId, $InstanceSnapshotId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $InstanceId
     * @param string                        $InstanceSnapshotId
     * @param UpdateInstanceSnapshotRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateInstanceSnapshotResponse
     */
    public function updateInstanceSnapshotWithOptions($InstanceId, $InstanceSnapshotId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId         = OpenApiUtilClient::getEncodeParam($InstanceId);
        $InstanceSnapshotId = OpenApiUtilClient::getEncodeParam($InstanceSnapshotId);
        $body               = [];
        if (!Utils::isUnset($request->instanceSnapshotName)) {
            $body['InstanceSnapshotName'] = $request->instanceSnapshotName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceSnapshot',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/' . $InstanceId . '/snapshots/' . $InstanceSnapshotId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateV3InstanceByUserRequest $request
     *
     * @return UpdateV3InstanceByUserResponse
     */
    public function updateV3InstanceByUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateV3InstanceByUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateV3InstanceByUserRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateV3InstanceByUserResponse
     */
    public function updateV3InstanceByUserWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateV3InstanceByUser',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/instances/migrate/user',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateV3InstanceByUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
