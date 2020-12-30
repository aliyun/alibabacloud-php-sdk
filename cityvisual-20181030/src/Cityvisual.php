<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\AttachStreamRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\AttachStreamResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\BatchModifyCameraStatusRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\BatchModifyCameraStatusResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateAlgoLibRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateAlgoLibResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateCameraRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateCameraResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateCapabilityRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateCapabilityResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateJobGroupRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateJobGroupResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateResourceProfileRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateResourceProfileResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateWorkGroupRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\CreateWorkGroupResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteAlgoLibRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteAlgoLibResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteCameraRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteCameraResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteCapabilityRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteCapabilityResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteJobGroupRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteJobGroupResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteResourceProfileRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteResourceProfileResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteWorkGroupRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DeleteWorkGroupResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeAlgoLibsRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeAlgoLibsResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeCamerasRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeCamerasResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeCapabilitiesRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeCapabilitiesResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeJobGroupsRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeJobGroupsResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeProtocolsRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeProtocolsResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeResourceProfilesRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeResourceProfilesResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeStreamsRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeStreamsResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeWorkGroupsRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeWorkGroupsResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DetachStreamRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DetachStreamResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\GetCameraConfForCameraRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\GetCameraConfForCameraResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\GetComputeJobLogRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\GetComputeJobLogResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\GetPlayUrlForCameraRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\GetPlayUrlForCameraResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListComputeJobLogsRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListComputeJobLogsResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListParkingResultsRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListParkingResultsResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListSafetyHelmetResultsRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListSafetyHelmetResultsResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListStreamsForCamerasRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListStreamsForCamerasResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListVehicleEntryResultsRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ListVehicleEntryResultsResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyAlgoLibRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyAlgoLibResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyCameraRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyCameraResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyCapabilityRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyCapabilityResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyInstanceRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyInstanceResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyJobGroupRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyJobGroupResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyResourceProfileRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyResourceProfileResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyWorkGroupRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyWorkGroupResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\PutCameraConfForCameraRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\PutCameraConfForCameraResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\SearchImagesRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\SearchImagesResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\StartJobGroupRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\StartJobGroupResponse;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\StopJobGroupRequest;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\StopJobGroupResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Cityvisual extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cityvisual', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AttachStreamRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return AttachStreamResponse
     */
    public function attachStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachStreamResponse::fromMap($this->doRPCRequest('AttachStream', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachStreamRequest $request
     *
     * @return AttachStreamResponse
     */
    public function attachStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachStreamWithOptions($request, $runtime);
    }

    /**
     * @param BatchModifyCameraStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchModifyCameraStatusResponse
     */
    public function batchModifyCameraStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchModifyCameraStatusResponse::fromMap($this->doRPCRequest('BatchModifyCameraStatus', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchModifyCameraStatusRequest $request
     *
     * @return BatchModifyCameraStatusResponse
     */
    public function batchModifyCameraStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchModifyCameraStatusWithOptions($request, $runtime);
    }

    /**
     * @param CreateAlgoLibRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateAlgoLibResponse
     */
    public function createAlgoLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateAlgoLibResponse::fromMap($this->doRPCRequest('CreateAlgoLib', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateAlgoLibRequest $request
     *
     * @return CreateAlgoLibResponse
     */
    public function createAlgoLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAlgoLibWithOptions($request, $runtime);
    }

    /**
     * @param CreateCameraRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateCameraResponse
     */
    public function createCameraWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCameraResponse::fromMap($this->doRPCRequest('CreateCamera', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCameraRequest $request
     *
     * @return CreateCameraResponse
     */
    public function createCamera($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCameraWithOptions($request, $runtime);
    }

    /**
     * @param CreateCapabilityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCapabilityResponse
     */
    public function createCapabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCapabilityResponse::fromMap($this->doRPCRequest('CreateCapability', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCapabilityRequest $request
     *
     * @return CreateCapabilityResponse
     */
    public function createCapability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCapabilityWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceResponse::fromMap($this->doRPCRequest('CreateInstance', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateJobGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateJobGroupResponse
     */
    public function createJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateJobGroupResponse::fromMap($this->doRPCRequest('CreateJobGroup', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateJobGroupRequest $request
     *
     * @return CreateJobGroupResponse
     */
    public function createJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateResourceProfileRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateResourceProfileResponse
     */
    public function createResourceProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateResourceProfileResponse::fromMap($this->doRPCRequest('CreateResourceProfile', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateResourceProfileRequest $request
     *
     * @return CreateResourceProfileResponse
     */
    public function createResourceProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceProfileWithOptions($request, $runtime);
    }

    /**
     * @param CreateWorkGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkGroupResponse
     */
    public function createWorkGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateWorkGroupResponse::fromMap($this->doRPCRequest('CreateWorkGroup', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateWorkGroupRequest $request
     *
     * @return CreateWorkGroupResponse
     */
    public function createWorkGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createWorkGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAlgoLibRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAlgoLibResponse
     */
    public function deleteAlgoLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteAlgoLibResponse::fromMap($this->doRPCRequest('DeleteAlgoLib', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteAlgoLibRequest $request
     *
     * @return DeleteAlgoLibResponse
     */
    public function deleteAlgoLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAlgoLibWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCameraRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteCameraResponse
     */
    public function deleteCameraWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCameraResponse::fromMap($this->doRPCRequest('DeleteCamera', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCameraRequest $request
     *
     * @return DeleteCameraResponse
     */
    public function deleteCamera($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCameraWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCapabilityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteCapabilityResponse
     */
    public function deleteCapabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCapabilityResponse::fromMap($this->doRPCRequest('DeleteCapability', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCapabilityRequest $request
     *
     * @return DeleteCapabilityResponse
     */
    public function deleteCapability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCapabilityWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceResponse::fromMap($this->doRPCRequest('DeleteInstance', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteJobGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteJobGroupResponse
     */
    public function deleteJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteJobGroupResponse::fromMap($this->doRPCRequest('DeleteJobGroup', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteJobGroupRequest $request
     *
     * @return DeleteJobGroupResponse
     */
    public function deleteJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteResourceProfileRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteResourceProfileResponse
     */
    public function deleteResourceProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteResourceProfileResponse::fromMap($this->doRPCRequest('DeleteResourceProfile', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteResourceProfileRequest $request
     *
     * @return DeleteResourceProfileResponse
     */
    public function deleteResourceProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteResourceProfileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteWorkGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteWorkGroupResponse
     */
    public function deleteWorkGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteWorkGroupResponse::fromMap($this->doRPCRequest('DeleteWorkGroup', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteWorkGroupRequest $request
     *
     * @return DeleteWorkGroupResponse
     */
    public function deleteWorkGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWorkGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlgoLibsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAlgoLibsResponse
     */
    public function describeAlgoLibsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAlgoLibsResponse::fromMap($this->doRPCRequest('DescribeAlgoLibs', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAlgoLibsRequest $request
     *
     * @return DescribeAlgoLibsResponse
     */
    public function describeAlgoLibs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlgoLibsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCamerasRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeCamerasResponse
     */
    public function describeCamerasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCamerasResponse::fromMap($this->doRPCRequest('DescribeCameras', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCamerasRequest $request
     *
     * @return DescribeCamerasResponse
     */
    public function describeCameras($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCamerasWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCapabilitiesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCapabilitiesResponse
     */
    public function describeCapabilitiesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCapabilitiesResponse::fromMap($this->doRPCRequest('DescribeCapabilities', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCapabilitiesRequest $request
     *
     * @return DescribeCapabilitiesResponse
     */
    public function describeCapabilities($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCapabilitiesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancesResponse::fromMap($this->doRPCRequest('DescribeInstances', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeJobGroupsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeJobGroupsResponse
     */
    public function describeJobGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeJobGroupsResponse::fromMap($this->doRPCRequest('DescribeJobGroups', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeJobGroupsRequest $request
     *
     * @return DescribeJobGroupsResponse
     */
    public function describeJobGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeJobGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeProtocolsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeProtocolsResponse
     */
    public function describeProtocolsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeProtocolsResponse::fromMap($this->doRPCRequest('DescribeProtocols', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeProtocolsRequest $request
     *
     * @return DescribeProtocolsResponse
     */
    public function describeProtocols($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeProtocolsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourceProfilesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeResourceProfilesResponse
     */
    public function describeResourceProfilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeResourceProfilesResponse::fromMap($this->doRPCRequest('DescribeResourceProfiles', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeResourceProfilesRequest $request
     *
     * @return DescribeResourceProfilesResponse
     */
    public function describeResourceProfiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceProfilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStreamsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeStreamsResponse
     */
    public function describeStreamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStreamsResponse::fromMap($this->doRPCRequest('DescribeStreams', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStreamsRequest $request
     *
     * @return DescribeStreamsResponse
     */
    public function describeStreams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWorkGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeWorkGroupsResponse
     */
    public function describeWorkGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeWorkGroupsResponse::fromMap($this->doRPCRequest('DescribeWorkGroups', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeWorkGroupsRequest $request
     *
     * @return DescribeWorkGroupsResponse
     */
    public function describeWorkGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWorkGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DetachStreamRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DetachStreamResponse
     */
    public function detachStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DetachStreamResponse::fromMap($this->doRPCRequest('DetachStream', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DetachStreamRequest $request
     *
     * @return DetachStreamResponse
     */
    public function detachStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachStreamWithOptions($request, $runtime);
    }

    /**
     * @param GetCameraConfForCameraRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetCameraConfForCameraResponse
     */
    public function getCameraConfForCameraWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetCameraConfForCameraResponse::fromMap($this->doRPCRequest('GetCameraConfForCamera', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetCameraConfForCameraRequest $request
     *
     * @return GetCameraConfForCameraResponse
     */
    public function getCameraConfForCamera($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCameraConfForCameraWithOptions($request, $runtime);
    }

    /**
     * @param GetComputeJobLogRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetComputeJobLogResponse
     */
    public function getComputeJobLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetComputeJobLogResponse::fromMap($this->doRPCRequest('GetComputeJobLog', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetComputeJobLogRequest $request
     *
     * @return GetComputeJobLogResponse
     */
    public function getComputeJobLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getComputeJobLogWithOptions($request, $runtime);
    }

    /**
     * @param GetPlayUrlForCameraRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetPlayUrlForCameraResponse
     */
    public function getPlayUrlForCameraWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetPlayUrlForCameraResponse::fromMap($this->doRPCRequest('GetPlayUrlForCamera', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetPlayUrlForCameraRequest $request
     *
     * @return GetPlayUrlForCameraResponse
     */
    public function getPlayUrlForCamera($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPlayUrlForCameraWithOptions($request, $runtime);
    }

    /**
     * @param ListComputeJobLogsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListComputeJobLogsResponse
     */
    public function listComputeJobLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListComputeJobLogsResponse::fromMap($this->doRPCRequest('ListComputeJobLogs', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListComputeJobLogsRequest $request
     *
     * @return ListComputeJobLogsResponse
     */
    public function listComputeJobLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listComputeJobLogsWithOptions($request, $runtime);
    }

    /**
     * @param ListParkingResultsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListParkingResultsResponse
     */
    public function listParkingResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListParkingResultsResponse::fromMap($this->doRPCRequest('ListParkingResults', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListParkingResultsRequest $request
     *
     * @return ListParkingResultsResponse
     */
    public function listParkingResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listParkingResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListSafetyHelmetResultsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListSafetyHelmetResultsResponse
     */
    public function listSafetyHelmetResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSafetyHelmetResultsResponse::fromMap($this->doRPCRequest('ListSafetyHelmetResults', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSafetyHelmetResultsRequest $request
     *
     * @return ListSafetyHelmetResultsResponse
     */
    public function listSafetyHelmetResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSafetyHelmetResultsWithOptions($request, $runtime);
    }

    /**
     * @param ListStreamsForCamerasRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListStreamsForCamerasResponse
     */
    public function listStreamsForCamerasWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListStreamsForCamerasResponse::fromMap($this->doRPCRequest('ListStreamsForCameras', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListStreamsForCamerasRequest $request
     *
     * @return ListStreamsForCamerasResponse
     */
    public function listStreamsForCameras($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listStreamsForCamerasWithOptions($request, $runtime);
    }

    /**
     * @param ListVehicleEntryResultsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListVehicleEntryResultsResponse
     */
    public function listVehicleEntryResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListVehicleEntryResultsResponse::fromMap($this->doRPCRequest('ListVehicleEntryResults', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListVehicleEntryResultsRequest $request
     *
     * @return ListVehicleEntryResultsResponse
     */
    public function listVehicleEntryResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVehicleEntryResultsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAlgoLibRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyAlgoLibResponse
     */
    public function modifyAlgoLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyAlgoLibResponse::fromMap($this->doRPCRequest('ModifyAlgoLib', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyAlgoLibRequest $request
     *
     * @return ModifyAlgoLibResponse
     */
    public function modifyAlgoLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAlgoLibWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCameraRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyCameraResponse
     */
    public function modifyCameraWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCameraResponse::fromMap($this->doRPCRequest('ModifyCamera', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCameraRequest $request
     *
     * @return ModifyCameraResponse
     */
    public function modifyCamera($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCameraWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCapabilityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyCapabilityResponse
     */
    public function modifyCapabilityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyCapabilityResponse::fromMap($this->doRPCRequest('ModifyCapability', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyCapabilityRequest $request
     *
     * @return ModifyCapabilityResponse
     */
    public function modifyCapability($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCapabilityWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceResponse::fromMap($this->doRPCRequest('ModifyInstance', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceRequest $request
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyJobGroupRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyJobGroupResponse
     */
    public function modifyJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyJobGroupResponse::fromMap($this->doRPCRequest('ModifyJobGroup', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyJobGroupRequest $request
     *
     * @return ModifyJobGroupResponse
     */
    public function modifyJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyJobGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyResourceProfileRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyResourceProfileResponse
     */
    public function modifyResourceProfileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyResourceProfileResponse::fromMap($this->doRPCRequest('ModifyResourceProfile', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyResourceProfileRequest $request
     *
     * @return ModifyResourceProfileResponse
     */
    public function modifyResourceProfile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceProfileWithOptions($request, $runtime);
    }

    /**
     * @param ModifyWorkGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyWorkGroupResponse
     */
    public function modifyWorkGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyWorkGroupResponse::fromMap($this->doRPCRequest('ModifyWorkGroup', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyWorkGroupRequest $request
     *
     * @return ModifyWorkGroupResponse
     */
    public function modifyWorkGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyWorkGroupWithOptions($request, $runtime);
    }

    /**
     * @param PutCameraConfForCameraRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return PutCameraConfForCameraResponse
     */
    public function putCameraConfForCameraWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutCameraConfForCameraResponse::fromMap($this->doRPCRequest('PutCameraConfForCamera', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutCameraConfForCameraRequest $request
     *
     * @return PutCameraConfForCameraResponse
     */
    public function putCameraConfForCamera($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putCameraConfForCameraWithOptions($request, $runtime);
    }

    /**
     * @param SearchImagesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SearchImagesResponse
     */
    public function searchImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SearchImagesResponse::fromMap($this->doRPCRequest('SearchImages', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SearchImagesRequest $request
     *
     * @return SearchImagesResponse
     */
    public function searchImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImagesWithOptions($request, $runtime);
    }

    /**
     * @param StartJobGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartJobGroupResponse
     */
    public function startJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartJobGroupResponse::fromMap($this->doRPCRequest('StartJobGroup', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartJobGroupRequest $request
     *
     * @return StartJobGroupResponse
     */
    public function startJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startJobGroupWithOptions($request, $runtime);
    }

    /**
     * @param StopJobGroupRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopJobGroupResponse
     */
    public function stopJobGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopJobGroupResponse::fromMap($this->doRPCRequest('StopJobGroup', '2018-10-30', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopJobGroupRequest $request
     *
     * @return StopJobGroupResponse
     */
    public function stopJobGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopJobGroupWithOptions($request, $runtime);
    }
}
