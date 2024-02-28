<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteDiskRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DeleteDiskResponse;
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
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDisksRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDisksResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponse;
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
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\FailoverDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\GetDiskRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\GetDiskResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDedicatedBlockStorageClusterAttributeRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDedicatedBlockStorageClusterAttributeResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ModifyDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\QueryDedicatedBlockStorageClusterInventoryDataRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\QueryDedicatedBlockStorageClusterInventoryDataResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\RemoveDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\RemoveDiskReplicaPairResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ReprotectDiskReplicaGroupRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ReprotectDiskReplicaGroupResponse;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ReprotectDiskReplicaPairRequest;
use AlibabaCloud\SDK\Ebs\V20210730\Models\ReprotectDiskReplicaPairResponse;
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
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   A replication pair and a replication pair-consistent group replicate in the same direction if they have the same primary region (production region), primary zone (production zone), secondary region (disaster recovery region), and secondary zone (disaster recovery zone). A replication pair can be added only to a replication pair-consistent group that replicates in the same direction as the replication pair.
     *   * *   Before you can add a replication pair to a replication pair-consistent group, make sure that the pair and the group are in the **Created** (`created`) or **Stopped** (`stopped`) state.
     *   * *   Up to 17 replication pairs can be added to a single replication pair-consistent group.
     *   * *   After replication pairs are added to a replication pair-consistent group, the recovery point objective (RPO) of the group takes effect on the pairs in place of their original RPOs.
     *   *
     * @param AddDiskReplicaPairRequest $request AddDiskReplicaPairRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDiskReplicaPairResponse AddDiskReplicaPairResponse
     */
    public function addDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaGroupId)) {
            $query['ReplicaGroupId'] = $request->replicaGroupId;
        }
        if (!Utils::isUnset($request->replicaPairId)) {
            $query['ReplicaPairId'] = $request->replicaPairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   A replication pair and a replication pair-consistent group replicate in the same direction if they have the same primary region (production region), primary zone (production zone), secondary region (disaster recovery region), and secondary zone (disaster recovery zone). A replication pair can be added only to a replication pair-consistent group that replicates in the same direction as the replication pair.
     *   * *   Before you can add a replication pair to a replication pair-consistent group, make sure that the pair and the group are in the **Created** (`created`) or **Stopped** (`stopped`) state.
     *   * *   Up to 17 replication pairs can be added to a single replication pair-consistent group.
     *   * *   After replication pairs are added to a replication pair-consistent group, the recovery point objective (RPO) of the group takes effect on the pairs in place of their original RPOs.
     *   *
     * @param AddDiskReplicaPairRequest $request AddDiskReplicaPairRequest
     *
     * @return AddDiskReplicaPairResponse AddDiskReplicaPairResponse
     */
    public function addDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyLensServiceResponse ApplyLensServiceResponse
     */
    public function applyLensServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ApplyLensService',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyLensServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   *
     * @return ApplyLensServiceResponse ApplyLensServiceResponse
     */
    public function applyLensService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyLensServiceWithOptions($runtime);
    }

    /**
     * @param BindEnterpriseSnapshotPolicyRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return BindEnterpriseSnapshotPolicyResponse
     */
    public function bindEnterpriseSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->diskTargets)) {
            $query['DiskTargets'] = $request->diskTargets;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindEnterpriseSnapshotPolicy',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindEnterpriseSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## Usage notes
     *   * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelLensServiceResponse CancelLensServiceResponse
     */
    public function cancelLensServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'CancelLensService',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelLensServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   *
     * @return CancelLensServiceResponse CancelLensServiceResponse
     */
    public function cancelLensService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelLensServiceWithOptions($runtime);
    }

    /**
     * @param ChangeResourceGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ChangeResourceGroupResponse
     */
    public function changeResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->newResourceGroupId)) {
            $query['NewResourceGroupId'] = $request->newResourceGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ChangeResourceGroup',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ChangeResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ClearPairDrillRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ClearPairDrillResponse
     */
    public function clearPairDrillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drillId)) {
            $query['DrillId'] = $request->drillId;
        }
        if (!Utils::isUnset($request->pairId)) {
            $query['PairId'] = $request->pairId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClearPairDrill',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearPairDrillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param ClearReplicaGroupDrillRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ClearReplicaGroupDrillResponse
     */
    public function clearReplicaGroupDrillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drillId)) {
            $query['DrillId'] = $request->drillId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClearReplicaGroupDrill',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearReplicaGroupDrillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * Dedicated block storage clusters are physically isolated from public block storage clusters. The owner of each dedicated block storage cluster has exclusive access to all resources in the cluster.
     *   * Disks created in a dedicated block storage cluster can be attached only to Elastic Compute Service (ECS) instances that reside in the same zone as the cluster. Before you create a dedicated block storage cluster, decide the regions and zones in which to deploy your cloud resources.
     *   * Dedicated block storage clusters are classified into basic and performance types. When you create a dedicated block storage cluster, select a cluster type based on your business requirements.
     *   * You are charged for creating dedicated block storage clusters.
     *   *
     * @param CreateDedicatedBlockStorageClusterRequest $request CreateDedicatedBlockStorageClusterRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDedicatedBlockStorageClusterResponse CreateDedicatedBlockStorageClusterResponse
     */
    public function createDedicatedBlockStorageClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->azone)) {
            $query['Azone'] = $request->azone;
        }
        if (!Utils::isUnset($request->capacity)) {
            $query['Capacity'] = $request->capacity;
        }
        if (!Utils::isUnset($request->dbscId)) {
            $query['DbscId'] = $request->dbscId;
        }
        if (!Utils::isUnset($request->dbscName)) {
            $query['DbscName'] = $request->dbscName;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDedicatedBlockStorageCluster',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDedicatedBlockStorageClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Dedicated block storage clusters are physically isolated from public block storage clusters. The owner of each dedicated block storage cluster has exclusive access to all resources in the cluster.
     *   * Disks created in a dedicated block storage cluster can be attached only to Elastic Compute Service (ECS) instances that reside in the same zone as the cluster. Before you create a dedicated block storage cluster, decide the regions and zones in which to deploy your cloud resources.
     *   * Dedicated block storage clusters are classified into basic and performance types. When you create a dedicated block storage cluster, select a cluster type based on your business requirements.
     *   * You are charged for creating dedicated block storage clusters.
     *   *
     * @param CreateDedicatedBlockStorageClusterRequest $request CreateDedicatedBlockStorageClusterRequest
     *
     * @return CreateDedicatedBlockStorageClusterResponse CreateDedicatedBlockStorageClusterResponse
     */
    public function createDedicatedBlockStorageCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedBlockStorageClusterWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * The replication pair-consistent group feature allows you to batch manage multiple disks in disaster recovery scenarios. You can restore the data of all disks in the same replication pair-consistent group to the same point in time to allow for disaster recovery of instances.
     *   * Take note of the following items:
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   Replication pair-consistent groups can be used to implement disaster recovery across zones within the same region and disaster recovery across regions.
     *   * *   A replication pair and a replication pair-consistent group can replicate in the same direction if they have the same primary region (production region), primary zone (production zone), secondary region (disaster recovery region), and secondary zone (disaster recovery zone). A replication pair can be added to only a replication pair-consistent group that replicates in the same direction as the replication pair.
     *   * *   After replication pairs are added to a replication pair-consistent group, the recovery point objective (RPO) of the group takes effect on the pairs instead of their original RPOs.
     *   *
     * @param CreateDiskReplicaGroupRequest $request CreateDiskReplicaGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDiskReplicaGroupResponse CreateDiskReplicaGroupResponse
     */
    public function createDiskReplicaGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationRegionId)) {
            $query['DestinationRegionId'] = $request->destinationRegionId;
        }
        if (!Utils::isUnset($request->destinationZoneId)) {
            $query['DestinationZoneId'] = $request->destinationZoneId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->RPO)) {
            $query['RPO'] = $request->RPO;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceZoneId)) {
            $query['SourceZoneId'] = $request->sourceZoneId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDiskReplicaGroup',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * The replication pair-consistent group feature allows you to batch manage multiple disks in disaster recovery scenarios. You can restore the data of all disks in the same replication pair-consistent group to the same point in time to allow for disaster recovery of instances.
     *   * Take note of the following items:
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   Replication pair-consistent groups can be used to implement disaster recovery across zones within the same region and disaster recovery across regions.
     *   * *   A replication pair and a replication pair-consistent group can replicate in the same direction if they have the same primary region (production region), primary zone (production zone), secondary region (disaster recovery region), and secondary zone (disaster recovery zone). A replication pair can be added to only a replication pair-consistent group that replicates in the same direction as the replication pair.
     *   * *   After replication pairs are added to a replication pair-consistent group, the recovery point objective (RPO) of the group takes effect on the pairs instead of their original RPOs.
     *   *
     * @param CreateDiskReplicaGroupRequest $request CreateDiskReplicaGroupRequest
     *
     * @return CreateDiskReplicaGroupResponse CreateDiskReplicaGroupResponse
     */
    public function createDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * Async replication is a feature that protects data across regions by using the data replication capability of Elastic Block Storage (EBS). This feature can be used to asynchronously replicate data from a disk in one region to a disk in another region for disaster recovery purposes. You can use this feature to implement disaster recovery for critical business to protect data in your databases and improve business continuity.
     *   * Currently, the async replication feature can asynchronously replicate data only between enhanced SSDs (ESSDs). The functionality of disks in replication pairs is limited. You are charged on a subscription basis for the bandwidth that is used by the async replication feature.
     *   * Before you call this operation, take note of the following items:
     *   * *   Make sure that the source disk (primary disk) from which to replicate data and the destination disk (secondary disk) to which to replicate data are created. You can call the [CreateDisk](~~25513~~) operation to create disks.
     *   * *   The secondary disk cannot reside the same region as the primary disk. The async replication feature is supported in the China (Hangzhou), China (Shanghai), China (Beijing), China (Shenzhen), China (Heyuan), China (Chengdu), China (Hong Kong), Singapore, US (Silicon Valley), and US (Virginia) regions.
     *   * *   After you call this operation to create a replication pair, you must call the [StartDiskReplicaPair](~~354205~~) operation to enable async replication to periodically replicate data from the primary disk to the secondary disk across regions.
     *   *
     * @param CreateDiskReplicaPairRequest $request CreateDiskReplicaPairRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDiskReplicaPairResponse CreateDiskReplicaPairResponse
     */
    public function createDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationDiskId)) {
            $query['DestinationDiskId'] = $request->destinationDiskId;
        }
        if (!Utils::isUnset($request->destinationRegionId)) {
            $query['DestinationRegionId'] = $request->destinationRegionId;
        }
        if (!Utils::isUnset($request->destinationZoneId)) {
            $query['DestinationZoneId'] = $request->destinationZoneId;
        }
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->pairName)) {
            $query['PairName'] = $request->pairName;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->RPO)) {
            $query['RPO'] = $request->RPO;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sourceZoneId)) {
            $query['SourceZoneId'] = $request->sourceZoneId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Async replication is a feature that protects data across regions by using the data replication capability of Elastic Block Storage (EBS). This feature can be used to asynchronously replicate data from a disk in one region to a disk in another region for disaster recovery purposes. You can use this feature to implement disaster recovery for critical business to protect data in your databases and improve business continuity.
     *   * Currently, the async replication feature can asynchronously replicate data only between enhanced SSDs (ESSDs). The functionality of disks in replication pairs is limited. You are charged on a subscription basis for the bandwidth that is used by the async replication feature.
     *   * Before you call this operation, take note of the following items:
     *   * *   Make sure that the source disk (primary disk) from which to replicate data and the destination disk (secondary disk) to which to replicate data are created. You can call the [CreateDisk](~~25513~~) operation to create disks.
     *   * *   The secondary disk cannot reside the same region as the primary disk. The async replication feature is supported in the China (Hangzhou), China (Shanghai), China (Beijing), China (Shenzhen), China (Heyuan), China (Chengdu), China (Hong Kong), Singapore, US (Silicon Valley), and US (Virginia) regions.
     *   * *   After you call this operation to create a replication pair, you must call the [StartDiskReplicaPair](~~354205~~) operation to enable async replication to periodically replicate data from the primary disk to the secondary disk across regions.
     *   *
     * @param CreateDiskReplicaPairRequest $request CreateDiskReplicaPairRequest
     *
     * @return CreateDiskReplicaPairResponse CreateDiskReplicaPairResponse
     */
    public function createDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * @param CreateEnterpriseSnapshotPolicyRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateEnterpriseSnapshotPolicyResponse
     */
    public function createEnterpriseSnapshotPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEnterpriseSnapshotPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->crossRegionCopyInfo)) {
            $request->crossRegionCopyInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->crossRegionCopyInfo, 'CrossRegionCopyInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->retainRule)) {
            $request->retainRuleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->retainRule, 'RetainRule', 'json');
        }
        if (!Utils::isUnset($tmpReq->schedule)) {
            $request->scheduleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->schedule, 'Schedule', 'json');
        }
        if (!Utils::isUnset($tmpReq->specialRetainRules)) {
            $request->specialRetainRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->specialRetainRules, 'SpecialRetainRules', 'json');
        }
        if (!Utils::isUnset($tmpReq->storageRule)) {
            $request->storageRuleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->storageRule, 'StorageRule', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->crossRegionCopyInfoShrink)) {
            $query['CrossRegionCopyInfo'] = $request->crossRegionCopyInfoShrink;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->retainRuleShrink)) {
            $query['RetainRule'] = $request->retainRuleShrink;
        }
        if (!Utils::isUnset($request->scheduleShrink)) {
            $query['Schedule'] = $request->scheduleShrink;
        }
        if (!Utils::isUnset($request->specialRetainRulesShrink)) {
            $query['SpecialRetainRules'] = $request->specialRetainRulesShrink;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->storageRuleShrink)) {
            $query['StorageRule'] = $request->storageRuleShrink;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->targetType)) {
            $query['TargetType'] = $request->targetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEnterpriseSnapshotPolicy',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEnterpriseSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * Currently, this API is only available for use with ACS resource hosting and is not yet open for direct invocation.
     *   *
     * @param DeleteDiskRequest $request DeleteDiskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDiskResponse DeleteDiskResponse
     */
    public function deleteDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDisk',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Currently, this API is only available for use with ACS resource hosting and is not yet open for direct invocation.
     *   *
     * @param DeleteDiskRequest $request DeleteDiskRequest
     *
     * @return DeleteDiskResponse DeleteDiskResponse
     */
    public function deleteDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDiskWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   Before you can delete a replication pair-consistent group, make sure that no replication pairs exist in the group.
     *   * *   The replication pair-consistent group that you want to delete must be in the **Created** (`created`), **Creation Failed** (`create_failed`), **Stopped** (`stopped`), **Failovered** (`failovered`), **Deleting** (`deleting`), **Deletion Failed** (`delete_failed`), or **Invalid** (`invalid`) state.
     *   *
     * @param DeleteDiskReplicaGroupRequest $request DeleteDiskReplicaGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDiskReplicaGroupResponse DeleteDiskReplicaGroupResponse
     */
    public function deleteDiskReplicaGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaGroupId)) {
            $query['ReplicaGroupId'] = $request->replicaGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDiskReplicaGroup',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   Before you can delete a replication pair-consistent group, make sure that no replication pairs exist in the group.
     *   * *   The replication pair-consistent group that you want to delete must be in the **Created** (`created`), **Creation Failed** (`create_failed`), **Stopped** (`stopped`), **Failovered** (`failovered`), **Deleting** (`deleting`), **Deletion Failed** (`delete_failed`), or **Invalid** (`invalid`) state.
     *   *
     * @param DeleteDiskReplicaGroupRequest $request DeleteDiskReplicaGroupRequest
     *
     * @return DeleteDiskReplicaGroupResponse DeleteDiskReplicaGroupResponse
     */
    public function deleteDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   Only replication pairs that are in the **Stopped** (`stopped`), **Invalid** (`invalid`), or **Failovered** (`failovered`) state can be deleted. This operation deletes only replication pairs. The primary and secondary disks in the deleted replication pairs are retained.
     *   * *   To delete a replication pair, you must call this operation in the region where the primary disk is located. After the replication pair is deleted, the functionality limits are lifted from the primary and secondary disks. For example, you can attach the secondary disk, resize the disk, or read data from or write data to the disk.
     *   *
     * @param DeleteDiskReplicaPairRequest $request DeleteDiskReplicaPairRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDiskReplicaPairResponse DeleteDiskReplicaPairResponse
     */
    public function deleteDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaPairId)) {
            $query['ReplicaPairId'] = $request->replicaPairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   Only replication pairs that are in the **Stopped** (`stopped`), **Invalid** (`invalid`), or **Failovered** (`failovered`) state can be deleted. This operation deletes only replication pairs. The primary and secondary disks in the deleted replication pairs are retained.
     *   * *   To delete a replication pair, you must call this operation in the region where the primary disk is located. After the replication pair is deleted, the functionality limits are lifted from the primary and secondary disks. For example, you can attach the secondary disk, resize the disk, or read data from or write data to the disk.
     *   *
     * @param DeleteDiskReplicaPairRequest $request DeleteDiskReplicaPairRequest
     *
     * @return DeleteDiskReplicaPairResponse DeleteDiskReplicaPairResponse
     */
    public function deleteDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEnterpriseSnapshotPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteEnterpriseSnapshotPolicyResponse
     */
    public function deleteEnterpriseSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEnterpriseSnapshotPolicy',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEnterpriseSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   You can use one of the following methods to check the responses:
     *   *     *   Method 1: Use `NextToken` to configure the query token. Set the value to the `NextToken` value that is returned in the last call to the DescribeDisks operation. Then, use `MaxResults` to specify the maximum number of entries to return on each page.
     *   *     *   Method 2: Use `PageSize` to specify the number of entries to return on each page and then use `PageNumber` to specify the number of the page to return.
     *   *         You can use only one of the preceding methods. If a large number of entries are to be returned, we recommend that you use method 1. When `NextToken` is specified, `PageSize` and `PageNumber` do not take effect and `TotalCount` in the response is invalid.
     *   * *   A disk that has the multi-attach feature enabled can be attached to multiple instances. You can query the attachment information of the disk based on the `Attachment` values in the response.
     *   * When you call an API operation by using Alibaba Cloud CLI, you must specify request parameter values of different data types in the required formats. For more information, see [Parameter format overview](~~110340~~).
     *   *
     * @param DescribeDedicatedBlockStorageClusterDisksRequest $request DescribeDedicatedBlockStorageClusterDisksRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDedicatedBlockStorageClusterDisksResponse DescribeDedicatedBlockStorageClusterDisksResponse
     */
    public function describeDedicatedBlockStorageClusterDisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbscId)) {
            $query['DbscId'] = $request->dbscId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDedicatedBlockStorageClusterDisks',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedBlockStorageClusterDisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can use one of the following methods to check the responses:
     *   *     *   Method 1: Use `NextToken` to configure the query token. Set the value to the `NextToken` value that is returned in the last call to the DescribeDisks operation. Then, use `MaxResults` to specify the maximum number of entries to return on each page.
     *   *     *   Method 2: Use `PageSize` to specify the number of entries to return on each page and then use `PageNumber` to specify the number of the page to return.
     *   *         You can use only one of the preceding methods. If a large number of entries are to be returned, we recommend that you use method 1. When `NextToken` is specified, `PageSize` and `PageNumber` do not take effect and `TotalCount` in the response is invalid.
     *   * *   A disk that has the multi-attach feature enabled can be attached to multiple instances. You can query the attachment information of the disk based on the `Attachment` values in the response.
     *   * When you call an API operation by using Alibaba Cloud CLI, you must specify request parameter values of different data types in the required formats. For more information, see [Parameter format overview](~~110340~~).
     *   *
     * @param DescribeDedicatedBlockStorageClusterDisksRequest $request DescribeDedicatedBlockStorageClusterDisksRequest
     *
     * @return DescribeDedicatedBlockStorageClusterDisksResponse DescribeDedicatedBlockStorageClusterDisksResponse
     */
    public function describeDedicatedBlockStorageClusterDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedBlockStorageClusterDisksWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * >  The Dedicated Block Storage Cluster feature is available only in the China (Heyuan), Indonesia (Jakarta), and China (Shenzhen) regions.
     *   * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are included in the filter conditions.
     *   * *   We recommend that you use NextToken and MaxResults to perform paged queries. We recommend that you use MaxResults to specify the maximum number of entries to return in each request. The return value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results. When you call the DescribeDedicatedBlockStorageClusters operation to retrieve a new page of results, set NextToken to the NextToken value that is returned in the previous call and specify MaxResults to limit the number of entries returned.
     *   *
     * @param DescribeDedicatedBlockStorageClustersRequest $request DescribeDedicatedBlockStorageClustersRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDedicatedBlockStorageClustersResponse DescribeDedicatedBlockStorageClustersResponse
     */
    public function describeDedicatedBlockStorageClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dedicatedBlockStorageClusterId)) {
            $query['DedicatedBlockStorageClusterId'] = $request->dedicatedBlockStorageClusterId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->azoneId)) {
            $body['AzoneId'] = $request->azoneId;
        }
        if (!Utils::isUnset($request->category)) {
            $body['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeDedicatedBlockStorageClusters',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDedicatedBlockStorageClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * >  The Dedicated Block Storage Cluster feature is available only in the China (Heyuan), Indonesia (Jakarta), and China (Shenzhen) regions.
     *   * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are included in the filter conditions.
     *   * *   We recommend that you use NextToken and MaxResults to perform paged queries. We recommend that you use MaxResults to specify the maximum number of entries to return in each request. The return value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results. When you call the DescribeDedicatedBlockStorageClusters operation to retrieve a new page of results, set NextToken to the NextToken value that is returned in the previous call and specify MaxResults to limit the number of entries returned.
     *   *
     * @param DescribeDedicatedBlockStorageClustersRequest $request DescribeDedicatedBlockStorageClustersRequest
     *
     * @return DescribeDedicatedBlockStorageClustersResponse DescribeDedicatedBlockStorageClustersResponse
     */
    public function describeDedicatedBlockStorageClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedBlockStorageClustersWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   *
     * @param DescribeDiskEventsRequest $request DescribeDiskEventsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiskEventsResponse DescribeDiskEventsResponse
     */
    public function describeDiskEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskCategory)) {
            $query['DiskCategory'] = $request->diskCategory;
        }
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiskEvents',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiskEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   *
     * @param DescribeDiskEventsRequest $request DescribeDiskEventsRequest
     *
     * @return DescribeDiskEventsResponse DescribeDiskEventsResponse
     */
    public function describeDiskEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskEventsWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * *   CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   * *   Up to 400 monitoring data entries can be returned at a time. An error is returned if the value calculated based on the following formula is greater than 400: `(EndTime - StartTime)/Period`.
     *   * *   You can query the monitoring data collected in the last three days. An error is returned if the time specified by `StartTime` is more than three days prior to the current time.
     *   *
     * @param DescribeDiskMonitorDataRequest $request DescribeDiskMonitorDataRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiskMonitorDataResponse DescribeDiskMonitorDataResponse
     */
    public function describeDiskMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiskMonitorData',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiskMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * *   CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   * *   Up to 400 monitoring data entries can be returned at a time. An error is returned if the value calculated based on the following formula is greater than 400: `(EndTime - StartTime)/Period`.
     *   * *   You can query the monitoring data collected in the last three days. An error is returned if the time specified by `StartTime` is more than three days prior to the current time.
     *   *
     * @param DescribeDiskMonitorDataRequest $request DescribeDiskMonitorDataRequest
     *
     * @return DescribeDiskMonitorDataResponse DescribeDiskMonitorDataResponse
     */
    public function describeDiskMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskMonitorDataWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   *
     * @param DescribeDiskMonitorDataListRequest $request DescribeDiskMonitorDataListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiskMonitorDataListResponse DescribeDiskMonitorDataListResponse
     */
    public function describeDiskMonitorDataListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskIds)) {
            $query['DiskIds'] = $request->diskIds;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiskMonitorDataList',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiskMonitorDataListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   *
     * @param DescribeDiskMonitorDataListRequest $request DescribeDiskMonitorDataListRequest
     *
     * @return DescribeDiskMonitorDataListResponse DescribeDiskMonitorDataListResponse
     */
    public function describeDiskMonitorDataList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskMonitorDataListWithOptions($request, $runtime);
    }

    /**
     * To perform a paged query, set the MaxResults and NextToken parameters.
     *   * During a paged query, when you call the DescribeDiskReplicaGroups operation to retrieve the first page of results, set `MaxResults` to specify the maximum number of entries to return in the call. The return value of `NextToken` is a pagination token, which can be used in the next call to retrieve a new page of results. When you call the DescribeDiskReplicaGroups operation to retrieve a new page of results, set `NextToken` to the `NextToken` value returned in the previous call and set MaxResults to specify the maximum number of entries to return in this call.
     *   *
     * @param DescribeDiskReplicaGroupsRequest $request DescribeDiskReplicaGroupsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiskReplicaGroupsResponse DescribeDiskReplicaGroupsResponse
     */
    public function describeDiskReplicaGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupIds)) {
            $query['GroupIds'] = $request->groupIds;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->site)) {
            $query['Site'] = $request->site;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiskReplicaGroups',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiskReplicaGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To perform a paged query, set the MaxResults and NextToken parameters.
     *   * During a paged query, when you call the DescribeDiskReplicaGroups operation to retrieve the first page of results, set `MaxResults` to specify the maximum number of entries to return in the call. The return value of `NextToken` is a pagination token, which can be used in the next call to retrieve a new page of results. When you call the DescribeDiskReplicaGroups operation to retrieve a new page of results, set `NextToken` to the `NextToken` value returned in the previous call and set MaxResults to specify the maximum number of entries to return in this call.
     *   *
     * @param DescribeDiskReplicaGroupsRequest $request DescribeDiskReplicaGroupsRequest
     *
     * @return DescribeDiskReplicaGroupsResponse DescribeDiskReplicaGroupsResponse
     */
    public function describeDiskReplicaGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskReplicaGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDiskReplicaPairProgressRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDiskReplicaPairProgressResponse
     */
    public function describeDiskReplicaPairProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaPairId)) {
            $query['ReplicaPairId'] = $request->replicaPairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiskReplicaPairProgress',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiskReplicaPairProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   When you call this operation for a specific region, if the primary disk (source disk) or secondary disk (destination disk) of a replication pair resides in the region, information about the replication pair is displayed in the response.
     *   * *   If you want to perform a paged query, configure the `NextToken` and `MaxResults` parameters. During a paged query, when you call the DescribeDiskReplicaPairs operation to retrieve the first page of results, set `MaxResults` to limit the maximum number of entries to return in the call. The return value of NextToken is a pagination token, which can be used in the next call to retrieve a new page of results. When you call the DescribeDiskReplicaPairs operation to retrieve a new page of results, set NextToken to the NextToken value returned in the previous call and set MaxResults to specify the maximum number of entries to return in this call.
     *   *
     * @param DescribeDiskReplicaPairsRequest $request DescribeDiskReplicaPairsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiskReplicaPairsResponse DescribeDiskReplicaPairsResponse
     */
    public function describeDiskReplicaPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pairIds)) {
            $query['PairIds'] = $request->pairIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaGroupId)) {
            $query['ReplicaGroupId'] = $request->replicaGroupId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->site)) {
            $query['Site'] = $request->site;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDiskReplicaPairs',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiskReplicaPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   When you call this operation for a specific region, if the primary disk (source disk) or secondary disk (destination disk) of a replication pair resides in the region, information about the replication pair is displayed in the response.
     *   * *   If you want to perform a paged query, configure the `NextToken` and `MaxResults` parameters. During a paged query, when you call the DescribeDiskReplicaPairs operation to retrieve the first page of results, set `MaxResults` to limit the maximum number of entries to return in the call. The return value of NextToken is a pagination token, which can be used in the next call to retrieve a new page of results. When you call the DescribeDiskReplicaPairs operation to retrieve a new page of results, set NextToken to the NextToken value returned in the previous call and set MaxResults to specify the maximum number of entries to return in this call.
     *   *
     * @param DescribeDiskReplicaPairsRequest $request DescribeDiskReplicaPairsRequest
     *
     * @return DescribeDiskReplicaPairsResponse DescribeDiskReplicaPairsResponse
     */
    public function describeDiskReplicaPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskReplicaPairsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDisksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeDisksResponse
     */
    public function describeDisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->diskIds)) {
            $query['DiskIds'] = $request->diskIds;
        }
        if (!Utils::isUnset($request->diskName)) {
            $query['DiskName'] = $request->diskName;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $query['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDisks',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDisksRequest $request
     *
     * @return DescribeDisksResponse
     */
    public function describeDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnterpriseSnapshotPolicyRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeEnterpriseSnapshotPolicyResponse
     */
    public function describeEnterpriseSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->diskIds)) {
            $query['DiskIds'] = $request->diskIds;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->policyIds)) {
            $query['PolicyIds'] = $request->policyIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnterpriseSnapshotPolicy',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnterpriseSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## Usage notes
     *   * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLensServiceStatusResponse DescribeLensServiceStatusResponse
     */
    public function describeLensServiceStatusWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeLensServiceStatus',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLensServiceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * CloudLens for EBS is in invitational preview in the China (Hangzhou), China (Shanghai), China (Zhangjiakou), China (Shenzhen), and China (Hong Kong) regions. To use the feature, [submit a ticket](https://workorder-intl.console.aliyun.com/#/ticket/createIndex).
     *   *
     * @return DescribeLensServiceStatusResponse DescribeLensServiceStatusResponse
     */
    public function describeLensServiceStatus()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLensServiceStatusWithOptions($runtime);
    }

    /**
     * @param DescribeMetricDataRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMetricDataResponse
     */
    public function describeMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dimensions)) {
            $query['Dimensions'] = $request->dimensions;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMetricData',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribePairDrillsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribePairDrillsResponse
     */
    public function describePairDrillsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drillId)) {
            $query['DrillId'] = $request->drillId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pairId)) {
            $query['PairId'] = $request->pairId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePairDrills',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePairDrillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeReplicaGroupDrillsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeReplicaGroupDrillsResponse
     */
    public function describeReplicaGroupDrillsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->drillId)) {
            $query['DrillId'] = $request->drillId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeReplicaGroupDrills',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReplicaGroupDrillsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DescribeSolutionInstanceConfigurationRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeSolutionInstanceConfigurationResponse
     */
    public function describeSolutionInstanceConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->solutionId)) {
            $query['SolutionId'] = $request->solutionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSolutionInstanceConfiguration',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSolutionInstanceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   The replication pair-consistent group must be in the **One-time Syncing** (`manual_syncing`), **Syncing** (`syncing`), **Normal** (`normal`), **Stopping** (`stopping`), **Stop Failed** (`stop_failed`), **Stopped** (`stopped`), **In Failover** (`failovering`), **Failover Failed** (`failover_failed`), or **Failovered** (`failovered`) state.
     *   * *   After a failover is performed, the replication pair-consistent group enters the **Failovered** (`failovered`) state.
     *   * *   Before you perform a failover, make sure that the first full data synchronization is completed between the primary site and secondary site.
     *   *
     * @param FailoverDiskReplicaGroupRequest $request FailoverDiskReplicaGroupRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return FailoverDiskReplicaGroupResponse FailoverDiskReplicaGroupResponse
     */
    public function failoverDiskReplicaGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaGroupId)) {
            $query['ReplicaGroupId'] = $request->replicaGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FailoverDiskReplicaGroup',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FailoverDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   The replication pair-consistent group must be in the **One-time Syncing** (`manual_syncing`), **Syncing** (`syncing`), **Normal** (`normal`), **Stopping** (`stopping`), **Stop Failed** (`stop_failed`), **Stopped** (`stopped`), **In Failover** (`failovering`), **Failover Failed** (`failover_failed`), or **Failovered** (`failovered`) state.
     *   * *   After a failover is performed, the replication pair-consistent group enters the **Failovered** (`failovered`) state.
     *   * *   Before you perform a failover, make sure that the first full data synchronization is completed between the primary site and secondary site.
     *   *
     * @param FailoverDiskReplicaGroupRequest $request FailoverDiskReplicaGroupRequest
     *
     * @return FailoverDiskReplicaGroupResponse FailoverDiskReplicaGroupResponse
     */
    public function failoverDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->failoverDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   The replication pair for which you want to enable failover cannot be in the **Invalid** (`invalid`) or **Deleted** (`deleted`) state.
     *   * *   After a failover is performed, the replication pair enters the **Failovered** (`failovered`) state.
     *   *
     * @param FailoverDiskReplicaPairRequest $request FailoverDiskReplicaPairRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return FailoverDiskReplicaPairResponse FailoverDiskReplicaPairResponse
     */
    public function failoverDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaPairId)) {
            $query['ReplicaPairId'] = $request->replicaPairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FailoverDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FailoverDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   The replication pair for which you want to enable failover cannot be in the **Invalid** (`invalid`) or **Deleted** (`deleted`) state.
     *   * *   After a failover is performed, the replication pair enters the **Failovered** (`failovered`) state.
     *   *
     * @param FailoverDiskReplicaPairRequest $request FailoverDiskReplicaPairRequest
     *
     * @return FailoverDiskReplicaPairResponse FailoverDiskReplicaPairResponse
     */
    public function failoverDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->failoverDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * @param GetDiskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetDiskResponse
     */
    public function getDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDisk',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDiskRequest $request
     *
     * @return GetDiskResponse
     */
    public function getDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDiskWithOptions($request, $runtime);
    }

    /**
     * Specify at least one of the following parameters or parameter pairs in a request to determine a query object:
     *   * *   `ResourceId.N`
     *   * *   `Tag.N` parameter pair (`Tag.N.Key` and `Tag.N.Value`)
     *   * If you set `Tag.N` and `ResourceId.N` at the same time, the EBS resources that match both the parameters are returned.
     *   *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Specify at least one of the following parameters or parameter pairs in a request to determine a query object:
     *   * *   `ResourceId.N`
     *   * *   `Tag.N` parameter pair (`Tag.N.Key` and `Tag.N.Value`)
     *   * If you set `Tag.N` and `ResourceId.N` at the same time, the EBS resources that match both the parameters are returned.
     *   *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to modify the information of a dedicated block storage cluster. The information includes the name and description of the cluster.
     *   *
     * @param ModifyDedicatedBlockStorageClusterAttributeRequest $request ModifyDedicatedBlockStorageClusterAttributeRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDedicatedBlockStorageClusterAttributeResponse ModifyDedicatedBlockStorageClusterAttributeResponse
     */
    public function modifyDedicatedBlockStorageClusterAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dbscId)) {
            $query['DbscId'] = $request->dbscId;
        }
        if (!Utils::isUnset($request->dbscName)) {
            $query['DbscName'] = $request->dbscName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDedicatedBlockStorageClusterAttribute',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDedicatedBlockStorageClusterAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify the information of a dedicated block storage cluster. The information includes the name and description of the cluster.
     *   *
     * @param ModifyDedicatedBlockStorageClusterAttributeRequest $request ModifyDedicatedBlockStorageClusterAttributeRequest
     *
     * @return ModifyDedicatedBlockStorageClusterAttributeResponse ModifyDedicatedBlockStorageClusterAttributeResponse
     */
    public function modifyDedicatedBlockStorageClusterAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedBlockStorageClusterAttributeWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   The replication pair-consistent group must be in the **Created** (`created`) or **Stopped** (`stopped`) state.
     *   *
     * @param ModifyDiskReplicaGroupRequest $request ModifyDiskReplicaGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDiskReplicaGroupResponse ModifyDiskReplicaGroupResponse
     */
    public function modifyDiskReplicaGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->RPO)) {
            $query['RPO'] = $request->RPO;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaGroupId)) {
            $query['ReplicaGroupId'] = $request->replicaGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDiskReplicaGroup',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   The replication pair-consistent group must be in the **Created** (`created`) or **Stopped** (`stopped`) state.
     *   *
     * @param ModifyDiskReplicaGroupRequest $request ModifyDiskReplicaGroupRequest
     *
     * @return ModifyDiskReplicaGroupResponse ModifyDiskReplicaGroupResponse
     */
    public function modifyDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   Only replication pairs that are in the **Created** (`created`) or **Stopped** (`stopped`) state can have their names or descriptions modified.
     *   *
     * @param ModifyDiskReplicaPairRequest $request ModifyDiskReplicaPairRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDiskReplicaPairResponse ModifyDiskReplicaPairResponse
     */
    public function modifyDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->pairName)) {
            $query['PairName'] = $request->pairName;
        }
        if (!Utils::isUnset($request->RPO)) {
            $query['RPO'] = $request->RPO;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaPairId)) {
            $query['ReplicaPairId'] = $request->replicaPairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   Only replication pairs that are in the **Created** (`created`) or **Stopped** (`stopped`) state can have their names or descriptions modified.
     *   *
     * @param ModifyDiskReplicaPairRequest $request ModifyDiskReplicaPairRequest
     *
     * @return ModifyDiskReplicaPairResponse ModifyDiskReplicaPairResponse
     */
    public function modifyDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * Period is the time interval between data retrieval points. When set to 60 (minute interval), a maximum of 1440 data points can be returned; when set to 3600 (hour interval), a maximum of 744 data points can be returned; and when set to 86400 (day interval), a maximum of 366 data points can be returned.
     *   *
     * @param QueryDedicatedBlockStorageClusterInventoryDataRequest $request QueryDedicatedBlockStorageClusterInventoryDataRequest
     * @param RuntimeOptions                                        $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDedicatedBlockStorageClusterInventoryDataResponse QueryDedicatedBlockStorageClusterInventoryDataResponse
     */
    public function queryDedicatedBlockStorageClusterInventoryDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->dbscId)) {
            $body['DbscId'] = $request->dbscId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDedicatedBlockStorageClusterInventoryData',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDedicatedBlockStorageClusterInventoryDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Period is the time interval between data retrieval points. When set to 60 (minute interval), a maximum of 1440 data points can be returned; when set to 3600 (hour interval), a maximum of 744 data points can be returned; and when set to 86400 (day interval), a maximum of 366 data points can be returned.
     *   *
     * @param QueryDedicatedBlockStorageClusterInventoryDataRequest $request QueryDedicatedBlockStorageClusterInventoryDataRequest
     *
     * @return QueryDedicatedBlockStorageClusterInventoryDataResponse QueryDedicatedBlockStorageClusterInventoryDataResponse
     */
    public function queryDedicatedBlockStorageClusterInventoryData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDedicatedBlockStorageClusterInventoryDataWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   The replication pair-consistent group from which you want to remove a replication pair must be in the **Created** (`created`), **Stopped** (`stopped`), or **Invalid** (`invalid`) state.
     *   *
     * @param RemoveDiskReplicaPairRequest $request RemoveDiskReplicaPairRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveDiskReplicaPairResponse RemoveDiskReplicaPairResponse
     */
    public function removeDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaGroupId)) {
            $query['ReplicaGroupId'] = $request->replicaGroupId;
        }
        if (!Utils::isUnset($request->replicaPairId)) {
            $query['ReplicaPairId'] = $request->replicaPairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   The replication pair-consistent group from which you want to remove a replication pair must be in the **Created** (`created`), **Stopped** (`stopped`), or **Invalid** (`invalid`) state.
     *   *
     * @param RemoveDiskReplicaPairRequest $request RemoveDiskReplicaPairRequest
     *
     * @return RemoveDiskReplicaPairResponse RemoveDiskReplicaPairResponse
     */
    public function removeDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   The replication pair-consistent group for which you want to enable reverse replication must be in the **Failovered** (`failovered`) state. You can call the `FailoverDiskReplicaPair` operation to enable failover.
     *   * *   Before a reverse replication is performed, the primary disks must be detached from its associated Elastic Compute Service (ECS) instance and must be in the Unattached state. You can call the [DetachDisk](~~25516~~) operation to detach the disks.
     *   * *   After you enable reverse replication, you must call the `StartDiskReplicaPair` operation again to enable the async replication feature before data can be replicated from the original secondary disks to the original primary disks.
     *   * *   You can set the ReverseReplicate parameter to false to cancel the **Failovered** (`failovered`) state and restore the original replication direction.
     *   *
     * @param ReprotectDiskReplicaGroupRequest $request ReprotectDiskReplicaGroupRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ReprotectDiskReplicaGroupResponse ReprotectDiskReplicaGroupResponse
     */
    public function reprotectDiskReplicaGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaGroupId)) {
            $query['ReplicaGroupId'] = $request->replicaGroupId;
        }
        if (!Utils::isUnset($request->reverseReplicate)) {
            $query['ReverseReplicate'] = $request->reverseReplicate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReprotectDiskReplicaGroup',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReprotectDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   The replication pair-consistent group for which you want to enable reverse replication must be in the **Failovered** (`failovered`) state. You can call the `FailoverDiskReplicaPair` operation to enable failover.
     *   * *   Before a reverse replication is performed, the primary disks must be detached from its associated Elastic Compute Service (ECS) instance and must be in the Unattached state. You can call the [DetachDisk](~~25516~~) operation to detach the disks.
     *   * *   After you enable reverse replication, you must call the `StartDiskReplicaPair` operation again to enable the async replication feature before data can be replicated from the original secondary disks to the original primary disks.
     *   * *   You can set the ReverseReplicate parameter to false to cancel the **Failovered** (`failovered`) state and restore the original replication direction.
     *   *
     * @param ReprotectDiskReplicaGroupRequest $request ReprotectDiskReplicaGroupRequest
     *
     * @return ReprotectDiskReplicaGroupResponse ReprotectDiskReplicaGroupResponse
     */
    public function reprotectDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reprotectDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   The replication pair for which you want to enable reverse replication must be in the **Failovered** (`failovered`) state. You can call the [FailoverDiskReplicaPair](~~354358~~) operation to enable failover.
     *   * *   The primary disk must be detached from its associated Elastic Compute Service (ECS) instance and is in the Unattached state. You can call the [DetachDisk](~~25516~~) operation to detach the disk.
     *   * *   After you enable reverse replication, you must call the [StartDiskReplicaPair](~~354205~~) operation again to activate the replication pair before data can be replicated from the original secondary disk to the original primary disk.
     *   * *   You can set the ReverseReplicate parameter to false to cancel the **Failovered** (`failovered`) state and restore the original replication direction.
     *   *
     * @param ReprotectDiskReplicaPairRequest $request ReprotectDiskReplicaPairRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ReprotectDiskReplicaPairResponse ReprotectDiskReplicaPairResponse
     */
    public function reprotectDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaPairId)) {
            $query['ReplicaPairId'] = $request->replicaPairId;
        }
        if (!Utils::isUnset($request->reverseReplicate)) {
            $query['ReverseReplicate'] = $request->reverseReplicate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReprotectDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReprotectDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   The replication pair for which you want to enable reverse replication must be in the **Failovered** (`failovered`) state. You can call the [FailoverDiskReplicaPair](~~354358~~) operation to enable failover.
     *   * *   The primary disk must be detached from its associated Elastic Compute Service (ECS) instance and is in the Unattached state. You can call the [DetachDisk](~~25516~~) operation to detach the disk.
     *   * *   After you enable reverse replication, you must call the [StartDiskReplicaPair](~~354205~~) operation again to activate the replication pair before data can be replicated from the original secondary disk to the original primary disk.
     *   * *   You can set the ReverseReplicate parameter to false to cancel the **Failovered** (`failovered`) state and restore the original replication direction.
     *   *
     * @param ReprotectDiskReplicaPairRequest $request ReprotectDiskReplicaPairRequest
     *
     * @return ReprotectDiskReplicaPairResponse ReprotectDiskReplicaPairResponse
     */
    public function reprotectDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reprotectDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   If you set the `OneShot` to `false`, the replication pair-consistent group must be in the **Created** (`created` ), **Synchronizing** (`syncing` ), **Normal** (`normal` ), or **Stopped** (`stopped`) state.
     *   * *   If you set `OneShot` to `true`, the replication pair-consistent group must be in the **Created** (`created` ), **One-time Syncing** (`manual_syncing` ), or **Stopped** (`stopped`) state. The time interval between two consecutive one-time synchronizations must be longer than one half of the recovery point objective (RPO).
     *   * *   After a replication pair-consistent group is activated, the group enters the **Initial Syncing** (`initial_syncing`) state and the system performs the first async replication to replicate all data from the primary disks to secondary disks.
     *   *
     * @param StartDiskReplicaGroupRequest $request StartDiskReplicaGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDiskReplicaGroupResponse StartDiskReplicaGroupResponse
     */
    public function startDiskReplicaGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->oneShot)) {
            $query['OneShot'] = $request->oneShot;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaGroupId)) {
            $query['ReplicaGroupId'] = $request->replicaGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDiskReplicaGroup',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   If you set the `OneShot` to `false`, the replication pair-consistent group must be in the **Created** (`created` ), **Synchronizing** (`syncing` ), **Normal** (`normal` ), or **Stopped** (`stopped`) state.
     *   * *   If you set `OneShot` to `true`, the replication pair-consistent group must be in the **Created** (`created` ), **One-time Syncing** (`manual_syncing` ), or **Stopped** (`stopped`) state. The time interval between two consecutive one-time synchronizations must be longer than one half of the recovery point objective (RPO).
     *   * *   After a replication pair-consistent group is activated, the group enters the **Initial Syncing** (`initial_syncing`) state and the system performs the first async replication to replicate all data from the primary disks to secondary disks.
     *   *
     * @param StartDiskReplicaGroupRequest $request StartDiskReplicaGroupRequest
     *
     * @return StartDiskReplicaGroupResponse StartDiskReplicaGroupResponse
     */
    public function startDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   Only replication pairs that are in the **Created** (`created`) or **Stopped** (`stopped`) state can be activated.
     *   * *   After a replication pair is activated, it enters the **Initial Syncing** (`initial_syncing`) state and the system performs the first asynchronous replication to replicate all data from the primary disk to the secondary disk.
     *   *
     * @param StartDiskReplicaPairRequest $request StartDiskReplicaPairRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDiskReplicaPairResponse StartDiskReplicaPairResponse
     */
    public function startDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->oneShot)) {
            $query['OneShot'] = $request->oneShot;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaPairId)) {
            $query['ReplicaPairId'] = $request->replicaPairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   Only replication pairs that are in the **Created** (`created`) or **Stopped** (`stopped`) state can be activated.
     *   * *   After a replication pair is activated, it enters the **Initial Syncing** (`initial_syncing`) state and the system performs the first asynchronous replication to replicate all data from the primary disk to the secondary disk.
     *   *
     * @param StartDiskReplicaPairRequest $request StartDiskReplicaPairRequest
     *
     * @return StartDiskReplicaPairResponse StartDiskReplicaPairResponse
     */
    public function startDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * After the disaster recovery drill is complete on the secondary disk, a pay-as-you-go drill disk that has the same capacity and category as the secondary disk is created in the zone where the secondary disk resides. The drill disk contains last-recovery-point data that can be used to test the completeness and correctness of applications.
     *   *
     * @param StartPairDrillRequest $request StartPairDrillRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StartPairDrillResponse StartPairDrillResponse
     */
    public function startPairDrillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->pairId)) {
            $query['PairId'] = $request->pairId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartPairDrill',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartPairDrillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After the disaster recovery drill is complete on the secondary disk, a pay-as-you-go drill disk that has the same capacity and category as the secondary disk is created in the zone where the secondary disk resides. The drill disk contains last-recovery-point data that can be used to test the completeness and correctness of applications.
     *   *
     * @param StartPairDrillRequest $request StartPairDrillRequest
     *
     * @return StartPairDrillResponse StartPairDrillResponse
     */
    public function startPairDrill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startPairDrillWithOptions($request, $runtime);
    }

    /**
     * After the disaster recovery drill is complete on secondary disks, a pay-as-you-go drill disk is created in the zone where the secondary disk of each replication pair resides. The latest-recovery-point data is restored to the drill disks to test the completeness and correctness of applications.
     *   *
     * @param StartReplicaGroupDrillRequest $request StartReplicaGroupDrillRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return StartReplicaGroupDrillResponse StartReplicaGroupDrillResponse
     */
    public function startReplicaGroupDrillWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartReplicaGroupDrill',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartReplicaGroupDrillResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After the disaster recovery drill is complete on secondary disks, a pay-as-you-go drill disk is created in the zone where the secondary disk of each replication pair resides. The latest-recovery-point data is restored to the drill disks to test the completeness and correctness of applications.
     *   *
     * @param StartReplicaGroupDrillRequest $request StartReplicaGroupDrillRequest
     *
     * @return StartReplicaGroupDrillResponse StartReplicaGroupDrillResponse
     */
    public function startReplicaGroupDrill($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startReplicaGroupDrillWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   The replication pair-consistent group that you want to stop must be in the **One-time Syncing** (`manual_syncing`), **Syncing** (`syncing`), **Normal** (`normal`), **Stopping** (`stopping`), **Stop Failed** (`stop_failed`), or **Stopped** (`stopped`) state.
     *   * *   When a replication pair-consistent group is stopped, it enters the **Stopped** (`stopped`) state. If a replication pair-consistent group cannot be stopped, the state of the group remains unchanged or changes to **Stop Failed** (`stop_failed`). In this case, try again later.
     *   *
     * @param StopDiskReplicaGroupRequest $request StopDiskReplicaGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDiskReplicaGroupResponse StopDiskReplicaGroupResponse
     */
    public function stopDiskReplicaGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaGroupId)) {
            $query['ReplicaGroupId'] = $request->replicaGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDiskReplicaGroup',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDiskReplicaGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which the replication pair-consistent group feature is available, see [Overview](~~314563~~).
     *   * *   The replication pair-consistent group that you want to stop must be in the **One-time Syncing** (`manual_syncing`), **Syncing** (`syncing`), **Normal** (`normal`), **Stopping** (`stopping`), **Stop Failed** (`stop_failed`), or **Stopped** (`stopped`) state.
     *   * *   When a replication pair-consistent group is stopped, it enters the **Stopped** (`stopped`) state. If a replication pair-consistent group cannot be stopped, the state of the group remains unchanged or changes to **Stop Failed** (`stop_failed`). In this case, try again later.
     *   *
     * @param StopDiskReplicaGroupRequest $request StopDiskReplicaGroupRequest
     *
     * @return StopDiskReplicaGroupResponse StopDiskReplicaGroupResponse
     */
    public function stopDiskReplicaGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDiskReplicaGroupWithOptions($request, $runtime);
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   Only replication pairs that are in the **Initial Syncing** (`initial_syncing`), **Syncing** (`syncing`), **One-time Syncing** (`manual_syncing`), or **Normal** (`normal`) state can be stopped. When a replication pair is stopped, it enters the Stopped (`stopped`) state. The secondary disk rolls back to the point in time when the last async replication was complete and drops all the data that is being replicated from the primary disk.
     *   *
     * @param StopDiskReplicaPairRequest $request StopDiskReplicaPairRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDiskReplicaPairResponse StopDiskReplicaPairResponse
     */
    public function stopDiskReplicaPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->replicaPairId)) {
            $query['ReplicaPairId'] = $request->replicaPairId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDiskReplicaPair',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDiskReplicaPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## [](#)Usage notes
     *   * *   For information about the regions in which async replication is available, see [Overview](~~314563~~).
     *   * *   Only replication pairs that are in the **Initial Syncing** (`initial_syncing`), **Syncing** (`syncing`), **One-time Syncing** (`manual_syncing`), or **Normal** (`normal`) state can be stopped. When a replication pair is stopped, it enters the Stopped (`stopped`) state. The secondary disk rolls back to the point in time when the last async replication was complete and drops all the data that is being replicated from the primary disk.
     *   *
     * @param StopDiskReplicaPairRequest $request StopDiskReplicaPairRequest
     *
     * @return StopDiskReplicaPairResponse StopDiskReplicaPairResponse
     */
    public function stopDiskReplicaPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDiskReplicaPairWithOptions($request, $runtime);
    }

    /**
     * Before you add tags to a resource, Alibaba Cloud checks the number of existing tags of the resource. If the maximum number of tags is reached, an error message is returned. For more information, see the "Tag limits" section in [Limits](~~25412~~).
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you add tags to a resource, Alibaba Cloud checks the number of existing tags of the resource. If the maximum number of tags is reached, an error message is returned. For more information, see the "Tag limits" section in [Limits](~~25412~~).
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UnbindEnterpriseSnapshotPolicyRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return UnbindEnterpriseSnapshotPolicyResponse
     */
    public function unbindEnterpriseSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->diskTargets)) {
            $query['DiskTargets'] = $request->diskTargets;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindEnterpriseSnapshotPolicy',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindEnterpriseSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * *   You can remove up to 20 tags at a time.
     *   * *   After a tag is removed from an EBS resource, the tag is automatically deleted if the tag is not added to any instance.
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can remove up to 20 tags at a time.
     *   * *   After a tag is removed from an EBS resource, the tag is automatically deleted if the tag is not added to any instance.
     *   *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateEnterpriseSnapshotPolicyRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateEnterpriseSnapshotPolicyResponse
     */
    public function updateEnterpriseSnapshotPolicyWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateEnterpriseSnapshotPolicyShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->crossRegionCopyInfo)) {
            $request->crossRegionCopyInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->crossRegionCopyInfo, 'CrossRegionCopyInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->retainRule)) {
            $request->retainRuleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->retainRule, 'RetainRule', 'json');
        }
        if (!Utils::isUnset($tmpReq->schedule)) {
            $request->scheduleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->schedule, 'Schedule', 'json');
        }
        if (!Utils::isUnset($tmpReq->specialRetainRules)) {
            $request->specialRetainRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->specialRetainRules, 'SpecialRetainRules', 'json');
        }
        if (!Utils::isUnset($tmpReq->storageRule)) {
            $request->storageRuleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->storageRule, 'StorageRule', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->crossRegionCopyInfoShrink)) {
            $query['CrossRegionCopyInfo'] = $request->crossRegionCopyInfoShrink;
        }
        if (!Utils::isUnset($request->desc)) {
            $query['Desc'] = $request->desc;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retainRuleShrink)) {
            $query['RetainRule'] = $request->retainRuleShrink;
        }
        if (!Utils::isUnset($request->scheduleShrink)) {
            $query['Schedule'] = $request->scheduleShrink;
        }
        if (!Utils::isUnset($request->specialRetainRulesShrink)) {
            $query['SpecialRetainRules'] = $request->specialRetainRulesShrink;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        if (!Utils::isUnset($request->storageRuleShrink)) {
            $query['StorageRule'] = $request->storageRuleShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnterpriseSnapshotPolicy',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEnterpriseSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param UpdateSolutionInstanceAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateSolutionInstanceAttributeResponse
     */
    public function updateSolutionInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->solutionInstanceId)) {
            $query['SolutionInstanceId'] = $request->solutionInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSolutionInstanceAttribute',
            'version'     => '2021-07-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSolutionInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
