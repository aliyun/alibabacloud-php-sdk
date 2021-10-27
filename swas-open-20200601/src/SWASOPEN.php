<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateCustomImageRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateCustomImageResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRuleRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRuleResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateInstancesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateInstancesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteCustomImageRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteCustomImageResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallRuleRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallRuleResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListDisksRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListDisksResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListFirewallRulesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListFirewallRulesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListImagesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListImagesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancePlansModificationRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancePlansModificationResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesTrafficPackagesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesTrafficPackagesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListRegionsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListSnapshotsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListSnapshotsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyImageShareStatusRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyImageShareStatusResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RebootInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RebootInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ResetDiskRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ResetDiskResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ResetSystemRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ResetSystemResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StartInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StartInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StopInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StopInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpdateInstanceAttributeRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpdateInstanceAttributeResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpgradeInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpgradeInstanceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class SWASOPEN extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('swas-open', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateCustomImageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCustomImageResponse
     */
    public function createCustomImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateCustomImageResponse::fromMap($this->doRPCRequest('CreateCustomImage', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateCustomImageRequest $request
     *
     * @return CreateCustomImageResponse
     */
    public function createCustomImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomImageWithOptions($request, $runtime);
    }

    /**
     * @param CreateFirewallRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFirewallRuleResponse
     */
    public function createFirewallRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateFirewallRuleResponse::fromMap($this->doRPCRequest('CreateFirewallRule', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateFirewallRuleRequest $request
     *
     * @return CreateFirewallRuleResponse
     */
    public function createFirewallRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFirewallRuleWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateInstancesResponse
     */
    public function createInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstancesResponse::fromMap($this->doRPCRequest('CreateInstances', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateInstancesRequest $request
     *
     * @return CreateInstancesResponse
     */
    public function createInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstancesWithOptions($request, $runtime);
    }

    /**
     * @param CreateSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSnapshotResponse::fromMap($this->doRPCRequest('CreateSnapshot', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSnapshotRequest $request
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCustomImageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCustomImageResponse
     */
    public function deleteCustomImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteCustomImageResponse::fromMap($this->doRPCRequest('DeleteCustomImage', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteCustomImageRequest $request
     *
     * @return DeleteCustomImageResponse
     */
    public function deleteCustomImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomImageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFirewallRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteFirewallRuleResponse
     */
    public function deleteFirewallRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteFirewallRuleResponse::fromMap($this->doRPCRequest('DeleteFirewallRule', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteFirewallRuleRequest $request
     *
     * @return DeleteFirewallRuleResponse
     */
    public function deleteFirewallRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFirewallRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteSnapshotResponse::fromMap($this->doRPCRequest('DeleteSnapshot', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteSnapshotRequest $request
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param ListDisksRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListDisksResponse
     */
    public function listDisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDisksResponse::fromMap($this->doRPCRequest('ListDisks', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDisksRequest $request
     *
     * @return ListDisksResponse
     */
    public function listDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDisksWithOptions($request, $runtime);
    }

    /**
     * @param ListFirewallRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListFirewallRulesResponse
     */
    public function listFirewallRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListFirewallRulesResponse::fromMap($this->doRPCRequest('ListFirewallRules', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListFirewallRulesRequest $request
     *
     * @return ListFirewallRulesResponse
     */
    public function listFirewallRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFirewallRulesWithOptions($request, $runtime);
    }

    /**
     * @param ListImagesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListImagesResponse::fromMap($this->doRPCRequest('ListImages', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param ListInstancePlansModificationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListInstancePlansModificationResponse
     */
    public function listInstancePlansModificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInstancePlansModificationResponse::fromMap($this->doRPCRequest('ListInstancePlansModification', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListInstancePlansModificationRequest $request
     *
     * @return ListInstancePlansModificationResponse
     */
    public function listInstancePlansModification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancePlansModificationWithOptions($request, $runtime);
    }

    /**
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInstancesResponse::fromMap($this->doRPCRequest('ListInstances', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @param ListInstancesTrafficPackagesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListInstancesTrafficPackagesResponse
     */
    public function listInstancesTrafficPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListInstancesTrafficPackagesResponse::fromMap($this->doRPCRequest('ListInstancesTrafficPackages', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListInstancesTrafficPackagesRequest $request
     *
     * @return ListInstancesTrafficPackagesResponse
     */
    public function listInstancesTrafficPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesTrafficPackagesWithOptions($request, $runtime);
    }

    /**
     * @param ListPlansRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListPlansResponse
     */
    public function listPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPlansResponse::fromMap($this->doRPCRequest('ListPlans', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPlansRequest $request
     *
     * @return ListPlansResponse
     */
    public function listPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPlansWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return ListRegionsResponse::fromMap($this->doRPCRequest('ListRegions', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * @param ListSnapshotsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListSnapshotsResponse::fromMap($this->doRPCRequest('ListSnapshots', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListSnapshotsRequest $request
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyImageShareStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyImageShareStatusResponse
     */
    public function modifyImageShareStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyImageShareStatusResponse::fromMap($this->doRPCRequest('ModifyImageShareStatus', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyImageShareStatusRequest $request
     *
     * @return ModifyImageShareStatusResponse
     */
    public function modifyImageShareStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageShareStatusWithOptions($request, $runtime);
    }

    /**
     * @param RebootInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RebootInstanceResponse::fromMap($this->doRPCRequest('RebootInstance', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RebootInstanceRequest $request
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RenewInstanceResponse::fromMap($this->doRPCRequest('RenewInstance', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ResetDiskRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ResetDiskResponse
     */
    public function resetDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetDiskResponse::fromMap($this->doRPCRequest('ResetDisk', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetDiskRequest $request
     *
     * @return ResetDiskResponse
     */
    public function resetDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDiskWithOptions($request, $runtime);
    }

    /**
     * @param ResetSystemRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ResetSystemResponse
     */
    public function resetSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResetSystemResponse::fromMap($this->doRPCRequest('ResetSystem', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResetSystemRequest $request
     *
     * @return ResetSystemResponse
     */
    public function resetSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSystemWithOptions($request, $runtime);
    }

    /**
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartInstanceResponse::fromMap($this->doRPCRequest('StartInstance', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopInstanceResponse::fromMap($this->doRPCRequest('StopInstance', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateInstanceAttributeResponse
     */
    public function updateInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateInstanceAttributeResponse::fromMap($this->doRPCRequest('UpdateInstanceAttribute', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateInstanceAttributeRequest $request
     *
     * @return UpdateInstanceAttributeResponse
     */
    public function updateInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpgradeInstanceResponse
     */
    public function upgradeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpgradeInstanceResponse::fromMap($this->doRPCRequest('UpgradeInstance', '2020-06-01', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpgradeInstanceRequest $request
     *
     * @return UpgradeInstanceResponse
     */
    public function upgradeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeInstanceWithOptions($request, $runtime);
    }
}
