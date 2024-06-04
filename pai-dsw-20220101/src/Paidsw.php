<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateIdleInstanceCullerRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateIdleInstanceCullerResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceShutdownTimerRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceSnapshotRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\DeleteIdleInstanceCullerResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\DeleteInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\DeleteInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetIdleInstanceCullerResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceEventsRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceEventsResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceMetricsRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceMetricsResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetLifecycleRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetLifecycleResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetResourceGroupStatisticsRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetResourceGroupStatisticsResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetTokenRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetTokenResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetUserConfigResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListEcsSpecsRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListEcsSpecsResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstanceSnapshotRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesShrinkRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstanceStatisticsRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstanceStatisticsResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceResponse;
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
     * @param string                          $InstanceId
     * @param CreateIdleInstanceCullerRequest $request    CreateIdleInstanceCullerRequest
     * @param string[]                        $headers    map
     * @param RuntimeOptions                  $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateIdleInstanceCullerResponse CreateIdleInstanceCullerResponse
     */
    public function createIdleInstanceCullerWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cpuPercentThreshold)) {
            $body['CpuPercentThreshold'] = $request->cpuPercentThreshold;
        }
        if (!Utils::isUnset($request->gpuPercentThreshold)) {
            $body['GpuPercentThreshold'] = $request->gpuPercentThreshold;
        }
        if (!Utils::isUnset($request->maxIdleTimeInMinutes)) {
            $body['MaxIdleTimeInMinutes'] = $request->maxIdleTimeInMinutes;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateIdleInstanceCuller',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/idleinstanceculler',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateIdleInstanceCullerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                          $InstanceId
     * @param CreateIdleInstanceCullerRequest $request    CreateIdleInstanceCullerRequest
     *
     * @return CreateIdleInstanceCullerResponse CreateIdleInstanceCullerResponse
     */
    public function createIdleInstanceCuller($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIdleInstanceCullerWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建实例
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param string[]              $headers map
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->cloudDisks)) {
            $body['CloudDisks'] = $request->cloudDisks;
        }
        if (!Utils::isUnset($request->datasets)) {
            $body['Datasets'] = $request->datasets;
        }
        if (!Utils::isUnset($request->driver)) {
            $body['Driver'] = $request->driver;
        }
        if (!Utils::isUnset($request->ecsSpec)) {
            $body['EcsSpec'] = $request->ecsSpec;
        }
        if (!Utils::isUnset($request->environmentVariables)) {
            $body['EnvironmentVariables'] = $request->environmentVariables;
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
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->requestedResource)) {
            $body['RequestedResource'] = $request->requestedResource;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userVpc)) {
            $body['UserVpc'] = $request->userVpc;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        if (!Utils::isUnset($request->workspaceSource)) {
            $body['WorkspaceSource'] = $request->workspaceSource;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实例
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 创建定时关机任务
     *  *
     * @param string                             $InstanceId
     * @param CreateInstanceShutdownTimerRequest $request    CreateInstanceShutdownTimerRequest
     * @param string[]                           $headers    map
     * @param RuntimeOptions                     $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceShutdownTimerResponse CreateInstanceShutdownTimerResponse
     */
    public function createInstanceShutdownTimerWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dueTime)) {
            $body['DueTime'] = $request->dueTime;
        }
        if (!Utils::isUnset($request->remainingTimeInMs)) {
            $body['RemainingTimeInMs'] = $request->remainingTimeInMs;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceShutdownTimer',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/shutdowntimer',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceShutdownTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建定时关机任务
     *  *
     * @param string                             $InstanceId
     * @param CreateInstanceShutdownTimerRequest $request    CreateInstanceShutdownTimerRequest
     *
     * @return CreateInstanceShutdownTimerResponse CreateInstanceShutdownTimerResponse
     */
    public function createInstanceShutdownTimer($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceShutdownTimerWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 创建实例快照
     *  *
     * @param string                        $InstanceId
     * @param CreateInstanceSnapshotRequest $request    CreateInstanceSnapshotRequest
     * @param string[]                      $headers    map
     * @param RuntimeOptions                $runtime    runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceSnapshotResponse CreateInstanceSnapshotResponse
     */
    public function createInstanceSnapshotWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->excludePaths)) {
            $body['ExcludePaths'] = $request->excludePaths;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->overwrite)) {
            $body['Overwrite'] = $request->overwrite;
        }
        if (!Utils::isUnset($request->snapshotDescription)) {
            $body['SnapshotDescription'] = $request->snapshotDescription;
        }
        if (!Utils::isUnset($request->snapshotName)) {
            $body['SnapshotName'] = $request->snapshotName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceSnapshot',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/snapshots',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实例快照
     *  *
     * @param string                        $InstanceId
     * @param CreateInstanceSnapshotRequest $request    CreateInstanceSnapshotRequest
     *
     * @return CreateInstanceSnapshotResponse CreateInstanceSnapshotResponse
     */
    public function createInstanceSnapshot($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceSnapshotWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteIdleInstanceCullerResponse DeleteIdleInstanceCullerResponse
     */
    public function deleteIdleInstanceCullerWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteIdleInstanceCuller',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/idleinstanceculler',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteIdleInstanceCullerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return DeleteIdleInstanceCullerResponse DeleteIdleInstanceCullerResponse
     */
    public function deleteIdleInstanceCuller($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIdleInstanceCullerWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 删除实例
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除实例
     *  *
     * @param string $InstanceId
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 删除定时关机任务
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceShutdownTimerResponse DeleteInstanceShutdownTimerResponse
     */
    public function deleteInstanceShutdownTimerWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceShutdownTimer',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/shutdowntimer',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceShutdownTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除定时关机任务
     *  *
     * @param string $InstanceId
     *
     * @return DeleteInstanceShutdownTimerResponse DeleteInstanceShutdownTimerResponse
     */
    public function deleteInstanceShutdownTimer($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceShutdownTimerWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 获取实例快照详情
     *  *
     * @param string         $InstanceId
     * @param string         $SnapshotId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceSnapshotResponse DeleteInstanceSnapshotResponse
     */
    public function deleteInstanceSnapshotWithOptions($InstanceId, $SnapshotId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceSnapshot',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/snapshots/' . OpenApiUtilClient::getEncodeParam($SnapshotId) . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例快照详情
     *  *
     * @param string $InstanceId
     * @param string $SnapshotId
     *
     * @return DeleteInstanceSnapshotResponse DeleteInstanceSnapshotResponse
     */
    public function deleteInstanceSnapshot($InstanceId, $SnapshotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceSnapshotWithOptions($InstanceId, $SnapshotId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetIdleInstanceCullerResponse GetIdleInstanceCullerResponse
     */
    public function getIdleInstanceCullerWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetIdleInstanceCuller',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/idleinstanceculler',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetIdleInstanceCullerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return GetIdleInstanceCullerResponse GetIdleInstanceCullerResponse
     */
    public function getIdleInstanceCuller($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIdleInstanceCullerWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 获取实例详情
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例详情
     *  *
     * @param string $InstanceId
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string                   $InstanceId
     * @param GetInstanceEventsRequest $request    GetInstanceEventsRequest
     * @param string[]                 $headers    map
     * @param RuntimeOptions           $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetInstanceEventsResponse GetInstanceEventsResponse
     */
    public function getInstanceEventsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxEventsNum)) {
            $query['MaxEventsNum'] = $request->maxEventsNum;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceEvents',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/events',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $InstanceId
     * @param GetInstanceEventsRequest $request    GetInstanceEventsRequest
     *
     * @return GetInstanceEventsResponse GetInstanceEventsResponse
     */
    public function getInstanceEvents($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceEventsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                    $InstanceId
     * @param GetInstanceMetricsRequest $request    GetInstanceMetricsRequest
     * @param string[]                  $headers    map
     * @param RuntimeOptions            $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetInstanceMetricsResponse GetInstanceMetricsResponse
     */
    public function getInstanceMetricsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeStep)) {
            $query['TimeStep'] = $request->timeStep;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceMetrics',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instance/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/metrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $InstanceId
     * @param GetInstanceMetricsRequest $request    GetInstanceMetricsRequest
     *
     * @return GetInstanceMetricsResponse GetInstanceMetricsResponse
     */
    public function getInstanceMetrics($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceMetricsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取定时关机任务
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetInstanceShutdownTimerResponse GetInstanceShutdownTimerResponse
     */
    public function getInstanceShutdownTimerWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstanceShutdownTimer',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/shutdowntimer',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceShutdownTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取定时关机任务
     *  *
     * @param string $InstanceId
     *
     * @return GetInstanceShutdownTimerResponse GetInstanceShutdownTimerResponse
     */
    public function getInstanceShutdownTimer($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceShutdownTimerWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 获取实例快照详情
     *  *
     * @param string         $InstanceId
     * @param string         $SnapshotId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetInstanceSnapshotResponse GetInstanceSnapshotResponse
     */
    public function getInstanceSnapshotWithOptions($InstanceId, $SnapshotId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstanceSnapshot',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/snapshots/' . OpenApiUtilClient::getEncodeParam($SnapshotId) . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例快照详情
     *  *
     * @param string $InstanceId
     * @param string $SnapshotId
     *
     * @return GetInstanceSnapshotResponse GetInstanceSnapshotResponse
     */
    public function getInstanceSnapshot($InstanceId, $SnapshotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceSnapshotWithOptions($InstanceId, $SnapshotId, $headers, $runtime);
    }

    /**
     * @param string              $InstanceId
     * @param GetLifecycleRequest $request    GetLifecycleRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return GetLifecycleResponse GetLifecycleResponse
     */
    public function getLifecycleWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->sessionNumber)) {
            $query['SessionNumber'] = $request->sessionNumber;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLifecycle',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/lifecycle',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLifecycleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $InstanceId
     * @param GetLifecycleRequest $request    GetLifecycleRequest
     *
     * @return GetLifecycleResponse GetLifecycleResponse
     */
    public function getLifecycle($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLifecycleWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param GetResourceGroupStatisticsRequest $request GetResourceGroupStatisticsRequest
     * @param string[]                          $headers map
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetResourceGroupStatisticsResponse GetResourceGroupStatisticsResponse
     */
    public function getResourceGroupStatisticsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->workspaceIds)) {
            $query['WorkspaceIds'] = $request->workspaceIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourceGroupStatistics',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/resourcegroupstatistics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetResourceGroupStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourceGroupStatisticsRequest $request GetResourceGroupStatisticsRequest
     *
     * @return GetResourceGroupStatisticsResponse GetResourceGroupStatisticsResponse
     */
    public function getResourceGroupStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetTokenRequest $request GetTokenRequest
     * @param string[]        $headers map
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTokenResponse GetTokenResponse
     */
    public function getTokenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetToken',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/tokens',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTokenRequest $request GetTokenRequest
     *
     * @return GetTokenResponse GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 获取用户配置
     *  *
     * @param string[]       $headers map
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUserConfigResponse GetUserConfigResponse
     */
    public function getUserConfigWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetUserConfig',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/userconfig',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取用户配置
     *  *
     * @return GetUserConfigResponse GetUserConfigResponse
     */
    public function getUserConfig()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserConfigWithOptions($headers, $runtime);
    }

    /**
     * @summary 获取ECS规格列表
     *  *
     * @param ListEcsSpecsRequest $request ListEcsSpecsRequest
     * @param string[]            $headers map
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEcsSpecsResponse ListEcsSpecsResponse
     */
    public function listEcsSpecsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorType)) {
            $query['AcceleratorType'] = $request->acceleratorType;
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
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEcsSpecs',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/ecsspecs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEcsSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取ECS规格列表
     *  *
     * @param ListEcsSpecsRequest $request ListEcsSpecsRequest
     *
     * @return ListEcsSpecsResponse ListEcsSpecsResponse
     */
    public function listEcsSpecs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEcsSpecsWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 查询实例快照列表
     *  *
     * @param string                      $InstanceId
     * @param ListInstanceSnapshotRequest $request    ListInstanceSnapshotRequest
     * @param string[]                    $headers    map
     * @param RuntimeOptions              $runtime    runtime options for this request RuntimeOptions
     *
     * @return ListInstanceSnapshotResponse ListInstanceSnapshotResponse
     */
    public function listInstanceSnapshotWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
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
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstanceSnapshot',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/snapshots',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询实例快照列表
     *  *
     * @param string                      $InstanceId
     * @param ListInstanceSnapshotRequest $request    ListInstanceSnapshotRequest
     *
     * @return ListInstanceSnapshotResponse ListInstanceSnapshotResponse
     */
    public function listInstanceSnapshot($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceSnapshotWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 获取实例统计信息
     *  *
     * @param ListInstanceStatisticsRequest $request ListInstanceStatisticsRequest
     * @param string[]                      $headers map
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceStatisticsResponse ListInstanceStatisticsResponse
     */
    public function listInstanceStatisticsWithOptions($request, $headers, $runtime)
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
            'action'      => 'ListInstanceStatistics',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instancestatistics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取实例统计信息
     *  *
     * @param ListInstanceStatisticsRequest $request ListInstanceStatisticsRequest
     *
     * @return ListInstanceStatisticsResponse ListInstanceStatisticsResponse
     */
    public function listInstanceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListInstancesRequest $tmpReq  ListInstancesRequest
     * @param string[]             $headers map
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->labels)) {
            $request->labelsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->labels, 'Labels', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->acceleratorType)) {
            $query['AcceleratorType'] = $request->acceleratorType;
        }
        if (!Utils::isUnset($request->accessibility)) {
            $query['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->labelsShrink)) {
            $query['Labels'] = $request->labelsShrink;
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
        if (!Utils::isUnset($request->paymentType)) {
            $query['PaymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstancesRequest $request ListInstancesRequest
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesWithOptions($request, $headers, $runtime);
    }

    /**
     * @summary 启动实例
     *  *
     * @param string         $InstanceId
     * @param string[]       $headers    map
     * @param RuntimeOptions $runtime    runtime options for this request RuntimeOptions
     *
     * @return StartInstanceResponse StartInstanceResponse
     */
    public function startInstanceWithOptions($InstanceId, $headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartInstance',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启动实例
     *  *
     * @param string $InstanceId
     *
     * @return StartInstanceResponse StartInstanceResponse
     */
    public function startInstance($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startInstanceWithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @summary 停止实例
     *  *
     * @param string              $InstanceId
     * @param StopInstanceRequest $request    StopInstanceRequest
     * @param string[]            $headers    map
     * @param RuntimeOptions      $runtime    runtime options for this request RuntimeOptions
     *
     * @return StopInstanceResponse StopInstanceResponse
     */
    public function stopInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->saveImage)) {
            $query['SaveImage'] = $request->saveImage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopInstance',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止实例
     *  *
     * @param string              $InstanceId
     * @param StopInstanceRequest $request    StopInstanceRequest
     *
     * @return StopInstanceResponse StopInstanceResponse
     */
    public function stopInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @summary 更新实例
     *  *
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request    UpdateInstanceRequest
     * @param string[]              $headers    map
     * @param RuntimeOptions        $runtime    runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->cloudDisks)) {
            $body['CloudDisks'] = $request->cloudDisks;
        }
        if (!Utils::isUnset($request->datasets)) {
            $body['Datasets'] = $request->datasets;
        }
        if (!Utils::isUnset($request->disassociateDatasets)) {
            $body['DisassociateDatasets'] = $request->disassociateDatasets;
        }
        if (!Utils::isUnset($request->disassociateDriver)) {
            $body['DisassociateDriver'] = $request->disassociateDriver;
        }
        if (!Utils::isUnset($request->disassociateForwardInfos)) {
            $body['DisassociateForwardInfos'] = $request->disassociateForwardInfos;
        }
        if (!Utils::isUnset($request->disassociateVpc)) {
            $body['DisassociateVpc'] = $request->disassociateVpc;
        }
        if (!Utils::isUnset($request->driver)) {
            $body['Driver'] = $request->driver;
        }
        if (!Utils::isUnset($request->ecsSpec)) {
            $body['EcsSpec'] = $request->ecsSpec;
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
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->requestedResource)) {
            $body['RequestedResource'] = $request->requestedResource;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userVpc)) {
            $body['UserVpc'] = $request->userVpc;
        }
        if (!Utils::isUnset($request->workspaceSource)) {
            $body['WorkspaceSource'] = $request->workspaceSource;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstance',
            'version'     => '2022-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . OpenApiUtilClient::getEncodeParam($InstanceId) . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新实例
     *  *
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request    UpdateInstanceRequest
     *
     * @return UpdateInstanceResponse UpdateInstanceResponse
     */
    public function updateInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }
}
