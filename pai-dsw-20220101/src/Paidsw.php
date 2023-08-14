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
     * @param CreateIdleInstanceCullerRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateIdleInstanceCullerResponse
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
     * @param CreateIdleInstanceCullerRequest $request
     *
     * @return CreateIdleInstanceCullerResponse
     */
    public function createIdleInstanceCuller($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createIdleInstanceCullerWithOptions($InstanceId, $request, $headers, $runtime);
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
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->cloudDisks)) {
            $body['CloudDisks'] = $request->cloudDisks;
        }
        if (!Utils::isUnset($request->datasets)) {
            $body['Datasets'] = $request->datasets;
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
        $body = [];
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->labels)) {
            $body['Labels'] = $request->labels;
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteIdleInstanceCullerResponse
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
     * @return DeleteIdleInstanceCullerResponse
     */
    public function deleteIdleInstanceCuller($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteIdleInstanceCullerWithOptions($InstanceId, $headers, $runtime);
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
     * @return DeleteInstanceShutdownTimerResponse
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
     * @param string         $SnapshotId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInstanceSnapshotResponse
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
     * @param string $InstanceId
     * @param string $SnapshotId
     *
     * @return DeleteInstanceSnapshotResponse
     */
    public function deleteInstanceSnapshot($InstanceId, $SnapshotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceSnapshotWithOptions($InstanceId, $SnapshotId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetIdleInstanceCullerResponse
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
     * @return GetIdleInstanceCullerResponse
     */
    public function getIdleInstanceCuller($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getIdleInstanceCullerWithOptions($InstanceId, $headers, $runtime);
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
     * @param string                    $InstanceId
     * @param GetInstanceMetricsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetInstanceMetricsResponse
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
     * @param GetInstanceMetricsRequest $request
     *
     * @return GetInstanceMetricsResponse
     */
    public function getInstanceMetrics($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceMetricsWithOptions($InstanceId, $request, $headers, $runtime);
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
     * @param string         $SnapshotId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceSnapshotResponse
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
     * @param string $InstanceId
     * @param string $SnapshotId
     *
     * @return GetInstanceSnapshotResponse
     */
    public function getInstanceSnapshot($InstanceId, $SnapshotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceSnapshotWithOptions($InstanceId, $SnapshotId, $headers, $runtime);
    }

    /**
     * @param string              $InstanceId
     * @param GetLifecycleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetLifecycleResponse
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
     * @param GetLifecycleRequest $request
     *
     * @return GetLifecycleResponse
     */
    public function getLifecycle($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLifecycleWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param GetResourceGroupStatisticsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetResourceGroupStatisticsResponse
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
     * @param GetResourceGroupStatisticsRequest $request
     *
     * @return GetResourceGroupStatisticsResponse
     */
    public function getResourceGroupStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getResourceGroupStatisticsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetTokenRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
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
     * @param GetTokenRequest $request
     *
     * @return GetTokenResponse
     */
    public function getToken($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTokenWithOptions($request, $headers, $runtime);
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
     * @return GetUserConfigResponse
     */
    public function getUserConfig()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserConfigWithOptions($headers, $runtime);
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
     * @param string                      $InstanceId
     * @param ListInstanceSnapshotRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListInstanceSnapshotResponse
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
     * @param string                      $InstanceId
     * @param ListInstanceSnapshotRequest $request
     *
     * @return ListInstanceSnapshotResponse
     */
    public function listInstanceSnapshot($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceSnapshotWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param ListInstanceStatisticsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListInstanceStatisticsResponse
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
     * @param ListInstanceStatisticsRequest $request
     *
     * @return ListInstanceStatisticsResponse
     */
    public function listInstanceStatistics($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceStatisticsWithOptions($request, $headers, $runtime);
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
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartInstanceResponse
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
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->datasets)) {
            $body['Datasets'] = $request->datasets;
        }
        if (!Utils::isUnset($request->disassociateDatasets)) {
            $body['DisassociateDatasets'] = $request->disassociateDatasets;
        }
        if (!Utils::isUnset($request->disassociateVpc)) {
            $body['DisassociateVpc'] = $request->disassociateVpc;
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
}
