<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateImageRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateImageResponse;
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
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceImageResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstancesStatisticsRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstancesStatisticsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceTypeResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceUrlResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetUserConfigResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetUserResourceAuthorizationStatusResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetUserResourceStatusResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetUserSpecialVersionGpuResourceInfoRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetUserSpecialVersionGpuResourceInfoResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListConfigsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListDatasetsRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListDatasetsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListEcsSpecsRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListEcsSpecsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListImagesRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListImagesResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstanceSnapshotsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesStatusRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesStatusResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstanceTypesRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstanceTypesResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListNamespacesResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListNasesResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListNetworkSecurityGroupsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListNetworkVpcsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListNetworkVSwitchesResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListRepositoriesResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListUserClustersResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListUserWorkNodesRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListUserWorkNodesResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceSnapshotRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceSnapshotResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
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
        $body = [];
        if (!Utils::isUnset($request->description)) {
            @$body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->instanceId)) {
            @$body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            @$body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->repository)) {
            @$body['Repository'] = $request->repository;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateImageResponse::fromMap($this->doROARequest('CreateImage', '2021-02-26', 'HTTPS', 'POST', 'AK', '/api/v1/images', 'json', $req, $runtime));
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
            @$body['DatasetList'] = $request->datasetList;
        }
        if (!Utils::isUnset($request->ecsSpec)) {
            @$body['EcsSpec'] = $request->ecsSpec;
        }
        if (!Utils::isUnset($request->environments)) {
            @$body['Environments'] = $request->environments;
        }
        if (!Utils::isUnset($request->imageId)) {
            @$body['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            @$body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->instanceName)) {
            @$body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->isPublic)) {
            @$body['IsPublic'] = $request->isPublic;
        }
        if (!Utils::isUnset($request->nasFileSystemId)) {
            @$body['NasFileSystemId'] = $request->nasFileSystemId;
        }
        if (!Utils::isUnset($request->userName)) {
            @$body['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->userVpc)) {
            @$body['UserVpc'] = $request->userVpc;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateInstanceResponse::fromMap($this->doROARequest('CreateInstance', '2021-02-26', 'HTTPS', 'POST', 'AK', '/api/v1/instances/', 'json', $req, $runtime));
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
            @$body['ScheduleTime'] = $request->scheduleTime;
        }
        if (!Utils::isUnset($request->ttlInMillis)) {
            @$body['TtlInMillis'] = $request->ttlInMillis;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateInstanceShutdownTimerResponse::fromMap($this->doROARequest('CreateInstanceShutdownTimer', '2021-02-26', 'HTTPS', 'POST', 'AK', '/api/v1/instances/' . $InstanceId . '/shutdownTimer', 'json', $req, $runtime));
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
            @$body['InstanceSnapshotDescription'] = $request->instanceSnapshotDescription;
        }
        if (!Utils::isUnset($request->instanceSnapshotName)) {
            @$body['InstanceSnapshotName'] = $request->instanceSnapshotName;
        }
        if (!Utils::isUnset($request->instanceSnapshotRepoUrl)) {
            @$body['InstanceSnapshotRepoUrl'] = $request->instanceSnapshotRepoUrl;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateInstanceSnapshotResponse::fromMap($this->doROARequest('CreateInstanceSnapshot', '2021-02-26', 'HTTPS', 'POST', 'AK', '/api/v1/instances/' . $InstanceId . '/snapshots', 'json', $req, $runtime));
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

        return DeleteInstanceResponse::fromMap($this->doROARequest('DeleteInstance', '2021-02-26', 'HTTPS', 'DELETE', 'AK', '/api/v1/instances/' . $InstanceId . '', 'json', $req, $runtime));
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

        return DeleteInstanceShutdownTimerResponse::fromMap($this->doROARequest('DeleteInstanceShutdownTimer', '2021-02-26', 'HTTPS', 'DELETE', 'AK', '/api/v1/instances/' . $InstanceId . '/shutdownTimer', 'json', $req, $runtime));
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

        return DeleteInstanceSnapshotResponse::fromMap($this->doROARequest('DeleteInstanceSnapshot', '2021-02-26', 'HTTPS', 'DELETE', 'AK', '/api/v1/instances/' . $InstanceId . '/snapshots/' . $InstanceSnapshotId . '', 'json', $req, $runtime));
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

        return GetAuthorizationResponse::fromMap($this->doROARequest('GetAuthorization', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/authorization', 'json', $req, $runtime));
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
            @$query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetDashboardStatisticsResponse::fromMap($this->doROARequest('GetDashboardStatistics', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/statistics/dashboard', 'json', $req, $runtime));
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

        return GetInstanceResponse::fromMap($this->doROARequest('GetInstance', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/instances/' . $InstanceId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return GetInstanceImageResponse
     */
    public function getInstanceImage($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceImageWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceImageResponse
     */
    public function getInstanceImageWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetInstanceImageResponse::fromMap($this->doROARequest('GetInstanceImage', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/instances/' . $InstanceId . '/image', 'json', $req, $runtime));
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

        return GetInstanceShutdownTimerResponse::fromMap($this->doROARequest('GetInstanceShutdownTimer', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/instances/' . $InstanceId . '/shutdownTimer', 'json', $req, $runtime));
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

        return GetInstanceSnapshotResponse::fromMap($this->doROARequest('GetInstanceSnapshot', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/instances/' . $InstanceId . '/snapshots/' . $InstanceSnapshotId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceTypeId
     *
     * @return GetInstanceTypeResponse
     */
    public function getInstanceType($InstanceTypeId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceTypeWithOptions($InstanceTypeId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceTypeId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceTypeResponse
     */
    public function getInstanceTypeWithOptions($InstanceTypeId, $headers, $runtime)
    {
        $InstanceTypeId = OpenApiUtilClient::getEncodeParam($InstanceTypeId);
        $req            = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetInstanceTypeResponse::fromMap($this->doROARequest('GetInstanceType', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/instanceTypes/' . $InstanceTypeId . '', 'json', $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return GetInstanceUrlResponse
     */
    public function getInstanceUrl($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceUrlWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceUrlResponse
     */
    public function getInstanceUrlWithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetInstanceUrlResponse::fromMap($this->doROARequest('GetInstanceUrl', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/instances/' . $InstanceId . '/url', 'json', $req, $runtime));
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
            @$query['WorkspaceIds'] = $request->workspaceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetInstancesStatisticsResponse::fromMap($this->doROARequest('GetInstancesStatistics', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/statistics/instances', 'json', $req, $runtime));
    }

    /**
     * @return GetUserConfigResponse
     */
    public function getUserConfig()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserConfigWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserConfigResponse
     */
    public function getUserConfigWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetUserConfigResponse::fromMap($this->doROARequest('GetUserConfig', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/users/config', 'json', $req, $runtime));
    }

    /**
     * @return GetUserResourceAuthorizationStatusResponse
     */
    public function getUserResourceAuthorizationStatus()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserResourceAuthorizationStatusWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResourceAuthorizationStatusResponse
     */
    public function getUserResourceAuthorizationStatusWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetUserResourceAuthorizationStatusResponse::fromMap($this->doROARequest('GetUserResourceAuthorizationStatus', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/users/resourceAuthorizationStatus', 'json', $req, $runtime));
    }

    /**
     * @return GetUserResourceStatusResponse
     */
    public function getUserResourceStatus()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserResourceStatusWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResourceStatusResponse
     */
    public function getUserResourceStatusWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetUserResourceStatusResponse::fromMap($this->doROARequest('GetUserResourceStatus', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/users/resourceStatus', 'json', $req, $runtime));
    }

    /**
     * @param GetUserSpecialVersionGpuResourceInfoRequest $request
     *
     * @return GetUserSpecialVersionGpuResourceInfoResponse
     */
    public function getUserSpecialVersionGpuResourceInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserSpecialVersionGpuResourceInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetUserSpecialVersionGpuResourceInfoRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return GetUserSpecialVersionGpuResourceInfoResponse
     */
    public function getUserSpecialVersionGpuResourceInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->payType)) {
            @$query['PayType'] = $request->payType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetUserSpecialVersionGpuResourceInfoResponse::fromMap($this->doROARequest('GetUserSpecialVersionGpuResourceInfo', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/users/specialVersionGpuResourceInfo', 'json', $req, $runtime));
    }

    /**
     * @return ListConfigsResponse
     */
    public function listConfigs()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listConfigsWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListConfigsResponse
     */
    public function listConfigsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListConfigsResponse::fromMap($this->doROARequest('ListConfigs', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/configs', 'json', $req, $runtime));
    }

    /**
     * @param ListDatasetsRequest $request
     *
     * @return ListDatasetsResponse
     */
    public function listDatasets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDatasetsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDatasetsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListDatasetsResponse
     */
    public function listDatasetsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workspaceId)) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListDatasetsResponse::fromMap($this->doROARequest('ListDatasets', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/datasets', 'json', $req, $runtime));
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
            @$query['AcceleratorTypeEquals'] = $request->acceleratorTypeEquals;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListEcsSpecsResponse::fromMap($this->doROARequest('ListEcsSpecs', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/ecsSpecs', 'json', $req, $runtime));
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
            @$query['AcceleratorTypeEquals'] = $request->acceleratorTypeEquals;
        }
        if (!Utils::isUnset($request->imageNameContains)) {
            @$query['ImageNameContains'] = $request->imageNameContains;
        }
        if (!Utils::isUnset($request->imageTypeEquals)) {
            @$query['ImageTypeEquals'] = $request->imageTypeEquals;
        }
        if (!Utils::isUnset($request->product)) {
            @$query['Product'] = $request->product;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListImagesResponse::fromMap($this->doROARequest('ListImages', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/images', 'json', $req, $runtime));
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

        return ListInstanceSnapshotsResponse::fromMap($this->doROARequest('ListInstanceSnapshots', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/instances/' . $InstanceId . '/snapshots', 'json', $req, $runtime));
    }

    /**
     * @param ListInstanceTypesRequest $request
     *
     * @return ListInstanceTypesResponse
     */
    public function listInstanceTypes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceTypesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListInstanceTypesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListInstanceTypesResponse
     */
    public function listInstanceTypesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorType)) {
            @$query['AcceleratorType'] = $request->acceleratorType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListInstanceTypesResponse::fromMap($this->doROARequest('ListInstanceTypes', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/instanceTypes', 'json', $req, $runtime));
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
            @$query['InWorkspace'] = $request->inWorkspace;
        }
        if (!Utils::isUnset($request->instanceNameContains)) {
            @$query['InstanceNameContains'] = $request->instanceNameContains;
        }
        if (!Utils::isUnset($request->instanceStatusEquals)) {
            @$query['InstanceStatusEquals'] = $request->instanceStatusEquals;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            @$query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            @$query['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->workspaceIdEquals)) {
            @$query['WorkspaceIdEquals'] = $request->workspaceIdEquals;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListInstancesResponse::fromMap($this->doROARequest('ListInstances', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/instances', 'json', $req, $runtime));
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
            @$query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListInstancesStatusResponse::fromMap($this->doROARequest('ListInstancesStatus', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/statuses/instances', 'json', $req, $runtime));
    }

    /**
     * @return ListNamespacesResponse
     */
    public function listNamespaces()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNamespacesWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListNamespacesResponse
     */
    public function listNamespacesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListNamespacesResponse::fromMap($this->doROARequest('ListNamespaces', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/imageRegistry/namespaces', 'json', $req, $runtime));
    }

    /**
     * @return ListNasesResponse
     */
    public function listNases()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNasesWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListNasesResponse
     */
    public function listNasesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListNasesResponse::fromMap($this->doROARequest('ListNases', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/nases', 'json', $req, $runtime));
    }

    /**
     * @param string $VpcId
     *
     * @return ListNetworkSecurityGroupsResponse
     */
    public function listNetworkSecurityGroups($VpcId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNetworkSecurityGroupsWithOptions($VpcId, $headers, $runtime);
    }

    /**
     * @param string         $VpcId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListNetworkSecurityGroupsResponse
     */
    public function listNetworkSecurityGroupsWithOptions($VpcId, $headers, $runtime)
    {
        $VpcId = OpenApiUtilClient::getEncodeParam($VpcId);
        $req   = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListNetworkSecurityGroupsResponse::fromMap($this->doROARequest('ListNetworkSecurityGroups', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/network/vpcs/' . $VpcId . '/securityGroups', 'json', $req, $runtime));
    }

    /**
     * @param string $VpcId
     *
     * @return ListNetworkVSwitchesResponse
     */
    public function listNetworkVSwitches($VpcId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNetworkVSwitchesWithOptions($VpcId, $headers, $runtime);
    }

    /**
     * @param string         $VpcId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListNetworkVSwitchesResponse
     */
    public function listNetworkVSwitchesWithOptions($VpcId, $headers, $runtime)
    {
        $VpcId = OpenApiUtilClient::getEncodeParam($VpcId);
        $req   = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListNetworkVSwitchesResponse::fromMap($this->doROARequest('ListNetworkVSwitches', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/network/vpcs/' . $VpcId . '/vSwitches', 'json', $req, $runtime));
    }

    /**
     * @return ListNetworkVpcsResponse
     */
    public function listNetworkVpcs()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listNetworkVpcsWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListNetworkVpcsResponse
     */
    public function listNetworkVpcsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListNetworkVpcsResponse::fromMap($this->doROARequest('ListNetworkVpcs', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/network/vpcs', 'json', $req, $runtime));
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

        return ListRegionsResponse::fromMap($this->doROARequest('ListRegions', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/configs/regions', 'json', $req, $runtime));
    }

    /**
     * @param string $Namespace
     *
     * @return ListRepositoriesResponse
     */
    public function listRepositories($Namespace)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRepositoriesWithOptions($Namespace, $headers, $runtime);
    }

    /**
     * @param string         $Namespace
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRepositoriesResponse
     */
    public function listRepositoriesWithOptions($Namespace, $headers, $runtime)
    {
        $Namespace = OpenApiUtilClient::getEncodeParam($Namespace);
        $req       = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListRepositoriesResponse::fromMap($this->doROARequest('ListRepositories', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/imageRegistry/namespaces/' . $Namespace . '/repositories', 'json', $req, $runtime));
    }

    /**
     * @return ListUserClustersResponse
     */
    public function listUserClusters()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserClustersWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListUserClustersResponse
     */
    public function listUserClustersWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return ListUserClustersResponse::fromMap($this->doROARequest('ListUserClusters', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/users/clusters', 'json', $req, $runtime));
    }

    /**
     * @param ListUserWorkNodesRequest $request
     *
     * @return ListUserWorkNodesResponse
     */
    public function listUserWorkNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserWorkNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListUserWorkNodesRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListUserWorkNodesResponse
     */
    public function listUserWorkNodesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            @$query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListUserWorkNodesResponse::fromMap($this->doROARequest('ListUserWorkNodes', '2021-02-26', 'HTTPS', 'GET', 'AK', '/api/v1/users/workerNodes', 'json', $req, $runtime));
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

        return StartInstanceResponse::fromMap($this->doROARequest('StartInstance', '2021-02-26', 'HTTPS', 'PUT', 'AK', '/api/v1/instances/' . $InstanceId . '/start', 'json', $req, $runtime));
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
            @$query['SaveImage'] = $request->saveImage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return StopInstanceResponse::fromMap($this->doROARequest('StopInstance', '2021-02-26', 'HTTPS', 'PUT', 'AK', '/api/v1/instances/' . $InstanceId . '/stop', 'json', $req, $runtime));
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
            @$body['InstanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateInstanceResponse::fromMap($this->doROARequest('UpdateInstance', '2021-02-26', 'HTTPS', 'PUT', 'AK', '/api/v1/instances/' . $InstanceId . '', 'json', $req, $runtime));
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
            @$body['InstanceSnapshotName'] = $request->instanceSnapshotName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateInstanceSnapshotResponse::fromMap($this->doROARequest('UpdateInstanceSnapshot', '2021-02-26', 'HTTPS', 'PUT', 'AK', '/api/v1/instances/' . $InstanceId . '/snapshots/' . $InstanceSnapshotId . '', 'json', $req, $runtime));
    }
}
