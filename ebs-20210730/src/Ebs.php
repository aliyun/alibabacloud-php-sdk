<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ebs\V20210730\Models\AddDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\AddDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ApplyLensServiceResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\BindEnterpriseSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\BindEnterpriseSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CancelLensServiceResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ChangeResourceGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ChangeResourceGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ClearPairDrillRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ClearPairDrillResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ClearReplicaGroupDrillRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ClearReplicaGroupDrillResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDedicatedBlockStorageClusterRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDedicatedBlockStorageClusterResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateEnterpriseSnapshotPolicyShrinkRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteEnterpriseSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteEnterpriseSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClusterDisksRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClusterDisksResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskEventsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskEventsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskMonitorDataListRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskMonitorDataListResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskMonitorDataRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskMonitorDataResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaGroupsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaGroupsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairProgressRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairProgressResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEventsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEventsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeLensMonitorDisksRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeLensMonitorDisksResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeLensServiceStatusResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeMetricDataRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeMetricDataResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribePairDrillsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribePairDrillsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeReplicaGroupDrillsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeReplicaGroupDrillsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeSolutionInstanceConfigurationRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeSolutionInstanceConfigurationResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeUserTagKeysRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeUserTagKeysResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeUserTagValuesRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeUserTagValuesResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\GetReportRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\GetReportResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ListReportsRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ListReportsResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDedicatedBlockStorageClusterAttributeRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDedicatedBlockStorageClusterAttributeResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\QueryDedicatedBlockStorageClusterDiskThroughputStatusRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\QueryDedicatedBlockStorageClusterDiskThroughputStatusResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\QueryDedicatedBlockStorageClusterInventoryDataRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\QueryDedicatedBlockStorageClusterInventoryDataResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\RemoveDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\RemoveDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ReprotectDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ReprotectDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ReprotectDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ReprotectDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\SetDedicatedBlockStorageClusterDiskThroughputRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\SetDedicatedBlockStorageClusterDiskThroughputResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StartDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StartDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StartDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StartDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StartPairDrillRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StartPairDrillResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StartReplicaGroupDrillRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StartReplicaGroupDrillResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StopDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StopDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StopDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\StopDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UnbindEnterpriseSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UnbindEnterpriseSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateEnterpriseSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateEnterpriseSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateEnterpriseSnapshotPolicyShrinkRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateSolutionInstanceAttributeRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\UpdateSolutionInstanceAttributeResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ebs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ebs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Adds a replication pair to a replication pair-consistent group. You can use a replication pair-consistent group to batch manage replication pairs. When you call this operation, you can specify parameters, such as ReplicaGroupId, ReplicaPairId, and ClientToken, in the request.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   A replication pair and a replication pair-consistent group replicate in the same direction if they have the same primary region (production region), primary zone (production zone), secondary region (disaster recovery region), and secondary zone (disaster recovery zone). A replication pair can be added only to a replication pair-consistent group that replicates in the same direction as the replication pair.
     * *   Before you can add a replication pair to a replication pair-consistent group, make sure that the pair and the group are in the **Created** (`created`) or **Stopped** (`stopped`) state.
     * *   Up to 17 replication pairs can be added to a single replication pair-consistent group.
     * *   After replication pairs are added to a replication pair-consistent group, the recovery point objective (RPO) of the group takes effect on the pairs in place of their original RPOs.
     *
     * @param request - AddDiskReplicaPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDiskReplicaPairResponse
     *
     * @param AddDiskReplicaPairRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AddDiskReplicaPairResponse
     */
    public function addDiskReplicaPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaGroupId) {
            @$query['ReplicaGroupId'] = $request->replicaGroupId;
        }

        if (null !== $request->replicaPairId) {
            @$query['ReplicaPairId'] = $request->replicaPairId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDiskReplicaPair',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a replication pair to a replication pair-consistent group. You can use a replication pair-consistent group to batch manage replication pairs. When you call this operation, you can specify parameters, such as ReplicaGroupId, ReplicaPairId, and ClientToken, in the request.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   A replication pair and a replication pair-consistent group replicate in the same direction if they have the same primary region (production region), primary zone (production zone), secondary region (disaster recovery region), and secondary zone (disaster recovery zone). A replication pair can be added only to a replication pair-consistent group that replicates in the same direction as the replication pair.
     * *   Before you can add a replication pair to a replication pair-consistent group, make sure that the pair and the group are in the **Created** (`created`) or **Stopped** (`stopped`) state.
     * *   Up to 17 replication pairs can be added to a single replication pair-consistent group.
     * *   After replication pairs are added to a replication pair-consistent group, the recovery point objective (RPO) of the group takes effect on the pairs in place of their original RPOs.
     *
     * @param request - AddDiskReplicaPairRequest
     *
     * @returns AddDiskReplicaPairResponse
     *
     * @param AddDiskReplicaPairRequest $request
     *
     * @return AddDiskReplicaPairResponse
     */
    public function addDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * Enables CloudLens for EBS.
     *
     * @remarks
     * ## Usage notes
     * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *
     * @param request - ApplyLensServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyLensServiceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ApplyLensServiceResponse
     */
    public function applyLensServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ApplyLensService',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyLensServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables CloudLens for EBS.
     *
     * @remarks
     * ## Usage notes
     * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *
     * @returns ApplyLensServiceResponse
     *
     * @return ApplyLensServiceResponse
     */
    public function applyLensService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyLensServiceWithOptions($runtime);
    }

    /**
     * Bind disks into a enterprise-level snapshot policy.
     *
     * @param request - BindEnterpriseSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindEnterpriseSnapshotPolicyResponse
     *
     * @param BindEnterpriseSnapshotPolicyRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BindEnterpriseSnapshotPolicyResponse
     */
    public function bindEnterpriseSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->diskTargets) {
            @$query['DiskTargets'] = $request->diskTargets;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindEnterpriseSnapshotPolicy',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindEnterpriseSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Bind disks into a enterprise-level snapshot policy.
     *
     * @param request - BindEnterpriseSnapshotPolicyRequest
     *
     * @returns BindEnterpriseSnapshotPolicyResponse
     *
     * @param BindEnterpriseSnapshotPolicyRequest $request
     *
     * @return BindEnterpriseSnapshotPolicyResponse
     */
    public function bindEnterpriseSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindEnterpriseSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Disables CloudLens for EBS.
     *
     * @remarks
     * ## Usage notes
     * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *
     * @param request - CancelLensServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelLensServiceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return CancelLensServiceResponse
     */
    public function cancelLensServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'CancelLensService',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelLensServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables CloudLens for EBS.
     *
     * @remarks
     * ## Usage notes
     * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *
     * @returns CancelLensServiceResponse
     *
     * @return CancelLensServiceResponse
     */
    public function cancelLensService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelLensServiceWithOptions($runtime);
    }

    /**
     * Changes the resource group to which an Elastic Block Storage (EBS) resource belongs.
     *
     * @param request - ChangeResourceGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->newResourceGroupId) {
            @$query['NewResourceGroupId'] = $request->newResourceGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ChangeResourceGroup',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the resource group to which an Elastic Block Storage (EBS) resource belongs.
     *
     * @param request - ChangeResourceGroupRequest
     *
     * @returns ChangeResourceGroupResponse
     *
     * @param ChangeResourceGroupRequest $request
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResourceGroupWithOptions($request, $runtime);
    }

    /**
     * Clears the disaster recovery drills that were initiated from the secondary disk of a replication pair and deletes the auto-created drill disks.
     *
     * @param request - ClearPairDrillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClearPairDrillResponse
     *
     * @param ClearPairDrillRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ClearPairDrillResponse
     */
    public function clearPairDrillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drillId) {
            @$query['DrillId'] = $request->drillId;
        }

        if (null !== $request->pairId) {
            @$query['PairId'] = $request->pairId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClearPairDrill',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClearPairDrillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Clears the disaster recovery drills that were initiated from the secondary disk of a replication pair and deletes the auto-created drill disks.
     *
     * @param request - ClearPairDrillRequest
     *
     * @returns ClearPairDrillResponse
     *
     * @param ClearPairDrillRequest $request
     *
     * @return ClearPairDrillResponse
     */
    public function clearPairDrill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearPairDrillWithOptions($request, $runtime);
    }

    /**
     * Clears the disaster recovery drills that were initiated from the secondary disks of a replication pair-consistent group and deletes the auto-created drill disks.
     *
     * @param request - ClearReplicaGroupDrillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClearReplicaGroupDrillResponse
     *
     * @param ClearReplicaGroupDrillRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ClearReplicaGroupDrillResponse
     */
    public function clearReplicaGroupDrillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drillId) {
            @$query['DrillId'] = $request->drillId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClearReplicaGroupDrill',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClearReplicaGroupDrillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Clears the disaster recovery drills that were initiated from the secondary disks of a replication pair-consistent group and deletes the auto-created drill disks.
     *
     * @param request - ClearReplicaGroupDrillRequest
     *
     * @returns ClearReplicaGroupDrillResponse
     *
     * @param ClearReplicaGroupDrillRequest $request
     *
     * @return ClearReplicaGroupDrillResponse
     */
    public function clearReplicaGroupDrill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearReplicaGroupDrillWithOptions($request, $runtime);
    }

    /**
     * Creates a dedicated block storage cluster. When you call this operation, you can specify parameters, such as Azone, Capacity, Type, and PeriodUnit, in the request.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   Dedicated block storage clusters are physically isolated from public block storage clusters. The owner of each dedicated block storage cluster has exclusive access to all resources in the cluster.
     * *   Disks created in a dedicated block storage cluster can be attached only to Elastic Compute Service (ECS) instances that reside in the same zone as the cluster. Before you create a dedicated block storage cluster, decide the regions and zones in which to deploy your cloud resources.
     * *   Dedicated block storage clusters are classified into basic and performance types. When you create a dedicated block storage cluster, select a cluster type based on your business requirements.
     * *   You are charged for creating dedicated block storage clusters.
     *
     * @param request - CreateDedicatedBlockStorageClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDedicatedBlockStorageClusterResponse
     *
     * @param CreateDedicatedBlockStorageClusterRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CreateDedicatedBlockStorageClusterResponse
     */
    public function createDedicatedBlockStorageClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->azone) {
            @$query['Azone'] = $request->azone;
        }

        if (null !== $request->capacity) {
            @$query['Capacity'] = $request->capacity;
        }

        if (null !== $request->dbscId) {
            @$query['DbscId'] = $request->dbscId;
        }

        if (null !== $request->dbscName) {
            @$query['DbscName'] = $request->dbscName;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDedicatedBlockStorageCluster',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDedicatedBlockStorageClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a dedicated block storage cluster. When you call this operation, you can specify parameters, such as Azone, Capacity, Type, and PeriodUnit, in the request.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   Dedicated block storage clusters are physically isolated from public block storage clusters. The owner of each dedicated block storage cluster has exclusive access to all resources in the cluster.
     * *   Disks created in a dedicated block storage cluster can be attached only to Elastic Compute Service (ECS) instances that reside in the same zone as the cluster. Before you create a dedicated block storage cluster, decide the regions and zones in which to deploy your cloud resources.
     * *   Dedicated block storage clusters are classified into basic and performance types. When you create a dedicated block storage cluster, select a cluster type based on your business requirements.
     * *   You are charged for creating dedicated block storage clusters.
     *
     * @param request - CreateDedicatedBlockStorageClusterRequest
     *
     * @returns CreateDedicatedBlockStorageClusterResponse
     *
     * @param CreateDedicatedBlockStorageClusterRequest $request
     *
     * @return CreateDedicatedBlockStorageClusterResponse
     */
    public function createDedicatedBlockStorageCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedBlockStorageClusterWithOptions($request, $runtime);
    }

    /**
     * Creates a replication pair-consistent group.
     *
     * @remarks
     * ## [](#)Usage notes
     * The replication pair-consistent group feature allows you to batch manage multiple disks in disaster recovery scenarios. You can restore the data of all disks in the same replication pair-consistent group to the same point in time to allow for disaster recovery of instances.
     * Take note of the following items:
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   Replication pair-consistent groups can be used to implement disaster recovery across zones within the same region and disaster recovery across regions.
     * *   A replication pair and a replication pair-consistent group can replicate in the same direction if they have the same primary region (production region), primary zone (production zone), secondary region (disaster recovery region), and secondary zone (disaster recovery zone). A replication pair can be added to only a replication pair-consistent group that replicates in the same direction as the replication pair.
     * *   After replication pairs are added to a replication pair-consistent group, the recovery point objective (RPO) of the group takes effect on the pairs instead of their original RPOs.
     *
     * @param request - CreateDiskReplicaGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDiskReplicaGroupResponse
     *
     * @param CreateDiskReplicaGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateDiskReplicaGroupResponse
     */
    public function createDiskReplicaGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destinationRegionId) {
            @$query['DestinationRegionId'] = $request->destinationRegionId;
        }

        if (null !== $request->destinationZoneId) {
            @$query['DestinationZoneId'] = $request->destinationZoneId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->RPO) {
            @$query['RPO'] = $request->RPO;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceZoneId) {
            @$query['SourceZoneId'] = $request->sourceZoneId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDiskReplicaGroup',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a replication pair-consistent group.
     *
     * @remarks
     * ## [](#)Usage notes
     * The replication pair-consistent group feature allows you to batch manage multiple disks in disaster recovery scenarios. You can restore the data of all disks in the same replication pair-consistent group to the same point in time to allow for disaster recovery of instances.
     * Take note of the following items:
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   Replication pair-consistent groups can be used to implement disaster recovery across zones within the same region and disaster recovery across regions.
     * *   A replication pair and a replication pair-consistent group can replicate in the same direction if they have the same primary region (production region), primary zone (production zone), secondary region (disaster recovery region), and secondary zone (disaster recovery zone). A replication pair can be added to only a replication pair-consistent group that replicates in the same direction as the replication pair.
     * *   After replication pairs are added to a replication pair-consistent group, the recovery point objective (RPO) of the group takes effect on the pairs instead of their original RPOs.
     *
     * @param request - CreateDiskReplicaGroupRequest
     *
     * @returns CreateDiskReplicaGroupResponse
     *
     * @param CreateDiskReplicaGroupRequest $request
     *
     * @return CreateDiskReplicaGroupResponse
     */
    public function createDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a replication pair to asynchronously replicate data between disks.
     *
     * @remarks
     * Async replication is a feature that protects data across regions by using the data replication capability of Elastic Block Storage (EBS). This feature can be used to asynchronously replicate data from a disk in one region to a disk in another region for disaster recovery purposes. You can use this feature to implement disaster recovery for critical business to protect data in your databases and improve business continuity.
     * Currently, the async replication feature can asynchronously replicate data only between enhanced SSDs (ESSDs). The functionality of disks in replication pairs is limited. You are charged on a subscription basis for the bandwidth that is used by the async replication feature.
     * Before you call this operation, take note of the following items:
     * *   Make sure that the source disk (primary disk) from which to replicate data and the destination disk (secondary disk) to which to replicate data are created. You can call the [CreateDisk](https://help.aliyun.com/document_detail/25513.html) operation to create disks.
     * *   The secondary disk cannot reside the same region as the primary disk. The async replication feature is supported in the China (Hangzhou), China (Shanghai), China (Beijing), China (Shenzhen), China (Heyuan), China (Chengdu), China (Hong Kong), Singapore, US (Silicon Valley), and US (Virginia) regions.
     * *   After you call this operation to create a replication pair, you must call the [StartDiskReplicaPair](https://help.aliyun.com/document_detail/354205.html) operation to enable async replication to periodically replicate data from the primary disk to the secondary disk across regions.
     *
     * @param request - CreateDiskReplicaPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDiskReplicaPairResponse
     *
     * @param CreateDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateDiskReplicaPairResponse
     */
    public function createDiskReplicaPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destinationDiskId) {
            @$query['DestinationDiskId'] = $request->destinationDiskId;
        }

        if (null !== $request->destinationRegionId) {
            @$query['DestinationRegionId'] = $request->destinationRegionId;
        }

        if (null !== $request->destinationZoneId) {
            @$query['DestinationZoneId'] = $request->destinationZoneId;
        }

        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->pairName) {
            @$query['PairName'] = $request->pairName;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->RPO) {
            @$query['RPO'] = $request->RPO;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->sourceZoneId) {
            @$query['SourceZoneId'] = $request->sourceZoneId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDiskReplicaPair',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a replication pair to asynchronously replicate data between disks.
     *
     * @remarks
     * Async replication is a feature that protects data across regions by using the data replication capability of Elastic Block Storage (EBS). This feature can be used to asynchronously replicate data from a disk in one region to a disk in another region for disaster recovery purposes. You can use this feature to implement disaster recovery for critical business to protect data in your databases and improve business continuity.
     * Currently, the async replication feature can asynchronously replicate data only between enhanced SSDs (ESSDs). The functionality of disks in replication pairs is limited. You are charged on a subscription basis for the bandwidth that is used by the async replication feature.
     * Before you call this operation, take note of the following items:
     * *   Make sure that the source disk (primary disk) from which to replicate data and the destination disk (secondary disk) to which to replicate data are created. You can call the [CreateDisk](https://help.aliyun.com/document_detail/25513.html) operation to create disks.
     * *   The secondary disk cannot reside the same region as the primary disk. The async replication feature is supported in the China (Hangzhou), China (Shanghai), China (Beijing), China (Shenzhen), China (Heyuan), China (Chengdu), China (Hong Kong), Singapore, US (Silicon Valley), and US (Virginia) regions.
     * *   After you call this operation to create a replication pair, you must call the [StartDiskReplicaPair](https://help.aliyun.com/document_detail/354205.html) operation to enable async replication to periodically replicate data from the primary disk to the secondary disk across regions.
     *
     * @param request - CreateDiskReplicaPairRequest
     *
     * @returns CreateDiskReplicaPairResponse
     *
     * @param CreateDiskReplicaPairRequest $request
     *
     * @return CreateDiskReplicaPairResponse
     */
    public function createDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * Create an enterprise-level snapshot policy.
     *
     * @param tmpReq - CreateEnterpriseSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEnterpriseSnapshotPolicyResponse
     *
     * @param CreateEnterpriseSnapshotPolicyRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateEnterpriseSnapshotPolicyResponse
     */
    public function createEnterpriseSnapshotPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEnterpriseSnapshotPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->crossRegionCopyInfo) {
            $request->crossRegionCopyInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->crossRegionCopyInfo, 'CrossRegionCopyInfo', 'json');
        }

        if (null !== $tmpReq->retainRule) {
            $request->retainRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->retainRule, 'RetainRule', 'json');
        }

        if (null !== $tmpReq->schedule) {
            $request->scheduleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->schedule, 'Schedule', 'json');
        }

        if (null !== $tmpReq->specialRetainRules) {
            $request->specialRetainRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->specialRetainRules, 'SpecialRetainRules', 'json');
        }

        if (null !== $tmpReq->storageRule) {
            $request->storageRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storageRule, 'StorageRule', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->crossRegionCopyInfoShrink) {
            @$query['CrossRegionCopyInfo'] = $request->crossRegionCopyInfoShrink;
        }

        if (null !== $request->desc) {
            @$query['Desc'] = $request->desc;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->retainRuleShrink) {
            @$query['RetainRule'] = $request->retainRuleShrink;
        }

        if (null !== $request->scheduleShrink) {
            @$query['Schedule'] = $request->scheduleShrink;
        }

        if (null !== $request->specialRetainRulesShrink) {
            @$query['SpecialRetainRules'] = $request->specialRetainRulesShrink;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->storageRuleShrink) {
            @$query['StorageRule'] = $request->storageRuleShrink;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEnterpriseSnapshotPolicy',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEnterpriseSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an enterprise-level snapshot policy.
     *
     * @param request - CreateEnterpriseSnapshotPolicyRequest
     *
     * @returns CreateEnterpriseSnapshotPolicyResponse
     *
     * @param CreateEnterpriseSnapshotPolicyRequest $request
     *
     * @return CreateEnterpriseSnapshotPolicyResponse
     */
    public function createEnterpriseSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnterpriseSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes a replication pair-consistent group.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   Before you can delete a replication pair-consistent group, make sure that no replication pairs exist in the group.
     * *   The replication pair-consistent group that you want to delete must be in the **Created** (`created`), **Creation Failed** (`create_failed`), **Stopped** (`stopped`), **Failovered** (`failovered`), **Deleting** (`deleting`), **Deletion Failed** (`delete_failed`), or **Invalid** (`invalid`) state.
     *
     * @param request - DeleteDiskReplicaGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDiskReplicaGroupResponse
     *
     * @param DeleteDiskReplicaGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteDiskReplicaGroupResponse
     */
    public function deleteDiskReplicaGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaGroupId) {
            @$query['ReplicaGroupId'] = $request->replicaGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDiskReplicaGroup',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a replication pair-consistent group.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   Before you can delete a replication pair-consistent group, make sure that no replication pairs exist in the group.
     * *   The replication pair-consistent group that you want to delete must be in the **Created** (`created`), **Creation Failed** (`create_failed`), **Stopped** (`stopped`), **Failovered** (`failovered`), **Deleting** (`deleting`), **Deletion Failed** (`delete_failed`), or **Invalid** (`invalid`) state.
     *
     * @param request - DeleteDiskReplicaGroupRequest
     *
     * @returns DeleteDiskReplicaGroupResponse
     *
     * @param DeleteDiskReplicaGroupRequest $request
     *
     * @return DeleteDiskReplicaGroupResponse
     */
    public function deleteDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes replication pairs.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   Only replication pairs that are in the **Stopped** (`stopped`), **Invalid** (`invalid`), or **Failovered** (`failovered`) state can be deleted. This operation deletes only replication pairs. The primary and secondary disks in the deleted replication pairs are retained.
     * *   To delete a replication pair, you must call this operation in the region where the primary disk is located. After the replication pair is deleted, the functionality limits are lifted from the primary and secondary disks. For example, you can attach the secondary disk, resize the disk, or read data from or write data to the disk.
     *
     * @param request - DeleteDiskReplicaPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDiskReplicaPairResponse
     *
     * @param DeleteDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteDiskReplicaPairResponse
     */
    public function deleteDiskReplicaPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaPairId) {
            @$query['ReplicaPairId'] = $request->replicaPairId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDiskReplicaPair',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes replication pairs.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   Only replication pairs that are in the **Stopped** (`stopped`), **Invalid** (`invalid`), or **Failovered** (`failovered`) state can be deleted. This operation deletes only replication pairs. The primary and secondary disks in the deleted replication pairs are retained.
     * *   To delete a replication pair, you must call this operation in the region where the primary disk is located. After the replication pair is deleted, the functionality limits are lifted from the primary and secondary disks. For example, you can attach the secondary disk, resize the disk, or read data from or write data to the disk.
     *
     * @param request - DeleteDiskReplicaPairRequest
     *
     * @returns DeleteDiskReplicaPairResponse
     *
     * @param DeleteDiskReplicaPairRequest $request
     *
     * @return DeleteDiskReplicaPairResponse
     */
    public function deleteDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * Delete a enterprise-level snapshot policy.
     *
     * @param request - DeleteEnterpriseSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEnterpriseSnapshotPolicyResponse
     *
     * @param DeleteEnterpriseSnapshotPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteEnterpriseSnapshotPolicyResponse
     */
    public function deleteEnterpriseSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEnterpriseSnapshotPolicy',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEnterpriseSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete a enterprise-level snapshot policy.
     *
     * @param request - DeleteEnterpriseSnapshotPolicyRequest
     *
     * @returns DeleteEnterpriseSnapshotPolicyResponse
     *
     * @param DeleteEnterpriseSnapshotPolicyRequest $request
     *
     * @return DeleteEnterpriseSnapshotPolicyResponse
     */
    public function deleteEnterpriseSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnterpriseSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the details of one or more disks in a dedicated block storage cluster.
     *
     * @remarks
     *   You can use one of the following methods to check the responses:
     *     *   Method 1: Use `NextToken` to configure the query token. Set the value to the `NextToken` value that is returned in the last call to the DescribeDisks operation. Then, use `MaxResults` to specify the maximum number of entries to return on each page.
     *     *   Method 2: Use `PageSize` to specify the number of entries to return on each page and then use `PageNumber` to specify the number of the page to return.
     *         You can use only one of the preceding methods. If a large number of entries are to be returned, we recommend that you use method 1. When `NextToken` is specified, `PageSize` and `PageNumber` do not take effect and `TotalCount` in the response is invalid.
     * *   A disk that has the multi-attach feature enabled can be attached to multiple instances. You can query the attachment information of the disk based on the `Attachment` values in the response.
     * When you call an API operation by using Alibaba Cloud CLI, you must specify request parameter values of different data types in the required formats. For more information, see [Parameter format overview](https://help.aliyun.com/document_detail/110340.html).
     *
     * @param request - DescribeDedicatedBlockStorageClusterDisksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDedicatedBlockStorageClusterDisksResponse
     *
     * @param DescribeDedicatedBlockStorageClusterDisksRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeDedicatedBlockStorageClusterDisksResponse
     */
    public function describeDedicatedBlockStorageClusterDisksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dbscId) {
            @$query['DbscId'] = $request->dbscId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDedicatedBlockStorageClusterDisks',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDedicatedBlockStorageClusterDisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of one or more disks in a dedicated block storage cluster.
     *
     * @remarks
     *   You can use one of the following methods to check the responses:
     *     *   Method 1: Use `NextToken` to configure the query token. Set the value to the `NextToken` value that is returned in the last call to the DescribeDisks operation. Then, use `MaxResults` to specify the maximum number of entries to return on each page.
     *     *   Method 2: Use `PageSize` to specify the number of entries to return on each page and then use `PageNumber` to specify the number of the page to return.
     *         You can use only one of the preceding methods. If a large number of entries are to be returned, we recommend that you use method 1. When `NextToken` is specified, `PageSize` and `PageNumber` do not take effect and `TotalCount` in the response is invalid.
     * *   A disk that has the multi-attach feature enabled can be attached to multiple instances. You can query the attachment information of the disk based on the `Attachment` values in the response.
     * When you call an API operation by using Alibaba Cloud CLI, you must specify request parameter values of different data types in the required formats. For more information, see [Parameter format overview](https://help.aliyun.com/document_detail/110340.html).
     *
     * @param request - DescribeDedicatedBlockStorageClusterDisksRequest
     *
     * @returns DescribeDedicatedBlockStorageClusterDisksResponse
     *
     * @param DescribeDedicatedBlockStorageClusterDisksRequest $request
     *
     * @return DescribeDedicatedBlockStorageClusterDisksResponse
     */
    public function describeDedicatedBlockStorageClusterDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedBlockStorageClusterDisksWithOptions($request, $runtime);
    }

    /**
     * Queries the dedicated block storage clusters that are created.
     *
     * @remarks
     * ## [](#)Usage notes
     * >  The Dedicated Block Storage Cluster feature is available only in the China (Heyuan), Indonesia (Jakarta), and China (Shenzhen) regions.
     * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are included in the filter conditions.
     * *   We recommend that you use NextToken and MaxResults to perform paged queries. We recommend that you use MaxResults to specify the maximum number of entries to return in each request. The return value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results. When you call the DescribeDedicatedBlockStorageClusters operation to retrieve a new page of results, set NextToken to the NextToken value that is returned in the previous call and specify MaxResults to limit the number of entries returned.
     *
     * @param request - DescribeDedicatedBlockStorageClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDedicatedBlockStorageClustersResponse
     *
     * @param DescribeDedicatedBlockStorageClustersRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDedicatedBlockStorageClustersResponse
     */
    public function describeDedicatedBlockStorageClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dedicatedBlockStorageClusterId) {
            @$query['DedicatedBlockStorageClusterId'] = $request->dedicatedBlockStorageClusterId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $body = [];
        if (null !== $request->azoneId) {
            @$body['AzoneId'] = $request->azoneId;
        }

        if (null !== $request->category) {
            @$body['Category'] = $request->category;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeDedicatedBlockStorageClusters',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDedicatedBlockStorageClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the dedicated block storage clusters that are created.
     *
     * @remarks
     * ## [](#)Usage notes
     * >  The Dedicated Block Storage Cluster feature is available only in the China (Heyuan), Indonesia (Jakarta), and China (Shenzhen) regions.
     * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are included in the filter conditions.
     * *   We recommend that you use NextToken and MaxResults to perform paged queries. We recommend that you use MaxResults to specify the maximum number of entries to return in each request. The return value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results. When you call the DescribeDedicatedBlockStorageClusters operation to retrieve a new page of results, set NextToken to the NextToken value that is returned in the previous call and specify MaxResults to limit the number of entries returned.
     *
     * @param request - DescribeDedicatedBlockStorageClustersRequest
     *
     * @returns DescribeDedicatedBlockStorageClustersResponse
     *
     * @param DescribeDedicatedBlockStorageClustersRequest $request
     *
     * @return DescribeDedicatedBlockStorageClustersResponse
     */
    public function describeDedicatedBlockStorageClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedBlockStorageClustersWithOptions($request, $runtime);
    }

    /**
     * Queries the risk events of a disk.
     *
     * @remarks
     * ## Usage notes
     * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *
     * @param request - DescribeDiskEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiskEventsResponse
     *
     * @param DescribeDiskEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDiskEventsResponse
     */
    public function describeDiskEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diskCategory) {
            @$query['DiskCategory'] = $request->diskCategory;
        }

        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiskEvents',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiskEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the risk events of a disk.
     *
     * @remarks
     * ## Usage notes
     * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *
     * @param request - DescribeDiskEventsRequest
     *
     * @returns DescribeDiskEventsResponse
     *
     * @param DescribeDiskEventsRequest $request
     *
     * @return DescribeDiskEventsResponse
     */
    public function describeDiskEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskEventsWithOptions($request, $runtime);
    }

    /**
     * Queries the near real-time monitoring data of a disk.
     *
     * @remarks
     * ## Usage notes
     * *   CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     * *   Up to 400 monitoring data entries can be returned at a time. An error is returned if the value calculated based on the following formula is greater than 400: `(EndTime - StartTime)/Period`.
     * *   You can query the monitoring data collected in the last three days. An error is returned if the time specified by `StartTime` is more than three days prior to the current time.
     *
     * @param request - DescribeDiskMonitorDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiskMonitorDataResponse
     *
     * @param DescribeDiskMonitorDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDiskMonitorDataResponse
     */
    public function describeDiskMonitorDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiskMonitorData',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiskMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the near real-time monitoring data of a disk.
     *
     * @remarks
     * ## Usage notes
     * *   CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     * *   Up to 400 monitoring data entries can be returned at a time. An error is returned if the value calculated based on the following formula is greater than 400: `(EndTime - StartTime)/Period`.
     * *   You can query the monitoring data collected in the last three days. An error is returned if the time specified by `StartTime` is more than three days prior to the current time.
     *
     * @param request - DescribeDiskMonitorDataRequest
     *
     * @returns DescribeDiskMonitorDataResponse
     *
     * @param DescribeDiskMonitorDataRequest $request
     *
     * @return DescribeDiskMonitorDataResponse
     */
    public function describeDiskMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskMonitorDataWithOptions($request, $runtime);
    }

    /**
     * Queries the near real-time monitoring data of disks. You can query only the burst performance data of ESSD AutoPL disks. The data is aggregated by hour.
     *
     * @remarks
     * ## Usage notes
     * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *
     * @param request - DescribeDiskMonitorDataListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiskMonitorDataListResponse
     *
     * @param DescribeDiskMonitorDataListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDiskMonitorDataListResponse
     */
    public function describeDiskMonitorDataListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diskIds) {
            @$query['DiskIds'] = $request->diskIds;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiskMonitorDataList',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiskMonitorDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the near real-time monitoring data of disks. You can query only the burst performance data of ESSD AutoPL disks. The data is aggregated by hour.
     *
     * @remarks
     * ## Usage notes
     * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *
     * @param request - DescribeDiskMonitorDataListRequest
     *
     * @returns DescribeDiskMonitorDataListResponse
     *
     * @param DescribeDiskMonitorDataListRequest $request
     *
     * @return DescribeDiskMonitorDataListResponse
     */
    public function describeDiskMonitorDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskMonitorDataListWithOptions($request, $runtime);
    }

    /**
     * Queries the details of replication pair-consistent groups in a specific region.
     *
     * @remarks
     * ## [](#)Usage notes
     * To perform a paged query, specify the MaxResults and NextToken parameters.
     * During a paged query, when you call the DescribeDiskReplicaGroups operation to retrieve the first page of results, set `MaxResults` to specify the maximum number of entries to return in the call. The return value of `NextToken` is a pagination token, which can be used in the next call to retrieve a new page of results. When you call the DescribeDiskReplicaGroups operation to retrieve a new page of results, set NextToken to the NextToken value returned in the previous call and set MaxResults to specify the maximum number of entries to return in this call.
     *
     * @param request - DescribeDiskReplicaGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiskReplicaGroupsResponse
     *
     * @param DescribeDiskReplicaGroupsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDiskReplicaGroupsResponse
     */
    public function describeDiskReplicaGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->site) {
            @$query['Site'] = $request->site;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiskReplicaGroups',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiskReplicaGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of replication pair-consistent groups in a specific region.
     *
     * @remarks
     * ## [](#)Usage notes
     * To perform a paged query, specify the MaxResults and NextToken parameters.
     * During a paged query, when you call the DescribeDiskReplicaGroups operation to retrieve the first page of results, set `MaxResults` to specify the maximum number of entries to return in the call. The return value of `NextToken` is a pagination token, which can be used in the next call to retrieve a new page of results. When you call the DescribeDiskReplicaGroups operation to retrieve a new page of results, set NextToken to the NextToken value returned in the previous call and set MaxResults to specify the maximum number of entries to return in this call.
     *
     * @param request - DescribeDiskReplicaGroupsRequest
     *
     * @returns DescribeDiskReplicaGroupsResponse
     *
     * @param DescribeDiskReplicaGroupsRequest $request
     *
     * @return DescribeDiskReplicaGroupsResponse
     */
    public function describeDiskReplicaGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskReplicaGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries the replication progress of a replication pair.
     *
     * @param request - DescribeDiskReplicaPairProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiskReplicaPairProgressResponse
     *
     * @param DescribeDiskReplicaPairProgressRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDiskReplicaPairProgressResponse
     */
    public function describeDiskReplicaPairProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaPairId) {
            @$query['ReplicaPairId'] = $request->replicaPairId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiskReplicaPairProgress',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiskReplicaPairProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the replication progress of a replication pair.
     *
     * @param request - DescribeDiskReplicaPairProgressRequest
     *
     * @returns DescribeDiskReplicaPairProgressResponse
     *
     * @param DescribeDiskReplicaPairProgressRequest $request
     *
     * @return DescribeDiskReplicaPairProgressResponse
     */
    public function describeDiskReplicaPairProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskReplicaPairProgressWithOptions($request, $runtime);
    }

    /**
     * Queries information about replication pairs in a specific region.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   When you call this operation for a specific region, if the primary disk (source disk) or secondary disk (destination disk) of a replication pair resides in the region, information about the replication pair is displayed in the response.
     * *   If you want to perform a paged query, configure the `NextToken` and `MaxResults` parameters. During a paged query, when you call the DescribeDiskReplicaPairs operation to retrieve the first page of results, set `MaxResults` to limit the maximum number of entries to return in the call. The return value of NextToken is a pagination token, which can be used in the next call to retrieve a new page of results. When you call the DescribeDiskReplicaPairs operation to retrieve a new page of results, set NextToken to the NextToken value returned in the previous call and set MaxResults to specify the maximum number of entries to return in this call.
     *
     * @param request - DescribeDiskReplicaPairsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiskReplicaPairsResponse
     *
     * @param DescribeDiskReplicaPairsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeDiskReplicaPairsResponse
     */
    public function describeDiskReplicaPairsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pairIds) {
            @$query['PairIds'] = $request->pairIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaGroupId) {
            @$query['ReplicaGroupId'] = $request->replicaGroupId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->site) {
            @$query['Site'] = $request->site;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiskReplicaPairs',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiskReplicaPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about replication pairs in a specific region.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   When you call this operation for a specific region, if the primary disk (source disk) or secondary disk (destination disk) of a replication pair resides in the region, information about the replication pair is displayed in the response.
     * *   If you want to perform a paged query, configure the `NextToken` and `MaxResults` parameters. During a paged query, when you call the DescribeDiskReplicaPairs operation to retrieve the first page of results, set `MaxResults` to limit the maximum number of entries to return in the call. The return value of NextToken is a pagination token, which can be used in the next call to retrieve a new page of results. When you call the DescribeDiskReplicaPairs operation to retrieve a new page of results, set NextToken to the NextToken value returned in the previous call and set MaxResults to specify the maximum number of entries to return in this call.
     *
     * @param request - DescribeDiskReplicaPairsRequest
     *
     * @returns DescribeDiskReplicaPairsResponse
     *
     * @param DescribeDiskReplicaPairsRequest $request
     *
     * @return DescribeDiskReplicaPairsResponse
     */
    public function describeDiskReplicaPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskReplicaPairsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about enterprise-level snapshot policies. When you call this operation, you can specify parameters, such as PolicyIds, ResourceGroupId, and Tag, in the request.
     *
     * @param request - DescribeEnterpriseSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnterpriseSnapshotPolicyResponse
     *
     * @param DescribeEnterpriseSnapshotPolicyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeEnterpriseSnapshotPolicyResponse
     */
    public function describeEnterpriseSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->diskIds) {
            @$query['DiskIds'] = $request->diskIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyIds) {
            @$query['PolicyIds'] = $request->policyIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnterpriseSnapshotPolicy',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnterpriseSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about enterprise-level snapshot policies. When you call this operation, you can specify parameters, such as PolicyIds, ResourceGroupId, and Tag, in the request.
     *
     * @param request - DescribeEnterpriseSnapshotPolicyRequest
     *
     * @returns DescribeEnterpriseSnapshotPolicyResponse
     *
     * @param DescribeEnterpriseSnapshotPolicyRequest $request
     *
     * @return DescribeEnterpriseSnapshotPolicyResponse
     */
    public function describeEnterpriseSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnterpriseSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the risk events of a disk.
     *
     * @param request - DescribeEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEventsResponse
     *
     * @param DescribeEventsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeEventsResponse
     */
    public function describeEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->eventLevel) {
            @$query['EventLevel'] = $request->eventLevel;
        }

        if (null !== $request->eventName) {
            @$query['EventName'] = $request->eventName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEvents',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the risk events of a disk.
     *
     * @param request - DescribeEventsRequest
     *
     * @returns DescribeEventsResponse
     *
     * @param DescribeEventsRequest $request
     *
     * @return DescribeEventsResponse
     */
    public function describeEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEventsWithOptions($request, $runtime);
    }

    /**
     * Queries one or more Elastic Block Storage (EBS) devices that you created.
     *
     * @param request - DescribeLensMonitorDisksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLensMonitorDisksResponse
     *
     * @param DescribeLensMonitorDisksRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLensMonitorDisksResponse
     */
    public function describeLensMonitorDisksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diskCategory) {
            @$query['DiskCategory'] = $request->diskCategory;
        }

        if (null !== $request->diskIdPattern) {
            @$query['DiskIdPattern'] = $request->diskIdPattern;
        }

        if (null !== $request->diskIds) {
            @$query['DiskIds'] = $request->diskIds;
        }

        if (null !== $request->lensTags) {
            @$query['LensTags'] = $request->lensTags;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLensMonitorDisks',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLensMonitorDisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more Elastic Block Storage (EBS) devices that you created.
     *
     * @param request - DescribeLensMonitorDisksRequest
     *
     * @returns DescribeLensMonitorDisksResponse
     *
     * @param DescribeLensMonitorDisksRequest $request
     *
     * @return DescribeLensMonitorDisksResponse
     */
    public function describeLensMonitorDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLensMonitorDisksWithOptions($request, $runtime);
    }

    /**
     * 查询用户开通ebs数据洞察服务状态
     *
     * @remarks
     * ## Usage notes
     * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *
     * @param request - DescribeLensServiceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLensServiceStatusResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeLensServiceStatusResponse
     */
    public function describeLensServiceStatusWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeLensServiceStatus',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLensServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询用户开通ebs数据洞察服务状态
     *
     * @remarks
     * ## Usage notes
     * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *
     * @returns DescribeLensServiceStatusResponse
     *
     * @return DescribeLensServiceStatusResponse
     */
    public function describeLensServiceStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLensServiceStatusWithOptions($runtime);
    }

    /**
     * Queries the statistics about a metric of Elastic Block Storage (EBS) disks.
     *
     * @param request - DescribeMetricDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMetricDataResponse
     *
     * @param DescribeMetricDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMetricDataResponse
     */
    public function describeMetricDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aggreOps) {
            @$query['AggreOps'] = $request->aggreOps;
        }

        if (null !== $request->aggreOverLineOps) {
            @$query['AggreOverLineOps'] = $request->aggreOverLineOps;
        }

        if (null !== $request->dimensions) {
            @$query['Dimensions'] = $request->dimensions;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMetricData',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the statistics about a metric of Elastic Block Storage (EBS) disks.
     *
     * @param request - DescribeMetricDataRequest
     *
     * @returns DescribeMetricDataResponse
     *
     * @param DescribeMetricDataRequest $request
     *
     * @return DescribeMetricDataResponse
     */
    public function describeMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMetricDataWithOptions($request, $runtime);
    }

    /**
     * Queries the disaster recovery drills that were performed on the replication pair whose secondary disk resides in a specific region.
     *
     * @param request - DescribePairDrillsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePairDrillsResponse
     *
     * @param DescribePairDrillsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePairDrillsResponse
     */
    public function describePairDrillsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drillId) {
            @$query['DrillId'] = $request->drillId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->pairId) {
            @$query['PairId'] = $request->pairId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePairDrills',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePairDrillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the disaster recovery drills that were performed on the replication pair whose secondary disk resides in a specific region.
     *
     * @param request - DescribePairDrillsRequest
     *
     * @returns DescribePairDrillsResponse
     *
     * @param DescribePairDrillsRequest $request
     *
     * @return DescribePairDrillsResponse
     */
    public function describePairDrills($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePairDrillsWithOptions($request, $runtime);
    }

    /**
     * Queries the details of regions in which Elastic Block Storage (EBS) features (such as async replication, CloudLens for EBS, and Dedicated Block Storage Cluster) are supported.
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of regions in which Elastic Block Storage (EBS) features (such as async replication, CloudLens for EBS, and Dedicated Block Storage Cluster) are supported.
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
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
     * Queries the disaster recovery drills that were performed on the replication pair-consistent group whose secondary disk resides in a specific region.
     *
     * @param request - DescribeReplicaGroupDrillsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeReplicaGroupDrillsResponse
     *
     * @param DescribeReplicaGroupDrillsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeReplicaGroupDrillsResponse
     */
    public function describeReplicaGroupDrillsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->drillId) {
            @$query['DrillId'] = $request->drillId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeReplicaGroupDrills',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeReplicaGroupDrillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the disaster recovery drills that were performed on the replication pair-consistent group whose secondary disk resides in a specific region.
     *
     * @param request - DescribeReplicaGroupDrillsRequest
     *
     * @returns DescribeReplicaGroupDrillsResponse
     *
     * @param DescribeReplicaGroupDrillsRequest $request
     *
     * @return DescribeReplicaGroupDrillsResponse
     */
    public function describeReplicaGroupDrills($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReplicaGroupDrillsWithOptions($request, $runtime);
    }

    /**
     * 查询解决方案实例默认配置.
     *
     * @param request - DescribeSolutionInstanceConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSolutionInstanceConfigurationResponse
     *
     * @param DescribeSolutionInstanceConfigurationRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeSolutionInstanceConfigurationResponse
     */
    public function describeSolutionInstanceConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->solutionId) {
            @$query['SolutionId'] = $request->solutionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSolutionInstanceConfiguration',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSolutionInstanceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询解决方案实例默认配置.
     *
     * @param request - DescribeSolutionInstanceConfigurationRequest
     *
     * @returns DescribeSolutionInstanceConfigurationResponse
     *
     * @param DescribeSolutionInstanceConfigurationRequest $request
     *
     * @return DescribeSolutionInstanceConfigurationResponse
     */
    public function describeSolutionInstanceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSolutionInstanceConfigurationWithOptions($request, $runtime);
    }

    /**
     * Centralized Role: Query User Disk Snapshot tagKeys.
     *
     * @remarks
     * ## Interface Description
     * Query the tag key-value pairs of user\\"s cloud disk and snapshot. The search scope can be narrowed down by using filterTagKey.
     *
     * @param request - DescribeUserTagKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserTagKeysResponse
     *
     * @param DescribeUserTagKeysRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeUserTagKeysResponse
     */
    public function describeUserTagKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->tagFilterKey) {
            @$body['TagFilterKey'] = $request->tagFilterKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeUserTagKeys',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserTagKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Centralized Role: Query User Disk Snapshot tagKeys.
     *
     * @remarks
     * ## Interface Description
     * Query the tag key-value pairs of user\\"s cloud disk and snapshot. The search scope can be narrowed down by using filterTagKey.
     *
     * @param request - DescribeUserTagKeysRequest
     *
     * @returns DescribeUserTagKeysResponse
     *
     * @param DescribeUserTagKeysRequest $request
     *
     * @return DescribeUserTagKeysResponse
     */
    public function describeUserTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserTagKeysWithOptions($request, $runtime);
    }

    /**
     * Centralized Role: Query User Disk and Snapshot tagValues.
     *
     * @remarks
     * ## Interface Description
     * > The dedicated block storage cluster feature is currently supported in the following regions: South China 2 (Heyuan), Indonesia (Jakarta), and South China 1 (Shenzhen).
     * - The request parameters act as a filter, with a logical AND relationship. If any parameter is empty, the filter does not take effect.
     * - For paginated queries, it is recommended to use the MaxResults and NextToken parameters. Usage instructions: When querying the first page, set only MaxResults to limit the number of returned entries. The NextToken in the response will serve as the token for querying subsequent pages. When querying subsequent pages, set the NextToken parameter to the value obtained from the previous response, and set MaxResults to limit the number of returned entries.
     *
     * @param request - DescribeUserTagValuesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserTagValuesResponse
     *
     * @param DescribeUserTagValuesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUserTagValuesResponse
     */
    public function describeUserTagValuesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->maxResults) {
            @$body['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$body['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->tagFilterValue) {
            @$body['TagFilterValue'] = $request->tagFilterValue;
        }

        if (null !== $request->tagKey) {
            @$body['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeUserTagValues',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserTagValuesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Centralized Role: Query User Disk and Snapshot tagValues.
     *
     * @remarks
     * ## Interface Description
     * > The dedicated block storage cluster feature is currently supported in the following regions: South China 2 (Heyuan), Indonesia (Jakarta), and South China 1 (Shenzhen).
     * - The request parameters act as a filter, with a logical AND relationship. If any parameter is empty, the filter does not take effect.
     * - For paginated queries, it is recommended to use the MaxResults and NextToken parameters. Usage instructions: When querying the first page, set only MaxResults to limit the number of returned entries. The NextToken in the response will serve as the token for querying subsequent pages. When querying subsequent pages, set the NextToken parameter to the value obtained from the previous response, and set MaxResults to limit the number of returned entries.
     *
     * @param request - DescribeUserTagValuesRequest
     *
     * @returns DescribeUserTagValuesResponse
     *
     * @param DescribeUserTagValuesRequest $request
     *
     * @return DescribeUserTagValuesResponse
     */
    public function describeUserTagValues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserTagValuesWithOptions($request, $runtime);
    }

    /**
     * Enables the failover feature for replication pairs in a replication pair-consistent group. When the primary disks of specific replication pairs in a replication pair-consistent group fail, you can call this operation to enable the read and write permissions on the secondary disks.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair-consistent group must be in the **One-time Syncing** (`manual_syncing`), **Syncing** (`syncing`), **Normal** (`normal`), **Stopping** (`stopping`), **Stop Failed** (`stop_failed`), **Stopped** (`stopped`), **In Failover** (`failovering`), **Failover Failed** (`failover_failed`), or **Failovered** (`failovered`) state.
     * *   After a failover is performed, the replication pair-consistent group enters the **Failovered** (`failovered`) state.
     * *   Before you perform a failover, make sure that the first full data synchronization is completed between the primary site and secondary site.
     *
     * @param request - FailoverDiskReplicaGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FailoverDiskReplicaGroupResponse
     *
     * @param FailoverDiskReplicaGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return FailoverDiskReplicaGroupResponse
     */
    public function failoverDiskReplicaGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaGroupId) {
            @$query['ReplicaGroupId'] = $request->replicaGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FailoverDiskReplicaGroup',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FailoverDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the failover feature for replication pairs in a replication pair-consistent group. When the primary disks of specific replication pairs in a replication pair-consistent group fail, you can call this operation to enable the read and write permissions on the secondary disks.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair-consistent group must be in the **One-time Syncing** (`manual_syncing`), **Syncing** (`syncing`), **Normal** (`normal`), **Stopping** (`stopping`), **Stop Failed** (`stop_failed`), **Stopped** (`stopped`), **In Failover** (`failovering`), **Failover Failed** (`failover_failed`), or **Failovered** (`failovered`) state.
     * *   After a failover is performed, the replication pair-consistent group enters the **Failovered** (`failovered`) state.
     * *   Before you perform a failover, make sure that the first full data synchronization is completed between the primary site and secondary site.
     *
     * @param request - FailoverDiskReplicaGroupRequest
     *
     * @returns FailoverDiskReplicaGroupResponse
     *
     * @param FailoverDiskReplicaGroupRequest $request
     *
     * @return FailoverDiskReplicaGroupResponse
     */
    public function failoverDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->failoverDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * Enables the failover feature for replication pairs.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair for which you want to enable failover cannot be in the **Invalid** (`invalid`) or **Deleted** (`deleted`) state.
     * *   After a failover is performed, the replication pair enters the **Failovered** (`failovered`) state.
     *
     * @param request - FailoverDiskReplicaPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns FailoverDiskReplicaPairResponse
     *
     * @param FailoverDiskReplicaPairRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return FailoverDiskReplicaPairResponse
     */
    public function failoverDiskReplicaPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaPairId) {
            @$query['ReplicaPairId'] = $request->replicaPairId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'FailoverDiskReplicaPair',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return FailoverDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the failover feature for replication pairs.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair for which you want to enable failover cannot be in the **Invalid** (`invalid`) or **Deleted** (`deleted`) state.
     * *   After a failover is performed, the replication pair enters the **Failovered** (`failovered`) state.
     *
     * @param request - FailoverDiskReplicaPairRequest
     *
     * @returns FailoverDiskReplicaPairResponse
     *
     * @param FailoverDiskReplicaPairRequest $request
     *
     * @return FailoverDiskReplicaPairResponse
     */
    public function failoverDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->failoverDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * Centralized Role: Obtain User Usage Report with reportId.
     *
     * @param request - GetReportRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetReportResponse
     *
     * @param GetReportRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetReportResponse
     */
    public function getReportWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->reportType) {
            @$query['ReportType'] = $request->reportType;
        }

        $body = [];
        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->reportId) {
            @$body['ReportId'] = $request->reportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetReport',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Centralized Role: Obtain User Usage Report with reportId.
     *
     * @param request - GetReportRequest
     *
     * @returns GetReportResponse
     *
     * @param GetReportRequest $request
     *
     * @return GetReportResponse
     */
    public function getReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getReportWithOptions($request, $runtime);
    }

    /**
     * Centralized Role: Query Historical Reports.
     *
     * @param request - ListReportsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListReportsResponse
     *
     * @param ListReportsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListReportsResponse
     */
    public function listReportsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListReports',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListReportsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Centralized Role: Query Historical Reports.
     *
     * @param request - ListReportsRequest
     *
     * @returns ListReportsResponse
     *
     * @param ListReportsRequest $request
     *
     * @return ListReportsResponse
     */
    public function listReports($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listReportsWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are added to one or more Elastic Block Storage (EBS) resources, or queries the IDs and tags of resources in a specified non-default resource group.
     *
     * @remarks
     * Specify at least one of the following parameters or parameter pairs in a request to determine a query object:
     * *   `ResourceId.N`
     * *   `Tag.N` parameter pair (`Tag.N.Key` and `Tag.N.Value`)
     * If you set `Tag.N` and `ResourceId.N` at the same time, the EBS resources that match both the parameters are returned.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags that are added to one or more Elastic Block Storage (EBS) resources, or queries the IDs and tags of resources in a specified non-default resource group.
     *
     * @remarks
     * Specify at least one of the following parameters or parameter pairs in a request to determine a query object:
     * *   `ResourceId.N`
     * *   `Tag.N` parameter pair (`Tag.N.Key` and `Tag.N.Value`)
     * If you set `Tag.N` and `ResourceId.N` at the same time, the EBS resources that match both the parameters are returned.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * 修改专属集群属性OpenApi.
     *
     * @remarks
     * You can call this operation to modify the information of a dedicated block storage cluster. The information includes the name and description of the cluster.
     *
     * @param request - ModifyDedicatedBlockStorageClusterAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDedicatedBlockStorageClusterAttributeResponse
     *
     * @param ModifyDedicatedBlockStorageClusterAttributeRequest $request
     * @param RuntimeOptions                                     $runtime
     *
     * @return ModifyDedicatedBlockStorageClusterAttributeResponse
     */
    public function modifyDedicatedBlockStorageClusterAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dbscId) {
            @$query['DbscId'] = $request->dbscId;
        }

        if (null !== $request->dbscName) {
            @$query['DbscName'] = $request->dbscName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDedicatedBlockStorageClusterAttribute',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDedicatedBlockStorageClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改专属集群属性OpenApi.
     *
     * @remarks
     * You can call this operation to modify the information of a dedicated block storage cluster. The information includes the name and description of the cluster.
     *
     * @param request - ModifyDedicatedBlockStorageClusterAttributeRequest
     *
     * @returns ModifyDedicatedBlockStorageClusterAttributeResponse
     *
     * @param ModifyDedicatedBlockStorageClusterAttributeRequest $request
     *
     * @return ModifyDedicatedBlockStorageClusterAttributeResponse
     */
    public function modifyDedicatedBlockStorageClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedBlockStorageClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the name, description, or recovery point objective (RPO) of a replication pair-consistent group.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair-consistent group must be in the **Created** (`created`) or **Stopped** (`stopped`) state.
     *
     * @param request - ModifyDiskReplicaGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDiskReplicaGroupResponse
     *
     * @param ModifyDiskReplicaGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyDiskReplicaGroupResponse
     */
    public function modifyDiskReplicaGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->RPO) {
            @$query['RPO'] = $request->RPO;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaGroupId) {
            @$query['ReplicaGroupId'] = $request->replicaGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskReplicaGroup',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name, description, or recovery point objective (RPO) of a replication pair-consistent group.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair-consistent group must be in the **Created** (`created`) or **Stopped** (`stopped`) state.
     *
     * @param request - ModifyDiskReplicaGroupRequest
     *
     * @returns ModifyDiskReplicaGroupResponse
     *
     * @param ModifyDiskReplicaGroupRequest $request
     *
     * @return ModifyDiskReplicaGroupResponse
     */
    public function modifyDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies a replication pair.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   Only replication pairs that are in the **Created** (`created`) or **Stopped** (`stopped`) state can have their names or descriptions modified.
     *
     * @param request - ModifyDiskReplicaPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDiskReplicaPairResponse
     *
     * @param ModifyDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDiskReplicaPairResponse
     */
    public function modifyDiskReplicaPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->pairName) {
            @$query['PairName'] = $request->pairName;
        }

        if (null !== $request->RPO) {
            @$query['RPO'] = $request->RPO;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaPairId) {
            @$query['ReplicaPairId'] = $request->replicaPairId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskReplicaPair',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a replication pair.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   Only replication pairs that are in the **Created** (`created`) or **Stopped** (`stopped`) state can have their names or descriptions modified.
     *
     * @param request - ModifyDiskReplicaPairRequest
     *
     * @returns ModifyDiskReplicaPairResponse
     *
     * @param ModifyDiskReplicaPairRequest $request
     *
     * @return ModifyDiskReplicaPairResponse
     */
    public function modifyDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * Query the throughput status of a dedicated block storage cluster disk which has been set through the SetDedicatedBlockStorageClusterDiskThroughput API.
     *
     * @param request - QueryDedicatedBlockStorageClusterDiskThroughputStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDedicatedBlockStorageClusterDiskThroughputStatusResponse
     *
     * @param QueryDedicatedBlockStorageClusterDiskThroughputStatusRequest $request
     * @param RuntimeOptions                                               $runtime
     *
     * @return QueryDedicatedBlockStorageClusterDiskThroughputStatusResponse
     */
    public function queryDedicatedBlockStorageClusterDiskThroughputStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->qosRequestId) {
            @$body['QosRequestId'] = $request->qosRequestId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryDedicatedBlockStorageClusterDiskThroughputStatus',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDedicatedBlockStorageClusterDiskThroughputStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the throughput status of a dedicated block storage cluster disk which has been set through the SetDedicatedBlockStorageClusterDiskThroughput API.
     *
     * @param request - QueryDedicatedBlockStorageClusterDiskThroughputStatusRequest
     *
     * @returns QueryDedicatedBlockStorageClusterDiskThroughputStatusResponse
     *
     * @param QueryDedicatedBlockStorageClusterDiskThroughputStatusRequest $request
     *
     * @return QueryDedicatedBlockStorageClusterDiskThroughputStatusResponse
     */
    public function queryDedicatedBlockStorageClusterDiskThroughputStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDedicatedBlockStorageClusterDiskThroughputStatusWithOptions($request, $runtime);
    }

    /**
     * Query dedicated block storage cluster capacity trend data, includ available capacity size and total capacity size.
     *
     * @remarks
     * Period is the time interval between data retrieval points. When set to 60 (minute interval), a maximum of 1440 data points can be returned; when set to 3600 (hour interval), a maximum of 744 data points can be returned; and when set to 86400 (day interval), a maximum of 366 data points can be returned.
     *
     * @param request - QueryDedicatedBlockStorageClusterInventoryDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryDedicatedBlockStorageClusterInventoryDataResponse
     *
     * @param QueryDedicatedBlockStorageClusterInventoryDataRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return QueryDedicatedBlockStorageClusterInventoryDataResponse
     */
    public function queryDedicatedBlockStorageClusterInventoryDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->dbscId) {
            @$body['DbscId'] = $request->dbscId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->period) {
            @$body['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryDedicatedBlockStorageClusterInventoryData',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return QueryDedicatedBlockStorageClusterInventoryDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query dedicated block storage cluster capacity trend data, includ available capacity size and total capacity size.
     *
     * @remarks
     * Period is the time interval between data retrieval points. When set to 60 (minute interval), a maximum of 1440 data points can be returned; when set to 3600 (hour interval), a maximum of 744 data points can be returned; and when set to 86400 (day interval), a maximum of 366 data points can be returned.
     *
     * @param request - QueryDedicatedBlockStorageClusterInventoryDataRequest
     *
     * @returns QueryDedicatedBlockStorageClusterInventoryDataResponse
     *
     * @param QueryDedicatedBlockStorageClusterInventoryDataRequest $request
     *
     * @return QueryDedicatedBlockStorageClusterInventoryDataResponse
     */
    public function queryDedicatedBlockStorageClusterInventoryData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDedicatedBlockStorageClusterInventoryDataWithOptions($request, $runtime);
    }

    /**
     * Removes a replication pair from a replication pair-consistent group. After a replication pair is removed from a replication pair-consistent group, the pair is disassociated from the group but is not deleted.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair-consistent group from which you want to remove a replication pair must be in the **Created** (`created`), **Stopped** (`stopped`), or **Invalid** (`invalid`) state.
     *
     * @param request - RemoveDiskReplicaPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveDiskReplicaPairResponse
     *
     * @param RemoveDiskReplicaPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RemoveDiskReplicaPairResponse
     */
    public function removeDiskReplicaPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaGroupId) {
            @$query['ReplicaGroupId'] = $request->replicaGroupId;
        }

        if (null !== $request->replicaPairId) {
            @$query['ReplicaPairId'] = $request->replicaPairId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveDiskReplicaPair',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a replication pair from a replication pair-consistent group. After a replication pair is removed from a replication pair-consistent group, the pair is disassociated from the group but is not deleted.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair-consistent group from which you want to remove a replication pair must be in the **Created** (`created`), **Stopped** (`stopped`), or **Invalid** (`invalid`) state.
     *
     * @param request - RemoveDiskReplicaPairRequest
     *
     * @returns RemoveDiskReplicaPairResponse
     *
     * @param RemoveDiskReplicaPairRequest $request
     *
     * @return RemoveDiskReplicaPairResponse
     */
    public function removeDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * Enables the reverse replication feature for replication pairs that belong to a replication pair-consistent group. After reverse replication is enabled, data stored on the original secondary disks is replicated to the original primary disks. When a reverse replication is being performed, the primary and secondary sites of the replication pair-consistent group remain unchanged, but data is replicated from the secondary site to the primary site.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair-consistent group for which you want to enable reverse replication must be in the **Failovered** (`failovered`) state. You can call the `FailoverDiskReplicaPair` operation to enable failover.
     * *   Before a reverse replication is performed, the primary disks must be detached from its associated Elastic Compute Service (ECS) instance and must be in the Unattached state. You can call the [DetachDisk](https://help.aliyun.com/document_detail/25516.html) operation to detach the disks.
     * *   After you enable reverse replication, you must call the `StartDiskReplicaPair` operation again to enable the async replication feature before data can be replicated from the original secondary disks to the original primary disks.
     * *   You can set the ReverseReplicate parameter to false to cancel the **Failovered** (`failovered`) state and restore the original replication direction.
     *
     * @param request - ReprotectDiskReplicaGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReprotectDiskReplicaGroupResponse
     *
     * @param ReprotectDiskReplicaGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ReprotectDiskReplicaGroupResponse
     */
    public function reprotectDiskReplicaGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaGroupId) {
            @$query['ReplicaGroupId'] = $request->replicaGroupId;
        }

        if (null !== $request->reverseReplicate) {
            @$query['ReverseReplicate'] = $request->reverseReplicate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReprotectDiskReplicaGroup',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReprotectDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the reverse replication feature for replication pairs that belong to a replication pair-consistent group. After reverse replication is enabled, data stored on the original secondary disks is replicated to the original primary disks. When a reverse replication is being performed, the primary and secondary sites of the replication pair-consistent group remain unchanged, but data is replicated from the secondary site to the primary site.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair-consistent group for which you want to enable reverse replication must be in the **Failovered** (`failovered`) state. You can call the `FailoverDiskReplicaPair` operation to enable failover.
     * *   Before a reverse replication is performed, the primary disks must be detached from its associated Elastic Compute Service (ECS) instance and must be in the Unattached state. You can call the [DetachDisk](https://help.aliyun.com/document_detail/25516.html) operation to detach the disks.
     * *   After you enable reverse replication, you must call the `StartDiskReplicaPair` operation again to enable the async replication feature before data can be replicated from the original secondary disks to the original primary disks.
     * *   You can set the ReverseReplicate parameter to false to cancel the **Failovered** (`failovered`) state and restore the original replication direction.
     *
     * @param request - ReprotectDiskReplicaGroupRequest
     *
     * @returns ReprotectDiskReplicaGroupResponse
     *
     * @param ReprotectDiskReplicaGroupRequest $request
     *
     * @return ReprotectDiskReplicaGroupResponse
     */
    public function reprotectDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reprotectDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * Enables the reverse replication feature for a replication pair.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair for which you want to enable reverse replication must be in the **Failovered** (`failovered`) state. You can call the [FailoverDiskReplicaPair](https://help.aliyun.com/document_detail/354358.html) operation to enable failover.
     * *   The primary disk must be detached from its associated Elastic Compute Service (ECS) instance and is in the Unattached state. You can call the [DetachDisk](https://help.aliyun.com/document_detail/25516.html) operation to detach the disk.
     * *   After you enable reverse replication, you must call the [StartDiskReplicaPair](https://help.aliyun.com/document_detail/354205.html) operation again to activate the replication pair before data can be replicated from the original secondary disk to the original primary disk.
     * *   You can set the ReverseReplicate parameter to false to cancel the **Failovered** (`failovered`) state and restore the original replication direction.
     *
     * @param request - ReprotectDiskReplicaPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReprotectDiskReplicaPairResponse
     *
     * @param ReprotectDiskReplicaPairRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReprotectDiskReplicaPairResponse
     */
    public function reprotectDiskReplicaPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaPairId) {
            @$query['ReplicaPairId'] = $request->replicaPairId;
        }

        if (null !== $request->reverseReplicate) {
            @$query['ReverseReplicate'] = $request->reverseReplicate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReprotectDiskReplicaPair',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReprotectDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the reverse replication feature for a replication pair.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair for which you want to enable reverse replication must be in the **Failovered** (`failovered`) state. You can call the [FailoverDiskReplicaPair](https://help.aliyun.com/document_detail/354358.html) operation to enable failover.
     * *   The primary disk must be detached from its associated Elastic Compute Service (ECS) instance and is in the Unattached state. You can call the [DetachDisk](https://help.aliyun.com/document_detail/25516.html) operation to detach the disk.
     * *   After you enable reverse replication, you must call the [StartDiskReplicaPair](https://help.aliyun.com/document_detail/354205.html) operation again to activate the replication pair before data can be replicated from the original secondary disk to the original primary disk.
     * *   You can set the ReverseReplicate parameter to false to cancel the **Failovered** (`failovered`) state and restore the original replication direction.
     *
     * @param request - ReprotectDiskReplicaPairRequest
     *
     * @returns ReprotectDiskReplicaPairResponse
     *
     * @param ReprotectDiskReplicaPairRequest $request
     *
     * @return ReprotectDiskReplicaPairResponse
     */
    public function reprotectDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reprotectDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * In the elastic type dedicated block storage cluster, you can easily achieve the specified throughput (Bps) for the target disk. You only need to set the cloud disk ID and the target throughput, simplifying the process of configuring.
     *
     * @param request - SetDedicatedBlockStorageClusterDiskThroughputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDedicatedBlockStorageClusterDiskThroughputResponse
     *
     * @param SetDedicatedBlockStorageClusterDiskThroughputRequest $request
     * @param RuntimeOptions                                       $runtime
     *
     * @return SetDedicatedBlockStorageClusterDiskThroughputResponse
     */
    public function setDedicatedBlockStorageClusterDiskThroughputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->bps) {
            @$body['Bps'] = $request->bps;
        }

        if (null !== $request->diskId) {
            @$body['DiskId'] = $request->diskId;
        }

        if (null !== $request->regionId) {
            @$body['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SetDedicatedBlockStorageClusterDiskThroughput',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDedicatedBlockStorageClusterDiskThroughputResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * In the elastic type dedicated block storage cluster, you can easily achieve the specified throughput (Bps) for the target disk. You only need to set the cloud disk ID and the target throughput, simplifying the process of configuring.
     *
     * @param request - SetDedicatedBlockStorageClusterDiskThroughputRequest
     *
     * @returns SetDedicatedBlockStorageClusterDiskThroughputResponse
     *
     * @param SetDedicatedBlockStorageClusterDiskThroughputRequest $request
     *
     * @return SetDedicatedBlockStorageClusterDiskThroughputResponse
     */
    public function setDedicatedBlockStorageClusterDiskThroughput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDedicatedBlockStorageClusterDiskThroughputWithOptions($request, $runtime);
    }

    /**
     * Enables the async replication feature for replication pairs that belong to a replication pair-consistent group. When the async replication feature is enabled for the pairs for the first time, the system first performs a full synchronization to synchronize all data from disks at the primary site (primary disks) to disks at the secondary site (secondary disks) and then periodically synchronizes incremental data based on the recovery point objective (RPO) of the replication pair-consistent group.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   If you set the `OneShot` to `false`, the replication pair-consistent group must be in the **Created** (`created` ), **Synchronizing** (`syncing` ), **Normal** (`normal` ), or **Stopped** (`stopped`) state.
     * *   If you set `OneShot` to `true`, the replication pair-consistent group must be in the **Created** (`created` ), **One-time Syncing** (`manual_syncing` ), or **Stopped** (`stopped`) state. The time interval between two consecutive one-time synchronizations must be longer than one half of the recovery point objective (RPO).
     * *   After a replication pair-consistent group is activated, the group enters the **Initial Syncing** (`initial_syncing`) state and the system performs the first async replication to replicate all data from the primary disks to secondary disks.
     *
     * @param request - StartDiskReplicaGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDiskReplicaGroupResponse
     *
     * @param StartDiskReplicaGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return StartDiskReplicaGroupResponse
     */
    public function startDiskReplicaGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->oneShot) {
            @$query['OneShot'] = $request->oneShot;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaGroupId) {
            @$query['ReplicaGroupId'] = $request->replicaGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDiskReplicaGroup',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the async replication feature for replication pairs that belong to a replication pair-consistent group. When the async replication feature is enabled for the pairs for the first time, the system first performs a full synchronization to synchronize all data from disks at the primary site (primary disks) to disks at the secondary site (secondary disks) and then periodically synchronizes incremental data based on the recovery point objective (RPO) of the replication pair-consistent group.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   If you set the `OneShot` to `false`, the replication pair-consistent group must be in the **Created** (`created` ), **Synchronizing** (`syncing` ), **Normal** (`normal` ), or **Stopped** (`stopped`) state.
     * *   If you set `OneShot` to `true`, the replication pair-consistent group must be in the **Created** (`created` ), **One-time Syncing** (`manual_syncing` ), or **Stopped** (`stopped`) state. The time interval between two consecutive one-time synchronizations must be longer than one half of the recovery point objective (RPO).
     * *   After a replication pair-consistent group is activated, the group enters the **Initial Syncing** (`initial_syncing`) state and the system performs the first async replication to replicate all data from the primary disks to secondary disks.
     *
     * @param request - StartDiskReplicaGroupRequest
     *
     * @returns StartDiskReplicaGroupResponse
     *
     * @param StartDiskReplicaGroupRequest $request
     *
     * @return StartDiskReplicaGroupResponse
     */
    public function startDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * Activates a replication pair.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   Only replication pairs that are in the **Created** (`created`) or **Stopped** (`stopped`) state can be activated.
     * *   After a replication pair is activated, it enters the **Initial Syncing** (`initial_syncing`) state and the system performs the first asynchronous replication to replicate all data from the primary disk to the secondary disk.
     *
     * @param request - StartDiskReplicaPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDiskReplicaPairResponse
     *
     * @param StartDiskReplicaPairRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartDiskReplicaPairResponse
     */
    public function startDiskReplicaPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->oneShot) {
            @$query['OneShot'] = $request->oneShot;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaPairId) {
            @$query['ReplicaPairId'] = $request->replicaPairId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDiskReplicaPair',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Activates a replication pair.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   Only replication pairs that are in the **Created** (`created`) or **Stopped** (`stopped`) state can be activated.
     * *   After a replication pair is activated, it enters the **Initial Syncing** (`initial_syncing`) state and the system performs the first asynchronous replication to replicate all data from the primary disk to the secondary disk.
     *
     * @param request - StartDiskReplicaPairRequest
     *
     * @returns StartDiskReplicaPairResponse
     *
     * @param StartDiskReplicaPairRequest $request
     *
     * @return StartDiskReplicaPairResponse
     */
    public function startDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * Starts a disaster recovery drill to ensure the continued replication and clone the data from the last recovery point of the secondary disk to a new disk. This helps you test the completeness and correctness of applications that are deployed on the disaster recovery site on a regular basis.
     *
     * @remarks
     * After the disaster recovery drill is complete on the secondary disk, a pay-as-you-go drill disk that has the same capacity and category as the secondary disk is created in the zone where the secondary disk resides. The drill disk contains last-recovery-point data that can be used to test the completeness and correctness of applications.
     *
     * @param request - StartPairDrillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartPairDrillResponse
     *
     * @param StartPairDrillRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartPairDrillResponse
     */
    public function startPairDrillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->pairId) {
            @$query['PairId'] = $request->pairId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartPairDrill',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartPairDrillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a disaster recovery drill to ensure the continued replication and clone the data from the last recovery point of the secondary disk to a new disk. This helps you test the completeness and correctness of applications that are deployed on the disaster recovery site on a regular basis.
     *
     * @remarks
     * After the disaster recovery drill is complete on the secondary disk, a pay-as-you-go drill disk that has the same capacity and category as the secondary disk is created in the zone where the secondary disk resides. The drill disk contains last-recovery-point data that can be used to test the completeness and correctness of applications.
     *
     * @param request - StartPairDrillRequest
     *
     * @returns StartPairDrillResponse
     *
     * @param StartPairDrillRequest $request
     *
     * @return StartPairDrillResponse
     */
    public function startPairDrill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startPairDrillWithOptions($request, $runtime);
    }

    /**
     * Starts a disaster recovery drill in a replication pair-consistent group to ensure the continued replication and restores data from the latest recovery point of secondary disks to new disks. This helps test the completeness and correctness of applications that are deployed on the disaster recovery site on a regular basis.
     *
     * @remarks
     * After the disaster recovery drill is complete on secondary disks, a pay-as-you-go drill disk is created in the zone where the secondary disk of each replication pair resides. The latest-recovery-point data is restored to the drill disks to test the completeness and correctness of applications.
     *
     * @param request - StartReplicaGroupDrillRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartReplicaGroupDrillResponse
     *
     * @param StartReplicaGroupDrillRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return StartReplicaGroupDrillResponse
     */
    public function startReplicaGroupDrillWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartReplicaGroupDrill',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartReplicaGroupDrillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts a disaster recovery drill in a replication pair-consistent group to ensure the continued replication and restores data from the latest recovery point of secondary disks to new disks. This helps test the completeness and correctness of applications that are deployed on the disaster recovery site on a regular basis.
     *
     * @remarks
     * After the disaster recovery drill is complete on secondary disks, a pay-as-you-go drill disk is created in the zone where the secondary disk of each replication pair resides. The latest-recovery-point data is restored to the drill disks to test the completeness and correctness of applications.
     *
     * @param request - StartReplicaGroupDrillRequest
     *
     * @returns StartReplicaGroupDrillResponse
     *
     * @param StartReplicaGroupDrillRequest $request
     *
     * @return StartReplicaGroupDrillResponse
     */
    public function startReplicaGroupDrill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startReplicaGroupDrillWithOptions($request, $runtime);
    }

    /**
     * Stops a replication pair-consistent group. This operation stops all replication pairs in the replication pair-consistent group.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair-consistent group that you want to stop must be in the **One-time Syncing** (`manual_syncing`), **Syncing** (`syncing`), **Normal** (`normal`), **Stopping** (`stopping`), **Stop Failed** (`stop_failed`), or **Stopped** (`stopped`) state.
     * *   When a replication pair-consistent group is stopped, it enters the **Stopped** (`stopped`) state. If a replication pair-consistent group cannot be stopped, the state of the group remains unchanged or changes to **Stop Failed** (`stop_failed`). In this case, try again later.
     *
     * @param request - StopDiskReplicaGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDiskReplicaGroupResponse
     *
     * @param StopDiskReplicaGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StopDiskReplicaGroupResponse
     */
    public function stopDiskReplicaGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaGroupId) {
            @$query['ReplicaGroupId'] = $request->replicaGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDiskReplicaGroup',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a replication pair-consistent group. This operation stops all replication pairs in the replication pair-consistent group.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   The replication pair-consistent group that you want to stop must be in the **One-time Syncing** (`manual_syncing`), **Syncing** (`syncing`), **Normal** (`normal`), **Stopping** (`stopping`), **Stop Failed** (`stop_failed`), or **Stopped** (`stopped`) state.
     * *   When a replication pair-consistent group is stopped, it enters the **Stopped** (`stopped`) state. If a replication pair-consistent group cannot be stopped, the state of the group remains unchanged or changes to **Stop Failed** (`stop_failed`). In this case, try again later.
     *
     * @param request - StopDiskReplicaGroupRequest
     *
     * @returns StopDiskReplicaGroupResponse
     *
     * @param StopDiskReplicaGroupRequest $request
     *
     * @return StopDiskReplicaGroupResponse
     */
    public function stopDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * Stops a replication pair.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   Only replication pairs that are in the **Initial Syncing** (`initial_syncing`), **Syncing** (`syncing`), **One-time Syncing** (`manual_syncing`), or **Normal** (`normal`) state can be stopped. When a replication pair is stopped, it enters the Stopped (`stopped`) state. The secondary disk rolls back to the point in time when the last async replication was complete and drops all the data that is being replicated from the primary disk.
     *
     * @param request - StopDiskReplicaPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDiskReplicaPairResponse
     *
     * @param StopDiskReplicaPairRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StopDiskReplicaPairResponse
     */
    public function stopDiskReplicaPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->replicaPairId) {
            @$query['ReplicaPairId'] = $request->replicaPairId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDiskReplicaPair',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a replication pair.
     *
     * @remarks
     * ## [](#)Usage notes
     * *   For information about the regions in which async replication is available, see [Overview](https://help.aliyun.com/document_detail/314563.html).
     * *   Only replication pairs that are in the **Initial Syncing** (`initial_syncing`), **Syncing** (`syncing`), **One-time Syncing** (`manual_syncing`), or **Normal** (`normal`) state can be stopped. When a replication pair is stopped, it enters the Stopped (`stopped`) state. The secondary disk rolls back to the point in time when the last async replication was complete and drops all the data that is being replicated from the primary disk.
     *
     * @param request - StopDiskReplicaPairRequest
     *
     * @returns StopDiskReplicaPairResponse
     *
     * @param StopDiskReplicaPairRequest $request
     *
     * @return StopDiskReplicaPairResponse
     */
    public function stopDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * Creates tags and adds the tags to Elastic Block Storage (EBS) resources.
     *
     * @remarks
     * Before you add tags to a resource, Alibaba Cloud checks the number of existing tags of the resource. If the maximum number of tags is reached, an error message is returned. For more information, see the "Tag limits" section in [Limits](https://help.aliyun.com/document_detail/25412.html).
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates tags and adds the tags to Elastic Block Storage (EBS) resources.
     *
     * @remarks
     * Before you add tags to a resource, Alibaba Cloud checks the number of existing tags of the resource. If the maximum number of tags is reached, an error message is returned. For more information, see the "Tag limits" section in [Limits](https://help.aliyun.com/document_detail/25412.html).
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Unbind disks from a enterprise-level snapshot policy.
     *
     * @param request - UnbindEnterpriseSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindEnterpriseSnapshotPolicyResponse
     *
     * @param UnbindEnterpriseSnapshotPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UnbindEnterpriseSnapshotPolicyResponse
     */
    public function unbindEnterpriseSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->diskTargets) {
            @$query['DiskTargets'] = $request->diskTargets;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindEnterpriseSnapshotPolicy',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindEnterpriseSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbind disks from a enterprise-level snapshot policy.
     *
     * @param request - UnbindEnterpriseSnapshotPolicyRequest
     *
     * @returns UnbindEnterpriseSnapshotPolicyResponse
     *
     * @param UnbindEnterpriseSnapshotPolicyRequest $request
     *
     * @return UnbindEnterpriseSnapshotPolicyResponse
     */
    public function unbindEnterpriseSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindEnterpriseSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Removes tags from specified Elastic Block Storage (EBS) resources.
     *
     * @remarks
     *   You can remove up to 20 tags at a time.
     * *   After a tag is removed from an EBS resource, the tag is automatically deleted if the tag is not added to any instance.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from specified Elastic Block Storage (EBS) resources.
     *
     * @remarks
     *   You can remove up to 20 tags at a time.
     * *   After a tag is removed from an EBS resource, the tag is automatically deleted if the tag is not added to any instance.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Search for a enterprise-level snapshot policy.
     *
     * @param tmpReq - UpdateEnterpriseSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEnterpriseSnapshotPolicyResponse
     *
     * @param UpdateEnterpriseSnapshotPolicyRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateEnterpriseSnapshotPolicyResponse
     */
    public function updateEnterpriseSnapshotPolicyWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateEnterpriseSnapshotPolicyShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->crossRegionCopyInfo) {
            $request->crossRegionCopyInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->crossRegionCopyInfo, 'CrossRegionCopyInfo', 'json');
        }

        if (null !== $tmpReq->retainRule) {
            $request->retainRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->retainRule, 'RetainRule', 'json');
        }

        if (null !== $tmpReq->schedule) {
            $request->scheduleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->schedule, 'Schedule', 'json');
        }

        if (null !== $tmpReq->specialRetainRules) {
            $request->specialRetainRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->specialRetainRules, 'SpecialRetainRules', 'json');
        }

        if (null !== $tmpReq->storageRule) {
            $request->storageRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->storageRule, 'StorageRule', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->crossRegionCopyInfoShrink) {
            @$query['CrossRegionCopyInfo'] = $request->crossRegionCopyInfoShrink;
        }

        if (null !== $request->desc) {
            @$query['Desc'] = $request->desc;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->retainRuleShrink) {
            @$query['RetainRule'] = $request->retainRuleShrink;
        }

        if (null !== $request->scheduleShrink) {
            @$query['Schedule'] = $request->scheduleShrink;
        }

        if (null !== $request->specialRetainRulesShrink) {
            @$query['SpecialRetainRules'] = $request->specialRetainRulesShrink;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        if (null !== $request->storageRuleShrink) {
            @$query['StorageRule'] = $request->storageRuleShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateEnterpriseSnapshotPolicy',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEnterpriseSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Search for a enterprise-level snapshot policy.
     *
     * @param request - UpdateEnterpriseSnapshotPolicyRequest
     *
     * @returns UpdateEnterpriseSnapshotPolicyResponse
     *
     * @param UpdateEnterpriseSnapshotPolicyRequest $request
     *
     * @return UpdateEnterpriseSnapshotPolicyResponse
     */
    public function updateEnterpriseSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnterpriseSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * 更新解决方案实例属性.
     *
     * @param request - UpdateSolutionInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateSolutionInstanceAttributeResponse
     *
     * @param UpdateSolutionInstanceAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateSolutionInstanceAttributeResponse
     */
    public function updateSolutionInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->solutionInstanceId) {
            @$query['SolutionInstanceId'] = $request->solutionInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateSolutionInstanceAttribute',
            'version' => '2021-07-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateSolutionInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新解决方案实例属性.
     *
     * @param request - UpdateSolutionInstanceAttributeRequest
     *
     * @returns UpdateSolutionInstanceAttributeResponse
     *
     * @param UpdateSolutionInstanceAttributeRequest $request
     *
     * @return UpdateSolutionInstanceAttributeResponse
     */
    public function updateSolutionInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSolutionInstanceAttributeWithOptions($request, $runtime);
    }
}
