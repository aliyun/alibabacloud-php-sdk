<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Url;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateIdleInstanceCullerRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateIdleInstanceCullerResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceShutdownTimerRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceSnapshotRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\DeleteIdleInstanceCullerResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\DeleteInstanceLabelsRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\DeleteInstanceLabelsResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\DeleteInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\DeleteInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetIdleInstanceCullerResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceEventsRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceEventsResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceMetricsRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceMetricsResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetLifecycleRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetLifecycleResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetMetricsRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetMetricsResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetResourceGroupStatisticsRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetResourceGroupStatisticsResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetTokenRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetTokenResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetUserCommandRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetUserCommandResponse;
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
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListSystemLogsRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListSystemLogsResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceLabelsRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceLabelsResponse;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Creates an automatic stop policy for a specific Data Science Workshop (DSW) instance. When the conditions are met, the instance is automatically stopped. You can create only one automatic stop policy for an idle DSW instance. If the specific instance has an automatic stop policy, call DeleteIdleInstanceCuller to delete it first.
     *
     * @param request - CreateIdleInstanceCullerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateIdleInstanceCullerResponse
     *
     * @param string                          $InstanceId
     * @param CreateIdleInstanceCullerRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateIdleInstanceCullerResponse
     */
    public function createIdleInstanceCullerWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->cpuPercentThreshold) {
            @$body['CpuPercentThreshold'] = $request->cpuPercentThreshold;
        }

        if (null !== $request->gpuPercentThreshold) {
            @$body['GpuPercentThreshold'] = $request->gpuPercentThreshold;
        }

        if (null !== $request->maxIdleTimeInMinutes) {
            @$body['MaxIdleTimeInMinutes'] = $request->maxIdleTimeInMinutes;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateIdleInstanceCuller',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/idleinstanceculler',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateIdleInstanceCullerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an automatic stop policy for a specific Data Science Workshop (DSW) instance. When the conditions are met, the instance is automatically stopped. You can create only one automatic stop policy for an idle DSW instance. If the specific instance has an automatic stop policy, call DeleteIdleInstanceCuller to delete it first.
     *
     * @param request - CreateIdleInstanceCullerRequest
     *
     * @returns CreateIdleInstanceCullerResponse
     *
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
     * Creates a Data Science Workshop (DSW) instance.
     *
     * @param request - CreateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->affinity) {
            @$body['Affinity'] = $request->affinity;
        }

        if (null !== $request->cloudDisks) {
            @$body['CloudDisks'] = $request->cloudDisks;
        }

        if (null !== $request->credentialConfig) {
            @$body['CredentialConfig'] = $request->credentialConfig;
        }

        if (null !== $request->datasets) {
            @$body['Datasets'] = $request->datasets;
        }

        if (null !== $request->driver) {
            @$body['Driver'] = $request->driver;
        }

        if (null !== $request->dynamicMount) {
            @$body['DynamicMount'] = $request->dynamicMount;
        }

        if (null !== $request->ecsSpec) {
            @$body['EcsSpec'] = $request->ecsSpec;
        }

        if (null !== $request->environmentVariables) {
            @$body['EnvironmentVariables'] = $request->environmentVariables;
        }

        if (null !== $request->imageAuth) {
            @$body['ImageAuth'] = $request->imageAuth;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageUrl) {
            @$body['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->oversoldType) {
            @$body['OversoldType'] = $request->oversoldType;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->requestedResource) {
            @$body['RequestedResource'] = $request->requestedResource;
        }

        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->tag) {
            @$body['Tag'] = $request->tag;
        }

        if (null !== $request->userCommand) {
            @$body['UserCommand'] = $request->userCommand;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->userVpc) {
            @$body['UserVpc'] = $request->userVpc;
        }

        if (null !== $request->workspaceId) {
            @$body['WorkspaceId'] = $request->workspaceId;
        }

        if (null !== $request->workspaceSource) {
            @$body['WorkspaceSource'] = $request->workspaceSource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Data Science Workshop (DSW) instance.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
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
     * Creates a scheduled stop task for an instance.
     *
     * @param request - CreateInstanceShutdownTimerRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceShutdownTimerResponse
     *
     * @param string                             $InstanceId
     * @param CreateInstanceShutdownTimerRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateInstanceShutdownTimerResponse
     */
    public function createInstanceShutdownTimerWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->dueTime) {
            @$body['DueTime'] = $request->dueTime;
        }

        if (null !== $request->remainingTimeInMs) {
            @$body['RemainingTimeInMs'] = $request->remainingTimeInMs;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceShutdownTimer',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/shutdowntimer',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceShutdownTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a scheduled stop task for an instance.
     *
     * @param request - CreateInstanceShutdownTimerRequest
     *
     * @returns CreateInstanceShutdownTimerResponse
     *
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
     * 创建实例快照.
     *
     * @param request - CreateInstanceSnapshotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceSnapshotResponse
     *
     * @param string                        $InstanceId
     * @param CreateInstanceSnapshotRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateInstanceSnapshotResponse
     */
    public function createInstanceSnapshotWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->excludePaths) {
            @$body['ExcludePaths'] = $request->excludePaths;
        }

        if (null !== $request->imageUrl) {
            @$body['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        if (null !== $request->overwrite) {
            @$body['Overwrite'] = $request->overwrite;
        }

        if (null !== $request->snapshotDescription) {
            @$body['SnapshotDescription'] = $request->snapshotDescription;
        }

        if (null !== $request->snapshotName) {
            @$body['SnapshotName'] = $request->snapshotName;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceSnapshot',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/snapshots',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return CreateInstanceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实例快照.
     *
     * @param request - CreateInstanceSnapshotRequest
     *
     * @returns CreateInstanceSnapshotResponse
     *
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
     * Deletes the automatic stop policy of an instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteIdleInstanceCullerResponse
     *
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
            'action' => 'DeleteIdleInstanceCuller',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/idleinstanceculler',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteIdleInstanceCullerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the automatic stop policy of an instance.
     *
     * @returns DeleteIdleInstanceCullerResponse
     *
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
     * Deletes a specific instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceResponse
     *
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
            'action' => 'DeleteInstance',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specific instance.
     *
     * @returns DeleteInstanceResponse
     *
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
     * Delete tags from a Data Science Workshop (DSW) instance.
     *
     * @param request - DeleteInstanceLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceLabelsResponse
     *
     * @param string                      $InstanceId
     * @param DeleteInstanceLabelsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteInstanceLabelsResponse
     */
    public function deleteInstanceLabelsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->labelKeys) {
            @$query['LabelKeys'] = $request->labelKeys;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteInstanceLabels',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/labels',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete tags from a Data Science Workshop (DSW) instance.
     *
     * @param request - DeleteInstanceLabelsRequest
     *
     * @returns DeleteInstanceLabelsResponse
     *
     * @param string                      $InstanceId
     * @param DeleteInstanceLabelsRequest $request
     *
     * @return DeleteInstanceLabelsResponse
     */
    public function deleteInstanceLabels($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceLabelsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Deletes a scheduled stop task of an instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceShutdownTimerResponse
     *
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
            'action' => 'DeleteInstanceShutdownTimer',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/shutdowntimer',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceShutdownTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a scheduled stop task of an instance.
     *
     * @returns DeleteInstanceShutdownTimerResponse
     *
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
     * 获取实例快照详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteInstanceSnapshotResponse
     *
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
            'action' => 'DeleteInstanceSnapshot',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/snapshots/' . Url::percentEncode($SnapshotId) . '',
            'method' => 'DELETE',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return DeleteInstanceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例快照详情.
     *
     * @returns DeleteInstanceSnapshotResponse
     *
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
     * Queries the information about an auto stop policy for a specific idle instance.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetIdleInstanceCullerResponse
     *
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
            'action' => 'GetIdleInstanceCuller',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/idleinstanceculler',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetIdleInstanceCullerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about an auto stop policy for a specific idle instance.
     *
     * @returns GetIdleInstanceCullerResponse
     *
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
     * Queries the details of a DSW instance.
     *
     * @param request - GetInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceResponse
     *
     * @param string             $InstanceId
     * @param GetInstanceRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetInstanceResponse
     */
    public function getInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstance',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a DSW instance.
     *
     * @param request - GetInstanceRequest
     *
     * @returns GetInstanceResponse
     *
     * @param string             $InstanceId
     * @param GetInstanceRequest $request
     *
     * @return GetInstanceResponse
     */
    public function getInstance($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Queries a list of system events for a Data Science Workshop (DSW) instance.
     *
     * @param request - GetInstanceEventsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceEventsResponse
     *
     * @param string                   $InstanceId
     * @param GetInstanceEventsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetInstanceEventsResponse
     */
    public function getInstanceEventsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxEventsNum) {
            @$query['MaxEventsNum'] = $request->maxEventsNum;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceEvents',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/events',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of system events for a Data Science Workshop (DSW) instance.
     *
     * @param request - GetInstanceEventsRequest
     *
     * @returns GetInstanceEventsResponse
     *
     * @param string                   $InstanceId
     * @param GetInstanceEventsRequest $request
     *
     * @return GetInstanceEventsResponse
     */
    public function getInstanceEvents($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceEventsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * Queries the resource metrics of an instance.
     *
     * @param request - GetInstanceMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceMetricsResponse
     *
     * @param string                    $InstanceId
     * @param GetInstanceMetricsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetInstanceMetricsResponse
     */
    public function getInstanceMetricsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeStep) {
            @$query['TimeStep'] = $request->timeStep;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetInstanceMetrics',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instance/' . Url::percentEncode($InstanceId) . '/metrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resource metrics of an instance.
     *
     * @param request - GetInstanceMetricsRequest
     *
     * @returns GetInstanceMetricsResponse
     *
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
     * 获取定时关机任务
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceShutdownTimerResponse
     *
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
            'action' => 'GetInstanceShutdownTimer',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/shutdowntimer',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceShutdownTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取定时关机任务
     *
     * @returns GetInstanceShutdownTimerResponse
     *
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
     * 获取实例快照详情.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceSnapshotResponse
     *
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
            'action' => 'GetInstanceSnapshot',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/snapshots/' . Url::percentEncode($SnapshotId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetInstanceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例快照详情.
     *
     * @returns GetInstanceSnapshotResponse
     *
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
     * Obtains the lifecycle of an instance.
     *
     * @remarks
     * Obtains the lifecycle transition information for an instance, including details on the status an instance transitions to at a specific point in time.
     *
     * @param request - GetLifecycleRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLifecycleResponse
     *
     * @param string              $InstanceId
     * @param GetLifecycleRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetLifecycleResponse
     */
    public function getLifecycleWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->sessionNumber) {
            @$query['SessionNumber'] = $request->sessionNumber;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLifecycle',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/lifecycle',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetLifecycleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the lifecycle of an instance.
     *
     * @remarks
     * Obtains the lifecycle transition information for an instance, including details on the status an instance transitions to at a specific point in time.
     *
     * @param request - GetLifecycleRequest
     *
     * @returns GetLifecycleResponse
     *
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
     * 获取metrics数据.
     *
     * @param request - GetMetricsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMetricsResponse
     *
     * @param string            $InstanceId
     * @param GetMetricsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetMetricsResponse
     */
    public function getMetricsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetMetrics',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instance/' . Url::percentEncode($InstanceId) . '/cms/metrics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取metrics数据.
     *
     * @param request - GetMetricsRequest
     *
     * @returns GetMetricsResponse
     *
     * @param string            $InstanceId
     * @param GetMetricsRequest $request
     *
     * @return GetMetricsResponse
     */
    public function getMetrics($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMetricsWithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param request - GetResourceGroupStatisticsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetResourceGroupStatisticsResponse
     *
     * @param GetResourceGroupStatisticsRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return GetResourceGroupStatisticsResponse
     */
    public function getResourceGroupStatisticsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->workspaceIds) {
            @$query['WorkspaceIds'] = $request->workspaceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetResourceGroupStatistics',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/resourcegroupstatistics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetResourceGroupStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GetResourceGroupStatisticsRequest
     *
     * @returns GetResourceGroupStatisticsResponse
     *
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
     * Obtains the temporary authentication information of a DSW instance.
     *
     * @param request - GetTokenRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTokenResponse
     *
     * @param GetTokenRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetTokenResponse
     */
    public function getTokenWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->expireTime) {
            @$query['ExpireTime'] = $request->expireTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetToken',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/tokens',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the temporary authentication information of a DSW instance.
     *
     * @param request - GetTokenRequest
     *
     * @returns GetTokenResponse
     *
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
     * 获取自定义用户命令.
     *
     * @param request - GetUserCommandRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserCommandResponse
     *
     * @param string                $UserCommandId
     * @param GetUserCommandRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetUserCommandResponse
     */
    public function getUserCommandWithOptions($UserCommandId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetUserCommand',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/usercommands/' . Url::percentEncode($UserCommandId) . '',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取自定义用户命令.
     *
     * @param request - GetUserCommandRequest
     *
     * @returns GetUserCommandResponse
     *
     * @param string                $UserCommandId
     * @param GetUserCommandRequest $request
     *
     * @return GetUserCommandResponse
     */
    public function getUserCommand($UserCommandId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserCommandWithOptions($UserCommandId, $request, $headers, $runtime);
    }

    /**
     * 获取用户配置.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetUserConfigResponse
     *
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
            'action' => 'GetUserConfig',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/userconfig',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return GetUserConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取用户配置.
     *
     * @returns GetUserConfigResponse
     *
     * @return GetUserConfigResponse
     */
    public function getUserConfig()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserConfigWithOptions($headers, $runtime);
    }

    /**
     * Queries a list of specifications of ECS instances.
     *
     * @param request - ListEcsSpecsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEcsSpecsResponse
     *
     * @param ListEcsSpecsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListEcsSpecsResponse
     */
    public function listEcsSpecsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceleratorType) {
            @$query['AcceleratorType'] = $request->acceleratorType;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEcsSpecs',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/ecsspecs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListEcsSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of specifications of ECS instances.
     *
     * @param request - ListEcsSpecsRequest
     *
     * @returns ListEcsSpecsResponse
     *
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
     * 查询实例快照列表.
     *
     * @param request - ListInstanceSnapshotRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceSnapshotResponse
     *
     * @param string                      $InstanceId
     * @param ListInstanceSnapshotRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListInstanceSnapshotResponse
     */
    public function listInstanceSnapshotWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceSnapshot',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/snapshots',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例快照列表.
     *
     * @param request - ListInstanceSnapshotRequest
     *
     * @returns ListInstanceSnapshotResponse
     *
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
     * 获取实例统计信息.
     *
     * @param request - ListInstanceStatisticsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstanceStatisticsResponse
     *
     * @param ListInstanceStatisticsRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListInstanceStatisticsResponse
     */
    public function listInstanceStatisticsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->workspaceIds) {
            @$query['WorkspaceIds'] = $request->workspaceIds;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstanceStatistics',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instancestatistics',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstanceStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取实例统计信息.
     *
     * @param request - ListInstanceStatisticsRequest
     *
     * @returns ListInstanceStatisticsResponse
     *
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
     * Queries a list of Data Science Workshop (DSW) instances.
     *
     * @param tmpReq - ListInstancesRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $tmpReq
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($tmpReq, $headers, $runtime)
    {
        $tmpReq->validate();
        $request = new ListInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->labels) {
            $request->labelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->labels, 'Labels', 'json');
        }

        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->acceleratorType) {
            @$query['AcceleratorType'] = $request->acceleratorType;
        }

        if (null !== $request->accessibility) {
            @$query['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->createUserId) {
            @$query['CreateUserId'] = $request->createUserId;
        }

        if (null !== $request->gpuType) {
            @$query['GpuType'] = $request->gpuType;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->labelsShrink) {
            @$query['Labels'] = $request->labelsShrink;
        }

        if (null !== $request->maxCpu) {
            @$query['MaxCpu'] = $request->maxCpu;
        }

        if (null !== $request->maxGpu) {
            @$query['MaxGpu'] = $request->maxGpu;
        }

        if (null !== $request->maxGpuMemory) {
            @$query['MaxGpuMemory'] = $request->maxGpuMemory;
        }

        if (null !== $request->maxMemory) {
            @$query['MaxMemory'] = $request->maxMemory;
        }

        if (null !== $request->minCpu) {
            @$query['MinCpu'] = $request->minCpu;
        }

        if (null !== $request->minGpu) {
            @$query['MinGpu'] = $request->minGpu;
        }

        if (null !== $request->minGpuMemory) {
            @$query['MinGpuMemory'] = $request->minGpuMemory;
        }

        if (null !== $request->minMemory) {
            @$query['MinMemory'] = $request->minMemory;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->oversoldInfo) {
            @$query['OversoldInfo'] = $request->oversoldInfo;
        }

        if (null !== $request->oversoldType) {
            @$query['OversoldType'] = $request->oversoldType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        if (null !== $request->workspaceId) {
            @$query['WorkspaceId'] = $request->workspaceId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListInstances',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of Data Science Workshop (DSW) instances.
     *
     * @param request - ListInstancesRequest
     *
     * @returns ListInstancesResponse
     *
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
     * 获取系统日志.
     *
     * @param request - ListSystemLogsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSystemLogsResponse
     *
     * @param ListSystemLogsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListSystemLogsResponse
     */
    public function listSystemLogsWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gmtEndTime) {
            @$query['GmtEndTime'] = $request->gmtEndTime;
        }

        if (null !== $request->gmtStartTime) {
            @$query['GmtStartTime'] = $request->gmtStartTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->lifecycleId) {
            @$query['LifecycleId'] = $request->lifecycleId;
        }

        if (null !== $request->logLevel) {
            @$query['LogLevel'] = $request->logLevel;
        }

        if (null !== $request->logRepository) {
            @$query['LogRepository'] = $request->logRepository;
        }

        if (null !== $request->offset) {
            @$query['Offset'] = $request->offset;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->problemCategory) {
            @$query['ProblemCategory'] = $request->problemCategory;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sourceRequestId) {
            @$query['SourceRequestId'] = $request->sourceRequestId;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSystemLogs',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/systemlogs',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return ListSystemLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取系统日志.
     *
     * @param request - ListSystemLogsRequest
     *
     * @returns ListSystemLogsResponse
     *
     * @param ListSystemLogsRequest $request
     *
     * @return ListSystemLogsResponse
     */
    public function listSystemLogs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSystemLogsWithOptions($request, $headers, $runtime);
    }

    /**
     * 启动实例.
     *
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartInstanceResponse
     *
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
            'action' => 'StartInstance',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/start',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 启动实例.
     *
     * @returns StartInstanceResponse
     *
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
     * 停止实例.
     *
     * @param request - StopInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopInstanceResponse
     *
     * @param string              $InstanceId
     * @param StopInstanceRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->saveImage) {
            @$query['SaveImage'] = $request->saveImage;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopInstance',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/stop',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 停止实例.
     *
     * @param request - StopInstanceRequest
     *
     * @returns StopInstanceResponse
     *
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
     * Updates the properties of a DSW instance.
     *
     * @param request - UpdateInstanceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceResponse
     *
     * @param string                $InstanceId
     * @param UpdateInstanceRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateInstanceResponse
     */
    public function updateInstanceWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessibility) {
            @$body['Accessibility'] = $request->accessibility;
        }

        if (null !== $request->affinity) {
            @$body['Affinity'] = $request->affinity;
        }

        if (null !== $request->cloudDisks) {
            @$body['CloudDisks'] = $request->cloudDisks;
        }

        if (null !== $request->credentialConfig) {
            @$body['CredentialConfig'] = $request->credentialConfig;
        }

        if (null !== $request->datasets) {
            @$body['Datasets'] = $request->datasets;
        }

        if (null !== $request->disassociateCredential) {
            @$body['DisassociateCredential'] = $request->disassociateCredential;
        }

        if (null !== $request->disassociateDatasets) {
            @$body['DisassociateDatasets'] = $request->disassociateDatasets;
        }

        if (null !== $request->disassociateDriver) {
            @$body['DisassociateDriver'] = $request->disassociateDriver;
        }

        if (null !== $request->disassociateEnvironmentVariables) {
            @$body['DisassociateEnvironmentVariables'] = $request->disassociateEnvironmentVariables;
        }

        if (null !== $request->disassociateForwardInfos) {
            @$body['DisassociateForwardInfos'] = $request->disassociateForwardInfos;
        }

        if (null !== $request->disassociateUserCommand) {
            @$body['DisassociateUserCommand'] = $request->disassociateUserCommand;
        }

        if (null !== $request->disassociateVpc) {
            @$body['DisassociateVpc'] = $request->disassociateVpc;
        }

        if (null !== $request->driver) {
            @$body['Driver'] = $request->driver;
        }

        if (null !== $request->dynamicMount) {
            @$body['DynamicMount'] = $request->dynamicMount;
        }

        if (null !== $request->ecsSpec) {
            @$body['EcsSpec'] = $request->ecsSpec;
        }

        if (null !== $request->environmentVariables) {
            @$body['EnvironmentVariables'] = $request->environmentVariables;
        }

        if (null !== $request->imageAuth) {
            @$body['ImageAuth'] = $request->imageAuth;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageUrl) {
            @$body['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->instanceName) {
            @$body['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->oversoldType) {
            @$body['OversoldType'] = $request->oversoldType;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->requestedResource) {
            @$body['RequestedResource'] = $request->requestedResource;
        }

        if (null !== $request->userCommand) {
            @$body['UserCommand'] = $request->userCommand;
        }

        if (null !== $request->userId) {
            @$body['UserId'] = $request->userId;
        }

        if (null !== $request->userVpc) {
            @$body['UserVpc'] = $request->userVpc;
        }

        if (null !== $request->workspaceSource) {
            @$body['WorkspaceSource'] = $request->workspaceSource;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstance',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the properties of a DSW instance.
     *
     * @param request - UpdateInstanceRequest
     *
     * @returns UpdateInstanceResponse
     *
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
     * Updates the tags of a Data Science Workshop (DSW) instance. If the tags do not exist, the system adds tags.
     *
     * @param request - UpdateInstanceLabelsRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateInstanceLabelsResponse
     *
     * @param string                      $InstanceId
     * @param UpdateInstanceLabelsRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateInstanceLabelsResponse
     */
    public function updateInstanceLabelsWithOptions($InstanceId, $request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->labels) {
            @$body['Labels'] = $request->labels;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateInstanceLabels',
            'version' => '2022-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/api/v2/instances/' . Url::percentEncode($InstanceId) . '/labels',
            'method' => 'PUT',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);

        return UpdateInstanceLabelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the tags of a Data Science Workshop (DSW) instance. If the tags do not exist, the system adds tags.
     *
     * @param request - UpdateInstanceLabelsRequest
     *
     * @returns UpdateInstanceLabelsResponse
     *
     * @param string                      $InstanceId
     * @param UpdateInstanceLabelsRequest $request
     *
     * @return UpdateInstanceLabelsResponse
     */
    public function updateInstanceLabels($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceLabelsWithOptions($InstanceId, $request, $headers, $runtime);
    }
}
