<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceShutdownTimerRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceShutdownTimerV2Request;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceShutdownTimerV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceSnapshotRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceSnapshotV2Request;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceSnapshotV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceV2Request;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\CreateInstanceV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\DeleteInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\DeleteInstanceShutdownTimerV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\DeleteInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\DeleteInstanceSnapshotV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\DeleteInstanceV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\Foobar1Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\FoobarResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetAuthorizationResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetDashboardStatisticsRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetDashboardStatisticsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceShutdownTimerResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceShutdownTimerV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceSnapshotV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstancesStatisticsRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstancesStatisticsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetInstanceV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\GetUserConfigV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListEcsSpecsRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListEcsSpecsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListEcsSpecsV2Request;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListEcsSpecsV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListImagesRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListImagesResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstanceSnapshotsResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstanceSnapshotV2Request;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstanceSnapshotV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesStatusRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesStatusResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstanceStatisticsV2Request;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstanceStatisticsV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesV2Request;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\StartInstanceV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\StopInstanceV2Request;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\StopInstanceV2Response;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceSnapshotRequest;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceSnapshotResponse;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceV2Request;
use AlibabaCloud\SDK\Paidsw\V20210226\Models\UpdateInstanceV2Response;
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
     * @param string                               $InstanceId
     * @param CreateInstanceShutdownTimerV2Request $request
     *
     * @return CreateInstanceShutdownTimerV2Response
     */
    public function createInstanceShutdownTimerV2($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceShutdownTimerV2WithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                               $InstanceId
     * @param CreateInstanceShutdownTimerV2Request $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateInstanceShutdownTimerV2Response
     */
    public function createInstanceShutdownTimerV2WithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $body       = [];
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
            'action'      => 'CreateInstanceShutdownTimerV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . $InstanceId . '/shutdowntimer',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceShutdownTimerV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string                          $InstanceId
     * @param CreateInstanceSnapshotV2Request $request
     *
     * @return CreateInstanceSnapshotV2Response
     */
    public function createInstanceSnapshotV2($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceSnapshotV2WithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                          $InstanceId
     * @param CreateInstanceSnapshotV2Request $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateInstanceSnapshotV2Response
     */
    public function createInstanceSnapshotV2WithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $body       = [];
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
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
            'action'      => 'CreateInstanceSnapshotV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . $InstanceId . '/snapshots',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceSnapshotV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceV2Request $request
     *
     * @return CreateInstanceV2Response
     */
    public function createInstanceV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInstanceV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateInstanceV2Request $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateInstanceV2Response
     */
    public function createInstanceV2WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
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
            'action'      => 'CreateInstanceV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     *
     * @return DeleteInstanceShutdownTimerV2Response
     */
    public function deleteInstanceShutdownTimerV2($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceShutdownTimerV2WithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInstanceShutdownTimerV2Response
     */
    public function deleteInstanceShutdownTimerV2WithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceShutdownTimerV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . $InstanceId . '/shutdowntimer',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceShutdownTimerV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string $InstanceId
     * @param string $SnapshotId
     *
     * @return DeleteInstanceSnapshotV2Response
     */
    public function deleteInstanceSnapshotV2($InstanceId, $SnapshotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceSnapshotV2WithOptions($InstanceId, $SnapshotId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $SnapshotId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInstanceSnapshotV2Response
     */
    public function deleteInstanceSnapshotV2WithOptions($InstanceId, $SnapshotId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $SnapshotId = OpenApiUtilClient::getEncodeParam($SnapshotId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceSnapshotV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . $InstanceId . '/snapshots/' . $SnapshotId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceSnapshotV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return DeleteInstanceV2Response
     */
    public function deleteInstanceV2($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteInstanceV2WithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteInstanceV2Response
     */
    public function deleteInstanceV2WithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . $InstanceId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return FoobarResponse
     */
    public function foobar()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->foobarWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return FoobarResponse
     */
    public function foobarWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'Foobar',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/foobar',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return FoobarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return Foobar1Response
     */
    public function foobar1()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->foobar1WithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return Foobar1Response
     */
    public function foobar1WithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'Foobar1',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/foobar1',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'any',
        ]);

        return Foobar1Response::fromMap($this->callApi($params, $req, $runtime));
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
     *
     * @return GetInstanceShutdownTimerV2Response
     */
    public function getInstanceShutdownTimerV2($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceShutdownTimerV2WithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceShutdownTimerV2Response
     */
    public function getInstanceShutdownTimerV2WithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstanceShutdownTimerV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . $InstanceId . '/shutdowntimer',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceShutdownTimerV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string $InstanceId
     * @param string $SnapshotId
     *
     * @return GetInstanceSnapshotV2Response
     */
    public function getInstanceSnapshotV2($InstanceId, $SnapshotId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceSnapshotV2WithOptions($InstanceId, $SnapshotId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string         $SnapshotId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceSnapshotV2Response
     */
    public function getInstanceSnapshotV2WithOptions($InstanceId, $SnapshotId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $SnapshotId = OpenApiUtilClient::getEncodeParam($SnapshotId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstanceSnapshotV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . $InstanceId . '/snapshots/' . $SnapshotId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceSnapshotV2Response::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $InstanceId
     *
     * @return GetInstanceV2Response
     */
    public function getInstanceV2($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getInstanceV2WithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetInstanceV2Response
     */
    public function getInstanceV2WithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetInstanceV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . $InstanceId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetInstanceV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @return GetUserConfigV2Response
     */
    public function getUserConfigV2()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getUserConfigV2WithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetUserConfigV2Response
     */
    public function getUserConfigV2WithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetUserConfigV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/userconfig',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetUserConfigV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListEcsSpecsV2Request $request
     *
     * @return ListEcsSpecsV2Response
     */
    public function listEcsSpecsV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEcsSpecsV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEcsSpecsV2Request $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListEcsSpecsV2Response
     */
    public function listEcsSpecsV2WithOptions($request, $headers, $runtime)
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
            'action'      => 'ListEcsSpecsV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/ecsspecs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEcsSpecsV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string                        $InstanceId
     * @param ListInstanceSnapshotV2Request $request
     *
     * @return ListInstanceSnapshotV2Response
     */
    public function listInstanceSnapshotV2($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceSnapshotV2WithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                        $InstanceId
     * @param ListInstanceSnapshotV2Request $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListInstanceSnapshotV2Response
     */
    public function listInstanceSnapshotV2WithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $query      = [];
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
            'action'      => 'ListInstanceSnapshotV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . $InstanceId . '/snapshots',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceSnapshotV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListInstanceStatisticsV2Request $request
     *
     * @return ListInstanceStatisticsV2Response
     */
    public function listInstanceStatisticsV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstanceStatisticsV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListInstanceStatisticsV2Request $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return ListInstanceStatisticsV2Response
     */
    public function listInstanceStatisticsV2WithOptions($request, $headers, $runtime)
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
            'action'      => 'ListInstanceStatisticsV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instancestatistics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstanceStatisticsV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListInstancesV2Request $request
     *
     * @return ListInstancesV2Response
     */
    public function listInstancesV2($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInstancesV2WithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListInstancesV2Request $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListInstancesV2Response
     */
    public function listInstancesV2WithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'action'      => 'ListInstancesV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInstancesV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string $InstanceId
     *
     * @return StartInstanceV2Response
     */
    public function startInstanceV2($InstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startInstanceV2WithOptions($InstanceId, $headers, $runtime);
    }

    /**
     * @param string         $InstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartInstanceV2Response
     */
    public function startInstanceV2WithOptions($InstanceId, $headers, $runtime)
    {
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $req        = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartInstanceV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . $InstanceId . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartInstanceV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param StopInstanceV2Request $request
     *
     * @return StopInstanceV2Response
     */
    public function stopInstanceV2($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopInstanceV2WithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                $InstanceId
     * @param StopInstanceV2Request $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return StopInstanceV2Response
     */
    public function stopInstanceV2WithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $body       = [];
        if (!Utils::isUnset($request->saveImage)) {
            $body['SaveImage'] = $request->saveImage;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopInstanceV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . $InstanceId . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopInstanceV2Response::fromMap($this->callApi($params, $req, $runtime));
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
     * @param string                  $InstanceId
     * @param UpdateInstanceV2Request $request
     *
     * @return UpdateInstanceV2Response
     */
    public function updateInstanceV2($InstanceId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateInstanceV2WithOptions($InstanceId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $InstanceId
     * @param UpdateInstanceV2Request $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateInstanceV2Response
     */
    public function updateInstanceV2WithOptions($InstanceId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $InstanceId = OpenApiUtilClient::getEncodeParam($InstanceId);
        $body       = [];
        if (!Utils::isUnset($request->acceleratorType)) {
            $body['AcceleratorType'] = $request->acceleratorType;
        }
        if (!Utils::isUnset($request->accessibility)) {
            $body['Accessibility'] = $request->accessibility;
        }
        if (!Utils::isUnset($request->accumulatedRunningTimeInMs)) {
            $body['AccumulatedRunningTimeInMs'] = $request->accumulatedRunningTimeInMs;
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
        if (!Utils::isUnset($request->gmtCreateTime)) {
            $body['GmtCreateTime'] = $request->gmtCreateTime;
        }
        if (!Utils::isUnset($request->gmtModifiedTime)) {
            $body['GmtModifiedTime'] = $request->gmtModifiedTime;
        }
        if (!Utils::isUnset($request->imageId)) {
            $body['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageName)) {
            $body['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $body['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceShutdownTimer)) {
            $body['InstanceShutdownTimer'] = $request->instanceShutdownTimer;
        }
        if (!Utils::isUnset($request->instanceUrl)) {
            $body['InstanceUrl'] = $request->instanceUrl;
        }
        if (!Utils::isUnset($request->jupyterlabUrl)) {
            $body['JupyterlabUrl'] = $request->jupyterlabUrl;
        }
        if (!Utils::isUnset($request->latestSnapshot)) {
            $body['LatestSnapshot'] = $request->latestSnapshot;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $body['PaymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->reasonCode)) {
            $body['ReasonCode'] = $request->reasonCode;
        }
        if (!Utils::isUnset($request->reasonMessage)) {
            $body['ReasonMessage'] = $request->reasonMessage;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->terminalUrl)) {
            $body['TerminalUrl'] = $request->terminalUrl;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userVpc)) {
            $body['UserVpc'] = $request->userVpc;
        }
        if (!Utils::isUnset($request->webIDEUrl)) {
            $body['WebIDEUrl'] = $request->webIDEUrl;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        if (!Utils::isUnset($request->workspaceName)) {
            $body['WorkspaceName'] = $request->workspaceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceV2',
            'version'     => '2021-02-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v2/instances/' . $InstanceId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceV2Response::fromMap($this->callApi($params, $req, $runtime));
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
